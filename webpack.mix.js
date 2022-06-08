const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

<<<<<<< HEAD
<<<<<<< HEAD
mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
=======
mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/background.js', 'public/js')
    .js('resources/js/admin.js', 'public/js')
    .postCss('resources/css/style.css', 'public/css')
    .postCss('resources/css/admin.css', 'public/css')
    .postCss('resources/css/app.css', 'public/css', [
>>>>>>> origin/team2
=======
mix.js('resources/js/app.js', 'public/js')
        .js('resources/js/background.js', 'public/js')
        .js('resources/js/landing.js', 'public/js')
        .postCss('resources/css/style.css', 'public/css')
        .postCss('resources/css/landing.css', 'public/css')
        .postCss('resources/css/app.css', 'public/css', [
>>>>>>> origin/gullianoCss
    require('tailwindcss'),
    require('autoprefixer'),
]);
