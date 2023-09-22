<!DOCTYPE html>
<html lang="en">
<?php
use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edukon</title>
    <link rel="shortcut icon" href="{{ asset('landing pages/LMS/Edukon Main File/buyer-file/edukonassets/images/x-icon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('styles/timeline.css') }}">
    {{-- <link rel="stylesheet" href="assets/css/animate.css"> --}}
    <link rel="stylesheet" href="{{ asset('landing pages/LMS/Edukon Main HTML Template/buyer-file/edukon/assets/css/animate.css') }}">
    {{-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('landing pages/LMS/Edukon Main HTML Template/buyer-file/edukon/assets/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="assets/css/icofont.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('landing pages/LMS/Edukon Main HTML Template/buyer-file/edukon/assets/css/icofont.min.css') }}">
    {{-- <link rel="stylesheet" href="assets/css/swiper.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('landing pages/LMS/Edukon Main HTML Template/buyer-file/edukon/assets/css/swiper.min.css') }}">
    {{-- <link rel="stylesheet" href="assets/css/lightcase.css"> --}}
    <link rel="stylesheet" href="{{ asset('landing pages/LMS/Edukon Main HTML Template/buyer-file/edukon/assets/css/style.css') }}">
    {{-- <link rel="stylesheet" href="assets/css/style.css"> --}}
    <link rel="stylesheet" href="{{ asset('landing pages/LMS/Edukon Main HTML Template/buyer-file/edukon/assets/css/style.css') }}">
</head>
<body>

    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->


    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>
    <!-- scrollToTop ending here -->


    <!-- header section start here -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="header-top-area">
                    <ul class="lab-ul left">
                        <li>
                            <i class="icofont-ui-call"></i> <span>+800-123-4567 6587</span>
                        </li>
                        <li>
                            <i class="icofont-location-pin"></i> Beverley, New York 224 USA
                        </li>
                    </ul>
                    <ul class="lab-ul social-icons d-flex align-items-center">
                        <li><p>Find us on : </p></li>
                        <li><a href="#" class="fb"><i class="icofont-facebook-messenger"></i></a></li>
                        <li><a href="#" class="twitter"><i class="icofont-twitter"></i></a></li>
                        <li><a href="#" class="vimeo"><i class="icofont-vimeo"></i></a></li>
                        <li><a href="#" class="skype"><i class="icofont-skype"></i></a></li>
                        <li><a href="#" class="rss"><i class="icofont-rss-feed"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="index.html"><img src="{{ asset('landing pages/LMS/Edukon Main HTML Template/buyer-file/edukon/assets/images/logo/01.png') }}" alt="logo"></a>
                    </div>
                    <div class="menu-area">
                        <div class="menu">
                            <ul class="lab-ul">
                                <li>
                                    {{-- <a href="{{ route('home') }}">Home</a> --}}
                                    <a href="">Home</a>
                                </li>

                                <li>
                                    {{-- <a href="{{ route('courses') }}">Courses</a> --}}
                                    <a href="">Courses</a>

                                </li>
                                <li>
                                    <a href="">Blog</a>
                                    {{-- <a href="{{ route('blogs') }}">Blog</a> --}}
                                </li>
                                <li>
                                    {{-- <a href="{{ route('events') }}">Events</a> --}}
                                    <a href="">Events</a>
                                </li>
                                <li>
                                    <a href="#0">Pages</a>
                                    <ul class="lab-ul">
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="team.html">Team</a></li>
                                        <li><a href="instructor.html">Instructor</a></li>
                                        <li>
                                            <a href="#0">Shop Pages</a>
                                            <ul class="lab-ul">
                                                <li><a href="shop.html">Shop Page</a></li>
                                                <li><a href="shop-single.html">Shop Details Page</a></li>
                                                <li><a href="cart-page.html">Shop Cart Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="search-page.html">Search Page</a></li>
                                        <li><a href="search-none.html">Search None</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>

                                {{-- @dd(Auth::guard('admin')->user()) --}}
                                @if (Auth::guard('admin')->user())
                                {{-- @if (Auth::guard('admin')->user() || Auth::guard('professor')->user() || Auth::guard('student')->user()) --}}
                                <li>
                                    @if ($admin = Auth::guard('admin')->user())
                                        <img src="{{ $admin->imagePath }}" alt="Avator" width="50px" height="50px" style="border-radius: 50%;">
                                        {{-- <a href="">{{ $admin->name }}</a> --}}
                                    {{-- @elseif ($professor = Auth::guard('professor')->user())
                                        <a href="">{{ $professor->name }}</a>
                                    @elseif ($student = Auth::guard('student')->user())
                                        <a href="">{{ $student->name }}</a> --}}
                                    @endif
                                    <ul class="lab-ul">
                                        <li><a href="{{ route('adminDashboard') }}" class="active">Dashboard</a></li>
                                        {{-- <hr> --}}
                                        {{-- <li><a href="{{ route('adminProfile') }}">My Profile</a></li> --}}
                                        <li><a href="index-3.html">My Courses</a></li>
                                        <li>
                                            <form action="{{ route('logout') }}" method="post">
                                                 @csrf
                                                <button type="submit" class="nav-link">Log Out</button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                @endif
                            </ul>
                        </div>
                        @if (!(Auth::guard('admin')->user()))

                        {{-- @if (!(Auth::guard('admin')->user() || Auth::guard('professor')->user() || Auth::guard('student')->user())) --}}
                            <a href="{{ route('login') }}" class="login"><i class="icofont-user"></i> <span>LOG IN</span> </a>
                            <a href="{{ route('register') }}" class="signup"><i class="icofont-users"></i> <span>SIGN UP</span> </a>
                        @endif
                        {{-- @guest --}}
                        {{-- <a href="{{ route('login') }}" class="login"><i class="icofont-user"></i> <span>LOG IN</span> </a> --}}
                        {{-- <a href="{{ route('register') }}" class="signup"><i class="icofont-users"></i> <span>SIGN UP</span> </a> --}}
                        {{-- @endguest --}}


                        {{-- @endguest --}}


                        <!-- toggle icons -->
                        <div class="header-bar d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="ellepsis-bar d-lg-none">
                            <i class="icofont-info-square"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header section ending here -->

    {{-- Contenct goes here --}}

    @yield('content')


    <!-- footer -->
    <div class="news-footer-wrap">
        <div class="fs-shape">
            <img src="{{ asset('landing pages/LMS/Edukon Main File/buyer-file/edukon/src/assets/images/shape-img/03.png') }}" alt="fst" class="fst-1">
            <img src="{{ asset('landing pages/LMS/Edukon Main File/buyer-file/edukon/src/assets/images/shape-img/04.png') }}" alt="fst" class="fst-2">
        </div>
        <!-- Newsletter Section Start Here -->
        <div class="news-letter">
            <div class="container">
                <div class="section-wrapper">
                    <div class="news-title">
                        <h3>Want Us To Email You About Special Offers And Updates?</h3>
                    </div>
                    <div class="news-form">
                        <form action="/">
                            <div class="nf-list">
                                <input type="email" name="email" placeholder="Enter Your Email">
                                <input type="submit" name="submit" value="Subscribe Now">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Section Ending Here -->

        <!-- Footer Section Start Here -->
        <footer>
            <div class="footer-top padding-tb pt-0">
                <div class="container">
                    <div class="row g-4 row-cols-xl-4 row-cols-md-2 row-cols-1 justify-content-center">
                        <div class="col">
                            <div class="footer-item">
                                <div class="footer-inner">
                                    <div class="footer-content">
                                        <div class="title">
                                            <h4>Site Map</h4>
                                        </div>
                                        <div class="content">
                                            <ul class="lab-ul">
                                                <li><a href="#">Documentation</a></li>
                                                <li><a href="#">Feedback</a></li>
                                                <li><a href="#">Plugins</a></li>
                                                <li><a href="#">Support Forums</a></li>
                                                <li><a href="#">Themes</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="footer-item">
                                <div class="footer-inner">
                                    <div class="footer-content">
                                        <div class="title">
                                            <h4>Useful Links</h4>
                                        </div>
                                        <div class="content">
                                            <ul class="lab-ul">
                                                <li><a href="#">About Us</a></li>
                                                <li><a href="#">Help Link</a></li>
                                                <li><a href="#">Terms & Conditions</a></li>
                                                <li><a href="#">Contact Us</a></li>
                                                <li><a href="#">Privacy Policy</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="footer-item">
                                <div class="footer-inner">
                                    <div class="footer-content">
                                        <div class="title">
                                            <h4>Social Contact</h4>
                                        </div>
                                        <div class="content">
                                            <ul class="lab-ul">
                                                <li><a href="#">Facebook</a></li>
                                                <li><a href="#">Twitter</a></li>
                                                <li><a href="#">Instagram</a></li>
                                                <li><a href="#">YouTube</a></li>
                                                <li><a href="#">Github</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="footer-item">
                                <div class="footer-inner">
                                    <div class="footer-content">
                                        <div class="title">
                                            <h4>Our Support</h4>
                                        </div>
                                        <div class="content">
                                            <ul class="lab-ul">
                                                <li><a href="#">Help Center</a></li>
                                                <li><a href="#">Paid with Mollie</a></li>
                                                <li><a href="#">Status</a></li>
                                                <li><a href="#">Changelog</a></li>
                                                <li><a href="#">Contact Support</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom style-2">
                <div class="container">
                    <div class="section-wrapper">
                        <p>&copy; 2021 <a href="index.html">Edukon</a> Designed by <a href="https://themeforest.net/user/CodexCoder" target="_blank">CodexCoder</a> </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section Ending Here -->
    </div>
    <!-- footer -->


    {{-- <script src="assets/js/jquery.js"></script> --}}
    <script src="{{ asset('landing pages/LMS/Edukon Main HTML Template/buyer-file/edukon/assets/js/jquery.js') }}"></script>
    {{-- <script src="assets/js/bootstrap.min.js"></script> --}}
    <script src="{{ asset('landing pages/LMS/Edukon Main HTML Template/buyer-file/edukon/assets/js/bootstrap.min.js') }}"></script>
    {{-- <script src="assets/js/swiper.min.js"></script> --}}
    <script src="{{ asset('landing pages/LMS/Edukon Main HTML Template/buyer-file/edukon/assets/js/swiper.min.js') }}"></script>
    {{-- <script src="assets/js/progress.js"></script> --}}
    <script src="{{ asset('landing pages/LMS/Edukon Main HTML Template/buyer-file/edukon/assets/js/progress.js') }}"></script>
    {{-- <script src="assets/js/lightcase.js"></script> --}}
    <script src="{{ asset('landing pages/LMS/Edukon Main HTML Template/buyer-file/edukon-documentation/js/jquery.min.js') }}"></script>
    {{-- <script src="assets/js/counter-up.js"></script> --}}
    <script src="{{ asset('landing pages/LMS/Edukon Main HTML Template/buyer-file/edukon/assets/js/counter-up.js') }}"></script>
    {{-- <script src="assets/js/isotope.pkgd.js"></script> --}}
    <script src="{{ asset('landing pages/LMS/Edukon Main HTML Template/buyer-file/edukon/assets/js/isotope.pkgd.js') }}"></script>
    {{-- <script src="assets/js/functions.js"></script> --}}
    <script src="{{ asset('landing pages/LMS/Edukon Main HTML Template/buyer-file/edukon/assets/js/functions.js') }}"></script>
    <script src="{{ asset('scripts/followUnfollow.js') }}"></script>
    {{-- <script>
        $('.toggle-replies').on('click', function() {
            var link = $(this);
            var replies = link.next('.comment-list');

            if (replies.hasClass('show')) {
                link.html(link.html().replace('Hide', 'See'));
            } else {
                link.html(link.html().replace('See', 'Hide'));
            }
        });
    </script> --}}
</body>
</html>
