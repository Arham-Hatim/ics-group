<aside class="admin-sidebar">
    <div class="brand d-flex align-items-center">
        <img src="{{ asset('web_assets/img/logo-red.png') }}" alt="ICS Group">
        <span>ICS Admin</span>
    </div>
    <nav>
        <ul>
            <li>
                <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">
                    Header &amp; Footer CMS
                </a>
            </li>
            {{-- Add more admin menu items here --}}
        </ul>
    </nav>
</aside>
