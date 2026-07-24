<!-- Hero Section -->
<header class="hero" id="home">
    <div class="hero-background">
        <?php 
            $heroBanner = getPengaturan('hero_banner');
            $bannerPath = !empty($heroBanner) && $heroBanner !== 'banner_default.jpg' 
                          ? 'assets/uploads/images/' . $heroBanner 
                          : 'https://images.unsplash.com/photo-1494412519320-aa613dfb7738?q=80&w=1920';
        ?>
        <img src="<?= htmlspecialchars($bannerPath) ?>" alt="Logistics Shipyard" class="hero-bg-image">
        <div class="hero-overlay"></div>
    </div>
    <div class="container hero-content">
        <div class="hero-text">
            <h1 class="hero-headline">
                <?= htmlspecialchars(getPengaturan('hero_headline') ?: 'Solusi Logistik Terintegrasi untuk Bisnis Anda') ?>
            </h1>
            <p class="hero-subtitle">
                <?= htmlspecialchars(getPengaturan('hero_subtitle') ?: 'Kami menyediakan layanan pergudangan, lahan penumpukan, self drive, dan pengiriman barang yang aman, tepat waktu, dan profesional di seluruh Indonesia') ?>
            </p>
            <div class="hero-features">
                <div class="feature-badge">
                    <i class="fas fa-shield-alt"></i>
                    <span>Aman & Terjamin</span>
                </div>
                <div class="feature-badge">
                    <i class="fas fa-clock"></i>
                    <span>Tepat Waktu</span>
                </div>
                <div class="feature-badge">
                    <i class="fas fa-handshake"></i>
                    <span>Profesional</span>
                </div>
            </div>
            <div class="hero-cta">
                <a href="#services" class="btn btn-primary" data-track="hero_services">
                    <i class="fas fa-eye"></i> Lihat Layanan
                </a>
                <a href="#contact" class="btn btn-outline" data-track="hero_contact">
                    <i class="fas fa-phone"></i> Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</header>

<!-- Highlight Stats Section (Under Hero) -->
<section class="highlight-stats">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item fade-in">
                <i class="fas fa-shipping-fast stat-icon"></i>
                <div>
                    <h4><?= htmlspecialchars(getPengaturan('hero_feat_1_title') ?: 'Cepat & Profesional') ?></h4>
                    <p><?= htmlspecialchars(getPengaturan('hero_feat_1_desc') ?: 'Pekerjaan dilakukan presisi.') ?></p>
                </div>
            </div>
            <div class="stat-item fade-in" style="transition-delay: 0.1s;">
                <i class="fas fa-shield-alt stat-icon"></i>
                <div>
                    <h4><?= htmlspecialchars(getPengaturan('hero_feat_2_title') ?: 'Aman & Terjamin') ?></h4>
                    <p><?= htmlspecialchars(getPengaturan('hero_feat_2_desc') ?: 'Barang Anda aman bersama kami.') ?></p>
                </div>
            </div>
            <div class="stat-item fade-in" style="transition-delay: 0.2s;">
                <i class="fas fa-handshake stat-icon"></i>
                <div>
                    <h4><?= htmlspecialchars(getPengaturan('hero_feat_3_title') ?: 'Hasil Memuaskan') ?></h4>
                    <p><?= htmlspecialchars(getPengaturan('hero_feat_3_desc') ?: 'Kepuasan klien nomor satu.') ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
