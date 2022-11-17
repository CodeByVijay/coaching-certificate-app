@extends('partials.app')
@section('title', 'Home Page')
@section('containt')
{{-- @if (session()->has('success'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <p>{{ session()->get('success') }}</p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif --}}
    <!-- Hero Section Start -->
    <section class="hero-section rel z-1 pt-150 rpt-135 pb-75 rpb-100">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-5">
                    <div class="hero-right-images text-lg-right wow fadeInUp delay-0-2s">
                        <img src="{{asset('assets/images/hero/1.jpg')}}" alt="Hero">
                    </div>
                </div>
                <div class="col-lg-1">


                </div>

                <div class="col-lg-6">
                    <div class="hero-content rpt-25 rmb-75">
                        <span class="sub-title style-two mb-20 wow fadeInUp delay-0-2s">Coaching & Speker</span>
                        <h1 class="mb-20 wow fadeInUp delay-0-4s">Welcome to <br>
                            Vip Digital Hub </h1>
                        <p class="wow fadeInUp delay-0-6s">Vip Digital Hub Coaching Institute in Balaghat . IT is Best
                            Computer Education Institute in balaghat. Vip Digital Hub Coaching Institute balaght Centers has
                            been conducting Training Classes from last 5 years. IT courses taught are Basics PHP , PYTHON
                            ,JAVA , C++ , C ETC </p>
                        <div class="hero-btn mt-30 wow fadeInUp delay-0-8s">
                            <a href="#" class="theme-btn">Get Your Free Course <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <span class="bg-text">coach</span>
    </section>
    <!-- Hero Section End -->



    <!-- Features Section Start -->
    <section class="features-section rel z-1 pt-80 pb-40 bg-blue text-white" id="feature">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-item wow fadeInUp delay-0-2s">
                        <div class="image">
                            <img src="{{asset('assets/images/features/icon1.png')}}" alt="Icon">
                        </div>
                        <div class="content">
                            <h4>Online Courses From Experts</h4>
                            <p> We offer help with online classes, assignment writing, dissertation writing, </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-item wow fadeInUp delay-0-4s">
                        <div class="image">
                            <img src="{{asset('assets/images/features/icon2.png')}}" alt="Icon">
                        </div>
                        <div class="content">
                            <h4>Over 500+ High Quality Topics</h4>
                            <p>We have the largest collection of essay topics and ideas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-item wow fadeInUp delay-0-6s">
                        <div class="image">
                            <img src="{{asset('assets/images/features/icon1.png')}}" alt="Icon">
                        </div>
                        <div class="content">
                            <h4>Event & Program Video Update</h4>
                            <p>Life Education has Providing to Training Event & skill development Program</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="rectangle-dots" src="{{asset('assets/images/shapes/rectangle-dots.png')}}" alt="Shape">
        <img class="circle-dots" src="{{asset('assets/images/shapes/circle-dots.png')}}" alt="Shape">
    </section>
    <!-- Features Section End -->


    <!-- Feature Section Start -->
    <section class="freature-section-six pt-120 rpt-90 pb-90 rpb-60" id="about">
        <div class="container">
            <div class="row large-gap mb-30">
                <div class="col-lg-6">
                    <div class="freature-six-left wow fadeInUp delay-0-2s">
                        <div class="section-title mb-30">
                            <span class="sub-title-three">About Us</span>
                            <h2>Experience to <span>Online</span> Learning Center</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="freature-six-right pt-55 rpt-0 wow fadeInUp delay-0-4s">
                        <p> Vip Digital Hub is the world’s #1 online bootcamp and one of the world’s leading certification
                            training providers. We partner with companies and individuals to address their unique needs,
                            providing training and coaching that helps working professionals achieve their career goals..
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="feature-six-item mt-30 wow fadeInUp delay-0-2s">
                        <div class="content">
                            <div class="icon">
                                <img src="{{asset('assets/images/features/feature-five-icon1.png')}}" alt="Icon">
                            </div>
                            <h5>Exclusive Courses</h5>
                            <p>Join exclusive courses based on your industry. No written Examination. Student need to submit
                                a research project report on the basis of specialization subject ...
                            </p>
                        </div>
                        <a href="#" class="read-more color-two">raed more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="feature-six-item wow fadeInUp delay-0-4s">
                        <div class="content">
                            <div class="icon">
                                <img src="{{asset('assets/images/features/feature-five-icon2.png')}}" alt="Icon">
                            </div>
                            <h5>Creative Advisors</h5>
                            <p> Creative Advisors is an art advisory and creative project management consultancy born out of
                                a desire to equitably provide great spaces with eve</p>
                        </div>
                        <a href="#" class="read-more color-two">raed more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="feature-six-item mt-30 wow fadeInUp delay-0-6s">
                        <div class="content">
                            <div class="icon">
                                <img src="{{asset('assets/images/features/feature-five-icon3.png')}}" alt="Icon">
                            </div>
                            <h5>Certifications</h5>
                            <p>Certifications are awarded by professional organizations to confirm that you have specific
                                knowledge or skills needed to do a job. Typically, you earn a ...</p>
                        </div>
                        <a href="#" class="read-more color-two">raed more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="feature-six-item wow fadeInUp delay-0-8s">
                        <div class="content">
                            <div class="icon">
                                <img src="{{asset('assets/images/features/feature-five-icon4.png')}}" alt="Icon">
                            </div>
                            <h5>Video Tutorials</h5>
                            <p>Video tutorials are the go-to instructional method for demonstrating a process or providing
                                step-by-step instructions. They're usually between 2-10 minutes long</p>
                        </div>
                        <a href="#" class="read-more color-two">raed more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section End -->


    <!-- Counter Start -->
    <div class="counter-section-three">
        <div class="container">
            <div class="counter-three-wrap bg-light-blue text-white">
                <div class="success-item">
                    <span class="count-text plus" data-speed="3000" data-stop="256">0</span>
                    <span>Students<br>Enrolled</span>
                </div>
                <div class="success-item">
                    <span class="count-text plus" data-speed="3000" data-stop="2456">0</span>
                    <span>Finished<br>Seasons</span>
                </div>
                <div class="success-item">
                    <span class="count-text percent" data-speed="3000" data-stop="99.9">0</span>
                    <span>Saticfaction<br>Rate</span>
                </div>
                <div class="success-item">
                    <span class="count-text plus" data-speed="3000" data-stop="2563">0</span>
                    <span>Experience<br>Instructors</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter End -->




    <!-- About Section Start -->
    <br>

    <section class="about-section pt-130 rpt-100" id="whylearn">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 ">
                    <div class="about-man rmb-75 wow fadeInLeft delay-0-2s">
                        <img src="{{asset('assets/images/about/1.png')}}" alt="Man">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-content rel z-2 pb-35 rpb-55 wow fadeInRight delay-0-2s">
                        <div class="section-title mb-10">
                            <span class="sub-title mb-15">Why Learn Vip Digital Hub</span>
                            <h2>Learn Anytime, Anywhere in Any Language for Free</h2>
                        </div>
                        <div class="about-features">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="feature-item">
                                        <div class="icon">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <div class="content">
                                            <h5>Personalized Mentoring & Support</h5>
                                            <p>1-on-1 mentoring, live classes, webinars, weekly feedback, peer</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="feature-item">
                                        <div class="icon">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <div class="content">
                                            <h5>Practical Experience</h5>
                                            <p>Hands-on labs and projects tackling real-world challenges. Great for your
                                                resumé and LinkedIn profile.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="feature-item">
                                        <div class="icon">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <div class="content">
                                            <h5>Best-in-Class Course Content</h5>
                                            <p>Designed by the industry for the industry so you can build job-ready skills.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="feature-item">
                                        <div class="icon">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <div class="content">
                                            <h5>Choice of Learning Styles</h5>
                                            <p>Self-paced and instructor-led options to suit your lifestyle, time, and
                                                learning needs.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-btns">
                            <a href="#" class="theme-btn style-two my-15">Learn more us <i
                                    class="fas fa-arrow-right"></i></a>
                            <a href="#" class="read-more">How it works <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <!-- About Section End -->
    <div class="container">
        <center>
            <h3> <br>
                Sample Certificate and instruction on how to check and Certificate Id
            </h3>
            <p>
                Please note candidate id and Certificate id start with CAN_</p>


            <img src="{{asset('assets/images/about/4.png')}}" alt="">
        </center>

    </div>




<!-- Advertise Area Start -->
<section class="advertise-area pb-30 rpb-70" id="certificate" >
    <div class="container">
       <div class="row">
           <div class="col-lg-6">
               <div class="advertise-item wow fadeInUp delay-0-2s">
                <form action="{{route('VerifyCertificate')}}" method="post">
                    @csrf
                    <div class="content">
                        <h4>Verification Certificate </h4>
                        <input type="text" name="cer_no" placeholder="Certifiacte ID : ................" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" minlength="9" maxlength="9" required>
                        <br>
                        <br>
                        <button type="submit" class="theme-btn">Verify Certificate <i class="fas fa-arrow-right"></i></button>
                    </div>
                    </form>
                    <div class="image">
                        <img src="{{asset('assets/images/advertise/advertise1.png')}}" alt="Advertise">
                    </div>
                </div>
           </div>
           <div class="col-lg-6">
               <div class="advertise-item bg-two wow fadeInUp delay-0-4s">
                    <div class="content">
                        <h4>Show Certificate Details </h4>
                        <p>name</p>

                        <p>Cource</p>
                        <p>Details</p>
                        <a href="#" class="theme-btn style-two">Pdf Download <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="image">
                        <img src="{{asset('assets/images/advertise/advertise2.png')}}" alt="Advertise">
                    </div>
                </div>
           </div>
       </div>
    </div>
</section>
<!-- Advertise Area End -->




        <!-- Categories Section Start -->
        <section class="categories-section bg-lighter rel z-1 py-75 rpb-85" id="cource">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="categories-content rmb-65 wow fadeInUp delay-0-2s">
                            <div class="section-title mb-25">
                                <span class="sub-title-two">Popular Category</span>
                                <h2>Browse Our Online Course Categories</h2>
                            </div>
                            <p> Vip Digital Hub is an online learning platform that offers free coding classes in programming languages including Python, Java, JavaScript, Ruby, SQL, C++, HTML, and ... <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="categories-wrap wow fadeInUp delay-0-4s">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="category-item mt-35">
                                        <div class="icon">
                                            <img src="{{asset('assets/images/categories/icon1.png')}}" alt="Icon">
                                        </div>
                                        <h4>Web Design</h4>
                                    </div>
                                    <div class="category-item">
                                        <div class="icon">
                                            <img src="{{asset('assets/images/categories/icon2.png')}}" alt="Icon">
                                        </div>
                                        <h4>Development</h4>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="category-item">
                                        <div class="icon">
                                            <img src="{{asset('assets/images/categories/icon3.png')}}" alt="Icon">
                                        </div>
                                        <h4>Marketing</h4>
                                    </div>
                                    <div class="category-item">
                                        <div class="icon">
                                            <img src="{{asset('assets/images/categories/icon4.png')}}" alt="Icon">
                                        </div>
                                        <h4>Technology</h4>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="category-item mt-40">
                                        <div class="icon">
                                            <img src="{{asset('assets/images/categories/icon5.png')}}" alt="Icon">
                                        </div>
                                        <h4>Technology</h4>
                                    </div>
                                    <div class="category-item">
                                        <div class="icon">
                                            <img src="{{asset('assets/images/categories/icon6.png')}}" alt="Icon">
                                        </div>
                                        <h4>SEO Optimize</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Categories Section End -->
@endsection
