<!-- preloader start -->
<div id="preloader">
    <div class="preloader-close">x</div>
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!-- preloader start -->
<!-- Backtotop start -->
<div class="backtotop-wrap cursor-pointer">
    <svg class="backtotop-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- Backtotop end -->

<!-- Offcanvas area start -->
<div class="fix">
    <div class="offcanvas__area">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="/">
                            <img src="{{ asset('assets/imgs/logo/offcanvas-logo.png') }}">                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button class="offcanvas-close-icon animation--flip">
                                <span class="offcanvas-m-lines">
                              <span class="offcanvas-m-line line--1"></span><span class="offcanvas-m-line line--2"></span><span class="offcanvas-m-line line--3"></span>
                                </span>
                        </button>
                    </div>
                </div>
                <div class="mobile-menu fix"></div>
                <div class="offcanvas__social">
                    <h3 class="offcanvas__title mb-20">Subscribe & Follow</h3>
                    <ul>
                        <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://pinterest.com/"><i class="fa-brands fa-pinterest-p"></i></a></li>
                        <li><a href="https://youtube.com/"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="https://linkedin.com/"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="offcanvas__btn d-sm-none">
                    <div class="header__btn-wrap">
                        <a class="rr-btn btn-hover-white" href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/graduk'});return false;">Get An Appointment<span><i class="fa-regular fa-angle-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>
<div class="offcanvas__overlay-white"></div>
<!-- Offcanvas area start -->

<!-- Header area start -->
<header>
    <div id="header-sticky" class="header__area header-1 gray-bg">
        <div class="header-container">
            <div class="mega__menu-wrapper p-relative">
                <div class="header__main">
                    <div class="header__left">
                        <div class="header__logo">
                            <a href="/">
                                <div class="logo">
                                    <img src="{{ asset('assets/imgs/logo/logo.png') }}">                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="header__middle">
                        <div class="mean__menu-wrapper d-none d-xl-block">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="active">
                                            <a href="/">Home</a>
                                            {{-- <ul class="submenu">
                                                <li><a href="/">Home 1</a></li>
                                                <li><a href="index-2">Home 2</a></li>
                                                <li><a href="index-3">Home 3</a></li>
                                                <li><a href="index-4">Home 4</a></li>
                                                <li><a href="index-5">Home 5</a></li>
                                            </ul> --}}
                                        </li>
                                        <li>
                                            <a href="about-us">About Us</a>
                                        </li>
                                        {{-- <li>
                                            <a href="/internation-recurement">International Students Recruitment</a>
                                        </li>
                                        <li>
                                            <a href="/global-engagement">Global Engagement in Higher Education</a>
                                        </li>
                                        <li>
                                            <a href="/language-assesment">Language Assessment  Test</a>
                                        </li> --}}
                                        <li class="has-dropdown">
                                            <a href="javascripts">Services</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="/internation-recurement">International Students Recruitment</a>
                                                </li>
                                                <li>
                                                    <a href="/global-engagement">Global Engagement in Higher Education</a>
                                                </li>
                                                <li>
                                                    <a href="/language-assesment">Language Assessment  Test</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="">
                                            <a href="visa">Visa</a>
                                            {{-- <ul class="submenu">
                                                <li><a href="visa">Visa</a></li>
                                                <li><a href="visa-details">Visa Details</a></li>
                                            </ul> --}}
                                        </li>
                                        <li class="">
                                            <a href="blog">blog</a>
                                            {{-- <ul class="submenu">
                                                <li><a href="blog-grid">blog grid</a></li>
                                                <li><a href="blog-details">blog details</a></li>
                                            </ul> --}}
                                        </li>
                                        {{-- <li class="has-dropdown ">
                                            <a href="javascript:void(0)">Page</a>
                                            <ul class="submenu">
                                                <li><a href="visa-offers">visa-offers</a></li>
                                                <li><a href="gallery">gallery</a></li>
                                                <li><a href="pricing">pricing</a></li>
                                                <li><a href="coaching">coaching</a></li>
                                                <li><a href="coaching-details">coaching details</a></li>
                                                <li><a href="countrie">Countries</a></li>
                                                <li><a href="countrie-details">Countries details</a></li>
                                                <li><a href="team">team</a></li>
                                                <li><a href="team-details">team details</a></li>
                                                <li><a href="faq">faq</a></li>
                                                <li><a href="404">404 Page</a></li>
                                            </ul>
                                        </li> --}}
                                        <li>
                                            <a href="contact">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="header__right">
                        <div class="header__action d-flex align-items-center">
                            <div class="header__btn-wrap d-none d-sm-inline-flex">
                                <a href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/graduk'});return false;" class="rr-btn">Get An Appointment <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <div class="header__hamburger ml-20 d-xl-none">
                                <div class="sidebar__toggle">
                                    <button class="bar-icon">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="popup-search-box">
    <div class="box-inner-wrap d-flex align-items-center">
        <form id="form" action="#" method="get" role="search">
            <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
        </form>
        <div class="search-close"><i class="fa-sharp fa-regular fa-xmark"></i></div>
    </div>
</div>
<!-- Header area end -->