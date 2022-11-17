@extends('partials.app')
@section('title', 'Contact Us')
@section('containt')

    <!-- Page Banner Start -->
    <section class="page-banner-area rel z-1 text-white text-center" style="background-image: url(assets/images/1.jpg);">
        <div class="container">
            <div class="banner-inner rpt-10">
                <h2 class="page-title wow fadeInUp delay-0-2s">Contact Us</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="index.php">home</a></li>
                        <li class="breadcrumb-item active">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
        <img class="circle-one" src="{{ asset('assets/images/shapes/circle-one.png') }}" alt="Circle">
        <img class="circle-two" src="{{ asset('assets/images/shapes/circle-two.png') }}" alt="Circle">
    </section>
    <!-- Page Banner End -->


    <!-- Contact Info Start -->
    <section class="contact-info-area rel z-1 py-130 rpt-90 rpb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="contact-info-wrap rmb-75 wow fadeInUp delay-0-2s">
                        <div class="section-title mb-25">
                            <span class="sub-title-two">Need Any Helps ?</span>
                            <h2>Contact For Information</h2>
                        </div>
                        <p>contact information means the name, email address, phone number, online user name(s), telephone
                            number, and similar information submitted by visitors to your ...</p>
                        <div class="row no-gap mt-50">
                            <div class="col-md-4 col-sm-6">
                                <div class="contact-info-box">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <h4>Locations</h4>
                                    <span>Motinagar Balaghat </span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="contact-info-box">
                                    <i class="far fa-envelope"></i>
                                    <h4>Email Us</h4>
                                    <span>
                                        <a href="mailto:support@gmail.com">info@vipdigitalhub.com</a><br>
                                        <a href="mailto:infocoach.net">help@vipdigitalhub.in</a>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="contact-info-box">
                                    <i class="fas fa-phone-volume"></i>
                                    <h4>Hotlines</h4>
                                    <span>
                                        <a href="callto:+896(321)4600">+91 7000153244/a><br>
                                            <a href="callto:+012(345)678">+91 9407005023</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-page-image wow fadeInUp delay-0-4s">
                        <img src="{{ asset('assets/images/contact/ww.png') }}" alt="Contact Page">
                    </div>
                </div>
            </div>
        </div>
        <span class="bg-text">coach</span>
    </section>
    <!-- Contact Info End -->


    <!-- Contact Form Start -->
    <section class="contact-form-area wow fadeInUp delay-0-2s">
        <div class="container">
            <form id="contact-form" class="contact-form p-50 z-1 rel" name="contact-form" action="javascript:void(0)"
                method="post">
                <div class="section-title text-center mb-50">
                    <span class="sub-title-two">Send Us Message</span>
                    <h2>Have Any Questions! Say Hello</h2>
                </div>
                <div class="row mt-25">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" id="name" name="name" class="form-control" value=""
                                placeholder="Full Name" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="email" id="email" name="email" class="form-control" value=""
                                placeholder="Email Address" required="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" id="phone" name="phone" class="form-control" value=""
                                placeholder="Phone Number" required="" minlength="10" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Write Message" required=""></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group text-center mb-0">
                            <button type="submit" id="contactUsForm" class="theme-btn">Send Message <i
                                    class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Contact Form End -->


    <!-- Location Map Area Start -->
    <div class="contact-page-map">
        <div class="our-location">


            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3704.4455919774928!2d80.19508151429076!3d21.801707966318666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a2a5b61bc5219ed%3A0x211e2cb333640669!2sVip%20Digital%20Solution%20Balaghat!5e0!3m2!1sen!2sin!4v1668421790000!5m2!1sen!2sin"
                height="975" style="border:0; width: 100%;" allowfullscreen="" loading="lazy"></iframe>



        </div>
    </div>
    <!-- Location Map Area End -->

@endsection
@push('script')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click', '#contactUsForm', function() {
            let name = $('#name').val();
            let phone = $('#phone').val();
            let email = $('#email').val();
            let msg = $('#message').val();

            $.ajax({
                type: "post",
                url: "{{ route('SaveContactUs') }}",
                data: {
                    'name': name,
                    'mobile': phone,
                    "email": email,
                    "msg": msg
                },
                beforeSend: function() {
                    $('#contactUsForm').html('Sending...');
                },
                success: function(response) {
                    if (response.msg === 'success') {
                        alert('Form Successfully Submitted.');
                        setTimeout(() => {
                            location.reload();
                        }, 1000);
                    }else{
                        alert('Oops Error Occur. Please Try Again.');
                        setTimeout(() => {
                            location.reload();
                        }, 1000);
                    }
                }
            });
        });
    </script>
@endpush
