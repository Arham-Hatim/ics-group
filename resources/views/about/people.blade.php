@extends('layouts.master')

@section('title', 'Our People - ICS Group')
@section('description', 'Discover the multicultural workforce and visionary leadership powering ICS Group.')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down">
                    <h1 class="page-title">Our <span class="text-primary">People</span></h1>
                    <p class="page-subtitle">The driving force behind our global success</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Culture Section -->
    <section class="section bg-white">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="section-title">A Culture of <span class="text-primary">Empowerment</span></h2>
                    <p class="section-text text-dark">
                        At ICS Group, we believe that diversity is our greatest strength. Our multicultural workforce,
                        spanning over 120 countries, brings together unique perspectives that drive innovation and creative
                        problem-solving.
                    </p>
                    <div class="row g-3 mt-4">
                        <div class="col-6">
                            <div class="p-3 border-start border-4 border-primary bg-light">
                                <h4 class="mb-1 text-dark">Multicultural</h4>
                                <p class="small text-muted mb-0">Diverse perspectives</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 border-start border-4 border-primary bg-light">
                                <h4 class="mb-1 text-dark">Inclusion</h4>
                                <p class="small text-muted mb-0">United by excellence</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="{{ asset('images/business_meeting_team_1769149751576.png') }}" alt="Team Culture"
                        class="img-fluid rounded-xl shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Talent Development -->
    <section class="section bg-dark text-white">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2 class="section-title text-white">Talent <span class="text-primary">Development</span></h2>
                <p class="section-subtitle text-light">Investing in the leaders of tomorrow</p>
            </div>

            <div class="row g-4 mt-5">
                <div class="col-lg-4" data-aos="flip-left" data-aos-delay="100">
                    <div class="feature-box text-center p-5 border-light-subtle rounded-lg bg-white-5 shadow-sm">
                        <div class="fs-1 text-primary mb-3"><i class="bi bi-journal-check"></i></div>
                        <h4 class="text-white">Continuous Learning</h4>
                        <p class="text-light-emphasis">Internal academy and specialized certifications for all career
                            stages.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="flip-left" data-aos-delay="200">
                    <div class="feature-box text-center p-5 border-light-subtle rounded-lg bg-white-5 shadow-sm">
                        <div class="fs-1 text-primary mb-3"><i class="bi bi-briefcase"></i></div>
                        <h4 class="text-white">Career Mobility</h4>
                        <p class="text-light-emphasis">Opportunities to work across different business verticals and global
                            regions.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="flip-left" data-aos-delay="300">
                    <div class="feature-box text-center p-5 border-light-subtle rounded-lg bg-white-5 shadow-sm">
                        <div class="fs-1 text-primary mb-3"><i class="bi bi-trophy"></i></div>
                        <h4 class="text-white">Recognition</h4>
                        <p class="text-light-emphasis">Merit-based reward systems that celebrate individual and team
                            milestones.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Team -->
    <section class="section bg-light">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Visionary <span class="text-primary">Leadership</span></h2>
                <p class="section-subtitle">Dedicated professionals guiding our global mission</p>
            </div>

            <div class="row g-4">
                @foreach($team as $member)
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="team-card h-100">
                            <div class="team-image">
                                <img src="{{ asset('images/' . $member['image']) }}" alt="{{ $member['name'] }}"
                                    class="img-fluid">
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

    <!-- Diversity Section -->
    <section class="section bg-white">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                    <h2 class="section-title">Diversity & <span class="text-primary">Inclusion</span></h2>
                    <p class="section-text text-dark">
                        Equal opportunity is not just a policy at ICS Group; it is the cornerstone of our identity. We
                        actively foster an environment where every voice is heard, and every individual is given the
                        platform to excel.
                    </p>
                    <ul class="feature-list mt-4 text-dark">
                        <li><i class="bi bi-check-circle-fill text-primary"></i> 40% Leadership Diversity Goal</li>
                        <li><i class="bi bi-check-circle-fill text-primary"></i> Global Mentorship Programs</li>
                        <li><i class="bi bi-check-circle-fill text-primary"></i> Inclusive Workplace Policies</li>
                    </ul>
                </div>
                <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                    <img src="{{ asset('images/about_leadership_1769149854566.png') }}" alt="Diversity"
                        class="img-fluid rounded-xl shadow-lg">
                </div>
            </div>
        </div>
    </section>
@endsection