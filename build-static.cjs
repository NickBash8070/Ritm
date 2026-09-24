const fs = require('node:fs');
const path = require('node:path');
const esbuild = require('esbuild');
const {
  appendResponsiveHeroBackground,
  prepareImages,
  publicImagePath,
  publicAssets,
  rewriteCssImages,
  rewriteHtmlImages,
  summarize
} = require('./scripts/image-optimizer.cjs');

const root = __dirname;
const output = path.resolve(root, 'dist');
const expectedOutput = path.join(root, 'dist');

if (output !== expectedOutput || path.dirname(output) !== root) {
  throw new Error('Refusing to build outside the project dist directory.');
}

function listFiles(directory) {
  const files = [];
  for (const entry of fs.readdirSync(directory, { withFileTypes: true })) {
    const absolute = path.join(directory, entry.name);
    if (entry.isDirectory()) files.push(...listFiles(absolute));
    else if (entry.isFile()) files.push(absolute);
  }
  return files;
}

function renderPage() {
  let html = fs.readFileSync(path.join(root, 'index.php'), 'utf8');
  const header = fs.readFileSync(path.join(root, 'header_block.php'), 'utf8');
  const headerInclude = /<\?php\s+get_template_part\("header_block", ""\);\s*\?>/;
  const footerInclude = /<\?php\s+get_template_part\("footer_block", ""\);\s*\?>/;

  if (!headerInclude.test(html) || !footerInclude.test(html)) {
    throw new Error('The expected WordPress template includes were not found.');
  }

  html = html.replace(headerInclude, header);
  html = html.replace(
    footerInclude,
    '<script src="/js/jquery.min.js"></script><script src="/js/custom.js"></script>'
  );
  html = html.replace(/<\?php[\s\S]*?\?>/g, '');

  const cssVersion = fs.statSync(path.join(root, 'css', 'custom.css')).mtimeMs;
  return html.replace(
    '</head>',
    `<title>Ритм — сила внутри</title><link rel="stylesheet" href="/css/main.css"><link rel="stylesheet" href="/css/custom.css?v=${cssVersion}"></head>`
  );
}

function copyAsset(source, destination) {
  fs.mkdirSync(path.dirname(destination), { recursive: true });
  fs.copyFileSync(source, destination);
}

function rewriteCss(css, manifest, isCustomStylesheet) {
  let result = rewriteCssImages(css, manifest);
  if (isCustomStylesheet) {
    result = appendResponsiveHeroBackground(result, manifest);
  }
  return result;
}

function rewriteScriptImages(source, manifest) {
  const responsiveImages = {};
  for (const [relative, asset] of manifest) {
    if (!asset.roles?.includes('script') || !asset.variants?.length) continue;
    responsiveImages[`/images/${relative}`] = {
      src: publicImagePath(asset.variants.at(-1).webp),
      srcset: asset.variants.map(variant => `${publicImagePath(variant.webp)} ${variant.width}w`).join(', ')
    };
  }

  const initializer = `const ritmResponsiveImages = ${JSON.stringify(responsiveImages)};`;
  if (!source.includes('(() => {')) throw new Error('Could not find the custom script initializer.');
  source = source.replace('(() => {', `(() => {\n  ${initializer}`);

  const dynamicScreenSource = 'image.src = encodeURI(`/images/new/Новая папка/${file}`);';
  const responsiveScreenSource = [
    'const imagePath = `/images/new/Новая папка/${file}`;',
    'const responsiveSource = ritmResponsiveImages[imagePath];',
    'if (responsiveSource) {',
    '  image.src = responsiveSource.src;',
    '  image.srcset = responsiveSource.srcset;',
    "  image.sizes = '(max-width: 767px) 82vw, 28vw';",
    '} else {',
    '  image.src = encodeURI(imagePath);',
    '}'
  ].join('\n      ');
  if (!source.includes(dynamicScreenSource)) {
    throw new Error('Could not find the dynamic onboarding image source.');
  }
  return source.replace(dynamicScreenSource, responsiveScreenSource);
}

async function minifyStylesheet(source) {
  const result = await esbuild.transform(source, {
    loader: 'css',
    minify: true,
    target: 'esnext',
    legalComments: 'inline'
  });
  return result.code;
}

async function minifyScript(source) {
  const result = await esbuild.transform(source, {
    minify: true,
    target: 'es2018',
    legalComments: 'inline'
  });
  return result.code.length < source.length ? result.code : source;
}

