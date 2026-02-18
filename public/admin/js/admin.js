// Admin panel specific scripts
(function () {
    'use strict';

    var loginForm = document.getElementById('admin-login-form');
    if (loginForm) {
        loginForm.addEventListener('submit', function () {
            var btn = document.getElementById('admin-login-btn');
            if (btn && !btn.disabled) {
                btn.disabled = true;
                btn.textContent = 'Logging in…';
            }
        });
    }
})();

