import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { appendFile } from 'fs';

const path = require('path')

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.scss', 'resources/js/app.js', 'resources/ts/index.ts', 'resources/ts/env.d.ts'],
            name: "style",
            refresh: true,
        }),
    ],
    alias: {
        '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
      }
});
