// import { defineConfig } from "vite";
// import laravel from "laravel-vite-plugin";
// import vue from "@vitejs/plugin-vue";

// export default defineConfig({
//     plugins: [
//         vue(),
//         laravel({
//             input: [
//                 "resources/css/app.css",
//                 "resources/js/app.js",
//                 "resources/js/newapp.js",
//             ],
//             refresh: true,
//         }),
//     ],
// });

//note: inartia js and vuejs app.js commine
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";

import { defineConfig, splitVendorChunkPlugin } from "vite";
export default defineConfig({
    plugins: [
        splitVendorChunkPlugin(),
        vue(),

        laravel({
            input: [
                "resources/sass/app.scss",
                "resources/js/newapp.js",
                "resources/js/app.js",
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            vue: "vue/dist/vue.esm-bundler.js",
        },
    },
    build: {
        chunkSizeWarningLimit: 1600,
    },
});
