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
    <link rel="shortcut icon" href="{{ $setting->favicon ?? asset('web_assets/img/favicon.ico') }}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    @include('admin.layouts.partials.style')
    @stack('styles')
    <!-- ========== End Stylesheet ========== -->

</head>

<body>
    <div class="wrapper">

        @include('admin.layouts.partials.header')
        @include('admin.layouts.partials.sidebar')

        @yield('content')

        <div class="overlay nav-toggle-icon"></div>
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    </div>

    <!-- Icon Picker Modal -->
    <div class="modal fade" id="iconPickerModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content radius-10">
                <div class="modal-header border-bottom-0 pb-0">
                    <h5 class="modal-title fw-bold"><i class="bx bx-grid-alt me-2"></i>Select an Icon</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-3">
                    <div class="row align-items-center mb-4">
                        <div class="col-lg-8">
                            <ul class="nav nav-pills nav-pills-custom gap-2" id="iconTabs" role="tablist">
                                <li class="nav-item py-2 px-4 shadow-sm radius-10 border text-center" id="iconLoading">
                                    <div class="spinner-border spinner-border-sm text-primary" role="status"></div>
                                    <span class="ms-2 small">Loading icons...</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4 mt-3 mt-lg-0">
                            <div class="position-relative">
                                <input type="text" id="iconSearch" class="form-control radius-10 ps-5" placeholder="Search icons...">
                                <span class="position-absolute top-50 translate-middle-y start-0 ms-3"><i class="bx bx-search fs-5"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content mt-2" id="iconTabContent" style="min-height: 400px;">
                        <!-- Dynamically filled by JS -->
                    </div>
                </div>
                <div class="modal-footer border-top-0 pt-0">
                    <button type="button" class="btn btn-light radius-10 px-4" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary radius-10 px-4" id="btnSelectIcon" disabled>Select Icon</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Player Modal -->
    <div class="modal fade" id="videoPlayerModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content overflow-hidden radius-10 border-0">
                <div class="modal-body p-0 bg-dark">
                    <div class="ratio ratio-16x9">
                        <iframe id="videoPlayerIframe" src="" title="Video Player" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="modal-footer bg-dark border-0 py-2">
                    <button type="button" class="btn btn-sm btn-light radius-10" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery Frameworks
    ============================================= -->
    @include('admin.layouts.partials.javascript')
    @stack('scripts')

</body>

</html>