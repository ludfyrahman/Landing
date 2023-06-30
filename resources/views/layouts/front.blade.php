<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from eduvibe.html.devsvibe.com/index-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Oct 2022 13:17:20 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Landing Page - SMK</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('fe_assets/img/favicons/apple-icon-')}}57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('fe_assets/img/favicons/apple-icon-')}}60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('fe_assets/img/favicons/apple-icon-')}}72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('fe_assets/img/favicons/apple-icon-')}}76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('fe_assets/img/favicons/apple-icon-11')}}4x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('fe_assets/img/favicons/apple-icon-12')}}0x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('fe_assets/img/favicons/apple-icon-14')}}4x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('fe_assets/img/favicons/apple-icon-15')}}2x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('fe_assets/img/favicons/apple-icon-18')}}0x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('fe_assets/img/favicons/android-icon-19')}}2x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('fe_assets/img/favicons/favicon-')}}32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('fe_assets/img/favicons/favicon-')}}96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('fe_assets/img/favicons/favicon-')}}16x16.png">
    <link rel="manifest" href="{{ asset('fe_assets/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('fe_assets/img/favicons/ms-icon-14')}}4x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&amp;family=Jost:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fe_assets/css/app.min.css')}}">
    <link rel="stylesheet" href="{{ asset('fe_assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('fe_assets/css/style.css')}}">
</head>
<body>
    <div class="preloader"><button class="as-btn style3 preloaderCls">Cancel Preloader</button>
        <div class="preloader-inner"><span class="loader"></span></div>
    </div>
    @include('includes.frontend.navbar')
    @include('includes.frontend.header')
    @yield('content-app')

    @include('includes.frontend.footer')


    <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>
    <!-- @include('includes.frontend.navbar')
    @include('includes.frontend.header')
    @yield('content-app')
    @include('includes.frontend.footer') -->

    <!-- JS
============================================ -->
    <script src="{{ asset('fe_assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('fe_assets/js/app.min.js')}}"></script>
    <script src="{{ asset('fe_assets/js/main.js')}}"></script>
</body>
</html>
