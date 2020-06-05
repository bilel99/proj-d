const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// Global
mix.js('resources/js/app.js', 'public/global/js')
    .sass('resources/sass/app.scss', 'public/global/css')

// Front
mix.js('resources/js/front/app.js', 'public/front/js')
    .sass('resources/sass/front/app.scss', 'public/front/css');