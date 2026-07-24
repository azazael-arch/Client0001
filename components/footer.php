<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-about">
                <img src="assets/images/PT. Sriwijaya Trans Indo.png" alt="STI Logo" class="footer-logo-img">
                <h3>SRIWIJAYA <span>TRANS INDO</span></h3>
                <p><?= htmlspecialchars(getPengaturan('footer_about_text') ?: 'Perusahaan jasa transportasi dan pergudangan terpercaya yang berkomitmen memberikan solusi logistik terbaik di seluruh Indonesia.') ?></p>
                <div class="social-links mt-3">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fas fa-globe"></i></a>
                </div>
            </div>
            <div class="footer-links">
                <h4>Navigasi Cepat</h4>
                <ul>
                    <li><a href="#about"><i class="fas fa-chevron-right"></i> Tentang Kami</a></li>
                    <li><a href="#services"><i class="fas fa-chevron-right"></i> Layanan</a></li>
                    <li><a href="#portfolio"><i class="fas fa-chevron-right"></i> Portofolio</a></li>
                    <li><a href="#contact"><i class="fas fa-chevron-right"></i> Kontak</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h4>Kontak</h4>
                <p><i class="fas fa-map-marker-alt"></i> <?= htmlspecialchars(getPengaturan('footer_address') ?: 'Jl. Yos Sudarso Lorong 101 No.51 Kel. Koja, Kec. Koja, Jakarta Utara Lt. 4') ?></p>
                <p><i class="fas fa-envelope"></i> <?= htmlspecialchars(getPengaturan('footer_email') ?: 'info@sriwijayatransindo.com') ?></p>
                <p><i class="fab fa-whatsapp"></i> <?= htmlspecialchars(getPengaturan('footer_phone') ?: '+62 821-1556-4972 | +62 857-7696-7627') ?></p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?= date('Y') ?> PT. Sriwijaya Trans Indo. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<!-- Floating WhatsApp Button -->
<a href="https://wa.me/6282115564972" target="_blank" class="floating-wa" id="floating-wa" title="Chat WhatsApp" data-track="floating_wa">
    <i class="fab fa-whatsapp"></i>
    <span class="floating-wa-text">Chat Kami</span>
</a>

<!-- Back to Top Button -->
<button class="back-to-top" id="back-to-top" title="Kembali ke Atas">
    <i class="fas fa-chevron-up"></i>
</button>

<!-- Lightbox Overlay -->
<div class="lightbox-overlay" id="lightbox-overlay">
    <button class="lightbox-close" id="lightbox-close"><i class="fas fa-times"></i></button>
    <img src="" alt="" class="lightbox-img" id="lightbox-img">
</div>
