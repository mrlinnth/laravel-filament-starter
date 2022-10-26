import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";
import react from "@vitejs/plugin-react";
import tsconfigPaths from 'vite-tsconfig-paths';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/admin.css",
                "resources/js/app.tsx"
            ],
            refresh: true,
        }),
        react(),
        tsconfigPaths()
    ],
});
