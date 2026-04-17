// ============================================
// PT. SRIWIJAYA TRANS INDO - Premium Script
// ============================================

// --- HERO SLIDER LOGIC ---
let slideIndex = 0;
let slides;
let dots;
let slideInterval;

function initSlider() {
    slides = document.querySelectorAll('.slide');
    dots = document.querySelectorAll('.dot');
    if(slides.length === 0) return;
    showSlide(0);
    startSlideTimer();
}

function showSlide(index) {
    if (index >= slides.length) slideIndex = 0;
    else if (index < 0) slideIndex = slides.length - 1;
    else slideIndex = index;

    slides.forEach(slide => slide.classList.remove('active'));
    dots.forEach(dot => dot.classList.remove('active'));

    if(slides[slideIndex]) slides[slideIndex].classList.add('active');
    if(dots[slideIndex]) dots[slideIndex].classList.add('active');
}

window.moveSlide = function(step) {
    showSlide(slideIndex + step);
    resetSlideTimer();
}

window.currentSlide = function(index) {
    showSlide(index);
    resetSlideTimer();
}

function startSlideTimer() {
    slideInterval = setInterval(() => {
        showSlide(slideIndex + 1);
    }, 5000);
}

function resetSlideTimer() {
    clearInterval(slideInterval);
    startSlideTimer();
}

// --- TYPING ANIMATION ---
class TypeWriter {
    constructor(element, words, wait = 3000) {
        this.element = element;
        this.words = words;
        this.wait = wait;
        this.wordIndex = 0;
        this.txt = '';
        this.isDeleting = false;
        this.type();
    }

    type() {
        const current = this.wordIndex % this.words.length;
        const fullTxt = this.words[current];

        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.element.textContent = this.txt;

        let typeSpeed = this.isDeleting ? 50 : 100;

        if (!this.isDeleting && this.txt === fullTxt) {
            typeSpeed = this.wait;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.wordIndex++;
            typeSpeed = 500;
        }

        setTimeout(() => this.type(), typeSpeed);
    }
}

// --- COUNTER ANIMATION ---
function animateCounter(el) {
    const target = parseInt(el.getAttribute('data-target'));
    const suffix = el.getAttribute('data-suffix') || '+';
    const duration = 2000;
    let current = 0;
    const increment = target / (duration / 16);

    const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
            el.textContent = target + suffix;
            clearInterval(timer);
        } else {
            el.textContent = Math.floor(current) + suffix;
        }
    }, 16);
}

// --- TESTIMONIAL SLIDER ---
let testimonialIndex = 0;
let testimonialInterval;

function initTestimonialSlider() {
    const cards = document.querySelectorAll('.testimonial-card');
    const dotsContainer = document.getElementById('testimonial-dots');
    if (!cards.length || !dotsContainer) return;

    cards.forEach((_, i) => {
        const dot = document.createElement('span');
        dot.classList.add('testimonial-dot');
        if (i === 0) dot.classList.add('active');
        dot.addEventListener('click', () => {
            showTestimonial(i);
            resetTestimonialTimer();
        });
        dotsContainer.appendChild(dot);
    });

    showTestimonial(0);
    startTestimonialTimer();
}

function showTestimonial(index) {
    const cards = document.querySelectorAll('.testimonial-card');
    const tdots = document.querySelectorAll('.testimonial-dot');
    if (!cards.length) return;

    if (index >= cards.length) testimonialIndex = 0;
    else if (index < 0) testimonialIndex = cards.length - 1;
    else testimonialIndex = index;

    cards.forEach(c => c.classList.remove('active'));
    tdots.forEach(d => d.classList.remove('active'));

    cards[testimonialIndex].classList.add('active');
    if (tdots[testimonialIndex]) tdots[testimonialIndex].classList.add('active');
}

function startTestimonialTimer() {
    testimonialInterval = setInterval(() => {
        showTestimonial(testimonialIndex + 1);
    }, 5000);
}

function resetTestimonialTimer() {
    clearInterval(testimonialInterval);
    startTestimonialTimer();
}

