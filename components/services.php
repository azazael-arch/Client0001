<!-- Services Section - Bento Grid (Dynamic from DB) -->
<section class="section services" id="services">
    <div class="container">
        <div class="services-header">
            <h2 class="section-title">Layanan <span>Unggulan</span></h2>
            <p class="section-subtitle"><?= htmlspecialchars(getPengaturan('service_desc_text') ?: 'Solusi komprehensif untuk segala kebutuhan transportasi dan pergudangan Anda') ?></p>
        </div>

        <div class="bento-grid">
            <?php if (!empty($services)): ?>
                <?php foreach ($services as $i => $svc): 
                    $details = is_string($svc['details']) ? json_decode($svc['details'], true) : ($svc['details'] ?? []);
                    $bentoSize = $svc['bento_size'] ?? 'medium';
                    $imagePath = $svc['image_path'] ?? '';
                    
                    // Fallback images if none uploaded
                    if (empty($imagePath)) {
                        $fallbacks = [
                            'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=800',
                            'https://images.unsplash.com/photo-1519003722824-192d992a6058?q=80&w=800',
                            'https://images.unsplash.com/photo-1506784983877-45594efa4cbe?q=80&w=800',
                            'https://images.unsplash.com/photo-1494412519320-aa613dfb7738?q=80&w=800'
                        ];
                        $imagePath = $fallbacks[$i % count($fallbacks)];
                    } else {
                        // Ensure it's the correct path
                        if (!str_starts_with($imagePath, 'http') && !str_starts_with($imagePath, 'assets/')) {
                            $imagePath = 'assets/uploads/images/' . ltrim($imagePath, '/');
                        }
                    }
                ?>
                <div class="bento-item bento-<?= $bentoSize ?> fade-in" <?= $i > 0 ? 'style="transition-delay: ' . ($i * 0.1) . 's;"' : '' ?> data-service="<?= htmlspecialchars($svc['slug']) ?>">
                    <div class="bento-bg">
                        <img src="<?= htmlspecialchars($imagePath) ?>" alt="<?= htmlspecialchars($svc['title']) ?>" loading="lazy">
                        <div class="bento-overlay"></div>
                    </div>
                    <div class="bento-content">
                        <div class="bento-icon">
                            <i class="<?= htmlspecialchars($svc['icon_class'] ?? 'fas fa-cogs') ?>"></i>
                        </div>
                        <div class="bento-text">
                            <h3><?= htmlspecialchars($svc['title']) ?></h3>
                            <p><?= htmlspecialchars($svc['description']) ?></p>
                            <?php if (!empty($details)): ?>
                            <ul class="service-details">
                                <?php foreach ($details as $detail): ?>
                                <li><?= htmlspecialchars($detail) ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="bento-arrow">
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <!-- Fallback content if empty -->
                <p class="text-center">Layanan belum tersedia.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Service Detail Modals -->
<div class="service-modal-overlay" id="service-modal-overlay">
    <div class="service-modal">
        <button class="service-modal-close" id="service-modal-close"><i class="fas fa-times"></i></button>
        <div class="service-modal-body" id="service-modal-body"></div>
    </div>
</div>
