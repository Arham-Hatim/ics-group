@extends('web.layouts.master')
@section('title', 'Business Verticals | ICS Group')
@section('meta_description', 'Explore ICS Group’s diverse business verticals delivering innovative solutions across industries. Our integrated expertise ensures operational excellence, sustainable growth, and long-term value creation.')

@section('content')
    <!-- Start Breadcrumb 
        ============================================= -->
    <div class="breadcrumb-area text-center shadow dark text-light bg-cover"
        style="background-image: url({{ asset('web_assets/img/2440x1578.png') }});">
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
    <div class="thumb-services-area inc-thumbnail default-padding bottom-less">
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
                        <div class="item" style="background-image: url({{ asset('web_assets/img/800x900.png') }});">
                            <div class="info">
                                <i class="flaticon-investment"></i>
                                <h4>Financial Planning</h4>
                                <p>
                                    Prevailed always tolerably discourse and assurance more applauded more uncommonly. Him
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
                        <div class="item" style="background-image: url({{ asset('web_assets/img/800x900.png') }});">
                            <div class="info">
                                <i class="flaticon-creativity"></i>
                                <h4>Investment Planning</h4>
                                <p>
                                    Prevailed always tolerably discourse and assurance more applauded more uncommonly. Him
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
                        <div class="item" style="background-image: url({{ asset('web_assets/img/800x900.png') }});">
                            <div class="info">
                                <i class="flaticon-money-1"></i>
                                <h4>Saving & Investments</h4>
                                <p>
                                    Prevailed always tolerably discourse and assurance more applauded more uncommonly. Him
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


    <!-- Star Partner Area
        ============================================= -->
    <div class="partner-area overflow-hidden text-light">
        <div class="container">
            <div class="item-box">
                <div class="row align-center">
                    <div class="col-lg-6 info">
                        <h2>We're Trusted by <span>2500+</span> <br> Professional Customer</h2>
                        <p>
                            Seeing rather her you not esteem men settle genius excuse. Deal say over you age from.
                            Comparison new ham melancholy son themselves.
                        </p>
                    </div>
                    <div class="col-lg-6 clients">
                        <div class="partner-carousel owl-carousel owl-theme text-center">
                            <div class="single-item">
                                <a href="#"><img src="{{ asset('web_assets/img/150x80.png') }}" alt="Clients"></a>
                            </div>
                            <div class="single-item">
                                <a href="#"><img src="{{ asset('web_assets/img/150x80.png') }}" alt="Clients"></a>
                            </div>
                            <div class="single-item">
                                <a href="#"><img src="{{ asset('web_assets/img/150x80.png') }}" alt="Clients"></a>
                            </div>
                            <div class="single-item">
                                <a href="#"><img src="{{ asset('web_assets/img/150x80.png') }}" alt="Clients"></a>
                            </div>
                            <div class="single-item">
                                <a href="#"><img src="{{ asset('web_assets/img/150x80.png') }}" alt="Clients"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Area -->

    <!-- Star testimonials Area
        ============================================= -->
    <div class="testimonials-area bg-gray default-padding">
        <!-- Fixed Shape -->
        <div class="fixed-shape" style="background-image: url({{ asset('web_assets/img/shape/10.png') }});"></div>
        <!-- End Fixed Shape -->
        <div class="container">
            <div class="testimonial-items">
                <div class="row align-center">
                    <div class="col-lg-7 testimonials-content">
                        <div class="testimonials-carousel owl-carousel owl-theme">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="info">
                                    <p>
                                        Otherwise concealed favourite frankness on be at dashwoods defective at. Sympathize
                                        interested simplicity at do projecting increasing terminated. As edward settle
                                        limits at in. Chamber reached do he nothing be.
                                    </p>
                                    <div class="provider">
                                        <div class="thumb">
                                            <img src="{{ asset('web_assets/img/100x100.png') }}" alt="Author">
                                        </div>
                                        <div class="content">
                                            <h4>Ahel Natasha</h4>
                                            <span> Managing Director</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="info">
                                    <p>
                                        Otherwise concealed favourite frankness on be at dashwoods defective at. Sympathize
                                        interested simplicity at do projecting increasing terminated. As edward settle
                                        limits at in. Chamber reached do he nothing be.
                                    </p>
                                    <div class="provider">
                                        <div class="thumb">
                                            <img src="{{ asset('web_assets/img/100x100.png') }}" alt="Author">
                                        </div>
                                        <div class="content">
                                            <h4>Ahel Natasha</h4>
                                            <span> Managing Director</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                    <div class="col-lg-5 info">
                        <h4>Testimonials</h4>
                        <h2>Check what our satisfied clients said</h2>
                        <p>
                            Why I say old chap that is, spiffing off his nut color blimey and guvnords geeza bloke knees up
                            bobby sloshed arse
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End testimonials Area -->
@endsection