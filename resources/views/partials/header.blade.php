<header class="header" id="header">
    <nav class="navbar navbar-expand-lg navbar-dark w-100">
        <div class="container">
            <!-- Brand/Logo -->
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="ICS Group" class="logo-img">
            </a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Menu -->
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <div></div> <!-- Spacer for equal distribution -->
                <ul class="navbar-nav align-items-lg-center">
                    <!-- Who we are Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-btn {{ request()->routeIs('about*') ? 'active' : '' }}"
                            href="#" id="navbarDropdownWho" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Who we are
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownWho">
                            <li><a class="dropdown-item {{ request()->routeIs('about') && !request()->routeIs('about.strategy') && !request()->routeIs('about.people') && !request()->routeIs('about.journey') ? 'active' : '' }}"
                                    href="{{ route('about') }}">Overview</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('about.strategy') ? 'active' : '' }}"
                                    href="{{ route('about.strategy') }}">Our strategy and values</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('about.people') ? 'active' : '' }}"
                                    href="{{ route('about.people') }}">Our people</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('about.journey') ? 'active' : '' }}"
                                    href="{{ route('about.journey') }}">Our journey</a></li>
                        </ul>
                    </li>

                    <!-- What we do Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-btn {{ request()->routeIs('business.*') || request()->routeIs('business-community') ? 'active' : '' }}"
                            href="#" id="navbarDropdownWhat" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            What we do
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownWhat">
                            <li><a class="dropdown-item {{ request()->routeIs('business-community') ? 'active' : '' }}"
                                    href="{{ route('business-community') }}">Business Overview</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('business.verticals') ? 'active' : '' }}"
                                    href="{{ route('business.verticals') }}">Business Verticals</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('business.operations') ? 'active' : '' }}"
                                    href="{{ route('business.operations') }}">Our Operations</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link nav-btn {{ request()->routeIs('sustainability') ? 'active' : '' }}"
                            href="{{ route('sustainability') }}">Sustainability</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-btn {{ request()->routeIs('newsroom') ? 'active' : '' }}"
                            href="{{ route('newsroom') }}">News and views</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-btn {{ request()->routeIs('careers') ? 'active' : '' }}"
                            href="{{ route('careers') }}">Careers</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Get Started</a>
                </div>
            </div>
        </div>
    </nav>
</header>