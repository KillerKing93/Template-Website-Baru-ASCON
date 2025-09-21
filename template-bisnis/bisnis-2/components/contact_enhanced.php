<?php // File: components/contact_enhanced.php 
?>
<style>
    /* Enhanced Contact Component Styles */
    #contactEnhanced {
        background-color: #F4F7F6;
        /* Latar netral */
    }

    .contact-info-wrap {
        background-color: #007BFF;
        /* Warna aksen utama */
        color: #fff;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 123, 255, 0.3);
        height: 100%;
        /* Agar sama tinggi dengan form */
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .contact-info-wrap h3 {
        color: #fff;
        font-size: 1.8rem;
        margin-bottom: 30px;
    }

    .contact-info-item {
        display: flex;
        align-items: flex-start;
        /* Ikon dan teks sejajar atas */
        margin-bottom: 25px;
    }

    .contact-info-item i {
        font-size: 1.8rem;
        /* Ukuran ikon */
        color: #fff;
        margin-right: 20px;
        width: 30px;
        /* Lebar tetap untuk ikon */
        opacity: 0.8;
    }

    .contact-info-item h5 {
        font-size: 1.2rem;
        color: #fff;
        margin-bottom: 5px;
        font-weight: 600;
    }

    .contact-info-item p,
    .contact-info-item p a {
        font-size: 1rem;
        line-height: 1.6;
        color: #E0E0E0;
        /* Warna teks lebih terang */
        margin-bottom: 0;
        text-decoration: none;
    }

    .contact-info-item p a:hover {
        text-decoration: underline;
        color: #FFFFFF;
    }

    .contact-form-wrap {
        background-color: #fff;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        height: 100%;
    }

    .contact-form-wrap h3 {
        font-size: 1.8rem;
        margin-bottom: 30px;
        color: #2C3E50;
    }

    .contact-form-wrap .form-control {
        border-radius: 8px;
        padding: 12px 15px;
        font-size: 1rem;
        border: 1px solid #ced4da;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .contact-form-wrap .form-control:focus {
        border-color: #007BFF;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, .25);
    }

    .contact-form-wrap .form-label {
        font-weight: 500;
        color: #4A4A4A;
    }

    .contact-form-wrap .btn-submit-message {
        width: 100%;
        /* Tombol full width */
        padding: 12px;
        font-size: 1.1rem;
    }

    /* Placeholder untuk pesan sukses/error */
    .form-message {
        margin-top: 15px;
        font-size: 0.95rem;
        padding: 10px;
        border-radius: 5px;
    }

    .form-message.success {
        background-color: #d1e7dd;
        color: #0f5132;
        border: 1px solid #badbcc;
    }

    .form-message.error {
        background-color: #f8d7da;
        color: #842029;
        border: 1px solid #f5c2c7;
    }
</style>

<section id="contactEnhanced" class="section">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Hubungi Kami</h2>
        </div>
        <p class="section-subtitle">Kami siap mendengar dari Anda. Kirimkan pertanyaan, ide proyek, atau sekadar sapaan.</p>

        <div class="row gy-4">
            <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
                <div class="contact-info-wrap">
                    <h3>Informasi Kontak</h3>
                    <div class="contact-info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h5>Alamat Kantor:</h5>
                            <p>Jl. Inovasi Digital No. 123, Blok A<br>Kota Teknologi, Kode Pos 54321</p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h5>Email:</h5>
                            <p><a href="mailto:info@namabisnisanda.com">info@namabisnisanda.com</a><br><a href="mailto:support@namabisnisanda.com">support@namabisnisanda.com</a></p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <i class="fas fa-phone-alt"></i>
                        <div>
                            <h5>Telepon:</h5>
                            <p><a href="tel:+62211234567">(021) 123-4567</a> (Kantor)<br><a href="tel:+6281234567890">+62 812-3456-7890</a> (WhatsApp)</p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <h5>Jam Kerja:</h5>
                            <p>Senin - Jumat: 09:00 - 17:00 WIB<br>Sabtu & Minggu: Tutup</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7" data-aos="fade-left" data-aos-delay="200">
                <div class="contact-form-wrap">
                    <h3>Kirim Pesan Langsung</h3>
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <!-- {/* Ganti action dengan skrip pemroses form Anda */} -->
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactName" class="form-label">Nama Anda</label>
                                <input type="text" name="name" class="form-control" id="contactName" required>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactEmail" class="form-label">Email Anda</label>
                                <input type="email" class="form-control" name="email" id="contactEmail" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactSubject" class="form-label">Subjek</label>
                            <input type="text" class="form-control" name="subject" id="contactSubject" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactMessage" class="form-label">Pesan Anda</label>
                            <textarea class="form-control" name="message" rows="6" id="contactMessage" required></textarea>
                        </div>

                        <div class="my-3">
                            <!-- {/* Placeholder untuk pesan loading/error/sukses dari skrip PHP */} -->
                            <div class="loading d-none">Memuat...</div>
                            <div class="error-message d-none"></div>
                            <div class="sent-message d-none">Pesan Anda telah terkirim. Terima kasih!</div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-custom-primary btn-submit-message">Kirim Pesan <i class="fas fa-paper-plane ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- {/* Google Maps Embed (Opsional) */} -->
        <div class="row mt-5" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521161364746!2d106.81973391476954!3d-6.19474139551497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4243e19b89d%3A0x5313310c0709f00!2sMonumen%20Nasional!5e0!3m2!1sid!2sid!4v1620000000000!5m2!1sid!2sid" width="100%" height="450" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<script>
    // Enhanced Contact Form JS (jika menggunakan validasi sisi klien atau AJAX submission)
    // Contoh untuk form PHP sederhana (forms/contact.php)
    // Anda mungkin perlu menyesuaikan ini jika menggunakan library form atau AJAX
    // const phpEmailForm = document.querySelector('.php-email-form');
    // if (phpEmailForm) {
    //   phpEmailForm.addEventListener('submit', function(e) {
    //     e.preventDefault();

    //     let form = this;
    //     let action = form.getAttribute('action');
    //     let formData = new FormData(form);

    //     form.querySelector('.loading').classList.remove('d-none');
    //     form.querySelector('.error-message').classList.add('d-none');
    //     form.querySelector('.sent-message').classList.add('d-none');

    //     // Simulasikan pengiriman form (ganti dengan fetch API yang sebenarnya)
    //     setTimeout(() => {
    //         // Contoh hasil sukses
    //         form.querySelector('.loading').classList.add('d-none');
    //         form.querySelector('.sent-message').classList.remove('d-none');
    //         form.reset(); // Reset form setelah sukses

    //         // Contoh hasil error
    //         // form.querySelector('.loading').classList.add('d-none');
    //         // form.querySelector('.error-message').innerHTML = 'Terjadi kesalahan saat mengirim pesan.';
    //         // form.querySelector('.error-message').classList.remove('d-none');
    //     }, 2000);

    //   });
    // }
</script>