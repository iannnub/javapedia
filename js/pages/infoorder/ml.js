document.addEventListener('DOMContentLoaded', () => {
    // Package data
    const mlPackages = [
        {
            tier: 'Epic V - Legend V',
            price: 150000,
            features: ['WR Naik', 'Pengerjaan Cepat', '100% Aman'],
            image: '../../assets/ml/epic-legend.webp'
        },
        {
            tier: 'Epic I - Mythic',
            price: 250000,
            features: ['WR Naik', 'Pengerjaan Express', '100% Aman'],
            image: '../../assets/ml/epic-mythic.webp'
        },
        {
            tier: 'Legend V - Mythic Glory',
            price: 1110000,
            features: ['WR Naik', 'Pengerjaan Express', '100% Aman', 'Bonus Skin Trial'],
            image: '../../assets/ml/legend-mythic.webp'
        }
    ];

    // Load packages
    const pointsGrid = document.querySelector('.points-grid');
    if (pointsGrid) {
        mlPackages.forEach(package => {
            const card = createPointsPackageCard(package);
            pointsGrid.appendChild(card);
        });
    }

    // Status Popup Functionality
    const statusButton = document.querySelector('.status-button');
    const statusPopup = document.querySelector('.status-popup');
    const closeButton = document.querySelector('.status-popup__close');

    if (statusButton && statusPopup && closeButton) {
        function togglePopup() {
            const isHidden = statusPopup.getAttribute('aria-hidden') === 'true';
            statusPopup.setAttribute('aria-hidden', !isHidden);
            statusButton.setAttribute('aria-expanded', !isHidden);

            if (!isHidden) {
                closeButton.focus();
            }
        }

        function closePopup() {
            statusPopup.setAttribute('aria-hidden', 'true');
            statusButton.setAttribute('aria-expanded', 'false');
            statusButton.focus();
        }

        // Event Listeners
        statusButton.addEventListener('click', togglePopup);
        closeButton.addEventListener('click', closePopup);

        // Close popup when clicking outside
        statusPopup.addEventListener('click', (e) => {
            if (e.target === statusPopup) {
                closePopup();
            }
        });

        // Close popup with Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && statusPopup.getAttribute('aria-hidden') === 'false') {
                closePopup();
            }
        });
    }

    // Add click handlers to all order buttons
    document.querySelectorAll('.package-card__button').forEach(button => {
        button.addEventListener('click', handleOrderClick);
    });

    // Handle order button clicks
    function handleOrderClick(event) {
        const button = event.currentTarget;
        const card = button.closest('.package-card');
        const title = card.querySelector('.package-card__title').textContent;
        const price = card.querySelector('.package-card__price-current').textContent;

    }

    // Setup keyboard navigation
    setupKeyboardNavigation();
});

// Create a card element for points package
function createPointsPackageCard(package) {
    const article = document.createElement('article');
    article.className = 'package-card';
    article.setAttribute('role', 'article');

    const html = `
        <div class="package-card__badges">
            <img src="${package.image}" alt="${package.tier} Badge" class="package-card__tier-img">
        </div>
        <div class="package-card__content">
            <h2 class="package-card__title">Tier ${package.tier}</h2>
            <p class="package-card__price">
                <span class="package-card__price-current">IDR ${package.price.toLocaleString()}</span>
            </p>
            <ul class="package-card__features">
                ${package.features.map(feature => `<li>${feature}</li>`).join('')}
            </ul>
            <button class="package-card__button" 
                    aria-label="Order ${package.tier} package"
                    data-tier="${package.tier}"
                    data-price="${package.price}">
                Order Sekarang
            </button>
        </div>
    `;

    article.innerHTML = html;
    return article;
}

// Add keyboard navigation
function setupKeyboardNavigation() {
    const focusableElements = document.querySelectorAll('button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])');
    
    // Add keyboard navigation for package cards
    document.querySelectorAll('.package-card').forEach(card => {
        card.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                const button = card.querySelector('.package-card__button');
                if (button) {
                    button.click();
                }
            }
        });
    });

    // Handle tab navigation in popup
    const statusPopup = document.querySelector('.status-popup');
    if (statusPopup) {
        statusPopup.addEventListener('keydown', (e) => {
            if (e.key === 'Tab') {
                const focusablePopupElements = statusPopup.querySelectorAll('button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])');
                const firstFocusable = focusablePopupElements[0];
                const lastFocusable = focusablePopupElements[focusablePopupElements.length - 1];

                if (e.shiftKey) {
                    if (document.activeElement === firstFocusable) {
                        e.preventDefault();
                        lastFocusable.focus();
                    }
                } else {
                    if (document.activeElement === lastFocusable) {
                        e.preventDefault();
                        firstFocusable.focus();
                    }
                }
            }
        });
    }
}