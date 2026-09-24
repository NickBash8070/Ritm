const crypto = require('node:crypto');
const fs = require('node:fs');
const path = require('node:path');
const sharp = require('sharp');

const imageRoot = path.resolve(__dirname, '..', 'images');
const originalsRoot = path.join(imageRoot, 'original');
const webRoot = path.join(imageRoot, 'web');
const rasterExtensions = new Set(['.png', '.jpg', '.jpeg', '.webp', '.avif', '.tif', '.tiff']);
const responsiveWidths = [320, 480, 640, 800, 960, 1280, 1600, 1920, 2560];
const untouchedWebpLimit = 16 * 1024;
const profileVersion = 'webp91-94_avif85-88_v1';

function listFiles(directory) {
  if (!fs.existsSync(directory)) return [];
  const result = [];
  for (const entry of fs.readdirSync(directory, { withFileTypes: true })) {
    const absolute = path.join(directory, entry.name);
    if (entry.isDirectory()) result.push(...listFiles(absolute));
    else if (entry.isFile()) result.push(absolute);
  }
  return result;
}

function archiveOriginals() {
  fs.mkdirSync(originalsRoot, { recursive: true });
  const files = listFiles(imageRoot).filter(file => {
    const relative = path.relative(imageRoot, file).split(path.sep);
    return relative[0] !== 'original' && relative[0] !== 'web';
  });

  for (const source of files) {
    const relative = path.relative(imageRoot, source);
    const destination = path.join(originalsRoot, relative);
    fs.mkdirSync(path.dirname(destination), { recursive: true });

    if (fs.existsSync(destination)) {
      const sourceBytes = fs.readFileSync(source);
      const archivedBytes = fs.readFileSync(destination);
      if (!sourceBytes.equals(archivedBytes)) {
        throw new Error(`Original archive has a different file at images/${relative}`);
      }
      fs.rmSync(source);
    } else {
      fs.renameSync(source, destination);
    }
  }

  const directories = [];
  function collectDirectories(directory) {
    for (const entry of fs.readdirSync(directory, { withFileTypes: true })) {
      if (!entry.isDirectory()) continue;
      const child = path.join(directory, entry.name);
      if (child === originalsRoot || child === webRoot) continue;
      collectDirectories(child);
      directories.push(child);
    }
  }
  collectDirectories(imageRoot);
  for (const directory of directories.reverse()) {
    if (fs.readdirSync(directory).length === 0) fs.rmdirSync(directory);
  }
}

