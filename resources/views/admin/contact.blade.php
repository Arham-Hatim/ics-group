@extends('admin.layouts.master')
@section('title', 'Contact | ICS Group')
@section('meta_description', 'Manage contact page content, company details, easily from the ICS Group admin panel.')

@section('content')

    <main class="page-content">

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-4">
            <div class="breadcrumb-title pe-3">Contact Management</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
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

        <div class="row">
            <!-- Form for Contact Details -->
            <div class="col-12 col-lg-8">
                <form action="{{ route('admin.contact.update') }}" method="POST">
                    @csrf
                    <div class="card border-0 shadow-sm radius-10">
                        <div class="card-body p-4">
                            <h5 class="mb-4 fw-bold">Contact Details</h5>

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Company Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="name"
                                        class="form-control radius-10 char-field @error('name') is-invalid @enderror"
                                        data-max="255" placeholder="ICS Group"
                                        value="{{ old('name', $contact->name ?? '') }}" required>
                                    @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <small class="text-muted">Character limit 255. <span
                                            class="char-count text-primary fw-bold"></span></small>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Email Address <span
                                            class="text-danger">*</span></label>
                                    <input type="email" name="email"
                                        class="form-control radius-10 char-field @error('email') is-invalid @enderror"
                                        data-max="255" placeholder="info@icsgroup.com"
                                        value="{{ old('email', $contact->email ?? '') }}" required>
                                    @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <small class="text-muted">Character limit 255. <span
                                            class="char-count text-primary fw-bold"></span></small>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Phone Number <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="phone"
                                        class="form-control radius-10 char-field @error('phone') is-invalid @enderror"
                                        data-max="30" placeholder="(+92)21 111 565 565"
                                        value="{{ old('phone', $contact->phone ?? '') }}" required>
                                    @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <small class="text-muted">Character limit 30. <span
                                            class="char-count text-primary fw-bold"></span></small>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Phone Question <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="phone_question"
                                        class="form-control radius-10 char-field @error('phone_question') is-invalid @enderror"
                                        data-max="40" placeholder="Have any question?"
                                        value="{{ old('phone_question', $contact->phone_question ?? '') }}" required>
                                    @error('phone_question')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <small class="text-muted">Character limit 40, Recommended 10-30 characters <span
                                            class="char-count text-primary fw-bold"></span></small>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Fax Number <span class="text-danger">*</span></label>
                                    <input type="text" name="fax"
                                        class="form-control radius-10 char-field @error('fax') is-invalid @enderror"
                                        data-max="30" placeholder="(+92)21 35671068"
                                        value="{{ old('fax', $contact->fax ?? '') }}" required>
                                    @error('fax')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <small class="text-muted">Character limit 30. <span
                                            class="char-count text-primary fw-bold"></span></small>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Office Hours <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="time" name="office_start"
                                            class="form-control radius-10-left @error('office_start') is-invalid @enderror"
                                            value="{{ old('office_start', isset($contact->office_hours) ? \Illuminate\Support\Carbon::parse(explode(' - ', $contact->office_hours)[0])->format('H:i') : '') }}"
                                            required>
                                        <span class="input-group-text bg-light border-start-0 border-end-0">to</span>
                                        <input type="time" name="office_end"
                                            class="form-control radius-10-right @error('office_end') is-invalid @enderror"
                                            value="{{ old('office_end', isset($contact->office_hours) ? \Illuminate\Support\Carbon::parse(explode(' - ', $contact->office_hours)[1])->format('H:i') : '') }}"
                                            required>
                                    </div>
                                    @error('office_start')<div class="text-danger small">{{ $message }}</div>@enderror
                                    @error('office_end')<div class="text-danger small">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-bold">Address <span class="text-danger">*</span></label>
                                    <textarea name="address"
                                        class="form-control radius-10 char-field @error('address') is-invalid @enderror"
                                        rows="3" data-max="120" placeholder="123 Street, City, Country"
                                        required>{{ old('address', $contact->address ?? '') }}</textarea>
                                    @error('address')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <small class="text-muted">Character limit 120, Recommended 80-100 characters. <span
                                            class="char-count text-primary fw-bold"></span></small>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-bold">Description <span class="text-danger">*</span></label>
                                    <textarea name="description"
                                        class="form-control radius-10 char-field @error('description') is-invalid @enderror"
                                        rows="3" data-max="220" placeholder="Brief description of the company"
                                        required>{{ old('description', $contact->description ?? '') }}</textarea>
                                    @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <small class="text-muted">Character limit 220, Recommended 180-200 characters. <span
                                            class="char-count text-primary fw-bold"></span></small>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-bold">Copyright Text <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="copy_right"
                                        class="form-control radius-10 char-field @error('copy_right') is-invalid @enderror"
                                        data-max="70" placeholder="© 2026 ICS Group. All rights reserved."
                                        value="{{ old('copy_right', $contact->copy_right ?? '') }}" required>
                                    @error('copy_right')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <small class="text-muted">Character limit 70, Recommended 50-60 characters. <span
                                            class="char-count text-primary fw-bold"></span></small>
                                </div>
                            </div>

                            <h6 class="mt-4 fw-bold">Social Links</h6>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Facebook</label>
                                    <input type="url" name="social_links[facebook]" class="form-control radius-10"
                                        placeholder="https://facebook.com/..."
                                        value="{{ old('social_links.facebook', $contact->social_links['facebook'] ?? '') }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Twitter/X</label>
                                    <input type="url" name="social_links[twitter]" class="form-control radius-10"
                                        placeholder="https://twitter.com/..."
                                        value="{{ old('social_links.twitter', $contact->social_links['twitter'] ?? '') }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">LinkedIn</label>
                                    <input type="url" name="social_links[linkedin]" class="form-control radius-10"
                                        placeholder="https://linkedin.com/..."
                                        value="{{ old('social_links.linkedin', $contact->social_links['linkedin'] ?? '') }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Instagram</label>
                                    <input type="url" name="social_links[instagram]" class="form-control radius-10"
                                        placeholder="https://instagram.com/..."
                                        value="{{ old('social_links.instagram', $contact->social_links['instagram'] ?? '') }}">
                                </div>
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary px-5 radius-10">Save Details</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Form for Logos -->
            <div class="col-12 col-lg-4">
                <form action="{{ route('admin.contact.logos') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card border-0 shadow-sm radius-10">
                        <div class="card-body p-4">
                            <h5 class="mb-4 fw-bold">Brand Logos</h5>

                            <div class="mb-4">
                                <label class="form-label fw-bold">Main Logo</label>
                                <div class="mb-3">
                                    @if(isset($contact->logo))
                                        <img src="{{ $contact->logo }}" alt="Logo"
                                            class="img-fluid border radius-10 p-2 bg-light mb-2" style="max-height: 100px;">
                                    @endif
                                </div>
                                <input type="file" name="logo"
                                    class="form-control radius-10 @error('logo') is-invalid @enderror">
                                @error('logo')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                <small class="text-muted">Upload colored logo (Recommended: 175x70px)</small>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold">White Logo</label>
                                <div class="mb-3">
                                    @if(isset($contact->white_logo))
                                        <img src="{{ $contact->white_logo }}" alt="White Logo"
                                            class="img-fluid border radius-10 p-2 bg-dark mb-2" style="max-height: 100px;">
                                    @endif
                                </div>
                                <input type="file" name="white_logo"
                                    class="form-control radius-10 @error('white_logo') is-invalid @enderror">
                                @error('white_logo')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                <small class="text-muted">Upload white version for dark backgrounds (Recommended:
                                    175x70px)</small>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold">Favicon</label>
                                <div class="mb-3">
                                    @if(isset($contact->favicon))
                                        <img src="{{ $contact->favicon }}" alt="Favicon"
                                            class="img-fluid border radius-10 p-2 bg-light mb-2" style="max-height: 50px;">
                                    @endif
                                </div>
                                <input type="file" name="favicon"
                                    class="form-control radius-10 @error('favicon') is-invalid @enderror">
                                @error('favicon')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                <small class="text-muted">Upload browser favicon (Recommended: 32x32px)</small>
                            </div>


                            <div class="mt-4">
                                <button type="submit" class="btn btn-dark w-100 radius-10">Update Logos</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </main>

    @push('styles')
        <style>
            .radius-10-left {
                border-top-left-radius: 10px !important;
                border-bottom-left-radius: 10px !important;
            }

            .radius-10-right {
                border-top-right-radius: 10px !important;
                border-bottom-right-radius: 10px !important;
            }
        </style>
    @endpush
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const charFields = document.querySelectorAll('.char-field');

                function updateCount(field) {
                    const max = parseInt(field.getAttribute('data-max'));
                    const value = field.value;
                    const cleanValue = value.replace(/\s+/g, '');
                    const currentLength = cleanValue.length;
                    const remaining = max - currentLength;

                    const counterContainer = field.parentElement.querySelector('.char-count');
                    if (counterContainer) {
                        counterContainer.textContent = ` (Remaining: ${remaining})`;

                        if (remaining < 0) {
                            counterContainer.classList.remove('text-primary');
                            counterContainer.classList.add('text-danger');
                        } else {
                            counterContainer.classList.remove('text-danger');
                            counterContainer.classList.add('text-primary');
                        }
                    }
                }

                charFields.forEach(field => {
                    updateCount(field);
                    field.addEventListener('input', function () {
                        updateCount(this);
                    });
                });
            });
        </script>
    @endpush
@endsection