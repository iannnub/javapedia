<?php
$protocol = isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "on" ? "https" : "http";
$domain = $_SERVER['HTTP_HOST'];
$isLocalhost = in_array($domain, ['localhost', '127.0.0.1']);

// Ganti '/jp' jika nama folder lokal berbeda
$subfolder = $isLocalhost ? '/jp' : '';
$BASE_URL = $protocol . '://' . $domain . $subfolder;

// Konfigurasi Footer
$footerConfig = [
    'brand' => [
        'name' => 'JAVAPEDIA',
        'logo' => $BASE_URL . '/assets/javapedia.png',
        'tagline' => 'Jasa Joki Game Online Terpercaya'
    ],
    'contact' => [
        'address' => [
            'text' => 'Lokasi: Jember',
            'url' => 'https://maps.app.goo.gl/xxx',
            'icon' => 'map-marker-alt'
        ],
        'phone' => [
            'text' => 'Telepon: 082132167400',
            'url' => 'tel:+6282132167400',
            'icon' => 'phone'
        ]
    ],
    'social' => [
        'whatsapp' => [
            'text' => 'WhatsApp',
            'url' => 'https://wa.me/6282132167400',
            'icon' => 'fab fa-whatsapp'
        ],
        'tiktok' => [
            'text' => 'TikTok',
            'url' => 'https://tiktok.com/@iannnub',
            'icon' => 'fab fa-tiktok'
        ],
        'instagram' => [
            'text' => 'Instagram',
            'url' => 'https://www.instagram.com/javapedia_',
            'icon' => 'fab fa-instagram'
        ]
    ],
    'support' => [
        'sociabuzz' => [
            'text' => 'Sociabuzz',
            'url' => 'https://sociabuzz.com/iannnub/tribe',
            'icon' => 'heart'
        ],
        'customer_support' => [
            'text' => 'Customer Support',
            'url' => '#support',
            'icon' => 'headset'
        ]
    ],
    'menu' => [
        'home' => [
            'text' => 'Beranda',
            'url' => $BASE_URL . '/index.php',
            'icon' => 'home'
        ],
        'services' => [
            'text' => 'Layanan Joki',
            'url' => $BASE_URL . '/pages/infoorder/pubg.php',
            'icon' => 'gamepad'
        ],
        'pages' => [
            'text' => 'Halaman Lain',
            'url' => $BASE_URL . '/pages',
            'icon' => 'file'
        ]
    ]
];
?>

<link rel="preload" href="css/components/footer.css" as="style">
<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" as="style">
<link rel="preload" href="js/components/footer.js" as="script">

<!-- Stylesheets -->
<link rel="stylesheet" href="css/components/footer.css">
<link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer">

<!-- Footer Section -->
<footer class="footer" role="contentinfo" aria-label="Informasi Kontak dan Menu">
    <div class="container">
        <!-- Brand Section -->
        <div class="footer__brand">
            <img src="<?= htmlspecialchars($footerConfig['brand']['logo']) ?>" 
                alt="<?= htmlspecialchars($footerConfig['brand']['name']) ?> Logo" 
                class="footer__logo"
                width="120"
                height="120"
                loading="lazy">
            <h2 class="footer__title"><?= htmlspecialchars($footerConfig['brand']['name']) ?></h2>
            <p class="footer__subtitle"><?= htmlspecialchars($footerConfig['brand']['tagline']) ?></p>
        </div>

        <div class="footer__content">
            <!-- Contact Information -->
            <div class="footer__column">
                <h3 class="footer__heading">Hubungi Kami</h3>
                <ul class="footer__list" aria-label="Informasi Kontak">
                    <?php foreach ($footerConfig['contact'] as $contact): ?>
                        <li>
                            <a href="<?= htmlspecialchars($contact['url']) ?>" 
                               class="footer__link"
                               <?= strpos($contact['url'], 'http') === 0 ? 'target="_blank" rel="noopener noreferrer"' : '' ?>>
                                <i class="fas fa-<?= $contact['icon'] ?>" aria-hidden="true"></i>
                                <span><?= htmlspecialchars($contact['text']) ?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Social Media -->
            <div class="footer__column">
                <h3 class="footer__heading">Media Sosial</h3>
                <ul class="footer__list" aria-label="Media Sosial">
                    <?php foreach ($footerConfig['social'] as $social): ?>
                        <li>
                            <a href="<?= htmlspecialchars($social['url']) ?>" 
                               class="footer__link"
                               target="_blank" 
                               rel="noopener noreferrer"
                               aria-label="<?= htmlspecialchars($social['text']) ?>">
                                <i class="<?= $social['icon'] ?>" aria-hidden="true"></i>
                                <span><?= htmlspecialchars($social['text']) ?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Support -->
            <div class="footer__column">
                <h3 class="footer__heading">Dukungan</h3>
                <ul class="footer__list" aria-label="Dukungan">
                    <?php foreach ($footerConfig['support'] as $support): ?>
                        <li>
                            <a href="<?= htmlspecialchars($support['url']) ?>" 
                               class="footer__link"
                               <?= strpos($support['url'], 'http') === 0 ? 'target="_blank" rel="noopener noreferrer"' : '' ?>>
                                <i class="fas fa-<?= $support['icon'] ?>" aria-hidden="true"></i>
                                <span><?= htmlspecialchars($support['text']) ?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Website Menu -->
            <div class="footer__column">
                <h3 class="footer__heading">Menu Website</h3>
                <nav aria-label="Menu Footer">
                    <ul class="footer__list">
                        <?php foreach ($footerConfig['menu'] as $menuItem): ?>
                            <li>
                                <a href="<?= htmlspecialchars($menuItem['url']) ?>" 
                                   class="footer__link">
                                    <i class="fas fa-<?= $menuItem['icon'] ?>" aria-hidden="true"></i>
                                    <span><?= htmlspecialchars($menuItem['text']) ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="js/components/footer.js" defer></script>