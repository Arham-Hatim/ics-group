@extends('web.layouts.master')
@section('title', 'Page Not Found - ICS Group')
@section('meta_description', 'Oops! The page you are looking for cannot be found. Return to the ICS Group homepage or explore our services, news, and team pages.')

@section('content')
    <!-- Start Breadcrumb 
            ============================================= -->
    {{--<div class="breadcrumb-area text-center shadow dark text-light bg-cover"
        style="background-image: url({{ asset('web_assets/img/2440x1578.png') }});">--}}
        <div class="breadcrumb-area text-center shadow dark text-light bg-cover"
            style="background-image: url({{ asset('web_assets/ics-images/error/banner.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h1>Error Page</h1>
                        <ul class="breadcrumb">
                            <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">404</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->

        <!-- Start 404 
            ============================================= -->
        <div class="error-page-area relative text-center"
            style="background-image: url({{ asset('web_assets/img/shape/1.jpg') }});">
            <div class="container">
                <div class="error-box default-padding">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <h1>404</h1>
                            <h2>Sorry Page Was Not Found!</h2>
                            <p>
                                Household shameless incommode at no objection behaviour. Especially do at he possession
                                insensible sympathize boisterous it. Songs he on an widen me event truth.
                            </p>
                            <div class="search">
                                <div class="input-group">
                                    <form action="#">
                                        <input type="text" placeholder="Search" class="form-control" name="text">
                                        <button type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End 404 -->
@endsection