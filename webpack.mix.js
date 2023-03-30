const mix = require("laravel-mix");

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

mix.styles([
    'resources/assets/front/css/bootstrap.min.css',
    'resources/assets/front/css/font-awesome.css',
    'resources/assets/front/css/templatemo-hexashop.css',
    'resources/assets/front/css/owl-carousel.css',
    'resources/assets/front/css/lightbox.css',
], 'public/assets/front/css/main.css');

mix.scripts([
    'resources/assets/front/js/jquery-2.1.0.min.js',
    'resources/assets/front/js/popper.js',
    'resources/assets/front/js/bootstrap.min.js',
    'resources/assets/front/js/owl-carousel.js',
    'resources/assets/front/js/accordions.js',
    'resources/assets/front/js/datepicker.js',
    'resources/assets/front/js/scrollreveal.min.js',
    'resources/assets/front/js/waypoints.min.js',
    'resources/assets/front/js/jquery.counterup.min.js',
    'resources/assets/front/js/imgfix.min.js',
    'resources/assets/front/js/slick.js',
    'resources/assets/front/js/lightbox.js',
    'resources/assets/front/js/custom.js',
    'resources/assets/front/js/isotope.js',
], 'public/assets/front/scripts/main.js');

mix.copyDirectory('resources/assets/front/fonts', 'public/assets/front/fonts');
mix.copyDirectory('resources/assets/front/images', 'public/assets/front/img');

