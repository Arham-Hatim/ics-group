@extends('web.layouts.master')
@section('title', 'Contact Us | ICS Group')
@section('meta_description', 'Get in touch with ICS Group. Contact our team for inquiries, support, or business opportunities, and let us provide reliable solutions tailored to your needs.')

@section('content')

    <!-- Start Breadcrumb 
            ============================================= -->
    {{--<div class="breadcrumb-area text-center shadow dark text-light bg-cover"
        style="background-image: url({{ asset('web_assets/img/2440x1578.png') }});">--}}
        <div class="breadcrumb-area text-center shadow dark text-light bg-cover"
            style="background-image: url({{ asset('web_assets/ics-images/contact/banner.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h1>Contact Us</h1>
                        <ul class="breadcrumb">
                            <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->

        <!-- Start Contact Area 
            ============================================= -->
        <div class="contact-us-area default-padding">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-5 info">
                        <div class="content">
                            <h2>Let's talk?</h2>
                            <p>
                                It's all about the humans behind a brand and those experiencing it, we're right there. In
                                the
                                middle performance quick.
                            </p>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h5>Address</h5>
                                        <p>
                                            22 Baker Street, <br> London, United Kingdom, <br> W1U 3BW
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <h5>Contact</h5>
                                        <p>
                                            +44-20-7328-4499 <br> +99-34-8878-9989
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 contact-form-box">
                        <div class="form-box">
                            <form action="{{ asset('web_assets/mail/contact.php') }}" method="POST" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" id="name" name="name" placeholder="Name"
                                                type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="email" name="email" placeholder="Email*"
                                                type="email">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="phone" name="phone" placeholder="Phone"
                                                type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group comments">
                                            <textarea class="form-control" id="comments" name="comments"
                                                placeholder="Tell Us About Project *"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" name="submit" id="submit">
                                            Send Message <i class="fa fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- Alert Message -->
                                <div class="col-lg-12 alert-notification">
                                    <div id="message" class="alert-msg"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Area -->

        <!-- Star Google Maps
            ============================================= -->
        <div class="maps-area">
            <div class="google-maps">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe>
            </div>
        </div>
        <!-- End Google Maps -->

@endsection