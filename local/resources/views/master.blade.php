<!DOCTYPE Html>
<Html lang="en-US" class="lang-en_US" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<meta http-equiv="content-type" content="text/Html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Smartlinks</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1,initial-scale=1,user-scalable=no">
    {{ Html::style('css/core.common.css') }}
    {{ Html::style('css/core.frontend.css') }}
    {{--{{ Html::style('css/core.backend.css') }}--}}
    {{ Html::style('css/frontend.css') }}
    @yield('styles')
</head>
<body>
<header id="header">
</header>
<div id="blurrMe">
    @include('m-menu')
    {{--@include('menu1')--}}
    @include('menu2')
    @include('slider1')
    <div id="wrap-container">
        @yield('container')
    </div>
</div>
@include('m-sidebar')
<div class="footer">
    {{--@include('frontend.footer.footer')--}}
</div>
{{ Html::script('js/core.common.js') }}
{{ Html::script('js/core.frontend.js') }}
{{ Html::script('js/scripts.js') }}
@yield('scripts')

</body>

</Html>