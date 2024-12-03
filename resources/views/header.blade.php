<!DOCTYPE html>
<html lang="en">

<head>

    <!--Template style -->
    <!--Fav icon-->

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!--favicon-->

</head>

<body>
    <!-- return-to-top start-->
    <a href="javascript:" id="return-to-top"><i class="fas fa-sort-up"></i></a>
    <!-- return-to-top-end -->
    <!-- HEADER START-->
    <div class="main_wrapper sign-up-header">

        <div class="main_menu_wrapper header-color">
            <!-- main_menu_navbar start -->
            <div class="main_menu_navbar ">
                <div class="ps-5 pe-5">
                    <div class="row justify-content-between">
                        <div class="col-xl-4 col-lg-2 col-6 align-self-center">
                            <!-- Brand/logo -->
                            <a class="navbar-brand" href="index-01.html">
                                <img src="images/f-logo-.png" alt="">
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-2 col-6 d-block d-lg-none">
                            <div class="navbar-toggler" data-toggle="collapse" role="term" data-target="#sidebar"
                                aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
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
                                        <a href="{{ route('homepage') }}" class="nav-link">
                                            home
                                        </a>
                                    </li>
                                    <li class="nav-item  wrap-nav-item">
                                        <a href="{{ route('hotels') }}" class="nav-link">
                                            hotel

                                        </a>

                                    </li>


                                    @guest

                                        <li class="nav-item">
                                            <a href="{{route('login')}}" class="btn btn-primary">Login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('register')}}" class="btn btn-primary">Register</a>
                                        </li>
                                    @endguest
                                    @auth
                                        <li class="nav-item p-rel  ">
                                            <a href="javascript:;" class="nav-link btn btn-outline-dark">
                                                {{ Auth::user()->name }}
                                                <i class="fas fa-caret-down"></i>
                                            </a>
                                            <ul class="dropdown-items">
                                                <li>
                                                    <form action="{{ route('dashboard') }}" method="GET">
                                                        @csrf
                                                        <button type="submit" class="btn btn-outline"> Dashboard</button>
                                                    </form>
                                                </li>
                                                <li>
                                                    <form action="{{ route('logout') }}" method="POST">
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
                    <li><a href="{{ route('homepage') }}">Home</a></li>
                    <li><a href="{{ route('hotels') }}">Hotels</a></li>
                    @auth
                        <li>
                            <form action="{{ route('dashboard') }}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-outline ps-3"> Dashboard</button>
                            </form>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline ps-3"> Logout</button>
                            </form>
                        </li>
                    @endauth
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
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
    <!-- sign up banner start-->
@yield('content')

    <!-- footer section start -->
    <footer class="footer-main-wrapper">
        <div class="d-flex justify-content-center">
            <p>Copyright ©  </p>
        </div>
    </footer>

    @if ($errors->any())
        <script>
            let erroList = '';
            @foreach ($errors->all() as $error)
                erroList += '{{ $error }}<br>';
            @endforeach
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    html: erroList,
                    showConfirmButton: true,
                    confirmButtonColor: '#9FCED3',
                });
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: "Error",
                    text: '{{ session('error') }}',
                    icon: "error",
                    confirmButtonColor: '#9FCED3',
                });
            });
        </script>
    @endif

    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: "Successfully Added!",
                    // text: "Item Added Succesfully!",
                    icon: "success",
                    confirmButtonColor: '#9FCED3',
                });
            });
        </script>
    @endif
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('js/shortcode.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/functions.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>