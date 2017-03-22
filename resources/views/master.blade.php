<!DOCTYPE Html>
<Html lang="en-US" class="lang-en_US" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<meta http-equiv="content-type" content="text/Html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Smartlinks</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    {{ Html::style('css/app.css') }}
    {{--{{ Html::style('css/banner/banner.css') }}--}}
    @yield('styles')
</head>
<body>
<header>
    <div>
        {{--@include('frontend.header.menu')--}}
    </div>
</header>
<div id="main-banner">
    @yield('slider')
</div>
<div class="">
    {{--@yield('container')--}}
</div>
<div class="footer">
    {{--@include('frontend.footer.footer')--}}
</div>
{{ Html::script('js/core.js') }}
@yield('scripts')
{{ Html::script('js/scripts.js') }}
</body>

</Html>