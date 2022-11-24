<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>|| Doctors</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{('assets/img/favicon.ico')}}" type="img/png" />
    <!--====== Animate Css ======-->
    <link rel="stylesheet" href="{{('assets/css/animate.min.css')}}" />
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{('assets/css/bootstrap.min.css')}}" />
    <!--====== Slick Slider ======-->
    <link rel="stylesheet" href="{{('assets/css/slick.min.css')}}" />
    <!--====== Nice Select ======-->
    <link rel="stylesheet" href="{{('assets/css/nice-select.min.css')}}" />
    <!--====== Magnific Popup ======-->
    <link rel="stylesheet" href="{{('assets/css/magnific-popup.min.css')}}" />
    <!--====== Font Awesome ======-->
    <link rel="stylesheet" href="{{('assets/fonts/fontawesome/css/all.min.css')}}" />
    <!--====== Flaticon ======-->
    <link rel="stylesheet" href="{{('assets/fonts/flaticon/css/flaticon.css')}}" />
    <!--====== Main Css ======-->
    <link rel="stylesheet" href="{{('assets/css/style.css')}}" />
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
        <div class="container-fluid container-1400">
            <div class="header-navigation">
                <div class="header-left">
                    <div class="site-logo">
                        <a href="index.html">
                            <img src="assets/img/logo.png" alt="">
                        </a>
                    </div>
                    <nav class="site-menu menu-gap-left d-none d-xl-block">
                        <ul class="primary-menu">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li class="active">
                                <a href="doctors.html">Doctors</a>
                                <ul class="sub-menu">
                                    <li><a href="doctors.html">Doctor</a></li>
                                    <li><a href="doctor-details.html">Doctor Details</a></li>
                                </ul>
                            </li>
                             <li>
                                <a href="Hospital.html">Hospital</a>
                                <ul class="sub-menu">
                                    <li><a href="hospital.html">Hospital</a></li>
                                    <li><a href="hospital-details.html">Hospital Details</a></li>
                                </ul>
                            </li>
                            <li>
                            <li><a href="about.html">About</a></li>
                            <li>
                                <a href="blog-standard.html">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-standard.html">Blog</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right">
                    <ul class="extra-icons">
                        <li class="d-none d-sm-block">
                            <div class="header-search-area">
                                <form action="#">
                                    <input type="search" placeholder="Search Here">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </form>
                            </div>
                        </li>
                        <li><a href="sign-in.html" class="login-btn">Log in</a></li>
                        <li class="d-xl-none">
                            <a href="#" class="navbar-toggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Start Mobile Panel -->
        <div class="slide-panel mobile-slide-panel">
            <div class="panel-overlay"></div>
            <div class="panel-inner">
                <div class="panel-logo">
                    <img src="assets/img/logo.png" alt="">
                </div>
                <nav class="mobile-menu">
                    <ul class="primary-menu">
                            <li class="active">
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="doctors.html">Doctors</a>
                                <ul class="sub-menu">
                                    <li><a href="doctors.html">Doctor</a></li>
                                    <li><a href="doctor-details.html">Doctor Details</a></li>
                                </ul>
                            </li>
                             <li>
                                <a href="Hospital.html">Hospital</a>
                                <ul class="sub-menu">
                                    <li><a href="hospital.html">Hospital</a></li>
                                    <li><a href="hospital-details.html">Hospital Details</a></li>
                                </ul>
                            </li>
                            <li>
                            <li><a href="about.html">About</a></li>
                            <li>
                                <a href="blog-standard.html">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-standard.html">Blog</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="sign-in.html">Log in</a></li>
                        </ul>
                </nav>
                <a href="#" class="panel-close">
                    <i class="fal fa-times"></i>
                </a>
            </div>
        </div>
        <!-- Start Mobile Panel -->
    </header>
    <!--====== End Template Header ======-->

        <!--====== Page Title Start ======-->
    <section class="page-title-area my-hero-banner page-title-bg" style="background-image: url(assets/img/section-bg/page-title.jpg);">
       <!--  <div class="container">
            <h1 class="page-title">Meet The Doctor</h1>

            <ul class="breadcrumb-nav">
                <li><a href="#">Home</a></li>
                <li><i class="fas fa-angle-right"></i></li>
                <li>Meet Our Doctor</li>
            </ul>
        </div> -->
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
                    <div class="col-lg-8 col-md-8">
                        <div class="card doctor-card">
                            <div class="card-body">
                                <div class="main-outer-card">
                                    <div class="doctor-photo doctor-details-card-profile">
                                         <div class="image-inner-div"><img src="assets/img/doctors/01.jpg" alt="Image"></div>
                                    </div>
                                    <div class="doctor-information doctor-detail-card-information">
                                <h5 class="name">
                                    <a href="doctor-details.html">Lee S. Williamson</a>
                                </h5>
                                <span class="specialty">Cardiology</span>
                                <p>23 years experience overall</p>
                                <p class="c-profile__details"><i class="icon-ic_done_solid_system u-green-text u-bold u-jumbo-font u-valign--middle"></i> <span data-qa-id="doctor-verification-label" class="u-valign--middle"><span>Medical Registration Verified</span></span></p>
                                <div class="like-outers">
                                    <div class="like-btns">
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
                                <p>Dr. Aarti Sundar Rajan is practicing dental surgeon from 21 years with two branches. Main branch at Jayanagar and a branch at Basavangudi. She is specialized in <a href="#">More</a></p>
                                <div class="row mt-3">
                                    <div class="col-lg-12 col-md-12 add-review-btn">
                                        <!-- <a href="raiting-review.html">Add Review</a> -->
                                        <!-- Button trigger modal -->
                                    <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                      Add Review
                                    </a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body doctor-review-model">
                                          <div class="model-top-header">
                                              <div class="top-img-section">
                                                  <div class="doctor-img">
                                                      <img alt="provider" src="https://dims.healthgrades.com/dims3/MMH/fa9e1ce/2147483647/resize/72x96!/format/webp/quality/75/?url=https://photos.healthgrades.com/img/prov/2/Q/C/2QCVS_w90h120_v20013.jpg">
                                                  </div>
                                                  <div class="doc-detals">
                                                      <h6>Step 1 of 2</h6>
                                                      <h4>Your review of Dr. Haider</h4>
                                                  </div>
                                              </div>
                                          </div>
                                          </div>
                                          <div class="modal-body doctor-review-model">
                                            <p>We just send an email with the link to <strong>Confirm your review</strong> </p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                            <div class="row mb-3">
                                                <div class="col-md-12 question-dev">
                                                    <h5>What went well <span>(Select all that apply)</span></h5>
                                                </div>
                                                <div class="col-lg-6 doctor-btn">
                                                    <a href="">staff friendless</a>
                                                </div>
                                                <div class="col-lg-6 doctor-btn">
                                                    <a href="">staff friendless</a>
                                                </div>
                                                <div class="col-lg-6 doctor-btn">
                                                    <a href="">staff friendless</a>
                                                </div>
                                                <div class="col-lg-6 doctor-btn">
                                                    <a href="">staff friendless</a>
                                                </div>
                                                <div class="col-lg-6 doctor-btn">
                                                    <a href="">staff friendless</a>
                                                </div>
                                                <div class="col-lg-6 doctor-btn">
                                                    <a href="">staff friendless</a>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-12 question-dev">
                                                    <h5>What went well <span>(Select all that apply)</span></h5>
                                                </div>
                                                <div class="col-lg-6 doctor-btn">
                                                    <a href="">staff friendless</a>
                                                </div>
                                                <div class="col-lg-6 doctor-btn">
                                                    <a href="">staff friendless</a>
                                                </div>
                                                <div class="col-lg-6 doctor-btn">
                                                    <a href="">staff friendless</a>
                                                </div>
                                                <div class="col-lg-6 doctor-btn">
                                                    <a href="">staff friendless</a>
                                                </div>
                                                <div class="col-lg-6 doctor-btn">
                                                    <a href="">staff friendless</a>
                                                </div>
                                                <div class="col-lg-6 doctor-btn">
                                                    <a href="">staff friendless</a>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-12 question-dev">
                                                    <h5>What went well <span>(Select all that apply)</span></h5>
                                                </div>
                                                <div class="col-lg-6 doctor-btn">
                                                    <a href="">staff friendless</a>
                                                </div>
                                                <div class="col-lg-6 doctor-btn">
                                                    <a href="">staff friendless</a>
                                                </div>
                                                <div class="col-lg-6 doctor-btn">
                                                    <a href="">staff friendless</a>
                                                </div>
                                                <div class="col-lg-6 doctor-btn">
                                                    <a href="">staff friendless</a>
                                                </div>
                                                <div class="col-lg-6 doctor-btn">
                                                    <a href="">staff friendless</a>
                                                </div>
                                                <div class="col-lg-6 doctor-btn">
                                                    <a href="">staff friendless</a>
                                                </div>
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                            <a type="button" class="btn btn-primary">Submit Review</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            
                                </div>
                            </div>
                        </div>
                        <div class="card doctor-card">
                            <div class="card-body">
                                    <div class="google-review">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="rating-review-item">
                                                            <div class="left-rating">
                                                                <h4 class="avg-rating-container"> 
                                                                    <mark>4.0</mark> 
                                                                    <span class="avg-rating"> 
                                                                        <span class="avg-rating-title">Average Rating</span> 
                                                                       <p>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <span>(77 Reviews)</span></p>
                                                                        
                                                            </div>
                                                            <div class="right-rating">
                                                              <ul class="order-list">
                                                                <li>
                                                                  <div class="star-value">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                  </div>
                                                                  <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                                  </div>
                                                                  <div class="rating-hit">30%</div>
                                                                </li>
                                                                <li>
                                                                  <div class="star-value">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                  </div>
                                                                  <div class="progress">
                                                                    <div class="progress-bar " role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                  </div>
                                                                  <div class="rating-hit">100%</div>
                                                                </li>
                                                                <li>
                                                                  <div class="star-value">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                  </div>
                                                                  <div class="progress">
                                                                    <div class="progress-bar " role="progressbar" style="width: 50%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                                  </div>
                                                                  <div class="rating-hit">50%</div>
                                                                </li>
                                                                <li>
                                                                  <div class="star-value">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                  </div>
                                                                  <div class="progress">
                                                                    <div class="progress-bar " role="progressbar" style="width: 45%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                                  </div>
                                                                  <div class="rating-hit">40%</div>
                                                                </li>
                                                                <li>
                                                                  <div class="star-value">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                  </div>
                                                                  <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                                  </div>
                                                                  <div class="rating-hit">51%</div>
                                                                </li>
                                                              </ul>
                                                            </div>
                                                        </div>
    </div>
