// Initialize all functionality when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    initMobileMenu();
    initIntersectionObserver();
    initSmoothScroll();
    initParallaxEffect();
    initTouchFeedback();
    initCarousel();
});

// Mobile menu functionality
function initMobileMenu() {
    const menuToggle = document.querySelector('.nav__toggle');
    const menu = document.querySelector('.nav__menu');
    const menuLinks = document.querySelectorAll('.nav__link');
    
    if (menuToggle && menu) {
        menuToggle.addEventListener('click', () => {
            const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
            menuToggle.setAttribute('aria-expanded', !isExpanded);
            menu.classList.toggle('active');
            document.body.style.overflow = isExpanded ? '' : 'hidden';
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!menu.contains(e.target) && !menuToggle.contains(e.target) && menu.classList.contains('active')) {
                menu.classList.remove('active');
                menuToggle.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
            }
        });

        // Close menu when clicking on a link
        menuLinks.forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.remove('active');
                menuToggle.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
            });
        });
    }
}

// Handle fade-in animations using Intersection Observer
function initIntersectionObserver() {
    const fadeElements = document.querySelectorAll('.feature-card, .service-card, .hero__tag, .hero__title, .hero__badges, .hero__description, .hero__actions');
    
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    fadeElements.forEach((element, index) => {
        // Add a slight delay to each element for a cascade effect
        element.style.animationDelay = `${index * 0.1}s`;
        observer.observe(element);
    });
}

// Smooth scrolling for anchor links
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                const headerOffset = 80; // Account for fixed header
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// Parallax effect for hero background
function initParallaxEffect() {
    const heroSection = document.querySelector('.hero');
    const heroBackground = document.querySelector('.hero__bg');
    
    if (heroSection && heroBackground && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const rate = scrolled * 0.5;
            
            // Only apply transform when the hero section is in view
            if (scrolled < heroSection.offsetHeight) {
                heroBackground.style.transform = `translate3d(0, ${rate}px, 0)`;
            }
        }, { passive: true });
    }
}

// Add touch feedback for interactive elements
function initTouchFeedback() {
    const interactiveElements = document.querySelectorAll('.btn, .feature-card, .service-card, .nav__link');
    
    interactiveElements.forEach(element => {
        // Touch start - scale down slightly
        element.addEventListener('touchstart', function() {
            this.style.transform = 'scale(0.98)';
        }, { passive: true });
        
        // Touch end - restore scale with transition
        ['touchend', 'touchcancel'].forEach(event => {
            element.addEventListener(event, function() {
                this.style.transition = 'transform 0.2s ease';
                this.style.transform = '';
                // Remove transition after animation
                setTimeout(() => {
                    this.style.transition = '';
                }, 200);
            });
        });
    });
}

// Carousel functionality
function initCarousel() {
    const slides = document.querySelectorAll('.hero__slide');
    let currentSlide = 0;
    
    function showSlide(index) {
        slides.forEach(slide => slide.classList.remove('active'));
        slides[index].classList.add('active');
    }
    
    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }
    
    // Change slide every 5 seconds
    setInterval(nextSlide, 5000);
}