@extends('layout.app')

@section('content')
<main>
    <!-- Banner area start -->
    <section class="banner__area banner-4 banner-5  p-relative">
        <div class="banner__thumb-bg banner-5__thumb-bg" data-background="assets/imgs/banner-5/hero-5.png"></div>
        <div class="container">
            <div class="banner banner__space banner-4__space banner-5__space">
                <div class="row">
                    <div class="col-12">
                        <div class="banner-5__wrapper">
                            <div class="banner__content banner-4__content banner-5__content p-relative z-index-1">
                                <h6 class="banner-5__subtitle">Welcome to Our Agency</h6>
                                <h2 class="banner__title banner-4__title banner-5__title" data-animation="pixfix-fadeInUp" data-delay="1000ms" data-duration="1200ms">Immigration & <br> Visa Solutions The <br> Easy Way </h2>
                                <p data-animation="pixfix-fadeInUp" data-delay="1200ms" data-duration="1400ms">There are many variations of passages of available but the majority have suffered <br> alteration in some form, by injected hum randomised words which don't slightly <br> but the majority have suffered</p>
                                <a href="service" class="rr-btn btn-hover-white banner-4__btn-wrapper-btn">Get Started<i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <div class="banner-5__form-wrapper">
                                <h6 class="banner-5__form-wrapper-subtitle wow fadeInLeft animated" data-wow-delay=".3s">Contact us</h6>
                                <h3 class="banner-5__form-wrapper-title wow fadeInLeft animated" data-wow-delay=".5s">Make an Appointment</h3>
                                <form class="banner-5__form-wrapper-form" id="contact-us__form" method="POST" action="./mail.php">
                                    <div class="row wow fadeInLeft animated" data-wow-delay=".9s">
                                        <div class="col-sm-6 banner-5-gutter">
                                            <div class="banner-5__form-wrapper-form-input ">
                                                <input name="name" id="name" type="text" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="banner-5__form-wrapper-form-input">
                                                <input name="email" id="email" type="text" placeholder="Enter Email">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="banner-5__form-wrapper-form-input">
                                                <input name="phone" id="phone" type="text" placeholder="Your Site">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="banner-5__form-wrapper-form-textarea">
                                                <textarea name="textarea" id="textarea" cols="30" rows="10" placeholder="Your Comments"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="rr-btn btn-hover-white banner-4__btn-wrapper-btn">Send Message <i class="fa-solid fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>

    <!--feature 5-->
    <section class="feature-5__area pt-60">
        <div class="container">
            <div class="row mb-minus-30">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="feature-5__item mb-30">
                        <div class="feature-5__item-icon">
                            <img src="{{ asset('assets/imgs/home-5/feature-icon-1.png') }}">                        </div>
                        <div class="feature-5__item-content">
                            <h3 class="feature-5__item-content-title"><a href="story">Apply for Visa</a></h3>
                            <p class="feature-5__item-content-dec">Lorem ipsum is simply free dolo sit amet ctetur.</p>
                            <a class="feature-5__item-content-btn" href="story">
                                <svg width="27" height="14" viewBox="0 0 27 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 7L25 7" stroke="#727272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20 1L26 7L20 13" stroke="#727272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="feature-5__item mb-30">
                        <div class="feature-5__item-icon feature-5__item-icon-2">
                            <img src="{{ asset('assets/imgs/home-5/feature-icon-2.png') }}">                        </div>
                        <div class="feature-5__item-content">
                            <h3 class="feature-5__item-content-title"><a href="story">Immigration Programs</a></h3>
                            <p class="feature-5__item-content-dec">Lorem ipsum is simply free dolo sit amet ctetur.</p>
                            <a class="feature-5__item-content-btn" href="story">
                                <svg width="27" height="14" viewBox="0 0 27 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 7L25 7" stroke="#727272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20 1L26 7L20 13" stroke="#727272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="feature-5__item mb-30">
                        <div class="feature-5__item-icon">
                            <img src="{{ asset('assets/imgs/home-5/feature-icon-3.png') }}">                        </div>
                        <div class="feature-5__item-content">
                            <h3 class="feature-5__item-content-title"><a href="story">Visa   Documents</a></h3>
                            <p class="feature-5__item-content-dec">Lorem ipsum is simply free dolo sit amet ctetur.</p>
                            <a class="feature-5__item-content-btn" href="story">
                                <svg width="27" height="14" viewBox="0 0 27 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 7L25 7" stroke="#727272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20 1L26 7L20 13" stroke="#727272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!--about 5 start-->
     <section class="about-5__area teamdetail service-5 p-relative section-space">
         <div class="about-5__shape">
             <img src="{{ asset('assets/imgs/home-5/about-bg-shape.png') }}">         </div>
         <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="row align-items-center about-5__wrap">
                        <div class="col-sm-6">
                            <div class="about-5__thumb">
                                <img src="{{ asset('assets/imgs/home-5/about-img-1.png') }}">                                <div class="about-5__thumb-border"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-5__media">
                                <div class="about-5__media-circle spin">
                                    <img src="{{ asset('assets/imgs/home-5/about-circle-img.png') }}">                                </div>
                                <div class="about-5__media-bottom-img">
                                    <img src="{{ asset('assets/imgs/home-5/about-img-2.png') }}">                                    <div class="about-5__media-bottom-img-border"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-5__title-wrapper about-5__title-wrapper">
                        <h6 class="service-5__subtitle wow fadeInLeft animated" data-wow-delay=".2s">THE BEST VISA PROVIDER</h6>
                        <h2 class="service-5__title wow fadeInLeft animated" data-wow-delay=".3s">Immigration Services From Experienced Lawyers</h2>
                        <p class="service-5__dec">There are may experienced engineer for your immigration service. We <br> give the best immigration service for you.</p>
                    </div>
                    <div class="teamdetail__progress about-5__wrap pt-30">
                        <div class="skills-item">
                            <h4 class="title">Immigration Consultency</h4>
                            <div class="progress">
                                <div class="progress-bar wow slideInLeft" data-wow-delay="0ms" data-wow-duration="2000ms" role="progressbar" style="width: 90%; visibility: visible; animation-duration: 2000ms; animation-delay: 0ms; animation-name: slideInLeft;">
                                    <span>90%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skills-item">
                            <h4 class="title">Student Consultency</h4>
                            <div class="progress">
                                <div class="progress-bar wow slideInLeft" data-wow-delay="0ms" data-wow-duration="2000ms" role="progressbar" style="width: 80%; visibility: visible; animation-duration: 2000ms; animation-delay: 0ms; animation-name: slideInLeft;">
                                    <span>80%</span>
                                </div>
                            </div>
                        </div>
                        <a class="rr-btn mt-20" href="about-us">Discover More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
     </section>

     <!--service 5-->
     <section class="service-5__area section-space bg-gray">
        <div class="container">
            <div class="row mb-minus-30">
                <div class="col-sm-6">
                    <div class="service-5__title-wrapper">
                        <h6 class="service-5__subtitle wow fadeInLeft animated" data-wow-delay=".2s">Our Services</h6>
                        <h2 class="service-5__title wow fadeInLeft animated" data-wow-delay=".3s">Outstanding immigration visa services.</h2>
                        <p class="service-5__dec">Experience unparalleled growth with our expert guidance. Navigate challenges, seize opportunities, and watch your business.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="service-5__item mb-30">
                        <div class="service-5__item-icon img-height-1">
                            <img src="{{ asset('assets/imgs/home-5/service-icon-1.png') }}">                        </div>
                        <div class="service-5__item-thumb">
                            <div class="service-5__item-thumb-content">
                                <h3 class="service-5__item-thumb-content-title"><a href="story">Student Visa</a></h3>
                                <p class="service-5__item-thumb-content-dec">We have to a tendency to believe the idea that smart looking of any website.</p>
                                <a class="service-5__item-thumb-content-btn" href="story">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <img src="{{ asset('assets/imgs/home-5/service-1.png') }}">                            <h3 class="service-5__item-title"><a href="story">Student Visa</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="service-5__item mb-30">
                        <div class="service-5__item-icon img-height-2">
                            <img src="{{ asset('assets/imgs/home-5/service-icon-2.png') }}">                        </div>
                        <div class="service-5__item-thumb">
                            <div class="service-5__item-thumb-content">
                                <h3 class="service-5__item-thumb-content-title"><a href="story">Business Visa</a></h3>
                                <p class="service-5__item-thumb-content-dec">We have to a tendency to believe the idea that smart looking of any website.</p>
                                <a class="service-5__item-thumb-content-btn" href="story">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <img src="{{ asset('assets/imgs/home-5/service-2.png') }}">                            <h3 class="service-5__item-title"><a href="story">Business Visa</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="service-5__item mb-30">
                        <div class="service-5__item-icon img-height-3">
                            <img src="{{ asset('assets/imgs/home-5/service-icon-3.png') }}">                        </div>
                        <div class="service-5__item-thumb">
                            <div class="service-5__item-thumb-content">
                                <h3 class="service-5__item-thumb-content-title"><a href="story">Family Visa</a></h3>
                                <p class="service-5__item-thumb-content-dec">We have to a tendency to believe the idea that smart looking of any website.</p>
                                <a class="service-5__item-thumb-content-btn" href="story">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <img src="{{ asset('assets/imgs/home-5/service-3.png') }}">                            <h3 class="service-5__item-title"><a href="story">Family Visa</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="service-5__item mb-30">
                        <div class="service-5__item-icon img-height-4">
                            <img src="{{ asset('assets/imgs/home-5/service-icon-4.png') }}">                        </div>
                        <div class="service-5__item-thumb">
                            <div class="service-5__item-thumb-content">
                                <h3 class="service-5__item-thumb-content-title"><a href="story">Tourist Visa</a></h3>
                                <p class="service-5__item-thumb-content-dec">We have to a tendency to believe the idea that smart looking of any website.</p>
                                <a class="service-5__item-thumb-content-btn" href="story">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <img src="{{ asset('assets/imgs/home-5/service-4.png') }}">                            <h3 class="service-5__item-title"><a href="story">Tourist Visa</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="service-5__item mb-30">
                        <div class="service-5__item-icon img-height-5">
                            <img src="{{ asset('assets/imgs/home-5/service-icon-5.png') }}">                        </div>
                        <div class="service-5__item-thumb">
                            <div class="service-5__item-thumb-content">
                                <h3 class="service-5__item-thumb-content-title"><a href="story">Residence Visa</a></h3>
                                <p class="service-5__item-thumb-content-dec">We have to a tendency to believe the idea that smart looking of any website.</p>
                                <a class="service-5__item-thumb-content-btn" href="story">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <img src="{{ asset('assets/imgs/home-5/service-5.png') }}">                            <h3 class="service-5__item-title"><a href="story">Residence Visa</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="service-5__item service-5__item-2 mb-30">
                        <div class="service-5__item-2-shape">
                            <img src="{{ asset('assets/imgs/home-5/service-item-shape.png') }}">                        </div>
                        <h3 class="service-5__item-2-title">Get visa with <br> 100% success <br> rate</h3>
                        <a class="rr-btn btn-hover-white mt-45" href="story">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
     </section>

    <!--choice-->
    <section class="choice__area section-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__title-wrapper text-center mb-70">
                        <h6 class="section__title-wrapper-center-subtitle mb-10 wow fadeInLeft animated" data-wow-delay=".2s">Countries You Can Visit</h6>
                        <h2 class="section__title-wrapper-title wow fadeInLeft animated" data-wow-delay=".3s">Select the Country of <br> Your Choice</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-minus-30">
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="choice__item mb-30">
                        <div class="choice__item-icon">
                            <img src="{{ asset('assets/imgs/home-4/visit-img-1.gif') }}">                        </div>
                        <h3 class="choice__item-title"><a href="countrie">Germany</a></h3>
                        <p class="choice__item-dec">Nulla ut elemen tum sapien</p>
                        <a class="choice__item-btn" href="countrie">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="choice__item mb-30">
                        <div class="choice__item-icon">
                            <img src="{{ asset('assets/imgs/home-4/visit-img-2.gif') }}">                        </div>
                        <h3 class="choice__item-title"><a href="countrie">South Korea</a></h3>
                        <p class="choice__item-dec">Nulla ut elemen tum sapien</p>
                        <a class="choice__item-btn" href="countrie">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="choice__item mb-30">
                        <div class="choice__item-icon">
                            <img src="{{ asset('assets/imgs/home-4/visit-img-5.gif') }}">                        </div>
                        <h3 class="choice__item-title"><a href="countrie">South Africa</a></h3>
                        <p class="choice__item-dec">Nulla ut elemen tum sapien</p>
                        <a class="choice__item-btn" href="countrie">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="choice__item mb-30">
                        <div class="choice__item-icon">
                            <img src="{{ asset('assets/imgs/home-4/visit-img-3.gif') }}">                        </div>
                        <h3 class="choice__item-title"><a href="countrie">Indonesia</a></h3>
                        <p class="choice__item-dec">Nulla ut elemen tum sapien</p>
                        <a class="choice__item-btn" href="countrie">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="choice__item mb-30">
                        <div class="choice__item-icon">
                            <img src="{{ asset('assets/imgs/home-4/visit-img-6.gif') }}">                        </div>
                        <h3 class="choice__item-title"><a href="countrie">Turkey</a></h3>
                        <p class="choice__item-dec">Nulla ut elemen tum sapien</p>
                        <a class="choice__item-btn" href="countrie">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="choice__item mb-30">
                        <div class="choice__item-icon">
                            <img src="{{ asset('assets/imgs/home-4/visit-img-4.gif') }}">                        </div>
                        <h3 class="choice__item-title"><a href="countrie">Japan</a></h3>
                        <p class="choice__item-dec">Nulla ut elemen tum sapien</p>
                        <a class="choice__item-btn" href="countrie">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--trining-->
    <section class="trining__area h-5-bg p-relative overflow-hidden section-space-top z-1">
        <div class="trining__shape">
            <img src="{{ asset('assets/imgs/home-5/trinning-bg-shape.png') }}">        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="trining__content">
                        <div class="trining__content-shape">
                            <img src="{{ asset('assets/imgs/home-5/trinning-content-bg-shape.png') }}">                        </div>
                        <h6 class="trining__content-subtitle">Countries You Can Visit</h6>
                        <h2 class="trining__content-title">Excellence in Visa & Immigration Agency</h2>
                        <p class="trining__content-dec">There are many variations of passages of available but the majority have suffered. Alteration in some form, lipsum is simply free tex by injected humou or rando mised words even believable.</p>
                        <a class="rr-btn btn-white mt-40" href="visa">Discover More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="trining__title-wrap">
                        <h6 class="trining__subtitle">Trining & Cetification</h6>
                        <h2 class="trining__title">Immigration Trainings <br> Your Choice</h2>
                    </div>
                </div>
            </div>
            <div class="swiper trining__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide trining__slider-item">
                        <div class="trining__slider-item-thumb">
                            <img src="{{ asset('assets/imgs/home-5/trinning-slider-img-1.png') }}">                            <div class="trining__slider-item-thumb-icon"><i class="fa-solid fa-plus"></i></div>
                            <h3 class="trining__slider-item-thumb-title"><a href="team">Citizenship Test</a></h3>
                        </div>
                    </div>
                    <div class="swiper-slide trining__slider-item">
                        <div class="trining__slider-item-thumb">
                            <img src="{{ asset('assets/imgs/home-5/trinning-slider-img-2.png') }}">                            <div class="trining__slider-item-thumb-icon"><i class="fa-solid fa-plus"></i></div>
                            <h3 class="trining__slider-item-thumb-title"><a href="team">Citizenship Test</a></h3>
                        </div>
                    </div>
                    <div class="swiper-slide trining__slider-item">
                        <div class="trining__slider-item-thumb">
                            <img src="{{ asset('assets/imgs/home-5/trinning-slider-img-3.png') }}">                            <div class="trining__slider-item-thumb-icon"><i class="fa-solid fa-plus"></i></div>
                            <h3 class="trining__slider-item-thumb-title"><a href="team">Citizenship Test</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!--team-4-->
     <section class="team__area team-5 section-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__title-wrapper text-center mb-60">
                        <h6 class="section__title-wrapper-center-subtitle mb-10 wow fadeInLeft animated" data-wow-delay=".2s">Professional people</h6>
                        <h2 class="section__title-wrapper-title wow fadeInLeft animated" data-wow-delay=".3s">Meet Treck Expert Visa <br> Consultatns</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-minus-70">
                <div class="col-12">
                    <div class="swiper team-5__wrap team-5__item-slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide mb-70">
                                <div class="team__item wow fadeInLeft animated" data-wow-delay=".2s">
                                    <div class="team__item-media">
                                        <img src="{{ asset('./assets/imgs/home-5/team-1.png') }}">                                    </div>
                                    <div class="team__item-content d-flex justify-content-between">
                                        <div class="team__item-content-text">
                                            <a href="team-details">
                                                <h5>Jane Cooper</h5>
                                            </a>
                                            <p>President of Sales</p>
                                        </div>
                                        <div class="team__item-content-social">
                                            <div class="team__item-content-social-icon">
                                                <i class="fa-solid fa-share-nodes"></i>
                                            </div>
                                            <ul class="team__item-content-social-list">
                                                <li><a href="https://pinterest.com/"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                                <li class="mt-10"><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li class="mt-10"><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a></li>
                                                <li class="mt-10"><a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide mb-70">
                                <div class="team__item wow fadeInLeft animated" data-wow-delay=".3s">
                                    <div class="team__item-media">
                                        <img src="{{ asset('./assets/imgs/home-5/team-2.png') }}">                                    </div>
                                    <div class="team__item-content d-flex justify-content-between">
                                        <div class="team__item-content-text">
                                            <a href="team-details">
                                                <h5>Savannah Nguyen</h5>
                                            </a>
                                            <p>Nursing Assistant</p>
                                        </div>
                                        <div class="team__item-content-social">
                                            <div class="team__item-content-social-icon">
                                                <i class="fa-solid fa-share-nodes"></i>
                                            </div>
                                            <ul class="team__item-content-social-list">
                                                <li><a href="https://pinterest.com/"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                                <li class="mt-10"><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li class="mt-10"><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a></li>
                                                <li class="mt-10"><a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide mb-70">
                                <div class="team__item wow fadeInLeft animated" data-wow-delay=".4s">
                                    <div class="team__item-media">
                                        <img src="{{ asset('./assets/imgs/home-5/team-3.png') }}">                                    </div>
                                    <div class="team__item-content d-flex justify-content-between">
                                        <div class="team__item-content-text">
                                            <a href="team-details">
                                                <h5>Ronald Richards</h5>
                                            </a>
                                            <p>Dog Trainer</p>
                                        </div>
                                        <div class="team__item-content-social">
                                            <div class="team__item-content-social-icon">
                                                <i class="fa-solid fa-share-nodes"></i>
                                            </div>
                                            <ul class="team__item-content-social-list">
                                                <li><a href="https://pinterest.com/"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                                <li class="mt-10"><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li class="mt-10"><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a></li>
                                                <li class="mt-10"><a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--counter-->
    <section class="latest-counter__area overflow-hidden p-relative z-1 pt-100 pb-90 pt-xs-30 pb-xs-60 latest-counter-bg">
        <div class="latest-counter__shapes">
            <div class="shape-1 upDown">
                <img src="{{ asset('assets/imgs/home-5/counter-plane-img.png') }}">            </div>
            <div class="shape-2">
                <img src="{{ asset('assets/imgs/home-5/counter-bg-shape.png') }}">            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                   <div class="latest-counter__counter-box wow fadeInLeft animated" data-wow-delay="1s">
                        <div class="latest-counter__content text-center">
                            <div class="latest-counter__content__counter-img img-1 mt-40">
                                <img src="{{ asset('assets/imgs/home-5/counter-icon-1.png') }}">                            </div>
                            <h5><span class="odometer" data-count="200">0</span>+</h5>
                            <span>Happy Clients</span>
                        </div>
                   </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="latest-counter__content text-center wow fadeInLeft animated" data-wow-delay="1.2s">
                        <div class="latest-counter__content__counter-img img-2">
                            <img src="{{ asset('assets/imgs/home-5/counter-icon-2.png') }}">                        </div>
                        <h5><span class="odometer" data-count="99">0</span>+</h5>
                        <span>Successful Rates </span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="latest-counter__content text-center wow fadeInLeft animated" data-wow-delay="1.4s">
                        <div class="latest-counter__content__counter-img img-3">
                            <img src="{{ asset('assets/imgs/home-5/counter-icon-3.png') }}">                        </div>
                        <h5><span class="odometer" data-count="15">0</span>k+</h5>
                        <span>Visa Prosses</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="latest-counter__content text-center wow fadeInLeft animated" data-wow-delay="1.4s">
                        <div class="latest-counter__content__counter-img img-4">
                            <img src="{{ asset('assets/imgs/home-5/counter-icon-4.png') }}">                        </div>
                        <h5><span class="odometer" data-count="600">0</span>+</h5>
                        <span>Immigration</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--faq 5-->
    <section class="faq-5__area ask-question p-relative overflow-hidden section-space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-5__thumb">
                        <div class="faq-5__thumb-shape upDown-bottom">
                            <img src="{{ asset('assets/imgs/home-5/faq-circle-plane-shape.png') }}">                        </div>
                        <div class="faq-5__thumb-media">
                            <img src="{{ asset('assets/imgs/home-5/faq-right-img.png') }}">                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section__title-wrapper mb-40">
                        <h6 class="section__title-wrapper-black-subtitle mb-10 wow fadeInLeft animated" data-wow-delay=".2s">Have Any Questions?</h6>
                        <h2 class="section__title-wrapper-title wow fadeInLeft animated" data-wow-delay=".3s">Frequently Asked <br> Questions ?</h2>
                    </div>
                    <div class="ask-question__faq">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item ask-question__faq-item faq-5__item wow fadeInLeft animated" data-wow-delay=".4s">
                                <h5 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                        Which is the prerequisites for immigration?
                                    </button>
                                </h5>
                                <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Sed perspiciatis unde omniste natus voluptatem accusantie <br> doloremque laudantium totam aperiam eaque quae inventore veritatis <br> et quasi architecto beatae vitae dicta.</p>
                                    </div>
                                </div>
                            </div>
    
                            <div class="accordion-item ask-question__faq-item faq-5__item wow fadeInLeft animated" data-wow-delay=".5s">
                                <h5 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What are the contact address of Routex?
                                    </button>
                                </h5>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Sed perspiciatis unde omniste natus voluptatem accusantie <br> doloremque laudantium totam aperiam eaque quae inventore veritatis <br> et quasi architecto beatae vitae dicta.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item ask-question__faq-item faq-5__item wow fadeInLeft animated" data-wow-delay=".5s">
                                <h5 class="accordion-header" id="headingTow">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTow" aria-expanded="true" aria-controls="collapseTow">
                                        What are the contact address of Routex?
                                    </button>
                                </h5>
                                <div id="collapseTow" class="accordion-collapse collapse" aria-labelledby="headingTow" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Sed perspiciatis unde omniste natus voluptatem accusantie <br> doloremque laudantium totam aperiam eaque quae inventore veritatis <br> et quasi architecto beatae vitae dicta.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item ask-question__faq-item faq-5__item wow fadeInLeft animated" data-wow-delay=".5s">
                                <h5 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        What are the contact address of Routex?
                                    </button>
                                </h5>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Sed perspiciatis unde omniste natus voluptatem accusantie <br> doloremque laudantium totam aperiam eaque quae inventore veritatis <br> et quasi architecto beatae vitae dicta.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--testi 5-->
    <section class="testi-5__area section-space p-relative testi-bg z-1">
        <div class="testi-5__bg-img" data-background="assets/imgs/home-5/testi-5-bg-img.png"></div>
        <div class="container">
            <div class="row  mb-minus-65">
                <div class="col-12">
                    <div class="swiper testi-5__wrap testi-5__item-slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide text-center mb-65">
                                <div class="testi-5__item">
                                    <div class="testi-5__item-thumb">
                                        <img src="{{ asset('assets/imgs/home-5/testi-5-img.png') }}">                                    </div>
                                    <h4 class="testi-5__item-title"><a href="#">Eleanor Pena</a></h4>
                                    <span class="testi-5__item-subtitle">CO-Founder</span>
                                    <p class="testi-5__item-dec"> Immigo Consultancy is definitely a highly recommended <br>
                                        canadian and will give youImmigo incepted <br>in the minds of its</p>
                                </div>
                            </div>
                            <div class="swiper-slide text-center mb-65">
                                <div class="testi-5__item">
                                    <div class="testi-5__item-thumb">
                                        <img src="{{ asset('assets/imgs/home-5/testi-5-img-2.png') }}">                                    </div>
                                    <h4 class="testi-5__item-title"><a href="#">Mike Hardson</a></h4>
                                    <span class="testi-5__item-subtitle">President of Sales</span>
                                    <p class="testi-5__item-dec"> Immigo Consultancy is definitely a highly recommended <br>
                                        canadian and will give youImmigo incepted <br>in the minds of its</p>
                                </div>
                            </div>
                            <div class="swiper-slide text-center mb-65">
                                <div class="testi-5__item">
                                    <div class="testi-5__item-thumb">
                                        <img src="{{ asset('assets/imgs/home-5/testi-5-img-3.png') }}">                                    </div>
                                    <h4 class="testi-5__item-title"><a href="#">Kevin Martin</a></h4>
                                    <span class="testi-5__item-subtitle">Manager</span>
                                    <p class="testi-5__item-dec"> Immigo Consultancy is definitely a highly recommended <br>
                                        canadian and will give youImmigo incepted <br>in the minds of its</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--blog 4-->
    <section class="blog-4__area blog-5 section-space p-relative">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__title-wrapper text-center mb-60">
                        <h6 class="section__title-wrapper-center-subtitle mb-10 wow fadeInLeft animated" data-wow-delay=".2s">recent Blog</h6>
                        <h2 class="section__title-wrapper-title wow fadeInLeft animated" data-wow-delay=".3s">News & Update</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-minus-30">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-4__item blog-5__item mb-30">
                        <div class="blog-4__item-thumb blog-5__item-thumb">
                            <img src="{{ asset('assets/imgs/home-4/blog-4-img-1.png') }}">                        </div>
                        <div class="blog-4__item-content blog-5__item-content">
                            <div class="blog-5__item-thumb-text">
                                <h6>19</h6>
                                <span>April</span>
                            </div>
                            <div class="blog-4__item-content-wrap">
                                <div class="blog-4__item-content-wrap-cta">
                                    <div class="bullet"></div>
                                    <div class="title">By <a href="#">Admin</a></div>
                                </div>
                                <div class="blog-4__item-content-wrap-cta">
                                    <div class="bullet"></div>
                                    <div class="title">0 Comments</div>
                                </div>
                            </div>
                            <h3 class="blog-4__item-content-title blog-4__item-content-title-2"><a href="blog-grid">What Are The Best Countries to Immigrate With The Family?</a></h3>
                            <a class="blog-4__item-content-btn" href="blog-details">Read More <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-4__item blog-5__item mb-30">
                        <div class="blog-4__item-thumb blog-5__item-thumb">
                            <img src="{{ asset('assets/imgs/home-4/blog-4-img-2.png') }}">                        </div>
                        <div class="blog-4__item-content blog-5__item-content">
                            <div class="blog-5__item-thumb-text">
                                <h6>17</h6>
                                <span>May</span>
                            </div>
                            <div class="blog-4__item-content-wrap">
                                <div class="blog-4__item-content-wrap-cta">
                                    <div class="bullet"></div>
                                    <div class="title">By <a href="#">Admin</a></div>
                                </div>
                                <div class="blog-4__item-content-wrap-cta">
                                    <div class="bullet"></div>
                                    <div class="title">0 Comments</div>
                                </div>
                            </div>
                            <h3 class="blog-4__item-content-title blog-4__item-content-title-2"><a href="blog-grid">Required Documents for Family Immigration Visa</a></h3>
                            <a class="blog-4__item-content-btn" href="blog-details">Read More <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-4__item blog-5__item mb-30">
                        <div class="blog-4__item-thumb blog-5__item-thumb">
                            <img src="{{ asset('assets/imgs/home-4/blog-4-img-3.png') }}">                        </div>
                        <div class="blog-4__item-content blog-5__item-content">
                            <div class="blog-5__item-thumb-text">
                                <h6>14</h6>
                                <span>June</span>
                            </div>
                            <div class="blog-4__item-content-wrap">
                                <div class="blog-4__item-content-wrap-cta">
                                    <div class="bullet"></div>
                                    <div class="title">By <a href="#">Admin</a></div>
                                </div>
                                <div class="blog-4__item-content-wrap-cta">
                                    <div class="bullet"></div>
                                    <div class="title">0 Comments</div>
                                </div>
                            </div>
                            <h3 class="blog-4__item-content-title blog-4__item-content-title-2"><a href="blog-grid">Reasons for Australian Student Visa Refusal</a></h3>
                            <a class="blog-4__item-content-btn" href="blog-details">Read More <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection