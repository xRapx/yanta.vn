import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import Inspect from 'vite-plugin-inspect'

export default defineConfig({
    plugins: [
        Inspect(),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'dist',
    },
    server: { 
        hmr: {
            host: 'localhost',
        },
    }, 
});
