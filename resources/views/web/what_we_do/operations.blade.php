@extends('web.layouts.master')
@section('title', 'Operations | ICS Group')
@section('meta_description', 'Learn how ICS Group manages its operations with precision, efficiency, and innovation. Our structured processes and operational excellence ensure reliable delivery and sustainable performance across all business verticals.')

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

    <!-- Start Expertise Area
        ============================================= -->
    <div class="expertise-area default-padding">
        <div class="container">

            <!-- Item Heading -->
            <div class="item-heading">
                <div class="row">
                    <div class="col-lg-6 info">
                        <h4>Our expertise</h4>
                        <h2>We design brand, digital experience that engage the right customers</h2>
                    </div>
                    <div class="col-lg-6 right-info">
                        <div class="skill-items">
                            <!-- Progress Bar Start -->
                            <div class="progress-box">
                                <h5>Marketing</h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-width="88">
                                        <span>88%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-box">
                                <h5>Social Assistant</h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-width="95">
                                        <span>95%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-box">
                                <h5>Consulting</h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-width="70">
                                        <span>70%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Progressbar -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Item Heading -->

            <!-- Expertise Content -->
            <div class="expertise-content text-light" style="background-image: url({{ asset('web_assets/img/2440x1578.png') }});">
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
                <div class="fixed-shape" style="background-image: url({{ asset('web_assets/img/shape/13.png') }});"></div>
                <!-- Fixed Shape -->
            </div>
            <!-- Expertise Content -->

        </div>
    </div>
    <!-- End Expertise Area -->

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
                                    Prevailed always tolerably discourse and assurance more applauded more uncommonly. Him
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
                                    Prevailed always tolerably discourse and assurance more applauded more uncommonly. Him
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
                                    Prevailed always tolerably discourse and assurance more applauded more uncommonly. Him
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
                                    Prevailed always tolerably discourse and assurance more applauded more uncommonly. Him
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

    <!-- Star Partner Area
        ============================================= -->
    <div class="partner-area bg-gray shadow-less overflow-hidden text-light">
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