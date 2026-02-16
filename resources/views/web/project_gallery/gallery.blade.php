@extends('web.layouts.master')
@section('title', 'Project Gallery | ICS Group')
@section('meta_description', 'View ICS Group’s project gallery featuring completed works, operational highlights, and key achievements that reflect our commitment to quality and excellence.')

@section('content')

    <!-- Start Breadcrumb 
                    ============================================= -->
    {{--<div class="breadcrumb-area text-center shadow dark text-light bg-cover"
        style="background-image: url({{ asset('web_assets/img/2440x1578.png') }});">--}}
        <div class="breadcrumb-area text-center shadow dark text-light bg-cover"
            style="background-image: url({{ asset('web_assets/ics-images/gallery/banner.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h1>Our Projects</h1>
                        <ul class="breadcrumb">
                            <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">Projects</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->

        <!-- Start Projects Area
                    ============================================= -->
        <div class="projects-area carousel-shadow overflow-hidden default-padding">
            <div class="container-fill">
                <div class="projects-carousel owl-carousel owl-theme">
                    <!-- Single Item -->
                    <div class="single-item">
                        <div class="row">
                            {{--<div class="col-lg-7 thumb"
                                style="background-image: url({{ asset('web_assets/img/2440x1578.png') }});"></div>--}}
                            <div class="col-lg-7 thumb"
                                style="background-image: url({{ asset('web_assets/ics-images/gallery/gal1.jpg') }});"></div>
                            <div class="col-lg-5 info">
                                <div class="content">
                                    <span>Finance, Assets</span>
                                    <h3>Amazing Career Prospect</h3>
                                    <p>
                                        Possession ye no mr unaffected remarkably at. Wrote house in never fruit up. Pasture
                                        imagine my garrets. Seeing rather her you not esteem men settle genius excuse. Deal
                                        say
                                        over you age from. Comparison new ham melancholy.
                                    </p>
                                    <a href="#"><i class="arrow_right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item">
                        <div class="row">
                            {{--<div class="col-lg-7 thumb"
                                style="background-image: url({{ asset('web_assets/img/2440x1578.png') }});"></div>--}}
                            <div class="col-lg-7 thumb"
                                style="background-image: url({{ asset('web_assets/ics-images/gallery/gal2.jpg') }});"></div>
                            <div class="col-lg-5 info">
                                <div class="content">
                                    <span>Invest, Earning</span>
                                    <h3>Assets For Technology</h3>
                                    <p>
                                        Possession ye no mr unaffected remarkably at. Wrote house in never fruit up. Pasture
                                        imagine my garrets. Seeing rather her you not esteem men settle genius excuse. Deal
                                        say
                                        over you age from. Comparison new ham melancholy.
                                    </p>
                                    <a href="#"><i class="arrow_right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item">
                        <div class="row">
                            {{--<div class="col-lg-7 thumb"
                                style="background-image: url({{ asset('web_assets/img/2440x1578.png') }});"></div>--}}
                            <div class="col-lg-7 thumb"
                                style="background-image: url({{ asset('web_assets/ics-images/gallery/gal3.jpg') }});"></div>
                            <div class="col-lg-5 info">
                                <div class="content">
                                    <span>Benifits, Assets</span>
                                    <h3>Merger & Acquisition</h3>
                                    <p>
                                        Possession ye no mr unaffected remarkably at. Wrote house in never fruit up. Pasture
                                        imagine my garrets. Seeing rather her you not esteem men settle genius excuse. Deal
                                        say
                                        over you age from. Comparison new ham melancholy.
                                    </p>
                                    <a href="#"><i class="arrow_right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
        <!-- End Projects Area -->

@endsection