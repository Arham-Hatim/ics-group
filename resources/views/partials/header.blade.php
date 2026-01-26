<header class="header" id="header">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="ICS Group" class="logo-img">
            </a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-btn {{ request()->routeIs('home') ? 'active' : '' }}"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-btn {{ request()->routeIs('business-community') ? 'active' : '' }}"
                            href="{{ route('business-community') }}">Business Community</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-btn {{ request()->routeIs('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-btn {{ request()->routeIs('newsroom') ? 'active' : '' }}"
                            href="{{ route('newsroom') }}">Newsroom</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-btn {{ request()->routeIs('careers') ? 'active' : '' }}"
                            href="{{ route('careers') }}">Careers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-btn {{ request()->routeIs('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn-primary ms-lg-3">Get Started</a>
            </div>
        </div>
    </nav>
</header>
