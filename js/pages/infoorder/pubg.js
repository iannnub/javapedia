document.addEventListener('DOMContentLoaded', () => {
    // Points package data
    const pointsPackages = [
        {
            tier: 'Gold',
            price: 2000,
            features: ['KD Naik', 'Pengerjaan Cepat'],
            image: '/assets/images/pubg/gold-badge.png'
        },
        {
            tier: 'Platinum',
            price: 4000,
            features: ['KD Naik', 'Pengerjaan Cepat'],
            image: '/assets/images/pubg/platinum-badge.png'
        },
        {
            tier: 'Diamond',
            price: 8000,
            features: ['KD Naik', 'Pengerjaan Cepat'],
            image: '/assets/images/pubg/diamond-badge.png'
        },
        {
            tier: 'Crown',
            price: 12000,
            features: ['KD Naik', 'Pengerjaan Cepat'],
            image: '/assets/images/pubg/crown-badge.png'
        },
        {
            tier: 'Ace',
            price: 27000,
            features: ['KD Naik', 'Pengerjaan Cepat'],
            image: '/assets/images/pubg/ace-badge.png'
        },
        {
            tier: 'Ace Master',
            price: 30000,
            features: ['KD Naik', 'Pengerjaan Cepat'],
            image: '/assets/images/pubg/ace-master-badge.png'
        }
    ];

    // Load points packages
    const pointsGrid = document.querySelector('.points-grid');
    if (pointsGrid) {
        pointsPackages.forEach(package => {
            const card = createPointsPackageCard(package);
            pointsGrid.appendChild(card);
        });
    }

    // Add click handlers to all order buttons
    document.querySelectorAll('.package-card__button').forEach(button => {
        button.addEventListener('click', handleOrderClick);
    });

    // Status Popup Functionality
    const statusButton = document.querySelector('.status-button');
    const statusPopup = document.querySelector('.status-popup');
    const closeButton = document.querySelector('.status-popup__close');

    if (statusButton && statusPopup && closeButton) {
        function togglePopup() {
            const isHidden = statusPopup.getAttribute('aria-hidden') === 'true';
            statusPopup.setAttribute('aria-hidden', !isHidden);
            statusButton.setAttribute('aria-expanded', !isHidden);
        }

        function closePopup() {
            statusPopup.setAttribute('aria-hidden', 'true');
            statusButton.setAttribute('aria-expanded', 'false');
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

// Handle order button clicks
function handleOrderClick(event) {
    const button = event.currentTarget;
    const card = button.closest('.package-card');
    const tier = button.dataset.tier;
    const price = button.dataset.price;

    // Add visual feedback
    button.classList.add('package-card__button--loading');
    
    // Simulate order processing
    setTimeout(() => {
        button.classList.remove('package-card__button--loading');
        // Here you would typically redirect to a checkout page or open a modal
        window.location.href = `/checkout?package=pubg&tier=${tier}&price=${price}`;
    }, 500);
}

// Add keyboard navigation
function setupKeyboardNavigation() {
    const cards = document.querySelectorAll('.package-card');
    cards.forEach((card, index) => {
        const button = card.querySelector('.package-card__button');
        
        button.addEventListener('keydown', (e) => {
            switch(e.key) {
                case 'ArrowRight':
                    if (index < cards.length - 1) {
                        cards[index + 1].querySelector('.package-card__button').focus();
                    }
                    break;
                case 'ArrowLeft':
                    if (index > 0) {
                        cards[index - 1].querySelector('.package-card__button').focus();
                    }
                    break;
            }
        });
    });
}

// Initialize keyboard navigation
document.addEventListener('DOMContentLoaded', setupKeyboardNavigation);