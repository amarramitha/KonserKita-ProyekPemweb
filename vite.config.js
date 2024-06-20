import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/css/tiket.css', 'resources/js/tiket.js'],
            refresh: true,
        }),
    ],
});
