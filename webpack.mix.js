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
    //Chỉ Chứa Những Thư Viện JS Dùng Chung Cho Cả Frontend Và Backend
    'bower_components/jquery/dist/jquery.min.js',
    'bower_components/bootstrap/dist/js/bootstrap.min.js',
], 'public/js/core.common.js')
    //Chỉ Chứa Những Thư Viện CSS Dùng Chung Cho Cả Frontend Và Backend
    .styles([
        'bower_components/bootstrap/dist/css/bootstrap.min.css',
        'bower_components/font-awesome/css/font-awesome.min.css',
    ], 'public/css/core.common.css')
    //CSS CORE FRONTEND
    .styles([
        'bower_components/nivo-slider/nivo-slider.css',
        'bower_components/owl.carousel/dist/assets/owl.carousel.min.css',
        'bower_components/owl.carousel/dist/assets/owl.theme.default.min.css'

    ],'public/css/core.frontend.css')
    //Chứa Javascript Điều Khiển Frontend
    .styles('resources/assets/js/scripts.js','public/js/scripts.js')
    //Chứa CSS Frontend
    .sass('resources/assets/sass/frontend.scss','public/css')
    //JAVASCRIPT CORE FRONTEND
    .styles([
        'bower_components/nivo-slider/jquery.nivo.slider.pack.js',
        'bower_components/owl.carousel/dist/owl.carousel.min.js',
    ], 'public/js/core.frontend.js')
    .copy([
        'bower_components/bootstrap/fonts/**',
        'bower_components/font-awesome/fonts/**'
    ], 'public/fonts')
    .copy([
        'bower_components/nivo-slider/themes',
    ],'public/css/themes',false)

