<footer class="footer">
    <div class="footer-main">
        <div class="footer-left">
            <div class="container">
                <div class="footer-widget">
                    <div class="footer-logo-wrapper mb-4">
                        <img src="{{ asset('images/logo.png') }}" alt="ICS Group" class="footer-logo">
                    </div>
                    <p class="footer-description">
                        The ICS Group opened its offices in Karachi in 1983, building and maintaining a solid
                        network for all its logistical needs. With total dedication, it has made a leading name in
                        logistics, pharma, distribution, information technology, and automobiles.
                    </p>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-right">
            <div class="container">
                <div class="row g-4">
                    <!-- Quick Links -->
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <h5 class="footer-title">Quick Links</h5>
                            <ul class="footer-links">
                                <li><a href="{{ route('about.strategy') }}">Our Strategy</a></li>
                                <li><a href="{{ route('about.people') }}">Our People</a></li>
                                <li><a href="{{ route('business.verticals') }}">Business Verticals</a></li>
                                <li><a href="{{ route('business.operations') }}">Operations</a></li>
                                <li><a href="{{ route('sustainability') }}">Sustainability</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Our Services -->
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <h5 class="footer-title">Our Services</h5>
                            <ul class="footer-links">
                                <li><a href="{{ route('services') }}">Logistics & Supply Chain</a></li>
                                <li><a href="{{ route('services') }}">Pharmaceutical Solutions</a></li>
                                <li><a href="{{ route('services') }}">Technology Services</a></li>
                                <li><a href="{{ route('services') }}">Automotive Solutions</a></li>
                                <li><a href="{{ route('services') }}">Security Services</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="col-lg-4 col-md-12">
                        <div class="footer-widget">
                            <h5 class="footer-title">Contact Us</h5>
                            <ul class="footer-contact">
                                <li>
                                    <i class="bi bi-geo-alt-fill"></i>
                                    <span>1st Floor, Shafi Court, Merewether Road Civil Lines, Karachi-Pakistan</span>
                                </li>
                                <li>
                                    <i class="bi bi-telephone-fill"></i>
                                    <span>(+92) 21 111 565 565</span>
                                </li>
                                <li>
                                    <i class="bi bi-printer-fill"></i>
                                    <span>(+92) 21 35671068</span>
                                </li>
                                <li>
                                    <i class="bi bi-envelope-fill"></i>
                                    <span>info@icsgroup.com.pk</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row footer-bottom-row align-items-center text-center text-lg-start">
                <div class=" footer-bottom-child col-lg-6 col-md-12 mb-2 mb-lg-0">
                    <p class="copyright mb-0">
                        &copy; {{ date('Y') }} ICS Group. All rights reserved.
                    </p>
                </div>

                <div class="footer-bottom-child col-lg-6 col-md-12">
                    <ul class="footer-bottom-links justify-content-center justify-content-lg-end">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('sustainability') }}">Sustainability</a></li>
                        <li><a href="{{ route('newsroom') }}">Newsroom</a></li>
                        <li><a href="{{ route('careers') }}">Careers</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>