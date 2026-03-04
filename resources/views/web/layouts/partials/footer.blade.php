<footer class="bg-dark text-light">
    <div class="container">
        <div class="f-items default-padding">
            <div class="row">
                <div class="col-lg-4 col-md-6 item">
                    <div class="f-item about">
                        <img src="{{ $contact->white_logo ?? asset('web_assets/img/logo-light.png') }}" alt="Logo">
                        <p>
                            {{ $contact->description ?? 'We are a diversified business conglomerate committed to delivering excellence across multiple sectors including pharmaceuticals, logistics, automobile, security, energy, and trading.' }}
                        </p>
                        <form action="#">
                            <input type="email" placeholder="Your Email" class="form-control" name="email">
                            <button type="submit"> <i class="arrow_right"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 item">
                    <div class="f-item link">
                        <h4 class="widget-title">Quick LInk</h4>
                        <ul>
                            <li>
                                <a href="#"><i class="fas fa-angle-right"></i> Home</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-right"></i> About us</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-right"></i> Compnay History</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-right"></i> Features</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-right"></i> Blog Page</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-right"></i> Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 item">
                    <div class="f-item link">
                        <h4 class="widget-title">Community</h4>
                        <ul>
                            <li>
                                <a href="#"><i class="fas fa-angle-right"></i> Career</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-right"></i> Leadership</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-right"></i> Strategy</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-right"></i> Services</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-right"></i> History</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-right"></i> Components</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 item">
                    <div class="f-item contact-widget">
                        <h4 class="widget-title">Contact Info</h4>
                        <div class="address">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-home"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Address:</strong>
                                        {{ $contact->address ?? '1st Floor, Shafi Court, Merewether Road, Civil Lines, Karachi-Pakistan' }}
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Email:</strong>
                                        <a href="mailto:{{ $contact->email ?? 'info@icsgroup.com.pk' }}">{{
                                            $contact->email ?? 'info@icsgroup.com.pk' }}</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Phone:</strong>
                                        <a
                                            href="tel:{{ $contact->phone ?? '(+92)21 111 565 565' }}">{{ $contact->phone ?? '(+92)21 111 565 565' }}</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-box">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright {{ date('Y') }}.
                            {{ $contact->copy_right ?? 'All Rights Reserved by ICS Group' }}
                        </p>
                    </div>
                    <div class="col-lg-6 text-right link">
                        <ul>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->
</footer>