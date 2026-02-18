<header class="admin-topbar">
    <div>
        <strong>@yield('page_title', 'Dashboard')</strong>
    </div>
    <div class="user-info">
        <span>{{ auth('admin')->user()->name ?? 'Admin' }}</span>
        <form action="{{ route('admin.logout') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-xs btn-danger">
                Logout
            </button>
        </form>
    </div>
</header>
