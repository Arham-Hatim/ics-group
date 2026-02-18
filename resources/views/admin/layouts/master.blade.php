<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description', 'Admin Panel')">

    <title>@yield('title', 'Admin Panel | ICS Group')</title>

    <link rel="shortcut icon" href="{{ asset('web_assets/img/favicon.png') }}" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('admin/css/admin.css') }}" rel="stylesheet" />
    @stack('styles')
</head>

<body class="admin-panel">
    <div class="admin-wrapper">
        @include('admin.layouts.partials.sidebar')

        <div class="admin-main">
            @include('admin.layouts.partials.header')

            <main class="admin-content">
                @yield('content')
            </main>

            @include('admin.layouts.partials.footer')
        </div>
    </div>

    <script src="{{ asset('admin/js/admin.js') }}"></script>
    @stack('scripts')
</body>

</html>

