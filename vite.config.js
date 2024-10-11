import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
 
export default defineConfig({
    plugins: [
        laravel([
            'resources/css/app.css',
            'resources/js/bootstrap.js',
        ]),
    ],
    // Hosted by wsl
    server: {
        hmr: {
            host: 'localhost',
        }
    }
});