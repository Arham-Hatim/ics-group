@extends('layouts.master')

@section('title', 'Business Verticals - ICS Group')
@section('description', 'Explore the diverse sectors where ICS Group leads with innovation and excellence.')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down">
                    <h1 class="page-title">Business <span class="text-primary">Verticals</span></h1>
                    <p class="page-subtitle">Leading industries with cross-sector expertise</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Verticals Detail Section -->
    <section class="section bg-white overflow-hidden">
        <div class="container">
            @php
                $verticals = [
                    [
                        'icon' => 'bi-truck',
                        'title' => 'Logistics & Supply Chain',
                        'subtitle' => 'Global End-to-End Solutions',
                        'desc' => 'Our flagship vertical, ICS Logistics, leverages 40+ years of heritage to provide unparalleled clearing, forwarding, and multi-modal transport solutions. We specialize in complex supply chain optimizations that drive efficiency and transparency.',
                        'image' => 'hero-bg.jpg',
                        'features' => ['Freight Forwarding', 'Customized Logistics', 'Inland Distribution', 'Supply Chain Support']
                    ],
                    [
                        'icon' => 'bi-capsule',
                        'title' => 'Pharmaceuticals',
                        'subtitle' => 'Critical Care & Distribution',
                        'desc' => 'AJM Pharma is a cornerstone of our group, focusing on lifesaving medications across Oncology, Gastroenterology, and Nephrology. We maintain rigorous cold-chain standards and a nationwide distribution network.',
                        'image' => 'about-preview.jpg',
                        'features' => ['Specialized Cold-Chain', 'Oncology & Thalassaemia', 'Nationwide Network', 'Ethical Distribution']
                    ],
                    [
                        'icon' => 'bi-code-square',
                        'title' => 'Information Technology',
                        'subtitle' => 'Driving Digital Transformation',
                        'desc' => 'We empower organizations with next-gen technology infrastructure and customized software solutions. From cloud migration to AI-driven insights, we build the digital foundations for future-ready enterprises.',
                        'image' => 'solutions_software_1769149838299.png',
                        'features' => ['IT Infrastructure', 'Software development', 'Digital Transformation', 'Cybersecurity']
                    ],
                    [
                        'icon' => 'bi-car-front-fill',
                        'title' => 'Automobiles',
                        'subtitle' => 'Excellence in Mobility',
                        'desc' => 'Through Toyota Creek and our collaboration with Deinfa Motors, we provide world-class automotive sales and after-sales service. Our commitment to quality and customer satisfaction remains the highest in the region.',
                        'image' => 'company-building.jpg',
                        'features' => ['Certified After-Sales', 'Genuine Spare Parts', 'Modern Showrooms', 'Expert Technicians']
                    ],
                    [
                        'icon' => 'bi-shield-lock',
                        'title' => 'Security Services',
                        'subtitle' => 'Integrated Protection Systems',
                        'desc' => 'ZSS delivers proactive security solutions, upholding the highest standards of discipline and training. We protect critical assets and personnel through a blend of physical presence and digital monitoring.',
                        'image' => 'technology_innovation_1769149771178.png',
                        'features' => ['Asset Protection', 'Executive Security', 'Surveillance Systems', 'Discipline & Excellence']
                    ]
                ];
            @endphp

            @foreach($verticals as $index => $v)
                <div
                    class="row align-items-center g-5 {{ $index > 0 ? 'mt-5 pt-5' : '' }} {{ $index % 2 != 0 ? 'flex-lg-row-reverse' : '' }}">
                    <div class="col-lg-6" data-aos="{{ $index % 2 == 0 ? 'fade-right' : 'fade-left' }}">
                        <div class="vertical-content-box">
                            <div class="icon-box-red mb-4 ms-0">
                                <i class="bi {{ $v['icon'] }} fs-2"></i>
                            </div>
                            <span
                                class="text-primary fw-bold text-uppercase tracking-wider small d-block mb-2">{{ $v['subtitle'] }}</span>
                            <h2 class="section-title mb-4" style="text-align: left;">{{ $v['title'] }}</h2>
                            <p class="section-text text-dark mb-4">
                                {{ $v['desc'] }}
                            </p>
                            <div class="row g-3">
                                @foreach($v['features'] as $feature)
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                            <span class="small fw-semibold text-muted">{{ $feature }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="{{ $index % 2 == 0 ? 'fade-left' : 'fade-right' }}">
                        <div class="premium-card p-0 overflow-hidden shadow-lg border-0 transition-hover">
                            <img src="{{ asset('images/' . $v['image']) }}" alt="{{ $v['title'] }}"
                                class="img-fluid w-100 object-fit-cover" style="height: 400px;">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Synergies Section -->
    <section class="section bg-dark text-white">
        <div class="container text-center" data-aos="zoom-in">
            <h2 class="section-title text-white">Cross-Sector <span class="text-primary">Synergy</span></h2>
            <p class="section-text text-light-emphasis mx-auto mt-4" style="max-width: 800px;">
                Our verticals don't operate in isolation. We leverage the strengths of each sector to provide holistic,
                integrated solutions that create exponential value for our stakeholders.
            </p>
        </div>
    </section>
@endsection