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
    @include('admin.layouts.partials.style')
    @stack('styles')
    <!-- ========== End Stylesheet ========== -->

</head>

<body>
    <div class="wrapper">

        @include('admin.layouts.partials.header')
        
        <aside class="sidebar-wrapper" data-simplebar="true">
        </aside>

        <main class="page-content">
            @yield('content')
        </main>

        <div class="overlay nav-toggle-icon"></div>
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>

    </div>

    <!-- jQuery Frameworks
    ============================================= -->
    @include('admin.layouts.partials.javascript')
    @stack('scripts')

</body>

</html>