function extractLocalImagePath(url) {
  if (!url || /^(?:https?:)?\/\//i.test(url.trim())) return null;
  const cleanUrl = url.trim().replace(/&amp;/g, '&').split(/[?#]/, 1)[0];
  const marker = cleanUrl.toLowerCase().lastIndexOf('/images/');
  if (marker < 0) return null;

  let relative;
  try {
    relative = decodeURIComponent(cleanUrl.slice(marker + '/images/'.length));
  } catch {
    relative = cleanUrl.slice(marker + '/images/'.length);
  }
  relative = path.posix.normalize(relative.replace(/\\/g, '/'));
  if (!relative || relative === '.' || relative.startsWith('../') || path.posix.isAbsolute(relative)) return null;

  const absolute = path.resolve(originalsRoot, ...relative.split('/'));
  if (absolute !== originalsRoot && !absolute.startsWith(`${originalsRoot}${path.sep}`)) return null;
  return fs.existsSync(absolute) && fs.statSync(absolute).isFile() ? relative : null;
}

function getAttribute(tag, name) {
  const match = tag.match(new RegExp(`\\s${name}\\s*=\\s*(["'])([\\s\\S]*?)\\1`, 'i'));
  return match ? match[2] : null;
}

function setAttribute(tag, name, value) {
  const expression = new RegExp(`\\s${name}\\s*=\\s*(["'])([\\s\\S]*?)\\1`, 'i');
  const escaped = String(value).replace(/&/g, '&amp;').replace(/"/g, '&quot;');
  if (expression.test(tag)) return tag.replace(expression, ` ${name}="${escaped}"`);
  return tag.replace(/\s*\/?\s*>$/, end => ` ${name}="${escaped}"${end}`);
}

function collectReferences(html, stylesheets, scripts = []) {
  const references = new Map();
  const record = (url, role) => {
    const relative = extractLocalImagePath(url);
    if (!relative) return;
    if (!references.has(relative)) references.set(relative, new Set());
    references.get(relative).add(role);
  };

  for (const tag of html.matchAll(/<img\b[^>]*>/gi)) record(getAttribute(tag[0], 'src'), 'image');
  for (const tag of html.matchAll(/<meta\b[^>]*>/gi)) {
    const metaTag = tag[0];
    const identity = (getAttribute(metaTag, 'property') || getAttribute(metaTag, 'name') || '').toLowerCase();
    if (identity === 'og:image' || identity === 'twitter:image') record(getAttribute(metaTag, 'content'), 'social');
  }
  for (const tag of html.matchAll(/<a\b[^>]*>/gi)) record(getAttribute(tag[0], 'href'), 'download');
  for (const tag of html.matchAll(/<link\b[^>]*>/gi)) record(getAttribute(tag[0], 'href'), 'download');
  for (const script of html.matchAll(/<script\b[^>]*type=["']application\/ld\+json["'][^>]*>([\s\S]*?)<\/script>/gi)) {
    for (const image of script[1].matchAll(/["'](?:image|url)["']\s*:\s*["']([^"']+)["']/gi)) record(image[1], 'social');
  }
  const inlineStyles = [
    ...[...html.matchAll(/\bstyle\s*=\s*(["'])([\s\S]*?)\1/gi)].map(match => match[2]),
    ...[...html.matchAll(/<style\b[^>]*>([\s\S]*?)<\/style>/gi)].map(match => match[1])
  ];
  for (const css of [...stylesheets, ...inlineStyles]) {
    for (const match of css.matchAll(/url\(\s*(?:(["'])(.*?)\1|([^)]*?))\s*\)/gi)) {
      record(match[2] || match[3], 'css');
    }
  }

  // JavaScript-created images are invisible to the HTML/CSS scanner. Collect
  // literal image URLs and expand simple templates such as
  // `/images/new/icon/${file}` from their local filename arrays.
  for (const script of scripts) {
    const fileArrays = [...script.matchAll(/\b(?:const|let|var)\s+(\w*Files)\s*=\s*\[([\s\S]*?)\]/g)];
    for (const match of script.matchAll(/(['"`])(\/images\/[^'"`\s]*)\1/g)) {
      record(match[2], 'script');
    }
    for (const template of script.matchAll(/`([^`]*?)\$\{\s*(\w+)\s*\}([^`]*)`/g)) {
      const [, prefix, variable, suffix] = template;
      if (!prefix.includes('/images/')) continue;
      const variableDeclaration = fileArrays.find(array => array[1] === variable);
      const precedingFileArray = fileArrays.filter(array => array.index < template.index).at(-1);
      const declaration = variableDeclaration || precedingFileArray;
      if (!declaration) continue;
      for (const filename of declaration[2].matchAll(/(['"])(.*?)\1/g)) {
        if (!/\.(?:svg|png|jpe?g|webp|avif)$/i.test(filename[2])) continue;
        record(`${prefix}${filename[2]}${suffix}`, 'script');
      }
    }
  }
  return references;
}

function createFileStem(relative, sourcePath) {
  const basename = path.basename(relative, path.extname(relative));
  const readable = basename.normalize('NFKD').replace(/[\u0300-\u036f]/g, '')
    .toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-+|-+$/g, '').slice(0, 34) || 'image';
  const digest = crypto.createHash('sha1').update(relative).update(profileVersion)
    .update(fs.readFileSync(sourcePath)).digest('hex').slice(0, 10);
  return `${readable}-${digest}`;
}

function outputWidths(width) {
  return [...new Set([...responsiveWidths.filter(candidate => candidate < width), width])];
}

function publicImagePath(relative) {
  return `/images/${relative.split(path.sep).join('/')}`;
}

async function optimizeRaster(relative, roles) {
  const sourcePath = path.join(originalsRoot, ...relative.split('/'));
  const sourceBytes = fs.statSync(sourcePath).size;
  const extension = path.extname(relative).toLowerCase();
  const metadata = await sharp(sourcePath).metadata();

  if (extension === '.webp' && sourceBytes <= untouchedWebpLimit) {
    return { passthrough: true, sourceBytes, metadata };
  }

  const swappedOrientation = [5, 6, 7, 8].includes(metadata.orientation);
  const width = metadata.autoOrient?.width || (swappedOrientation ? metadata.height : metadata.width);
  const height = metadata.autoOrient?.height || (swappedOrientation ? metadata.width : metadata.height);
  if (!width || !height) throw new Error(`Could not read image dimensions for images/${relative}`);

  const alpha = Boolean(metadata.hasAlpha);
  const screenshot = extension === '.png' || /screen|portrait|phone|hand/i.test(relative);
  const stem = createFileStem(relative, sourcePath);
  const variants = [];
  const needsResponsiveVariants = roles.has('image') || roles.has('css') || roles.has('script');
  fs.mkdirSync(webRoot, { recursive: true });

  for (const variantWidth of needsResponsiveVariants ? outputWidths(width) : []) {
    const filename = `${stem}-${variantWidth}w`;
    const webpRelative = `web/${filename}.webp`;
    const avifRelative = `web/${filename}.avif`;
    const resize = { width: variantWidth, withoutEnlargement: true, kernel: sharp.kernel.lanczos3 };

    const webpPath = path.join(imageRoot, webpRelative);
    const avifPath = path.join(imageRoot, avifRelative);
    if (!fs.existsSync(webpPath) || fs.statSync(webpPath).size === 0) {
      await sharp(sourcePath).rotate().resize(resize).webp({
        quality: screenshot ? 94 : 91,
        alphaQuality: 100,
        effort: 6,
        smartSubsample: true
      }).toFile(webpPath);
    }

    if (!fs.existsSync(avifPath) || fs.statSync(avifPath).size === 0) {
      await sharp(sourcePath).rotate().resize(resize).avif({
        quality: screenshot ? 88 : 85,
        effort: 5,
        chromaSubsampling: screenshot ? '4:4:4' : '4:2:0'
      }).toFile(avifPath);
    }

    variants.push({ width: variantWidth, webp: webpRelative, avif: avifRelative });
  }

  const optimized = { sourceBytes, width, height, alpha, variants };
  if (roles.has('social')) {
    const socialRelative = `web/${stem}-social.jpg`;
    const socialPath = path.join(imageRoot, socialRelative);
    if (!fs.existsSync(socialPath) || fs.statSync(socialPath).size === 0) {
      let pipeline = sharp(sourcePath).rotate();
      if (alpha) pipeline = pipeline.flatten({ background: '#0e1318' });
      await pipeline.resize({ width: 1200, withoutEnlargement: true, kernel: sharp.kernel.lanczos3 })
        .jpeg({ quality: 91, mozjpeg: true, chromaSubsampling: '4:4:4' })
        .toFile(socialPath);
    }
    optimized.social = socialRelative;
  }
  return optimized;
}

async function prepareImages({ html, stylesheets, scripts = [] }) {
  archiveOriginals();
  const references = collectReferences(html, stylesheets, scripts);
  const manifest = new Map();

  for (const [relative, roles] of references) {
    const sourcePath = path.join(originalsRoot, ...relative.split('/'));
    const extension = path.extname(relative).toLowerCase();
    if (!rasterExtensions.has(extension)) {
      manifest.set(relative, { passthrough: true, roles: [...roles] });
      continue;
    }
    if (!roles.has('image') && !roles.has('css') && !roles.has('social') && !roles.has('script')) {
      manifest.set(relative, { passthrough: true, roles: [...roles] });
      continue;
    }
    const optimized = await optimizeRaster(relative, roles);
    manifest.set(relative, { ...optimized, roles: [...roles] });
  }
  removeUnreferencedGenerated(manifest);
  return manifest;
}

function removeUnreferencedGenerated(manifest) {
  const used = new Set(publicAssets(manifest).generated.map(relative => path.resolve(imageRoot, relative)));
  for (const file of listFiles(webRoot)) {
    if (!used.has(path.resolve(file))) fs.rmSync(file);
  }
  const directories = [];
  function collect(directory) {
    for (const entry of fs.readdirSync(directory, { withFileTypes: true })) {
      if (!entry.isDirectory()) continue;
      const child = path.join(directory, entry.name);
      collect(child);
      directories.push(child);
    }
  }
  if (fs.existsSync(webRoot)) collect(webRoot);
  for (const directory of directories.reverse()) {
    if (fs.readdirSync(directory).length === 0) fs.rmdirSync(directory);
  }
}

function responsiveSizes(className) {
  if (/\bhero-mockup\b/.test(className)) return '(max-width: 767px) 92vw, (max-width: 991px) 480px, 660px';
  if (/\bfeature-screen\b/.test(className)) return '(max-width: 767px) 78vw, (max-width: 991px) 38vw, 24vw';
  if (/\bfitjourney-image\b/.test(className)) return '(max-width: 767px) 84vw, (max-width: 991px) 42vw, 30vw';
  if (/\bworkout-thumbnail\b/.test(className)) return '(max-width: 767px) 100vw, 88vw';
  if (/\bavatar-group-item\b/.test(className)) return '48px';
  if (/\btestimonial-client-image\b/.test(className)) return '52px';
  if (/\btestimonial-star\b/.test(className)) return '116px';
  if (/\bdownload-banner-image\b/.test(className)) return '100vw';
  if (/\bcta-(?:first|second|third)-image\b/.test(className)) return '(max-width: 767px) 148px, 31vw';
  if (/\bmobile-frame-(?:image|top-content)\b/.test(className)) return '(max-width: 767px) 160px, 18.5vw';
  return '100vw';
}

function srcset(variants, format) {
  return variants.map(variant => `${publicImagePath(variant[format])} ${variant.width}w`).join(', ');
}

function rewriteHtmlImages(html, manifest) {
  for (const [relative, asset] of manifest) {
    if (asset.social) html = html.replaceAll(`/images/${relative}`, publicImagePath(asset.social));
  }
  html = html.replace(/<meta\b[^>]*>/gi, tag => {
    const identity = (getAttribute(tag, 'property') || getAttribute(tag, 'name') || '').toLowerCase();
    if (identity !== 'og:image' && identity !== 'twitter:image') return tag;
    const relative = extractLocalImagePath(getAttribute(tag, 'content'));
    const social = relative && manifest.get(relative)?.social;
    return social ? setAttribute(tag, 'content', publicImagePath(social)) : tag;
  });

  return html.replace(/<img\b[^>]*>/gi, tag => {
    const relative = extractLocalImagePath(getAttribute(tag, 'src'));
    const asset = relative && manifest.get(relative);
    if (!asset || asset.passthrough || !asset.variants?.length) return tag;

    const className = getAttribute(tag, 'class') || '';
    const isHero = /\bhero-mockup\b/.test(className);
    const sizes = responsiveSizes(className);
    tag = setAttribute(tag, 'src', publicImagePath(asset.variants.at(-1).webp));
    tag = setAttribute(tag, 'srcset', srcset(asset.variants, 'webp'));
    tag = setAttribute(tag, 'sizes', sizes);
    tag = setAttribute(tag, 'width', asset.width);
    tag = setAttribute(tag, 'height', asset.height);
    tag = setAttribute(tag, 'loading', isHero ? 'eager' : (getAttribute(tag, 'loading') || 'lazy'));
    tag = setAttribute(tag, 'decoding', 'async');
    if (isHero) tag = setAttribute(tag, 'fetchpriority', 'high');

    const avifSource = `<source type="image/avif" srcset="${srcset(asset.variants, 'avif')}" sizes="${sizes}">`;
    const webpSource = `<source type="image/webp" srcset="${srcset(asset.variants, 'webp')}" sizes="${sizes}">`;
    return `<picture class="ritm-image-picture">${avifSource}${webpSource}${tag}</picture>`;
  });
}

function rewriteCssImages(css, manifest) {
  return css.replace(/url\(\s*(?:(["'])(.*?)\1|([^)]*?))\s*\)/gi, (whole, quote, quotedUrl, bareUrl) => {
    const originalUrl = (quotedUrl || bareUrl || '').trim();
    const relative = extractLocalImagePath(originalUrl);
    const asset = relative && manifest.get(relative);
    if (!asset || asset.passthrough || !asset.variants?.length) return whole;
    const largestWebp = asset.variants.at(-1).webp;
    return `url("${publicImagePath(largestWebp)}")`;
  });
}

function appendResponsiveHeroBackground(css, manifest) {
  const asset = manifest.get('new/hero.jpg');
  if (!asset?.variants?.length) return css;
  const mobile = asset.variants.filter(variant => variant.width <= 960).at(-1) || asset.variants[0];
  return `${css}\n@media (max-width: 767px) { .hero-section::before { background-image: url("${publicImagePath(mobile.webp)}") !important; } }\n`;
}

function publicAssets(manifest) {
  const passthrough = [];
  const generated = [];
  for (const [relative, asset] of manifest) {
    if (asset.passthrough) passthrough.push(relative);
    for (const variant of asset.variants || []) {
      generated.push(variant.webp, variant.avif);
    }
    if (asset.social) generated.push(asset.social);
  }
  return { passthrough, generated: [...new Set(generated)] };
}

function summarize(manifest) {
  let sourceBytes = 0;
  let originalLargestWebpBytes = 0;
  let variantCount = 0;
  let rasterCount = 0;
  for (const asset of manifest.values()) {
    if (!asset.variants?.length) continue;
    rasterCount += 1;
    sourceBytes += asset.sourceBytes;
    variantCount += asset.variants.length * 2;
    const largest = asset.variants.at(-1);
    originalLargestWebpBytes += fs.statSync(path.join(imageRoot, largest.webp)).size;
  }
  const webBytes = listFiles(webRoot).reduce((sum, file) => sum + fs.statSync(file).size, 0);
  const savedPercent = sourceBytes ? Math.round((1 - originalLargestWebpBytes / sourceBytes) * 100) : 0;
  return { rasterCount, variantCount, sourceBytes, originalLargestWebpBytes, webBytes, savedPercent };
}

module.exports = {
  appendResponsiveHeroBackground,
  prepareImages,
  publicAssets,
  publicImagePath,
  rewriteCssImages,
  rewriteHtmlImages,
  summarize
};
