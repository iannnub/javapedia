// Footer Component JavaScript
document.addEventListener('DOMContentLoaded', () => {
    // Initialize footer links
    const footerLinks = document.querySelectorAll('.footer__link');
    
    // Add keyboard navigation handling
    footerLinks.forEach(link => {
        link.addEventListener('keydown', (e) => {
            // Handle enter key
            if (e.key === 'Enter') {
                e.preventDefault();
                link.click();
            }
        });
    });

    // Handle dynamic year in copyright if needed
    const yearElement = document.querySelector('.footer__year');
    if (yearElement) {
        yearElement.textContent = new Date().getFullYear();
    }

    // Optional: Lazy load footer images
    const footerImages = document.querySelectorAll('.footer__logo, .footer__support-logo');
    if ('loading' in HTMLImageElement.prototype) {
        footerImages.forEach(img => {
            if (img.dataset.src) {
                img.src = img.dataset.src;
            }
        });
    } else {
        // Fallback for browsers that don't support lazy loading
        const script = document.createElement('script');
        script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js';
        document.body.appendChild(script);
    }
});