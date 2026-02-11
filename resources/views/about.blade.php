@extends('layouts.master')

@section('title', 'About Us - ICS Group')
@section('description', 'Learn about ICS Group\'s mission, vision, values, and the team behind our success.')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down">
                    <h1 class="page-title">About <span class="text-primary">ICS Group</span></h1>
                    <p class="page-subtitle">Building excellence since 1998</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Introduction -->
    <section class="company-intro-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="section-image-wrapper">
                        <img src="{{ asset('images/company-building.jpg') }}" alt="ICS Group Headquarters"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="section-title">Who <span class="text-primary">We Are</span></h2>
                    <p class="section-text">
                        ICS Group is a leading provider of integrated business solutions with over 25 years of experience
                        in engineering, construction, energy, and technology sectors. We pride ourselves on delivering
                        innovative solutions that drive sustainable growth and create lasting value for our clients.
                    </p>
                    <p class="section-text">
                        Our diverse portfolio of services and global presence enable us to serve clients across multiple
                        industries, helping them navigate complex challenges and achieve their business objectives.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="mission-vision-section py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="premium-card p-5 h-100 transition-hover">
                        <div class="card-icon mb-4 fs-1 text-primary">
                            <i class="bi bi-bullseye"></i>
                        </div>
                        <h3 class="card-title">Our Mission</h3>
                        <p class="card-text text-muted">{{ $mission }}</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="premium-card p-5 h-100 transition-hover border-primary">
                        <div class="card-icon mb-4 fs-1 text-primary">
                            <i class="bi bi-eye-fill"></i>
                        </div>
                        <h3 class="card-title">Our Vision</h3>
                        <p class="card-text text-muted">{{ $vision }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="values-section py-5 bg-dark text-white">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <h2 class="section-title text-white">Our Core <span class="text-primary">Values</span></h2>
                <p class="section-subtitle text-light">The principles that guide everything we do</p>
            </div>

            <div class="row g-4">
                @foreach($values as $value)
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="glass-card p-5 h-100 text-center border-light-subtle">
                            <div class="icon-box-red mb-4">
                                <i class="bi {{ $value['icon'] }} fs-2"></i>
                            </div>
                            <h4 class="value-title mb-3">{{ $value['title'] }}</h4>
                            <p class="value-description text-light-emphasis small mb-0">{{ $value['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Leadership Image Section -->
    <section class="leadership-image-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="section-title">Guided by <span class="text-primary">Visionary Leadership</span></h2>
                    <p class="section-text">
                        Our leadership team brings decades of combined experience across diverse industries.
                        Their strategic vision and commitment to excellence drive our organization forward,
                        ensuring we remain at the forefront of innovation and industry best practices.
                    </p>
                    <p class="section-text">
                        With a focus on sustainable growth and client success, our leaders foster a culture
                        of collaboration, innovation, and continuous improvement throughout the organization.
                    </p>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="section-image-wrapper">
                        <img src="{{ asset('images/about_leadership_1769149854566.png') }}" alt="Leadership Team"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2 class="section-title">Meet Our <span class="text-primary">Leadership</span></h2>
                <p class="section-subtitle">Experienced professionals driving our success</p>
            </div>

            <div class="row g-4">
                @foreach($team as $member)
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="{{ asset('images/' . $member['image']) }}" alt="{{ $member['name'] }}"
                                    class="img-fluid">
                                <div class="team-overlay">
                                    <div class="team-social">
                                        <a href="#"><i class="bi bi-linkedin"></i></a>
                                        <a href="#"><i class="bi bi-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4 class="team-name">{{ $member['name'] }}</h4>
                                <p class="team-position">{{ $member['position'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Team Collaboration Section -->
    <section class="collaboration-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="section-image-wrapper">
                        <img src="{{ asset('images/business_meeting_team_1769149751576.png') }}" alt="Team Collaboration"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="section-title">Collaboration & <span class="text-primary">Teamwork</span></h2>
                    <p class="section-text">
                        At ICS Group, we believe that great achievements are the result of exceptional teamwork.
                        Our collaborative culture encourages innovation, knowledge sharing, and collective problem-solving.
                    </p>
                    <ul class="feature-list">
                        <li><i class="bi bi-check-circle-fill"></i> Cross-functional collaboration</li>
                        <li><i class="bi bi-check-circle-fill"></i> Knowledge sharing initiatives</li>
                        <li><i class="bi bi-check-circle-fill"></i> Continuous learning culture</li>
                        <li><i class="bi bi-check-circle-fill"></i> Innovation-driven mindset</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content text-center" data-aos="zoom-in">
                <h2 class="cta-title">Join Us on Our Journey</h2>
                <p class="cta-subtitle">Discover how we can help transform your business</p>
                <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Contact Us</a>
            </div>
        </div>
    </section>
@endsection