@extends('admin.layouts.master')

@section('title', 'Dashboard | ICS Admin')
@section('page_title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="shadow card">
                <div class="card-body">
                    <h4 class="mb-2">Welcome back, {{ auth('admin')->user()->name ?? 'Admin' }}</h4>
                    <p class="mb-0 text-muted">
                        Use this dashboard to manage the website content. Next we will add CMS screens
                        for the public header and footer.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-4">
            <div class="shadow card">
                <div class="card-body">
                    <h5 class="mb-2">Site Overview</h5>
                    <p class="mb-0 text-muted">
                        Quick stats and shortcuts can be placed here later.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-4">
            <div class="shadow card">
                <div class="card-body">
                    <h5 class="mb-2">Navigation CMS</h5>
                    <p class="mb-0 text-muted">
                        Manage header menu links that appear on the public site.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-4">
            <div class="shadow card">
                <div class="card-body">
                    <h5 class="mb-2">Footer CMS</h5>
                    <p class="mb-0 text-muted">
                        Manage footer text, links, and contact information.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

