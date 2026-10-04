<?php
$config = [
    'site' => [
        'name' => 'JAVAPEDIA',
        'tagline' => 'Joki Game Terpercaya',
        'description' => 'Platfrom boosting game terpercaya untuk PUBG Mobile dan Mobile Legends Bang Bang'
    ]
];

$features = [
    [
        'icon' => 'price-tag-3',
        'title' => 'Harga Terjangkau',
        'description' => 'Layanan dengan harga terbaik dan kompetitif di kelasnya, dengan kualitas layanan premium.'
    ],
    [
        'icon' => 'flashlight',
        'title' => 'Proses Cepat',
        'description' => 'Pengerjaan order dilakukan secepat mungkin dengan hasil maksimal sesuai target yang diminta.'
    ],
    [
        'icon' => 'shield-check',
        'title' => 'Aman & Terpercaya',
        'description' => 'Keamanan akun anda adalah prioritas kami. Proses joki dilakukan dengan aman dan terpercaya.'
    ]
];

$services = [
    [
        'game' => 'PUBG MOBILE',
        'image' => $BASE_URL . '/assets/bg/pm.png',
        'description' => 'Tempat joki Pubg Mobile terpercaya, dari rank, Misi event, Misi Royal Pass, dan banyak lainnya.',
        'features' => [
            ['icon' => 'trophy', 'text' => 'PAKET JOKI TIER'],
            ['icon' => 'star', 'text' => 'JOKI PER 100 POIN [ COMING SOON ]']
        ]
    ],
    [
        'game' => 'MOBILE LEGENDS BANG BANG',
        'image' => $BASE_URL . '/assets/bg/ml.jpg',
        'description' => 'Tempat joki Mobile Legends terpercaya untuk rank, Classic (Winrate), Misi event, dan Misi Starlight.',
        'features' => [
            ['icon' => 'trophy', 'text' => 'JOKI RANK PAKET'],
            ['icon' => 'star', 'text' => 'JOKI RANK PER BINTANG [ COMING SOON ]']
        ]
    ]
];
?>

<div class="home-content">
        <section class="hero" aria-labelledby="hero-title">
            <div class="hero__carousel">
                <div class="hero__slide active" style="background-image: url('<?= $BASE_URL ?>/assets/bg/pubgBG.jpg')"></div>
                <div class="hero__slide" style="background-image: url('<?= $BASE_URL ?>/assets/bg/mlBG.jpg')"></div>
                <div class="hero__overlay"></div>
            </div>
            <div class="hero__content container">
                <div class="hero__tag" role="text" data-aos="fade-down" data-aos-delay="100">
                    <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                    <span>Promo Terbaru</span>
                </div>
                
                <h1 id="hero-title" class="hero__title" data-aos="fade-right" data-aos-delay="200">
                    Selamat Datang di <span class="hero__title-highlight"><?= htmlspecialchars($config['site']['name']) ?></span>
                </h1>
                
                <div class="hero__badges" role="list" data-aos="fade-up" data-aos-delay="300">
                    <div class="badge" role="listitem">
                        <i class="fas fa-tags" aria-hidden="true"></i>
                        <span>Murah</span>
                    </div>
                    <div class="badge" role="listitem">
                        <i class="fas fa-shield-alt" aria-hidden="true"></i>
                        <span>Aman</span>
                    </div>
                    <div class="badge" role="listitem">
                        <i class="fas fa-check-circle" aria-hidden="true"></i>
                        <span>Terpercaya</span>
                    </div>
                </div>
                
                <p class="hero__description" data-aos="fade-up" data-aos-delay="200">
                    <?= htmlspecialchars($config['site']['description']) ?>
                </p>
                
                <div class="hero__actions" data-aos="fade-up" data-aos-delay="300">
                    <a href="#services" class="btn btn--primary">
                        <i class="fas fa-gamepad" aria-hidden="true"></i>
                        <span>Mulai Sekarang</span>
                    </a>
                    <a href="#features" class="btn btn--outline">
                        <i class="fas fa-info-circle" aria-hidden="true"></i>
                        <span>Pelajari Lebih Lanjut</span>
                    </a>
                </div>
            </div>
        </section>

        <section id="features" class="features">
            <div class="features__header" data-aos="fade-up" data-aos-delay="100">
                <span class="badge badge--primary">
                    <i class="ri-star-fill"></i>
                    Keunggulan Kami
                </span>
                <h2 class="features__title">Kami menyediakan layanan joki game terbaik dengan berbagai keunggulan</h2>
            </div>
            
            <div class="features__grid">
                <?php foreach ($features as $index => $feature): ?>
                <div class="feature-card" 
                     data-aos="zoom-in-up" 
                     data-aos-delay="<?= 100 + ($index * 100) ?>">
                    <div class="feature-card__icon">
                        <i class="ri-<?= htmlspecialchars($feature['icon']) ?>-fill"></i>
                    </div>
                    <h3 class="feature-card__title"><?= htmlspecialchars($feature['title']) ?></h3>
                    <p class="feature-card__description"><?= htmlspecialchars($feature['description']) ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="services" id="services">
            <div class="container">
                <?php foreach ($services as $index => $service): ?>
                <div class="service-card" data-aos="fade-up" data-aos-delay="<?= 100 + ($index * 150) ?>">
                    <div class="service-card__content" data-aos="fade-right" data-aos-delay="<?= 200 + ($index * 150) ?>">
                        <span class="service-card__badge"><?= htmlspecialchars($service['game']) ?></span>
                        <h2 class="service-card__title">
                            JASA JOKI <?= htmlspecialchars($service['game']) ?>
                            <?php if ($service['game'] === 'MOBILE LEGENDS BANG BANG'): ?>
                            <span class="service-card__subtitle">BANG BANG</span>
                            <?php endif; ?>
                        </h2>
                        <p class="service-card__description">
                            <?= htmlspecialchars($service['description']) ?>
                        </p>
                        <div class="service-card__features">
                            <?php foreach ($service['features'] as $featureIndex => $feature): ?>
                            <div class="feature-badge" data-aos="fade-up" data-aos-delay="<?= 300 + ($featureIndex * 100) ?>">
                                <i class="ri-<?= htmlspecialchars($feature['icon']) ?>"></i>
                                <?= htmlspecialchars($feature['text']) ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <a href="<?= str_contains($service['game'], 'PUBG') ? 'pages/infoorder/pubg.php' : 'pages/infoorder/ml.php' ?>" 
                           class="btn btn--primary" 
                           data-aos="fade-up" 
                           data-aos-delay="400">
                            Mulai Joki <?= str_contains($service['game'], 'PUBG') ? 'PUBG' : 'ML' ?>
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                    <div class="service-card__image" data-aos="fade-left" data-aos-delay="<?= 200 + ($index * 150) ?>">
                        <img src="<?= htmlspecialchars($service['image']) ?>" alt="<?= htmlspecialchars($service['game']) ?> Character">
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
</div>