async function build() {
  const sourceCssFiles = listFiles(path.join(root, 'css')).filter(file => file.endsWith('.css'));
  const stylesheetSources = sourceCssFiles.map(file => ({
    relative: path.relative(root, file),
    contents: fs.readFileSync(file, 'utf8')
  }));
  const originalHtml = renderPage();
  const scriptNames = ['custom.js', 'index.js', 'jquery.min.js'];
  const scriptSources = new Map(scriptNames.map(file => [
    file,
    fs.readFileSync(path.join(root, 'js', file), 'utf8')
  ]));
  const manifest = await prepareImages({
    html: originalHtml,
    stylesheets: stylesheetSources.map(stylesheet => stylesheet.contents),
    scripts: ['custom.js', 'index.js'].map(file => scriptSources.get(file))
  });

  let html = rewriteHtmlImages(originalHtml, manifest);
  const assetFiles = publicAssets(manifest);
  const stats = summarize(manifest);

  if (fs.existsSync(output)) fs.rmSync(output, { recursive: true, force: true });
  fs.mkdirSync(output, { recursive: true });

  for (const stylesheet of stylesheetSources) {
    const target = path.join(output, stylesheet.relative);
    const isCustom = path.basename(stylesheet.relative) === 'custom.css';
    const rewritten = rewriteCss(stylesheet.contents, manifest, isCustom);
    fs.mkdirSync(path.dirname(target), { recursive: true });
    fs.writeFileSync(target, await minifyStylesheet(rewritten), 'utf8');
  }

  const fontRoot = path.join(root, 'fonts');
  if (fs.existsSync(fontRoot)) {
    fs.cpSync(fontRoot, path.join(output, 'fonts'), { recursive: true });
  }

  for (const relative of assetFiles.passthrough) {
    const source = path.join(root, 'images', 'original', ...relative.split('/'));
    copyAsset(source, path.join(output, 'images', ...relative.split('/')));
  }
  for (const relative of assetFiles.generated) {
    const source = path.join(root, 'images', ...relative.split('/'));
    copyAsset(source, path.join(output, 'images', ...relative.split('/')));
  }

  const jsOutput = path.join(output, 'js');
  fs.mkdirSync(jsOutput, { recursive: true });
  for (const file of scriptNames) {
    const source = file === 'custom.js'
      ? rewriteScriptImages(scriptSources.get(file), manifest)
      : scriptSources.get(file);
    fs.writeFileSync(path.join(jsOutput, file), await minifyScript(source), 'utf8');
  }

  fs.writeFileSync(path.join(output, 'index.html'), html, 'utf8');

  const missingPublicAssets = [];
  const publicHtml = fs.readFileSync(path.join(output, 'index.html'), 'utf8');
  const checkPublicImage = value => {
    const url = value.trim().split(/\s+/, 1)[0].split(/[?#]/, 1)[0];
    if (!url.startsWith('/images/')) return;
    let decoded = url;
    try { decoded = decodeURIComponent(url); } catch {}
    const target = path.join(output, decoded.slice(1).split('/').join(path.sep));
    if (!fs.existsSync(target)) missingPublicAssets.push(url);
  };
  for (const match of publicHtml.matchAll(/(?:src|href|content|srcset)="([^"]+)"/gi)) {
    const value = match[1];
    if (match[0].startsWith('srcset=')) {
      for (const candidate of value.split(',')) checkPublicImage(candidate);
    } else {
      checkPublicImage(value);
    }
  }
  for (const script of publicHtml.matchAll(/<script\b[^>]*type=["']application\/ld\+json["'][^>]*>([\s\S]*?)<\/script>/gi)) {
    for (const image of script[1].matchAll(/["'](?:image|url)["']\s*:\s*["']([^"']+)["']/gi)) checkPublicImage(image[1]);
  }
  for (const stylesheet of sourceCssFiles) {
    const target = path.join(output, path.relative(root, stylesheet));
    const css = fs.readFileSync(target, 'utf8');
    for (const match of css.matchAll(/url\(\s*(?:(["'])(.*?)\1|([^)]*?))\s*\)/gi)) {
      const url = (match[2] || match[3] || '').trim().split(/[?#]/, 1)[0];
      if (!url.includes('/images/')) continue;
      const assetPath = url.startsWith('/')
        ? path.join(output, url.slice(1).split('/').join(path.sep))
        : path.resolve(path.dirname(target), url);
      if (!fs.existsSync(assetPath)) missingPublicAssets.push(url);
    }
  }
  if (missingPublicAssets.length) {
    throw new Error(`Missing generated image assets: ${[...new Set(missingPublicAssets)].join(', ')}`);
  }

  const missingCopiedAssets = [...assetFiles.passthrough, ...assetFiles.generated].filter(relative =>
    !fs.existsSync(path.join(output, 'images', ...relative.split('/')))
  );
  if (missingCopiedAssets.length) {
    throw new Error(`Missing copied image assets: ${[...new Set(missingCopiedAssets)].join(', ')}`);
  }

  console.log(`Built static site at ${path.relative(root, output)}`);
  console.log(`Images: ${stats.rasterCount} source files -> ${stats.variantCount} responsive variants; largest WebP copies are ${stats.savedPercent}% smaller (${(stats.sourceBytes / 1048576).toFixed(2)} MB -> ${(stats.originalLargestWebpBytes / 1048576).toFixed(2)} MB).`);
  console.log(`All responsive image variants occupy ${(stats.webBytes / 1048576).toFixed(2)} MB in source; unused image originals are kept outside dist.`);
}

build().catch(error => {
  console.error(error);
  process.exitCode = 1;
});
