
/**
 * Initialize all components when DOM is ready
 */
document.addEventListener('DOMContentLoaded', function () {
    // Initialize AOS (Animate On Scroll)
    AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true,
        offset: 100
    });

    // Sticky Header on Scroll
    initStickyHeader();

    // Smooth Scrolling
    initSmoothScroll();

    // Scroll to Top Button
    initScrollToTop();

    // Mobile Menu Close on Link Click
    initMobileMenuClose();

    // Initialize Dropdown Toggle Behavior
    initDropdownToggle();
});

/**
 * Sticky Header Functionality
 */
function initStickyHeader() {
    const header = document.getElementById('header');

    window.addEventListener('scroll', function () {
        if (window.scrollY > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
}

/**
 * Smooth Scrolling for Anchor Links
 */
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');

            // Skip if href is just "#"
            if (href === '#') {
                e.preventDefault();
                return;
            }

            const target = document.querySelector(href);

            if (target) {
                e.preventDefault();

                const headerOffset = 80;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}

/**
 * Scroll to Top Button
 */
function initScrollToTop() {
    const scrollToTopBtn = document.getElementById('scrollToTop');

    if (!scrollToTopBtn) return;

    // Show/hide button based on scroll position
    window.addEventListener('scroll', function () {
        if (window.scrollY > 300) {
            scrollToTopBtn.classList.add('visible');
        } else {
            scrollToTopBtn.classList.remove('visible');
        }
    });

    // Scroll to top on click
    scrollToTopBtn.addEventListener('click', function () {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

/**
 * Close Mobile Menu on Link Click
 */
function initMobileMenuClose() {
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    if (!navbarCollapse) return;

    // Close menu when clicking on regular nav links (not dropdown toggles)
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link:not(.dropdown-toggle)');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            // Don't close if it's a dropdown toggle
            if (this.classList.contains('dropdown-toggle')) {
                return;
            }
            
            if (window.innerWidth < 992) {
                const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                if (bsCollapse) {
                    bsCollapse.hide();
                }
            }
        });
    });

    // Close menu when clicking on dropdown items (actual navigation links)
    const dropdownItems = document.querySelectorAll('.dropdown-item');
    
    dropdownItems.forEach(item => {
        item.addEventListener('click', function () {
            if (window.innerWidth < 992) {
                const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                if (bsCollapse) {
                    bsCollapse.hide();
                }
            }
        });
    });

    // Close menu when clicking on "Get Started" button
    const getStartedBtn = document.querySelector('.btn-primary');
    if (getStartedBtn) {
        getStartedBtn.addEventListener('click', function () {
            if (window.innerWidth < 992) {
                const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                if (bsCollapse) {
                    bsCollapse.hide();
                }
            }
        });
    }
}

/**
 * Dropdown Toggle Behavior
 * Ensures dropdowns toggle properly on click with smooth animations
 */
function initDropdownToggle() {
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
    
    dropdownToggles.forEach(toggle => {
        // Prevent default navigation for dropdown toggles with href="#"
        toggle.addEventListener('click', function(e) {
            if (this.getAttribute('href') === '#') {
                e.preventDefault();
            }
        });
        
        // Handle dropdown show event - prepare for opening animation
        toggle.addEventListener('show.bs.dropdown', function(e) {
            const dropdownMenu = this.nextElementSibling;
            if (!dropdownMenu) return;
            
            // Close all other open dropdowns
            document.querySelectorAll('.dropdown-menu.show').forEach(otherMenu => {
                if (otherMenu !== dropdownMenu) {
                    const otherToggle = otherMenu.previousElementSibling;
                    if (otherToggle && otherToggle.classList.contains('dropdown-toggle')) {
                        const bsDropdown = bootstrap.Dropdown.getInstance(otherToggle);
                        if (bsDropdown) {
                            bsDropdown.hide();
                        }
                    }
                }
            });
            
            // Prepare opening animation - set initial state
            dropdownMenu.classList.remove('dropdown-closing', 'show');
            dropdownMenu.style.display = 'block';
            dropdownMenu.classList.add('dropdown-opening');
            
            // Force reflow to apply initial state
            dropdownMenu.offsetHeight;
            
            // Trigger opening animation by removing opening class and adding show class
            requestAnimationFrame(() => {
                dropdownMenu.classList.remove('dropdown-opening');
                dropdownMenu.classList.add('show');
            });
        });
        
        // Handle dropdown shown event - cleanup
        toggle.addEventListener('shown.bs.dropdown', function() {
            const dropdownMenu = this.nextElementSibling;
            if (dropdownMenu) {
                dropdownMenu.classList.remove('dropdown-opening');
            }
        });
        
        // Handle dropdown hide event - prepare for closing animation
        toggle.addEventListener('hide.bs.dropdown', function(e) {
            const dropdownMenu = this.nextElementSibling;
            if (dropdownMenu && dropdownMenu.classList.contains('show')) {
                // Start closing animation
                dropdownMenu.classList.remove('show');
                dropdownMenu.classList.add('dropdown-closing');
            }
        });
        
        // Handle dropdown hidden event - cleanup after closing animation
        toggle.addEventListener('hidden.bs.dropdown', function() {
            const dropdownMenu = this.nextElementSibling;
            if (dropdownMenu) {
                dropdownMenu.classList.remove('dropdown-closing', 'dropdown-opening');
                dropdownMenu.style.display = '';
            }
        });
    });
}

/**
 * Form Validation Enhancement (Optional)
 */
const forms = document.querySelectorAll('.needs-validation');

forms.forEach(form => {
    form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }

        form.classList.add('was-validated');
    }, false);
});
