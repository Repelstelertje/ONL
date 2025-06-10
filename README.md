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

2. Start the asset watcher and development server:

   ```bash
   npm start        # runs `gulp watch`
   ```

   This command watches files, builds the `vendor` folder and launches BrowserSync on port 3000.

3. Configure your web server to serve this directory as the document root.
   For a quick setup you can use PHP’s built‑in server:

   ```bash
   php -S localhost:8000
   ```

   Browse to `http://localhost:8000` (or the port you configured) while `gulp watch` is running.

