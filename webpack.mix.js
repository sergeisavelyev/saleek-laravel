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
   'resources/assets/admin/plugins/fontawesome-free/css/all.min.css',
   'resources/assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
   'resources/assets/admin/dist/css/adminlte.min.css',
], 'public/assets/admin/css/main.css');

mix.scripts([
   'resources/assets/admin/plugins/jquery/jquery.min.js',
   'resources/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js',
   'resources/assets/admin/dist/js/adminlte.js',
   'resources/assets/admin/dist/js/demo.js',
], 'public/assets/admin/js/main.js');

mix.copyDirectory('resources/assets/admin/dist/img', 'public/assets/admin/img');
mix.copyDirectory('resources/assets/admin/plugins/fontawesome-free/webfonts', 'public/assets/admin/webfonts');

mix.styles([
    'resources/assets/front/lib/animate/animate.min.css',
    'resources/assets/front/lib/owlcarousel/assets/owl.carousel.min.css',
    'resources/assets/front/css/style.css',
], 'public/assets/front/css/main.css');

mix.scripts([
    'resources/assets/front/lib/easing/easing.min.js',
    'resources/assets/front/lib/owlcarousel/owl.carousel.min.js',
    'resources/assets/front/mail/jqBootstrapValidation.min.js',
    'resources/assets/front/mail/contact.js',
    'resources/assets/front/js/main.js',
], 'public/assets/front/scripts/main.js');

mix.copyDirectory('resources/assets/front/img', 'public/assets/front/img');

