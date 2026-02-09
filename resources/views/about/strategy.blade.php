@extends('layouts.master')

@section('title', 'Strategy & Values - ICS Group')
@section('description', 'Discover the strategic pillars and core values that define ICS Group\'s excellence.')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down">
                    <h1 class="page-title">Strategy & <span class="text-primary">Values</span></h1>
                    <p class="page-subtitle">Defining our path to global excellence</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Strategic Pillars -->
    <section class="section bg-white overflow-hidden">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2 class="section-title">Our Strategic <span class="text-primary">Pillars</span></h2>
                <p class="section-subtitle text-dark">The foundation of our sustainable growth models</p>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                    <div class="premium-card h-100 p-5 text-center transition-hover">
                        <div class="pillar-icon mb-4 fs-1 text-primary">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h3 class="mb-3">Sustainable Growth</h3>
                        <p class="text-muted">Focusing on long-term value creation through diversified investments and
                            market expansion across key global sectors.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="premium-card h-100 p-5 text-center transition-hover border-primary">
                        <div class="pillar-icon mb-4 fs-1 text-primary">
                            <i class="bi bi-cpu-fill"></i>
                        </div>
                        <h3 class="mb-3">Digital Innovation</h3>
                        <p class="text-muted">Harnessing advanced technologies and AI-driven insights to transform
                            traditional business models and drive operational efficiency.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-left" data-aos-delay="300">
                    <div class="premium-card h-100 p-5 text-center transition-hover">
                        <div class="pillar-icon mb-4 fs-1 text-primary">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h3 class="mb-3">Human Capital</h3>
                        <p class="text-muted">Empowering our global workforce with world-class training, fostering a culture
                            of inclusivity and visionary leadership.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values with Glassmorphism -->
    <section class="section bg-dark text-white relative overflow-hidden">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2 class="section-title text-white">Core <span class="text-primary">Values</span></h2>
                <p class="section-subtitle text-light">The DNA of ICS Group</p>
            </div>

            <div class="row g-4 mt-5">
                @foreach($values as $value)
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="glass-card p-5 h-100 text-center border-light-subtle">
                            <div class="icon-box-red mb-4">
                                <i class="bi {{ $value['icon'] }} fs-2"></i>
                            </div>
                            <h4 class="mb-3">{{ $value['title'] }}</h4>
                            <p class="text-light-emphasis small mb-0">{{ $value['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Visionary Strategy -->
    <section class="section bg-white">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="strategy-image position-relative">
                        <img src="{{ asset('images/services_consulting_1769149808861.png') }}" alt="ICS Group Strategy"
                            class="img-fluid rounded-xl shadow-lg">
                        <div
                            class="floating-badge bg-primary text-white p-3 rounded-md shadow-lg position-absolute top-0 start-0 m-4">
                            <strong>Future Ready</strong>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="section-title">Ready for the <span class="text-primary">Next Frontier</span></h2>
                    <p class="section-text text-dark">
                        Our 2030 vision is centered around global integration. By leveraging our diverse portfolio, we
                        create cross-sector synergies that allow us to tackle challenges on a scale few others can.
                    </p>
                    <ul class="feature-list mt-4 text-dark">
                        <li><i class="bi bi-check-circle-fill text-primary"></i> Global Logistics Integration</li>
                        <li><i class="bi bi-check-circle-fill text-primary"></i> Sustainable Pharma Distribution</li>
                        <li><i class="bi bi-check-circle-fill text-primary"></i> Next-Gen Technology Infrastructure</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection