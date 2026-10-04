<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <?php include 'components/meta.php'; ?>
    <link rel="icon" type="image/x-icon" href="<?= $BASE_URL ?>/assets/javapedia.png" />
    <link rel="stylesheet" href="<?= $BASE_URL ?>/assets/css/global.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= $BASE_URL ?>/assets/css/footer.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/pages/info/home.css">
    <title>JAVAPEDIA - Platform Jasa Joki Game Terpercaya</title>
</head>
<body>
    
    <?php include 'components/navbar.php'; ?>
    
    <main>
        <?php include 'pages/info/home.php'; ?>
    </main>

    <?php include_once __DIR__ . '/includes/footer.php'; ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            offset: 50,
            duration: 600,
            easing: 'cubic-bezier(0.4, 0, 0.2, 1)',
            delay: 0
        });
    </script>
    <script src="<?= $BASE_URL ?>/js/pages/info/home.js" defer></script>
</body>
</html>