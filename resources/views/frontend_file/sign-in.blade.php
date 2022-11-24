<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="img/png" />
    <!--====== Animate Css ======-->
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
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
    <link rel="stylesheet" href="assets/css/style.css" />
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
    <!-- sign up form section start-->
    <section class="service-section bg-color-grey section-gap-login">
        <div class="container mt-4">
            <div class="col-md-5 mx-auto">
                <div class="card box-shadow-vendor p-3">
                    <div class="card-body">
                        <div class="become-form">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                        <!-- <div class="gmz-loader ">
                                <div class="loader-inner">
                                    <div class="spinner-grow text-info align-self-center loader-lg"></div>
                                </div>
                            </div> -->
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <h2 class="title login-title mb-0 mt-1">Welcome Back!</h2>
                                        <p>Enter your credentials to access your account.</p>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6 col-12 mb-2">
                                        <div class="google-btn">
                                            <a href="#"><span class="fab fa-google"></span> &nbsp;Google</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-2">
                                        <div class="facebook-btn">
                                            <a href="#"><span class="fab fa-facebook"></span> &nbsp;Facebook</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label for="email">Email<span class="required">*</span> </label>
                                        <input id="email" type="email"  class="form-control gmz-validation" name="email" value="{{ old('email') }}" class="form-control text-white bg-white-o-5 rounded-pill border-0 py-4 px-8"  placeholder="Email"  required autocomplete="off" />
                                        @error('email')
                                      <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                 </span>
                                  @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password<span class="required">*</span> </label>
                                    <input id="password" type="password" class="form-control gmz-validation" data-validation="required" name="password" required autocomplete="current-password" class="form-control text-white bg-white-o-5 rounded-pill border-0 py-4 px-8"  placeholder="Password"  />
                                    @error('password')
                                <span   class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                                   </span>
                                  @enderror

                                </div>
                                
                                <button class="template-btn wow fadeInUp w-100 text-center" type="submit">Sign in</button>

                                <div class="row">
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                             </div>


                                <div class="row mt-3">
                                    <div class="col-md-12 text-center">Don't have an account? <a href="sign-up.html">Register Now</a></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sign up form section end-->
    <!--====== Back to Top Start ======-->
    <a class="back-to-top" href="#"> <i class="far fa-angle-up"></i> </a>
    <!--====== Back to Top End ======-->
    <!--====== Start Template Footer ======-->
    <footer class="template-footer have-cta-boxed-one ">
        <div class="footer-inner bg-color-grey doctor-footer">
            <div class="container">
                <div class="footer-widgets">
                    <div class="row">
                        <div class="col-lg-3 col-md-8">
                            <div class="widget text-widget">
                                <div class="footer-logo"> <img src="assets/img/logo.png" alt="Medibo"> </div>
                                <p> Sed ut perspi unde omniste natus error sit voluptatem acc doloremque laudantium </p>
                                <ul class="contact-list">
                                    <li> <a href="https://goo.gl/maps/inpkL6wUZqMR3opX7"><i class="far fa-map-marker-alt"></i>55 Main Road, USA</a> </li>
                                    <li> <a href="https://demo.webtend.net/cdn-cgi/l/email-protection#84f7f1f4f4ebf6f0c4e3e9e5ede8aae7ebe9"><i class="far fa-envelope"></i><span class="__cf_email__" data-cfemail="31424441415e434571565c50585d1f525e5c">[email&#160;protected]</span></a> </li>
                                    <li> <a href="tel:01267899"><i class="far fa-phone"></i>+012 (345) 678 99</a> </li>
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
                                            <div class="single-image"> <img src="assets/img/instagram/01.jpg" alt="Instagram"> <a href="#"><i class="fab fa-instagram"></i></a> </div>
                                            <div class="single-image"> <img src="assets/img/instagram/02.jpg" alt="Instagram"> <a href="#"><i class="fab fa-instagram"></i></a> </div>
                                            <div class="single-image"> <img src="assets/img/instagram/03.jpg" alt="Instagram"> <a href="#"><i class="fab fa-instagram"></i></a> </div>
                                            <div class="single-image"> <img src="assets/img/instagram/04.jpg" alt="Instagram"> <a href="#"><i class="fab fa-instagram"></i></a> </div>
                                            <div class="single-image"> <img src="assets/img/instagram/05.jpg" alt="Instagram"> <a href="#"><i class="fab fa-instagram"></i></a> </div>
                                            <div class="single-image"> <img src="assets/img/instagram/06.jpg" alt="Instagram"> <a href="#"><i class="fab fa-instagram"></i></a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-10">
                            <div class="widget newsletters-widget">
                                <h4 class="widget-title">Newsletters</h4>
                                <p> Sed ut perspiciatis unde omniste
                                    <br> natus error sit voluptatem </p>
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
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!--====== Bootstrap ======-->
    <script src="assets/js/bootstrap.min.js"></script>
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
    <script src="assets/js/main.js"></script>
</body>

</html>