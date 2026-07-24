# PT. Sriwijaya Trans Indo — Corporate Website

Situs web profil perusahaan (corporate landing page) resmi untuk **PT. Sriwijaya Trans Indo**, penyedia layanan logistik, transportasi kargo, dan manajemen rantai pasok terpadu di Indonesia.

---

## 🛠️ Teknologi & Fitur Utama

* **PHP (Native):** Arsitektur komponen modular berbasis PHP untuk kemudahan pemeliharaan kode.
* **HTML5 & CSS3:** Desain modern, responsif, dan teroptimasi untuk berbagai ukuran layar (*mobile-first design*).
* **JavaScript:** Interaktivitas ringan untuk navigasi dan penanganan formulir kontak.
* **Lucide Icons:** Ikonografi vektor yang bersih dan konsisten.

---

## 📁 Struktur Proyek

Proyek ini dibangun menggunakan pendekatan komponen terpisah agar struktur kode tetap bersih dan mudah dikembangkan:

```text
├── assets/
│   └── images/          # Aset gambar & media
├── components/          # Komponen modular PHP
│   ├── navbar.php       # Menu navigasi & header
│   ├── hero.php         # Section banner utama
│   ├── about.php        # Profil singkat perusahaan
│   ├── services.php     # Layanan utama (Darat, Laut, Udara, Warehouse)
│   ├── whyus.php        # Keunggulan perusahaan
│   ├── portfolio.php    # Galeri / dokumentasi proyek & armada
│   ├── news.php         # Berita & artikel terbaru
│   ├── contact.php      # Formulir pesan & informasi kontak
│   ├── footer.php       # Hak cipta & tautan navigasi bawah
│   └── scripts.php      # Panggilan pustaka JavaScript & skrip pendukung
├── .htaccess            # Konfigurasi server Apache & routing
├── index.php            # Entry point utama (menggabungkan seluruh komponen)
├── script.js           # Logika skrip kustom
├── style.css            # Gaya visual & variabel tema
└── README.md            # Dokumentasi proyek