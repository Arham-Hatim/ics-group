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
                    <p class="page-subtitle">Decades of innovation and growth</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="section bg-white py-5">
        <div class="container">
            <div class="timeline-wrapper position-relative">
                <!-- Center Line -->
                <div class="timeline-line d-none d-md-block"
                    style="position: absolute; left: 50%; top: 0; bottom: 0; width: 4px; background: #eee; transform: translateX(-50%);">
                </div>

                @php
                    $milestones = [
                        ['year' => '1983', 'title' => 'The Beginning', 'desc' => 'Inception in Karachi with a focus on logistical excellence.', 'align' => 'left'],
                        ['year' => '1995', 'title' => 'Regional Expansion', 'desc' => 'Expanded operations across Pakistan and established key partnerships.', 'align' => 'right'],
                        ['year' => '2005', 'title' => 'Diversification', 'desc' => 'Entry into Pharma, Information Technology, and Security sectors.', 'align' => 'left'],
                        ['year' => '2015', 'title' => 'Digital Transformation', 'desc' => 'Launched advanced supply chain tracking and cloud-based tech solutions.', 'align' => 'right'],
                        ['year' => '2023', 'title' => 'Global Integration', 'desc' => 'Connected over 120 countries served with integrated business models.', 'align' => 'left'],
                        ['year' => '2026', 'title' => 'Next Era', 'desc' => 'Investing in sustainable infrastructure and AI-driven growth.', 'align' => 'right'],
                    ];
                @endphp

                @foreach($milestones as $item)
                    <div class="timeline-item mb-5 row align-items-center"
                        data-aos="{{ $item['align'] == 'left' ? 'fade-right' : 'fade-left' }}">
                        <div class="col-md-5 {{ $item['align'] == 'right' ? 'order-md-3' : '' }}">
                            <div
                                class="timeline-card p-4 rounded-lg shadow-sm {{ $item['align'] == 'left' ? 'text-md-end' : '' }} bg-light">
                                <span class="badge bg-primary mb-2">{{ $item['year'] }}</span>
                                <h4 class="mb-2 text-dark">{{ $item['title'] }}</h4>
                                <p class="text-muted mb-0">{{ $item['desc'] }}</p>
                            </div>
                        </div>
                        <div class="col-md-2 text-center position-relative d-none d-md-block order-md-2">
                            <div class="timeline-dot transition-hover"
                                style="width: 20px; height: 20px; background: var(--color-primary); border-radius: 50%; display: inline-block; z-index: 5; position: relative; border: 4px solid #fff; box-shadow: var(--shadow-sm);">
                            </div>
                        </div>
                        <div class="col-md-5 {{ $item['align'] == 'left' ? 'order-md-3' : '' }}"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Legacy Statement -->
    <section class="section bg-dark text-white">
        <div class="container text-center" data-aos="zoom-in">
            <h2 class="section-title text-white">Built to <span class="text-primary">Last</span></h2>
            <p class="section-text text-light-emphasis mx-auto mt-4" style="max-width: 800px;">
                From a small logistical office to a global business powerhouse, ICS Group's journey is a testament to the
                power of vision, integrity, and relentless innovation.
            </p>
            <div class="mt-5 d-flex justify-content-center gap-3">
                <a href="{{ route('about') }}" class="btn btn-outline-light btn-lg">Back to Overview</a>
                <a href="{{ route('about.strategy') }}" class="btn btn-primary btn-lg">Our Strategy</a>
                <a href="{{ route('about.people') }}" class="btn btn-primary btn-lg">Our People</a>
            </div>
        </div>
    </section>
@endsection