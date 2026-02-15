@extends('web.layouts.master')
@section('title', 'Sustainability | ICS Group')
@section('meta_description', 'Discover ICS Group’s commitment to sustainability through responsible operations, environmental stewardship, and long-term value creation.')

@section('content')

    <!-- Start Breadcrumb 
                            ============================================= -->
    <div class="breadcrumb-area text-center shadow dark text-light bg-cover"
        style="background-image: url({{ asset('web_assets/img/2440x1578.png') }});">
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

    <!-- Start About 
                    ============================================= -->
    <div class="about-us-area default-padding bg-gray">
        <div class="container">
            <div class="about-items">
                <div class="row align-center">
                    <div class="col-lg-6">
                        <div class="thumb">
                            <img src="{{ asset('web_assets/img/800x900.png') }}" alt="Thumb">
                            <h2><strong>28</strong> years of <br> working experience</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 info">
                        <h4>Our Commitment</h4>
                        <h2>Building a Sustainable Future Together</h2>
                        <p>
                            At ICS Group, sustainability is integrated into our core business strategy. We are committed to
                            creating long-term value for our stakeholders through responsible operations and environmental
                            stewardship.
                        </p>
                        <ul>
                            <li>
                                <h5>Strategic Value</h5>
                                <p>Ensuring long-term sustainability across all business verticals.</p>
                            </li>
                            <li>
                                <h5>Ethical Excellence</h5>
                                <p>Maintaining the highest standards of integrity and transparency.</p>
                            </li>
                        </ul>
                        <a class="btn btn-gradient effect btn-md" href="{{ route('contact') }}">Get Involved</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->

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

@endsection