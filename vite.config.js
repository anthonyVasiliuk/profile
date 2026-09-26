import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: [`resources/views/**/*`],
        }),
        tailwindcss(),
    ],
    server: {
        host: '0.0.0.0',
        port: 5173,
        cors: true,
        hmr: {
            host: 'localhost',
        },
        strictPort: true,
        https: process.env.NODE_ENV === 'production',
        watch: {
            // Polling is needed on Docker for Windows bind mounts, where every stat is slow: poll less often and skip
            // directories that never hold frontend sources.
            usePolling: process.env.CHOKIDAR_USEPOLLING === 'true',
            interval: 1000,
            ignored: ['**/vendor/**', '**/storage/**', '**/bootstrap/cache/**', '**/public/build/**', '**/public/vendor/**', '**/.vite/**'],
        },
    },
});
