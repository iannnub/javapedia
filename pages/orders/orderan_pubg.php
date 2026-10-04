<?php require_once __DIR__ . '/../../config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Rank PUBG Mobile</title>
    <link rel="icon" type="image/x-icon" href="<?= $BASE_URL ?>/assets/javapedia.png" />
    <link rel="stylesheet" href="<?= $BASE_URL ?>/assets/css/global.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>/assets/css/footer.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/pages/infoorder/pubg.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/pages/orders/orderan_pubg.css">
</head>
<body>
    <?php include '../../components/navbar.php'; ?>

    <main class="pubg-packages">
        <!-- Button Check Status -->
        <button class="status-button" aria-label="Check Order Status">
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
                        <p class="status-text status-text--success"><i class="ri-checkbox-circle-line"></i> Verified</p>
                    </div>
                    <div class="status-item">
                        <h3>Process Status</h3>
                        <p class="status-text status-text--progress"><i class="ri-time-line"></i> In Progress</p>
                    </div>
                </div>
            </div>
        </div>

        <header class="pubg-packages__header" data-aos="fade-down">
            <div class="header-accent">
                <span class="header-accent__line"></span>
                <i class="ri-gamepad-line"></i>
                <span class="header-accent__line"></span>
            </div>
            <h1>Joki Tier PUBG Mobile</h1>
            <div class="header-accent">
                <span class="header-accent__line"></span>
                <i class="ri-gamepad-line"></i>
                <span class="header-accent__line"></span>
            </div>
        </header>

        <div class="features-grid">
            <div class="feature-item" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-icon"><i class="ri-money-dollar-circle-line"></i></div>
                <h3>Harga Terjangkau</h3>
                <p>Layanan berkualitas dengan harga bersahabat</p>
            </div>
            <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-icon"><i class="ri-focus-2-line"></i></div>
                <h3>Target Point</h3>
                <p>Pilih target point sesuai kebutuhan Anda</p>
            </div>
            <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-icon"><i class="ri-vip-crown-2-line"></i></div>
                <h3>Bonus Spesial</h3>
                <p>Dapatkan bonus menarik setiap order</p>
            </div>
        </div>

        <!-- Notifikasi -->
        <div id="notification" class="notification" role="alert" aria-live="polite"></div>

        <!-- FORM ORDER -->
        <form action="simpan_orderan_pubg.php" method="POST" enctype="multipart/form-data" class="order-form" id="orderForm">
            <section class="form-section" id="section-input" data-aos="fade-up" data-aos-duration="500">
                <header class="form-header" data-aos="fade-down" data-aos-delay="200">
                    <h2 class="form-title">Form Order PUBG Mobile</h2>
                    <p class="form-subtitle">Lengkapi data berikut dengan teliti</p>
                </header>

                <div class="form-grid">
                    <div class="form-group" data-aos="fade-right" data-aos-delay="300">
                        <label for="login" class="form-label">Login Via</label>
                        <div class="input-group">
                            <i class="ri-login-circle-line input-icon" aria-hidden="true"></i>
                            <select id="login" name="login_pubg" class="form-control" required>
                                <option value="" selected disabled>Pilih Login Via</option>
                                <option value="Email (Rekomendasi)">Email (Rekomendasi)</option>
                                <option value="Nomor Telepon (Rekomendasi)">Nomor Telepon (Rekomendasi)</option>
                                <option value="X (Rekomendasi)">X (Rekomendasi)</option>
                                <option value="Facebook">Facebook</option>
                                <option value="googleplay">Google Play</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group" data-aos="fade-left" data-aos-delay="400">
                        <label for="idnick" class="form-label">User ID & Nick Name</label>
                        <div class="input-group">
                            <i class="ri-user-line input-icon" aria-hidden="true"></i>
                            <input type="text" id="idnick" name="userid_pubg" class="form-control" placeholder="Contoh: 51234567 (PUBG_Player)" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form-group" data-aos="fade-right" data-aos-delay="500">
                        <label for="emailhpx" class="form-label">Email/No. HP/X ID</label>
                        <div class="input-group">
                            <i class="ri-mail-line input-icon" aria-hidden="true"></i>
                            <input type="text" id="emailhpx" name="email_pubg" class="form-control" placeholder="Masukkan email atau nomor HP" required>
                        </div>
                    </div>

                    <div class="form-group" data-aos="fade-left" data-aos-delay="600">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <i class="ri-lock-line input-icon" aria-hidden="true"></i>
                            <input type="password" id="password" name="pw_pubg" class="form-control" placeholder="Masukkan password akun" autocomplete="new-password" required>
                        </div>
                    </div>

                    <div class="form-group bank-details" data-aos="zoom-in" data-aos-delay="700">
                        <label class="form-label">Informasi Pembayaran</label>
                        <div class="payment-card">
                            <div class="bank-field">
                                <span class="bank-label">No. Rekening:</span>
                                <div class="copy-field">
                                    <input type="text" id="rekening" value="057701051222503" class="form-control" readonly>
                                    <button type="button" class="copy-btn" data-copy="057701051222503"><i class="ri-file-copy-line"></i></button>
                                </div>
                            </div>
                            <div class="bank-field">
                                <span class="bank-label">Bank:</span>
                                <span class="bank-value">BRI</span>
                            </div>
                            <div class="bank-field">
                                <span class="bank-label">Atas Nama:</span>
                                <span class="bank-value">GALIB HAFTHA Z.</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group" data-aos="fade-right" data-aos-delay="900">
                        <label for="paket" class="form-label">Paket PUBG</label>
                        <div class="input-group">
                            <i class="ri-game-line input-icon" aria-hidden="true"></i>
                            <select id="paket" name="paket_pubg" class="form-control" required>
                                <option value="" disabled <?php echo empty($_GET['paket']) ? 'selected' : ''; ?>>Pilih paket rank up</option>
                                <?php
                                $pkgParam = $_GET['paket'] ?? '';
                                $pkgList = [
                                    "Tier Platinum II - ACE I = IDR 120.000" => "Tier Platinum II - ACE I (Rp120.000)",
                                    "Tier Diamond V - ACE I = IDR 110.000" => "Tier Diamond V - ACE I (Rp110.000)",
                                    "Tier Crown V - ACE I = IDR 80.000" => "Tier Crown V - ACE I (Rp80.000)",
                                    "Tier ACE I - ACE MASTER VI = IDR 130.000" => "Tier ACE I - ACE MASTER VI (Rp130.000)",
                                    "Tier ACE MASTER VI - ACE DOMINATOR XII = IDR 150.000" => "Tier ACE MASTER VI - ACE DOMINATOR XII (Rp150.000)",
                                    "Tier Ace 1 - Ace Dominator 12 = IDR 225.000" => "Tier Ace 1 - Ace Dominator 12 (Rp225.000)"
                                ];
                                foreach ($pkgList as $val => $label) {
                                    $isSelected = ($pkgParam === $val || stripos($val, $pkgParam) !== false && $pkgParam !== '') ? 'selected' : '';
                                    echo '<option value="' . htmlspecialchars($val) . '" ' . $isSelected . '>' . htmlspecialchars($label) . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group" data-aos="fade-left" data-aos-delay="1000">
                        <label for="bukti" class="form-label">Bukti Pembayaran</label>
                        <div class="file-upload-wrapper">
                            <input type="file" id="bukti" name="foto_pubg" class="file-upload-input" accept="image/*" required>
                            <div class="file-upload-content">
                                <i class="ri-upload-cloud-line"></i>
                                <span>Klik atau seret file kesini</span>
                            </div>
                        </div>
                    </div>
                </div>

                <footer class="form-footer">
                    <button type="submit" class="btn-order" data-aos="zoom-in" data-aos-delay="1000">
                        <i class="ri-shopping-cart-line"></i>
                        <span>Pesan Sekarang</span>
                    </button>
                </footer>
            </section>
        </form>
    </main>

    <?php include_once __DIR__ . '/../../includes/footer.php'; ?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true });

        document.getElementById('orderForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const notification = document.getElementById('notification');
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalHtml = submitBtn.innerHTML;

            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span>Mengirim pesanan...</span>';
            notification.className = 'notification';
            notification.textContent = '';

            const formData = new FormData(this);

            fetch('simpan_orderan_pubg.php', {
                method: 'POST',
                body: formData
            })
            .then(async response => {
                const data = await response.json().catch(() => ({}));
                if (!response.ok || data.status === 'error') {
                    throw new Error(data.message || 'Terjadi kesalahan saat memproses pesanan.');
                }
                return data;
            })
            .then(data => {
                notification.textContent = data.message || 'Pesanan berhasil dikirim!';
                notification.classList.add('show', 'success');
                this.reset();
                setTimeout(() => {
                    window.location.href = '../infoorder/pubg.php';
                }, 2000);
            })
            .catch(error => {
                notification.textContent = error.message || 'Maaf, terjadi kesalahan. Silakan coba lagi.';
                notification.classList.add('show', 'error');
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalHtml;
            });
        });
    </script>
</body>
</html>
