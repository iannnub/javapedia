// Initialize AOS (Animate On Scroll)
document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS
    AOS.init({
        duration: 800,
        easing: 'ease-out-cubic',
        once: true,
        mirror: false,
        offset: 50,
        anchorPlacement: 'top-bottom'
    });

    // Animate statistics numbers
    function animateValue(element, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            const current = Math.floor(progress * (end - start) + start);
            const suffix = element.hasAttribute('data-suffix') ? element.getAttribute('data-suffix') : (current > 1000 ? '+' : '%');
            element.textContent = current.toLocaleString() + suffix;
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }

    // Intersection Observer for statistics
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.5
    };

    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const statItems = document.querySelectorAll('.stat-number');
                statItems.forEach(item => {
                    const value = parseInt(item.textContent.replace(/[^0-9]/g, ''));
                    animateValue(item, 0, value, 2000);
                });
                statsObserver.disconnect(); // Only animate once
            }
        });
    }, observerOptions);

    // Observe the stats section
    const statsSection = document.querySelector('.hero__stats');
    if (statsSection) {
        statsObserver.observe(statsSection);
    }

    // Add hover effect sound
    const statItems = document.querySelectorAll('.stat-item');
    statItems.forEach(item => {
        item.addEventListener('mouseenter', () => {
            const hoverSound = new Audio('/jp/assets/sounds/hover.mp3');
            hoverSound.volume = 0.2;
            hoverSound.play().catch(() => {}); // Ignore errors if sound can't play
        });
    });
});