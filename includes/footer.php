<?php
// Pastikan BASE_URL sudah didefinisikan di config.php
require_once __DIR__ . '/../config.php';
if (!defined('BASE_URL')) {
    define('BASE_URL', $BASE_URL ?? 'http://localhost/javapedia');
}
?>

<footer class="site-footer">
    <div class="footer-content">
        
        <!-- Brand Section -->
        <div class="footer-brand">
            <img src="<?php echo BASE_URL; ?>/assets/images/logo.png" alt="Javapedia Logo" class="footer-logo">
            <h3>JAVA<span class="text-accent">PEDIA</span></h3>
            <p class="footer-tagline">Jasa Joki Game Online Terpercaya</p>
        </div>

        <!-- Contact Section -->
        <div class="footer-column">
            <h4>Hubungi Kami</h4>
            <ul class="footer-links">
                <li>
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Lokasi: Jember</span>
                </li>
                <li>
                    <i class="fas fa-phone"></i>
                    <a href="tel:082132167400">0821-3216-7400</a>
                </li>
                <li>
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:info@javapedia.com">info@javapedia.com</a>
                </li>
            </ul>
        </div>

        <!-- Quick Links Section (HANYA halaman penting) -->
        <div class="footer-column">
            <h4>Menu Utama</h4>
            <ul class="footer-links">
                <li><a href="<?php echo BASE_URL; ?>/index.php">Beranda</a></li>
                <li><a href="<?php echo BASE_URL; ?>/pages/info/about.php">Tentang Kami</a></li>
                <li><a href="<?php echo BASE_URL; ?>/pages/info/testi.php">Testimoni</a></li>
                <li><a href="<?php echo BASE_URL; ?>/pages/info/contact.php">Kontak</a></li>
            </ul>
        </div>

        <!-- Social Media Section -->
        <div class="footer-column">
            <h4>Media Sosial</h4>
            <ul class="footer-links">
                <li>
                    <i class="fab fa-whatsapp"></i>
                    <a href="https://wa.me/6282132167400" target="_blank" rel="noopener noreferrer">WhatsApp</a>
                </li>
                <li>
                    <i class="fab fa-instagram"></i>
                    <a href="https://instagram.com/javapedia" target="_blank" rel="noopener noreferrer">Instagram</a>
                </li>
                <li>
                    <i class="fab fa-tiktok"></i>
                    <a href="https://tiktok.com/@javapedia" target="_blank" rel="noopener noreferrer">TikTok</a>
                </li>
                <li>
                    <i class="fas fa-headset"></i>
                    <a href="<?php echo BASE_URL; ?>/pages/info/contact.php">Customer Support</a>
                </li>
            </ul>
        </div>

    </div>

    <!-- Copyright Bar -->
    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> Javapedia. All rights reserved.</p>
    </div>
</footer>
