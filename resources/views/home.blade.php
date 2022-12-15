<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Amazing-Data </title>
    <meta content="We offer instant recharge of Airtime, Databundle, CableTV (DStv, GOtv & Startimes), Electricity Bill Payment and more" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="https://amazingdata.com.ng/logoi.png.png" rel="icon">
    <link href="https://amazingdata.com.ng/logoi.png.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('lan/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lan/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('lan/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('lan/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('lan/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('lan/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('lan/assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Shuffle - v4.7.0
    * Template URL: https://bootstrapmade.com/bootstrap-3-one-page-template-free-shuffle/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
<style>
    .preloader
    {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background: #fff;
        z-index: 9999;
        text-align: center;
    }
    .preloader-icon
    {
        position: relative;
        top: 45%;
        width: 100px;
        border-radius: 50%;
        animation: shake 1.5s infinite;
    }
    @keyframes shake
    {
        0% { transform: translate(1px, -1px) rotate(0deg);}
        10% { transform: translate(1px, -3px) rotate(-1deg);}
        20% { transform: translate(1px, -5px) rotate(-3deg);}
        30% { transform: translate(1px, -7px) rotate(0deg);}
        40% { transform: translate(1px, -9px) rotate(1deg);}
        50% { transform: translate(1px, -11px) rotate(3deg);}
        60% { transform: translate(1px, -9px) rotate(0deg);}
        70% { transform: translate(1px, -7px) rotate(-1deg);}
        80% { transform: translate(1px, -5px) rotate(-3deg);}
        90% { transform: translate(1px, -3px) rotate(0deg);}
        100% { transform: translate(1px, -1px) rotate(-1deg);}
    }
</style>
<div class="preloader"> <img class="preloader-icon" src="{{asset('gp.gif')}}" alt="My Site Preloader"> </div>

 @include('sweetalert::alert')

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="carousel-background"><img src="{{asset('lan/assets/img/so.png')}}" height="1000" width="2000"></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Amazing-Data</span></h2>
                            <p class="animate__animated animate__fadeInUp">We are here to serve you better .</p>
                            @if(Auth()->user())
                                <a href="{{route('dashboard')}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Dashboard</a>
                                <a href="{{route('logout')}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Logout</a>
                            @else
                            <a href="{{route('register')}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
                            <a href="{{route('login')}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Login</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
