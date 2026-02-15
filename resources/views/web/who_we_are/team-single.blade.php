@extends('web.layouts.master')
@section('title', 'Jessika Mahi | ICS Group')
@section('meta_description', 'Learn more about Jessika Mahi, a valued professional at ICS Group. Discover her expertise, experience, and contribution to delivering innovative and reliable business solutions.')

@section('content')

    <!-- Start Breadcrumb 
        ============================================= -->
    <div class="breadcrumb-area text-center shadow dark text-light bg-cover"
        style="background-image: url({{ asset('web_assets/img/2440x1578.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Team Single</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Team</a></li>
                        <li class="active">SIngle</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Team Single Area
        ============================================= -->
    <div class="team-single-area default-padding">
        <div class="container">
            <div class="team-content-top">
                <div class="row">
                    <div class="col-lg-5 left-info">
                        <div class="thumb">
                            <img src="{{ asset('web_assets/img/800x900.png') }}" alt="Thumb">
                        </div>
                    </div>
                    <div class="col-lg-7 right-info">
                        <h2>Lucas Ethan</h2>
                        <span>Marketing Expert</span>
                        <p>
                            Bring to the table win-win survival strategies to ensure proactive domination. At the end of the
                            day, going forward, a new normal that has evolved from generation is on the runway heading
                            towards a streamlined cloud solution. User generated content in real-time will have multiple
                            touchpoints for offshoring.
                        </p>
                        <ul>
                            <li>
                                <strong>Email:</strong>
                                <a href="mailto:support@avedi.com">support@avedi.com</a>
                            </li>
                            <li>
                                <strong>Phone:</strong>
                                <a href="tel:123-456-7890">+44-20-7328-4499</a>
                            </li>
                        </ul>
                        <div class="social">
                            <a class="btn btn-theme effect btn-sm" href="#">Contact me</a>
                            <div class="share-link">
                                <i class="fas fa-share-alt"></i>
                                <ul>
                                    <li class="facebook">
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="youtube">
                                        <a href="#">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-info">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>My Experience</h2>
                        <p>
                            Securing as informed declared or margaret. Joy horrible moreover man feelings own shy. Request
                            norland neither mistake for yet. Between the for morning assured country believe. On even feet
                            time have an no at. Relation so in confined smallest children unpacked delicate. Capitalize on
                            low hanging fruit to identify a ballpark value added activity to beta test.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <div class="skill-items">
                            <!-- Progress Bar Start -->
                            <div class="progress-box">
                                <h5>Software Development</h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-width="88">
                                        <span>88%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-box">
                                <h5>Cyber Security</h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-width="95">
                                        <span>95%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-box">
                                <h5>Artificial Intelligence</h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-width="80">
                                        <span>80%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Progressbar -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Single Area -->

@endsection