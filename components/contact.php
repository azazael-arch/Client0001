<!-- Contact Section -->
<section class="section contact" id="contact">
    <div class="container flex-contact">
        <div class="contact-info slide-in-left">
            <h2 class="section-title">Hubungi <span>Kami</span></h2>
            <p class="mb-4"><?= htmlspecialchars(getPengaturan('contact_desc_text') ?: 'Siap mempercayakan logistik Anda kepada kami? Hubungi tim kami untuk solusi terbaik.') ?></p>

            <div class="info-item">
                <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                <div>
                    <h4>Alamat Kantor</h4>
                    <p><?= htmlspecialchars(getPengaturan('footer_address') ?: 'Jl. Yos Sudarso Lorong 101 No.51 Kel. Koja, Kec. Koja, Jakarta Utara Lt. 4') ?></p>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon"><i class="fas fa-envelope"></i></div>
                <div>
                    <h4>Email</h4>
                    <p><a href="mailto:<?= htmlspecialchars(getPengaturan('footer_email') ?: 'info@sriwijayatransindo.com') ?>"><?= htmlspecialchars(getPengaturan('footer_email') ?: 'info@sriwijayatransindo.com') ?></a></p>
                </div>
            </div>

            <div class="info-item mt-4">
                <h4>Person In Charge (PIC)</h4>
                <div class="pic-grid">
                    <?php 
                        $pic1Name = getPengaturan('pic_1_name') ?: 'Vita';
                        $pic1Phone = getPengaturan('pic_1_phone') ?: '6282115564972';
                        $pic2Name = getPengaturan('pic_2_name') ?: 'Renal';
                        $pic2Phone = getPengaturan('pic_2_phone') ?: '6285776967627';
                    ?>
                    <a href="https://wa.me/<?= $pic1Phone ?>" target="_blank" class="pic-card btn-wa" data-track="contact_wa_1">
                        <i class="fab fa-whatsapp"></i>
                        <div>
                            <h5><?= htmlspecialchars($pic1Name) ?></h5>
                            <span>+<?= htmlspecialchars($pic1Phone) ?></span>
                        </div>
                    </a>
                    <a href="https://wa.me/<?= $pic2Phone ?>" target="_blank" class="pic-card btn-wa" data-track="contact_wa_2">
                        <i class="fab fa-whatsapp"></i>
                        <div>
                            <h5><?= htmlspecialchars($pic2Name) ?></h5>
                            <span>+<?= htmlspecialchars($pic2Phone) ?></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="contact-form slide-in-right">
            <form class="form-wrapper" id="wa-contact-form" action="includes/process-contact.php" method="POST">
                <input type="hidden" name="csrf_token" id="csrf_token" value="<?= htmlspecialchars($csrfToken) ?>">
                <h3>Kirim Pesan via WhatsApp</h3>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" id="wa-name" name="name" class="form-control" placeholder="Masukkan nama Anda" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" id="wa-email" name="email" class="form-control" placeholder="Masukkan alamat email" required>
                </div>
                <div class="form-group">
                    <label>Subjek / Jenis Layanan</label>
                    <input type="text" id="wa-subject" name="subject" class="form-control" placeholder="Topik diskusi" required>
                </div>
                <div class="form-group">
                    <label>Pesan</label>
                    <textarea class="form-control" id="wa-message" name="message" rows="4" placeholder="Jelaskan kebutuhan Anda" required></textarea>
                </div>
                <button type="submit" class="btn btn-gold btn-block" id="btn-submit-contact">
                    <i class="fab fa-whatsapp"></i> Kirim via WhatsApp
                </button>
                <div id="form-notification" style="display:none; margin-top: 12px; padding: 12px 16px; border-radius: 10px; font-size: 0.9rem;"></div>
            </form>
        </div>
    </div>
</section>
