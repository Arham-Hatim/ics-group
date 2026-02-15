<!-- Start Header Top 
    ============================================= -->
<div class="top-bar-area inc-pad bg-dark text-light">
    <div class="container-full">
        <div class="row align-center">
            <div class="col-lg-6 info">
                <ul>
                    <li>
                        <i class="fas fa-map-marker-alt"></i> California, TX 70240
                    </li>
                    <li>
                        <i class="fas fa-envelope-open"></i> Info@gmail.com
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 text-right item-flex">
                <div class="info">
                    <ul>
                        <li>
                            <i class="fas fa-clock"></i> Office Hours: 8:00 AM – 7:45 PM
                        </li>
                    </ul>
                </div>
                <div class="social">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
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
<!-- End Header Top -->

<!-- Header 
    ============================================= -->
<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-sticky bootsnav">

        <div class="container-full">

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <div class="call">
                    <div class="icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="info">
                        <span>Have any question?</span>
                        <h5>(012) 66795453677</h5>
                    </div>
                </div>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('web_assets/img/logo-red.png') }}" class="logo" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-center" data-in="#" data-out="#">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Who We Are</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('overview') }}">Overview</a></li>
                            <li><a href="{{ route('strategy-values') }}">Our Strategy And Values</a></li>
                            <li><a href="{{ route('our-people') }}">Our People</a></li>
                            <li><a href="{{ route('our-journey') }}">Our Journey</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">What We Do</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('business-overview') }}">Business Overview</a></li>
                            <li><a href="{{ route('business-verticals') }}">Business Verticals</a></li>
                            <li><a href="{{ route('operations') }}">Operations</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('sustainability') }}">Sustainability</a>
                    </li>
                    <li>
                        <a href="{{ route('news.views') }}">News And Views</a>
                    </li>
                    <li>
                        <a href="{{ route('careers') }}">Careers</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>

    </nav>
    <!-- End Navigation -->

</header>
<!-- End Header -->