document.addEventListener("DOMContentLoaded", function () {
    const sidebarContent = `
    <div class="sidebar-header">
      <div class="d-flex align-items-center gap-2">
        <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon" style="width: 45px; border-radius: 50%;">
        <h4 class="logo-text mb-0">PackHappy</h4>
      </div>
      <div class="toggle-icon ms-auto"><i class="bi bi-list"></i></div>
    </div>
    <ul class="metismenu" id="menu">
      <li>
        <a href="index.html">
          <div class="parent-icon"><i class="bi bi-grid-fill"></i></div>
          <div class="menu-title">Dashboard</div>
        </a>
      </li>
      <li>
        <a href="users.html">
          <div class="parent-icon"><i class="bi bi-people-fill"></i></div>
          <div class="menu-title">User Management</div>
        </a>
      </li>
      <li>
        <a href="facilities.html">
          <div class="parent-icon"><i class="bi bi-building"></i></div>
          <div class="menu-title">Facilities</div>
        </a>
      </li>
      <li>
        <a href="banners.html">
          <div class="parent-icon"><i class="bi bi-image"></i></div>
          <div class="menu-title">Banners/Offers</div>
        </a>
      </li>
      <li>
        <a href="packages.html">
          <div class="parent-icon"><i class="bi bi-briefcase-fill"></i></div>
          <div class="menu-title">Packages</div>
        </a>
      </li>
      <li>
        <a href="bookings.html">
          <div class="parent-icon"><i class="bi bi-calendar-check-fill"></i></div>
          <div class="menu-title">Bookings</div>
        </a>
      </li>
      <li>
        <a href="chat.html">
          <div class="parent-icon"><i class="bi bi-chat-dots-fill"></i></div>
          <div class="menu-title">Chat Portal</div>
        </a>
      </li>
      <li>
        <a href="notifications.html">
          <div class="parent-icon"><i class="bi bi-bell-fill"></i></div>
          <div class="menu-title">Notifications</div>
        </a>
      </li>
      <li>
        <a href="settings.html">
          <div class="parent-icon"><i class="bi bi-gear-fill"></i></div>
          <div class="menu-title">Business Settings</div>
        </a>
      </li>
      <li>
        <a href="cms.html">
          <div class="parent-icon"><i class="bi bi-file-earmark-text-fill"></i></div>
          <div class="menu-title">CMS Management</div>
        </a>
      </li>
      <li>
        <a href="reports.html">
          <div class="parent-icon"><i class="bi bi-bar-chart-fill"></i></div>
          <div class="menu-title">Reports & Analytics</div>
        </a>
      </li>
    </ul>
  `;
    document.querySelector('.sidebar-wrapper').innerHTML = sidebarContent;

    // Re-initialize metisMenu if it exists
    if (typeof $.fn.metisMenu === 'function') {
        $('#menu').metisMenu();
    }

    // Set active menu item
    const currentPath = window.location.pathname.split('/').pop() || 'index.html';
    const menuLinks = document.querySelectorAll('#menu a');
    menuLinks.forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.parentElement.classList.add('mm-active');
            link.classList.add('mm-active');
        }
    });

    // Handle toggle icon
    document.querySelector('.toggle-icon').addEventListener('click', function () {
        document.querySelector('.wrapper').classList.toggle('toggled');
    });
});
