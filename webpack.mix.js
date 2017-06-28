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
    .styles([
        //Chỉ Chứa Những Thư Viện CSS Dùng Chung Cho Cả Frontend Và Backend
        'bower_components/bootstrap/dist/css/bootstrap.min.css',
        'bower_components/font-awesome/css/font-awesome.min.css',
    ], 'public/css/core.common.css')
    //CSS Frontend
    .sass('resources/assets/sass/frontend.scss','public/css')
    // .styles([
    //     'resources/assets/js/frontend.js'
    // ], 'public/js/frontend.js')
    .copy([
        'bower_components/bootstrap/fonts/**',
        'bower_components/font-awesome/fonts/**'
    ], 'public/fonts')

