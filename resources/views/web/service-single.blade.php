@extends('web.layouts.master')
@section('title', 'Industrial Solutions | ICS Group')
@section('meta_description', 'ICS Group delivers reliable and innovative industrial solutions designed to enhance efficiency, performance, and sustainable growth across diverse sectors.')

@section('content')

    <!-- Start Breadcrumb 
        ============================================= -->
    <div class="breadcrumb-area text-center shadow dark text-light bg-cover"
        style="background-image: url({{ asset('web_assets/img/2440x1578.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Services Single</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Services</a></li>
                        <li class="active">Single</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Star Services Details Area
        ============================================= -->
    <div class="services-details-area default-padding">
        <div class="container">
            <div class="services-details-items">
                <div class="row">

                    <div class="col-lg-8 services-single-content">
                        <img src="{{ asset('web_assets/img/1500x700.png') }}" alt="Thumb">
                        <h2>Creative & Digital ideas</h2>
                        <p>
                            We denounce with righteous indige nation and dislike men who are so beguiled and demo realized
                            by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain
                            and trouble that are bound to ensue cannot foresee. These cases are perfectly simple and easy to
                            distinguish. In a free hour, when our power of choice is untrammelled data structures manages
                            data in technology.
                        </p>
                        <div class="features">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="content">
                                        <h4>Finance Restructuring</h4>
                                        <p>
                                            These cases are perfectly simple and easy to distinguish. In a free hour, when
                                            our power of choice is untrammelled.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="content">
                                        <h4>International Markets</h4>
                                        <p>
                                            These cases are perfectly simple and easy to distinguish. In a free hour, when
                                            our power of choice is untrammelled.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>
                            Nam libero tempore, cum soluta nobis est elig endi optio cumque nihil impedit quo minus id quod
                            maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repelle ndus.
                            Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et
                            voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a
                            sapiente delectus, ut aut reiciendis voluptatibus maiores alias. consequatur aut perferendis
                            doloribus asperiores repellat. The wise man therefore always holds in these matters to this
                            principle of selection: he rejects pleasures to secure other greater pleasures, or else he
                            endures pains to avoid worse pains. pleasures have to be repudiated and annoyances accepted.
                        </p>
                        <h2>Corporate identity</h2>
                        <ul>
                            <li>How will digital activities impact traditional manufacturing.</li>
                            <li>All these digital elements and projects aim to enhance .</li>
                            <li>I monitor my staff with software that takes screenshots.</li>
                            <li>Laoreet dolore magna niacin sodium glutimate aliquam hendrerit.</li>
                            <li>Minim veniam quis niacin sodium glutimate nostrud exerci dolor.</li>
                        </ul>
                    </div>

                    <div class="col-lg-4 services-sidebar">
                        <!-- Single Widget -->
                        <div class="single-widget services-list">
                            <h4 class="widget-title">Services List</h4>
                            <div class="content">
                                <ul>
                                    <li class="current-item"><a href="#">Social Media marketing</a></li>
                                    <li><a href="#">Content Marketing</a></li>
                                    <li><a href="#">Competitor Research</a></li>
                                    <li><a href="#">Keyward Research</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Widget -->
                        <div class="single-widget quick-contact text-light"
                            style="background-image: url({{ asset('web_assets/img/800x800.png') }});">
                            <div class="content">
                                <i class="fas fa-phone"></i>
                                <h4>Need any help?</h4>
                                <p>
                                    We are here to help our customer any time. You can call on 24/7 To Answer Your Question.
                                </p>
                                <h2>(012) 6679545</h2>
                            </div>
                        </div>
                        <!-- Single Widget -->
                        <div class="single-widget brochure">
                            <h4 class="widget-title">Brochure</h4>
                            <ul>
                                <li><a href="#"><i class="fas fa-file-pdf"></i> Download Brochure </a></li>
                                <li><a href="#"><i class="fas fa-file-pdf"></i> Company Details </a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Services Details Area -->

@endsection