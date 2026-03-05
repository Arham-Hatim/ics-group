@extends('admin.layouts.master')
@section('title', 'Contact Page | ICS Group')
@section('meta_description', 'Manage the Contact Page appearance and content from the ICS Group admin panel.')

@section('content')

    <main class="page-content">

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-4">
            <div class="breadcrumb-title pe-3">Contact Page Management</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Page</li>
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

        <form action="{{ route('admin.contact.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <!-- Left Side: Text Details -->
                <div class="col-12 col-lg-8">
                    <div class="card border-0 shadow-sm radius-10">
                        <div class="card-body p-4">
                            <h5 class="mb-4 fw-bold">Banner & Hero Section</h5>
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label fw-bold">Banner Heading <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="banner_heading"
                                        class="form-control radius-10 char-field @error('banner_heading') is-invalid @enderror"
                                        data-max="60" placeholder="Contact Us"
                                        value="{{ old('banner_heading', $contact->banner_heading ?? '') }}" required>
                                    @error('banner_heading')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <small class="text-muted">Character limit 60, Recommended 10-20 characters <span
                                            class="char-count text-primary fw-bold"></span></small>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-bold">Banner Sub-heading <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="banner_sub_heading"
                                        class="form-control radius-10 char-field @error('banner_sub_heading') is-invalid @enderror"
                                        data-max="60" placeholder="Contact"
                                        value="{{ old('banner_sub_heading', $contact->banner_sub_heading ?? '') }}"
                                        required>
                                    @error('banner_sub_heading')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <small class="text-muted">Character limit 60, Recommended 10-20 characters <span
                                            class="char-count text-primary fw-bold"></span></small>
                                </div>
                            </div>

                            <h5 class="mt-5 mb-4 fw-bold">Contact Message Section</h5>
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label fw-bold">Contact Heading <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="contact_page_heading"
                                        class="form-control radius-10 char-field @error('contact_page_heading') is-invalid @enderror"
                                        data-max="60" placeholder="Let's Talk About Your Project"
                                        value="{{ old('contact_page_heading', $contact->contact_page_heading ?? '') }}"
                                        required>
                                    @error('contact_page_heading')<div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <small class="text-muted">Character limit 60, Recommended 10-20 characters <span
                                            class="char-count text-primary fw-bold"></span></small>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-bold">Contact Message <span
                                            class="text-danger">*</span></label>
                                    <textarea name="contact_page_message"
                                        class="form-control radius-10 char-field @error('contact_page_message') is-invalid @enderror"
                                        rows="4" data-max="500" placeholder="Get in touch with us today..."
                                        required>{{ old('contact_page_message', $contact->contact_page_message ?? '') }}</textarea>
                                    @error('contact_page_message')<div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <small class="text-muted">Character limit 500, Recommended 100-200 characters <span
                                            class="char-count text-primary fw-bold"></span></small>
                                </div>
                            </div>

                            <h5 class="mt-5 mb-4 fw-bold">Support Section</h5>
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label fw-bold">Support Heading <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="support_heading"
                                        class="form-control radius-10 char-field @error('support_heading') is-invalid @enderror"
                                        data-max="40" placeholder="Need Help?"
                                        value="{{ old('support_heading', $contact->support_heading ?? '') }}" required>
                                    @error('support_heading')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <small class="text-muted">Character limit 40, Recommended 10-20 characters <span
                                            class="char-count text-primary fw-bold"></span></small>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-bold">Support Text <span
                                            class="text-danger">*</span></label>
                                    <textarea name="support_text"
                                        class="form-control radius-10 char-field @error('support_text') is-invalid @enderror" rows="4"
                                        data-max="150" placeholder="Contact our support team for any inquiries..."
                                        required>{{ old('support_text', $contact->support_text ?? '') }}</textarea>
                                    @error('support_text')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <small class="text-muted">Character limit 150, Recommended 80-110 characters <span
                                            class="char-count text-primary fw-bold"></span></small>
                                </div>
                            </div>

                            <div class="mt-5">
                                <button type="submit" class="btn btn-primary px-5 radius-10">Save Page Content</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Images -->
                <div class="col-12 col-lg-4">
                    <div class="card border-0 shadow-sm radius-10 mb-4">
                        <div class="card-body p-4">
                            <h5 class="mb-4 fw-bold">Banner Image</h5>
                            <div class="mb-3">
                                @if(isset($contact->banner))
                                    <img src="{{ $contact->banner }}" alt="Banner"
                                        class="img-fluid border radius-10 p-2 bg-light mb-2"
                                        style="max-height: 200px; width: 100%; object-fit: cover;">
                                @else
                                    <div class="bg-light-primary text-primary p-5 text-center radius-10 mb-2">
                                        <i class="bi bi-image fs-1 opacity-25"></i>
                                        <p class="mb-0">No Banner Image</p>
                                    </div>
                                @endif
                            </div>
                            <input type="file" name="banner"
                                class="form-control radius-10 @error('banner') is-invalid @enderror">
                            @error('banner')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            <small class="text-muted">Recommended: 1920x600px (Max: 5MB)</small>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm radius-10">
                        <div class="card-body p-4">
                            <h5 class="mb-4 fw-bold">Support Image</h5>
                            <div class="mb-3">
                                @if(isset($contact->support_image))
                                    <img src="{{ $contact->support_image }}" alt="Support Image"
                                        class="img-fluid border radius-10 p-2 bg-light mb-2"
                                        style="max-height: 200px; width: 100%; object-fit: cover;">
                                @else
                                    <div class="bg-light-primary text-primary p-5 text-center radius-10 mb-2">
                                        <i class="bi bi-image fs-1 opacity-25"></i>
                                        <p class="mb-0">No Support Image</p>
                                    </div>
                                @endif
                            </div>
                            <input type="file" name="support_image"
                                class="form-control radius-10 @error('support_image') is-invalid @enderror">
                            @error('support_image')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            <small class="text-muted">Recommended: 800x800px (Max: 5MB)</small>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </main>

@endsection