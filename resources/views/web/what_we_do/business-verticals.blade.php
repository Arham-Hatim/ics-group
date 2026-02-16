@extends('web.layouts.master')
@section('title', 'Business Verticals | ICS Group')
@section('meta_description', 'Explore ICS Group’s diverse business verticals delivering innovative solutions across industries. Our integrated expertise ensures operational excellence, sustainable growth, and long-term value creation.')

@section('content')
    <!-- Start Breadcrumb 
                            ============================================= -->
    {{--<div class="breadcrumb-area text-center shadow dark text-light bg-cover"
        style="background-image: url({{ asset('web_assets/img/2440x1578.png') }});">--}}
        <div class="breadcrumb-area text-center shadow dark text-light bg-cover"
            style="background-image: url({{ asset('web_assets/ics-images/vertical/banner.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h1>Our Services</h1>
                        <ul class="breadcrumb">
                            <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->

        <!-- Start About Area
                        ============================================= -->
        <div class="about-content-area default-padding">
            <div class="container">
                <div class="content-box">
                    <div class="row">
                        <div class="col-lg-6 thumb">
                            <div class="thumb-box">
                                {{--<img src="assets/img/800x900.png" alt="Thumb">--}}
                                <img src="{{ asset('web_assets/ics-images/vertical/about1.jpg') }}" alt="Thumb">
                                {{--<img src="assets/img/800x800.png" alt="Thumb">--}}
                                <img src="{{ asset('web_assets/ics-images/vertical/about2.jpg') }}" alt="Thumb">
                                <div class="shape" style="background-image: url(assets/img/shape/1.png);"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 info">
                            <h2>We Combine Technology <br> with Business Ideas</h2>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="ti-bookmark-alt"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Certified Company</h4>
                                        <p>
                                            Common so wicket appear to sudden worthy on. Shade of offer ye whole stood
                                            hoped.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="ti-id-badge"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Experience Employee</h4>
                                        <p>
                                            Common so wicket appear to sudden worthy on. Shade of offer ye whole stood
                                            hoped.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <div class="call">
                                <div class="icon">
                                    <i class="flaticon-telephone"></i>
                                </div>
                                <div class="intro">
                                    <h5>+123 456 7890</h5>
                                    <span>Call to ask any question</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 center-info">

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End About -->

        <!-- Star Services Area
                ============================================= -->
        <div class="thumbs-services-area bg-dark text-light default-padding">

            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h4>Our Services</h4>
                            <h2>What We Bring To You</h2>
                            <div class="devider"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <!-- Start Services Items -->
                <div class="services-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="thumb-services-carousel owl-carousel owl-theme">
                                <!-- Single Item -->
                                <div class="item">
                                    {{--<img src="{{ asset('web_assets/img/800x600.png') }}" alt="Thumb">--}}
                                    <img src="{{ asset('web_assets/ics-images/vertical/courasel1.jpg') }}" alt="Thumb">
                                    <div class="info">
                                        <h4><a href="#">Financial Planning</a></h4>
                                        <p>
                                            Prevailed tolerably main discourse asking estimable pure applauded save.
                                        </p>
                                        <a href="#" >Learn More <i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="item">
                                    {{--<img src="{{ asset('web_assets/img/800x600.png') }}" alt="Thumb">--}}
                                    <img src="{{ asset('web_assets/ics-images/vertical/courasel2.jpg') }}" alt="Thumb">
                                    <div class="info">
                                        <h4><a href="#">Investment Planning</a></h4>
                                        <p>
                                            Prevailed tolerably main discourse asking estimable pure applauded save.
                                        </p>
                                        <a href="#" >Learn More <i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="item">
                                    {{--<img src="{{ asset('web_assets/img/800x600.png') }}" alt="Thumb">--}}
                                    <img src="{{ asset('web_assets/ics-images/vertical/courasel3.jpg') }}" alt="Thumb">
                                    <div class="info">
                                        <h4><a href="#">Saving & Investments</a></h4>
                                        <p>
                                            Prevailed tolerably main discourse asking estimable pure applauded save.
                                        </p>
                                        <a href="#">Learn More <i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="item">
                                    {{--<img src="{{ asset('web_assets/img/800x600.png') }}" alt="Thumb">--}}
                                    <img src="{{ asset('web_assets/ics-images/vertical/courasel4.jpg') }}" alt="Thumb">
                                    <div class="info">
                                        <h4><a href="#">Markets Research</a></h4>
                                        <p>
                                            Prevailed tolerably main discourse asking estimable pure applauded save.
                                        </p>
                                        <a href="#">Learn More <i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Services Items -->
            </div>
        </div>
        <!-- End Services Area -->

        <!-- Start About 
        ============================================= -->
        <div id="about" class="about-style-seven-area default-padding bg-gray">
            <div class="shape-left-top">
                <img src="{{ asset('web_assets/img/shape/22.png') }}" alt="Shape">
            </div>
            <div class="container">
                <div class="about-items">
                    <div class="row align-center">
                        <div class="col-lg-6 about-style-seven">
                            <div class="thumb">
                                <img src="{{ asset('web_assets/ics-images/vertical/video.jpg') }}" alt="Thumb">
                                <img src="{{ asset('web_assets/img/shape/21.png') }}" alt="Thumb">
                                <div href="https://www.youtube.com/watch?v=owhuBrGIOsE" class="popup-youtube video">
                                    <a href="#"><i class="fas fa-play"></i> <span>Our History</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 about-style-seven">
                            <h4>Easy Business Solutions</h4>
                            <h2>We Combine Technology <br> with Business Ideas</h2>
                            <p>
                                Friendly bachelor entrance to on by. Extremity as if breakfast agreement. Off now mistress
                                provided out horrible opinions. Prevailed mr tolerably discourse assurance estimable
                                applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection.
                            </p>
                            <ul>
                                <li>24/7 Call Services Available </li>
                                <li>Great Skilled Consultant</li>
                                <li>Expert Team Members</li>
                                <li>How to improve business </li>
                                <li>Business is the best plan</li>
                                <li>Services we provide</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Area -->
@endsection