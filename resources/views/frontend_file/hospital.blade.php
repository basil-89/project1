<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>|| Hospitals</title>

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
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
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
            <h1 class="page-title">Meet The Hospital</h1>

            <ul class="breadcrumb-nav">
                <li><a href="#">Home</a></li>
                <li><i class="fas fa-angle-right"></i></li>
                <li>Meet Our Hospital</li>
            </ul>
        </div>
        <div class="container job search-filer-section">
            <div class="_jobfilter_main">
                <div class="filter-inputs">
                   <form>
                        <div class="zip-code-input">
                            <input class="zip-placeholder" type="text" placeholder="Search by Name">
                            <i class="fas fa-search"></i>
                        </div>
                        <div class="zip-code-input">
                            <input class="zip-placeholder" type="text" placeholder="Search by City">
                            <i class="fas fa-search"></i>
                        </div>
                        <div class="zip-code-input">
                            <input class="zip-placeholder" type="text" placeholder="Search By Categorie">
                            <i class="fas fa-search"></i>
                        </div>
                        <div class="submitbtn">
                            <button type="submit">Find Hospital</button>
                        </div>
                        
                    </form>

                </div>

            </div>
        </div>
    </section>
    <!--====== Page Title End ======-->
     <!--====== seach filter section start here ======-->
    
     <!--====== seach filter section end here ======-->
     <!--====== Why Choose Section Start ======-->
    <section class="wcu-section-two">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10">
                        <div class="section-heading mb-40">
                            <span class="tagline">Why Choose Our Medical</span>
                            <h2 class="title">Breakthrough in Comprehensive, Flexible Care Models</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="simple-icon mt-30 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="icon">
                                <i class="flaticon-dental-care-1"></i>
                            </div>
                            <h4 class="title"><a href="#">Tooth Protection</a></h4>
                            <p>Sed ut perspiciatis unde omnis natusserror voluptatem accusantium doloremque laudan tium totam rem aperiam eaque quae</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="simple-icon mt-30 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon">
                                <i class="flaticon-dental-care-2"></i>
                            </div>
                            <h4 class="title"><a href="#">Teeth Whitening</a></h4>
                            <p>Sed ut perspiciatis unde omnis natusserror voluptatem accusantium doloremque laudan tium totam rem aperiam eaque quae</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="simple-icon mt-30 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="icon">
                                <i class="flaticon-dental-care"></i>
                            </div>
                            <h4 class="title"><a href="#">Cosmetic Dentistry</a></h4>
                            <p>Sed ut perspiciatis unde omnis natusserror voluptatem accusantium doloremque laudan tium totam rem aperiam eaque quae</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Why Choose Section End ======-->
    <!--====== About Section Start ======-->
    <section class="about-section section-gap">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7 col-md-10">
                    <div class="bordered-icon-wrapper">
                        <img src="assets/img/section-img/about-img.jpg" alt="AboutImg">

                        <div class="border-icon">
                            <img src="assets/img/icon/shield.png" alt="Icon">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-9">
                    <div class="about-content">
                        <div class="section-heading mb-35">
                            <span class="tagline">About </span>
                            <h2 class="title">All-in-One Worksite  Health Solution</h2>
                            <p>25 Years Of Experience in Medical Services</p>
                        </div>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium totam rem aperieaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explica boemo enim ipsam
                        </p>
                        <a href="#" class="template-btn mt-40">Learn More <i class="far fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== About Section End ======-->
    <!--====== Hospital Section Start ======-->
    <section class="services-area section-gap-top-less bg-color-grey">
        <div class="container">
            <div class="row justify-content-center service-loop">
                <div class="col-lg-12 col-md-12 col-12 feature-title">
                    <h2 class="title">Our Featured Hospital</h2>
                </div>
               </div>
                 <div class="row featured-hospital">
           
         
           @if(count($hospital) > 0)
           @foreach($hospital as $detail)
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="fancy-content-box-two no-shadow mt-30">
                        <div class="thumbnail">
                            <img src="{{asset('assets/hospital_images/'.$detail->hospital_image)}}" alt="Image">
                        </div>
                        <div class="box-content">
                            <div class="icon">
                                <img src="assets/img/icon/lungs.png" alt="">
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="{{url('hospital/details/'.$detail->id)}}" class="btn">{{$detail->hospital_name}}</a></h4>
                                <p>{{$detail->hospital_address}}</p>
                            </div>
                        </div>
                    </div>
                </div>
              @endforeach
              @endif
            </div>
        </div>
    </section>
    <!-- <section class="doctors-section section-gap">
        <div class="container">
            <div class="row doctors-loop">
                <div class="col-lg-12 col-md-12 col-12 feature-title">
                    <h2 class="title">Our Featured Hospital</h2>
                </div>
               <div class="col-lg-6 col-md-6 col-12">
                    <div class="card doctor-card">
                        <div class="card-body">
                            <div class="main-outer-card">
                                <div class="doctor-photo doctor-card-profile">
                                     <div class="image-inner-div"><img src="assets/img/doctors/01.jpg" alt="Image"></div>
                                </div>
                                <div class="doctor-information doctor-card-information">
                            <h5 class="name">
                                <a href="doctor-details.html">Lee S. Williamson</a>
                            </h5>
                            <span class="specialty">Cardiology</span>
                            <p>23 years experience overall</p>
                            <div class="like-outer">
                                <div class="like-btn">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="patient-stories">
                                    <a href="#">2435 Patient Stories</a>
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card doctor-card">
                        <div class="card-body">
                            <div class="main-outer-card">
                                <div class="doctor-photo doctor-card-profile">
                                     <div class="image-inner-div"><img src="assets/img/doctors/02.jpg" alt="Image"></div>
                                </div>
                                <div class="doctor-information doctor-card-information">
                            <h5 class="name">
                                <a href="doctor-details.html">Lee S. Williamson</a>
                            </h5>
                            <span class="specialty">Cardiology</span>
                            <p>23 years experience overall</p>
                            <div class="like-outer">
                                <div class="like-btn">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="patient-stories">
                                    <a href="#">2435 Patient Stories</a>
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card doctor-card">
                        <div class="card-body">
                            <div class="main-outer-card">
                                <div class="doctor-photo doctor-card-profile">
                                     <div class="image-inner-div"><img src="assets/img/doctors/03.jpg" alt="Image"></div>
                                </div>
                                <div class="doctor-information doctor-card-information">
                            <h5 class="name">
                                <a href="doctor-details.html">Lee S. Williamson</a>
                            </h5>
                            <span class="specialty">Cardiology</span>
                            <p>23 years experience overall</p>
                            <div class="like-outer">
                                <div class="like-btn">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="patient-stories">
                                    <a href="#">2435 Patient Stories</a>
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card doctor-card">
                        <div class="card-body">
                            <div class="main-outer-card">
                                <div class="doctor-photo doctor-card-profile">
                                     <div class="image-inner-div"><img src="assets/img/doctors/04.jpg" alt="Image"></div>
                                </div>
                                <div class="doctor-information doctor-card-information">
                            <h5 class="name">
                                <a href="doctor-details.html">Lee S. Williamson</a>
                            </h5>
                            <span class="specialty">Cardiology</span>
                            <p>23 years experience overall</p>
                            <div class="like-outer">
                                <div class="like-btn">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="patient-stories">
                                    <a href="#">2435 Patient Stories</a>
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card doctor-card">
                        <div class="card-body">
                            <div class="main-outer-card">
                                <div class="doctor-photo doctor-card-profile">
                                     <div class="image-inner-div"><img src="assets/img/doctors/05.jpg" alt="Image"></div>
                                </div>
                                <div class="doctor-information doctor-card-information">
                            <h5 class="name">
                                <a href="doctor-details.html">Lee S. Williamson</a>
                            </h5>
                            <span class="specialty">Cardiology</span>
                            <p>23 years experience overall</p>
                            <div class="like-outer">
                                <div class="like-btn">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="patient-stories">
                                    <a href="#">2435 Patient Stories</a>
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card doctor-card">
                        <div class="card-body">
                            <div class="main-outer-card">
                                <div class="doctor-photo doctor-card-profile">
                                     <div class="image-inner-div"><img src="assets/img/doctors/06.jpg" alt="Image"></div>
                                </div>
                                <div class="doctor-information doctor-card-information">
                            <h5 class="name">
                                <a href="doctor-details.html">Lee S. Williamson</a>
                            </h5>
                            <span class="specialty">Cardiology</span>
                            <p>23 years experience overall</p>
                            <div class="like-outer">
                                <div class="like-btn">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="patient-stories">
                                    <a href="#">2435 Patient Stories</a>
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--====== Hospital Section End ======-->

    <!--====== Back to Top Start ======-->
    <a class="back-to-top" href="#">
        <i class="far fa-angle-up"></i>
     </a>
    <!--====== Back to Top End ======-->

    <!--====== Start Template Footer ======-->
    <footer class="template-footer have-cta-boxed-one ">

        <div class="footer-inner bg-color-grey doctor-footer">
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
                                        <a href="https://demo.webtend.net/cdn-cgi/l/email-protection#84f7f1f4f4ebf6f0c4e3e9e5ede8aae7ebe9"><i class="far fa-envelope"></i><span class="__cf_email__" data-cfemail="31424441415e434571565c50585d1f525e5c">[email&#160;protected]</span></a>
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