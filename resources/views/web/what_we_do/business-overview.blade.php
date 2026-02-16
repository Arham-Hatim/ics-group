@extends('web.layouts.master')
@section('title', 'Business Overview | ICS Group')
@section('meta_description', 'Discover ICS Group’s business overview, highlighting our core operations, industry expertise, and commitment to delivering innovative, reliable, and sustainable solutions across sectors.')

@section('content')

    <!-- Start Breadcrumb 
                                    ============================================= -->
    {{--<div class="breadcrumb-area text-center shadow dark text-light bg-cover"
        style="background-image: url({{ asset('web_assets/img/2440x1578.png') }});">--}}
        <div class="breadcrumb-area text-center shadow dark text-light bg-cover"
            style="background-image: url({{ asset('web_assets/ics-images/business/banner.jpg') }});">
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

        <!-- Star About Area
                                ============================================= -->
        <div class="about-style-six-area default-padding">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-7">
                        <div class="about-style-six d-flex">
                            <div class="shape-inner">
                                <img src="{{ asset('web_assets/img/shape/16.png') }}" alt="Shape">
                            </div>
                            <div class="thumb">
                                {{--<img src="{{ asset('web_assets/img/640x1000.png') }}" alt="Thumb">--}}
                                <img src="{{ asset('web_assets/ics-images/business/founder.jpg') }}" alt="Thumb">
                            </div>
                            <ul class="about-service-list text-light">
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('web_assets/img/icon/2.png') }}" alt="Thumb">
                                    </div>
                                    <div class="content">
                                        <h4>Customers Experience</h4>
                                        <p>
                                            Through it examine express promise no. Past add size game cold girl how.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('web_assets/img/icon/1.png') }}" alt="Thumb">
                                    </div>
                                    <div class="content">
                                        <h4>Cost Information</h4>
                                        <p>
                                            Mension it examine express promise no. Past add size game cold girl how.
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 about-style-six-info offset-lg-1">
                        <h2 class="title">Pride ourselves on our consultant feature</h2>
                        <p>
                            Since 1926, we have been trusted advisors to the world’s foremost organizations and we continue
                            to
                            live by the principles established by our founder and CEO Richad Linkon who is a successful
                            Businessman.
                        </p>
                        <div class="compnay-author">
                            <div class="thumb">
                                <img src="{{ asset('web_assets/img/signature.png') }}" alt="Thumb">
                            </div>
                            <div class="content">
                                <h4>Sabrina Brooks</h4>
                                <span>Founder & CEO of <strong>Earna</strong></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About -->

        <!-- Star Services Area
                                    ============================================= -->
        <div class="services-area bg-gray default-padding bottom-less">
            <!-- Fixed Shape -->
            <div class="fixed-shape" style="background-image: url({{ asset('web_assets/img/shape/12.png') }});"></div>
            <!-- Fixed Shape -->
            <div class="container">
                <div class="services-heading">
                    <div class="row">
                        <div class="col-lg-7 left-info">
                            <h4>What we do</h4>
                            <h2>Beware of Little Expenses, <br> small leak will sink a Great Ship.</h2>
                        </div>
                        <div class="col-lg-5 right-info">
                            <ul class="achivement">
                                <li>
                                    <div class="fun-fact">
                                        <div class="counter">
                                            <div class="timer" data-to="12560" data-speed="1000">12560</div>
                                            <div class="operator">+</div>
                                        </div>
                                        <span class="medium">Trusted Users</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="fun-fact">
                                        <div class="counter">
                                            <div class="timer" data-to="95" data-speed="1000">95</div>
                                            <div class="operator">%</div>
                                        </div>
                                        <span class="medium">Positive Rating</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Start Services Items -->
                <div class="services-content text-center">
                    <div class="row">
                        <!-- Single Item -->
                        <div class="single-item col-lg-3 col-md-6">
                            <div class="item">
                                <i class="flaticon-investment"></i>
                                <h4><a href="#">Financial Planning</a></h4>
                                <p>
                                    Prevailed tolerably discourse assurance estimable pure applauded to save.
                                </p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="single-item col-lg-3 col-md-6">
                            <div class="item">
                                <i class="flaticon-funds"></i>
                                <h4><a href="#">Investment Planning</a></h4>
                                <p>
                                    Prevailed tolerably discourse assurance estimable pure applauded to save.
                                </p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="single-item col-lg-3 col-md-6">
                            <div class="item">
                                <i class="flaticon-money-1"></i>
                                <h4><a href="#">Saving & Investments</a></h4>
                                <p>
                                    Prevailed tolerably discourse assurance estimable pure applauded to save.
                                </p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="single-item col-lg-3 col-md-6">
                            <div class="item">
                                <i class="flaticon-analysis"></i>
                                <h4><a href="#">Markets Research</a></h4>
                                <p>
                                    Prevailed tolerably discourse assurance estimable pure applauded to save.
                                </p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
                <!-- End Services Items -->
            </div>
        </div>
        <!-- End Services Area -->

        <!-- Star Company Owner Area
            ============================================= -->
        <div class="company-owner-area bg-gray relative half-bg-light">
            <div class="container-full">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="compnay-owner-carousel-carousel owl-carousel owl-theme">
                            <!-- Single Item -->
                            <div class="item">
                                {{--<img src="{{ asset('web_assets/img/2440x1578.png') }}" alt="Thumb">--}}
                                <img src="{{ asset('web_assets/ics-images/business/courasel1.jpg') }}" alt="Thumb">
                                <div class="company-owner-info">
                                    <div class="content">
                                        <p>
                                            Excellence projecting is devonshire dispatched remarkably on estimating. Side in
                                            so life past. Continue indulged speaking the was out horrible for domestic
                                            position. Seeing rather her you not esteem men settle genius excuse. Deal say
                                            over you age from. Comparison new ham melancholy son themselves.
                                        </p>
                                    </div>
                                    <div class="provider">
                                        <h4>Seth Norwood</h4>
                                        <span>CEO & Founder</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                {{--<img src="{{ asset('web_assets/img/2440x1578.png') }}" alt="Thumb">--}}
                                <img src="{{ asset('web_assets/ics-images/business/courasel2.jpg') }}" alt="Thumb">
                                <div class="company-owner-info">
                                    <div class="content">
                                        <p>
                                            Excellence projecting is devonshire dispatched remarkably on estimating. Side in
                                            so life past. Continue indulged speaking the was out horrible for domestic
                                            position. Seeing rather her you not esteem men settle genius excuse. Deal say
                                            over you age from. Comparison new ham melancholy son themselves.
                                        </p>
                                    </div>
                                    <div class="provider">
                                        <h4>Sabrina Brooks</h4>
                                        <span>Chairman</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Company Owner Area -->

        <!-- Start Business Growth
            ============================================= -->
        <div class="business-groth-area default-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 info">
                        <h4>Company Analysis</h4>
                        <h2>Annual Report <br>from starting to now</h2>
                        <p>
                            Both rest of know draw fond post as. It agreement defective to excellent. Feebly do engage of
                            narrow. Extensive repulsive belonging depending if promotion be zealously as. Preference
                            inquietude ask now are dispatched led appearance. Small meant in so doubt hopes. Me smallness is
                            existence.
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

@endsection