// --- SERVICE MODAL DATA ---
const serviceModalData = {
    'penumpukan': {
        title: 'Jasa Lapangan Penumpukan',
        description: 'Kami menyediakan lapangan penumpukan (Storage Yard) yang luas dan aman untuk berbagai jenis cargo dan kendaraan. Dilengkapi dengan sistem keamanan CCTV 24 jam dan petugas berjaga.',
        features: [
            'Lapangan penumpukan kendaraan (mobil, motor, alat berat)',
            'Area cargo & barang umum yang terproteksi',
            'CCTV monitoring 24 jam penuh',
            'Petugas keamanan berjaga setiap saat',
            'Proses bongkar muat dengan alat profesional',
            'Lokasi strategis dekat jalur utama distribusi'
        ]
    },
    'self-drive': {
        title: 'Jasa Self Drive',
        description: 'Layanan premium pengantaran unit kendaraan yang dikemudikan langsung oleh driver profesional dan berpengalaman dari titik asal hingga ke tujuan akhir.',
        features: [
            'Driver profesional bersertifikat & berpengalaman',
            'Asuransi perjalanan untuk setiap pengiriman',
            'Tracking dan pelaporan real-time',
            'Cocok untuk dealer, rental, dan individu',
            'Penanganan kendaraan premium dan luxury',
            'Layanan door-to-door tanpa biaya tambahan'
        ]
    },
    'pengiriman-indonesia': {
        title: 'Pengiriman Barang Domestik',
        description: 'Pengiriman barang dan kendaraan ke seluruh wilayah Nusantara melalui jalur darat maupun laut secara Door to Door dengan jaminan keamanan dan ketepatan waktu.',
        features: [
            'Jangkauan ke 34 provinsi di Indonesia',
            'Pengiriman via darat dan laut',
            'Sistem Door to Door yang efisien',
            'Penanganan barang khusus dan oversized',
            'Packaging profesional untuk keamanan',
            'Estimasi waktu pengiriman yang akurat'
        ]
    },
    'fasilitas-operasional': {
        title: 'Fasilitas Operasional',
        description: 'Dukungan operasional penuh dengan tenaga kerja ahli dan sarana pendukung yang menjamin kelancaran setiap proses logistik dari hulu hingga hilir.',
        features: [
            'Professional Driver yang handal dan terlatih',
            'Layanan Shuttle Car untuk aksesibilitas',
            'Supervisor & Koordinator Operasi berpengalaman',
            'Inspektor & Checker untuk kontrol kualitas',
            'Administrator Office yang responsif',
            'Sistem pelaporan operasional yang terstruktur'
        ]
    }
};

