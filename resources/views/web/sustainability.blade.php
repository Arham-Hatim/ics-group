@extends('web.layouts.master')
@section('title', 'Sustainability | ICS Group')
@section('meta_description', 'Discover ICS Group’s commitment to sustainability through responsible operations, environmental stewardship, and long-term value creation.')

@section('content')

    <!-- Start Breadcrumb 
                                        ============================================= -->
    {{--<div class="breadcrumb-area text-center shadow dark text-light bg-cover"
        style="background-image: url({{ asset('web_assets/img/2440x1578.png') }});">--}}
        <div class="breadcrumb-area text-center shadow dark text-light bg-cover"
            style="background-image: url({{ asset('web_assets/ics-images/sustain/banner.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h1>Sustainability</h1>
                        <ul class="breadcrumb">
                            <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">Sustainability</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->


        <!-- Star Services Area
            ============================================= -->
        <div id="services" class="services-style-seven-area default-padding bottom-less"
            style="background-image: url({{ asset('web_assets/img/shape/19.png') }});">
            <div class="container">
                <div class="heading-left">
                    <div class="row align-center">
                        <div class="col-lg-5">
                            <div class="left-info">
                                <h5 class="sub-title">What we do</h5>
                                <h2 class="title">Consulting Services</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1">
                            <div class="right-info text-right">
                                <a data-animation="animated zoomInUp" class="btn btn-gradient effect btn-md"
                                    href="#">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <!-- Single Item -->
                    <div class="services-style-seven col-lg-4 col-md-6">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-investment"></i>
                            </div>
                            <div class="info">
                                <h4><a href="#">Financial Planning</a></h4>
                                <p>
                                    Prevailed tolerably main discourse asking estimable pure applauded save.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="services-style-seven col-lg-4 col-md-6">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-funds"></i>
                            </div>
                            <div class="info">
                                <h4><a href="#">Investment Planning</a></h4>
                                <p>
                                    Prevailed tolerably main discourse asking estimable pure applauded save.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="services-style-seven col-lg-4 col-md-6">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-budget"></i>
                            </div>
                            <div class="info">
                                <h4><a href="#">Saving & Investments</a></h4>
                                <p>
                                    Prevailed tolerably main discourse asking estimable pure applauded save.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="services-style-seven col-lg-4 col-md-6">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-analysis"></i>
                            </div>
                            <div class="info">
                                <h4><a href="#">Markets Research</a></h4>
                                <p>
                                    Prevailed tolerably main discourse asking estimable pure applauded save.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="services-style-seven col-lg-4 col-md-6">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-money-1"></i>
                            </div>
                            <div class="info">
                                <h4><a href="#">Mutual Funds</a></h4>
                                <p>
                                    Prevailed tolerably main discourse asking estimable pure applauded save.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="services-style-seven col-lg-4 col-md-6">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-analytics-1"></i>
                            </div>
                            <div class="info">
                                <h4><a href="#">Report Analysis</a></h4>
                                <p>
                                    Prevailed tolerably main discourse asking estimable pure applauded save.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
        <!-- End Services Area -->

        <!-- Star Services Area
                                    ============================================= -->
        <div class="thumb-services-area inc-thumbnail default-padding bottom-less bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h4>Our Sustainability</h4>
                            <h2>What We Bring To You</h2>
                            <div class="devider"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shape -->
            <div class="right-shape">
                <img src="{{ asset('web_assets/img/shape/9.png') }}" alt="Shape">
            </div>
            <!-- Shape -->
            <div class="container">
                <div class="services-items text-center">
                    <div class="row">
                        <!-- Single Item -->
                        <div class="col-lg-4 col-md-6 single-item">
                            {{--<div class="item" style="background-image: url({{ asset('web_assets/img/800x900.png') }});">
                                --}}
                                <div class="item"
                                    style="background-image: url({{ asset('web_assets/ics-images/sustain/back1.jpg') }});">
                                    <div class="info">
                                        <i class="flaticon-investment"></i>
                                        <h4>Financial Planning</h4>
                                        <p>
                                            Prevailed always tolerably discourse and assurance more applauded more
                                            uncommonly.
                                            Him
                                            everything.
                                        </p>
                                        <div class="bottom">
                                            <a href="#"><i class="fas fa-arrow-right"></i> Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 single-item">
                                {{--<div class="item"
                                    style="background-image: url({{ asset('web_assets/img/800x900.png') }});">--}}
                                    <div class="item"
                                        style="background-image: url({{ asset('web_assets/ics-images/sustain/back2.jpg') }});">
                                        <div class="info">
                                            <i class="flaticon-creativity"></i>
                                            <h4>Investment Planning</h4>
                                            <p>
                                                Prevailed always tolerably discourse and assurance more applauded more
                                                uncommonly.
                                                Him
                                                everything.
                                            </p>
                                            <div class="bottom">
                                                <a href="#"><i class="fas fa-arrow-right"></i> Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="col-lg-4 col-md-6 single-item">
                                    {{--<div class="item"
                                        style="background-image: url({{ asset('web_assets/img/800x900.png') }});">--}}
                                        <div class="item"
                                            style="background-image: url({{ asset('web_assets/ics-images/sustain/back3.jpg') }});">
                                            <div class="info">
                                                <i class="flaticon-money-1"></i>
                                                <h4>Saving & Investments</h4>
                                                <p>
                                                    Prevailed always tolerably discourse and assurance more applauded more
                                                    uncommonly.
                                                    Him
                                                    everything.
                                                </p>
                                                <div class="bottom">
                                                    <a href="#"><i class="fas fa-arrow-right"></i> Read More</a>
                                                </div>
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