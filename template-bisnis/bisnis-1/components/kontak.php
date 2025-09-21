<?php // File: components/kontak.php 
?>
<style>
    /* Kontak Component Styles */
    .kontak-component .contact-info-box {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.07);
        margin-bottom: 30px;
    }

    .kontak-component .contact-info-box i {
        font-size: 1.8rem;
        color: #007bff;
        margin-bottom: 15px;
    }

    .kontak-component .contact-info-box h5 {
        font-weight: 600;
        color: #343a40;
    }

    .kontak-component .form-control {
        border-radius: 8px;
        padding: 12px;
    }

    .kontak-component .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, .25);
    }

    .kontak-component .btn-submit {
        background-color: #007bff;
        border-color: #007bff;
        padding: 12px 25px;
        font-weight: 500;
    }

    .kontak-component .btn-submit:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
</style>

<section id="kontak" class="section kontak-component">
    <div class="container">
        <h2 class="section-title animate-on-scroll">Hubungi Kami</h2>
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0 animate-on-scroll">
                <h4 class="mb-4">Kirimkan Pesan Kepada Kami</h4>
                <form action="#" method="POST"> <?php /* Ganti # dengan skrip pemroses form Anda */ ?>
                    <div class="mb-3">
                        <label for="namaKontak" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="namaKontak" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="emailKontak" class="form-label">Alamat Email</label>
                        <input type="email" class="form-control" id="emailKontak" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="subjekKontak" class="form-label">Subjek</label>
                        <input type="text" class="form-control" id="subjekKontak" name="subjek">
                    </div>
                    <div class="mb-3">
                        <label for="pesanKontak" class="form-label">Pesan Anda</label>
                        <textarea class="form-control" id="pesanKontak" name="pesan" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-submit">Kirim Pesan <i class="fas fa-paper-plane ms-2"></i></button>
                </form>
            </div>
            <div class="col-lg-5 offset-lg-1 animate-on-scroll" style="transition-delay: 0.2s;">
                <h4 class="mb-4">Informasi Kontak</h4>
                <div class="contact-info-box">
                    <div class="text-center mb-3"><i class="fas fa-map-marker-alt"></i></div>
                    <h5>Alamat Kantor</h5>
                    <p class="text-muted">Jl. Contoh Alamat No. 123, Kota Anda, Kode Pos</p>
                </div>
                <div class="contact-info-box">
                    <div class="text-center mb-3"><i class="fas fa-phone"></i></div>
                    <h5>Telepon</h5>
                    <p class="text-muted">(021) 123-4567 / +62 812 3456 7890</p>
                </div>
                <div class="contact-info-box">
                    <div class="text-center mb-3"><i class="fas fa-envelope"></i></div>
                    <h5>Email</h5>
                    <p class="text-muted">info@namabisnisanda.com</p>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    // Kontak component specific JS
    // Contoh: validasi form sederhana sisi klien (Bootstrap sudah menangani sebagian)
    // Untuk form submission yang sebenarnya, Anda perlu skrip sisi server (PHP).
</script>