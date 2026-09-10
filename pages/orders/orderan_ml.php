<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Rank Mobile Legends</title>
    <link rel="icon" type="image/x-icon" href="../../assets/javapedia.png" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../../css/components/footer.css">
    <link rel="stylesheet" href="../../css/pages/infoorder/ml.css">
    <link rel="stylesheet" href="../../css/pages/orders/orderan_ml.css">
</head>
<body>
    <?php include 'config.php'; ?>
    <?php include '../../components/navbar.php'; ?>

    <main class="ml-packages">
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

        <header class="ml-packages__header" data-aos="fade-down">
            <div class="header-accent">
                <span class="header-accent__line"></span>
                <i class="ri-gamepad-line"></i>
                <span class="header-accent__line"></span>
            </div>
            <h1>Joki Rank Mobile Legends</h1>
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
        <form action="simpan_orderan_ml.php" method="POST" enctype="multipart/form-data" class="order-form" id="orderForm">
            <section class="form-section" id="section-input" data-aos="fade-up" data-aos-duration="500">
                <header class="form-header" data-aos="fade-down" data-aos-delay="200">
                    <h2 class="form-title">Form Order Mobile Legends</h2>
                    <p class="form-subtitle">Lengkapi data berikut dengan teliti</p>
                </header>

                <div class="form-grid">
                    <div class="form-group" data-aos="fade-right" data-aos-delay="300">
                        <label for="login" class="form-label">Login Via</label>
                        <div class="input-group">
                            <i class="ri-login-circle-line input-icon" aria-hidden="true"></i>
                            <select id="login" name="login_ml" class="form-control" required>
                                <option value="" selected disabled>Pilih Login Via</option>
                                <option value="Email">Email</option>
                                <option value="Moonton">Moonton</option>
                                <option value="Google Play">Google Play</option>
                                <option value="Facebook">Facebook</option>
                                <option value="VK">VK</option>
                                <option value="TikTok">TikTok</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group" data-aos="fade-left" data-aos-delay="400">
                        <label for="idnick" class="form-label">User ID & Nickname</label>
                        <div class="input-group">
                            <i class="ri-user-line input-icon" aria-hidden="true"></i>
                            <input type="text" id="idnick" name="userid_ml" class="form-control" placeholder="Contoh: 12345678 (ML_Player)" required>
                        </div>
                    </div>

                    <div class="form-group" data-aos="fade-right" data-aos-delay="500">
                        <label for="emailhpx" class="form-label">Email / No. HP</label>
                        <div class="input-group">
                            <i class="ri-mail-line input-icon" aria-hidden="true"></i>
                            <input type="text" id="emailhpx" name="email_ml" class="form-control" placeholder="Masukkan email atau nomor HP" required>
                        </div>
                    </div>

                    <div class="form-group" data-aos="fade-left" data-aos-delay="600">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <i class="ri-lock-line input-icon" aria-hidden="true"></i>
                            <input type="password" id="password" name="pw_ml" class="form-control" placeholder="Masukkan password akun" autocomplete="new-password" required>
                        </div>
                    </div>

                    <div class="form-group" data-aos="fade-right" data-aos-delay="700">
                        <label for="hero" class="form-label">Request Hero/Role</label>
                        <div class="input-group">
                            <i class="ri-sword-line input-icon" aria-hidden="true"></i>
                            <input type="text" id="hero" name="req_hero" class="form-control" placeholder="Contoh: Ling, Assasin">
                        </div>
                    </div>

                    <div class="form-group" data-aos="fade-left" data-aos-delay="800">
                        <label for="catatan" class="form-label">Catatan Untuk Penjoki</label>
                        <div class="input-group">
                            <i class="ri-chat-1-line input-icon" aria-hidden="true"></i>
                            <input type="text" id="catatan" name="note_ml" class="form-control" placeholder="Tambahkan catatan khusus">
                        </div>
                    </div>

                    <div class="form-group bank-details" data-aos="zoom-in" data-aos-delay="900">
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

                    <div class="form-group" data-aos="fade-right" data-aos-delay="1000">
                        <label for="paket" class="form-label">Paket Mobile Legends</label>
                        <div class="input-group">
                            <i class="ri-game-line input-icon" aria-hidden="true"></i>
                            <select id="paket" name="paket_ml" class="form-control" required>
                                <option value="" selected disabled>Pilih paket rank up</option>
                                <option value="Rank Epic V - Legend V = IDR 150.000">Rank Epic V - Legend V = IDR 150.000</option>
                                <option value="Rank Epic II - Mythic = IDR 250.000">Rank Epic II - Mythic = IDR 250.000</option>
                                <option value="Rank Epic I - Mythic = IDR 210.000">Rank Epic I - Mythic = IDR 210.000</option>
                                <option value="Rank Epic III - Mythic = IDR 275.000">Rank Epic III - Mythic = IDR 275.000</option>
                                <option value="Rank Epic IV - Mythic = IDR 300.000">Rank Epic IV - Mythic = IDR 300.000</option>
                                <option value="Rank Epic V - Mythic = IDR 320.000">Rank Epic V - Mythic = IDR 320.000</option>
                                <option value="Rank Legend V - Mythic = IDR 185.000">Rank Legend V - Mythic = IDR 185.000</option>
                                <option value="Rank Legend V - Mythic Honor = IDR 550.000">Rank Legend V - Mythic Honor = IDR 550.000</option>
                                <option value="Rank Legend V - Mythic Glory = IDR 1.110.000">Rank Legend V - Mythic Glory = IDR 1.110.000</option>
                                <option value="Legend V - Mythic Immortal = IDR 2.350.000">Legend V - Mythic Immortal = IDR 2.350.000</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group" data-aos="fade-left" data-aos-delay="1100">
                        <label for="bukti" class="form-label">Bukti Pembayaran</label>
                        <div class="file-upload-wrapper">
                            <input type="file" id="bukti" name="foto_ml" class="file-upload-input" accept="image/*" required>
                            <div class="file-upload-content">
                                <i class="ri-upload-cloud-line"></i>
                                <span>Klik atau seret file kesini</span>
                            </div>
                        </div>
                    </div>
                </div>

                <footer class="form-footer">
                    <button type="submit" class="btn-order" data-aos="zoom-in" data-aos-delay="1200">
                        <i class="ri-shopping-cart-line"></i>
                        <span>Pesan Sekarang</span>
                    </button>
                </footer>
            </section>
        </form>
    </main>

    <?php include '../../components/footer.php'; ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true });

        document.getElementById('orderForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const notification = document.getElementById('notification');
            const formData = new FormData(this);
            fetch('simpan_orderan_ml.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                notification.textContent = 'Pesanan berhasil dikirim! Tunggu ....';
                notification.classList.add('show');
                this.reset();
                setTimeout(() => {
                    window.location.href = '../infoorder/ml.php';
                }, 1500);
            })
            .catch(error => {
                notification.textContent = 'Maaf, terjadi kesalahan. Silakan coba lagi.';
                notification.classList.add('show');
            });
        });
    </script>
</body>
</html>
