<!DOCTYPE Html>
<Html lang="en-US" class="lang-en_US" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<meta http-equiv="content-type" content="text/Html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="">
    <meta name="description" content="@yield('description')">
    <meta name="viewport" content="width=device-width">
    {{ Html::style('css/core.common.css') }}
    {{--{{ Html::style('css/core.frontend.css') }}--}}
    {{ Html::style('css/frontend.css') }}
    @yield('styles')
</head>
<body>
<header id="header">

</header>
<div id="blurrMe">
    {{--@include('frontend.common.m-menu')--}}
    {{--@include('menu.menu')--}}
    @yield('slider')
    {{--<div id="wrap-container">--}}
        @yield('container')
    {{--</div>--}}
</div>
{{--@include('frontend.common.m-sidebar')--}}
<div class="footer">
    {{--@include('frontend.common.footer2')--}}
</div>
{{ Html::script('js/core.common.js') }}
{{--{{ Html::script('js/core.frontend.js') }}--}}
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@yield('scripts')
{{--<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>--}}
{{ Html::script('js/scripts.js') }}
<div class="callback hidden-lg hidden-md">
    <div class="phone_animation">
        <div class="phone_animation_circle"></div>
        <div class="phone_animation_circle_fill"></div>
        <a href="tel:02866830091" class="phone_animation_circle_fill_img"><i class="fa fa-phone" aria-hidden="true"></i></a>
    </div>
</div>
<!--Start of Tawk.to Script-->
<!--End of Tawk.to Script-->

<!-- Global Site Tag (gtag.js) - Google Analytics -->
</body>

</Html>