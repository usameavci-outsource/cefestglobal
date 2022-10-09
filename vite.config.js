import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/views/vendor/mail/html/themes/default.css',
                'resources/css/app.css',
                'resources/css/pages/contact.css',
                'resources/css/pages/index.css',
                'resources/css/pages/logistics.css',
                'resources/css/pages/technology.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
