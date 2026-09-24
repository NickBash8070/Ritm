# Ритм — сила внутри

Static Vercel export of the Ritm fitness landing page.

## Build

```sh
npm run build
```

The build renders `index.php` and `header_block.php` into `dist/index.html`, then copies the landing page styles, fonts, images, and browser scripts into `dist/`. WordPress-only PHP handlers and plugin files are not part of the deployment.

The published site is static. WordPress-backed actions, including form submissions that depend on the original WordPress installation, need a separate backend to work.
