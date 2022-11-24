<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>|| About</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('/assets/img/favicon.ico')}}" type="img/png" />
    <!--====== Animate Css ======-->
    <link rel="stylesheet" href="{{asset('/assets/css/animate.min.css')}}" />
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}" />
    <!--====== Slick Slider ======-->
    <link rel="stylesheet" href="{{asset('/assets/css/slick.min.css')}}" />
    <!--====== Nice Select ======-->
    <link rel="stylesheet" href="{{asset('/assets/css/nice-select.min.css')}}" />
    <!--====== Magnific Popup ======-->
    <link rel="stylesheet" href="{{asset('/assets/css/magnific-popup.min.css')}}" />
    <!--====== Font Awesome ======-->
    <link rel="stylesheet" href="{{asset('/assets/fonts/fontawesome/css/all.min.css')}}" />
    <!--====== Flaticon ======-->
    <link rel="stylesheet" href="{{asset('/assets/fonts/flaticon/css/flaticon.css')}}" />
    <!--====== Main Css ======-->
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}" />
</head>

<body>
    <!--====== Start Preloader ======-->
    <div id="preloader">
        <div id="loading-center">
            <div id="object"></div>
        </div>
    </div>
    <!--====== End Preloader ======-->

    <!--====== Start Template Header ======-->
          @include('header_file.header')

    <!--====== End Template Header ======-->

    <!--====== Page Title Start ======-->
    <section class="page-title-area page-title-bg" style="background-image: url(assets/img/section-bg/page-title.jpg);">
        <div class="container">
            <h1 class="page-title">About</h1>

            <ul class="breadcrumb-nav">
                <li><a href="#">Home</a></li>
                <li><i class="fas fa-angle-right"></i></li>
                <li>About</li>
            </ul>
        </div>
    </section>
    <!--====== Page Title End ======-->

    <!--====== About Section Start ======-->
    <section class="about-section section-gap">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-6 col-md-10">
                    <div class="circle-image-gallery mb-md-50">
                        <div class="row">
                            <div class="col-6 gallery-left">
                                <div class="single-img wow fadeInLeft" data-wow-delay="0.3s">
                                    <img src="assets/img/circle-image-gallery/01.jpg" alt="">
                                </div>
                                <div class="single-img wow fadeInRight" data-wow-delay="0.4s">
                                    <img src="assets/img/circle-image-gallery/04.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-6 gallery-right">
                                <div class="single-img wow fadeInRight" data-wow-delay="0.5s">
                                    <img class="animate-float-bob-y"  src="assets/img/circle-image-gallery/03.jpg" alt="">
                                </div>
                                <div class="single-img wow fadeInLeft" data-wow-delay="0.6s">
                                    <img src="assets/img/circle-image-gallery/02.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="about-text">
                        <div class="section-heading mb-35">
                            <span class="tagline">About </span>
                            <h2 class="title">All-in-One Worksite Health Solution</h2>

                            <p>25 Years Of Experience in Medical Services</p>
                        </div>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium totam rem aperieaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatemsy quia voluptas sit aspernatur aut odit aut fugit quia conquntur magni dolores eos qui ratione voluptatem
                        </p>
                        <a href="about.html" class="template-btn mt-40">Learn More <i class="far fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== About Section End ======-->

    <div class="wcu-with-doctors">
        <!--====== Why Choose Section Start ======-->
        <section class="wcu-section section-gap-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="section-heading heading-white text-center mb-40">
                            <span class="tagline">Why Choose Our Medical</span>
                            <h2 class="title">Breakthrough in Comprehensive, Flexible Care Delivery Models</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="image-title-box mt-30 wow fadeInUp" data-wow-delay="0.3s">
                            <h4 class="title"><a href="service.html">Optimize Your Health  Care Services</a></h4>

                            <div class="image">
                                <img src="assets/img/img-title-box/01.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="image-title-box mt-30 wow fadeInUp" data-wow-delay="0.4s">
                            <h4 class="title"><a href="service.html">Boost Employee Engagement</a></h4>

                            <div class="image">
                                <img src="assets/img/img-title-box/02.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="image-title-box mt-30 wow fadeInUp" data-wow-delay="0.5s">
                            <h4 class="title"><a href="service.html">Accelerate Your Return On Investment</a></h4>

                            <div class="image">
                                <img src="assets/img/img-title-box/03.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== Why Choose Section End ======-->

        <!--====== Doctor Section Start ======-->
        <section class="doctors-section bg-color-grey polygon-pattern-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="section-heading text-center mb-40">
                            <span class="tagline">Professional Team</span>
                            <h2 class="title">Meet Our Experience Team Members</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center doctors-loop">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="doctor-box-three mt-30 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="doctor-photo">
                                <img src="assets/img/doctors/18.jpg" alt="Image">
                            </div>
                            <div class="doctor-information">
                                <h5 class="name">
                                    <a href="doctor-details.html">Allan K. Simons</a>
                                </h5>
                                <span class="specialty">Dental Specialist</span>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                                <span class="plus-icon"><i class="far fa-plus"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="doctor-box-three mt-30 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="doctor-photo">
                                <img src="assets/img/doctors/19.jpg" alt="Image">
                            </div>
                            <div class="doctor-information">
                                <h5 class="name">
                                    <a href="doctor-details.html">Marcus K. Staton</a>
                                </h5>
                                <span class="specialty">Neurology</span>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                                <span class="plus-icon"><i class="far fa-plus"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="doctor-box-three mt-30 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="doctor-photo">
                                <img src="assets/img/doctors/20.jpg" alt="Image">
                            </div>
                            <div class="doctor-information">
                                <h5 class="name">
                                    <a href="doctor-details.html">Travis A. Costillo</a>
                                </h5>
                                <span class="specialty">Orthopedics</span>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                                <span class="plus-icon"><i class="far fa-plus"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="doctor-box-three mt-30 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="doctor-photo">
                                <img src="assets/img/doctors/21.jpg" alt="Image">
                            </div>
                            <div class="doctor-information">
                                <h5 class="name">
                                    <a href="doctor-details.html">M.Calhoun</a>
                                </h5>
                                <span class="specialty">Cardiology</span>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                                <span class="plus-icon"><i class="far fa-plus"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== Doctor Section End ======-->
    </div>

    <!--====== FAQ Section Start ======-->
    <section class="faq-section section-gap">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="faq-image text-center text-lg-left mb-md-50">
                        <img src="assets/img/section-img/faq-image.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-9 col-sm-11">
                    <div class="faq-content pl-xl-5">
                        <div class="section-heading mb-30">
                            <span class="tagline">How Can We help</span>
                            <h2 class="title">Flexible & Responsive to Changing Needs</h2>
                        </div>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium totam rem aperieaqueys epsa quae abillo inventore veritatis et quase
                        </p>
                        <div class="accordion accordion-style-two mt-30" id="accordionFaq">
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h6 data-toggle="collapse" aria-expanded="true" data-target="#itemOne">
                                        <span>Advanced Equipment and Best Dentists</span>
                                    </h6>
                                </div>
                                <div class="collapse" id="itemOne" data-parent="#accordionFaq">
                                    <div class="accordion-content">
                                        <p>
                                            Orem psum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore ets dolore magna aliqua uispsum suspendisse
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item active-accordion">
                                <div class="accordion-header">
                                    <h6 data-toggle="collapse" aria-expanded="true" data-target="#itemTwo">
                                        <span>Our 10 Years Working Experience</span>
                                    </h6>
                                </div>
                                <div class="collapse show" id="itemTwo" data-parent="#accordionFaq">
                                    <div class="accordion-content">
                                        <p>
                                            Orem psum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore ets dolore magna aliqua uispsum suspendisse
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h6 data-toggle="collapse" aria-expanded="true" data-target="#itemThree">
                                        <span>Advanced Equipment and Best Dentists</span>
                                    </h6>
                                </div>
                                <div class="collapse" id="itemThree" data-parent="#accordionFaq">
                                    <div class="accordion-content">
                                        <p>
                                            Orem psum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore ets dolore magna aliqua uispsum suspendisse
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== FAQ Section End ======-->

    <!--====== Back to Top Start ======-->
    <a class="back-to-top" href="#">
        <i class="far fa-angle-up"></i>
     </a>
    <!--====== Back to Top End ======-->

    <!--====== Start Template Footer ======-->
    <footer class="template-footer have-cta-boxed-one">
        <div class="cta-boxed-one">
            <div class="container">
                <div class="cta-inner bg-color-secondary bg-size-cover blend-mode-multiply" style="background-image: url(assets/img/cta-img/cta-boxed-bg-1.jpg);">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-10">
                            <div class="cta-content text-center">
                                <div class="section-heading heading-white">
                                    <span class="tagline">Get Free Consultations</span>
                                    <h2 class="title">Looking a Doctors to Get Your Services</h2>
                                </div>
                                <ul class="cta-buttons d-flex justify-content-center flex-wrap">
                                    <li><a href="#" class="template-btn template-btn-white">Register as Doctor <i class="far fa-plus"></i></a></li>
                                    <li><a href="#" class="template-btn template-btn-bordered">Register as Hospital <i class="far fa-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-inner bg-color-grey">
            <div class="container">
                <div class="footer-widgets">
                    <div class="row">
                        <div class="col-lg-3 col-md-8">
                            <div class="widget text-widget">
                                <div class="footer-logo">
                                    <img src="assets/img/logo.png" alt="Medibo">
                                </div>
                                <p>
                                    Sed ut perspi unde omniste natus error sit voluptatem acc doloremque laudantium
                                </p>
                                <ul class="contact-list">
                                    <li>
                                        <a href="https://goo.gl/maps/inpkL6wUZqMR3opX7"><i class="far fa-map-marker-alt"></i>55 Main Road, USA</a>
                                    </li>
                                    <li>
                                        <a href="https://demo.webtend.net/cdn-cgi/l/email-protection#275452575748555367404a464e4b0944484a"><i class="far fa-envelope"></i><span class="__cf_email__" data-cfemail="7e0d0b0e0e110c0a3e19131f1712501d1113">[email&#160;protected]</span></a>
                                    </li>
                                    <li>
                                        <a href="tel:01267899"><i class="far fa-phone"></i>+012 (345) 678 99</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-xl-5 col-md-6">
                                    <div class="widget nav-widget">
                                        <h4 class="widget-title">Popular Services</h4>
                                        <ul class="nav-links">
                                            <li><a href="#">Orthopedic Care</a></li>
                                            <li><a href="#">Gynecology Care</a></li>
                                            <li><a href="#">Cardiology Care</a></li>
                                            <li><a href="#">Dentistry Care</a></li>
                                            <li><a href="#">Gastroenterology</a></li>
                                            <li><a href="#">Urgent Care</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-md-6">
                                    <div class="widget instagram-widget">
                                        <h4 class="widget-title">Photo Gallery</h4>
                                        <div class="instagram-images">
                                            <div class="single-image">
                                                <img src="assets/img/instagram/01.jpg" alt="Instagram">
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                            <div class="single-image">
                                                <img src="assets/img/instagram/02.jpg" alt="Instagram">
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                            <div class="single-image">
                                                <img src="assets/img/instagram/03.jpg" alt="Instagram">
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                            <div class="single-image">
                                                <img src="assets/img/instagram/04.jpg" alt="Instagram">
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                            <div class="single-image">
                                                <img src="assets/img/instagram/05.jpg" alt="Instagram">
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                            <div class="single-image">
                                                <img src="assets/img/instagram/06.jpg" alt="Instagram">
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-10">
                            <div class="widget newsletters-widget">
                                <h4 class="widget-title">Newsletters</h4>
                                <p>
                                    Sed ut perspiciatis unde omniste <br> natus error sit voluptatem
                                </p>
                                <form action="#" class="newsletters-form">
                                    <input type="email" placeholder="Email Address">
                                    <button type="submit"><i class="far fa-arrow-right"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-area">
                    <p>© 2021 <a href="#"></a>. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <!--====== End Template Footer ======-->

    <!--====== Jquery ======-->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>
    <!--====== Bootstrap ======-->
    <script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
    <!--====== Slick slider ======-->
    <script src="{{asset('/assets/js/slick.min.js')}}"></script>
    <!--====== Isotope ======-->
    <script src="{{asset('/assets/js/isotope.pkgd.min.js')}}"></script>
    <!--====== Images loaded ======-->
    <script src="{{asset('/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <!--====== In-view ======-->
    <script src="{{asset('/assets/js/jquery.inview.min.js')}}"></script>
    <!--====== Nice Select ======-->
    <script src="{{asset('/assets/js/jquery.nice-select.min.js')}}"></script>
    <!--====== Magnific Popup ======-->
    <script src="{{asset('/assets/js/magnific-popup.min.js')}}"></script>
    <!--====== WOW Js ======-->
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <!--====== Main JS ======-->
    <script src="{{asset('/assets/js/main.js')}}"></script>
</body>
</html>