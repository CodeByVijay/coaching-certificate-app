<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('public/assets/admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('public/assets/admin/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{ asset('public/assets/admin/css/fontastic.css') }}">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('public/assets/admin/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('public/assets/admin/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('public/assets/admin/img/favicon.ico') }}">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <div class="page login-page">
        <div class="container d-flex align-items-center">
            <div class="form-holder has-shadow">
                <div class="row">
                    <!-- Logo & Information Panel-->
                    <div class="col-lg-6">
                        <div class="info d-flex align-items-center">
                            <div class="content">
                                <div class="logo">
                                    <h1>Dashboard</h1>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Form Panel    -->
                    <div class="col-lg-6 bg-white">
                        <div class="form d-flex align-items-center">
                            <div class="content">

                                @if (session()->has('faild'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <p>{{ session()->get('faild') }}</p>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                <form action="{{ route('admin.login') }}" method="post" class="form-validate">
                                    @csrf
                                    <div class="form-group">
                                        <input id="login-username" type="text" name="email" required
                                            data-msg="Please enter your username" class="input-material">
                                        <label for="login-username" class="label-material">User Name</label>
                                    </div>
                                    <div class="form-group">
                                        <input id="login-password" type="password" name="password" required
                                            data-msg="Please enter your password" class="input-material">
                                        <label for="login-password" class="label-material">Password</label>
                                    </div><button type="submit" class="btn btn-primary">Login</button>
                                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                                </form>
                                {{-- <a href="#" class="forgot-pass">Forgot Password?</a><br><small>Do not have an account? </small><a href="signup.php" class="signup">Signup</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyrights text-center">
            <p>Design by <a href="vipdigitalhub.in" class="external">Vip Digital Hub </a>
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
            </p>
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('public/assets/admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('public/assets/admin/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('public/assets/admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/assets/admin/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('public/assets/admin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('public/assets/admin/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('public/assets/admin/js/charts-home.js') }}"></script>
    <!-- Main File-->
    <script src="{{ asset('public/assets/admin/js/front.js') }}"></script>
</body>

</html>
