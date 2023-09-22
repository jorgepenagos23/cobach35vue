import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from "@vitejs/plugin-vue"
export default defineConfig({
    server: {
        port: 3000, // Cambia el puerto a 3000 u otro de tu elección


      },
      proxy: {
        '/api': 'http://localhost:8000', // Cambia el puerto a tu servidor local
      },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/main.js'],
            refresh: true,
        }),
        vue()
    ],
});
