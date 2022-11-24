<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seeva - Medical and Dental HTML Template || Doctors</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}" type="img/png" />
    <!--====== Animate Css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}" />
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
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

    <!-- sign up form section start-->
       <section class="my-signup-section">
        <div class="container mt-4">
        <div class="col-md-5 mx-auto">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="title login-title text-center mb-4 mt-1">Recover</h2>
                </div>
            </div>
            <div class="card box-shadow-vendor p-3">
                <div class="card-body">
                    <div class="become-form">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="gmz-loader ">
                                <div class="loader-inner">
                                    <div class="spinner-grow text-info align-self-center loader-lg"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12">
                                <label for="email">Email<span class="required">*</span> </label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="gmz-message"></div>
                            <button type="submit" class="btn btn-primary pt-2 pl-3 pr-3 pb-2 w-100 signin-btn">Recover Password</button>
                            
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
    <!--====== Jquery ======-->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{('assets/js/jquery-3.6.0.min.js')}}"></script>
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