@extends('web.layouts.master')
@section('title', 'Our Strategy & Values | ICS Group')
@section('meta_description', 'Discover ICS Group’s strategic vision and core values that guide our decisions, drive innovation, and ensure sustainable growth. We are committed to excellence, integrity, and long-term value creation.')

@section('content')

    <!-- Start Breadcrumb 
                                                                            ============================================= -->
    {{--<div class="breadcrumb-area text-center shadow dark text-light bg-cover"
        style="background-image: url({{ asset('web_assets/img/2440x1578.png') }});">--}}
        <div class="breadcrumb-area text-center shadow dark text-light bg-cover"
            style="background-image: url({{ asset('web_assets/ics-images/strategy/banner.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h1>Our Strategy & Values</h1>
                        <ul class="breadcrumb">
                            <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">Our Strategy & Values</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->

        <!-- Star Work Process Area
                                                        ============================================= -->
        <div class="work-process-area features-area default-padding">
            <div class="container">
                <div class="work-process-items features-content">
                    <div class="row">
                        <!-- Single Item -->
                        <div class="single-item col-lg-4 col-md-6">
                            <div class="item">
                                <i class="flaticon-speech-bubble"></i>
                                <div class="top">
                                    <span>01</span>
                                    <h4>Discussion</h4>
                                </div>
                                <p>
                                    Prevailed mr tolerably discourse assurance estimable applauded to so. Him everything
                                    melancholy uncommonly but solicitude.
                                </p>
                                <a href="#"><i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="single-item col-lg-4 col-md-6">
                            <div class="item">
                                <i class="flaticon-label"></i>
                                <div class="top">
                                    <span>02</span>
                                    <h4>Analysis</h4>
                                </div>
                                <p>
                                    Prevailed mr tolerably discourse assurance estimable applauded to so. Him everything
                                    melancholy uncommonly but solicitude.
                                </p>
                                <a href="#"><i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="single-item col-lg-4 col-md-6">
                            <div class="item">
                                <i class="flaticon-file"></i>
                                <div class="top">
                                    <span>03</span>
                                    <h4>Implementation</h4>
                                </div>
                                <p>
                                    Prevailed mr tolerably discourse assurance estimable applauded to so. Him everything
                                    melancholy uncommonly but solicitude.
                                </p>
                                <a href="#"><i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <!-- Single Item -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Work Process Area -->

        <!-- Star Services Area
        ============================================= -->
        <div class="services-style-six-area overflow-hidden default-padding bottom-less bg-gray">

            <div class="shape-box">
                <div class="shape-item"></div>
                <div class="shape-item"></div>
            </div>

            <div class="container">
                <!-- Item Heading -->
                <div class="left-heading">
                    <div class="row">
                        <div class="col-lg-7 info">
                            <h4>Our expertise</h4>
                            <h2>Fields of expertise that <br> our great team excels in </h2>
                        </div>
                        <div class="col-lg-4 offset-lg-1 right-info">
                            <div class="circle-progress-items">
                                <div class="circle-progress-item">
                                    <div class="progressbar">
                                        <div class="circle" data-percent="90">
                                            <strong></strong>
                                        </div>
                                    </div>
                                    <h5>Marketing</h5>
                                </div>
                                <div class="circle-progress-item">
                                    <div class="progressbar">
                                        <div class="circle" data-percent="80">
                                            <strong></strong>
                                        </div>
                                    </div>
                                    <h5>Social Assistant</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Item Heading -->
            </div>

            <div class="container">
                <div class="services-style-six-items">
                    <div class="row">

                        <div class="service-six-grid col-lg-6 col-md-6">
                            <!-- Single Item -->
                            <div class="services-style-six wow fadeInUp" data-wow-delay="300ms">
                                <div class="item">
                                    <div class="info">
                                        {{--<img src="assets/img/icon/financial.png" alt="Icon">--}}
                                        <img src="{{ asset('web_assets/ics-images/strategy/strategy1.png') }}" alt="Icon">
                                        <h4><a href="#">Financial Planning</a></h4>
                                        <p>
                                            Continue indulged speaking the was out horrible for domestic position. Seeing
                                            rather her you not esteem men settle genius excuse. Deal say over you age from.
                                            Comparison new ham melancholy soner.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="services-style-six  wow fadeInUp" data-wow-delay="400ms">
                                <div class="item">
                                    <div class="info">
                                        {{--<img src="assets/img/icon/fund.png" alt="Icon">--}}
                                        <img src="{{ asset('web_assets/ics-images/strategy/strategy2.png') }}" alt="Icon">
                                        <h4><a href="#">Mutual Funds</a></h4>
                                        <p>
                                            Continue indulged speaking the was out horrible for domestic position. Seeing
                                            rather her you not esteem men settle genius excuse. Deal say over you age from.
                                            Comparison new ham melancholy soner.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>

                        <div class="service-six-grid col-lg-6 col-md-6">
                            <!-- Single Item -->
                            <div class="services-style-six wow fadeInUp" data-wow-delay="500ms">
                                <div class="item">
                                    <div class="info">
                                        {{--<img src="assets/img/icon/investment.png" alt="Icon">--}}
                                        <img src="{{ asset('web_assets/ics-images/strategy/strategy3.png') }}" alt="Icon">
                                        <h4><a href="#">Saving & Investments</a></h4>
                                        <p>
                                            Continue indulged speaking the was out horrible for domestic position. Seeing
                                            rather her you not esteem men settle genius excuse. Deal say over you age from.
                                            Comparison new ham melancholy soner.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="services-style-six  wow fadeInUp" data-wow-delay="600ms">
                                <div class="item">
                                    <div class="info">
                                        {{--<img src="assets/img/icon/research-and-development.png" alt="Icon">--}}
                                        <img src="{{ asset('web_assets/ics-images/strategy/strategy4.png') }}" alt="Icon">
                                        <h4><a href="#">Markets Research</a></h4>
                                        <p>
                                            Continue indulged speaking the was out horrible for domestic position. Seeing
                                            rather her you not esteem men settle genius excuse. Deal say over you age from.
                                            Comparison new ham melancholy soner.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- End Services Area -->

        <!-- Star Services Area
                                        ============================================= -->
        <div class="default-services-area default-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h4>Our Services</h4>
                            <h2>What We Bring To You</h2>
                            <div class="devider"></div>
                            <p>
                                While mirth large of on front. Ye he greater related adapted proceed entered an. Through it
                                examine express promise no. Past add size game cold girl off how old
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="services-items">
                    <div class="row">
                        <!-- Single Item -->
                        <div class="col-lg-4 col-md-6 single-item">
                            <div class="item">
                                <div class="info">
                                    <i class="flaticon-money"></i>
                                    <h4><a href="#">Financial Planning</a></h4>
                                    <p>
                                        Prevailed always tolerably discourse and loser assurance creatively coin applauded
                                        more uncommonly. Him everything trouble
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-lg-4 col-md-6 single-item">
                            <div class="item">
                                <div class="info">
                                    <i class="flaticon-budget"></i>
                                    <h4><a href="#">Investment Planning</a></h4>
                                    <p>
                                        Prevailed always tolerably discourse and loser assurance creatively coin applauded
                                        more uncommonly. Him everything trouble
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-lg-4 col-md-6 single-item">
                            <div class="item">
                                <div class="info">
                                    <i class="flaticon-money-1"></i>
                                    <h4><a href="#">Mutual Funds</a></h4>
                                    <p>
                                        Prevailed always tolerably discourse and loser assurance creatively coin applauded
                                        more uncommonly. Him everything trouble
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Services Area -->

@endsection