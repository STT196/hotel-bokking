<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <title>Booking</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <!--Template style -->
    <!--Fav icon-->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
    <!-- datepikar plugin -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.css') }}">
    <!--animate css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}" />
    <!--bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />
    <!--fonts css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts.css') }}" />
    <!--font-awesome css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}" />
    <!-- carousal css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.min.css') }}">
    <!-- custom css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" />
    <!--favicon-->

</head>

<body>

    <!-- return-to-top start-->
    <a href="javascript:" id="return-to-top"><i class="fas fa-sort-up"></i></a>
    <!-- return-to-top-end -->
    <!-- HEADER START-->
    <div class="main_wrapper">

        <div class="main_menu_wrapper">
            <!-- main_menu_navbar start -->
            <div class="main_menu_navbar">
                <div class="ps-5 pe-5">
                    <div class="row justify-content-between">
                        <div class="col-xl-4 col-lg-2 col-6 col align-self-center">
                            <!-- Brand/logo -->
                            <a class="navbar-brand" href="#">
                                <img src="images/logo.png" alt="">
                            </a>
                        </div>
                        <div class="align-self-center col-xl-3 col-lg-2 col-6 d-block d-lg-none" style="border-top-style: solid;border-top-width: 0px;margin-top: -12px;">
                            <div class="navbar-toggler" data-toggle="collapse" role="term"
                            data-target="#sidebar" aria-controls="sidebar" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <!--just add these span here-->
                            <!-- <i class="fas fa-bars"></i> -->
                            <ul class="toggle-main-wrapper ">
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                        </div>
                        <div class=" col-xl-5 col-lg-10 d-none d-xs-none d-sm-none d-md-none d-lg-block d-xl-block">
                            <nav class="navbar navbar-expand-sm  d-block">
                                <ul class="navbar-nav ">
                                    <li class="nav-item  wrap-nav-item">
                                        <a href="{{route('homepage')}}" class="nav-link">
                                           home
                                        </a>
                                    </li>
                                    <li class="nav-item  wrap-nav-item">
                                        <a href="{{route('hotels')}}" class="nav-link">
                                            hotel

                                        </a>

                                    </li>


                                @guest

                                <li class="nav-item">
                                      <a href="login" class="btn btn-outline-dark">Login</a>
                                  </li>
                                <li class="nav-item">
                                      <a href="register" class="btn btn-outline-dark">Register</a>
                                  </li>
                                  @endguest
                                  @auth
                                  <li class="nav-item p-rel  ">
                                    <a href="javascript:;" class="nav-link btn btn-outline-dark">
                                        {{Auth::user()->name}}
                                        <i class="fas fa-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-items">
                                        <li>
                                            <form action="{{route('dashboard')}}" method="GET">
                                                @csrf
                                                <button type="submit" class="btn btn-outline"> Dashboard</button>
                                              </form>
                                        </li>
                                        <li>
                                            <form action="{{route('logout')}}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-outline"> Logout</button>
                                              </form>
                                        </li>

                                    </ul>
                                </li>
                                  {{-- <li class="nav-item">
                                        <a href="register" class="btn btn-outline-dark">Register</a>
                                    </li> --}}
                                  @endauth
                                </ul>
                            </nav>

                        </div>
                    </div>

                </div>
            </div>
            <!-- main_menu_navbar end -->
            <!-- sb main header End -->
            <!-- sb banner content Start -->
            <div class="sb_banner_content_wrapper animated-row float_left">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="sb_banner_cont_iner_wrapper float_left">
                                <h2>Book & Experience Amazing Places</h2>
                                <h3>Compare 3000+ Hotels at once</h3>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- mobile_menu_main start -->


        <!-- mobile_menu_main end -->

        <!-- sidebar start -->
        <div id="sidebar">
            <div class="sidebar_logo">
                <a href="#"><img src="images/logo.png" alt=""></a>
            </div>
            <div id='cssmenu'>

                <ul>
                    <li><a href="{{route('homepage')}}">Home</a></li>
                    <li><a href="{{route('hotels')}}">Hotels</a></li>
                    @auth
                    <li>
                            <form action="{{route('dashboard')}}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-outline ps-3"> Dashboard</button>
                              </form>
                            </li>
                            <li>
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-outline ps-3"> Logout</button>
                                  </form>
                            </li>
                    @endauth
                    @guest
                    <li><a href="{{route('login')}}">Login</a></li>
                    <li><a href="{{route('register')}}">Register</a></li>
                    @endguest




                    <li class="m-social-icons">
                        <span><i class="fab fa-facebook-f"></i></span>
                        <span><i class="fab fa-twitter"></i></span>
                        <span><i class="fab fa-linkedin-in"></i></span>
                        <span><i class="fab fa-instagram"></i></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- sidebar end -->

    <!--HEADER END-->
    <!-- Side Panel -->
    <!-- hotel service section start -->

    <!-- hotel service section start end-->
    <!-- popular hotel slider start -->

    <div class="container">
        <div class="row">
            <h3 class="pt-5">Latest Hotels</h3>
            @foreach ($hotels as $hotel)

            <div class="col-xl-4 col-lg-6 pt-4 col-md-6 col-sm-12 col-12">
                <div class="sub-main">
                    <div class="img-sec p-rel">
                        <div class="hover-img p-rel">
                        </div>
                        <span>Rs {{$hotel->price_from}} / Night</span>
                        <a href="javascript:;"> <img style="width: 351px; height: 275px" src="{{asset($hotel->thumbnail)}}" alt=""></a>
                    </div>
                    <div class="slider-content">
                        <h5><a href="hotel-single-page.html">{{$hotel->title}}</a></h5>
                        <a href="javascript:;"> <span class="clr-text"><i class="fas fa-map-marker-alt"></i>
                               {{$hotel->address}}</span></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- footer section start -->
    <footer class="footer-main-wrapper">
        <div class="container">
            <p>Copyright © Webstrot 2020-21. Design by  </p>
        </div>
    </footer>
<!-- footer end -->


    <!-- custom js-->

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/shortcode.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>
