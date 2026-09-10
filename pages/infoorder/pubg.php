<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Rank Pubg Mobile</title>
    <link rel="icon" type="image/x-icon" href="../../assets/javapedia.png" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="../../css/components/footer.css">
    <link rel="stylesheet" href="../../css/pages/infoorder/pubg.css">
</head>
<body>
    <?php include '../../components/navbar.php'; ?>

    <main class="pubg-packages">
        <!-- Add Status Popup Button -->
        <button class="status-button" aria-label="Check Order Status" aria-expanded="false" aria-controls="status-popup">
            <i class="ri-file-list-3-line"></i>
            Check Status
        </button>

        <!-- Status Popup -->
        <div class="status-popup" id="status-popup" role="dialog" aria-modal="true" aria-hidden="true">
            <div class="status-popup__content">
                <header class="status-popup__header">
                    <h2>Order Status</h2>
                    <button class="status-popup__close" aria-label="Close status popup">
                        <i class="ri-close-line"></i>
                    </button>
                </header>
                <div class="status-popup__body">
                    <div class="status-item">
                        <h3>Account ID Status</h3>
                        <p class="status-text status-text--success">
                            <i class="ri-checkbox-circle-line"></i>
                            Verified
                        </p>
                    </div>
                    <div class="status-item">
                        <h3>Process Status</h3>
                        <p class="status-text status-text--progress">
                            <i class="ri-time-line"></i>
                            In Progress
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <header class="pubg-packages__header" data-aos="fade-down">
            <div class="header-accent" data-aos="fade-right">
                <span class="header-accent__line"></span>
                <i class="ri-gamepad-line"></i>
                <span class="header-accent__line"></span>
            </div>
            <h1>Joki Tier PUBG Mobile</h1>
            <div class="header-accent" data-aos="fade-left">
                <span class="header-accent__line"></span>
                <i class="ri-gamepad-line"></i>
                <span class="header-accent__line"></span>
            </div>
        </header>

        <div class="features-grid">
            <div class="feature-item" data-aos="fade-right" data-aos-delay="100">
                <div class="feature-icon">
                    <i class="ri-money-dollar-circle-line"></i>
                </div>
                <h3>Harga Terjangkau</h3>
                <p>Layanan berkualitas dengan harga bersahabat</p>
            </div>
            <div class="feature-item" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-icon">
                    <i class="ri-focus-2-line"></i>
                </div>
                <h3>Target Point</h3>
                <p>Pilih target point sesuai kebutuhan Anda</p>
            </div>
            <div class="feature-item" data-aos="fade-down" data-aos-delay="600">
                <div class="feature-icon">
                    <i class="ri-vip-crown-2-line"></i>
                </div>
                <h3>Bonus Spesial</h3>
                <p>Dapatkan bonus menarik setiap order</p>
            </div>
        </div>

        <section class="pubg-packages__grid" aria-label="Paket Rank Mobile Legends">
            <article class="package-card" tabindex="0" data-aos="fade-up">
                <div class="package-card__badges">
                    <div class="package-card__image-container">
                        <img src="../../assets/tier_pubg/plat-acee_webp.webp" alt="PUBG Mobile Tier Platinum to Ace Package" class="package-card__tier-img" width="320" height="180" loading="lazy">
                    </div>
                </div>
                <div class="package-card__content">
                    <h2 class="package-card__title">Platinum II - Ace 1</h2>
                    <div class="package-card__price" aria-label="Harga Paket">
                        <span class="package-card__price-original" aria-label="Harga Asli">IDR 160.000</span>
                        <span class="package-card__price-current" aria-label="Harga Saat Ini">IDR 120.000</span>
                    </div>
                    <ul class="package-card__features" aria-label="Fitur Paket">
                        <li><i class="ri-check-line"></i> KD Naik</li>
                        <li><i class="ri-check-line"></i> Pengerjaan Cepat</li>
                        <li><i class="ri-check-line"></i> Jaminan Aman</li>
                    </ul>
                    <a href="../orders/orderan_pubg.php" class="package-card__button" aria-label="Order Platinum to Ace 1 package"  rel="noopener noreferrer">
                        Order Sekarang
                        
                    </a>
                </div>
            </article>

            <article class="package-card package-card--featured" tabindex="0" data-aos="fade-up" data-aos-delay="100">
                <div class="package-card__badges">
                    <span class="package-card__popular-badge" aria-label="Paket Paling Populer">Terpopuler</span>
                    <div class="package-card__image-container">
                        <img src="../../assets/tier_pubg/dm-ace_webp.webp" alt="PUBG Mobile Tier Diamond to Ace Package" class="package-card__tier-img" width="320" height="180" loading="lazy">
                    </div>
                </div>
                <div class="package-card__content">
                    <h2 class="package-card__title">Diamond V - Ace 1</h2>
                    <div class="package-card__price" aria-label="Harga Paket">
                        <span class="package-card__price-original" aria-label="Harga Asli">IDR 150.000</span>
                        <span class="package-card__price-current" aria-label="Harga Saat Ini">IDR 110.000</span>
                    </div>
                    <ul class="package-card__features" aria-label="Fitur Paket">
                        <li><i class="ri-check-line"></i> KD Naik</li>
                        <li><i class="ri-check-line"></i> Pengerjaan Cepat</li>
                        <li><i class="ri-check-line"></i> Jaminan Aman</li>
                    </ul>
                    <a href="../orders/orderan_pubg.php" class="package-card__button" aria-label="Order Platinum to Ace 1 package"  rel="noopener noreferrer">
                        Order Sekarang
                        
                    </a>
                </div>
            </article>

            <article class="package-card" tabindex="0" data-aos="fade-up" data-aos-delay="200">
                <div class="package-card__badges">
                    <div class="package-card__image-container">
                        <img src="../../assets/tier_pubg/crown-ace_webp.webp" alt="PUBG Mobile Tier Crown to Ace Package" class="package-card__tier-img" width="320" height="180" loading="lazy">
                    </div>
                </div>
                <div class="package-card__content">
                    <h2 class="package-card__title">Crown V - Ace 1</h2>
                    <div class="package-card__price" aria-label="Harga Paket">
                        <span class="package-card__price-original" aria-label="Harga Asli">IDR 110.000</span>
                        <span class="package-card__price-current" aria-label="Harga Saat Ini">IDR 80.000</span>
                    </div>
                    <ul class="package-card__features" aria-label="Fitur Paket">
                        <li><i class="ri-check-line"></i> KD Naik</li>
                        <li><i class="ri-check-line"></i> Pengerjaan Cepat</li>
                        <li><i class="ri-check-line"></i> Jaminan Aman</li>
                    </ul>
                    <a href="../orders/orderan_pubg.php" class="package-card__button" aria-label="Order Platinum to Ace 1 package"  rel="noopener noreferrer">
                        Order Sekarang
                        
                    </a>
                </div>
            </article>

            <article class="package-card" tabindex="0" data-aos="fade-up" data-aos-delay="300">
                <div class="package-card__badges">
                    <div class="package-card__image-container">
                        <img src="../../assets/tier_pubg/ace-acemaster_webp.webp" alt="PUBG Mobile Tier Platinum to Crown Package" class="package-card__tier-img" width="320" height="180" loading="lazy">
                    </div>
                </div>
                <div class="package-card__content">
                    <h2 class="package-card__title">Ace 1 - Ace Master 6</h2>
                    <div class="package-card__price" aria-label="Harga Paket">
                        <span class="package-card__price-original" aria-label="Harga Asli">IDR 150.000</span>
                        <span class="package-card__price-current" aria-label="Harga Saat Ini">IDR 130.000</span>
                    </div>
                    <ul class="package-card__features" aria-label="Fitur Paket">
                        <li><i class="ri-check-line"></i> KD Naik</li>
                        <li><i class="ri-check-line"></i> Pengerjaan Cepat</li>
                        <li><i class="ri-check-line"></i> Jaminan Aman</li>
                    </ul>
                    <a href="../orders/orderan_pubg.php" class="package-card__button" aria-label="Order Platinum to Ace 1 package"  rel="noopener noreferrer">
                        Order Sekarang
                        
                    </a>
                </div>
            </article>

            <article class="package-card" tabindex="0" data-aos="fade-up" data-aos-delay="400">
                <div class="package-card__badges">
                    <div class="package-card__image-container">
                        <img src="../../assets/tier_pubg/acemaster-acedomi_webp.webp" alt="PUBG Mobile Tier Diamond to Crown Package" class="package-card__tier-img" width="320" height="180" loading="lazy">
                    </div>
                </div>
                <div class="package-card__content">
                    <h2 class="package-card__title">Ace Master 6 - Ace Dominator 12
                    </h2>
                    <div class="package-card__price" aria-label="Harga Paket">
                        <span class="package-card__price-original" aria-label="Harga Asli">IDR 250.000</span>
                        <span class="package-card__price-current" aria-label="Harga Saat Ini">IDR 150.000</span>
                    </div>
                    <ul class="package-card__features" aria-label="Fitur Paket">
                        <li><i class="ri-check-line"></i> KD Naik</li>
                        <li><i class="ri-check-line"></i> Pengerjaan Cepat</li>
                        <li><i class="ri-check-line"></i> Jaminan Aman</li>
                    </ul>
                    <a href="../orders/orderan_pubg.php" class="package-card__button" aria-label="Order Platinum to Ace 1 package"  rel="noopener noreferrer">
                        Order Sekarang
                        
                    </a>
                </div>
            </article>

            <article class="package-card" tabindex="0" data-aos="fade-up" data-aos-delay="500">
                <div class="package-card__badges">
                    <div class="package-card__image-container">
                        <img src="../../assets/tier_pubg/ace-acemaster_webp.webp" alt="PUBG Mobile Tier Gold to Crown Package" class="package-card__tier-img" width="320" height="180" loading="lazy">
                    </div>
                </div>
                <div class="package-card__content">
                    <h2 class="package-card__title">Ace 1 - Ace Dominator 12
                    </h2>
                    <div class="package-card__price" aria-label="Harga Paket">
                        <span class="package-card__price-original" aria-label="Harga Asli">IDR 320.000</span>
                        <span class="package-card__price-current" aria-label="Harga Saat Ini">IDR 225.000</span>
                    </div>
                    <ul class="package-card__features" aria-label="Fitur Paket">
                        <li><i class="ri-check-line"></i> KD Naik</li>
                        <li><i class="ri-check-line"></i> Pengerjaan Cepat</li>
                        <li><i class="ri-check-line"></i> Jaminan Aman</li>
                    </ul>
                    <a href="../orders/orderan_pubg.php" class="package-card__button" aria-label="Order Platinum to Ace 1 package"  rel="noopener noreferrer">
                        Order Sekarang
                        
                    </a>
                </div>
            </article>

            <article class="package-card package-card--coming-soon" tabindex="0" data-aos="fade-up" data-aos-delay="400">
                <div class="package-card__badges">
                    <div class="package-card__image-container">
                        <img src="../../assets/tier_pubg/ace-acemaster_webp.webp" alt="Paket Per Bintang PUBG Mobile" class="package-card__tier-img" width="320" height="180" loading="lazy">
                        <div class="coming-soon-overlay">
                            <span class="coming-soon-text">Segera Hadir</span>
                        </div>
                    </div>
                </div>
                <div class="package-card__content">
                    <h2 class="package-card__title">Paket Per Bintang</h2>
                    <div class="package-card__features">
                        <p class="coming-soon-subtitle">Nantikan paket per bintang yang akan segera hadir</p>
                    </div>
                    <button class="package-card__button package-card__button--disabled" disabled>
                        Segera Hadir
                        <i class="ri-time-line"></i>
                    </button>
                </div>
            </article>
        </section>
    </main>

    <?php include '../../components/footer.php'; ?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../../js/pages/infoorder/pubg.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
</body>
</html>