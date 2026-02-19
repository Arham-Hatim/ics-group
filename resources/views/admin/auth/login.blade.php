<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ICS Group admin panel login – Secure access to manage users, settings, and dashboards efficiently.">
    <link rel="icon" href="{{ asset('admin_assets/images/logo-icon.png') }}" type="image/png" />
    <link href="{{ asset('admin_assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/css/bootstrap-extended.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/css/icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="{{ asset('admin_assets/css/packhappy-theme.css') }}" rel="stylesheet" />
    <title>Admin Login | ICS Group</title>
</head>

<body class="bg-light">
    <div class="wrapper">
        <main class="authentication-content">
            <div class="container-fluid">
                <div class="authentication-card">
                    <div class="card shadow-lg border-0 radius-20 overflow-hidden animate-fade-in">
                        <div class="row g-0">
                            <div class="col-lg-6 d-none d-lg-flex align-items-center justify-content-center p-5 text-center position-relative"
                                style="background: url('https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?q=80&w=2021&auto=format&fit=crop'); background-size: cover; background-position: center;">
                                <div class="position-absolute top-0 start-0 w-100 h-100"
                                    style="background: var(--ph-sunset); opacity: 0.85;"></div>
                                <div class="animate-pulse position-relative z-index-1">
                                    <img src="https://cdn-icons-png.flaticon.com/512/201/201623.png"
                                        class="img-fluid mb-4" alt="PackHappy Mascot"
                                        style="width: 120px; filter: brightness(0) invert(1);">
                                    <h2 class="text-white fw-bold">PackHappy</h2>
                                    <p class="text-white opacity-75">Travel Administration & Support</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card-body p-4 p-sm-5">
                                    <div class="text-center mb-4 lg-none">
                                        <img src="https://cdn-icons-png.flaticon.com/512/201/201623.png" width="60"
                                            alt="" class="mb-3">
                                        <h4 class="fw-bold">Staff Login</h4>
                                    </div>
                                    <h5 class="fw-bold mb-1 d-none d-lg-block">Welcome Back!</h5>
                                    <p class="small text-secondary mb-4 d-none d-lg-block">Access the command center for
                                        PackHappy Travel.</p>

                                    @if (session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                        </div>
                                    @endif

                                    @if (session('error'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ session('error') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                        </div>
                                    @endif

                                    <form class="form-body" method="POST" action="{{ route('admin.login') }}">
                                        @csrf
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label class="form-label fw-bold small">Staff Email</label>
                                                <div class="input-group">
                                                    <span class="input-group-text bg-transparent"><i
                                                            class="bi bi-person-fill text-primary"></i></span>
                                                    <input type="email" name="email"
                                                        class="form-control radius-10 border-start-0 @error('email') is-invalid @enderror"
                                                        placeholder="admin@packhappy.com" value="{{ old('email') }}"
                                                        required autofocus>
                                                </div>
                                                @error('email')
                                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label fw-bold small">Access Code</label>
                                                <div class="input-group">
                                                    <span class="input-group-text bg-transparent"><i
                                                            class="bi bi-lock-fill text-primary"></i></span>
                                                    <input type="password" name="password"
                                                        class="form-control radius-10 border-start-0 @error('password') is-invalid @enderror"
                                                        placeholder="••••••••" required>
                                                </div>
                                                @error('password')
                                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check form-switch cursor-pointer">
                                                    <input class="form-check-input" type="checkbox" name="remember"
                                                        id="rememberMe">
                                                    <label class="form-check-label x-small fw-bold"
                                                        for="rememberMe">Stay Logged In</label>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-4">
                                                <button type="submit"
                                                    class="btn btn-primary btn-lg w-100 radius-10 shadow-sm border-0 py-2"><i
                                                        class="bi bi-shield-lock-fill me-2"></i>Enter Dashboard</button>
                                            </div>
                                            <div class="col-12 text-center mt-3">
                                                <p class="x-small text-secondary mb-0">Powered by PackHappy Engine v2.0
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="{{ asset('admin_assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>