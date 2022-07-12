<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FOREX') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/forex.css') }}" rel="stylesheet">
    <!-- CSS and Boostrap from Template-->
    <!-- Icon CSS -->
    <link href="{{ asset('assets/css/themify-iconsh.css')}}" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/font-awesome.css')}}">

    <!-- Owl Carousel CSS -->
    <link href="{{ asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.default.min.css')}}" rel="stylesheet">

    <!-- Magnific-popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('assets/app/css/app.css')}}">
    <!-- End Import -->
</head>

<body data-spy="scroll" data-target="#data-scroll">
    <div id="app">
        <!-- Navbar -->
        <div class="navbar navbar-custom navbar-expand-lg sticky" role=" navigation">
            <div class="container">
                <button type="button" class="navbar-toggler navbar-dark" data-bs-toggle="collapse" data-bs-target="#data-scroll">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- LOGO -->
                <a class="navbar-brand logo" href="landing.html">
                    <i class="fa fa-bitcoin"></i> {{ config('app.name', 'FOREX') }}
                </a>
                <!-- menu -->
                <div class="navbar-collapse collapse" id="data-scroll">
                    <ul class="nav navbar-nav ms-auto">
                        <li class="nav-item active">
                            <a href="index/#home" class="nav-link" aria-current="page">{{__("Acceuil")}}</a>
                        </li>
                        <li class="nav-item">
                            <a href="/#About" class="nav-link">{{__("A propos")}}</a>
                        </li>

                        <li class="nav-item">
                            <a href="index/#Currencies" class="nav-link">Currencies</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Markets <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-left-0">
                                <li><a href="index.html">Layout One</a></li>
                                <li><a href="index-2.html">Market Two</a></li>
                                <li><a href="index-3.html">Market Three</a></li>
                                <li><a href="index-4.html">Market Four</a></li>
                                <li><a href="index-5.html">Market Five</a></li>
                                <li><a href="index-6.html">Market Six</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#blog" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="datatable.html" class="nav-link">Shortcodes</a>
                        </li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item btn-primary me-1 rounded">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif
                        @if (Route::has('register'))
                        <li class="nav-item btn-secondary rounded">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
                <!--/Menu -->
            </div>
            <!-- end container -->
        </div>
        <main class="">
            <div class="py-0">
            </div>
            <div>
                @yield('content')
            </div>
        </main>
    </div>
    <!-- FOOTER -->
    <footer class="bg-dark footer mb-0 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h4 class="logo"><i class="fa fa-bitcoin"></i> Forex</h4>
                    <p>Architecto beatae vitae dicta sunt explicabo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel sapien et lacus tempus varius. In finibus lorem vel.</p>

                    <!-- <ul class="list-inline social">
                        <li>
                            <a href="javascript:void(0);" class="bg-twitter"><i class="ti-twitter-alt"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="bg-dribbble"><i class="ti-dribbble"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="bg-linkedin"><i class="ti-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="bg-googleplus"><i class="ti-google"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="bg-facebook"><i class="ti-facebook"></i></a>
                        </li>
                    </ul> -->
                </div>

                <div class="col-md-3 col-sm-6 col-md-offset-2">
                    <h5>Solutions</h5>
                    <ul class="list-unstyled footer-list">
                        <li><a href="#">Fee Info</a></li>
                        <li><a href="#">Start Trading</a></li>
                        <li><a href="#">We are Hiring</a></li>
                        <li><a href="#">Blog Posts</a></li>
                        <li><a href="#">API Docs</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-sm-6">
                    <h5>Useful Links</h5>
                    <ul class="list-unstyled footer-list">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Help &amp; Support</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>

            </div> <!-- end row -->


        </div> <!-- end container -->
        <!-- COPYRIGHT -->
        <div class="footer-alt bg-dark">
            <p class="copy-rights">
                @php
                echo date('Y');
                @endphp © Forex. {{ __("All Rights Reserved")}}</p>
        </div>
    </footer>
    <!-- end FOOTER -->
</body>

<!-- js placed at the end of the document so the pages load faster -->
<script src="{{ asset('assets/plugins/jquery/jquery.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!-- Sticky Header -->
<script src="{{ asset('assets/js/jquery.sticky.js')}}"></script>

<!-- Jquery easing -->
<script src="{{ asset('assets/js/jquery.easing.1.4.1.js')}}"></script>

<!-- Owl Carousel -->
<script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>

<!-- Magnific Popup -->
<script src="{{ asset('assets/js/jquery.magnific-popup.js')}}"></script>

<!-- Custom js -->
<script src="{{ asset('assets/js/landing.js')}}"></script>

<script>
    jQuery(document).ready(function($) {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: true,
            autoplayTimeout: 4000,
            responsive: {
                0: {
                    items: 1
                }
            }
        });
    });
</script>

</html>
