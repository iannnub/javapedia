document.addEventListener('DOMContentLoaded', () => {
    // Elements
    const navbar = document.querySelector('.navbar');
    const navbarToggle = document.querySelector('.navbar__toggle');
    const navbarMenu = document.querySelector('.navbar__menu');
    const backdrop = document.querySelector('.navbar__backdrop');
    const dropdownToggles = document.querySelectorAll('.navbar__dropdown-toggle');

    // State
    let isMenuOpen = false;
    let activeDropdown = null;

    // Toggle mobile menu
    const toggleMobileMenu = (show) => {
        isMenuOpen = show;
        navbarToggle.setAttribute('aria-expanded', show);
        navbarMenu.classList.toggle('is-active', show);
        backdrop.classList.toggle('is-active', show);
        document.body.style.overflow = show ? 'hidden' : '';

        // Close any open dropdowns when closing menu
        if (!show) {
            closeAllDropdowns();
        }
    };

    // Toggle dropdown
    const toggleDropdown = (button, show = null) => {
        const wasOpen = button.getAttribute('aria-expanded') === 'true';
        const willShow = show !== null ? show : !wasOpen;

        // Close other dropdowns
        if (willShow) {
            dropdownToggles.forEach(otherButton => {
                if (otherButton !== button && otherButton.getAttribute('aria-expanded') === 'true') {
                    toggleDropdown(otherButton, false);
                }
            });
        }

        // Toggle current dropdown
        button.setAttribute('aria-expanded', willShow);
        const dropdown = button.nextElementSibling;
        dropdown.classList.toggle('is-active', willShow);

        // Update active dropdown reference
        activeDropdown = willShow ? button : null;
    };

    // Close all dropdowns
    const closeAllDropdowns = () => {
        dropdownToggles.forEach(button => {
            toggleDropdown(button, false);
        });
        activeDropdown = null;
    };

    // Event Listeners
    navbarToggle?.addEventListener('click', () => {
        toggleMobileMenu(!isMenuOpen);
    });

    backdrop?.addEventListener('click', () => {
        toggleMobileMenu(false);
    });

    // Handle dropdown toggles
    dropdownToggles.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            toggleDropdown(button);
        });
    });

    // Close menu and dropdowns when clicking outside
    document.addEventListener('click', (e) => {
        const isClickInside = navbar.contains(e.target);
        
        if (!isClickInside) {
            toggleMobileMenu(false);
            closeAllDropdowns();
        }
    });

    // Keyboard Navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            if (activeDropdown) {
                toggleDropdown(activeDropdown, false);
            } else if (isMenuOpen) {
                toggleMobileMenu(false);
            }
        }
    });

    // Handle window resize
    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            if (window.innerWidth > 768) {
                toggleMobileMenu(false);
                closeAllDropdowns();
            }
        }, 250);
    });

    // Shrink navbar on scroll
    let lastScroll = 0;
    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll > 50) {
            navbar.classList.add('is-scrolled');
            if (currentScroll > lastScroll) {
                navbar.classList.add('is-hidden');
            } else {
                navbar.classList.remove('is-hidden');
            }
        } else {
            navbar.classList.remove('is-scrolled', 'is-hidden');
        }
        
        lastScroll = currentScroll;
    });

    // Add smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href !== '#') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    const navbarHeight = navbar.offsetHeight;
                    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset;
                    window.scrollTo({
                        top: targetPosition - navbarHeight,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu after clicking
                    toggleMobileMenu(false);
                }
            }
        });
    });
});