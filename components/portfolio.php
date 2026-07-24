<!-- Portfolio & Gallery Section -->
<section class="section customers" id="portfolio">
    <div class="container text-center">
        <h2 class="section-title">Portofolio & <span>Galeri</span></h2>
        <p class="section-subtitle"><?= htmlspecialchars(getPengaturan('port_desc_text') ?: 'Dokumentasi kegiatan dan studi kasus pengiriman riil kami.') ?></p>

        <!-- Gallery Filter Tabs -->
        <div class="gallery-filter">
            <button class="filter-btn active" data-filter="all">Semua</button>
            <button class="filter-btn" data-filter="operasional">Operasional</button>
            <button class="filter-btn" data-filter="pengiriman">Pengiriman</button>
            <button class="filter-btn" data-filter="fasilitas">Fasilitas</button>
        </div>

        <!-- Gallery Grid -->
        <div class="gallery-grid mt-4" id="gallery-grid">
            <?php
            $portfolio = Database::fetchAll("SELECT * FROM portfolio ORDER BY tanggal_buat DESC");
            if(!empty($portfolio)) {
                foreach($portfolio as $port) {
                    $srcPort = (strpos($port['gambar_path'], 'http') === 0 || strpos($port['gambar_path'], 'assets/') === 0) ? $port['gambar_path'] : 'assets/uploads/images/' . ltrim($port['gambar_path'], '/');
            ?>
            <div class="gallery-item" data-category="<?= htmlspecialchars($port['kategori']) ?>">
                <img src="<?= htmlspecialchars($srcPort) ?>" alt="<?= htmlspecialchars($port['judul']) ?>" class="gallery-img" loading="lazy">
                <div class="gallery-overlay">
                    <h4><?= htmlspecialchars($port['judul']) ?></h4>
                    <p><?= htmlspecialchars($port['deskripsi']) ?></p>
                    <span class="gallery-zoom"><i class="fas fa-search-plus"></i></span>
                </div>
            </div>
            <?php 
                }
            } else {
                echo "<p style='grid-column: 1/-1; text-align: center; color: #666;'>Belum ada portofolio.</p>";
            }
            ?>
        </div>
    </div>
</section>

<!-- Client Logo Marquee -->
<section class="client-marquee-section">
    <div class="container text-center">
        <h3 class="section-title" style="font-size: 1.8rem;">Dipercaya Oleh <span>Perusahaan Terkemuka</span></h3>
    </div>
    <div class="marquee-wrapper">
        <div class="marquee-track" id="marquee-track">
            <?php
            $clients = Database::fetchAll("SELECT * FROM clients ORDER BY id DESC");
            if(!empty($clients)):
                for($i=0; $i<2; $i++):
                    foreach($clients as $cl): 
                        $srcLogo = (strpos($cl['logo_path'], 'http') === 0 || strpos($cl['logo_path'], 'assets/') === 0) ? $cl['logo_path'] : 'assets/uploads/images/' . ltrim($cl['logo_path'], '/');
            ?>
                    <div class="marquee-item">
                        <img src="<?= htmlspecialchars($srcLogo) ?>" alt="<?= htmlspecialchars($cl['nama_perusahaan']) ?>" class="client-logo">
                        <span><?= htmlspecialchars($cl['nama_perusahaan']) ?></span>
                    </div>
                    <?php endforeach;
                endfor; 
            else: ?>
                <div class="marquee-item"><span>Belum ada daftar klien</span></div>
            <?php endif; ?>
        </div>
    </div>
</section>
