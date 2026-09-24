# Ритм — сила внутри

Static Vercel export of the Ritm fitness landing page.

## Build

```sh
npm ci
npm run build
```

The build renders `index.php` and `header_block.php` into `dist/index.html`. It moves the untouched image files into `images/original`, then generates responsive AVIF and WebP sizes for images used by the page in `images/web`. The browser chooses a suitable size for the current screen; social previews use a compressed JPEG. Unused originals stay archived and are not copied into `dist`.

Production CSS and JavaScript are minified into `dist`; their source files stay readable in `css/` and `js/`. The build copies only the page's referenced images, along with its styles, fonts, and browser scripts. WordPress-only PHP handlers and plugin files are not part of the deployment.

The published site is static. WordPress-backed actions, including form submissions that depend on the original WordPress installation, need a separate backend to work.
