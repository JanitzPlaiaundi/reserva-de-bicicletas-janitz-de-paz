import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/theme/css/light.css',
                'resources/css/theme/css/dark.css',
                'resources/js/app.js',
                'resources/js/theme-init.js',
                'resources/js/theme.js'
            ],
            refresh: true,
        }),
    ],
});