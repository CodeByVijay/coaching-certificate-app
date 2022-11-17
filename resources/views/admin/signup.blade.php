<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student Registration</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/fontastic.css') }}">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/admin/img/favicon.ico') }}">
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
                    <h1>Student Registration</h1>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form class="form-validate" method="POST" action="{{route('student.post.register')}}">
                    @csrf
                    <div class="form-group">
                      <input id="register-fname" type="text" name="fname" required data-msg="Please enter your first name" value="{{old('fname')}}" class="input-material">
                      <label for="register-fname" class="label-material">First Name</label>
                      @error('fname')
                      <span class="text-danger">{{$message}}</span>
                      @enderror

                    </div>
                    <div class="form-group">
                        <input id="register-lname" type="text" name="lname" value="{{old('lname')}}" required data-msg="Please enter your last name" class="input-material" required>
                        <label for="register-lname" class="label-material">Last Name</label>
                        @error('lname')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                    <div class="form-group">
                      <input id="register-email" type="email" name="email" value="{{old('email')}}" required data-msg="Please enter a valid email address" class="input-material" required>
                      <label for="register-email" class="label-material">Email Address </label>
                      @error('email')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <input id="register-mobile" type="number" name="mobile" value="{{old('mobile')}}" required data-msg="Please enter your mobile number" class="input-material" required>
                      <label for="register-mobile" class="label-material">Mobile Number </label>
                      @error('mobile')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="form-group">
                        <input id="register-address" type="text" name="address" value="{{old('address')}}" required data-msg="Please enter your address" class="input-material" required>
                        <label for="register-address" class="label-material">Address </label>
                        @error('address')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                      </div>
                    <div class="form-group terms-conditions">
                      <input id="register-agree" name="registerAgree" type="checkbox" required value="1" data-msg="Your agreement is required" class="checkbox-template" required>
                      <label for="register-agree">Agree the terms and policy</label>
                    </div>
                    <div class="form-group">
                      <button id="regidter" type="submit" name="registerSubmit" class="btn btn-primary">Register</button>
                    </div>
                  </form>
                  <small>Already have an registered? </small><a href="{{route('home')}}" class="signup">Back To Home</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by <a href="#" class="external">VIP Digital Hub</a>

        </p>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('assets/admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/charts-home.js') }}"></script>
    <!-- Main File-->
    <script src="{{ asset('assets/admin/js/front.js') }}"></script>
</body>

</html>
