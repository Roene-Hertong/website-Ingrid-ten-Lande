import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/schilderijen.css',
                'resources/css/website-ingrid.css',
                'resources/js/app.js',
                'resources/js/schilderijen.js',
                'resources/js/website-ingrid.js'
            ],
            refresh: true,
        }),
    ],
});
