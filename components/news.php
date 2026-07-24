<!-- News & Updates Section -->
<section class="section news bg-light" id="news">
    <div class="container text-center">
        <h2 class="section-title">Berita & <span>Informasi</span></h2>
        <p class="section-subtitle"><?= htmlspecialchars(getPengaturan('news_desc_text') ?: 'Ikuti update terbaru mengenai kegiatan CSR, operasional, dan informasi seputar Sriwijaya Trans Indo.') ?></p>

        <div class="news-grid">
            <?php
            $beritaFront = Database::fetchAll("SELECT * FROM berita ORDER BY tanggal_buat DESC LIMIT 3");
            if(!empty($beritaFront)):
                $delay = 0;
                foreach($beritaFront as $b):
                    $waktu = strtotime($b['tanggal']);
                    $tglFormat = date('d', $waktu) . ' ' . date('M', $waktu) . ' ' . date('Y', $waktu);
            ?>
            <div class="news-card fade-in" style="transition-delay: <?= $delay ?>s;">
                <div class="news-img-wrapper">
                    <?php $imgSrc = (strpos($b['gambar'], 'assets/') === 0) ? $b['gambar'] : 'assets/uploads/images/' . $b['gambar']; ?>
                    <img src="<?= htmlspecialchars($imgSrc) ?>" alt="<?= htmlspecialchars($b['judul']) ?>" class="news-img" loading="lazy">
                    <div class="news-date"><?= $tglFormat ?></div>
                </div>
                <div class="news-body">
                    <h4><?= htmlspecialchars($b['judul']) ?></h4>
                    <p><?= htmlspecialchars($b['konten'] ?? '') ?></p>
                </div>
            </div>
            <?php 
                    $delay += 0.1;
                endforeach;
            else:
            ?>
            <div class="news-card fade-in">
                <div class="news-img-wrapper">
                    <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?q=80&w=600" alt="CSR Berbagi" class="news-img" loading="lazy">
                    <div class="news-date">16 Okt 2025</div>
                </div>
                <div class="news-body">
                    <h4>Perayaan Berdirinya PT. Sriwijaya Trans Indo</h4>
                    <p>Kami resmi beroperasi untuk menghadirkan layanan logistik nomor satu di penjuru Nusantara dengan fokus layanan pergudangan dan transportasi yang aman dan kompetitif.</p>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
