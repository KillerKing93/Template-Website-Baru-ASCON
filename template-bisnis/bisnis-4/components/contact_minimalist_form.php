<?php // File: components/contact_minimalist_form.php 
?>
<style>
    /* Contact Minimalist Form Component Styles */
    :root {
        /* Variabel dari index.php */
        --dark-bg-primary: #0D0221;
        --primary-accent: #FF00E4;
        --secondary-accent: #00F5D4;
        --text-light: #F0F0F0;
        --text-muted-cyber: #A0A0C0;
        --border-cyber: rgba(0, 245, 212, 0.3);
        --card-bg-contact: rgba(15, 8, 75, 0.5);
        /* var(--dark-bg-secondary) dengan alpha */
    }

    #contactMinimalistForm {
        background-color: var(--dark-bg-primary);
        padding-bottom: 100px;
        /* Beri ruang di bawah */
    }

    .contact-wrapper-minimalist {
        max-width: 800px;
        /* Batasi lebar form */
        margin: 0 auto;
        background-color: var(--card-bg-contact);
        backdrop-filter: blur(3px);
        padding: 40px 50px;
        border-radius: 10px;
        border: 1px solid var(--border-cyber);
        box-shadow: 0 0 30px rgba(var(--primary-accent-rgb), 0.15);
    }

    .contact-wrapper-minimalist .form-label-cyber {
        font-family: 'Orbitron', sans-serif;
        color: var(--secondary-accent);
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 8px;
        display: block;
    }

    .contact-wrapper-minimalist .form-control-cyber {
        background-color: rgba(13, 2, 33, 0.7);
        /* var(--dark-bg-primary) dengan alpha */
        border: 1px solid var(--border-cyber);
        color: var(--text-light);
        border-radius: 4px;
        /* Sudut sedikit tajam */
        padding: 12px 18px;
        font-size: 1rem;
        font-family: 'Lexend', sans-serif;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
        width: 100%;
    }

    .contact-wrapper-minimalist .form-control-cyber::placeholder {
        color: var(--text-muted-cyber);
        opacity: 0.6;
    }

    .contact-wrapper-minimalist .form-control-cyber:focus {
        background-color: rgba(13, 2, 33, 0.9);
        border-color: var(--primary-accent);
        box-shadow: 0 0 10px rgba(var(--primary-accent-rgb), 0.3);
        color: #fff;
        outline: none;
        /* Hapus outline default */
    }

    .contact-wrapper-minimalist textarea.form-control-cyber {
        min-height: 140px;
        resize: vertical;
        /* Izinkan resize vertikal */
    }

    .contact-wrapper-minimalist .btn-submit-cyber {
        width: 100%;
        padding: 14px;
        /* Tombol lebih besar */
        margin-top: 15px;
        /* Jarak dari field terakhir */
    }

    .contact-info-minimalist {
        text-align: center;
        margin-top: 50px;
        padding-top: 30px;
        border-top: 1px dashed var(--border-cyber);
    }

    .contact-info-minimalist h4 {
        color: var(--secondary-accent);
        font-size: 1.2rem;
        margin-bottom: 15px;
    }

    .contact-info-minimalist p {
        color: var(--text-muted-cyber);
        font-size: 1rem;
        line-height: 1.8;
    }

    .contact-info-minimalist p a {
        color: var(--text-light);
        text-decoration: none;
        border-bottom: 1px dashed var(--primary-accent);
        transition: color 0.3s ease, border-color 0.3s ease;
    }

    .contact-info-minimalist p a:hover {
        color: var(--primary-accent);
        border-bottom-color: var(--secondary-accent);
    }
</style>

<section id="contactMinimalistForm" class="section-cyber">
    <div class="container">
        <div class="section-title-cyber" data-aos="fade-up">
            <h2 data-text="HUBUNGI KAMI">HUBUNGI KAMI</h2>
            <p class="subtitle-cyber">Punya Ide Brilian atau Pertanyaan? Kami Siap Mendengarkan dan Berkolaborasi.</p>
        </div>

        <div class="contact-wrapper-minimalist" data-aos="fade-up" data-aos-delay="100">
            <form action="forms/contact_v4.php" method="post" role="form" class="php-email-form-v4">
                <div class="row">
                    <div class="col-md-6 form-group mb-4">
                        <label for="contactNameV4" class="form-label-cyber">Nama Anda:</label>
                        <input type="text" name="name_v4" class="form-control-cyber" id="contactNameV4" placeholder="Contoh: Alex Ryder" required>
                    </div>
                    <div class="col-md-6 form-group mb-4">
                        <label for="contactEmailV4" class="form-label-cyber">Email Aktif:</label>
                        <input type="email" class="form-control-cyber" name="email_v4" id="contactEmailV4" placeholder="Contoh: alex.ryder@email.com" required>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label for="contactSubjectV4" class="form-label-cyber">Perihal Pesan:</label>
                    <input type="text" class="form-control-cyber" name="subject_v4" id="contactSubjectV4" placeholder="Contoh: Diskusi Proyek Aplikasi Mobile" required>
                </div>
                <div class="form-group mb-4">
                    <label for="contactMessageV4" class="form-label-cyber">Detail Pesan Anda:</label>
                    <textarea class="form-control-cyber" name="message_v4" id="contactMessageV4" placeholder="Jelaskan kebutuhan atau pertanyaan Anda di sini..." required></textarea>
                </div>

                <div class="my-3">
                    <!-- {/* Untuk pesan loading/error/sukses */} -->
                    <div class="loading d-none">Memproses...</div>
                    <div class="error-message d-none text-center p-2 rounded" style="background-color: rgba(255,0,228,0.1); border: 1px solid var(--primary-accent); color: var(--primary-accent);"></div>
                    <div class="sent-message d-none text-center p-2 rounded" style="background-color: rgba(0,245,212,0.1); border: 1px solid var(--secondary-accent); color: var(--secondary-accent);"></div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn-cyber-primary btn-submit-cyber">Kirim Pesan Digital <i class="fas fa-paper-plane ms-2"></i></button>
                </div>
            </form>
        </div>

        <div class="contact-info-minimalist" data-aos="fade-up" data-aos-delay="200">
            <h4>Atau hubungi kami melalui:</h4>
            <p>Email: <a href="mailto:connect@quantumleap.tech">connect@quantumleap.tech</a> | Telepon: <a href="tel:+628001234567">+62-800-123-4567</a></p>
            <p>Alamat: Quantum Tower, Lt. 42, CyberDistrict, Jakarta Pusat.</p>
        </div>
    </div>
</section>

<script>
    // Skrip untuk form (jika menggunakan AJAX) bisa ditambahkan di sini atau di index.php global
    // Untuk saat ini, form akan submit secara tradisional ke action URL.
</script>