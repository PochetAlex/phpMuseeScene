import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'
export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/css/accueil.css', 'resources/css/apropos.css', 'resources/css/sceneDetails.css', 'resources/css/footer.css', 'resources/css/contact.css','resources/css/app.css',
                'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/' +
                'bootstrap'),
         }
     },
 });
