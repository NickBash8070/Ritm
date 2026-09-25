const fs = require('node:fs');
const path = require('node:path');
const sharp = require('sharp');

const root = path.resolve(__dirname, '..');
const publicRoot = path.join(root, 'public');
const output = path.join(publicRoot, 'og', 'ritm-share.png');

const card = Buffer.from(`
<svg xmlns="http://www.w3.org/2000/svg" width="1200" height="630" viewBox="0 0 1200 630">
  <defs>
    <linearGradient id="base" x1="0" y1="0" x2="1" y2="1">
      <stop stop-color="#0D1118"/>
      <stop offset=".54" stop-color="#111923"/>
      <stop offset="1" stop-color="#11121B"/>
    </linearGradient>
    <radialGradient id="mintGlow">
      <stop stop-color="#72EAD4" stop-opacity=".3"/>
      <stop offset=".5" stop-color="#55CBBE" stop-opacity=".13"/>
      <stop offset="1" stop-color="#55CBBE" stop-opacity="0"/>
    </radialGradient>
    <radialGradient id="violetGlow">
      <stop stop-color="#B794EF" stop-opacity=".18"/>
      <stop offset="1" stop-color="#B794EF" stop-opacity="0"/>
    </radialGradient>
    <linearGradient id="mint" x1="0" y1="0" x2="1" y2="1">
      <stop stop-color="#91F5DE"/>
      <stop offset="1" stop-color="#62DCC8"/>
    </linearGradient>
  </defs>
  <rect width="1200" height="630" fill="url(#base)"/>
  <ellipse cx="600" cy="315" rx="450" ry="390" fill="url(#mintGlow)"/>
  <ellipse cx="940" cy="565" rx="340" ry="280" fill="url(#violetGlow)"/>
  <path d="M445 150h180c98 0 151 57 151 139 0 67-37 111-99 128l115 103H685l-96-84h-58v84h-86V150Zm86 73v139h93c42 0 66-24 66-70 0-44-24-69-66-69h-93Z" fill="url(#mint)" fill-rule="evenodd"/>
</svg>`);

async function build() {
  fs.mkdirSync(path.dirname(output), { recursive: true });
  await sharp(card)
    .png({ compressionLevel: 9, palette: true, quality: 96 })
    .toFile(output);

  const favicon = fs.readFileSync(path.join(publicRoot, 'favicon.svg'));
  await sharp(favicon).resize(32, 32).png().toFile(path.join(publicRoot, 'favicon-32.png'));
  await sharp(favicon).resize(180, 180).png().toFile(path.join(publicRoot, 'apple-touch-icon.png'));
  console.log(`Generated minimal social image and favicon assets in ${path.relative(root, publicRoot)}`);
}

build().catch(error => {
  console.error(error);
  process.exitCode = 1;
});
