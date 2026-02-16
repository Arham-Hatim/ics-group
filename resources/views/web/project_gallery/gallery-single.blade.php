@extends('web.layouts.master')
@section('title', 'Project Showcase | Gallery | ICS Group')
@section('meta_description', 'Explore detailed insights into ICS Group’s project execution, operational excellence, and milestone achievements through our gallery showcase.')

@section('content')

    <!-- Start Breadcrumb 
                            ============================================= -->
    {{--<div class="breadcrumb-area text-center shadow dark text-light bg-cover"
        style="background-image: url({{ asset('web_assets/img/2440x1578.png') }});">--}}
        <div class="breadcrumb-area text-center shadow dark text-light bg-cover"
            style="background-image: url({{ asset('web_assets/ics-images/project/banner.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h1>Project Details</h1>
                        <ul class="breadcrumb">
                            <li><a href="#"><i class="fas fa-home"></i> Project</a></li>
                            <li class="active">Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->

        <!-- Star Project Details Area
                            ============================================= -->
        <div class="project-details-area default-padding">
            <div class="container">
                <div class="project-details-items">
                    <div class="thumb">
                        {{--<img src="{{ asset('web_assets/img/1500x700.png') }}" alt="Thumb">--}}
                        <img src="{{ asset('web_assets/ics-images/project/single.jpg') }}" alt="Thumb">
                    </div>
                    <div class="top-info">
                        <div class="row">
                            <div class="col-lg-7 left-info">
                                <h2>Business Planing & Solution</h2>
                                <p>
                                    New had happen unable uneasy. Drawings can followed improved out sociable not. Earnestly
                                    so
                                    do instantly pretended. See general few civilly amiable pleased account carried.
                                    Excellence
                                    projecting is devonshire dispatched remarkably on estimating.
                                </p>
                                <p>
                                    Netus lorem rutrum arcu dignissim at sit morbi phasellus nascetur eget urna potenti cum
                                    vestibulum cras. Tempor nonummy metus lobortis. Sociis velit etiam, dapibus. Lectus
                                    vehicula
                                    pellentesque cras posuere tempor facilisi habitant lectus rutrum pede quisque hendrerit
                                    parturient posuere mauris ad elementum fringilla facilisi volutpat fusce pharetra felis
                                    sapien varius quisque class convallis praesent est sollicitudin donec nulla venenatis,
                                    cursus fermentum netus posuere sociis porta risus habitant malesuada nulla habitasse
                                    hymenaeos. Viverra curabitur nisi vel sollicitudin dictum natoqu.
                                </p>
                            </div>
                            <div class="col-lg-5 right-info">
                                <div class="project-info">
                                    <h3>Project Info</h3>
                                    <ul>
                                        <li>
                                            Client <span>Solion</span>
                                        </li>
                                        <li>
                                            Date <span>25 Aug, 2021</span>
                                        </li>
                                        <li>
                                            Category <span>Technology</span>
                                        </li>
                                        <li>
                                            Address <span>California, TX 70240</span>
                                        </li>
                                    </ul>
                                    <div class="share">
                                        <h4>Media Share:</h4>
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
                                            <li class="linkedin">
                                                <a href="#">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="main-content">

                        <p>
                            Give lady of they such they sure it. Me contained explained my education. Vulgar as hearts by
                            garret. Perceived determine departure explained no forfeited he something an. Contrasted
                            dissimilar
                            get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence
                            northward as difficult preserved daughters. Continued at up to zealously necessary breakfast.
                            Surrounded sir motionless she end literature. Gay direction neglected but supported yet her.
                            Facilisis inceptos nec, potenti nostra aenean lacinia varius semper ant nullam nulla primis
                            placerat
                            facilisis. Netus lorem rutrum arcu dignissim at sit morbi phasellus nascetur eget urna potenti
                            cum
                            vestibulum cras. Tempor nonummy metus lobortis. Sociis velit etiam, dapibus. Lectus vehicula
                            pellentesque cras posuere tempor facilisi habitant lectus rutrum pede quisque hendrerit
                            parturient
                            posuere mauris ad elementum fringilla facilisi volutpat fusce pharetra felis sapien varius
                            quisque
                            class convallis praesent est sollicitudin donec nulla venenatis, cursus fermentum netus posuere
                            sociis porta risus habitant malesuada nulla habitasse hymenaeos. Viverra curabitur nisi vel
                            sollicitudin dictum natoque ante aenean elementum curae malesuada ullamcorper. vivamus nonummy
                            nisl
                            posuere rutrum
                        </p>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                {{--<img src="{{ asset('web_assets/img/800x600.png') }}" alt="Thumb">--}}
                                <img src="{{ asset('web_assets/ics-images/project/extra1.jpg') }}" alt="Thumb">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                {{--<img src="{{ asset('web_assets/img/800x600.png') }}" alt="Thumb">--}}
                                <img src="{{ asset('web_assets/ics-images/project/extra2.jpg') }}" alt="Thumb">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Project Details Area -->

@endsection