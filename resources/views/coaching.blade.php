@extends('layout.app')

@section('content')
<main>

    <div class="breadcrumb__area dark-green breadcrumb-space overflow-hidden custom-width position-relative z-1" data-background="assets/imgs/breadcrumb/breadcrumb.png">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__title-wrapper mb-15 mb-sm-10 mb-xs-5">
                            <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">Coaching</h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                            <nav>
                                <ul>
                                    <li><span><a href="/">Home</a></span></li>
                                    <li class="active"><span>Coaching</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Coaching-page-->
    <section class="coaching__area pt-100 section-space-bottom">
        <div class="container">
            <div class="row mb-minus-30">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="coaching__item mb-30 d-flex align-items-center wow fadeInLeft animated" data-wow-delay=".2s">
                        <div class="coaching__item-midea" data-tilt>
                            <img src="{{ asset('./assets/imgs/coaching/coaching-card-img1.png') }}">                        </div>
                        <div class="coaching__item-content">
                            <h4 class="coaching__item-content-title mb-20">OET Coach     ing</h4>
                            <p>There are many variati of passages of engineer</p>
                            <a href="coaching-details">Read More
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="coaching__item mb-30 d-flex align-items-center wow fadeInLeft animated" data-wow-delay=".3s">
                        <div class="coaching__item-midea" data-tilt>
                            <img src="{{ asset('./assets/imgs/coaching/coaching-card-img2.png') }}">                        </div>
                        <div class="coaching__item-content">
                            <h4 class="coaching__item-content-title mb-20">IELTS Coaching</h4>
                            <p>There are many variati of passages of engineer</p>
                            <a href="coaching-details">Read More
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="coaching__item mb-30 d-flex align-items-center wow fadeInLeft animated" data-wow-delay=".4s">
                        <div class="coaching__item-midea" data-tilt>
                            <img src="{{ asset('./assets/imgs/coaching/coaching-card-img3.png') }}">                        </div>
                        <div class="coaching__item-content">
                            <h4 class="coaching__item-content-title mb-20">TOFEL Coaching</h4>
                            <p>There are many variati of passages of engineer</p>
                            <a href="coaching-details">Read More
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="coaching__item mb-30 d-flex align-items-center wow fadeInLeft animated" data-wow-delay=".5s">
                        <div class="coaching__item-midea" data-tilt>
                            <img src="{{ asset('./assets/imgs/coaching/coaching-card-img4.png') }}">                        </div>
                        <div class="coaching__item-content">
                            <h4 class="coaching__item-content-title mb-20">Citizenship Test</h4>
                            <p>There are many variati of passages of engineer</p>
                            <a href="coaching-details">Read More
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="coaching__item mb-30 d-flex align-items-center wow fadeInLeft animated" data-wow-delay=".6s">
                        <div class="coaching__item-midea" data-tilt>
                            <img src="{{ asset('./assets/imgs/coaching/coaching-card-img5.png') }}">                        </div>
                        <div class="coaching__item-content">
                            <h4 class="coaching__item-content-title mb-20">Life Coaching</h4>
                            <p>There are many variati of passages of engineer</p>
                            <a href="coaching-details">Read More
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="coaching__item mb-30 d-flex align-items-center wow fadeInLeft animated" data-wow-delay=".7s">
                        <div class="coaching__item-midea" data-tilt>
                            <img src="{{ asset('./assets/imgs/coaching/coaching-card-img6.png') }}">                        </div>
                        <div class="coaching__item-content">
                            <h4 class="coaching__item-content-title mb-20">Career coaching</h4>
                            <p>There are many variati of passages of engineer</p>
                            <a href="coaching-details">Read More
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="coaching__item mb-30 d-flex align-items-center wow fadeInLeft animated" data-wow-delay=".8s">
                        <div class="coaching__item-midea" data-tilt>
                            <img src="{{ asset('./assets/imgs/coaching/coaching-card-img7.png') }}">                        </div>
                        <div class="coaching__item-content">
                            <h4 class="coaching__item-content-title mb-20">Skills Exam</h4>
                            <p>There are many variati of passages of engineer</p>
                            <a href="coaching-details">Read More
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="coaching__item mb-30 d-flex align-items-center wow fadeInLeft animated" data-wow-delay=".9s">
                        <div class="coaching__item-midea" data-tilt>
                            <img src="{{ asset('./assets/imgs/coaching/coaching-card-img8.png') }}">                        </div>
                        <div class="coaching__item-content">
                            <h4 class="coaching__item-content-title mb-20">PTE Couching</h4>
                            <p>There are many variati of passages of engineer</p>
                            <a href="coaching-details">Read More
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="coaching__item mb-30 d-flex align-items-center wow fadeInLeft animated" data-wow-delay="1s">
                        <div class="coaching__item-midea" data-tilt>
                            <img src="{{ asset('./assets/imgs/coaching/coaching-card-img9.png') }}">                        </div>
                        <div class="coaching__item-content">
                            <h4 class="coaching__item-content-title mb-20">SAT Couching</h4>
                            <p>There are many variati of passages of engineer</p>
                            <a href="coaching-details">Read More
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Brand area start -->
    <section class="main-brand__area section-space-bottom">
        <div class="brand__area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper brand__active wow fadeIn" data-wow-delay=".3s">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".1s">
                                        <div class="brand__thumb">
                                            <a href="https://segment.com/"><img class="img-fluid" src="assets/imgs/brands/home2-companey-brands-img-1.png" alt="image not found"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".2s">
                                        <div class="brand__thumb">
                                            <a href="https://www.splunk.com/"><img class="img-fluid" src="assets/imgs/brands/home2-companey-brands-img-2.png" alt="image not found"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".3s">
                                        <div class="brand__thumb">
                                            <a href="https://www.hubspot.com/"><img class="img-fluid" src="assets/imgs/brands/home2-companey-brands-img-3.png" alt="image not found"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".4s">
                                        <div class="brand__thumb">
                                            <a href="https://app.asana.com/"><img class="img-fluid" src="assets/imgs/brands/home2-companey-brands-img-4.png" alt="image not found"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".5s">
                                        <div class="brand__thumb">
                                            <a href="https://www.airtasker.com/"><img class="img-fluid" src="assets/imgs/brands/home2-companey-brands-img-5.png" alt="image not found"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Brand area end -->

    <section class="project1__area section-space-bottom p-relative overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="project1__thumb">
                    <div class="project1__media">
                        <img src="{{ asset('./assets/imgs/404/p1.jpg') }}">                    </div>
                    <div class="project1__media">
                        <img src="{{ asset('./assets/imgs/404/p2.jpg') }}">                    </div>
                    <div class="project1__media mt-30">
                        <img src="{{ asset('./assets/imgs/404/p3.jpg') }}">                    </div>
                    <div class="project1__media">
                        <img src="{{ asset('./assets/imgs/404/p4.jpg') }}">                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection