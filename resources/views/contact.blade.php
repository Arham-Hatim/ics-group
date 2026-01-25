@extends('layouts.master')

@section('title', 'Contact Us - ICS Group')
@section('description', 'Get in touch with ICS Group. We\'re here to answer your questions and discuss your project needs.')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down">
                    <h1 class="page-title">Contact <span class="text-primary">Us</span></h1>
                    <p class="page-subtitle">We'd love to hear from you</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="row g-5">
                <!-- Contact Information -->
                <div class="col-lg-4" data-aos="fade-right">
                    <div class="contact-info-wrapper">
                        <h3 class="contact-info-title">Get in Touch</h3>
                        <p class="contact-info-text">Have a question or want to work together? We're here to help!</p>

                        <div class="contact-info-items">
                            @foreach($contact_info as $info)
                                <div class="contact-info-item">
                                    <div class="contact-info-icon">
                                        <i class="bi {{ $info['icon'] }}"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>{{ $info['title'] }}</h5>
                                        <p>{{ $info['content'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="contact-social">
                            <h5>Follow Us</h5>
                            <div class="social-links">
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-8" data-aos="fade-left">
                    <div class="contact-form-wrapper">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="bi bi-check-circle-fill me-2"></i>
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{ route('contact.submit') }}" method="POST" class="contact-form">
                            @csrf

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Full Name *</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name" value="{{ old('name') }}" required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email Address *</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" value="{{ old('email') }}" required>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control @error('phone') is-invalid @enderror"
                                            id="phone" name="phone" value="{{ old('phone') }}">
                                        @error('phone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="subject" class="form-label">Subject *</label>
                                        <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                            id="subject" name="subject" value="{{ old('subject') }}" required>
                                        @error('subject')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="message" class="form-label">Message *</label>
                                        <textarea class="form-control @error('message') is-invalid @enderror" id="message"
                                            name="message" rows="6" required>{{ old('message') }}</textarea>
                                        @error('message')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        <i class="bi bi-send-fill me-2"></i>Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section (Optional) -->
    <section class="map-section">
        <div class="container-fluid p-0">
            <div class="map-placeholder" data-aos="fade-up">
                <iframe
                    src="https://maps.google.com/maps?q=1st%20Floor%2C%20Shafi%20Court%2C%20Merewether%20Road%20Civil%20Line%2C%20Civil%20Lines%2C%20Karachi%2C%2074200&t=&z=15&ie=UTF8&iwloc=&output=embed"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
@endsection