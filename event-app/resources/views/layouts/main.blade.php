<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <link rel="shortcut icon" sizes="196x196" href="/auth/images/logo.png">
    <title>Evanto - Host Your Events</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="/auth/css/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/auth/css/materialdesigniconicfont/dist/css/material-design-iconic-font.css">
    <!-- build:css ../assets/css/app.min.css -->
    <link rel="stylesheet" href="/auth/css/animate.css/animate.min.css">
    <link rel="stylesheet" href="/auth/css/bootstrap.css">
    <link rel="stylesheet" href="/auth/css/core.css">
    <link rel="stylesheet" href="/auth/css/app.css">
    <!-- endbuild -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
</head>

<body class="menubar-left menubar-unfold menubar-light theme-primary">
<!--============= start main area -->

<!-- APP NAVBAR ==========-->
<nav id="app-navbar" class="navbar navbar-inverse navbar-fixed-top primary">

    <!-- navbar header -->
    <div class="navbar-header">
        <button type="button" id="menubar-toggle-btn" class="navbar-toggle visible-xs-inline-block navbar-toggle-left hamburger hamburger--collapse js-hamburger">
            <span class="sr-only">Toggle navigation</span>
            <span class="hamburger-box"><span class="hamburger-inner"></span></span>
        </button>

        <button type="button" class="navbar-toggle navbar-toggle-right collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="zmdi zmdi-hc-lg zmdi-more"></span>
        </button>

        <button type="button" class="navbar-toggle navbar-toggle-right collapsed" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="zmdi zmdi-hc-lg zmdi-search"></span>
        </button>

        <a href="/home" class="navbar-brand">
            <span class="brand-icon"><i class="fa fa-gg"></i></span>
            <span class="brand-name">Evanto</span>
        </a>
    </div>

    <div class="navbar-container container-fluid">
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-toolbar navbar-toolbar-left navbar-left">
                <li class="hidden-float hidden-menubar-top">
                    <a href="/home" role="button" id="menubar-fold-btn" class="hamburger hamburger--arrowalt is-active js-hamburger">
                        <span class="hamburger-box"><span class="hamburger-inner"></span></span>
                    </a>
                </li>
                <li>
                    <h5 class="page-title hidden-menubar-top hidden-float">Dashboard</h5>
                </li>
            </ul>

            <ul class="nav navbar-toolbar navbar-toolbar-right navbar-right">

                <li class="dropdown">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-toggle"><i class="zmdi zmdi-hc-lg zmdi-power"></i></a>
                    {{--<ul class="dropdown-menu animated flipInY">
                        <li><a ><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>Logout</a></li>
                    </ul>--}}
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </ul>
        </div>
    </div><!-- navbar-container -->
</nav>
<!--========== END app navbar -->

<!-- APP ASIDE ==========-->
<aside id="menubar" class="menubar light">
    <div class="app-user">
        <div class="media">
            <div class="media-left">
                <div class="avatar avatar-md avatar-circle">
                    <a href="javascript:void(0)"><img class="img-responsive" src="/auth/images/221.jpg" alt="avatar"/></a>
                </div><!-- .avatar -->
            </div>
            <div class="media-body">
                <div class="foldable">
                    <h5><a href="javascript:void(0)" class="username">{{ Auth::user()->name }}</a></h5>
                    <ul>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <small>Event</small>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu animated flipInY">
                                <li>
                                    <a class="text-color"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <span class="m-r-xs"><i class="fa fa-home"></i></span>
                                        <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- .media-body -->
        </div><!-- .media -->
    </div><!-- .app-user -->

    <div class="menubar-scroll">
        <div class="menubar-scroll-inner">
            <ul class="app-menu">

                <li>
                    <a href="/home">
                        <i class="menu-icon zmdi zmdi-search zmdi-hc-lg active"></i>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

            </ul><!-- .app-menu -->
        </div><!-- .menubar-scroll-inner -->
    </div><!-- .menubar-scroll -->
</aside>
<!--========== END app aside -->


<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">
    <div class="wrap">
        <section class="app-content">
            <!--============================================== -->
            <!-- Content Section Begin -->
        @yield('content')
        <!-- Content Section End -->
            <!--============================================== -->
        </section><!-- .app-content -->
    </div><!-- .wrap -->
    <!-- APP FOOTER -->
    <div class="wrap p-t-0">
        <footer class="app-footer">
            <div class="clearfix">
                <div class="copyright pull-left">Copyright 2022 &copy;</div>
            </div>
        </footer>
    </div>
    <!-- /#app-footer -->
</main>
<!--========== END app main -->

<!-- build:js ../assets/js/core.min.js -->
<script src="/auth/js/jquery.js"></script>
<script src="/auth/js/jquery-ui.min.js"></script>
<script src="/auth/js/jquery.storageapi.min.js"></script>
<script src="/auth/js/bootstrap.js"></script>

<!-- endbuild -->
<script src="/auth/js/app.js"></script>
<!-- endbuild -->

<!--============================================== -->
<!-- Custom Script Begin -->
@yield('scripts')
<!-- Custom Script Begin -->
<!--============================================== -->
</body>
</html>
