<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vip Digital hub - @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{asset('assets/admin/css/fontastic.css')}}">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('assets/admin/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('assets/admin/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('assets/admin/img/favicon.ico')}}">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        @stack('style')
</head>

<body>

    @include('admin.partials.header')
    @include('admin.partials.sidebar')
    @yield('main-containt')
    @include('admin.partials.footer')

    <script src="{{asset('assets/admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendor/popper.js/umd/popper.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendor/jquery.cookie/jquery.cookie.js')}}"></script>
    <script src="{{asset('assets/admin/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/charts-home.js')}}"></script>
    <!-- Main File-->
    <script src="{{asset('assets/admin/js/front.js')}}"></script>
    @stack('script')
</body>

</html>
