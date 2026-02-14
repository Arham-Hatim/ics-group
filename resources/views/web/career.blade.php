@extends('web.layouts.master')
@section('title', 'Careers | ICS Group')
@section('meta_description', 'Join ICS Group and build a rewarding career. Explore current job openings, career opportunities, and grow with a team committed to innovation, excellence, and professional development.')

@section('content')

    <!-- Start Breadcrumb 
        ============================================= -->
    <div class="breadcrumb-area text-center shadow dark text-light bg-cover"
        style="background-image: url({{ asset('web_assets/img/2440x1578.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Our Career</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Career</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Career 
        ============================================= -->
    <div class="earna-career default-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="job-list">
                        <li>
                            <div class="fun-fact">
                                <div class="counter">
                                    <div class="timer" data-to="1800" data-speed="5000">1800</div>
                                    <div class="operator">+</div>
                                </div>
                                <span class="medium">Jobs Posted</span>
                            </div>
                        </li>
                        <li>
                            <div class="fun-fact">
                                <div class="counter">
                                    <div class="timer" data-to="4500" data-speed="5000">4500</div>
                                    <div class="operator">+</div>
                                </div>
                                <span class="medium">Tasks Postedg</span>
                            </div>
                        </li>
                        <li>
                            <div class="fun-fact">
                                <div class="counter">
                                    <div class="timer" data-to="1500" data-speed="5000">1500</div>
                                    <div class="operator">+</div>
                                </div>
                                <span class="medium">Active Worker</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="job-lists">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="info">
                                <div class="top"><i class="fab fa-wordpress"></i> Developer</div>
                                <h4>Front-end web development <span class="badge">Open</span></h4>
                                <ul>
                                    <li>Job Type: Permanent</li>
                                    <li>Vacancy: 5</li>
                                </ul>
                            </div>
                            <div class="button">
                                <a class="btn btn-gradient effect btn-md" href="#">Apply Now</a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="info">
                                <div class="top"><i class="fas fa-adjust"></i> Designer</div>
                                <h4>Product Designer <span class="badge">Open</span></h4>
                                <ul>
                                    <li>Job Type: Part Time</li>
                                    <li>Vacancy: 8</li>
                                </ul>
                            </div>
                            <div class="button">
                                <a class="btn btn-gradient effect btn-md" href="#">Apply Now</a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="info">
                                <div class="top"><i class="fas fa-database"></i> Application</div>
                                <h4>Senior web application developer <span class="badge">Open</span></h4>
                                <ul>
                                    <li>Job Type: Permanent</li>
                                    <li>Vacancy: 5</li>
                                </ul>
                            </div>
                            <div class="button">
                                <a class="btn btn-gradient effect btn-md" href="#">Apply Now</a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="info">
                                <div class="top"><i class="fab fa-wordpress"></i> Developer</div>
                                <h4>Front-end web development <span class="badge">Open</span></h4>
                                <ul>
                                    <li>Job Type: Permanent</li>
                                    <li>Vacancy: 5</li>
                                </ul>
                            </div>
                            <div class="button">
                                <a class="btn btn-gradient effect btn-md" href="#">Apply Now</a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Career -->

@endsection