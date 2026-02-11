@extends('layouts.master')

@section('title', 'Our Journey - ICS Group')
@section('description', 'A legacy of excellence since 1983. Explore the milestones that shaped ICS Group.')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down">
                    <h1 class="page-title">Our <span class="text-primary">Journey</span></h1>
                    <p class="page-subtitle">A legacy of excellence, integrity, and innovation since 1983</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Founding Vision -->
    <section class="section bg-light">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="premium-card p-0 overflow-hidden shadow-lg border-0">
                        <img src="{{ asset('images/company-building.jpg') }}" alt="ICS Origins" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="section-title">The <span class="text-primary">Beginning</span></h2>
                    <p class="section-text text-dark">
                        In 1983, ICS Group began its journey with a single office in Karachi and a singular vision: to
                        redefine logistical excellence in Pakistan. What started as a dedicated team focused on clearing and
                        forwarding has evolved into a multi-dimensional powerhouse.
                    </p>
                    <p class="section-text text-dark">
                        For over three decades, we have remained true to our founding principles of dedication and
                        integrity, expanding into Pharmaceuticals, Technology, and beyond, while maintaining our core values
                        at every step.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="section bg-white py-5 position-relative overflow-hidden">
        {{-- Decorative text in background --}}
        <div class="bg-text-journey d-none d-lg-block"
            style="position: absolute; top: 0; right: -50px; font-size: 200px; font-weight: 900; color: rgba(0,0,0,0.02); pointer-events: none; text-transform: uppercase;">
            Legacy
        </div>

        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Timeline of <span class="text-primary">Growth</span></h2>
                <p class="section-subtitle">Key milestones that defined our success</p>
            </div>

            <div class="timeline-wrapper position-relative py-5">
                <!-- Center Line -->
                <div class="timeline-line d-none d-md-block"
                    style="position: absolute; left: 50%; top: 0; bottom: 0; width: 2px; background: linear-gradient(to bottom, transparent, #eee 10%, #eee 90%, transparent); transform: translateX(-50%);">
                </div>

                @php
                    $milestones = [
                        [
                            'year' => '1983',
                            'title' => 'The Founding',
                            'desc' => 'Inception in Karachi, establishing a solid network for logistical needs with total dedication.',
                            'icon' => 'bi-flag-fill',
                            'align' => 'left'
                        ],
                        [
                            'year' => '1994',
                            'title' => 'ICS Logistics',
                            'desc' => 'Formal launch of specialized clearing, forwarding, and integrated logistic services.',
                            'icon' => 'bi-truck',
                            'align' => 'right'
                        ],
                        [
                            'year' => '2004',
                            'title' => 'Pharma Venture',
                            'desc' => 'Strategic entry into pharmaceutical marketing and sales, focusing on life-saving medicine.',
                            'icon' => 'bi-capsule',
                            'align' => 'left'
                        ],
                        [
                            'year' => '2012',
                            'title' => 'Digital Era',
                            'desc' => 'Diversification into Information Technology and digital business solutions.',
                            'icon' => 'bi-cpu-fill',
                            'align' => 'right'
                        ],
                        [
                            'year' => '2020',
                            'title' => 'Global Integration',
                            'desc' => 'Strengthening global networks and integrated business models across all verticals.',
                            'icon' => 'bi-globe-americas',
                            'align' => 'left'
                        ],
                        [
                            'year' => '2026',
                            'title' => 'Future Vision',
                            'desc' => 'Leading the way in sustainable business practices and AI-driven operational excellence.',
                            'icon' => 'bi-stars',
                            'align' => 'right'
                        ],
                    ];
                @endphp

                @foreach($milestones as $item)
                    <div class="timeline-item mb-5 pb-5 row align-items-center">

                        {{-- Content Column --}}
                        <div class="col-md-5 {{ $item['align'] == 'right' ? 'order-md-3' : '' }}"
                            data-aos="{{ $item['align'] == 'left' ? 'fade-right' : 'fade-left' }}">
                            <div class="premium-card p-4 transition-hover border shadow-sm"
                                style="border-radius: 20px; background: white;">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="icon-box-red me-3 mb-0 ms-0" style="width: 60px; height: 60px; flex-shrink: 0;">
                                        <i class="bi {{ $item['icon'] }} fs-4"></i>
                                    </div>
                                    <div>
                                        <span class="text-primary fw-bold mb-1 d-block"
                                            style="letter-spacing: 1px;">{{ $item['year'] }}</span>
                                        <h4 class="mb-0 text-dark fw-bold">{{ $item['title'] }}</h4>
                                    </div>
                                </div>
                                <p class="text-muted mb-0" style="line-height: 1.6;">{{ $item['desc'] }}</p>
                            </div>
                        </div>

                        {{-- Dot Column --}}
                        <div class="col-md-2 text-center position-relative d-none d-md-block order-md-2" data-aos="zoom-in">
                            <div class="timeline-dot-wrapper">
                                <div class="timeline-dot"
                                    style="width: 16px; height: 16px; background: var(--color-primary); border-radius: 50%; display: inline-block; z-index: 5; position: relative; border: 4px solid #fff; box-shadow: 0 0 0 4px rgba(220,0,0,0.1);">
                                </div>
                            </div>
                        </div>

                        {{-- Empty Spacer Column --}}
                        <div class="col-md-5 {{ $item['align'] == 'left' ? 'order-md-3' : '' }}"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Legacy Quote -->
    <section class="section bg-dark text-white py-5 legacy-quote-section">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center" data-aos="zoom-in">
                    <i class="bi bi-quote text-primary opacity-50 display-1 line-height-1 mb-4"></i>
                    <h2 class="display-5 fw-bold text-white mb-4">"We believe in creating and maintaining excellence in
                        quality of products and services we offer."</h2>
                    <p class="lead text-light-emphasis">Over three decades of dedication to our domestic and international
                        clients.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Navigation CTA -->
    <section class="section bg-white">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-md-4" data-aos="fade-up">
                    <a href="{{ route('about.strategy') }}"
                        class="journey-nav-link p-5 d-block premium-card transition-hover text-decoration-none h-100">
                        <i class="bi bi-compass text-primary display-4 mb-3 d-block"></i>
                        <h4 class="text-dark fw-bold">Our Strategy</h4>
                        <p class="text-muted small mb-0">How we plan for future growth and excellence</p>
                    </a>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{ route('about.people') }}"
                        class="journey-nav-link p-5 d-block premium-card transition-hover text-decoration-none h-100">
                        <i class="bi bi-people text-primary display-4 mb-3 d-block"></i>
                        <h4 class="text-dark fw-bold">Our People</h4>
                        <p class="text-muted small mb-0">Meet the visionaries behind our legacy</p>
                    </a>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ route('business.verticals') }}"
                        class="journey-nav-link p-5 d-block premium-card transition-hover text-decoration-none h-100">
                        <i class="bi bi-briefcase text-primary display-4 mb-3 d-block"></i>
                        <h4 class="text-dark fw-bold">Our Business</h4>
                        <p class="text-muted small mb-0">Explore our diverse across sectors</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content text-center" data-aos="zoom-in">
                <h2 class="cta-title text-white">Part of the Future</h2>
                <p class="cta-subtitle text-light">Be part of the next chapter in our journey</p>
                <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Work With Us</a>
            </div>
        </div>
    </section>
@endsection