<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoodDoc - Home</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{('assets/img/favicon.ico')}}" type="img/png" />
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
    <!-- Mega Menu -->

    @include('header_file.header')

    <nav class="navbar navbar-default w3_megamenu" role="navigation">
        <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target="#defaultmenu" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="#" class="navbar-brand"><i class="fa fa-home"></i></a>
        </div><!-- end navbar-header -->
        <div id="defaultmenu" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="javascript:;">Home</a></li>
                <!-- Mega Menu -->
                <li class="dropdown w3_megamenu-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">W3lessons<b class="caret"></b></a>
                    <ul class="dropdown-menu fullwidth">
                        <li class="w3_megamenu-content">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h3 class="title">Facebook Wall Script</h3>
                                    <iframe width="400" height="225" src="//www.youtube.com/embed/IHYVUjSK4vA" frameborder="0" allowfullscreen></iframe>
                                </div><!-- end col-4 -->
                                <div class="col-sm-4">
                                    <h3 class="title">HTML5 Tutorials</h3>
                                    <ul class="media-list">
                                        <li class="media"><a href="http://w3lessons.info/2014/04/13/html5-inline-edit-with-php-mysql-jquery-ajax/" class="pull-right"><img src="http://w3lessons.info/wp-content/uploads/2014/04/html5.png" alt="" width="70" class="img-thumbnail media-object"></a>
                                            <div class="media-body">
                                                <p>HTML5 Inline Edit with PHP, MYSQL & jQuery Ajax</p>
                                            </div>
                                        </li>
                                        <li class="media"><a href="http://w3lessons.info/2014/03/22/advanced-html5-tutorials-client-side-offline-geolocation-part-i/" class="pull-right"><img src="http://w3lessons.info/wp-content/uploads/2014/03/Advanced-HTML5-Tutorials-332x187.png" alt="" width="70" class="img-thumbnail media-object"></a>
                                            <div class="media-body">
                                                <p>Advanced HTML5 Tutorials - Working Offline, Geolocation, Client Side Data Storage</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!-- end col-4 -->
                                <div class="col-sm-4">
                                    <h3 class="title">Add Google Map</h3>
                                    <img src="https://maps.googleapis.com/maps/api/staticmap?center=chennai&zoom=12&size=160x105&maptype=roadmap&markers=color:red%7Cchennai&sensor=false&scale=2">
                                </div><!-- end col-4 -->
                            </div><!-- end row -->
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3 class="title">About W3lessons.info</h3>
                                    <p>W3lessons.info is a web2.0 programming blog maintained by Karthikeyan. Tutorials focused on Programming, Jquery, Ajax, CSS3, HTML5, PHP, Web Services etc</p>
                                </div><!-- end col-6 -->
                                <div class="col-sm-3">
                                    <h3 class="title">Follow W3lessons.info</h3>
                                    <p> <iframe src="https://www.facebook.com/plugins/like.php?href=https://www.facebook.com/w3lessons.info" scrolling="no" frameborder="0" style="border:none; width:300px; height:120px"></iframe></p>
                                </div><!-- end col-3 -->
                                <div class="col-sm-3">
                                    <h3 class="title">Subscribe</h3>
                                    <p>
                                        <form class="fbf-widget" action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onSubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=nextweb2', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
                                            <input class="subscription_email" type="text" name="email" placeholder="Enter email" /><input type="hidden" value="nextweb2" name="uri" />
                                            <input type="hidden" name="loc" value="en_US" />
                                            <input class="subscription_btn" type="submit" value="Go" />
                                        </form>
                                    </p>
                                    <p><img src="http://feeds.feedburner.com/~fc/nextweb2?bg=FF9900&amp;fg=000&amp;anim=1&amp;label=readers" height="26" width="88" style="border:0" alt="" /></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown w3_megamenu-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Mega DropDown<b class="caret"></b></a>
                    <ul class="dropdown-menu fullwidth">
                        <li class="w3_megamenu-content withdesc">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h3 class="title">CSS3</h3>
                                    <ul>
                                        <li><a data-description="Image Animation" href="http://w3lessons.info/2014/02/15/animate-images-on-page-scroll-using-jquery-css3/">Animate Images on Page Scroll using jQuery & CSS3</a></li>
                                        <li><a data-description="Tooltips" href="http://w3lessons.info/2014/02/13/fancy-tooltips-using-css3/">Fancy Tooltips using CSS3</a></li>
                                        <li><a data-description="Image Animation" href="http://w3lessons.info/2013/11/14/image-hover-effects-using-css3/">Image Hover Effects using CSS3</a></li>
                                        <li><a data-description="Metro Style Boxes" href="http://w3lessons.info/2013/08/26/animated-windows-metro-boxes-using-css3/">Animated Windows Metro Boxes using CSS3</a></li>
                                        <li><a data-description="Css3 Skill bar" href="http://w3lessons.info/2013/06/04/skill-bar-with-jquery-css3/">Skill Bar with jQuery & CSS3</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-3">
                                    <h3 class="title">jQuery</h3>
                                    <ul>
                                        <li><a data-description="DropDown Menu" href="http://w3lessons.info/2013/12/26/mashable-style-ajax-drop-down-menu-using-php-mysql-jquery/">Mashable Style Ajax Drop Down Menu using PHP, Mysql & jQuery</a></li>
                                        <li><a data-description="Facebook Friends Search" href="http://w3lessons.info/2013/12/12/facebook-style-search-friends-using-jquery/">Facebook Style Search Friends using jQuery</a></li>
                                        <li><a data-description="Text Search" href="http://w3lessons.info/2013/12/11/live-text-search-using-jquery/">Live Text Search using jQuery</a></li>
                                        <li><a data-description="Security" href="http://w3lessons.info/2013/10/28/secure-web-page-content-using-jquery/">Protect / Secure your Website Content using jQuery</a></li>
                                        <li><a data-description="Page Speed" href="http://w3lessons.info/2013/07/11/how-to-reduce-web-page-loading-time-with-jquery/">How to reduce web page loading time with jQuery</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-3">
                                    <h3 class="title">PHP</h3>
                                    <ul>
                                        <li><a data-description="Checking Expired Sessions" href="http://w3lessons.info/2014/01/01/how-to-check-expired-sessions-using-php-jquery-ajax/">How to Check Expired Sessions using PHP & jQuery Ajax</a></li>
                                        <li><a data-description="Smiley Parser" href="http://w3lessons.info/2013/08/11/smiley-parser-with-php/">Smiley Parser with PHP</a></li>
                                        <li><a data-description="IP address validation" href="http://w3lessons.info/2013/04/01/validate-ipv4-address-in-php/">Validate IPv4 Address in PHP</a></li>
                                        <li><a data-description="PHP TimeZones" href="http://w3lessons.info/2012/11/11/php-country-time-zones/">PHP Country Time Zones</a></li>
                                        <li><a data-description="Fixing Urls" href="http://w3lessons.info/2012/09/14/fixing-url-using-php-by-adding-http-https/">Fixing url using PHP by adding http & https</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-3">
                                    <h3 class="title">HTMl5</h3>
                                    <ul>
                                        <li><a data-description="HTML5 Inline Edit" href="http://w3lessons.info/2014/04/13/html5-inline-edit-with-php-mysql-jquery-ajax/">HTML5 Inline Edit with PHP, MYSQL & jQuery Ajax</a></li>
                                        <li><a data-description="Advanced HTML5 Tutorials" href="http://w3lessons.info/2014/03/22/advanced-html5-tutorials-client-side-offline-geolocation-part-i/">Advanced HTML5 Tutorials – Client Side, Offline, Geolocation – Part I</a></li>
                                        <li><a data-description="HTML5 Chart" href="http://w3lessons.info/2013/04/08/html5-chart/">HTML5 Chart</a></li>
                                        <li><a data-description="HTML5 Whiteboard Marker" href="http://w3lessons.info/2012/12/22/white-board-drawing-widget-using-html5/">WhiteBoard Drawing Widget using HTML5</a></li>
                                        <li><a data-description="Free HTML5 Ebook" href="http://w3lessons.info/2012/03/23/free-html5-and-css3-ebook/">Free HTML5 and CSS3 Ebook</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown w3_megamenu-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Mega Menu 2 <b class="caret"></b></a>
                    <ul class="dropdown-menu half">
                        <li class="w3_megamenu-content withoutdesc">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3 class="title">PHP</h3>
                                    <ul>
                                        <li><a data-description="Facebook Url Expander" href="http://w3lessons.info/2015/06/01/facebook-url-expander-with-jquery-ajax-and-php/">Facebook Url Expander with jQuery Ajax and PHP</a></li>
                                        <li><a data-description="Google oAuth login" href="http://w3lessons.info/2015/05/19/google-oauth-2-0-ajax-login-using-jquery-php-mysql/">Google OAuth 2.0 Ajax Login using jQuery, PHP & MYSQL</a></li>
                                        <li><a data-description="Instant Soundcloud Search" href="http://w3lessons.info/2014/10/01/instant-soundcloud-search-using-php-jquery-ajax/">Instant Soundcloud Search using PHP & jQuery Ajax</a></li>
                                        <li><a data-description="PHP TimeZones" href="http://w3lessons.info/2012/11/11/php-country-time-zones/">PHP Country Time Zones</a></li>
                                        <li><a data-description="Fixing Urls" href="http://w3lessons.info/2012/09/14/fixing-url-using-php-by-adding-http-https/">Fixing url using PHP by adding http & https</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <h3 class="title">HTMl5</h3>
                                    <ul>
                                        <li><a data-description="HTML5 Inline Edit" href="http://w3lessons.info/2014/04/13/html5-inline-edit-with-php-mysql-jquery-ajax/">HTML5 Inline Edit with PHP, MYSQL & jQuery Ajax</a></li>
                                        <li><a data-description="Advanced HTML5 Tutorials" href="http://w3lessons.info/2014/03/22/advanced-html5-tutorials-client-side-offline-geolocation-part-i/">Advanced HTML5 Tutorials – Client Side, Offline, Geolocation – Part I</a></li>
                                        <li><a data-description="HTML5 Chart" href="http://w3lessons.info/2013/04/08/html5-chart/">HTML5 Chart</a></li>
                                        <li><a data-description="HTML5 Whiteboard Marker" href="http://w3lessons.info/2012/12/22/white-board-drawing-widget-using-html5/">WhiteBoard Drawing Widget using HTML5</a></li>
                                        <li><a data-description="Free HTML5 Ebook" href="http://w3lessons.info/2012/03/23/free-html5-and-css3-ebook/">Free HTML5 and CSS3 Ebook</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Facebook <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="http://w3lessons.info/2013/10/29/facebook-style-tag-selector-using-jquery-css3/">Facebook Style Tag Selector</a></li>
                        <li><a href="http://w3lessons.info/2013/10/17/facebook-style-homepage-design-with-registration-form-login-form-using-css3/">Facebook Style Home Page</a></li>
                        <li><a href="http://w3lessons.info/2013/03/22/facebook-like-tooltip-using-jquery-css/">Facebook Style ToolTip</a></li>
                        <li><a href="http://w3lessons.info/2012/12/28/css3-facebook-style-buttons/">Facebook Style Buttons</a></li>
                        <li><a href="http://w3lessons.info/2012/01/03/facebook-like-fetch-url-data-using-php-curl-jquery-and-ajax/">Facebook Style Url Data Extracter</a></li>
                        <li><a href="http://w3lessons.info/2013/05/25/facebook-style-youtube-video-vimeo-video-soundcloud-audio-url-expander-with-jquery-php/">Facebook Style Video Url Expander</a></li>
                        <li class="dropdown-submenu">
                            <a href="#">Wall Scripts</a>
                            <ul class="dropdown-menu">
                                <li><a href="http://w3lessons.info/2013/09/24/facebook-wall-script-4-0-with-php-codeigniter-mvc-framework/">Facebook Wall Script 4.0 &#8211; Codeigniter</a></li>
                                <li><a href="http://w3lessons.info/2013/04/21/facebook-wall-script-3-0-timeline-oauth-location-sharing-smileys-many-more/">Facebook Wall Script 3.0</a></li>
                                <li><a href="http://w3lessons.info/2013/03/24/facebook-timeline-wall-script-2-0-with-php-mysql-jquery/">Facebook Wall Script 2.0</a></li>
                            </ul><!-- end dropdown-menu -->
                        </li><!-- end dropdown-submenu -->
                    </ul><!-- end dropdown-menu -->
                </li><!-- end standard drop down -->
                <!-- end dropdown w3_megamenu-fw -->
            </ul><!-- end nav navbar-nav -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Contact Us<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <form id="contact1" action="#" name="contactform" method="post">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input type="text" name="name" id="name1" class="form-control" placeholder="Name">
                                    <input type="text" name="email" id="email1" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input type="text" name="phone" id="phone1" class="form-control" placeholder="Phone">
                                    <input type="text" name="subject" id="subject1" class="form-control" placeholder="Subject">
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" id="comments1" rows="6" placeholder="Your Message ..."></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="pull-right">
                                        <input type="submit" value="SEND" id="submit1" class="btn btn-primary small">
                                    </div>
                                </div>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul><!-- end nav navbar-nav navbar-right -->
        </div><!-- end #navbar-collapse-1 -->
    </nav><!-- end navbar navbar-default w3_megamenu -->
    <br><br>
    <div class="container">
        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">My Store</a>
            </div>
            <div class="collapse navbar-collapse js-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown mega-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <span class="caret"></span></a>
                        <ul class="dropdown-menu mega-dropdown-menu">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Men Collection</li>
                                    <div id="menCollection" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                                <h4><small>Summer dress floral prints</small></h4>
                                                <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                                            </div><!-- End Item -->
                                            <div class="item">
                                                <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                                <h4><small>Gold sandals with shiny touch</small></h4>
                                                <button class="btn btn-primary" type="button">9,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                                            </div><!-- End Item -->
                                            <div class="item">
                                                <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                                <h4><small>Denin jacket stamped</small></h4>
                                                <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                                            </div><!-- End Item -->
                                        </div><!-- End Carousel Inner -->
                                        <!-- Controls -->
                                        <a class="left carousel-control" href="#menCollection" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#menCollection" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div><!-- /.carousel -->
                                    <li class="divider"></li>
                                    <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Features</li>
                                    <li><a href="#">Auto Carousel</a></li>
                                    <li><a href="#">Carousel Control</a></li>
                                    <li><a href="#">Left & Right Navigation</a></li>
                                    <li><a href="#">Four Columns Grid</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Fonts</li>
                                    <li><a href="#">Glyphicon</a></li>
                                    <li><a href="#">Google Fonts</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Plus</li>
                                    <li><a href="#">Navbar Inverse</a></li>
                                    <li><a href="#">Pull Right Elements</a></li>
                                    <li><a href="#">Coloured Headers</a></li>
                                    <li><a href="#">Primary Buttons & Default</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Much more</li>
                                    <li><a href="#">Easy to Customize</a></li>
                                    <li><a href="#">Calls to action</a></li>
                                    <li><a href="#">Custom Fonts</a></li>
                                    <li><a href="#">Slide down on Hover</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown mega-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Women <span class="caret"></span></a>
                        <ul class="dropdown-menu mega-dropdown-menu">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Features</li>
                                    <li><a href="#">Auto Carousel</a></li>
                                    <li><a href="#">Carousel Control</a></li>
                                    <li><a href="#">Left & Right Navigation</a></li>
                                    <li><a href="#">Four Columns Grid</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Fonts</li>
                                    <li><a href="#">Glyphicon</a></li>
                                    <li><a href="#">Google Fonts</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Plus</li>
                                    <li><a href="#">Navbar Inverse</a></li>
                                    <li><a href="#">Pull Right Elements</a></li>
                                    <li><a href="#">Coloured Headers</a></li>
                                    <li><a href="#">Primary Buttons & Default</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Much more</li>
                                    <li><a href="#">Easy to Customize</a></li>
                                    <li><a href="#">Calls to action</a></li>
                                    <li><a href="#">Custom Fonts</a></li>
                                    <li><a href="#">Slide down on Hover</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Women Collection</li>
                                    <div id="womenCollection" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                                <h4><small>Summer dress floral prints</small></h4>
                                                <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                                            </div><!-- End Item -->
                                            <div class="item">
                                                <a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                                <h4><small>Gold sandals with shiny touch</small></h4>
                                                <button class="btn btn-primary" type="button">9,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                                            </div><!-- End Item -->
                                            <div class="item">
                                                <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                                <h4><small>Denin jacket stamped</small></h4>
                                                <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                                            </div><!-- End Item -->
                                        </div><!-- End Carousel Inner -->
                                        <!-- Controls -->
                                        <a class="left carousel-control" href="#womenCollection" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#womenCollection" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div><!-- /.carousel -->
                                    <li class="divider"></li>
                                    <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Store locator</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My account <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                    <li><a href="#">My cart (0) items</a></li>
                </ul>
            </div><!-- /.nav-collapse -->
        </nav>
    </div>
    <!-- Mega Menu Ends -->
    <!-- copy section start hetre -->
    <div style="background:#D6E5F3; margin-top: 112px;">
        <section class="patient-web-app__sc-1dhgnuf-0 patient-web-app__sc-kq342h-0 jZXiGb dcEKQO">
            <div class="patient-web-app__sc-5bzs84-0 gSHrjS">
                <div class="patient-web-app__sc-5bzs84-1 eOqiQT">
                    <div class="patient-web-app__sc-16doud8-0 ittocK">
                        <h1 aria-label="Find local doctors who take your insurance">Find the right
                            <!-- -->
                            <span id="spin"></span>
                            <br> right at your fingertips
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
                                                        <input type="text" autocomplete="off" data-test="pps-text-box-input" name="patient-powered-search-input" placeholder="Search by Name..." value="" class="sc-kHxTfl flFVuN">
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
                                            <div data-test="search-bar-location" placeholder="Search by City" class="patient-web-app__sc-s5og22-0 eKvbZd">
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
                                                        <select class="patient-web-app__sc-f9jwpk-1 kToDDj patient-web-app__sc-xgi8xz-0 TIws patient-web-app__sc-ql22l4-5 dZZhJC" data-test="search-bar-datepicker-textbox" placeholder="appointment date" readonly="" inputmode="text">
                                                @foreach($department as $cat)
                                                            <option>{{$cat->category_name}}</option>
                                                 @endforeach           
                                                        </select>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
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
    <!--====== Service Section End ======-->
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
            {{-- <div class="row justify-content-center service-loop">
                <div class="col-lg-2 col-md-6 col-sm-8">
                    <div class="iconic-box mt-30 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="icon">
                            <img src="assets/img/icon/heart.png" alt="Icon">
                        </div>
                        <h4 class="title">
                            <a href="service-details.html">Cardiology</a>
                        </h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-8">
                    <div class="iconic-box mt-30 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon">
                            <img src="assets/img/icon/lungs.png" alt="Icon">
                        </div>
                        <h4 class="title">
                            <a href="service-details.html">Pulmonary</a>
                        </h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-8">
                    <div class="iconic-box mt-30 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="icon">
                            <img src="assets/img/icon/brain.png" alt="Icon">
                        </div>
                        <h4 class="title">
                            <a href="service-details.html">Neurology</a>
                        </h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-8">
                    <div class="iconic-box mt-30 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="icon">
                            <img src="assets/img/icon/stomach.png" alt="Icon">
                        </div>
                        <h4 class="title">
                            <a href="service-details.html">Gastroenterology</a>
                        </h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-8">
                    <div class="iconic-box mt-30 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="icon">
                            <img src="assets/img/icon/virus.png" alt="Icon">
                        </div>
                        <h4 class="title">
                            <a href="service-details.html">Covid - 19</a>
                        </h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-8">
                    <div class="iconic-box mt-30 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="icon">
                            <img src="assets/img/icon/bronchus.png" alt="Icon">
                        </div>
                        <h4 class="title">
                            <a href="service-details.html">Orthopedics</a>
                        </h4>
                    </div>
                </div>
            </div> --}}
            <div class="row justify-content-center service-loop">
                        @foreach($department as $cat)
                <div class="col-lg-2 col-md-6 col-sm-8">
                    <div class="iconic-box mt-30 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="icon">
                            <img src="{{asset('/assets/img/icon/'.$cat->image)}}" alt="Icon">
                        </div>
                        <h4 class="title">
                            <a href="service-details.html">{{$cat->category_name}}</a>
                        </h4>
                    </div>
                </div>

                @endforeach

                {{-- <div class="col-lg-2 col-md-6 col-sm-8">
                    <div class="iconic-box mt-30 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon">
                            <img src="assets/img/icon/lungs.png" alt="Icon">
                        </div>
                        <h4 class="title">
                            <a href="service-details.html">Pulmonary</a>
                        </h4>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-2 col-md-6 col-sm-8">
                    <div class="iconic-box mt-30 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="icon">
                            <img src="assets/img/icon/brain.png" alt="Icon">
                        </div>
                        <h4 class="title">
                            <a href="service-details.html">Neurology</a>
                        </h4>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-2 col-md-6 col-sm-8">
                    <div class="iconic-box mt-30 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="icon">
                            <img src="assets/img/icon/stomach.png" alt="Icon">
                        </div>
                        <h4 class="title">
                            <a href="service-details.html">Gastroenterology</a>
                        </h4>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-2 col-md-6 col-sm-8">
                    <div class="iconic-box mt-30 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="icon">
                            <img src="assets/img/icon/virus.png" alt="Icon">
                        </div>
                        <h4 class="title">
                            <a href="service-details.html">Covid - 19</a>
                        </h4>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-2 col-md-6 col-sm-8">
                    <div class="iconic-box mt-30 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="icon">
                            <img src="assets/img/icon/bronchus.png" alt="Icon">
                        </div>
                        <h4 class="title">
                            <a href="service-details.html">Orthopedics</a>
                        </h4>
                    </div>
                </div> --}}
                <div class="col-md-12 text-center see-more-btn mb-4">
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
                            <p> Sed perspiciatis unde omnis natus error voluptatem accusantium</p>
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
                            <p> Sed perspiciatis unde omnis natus error voluptatem accusantium</p>
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
                            <p> Sed perspiciatis unde omnis natus error voluptatem accusantium</p>
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
                            <div class="u-m-t-25 u-d-inline-block">
                                <a class="template-btn" href="#" target="_blank">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="u-w-50 u-f-right">
                        <div class="c-section__right">
                            <img class="img-fluid" src="https://d1uhlocgth3qyq.cloudfront.net/providers-664w___3BPiq.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Find Doctor Sectuion -->
    <section class="find-doctor-section">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="pb-5">Find doctors and dentists by city</h1>
                </div>
                <div class="col-md-3">
                    <div class="accordion">
                        <div class="accordion__header">
                            <h2>Brooklyn</h2>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="accordion__body">
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">South York</a><br />
                        </div>
                        <div class="accordion__header">
                            <h2>Queens</h2>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="accordion__body">
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">South York</a><br />
                        </div>
                        <div class="accordion__header">
                            <h2>Bronx</h2>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="accordion__body">
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">South York</a><br />
                        </div>
                        <div class="accordion__header">
                            <h2>Long Island</h2>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="accordion__body">
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">South York</a><br />
                        </div>
                        <div class="accordion__header">
                            <h2>Baltimore</h2>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="accordion__body">
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">South York</a><br />
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="accordion">
                        <div class="accordion__header">
                            <h2>Washington, DC</h2>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="accordion__body">
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">South York</a><br />
                        </div>
                        <div class="accordion__header">
                            <h2>Seattle</h2>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="accordion__body">
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">South York</a><br />
                        </div>
                        <div class="accordion__header">
                            <h2>Philadelphia</h2>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="accordion__body">
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">South York</a><br />
                        </div>
                        <div class="accordion__header">
                            <h2>Houston</h2>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="accordion__body">
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">South York</a><br />
                        </div>
                        <div class="accordion__header">
                            <h2>New York City</h2>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="accordion__body">
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">South York</a><br />
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
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">South York</a><br />
                        </div>
                        <div class="accordion__header">
                            <h2>New York City</h2>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="accordion__body">
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">South York</a><br />
                        </div>
                        <div class="accordion__header">
                            <h2>New York City</h2>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="accordion__body">
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">South York</a><br />
                        </div>
                        <div class="accordion__header">
                            <h2>New York City</h2>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="accordion__body">
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">South York</a><br />
                        </div>
                        <div class="accordion__header">
                            <h2>New York City</h2>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="accordion__body">
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">South York</a><br />
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
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">South York</a><br />
                        </div>
                        <div class="accordion__header">
                            <h2>New York City</h2>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="accordion__body">
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">South York</a><br />
                        </div>
                        <div class="accordion__header">
                            <h2>New York City</h2>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="accordion__body">
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">South York</a><br />
                        </div>
                        <div class="accordion__header">
                            <h2>New York City</h2>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="accordion__body">
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">South York</a><br />
                        </div>
                        <div class="accordion__header">
                            <h2>New York City</h2>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="accordion__body">
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">North York</a><br />
                            <a href="#">South York</a><br />
                            <a href="#">South York</a><br />
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
                        <div class="col-lg-4 col-md-8">
                            <div class="widget text-widget">
                                <h4 class="widget-title">About us</h4>
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
                        <div class="col-lg-5">
                            <div class="row">
                                <div class="col-xl-6 col-md-6 col-sm-12">
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
                                <div class="col-xl-6 col-md-6 col-sm-12">
                                    <div class="widget nav-widget">
                                        <h4 class="widget-title">Other Links</h4>
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
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="widget nav-widget">
                                <h4 class="widget-title">Cities</h4>
                                <ul class="nav-links">
                                    <li>
                                        <a href="#">New York</a>
                                    </li>
                                    <li>
                                        <a href="#">Baltimore</a>
                                    </li>
                                    <li>
                                        <a href="#">Washington, DC</a>
                                    </li>
                                    <li>
                                        <a href="#">Philadelphia</a>
                                    </li>
                                    <li>
                                        <a href="#">Boston</a>
                                    </li>
                                    <li>
                                        <a href="#">San Francisco</a>
                                    </li>
                                </ul>
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


<script type="text/javascript">
  $(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});
</script>