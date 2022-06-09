<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Manup Template">
    <meta name="keywords" content="Manup, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Evanto - Host Your Own Events</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">


    <!-- Css Styles -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="public/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="public/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="public/css/style.css" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
<header class="header-section">
    <div class="container">
        <div class="logo">
            <a href="/">
                <img src="public/img/logo.png" alt="">
            </a>
        </div>
        <div class="nav-menu">
            <nav class="mainmenu mobile-menu">
                <ul>
                    <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
                    <li class="{{ request()->is('event_count') ? 'active' : '' }}"><a href="/event_count">Event Count</a></li>
                </ul>
            </nav>
            <a href="/login" class="primary-btn top-btn"><i class="fa fa-ticket"></i> Login</a>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header End -->

<!--============================================== -->
<!-- Content Section Begin -->
@yield('content')
<!-- Content Section End -->
<!--============================================== -->

<!-- Footer Section Begin -->
<footer class="footer-section">
    <div class="container">
        <div class="partner-logo owl-carousel">
            <a href="#" class="pl-table">
                <div class="pl-tablecell">
                    <img src="public/img/partner-logo/logo-1.png" alt="">
                </div>
            </a>
            <a href="#" class="pl-table">
                <div class="pl-tablecell">
                    <img src="public/img/partner-logo/logo-2.png" alt="">
                </div>
            </a>
            <a href="#" class="pl-table">
                <div class="pl-tablecell">
                    <img src="public/img/partner-logo/logo-3.png" alt="">
                </div>
            </a>
            <a href="#" class="pl-table">
                <div class="pl-tablecell">
                    <img src="public/img/partner-logo/logo-4.png" alt="">
                </div>
            </a>
            <a href="#" class="pl-table">
                <div class="pl-tablecell">
                    <img src="public/img/partner-logo/logo-5.png" alt="">
                </div>
            </a>
            <a href="#" class="pl-table">
                <div class="pl-tablecell">
                    <img src="public/img/partner-logo/logo-6.png" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-text">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Status Count</a></li>
                    </ul>
                    <div class="ft-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="public/js/jquery-3.3.1.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/jquery.slicknav.js"></script>
<script src="public/js/owl.carousel.min.js"></script>
<script src="public/js/main.js"></script>

<!--============================================== -->
<!-- Custom Script Begin -->
@yield('scripts')
<!-- Custom Script Begin -->
<!--============================================== -->
</body>

</html>
