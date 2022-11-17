<!DOCTYPE html>
<html lang="zxx">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!--====== Title ======-->
    <title>Vip Digital Hub - @yield('title')</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="public/assets/images/favicon.png" type="image/x-icon">
    <!--====== Google Fonts ======-->
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700&family=Oswald:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!--====== Flaticon ======-->
    <link rel="stylesheet" href="{{asset('public/assets/css/flaticon.min.css')}}">
    <!--====== Font Awesome ======-->
    <link rel="stylesheet" href="{{asset('public/assets/css/font-awesome-5.9.0.min.css')}}">
    <!--====== Bootstrap ======-->
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap-4.5.3.min.css')}}">
    <!--====== Magnific Popup ======-->
    <link rel="stylesheet" href="{{asset('public/assets/css/magnific-popup.min.css')}}">
    <!--====== Nice Select ======-->
    <link rel="stylesheet" href="{{asset('public/assets/css/nice-select.min.css')}}">
    <!--====== jQuery UI ======-->
    <link rel="stylesheet" href="{{asset('public/assets/css/jquery-ui.min.css')}}">
    <!--====== Animate ======-->
    <link rel="stylesheet" href="{{asset('public/assets/css/animate.min.css')}}">
    <!--====== Slick ======-->
    <link rel="stylesheet" href="{{asset('public/assets/css/slick.min.css')}}">
    <!--====== Main Style ======-->
    <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
    <style>

        input[type=text] {
          border: 2px solid red;
          border-radius: 4px;
          width: 450px;
        }

        </style>
@stack('style')
</head>

<body>
@include('partials.header')
@yield('containt')
@include('partials.footer')



    <!--====== Jquery ======-->
    <script src="{{asset('public/assets/js/jquery-3.6.0.min.js')}}"></script>
    <!--====== Bootstrap ======-->
    <script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
    <!--====== Appear Js ======-->
    <script src="{{asset('public/assets/js/appear.min.js')}}"></script>
    <!--====== Slick ======-->
    <script src="{{asset('public/assets/js/slick.min.js')}}"></script>
    <!--====== jQuery UI ======-->
    <script src="{{asset('public/assets/js/jquery-ui.min.js')}}"></script>
    <!--====== Isotope ======-->
    <script src="{{asset('public/assets/js/isotope.pkgd.min.js')}}"></script>
    <!--====== Circle Progress bar ======-->
    <script src="{{asset('public/assets/js/circle-progress.min.js')}}"></script>
    <!--====== Images Loader ======-->
    <script src="{{asset('public/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <!--====== Nice Select ======-->
    <script src="{{asset('public/assets/js/jquery.nice-select.min.js')}}"></script>
    <!--====== Magnific Popup ======-->
    <script src="{{asset('public/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!--  WOW Animation -->
    <script src="{{asset('public/assets/js/wow.min.js')}}"></script>
    <!-- Custom script -->
    <script src="{{asset('public/assets/js/script.js')}}"></script>
@stack('script')


</body>

</html>
