@extends('layouts.master')

@section('title', 'Operations - ICS Group')
@section('description', 'Operational excellence on a global scale. Discover ICS Group\'s supply chain and infrastructure.')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down">
                    <h1 class="page-title">Global <span class="text-primary">Operations</span></h1>
                    <p class="page-subtitle">Excellence in every mile, every connection</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Map & Stats -->
    <section class="section bg-white overflow-hidden">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="section-title">Universal <span class="text-primary">Footprint</span></h2>
                    <p class="section-text text-dark">
                        With operational hubs strategically located across major trade routes, ICS Group ensures seamless
                        flow for global commerce. Our supply chain is powered by advanced AI monitoring and a dedicated
                        workforce of over 15,000 professionals.
                    </p>
                    <div class="row g-4 mt-2">
                        <div class="col-6">
                            <h3 class="stat-number text-primary" data-counter="true" data-target="120" data-suffix="+"
                                data-prefix="">120+</h3>
                            <p class="text-dark fw-bold mb-0">Countries Served</p>
                        </div>
                        <div class="col-6">
                            <h3 class="stat-number text-primary" data-counter="true" data-target="500" data-suffix="+"
                                data-prefix="">500+</h3>
                            <p class="text-dark fw-bold mb-0">Partner Hubs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="operation-map p-4 border rounded-xl shadow-lg bg-light text-center">
                        <img src="{{ asset('images/hero_business_background_1769149735660.png') }}" alt="Global Operations"
                            class="img-fluid rounded shadow-sm">
                        <p class="mt-3 text-muted small"><i class="bi bi-info-circle me-1"></i> Interactive global map
                            coming soon</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Standards Section -->
    <section class="section bg-dark text-white">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2 class="section-title text-white">Operational <span class="text-primary">Benchmark</span></h2>
                <p class="section-subtitle text-light">Quality and safety at the core of our operations</p>
            </div>

            <div class="row g-4 mt-5">
                @php
                    $standards = [
                        ['title' => 'ISO 9001:2015', 'desc' => 'Certified quality management systems for all business verticals.'],
                        ['title' => 'Lean Six Sigma', 'desc' => 'Data-driven approach to eliminate defects and optimize supply chains.'],
                        ['title' => 'Safety First', 'desc' => 'Strict HSE protocols ensuring zero accidents in our facilities.'],
                    ];
                @endphp

                @foreach($standards as $std)
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="benchmark-card business-view">
                            <h4 class="text-white mb-3">{{ $std['title'] }}</h4>
                            <p class="text-light-emphasis small mb-0">{{ $std['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection