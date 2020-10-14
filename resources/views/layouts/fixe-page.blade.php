<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Luggage Rental</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="{{asset('site.webmanifest')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/hero/LR.png')}}">


    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/ozel.css')}}">


</head>
<body>
<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper" style="height: 100px">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="/"><img src="{{asset('assets/img/logo/Luggage_Rental.png')}}" alt="Luggage Rental"
                                         width="350"
                                         style="padding-top: 0"></a>
                    </div>
                    <!-- Main-menu -->
                    <div class="main-menu d-none d-lg-block">
                        <nav>
                            <br>
                            <ul id="navigation">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Right -->
                    <div class="header-right">
                        <br>
                        <ul>
                            <li>
                                <div class="nav-search search-switch">
                                    <span class="flaticon-search"></span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <span><a href="/buy" style=" color: #fff;
                                                font-family: 'Javanese Text';
                                                font-size: 15px;
                                                background-color: #f81f1f;
                                                border-color: #f81f1f;
                                                padding-top: 7px;
                                                padding-left: 10px;
                                                padding-right: 10px;">SALE</a></span>
                                </div>
                            </li>
                            <li>
                                <ul class="">
                                    <!-- Authentication Links -->
                                    @guest
                                        <li class="nav-item">
                                            <a href="{{ route('login') }}"><span class="flaticon-user"></span></a>
                                        </li>
                                    @else
                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown"
                                               class="nav-link  dropdown-toggle nav-link-lg nav-link-user"
                                               style="color: black; font-family: 'Times New Roman'; font-size: 15px;padding-left: 0">
                                                <i> {{ Auth::user()->name }}</i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                @if(Auth::user()->id == 1)
                                                    <a class="dropdown-item" href="{{route('dashboard')}}"><i
                                                            data-feather="dashboard"></i>
                                                        Dashboard
                                                    </a>
                                                @endif
                                                <a class="dropdown-item" href="/profile/{{Auth::user()->id}}"><i
                                                        data-feather="user"></i>
                                                    Account</a>
                                                <a class="dropdown-item" href="/mysale/{{Auth::user()->id}}"><i
                                                        data-feather="mail"></i>
                                                    My Sales</a>
                                                <a class="dropdown-item" href="#"><i data-feather="mail"></i>
                                                    Settings</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                      class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<main>
    @include('layouts.alert')

    @yield('content')
</main>
<footer>
    <!-- Footer Start-->
    <div class="footer-area footer-padding">
        <div class="container">
            <hr style="border: 1px solid black">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-6 col-md-6">

                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4> Contact Us</h4>
                                </div>
                                <form class="row contact_form" action="{{route('contact.us')}}" method="POST">
                                    <div class="col-md-12 form-group p_star" data-validate="Name is required">
                                        <input class="form-control" type="text" name="name" placeholder="Name" required>
                                    </div>

                                    <div class="col-md-12 form-group p_star"
                                         data-validate="Valid email is required: ex@abc.xyz">
                                        <input class="form-control" type="email" name="email"
                                               placeholder="Adress mail" required>
                                    </div>

                                    <div class="col-md-12 form-group p_star" data-validate="Message is required">
                                        <textarea class="form-control" name="text"
                                                  placeholder="Your Message" required></textarea>
                                    </div>
                                    <div style="margin-left:50px">
                                        <button class="btn-primary">
                                            Send Your Message
                                        </button>
                                    </div>
                                    @csrf
                                </form>
                            </div>

                        </div>
                    </div>

                </div>
                <br>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Quick Links</h4>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#"> Offers & Discounts</a></li>
                                <li><a href="#"> Get Coupon</a></li>
                                <li><a href="#"> Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Support</h4>
                            <ul>
                                <li><a href="#">Frequently Asked Questions</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Report a Payment Issue</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-area footer-padding">
                <!-- Footer bottom -->
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-8 col-md-7">
                        <div class="footer-copy-right">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                                All rights reserved | <i class="fa fa-heart"
                                                         aria-hidden="true"></i>
                                by <a href="{{route('home')}}" target="_blank">Luggage Rental</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4 col-md-5">
                        <div class="footer-copy-right f-right">
                            <!-- social -->
                            <div class="footer-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
<!--? Search model Begin -->
<div class="search-model-box">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-btn">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Searching key.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- JS here -->

<script src="{{asset('./assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('./assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('./assets/js/popper.min.js')}}"></script>
<script src="{{asset('./assets/js/bootstrap.min.js')}}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{asset('./assets/js/jquery.slicknav.min.js')}}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{asset('./assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('./assets/js/slick.min.js')}}"></script>

<!-- One Page, Animated-HeadLin -->
<script src="{{asset('./assets/js/wow.min.js')}}"></script>
<script src="{{asset('./assets/js/animated.headline.js')}}"></script>
<script src="{{asset('./assets/js/jquery.magnific-popup.js')}}"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="{{asset('./assets/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('./assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('./assets/js/jquery.sticky.js')}}"></script>

<!-- contact js -->
<script src="{{asset('./assets/js/contact.js')}}"></script>
<script src="{{asset('./assets/js/jquery.form.js')}}"></script>
<script src="{{asset('./assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('./assets/js/mail-script.js')}}"></script>
<script src="{{asset('./assets/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{asset('./assets/js/plugins.js')}}"></script>
<script src="{{asset('./assets/js/main.js')}}"></script>


</body>
</html>
