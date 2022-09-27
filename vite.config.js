import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/admin.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
});
