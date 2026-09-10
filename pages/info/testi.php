<?php
// Konfigurasi BASE_URL
$protocol = isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "on" ? "https" : "http";
$domain = $_SERVER['HTTP_HOST'];
$isLocalhost = in_array($domain, ['localhost', '127.0.0.1']);
$subfolder = $isLocalhost ? '/jp' : '';
$BASE_URL = $protocol . '://' . $domain . $subfolder;

// Konfigurasi pagination
$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$perPage = 10;

// Direktori gambar testimonial
$testiDir = realpath(__DIR__ . '/../../assets/testi');

// Validasi direktori
if (!$testiDir || !is_dir($testiDir)) {
    die("Folder testimonial tidak ditemukan.");
}

// Ambil gambar dari folder
$images = glob($testiDir . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
$totalImages = count($images);
$totalPages = ceil($totalImages / $perPage);

$page = min($page, $totalPages);
$start = ($page - 1) * $perPage;
$currentImages = array_slice($images, $start, $perPage);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonial - JAVAPEDIA</title>
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/pages/info/testi.css">
    <link rel="icon" type="image/x-icon" href="<?= $BASE_URL ?>/assets/javapedia.png">

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

    <?php include '../../components/navbar.php'; ?>

    <main class="testimonials">
        <section class="testimonials__header">
            <h1 class="section-title" data-aos="fade-down">Testimonial</h1>
            <p class="section-subtitle" data-aos="fade-up">Apa kata mereka tentang layanan kami?</p>
        </section>

        <section class="testimonials__grid">
            <?php foreach ($currentImages as $index => $image): 
                $fileName = basename($image);
                $delay = ($index + 1) * 50;
            ?>
                <div class="testi-card" data-aos="zoom-in" data-aos-delay="<?= $delay ?>">
                    <img src="<?= $BASE_URL ?>/assets/testi/<?= htmlspecialchars($fileName) ?>" alt="Testimonial" loading="lazy">
                </div>
            <?php endforeach; ?>
        </section>

        <?php if ($totalPages > 1): ?>
        <div class="pagination" data-aos="fade-up">
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <a href="?page=<?= $i ?>" 
                   class="pagination__link <?= $i === $page ? 'active' : '' ?>"
                   <?= $i === $page ? 'aria-current="page"' : '' ?>>
                    <?= $i ?>
                </a>
            <?php endfor; ?>
        </div>
        <?php endif; ?>
    </main>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
</body>
</html>
