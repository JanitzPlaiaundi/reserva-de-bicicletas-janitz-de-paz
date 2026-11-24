import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/login-page.css',
                'resources/css/theme/light.css',
                'resources/css/theme/dark.css',
                'resources/js/app.js',
                'resources/js/theme.js',
            ],
            refresh: true,
        }),
    ],
});