@extends('layouts.master')

@section('title', 'Sustainability - ICS Group')
@section('description', 'Our commitment to a sustainable and responsible future for global business.')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down">
                    <h1 class="page-title"><span class="text-primary">Sustainability</span></h1>
                    <p class="page-subtitle">Business growth that honors the planet and people</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ESG Commitment -->
    <section class="section bg-white">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="section-title">ESG <span class="text-primary">Framework</span></h2>
                    <p class="section-text text-dark">
                        Sustainability is not a separate department at ICS Group; it is woven into every business strategy.
                        We measure our success not just by financial metrics, but by our positive impact on the world.
                    </p>
                    <div class="mt-4">
                        <div class="d-flex align-items-center mb-3 p-3 bg-light rounded-md esg-item">
                            <i class="bi bi-tree-fill text-success me-3"></i>
                            <div>
                                <h5 class="mb-0 text-dark">Environmental</h5>
                                <p class="text-muted mb-0">Decarbonizing our logistics and energy solutions.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3 p-3 bg-light rounded-md esg-item">
                            <i class="bi bi-heart-pulse-fill text-danger me-3"></i>
                            <div>
                                <h5 class="mb-0 text-dark">Social</h5>
                                <p class="text-muted mb-0">Investing in community health and education.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center p-3 bg-light rounded-md esg-item">
                            <i class="bi bi-bank2 text-primary me-3"></i>
                            <div>
                                <h5 class="mb-0 text-dark">Governance</h5>
                                <p class="text-muted mb-0">Highest transparency and ethical benchmarks.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="{{ asset('images/technology_innovation_1769149771178.png') }}" alt="Sustainability"
                        class="img-fluid rounded-xl shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Green Logistics -->
    <section class="section bg-dark text-white">
        <div class="container text-center" data-aos="zoom-in">
            <h2 class="section-title text-white">Green <span class="text-primary">Initiatives</span></h2>
            <p class="section-text text-light-emphasis mx-auto mt-4" style="max-width: 800px;">
                By 2030, we aim to reduce our carbon footprint by 40% using electric fleets, solar-powered warehouses, and
                optimized route algorithms.
            </p>
            <div class="row g-4 mt-5">
                <div class="col-md-4">
                    <div class="p-4 border border-light-subtle rounded-lg business-view transition-normal">
                        <h1 class="text-primary mb-2" data-counter="true" data-target="40" data-suffix="%" data-prefix="">
                            40%</h1>
                        <p class="text-light-emphasis mb-0">Emissions Reduction</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border border-light-subtle rounded-lg business-view transition-normal">
                        <h1 class="text-primary mb-2" data-counter="true" data-target="100" data-suffix="%" data-prefix="">
                            100%</h1>
                        <p class="text-light-emphasis mb-0">Solar Logistics Hubs</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border border-light-subtle rounded-lg business-view transition-normal">
                        <h1 class="text-primary mb-2">Zero</h1>
                        <p class="text-light-emphasis mb-0">Single-use Plastic Policy</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection