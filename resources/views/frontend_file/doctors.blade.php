<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>|| Doctors</title>

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
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
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
    <!--====== Start Template Header ======-->
    <header class="template-header sticky-header header-one">
      @include('header_file.header')
        <!-- Start Mobile Panel -->
    </header>
    <!--====== End Template Header ======-->
    <!--====== End Template Header ======-->

        <!--====== Page Title Start ======-->
    <section class="page-title-area page-title-bg" style="background-image: url(assets/img/section-bg/page-title.jpg);">
        <div class="container">
            <h1 class="page-title">Meet The Doctor</h1>

            <ul class="breadcrumb-nav">
                <li><a href="#">Home</a></li>
                <li><i class="fas fa-angle-right"></i></li>
                <li>Meet Our Doctor</li>
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
                            <button type="submit">Find Doctor</button>
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
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-heading text-center mb-40">
                        <span class="tagline">Latest Reviews</span>
                        <h2 class="title">Top-rated primary care doctors</h2>
                    </div>
                </div>
            </div>
            <div class="row featured-doctor">
            @if(count($doctor_info) > 0)
            @foreach($doctor_info as $info)
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card doctor-card">
                        <div class="card-body">
                            <div class="d-flex flex-column">
                                <div class="p-2">
                                    <div class="doctor-photo doctor-card-profile">
                                        <div class="image-inner-div"><img src="{{asset('/assets/img/doctors/'.$info->image)}}" alt="Image"></div>
                                    </div>
                                </div>
                                <div class="p-2">
                                    <div class="doctor-information doctor-card-information">
                                        <h5 class="name">
                                <a href="{{url('doctor-detail/'.$info->id)}}" class="nav-link">{{$info->name}}</a> 

                                        </h5>
                                        <div class="d-flex flex-column">
                                            <div class="-mb-3">
                                                @foreach($department as $cat_1)
                                                @if($cat_1->id == $info->department)
                                                <span class="specialty">{{$cat_1->category_name}}</span>
                                                @endif
                                                @endforeach
                                                <span class="and-sign">|</span>
                                                @foreach($country as $cont)
                                                @if($cont->id == $info->country)
                                                <span class="specialty-location">{{$cont->country}}, NY</span>
                                                @endif
                                                @endforeach
                                            </div>
                                          
                                            @php
                                            $avg_stars = Illuminate\Support\Facades\DB::table('doctor_rating')->where('doctor_id',$info->id)
                                            ->avg('rating');
                                            
                            
                                            $avg_review = Illuminate\Support\Facades\DB::table('doctor_rating')->where('doctor_id',$info->id)
                                            ->count();
                                              @endphp

                                            <div class="mt-1">
                                                <span class="rating">
                                                    @for ($i = 1; $i < 6; $i++)
                                                    @if ($avg_stars >= $i)
                                                        <i class="fas fa-star"></i>
                                                    @endif
                                                @endfor

                                                     
                                                </span>
                                                <span class="specialty">({{$avg_review}} reviews)</span>
                                            </div>
                                            <div class="mt-2">
                                                <p class="review-des">{{$info->detail}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
              
            </div>
        </div>
    </section>

    <!--====== About Section End ======-->
    <!--====== Doctor Section Start ======-->
    <section class="doctors-section section-gap">
        <div class="container">
            <div class="row doctors-loop">
                <div class="col-lg-12 col-md-12 col-12 feature-title">
                    <h2 class="title">Our Featured Doctors</h2>
                </div>
                </div>
                <div class="row featured-doctor">
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
    </section>
    <!--====== Doctor Section End ======-->

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