<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - JAVAPEDIA</title>
    <link rel="stylesheet" href="<?= $BASE_URL ?>/assets/css/global.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>/assets/css/footer.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/pages/info/about.css">

</head>
<body>
    
<?php include 'components/navbar.php'; ?>


    <main class="about">
        <section class="hero">
            <div class="hero__content">
                <img src="<?= $BASE_URL ?>/assets/javapedia.png" alt="Logo JAVAPEDIA" class="hero__logo" data-aos="fade-down" data-aos-delay="100">
                <h1 class="hero__title" data-aos="fade-left" data-aos-delay="150">JAVAPEDIA</h1>
                <p class="hero__subtitle" data-aos="fade-right" data-aos-delay="200">Platform Joki Game #1 di Indonesia</p>
                <p class="hero__description" data-aos="fade-left" data-aos-delay="250">Tingkatkan Rank Anda dengan Jaminan Aman & Terpercaya</p>
                <div class="hero__stats" role="list" aria-label="Statistik Pencapaian" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-item" role="listitem" data-aos="zoom-in" data-aos-delay="350">
                        <span class="stat-icon" aria-hidden="true">
                            <i class="fas fa-users"></i>
                        </span>
                        <span class="stat-number" aria-label="Lebih dari 10,000 pelanggan puas">10,000+</span>
                        <span class="stat-label">Pelanggan Puas</span>
                    </div>
                    <div class="stat-item" role="listitem" data-aos="zoom-in" data-aos-delay="400">
                        <span class="stat-icon" aria-hidden="true">
                            <i class="fas fa-star"></i>
                        </span>
                        <span class="stat-number" aria-label="Rating 98 persen">98%</span>
                        <span class="stat-label">Rating</span>
                    </div>
                    <div class="stat-item" role="listitem" data-aos="zoom-in" data-aos-delay="450">
                        <span class="stat-icon" aria-hidden="true">
                            <i class="fas fa-trophy"></i>
                        </span>
                        <span class="stat-number" data-suffix="">5+</span>
                        <span class="stat-label">Tahun Pengalaman</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="features">
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="100">Layanan Unggulan Kami</h2>
            <div class="features__grid">
                <div class="feature-card" data-aos="fade-right" data-aos-delay="150">
                    <div class="feature-card__icon" data-aos="zoom-in" data-aos-delay="200">
                        <i class="fas fa-gamepad"></i>
                    </div>
                    <h3 data-aos="fade-up" data-aos-delay="250">Jasa Joki Mobile Legends</h3>
                    <p data-aos="fade-up" data-aos-delay="300">Terpercaya dengan win rate tinggi. Proses cepat dengan pilot profesional.</p>
                    <ul class="feature-list" data-aos="fade-up" data-aos-delay="350">
                        <li><i class="fas fa-check-circle"></i> Joki Classic & Ranked</li>
                        <li><i class="fas fa-check-circle"></i> Joki MCL Tournament</li>
                        <li><i class="fas fa-check-circle"></i> Win Rate Tinggi</li>
                    </ul>
                    <a href="#" class="feature-card__button" data-aos="fade-up" data-aos-delay="400">
                        <i class="fas fa-rocket"></i> Pesan Sekarang
                    </a>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card__icon" data-aos="zoom-in" data-aos-delay="250">
                        <i class="fas fa-crosshairs"></i>
                    </div>
                    <h3 data-aos="fade-up" data-aos-delay="300">Jasa Joki PUBG Mobile</h3>
                    <p data-aos="fade-up" data-aos-delay="350">Tingkatkan rank PUBG Mobile Anda dengan joki profesional kami.</p>
                    <ul class="feature-list" data-aos="fade-up" data-aos-delay="400">
                        <li><i class="fas fa-check-circle"></i> Push Rank Cepat</li>
                        <li><i class="fas fa-check-circle"></i> Jaminan Keamanan</li>
                        <li><i class="fas fa-check-circle"></i> Pilot Pro Player</li>
                    </ul>
                    <a href="#" class="feature-card__button" data-aos="fade-up" data-aos-delay="450">
                        <i class="fas fa-rocket"></i> Pesan Sekarang
                    </a>
                </div>
                <div class="feature-card" data-aos="fade-left" data-aos-delay="250">
                    <div class="feature-card__icon" data-aos="zoom-in" data-aos-delay="300">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h3 data-aos="fade-up" data-aos-delay="350">Jasa Joki Events PUBG</h3>
                    <p data-aos="fade-up" data-aos-delay="400">Bantuan profesional untuk event-event khusus PUBG Mobile.</p>
                    <ul class="feature-list" data-aos="fade-up" data-aos-delay="450">
                        <li><i class="fas fa-check-circle"></i> Event Spesial</li>
                        <li><i class="fas fa-check-circle"></i> 100% Aman</li>
                        <li><i class="fas fa-check-circle"></i> Tim Profesional</li>
                    </ul>
                    <a href="#" class="feature-card__button" data-aos="fade-up" data-aos-delay="500">
                        <i class="fas fa-rocket"></i> Pesan Sekarang
                    </a>
                </div>
            </div>
        </section>

        <section class="benefits">
            <div class="benefits__content">
                <h2 class="section-title" data-aos="fade-up" data-aos-delay="100">Mengapa Memilih Kami?</h2>
                <div class="benefits__grid">
                    <div class="benefit-card" data-aos="zoom-in" data-aos-delay="150">
                        <i class="fas fa-shield-alt"></i>
                        <h3>100% Aman</h3>
                        <p>Proses joki dilakukan dengan sistem keamanan tingkat tinggi</p>
                    </div>
                    <div class="benefit-card" data-aos="zoom-out" data-aos-delay="200">
                        <i class="fas fa-bolt"></i>
                        <h3>Proses Cepat</h3>
                        <p>Estimasi waktu yang tepat dan proses pengerjaan cepat</p>
                    </div>
                    <div class="benefit-card" data-aos="zoom-in" data-aos-delay="250">
                        <i class="fas fa-headset"></i>
                        <h3>24/7 Support</h3>
                        <p>Layanan pelanggan siap membantu Anda kapan saja</p>
                    </div>
                    <div class="benefit-card" data-aos="zoom-out" data-aos-delay="300">
                        <i class="fas fa-tags"></i>
                        <h3>Harga Bersaing</h3>
                        <p>Dapatkan layanan premium dengan harga terbaik</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta">
            <div class="cta__content">
                <h2 data-aos="fade-up" data-aos-delay="100">Siap Untuk Naik Rank?</h2>
                <p data-aos="fade-up" data-aos-delay="150">Bergabung sekarang dan rasakan pengalaman joki game terbaik!</p>
                <div class="cta__buttons" data-aos="fade-up" data-aos-delay="200">
                    <a href="#" class="cta__button cta__button--primary" data-aos="zoom-in" data-aos-delay="250">
                        <i class="fas fa-rocket"></i> Mulai Sekarang
                    </a>
                    <a href="#" class="cta__button cta__button--secondary" data-aos="zoom-in" data-aos-delay="300">
                        <i class="fas fa-headset"></i> Hubungi Kami
                    </a>
                </div>
            </div>
        </section>
    </main>
<?php include_once __DIR__ . '/includes/footer.php'; ?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="<?= $BASE_URL ?>/js/pages/info/about.js"></script>
</body>
</html>