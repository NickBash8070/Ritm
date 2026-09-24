const fs = require('node:fs');
const path = require('node:path');

const root = __dirname;
const output = path.resolve(root, 'dist');
const expectedOutput = path.join(root, 'dist');

if (output !== expectedOutput || path.dirname(output) !== root) {
  throw new Error('Refusing to build outside the project dist directory.');
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

if (fs.existsSync(output)) {
  fs.rmSync(output, { recursive: true, force: true });
}
fs.mkdirSync(output, { recursive: true });
fs.mkdirSync(path.join(output, 'js'), { recursive: true });
fs.writeFileSync(path.join(output, 'index.html'), renderPage(), 'utf8');

for (const directory of ['css', 'fonts', 'images']) {
  fs.cpSync(path.join(root, directory), path.join(output, directory), {
    recursive: true
  });
}

for (const file of ['custom.js', 'index.js', 'jquery.min.js']) {
  fs.copyFileSync(
    path.join(root, 'js', file),
    path.join(output, 'js', file)
  );
}

console.log(`Built static site at ${path.relative(root, output)}`);
