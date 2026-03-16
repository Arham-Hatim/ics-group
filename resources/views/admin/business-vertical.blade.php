@extends('admin.layouts.master')
@section('title', 'Business Verticals Page | ICS Group')
@section('meta_description', 'Manage the Business Verticals page content from the ICS Group admin panel.')

@section('content')
    <main class="page-content">

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-4">
            <div class="breadcrumb-title pe-3">Business Verticals Page</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Business Verticals</li>
                    </ol>
                </nav>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success border-0 bg-success alert-dismissible fade show radius-10">
                <div class="text-white">{{ session('success') }}</div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show radius-10">
                <div class="text-white">{{ session('error') }}</div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show radius-10">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li class="text-white">{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="{{ route('admin.business-vertical.update') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- ══════════════════════════════════════════════════════════════
            SECTION 1 — BANNER
            ══════════════════════════════════════════════════════════════════ --}}
            <div class="row g-4 mb-4">
                <div class="col-12">
                    <div class="card border-0 shadow-sm radius-10">
                        <div class="card-body p-4">
                            <h5 class="fw-bold mb-1">Banner Section</h5>
                            <p class="text-muted small mb-4">Controls the hero banner at the top of the Business Verticals
                                page.</p>
                            <div class="row g-3">
                                {{-- Banner Image --}}
                                <div class="col-lg-4">
                                    <label class="form-label fw-bold">Banner Image</label>
                                    <div class="mb-2">
                                        @if(isset($bv->banner))
                                            <img src="{{ $bv->banner }}" alt="Banner"
                                                class="img-fluid border radius-10 p-2 bg-light"
                                                style="max-height:160px; width:100%; object-fit:cover;">
                                        @else
                                            <div class="bg-light text-muted p-4 text-center radius-10">
                                                <i class="bi bi-image fs-2 opacity-25"></i>
                                                <p class="mb-0 small">No image uploaded</p>
                                            </div>
                                        @endif
                                    </div>
                                    <input type="file" name="banner"
                                        class="form-control radius-10 @error('banner') is-invalid @enderror">
                                    @error('banner')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <small class="text-muted">Recommended: 1920×600px (Max 5MB)</small>
                                </div>
                                {{-- Banner text fields --}}
                                <div class="col-lg-8">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label class="form-label fw-bold">Banner Heading <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="banner_heading"
                                                class="form-control radius-10 char-field @error('banner_heading') is-invalid @enderror"
                                                data-max="60" placeholder="Our Services"
                                                value="{{ old('banner_heading', $bv->banner_heading ?? '') }}" required>
                                            @error('banner_heading')<div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <small class="text-muted">Character limit 60, Recommended 10-20 characters <span
                                                    class="char-count text-primary fw-bold"></span></small>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label fw-bold">Banner Sub-heading <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="banner_sub_heading"
                                                class="form-control radius-10 char-field @error('banner_sub_heading') is-invalid @enderror"
                                                data-max="60" placeholder="Services"
                                                value="{{ old('banner_sub_heading', $bv->banner_sub_heading ?? '') }}"
                                                required>
                                            @error('banner_sub_heading')<div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <small class="text-muted">Character limit 60, Recommended 10-20 characters <span
                                                    class="char-count text-primary fw-bold"></span></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ══════════════════════════════════════════════════════════════
            SECTION 2 — ABOUT (top)
            ══════════════════════════════════════════════════════════════════ --}}
            <div class="row g-4 mb-4">
                <div class="col-12">
                    <div class="card border-0 shadow-sm radius-10">
                        <div class="card-body p-4">
                            <h5 class="fw-bold mb-1">About Section</h5>
                            <p class="text-muted small mb-4">Two-column section below the banner: dual images on the left,
                                text & features on the right.</p>
                            <div class="row g-4">

                                {{-- Images column --}}
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label fw-bold">About Image 1</label>
                                        <div class="mb-2">
                                            @if(isset($bv->about_image_1))
                                                <img src="{{ $bv->about_image_1 }}" alt="About 1"
                                                    class="img-fluid border radius-10 p-2 bg-light"
                                                    style="max-height:150px; width:100%; object-fit:cover;">
                                            @else
                                                <div class="bg-light text-muted p-4 text-center radius-10">
                                                    <i class="bi bi-image fs-2 opacity-25"></i>
                                                    <p class="mb-0 small">No image</p>
                                                </div>
                                            @endif
                                        </div>
                                        <input type="file" name="about_image_1"
                                            class="form-control radius-10 @error('about_image_1') is-invalid @enderror">
                                        @error('about_image_1')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                        <small class="text-muted">Recommended: 800×900px (Max 5MB)</small>
                                    </div>
                                    <div>
                                        <label class="form-label fw-bold">About Image 2</label>
                                        <div class="mb-2">
                                            @if(isset($bv->about_image_2))
                                                <img src="{{ $bv->about_image_2 }}" alt="About 2"
                                                    class="img-fluid border radius-10 p-2 bg-light"
                                                    style="max-height:150px; width:100%; object-fit:cover;">
                                            @else
                                                <div class="bg-light text-muted p-4 text-center radius-10">
                                                    <i class="bi bi-image fs-2 opacity-25"></i>
                                                    <p class="mb-0 small">No image</p>
                                                </div>
                                            @endif
                                        </div>
                                        <input type="file" name="about_image_2"
                                            class="form-control radius-10 @error('about_image_2') is-invalid @enderror">
                                        @error('about_image_2')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                        <small class="text-muted">Recommended: 800×800px (Max 5MB)</small>
                                    </div>
                                </div>

                                {{-- Text & features column --}}
                                <div class="col-lg-8">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label class="form-label fw-bold">About Heading <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="about_heading"
                                                class="form-control radius-10 char-field @error('about_heading') is-invalid @enderror"
                                                data-max="100" placeholder="We Combine Technology with Business Ideas"
                                                value="{{ old('about_heading', $bv->about_heading ?? '') }}" required>
                                            @error('about_heading')<div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <small class="text-muted">Character limit 100, Recommended 40-50 characters
                                                <span class="char-count text-primary fw-bold"></span></small>
                                        </div>

                                        {{-- Feature 1 --}}
                                        <div class="col-12">
                                            <label class="form-label fw-bold text-secondary">Feature 1</label>
                                            <div class="border radius-10 p-3 bg-light">
                                                <div class="row g-3">
                                                    <div class="col-md-5">
                                                        <label class="form-label">Icon Class <span
                                                                class="text-danger">*</span></label>
                                                        <div class="input-group">
                                                            <input type="text" name="feature_1_class" id="feature_1_class"
                                                                class="form-control radius-10-left @error('feature_1_class') is-invalid @enderror"
                                                                placeholder="ti-bookmark-alt"
                                                                value="{{ old('feature_1_class', $bv->feature_1_class ?? '') }}"
                                                                style="background-color: #fff; cursor: pointer;" readonly
                                                                onclick="openIconPicker('feature_1_class')" required>
                                                            <button type="button"
                                                                class="btn btn-outline-secondary radius-10-right"
                                                                onclick="openIconPicker('feature_1_class')">
                                                                <i class="bx bx-search"></i> Select
                                                            </button>
                                                            @error('feature_1_class')<div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>@enderror
                                                        </div>
                                                        <small class="text-muted">Themify, Flaticon, or FontAwesome</small>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <label class="form-label">Title <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="feature_1_title"
                                                            class="form-control radius-10 char-field @error('feature_1_title') is-invalid @enderror"
                                                            data-max="50" placeholder="Certified Company"
                                                            value="{{ old('feature_1_title', $bv->feature_1_title ?? '') }}"
                                                            required>
                                                        @error('feature_1_title')<div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>@enderror
                                                        <small class="text-muted">Character limit 50, Recommended 20-30
                                                            characters
                                                            <span class="char-count text-primary fw-bold"></span></small>
                                                    </div>
                                                    <div class="col-12">
                                                        <label class="form-label">Description <span
                                                                class="text-danger">*</span></label>
                                                        <textarea name="feature_1_text"
                                                            class="form-control radius-10 char-field @error('feature_1_text') is-invalid @enderror"
                                                            rows="2" data-max="150" placeholder="Short description..."
                                                            required>{{ old('feature_1_text', $bv->feature_1_text ?? '') }}</textarea>
                                                        @error('feature_1_text')<div class="invalid-feedback">{{ $message }}
                                                        </div>@enderror
                                                        <small class="text-muted">Character limit 150, Recommended 90-100
                                                            characters <span
                                                                class="char-count text-primary fw-bold"></span></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Feature 2 --}}
                                        <div class="col-12">
                                            <label class="form-label fw-bold text-secondary">Feature 2</label>
                                            <div class="border radius-10 p-3 bg-light">
                                                <div class="row g-3">
                                                    <div class="col-md-5">
                                                        <label class="form-label">Icon Class <span
                                                                class="text-danger">*</span></label>
                                                        <div class="input-group">
                                                            <input type="text" name="feature_2_class" id="feature_2_class"
                                                                class="form-control radius-10-left @error('feature_2_class') is-invalid @enderror"
                                                                placeholder="ti-id-badge"
                                                                value="{{ old('feature_2_class', $bv->feature_2_class ?? '') }}"
                                                                style="background-color: #fff; cursor: pointer;" readonly
                                                                onclick="openIconPicker('feature_2_class')" required>
                                                            <button type="button"
                                                                class="btn btn-outline-secondary radius-10-right"
                                                                onclick="openIconPicker('feature_2_class')">
                                                                <i class="bx bx-search"></i> Select
                                                            </button>
                                                            @error('feature_2_class')<div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>@enderror
                                                        </div>
                                                        <small class="text-muted">Themify, Flaticon, or FontAwesome</small>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <label class="form-label">Title <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="feature_2_title"
                                                            class="form-control radius-10 char-field @error('feature_2_title') is-invalid @enderror"
                                                            data-max="50" placeholder="Experience Employee"
                                                            value="{{ old('feature_2_title', $bv->feature_2_title ?? '') }}"
                                                            required>
                                                        @error('feature_2_title')<div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>@enderror
                                                        <small class="text-muted">Character limit 50, Recommended 20-30
                                                            characters
                                                            <span class="char-count text-primary fw-bold"></span></small>
                                                    </div>
                                                    <div class="col-12">
                                                        <label class="form-label">Description <span
                                                                class="text-danger">*</span></label>
                                                        <textarea name="feature_2_text"
                                                            class="form-control radius-10 char-field @error('feature_2_text') is-invalid @enderror"
                                                            rows="2" data-max="150" placeholder="Short description..."
                                                            required>{{ old('feature_2_text', $bv->feature_2_text ?? '') }}</textarea>
                                                        @error('feature_2_text')<div class="invalid-feedback">{{ $message }}
                                                        </div>@enderror
                                                        <small class="text-muted">Character limit 150, Recommended 90-100
                                                            characters <span
                                                                class="char-count text-primary fw-bold"></span></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ══════════════════════════════════════════════════════════════
            SECTION 3 — BUSINESS VERTICALS SERVICES HEADER
            ══════════════════════════════════════════════════════════════════ --}}
            <div class="row g-4 mb-4">
                <div class="col-12">
                    <div class="card border-0 shadow-sm radius-10">
                        <div class="card-body p-4">
                            <h5 class="fw-bold mb-1">Business Verticals Services Section</h5>
                            <p class="text-muted small mb-4">The heading, sub-heading and description shown above the
                                services carousel grid.</p>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Section Heading <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="business_verticals_heading"
                                        class="form-control radius-10 char-field @error('business_verticals_heading') is-invalid @enderror"
                                        data-max="50" placeholder="Our Services"
                                        value="{{ old('business_verticals_heading', $bv->business_verticals_heading ?? '') }}"
                                        required>
                                    @error('business_verticals_heading')<div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <small class="text-muted">Character limit 50, Recommended 20-30
                                        characters
                                        <span class="char-count text-primary fw-bold"></span></small>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Section Sub-heading <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="business_verticals_sub_heading"
                                        class="form-control radius-10 char-field @error('business_verticals_sub_heading') is-invalid @enderror"
                                        data-max="60" placeholder="What We Bring To You"
                                        value="{{ old('business_verticals_sub_heading', $bv->business_verticals_sub_heading ?? '') }}"
                                        required>
                                    @error('business_verticals_sub_heading')<div class="invalid-feedback">{{ $message }}
                                    </div>@enderror
                                    <small class="text-muted">Character limit 60, Recommended 20-30
                                        characters
                                        <span class="char-count text-primary fw-bold"></span></small>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-bold">Section Description <span
                                            class="text-danger">*</span></label>
                                    <textarea name="business_verticals_text"
                                        class="form-control radius-10 char-field @error('business_verticals_text') is-invalid @enderror"
                                        rows="3" data-max="400" placeholder="Brief description shown under the heading..."
                                        required>{{ old('business_verticals_text', $bv->business_verticals_text ?? '') }}</textarea>
                                    @error('business_verticals_text')<div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <small class="text-muted">Character limit 400, Recommended 180-190
                                        characters
                                        <span class="char-count text-primary fw-bold"></span></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ══════════════════════════════════════════════════════════════
            SECTION 4 — BOTTOM ABOUT / VIDEO
            ══════════════════════════════════════════════════════════════════ --}}
            <div class="row g-4 mb-4">
                <div class="col-12">
                    <div class="card border-0 shadow-sm radius-10">
                        <div class="card-body p-4">
                            <h5 class="fw-bold mb-1">Bottom About / Video Section</h5>
                            <p class="text-muted small mb-4">The gray section at the bottom with a video thumbnail on the
                                left and text on the right.</p>
                            <div class="row g-4">

                                {{-- Video image --}}
                                <div class="col-lg-4">
                                    <label class="form-label fw-bold">Video Thumbnail Image</label>
                                    <div class="mb-2">
                                        @if(isset($bv->video_image))
                                            <div class="position-relative cursor-pointer video-thumb-container" 
                                                 onclick="playAdminVideo('{{ $bv->video_url ?? '' }}')">
                                                <img src="{{ $bv->video_image }}" alt="Video Thumb"
                                                    class="img-fluid border radius-10 p-2 bg-light w-100"
                                                    style="max-height:180px; object-fit:cover;">
                                                <div class="position-absolute top-50 start-50 translate-middle">
                                                    <i class="bi bi-play-circle-fill text-white opacity-75 display-4"></i>
                                                </div>
                                            </div>
                                        @else
                                            <div class="bg-light text-muted p-4 text-center radius-10">
                                                <i class="bi bi-play-circle fs-2 opacity-25"></i>
                                                <p class="mb-0 small">No image</p>
                                            </div>
                                        @endif
                                    </div>
                                    <input type="file" name="video_image"
                                        class="form-control radius-10 @error('video_image') is-invalid @enderror">
                                    @error('video_image')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <small class="text-muted">Recommended: 800×800px (Max 5MB)</small>
                                </div>

                                {{-- Video meta + text --}}
                                <div class="col-lg-8">
                                    <div class="row g-3">
                                        <div class="col-md-8">
                                            <label class="form-label fw-bold">Video URL <span
                                                    class="text-danger">*</span></label>
                                            <textarea name="video_url"
                                                class="form-control radius-10 @error('video_url') is-invalid @enderror"
                                                rows="2" placeholder="Paste YouTube link or Iframe embed code here..."
                                                required>{{ old('video_url', isset($bv->video_url) ? 'https://www.youtube.com/watch?v='.$bv->video_url : '') }}</textarea>
                                            @error('video_url')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label fw-bold">Video Label <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="video_label"
                                                class="form-control radius-10 char-field @error('video_label') is-invalid @enderror"
                                                data-max="40" placeholder="Our History"
                                                value="{{ old('video_label', $bv->video_label ?? '') }}" required>
                                            @error('video_label')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                            <small class="text-muted">Character limit 40, Recommended 20-30
                                                characters
                                                <span class="char-count text-primary fw-bold"></span></small>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label fw-bold">Tag Line <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="bottom_tag"
                                                class="form-control radius-10 char-field @error('bottom_tag') is-invalid @enderror"
                                                data-max="50" placeholder="Easy Business Solutions"
                                                value="{{ old('bottom_tag', $bv->bottom_tag ?? '') }}" required>
                                            @error('bottom_tag')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                            <small class="text-muted">Character limit 50, Recommended 20-30
                                                characters
                                                <span class="char-count text-primary fw-bold"></span></small>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label fw-bold">Heading <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="bottom_heading"
                                                class="form-control radius-10 char-field @error('bottom_heading') is-invalid @enderror"
                                                data-max="80" placeholder="We Combine Technology with Business Ideas"
                                                value="{{ old('bottom_heading', $bv->bottom_heading ?? '') }}" required>
                                            @error('bottom_heading')<div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <small class="text-muted">Character limit 80, Recommended 40-50
                                                characters
                                                <span class="char-count text-primary fw-bold"></span></small>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label fw-bold">Description <span
                                                    class="text-danger">*</span></label>
                                            <textarea name="bottom_description"
                                                class="form-control radius-10 char-field @error('bottom_description') is-invalid @enderror"
                                                rows="3" data-max="500" placeholder="Paragraph text for this section..."
                                                required>{{ old('bottom_description', $bv->bottom_description ?? '') }}</textarea>
                                            @error('bottom_description')<div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <small class="text-muted">Character limit 500, Recommended 270-280
                                                characters
                                                <span class="char-count text-primary fw-bold"></span></small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Bullet Points --}}
                            <hr class="my-4">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div>
                                    <h6 class="fw-bold mb-0">Bullet Points</h6>
                                    <small class="text-muted">The feature list shown in the right column (e.g. "24/7 Call
                                        Services Available").</small>
                                </div>
                                <button type="button" class="btn btn-sm btn-outline-primary radius-10" id="addBullet">
                                    <i class="bx bx-plus me-1"></i> Add Bullet
                                </button>
                            </div>
                            <div id="bulletsContainer">
                                @php
                                    $bullets = old('bottom_bullets', $bv->bottom_bullets ?? ['', '', '', '', '', '']);
                                @endphp
                                @foreach($bullets as $i => $bullet)
                                    <div class="mb-2 bullet-row">
                                        <div class="input-group">
                                            <span class="input-group-text bg-light border-end-0">
                                                <i class="bx bx-list-ul text-muted"></i>
                                            </span>
                                            <input type="text" name="bottom_bullets[]" class="form-control char-field"
                                                data-max="60" placeholder="e.g. 24/7 Call Services Available"
                                                value="{{ $bullet }}">
                                            <button type="button" class="btn btn-outline-danger remove-bullet">
                                                <i class="bx bx-trash"></i>
                                            </button>
                                        </div>
                                        <small class="text-muted">Character limit 60, Recommended 30-40 characters <span
                                                class="char-count text-primary fw-bold"></span></small>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Submit --}}
            <div class="row mb-5">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary px-5 radius-10">
                        <i class="bx bx-save me-2"></i> Save Business Verticals Page
                    </button>
                </div>
            </div>

        </form>

    </main>

    <script>
        // ── Bullet add / remove ─────────────────────────────────────────
        document.getElementById('addBullet').addEventListener('click', function () {
            const container = document.getElementById('bulletsContainer');
            const row = document.createElement('div');
            row.className = 'mb-2 bullet-row';
            row.innerHTML = `
                                                <div class="input-group">
                                                    <span class="input-group-text bg-light border-end-0">
                                                        <i class="bx bx-list-ul text-muted"></i>
                                                    </span>
                                                    <input type="text" name="bottom_bullets[]"
                                                        class="form-control char-field"
                                                        data-max="60"
                                                        placeholder="e.g. Great Skilled Consultant">
                                                    <button type="button" class="btn btn-outline-danger remove-bullet">
                                                        <i class="bx bx-trash"></i>
                                                    </button>
                                                </div>
                                                <small class="text-muted">Character limit 60, Recommended 30-40 characters <span class="char-count text-primary fw-bold"></span></small>`;
            container.appendChild(row);

            // Initialize the character counter for the newly added field
            if (window.initCharField) {
                window.initCharField(row.querySelector('.char-field'));
            }
        });

        document.getElementById('bulletsContainer').addEventListener('click', function (e) {
            const btn = e.target.closest('.remove-bullet');
            if (btn) {
                const rows = this.querySelectorAll('.bullet-row');
                if (rows.length > 6) btn.closest('.bullet-row').remove();
            }
        });
    </script>
@endsection