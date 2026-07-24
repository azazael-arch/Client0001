<!-- Scripts -->
<script src="script.js"></script>
<script>
    // Click Tracking System
    document.querySelectorAll('[data-track]').forEach(el => {
        el.addEventListener('click', function() {
            const buttonId = this.getAttribute('data-track');
            fetch('includes/track-click.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: 'button_id=' + encodeURIComponent(buttonId)
            });
        });
    });

    // Contact Form Handling (Save to DB then redirect)
    const contactForm = document.getElementById('wa-contact-form');
    const notification = document.getElementById('form-notification');
    const submitBtn = document.getElementById('btn-submit-contact');

    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Memproses...';
            
            const formData = new FormData(this);
            
            fetch('includes/process-contact.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    notification.style.display = 'block';
                    notification.style.backgroundColor = 'rgba(40, 167, 69, 0.2)';
                    notification.style.color = '#28a745';
                    notification.style.border = '1px solid #28a745';
                    notification.innerHTML = 'Data berhasil disimpan. Mengalihkan ke WhatsApp...';
                    
                    // Tracking the form submission
                    fetch('includes/track-click.php', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                        body: 'button_id=contact_submit'
                    });

                    setTimeout(() => {
                        window.location.href = data.wa_url;
                    }, 1500);
                } else {
                    notification.style.display = 'block';
                    notification.style.backgroundColor = 'rgba(220, 53, 69, 0.2)';
                    notification.style.color = '#dc3545';
                    notification.style.border = '1px solid #dc3545';
                    notification.innerHTML = 'Error: ' + data.message;
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = '<i class="fab fa-whatsapp"></i> Kirim via WhatsApp';
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan koneksi.');
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<i class="fab fa-whatsapp"></i> Kirim via WhatsApp';
            });
        });
    }
</script>
