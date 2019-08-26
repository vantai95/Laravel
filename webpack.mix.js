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

// Common

// Application
mix.sass('resources/sass/app.scss','public/css/app/app.css' )
    .styles([
        'resources/css/app/theme.css',
    ], 'public/css/app/theme.css')
    .styles([
        'resources/css/app/revolution/settings.css',
        'resources/css/app/revolution/layers.css',
        'resources/css/app/revolution/navigation.css',
    ], 'public/css/app/revolution.css')
    .scripts([
        'resources/js/app/vendor/jquery.min.js',
        'resources/js/app/vendor/bootstrap.min.js',
        'resources/js/app/vendor/function-check-viewport.js',
        'resources/js/app/vendor/slick.min.js',
        'resources/js/app/vendor/select2.full.min.js',
        'resources/js/app/vendor/imagesloaded.pkgd.min.js',
        'resources/js/app/vendor/jquery.mmenu.all.min.js',
        'resources/js/app/vendor/rellax.min.js',
        'resources/js/app/vendor/isotope.pkgd.min.js',
        'resources/js/app/vendor/bootstrap-notify.min.js',
        'resources/js/app/vendor/bootstrap-slider.js',
        'resources/js/app/vendor/in-view.min.js',
        'resources/js/app/vendor/countUp.js',
        'resources/js/app/vendor/animsition.min.js',
    ], 'public/js/app/vendor.js')
    .scripts([
        'resources/js/app/revolution/jquery.themepunch.tools.min.js',
        'resources/js/app/revolution/jquery.themepunch.revolution.min.js',
        'resources/js/app/revolution/revolution.extension.actions.min.js',
        'resources/js/app/revolution/revolution.extension.carousel.min.js',
        'resources/js/app/revolution/revolution.extension.kenburn.min.js',
        'resources/js/app/revolution/revolution.extension.layeranimation.min.js',
        'resources/js/app/revolution/revolution.extension.migration.min.js',
        'resources/js/app/revolution/revolution.extension.navigation.min.js',
        'resources/js/app/revolution/revolution.extension.parallax.min.js',
        'resources/js/app/revolution/revolution.extension.slideanims.min.js',
        'resources/js/app/revolution/revolution.extension.video.min.js',
    ], 'public/js/app/revolution.js')
    .scripts([
        'resources/js/app/theme/global.js',
        'resources/js/app/theme/config-banner-home-1.js',
        'resources/js/app/theme/config-mm-menu.js',
        'resources/js/app/theme/config-set-bg-blog-thumb.js',
        'resources/js/app/theme/config-isotope-product-home-1.js',
        'resources/js/app/theme/config-carousel-thumbnail.js',
        'resources/js/app/theme/config-carousel-product-quickview.js',
        'resources/js/app/theme/config-inview-counter-up.js',
        'resources/js/app/theme/config-carousel.js',
    ], 'public/js/app/theme.js')
    .copyDirectory('resources/images/app', 'public/images/app')
    .copyDirectory('resources/fonts/app', 'public/css/fonts');

// Admin
