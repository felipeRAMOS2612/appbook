import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/register-grade.js',
                'resources/css/register-grade.css',
                'resources/js/select-user-register-grade.js'
            ],
            refresh: true,
        }),
    ],
});
