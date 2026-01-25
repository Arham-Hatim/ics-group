@extends('layouts.master')

@section('title', 'Our Services - ICS Group')
@section('description', 'Explore ICS Group\'s comprehensive range of services including engineering, construction, energy, and technology solutions.')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down">
                    <h1 class="page-title">Our <span class="text-primary">Services</span></h1>
                    <p class="page-subtitle">Comprehensive solutions for your business needs</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="services-grid-section">
        <div class="container">
            <div class="row g-4">
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="service-detail-card">
                            <div class="service-card-header">
                                <div class="service-card-icon">
                                    <i class="bi {{ $service['icon'] }}"></i>
                                </div>
                                <h3 class="service-card-title">{{ $service['title'] }}</h3>
                            </div>
                            <p class="service-card-description">{{ $service['description'] }}</p>
                            <ul class="service-features">
                                @foreach($service['features'] as $feature)
                                    <li><i class="bi bi-check-circle-fill"></i> {{ $feature }}</li>
                                @endforeach
                            </ul>
                            <a href="{{ route('contact') }}" class="btn btn-outline-primary w-100">Request Quote</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2 class="section-title">Why Choose <span class="text-primary">ICS Group</span></h2>
                <p class="section-subtitle">What sets us apart from the competition</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="bi bi-award-fill"></i>
                        </div>
                        <h4 class="feature-title">Proven Expertise</h4>
                        <p class="feature-text">25+ years of industry experience delivering exceptional results</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h4 class="feature-title">Expert Team</h4>
                        <p class="feature-text">Highly skilled professionals dedicated to your success</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h4 class="feature-title">Quality Results</h4>
                        <p class="feature-text">Commitment to excellence in every project we undertake</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h4 class="feature-title">24/7 Support</h4>
                        <p class="feature-text">Round-the-clock support to ensure your operations run smoothly</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content text-center" data-aos="zoom-in">
                <h2 class="cta-title">Ready to Get Started?</h2>
                <p class="cta-subtitle">Contact us today to discuss your project requirements</p>
                <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Contact Us Now</a>
            </div>
        </div>
    </section>
@endsection