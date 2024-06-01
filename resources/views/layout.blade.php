<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simba Safaris</title>
    <!-- favion -->
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <!-- link to font awesome -->
{{--    <link media="all" rel="stylesheet" href="vendors/font-awesome/css/font-awesome.css">--}}
    <link media="all" rel="stylesheet" href="{{ asset('/vendors/font-awesome/css/font-awesome.css') }}">
    <!-- include owl css -->
    <link media="all" rel="stylesheet" href="{{ asset('/vendors/owl-carousel/owl.carousel.css') }}">
    <link media="all" rel="stylesheet" href="{{ asset('/vendors/owl-carousel/owl.theme.css')}}">
    <!-- link to custom icomoon fonts -->
{{--    <link rel="stylesheet" type="text/css" href="css/fonts/icomoon/icomoon.css">--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/fonts/icomoon/icomoon.css') }}">
    <!-- link to wow js animation -->
{{--    <link media="all" rel="stylesheet" href="vendors/animate/animate.css">--}}
    <link media="all" rel="stylesheet" href="{{ asset('/vendors/animate/animate.css') }}">
    <!-- include jQuery UI css -->
{{--    <link media="all" rel="stylesheet" href="vendors/jquery-ui/jquery-ui.min.css">--}}
    <link media="all" rel="stylesheet" href="{{ asset('/vendors/jquery-ui/jquery-ui.min.css') }}">
    <!-- include bootstrap css -->
{{--    <link media="all" rel="stylesheet" href="css/bootstrap.css">--}}
    <link media="all" rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <!-- include fancybox css -->
    <link media="all" rel="stylesheet" href="{{ asset('/vendors/fancybox/jquery.fancybox.css') }}">
    <!-- include main css -->
{{--    <link media="all" rel="stylesheet" href="css/main.css">--}}
    <link media="all" rel="stylesheet" href="{{ asset('/css/main.css') }}">
</head>
<body>
<div class="preloader" id="pageLoad">
    <div class="holder">
        <div class="coffee_cup"></div>
    </div>
</div>
<div id="wrapper">
    <div class="page-wrapper">
        <!-- main header -->
        <header @if(request()->is('tour-listings*')) style="background: #252525" @endif  id="header">
            <div class="container-fluid">
                <!-- logo -->
                <div class="logo">
                    <a href="/">
                        <img class="normal" src="/img/logos/sslogo.jpg" alt="Simba Safaris">
                        <img class="gray-logo" src="/img/logos/sslogo.jpg" alt="Simba Safaris">
                    </a>
                </div>
                <!-- main navigation -->
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle nav-opener" data-toggle="collapse" data-target="#nav">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- main menu items and drop for mobile -->
                    <div class="collapse navbar-collapse" id="nav">
                        <!-- main navbar -->
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/">Home</a></li>
                            <li class="active"><a href="/tour-listings">Tour Listing</a></li>
                            <li><a href="/contact">Contact Us</a></li>
                            <li class="dropdown has-mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Activities <b class="icon-angle-down"></b></a>
                                <div class="dropdown-menu">
                                    <div class="drop-wrap">
                                        <div class="drop-holder">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="col">
                                                        <div class="img-wrap">
                                                            <a href="hiking-camping.html"><img src="img/generic/img-01.jpg" height="228" width="350" alt="image description"></a>
                                                        </div>
                                                        <div class="des">
                                                            <strong class="title"><a href="hiking-camping.html">Hiking/Camping</a></strong>
                                                            <p>A good backpacker minimizes their impact on the environment, including staying on established trails, not disturbing vegetation, and carrying garbage out.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="col">
                                                        <div class="img-wrap">
                                                            <a href="jungle-safari.html"><img src="img/generic/img-02.jpg" height="215" width="370" alt="image description"></a>
                                                        </div>
                                                        <div class="des">
                                                            <strong class="title"><a href="jungle-safari.hml">Jungle Safari</a></strong>
                                                            <p>In the past, the trip was often a big-game hunt, but today, safari often refers to trips to observe and photograph wildlife—or hiking and sight-seeing as well.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="col">
                                                        <div class="img-wrap">
                                                            <a href="city-tour.html"><img src="img/generic/img-03.jpg" height="215" width="370" alt="image description"></a>
                                                        </div>
                                                        <div class="des">
                                                            <strong class="title"><a href="city-tour.html">Urban City Tour</a></strong>
                                                            <p>The type of urban city tour considered here is a full, partial-day, or longer tour of a historical, or cultural or artistic site in one or more tourist destinations.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="col">
                                                        <div class="img-wrap">
                                                            <a href="family-fun.html"><img src="img/generic/img-04.jpg" height="215" width="370" alt="image description"></a>
                                                        </div>
                                                        <div class="des">
                                                            <strong class="title"><a href="family-fun.html">Family Fun</a></strong>
                                                            <p>A community area is available on Trafalgar’s website offering members the opportunity to interact with fellow travelers by joining groups, contributing to forums.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

{{--                            <li><a href="blog-left-sidebar.html">Blog</a></li>--}}

{{--                            <li class="visible-xs visible-sm nav-visible dropdown last-dropdown v-divider">--}}
{{--                                <a href="my-cart.html" data-toggle="dropdown">--}}
{{--                                    <span class="icon icon-cart"></span>--}}
{{--                                    <span class="text hidden-md hidden-lg">Safaris</span>--}}
{{--                                    <span class="text hidden-xs hidden-sm">3</span><!--have it default to blank and -->--}}
{{--                                </a>--}}
{{--                                <div class="dropdown-menu dropdown-md">--}}
{{--                                    <div class="drop-wrap cart-wrap">--}}
{{--                                        <strong class="title">Safari Explorer</strong>--}}
{{--                                        <ul class="cart-list">--}}
{{--                                            <li>--}}
{{--                                                <div class="img">--}}
{{--                                                    <a href="#">--}}
{{--                                                        <img src="img/listing/img-16.jpg" height="165" width="170" alt="image description">--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                                <div class="text-holder">--}}
{{--                                                    <span class="amount">x 2</span>--}}
{{--                                                    <div class="text-wrap">--}}
{{--                                                        <strong class="name"><a href="#">Weekend in Paradise</a></strong>--}}
{{--                                                        <span class="price">$199</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <div class="img">--}}
{{--                                                    <a href="#">--}}
{{--                                                        <img src="img/listing/img-17.jpg" height="165" width="170" alt="image description">--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                                <div class="text-holder">--}}
{{--                                                    <span class="amount">x 4</span>--}}
{{--                                                    <div class="text-wrap">--}}
{{--                                                        <strong class="name"><a href="#">Water Sports in Spain</a></strong>--}}
{{--                                                        <span class="price">$199</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <div class="img">--}}
{{--                                                    <a href="#">--}}
{{--                                                        <img src="img/listing/img-18.jpg" height="165" width="170" alt="image description">--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                                <div class="text-holder">--}}
{{--                                                    <span class="amount">x 4</span>--}}
{{--                                                    <div class="text-wrap">--}}
{{--                                                        <strong class="name"><a href="#">Beach Party in Greece</a></strong>--}}
{{--                                                        <span class="price">$199</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                        <div class="footer">--}}
{{--                                            <a href="my-cart.html" class="btn btn-primary">View cart</a>--}}
{{--                                            <span class="total">$3300</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </li>
                            <li class="visible-md visible-lg nav-visible v-divider"><a href="#" class="search-opener"><span class="icon icon-search"></span></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- search form -->
            <form class="search-form" action="/tour-listings">
                <fieldset>
                    <a href="#" class="search-opener hidden-md hidden-lg">
                        <span class="icon-search"></span>
                    </a>
                    <div class="search-wrap">
                        <a href="#" class="search-opener close">
                            <span class="icon-cross"></span>
                        </a>
                        <div class="trip-form trip-form-v2 trip-search-main">
                            <div class="trip-form-wrap">
                                <div class="holder">
                                    <label>Departing</label>
                                    <div class='select-holder'>
                                        <div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
                                            <input name="departing" class="form-control" type="text" readonly />
                                            <span class="input-group-addon"><i class="icon-drop"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="holder">
                                    <label>Returning</label>
                                    <div class='select-holder'>
                                        <div id="datepicker1" class="input-group date" data-date-format="mm-dd-yyyy">
                                            <input name="returning" class="form-control" type="text" readonly />
                                            <span class="input-group-addon"><i class="icon-drop"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="holder">
                                    <label for="select-region">Select Region</label>
                                    <div class='select-holder'>
                                        <select class="trip-select trip-select-v2 region" name="region" id="select-region">
                                            <option value="Kenya">Kenya</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Uganda">Uganda</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="holder">
                                    <label for="select-activity">Tour Type</label>
                                    <div class='select-holder'>
                                        <select class="trip-select trip-select-v2 acitvity" name="activity" id="select-activity">
                                            <option value="Safaris Type">Safaris Type</option>
                                            <option value="Beach Holidays">Beach Holidays</option>
                                            <option value="Weekend Trips">Weekend Trips</option>
                                            <option value="Hiking">Hiking</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="holder">
                                    <label for="price-range">Price Range</label>
                                    <div class='select-holder'>
                                        <select class="trip-select trip-select-v2 price" name="badget" id="price-range">
                                            <option value="1-499">$1 - $499</option>
                                            <option value="500-999">$500 - $999</option>
                                            <option value="1000-1499">$1000 - $1499</option>
                                            <option value="1500-2900">$1500 - $2999</option>
                                            <option value="3000,">$3000+</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="holder">
                                    <button class="btn btn-trip btn-trip-v2" type="submit">Find Tours</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </header>
        <!-- main banner -->

        @yield('content')
    </div>
    <!-- main footer -->
    <footer id="footer">
        <div class="container">
            <!-- newsletter form -->
            <form action="php/subscribe.html" id="signup" method="post" class="newsletter-form">
                <fieldset>
                    <div class="input-holder">
                        <input type="email" class="form-control" placeholder="Email Address" name="subscriber_email" id="subscriber_email">
                        <input type="submit" value="GO">
                    </div>
                    <span class="info" id="subscribe_message">To receive news, updates and tour packages via email.</span>
                </fieldset>
            </form>
            <!-- footer links -->
            <div class="row footer-holder">
                <nav class="col-sm-4 col-lg-2 footer-nav active">
                    <h3>About Simba</h3>
                    <ul class="slide">
                        <li><a href="index.html">The Company</a></li>
                        <li><a href="#">Opportunity</a></li>
                        <li><a href="#">Safety Concerns</a></li>
                    </ul>
                </nav>
                <nav class="col-sm-4 col-lg-2 footer-nav">
                    <h3>Destinations</h3>
                    <ul class="slide">
                        <li><a href="#">Top Destinations</a></li>
                        <li><a href="#">Kenya</a></li>
                        <li><a href="#">Tanzania</a></li>
                        <li><a href="#">Uganda</a></li>
                    </ul>
                </nav>
                <nav class="col-sm-4 col-lg-2 footer-nav">
                    <h3>reservation</h3>
                    <ul class="slide">
                        <!--<li><a href="#">Booking Conditions</a></li>-->
                        <li><a href="#">My Bookings</a></li>
                        <!--<li><a href="#">Refund Policy</a></li>
                        <li><a href="#">Includes &amp; Excludes</a></li>
                        <li><a href="#">Your Responsibilities</a></li>-->
                        <li><a href="#">Order a Brochure</a></li>
                    </ul>
                </nav>

                <nav class="col-sm-4 col-lg-2 footer-nav last">
                    <h3>contact Simba</h3>
                    <ul class="slide address-block">
                        <li class="wrap-text"><span class="icon-tel"></span> <a href="tel:+254746925515">(254) 746925515</a></li>
                        <li class="wrap-text"><span class="icon-fax"></span> <a href="tel:+254722954300">(254) 722954300</a></li>
                        <li class="wrap-text"><span class="icon-email"></span> <a href="mailto:info@simba.com">info@simba.com</a></li>
                        <li><span class="icon-home"></span> <address>80401 Kenya Diani Beach, Middx TW7 7Q</address></li>
                    </ul>
                </nav>
            </div>
            <!-- social wrap -->
            <ul class="social-wrap">
                <li class="facebook"><a href="#">
                        <span class="icon-facebook"></span>
                        <strong class="txt">Like Us</strong>
                    </a></li>
                <li class="twitter"><a href="#">
                        <span class="icon-twitter"></span>
                        <strong class="txt">Follow On</strong>
                    </a></li>
                <li class="google-plus"><a href="#">
                        <span class="icon-google-plus"></span>
                        <strong class="txt">+1 On Google</strong>
                    </a></li>
                <li class="Instagram"><a href="#">
                        <span class="icon-dribble"></span>
                        <strong class="txt">Instagram</strong>
                    </a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- copyright -->
                        <strong class="copyright"><i class="fa fa-copyright"></i> Copyright 2024 - Simba - by  <a href="#">B_Mutheke</a></strong>
                    </div>
                    <div class="col-lg-6">
                        <ul class="payment-option">
                            <li>
                                <img src="img/footer/visa.png" alt="visa">
                            </li>
                            <li>
                                <img src="img/footer/mastercard.png" height="20" width="33" alt="master card">
                            </li>
                            <li>
                                <img src="img/footer/paypal.png" height="20" width="72" alt="paypal">
                            </li>
                            <li>
                                <img src="img/footer/maestro.png" height="20" width="33" alt="maestro">
                            </li>
                            <li>
                                <img src="img/footer/bank-transfer.png" height="20" width="55" alt="bank transfer">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
<!-- jquery library -->
<script src="{{asset('vendors/jquery/jquery-2.1.4.min.js')}}"></script>
<!-- external scripts -->
<script src="{{asset('vendors/bootstrap/javascripts/bootstrap.min.js')}}"></script>
<script src="{{asset('vendors/jquery-placeholder/jquery.placeholder.min.js')}}"></script>
<script src="{{asset('vendors/match-height/jquery.matchHeight.js')}}"></script>
<script src="{{asset('vendors/wow/wow.min.js')}}"></script>
<script src="{{asset('vendors/stellar/jquery.stellar.min.js')}}"></script>
<script src="{{asset('vendors/validate/jquery.validate.js')}}"></script>
<script src="{{asset('vendors/waypoint/waypoints.min.js')}}"></script>
<script src="{{asset('vendors/counter-up/jquery.counterup.min.js')}}"></script>
<script src="{{asset('vendors/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('vendors/jQuery-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>
<script src="{{asset('vendors/fancybox/jquery.fancybox.js')}}"></script>
<script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('vendors/jcf/js/jcf.js')}}"></script>
<script src="{{asset('vendors/jcf/js/jcf.select.js')}}"></script>
<script src="{{asset('js/mailchimp.js')}}"></script>
<script src="{{asset('vendors/retina/retina.min.js')}}"></script>
<script src="{{asset('vendors/sticky-kit/sticky-kit.js')}}"></script>
<script src="{{asset('js/sticky-kit-init.js')}}"></script>
<script src="{{asset('vendors/bootstrap-datetimepicker-master/dist/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('/vendors/fancybox/jquery.fancybox.js')}}"></script>
<!-- custom jquery script -->
<!-- custom jquery script -->
<script src="{{asset('js/jquery.main.js')}}"></script>
<!-- revolution slider plugin -->
<script type="text/javascript" src="{{asset('vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- rs5.0 core files -->
<script type="text/javascript" src="{{asset('vendors/revolution/js/jquery.themepunch.tools.min.js?rev=5.0')}}"></script>
<script type="text/javascript" src="{{asset('vendors/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0')}}"></script>
<script type="text/javascript" src="{{asset('vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<!-- revolutions slider script -->
<script src="{{asset('js/revolution.js')}}"></script>
</body>
</html>

