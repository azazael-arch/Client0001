<!-- About Section -->
<section class="section about" id="about">
    <div class="container">
        <div class="about-grid">
            <div class="about-text slide-in-left">
                <h2 class="section-title">Tentang <span>Kami</span></h2>
                <p class="lead-text"><?= htmlspecialchars(getPengaturan('about_lead_text') ?: 'PT Sriwijaya Trans Indo adalah perusahaan perseroan terbatas yang berkedudukan di Jakarta, berdiri pada tanggal 16 Oktober 2025.') ?></p>
                <p><?= htmlspecialchars(getPengaturan('about_desc_text') ?: 'Kami hadir dengan fokus utama pada kegiatan usaha di bidang jasa transportasi dan pergudangan, berkomitmen untuk memberikan solusi logistik terbaik bagi mitra kami di seluruh Indonesia.') ?></p>

                <div class="current-facilities">
                    <h3><?= htmlspecialchars(getPengaturan('about_facility_title') ?: 'Fasilitas dan Layanan Operasional Saat Ini') ?></h3>
                    <div class="facilities-grid">
                        <div class="facility-item">
                            <div class="facility-icon"><i class="fas fa-truck-loading"></i></div>
                            <div class="facility-content">
                                <h4><?= htmlspecialchars(getPengaturan('about_fac_1') ?: 'Pergudangan dan penumpukan') ?></h4>
                                <p><?= htmlspecialchars(getPengaturan('about_fac_1_desc') ?: 'Penyediaan gudang dan lapangan penumpukan yang luas untuk berbagai macam cargo dan kendaraan.') ?></p>
                            </div>
                        </div>
                        <div class="facility-item">
                            <div class="facility-icon"><i class="fas fa-shipping-fast"></i></div>
                            <div class="facility-content">
                                <h4><?= htmlspecialchars(getPengaturan('about_fac_2') ?: 'Pengiriman Barang Domestik') ?></h4>
                                <ul>
                                    <li><?= htmlspecialchars(getPengaturan('about_fac_2_desc') ?: 'Layanan pengiriman cargo dan kendaraan door to door ke seluruh wilayah indonesia') ?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="facility-item">
                            <div class="facility-icon"><i class="fas fa-users"></i></div>
                            <div class="facility-content">
                                <h4><?= htmlspecialchars(getPengaturan('about_fac_3') ?: 'Tenaga Pendukung Profesional') ?></h4>
                                <ul>
                                    <li><?= htmlspecialchars(getPengaturan('about_fac_3_desc') ?: 'Dukungan tenaga Professional Driver yang berpengalaman') ?></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-mission slide-in-right">
                <div class="vm-card mission-card">
                    <div class="vm-icon"><i class="fas fa-eye"></i></div>
                    <h3>Visi</h3>
                    <p><?= htmlspecialchars(getPengaturan('visi_text') ?: 'Menjadi perusahaan logistik terfavorit dan berkontribusi aktif terhadap pertumbuhan logistik Indonesia.') ?></p>
                </div>
                <div class="vm-card mission-card">
                    <div class="vm-icon"><i class="fas fa-rocket"></i></div>
                    <h3>Misi Kami</h3>
                    <ul class="mission-list">
                        <li><i class="fas fa-check-circle text-gold"></i> <?= htmlspecialchars(getPengaturan('misi_1') ?: 'Memberikan pelayanan penuh semangat dengan mengedepankan aspek keselamatan, keamanan, dan kenyamanan.') ?></li>
                        <li><i class="fas fa-check-circle text-gold"></i> <?= htmlspecialchars(getPengaturan('misi_2') ?: 'Memberikan pelayanan yang berkualitas dan dapat selalu memenuhi kebutuhan Pelanggan.') ?></li>
                        <li><i class="fas fa-check-circle text-gold"></i> <?= htmlspecialchars(getPengaturan('misi_3') ?: 'Berkembang bersama pelanggan, mitra dan bangsa dalam mencapai logistik yang efektif dan efisien.') ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
