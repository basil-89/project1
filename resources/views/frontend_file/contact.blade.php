<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>|| Contact Us</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="img/png" />
    <!--====== Animate Css ======-->
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}" />
    <!--====== Slick Slider ======-->
    <link rel="stylesheet" href="assets/css/slick.min.css" />
    <!--====== Nice Select ======-->
    <link rel="stylesheet" href="assets/css/nice-select.min.css" />
    <!--====== Magnific Popup ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css" />
    <!--====== Font Awesome ======-->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.min.css" />
    <!--====== Flaticon ======-->
    <link rel="stylesheet" href="assets/fonts/flaticon/css/flaticon.css" />
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
    <header class="template-header sticky-header header-one">
      @include('header_file.header')
        <!-- Start Mobile Panel -->
    </header>
    <!--====== End Template Header ======-->

    <!--====== Page Title Start ======-->
    <section class="page-title-area page-title-bg" style="background-image: url(assets/img/section-bg/page-title.jpg);">
        <div class="container">
            <h1 class="page-title">Contact Us</h1>

            <ul class="breadcrumb-nav">
                <li><a href="#">Home</a></li>
                <li><i class="fas fa-angle-right"></i></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>
    <!--====== Page Title End ======-->

    <!--====== Contact Info Section Start ======-->
    <section class="section-gap contact-top-wrappper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-10">
                    <div class="contact-info-wrapper">
                        <div class="single-contact-info">
                            <div class="single-contact-info">
                                <h3 class="info-title">
                                    <i class="fal fa-map-marker-alt"></i> Address
                                </h3>
                                <p>
                                    7895 Piermont Dr NE Albuquerque, <br>
                                    NM 198866, See Our Stores
                                </p>
                            </div>
                            <div class="single-contact-info">
                                <h3 class="info-title">
                                    <i class="fal fa-coffee"></i> Get In Touch
                                </h3>
                                <ul>
                                    <li>
                                        <span>Phone Number</span><a href="tel:+012020200">+012 (345) 6789</a>
                                    </li>
                                    <li>
                                        <span>Email Address</span><a href="https://demo.webtend.net/cdn-cgi/l/email-protection#30434540405f424470575d51595c1e535f5d"><span class="__cf_email__" data-cfemail="2a595f5a5a45585e6a4d474b434604494547">[email&#160;protected]</span></a>
                                    </li>
                                    <li>
                                        <span>Hotline</span><a href="tel:+12345678">12345678</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="single-contact-info">
                                <h3 class="info-title">
                                    <i class="fal fa-comments"></i> Follow Us
                                </h3>
                                <p>
                                    Sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore
                                </p>
                                <p class="social-icon">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                    <a href="#"><i class="fab fa-youtube-square"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-10">
                    <div class="working-hour-chart">
                        <h2 class="chart-title">Working Hour</h2>
                        <ul>
                            <li>
                                <span><i class="far fa-angle-right"></i>Monday</span>
                                <span>9:00-19:00</span>
                            </li>
                            <li>
                                <span><i class="far fa-angle-right"></i>Tuesday</span>
                                <span>9:00-19:00</span>
                            </li>
                            <li>
                                <span><i class="far fa-angle-right"></i>Wednesday</span>
                                <span>9:00-19:00</span>
                            </li>
                            <li>
                                <span><i class="far fa-angle-right"></i>Thursday</span>
                                <span>9:00-19:00</span>
                            </li>
                            <li>
                                <span><i class="far fa-angle-right"></i>Friday</span>
                                <span>9:00-19:00</span>
                            </li>
                            <li>
                                <span><i class="far fa-angle-right"></i>Saturday</span>
                                <span>9:00-19:00</span>
                            </li>
                            <li>
                                <span><i class="far fa-angle-right"></i>Sunday</span>
                                <span>9:00-19:00</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Contact Info Section End ======-->

    <!--====== Contact Form Start ======-->
    <section class="contact-form-area">
        <!--<div class="contact-map">-->
        <!--    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d107201.226767341!2d-74.05027451789393!3d40.71534534062428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1634195102348!5m2!1sen!2sbd" loading="lazy"></iframe>-->
        <!--</div>-->

        <div class="section-gap pt-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-heading mb-60 text-center">
                            <span class="tagline">We're Ready To Help You</span>
                            <h2 class="title">Leave a Message</h2>
                        </div>
                        <form action="#" class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-field">
                                        <label for="name">Your Full Name</label>
                                        <input type="text" placeholder="Michael M. Smith" id="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-field">
                                        <label for="email">Email Address</label>
                                        <input type="email" placeholder="support@gmail.com" id="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-field">
                                        <label for="number">Phone Number</label>
                                        <input type="text" placeholder="+012 (345) 678 99" id="number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-field">
                                        <label for="website">Website</label>
                                        <input type="url" placeholder="www.abccom" id="website">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-field">
                                        <label for="message">Write Message</label>
                                        <textarea id="message" placeholder="Write Message...."></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-center">
                                        <button class="template-btn">Send Us Message <i class="far fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Contact Form End ======-->

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
    <script src="assets/js/slick.min.js"></script>
    <!--====== Isotope ======-->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!--====== Images loaded ======-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!--====== In-view ======-->
    <script src="assets/js/jquery.inview.min.js"></script>
    <!--====== Nice Select ======-->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!--====== Magnific Popup ======-->
    <script src="assets/js/magnific-popup.min.js"></script>
    <!--====== WOW Js ======-->
    <script src="assets/js/wow.min.js"></script>
    <!--====== Main JS ======-->
    <script src="{{asset('/assets/js/main.js')}}"></script>
</body>


</html>