@extends('layouts.master')

@section('title', 'Newsroom - ICS Group')
@section('description', 'Stay updated with the latest news, insights, and press releases from the ICS Group.')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down">
                    <h1 class="page-title">News <span class="text-primary">Room</span></h1>
                    <p class="page-subtitle">Latest updates, insights, and stories from across the ICS Group.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured News Section -->
    <section class="news-insights-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2 class="section-title">Latest <span class="text-primary">Insights</span></h2>
                <p class="section-subtitle">Stay informed with the latest trends and updates from ICS Group</p>
            </div>

            <div class="row g-4">
                <!-- Featured News Item -->
                <div class="col-12 mb-4" data-aos="fade-up">
                    <div class="news-card featured-news-card">
                        <div class="row g-0">
                            <div class="col-lg-7">
                                <div class="news-image h-100">
                                    <img src="{{ asset('images/hero_business_background_1769149735660.png') }}" alt="Featured News">
                                    <span class="news-category">Featured</span>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="news-content d-flex flex-column justify-content-center h-100 p-5">
                                    <span class="news-date">Oct 30, 2025</span>
                                    <h3 class="news-title h2">ICS Group Leads the Way in Sustainable Logistics</h3>
                                    <p class="news-excerpt">Our latest initiative focuses on reducing carbon footprint across our global supply chain through innovative green technologies and optimized routing.</p>
                                    <a href="#" class="news-link">Read Full Story <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Regular News Items -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="news-card">
                        <div class="news-image">
                            <img src="{{ asset('images/technology_innovation_1769149771178.png') }}" alt="News 1">
                            <span class="news-category">Innovation</span>
                        </div>
                        <div class="news-content">
                            <span class="news-date">Oct 24, 2025</span>
                            <h4 class="news-title">The Future of AI in Modern Infrastructure</h4>
                            <p class="news-excerpt">Exploring how artificial intelligence is revolutionizing the way we design and build smart cities.</p>
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
                            <p class="news-excerpt">Strategic expansion to meet the growing demand for sustainable energy solutions in the region.</p>
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
                            <p class="news-excerpt">How our latest cybersecurity solutions are protecting global financial institutions from emerging threats.</p>
                            <a href="#" class="news-link">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Subscription -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content text-center" data-aos="zoom-in">
                <h2 class="cta-title">Subscribe to Our Newsletter</h2>
                <p class="cta-subtitle">Get the latest news and insights delivered straight to your inbox.</p>
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <form class="d-flex">
                            <input type="email" class="form-control form-control-lg" placeholder="Your Email Address" required>
                            <button type="submit" class="btn btn-light btn-lg ms-2">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection