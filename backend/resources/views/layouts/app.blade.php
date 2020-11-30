<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no"/>
    <meta property="og:title" name="title" content="NoName"/>
    <title>@yield('title')</title>
    <meta name="resource-type" content="document"/>
    <meta name="code author" content="NoName"/>
    <meta name="author" itemprop="author" content="NoName"/>
    <meta itemprop="name" content="AiViet"/>
    <meta property="og:site_name" content="AiViet"/>
    <meta name="copyright" content="Copyright © © 2020 Ai Viet Group"/>
    <meta property="og:image" content="{{('uploads/image/logo/horizontal_logo_white.png')}}"/>
    <meta itemprop="thumbnailUrl" content="{{('uploads/image/logo/horizontal_logo_white.png')}}"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{('uploads/image/logo/logo_circle.png')}}"/>
    <link rel="icon" type="image/x-icon" href="{{('uploads/image/logo/logo_circle.png')}}"/>
    <link rel="canonical" href="{{route('index')}}"/>
    <meta property="og:url" content="{{route('index')}}"/>
    <meta property="og:type" content="article"/>
    <meta name="robots" content="index,follow"/>
    <meta name="Googlebot" content="index,follow"/>
    <meta property="og:locale" itemprop="inLanguage" content="vi_VN"/>
    <meta http-equiv="content-language" itemprop="inLanguage" content="vn"/>
    <meta name="language" content="vietnamese"/>
    <meta name="geo.position" content="10.8193471, 106.70200309999996"/>
    <meta name="geo.placename" content="TP HCM"/>
    <meta name="geo.region" content="VN-65"/>
    <meta content="Nation,Viet Nam,Việt Nam,VN" itemprop="articleSection" name="section"/>
    <script type="text/javascript">
        var urlRoot = "https://esm.com.vn/";
        var urlSite = "https://esm.com.vn/";
        var lang = "vn";
        var token = "3bcb8668f7e4647de1e48c54a3295c72d1785ca28c3a4d29a6edef1520c544b838a93db3";
        var _token = "FQ3fPcnl6dKC3oQ7t7zekHLl6bolGOeWzta5oPhG";
    </script>


    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Exo+2&family=Kanit&family=Lato:wght@700&display=swap"/>
    <link rel="stylesheet" href="{{asset('assets/css/templates/brandontext-font.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/templates/style.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/templates/theme.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/templates/blocks.style.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/templates/margins.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/templates/reset.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/templates/assets.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/templates/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/templates/stylesheet.css')}}"/>
    <link rel="stylesheet" href="{{asset("assets/css/templates/animation.css")}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/templates/fontawesome-all.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/templates/flaticon.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/js/fancybox/fancybox.css')}}"/>
    @yield('css')

</head>
<body class="dark">
@include('elements.header')

@yield('content')

@include('elements.footer')


<script type="text/javascript" src="{{asset('assets/js/jquery/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/site/jquery-migrate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/fancybox/fancybox.pack.js')}}"></script>
@yield('js')
<script type="text/javascript" src="{{asset('assets/js/site/mpp-frontend.js"')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/site/navigation.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/site/skip-link-focus-fix.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/site/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/site/main.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/site/parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/site/wp-embed.min.js')}}"></script>

</body>

</html>
