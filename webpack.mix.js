const {mix} = require('laravel-mix');

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

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');
mix.styles([
    'bower_components/jquery/dist/jquery.min.js',
    'bower_components/bootstrap/dist/js/bootstrap.min.js',
    'node_modules/jquery.mmenu/dist/js/jquery.mmenu.min.js'
], 'public/js/core.js')
    .styles([
        'bower_components/bootstrap/dist/css/bootstrap.min.css',
        'bower_components/font-awesome/css/font-awesome.min.css',
        // menu1
        'node_modules/jquery.mmenu/dist/css/jquery.mmenu.all.css'
        //end menu1
    ], 'public/css/app.css')
    .sass('resources/assets/sass/frontend.scss','public/css')
    .sass('resources/assets/sass/menu1.scss','public/css')
    .styles([
        'resources/assets/js/scripts.js'
    ], 'public/js/scripts.js')
    .copy([
        'bower_components/bootstrap/fonts/**',
        'bower_components/font-awesome/fonts/**'
    ], 'public/fonts')
    .copy([
        //Nivo Slider JS
        'bower_components/owl.carousel/dist/owl.carousel.min.js'
    ], 'public/js')
    .copy([
        //Nivo Slider CSS
        'bower_components/owl.carousel/dist/assets/owl.carousel.min.css'
    ], 'public/css')

