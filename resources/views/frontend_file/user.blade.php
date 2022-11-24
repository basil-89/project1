<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <!--====== Favicon Icon ======-->
    <link rel="stylesheet" href="{{('/assets/css/style.css')}}" />

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
    <link rel="stylesheet" href="{{('/assets/css/style.css')}}" />
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
    <header class="template-header sticky-header header-one absolute-header">
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
                <li class="active">
                  <a href="index.html">Home</a>
                </li>
                <li>
                  <a href="doctors.html">Doctors</a>
                  <ul class="sub-menu">
                    <li>
                      <a href="doctors.html">Doctor</a>
                    </li>
                    <li>
                      <a href="doctor-details.html">Doctor Details</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="Hospital.html">Hospital</a>
                  <ul class="sub-menu">
                    <li>
                      <a href="hospital.html">Hospital</a>
                    </li>
                    <li>
                      <a href="hospital-details.html">Hospital Details</a>
                    </li>
                  </ul>
                </li>
                <li>
                <li>
                  <a href="about.html">About</a>
                </li>
                <li>
                  <a href="blog-standard.html">Blog</a>
                  <ul class="sub-menu">
                    <li>
                      <a href="blog-standard.html">Blog</a>
                    </li>
                    <li>
                      <a href="blog-details.html">Blog Details</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="contact.html">Contact</a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="header-right">
            <ul class="extra-icons">
              <li class="d-none d-sm-block">
                <div class="header-search-area">
                  <form action="#">
                    <input type="search" placeholder="Search Here">
                    <button type="submit">
                      <i class="far fa-search"></i>
                    </button>
                  </form>
                </div>
              </li>
              @guest
              @if (Route::has('login'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
              @endif

              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                  </a>

              </li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

          @endguest              <li class="d-xl-none">
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
                  <li>
                    <a href="doctors.html">Doctor</a>
                  </li>
                  <li>
                    <a href="doctor-details.html">Doctor Details</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="Hospital.html">Hospital</a>
                <ul class="sub-menu">
                  <li>
                    <a href="hospital.html">Hospital</a>
                  </li>
                  <li>
                    <a href="hospital-details.html">Hospital Details</a>
                  </li>
                </ul>
              </li>
              <li>
              <li>
                <a href="about.html">About</a>
              </li>
              <li>
                <a href="blog-standard.html">Blog</a>
                <ul class="sub-menu">
                  <li>
                    <a href="blog-standard.html">Blog</a>
                  </li>
                  <li>
                    <a href="blog-details.html">Blog Details</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="contact.html">Contact</a>
              </li>
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
    <!--====== Hero Area Start ======-->
    <section class="hero-area-one">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-5 col-md-8">
            <div class="hero-content">
              <h1 class="title wow fadeInDown" data-wow-delay="0.3s">We Care Medical & Health</h1>
              <p class="wow fadeInLeft" data-wow-delay="0.4s">Dolor sit amet consectetur adipiscing elitsedes eiusmod tempor incididunt utlabore Lorem</p>
              <a href="contact.html" class="template-btn wow fadeInUp" data-wow-delay="0.5s">Get Started Now <i class="far fa-plus"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="hero-img wow fadeInUp" data-wow-delay="0.3s">
              <img src="assets/img/hero-img/hero-img.png" alt="Hero">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--====== Hero Area End ======-->
    <!-- copy section start hetre -->
    <div style="background:#D6E5F3">
      <section class="patient-web-app__sc-1dhgnuf-0 patient-web-app__sc-kq342h-0 jZXiGb dcEKQO">
        <div class="patient-web-app__sc-5bzs84-0 gSHrjS">
          <div class="patient-web-app__sc-5bzs84-1 eOqiQT">
            <div class="patient-web-app__sc-16doud8-0 ittocK">
              <h1 aria-label="Find local doctors who take your insurance">Find local
                <!-- -->
                <span id="spin"></span>
                <br> who take your insurance
              </h1>
              <form class="patient-web-app__sc-101i35i-0 liJSUr" method="post">
                <div class="patient-web-app__sc-ql22l4-10 eBoLJr">
                  <div class="patient-web-app__sc-ql22l4-9 jlIFhA">
                    <div class="patient-web-app__sc-ql22l4-0 dfycjS">
                      <div class="patient-web-app__sc-ql22l4-2 eoXejb">
                        <div>
                          <div data-dropdown-active="false" data-test="pps-wrapper" class="sc-jlsrNB dXASmh">
                            <div data-test="search-icon-wrapper" class="sc-ewSTlh goRofk">
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19">
                                <path fill="currentColor" fill-rule="evenodd" d="M7.486 2.493c-3.176 0-5.76 2.576-5.76 5.743 0 3.167 2.584 5.743 5.76 5.743 3.175 0 5.759-2.576 5.759-5.743 0-3.167-2.584-5.743-5.76-5.743m6.05 9.997l4.547 4.566-1.788 1.796-4.555-4.575a7.377 7.377 0 0 1-4.253 1.343c-4.083 0-7.404-3.313-7.404-7.384C.082 4.164 3.403.852 7.486.852s7.404 3.312 7.404 7.384a7.33 7.33 0 0 1-1.355 4.254z"></path>
                              </svg>
                            </div>
                            <div class="sc-dkqQuH hVMitN">
                              <input type="text" autocomplete="off" data-test="pps-text-box-input" name="patient-powered-search-input" placeholder="Condition, procedure, doctor..." value="" class="sc-kHxTfl flFVuN">
                              <span data-test="pps-text-box-close-wrapper" hidden="" class="sc-cVAmsi ljBETr">
                                <svg data-test="icon-close" viewBox="0 0 40 40" class="sc-bdvvtL sc-fFeiMQ fVAfpp">
                                  <polygon fill="#00234B" points="40,4 36,0 20,16 4,0 0,4 16,20 0,36 4,40 20,24 36,40 40,36 24,20"></polygon>
                                </svg>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="patient-web-app__sc-ql22l4-1 dvRTAF"></div>
                      <div class="patient-web-app__sc-ql22l4-3 cnxoYg">
                        <div data-test="search-bar-location" placeholder="City, state, or zip code" class="patient-web-app__sc-s5og22-0 eKvbZd">
                          <div data-test="location-icon" class="patient-web-app__sc-u4kqa7-0 dsXPEL">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="20" viewBox="0 0 12 20">
                              <path fill="currentColor" fill-rule="evenodd" d="M5.888 9.205c-1.87 0-3.387-1.501-3.387-3.353 0-1.851 1.516-3.352 3.387-3.352 1.87 0 3.386 1.501 3.386 3.352 0 1.852-1.516 3.353-3.386 3.353M5.986 0C2.68 0 0 2.653 0 5.926 0 7.682.799 9.35 1.17 10.17L5.488 20h.998l4.316-9.829c.372-.821 1.171-2.427 1.171-4.183C11.972 2.715 9.292 0 5.986 0"></path>
                            </svg>
                          </div>
                          <div data-dropdown-active="false" data-test="takeover-input" class="patient-web-app__sc-1j3nrry-3 Kukhn">
                            <div class="patient-web-app__sc-1j3nrry-4 eFilIX">
                              <div class="patient-web-app__sc-1j3nrry-5 ctoVvV">
                                <div data-test="location-icon" class="patient-web-app__sc-u4kqa7-0 dsXPEL">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="20" viewBox="0 0 12 20">
                                    <path fill="currentColor" fill-rule="evenodd" d="M5.888 9.205c-1.87 0-3.387-1.501-3.387-3.353 0-1.851 1.516-3.352 3.387-3.352 1.87 0 3.386 1.501 3.386 3.352 0 1.852-1.516 3.353-3.386 3.353M5.986 0C2.68 0 0 2.653 0 5.926 0 7.682.799 9.35 1.17 10.17L5.488 20h.998l4.316-9.829c.372-.821 1.171-2.427 1.171-4.183C11.972 2.715 9.292 0 5.986 0"></path>
                                  </svg>
                                </div>
                                <input type="text" autocomplete="off" data-test="takeover-input-input" data-uem-id="takeover-input-input" name="location-picker-input" placeholder="City, state, or zip code" value="" class="patient-web-app__sc-1j3nrry-6 bHBOck">
                                <svg data-test="takeover-input-clear-button" hidden="" class="sc-bdvvtL sc-fFeiMQ eoVYCR patient-web-app__sc-1j3nrry-7 bzLCef" viewBox="0 0 40 40">
                                  <polygon fill="#00234B" points="40,4 36,0 20,16 4,0 0,4 16,20 0,36 4,40 20,24 36,40 40,36 24,20"></polygon>
                                </svg>
                              </div>
                              <div hidden="" class="patient-web-app__sc-1j3nrry-8 fPBCrd"></div>
                              <div data-test="takeover-input-cancel-button" hidden="" class="patient-web-app__sc-1j3nrry-9 ewGkZf">Cancel</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="patient-web-app__sc-ql22l4-1 dvRTAF"></div>
                      <div data-test="date-picker-field-wrapper" class="patient-web-app__sc-ql22l4-4 exaQfA">
                        <div data-test="search-bar-datepicker" class="patient-web-app__sc-fnnv8l-0 bLbqek">
                          <span class="">
                            <span style="cursor:pointer">
                              <div data-test="date-picker-calendar-icon" class="patient-web-app__sc-1vo2311-0 izSKXh">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                  <path fill="currentColor" fill-rule="nonzero" d="M11.2 1.6V.8A.8.8 0 0 1 12 0h.8a.8.8 0 0 1 .8.8v.8A2.4 2.4 0 0 1 16 4v9.6a2.4 2.4 0 0 1-2.4 2.4H2.4A2.4 2.4 0 0 1 0 13.6V4a2.4 2.4 0 0 1 2.4-2.4V.8a.8.8 0 0 1 .8-.8H4a.8.8 0 0 1 .8.8v.8h6.4zM1.6 4.8v8.8a.8.8 0 0 0 .8.8h11.2a.8.8 0 0 0 .8-.8V4.8H1.6z"></path>
                                </svg>
                              </div>
                            </span>
                          </span>
                          <span class="">
                            <div data-test="textbox-wrapper" class="patient-web-app__sc-f9jwpk-0 gwirAp">
                              <input type="date-picker" autocapitalize="off" autocomplete="off" autocorrect="off" class="patient-web-app__sc-f9jwpk-1 kToDDj patient-web-app__sc-xgi8xz-0 TIws patient-web-app__sc-ql22l4-5 dZZhJC" data-test="search-bar-datepicker-textbox" placeholder="appointment date" readonly="" inputmode="text" value="Today">
                            </div>
                          </span>
                        </div>
                      </div>
                      <div class="patient-web-app__sc-ql22l4-1 dvRTAF"></div>
                      <div data-test="insurance-search-field-wrapper" class="patient-web-app__sc-ql22l4-6 JuLIF">
                        <div class="patient-web-app__sc-ret2d2-0 eDEYrD" data-uem-id="insurance-picker-wrapper">
                          <div data-test="textbox-wrapper" class="patient-web-app__sc-f9jwpk-0 gwirAp">
                            <div data-test="textbox-icon-wrapper" class="patient-web-app__sc-f9jwpk-2 nIzuV">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" viewBox="0 0 20 14" style="margin-top:4px">
                                <g fill="currentColor" fill-rule="nonzero">
                                  <path stroke="currentColor" d="M19.087 1c.228 0 .413.185.413.413v11.565a.413.413 0 0 1-.413.413H.913a.413.413 0 0 1-.413-.413V1.413C.5 1.185.685 1 .913 1h18.174zm-.413.826H1.326v10.74h17.348V1.825z"></path>
                                  <path stroke="currentColor" stroke-width=".5" d="M10.781 5.13h5.154c.203 0 .368-.184.368-.413 0-.228-.165-.413-.368-.413H10.78c-.203 0-.368.185-.368.413 0 .229.165.413.368.413zM10.781 7.609h5.154c.203 0 .368-.185.368-.413 0-.228-.165-.413-.368-.413H10.78c-.203 0-.368.185-.368.413 0 .228.165.413.368.413zM10.781 10.087h5.154c.203 0 .368-.185.368-.413 0-.228-.165-.413-.368-.413H10.78c-.203 0-.368.185-.368.413 0 .228.165.413.368.413z"></path>
                                  <path d="M6.808 6.458h1.19a.34.34 0 0 1 .34.339v.844a.34.34 0 0 1-.34.34h-1.19v1.23a.34.34 0 0 1-.34.339h-1.01a.34.34 0 0 1-.338-.34V7.98H3.927a.34.34 0 0 1-.34-.339v-.844a.34.34 0 0 1 .34-.34H5.12V5.14a.34.34 0 0 1 .339-.339h1.01a.34.34 0 0 1 .339.34v1.318z"></path>
                                </g>
                              </svg>
                            </div>
                            <input type="text" autocapitalize="off" autocomplete="off" autocorrect="off" class="patient-web-app__sc-f9jwpk-1 kToDAc patient-web-app__sc-13ns3b1-0 cFEqtG" data-test="insurance-picker-textbox" placeholder="Insurance carrier and plan" spellcheck="false" inputmode="text" data-uem-id="insurance-picker-textbox" value="">
                          </div>
                        </div>
                      </div>
                      <div class="patient-web-app__sc-ql22l4-1 bhlRgU"></div>
                    </div>
                  </div>
                  <button data-test="search-bar-search-button" title="Search for doctors" type="submit" class="patient-web-app__sc-yglqz4-2 jmIIvA patient-web-app__sc-ql22l4-8 hBAOkh" tabindex="0">
                    <svg data-test="icon-magnifying-glass" viewBox="0 0 38 40" class="sc-bdvvtL sc-cidDSM eoVYCR cznyrf">
                      <path d="M37.6,36L26.8,24.7c2.2-2.6,3.6-6,3.6-9.7c0-8.3-6.7-15-15-15s-15,6.7-15,15c0,8.3,6.7,15,15,15c2.5,0,4.8-0.6,6.8-1.7L33.4,40L37.6,36z M4.1,15c0-6.2,5.1-11.3,11.3-11.3S26.7,8.7,26.7,15s-5.1,11.3-11.3,11.3S4.1,21.2,4.1,15z" fill="currentColor"></path>
                    </svg>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- copy secton end here -->
    <!--====== Service Section Start ======-->
    <section class="service-section bg-color-grey section-gap popular-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-8">
            <div class="section-heading text-center mb-40">
              <span class="tagline">Popular Medical Services</span>
              <h2 class="title">Benefit For Physical Mental and Virtual Care</h2>
            </div>
          </div>
        </div>
        <div class="row justify-content-center service-loop">
          <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="iconic-box mt-30 wow fadeInUp" data-wow-delay="0.3s">
              <div class="icon">
                <img src="assets/img/icon/heart.png" alt="Icon">
              </div>
              <h4 class="title">
                <a href="service-details.html">Cardiology</a>
              </h4>
              <div class="box-link-wrap">
                <span class="link-icon">
                  <i class="far fa-plus"></i>
                </span>
                <a class="box-link" href="service-details.html">Find Doctors <i class="far fa-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="iconic-box mt-30 wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon">
                <img src="assets/img/icon/lungs.png" alt="Icon">
              </div>
              <h4 class="title">
                <a href="service-details.html">Pulmonary</a>
              </h4>
              <div class="box-link-wrap">
                <span class="link-icon">
                  <i class="far fa-plus"></i>
                </span>
                <a class="box-link" href="service-details.html">Find Doctors <i class="far fa-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="iconic-box mt-30 wow fadeInUp" data-wow-delay="0.5s">
              <div class="icon">
                <img src="assets/img/icon/brain.png" alt="Icon">
              </div>
              <h4 class="title">
                <a href="service-details.html">Neurology</a>
              </h4>
              <div class="box-link-wrap">
                <span class="link-icon">
                  <i class="far fa-plus"></i>
                </span>
                <a class="box-link" href="service-details.html">Find Doctors <i class="far fa-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="iconic-box mt-30 wow fadeInUp" data-wow-delay="0.6s">
              <div class="icon">
                <img src="assets/img/icon/stomach.png" alt="Icon">
              </div>
              <h4 class="title">
                <a href="service-details.html">Gastroenterology</a>
              </h4>
              <div class="box-link-wrap">
                <span class="link-icon">
                  <i class="far fa-plus"></i>
                </span>
                <a class="box-link" href="service-details.html">Find Doctors <i class="far fa-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="iconic-box mt-30 wow fadeInUp" data-wow-delay="0.7s">
              <div class="icon">
                <img src="assets/img/icon/virus.png" alt="Icon">
              </div>
              <h4 class="title">
                <a href="service-details.html">Covid - 19</a>
              </h4>
              <div class="box-link-wrap">
                <span class="link-icon">
                  <i class="far fa-plus"></i>
                </span>
                <a class="box-link" href="service-details.html">Find Doctors <i class="far fa-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="iconic-box mt-30 wow fadeInUp" data-wow-delay="0.8s">
              <div class="icon">
                <img src="assets/img/icon/bronchus.png" alt="Icon">
              </div>
              <h4 class="title">
                <a href="service-details.html">Orthopedics</a>
              </h4>
              <div class="box-link-wrap">
                <span class="link-icon">
                  <i class="far fa-plus"></i>
                </span>
                <a class="box-link" href="service-details.html">Find Doctors <i class="far fa-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-12 text-center see-more-btn">
            <a href="#" class="template-btn">See More</a>
          </div>
        </div>
      </div>
    </section>
    <!--====== Service Section End ======-->
    <!--====== Call to action Start ======-->
    <!--  <section class="cta-section cta-boxed-three get-section"><div class="container"><div class="cta-inner"><div class="row align-items-center justify-content-center"><div class="col-lg-6 order-lg-last"><div class="cta-img text-center text-lg-right wow fadeInUp" data-wow-delay="0.3s"><img class="animate-float-bob-y" src="assets/img/cta-img/illustration.png" alt="Image"></div></div><div class="col-lg-6 col-md-10"><div class="cta-content"><div class="section-heading heading-white"><span class="tagline">Get Our Doctors Consultations</span><h2 class="title">Find Your Best Doctors With Our Medical</h2></div><a href="#" class="template-btn mt-30">Get Started Now <i class="far fa-plus"></i></a></div></div></div></div></div></section> -->
    <!--====== Call to action End ======-->
    <!--====== Doctors With Counter Start ======-->
    <div class="doctors-with-counter">
      <!--====== Counter Section Start ======-->
      <section class="counter-section mt-5">
        <div class="container">
          <div class="counter-inner-three bg-color-secondary">
            <div class="row justify-content-between">
              <div class="col-lg-auto col-md-5 col-sm-6">
                <div class="counter-item counter-white">
                  <div class="counter-wrap">
                    <span class="counter">359</span>
                    <span class="suffix">+</span>
                  </div>
                  <h6 class="title">Professional Doctors</h6>
                </div>
              </div>
              <div class="col-lg-auto col-md-5 col-sm-6">
                <div class="counter-item counter-white">
                  <div class="counter-wrap">
                    <span class="counter">85</span>
                    <span class="suffix">k+</span>
                  </div>
                  <h6 class="title">Saticfied Our Clients</h6>
                </div>
              </div>
              <div class="col-lg-auto col-md-5 col-sm-6">
                <div class="counter-item counter-white">
                  <div class="counter-wrap">
                    <span class="counter">863</span>
                    <span class="suffix">+</span>
                  </div>
                  <h6 class="title">Win International Awards</h6>
                </div>
              </div>
              <div class="col-lg-auto col-md-5 col-sm-6">
                <div class="counter-item counter-white">
                  <div class="counter-wrap">
                    <span class="counter">86</span>
                    <span class="suffix">k+</span>
                  </div>
                  <h6 class="title">4.9 Star Reviews</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--====== Counter Section End ======-->
    </div>
    <!--====== Doctors With Counter End ======-->
    <!--====== Latest Blog Start ======-->
    <section class="latest-blog-section section-gap">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-9">
            <div class="section-heading text-center mb-40">
              <span class="tagline">Latest News & Blog</span>
              <h2 class="title">Get Every Single Updates For Medical & Health</h2>
            </div>
          </div>
        </div>
        <div class="row justify-content-center latest-blog-loop">
          <div class="col-lg-4 col-md-6 col-sm-10">
            <div class="latest-blog-two no-radius mt-30">
              <div class="thumbnail">
                <img src="assets/img/latest-blog/07.jpg" alt="Image">
              </div>
              <div class="blog-content">
                <div class="blog-meta">
                  <a href="#" class="blog-category">Health</a>
                  <a href="#" class="blog-date">
                    <i class="far fa-calendar-alt"></i> 25 Aug 2021 </a>
                </div>
                <h4 class="blog-title">
                  <a href="blog-details.html">Comprehensive Worksire Health Progranm Built</a>
                </h4>
                <p> Sed perspiciatis unde omnis natus error voluptatem accusantium dolore mque laudantium totam rem </p>
                <a href="blog-details.html" class="template-btn">Read More <i class="far fa-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-10">
            <div class="latest-blog-two no-radius mt-30">
              <div class="thumbnail">
                <img src="assets/img/latest-blog/08.jpg" alt="Image">
              </div>
              <div class="blog-content">
                <div class="blog-meta">
                  <a href="#" class="blog-category">Health</a>
                  <a href="#" class="blog-date">
                    <i class="far fa-calendar-alt"></i> 25 Aug 2021 </a>
                </div>
                <h4 class="blog-title">
                  <a href="blog-details.html">Front-End Performance Checklist 2021 PDF</a>
                </h4>
                <p> Sed perspiciatis unde omnis natus error voluptatem accusantium dolore mque laudantium totam rem </p>
                <a href="blog-details.html" class="template-btn">Read More <i class="far fa-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-10">
            <div class="latest-blog-two no-radius mt-30">
              <div class="thumbnail">
                <img src="assets/img/latest-blog/09.jpg" alt="Image">
              </div>
              <div class="blog-content">
                <div class="blog-meta">
                  <a href="#" class="blog-category">Health</a>
                  <a href="#" class="blog-date">
                    <i class="far fa-calendar-alt"></i> 25 Aug 2021 </a>
                </div>
                <h4 class="blog-title">
                  <a href="blog-details.html">DevTools Debugging Tips Shortcut Chrome Fire</a>
                </h4>
                <p> Sed perspiciatis unde omnis natus error voluptatem accusantium dolore mque laudantium totam rem </p>
                <a href="blog-details.html" class="template-btn">Read More <i class="far fa-plus"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--====== Latest Blog End ======-->
    <!--====== Back to Top Start ======-->
    <a class="back-to-top" href="#">
      <i class="far fa-angle-up"></i>
    </a>
    <!--====== Back to Top End ======-->
    <!-- safety hand section start here -->
    <div class="c-section">
      <div class="c-full-width">
        <div class="c-section__container">
          <div class="c-section__content">
            <div class="u-w-50 u-f-left">
              <div class="c-section__highlights">
                <div class="c-section__highlights_title">
                  <h2 class="u-d-inline">Safety of your data is our</h2>
                  <h2 class="u-t-bold">top priority.</h2>
                </div>
                <div class="c-list-item">
                  <div>
                    <i class="fas fa-check"></i>
                    <span>Multi-level security checks</span>
                  </div>
                </div>
                <div class="c-list-item">
                  <div>
                    <i class="fas fa-check"></i>
                    <span>Multiple data backups</span>
                  </div>
                </div>
                <div class="c-list-item">
                  <div>
                    <i class="fas fa-check"></i>
                    <span>Stringent data privacy policies</span>
                  </div>
                </div>
                <div data-qa-id="security-cta" class="u-m-t-25 u-d-inline-block">
                  <a class="c-button__redirect" href="#" target="_blank">Read more</a>
                </div>
              </div>
            </div>
            <div class="u-w-50 u-f-right">
              <div class="c-section__right">
                <img class="img-fluid" src="assets/img/safety/mainm-right.png">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="shere-folder">
      <div class="container">
        <div class="row">
          <div class="main-outer-folder">
            <div class="c-certificate u-d-inline-bloc">
              <img class="img-fluid" src="assets/img/safety/folder.png">
              <div class="c-certificate__info">
                <p class="u-t-large">256-bit</p>
                <p class="u-t-small">encryption</p>
              </div>
            </div>
            <div class="c-certificate u-d-inline-block">
              <img class="img-fluid" src="assets/img/safety/batch.png">
              <div class="c-certificate__info">
                <p class="u-t-large">ISO 27001</p>
                <p class="u-t-small">certified</p>
              </div>
            </div>
            <div class="c-certificate u-d-inline-block">
              <img class="img-fluid" src="assets/img/safety/bars.png">
              <div class="c-certificate__info">
                <p class="u-t-large">HIPAA</p>
                <p class="u-t-small">compliant data centers</p>
              </div>
            </div>
            <div class="c-certificate u-d-inline-block">
              <img class="img-fluid" src="assets/img/safety/security_5.png">
              <div class="c-certificate__info">
                <p class="u-t-large">DSCI</p>
                <p class="u-t-small">member</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- safety hand doctor section end here -->
<!-- Find Doctor Sectuion -->
<section class="find-doctor-section">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="pb-5">Find doctors and dentists by city</h2>
            </div>
            <div class="col-md-3">
                <div class="accordion">
                    <div class="accordion__header">
                        <h2>New York City</h2>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div class="accordion__body">
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">South York</a><br/>
                    </div>
                    <div class="accordion__header">
                        <h2>New York City</h2>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div class="accordion__body">
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">South York</a><br/>
                    </div>
                    <div class="accordion__header">
                        <h2>New York City</h2>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div class="accordion__body">
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">South York</a><br/>
                    </div>
                    <div class="accordion__header">
                        <h2>New York City</h2>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div class="accordion__body">
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">South York</a><br/>
                    </div>
                    <div class="accordion__header">
                        <h2>New York City</h2>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div class="accordion__body">
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">South York</a><br/>
                    </div>
                 
                
                </div>
               
            </div>
            <div class="col-md-3">
                <div class="accordion">
            
                    <div class="accordion__header">
                        <h2>New York City</h2>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div class="accordion__body">
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">South York</a><br/>
                    </div>
                    <div class="accordion__header">
                        <h2>New York City</h2>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div class="accordion__body">
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">South York</a><br/>
                    </div>
                    <div class="accordion__header">
                        <h2>New York City</h2>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div class="accordion__body">
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">South York</a><br/>
                    </div>
                    <div class="accordion__header">
                        <h2>New York City</h2>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div class="accordion__body">
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">South York</a><br/>
                    </div>
                    <div class="accordion__header">
                        <h2>New York City</h2>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div class="accordion__body">
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">South York</a><br/>
                    </div>
                
                </div>
               
            </div>
            <div class="col-md-3">
                <div class="accordion">
               
                    <div class="accordion__header">
                        <h2>New York City</h2>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div class="accordion__body">
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">South York</a><br/>
                    </div>
                    <div class="accordion__header">
                        <h2>New York City</h2>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div class="accordion__body">
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">South York</a><br/>
                    </div>
                    <div class="accordion__header">
                        <h2>New York City</h2>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div class="accordion__body">
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">South York</a><br/>
                    </div>
                    <div class="accordion__header">
                        <h2>New York City</h2>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div class="accordion__body">
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">South York</a><br/>
                    </div>
                    <div class="accordion__header">
                        <h2>New York City</h2>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div class="accordion__body">
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">South York</a><br/>
                    </div>
                
                </div>
               
            </div>
            <div class="col-md-3">
                <div class="accordion">
            
                    <div class="accordion__header">
                        <h2>New York City</h2>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div class="accordion__body">
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">South York</a><br/>
                    </div>
                    <div class="accordion__header">
                        <h2>New York City</h2>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div class="accordion__body">
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">South York</a><br/>
                    </div>
                    <div class="accordion__header">
                        <h2>New York City</h2>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div class="accordion__body">
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">South York</a><br/>
                    </div>
                    <div class="accordion__header">
                        <h2>New York City</h2>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div class="accordion__body">
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">South York</a><br/>
                    </div>
                    <div class="accordion__header">
                        <h2>New York City</h2>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div class="accordion__body">
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">North York</a><br/>
                        <a href="#">South York</a><br/>
                        <a href="#">South York</a><br/>
                    </div>
                
                </div>
               
            </div>
    </div>
    </div>
</section>

<!--Recents REviews  -->
<section class="doctors-section section-gap">
    <div class="container">
        <div class="row doctors-loop">
            <div class="col-lg-12 col-md-12 col-12 feature-title">
                <h2 class="title">Latest Reviews</h2>
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
                        
                        <div class="like-outer">
                            <div class="like-btn">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                
                            </div>
                            <div class="patient-stories">
                                <a href="#">2435(reviews)</a>
                                <p>"Great first time experience.!!"</p>
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
                   
                        <div class="like-outer">
                            <div class="like-btn">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="patient-stories">
                                <a href="#">2435(reviews)</a>
                                <p>"Great first time experience.!!"</p>
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
                      
                        <div class="like-outer">
                            <div class="like-btn">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="patient-stories">
                                <a href="#">2435(reviews)</a>
                                <p>"Great first time experience.!!"</p>
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
                        
                        <div class="like-outer">
                            <div class="like-btn">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="patient-stories">
                                <a href="#">2435(reviews)</a>
                                <p>"Great first time experience.!!"</p>
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
                      
                        <div class="like-outer">
                            <div class="like-btn">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="patient-stories">
                                <a href="#">2435(reviews)</a>
                                <p>"Great first time experience.!!"</p>
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
                     
                        <div class="like-outer">
                            <div class="like-btn">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="patient-stories">
                                <a href="#">2435(reviews)</a>
                                <p>"Great first time experience.!!"</p>
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
                    <li>
                      <a href="#" class="template-btn template-btn-white">Register as Doctor <i class="far fa-plus"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="template-btn template-btn-bordered">Register as Hospital <i class="far fa-plus"></i>
                      </a>
                    </li>
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
                  <p> Sed ut perspi unde omniste natus error sit voluptatem acc doloremque laudantium </p>
                  <ul class="contact-list">
                    <li>
                      <a href="https://goo.gl/maps/inpkL6wUZqMR3opX7">
                        <i class="far fa-map-marker-alt"></i>55 Main Road, USA </a>
                    </li>
                    <li>
                      <a href="https://demo.webtend.net/cdn-cgi/l/email-protection#275452575748555367404a464e4b0944484a">
                        <i class="far fa-envelope"></i>
                        <span class="__cf_email__" data-cfemail="7e0d0b0e0e110c0a3e19131f1712501d1113">[email&#160;protected]</span>
                      </a>
                    </li>
                    <li>
                      <a href="tel:01267899">
                        <i class="far fa-phone"></i>+012 (345) 678 99 </a>
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
                        <li>
                          <a href="#">Orthopedic Care</a>
                        </li>
                        <li>
                          <a href="#">Gynecology Care</a>
                        </li>
                        <li>
                          <a href="#">Cardiology Care</a>
                        </li>
                        <li>
                          <a href="#">Dentistry Care</a>
                        </li>
                        <li>
                          <a href="#">Gastroenterology</a>
                        </li>
                        <li>
                          <a href="#">Urgent Care</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xl-7 col-md-6">
                    <div class="widget instagram-widget">
                      <h4 class="widget-title">Photo Gallery</h4>
                      <div class="instagram-images">
                        <div class="single-image">
                          <img src="assets/img/instagram/01.jpg" alt="Instagram">
                          <a href="#">
                            <i class="fab fa-instagram"></i>
                          </a>
                        </div>
                        <div class="single-image">
                          <img src="assets/img/instagram/02.jpg" alt="Instagram">
                          <a href="#">
                            <i class="fab fa-instagram"></i>
                          </a>
                        </div>
                        <div class="single-image">
                          <img src="assets/img/instagram/03.jpg" alt="Instagram">
                          <a href="#">
                            <i class="fab fa-instagram"></i>
                          </a>
                        </div>
                        <div class="single-image">
                          <img src="assets/img/instagram/04.jpg" alt="Instagram">
                          <a href="#">
                            <i class="fab fa-instagram"></i>
                          </a>
                        </div>
                        <div class="single-image">
                          <img src="assets/img/instagram/05.jpg" alt="Instagram">
                          <a href="#">
                            <i class="fab fa-instagram"></i>
                          </a>
                        </div>
                        <div class="single-image">
                          <img src="assets/img/instagram/06.jpg" alt="Instagram">
                          <a href="#">
                            <i class="fab fa-instagram"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-10">
                <div class="widget newsletters-widget">
                  <h4 class="widget-title">Newsletters</h4>
                  <p> Sed ut perspiciatis unde omniste <br> natus error sit voluptatem </p>
                  <form action="#" class="newsletters-form">
                    <input type="email" placeholder="Email Address">
                    <button type="submit">
                      <i class="far fa-arrow-right"></i>
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="copyright-area">
            <p>© 2021 <a href="#"></a>. All Rights Reserved </p>
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