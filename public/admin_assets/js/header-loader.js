document.addEventListener("DOMContentLoaded", function () {
  const headerContent = `
    <nav class="navbar navbar-expand gap-3">
      <div class="mobile-toggle-icon fs-3 d-flex d-lg-none">
        <i class="bi bi-list"></i>
      </div>
      <form class="searchbar" action="bookings.html">
        <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
        <input class="form-control" type="text" placeholder="Type here to search">
        <div class="position-absolute top-50 translate-middle-y search-close-icon"><i class="bi bi-x-lg"></i></div>
      </form>
      <div class="top-navbar-right ms-auto">
        <ul class="navbar-nav align-items-center gap-1">
          <li class="nav-item search-toggle-icon d-flex d-lg-none">
            <a class="nav-link" href="javascript:;">
              <div class="">
                <i class="bi bi-search"></i>
              </div>
            </a>
          </li>
          <li class="nav-item dropdown dropdown-large">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
              <div class="notifications">
                <span class="notify-badge">5</span>
                <i class="bi bi-bell-fill"></i>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end p-0">
              <div class="p-2 border-bottom m-2">
                <h5 class="h5 mb-0">Notifications</h5>
              </div>
              <div class="header-notifications-list p-2">
                <!-- Sample notifications -->
                <a class="dropdown-item" href="bookings.html">
                  <div class="d-flex align-items-center">
                    <div class="notification-box bg-light-primary text-primary"><i class="bi bi-basket2-fill"></i></div>
                    <div class="ms-3 flex-grow-1">
                      <h6 class="mb-0 dropdown-msg-user">New Booking <span class="msg-time float-end text-secondary">2 m</span></h6>
                      <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">B-5012: Paris Family Getaway</small>
                    </div>
                  </div>
                </a>
              </div>
              <div class="p-2">
                <div><hr class="dropdown-divider"></div>
                <a class="dropdown-item" href="notifications.html">
                  <div class="text-center">View All Notifications</div>
                </a>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="dropdown dropdown-user-setting">
        <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
          <div class="user-setting d-flex align-items-center gap-3">
            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=2070&auto=format&fit=crop" class="user-img" alt="">
            <div class="d-none d-sm-block">
              <p class="user-name mb-0">Admin User</p>
              <small class="mb-0 dropdown-user-designation">Operations Admin</small>
            </div>
          </div>
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li>
            <a class="dropdown-item" href="settings.html">
              <div class="d-flex align-items-center">
                <div class=""><i class="bi bi-person-fill"></i></div>
                <div class="ms-3"><span>Profile</span></div>
              </div>
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="settings.html">
              <div class="d-flex align-items-center">
                <div class=""><i class="bi bi-gear-fill"></i></div>
                <div class="ms-3"><span>Setting</span></div>
              </div>
            </a>
          </li>
          <li><hr class="dropdown-divider"></li>
          <li>
            <a class="dropdown-item" href="login.html">
              <div class="d-flex align-items-center">
                <div class=""><i class="bi bi-lock-fill"></i></div>
                <div class="ms-3"><span>Logout</span></div>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  `;
  document.querySelector('.top-header').innerHTML = headerContent;

  // Handle dark mode toggle
  document.querySelector('.dark-mode-icon').addEventListener('click', function () {
    document.body.classList.toggle('dark-theme');
    document.body.classList.toggle('light-theme');
  });

  // Handle mobile toggle
  document.querySelector('.mobile-toggle-icon').addEventListener('click', function () {
    document.querySelector('.wrapper').classList.toggle('toggled');
  });
});
