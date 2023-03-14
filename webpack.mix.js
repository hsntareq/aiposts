/**
 * aiposts uses Laravel Mix for compiling assets.
 */

let mix = require("laravel-mix");
const tailwindcss = require('tailwindcss');

// Autloading jQuery to make it accessible to all the packages
mix.autoload({
    jquery: ["$", "window.jQuery", "jQuery"],
});

// Compile assets
mix.sass("assets/src/sass/styles.scss", "assets/css/styles.min.css");
mix.sass("assets/src/sass/editor.scss", "assets/css/editor.min.css");
mix.sass("assets/src/sass/front/admin.scss", "assets/css/front-admin.min.css");
mix.js("assets/src/js/backend.js", "assets/js/backend.min.js");
mix.js("assets/src/js/frontend.js", "assets/js/frontend.min.js");
mix.options({
    postCss: [
        tailwindcss('./tailwind.config.js')
    ],
});

mix.disableNotifications();
