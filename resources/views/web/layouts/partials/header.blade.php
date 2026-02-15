<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default attr-bg navbar-fixed white no-background bootsnav">

        <!-- Start Top Search -->
        <div class="top-search">
            <div class="container">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container">

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="ti-search"></i></a></li>
                    <li class="side-menu">
                        <a href="#">
                            <span class="bar-1"></span>
                            <span class="bar-2"></span>
                            <span class="bar-3"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('web_assets/img/logo-light.png') }}" class="logo logo-display" alt="Logo">
                    <img src="{{ asset('web_assets/img/logo-red.png') }}" class="logo logo-scrolled" alt="Logo">
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

        <!-- Start Side Menu -->
        <div class="side">
            <a href="#" class="close-side"><i class="icon_close"></i></a>
            <div class="widget">
                <img src="{{ asset('web_assets/img/logo-red.png') }}" alt="Logo">
                <p>
                    Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now easy eat
                    hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means few
                    blind.
                </p>
            </div>
            <div class="widget address">
                <div>
                    <ul>
                        <li>
                            <div class="content">
                                <p>Address</p>
                                <strong>California, TX 70240</strong>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <p>Email</p>
                                <strong>support@validtheme.com</strong>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <p>Contact</p>
                                <strong>+44-20-7328-4499</strong>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="widget newsletter">
                <h4 class="title">Get Subscribed!</h4>
                <form action="#">
                    <div class="input-group stylish-input-group">
                        <input type="email" placeholder="Enter your e-mail" class="form-control" name="email">
                        <span class="input-group-addon">
                            <button type="submit">
                                <i class="arrow_right"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
            <div class="widget social">
                <ul class="link">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- End Side Menu -->

    </nav>
    <!-- End Navigation -->

</header>