// ============================================
// MAIN DOM CONTENT LOADED
// ============================================
document.addEventListener('DOMContentLoaded', () => {

    // --- 0. PRELOADER ---
    window.addEventListener('load', () => {
        const preloader = document.getElementById('preloader');
        if (preloader) {
            setTimeout(() => {
                preloader.classList.add('hidden');
            }, 800);
        }
    });

    // Initialize Hero Slider - REMOVED: Now using static hero
    // initSlider();

    // --- 1. MOBILE NAVIGATION TOGGLE ---
    const navToggle = document.getElementById('nav-toggle');
    const navLinks = document.getElementById('nav-links');
    const navItems = navLinks ? navLinks.querySelectorAll('a') : [];

    if (navToggle) {
        navToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            const icon = navToggle.querySelector('i');
            if(navLinks.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    }

    navItems.forEach(item => {
        item.addEventListener('click', () => {
            if (navLinks) navLinks.classList.remove('active');
            if (navToggle) {
                const icon = navToggle.querySelector('i');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    });

    // --- 2. SCROLL EVENTS ---
    const navbar = document.getElementById('navbar');
    const scrollProgress = document.getElementById('scroll-progress');
    const backToTop = document.getElementById('back-to-top');
    const floatingWa = document.getElementById('floating-wa');

    window.addEventListener('scroll', () => {
        if (navbar) {
            navbar.classList.toggle('scrolled', window.scrollY > 50);
        }

        if (scrollProgress) {
            const scrollTop = window.scrollY;
            const docHeight = document.documentElement.scrollHeight - window.innerHeight;
            scrollProgress.style.width = (docHeight > 0 ? (scrollTop / docHeight) * 100 : 0) + '%';
        }

        if (backToTop) {
            backToTop.classList.toggle('visible', window.scrollY > 500);
        }

        if (floatingWa) {
            floatingWa.classList.toggle('visible', window.scrollY > 300);
        }
    });

    if (backToTop) {
        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // --- 3. SCROLL REVEAL ANIMATIONS ---
    const appearOptions = {
        threshold: 0.15,
        rootMargin: "0px 0px -50px 0px"
    };

    const appearOnScroll = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            entry.target.classList.add('appear');
            observer.unobserve(entry.target);
        });
    }, appearOptions);

    document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right').forEach(el => {
        appearOnScroll.observe(el);
    });

    // --- 4. COUNTER ANIMATION ---
    const counterObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            entry.target.querySelectorAll('.counter-number').forEach(c => animateCounter(c));
            observer.unobserve(entry.target);
        });
    }, { threshold: 0.3 });

    const counterSection = document.querySelector('.counter-section');
    if (counterSection) counterObserver.observe(counterSection);

    // --- 5. ACTIVE LINK ON SCROLL ---
    const sections = document.querySelectorAll('section[id], header[id]');

    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(section => {
            if (scrollY >= (section.offsetTop - 150)) {
                current = section.getAttribute('id');
            }
        });
        navItems.forEach(a => {
            a.classList.remove('active');
            if (a.getAttribute('href') === `#${current}`) {
                a.classList.add('active');
            }
        });
    });

    // --- 6. WHATSAPP CONTACT FORM ---
    const waForm = document.getElementById('wa-contact-form');
    if (waForm) {
        waForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const name = document.getElementById('wa-name').value.trim();
            const email = document.getElementById('wa-email').value.trim();
            const subject = document.getElementById('wa-subject').value.trim();
            const message = document.getElementById('wa-message').value.trim();

            const waMessage =
`Halo, saya ingin menghubungi PT. Sriwijaya Trans Indo.

*Nama:* ${name}
*Email:* ${email}
*Subjek:* ${subject}

*Pesan:*
${message}

_(Pesan ini dikirim melalui website sriwijayatransindo.com)_`;

            const waNumber = '6282115564972';
            window.open(`https://wa.me/${waNumber}?text=${encodeURIComponent(waMessage)}`, '_blank');
            waForm.reset();
        });
    }

    // --- 7. DARK MODE TOGGLE ---
    const darkModeToggle = document.getElementById('dark-mode-toggle');
    if (darkModeToggle) {
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme === 'dark') {
            document.documentElement.setAttribute('data-theme', 'dark');
            darkModeToggle.querySelector('i').classList.replace('fa-moon', 'fa-sun');
        }

        darkModeToggle.addEventListener('click', () => {
            const icon = darkModeToggle.querySelector('i');
            const isDark = document.documentElement.getAttribute('data-theme') === 'dark';
            
            if (isDark) {
                document.documentElement.removeAttribute('data-theme');
                icon.classList.replace('fa-sun', 'fa-moon');
                localStorage.setItem('theme', 'light');
            } else {
                document.documentElement.setAttribute('data-theme', 'dark');
                icon.classList.replace('fa-moon', 'fa-sun');
                localStorage.setItem('theme', 'dark');
            }
        });
    }

    // --- 8. TYPING ANIMATION ---
    const typedElement = document.getElementById('typed-text');
    if (typedElement) {
        new TypeWriter(typedElement, [
            'Lapangan Penumpukan',
            'Self Drive Profesional',
            'Pengiriman Door to Door',
            'Logistik Terpercaya'
        ], 2000);
    }

    // --- 9. LIGHTBOX GALLERY ---
    const lightboxOverlay = document.getElementById('lightbox-overlay');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxClose = document.getElementById('lightbox-close');

    const openLightbox = (src, alt) => {
        if (!lightboxOverlay) return;
        lightboxImg.src = src;
        lightboxImg.alt = alt || '';
        lightboxOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    };

    const closeLightbox = () => {
        if (!lightboxOverlay) return;
        lightboxOverlay.classList.remove('active');
        document.body.style.overflow = '';
    };

    if (lightboxOverlay) {
        // Gallery items
        document.querySelectorAll('.gallery-item').forEach(item => {
            item.addEventListener('click', () => {
                const img = item.querySelector('img');
                if (img) openLightbox(img.src, img.alt);
            });
        });

        // Service images
        document.querySelectorAll('.service-img').forEach(img => {
            img.style.cursor = 'zoom-in';
            img.addEventListener('click', (e) => {
                e.stopPropagation();
                openLightbox(img.src, img.alt);
            });
        });

        if (lightboxClose) lightboxClose.addEventListener('click', (e) => { e.stopPropagation(); closeLightbox(); });
        lightboxOverlay.addEventListener('click', (e) => { if (e.target === lightboxOverlay) closeLightbox(); });
        document.addEventListener('keydown', (e) => { if (e.key === 'Escape') closeLightbox(); });
    }

    // --- 10. TESTIMONIAL SLIDER ---
    initTestimonialSlider();

    // --- 11. PARALLAX EFFECT ---
    window.addEventListener('scroll', () => {
        const heroContent = document.querySelector('.hero-content');
        if (heroContent && window.scrollY < window.innerHeight) {
            const ratio = window.scrollY / window.innerHeight;
            heroContent.style.transform = `translateY(${window.scrollY * 0.3}px)`;
            heroContent.style.opacity = 1 - ratio * 0.8;
        }
    });

    // ============================================
    // COMPANY PROFILE FEATURES
    // ============================================

    // --- 12. FAQ ACCORDION ---
    document.querySelectorAll('.faq-question').forEach(btn => {
        btn.addEventListener('click', () => {
            const faqItem = btn.closest('.faq-item');
            const isActive = faqItem.classList.contains('active');

            // Close all FAQ items
            document.querySelectorAll('.faq-item').forEach(item => {
                item.classList.remove('active');
            });

            // Toggle clicked item
            if (!isActive) {
                faqItem.classList.add('active');
            }
        });
    });

    // --- 13. GALLERY FILTER ---
    const filterBtns = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Update active button
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.getAttribute('data-filter');

            galleryItems.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });
        });
    });

    // --- 14. SERVICE DETAIL MODALS ---
    const modalOverlay = document.getElementById('service-modal-overlay');
    const modalBody = document.getElementById('service-modal-body');
    const modalClose = document.getElementById('service-modal-close');

    const openServiceModal = (modalId) => {
        const data = serviceModalData[modalId];
        if (!data || !modalOverlay || !modalBody) return;

        let featuresHTML = data.features.map(f =>
            `<li><i class="fas fa-check-circle"></i> ${f}</li>`
        ).join('');

        modalBody.innerHTML = `
            <h3>${data.title}</h3>
            <p>${data.description}</p>
            <h4 style="color: var(--accent-color); margin-top: 20px; margin-bottom: 10px;">
                <i class="fas fa-star"></i> Fitur Layanan
            </h4>
            <ul>${featuresHTML}</ul>
            <div style="margin-top: 25px;">
                <a href="#contact" class="btn btn-gold" onclick="closeServiceModal()">
                    <i class="fas fa-envelope"></i> Hubungi Kami
                </a>
                <a href="https://wa.me/6282115564972" target="_blank" class="btn btn-outline-gold" style="margin-left: 10px;">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
            </div>
        `;

        modalOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    };

    window.closeServiceModal = () => {
        if (modalOverlay) {
            modalOverlay.classList.remove('active');
            document.body.style.overflow = '';
        }
    };

    // Click on bento-item cards to open modal
    document.querySelectorAll('.bento-item').forEach(card => {
        card.addEventListener('click', (e) => {
            // Don't open modal if clicking on the image (lightbox handles that)
            if (e.target.closest('.bento-bg')) return;
            const serviceId = card.getAttribute('data-service');
            openServiceModal(serviceId);
        });
    });

    if (modalClose) {
        modalClose.addEventListener('click', closeServiceModal);
    }

    if (modalOverlay) {
        modalOverlay.addEventListener('click', (e) => {
            if (e.target === modalOverlay) closeServiceModal();
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && modalOverlay.classList.contains('active')) {
                closeServiceModal();
            }
        });
    }

    // --- 15. VIDEO COMPANY PROFILE ---
    const videoPlayBtn = document.getElementById('video-play-btn');
    const videoPlaceholder = document.getElementById('video-placeholder');

    if (videoPlayBtn && videoPlaceholder) {
        videoPlayBtn.addEventListener('click', () => {
            // Replace placeholder with embedded video
            videoPlaceholder.innerHTML = `
                <iframe 
                    width="100%" 
                    height="100%" 
                    src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1&rel=0" 
                    title="Company Profile - PT. Sriwijaya Trans Indo"
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 15px;">
                </iframe>
            `;
            videoPlaceholder.style.background = '#000';
        });
    }

    // --- 16. DOWNLOAD COMPANY PROFILE ---
    const downloadBtns = document.querySelectorAll('#btn-download-profile, #btn-download-profile-2');
    downloadBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            // Show a professional alert since PDF doesn't exist yet
            const notification = document.createElement('div');
            notification.style.cssText = `
                position: fixed; top: 20px; right: 20px; z-index: 999999;
                background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
                color: white; padding: 20px 30px; border-radius: 12px;
                box-shadow: 0 10px 40px rgba(0,0,0,0.3); font-family: var(--font-heading);
                animation: slideInRight 0.5s ease; max-width: 350px;
            `;
            notification.innerHTML = `
                <div style="display: flex; align-items: center; gap: 15px;">
                    <i class="fas fa-file-pdf" style="font-size: 2rem; color: #F9A826;"></i>
                    <div>
                        <strong style="display: block; margin-bottom: 5px;">Company Profile</strong>
                        <span style="font-size: 0.9rem; opacity: 0.9;">Dokumen sedang dalam proses pembuatan. Hubungi kami untuk mendapatkan company profile.</span>
                    </div>
                </div>
            `;
            document.body.appendChild(notification);

            setTimeout(() => {
                notification.style.opacity = '0';
                notification.style.transition = 'opacity 0.5s ease';
                setTimeout(() => notification.remove(), 500);
            }, 4000);
        });
    });

    // ============================================
    // PHASE 3: ENTERPRISE LOGIC
    // ============================================

    // --- 17. LANGUAGE SWITCHING ---
    const translations = {
        'id': {
            'nav-home': 'Beranda', 'nav-about': 'Tentang', 'nav-services': 'Layanan', 
            'nav-why-us': 'Keunggulan', 'nav-portfolio': 'Portofolio', 'nav-news': 'Berita',
            'nav-contact': 'Hubungi Kami'
        },
        'en': {
            'nav-home': 'Home', 'nav-about': 'About', 'nav-services': 'Services', 
            'nav-why-us': 'Advantages', 'nav-portfolio': 'Portfolio', 'nav-news': 'News',
            'nav-contact': 'Contact Us'
        }
    };

    const langBtns = document.querySelectorAll('.lang-btn');
    
    function setLanguage(lang) {
        localStorage.setItem('lang', lang);
        langBtns.forEach(btn => btn.classList.toggle('active', btn.getAttribute('data-lang') === lang));
        
        // Update elements with data-i18n attribute
        // In a real app we'd tag elements, here I'll target main ones manually or by mapping
        const mapping = {
            '#nav-links li:nth-child(1) a': 'nav-home',
            '#nav-links li:nth-child(2) a': 'nav-about',
            '#nav-links li:nth-child(3) a': 'nav-services',
            '#nav-links li:nth-child(4) a': 'nav-why-us',
            '#nav-links li:nth-child(5) a': 'nav-portfolio',
            '#nav-links li:nth-child(6) a': 'nav-news',
            '#nav-links li:nth-child(7) a': 'nav-contact'
        };

        for (let selector in mapping) {
            const el = document.querySelector(selector);
            if (el) el.innerHTML = translations[lang][mapping[selector]];
        }
    }

    langBtns.forEach(btn => {
        btn.addEventListener('click', () => setLanguage(btn.getAttribute('data-lang')));
    });

    // Check saved language
    const savedLang = localStorage.getItem('lang') || 'id';
    setLanguage(savedLang);

    // --- 18. MOCK CARGO TRACKING ---
    const trackBtn = document.getElementById('btn-track');
    const trackInput = document.getElementById('tracking-input');
    const trackResult = document.getElementById('tracking-result');

    if (trackBtn && trackInput && trackResult) {
        trackBtn.addEventListener('click', () => {
            const id = trackInput.value.trim().toUpperCase();
            if (!id) return;

            trackBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Memproses...';
            trackResult.style.display = 'none';

            setTimeout(() => {
                trackBtn.innerHTML = 'Cek Status <i class="fas fa-search"></i>';
                trackResult.style.display = 'block';

                if (id.includes('STI') || id.length > 5) {
                    trackResult.innerHTML = `
                        <div style="display: flex; align-items: center; gap: 15px;">
                            <div style="background: var(--accent-color); color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-truck"></i>
                            </div>
                            <div>
                                <h4 style="color: var(--primary-color); margin: 0;">Status: On Process</h4>
                                <p style="font-size: 0.85rem; color: var(--text-gray); margin: 0;">Lokasi Terakhir: Hub Jakarta Pool A</p>
                                <span style="font-size: 0.75rem; color: #10b981; font-weight: bold;">Estimasi Tiba: Besok, 14:00 WIB</span>
                            </div>
                        </div>
                    `;
                    trackResult.style.borderColor = 'var(--accent-color)';
                } else {
                    trackResult.innerHTML = `
                        <div style="color: #ef4444;">
                            <i class="fas fa-exclamation-circle"></i> Nomor resi tidak ditemukan. Silakan hubungi admin kami.
                        </div>
                    `;
                    trackResult.style.borderColor = '#ef4444';
                }
            }, 1200);
        });
    }

    // Add slide-in animation for notifications
    if (!document.getElementById('notification-styles')) {
        const style = document.createElement('style');
        style.id = 'notification-styles';
        style.textContent = `
            @keyframes slideInRight {
                from { transform: translateX(100%); opacity: 0; }
                to { transform: translateX(0); opacity: 1; }
            }
        `;
        document.head.appendChild(style);
    }
});
