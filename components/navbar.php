<?php
/**
 * Main Navigation Component
 * @version 1.0.2
 */

// Load dynamic configuration
require_once __DIR__ . '/../config.php';

// Navbar Configuration
$navConfig = [
    'brand' => [
        'name' => 'JAVAPEDIA',
        'logo' => $BASE_URL . '/assets/javapedia.png',
        'url'  => $BASE_URL . '/index.php'
    ],
    'menu' => [
        'home' => [
            'text' => 'Beranda',
            'url' => $BASE_URL . '/index.php',
            'icon' => 'ri-home-line',
            'current' => $currentPage === $subfolder . '/index.php'
        ],
        'services' => [
            'text' => 'Jasa Joki',
            'icon' => 'ri-gamepad-line',
            'items' => [
                [
                    'text' => 'PUBG Mobile',
                    'url' => $BASE_URL . '/pages/infoorder/pubg.php',
                    'icon' => 'ri-sword-line',
                    'current' => $currentPage === $subfolder . '/pages/infoorder/pubg.php'
                ],
                [
                    'text' => 'Mobile Legends',
                    'url' => $BASE_URL . '/pages/infoorder/ml.php',
                    'icon' => 'ri-sword-line',
                    'current' => $currentPage === $subfolder . '/pages/infoorder/ml.php'
                ],
                [
                    'text' => 'PUBGM Event',
                    'url' => $BASE_URL . '/pages/info/event.php',
                    'icon' => 'ri-trophy-line',
                    'current' => $currentPage === $subfolder . '/pages/info/event.php'
                ]
            ]
        ],
        'pages' => [
            'text' => 'Pages',
            'icon' => 'ri-pages-line',
            'items' => [
                [
                    'text' => 'About',
                    'url' => $BASE_URL . '/about.php',
                    'icon' => 'ri-information-line',
                    'current' => $currentPage === $subfolder . '/about.php'
                ],
                [
                    'text' => 'Testimonial',
                    'url' => $BASE_URL . '/pages/info/testi.php',
                    'icon' => 'ri-chat-quote-line',
                    'current' => $currentPage === $subfolder . '/pages/info/testi.php'
                ],
            ]
        ],
        'contact' => [
            'text' => 'Contact',
            'url' => $BASE_URL . '/pages/info/contact.php',
            'icon' => 'ri-contacts-line',
            'current' => $currentPage === $subfolder . '/pages/info/contact.php'
        ]
    ]
];
?>

<!-- Stylesheets -->
<link rel="stylesheet" href="<?= $BASE_URL ?>/css/components/navbar.css">
<link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

<header class="header" role="banner">
    <nav class="navbar" role="navigation" aria-label="Main navigation">
        <div class="navbar__container">
            <!-- Brand/Logo -->
            <a href="<?= htmlspecialchars($navConfig['brand']['url']) ?>" 
               class="navbar__brand" 
               aria-label="<?= htmlspecialchars($navConfig['brand']['name']) ?> - Return to homepage">
                <img src="<?= htmlspecialchars($navConfig['brand']['logo']) ?>" 
                     alt="<?= htmlspecialchars($navConfig['brand']['name']) ?>" 
                     class="navbar__logo"
                     width="32" 
                     height="32">
                <span><?= htmlspecialchars($navConfig['brand']['name']) ?></span>
            </a>

            <!-- Mobile Menu Toggle -->
            <button type="button" 
                    class="navbar__toggle" 
                    aria-controls="navbar-menu" 
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <i class="ri-menu-line" aria-hidden="true"></i>
            </button>

            <!-- Navigation Menu -->
            <div class="navbar__menu" id="navbar-menu">
                <ul class="navbar__list">
                    <?php foreach ($navConfig['menu'] as $key => $item): ?>
                        <li class="navbar__item <?= isset($item['items']) ? 'navbar__item--has-dropdown' : '' ?>">
                            <?php if (isset($item['items'])): ?>
                                <!-- Dropdown Toggle -->
                                <button type="button" 
                                        class="navbar__dropdown-toggle" 
                                        aria-expanded="false"
                                        aria-controls="dropdown-<?= $key ?>">
                                    <span>
                                        <i class="<?= htmlspecialchars($item['icon']) ?>" aria-hidden="true"></i>
                                        <?= htmlspecialchars($item['text']) ?>
                                    </span>
                                    <i class="ri-arrow-down-s-line" aria-hidden="true"></i>
                                </button>
                                <!-- Dropdown Menu -->
                                <ul class="navbar__dropdown" id="dropdown-<?= $key ?>">
                                    <?php foreach ($item['items'] as $subItem): ?>
                                        <li class="navbar__dropdown-item">
                                            <a href="<?= htmlspecialchars($subItem['url']) ?>" 
                                               class="navbar__dropdown-link <?= $subItem['current'] ? 'navbar__dropdown-link--active' : '' ?>">
                                                <i class="<?= htmlspecialchars($subItem['icon']) ?>" aria-hidden="true"></i>
                                                <?= htmlspecialchars($subItem['text']) ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php else: ?>
                                <!-- Regular Link -->
                                <a href="<?= htmlspecialchars($item['url']) ?>" 
                                   class="navbar__link <?= $item['current'] ? 'navbar__link--active' : '' ?>">
                                    <i class="<?= htmlspecialchars($item['icon']) ?>" aria-hidden="true"></i>
                                    <?= htmlspecialchars($item['text']) ?>
                                </a>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Backdrop -->
            <div class="navbar__backdrop" aria-hidden="true"></div>
        </div>
    </nav>
</header>

<!-- Scripts -->
<script src="<?= $BASE_URL ?>/js/components/navbar.js" defer></script>
