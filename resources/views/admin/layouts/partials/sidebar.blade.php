<div class="sidebar-header">
    <div class="d-flex align-items-center gap-2">
        <img src="{{ asset('web_assets/img/logo-red.png') }}" class="logo-icon" alt="logo icon"
            style="width: 45px; border-radius: 50%;">
        <h4 class="logo-text mb-0">PackHappy</h4>
    </div>
    <div class="toggle-icon ms-auto"><i class="bi bi-list"></i></div>
</div>
<ul class="metismenu" id="menu">
    <li class="{{ request()->routeIs('admin.dashboard') ? 'mm-active' : '' }}">
        <a href="#">
            <div class="parent-icon"><i class="bi bi-grid-fill"></i></div>
            <div class="menu-title">Dashboard</div>
        </a>
    </li>
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="bi bi-people-fill"></i></div>
            <div class="menu-title">User Management</div>
        </a>
        <ul>
            <li class="{{ request()->routeIs('admin.users') ? 'mm-active' : '' }}">
                <a href="#"><i class="bi bi-circle"></i>Users</a>
            </li>
        </ul>
    </li>
    <li class="{{ request()->routeIs('admin.facilities.*') ? 'mm-active' : '' }}">
        <a href="#">
            <div class="parent-icon"><i class="bi bi-building"></i></div>
            <div class="menu-title">Facilities</div>
        </a>
    </li>
    <li class="{{ request()->routeIs('admin.banners.*') ? 'mm-active' : '' }}">
        <a href="#">
            <div class="parent-icon"><i class="bi bi-image"></i></div>
            <div class="menu-title">Banners/Offers</div>
        </a>
    </li>
    <li class="{{ request()->routeIs('admin.packages.*') ? 'mm-active' : '' }}">
        <a href="#">
            <div class="parent-icon"><i class="bi bi-briefcase-fill"></i></div>
            <div class="menu-title">Packages</div>
        </a>
    </li>
    <li class="{{ request()->routeIs('admin.bookings.*') ? 'mm-active' : '' }}">
        <a href="#">
            <div class="parent-icon"><i class="bi bi-calendar-check-fill"></i></div>
            <div class="menu-title">Bookings</div>
        </a>
    </li>
    <li class="{{ request()->routeIs('admin.chat') ? 'mm-active' : '' }}">
        <a href="#">
            <div class="parent-icon"><i class="bi bi-chat-dots-fill"></i></div>
            <div class="menu-title">Chat Portal</div>
        </a>
    </li>
    <li class="{{ request()->routeIs('admin.notifications') ? 'mm-active' : '' }}">
        <a href="#">
            <div class="parent-icon"><i class="bi bi-bell-fill"></i></div>
            <div class="menu-title">Notifications</div>
        </a>
    </li>
    <li class="{{ request()->routeIs('admin.settings') ? 'mm-active' : '' }}">
        <a href="#">
            <div class="parent-icon"><i class="bi bi-gear-fill"></i></div>
            <div class="menu-title">Business Settings</div>
        </a>
    </li>
    <li class="{{ request()->routeIs('admin.reports') ? 'mm-active' : '' }}">
        <a href="#">
            <div class="parent-icon"><i class="bi bi-bar-chart-fill"></i></div>
            <div class="menu-title">Reports & Analytics</div>
        </a>
    </li>
</ul>