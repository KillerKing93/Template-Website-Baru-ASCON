<?php // File: components/penerimaan_mahasiswa_baru.php 
?>
<style>
    /* Penerimaan Mahasiswa Baru Styles */
    #penerimaanMahasiswaBaru {
        background-color: var(--card-bg-light-edu3);
        /* Latar berbeda dari body */
        transition: background-color 0.3s ease;
        position: relative;
        padding-top: 100px;
        padding-bottom: 100px;
    }

    /* Elemen dekoratif bentuk geometris/abstrak di background */
    #penerimaanMahasiswaBaru::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image:
            radial-gradient(circle at 15% 85%, rgba(var(--accent-illumina-rgb, 95, 158, 160), 0.05) 0%, transparent 50%),
            radial-gradient(circle at 85% 15%, rgba(var(--secondary-illumina-rgb, 184, 134, 11), 0.05) 0%, transparent 40%);
        background-repeat: no-repeat;
        z-index: 0;
        transition: background-image 0.3s ease;
    }

    /* Komentar CSS: Variabel RGB untuk warna-warna */
    body {
        --accent-illumina-rgb: 95, 158, 160;
        --secondary-illumina-rgb: 184, 134, 11;
        --accent-illumina-dark-rgb: 119, 168, 170;
        --secondary-illumina-dark-rgb: 212, 175, 55;
    }


    body.dark-mode #penerimaanMahasiswaBaru {
        background-color: var(--card-bg-dark-edu3);
    }

    body.dark-mode #penerimaanMahasiswaBaru::before {
        background-image:
            radial-gradient(circle at 15% 85%, rgba(var(--accent-illumina-dark-rgb, 119, 168, 170), 0.07) 0%, transparent 50%),
            radial-gradient(circle at 85% 15%, rgba(var(--secondary-illumina-dark-rgb, 212, 175, 55), 0.07) 0%, transparent 40%);
    }

    .admission-content-wrapper {
        position: relative;
        z-index: 1;
        background-color: rgba(var(--card-bg-light-edu3-rgb, 255, 255, 255), 0.8);
        /* var(--card-bg-light-edu3) dengan alpha */
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 10px 35px rgba(0, 0, 0, 0.08);
        border: 1px solid var(--border-light-edu3);
    }

    body.dark-mode .admission-content-wrapper {
        background-color: rgba(var(--card-bg-dark-edu3-rgb, 56, 56, 56), 0.85);
        /* var(--card-bg-dark-edu3) dengan alpha */
        box-shadow: 0 10px 35px rgba(0, 0, 0, 0.25);
        border-color: var(--border-dark-edu3);
    }

    .admission-content-wrapper h3 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--primary-illumina);
        margin-bottom: 15px;
    }

    body.dark-mode .admission-content-wrapper h3 {
        color: var(--primary-illumina-dark);
    }

    .admission-content-wrapper p.admission-intro {
        font-size: 1.1rem;
        color: var(--muted-text-light-edu3);
        margin-bottom: 25px;
        line-height: 1.7;
    }

    body.dark-mode .admission-content-wrapper p.admission-intro {
        color: var(--muted-text-dark-edu3);
    }

    .admission-steps {
        list-style: none;
        padding-left: 0;
    }

    .admission-steps li {
        display: flex;
        align-items: flex-start;
        margin-bottom: 18px;
    }

    .admission-steps .step-number {
        font-family: 'Cormorant Garamond', serif;
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--secondary-illumina);
        margin-right: 15px;
        line-height: 1;
        min-width: 30px;
        /* Agar angka sejajar */
        transition: color 0.3s ease;
    }

    body.dark-mode .admission-steps .step-number {
        color: var(--secondary-illumina-dark);
    }

    .admission-steps .step-description {
        font-size: 1rem;
    }

    .admission-steps .step-description strong {
        font-weight: 600;
        color: var(--text-light-edu3);
        /* Default light */
    }

    body.dark-mode .admission-steps .step-description strong {
        color: var(--text-dark-edu3);
    }

    .admission-cta-buttons {
        margin-top: 30px;
    }

    .admission-cta-buttons .btn {
        margin: 5px;
    }
</style>

<section id="penerimaanMahasiswaBaru" class="section-illumina">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="admission-content-wrapper" data-aos="fade-up" data-aos-duration="1000">
                    <div class="section-title-illumina mb-4">
                        <h2>Penerimaan <span style="color:var(--secondary-illumina);">Mahasiswa Baru</span></h2>
                        <p class="subtitle-illumina" style="font-size: 1.1rem;">Bergabunglah dengan Komunitas Akademik Unggul di Academia Illumina.</p>
                    </div>

                    <p class="admission-intro">
                        Kami membuka pintu bagi para calon pemimpin dan inovator masa depan. Temukan bagaimana Anda dapat menjadi bagian dari perjalanan intelektual yang mencerahkan di institusi kami.
                    </p>

                    <h4 style="font-family: 'Cormorant Garamond', serif; font-weight: 700; margin-top: 30px; margin-bottom: 15px; color: var(--primary-illumina);" class="section-subtitle-illumina-custom">Langkah Pendaftaran:</h4>
                    <?php /* Komentar PHP: Judul ini akan terpengaruh dark mode dari h4 global */ ?>
                    <ul class="admission-steps">
                        <li>
                            <span class="step-number">01.</span>
                            <div class="step-description"><strong>Registrasi Online:</strong> Isi formulir pendaftaran melalui portal admisi kami.</div>
                        </li>
                        <li>
                            <span class="step-number">02.</span>
                            <div class="step-description"><strong>Seleksi Berkas:</strong> Tim kami akan meninjau kelengkapan dan kualifikasi berkas Anda.</div>
                        </li>
                        <li>
                            <span class="step-number">03.</span>
                            <div class="step-description"><strong>Ujian Masuk & Wawancara:</strong> Mengikuti tes potensi akademik dan sesi wawancara (jika diperlukan).</div>
                        </li>
                        <li>
                            <span class="step-number">04.</span>
                            <div class="step-description"><strong>Pengumuman Hasil:</strong> Hasil seleksi akan diumumkan melalui portal dan email resmi.</div>
                        </li>
                        <li>
                            <span class="step-number">05.</span>
                            <div class="step-description"><strong>Daftar Ulang:</strong> Melakukan proses daftar ulang untuk konfirmasi status sebagai mahasiswa baru.</div>
                        </li>
                    </ul>

                    <div class="admission-cta-buttons text-center">
                        <a href="#" class="btn-illumina-primary">Daftar Sekarang</a>
                        <a href="#" class="btn-illumina-secondary">Unduh Brosur</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>