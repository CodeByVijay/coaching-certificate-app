
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- main header -->
        <header class="main-header header-four">
            <!-- Header-Top -->
            <div class="header-top bg-light-blue text-white">
                <div class="container-fluid">
                    <div class="top-inner">
                        <div class="top-left">
                            <p><i class="far fa-clock"></i> <b>Working Hours</b> : Manday - Friday, 08am - 05pm</p>
                            <p><i class="fas fa-phone"></i> <b>Hotline</b> : <a href="callto:+012(345)6789">+012 (345) 67 89</a></p>
                        </div>
                        <div class="top-right d-flex align-items-center">
                            <div class="social-style-two">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                            <ul class="top-menu">
                                <li><a href="#">Privacy Privacy</a></li>
                                <li><a href="#">Terms and Conditions</a></li>
                                <li><a href="{{route('contactUs')}}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header-Upper -->
            <div class="header-upper">
                <div class="container-fluid clearfix">

                    <div class="header-inner d-flex align-items-center justify-content-between">
                        <div class="logo-outer">
                            <div class="logo"><a href="{{url('/')}}"><img src="{{asset('public/assets/images/logos/2.png')}}" alt="Logo" title="Logo"></a></div>
                        </div>

                        <div class="nav-outer clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                   <div class="mobile-logo">
                                       <a href="#">
                                            <img src="{{asset('public/assets/images/logos/2.png')}}" alt="Logo" title="Logo">
                                       </a>
                                   </div>

                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class=""><a href="{{url('/')}}">home</a>

                                        </li>
                                        <li><a href="#about">About Us</a></li>
                                        <li class=""><a href="#feature">Feature</a>




                                        </li>
                                        <li class=""><a href="#whylearn">Why Join </a>
                                        </li>

                                        <li class=""><a href="#cource">Cource</a>
                                        </li>
                                        <li class=""><a href="#certificate">Certificate </a>




                                        </li>
                                        <li class="dropdown"><a href="{{route('contactUs')}}">Contact Us</a>

                                        </li>
                                    </ul>
                                </div>

                            </nav>
                            <!-- Main Menu End-->
                        </div>

                        <!-- Menu Button -->
                        <div class="menu-btns d-lg-flex d-none align-items-center">


                           <a href="{{route('student.register')}}" class="theme-btn">Register <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->
        </header>
        <!--End Hidden Sidebar -->

        <div class="form-back-drop"></div>

        <!-- Hidden Sidebar -->
        <section class="hidden-bar " id ="new">
            <div class="inner-box text-center">
                <div class="cross-icon"><span class="fa fa-times"></span></div>
                <div class="title">
                  <h4>Get Appointment</h4>
                </div>

                <!--Appointment Form-->
                <div class="appointment-form">
                    <form method="post" action="#">
                        <div class="form-group">
                            <input type="text" name="text" value="" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" value="" placeholder="Email Address" required>
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Message" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="theme-btn">Submit now</button>
                        </div>
                    </form>
                </div>



                <!--Social Icons-->
                <div class="social-style-one">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
        </section>
        <!--End Hidden Sidebar -->