</div>
                                </div>
                                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Patient Reviews</a>
                                <a class="nav-item nav-link" id="nav-expert-tab" data-toggle="tab" href="#nav-expert" role="tab" aria-controls="nav-home" aria-selected="false">Medical Expert Reviews</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">QnA</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="main-outer-cards">
                                    <div class="doctor-photo doctor-review-card-profile">
                                         <div class="image-inner-div"><img src="assets/img/doctors/01.jpg" alt="Image"></div>
                                    </div>
                                    <div class="doctor-information doctor-review-card-information">
                                     <p>July 11, 2020</p>   
                                        <h5 class="name">
                                            <a href="doctor-details.html">Lee S. Williamson</a>
                                        </h5>
                                        <div class="like-outers">
                                        <div class="like-btns">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    
                                </div>
                                <p>Dr. Aarti Sundar Rajan is practicing dental surgeon from 21 years with two branches.</p>
                            </div>
                                </div>
                                <div class="main-outer-cards">
                                    <div class="doctor-photo doctor-review-card-profile">
                                         <div class="image-inner-div"><img src="assets/img/doctors/02.jpg" alt="Image"></div>
                                    </div>
                                    <div class="doctor-information doctor-review-card-information">
                                     <p>July 11, 2020</p>   
                                        <h5 class="name">
                                            <a href="doctor-details.html">Lee S. Williamson</a>
                                        </h5>
                                        <div class="like-outers">
                                        <div class="like-btns">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    
                                </div>
                                <p>Dr. Aarti Sundar Rajan is practicing dental surgeon from 21 years with two branches.</p>
                            </div>
                                </div>
                                <div class="main-outer-cards ">
                                    <div class="doctor-photo doctor-review-card-profile">
                                         <div class="image-inner-div"><img src="assets/img/doctors/03.jpg" alt="Image"></div>
                                    </div>
                                    <div class="doctor-information doctor-review-card-information">
                                     <p>July 11, 2020</p>   
                                        <h5 class="name">
                                            <a href="doctor-details.html">Lee S. Williamson</a>
                                        </h5>
                                        <div class="like-outers">
                                        <div class="like-btns">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    
                                </div>
                                <p>Dr. Aarti Sundar Rajan is practicing dental surgeon from 21 years with two branches.</p>
                            </div>
                                </div>
                                <div class="main-outer-cards main-card-border">
                                    <div class="doctor-photo doctor-review-card-profile">
                                         <div class="image-inner-div"><img src="assets/img/doctors/04.jpg" alt="Image"></div>
                                    </div>
                                    <div class="doctor-information doctor-review-card-information">
                                     <p>July 11, 2020</p>   
                                        <h5 class="name">
                                            <a href="doctor-details.html">Lee S. Williamson</a>
                                        </h5>
                                        <div class="like-outers">
                                        <div class="like-btns">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    
                                </div>
                                <p>Dr. Aarti Sundar Rajan is practicing dental surgeon from 21 years with two branches.</p>
                            </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 my-review-form">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name" name="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 my-review-form">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email" name="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 my-review-form">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Subject" name="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 my-review-form">
                                        <div class="form-group">
                                            <textarea class="form-control textarea" placeholder="Comment Here *" name="message" id="message" cols="30" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 my-review-btn">
                                        <div class="form-group">
                                            <a href="" class="template-btn mt-40">SUBMIT COMMENT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-expert" role="tabpanel" aria-labelledby="nav-expert-tab">
                                <div class="main-outer-cards">
                                    <div class="doctor-photo doctor-review-card-profile">
                                         <div class="image-inner-div"><img src="assets/img/doctors/01.jpg" alt="Image"></div>
                                    </div>
                                    <div class="doctor-information doctor-review-card-information">
                                     <p>July 11, 2020</p>   
                                        <h5 class="name">
                                            <a href="doctor-details.html">Lee S. Williamson</a>
                                        </h5>
                                        <div class="like-outers">
                                        <div class="like-btns">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    
                                </div>
                                <p>Dr. Aarti Sundar Rajan is practicing dental surgeon from 21 years with two branches.</p>
                            </div>
                                </div>
                                <div class="main-outer-cards">
                                    <div class="doctor-photo doctor-review-card-profile">
                                         <div class="image-inner-div"><img src="assets/img/doctors/02.jpg" alt="Image"></div>
                                    </div>
                                    <div class="doctor-information doctor-review-card-information">
                                     <p>July 11, 2020</p>   
                                        <h5 class="name">
                                            <a href="doctor-details.html">Lee S. Williamson</a>
                                        </h5>
                                        <div class="like-outers">
                                        <div class="like-btns">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    
                                </div>
                                <p>Dr. Aarti Sundar Rajan is practicing dental surgeon from 21 years with two branches.</p>
                            </div>
                                </div>
                                <div class="main-outer-cards ">
                                    <div class="doctor-photo doctor-review-card-profile">
                                         <div class="image-inner-div"><img src="assets/img/doctors/03.jpg" alt="Image"></div>
                                    </div>
                                    <div class="doctor-information doctor-review-card-information">
                                     <p>July 11, 2020</p>   
                                        <h5 class="name">
                                            <a href="doctor-details.html">Lee S. Williamson</a>
                                        </h5>
                                        <div class="like-outers">
                                        <div class="like-btns">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    
                                </div>
                                <p>Dr. Aarti Sundar Rajan is practicing dental surgeon from 21 years with two branches.</p>
                            </div>
                                </div>
                                <div class="main-outer-cards main-card-border">
                                    <div class="doctor-photo doctor-review-card-profile">
                                         <div class="image-inner-div"><img src="assets/img/doctors/04.jpg" alt="Image"></div>
                                    </div>
                                    <div class="doctor-information doctor-review-card-information">
                                     <p>July 11, 2020</p>   
                                        <h5 class="name">
                                            <a href="doctor-details.html">Lee S. Williamson</a>
                                        </h5>
                                        <div class="like-outers">
                                        <div class="like-btns">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    
                                </div>
                                <p>Dr. Aarti Sundar Rajan is practicing dental surgeon from 21 years with two branches.</p>
                            </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 my-review-form">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name" name="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 my-review-form">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email" name="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 my-review-form">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Subject" name="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 my-review-form">
                                        <div class="form-group">
                                            <textarea class="form-control textarea" placeholder="Comment Here *" name="message" id="message" cols="30" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 my-review-btn">
                                        <div class="form-group">
                                            <a href="" class="template-btn mt-40">SUBMIT COMMENT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                               <section class="faq-section">
