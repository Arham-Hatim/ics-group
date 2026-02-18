<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sign in to the ICS Group admin panel to manage website content, header, footer, and CMS settings.">

    <title>Admin Login | ICS Group</title>

    <link rel="shortcut icon" href="{{ asset('web_assets/img/favicon.png') }}" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('admin/css/admin.css') }}" rel="stylesheet" />
</head>

<body class="admin-auth">
    <div class="auth-bg-objects" aria-hidden="true">
        <span class="auth-bg-circle auth-bg-circle-1"></span>
        <span class="auth-bg-circle auth-bg-circle-2"></span>
        <span class="auth-bg-circle auth-bg-circle-3"></span>
        <span class="auth-bg-blob auth-bg-blob-1"></span>
        <span class="auth-bg-blob auth-bg-blob-2"></span>
        <span class="auth-bg-square auth-bg-square-1"></span>
    </div>

    <div class="admin-auth-wrapper">
        <div class="admin-auth-card">
            <div class="admin-auth-header">
                <img src="{{ asset('web_assets/img/logo-red.png') }}" alt="ICS Group">
                <h4>Admin Login</h4>
                <p class="text-muted mb-0">Sign in to manage the ICS Group website.</p>
            </div>

            <form action="{{ route('admin.login.submit') }}" method="POST" id="admin-login-form">
                @csrf

                <div class="form-group">
                    <label for="email">Email <span class="required">*</span></label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        autocomplete="email"
                        aria-required="true"
                        aria-invalid="{{ $errors->has('email') ? 'true' : 'false' }}"
                        aria-describedby="{{ $errors->has('email') ? 'email-error' : '' }}"
                    >
                    @error('email')
                        <span class="invalid-feedback" id="email-error" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mt-3">
                    <label for="password">Password <span class="required">*</span></label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="form-control @error('password') is-invalid @enderror"
                        required
                        autocomplete="current-password"
                        aria-required="true"
                        aria-invalid="{{ $errors->has('password') ? 'true' : 'false' }}"
                        aria-describedby="{{ $errors->has('password') ? 'password-error' : '' }}"
                    >
                    @error('password')
                        <span class="invalid-feedback" id="password-error" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mt-3 d-flex align-items-center">
                    <div class="checkbox">
                        <label class="checkbox-label">
                            <input type="checkbox" name="remember" value="1" {{ old('remember') ? 'checked' : '' }} aria-label="Remember me">
                            <span>Remember me</span>
                        </label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <button type="submit" class="btn btn-gradient effect btn-block" id="admin-login-btn">
                        Login
                    </button>
                </div>
            </form>
        </div>

        <div class="admin-auth-footer">
            &copy; {{ date('Y') }} ICS Group. Admin Panel.
        </div>
    </div>

    <script src="{{ asset('admin/js/admin.js') }}"></script>
</body>

</html>
