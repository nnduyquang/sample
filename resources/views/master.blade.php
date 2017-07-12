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
    {{--{{ Html::style('css/core.frontend.css') }}--}}
    {{--{{ Html::style('css/core.backend.css') }}--}}
    {{ Html::style('css/frontend.css') }}
    @yield('styles')
</head>
<body>
<header id="header">

</header>
<div id="blurrMe">
    <div class="container">
        <div style="background-color: #1ba8ff" class="mobile header fixed-header navbar-fixed-top" role="navigation">
            <ul class="nav nav-pills pull-left">
                <li><a href="#" id="trigger"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
                <li style="padding: 10px 15px;color: white;font-weight: bolder">SMARTLINKS.VN</li>
            </ul>
            <div class="col-md-12 col-xs-12">
                <form id="searchForm" main-title="" search-input=""><input
                            placeholder="Tìm sản phẩm, danh mục hay thương hiệu..." autocomplete="off" name="q"
                            type="search" class="form-control" id="searchInput" is="iron-input"></form>
            </div>
        </div>
    </div>
    <div id="wrap-container">
        @yield('container')
    </div>
</div>
<div class="sidebar closed">
    <header>
        <div class="background-sidebar"><h2><a href="#" id="close"> <i class="fa fa-arrow-left" aria-hidden="true"></i></a></h2></div>
    </header>
    <ul>
        <li><a href="#"><i class="fa fa-home icon-sidebar" aria-hidden="true"></i>Trang Chủ</a></li>
        <li><a href="#"><i class="fa fa-list icon-sidebar" aria-hidden="true"></i>Danh Sách Ngành Hàng</a></li>
        <li><a href="#"><i class="fa fa-user-circle icon-sidebar" aria-hidden="true"></i>Quản Lý Tài Khoản</a></li>
    </ul>
    <div class="sidebar-sub-heading">HỖ TRỢ</div>
    <div class="sidebar-hotline">HOTLINE: <span class="sidebar-number">0907468264</span></div>
</div>

<div class="footer">
    {{--@include('frontend.footer.footer')--}}
</div>
{{ Html::script('js/core.common.js') }}
{{--{{ Html::script('js/core.frontend.js') }}--}}
{{ Html::script('js/scripts.js') }}
@yield('scripts')

</body>

</Html>