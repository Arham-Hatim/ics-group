@extends('layouts.master')

@section('title', 'Careers - ICS Group')
@section('description', 'Join the ICS Group team and build a rewarding career in a dynamic and innovative environment.')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down">
                    <h1 class="page-title">Join Our <span class="text-primary">Team</span></h1>
                    <p class="page-subtitle">Build your future with a global leader in business solutions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Work With Us -->
    <section class="careers-why-us py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="section-header">
                        <h2 class="section-title">Why Work at <span class="text-primary">ICS Group</span>?</h2>
                        <p class="section-text">
                            We offer a dynamic and inclusive work environment where innovation is encouraged and talent is
                            nurtured. At ICS Group, you'll have the opportunity to work on challenging projects and grow
                            professionally alongside industry experts.
                        </p>
                        <ul class="feature-list mt-4">
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Professional Growth & Development
                            </li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Inclusive & Diverse Culture</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Innovative Work Environment</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Competitive Benefits</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="careers-image">
                        <img src="{{ asset('images/business_meeting_team_1769149751576.png') }}" alt="Careers at ICS"
                            class="img-fluid rounded shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Open Positions -->
    <section class="open-positions-section bg-light py-5">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Open <span class="text-primary">Positions</span></h2>
                <p class="section-subtitle">Find the perfect role for your skills and experience.</p>
            </div>
            <div class="row g-4">
                <!-- Position 1 -->
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="job-card">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h4 class="mb-1">Logistics Operations Manager</h4>
                                <span class="text-muted"><i class="bi bi-geo-alt me-1"></i> Karachi, Pakistan</span>
                            </div>
                            <span class="badge bg-danger">Full-Time</span>
                        </div>
                        <p class="mb-4">Lead our logistics operations and drive efficiency across our global supply chain.
                        </p>
                        <a href="#" class="btn btn-outline-primary">Apply Now</a>
                    </div>
                </div>
                <!-- Position 2 -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="job-card">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h4 class="mb-1">Senior Software Engineer</h4>
                                <span class="text-muted"><i class="bi bi-geo-alt me-1"></i> Remote / Karachi</span>
                            </div>
                            <span class="badge bg-danger">Full-Time</span>
                        </div>
                        <p class="mb-4">Develop cutting-edge digital solutions to transform our business processes.</p>
                        <a href="#" class="btn btn-outline-primary">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content text-center" data-aos="zoom-in">
                <h2 class="cta-title">Don't see a perfect fit?</h2>
                <p class="cta-subtitle">Send us your resume and we'll keep you in mind for future opportunities.</p>
                <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Submit Your Resume</a>
            </div>
        </div>
    </section>
@endsection