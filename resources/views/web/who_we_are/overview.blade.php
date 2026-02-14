@extends('web.layouts.master')
@section('title', 'ICS Overview')
@section('meta_description', 'Discover ICS Group’s company overview, strategic vision, and commitment to excellence. We provide innovative, reliable, and sustainable business solutions designed to drive growth, operational efficiency, and long-term value.')

@section('content')
    <!-- Start Breadcrumb 
            ============================================= -->
    <div class="breadcrumb-area text-center shadow dark text-light bg-cover"
        style="background-image: url({{ asset('web_assets/img/2440x1578.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>About Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">About</li>
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
                        <h2>We Combine Technology <br> with Business Ideas</h2>
                        <p>
                            Friendly bachelor entrance to on by. Extremity as if breakfast agreement. Off now mistress
                            provided out horrible opinions. Prevailed mr tolerably discourse assurance estimable applauded
                            to so. Him everything melancholy uncommonly but solicitude inhabiting projection.
                        </p>
                        <ul>
                            <li>First Working Prosses</li>
                            <li>24/7 Live Support</li>
                        </ul>
                        <div class="author">
                            <div class="signature">
                                <img src="{{ asset('web_assets/img/signature.png') }}" alt="signature">
                            </div>
                            <div class="intro">
                                <h5>Spark Moun</h5>
                                <span>Chairman & Founder Earna</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->

    <!-- Star Work Process Area
            ============================================= -->
    <div class="work-process-area features-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>See How It Works!</h4>
                        <h2>Easy steps for business growth</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
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

    <!-- Start Business Growth
            ============================================= -->
    <div class="business-groth-area default-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 info">
                    <h4>Company Analysis</h4>
                    <h2>Annual Report <br>from starting to now</h2>
                    <p>
                        Both rest of know draw fond post as. It agreement defective to excellent. Feebly do engage of
                        narrow. Extensive repulsive belonging depending if promotion be zealously as. Preference inquietude
                        ask now are dispatched led appearance. Small meant in so doubt hopes. Me smallness is existence.
                    </p>
                    <a class="btn btn-gradient effect btn-md" href="#">Get free quote</a>
                </div>
                <div class="col-lg-6">
                    <div class="lineChart">
                        <canvas id="lineChart" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Business Growth -->

    <!-- Star Partner Area
            ============================================= -->
    <div class="partner-area overflow-hidden bg-gray text-light">
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

    <!-- Star Team Area
            ============================================= -->
    <div class="team-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Team Members</h4>
                        <h2>Meet our experts</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="team-items text-center">
                <div class="row">
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('web_assets/img/800x900.png') }}" alt="Thumb">
                                <div class="social">
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                                <div class="share">
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <h4>Jessika Mahi</h4>
                                    <span>Markteting Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{  asset('web_assets/img/800x900.png') }}" alt="Thumb">
                                <div class="social">
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                                <div class="share">
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <h4>Jessika Mahi</h4>
                                    <span>Markteting Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{  asset('web_assets/img/800x900.png') }}" alt="Thumb">
                                <div class="social">
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                                <div class="share">
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <h4>Jessika Mahi</h4>
                                    <span>Markteting Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area -->
@endsection