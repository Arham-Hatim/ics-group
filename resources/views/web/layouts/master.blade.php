<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description', 'Corporate Website')">

    <!-- ========== Page Title ========== -->
    <title>@yield('title', 'ICS Group')</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('web_assets/img/favicon.png') }}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    @include('web.layouts.partials.style')
    @stack('styles')
    <!-- ========== End Stylesheet ========== -->

</head>

<body class="torch-red">

    <!-- Start Preloader 
    ============================================= -->
    @include('web.layouts.partials.preloader')
    <!-- End Preloader -->

    <!-- Header 
    ============================================= -->
    @if(!empty($innerHeader))
        @include('web.layouts.partials.inner-header')
    @else
        @include('web.layouts.partials.header')
    @endif
    <!-- End Header -->


    @yield('content')

    <!-- Start Footer 
    ============================================= -->
    @include('web.layouts.partials.footer')
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    @include('web.layouts.partials.javascript')
    @stack('scripts')

</body>

</html>