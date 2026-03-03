@extends('web.layouts.master')
@section('title', 'Home | ICS Group')
@section('meta_description', 'ICS Group is a diversified business enterprise delivering innovative solutions, operational excellence, and sustainable growth across multiple industries. Discover our expertise, values, and commitment to long-term success.')

@section('content')

    <!-- Start Banner 
                                                                                                                            ============================================= -->
    {{-- <div class="banner-area inc-video video-bg-live bg-cover"
        style="background-image: url({{ asset('web_assets/img/2440x1578.png') }});"> --}}
        <div class="banner-area inc-video video-bg-live bg-cover"
            style="background-image: url({{ asset('web_assets/ics-images/home/heroBanner3.jpg') }});">
            <div class="player"
                data-property="{videoURL:'3JzJyhYmjKQ',containment:'.video-bg-live', showControls:false, autoPlay:true, zoom:0, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}">
            </div>

            <div id="bootcarousel" class="carousel text-light slide animate_text" data-ride="carousel">

                <!-- Indicators for slides -->
                <div class="carousel-indicator">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <ol class="carousel-indicators right">
                                    <li data-target="#bootcarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#bootcarousel" data-slide-to="1"></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="box-table shadow dark">
                            <div class="box-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8 offset-lg-4">
                                            <div class="content">
                                                <h4 data-animation="animated zoomInRight">A Diversified Business Group</h4>
                                                <h2 data-animation="animated slideInRight">Leading Global Industry
                                                    <span>Excellence</span>
                                                </h2>
                                                <a data-animation="animated zoomInUp" class="btn btn-gradient effect btn-md"
                                                    href="#">Discover More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box-table shadow dark">
                            <div class="box-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8 offset-lg-4">
                                            <div class="content">
                                                <h4 data-animation="animated zoomInRight">Reliable Solutions Since 1994</h4>
                                                <h2 data-animation="animated slideInUp">Empowering Growth Through
                                                    <span>Innovation</span>
                                                </h2>
                                                <a data-animation="animated zoomInUp" class="btn btn-gradient effect btn-md"
                                                    href="#">Explore More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Wrapper for slides -->

            </div>
        </div>
        <!-- End Banner -->

        <!-- Star Services Area
                                                                                                                            ============================================= -->
        <div class="default-services-area default-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h4>Business Veriticals</h4>
                            <h2>What We Bring To You</h2>
                            <div class="devider"></div>
                            <p>
                                We deliver technically excellent, sustainable solutions backed by deep industry expertise.
                                Our focus is on driving immediate impact while ensuring your business is built to scale.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="services-items text-center">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">

                        <div class="col">
                            <div class="item">
                                <div class="info">
                                    <i class="flaticon-logistics"></i>
                                    <h4><a href="#">Logistics</a></h4>
                                    <p>Since 1994, ICS Group provides world-class multimodal freight, project logistics, and
                                        global supply chain solutions.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="item">
                                <div class="info">
                                    <i class="flaticon-pharma"></i>
                                    <h4><a href="#">Pharma</a></h4>
                                    <p>Founded in 2004, AJM Pharma delivers affordable lifesaving drugs through medical
                                        education and patient awareness campaigns.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="item">
                                <div class="info">
                                    <i class="flaticon-automobiles"></i>
                                    <h4><a href="#">Automobiles</a></h4>
                                    <p>Established in 2015, Toyota Creek Motors is an authorized 4S dealer providing
                                        comprehensive Toyota sales and service.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="item">
                                <div class="info">
                                    <i class="flaticon-security"></i>
                                    <h4><a href="#">Security</a></h4>
                                    <p>ZSS delivers proactive, client-focused security solutions upholding the highest
                                        standards of training and discipline.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="item">
                                <div class="info">
                                    <i class="flaticon-technology"></i>
                                    <h4><a href="#">Technology</a></h4>
                                    <p>We deliver innovative IT infrastructure, digital transformation, and scalable
                                        technology solutions for modern efficiency.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Services Area -->

        <!-- Star About Area
                                                                                                                            ============================================= -->
        <div class="about-area bg-dark overflow-hidden text-light relative">
            <!-- Fixed Shape -->
            <div class="fixed-shape" style="background-image: url({{ asset('web_assets/img/shape/8.png') }});"></div>
            <!-- End Fixed Shape -->
            <div class="container">
                <div class="about-items">
                    <div class="row">
                        {{--<div class="col-lg-6 thumb order-lg-last"
                            style="background-image: url({{ asset('web_assets/img/2440x1578.png') }});"> --}}
                            <div class="col-lg-6 thumb order-lg-last"
                                style="background-image: url({{ asset('web_assets/ics-images/home/who-we-are.jpg') }});">
                                <div class="successr-ate">
                                    <div class="icon">
                                        <i class="flaticon-target"></i>
                                    </div>
                                    <div class="content">
                                        <h2>98%</h2>
                                        <span>Success Rate</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 info">
                                <h4>Who we are</h4>
                                <h2>Transforming Business Ideas<br>Into Real Solutions</h2>
                                <p>
                                    ICS Group is a leading innovator in
                                    logistics, pharmaceuticals, IT, cargo
                                    handling, and automotive sectors,
                                    dedicated to solving critical challenges
                                    across these industries. We enhance the
                                    quality of life for millions today while
                                    laying the groundwork for a more
                                    connected and sustainable future.
                                </p>
                                <ul>
                                    <li>
                                        <h5>Our Approach</h5>
                                        <p>
                                            Turning challenges into opportunities and building long-term partnerships.
                                        </p>
                                    </li>
                                    <li>
                                        <h5>24/7 Live Support</h5>
                                        <p>
                                            We provide unwavering technical assistance and comprehensive operational
                                            support.
                                        </p>
                                    </li>
                                </ul>
                                <a class="btn btn-gradient effect btn-md" href="#">Discover More</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End About Area -->

            <!-- Start Expertise Area
                                                                                                                            ============================================= -->
            <div class="expertise-area default-padding">
                <div class="container">
                    <!-- Item Heading -->
                    <div class="item-heading">
                        <div class="row">
                            <div class="col-lg-6 info">
                                <h4>Our expertise</h4>
                                <h2>We deliver innovative solutions that create lasting impact and empower growth</h2>
                            </div>
                            <div class="col-lg-6 right-info">
                                <div class="skill-items">
                                    <!-- Progress Bar Start -->
                                    <div class="progress-box">
                                        <h5>Customer Service</h5>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" data-width="88">
                                                <span>88%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-box">
                                        <h5>Research & development support</h5>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" data-width="95">
                                                <span>95%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-box">
                                        <h5>Supply chain optimization</h5>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" data-width="85">
                                                <span>85%</span>
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
                    {{-- <div class="expertise-content text-light"
                        style="background-image: url({{ asset('web_assets/img/2440x1578.png') }});"> --}}
                        <div class="expertise-content text-light"
                            style="background-image: url({{ asset('web_assets/ics-images/home/our-expertise.jpg') }});">
                            <div class="row">
                                <!-- Single Item -->
                                <div class="col-lg-4 single-item">
                                    <div class="item">
                                        <div class="content">
                                            <h4>International Markets</h4>
                                            <p>
                                                Expanding International Markets Through Innovation and Compliance.
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
                                            <h4>Innovation</h4>
                                            <p>
                                                Global Market Leadership Through Innovation and Governance.
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
                                            <h4>Global Standards</h4>
                                            <p>
                                                Driving Global Innovation with World-Class Governance Excellence.
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

                <!-- Star Partner Area
                                                                                                                            ============================================= -->
                <div class="partner-area overflow-hidden text-light">
                    <div class="container">
                        <div class="item-box red">
                            <div class="row align-center">
                                <div class="col-lg-6 info">
                                    <h2>We're Trusted by <span>2500+</span> <br> Professional Customer</h2>
                                    <p>
                                        ICS Group has delivered integrated logistics, healthcare, and technology solutions.
                                        We empower global partners through innovation, excellence, and total
                                        integrity.
                                    </p>
                                </div>
                                <div class="col-lg-6 clients">
                                    <div class="partner-carousel owl-carousel owl-theme text-center">
                                        <div class="single-item">
                                            {{--<a href="#"><img src="{{ asset('web_assets/img/150x80.png') }}"
                                                    alt="Clients"></a>--}}
                                            <a href="#"><img src="{{ asset('web_assets/ics-images/home/partner1.png') }}"
                                                    alt="Clients"></a>
                                        </div>
                                        <div class="single-item">
                                            {{--<a href="#"><img src="{{ asset('web_assets/img/150x80.png') }}"
                                                    alt="Clients"></a>--}}
                                            <a href="#"><img src="{{ asset('web_assets/ics-images/home/partner2.png') }}"
                                                    alt="Clients"></a>
                                        </div>
                                        <div class="single-item">
                                            {{--<a href="#"><img src="{{ asset('web_assets/img/150x80.png') }}"
                                                    alt="Clients"></a>--}}
                                            <a href="#"><img src="{{ asset('web_assets/ics-images/home/partner3.png') }}"
                                                    alt="Clients"></a>
                                        </div>
                                        <div class="single-item">
                                            {{--<a href="#"><img src="{{ asset('web_assets/img/150x80.png') }}"
                                                    alt="Clients"></a>--}}
                                            <a href="#"><img src="{{ asset('web_assets/ics-images/home/partner4.png') }}"
                                                    alt="Clients"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Partner Area -->

                <!-- ("overflow-hidden-box overflow-hidden" helps you to ignore extra width for the circle shape)-->
                <div class="overflow-hidden-box overflow-hidden">
                    <!-- Star Team Area
                                                                                                                                ============================================= -->
                    <div class="team-area bg-gray default-padding bottom-less">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2">
                                    <div class="site-heading text-center">
                                        <h4>Our people</h4>
                                        <h2>Meet Our Leadership</h2>
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
                                                {{--<img src="{{ asset('web_assets/img/800x900.png') }}" alt="Thumb">--}}
                                                <img src="{{ asset('web_assets/ics-images/home/team1.jpg') }}" alt="Thumb">
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
                                                    <h4>Ali Abbas</h4>
                                                    <span>Director</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="single-item col-lg-4 col-md-6">
                                        <div class="item">
                                            <div class="thumb">
                                                {{--<img src="{{ asset('web_assets/img/800x900.png') }}" alt="Thumb">--}}
                                                <img src="{{ asset('web_assets/ics-images/home/team2.jpg') }}" alt="Thumb">
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
                                                    <h4>Faryal Hatim</h4>
                                                    <span>Group Head of Marketing</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="single-item col-lg-4 col-md-6">
                                        <div class="item">
                                            <div class="thumb">
                                                {{--<img src="{{ asset('web_assets/img/800x900.png') }}" alt="Thumb">--}}
                                                <img src="{{ asset('web_assets/ics-images/home/team3.jpg') }}" alt="Thumb">
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
                                                    <h4>Muhammad Rizwan Mirza</h4>
                                                    <span>Group Head of Finance</span>
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

                    <!-- Star testimonials Area
                                                                                                                                ============================================= -->
                    <div class="testimonials-area bg-gray default-padding-bottom">
                        <!-- Fixed Shape -->
                        <div class="fixed-shape"
                            style="background-image: url({{ asset('web_assets/img/shape/10-red.png') }});"></div>
                        <!-- End Fixed Shape -->
                        <div class="container">
                            <div class="testimonial-items">
                                <div class="row align-center">
                                    <div class="col-lg-7 testimonials-content">
                                        <div class="testimonials-carousel owl-carousel owl-theme">
                                            <!-- Single Item -->
                                            <div class="item">
                                                <div class="info">
                                                    <p>
                                                        ICS Group has been our primary logistics partner for over a decade.
                                                        Their ability to handle complex multimodal transport while
                                                        maintaining total transparency and regulatory compliance is
                                                        unmatched in the international market.
                                                    </p>
                                                    <div class="provider">
                                                        <div class="thumb">
                                                            {{--<img src="{{ asset('web_assets/img/100x100.png') }}"
                                                                alt="Author">--}}
                                                            <img src="{{ asset('web_assets/ics-images/home/testimonial1.jpg') }}"
                                                                alt="Author">
                                                        </div>
                                                        <div class="content">
                                                            <h4>Amelia Smith</h4>
                                                            <span> Managing Director</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Item -->
                                            <!-- Single Item -->
                                            <div class="item">
                                                <div class="info">
                                                    <p>
                                                        The level of business integrity and professional support provided by
                                                        the ICS team is exceptional. They deliver strategic solutions that
                                                        have been instrumental to our regional expansion and clinical
                                                        success.
                                                    </p>
                                                    <div class="provider">
                                                        <div class="thumb">
                                                            {{--<img src="{{ asset('web_assets/img/100x100.png') }}"
                                                                alt="Author">--}}
                                                            <img src="{{ asset('web_assets/ics-images/home/testimonial2.jpg') }}"
                                                                alt="Author">
                                                        </div>
                                                        <div class="content">
                                                            <h4>Leo Harvey</h4>
                                                            <span>Chief Executive Officer</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Item -->
                                        </div>
                                    </div>
                                    <div class="col-lg-5 info">
                                        <h4>Testimonials</h4>
                                        <h2>Trusted by Industry Leaders</h2>
                                        <p>
                                            We are dedicated to building long-term strategic partnerships by delivering
                                            consistent value and operational excellence.
                                            Our clients' success stories reflect the proven impact of our integrated
                                            solutions across every global sector we serve.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End testimonials Area -->
                </div>
                <!-- End Overflow Hidden Box -->

                <!-- Start Gallery Area
                                                                                                                            ============================================= -->
                <div class="gallery-area overflow-hidden default-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="site-heading text-center">
                                    <h4>Our Portfolio</h4>
                                    <h2>Proven Solution Excellence</h2>
                                    <div class="devider"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="case-items-area">
                            <div class="masonary">
                                <div id="portfolio-grid" class="gallery-items colums-3">
                                    <!-- Single Item -->
                                    <div class="pf-item">
                                        <div class="item">
                                            <div class="thumb">
                                                {{--<img src="{{ asset('web_assets/img/800x600.png') }}" alt="Thumb">--}}
                                                <img src="{{ asset('web_assets/ics-images/home/gallery1.jpg') }}"
                                                    alt="Thumb">
                                            </div>
                                            <div class="content">
                                                <div class="info">
                                                    <h4><a href="#">Smart Logistics</a></h4>
                                                    <span>Seamless supply chain movement</span>
                                                </div>
                                                <div class="button">
                                                    {{--<a href="{{ asset('web_assets/img/800x800.png') }}"
                                                        class="item popup-gallery">--}}
                                                        <a href="{{ asset('web_assets/ics-images/home/gallery1.jpg') }}"
                                                            class="item popup-gallery">
                                                            <i class="fas fa-plus"></i>
                                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->

                                    <!-- Single Item -->
                                    <div class="pf-item">
                                        <div class="item">
                                            <div class="thumb">
                                                {{--<img src="{{ asset('web_assets/img/800x800.png') }}" alt="Thumb">--}}
                                                <img src="{{ asset('web_assets/ics-images/home/gallery2.jpg') }}"
                                                    alt="Thumb">
                                            </div>
                                            <div class="content">
                                                <div class="info">
                                                    <h4><a href="#">Advanced Healthcare</a></h4>
                                                    <span>Innovative medical solutions</span>
                                                </div>
                                                <div class="button">
                                                    {{--<a href="{{ asset('web_assets/img/800x800.png') }}"
                                                        class="item popup-gallery">--}}
                                                        <a href="{{ asset('web_assets/ics-images/home/gallery2.jpg') }}"
                                                            class="item popup-gallery">
                                                            <i class="fas fa-plus"></i>
                                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->

                                    <!-- Single Item -->
                                    <div class="pf-item">
                                        <div class="item">
                                            <div class="thumb">
                                                {{--<img src="{{ asset('web_assets/img/800x800.png') }}" alt="Thumb">--}}
                                                <img src="{{ asset('web_assets/ics-images/home/gallery3.jpg') }}"
                                                    alt="Thumb">
                                            </div>
                                            <div class="content">
                                                <div class="info">
                                                    <h4><a href="#">Driven Innovation</a></h4>
                                                    <span>Performance and precision engineering</span>
                                                </div>
                                                <div class="button">
                                                    {{--<a href="{{ asset('web_assets/img/800x800.png') }}"
                                                        class="item popup-gallery">--}}
                                                        <a href="{{ asset('web_assets/ics-images/home/gallery3.jpg') }}"
                                                            class="item popup-gallery">
                                                            <i class="fas fa-plus"></i>
                                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->

                                    <!-- Single Item -->
                                    <div class="pf-item">
                                        <div class="item">
                                            <div class="thumb">
                                                {{--<img src="{{ asset('web_assets/img/800x800.png') }}" alt="Thumb">--}}
                                                <img src="{{ asset('web_assets/ics-images/home/gallery4.jpg') }}"
                                                    alt="Thumb">
                                            </div>
                                            <div class="content">
                                                <div class="info">
                                                    <h4><a href="#">Integrated Security</a></h4>
                                                    <span>Reliable protection systems</span>
                                                </div>
                                                <div class="button">
                                                    {{--<a href="{{ asset('web_assets/img/800x800.png') }}"
                                                        class="item popup-gallery">--}}
                                                        <a href="{{ asset('web_assets/ics-images/home/gallery4.jpg') }}"
                                                            class="item popup-gallery">
                                                            <i class="fas fa-plus"></i>
                                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Item -->

                                    <!-- Single Item -->
                                    <div class="pf-item">
                                        <div class="item">
                                            <div class="thumb">
                                                {{--<img src="{{ asset('web_assets/img/800x600.png') }}" alt="Thumb">--}}
                                                <img src="{{ asset('web_assets/ics-images/home/gallery5.jpg') }}"
                                                    alt="Thumb">
                                            </div>
                                            <div class="content">
                                                <div class="info">
                                                    <h4><a href="#">Global Commerce</a></h4>
                                                    <span>Connecting international markets</span>
                                                </div>
                                                <div class="button">
                                                    {{--<a href="{{ asset('web_assets/img/800x800.png') }}"
                                                        class="item popup-gallery">--}}
                                                        <a href="{{ asset('web_assets/ics-images/home/gallery5.jpg') }}"
                                                            class="item popup-gallery">
                                                            <i class="fas fa-plus"></i>
                                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Item -->

                                    <!-- Single Item -->
                                    <div class="pf-item">
                                        <div class="item">
                                            <div class="thumb">
                                                {{--<img src="{{ asset('web_assets/img/800x600.png') }}" alt="Thumb">--}}
                                                <img src="{{ asset('web_assets/ics-images/home/gallery6.jpg') }}"
                                                    alt="Thumb">
                                            </div>
                                            <div class="content">
                                                <div class="info">
                                                    <h4><a href="#">Digital Innovation</a></h4>
                                                    <span>Smart and scalable solutions</span>
                                                </div>
                                                <div class="button">
                                                    {{--<a href="{{ asset('web_assets/img/800x800.png') }}"
                                                        class="item popup-gallery">--}}
                                                        <a href="{{ asset('web_assets/ics-images/home/gallery6.jpg') }}"
                                                            class="item popup-gallery">
                                                            <i class="fas fa-plus"></i>
                                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Item -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Projects Area -->

                <!-- Start Blog 
                                                                                                                            ============================================= -->
                <div class="blog-area bg-gray default-padding bottom-less">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="site-heading text-center">
                                    <h4>From the blog</h4>
                                    <h2>Latest News & Articles</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="blog-items">
                            <div class="row">
                                <!-- Single Item -->
                                <div class="single-item col-lg-4 col-md-6">
                                    <div class="item">
                                        <div class="thumb">
                                            {{--<img src="{{ asset('web_assets/img/800x600.png') }}" alt="Thumb">--}}
                                            <img src="{{ asset('web_assets/ics-images/home/news1.jpg') }}" alt="Thumb">
                                            <div class="date">January 25, 2026</div>
                                        </div>

                                        <div class="info">
                                            <div class="meta">
                                                <ul>
                                                    <li>
                                                        {{--<img src="{{ asset('web_assets/img/100x100.png') }}"
                                                            alt="Author">--}}
                                                        <img src="{{ asset('web_assets/ics-images/home/team1.jpg') }}"
                                                            alt="Author">
                                                        <span>By </span>
                                                        <a href="#">John Henry</a>
                                                    </li>
                                                    <li>
                                                        <span>In </span>
                                                        <a href="#">Management</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4>
                                                <a href="#">The Future of AI in Global Supply Chain Management</a>
                                            </h4>
                                            <p>
                                                Discover how automated tracking and AI-driven logistics are revolutionizing
                                                the way global enterprises manage their distribution networks for maximum
                                                efficiency.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="single-item col-lg-4 col-md-6">
                                    <div class="item">
                                        <div class="thumb">
                                            {{--<img src="{{ asset('web_assets/img/800x600.png') }}" alt="Thumb">--}}
                                            <img src="{{ asset('web_assets/ics-images/home/news2.jpg') }}" alt="Thumb">
                                            <div class="date">February 12, 2026</div>
                                        </div>
                                        <div class="info">
                                            <div class="meta">
                                                <ul>
                                                    <li>
                                                        {{--<img src="{{ asset('web_assets/img/100x100.png') }}"
                                                            alt="Author">--}}
                                                        <img src="{{ asset('web_assets/ics-images/home/team2.jpg') }}"
                                                            alt="Author">
                                                        <span>By </span>
                                                        <a href="#">Julia Mark</a>
                                                    </li>
                                                    <li>
                                                        <span>In </span>
                                                        <a href="#">Pharma</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4>
                                                <a href="#">Cold Chain Integrity in Pharma Logistics</a>
                                            </h4>
                                            <p>
                                                Ensuring temperature-controlled precision is vital for healthcare safety. We
                                                explore the latest innovations in cold chain storage and international
                                                distribution standards.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="single-item col-lg-4 col-md-6">
                                    <div class="item">
                                        <div class="thumb">
                                            {{--<img src="{{ asset('web_assets/img/800x600.png') }}" alt="Thumb">--}}
                                            <img src="{{ asset('web_assets/ics-images/home/news3.jpg') }}" alt="Thumb">
                                            <div class="date">March 02, 2026</div>
                                        </div>
                                        <div class="info">
                                            <div class="meta">
                                                <ul>
                                                    <li>
                                                        {{--<img src="{{ asset('web_assets/img/100x100.png') }}"
                                                            alt="Author">--}}
                                                        <img src="{{ asset('web_assets/ics-images/home/team3.jpg') }}"
                                                            alt="Author">
                                                        <span>By </span>
                                                        <a href="#">Paul Smith</a>
                                                    </li>
                                                    <li>
                                                        <span>In </span>
                                                        <a href="#">Global</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4>
                                                <a href="#">Strategic Partnerships & Operational Excellence</a>
                                            </h4>
                                            <p>
                                                Building long-term business value requires more than just service; it
                                                requires a commitment to integrity, global standards, and integrated
                                                industrial solutions.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Blog Area -->

@endsection