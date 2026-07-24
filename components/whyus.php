<!-- Why Us Section -->
<section class="section why-us" id="why-us">
    <div class="container">
        <div class="why-us-grid">
            <div class="why-us-info slide-in-left">
                <h2 class="section-title text-white">Mengapa Memilih <span>Kami?</span></h2>
                <p style="color: #ffffff; margin-bottom: 2.5rem; font-size: 1.1rem;"><?= htmlspecialchars(getPengaturan('whyus_desc_text') ?: 'Kami memberikan komitmen operasional yang menjamin keandalan rantai pasok bisnis Anda secara aman dan efisien.') ?></p>

                <div class="feature-list">
                    <div class="feature-item">
                        <div class="feature-icon"><i class="fas fa-certificate"></i></div>
                        <div class="feature-text">
                            <h4><?= htmlspecialchars(getPengaturan('whyus_feat_1_title') ?: 'Layanan Terakreditasi') ?></h4>
                            <p><?= htmlspecialchars(getPengaturan('whyus_feat_1_desc') ?: 'Sistem manajemen logistik dengan standar sertifikasi internasional untuk menjamin kualitas setiap pengiriman.') ?></p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                        <div class="feature-text">
                            <h4><?= htmlspecialchars(getPengaturan('whyus_feat_2_title') ?: 'Keamanan Multi-Layer') ?></h4>
                            <p><?= htmlspecialchars(getPengaturan('whyus_feat_2_desc') ?: 'Prosedur keamanan ketat dari driver hingga tim checker untuk meminimalkan risiko di setiap titik operasional.') ?></p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon"><i class="fas fa-bolt"></i></div>
                        <div class="feature-text">
                            <h4><?= htmlspecialchars(getPengaturan('whyus_feat_3_title') ?: 'Efisiensi & Kecepatan') ?></h4>
                            <p><?= htmlspecialchars(getPengaturan('whyus_feat_3_desc') ?: 'Optimasi rute dan armada trucking modern yang memastikan distribusi logistik Anda tepat waktu tanpa kompromi.') ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="why-us-media slide-in-right">
                <div class="why-us-image-wrapper">
                    <?php 
                        $whyUsImage = getPengaturan('whyus_image');
                        $whyUsImgPath = !empty($whyUsImage) && !str_contains($whyUsImage, 'http')
                                        ? 'assets/uploads/images/' . $whyUsImage 
                                        : 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=1024';
                    ?>
                    <img src="<?= htmlspecialchars($whyUsImgPath) ?>" alt="Fasilitas Profesional" class="img-main">
                    <div class="experience-badge-square">
                        <span class="number">100%</span>
                        <span class="text">Keamanan<br>Terjamin</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
