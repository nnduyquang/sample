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
    //JS DÙNG CHUNG CHO FRONEND VÀ BACKEND
    'bower_components/jquery/dist/jquery.min.js',
    'bower_components/bootstrap/dist/js/bootstrap.min.js',
], '../js/core.common.js')

    //CSS DÙNG CHUNG CHO FRONTEND VÀ BACKEND
    .styles([
        'bower_components/bootstrap/dist/css/bootstrap.min.css',
        'bower_components/font-awesome/css/font-awesome.min.css',
    ], '../css/core.common.css')

    //CSS CORE FRONTEND
    .styles([
        'bower_components/nivo-slider/nivo-slider.css',
        'bower_components/owl.carousel/dist/assets/owl.carousel.min.css',
        'bower_components/owl.carousel/dist/assets/owl.theme.default.min.css',
        'bower_components/slick-carousel/slick/slick.css',
        'bower_components/wow/css/libs/animate.css'

    ], '../css/core.frontend.css').options({processCssUrls: false})

    //CSS CORE BACKEND
    .styles([
        'bower_components/AdminLTE/dist/css/AdminLTE.min.css',
        'bower_components/AdminLTE/dist/css/skins/skin-blue.min.css'
    ], '../css/core.backend.css')

    //CSS FRONTEND
    .sass('resources/assets/sass/frontend.scss', '../../css/frontend.css')

    //CSS BACKEND
    .sass('resources/assets/sass/backend.scss', '../../css/backend.css')

    //JS CONTROL FRONTEND
    .styles('resources/assets/js/scripts.js', '../js/scripts.js')
    //TEST
    .styles('resources/assets/js/fe.pagespeedinsight.js', '../js/fe.pagespeedinsight.js')

    //JS CORE FRONTEND
    .styles([
        'bower_components/nivo-slider/jquery.nivo.slider.pack.js',
        'bower_components/owl.carousel/dist/owl.carousel.min.js',
        'bower_components/slick-carousel/slick/slick.js',
        'bower_components/wow/dist/wow.min.js',
        'bower_components/waypoints/lib/noframework.waypoints.min.js',
        'bower_components/countUp.js/dist/countUp.min.js',

    ], '../js/core.frontend.js')

    //JS CORE BACKEND
    .styles([
        'bower_components/AdminLTE/dist/js/app.min.js',
    ], '../js/core.backend.js')

    //JS CONTROL BACKEND
    .styles([
        'resources/assets/js/be.news.js',
        'resources/assets/js/be.config.email.js'
    ], '../js/backend.js')

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
    ], '../css/themes', false)

// CKEDITOR CHỈ CHẠY ĐOẠN NÀY 1 LẦN
// ===================
// .copy('bower_components/ckeditor/adapters', '../js/ckeditor/adapters',false)
// .copy('bower_components/ckeditor/lang', '../js/ckeditor/lang',false)
// .copy('bower_components/ckeditor/skins', '../js/ckeditor/skins',false)
// .copy([
//     'bower_components/ckeditor/ckeditor.js',
//     'bower_components/ckeditor/config.js',
//     'bower_components/ckeditor/contents.css',
//     'bower_components/ckeditor/styles.js'
// ], '../js/ckeditor',false)
// .copy('bower_components/ckeditor/plugins', '../js/ckeditor/plugins',false)


