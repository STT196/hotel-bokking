<!DOCTYPE html>
<html lang="en">

<head>

    <!--Template style -->
    <!--Fav icon-->

       <!--Fav icon-->
       {{-- <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}"> --}}
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
       <link rel="stylesheet" type="text/css" href="{{ asset('css/shortcode.css') }}" />
       <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
       <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" />
       <script src="https://code.jquery.com/jquery-3.6.4.min.js" ></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />



    <!--favicon-->

</head>

<body>
    <!-- return-to-top start-->
    <a href="javascript:" id="return-to-top"><i class="fas fa-sort-up"></i></a>
    <!-- return-to-top-end -->
    <!-- HEADER START-->
    <div class="main_wrapper ">

        <div class="main_menu_wrapper header-color">
            <!-- main_menu_navbar start -->
            <div class="main_menu_navbar ">
                <div class="ps-5 pe-5">
                    <div class="row justify-content-between">
                        <div class="col-xl-4 col-lg-2 col-6 align-self-center">
                            <!-- Brand/logo -->
                            <a class="navbar-brand" href="{{route('homepage')}}">
                                <img style="width: 100px; height: 100px" src="{{asset('images/f-logo-.png')}}" alt="">
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
                                            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                                        </li>
                                    @endguest
                                    @auth
                                     @if (Auth::user()->user_type === 'customer')
                                            <li class="nav-item  wrap-nav-item">
                                                <form action="{{ route('cus.pending') }}" method="GET">

                                                    <button type="submit" class="button-custom">Dashboard</button>
                                                </form>
                                            </li>
                                        @elseif (Auth::user()->user_type === 'hotel')
                                            <li class="nav-item  wrap-nav-item">
                                                <form action="{{ route('pending') }}" method="GET">

                                                    <button type="submit" class="button-custom ">Dashboard</button>
                                                </form>
                                            </li>
                                        @else
                                            <li class="nav-item  wrap-nav-item">
                                                <form action="{{ route('dashboard') }}" method="GET">

                                                    <button type="submit" class="button-custom">Dashboard</button>
                                                </form>
                                            </li>
                                        @endif
                                    <li class="nav-item p-rel">
                                        <a href="javascript:;" class="nav-link button-custom-dark">
                                            {{ explode(' ', Auth::user()->name)[0] }}
                                            <i class="fas fa-caret-down"></i>
                                        </a>
                                        <ul class="dropdown-items">

                                            <li>
                                                <form action="{{ route('logout') }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="button-custom">Logout</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
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
                <a href="#"><img style="width: 100px; height: 100px" src="images/logo.png" alt=""></a>
            </div>
            <div id='cssmenu'>
                <ul>
                    <li><a href="{{ route('homepage') }}">Home</a></li>
                    <li><a href="{{ route('hotels') }}">Hotels</a></li>
                    @auth
                        <li>
                            @if (Auth::user()->user_type == 'customer')
                                <form action="{{ route('cus.pending') }}" method="GET">

                                    <button type="submit" class="button-custom ps-3"> Dashboard</button>
                                </form>
                            @else
                                <form action="{{ route('pending') }}" method="GET">

                                    <button type="submit" class="button-custom ps-3"> Dashboard</button>
                                </form>
                            @endif

                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="button-custom ps-3"> Logout</button>
                            </form>
                        </li>
                    @endauth
                    @guest
                        <li><a class="btn btn-outline-dark" href="{{ route('login') }}">Login</a></li>
                        <li><a class="btn btn-outline-dark" href="{{ route('register') }}">Register</a></li>
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
            <p>Copyright © </p>
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
    {{-- <script src="js/jquery-3.6.0.min.js"></script> --}}
    {{-- <script src="js/jquery-ui.js"></script> --}}
    {{-- <script src="js/bootstrap.min.js"></script> --}}
    {{-- <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/shortcode.js"></script>
    <script src="js/custom.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('js/shortcode.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/functions.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>



</body>

</html>