<div class="container">
  <div class="row">
                    <!-- ***** FAQ Start ***** -->
                    <div class="col-md-12">
                        <div class="faq" id="accordion">
                            <div class="card">
                                <div class="card-header" id="faqHeading-1">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                            <span class="badge">1</span>What is Lorem Ipsum?
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-2">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                            <span class="badge">2</span> Where does it come from?
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-3">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                            <span class="badge">3</span>Why do we use it?
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-4">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                            <span class="badge">4</span> Where can I get some?
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-5">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                            <span class="badge">5</span> What is Lorem Ipsum?
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                    <div class="card-body">
                                        <p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-6">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                            <span class="badge">6</span> Where does it come from?
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-7">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                                            <span class="badge">7</span> Why do we use it?
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                </section>
                            </div>
                        </div>
                    </div>
                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 my-right-card">
                        <div class="my-widget widget-user-about">
                            <div class="widget-heading">
                                <h3 class="widget-title">About Me</h3>
                            </div>
                            <div class="user-info">
                                <p>Hi! My name is Rebeca Powel but some people may know me asserty GamePagla! I have a Newbike channel where I stream.</p>
                                <ul class="info-list">
                                    <li><span>Joined:</span>24/12/2020</li>
                                    <li><span>E-mail:</span>info@gmail.com</li>
                                    <li><span>Address:</span>59 Street Neworkcity</li>
                                    <li><span>Phone:</span>+123 9856836</li>
                                    <li><span>Country:</span>USA</li>
                                    <li><span>Web:</span><a href="#">www.rebeca.com</a></li>
                                    <li class="social-share"><span>Social:</span>
                                        <div class="social-icon">
                                            <a href="#"><i class="icofont-facebook"></i></a>
                                            <a href="#"><i class="icofont-twitter"></i></a>
                                            <a href="#"><i class="icofont-dribbble"></i></a>
                                            <a href="#"><i class="icofont-whatsapp"></i></a>
                                            <a href="#"><i class="icofont-instagram"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-widget widget-user-about">
                            <div class="widget-heading">
                                <h3 class="widget-title">Services</h3>
                            </div>
                            <div class="user-info">

                                <ul class="info-list">
                                    <li><span>Blood Pressure</li>
                                    <li><span>Sugar</li>
                                    <li><span>Cardiology</li>
                              
                                
                                </ul>
                            </div>
                        </div>
                          <div class="my-widget widget-user-about">
                            <div class="widget-heading">
                                <h3 class="widget-title">More Info</h3>
                            </div>
                            <div class="user-info">
                                <p>Hi! My name is Rebeca Powel but some people may know me asserty GamePagla! I have a Newbike channel where I stream.</p>
                                <ul class="info-list">
                                    <li><span>Specializations:</span><p>Dentist</p></li>
                                    <li><span>Education:</span><p>Dental Sciences and Hospital, 1996</p></li>
                                    <li><span>Memberships:</span><p>Indian Dental Association</p></li>
                                    <li><span>Registrations:</span><p>4575A Karnataka State Dental Council, 1997</p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-widget widget-gallery">
                            <div class="widget-heading">
                                <h3 class="widget-title">Photo Gallery</h3>
                            </div>
                            <ul class="photo-list">
                                <li><a href="#"><img src="assets/img/gallery/01.jpg" alt="Image"></a></li>
                                <li><a href="#"><img src="assets/img/gallery/02.jpg" alt="Image"></li>
                                <li><a href="#"><img src="assets/img/gallery/03.jpg" alt="Image"></a></li>
                                <li><a href="#"><img src="assets/img/gallery/04.jpg" alt="Image"></a></li>
                                <li><a href="#"><img src="assets/img/gallery/05.jpg" alt="Image"></a></li>
                                <li><a href="#"><img src="assets/img/gallery/06.jpg" alt="Image"></a></li>
                                <li><a href="#"><img src="assets/img/gallery/07.jpg" alt="Image"></a></li>
                                <li><a href="#"><img src="assets/img/gallery/08.jpg" alt="Image"></a></li>
                                <li><a href="#" data-photo="20+"><img src="assets/img/gallery/09.jpg" alt="Image"></a></li>
                            </ul>
                        </div>
                        <div class="my-widget widget-gallery my-ads-section">
                           <h5 class="widget-title">Ads Section</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Why Choose Section End ======-->
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
    <script src="{{asset('/assets/js/jquery-3.6.0.min.js')}}"></script>
    <!--====== Bootstrap ======-->
    <script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
    <!--====== Slick slider ======-->
    <script src="{{asset('/assets/js/slick.min.js')}}"></script>
    <!--====== Isotope ======-->
    <script src="{{asset('/assets/js/isotope.pkgd.min.js')}}"></script>
    <!--====== Images loaded ======-->
    <script src="{{asset('/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <!--====== In-view ======-->
    <script src="{{('/assets/js/jquery.inview.min.js')}}"></script>
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