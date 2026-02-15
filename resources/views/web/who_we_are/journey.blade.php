@extends('web.layouts.master')
@section('title', 'Our Journey | ICS Group')
@section('meta_description', 'Explore the journey of ICS Group, from our beginnings to becoming a diversified enterprise. Discover the milestones, achievements, and strategic growth that define our success story.')

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
            <div class="expertise-content text-light"
                style="background-image: url({{ asset('web_assets/img/2440x1578.png') }});">
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
            </div>
            <!-- Expertise Content -->

        </div>
    </div>
    <!-- End Expertise Area -->
@endsection