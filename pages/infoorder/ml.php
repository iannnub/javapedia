<?php require_once __DIR__ . '/../../config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joki Rank Mobile Legends</title>
    <link rel="icon" type="image/x-icon" href="<?= $BASE_URL ?>/assets/javapedia.png" />
    <link rel="stylesheet" href="<?= $BASE_URL ?>/assets/css/global.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>/assets/css/footer.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/pages/infoorder/ml.css">
</head>
<body>
    
    <?php include '../../components/navbar.php'; ?>

    <main class="ml-packages">
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

        <header class="ml-packages__header" data-aos="fade-down">
            <div class="header-accent" data-aos="fade-left">
                <span class="header-accent__line"></span>
                <i class="ri-gamepad-line"></i>
                <span class="header-accent__line"></span>
            </div>
            <h1>Joki Rank Mobile Legends</h1>
            <div class="header-accent" data-aos="fade-right">
                <span class="header-accent__line"></span>
                <i class="ri-gamepad-line"></i>
                <span class="header-accent__line"></span>
            </div>
        </header>

        <div class="features-grid">
            <div class="feature-item" data-aos="fade-left" data-aos-delay="100">
                <div class="feature-icon">
                    <i class="ri-shield-check-line"></i>
                </div>
                <h3>Aman & Terpercaya</h3>
                <p>Joki dilakukan oleh pemain profesional</p>
            </div>
            <div class="feature-item" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-icon">
                    <i class="ri-timer-line"></i>
                </div>
                <h3>Proses Cepat</h3>
                <p>Estimasi waktu sesuai dengan target rank</p>
            </div>
            <div class="feature-item" data-aos="fade-down" data-aos-delay="600">
                <div class="feature-icon">
                    <i class="ri-customer-service-2-line"></i>
                </div>
                <h3>24/7 Support</h3>
                <p>Layanan pelanggan siap membantu kapanpun</p>
            </div>
        </div>

        <section class="ml-packages__grid" aria-label="Paket Joki Mobile Legends">

            <!-- Epic V - Legend V -->
            <article class="package-card" tabindex="0" data-aos="fade-up" data-aos-delay="0">
                <div class="package-card__badges">
                    <div class="package-card__image-container">
                        <img src="../../assets/tier/epic-legend.svg" alt="Mobile Legends Epic V ke Legend V" class="package-card__tier-img" width="320" height="180" loading="lazy">
                    </div>
                </div>
                <div class="package-card__content">
                    <h2 class="package-card__title">Epic V - Legend V</h2>
                    <div class="package-card__price">
                        <span class="package-card__price-current">IDR 150.000</span>
                        <div class="package-card__features">
                            <span><i class="ri-check-line"></i> WR Naik</span>
                            <span><i class="ri-check-line"></i> Pengerjaan Cepat</span>
                            <span><i class="ri-check-line"></i> 100% Aman</span>
                        </div>
                    </div>
                    <a href="../orders/orderan_ml.php" class="package-card__button" role="button" aria-label="Order paket Epic V ke Legend V - Harga IDR 150.000">
                        <span class="button-text">Order Sekarang</span>
                    </a>
                </div>
            </article>

            <!-- Epic IV - Mythic -->
            <article class="package-card" tabindex="0" data-aos="fade-up" data-aos-delay="50">
                <div class="package-card__badges">
                    <div class="package-card__image-container">
                        <img src="../../assets/tier/epic-Mytich.svg" alt="Mobile Legends Epic IV ke Mythic" class="package-card__tier-img" width="320" height="180" loading="lazy">
                    </div>
                </div>
                <div class="package-card__content">
                    <h2 class="package-card__title">Epic IV - Mythic</h2>
                    <div class="package-card__price">
                        <span class="package-card__price-current">IDR 300.000</span>
                        <div class="package-card__features">
                            <span><i class="ri-check-line"></i> WR Naik</span>
                            <span><i class="ri-check-line"></i> Pengerjaan Cepat</span>
                            <span><i class="ri-check-line"></i> 100% Aman</span>
                        </div>
                    </div>
                    <a href="../orders/orderan_ml.php" class="package-card__button" role="button" aria-label="Order paket Epic IV ke Mythic - Harga IDR 300.000">
                        <span class="button-text">Order Sekarang</span>
                    </a>
                </div>
            </article>

            <!-- Epic III - Mythic -->
            <article class="package-card" tabindex="0" data-aos="fade-up" data-aos-delay="100">
                <div class="package-card__badges">
                    <div class="package-card__image-container">
                        <img src="../../assets/tier/epic-Mytich.svg" alt="Mobile Legends Epic III ke Mythic" class="package-card__tier-img" width="320" height="180" loading="lazy">
                    </div>
                </div>
                <div class="package-card__content">
                    <h2 class="package-card__title">Epic III - Mythic</h2>
                    <div class="package-card__price">
                        <span class="package-card__price-current">IDR 275.000</span>
                        <div class="package-card__features">
                            <span><i class="ri-check-line"></i> WR Naik</span>
                            <span><i class="ri-check-line"></i> Pengerjaan Cepat</span>
                            <span><i class="ri-check-line"></i> 100% Aman</span>
                        </div>
                    </div>
                    <a href="../orders/orderan_ml.php" class="package-card__button" role="button" aria-label="Order paket Epic III ke Mythic - Harga IDR 275.000">
                        <span class="button-text">Order Sekarang</span>
                    </a>
                </div>
            </article>

            <!-- Epic II - Mythic -->
            <article class="package-card" tabindex="0" data-aos="fade-up" data-aos-delay="150">
                <div class="package-card__badges">
                    <div class="package-card__image-container">
                        <img src="../../assets/tier/epic-Mytich.svg" alt="Mobile Legends Epic II ke Mythic" class="package-card__tier-img" width="320" height="180" loading="lazy">
                    </div>
                </div>
                <div class="package-card__content">
                    <h2 class="package-card__title">Epic II - Mythic</h2>
                    <div class="package-card__price">
                        <span class="package-card__price-current">IDR 250.000</span>
                        <div class="package-card__features">
                            <span><i class="ri-check-line"></i> WR Naik</span>
                            <span><i class="ri-check-line"></i> Pengerjaan Cepat</span>
                            <span><i class="ri-check-line"></i> 100% Aman</span>
                        </div>
                    </div>
                    <a href="../orders/orderan_ml.php" class="package-card__button" role="button" aria-label="Order paket Epic II ke Mythic - Harga IDR 250.000">
                        <span class="button-text">Order Sekarang</span>
                    </a>
                </div>
            </article>

            <!-- Epic I - Mythic -->
            <article class="package-card" tabindex="0" data-aos="fade-up" data-aos-delay="200">
                <div class="package-card__badges">
                    <div class="package-card__image-container">
                        <img src="../../assets/tier/epic-Mytich.svg" alt="Mobile Legends Epic I ke Mythic" class="package-card__tier-img" width="320" height="180" loading="lazy">
                    </div>
                </div>
                <div class="package-card__content">
                    <h2 class="package-card__title">Epic I - Mythic</h2>
                    <div class="package-card__price">
                        <span class="package-card__price-current">IDR 225.000</span>
                        <div class="package-card__features">
                            <span><i class="ri-check-line"></i> WR Naik</span>
                            <span><i class="ri-check-line"></i> Pengerjaan Cepat</span>
                            <span><i class="ri-check-line"></i> 100% Aman</span>
                        </div>
                    </div>
                    <a href="../orders/orderan_ml.php" class="package-card__button" role="button" aria-label="Order paket Epic I ke Mythic - Harga IDR 225.000">
                        <span class="button-text">Order Sekarang</span>
                    </a>
                </div>
            </article>

            <!-- Epic V - Mythic -->
            <article class="package-card" tabindex="0" data-aos="fade-up" data-aos-delay="250">
                <div class="package-card__badges">
                    <div class="package-card__image-container">
                        <img src="../../assets/tier/epic-Mytich.svg" alt="Mobile Legends Epic ke Mythic" class="package-card__tier-img" width="320" height="180" loading="lazy">
                    </div>
                </div>
                <div class="package-card__content">
                    <h2 class="package-card__title">Epic V - Mythic</h2>
                    <div class="package-card__price">
                        <span class="package-card__price-current">IDR 320.000</span>
                        <div class="package-card__features">
                            <span><i class="ri-check-line"></i> WR Naik</span>
                            <span><i class="ri-check-line"></i> Pengerjaan Cepat</span>
                            <span><i class="ri-check-line"></i> 100% Aman</span>
                        </div>
                    </div>
                    <a href="../orders/orderan_ml.php" class="package-card__button" role="button" aria-label="Order paket Epic ke Mythic - Harga IDR 320.000">
                        <span class="button-text">Order Sekarang</span>
                    </a>
                </div>
            </article>

            <!-- Legend V to Mythic -->
            <article class="package-card" tabindex="0" data-aos="fade-up" data-aos-delay="100">
                <div class="package-card__badges">
                    <div class="package-card__image-container">
                        <img src="../../assets/tier/legend-mytich.svg" alt="Mobile Legends Legend ke Mythic" class="package-card__tier-img" width="320" height="180" loading="lazy">
                    </div>
                </div>
                <div class="package-card__content">
                    <h2 class="package-card__title">Legend V - Mythic</h2>
                    <div class="package-card__price">
                        <span class="package-card__price-current">IDR 185.000</span>
                        <div class="package-card__features">
                            <span><i class="ri-check-line"></i> WR Naik</span>
                            <span><i class="ri-check-line"></i> Pengerjaan Cepat</span>
                            <span><i class="ri-check-line"></i> 100% Aman</span>
                        </div>
                    </div>
                    <a href="../orders/orderan_ml.php" class="package-card__button" role="button" aria-label="Order paket Legend ke Mythic - Harga IDR 185.000">
                        <span class="button-text">Order Sekarang</span>
                    </a>
                </div>
            </article>

            <!-- Legend V to  Mythic Honor (25) -->
            <article class="package-card" tabindex="0" data-aos="fade-up" data-aos-delay="120">
                <div class="package-card__badges">
                    <div class="package-card__image-container">
                        <img src="../../assets/tier/legend-honor.svg" alt="Mobile Legends Legend ke Mythic Honor" class="package-card__tier-img" width="320" height="180" loading="lazy">
                    </div>
                </div>
                <div class="package-card__content">
                    <h2 class="package-card__title">Legend V -  Mythic Honor (25)</h2>
                    <div class="package-card__price">
                        <span class="package-card__price-current">IDR 550.000</span>
                        <div class="package-card__features">
                            <span><i class="ri-check-line"></i> WR Naik</span>
                            <span><i class="ri-check-line"></i> Pengerjaan Cepat</span>
                            <span><i class="ri-check-line"></i> 100% Aman</span>
                        </div>
                    </div>
                    <a href="../orders/orderan_ml.php" class="package-card__button" role="button" aria-label="Order paket Legend ke Mythic Honor - Harga IDR 550.000">
                        <span class="button-text">Order Sekarang</span>
                    </a>
                </div>
            </article>

            <!-- Legend V to Mythic Glory -->
            <article class="package-card" tabindex="0" data-aos="fade-up" data-aos-delay="140">
                <div class="package-card__badges">
                    <div class="package-card__image-container">
                        <img src="../../assets/tier/legend-immo.svg" alt="Mobile Legends Legend ke Mythic Immortal" class="package-card__tier-img" width="320" height="180" loading="lazy">
                    </div>
                </div>
                <div class="package-card__content">
                    <h2 class="package-card__title">Legend V - Mythic Glory</h2>
                    <div class="package-card__price">
                        <span class="package-card__price-current">IDR 1.110.000</span>
                        <div class="package-card__features">
                            <span><i class="ri-check-line"></i> WR Naik</span>
                            <span><i class="ri-check-line"></i> Pengerjaan Cepat</span>
                            <span><i class="ri-check-line"></i> 100% Aman</span>
                        </div>
                    </div>
                    <a href="../orders/orderan_ml.php" class="package-card__button" role="button" aria-label="Order paket Legend ke Mythic Glory - Harga IDR 1.110.000">
                        <span class="button-text">Order Sekarang</span>
                    </a>
                </div>
            </article>

            <!-- Legend V to Mythic Immortal -->
            <article class="package-card" tabindex="0" data-aos="fade-up" data-aos-delay="160">
                <div class="package-card__badges">
                    <div class="package-card__image-container">
                        <img src="../../assets/tier/legend-immo.svg" alt="Mobile Legends Legend ke Mythic Immortal" class="package-card__tier-img" width="320" height="180" loading="lazy">
                    </div>
                </div>
                <div class="package-card__content">
                    <h2 class="package-card__title">Legend V - Mythic Immortal</h2>
                    <div class="package-card__price">
                        <span class="package-card__price-current">IDR 2.350.000</span>
                        <div class="package-card__features">
                            <span><i class="ri-check-line"></i> WR Naik</span>
                            <span><i class="ri-check-line"></i> Pengerjaan Cepat</span>
                            <span><i class="ri-check-line"></i> 100% Aman</span>
                        </div>
                    </div>
                    <a href="../orders/orderan_ml.php" class="package-card__button" role="button" aria-label="Order paket Legend ke Mythic Immortal - Harga IDR 2.350.000">
                        <span class="button-text">Order Sekarang</span>
                    </a>
                </div>
            </article>

            <!-- Mythic Grading (Auto 15 Stars) -->
            <article class="package-card" tabindex="0" data-aos="fade-up" data-aos-delay="180">
                <div class="package-card__badges">
                    <div class="package-card__image-container">
                        <img src="../../assets/tier/mytich-grinding.svg" alt="Mobile Legends Mythic ke Mythic Glory" class="package-card__tier-img" width="320" height="180" loading="lazy">
                    </div>
                </div>
                <div class="package-card__content">
                    <h2 class="package-card__title">Mythic Grading (Auto 15 Stars)</h2>
                    <div class="package-card__price">
                        <span class="package-card__price-current">IDR 190.000</span>
                        <div class="package-card__features">
                            <span><i class="ri-check-line"></i> WR Naik</span>
                            <span><i class="ri-check-line"></i> Pengerjaan Cepat</span>
                            <span><i class="ri-check-line"></i> 100% Aman</span>
                        </div>
                    </div>
                    <a href="../orders/orderan_ml.php" class="package-card__button" role="button" aria-label="Order paket Mythic Grading Auto 15 Stars - Harga IDR 190.000">
                        <span class="button-text">Order Sekarang</span>
                    </a>
                </div>
            </article>

            <!-- Mythic Grading - Mythic Honor -->
            <article class="package-card" tabindex="0" data-aos="fade-up" data-aos-delay="200">
                <div class="package-card__badges">
                    <div class="package-card__image-container">
                        <img src="../../assets/tier/grinding-immo.svg" alt="Mobile Legends Mythic ke Mythic Honor" class="package-card__tier-img" width="320" height="180" loading="lazy">
                    </div>
                </div>
                <div class="package-card__content">
                    <h2 class="package-card__title">Mythic Grading - Mythic Honor</h2>
                    <div class="package-card__price">
                        <span class="package-card__price-current">IDR 380.000</span>
                        <div class="package-card__features">
                            <span><i class="ri-check-line"></i> WR Naik</span>
                            <span><i class="ri-check-line"></i> Pengerjaan Cepat</span>
                            <span><i class="ri-check-line"></i> 100% Aman</span>
                        </div>
                    </div>
                    <a href="../orders/orderan_ml.php" class="package-card__button" role="button" aria-label="Order paket Mythic ke Mythic Honor - Harga IDR 380.000">
                        <span class="button-text">Order Sekarang</span>
                    </a>
                </div>
            </article>

            <!-- Mythic Grading - Mythic Glory -->
            <article class="package-card" tabindex="0" data-aos="fade-up" data-aos-delay="220">
                <div class="package-card__badges">
                    <div class="package-card__image-container">
                        <img src="../../assets/tier/grinding-glory.svg" alt="Mobile Legends Mythic ke Mythic Immortal" class="package-card__tier-img" width="320" height="180" loading="lazy">
                    </div>
                </div>
                <div class="package-card__content">
                    <h2 class="package-card__title">Mythic Grading - Mythic Glory</h2>
                    <div class="package-card__price">
                        <span class="package-card__price-current">IDR 939.000</span>
                        <div class="package-card__features">
                            <span><i class="ri-check-line"></i> WR Naik</span>
                            <span><i class="ri-check-line"></i> Pengerjaan Cepat</span>
                            <span><i class="ri-check-line"></i> 100% Aman</span>
                        </div>
                    </div>
                    <a href="../orders/orderan_ml.php" class="package-card__button" role="button" aria-label="Order paket Mythic ke Mythic Glory - Harga IDR 939.000">
                        <span class="button-text">Order Sekarang</span>
                    </a>
                </div>
            </article>

            <!-- Mythic Grading - Mythic Immortal -->
            <article class="package-card" tabindex="0" data-aos="fade-up" data-aos-delay="240">
                <div class="package-card__badges">
                    <div class="package-card__image-container">
                        <img src="../../assets/tier/grinding-immo.svg" alt="Mobile Legends Mythic Grading" class="package-card__tier-img" width="320" height="180" loading="lazy">
                    </div>
                </div>
                <div class="package-card__content">
                    <h2 class="package-card__title">Mythic Grading - Mythic Immortal</h2>
                    <div class="package-card__price">
                        <span class="package-card__price-current">IDR 2.150.000</span>
                        <div class="package-card__features">
                            <span><i class="ri-check-line"></i> WR Naik</span>
                            <span><i class="ri-check-line"></i> Pengerjaan Cepat</span>
                            <span><i class="ri-check-line"></i> 100% Aman</span>
                        </div>
                    </div>
                    <a href="../orders/orderan_ml.php" class="package-card__button" role="button" aria-label="Order paket Mythic Grading ke Mythic Immortal - Harga IDR 2.150.000">
                        <span class="button-text">Order Sekarang</span>
                    </a>
                </div>
            </article>

            <!-- Mythic Honor - Mythic Glory -->
            <article class="package-card" tabindex="0" data-aos="fade-up" data-aos-delay="260">
                <div class="package-card__badges">
                    <div class="package-card__image-container">
                        <img src="../../assets/tier/honor-glory.svg" alt="Mobile Legends Honor ke Glory" class="package-card__tier-img" width="320" height="180" loading="lazy">
                    </div>
                </div>
                <div class="package-card__content">
                    <h2 class="package-card__title">Mythic Honor - Glory</h2>
                    <div class="package-card__price">
                        <span class="package-card__price-current">IDR 539.000
                        </span>
                        <div class="package-card__features">
                            <span><i class="ri-check-line"></i> WR Naik</span>
                            <span><i class="ri-check-line"></i> Pengerjaan Cepat</span>
                            <span><i class="ri-check-line"></i> 100% Aman</span>
                        </div>
                    </div>
                    <a href="../orders/orderan_ml.php" class="package-card__button" role="button" aria-label="Order paket Mythic Honor ke Glory - Harga IDR 539.000">
                        <span class="button-text">Order Sekarang</span>
                    </a>
                </div>
            </article>

            <!-- Mythic Honor - Mythic Immortal -->
            <article class="package-card" tabindex="0" data-aos="fade-up" data-aos-delay="280">
                <div class="package-card__badges">
                    <div class="package-card__image-container">
                        <img src="../../assets/tier/honor-immo.svg" alt="Mobile Legends Honor ke Immortal" class="package-card__tier-img" width="320" height="180" loading="lazy">
                    </div>
                </div>
                <div class="package-card__content">
                    <h2 class="package-card__title">Mythic Honor - Immortal</h2>
                    <div class="package-card__price">
                        <span class="package-card__price-current">IDR 1.500.000</span>
                        <div class="package-card__features">
                            <span><i class="ri-check-line"></i> WR Naik</span>
                            <span><i class="ri-check-line"></i> Pengerjaan Cepat</span>
                            <span><i class="ri-check-line"></i> 100% Aman</span>
                        </div>
                    </div>
                    <a href="../orders/orderan_ml.php" class="package-card__button" role="button" aria-label="Order paket Mythic Honor ke Immortal - Harga IDR 1.500.000">
                        <span class="button-text">Order Sekarang</span>
                    </a>
                </div>
            </article>

            <!-- Mythic Glory - Mythic Immortal -->
            <article class="package-card" tabindex="0" data-aos="fade-up" data-aos-delay="300">
                <div class="package-card__badges">
                    <div class="package-card__image-container">
                        <img src="../../assets/tier/glory-immo.svg" alt="Mobile Legends Honor ke Immortal" class="package-card__tier-img" width="320" height="180" loading="lazy">
                    </div>
                </div>
                <div class="package-card__content">
                    <h2 class="package-card__title">Mythic Glory - Immortal</h2>
                    <div class="package-card__price">
                        <span class="package-card__price-current">IDR 1.500.000</span>
                        <div class="package-card__features">
                            <span><i class="ri-check-line"></i> WR Naik</span>
                            <span><i class="ri-check-line"></i> Pengerjaan Cepat</span>
                            <span><i class="ri-check-line"></i> 100% Aman</span>
                        </div>
                    </div>
                    <a href="../orders/orderan_ml.php" class="package-card__button" role="button" aria-label="Order paket Mythic Honor ke Immortal - Harga IDR 1.500.000">
                        <span class="button-text">Order Sekarang</span>
                    </a>
                </div>
            </article>            
            
            <article class="package-card package-card--coming-soon" tabindex="0" data-aos="fade-up" data-aos-delay="400">
                <div class="package-card__badges">
                    <div class="package-card__image-container">
                        <img src="../../assets/bg/ml.jpg" alt="Paket Per Bintang Mobile Legends" class="package-card__tier-img" width="320" height="180" loading="lazy">
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

    <?php include_once __DIR__ . '/../../includes/footer.php'; ?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="<?= $BASE_URL ?>/js/pages/infoorder/ml.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
</body>
</html>