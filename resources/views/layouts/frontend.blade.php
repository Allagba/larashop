<!doctype html>
<html lang="en">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Furnish - Furniture and Decor Website Template</title>


    <link rel="stylesheet" href="{{ asset('assets/resources/css/app.css') }}">
  

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/resources/js/bootstrap.js">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="assets/css/responsive.css">


</head>

<body>

    <div id="app">
        <!--====== PRELOADER PART START ======-->

        <div class="preloader">
            <div class="spin">
                <div class="cube1"></div>
                <div class="cube2"></div>
            </div>
        </div>

        <!--====== PRELOADER PART START ======-->

        <!--====== HEADER PART START ======-->

        <header class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/images/logo.png" alt="Logo">
                            </a> <!-- Logo -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="bar-icon"></span>
                                <span class="bar-icon"></span>
                                <span class="bar-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a data-scroll-nav="0" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-scroll-nav="0" href="#product">Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-scroll-nav="0" href="#service">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-scroll-nav="0" href="#showcase">Portfolio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-scroll-nav="0" href="#team">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-scroll-nav="0" href="#blog">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-scroll-nav="0" href="#contact">Contact</a>
                                    </li>
                                    @if (Route::has('login'))
                                    @auth
                                    <li class="nav-item">
                                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cart</a>
                                    </li>
                                    @else
                                    <li class="nav-item">
                                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                                    </li>
                                    @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a href="{{ route('register') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                    </li>
                                    @endif
                                    @endauth
                                    @endif
                                </ul> <!-- navbar nav -->
                            </div>

                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </header>

        <!--====== HEADER PART ENDS ======-->
        @yield('content')
    </div>


    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>


    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>


    <!--====== nav js ======-->
    <script src="assets/js/jquery.nav.js"></script>

    <!--====== Nice Number js ======-->
    <script src="assets/js/jquery.nice-number.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

    @yield('scripts')
</body>

</html>