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
], '../js/core.common.js')
    //Chỉ Chứa Những Thư Viện CSS Dùng Chung Cho Cả Frontend Và Backend
    .styles([
        'bower_components/bootstrap/dist/css/bootstrap.min.css',
        'bower_components/font-awesome/css/font-awesome.min.css',
    ], '../css/core.common.css')

    //CSS CORE FRONTEND
    .styles([
        'bower_components/nivo-slider/nivo-slider.css',
        'bower_components/owl.carousel/dist/assets/owl.carousel.min.css',
        'bower_components/owl.carousel/dist/assets/owl.theme.default.min.css'

    ],'../css/core.frontend.css')

    //CSS CORE BACKEND
    .styles([
        'bower_components/AdminLTE/dist/css/AdminLTE.min.css',
        'bower_components/AdminLTE/dist/css/skins/skin-blue.min.css'
    ],'../css/core.backend.css')

    //CSS FRONTEND
    .sass('resources/assets/sass/frontend.scss','../../css/frontend.css')

    //JAVASCRIPT CONTROL FRONTEND
    .styles('resources/assets/js/scripts.js','../js/scripts.js')

    //JAVASCRIPT CORE FRONTEND
    .styles([
        'bower_components/nivo-slider/jquery.nivo.slider.pack.js',
        'bower_components/owl.carousel/dist/owl.carousel.min.js',
    ], '../js/core.frontend.js')

    //JAVASCRIPT CORE BACKEND
    .styles([
        'bower_components/AdminLTE/dist/js/app.min.js',
    ], '../js/core.backend.js')

    //LOGIN 1 JS
    .styles([
        'resources/assets/js/ulti.js',
        'resources/assets/js/login1.js',
    ], '../js/login.js')

    //LOGIN 1 CSS
    .styles([
        'resources/assets/sass/login1.scss',
    ], '../css/login.css')
    .copy([
        'bower_components/bootstrap/fonts/**',
        'bower_components/font-awesome/fonts/**'
    ], '../fonts')
    .copy([
        'bower_components/nivo-slider/themes',
    ],'../css/themes',false)