</section><!-- End Hero -->

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1 class="text-light"><a href="{{route('home')}}"><span>Amazing-Data</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About Us</a></li>
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                <li><a class="nav-link scrollto" href="#team">Team</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>About Us</h2>
                <p>We offer instant recharge of Airtime, Databundle, CableTV (DStv, GOtv & Startimes), Electricity Bill Payment and more.....</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <img src="{{asset('lan/assets/img/about.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3><strong>About Amazing-Data</strong></h3>
                    <p class="fst-italic">
                        With Amazing-Data, you can purchase your airtime, data, electricity bills and TV subscription with just the click of a button, all by yourself, seamlessly and without stress. We operate a 24/7 days support system with prompt response to any complains or suggestion from our esteemed clients.
                    </p>


                    <div class="skills-content">

                        <div class="progress">
                            <span class="skill">REGISTERED USERS <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">HAPPY CLIENTS<i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">LOGGED IN USERS <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">YEARS OF EXPERIENCE <i class="val">55%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section class="counts section-bg">
        <div class="container">

            <div class="row no-gutters">

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <img class="img-fluid" src="lan/assets/img/mtn%20logo.png" alt="">
                        <p><strong>MTN NETWORK</strong> </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <img class="img-fluid" src="lan/assets/img/Glon.png" alt="">
                        <p><strong>GLO NETWORK</strong> </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <img class="img-fluid" src="lan/assets/img/airtel.png" alt="">
                        <p><strong>AIRTEL NETWORK</strong> </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <img class="img-fluid" src="lan/assets/img/9mobile.jpg" alt="">
                        <p><strong>9MOBILE NETWORK</strong> </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <img class="img-fluid" src="lan/assets/img/BULB%20F.jfif" alt="">
                        <p><strong>ELECTRICITY BILL</strong> </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <img class="img-fluid" src="lan/assets/img/TV.jpg" alt="">
                        <p><strong>TV SUBCRIPTION</strong> </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->



    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Our Services</h2>
                <p> We offer instant recharge of Airtime, Databundle, CableTV (DStv, GOtv & Startimes), Electricity Bill Payment and more....</p>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4 class="title"><a href="">Airtime</a></h4>
                        <p class="description">Airtime is a live social space where you can do what you love over video</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4 class="title"><a href="">Data Bundle</a></h4>
                        <p class="description">Get cheap and fast internet for your Smartphone. Choose from a variety of data bundles</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4 class="title"><a href="">Cable Tv</a></h4>
                        <p class="description">Pay your Gotv, DSTV, Startimes</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4 class="title"><a href="">Electricity Bill Payment</a></h4>
                        <p class="description"> Avoid the stress, pay for your electricity bills from your mobile and PC online.</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Cta Section ======= -->
    <section class="cta">
        <div class="container">

            <div class="text-center">
                <h3>Call To Action</h3>
                <p> You Can Perform Quick Transactions Anytime And Anywhere Using Any Device. Awesome Customer Support. Quick Payment Steps. Safe and Secure. Services: Instant Reconnection, 24/7 Support, Secure Payment, Fast Support Response, Prompt Customer Support..</p>
                <a class="cta-btn" href="#">Call To Action</a>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <!-- ======= More Services Section ======= -->
    <section class="more-services section-bg">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="card">
                        <img src="lan/assets/img/mtn%20logo.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">MTN DATA</a></h5>
                            <p class="card-text"></p>
                            <a href="#" class="btn">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="card">
                        <img src="lan/assets/img/Glon.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">GLO DATA</a></h5>
                            <p class="card-text"></p>
                            <a href="#" class="btn">Get started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="card">
                        <img src="lan/assets/img/airtel.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">AIRTEL DATA</a></h5>
                            <p class="card-text"></p>
                            <a href="#" class="btn">Get started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="card">
                        <img src="lan/assets/img/9mobile.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">9MOBILE DATA</a></h5>
                            <p class="card-text"></p>
                            <a href="#" class="btn">Get started</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End More Services Section -->

    <!-- ======= Info Box Section ======= -->
    <section class="info-box py-0">
        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                    <div class="content">
                        <h3><strong>FREQUENTLY ASKED QUESTIONS</strong></h3>
                        <p>
                            How we can help you ?
                        </p>
                    </div>

                    <div class="accordion-list">
                        <ul>
                            <li>
                                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> how can i register? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                    <p>
                                        click on sign Up botton and fill your details in there, then click on register, that how you have an account with us
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> How can i fund my account ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        Transfer to the account number on your dashboard, and your account will be automatically fund, you don't need to tend reciecpt before it deliver
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> What are the services available on the Amazing-Data? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        Airtime VTU
                                        MTN VTU Airtime, Airtel VTU Airtime, Glo VTU Airtime, 9mobile VTU Airtime
                                        Data
                                        MTN Data Bundle, Airtel Data Bundle, Glo Data Bundle, 9mobile Data Bundle
                                        TV Subscription
                                        DSTV subscription payment, GOTV Subscription Payment, Startimes Subscription Payment
                                        Electricity Payment
                                        Abuja Electricity Distribution Company (AEDC) – Prepaid, Port Harcourt Electricity Distribution Company (PHED) – Prepaid, Ikeja Electricity Distribution Company (IKEDC) – Prepaid, Eko Electricity Distribution Company (EKEDC) – Prepaid, Jos Electricity Distribution PLC (JEDplc) – Prepaid, Kano Electricity Distribution Company (KEDCO) – Prepaid,

                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>

                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style="background-image: url(assets/img/info-box.jpg);">&nbsp;</div>
            </div>

        </div>
    </section><!-- End Info Box Section -->


    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
        <div class="container">

            <div class="section-title">
                <h2>Our Team</h2>
                <p>We are here to serve you, Thanks for coming.</p>
            </div>

            <div class="row">

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="member">
                        <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.1s">
                    <div class="member">
                        <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
                    <div class="member">
                        <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.3s">
                    <div class="member">
                        <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg">

        <div class="container">
            <div class="section-title">
                <h2>Contact Us</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-6 d-flex align-items-stretch infos">

                    <div class="row">

                        <div class="col-lg-6 info d-flex flex-column align-items-stretch">
                            <i class="bx bx-map"></i>
                            <h4>Address</h4>
                            <p>A108 Adam Street,<br>New York, NY 535022</p>
                        </div>
                        <div class="col-lg-6 info info-bg d-flex flex-column align-items-stretch">
                            <i class="bx bx-phone"></i>
                            <h4>Call Us</h4>
                            <p>+1 5589 55488 55<br>+1 5589 22548 64</p>
                        </div>
                        <div class="col-lg-6 info info-bg d-flex flex-column align-items-stretch">
                            <i class="bx bx-envelope"></i>
                            <h4>Email Us</h4>
                            <p>contact@example.com<br>info@example.com</p>
                        </div>
                        <div class="col-lg-6 info d-flex flex-column align-items-stretch">
                            <i class="bx bx-time-five"></i>
                            <h4>Working Hours</h4>
                            <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 d-flex align-items-stretch contact-form-wrap">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <label for="email">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="message">Message</label>
                            <textarea class="form-control" name="message" rows="8" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Us Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">

        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Amazing-Data</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootstrap-3-one-page-template-free-shuffle/ -->
            Designed by <a href="https://bootstrapmade.com/">JOSEPH IT</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('lan/assets/vendor/purecounter/purecounter.js')}}"></script>
<script src="{{asset('lan/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('lan/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('lan/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('lan/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('lan/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{asset('lan/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('lan/assets/js/main.js')}}"></script>


<style>
    .float{
        position:fixed;
        width:60px;
        height:60px;
        bottom:40px;
        right:40px;
        background-color:#25d366;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        font-size:30px;
        box-shadow: 2px 2px 3px #999;
        z-index:100;
    }

    .my-float{
        margin-top:16px;
    }
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="http:wa.me/2348080301180/?text=Goodday, My Username is....." class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
<script>
    window.onload = function(){ document.querySelector(".preloader").style.display = "none"; }
</script>

</body>

</html>
