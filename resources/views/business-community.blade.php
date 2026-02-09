@extends('layouts.master')

@section('title', 'Business Community - ICS Group')
@section('description', 'Join the ICS Group business community and explore our network of partners and collaborators.')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down">
                    <h1 class="page-title">Business <span class="text-primary">Community</span></h1>
                    <p class="page-subtitle">Building a strong network for sustainable growth and innovation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Community Overview -->
    <section class="community-overview-section py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="section-header">
                        <h2 class="section-title">A Network of <span class="text-primary">Excellence</span></h2>
                        <p class="section-text">
                            At ICS Group, we believe in the power of collaboration. Our business community is a vibrant
                            ecosystem of partners, clients, and industry experts working together to drive innovation and
                            create value across multiple sectors.
                        </p>
                        <p class="section-text">
                            From logistics to pharmaceuticals, our network spans diverse industries, enabling us to deliver
                            comprehensive solutions that meet the evolving needs of the global market.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="community-image">
                        <img src="{{ asset('images/business_meeting_team_1769149751576.png') }}" alt="Business Community"
                            class="img-fluid rounded shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Community Benefits -->
    <section class="community-benefits-section bg-light py-5">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Why Join Our <span class="text-primary">Community</span></h2>
                <p class="section-subtitle">Experience the advantages of being part of a global leader.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="premium-card text-center p-4 transition-hover">
                        <i class="bi bi-people-fill mb-3" style="font-size: 3rem; color: var(--color-primary);"></i>
                        <h3>Global Network</h3>
                        <p>Access a vast network of international partners and industry leaders.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="premium-card text-center p-4 transition-hover">
                        <i class="bi bi-lightbulb-fill mb-3" style="font-size: 3rem; color: var(--color-primary);"></i>
                        <h3>Innovation Hub</h3>
                        <p>Collaborate on cutting-edge projects and drive digital transformation.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="premium-card text-center p-4 transition-hover">
                        <i class="bi bi-graph-up-arrow mb-3" style="font-size: 3rem; color: var(--color-primary);"></i>
                        <h3>Growth Opportunities</h3>
                        <p>Unlock new business avenues and scale your operations globally.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content text-center" data-aos="zoom-in">
                <h2 class="cta-title">Ready to be part of our community?</h2>
                <p class="cta-subtitle">Join us in building a coherent and vibrant group of divergent companies.</p>
                <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Get in Touch</a>
            </div>
        </div>
    </section>
@endsection