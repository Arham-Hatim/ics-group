@extends('web.layouts.master')
@section('title', 'Our People | ICS Group')
@section('meta_description', 'Meet the dedicated team behind ICS Group. Our experienced professionals drive innovation, collaboration, and excellence, delivering trusted solutions and sustainable growth across every project.')

@section('content')

    <!-- Start Breadcrumb 
            ============================================= -->
    <div class="breadcrumb-area text-center shadow dark text-light bg-cover"
        style="background-image: url({{ asset('web_assets/img/2440x1578.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Our Team</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Team</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Star Team Area
            ============================================= -->
    <div class="team-area default-padding bottom-less">
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
                                    <h4>Munia Anchor</h4>
                                    <span>Assistant Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
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
                                    <h4>Ahel Natasha</h4>
                                    <span>Executive Officer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
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
                                    <h4>Munia Anchor</h4>
                                    <span>Assistant Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
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
                                    <h4>Ahel Natasha</h4>
                                    <span>Executive Officer</span>
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