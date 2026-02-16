@extends('web.layouts.master')
@section('title', 'Operations | ICS Group')
@section('meta_description', 'Learn how ICS Group manages its operations with precision, efficiency, and innovation. Our structured processes and operational excellence ensure reliable delivery and sustainable performance across all business verticals.')
@section('content')

    <!-- Start Breadcrumb 
                                                    ============================================= -->
    {{--<div class="breadcrumb-area text-center shadow dark text-light bg-cover"
        style="background-image: url({{ asset('web_assets/img/2440x1578.png') }});">--}}
        <div class="breadcrumb-area text-center shadow dark text-light bg-cover"
            style="background-image: url({{ asset('web_assets/ics-images/operation/banner.jpg') }});">
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

        <!-- Star Services Area
                                                    ============================================= -->
        <div class="services-area bg-gray default-padding bottom-less">
            <!-- Shape -->
            <div class="right-shape">
                <img src="{{ asset('web_assets/img/shape/9.png') }}" alt="Shape">
            </div>
            <!-- Shape -->
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
            <div class="container-full">
                <div class="services-items">
                    <div class="row">
                        <!-- Single Item -->
                        <div class="col-lg-3 col-md-6 single-item">
                            <div class="item">
                                <div class="info">
                                    <i class="flaticon-money"></i>
                                    <h4>Financial Planning</h4>
                                    <p>
                                        Prevailed always tolerably discourse and assurance more applauded more uncommonly.
                                        Him
                                        everything.
                                    </p>
                                    <div class="bottom">
                                        <span>01</span>
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-lg-3 col-md-6 single-item">
                            <div class="item">
                                <div class="info">
                                    <i class="flaticon-budget"></i>
                                    <h4>Investment Planning</h4>
                                    <p>
                                        Prevailed always tolerably discourse and assurance more applauded more uncommonly.
                                        Him
                                        everything.
                                    </p>
                                    <div class="bottom">
                                        <span>02</span>
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-lg-3 col-md-6 single-item">
                            <div class="item">
                                <div class="info">
                                    <i class="flaticon-money-1"></i>
                                    <h4>Mutual Funds</h4>
                                    <p>
                                        Prevailed always tolerably discourse and assurance more applauded more uncommonly.
                                        Him
                                        everything.
                                    </p>
                                    <div class="bottom">
                                        <span>03</span>
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-lg-3 col-md-6 single-item">
                            <div class="item">
                                <div class="info">
                                    <i class="flaticon-funds"></i>
                                    <h4>Saving & Investments</h4>
                                    <p>
                                        Prevailed always tolerably discourse and assurance more applauded more uncommonly.
                                        Him
                                        everything.
                                    </p>
                                    <div class="bottom">
                                        <span>04</span>
                                        <a href="#">Read More</a>
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

        <!-- Star Why Choose Us Area
                                                ============================================= -->
        <div class="choose-us-area default-padding-bottom">
            <div class="container">
                <div class="item-box">
                    <div class="row">
                        {{--<div class="col-lg-6 thumb"
                            style="background-image: url({{ asset('web_assets/img/800x900.png') }});">
                        </div>--}}
                        <div class="col-lg-6 thumb"
                            style="background-image: url({{ asset('web_assets/ics-images/operation/award.jpg') }});">
                        </div>
                        <div class="col-lg-6 info">
                            <h4>Why Choose Use</h4>
                            <h2>We working for you to build your business fast</h2>
                            <p>
                                Bachelor entrance to on by. Extremity as if breakfast agreement. Off now mistress provided
                                out
                                horrible opinions. Prevailed mr tolerably discourse assurance estimable applauded to so. Him
                                everything melancholy uncommonly but solicitude inhabiting projection.
                            </p>
                            <div class="award">
                                <i class="flaticon-award-symbol"></i>
                                <span>Financial & Consulting <br> Award 2019-2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Why Choose Us Area -->

        <!-- Start Expertise Area
                                        ============================================= -->
        <div class="expertise-area default-padding bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h4>Our Operations</h4>
                            <h2>What We Bring To You</h2>
                            <div class="devider"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <!-- Expertise Content -->
                {{--<div class="expertise-content text-light"
                    style="background-image: url({{ asset('web_assets/img/2440x1578.png') }});">--}}
                    <div class="expertise-content text-light"
                        style="background-image: url({{ asset('web_assets/ics-images/operation/multi.jpg') }});">
                        <div class="row">
                            <!-- Single Item -->
                            <div class="col-lg-4 single-item">
                                <div class="item">
                                    <div class="content">
                                        <h4>Finance Restructuring</h4>
                                        <p>
                                            Prevailed mr tolerably discourse assurance estimable more power.
                                        </p>
                                    </div>
                                    <a class="btn btn-sm" href="#">Know More</a>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 single-item">
                                <div class="item">
                                    <div class="content">
                                        <h4>Stocks & Trades</h4>
                                        <p>
                                            Prevailed mr tolerably discourse assurance estimable more power.
                                        </p>
                                    </div>
                                    <a class="btn btn-sm" href="#">Know More</a>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 single-item">
                                <div class="item">
                                    <div class="content">
                                        <h4>International Markets</h4>
                                        <p>
                                            Prevailed mr tolerably discourse assurance estimable more power.
                                        </p>
                                    </div>
                                    <a class="btn btn-sm" href="#">Know More</a>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                        <!-- Fixed Shape -->
                        <div class="fixed-shape" style="background-image: url({{ asset('web_assets/img/shape/13.png') }});">
                        </div>
                        <!-- Fixed Shape -->
                    </div>
                    <!-- Expertise Content -->

                </div>
            </div>
            <!-- End Expertise Area -->

@endsection