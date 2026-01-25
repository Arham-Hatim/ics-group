@extends('layouts.master')

@section('title', 'ICS Group - Leading Business Solutions')
@section('description', 'ICS Group provides innovative business solutions across engineering, construction, energy, and technology sectors.')

@section('content')
    <!-- Hero Carousel Section -->
    <section class="hero-carousel-section">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="{{ asset('images/hero-bg.jpg') }}" class="d-block w-100" alt="ICS Group">
                    <div class="carousel-overlay"></div>
                    <div class="carousel-caption-custom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h1 class="hero-title">Building Tomorrow's
                                        <span class="text-primary">Solutions</span>
                                        Today
                                    </h1>
                                    <p class="hero-subtitle">Leading the way in
                                        innovative business solutions across
                                        engineering, construction, energy, and technology sectors.</p>
                                    <div class="hero-buttons">
                                        <a href="{{ route('services') }}" class="btn btn-primary btn-lg">Our Services</a>
                                        <a href="{{ route('about') }}" class="btn btn-outline-light btn-lg">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="{{ asset('images/hero_business_background_1769149735660.png') }}" class="d-block w-100"
                        alt="Innovation">
                    <div class="carousel-overlay"></div>
                    <div class="carousel-caption-custom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h1 class="hero-title">Innovation Meets
                                        <span class="text-primary">Excellence</span>
                                    </h1>
                                    <p class="hero-subtitle">Delivering cutting-edge
                                        solutions that transform businesses and
                                        drive sustainable growth.</p>
                                    <div class="hero-buttons">
                                        <a href="{{ route('services') }}" class="btn btn-primary btn-lg">Explore
                                            Services</a>
                                        <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg">Get in
                                            Touch</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <img src="{{ asset('images/technology_innovation_1769149771178.png') }}" class="d-block w-100"
                        alt="Technology">
                    <div class="carousel-overlay"></div>
                    <div class="carousel-caption-custom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h1 class="hero-title">Powering Your <span class="text-primary">Digital Future</span>
                                    </h1>
                                    <p class="hero-subtitle">Advanced technology
                                        solutions that drive digital transformation
                                        and operational excellence.</p>
                                    <div class="hero-buttons">
                                        <a href="{{ route('services') }}" class="btn btn-primary btn-lg">View Solutions</a>
                                        <a href="{{ route('about') }}" class="btn btn-outline-light btn-lg">About Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row g-4">
                @foreach($stats as $stat)
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="stat-card">
                            <h3 class="stat-number">{{ $stat['number'] }}</h3>
                            <p class="stat-label">{{ $stat['label'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Business Verticals Section -->
    <section class="services-overview-section" id="services">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2 class="section-title">Business <span class="text-primary">Verticals</span></h2>
                <p class="section-subtitle">Diverse expertise across multiple industries</p>
            </div>

            <div class="row g-4 justify-content-center">
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="bi {{ $service['icon'] }}"></i>
                            </div>
                            <h4 class="service-title">{{ $service['title'] }}</h4>
                            <p class="service-description">{{ $service['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Our Brands Section -->
    <section class="portfolio-carousel-section" id="brands">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2 class="section-title">Our <span class="text-primary">Brands</span></h2>
                <p class="section-subtitle">Leading companies under the ICS Group umbrella</p>
            </div>

            <div class="row g-4 justify-content-center">
                @foreach($brands as $brand)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="portfolio-card">
                            <div class="p-4 text-center">
                                <h4 class="mb-3">{{ $brand['name'] }}</h4>
                                <p class="text-muted mb-4">{{ $brand['description'] }}</p>
                                <a href="{{ $brand['url'] }}" target="_blank" class="btn btn-outline-primary btn-sm">Visit
                                    Website</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Business Overview Section -->
    <section class="why-choose-premium">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2 class="section-title">Business <span class="text-primary">Overview</span></h2>
                <p class="section-subtitle">Our journey and commitment to excellence</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up">
                    <div class="premium-card p-5">
                        <p class="lead text-center mb-0" style="font-size: 1.25rem; line-height: 2;">
                            {{ $overview }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Global Reach Section -->
    <section class="global-reach-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 reach-stat" data-aos="zoom-in">
                    <span class="reach-number">120+</span>
                    <span class="reach-label">Countries Served</span>
                </div>
                <div class="col-md-3 reach-stat" data-aos="zoom-in" data-aos-delay="100">
                    <span class="reach-number">5K+</span>
                    <span class="reach-label">Projects Completed</span>
                </div>
                <div class="col-md-3 reach-stat" data-aos="zoom-in" data-aos-delay="200">
                    <span class="reach-number">15K+</span>
                    <span class="reach-label">Global Employees</span>
                </div>
                <div class="col-md-3 reach-stat" data-aos="zoom-in" data-aos-delay="300">
                    <span class="reach-number">100%</span>
                    <span class="reach-label">Client Satisfaction</span>
                </div>
            </div>
        </div>
    </section>

    <!-- About Preview Section -->
    <section class="about-preview-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="about-image">
                        <img src="{{ asset('images/about-preview.jpg') }}" alt="ICS Group"
                            class="img-fluid rounded shadow-lg">
                        <div class="about-badge">
                            <span class="badge-number">25+</span>
                            <span class="badge-text">Years of Excellence</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="about-content">
                        <h2 class="section-title">Leading the Industry with <span class="text-primary">Innovation</span>
                        </h2>
                        <p class="section-text">
                            For over 25 years, ICS Group has been at the forefront of delivering exceptional business
                            solutions.
                            Our commitment to excellence and innovation has made us a trusted partner for businesses
                            worldwide.
                        </p>
                        <ul class="feature-list">
                            <li><i class="bi bi-check-circle-fill"></i> Industry-leading expertise</li>
                            <li><i class="bi bi-check-circle-fill"></i> Innovative solutions</li>
                            <li><i class="bi bi-check-circle-fill"></i> Global presence</li>
                            <li><i class="bi bi-check-circle-fill"></i> Sustainable practices</li>
                        </ul>
                        <a href="{{ route('about') }}" class="btn btn-primary btn-lg mt-4">Discover Our Story</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News & Insights Section -->
    <section class="news-insights-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2 class="section-title">Latest <span class="text-primary">Insights</span></h2>
                <p class="section-subtitle">Stay informed with the latest trends and updates from ICS Group.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="news-card">
                        <div class="news-image">
                            <img src="{{ asset('images/technology_innovation_1769149771178.png') }}" alt="News 1">
                            <span class="news-category">Innovation</span>
                        </div>
                        <div class="news-content">
                            <span class="news-date">Oct 24, 2025</span>
                            <h4 class="news-title">The Future of AI in Modern Infrastructure</h4>
                            <p class="news-excerpt">Exploring how artificial intelligence is revolutionizing the way we
                                design and build smart cities.</p>
                            <a href="#" class="news-link">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="news-card">
                        <div class="news-image">
                            <img src="{{ asset('images/business_meeting_team_1769149751576.png') }}" alt="News 2">
                            <span class="news-category">Corporate</span>
                        </div>
                        <div class="news-content">
                            <span class="news-date">Sep 15, 2025</span>
                            <h4 class="news-title">ICS Group Expands Operations to Southeast Asia</h4>
                            <p class="news-excerpt">Strategic expansion to meet the growing demand for sustainable energy
                                solutions in the region.</p>
                            <a href="#" class="news-link">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="news-card">
                        <div class="news-image">
                            <img src="{{ asset('images/solutions_software_1769149838299.png') }}" alt="News 3">
                            <span class="news-category">Technology</span>
                        </div>
                        <div class="news-content">
                            <span class="news-date">Aug 02, 2025</span>
                            <h4 class="news-title">Securing Digital Frontiers in the Finance Sector</h4>
                            <p class="news-excerpt">How our latest cybersecurity solutions are protecting global financial
                                institutions from emerging threats.</p>
                            <a href="#" class="news-link">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="partners-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2 class="section-title">Our Global <span class="text-primary">Network</span></h2>
                <p class="section-subtitle">Collaborating with industry leaders to deliver excellence.</p>
            </div>
            <div class="row align-items-center justify-content-center g-5 grayscale-logos">
                <div class="col-6 col-md-2 text-center" data-aos="zoom-in">
                    <i class="bi bi-google fs-1"></i>
                </div>
                <div class="col-6 col-md-2 text-center" data-aos="zoom-in" data-aos-delay="100">
                    <i class="bi bi-microsoft fs-1"></i>
                </div>
                <div class="col-6 col-md-2 text-center" data-aos="zoom-in" data-aos-delay="200">
                    <i class="bi bi-apple fs-1"></i>
                </div>
                <div class="col-6 col-md-2 text-center" data-aos="zoom-in" data-aos-delay="300">
                    <i class="bi bi-nvidia fs-1"></i>
                </div>
                <div class="col-6 col-md-2 text-center" data-aos="zoom-in" data-aos-delay="400">
                    <i class="bi bi-amd fs-1"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Carousel Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2 class="section-title">What Our <span class="text-primary">Clients</span> Say</h2>
                <p class="section-subtitle">Trusted by leading organizations worldwide</p>
            </div>

            <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel" data-aos="fade-up">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <i class="bi bi-quote testimonial-quote"></i>
                                <p class="testimonial-text">
                                    "ICS Group has been instrumental in transforming our business operations. Their
                                    expertise and dedication to excellence are unmatched. We've seen remarkable improvements
                                    in efficiency and growth."
                                </p>
                                <div class="testimonial-author">
                                    <h5>David Thompson</h5>
                                    <p>CEO, TechCorp Industries</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <i class="bi bi-quote testimonial-quote"></i>
                                <p class="testimonial-text">
                                    "Working with ICS Group has been a game-changer for our organization. Their innovative
                                    solutions and professional approach have helped us achieve our strategic goals ahead of
                                    schedule."
                                </p>
                                <div class="testimonial-author">
                                    <h5>Sarah Johnson</h5>
                                    <p>Director of Operations, Global Enterprises</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <i class="bi bi-quote testimonial-quote"></i>
                                <p class="testimonial-text">
                                    "The team at ICS Group consistently delivers exceptional results. Their commitment to
                                    quality and customer satisfaction sets them apart in the industry. Highly recommended!"
                                </p>
                                <div class="testimonial-author">
                                    <h5>Michael Chen</h5>
                                    <p>Managing Partner, Innovation Ventures</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-indicators testimonial-indicators">
                    <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Testimonial 1"></button>
                    <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="1"
                        aria-label="Testimonial 2"></button>
                    <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="2"
                        aria-label="Testimonial 3"></button>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content text-center" data-aos="zoom-in">
                <h2 class="cta-title">Ready to Transform Your Business?</h2>
                <p class="cta-subtitle">Let's work together to create innovative solutions for your success</p>
                <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Get in Touch</a>
            </div>
        </div>
    </section>
@endsection