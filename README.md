# Oproepjes Nederland

This repository contains the source code for the Oproepjes Nederland website.

## Prerequisites

- **PHP** 7.0 or newer for running the web pages.
- **Node.js** and **npm** to install front‑end dependencies and run Gulp tasks.
- **Gulp 4** is used from the local `node_modules` directory as defined in `package.json`.

## Installation

1. Install Node dependencies:

   ```bash
   npm install
   ```
Running this command installs front-end packages so you can rebuild the `js/vendor` directory and minified scripts.

2. Start the asset watcher and development server:

   ```bash
   npm start        # runs `gulp watch`
   ```

This command watches files, builds the `js/vendor` folder and launches BrowserSync on port 3000.

3. Configure your web server to serve this directory as the document root.
   For a quick setup you can use PHP’s built‑in server:

   ```bash
   php -S localhost:8000
   ```

   Browse to `http://localhost:8000` (or the port you configured) while `gulp watch` is running.

4. Cookie consent banner:
   The site includes a custom consent banner (`js/cookie-consent.js`).
   Visitors can enable statistics and marketing cookies or accept them all.
   The chosen preferences are stored in `localStorage` and analytics or
   marketing scripts are only loaded when allowed.

5. Analytics event tracking:
   Clicking the "Stuur gratis bericht" button on a profile page triggers a Google Analytics event when statistical cookies are accepted.

