<?php // File: components/proses_panen_pertanian.php 
?>
<style>
    /* Proses Panen Pertanian Styles */
    #prosesPanenPertanian {
        background-color: var(--card-bg-light-farm2);
        /* Latar terang */
        border-bottom: 1px solid var(--border-light-farm2);
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    body.dark-mode #prosesPanenPertanian {
        background-color: var(--card-bg-dark-farm2);
        border-bottom-color: var(--border-dark-farm2);
    }

    .process-step-modern {
        text-align: center;
        position: relative;
        padding: 20px 15px;
    }

    /* Garis penghubung antar step */
    .process-step-modern:not(:last-child)::after {
        content: '';
        position: absolute;
        top: 45px;
        /* Vertikal tengah ikon (tinggi ikon wrapper 90px / 2) */
        left: 50%;
        /* Mulai dari tengah ikon saat ini */
        width: 100%;
        /* Lebar garis adalah 100% dari lebar kolom step ini,
                        ini akan membuatnya mencapai tengah ikon step berikutnya */
        height: 2px;
        background-color: var(--border-light-farm2);
        z-index: 0;
        /* Di belakang ikon */
        display: none;
        /* Sembunyikan di mobile, tampilkan di layar lebih besar */
    }

    @media (min-width: 768px) {

        /* Hanya tampilkan garis di md ke atas */
        .process-step-modern:not(:last-child)::after {
            display: block;
        }
    }

    body.dark-mode .process-step-modern:not(:last-child)::after {
        background-color: var(--border-dark-farm2);
    }


    .process-step-modern .step-icon-wrapper-modern {
        width: 90px;
        /* Ukuran lingkaran ikon */
        height: 90px;
        background-color: #fff;
        /* Latar ikon putih */
        border: 3px solid var(--primary-modern-farm);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px auto;
        position: relative;
        /* Untuk z-index */
        z-index: 1;
        /* Ikon di atas garis */
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
    }

    body.dark-mode .process-step-modern .step-icon-wrapper-modern {
        background-color: var(--card-bg-dark-farm2);
        /* Latar ikon gelap */
        border-color: var(--primary-modern-farm-dark);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .process-step-modern:hover .step-icon-wrapper-modern {
        transform: scale(1.1);
        border-color: var(--secondary-modern-farm);
        box-shadow: 0 8px 20px rgba(var(--secondary-modern-farm-rgb, 255, 179, 0), 0.2);
    }

    body.dark-mode .process-step-modern:hover .step-icon-wrapper-modern {
        border-color: var(--secondary-modern-farm-dark);
        box-shadow: 0 8px 20px rgba(var(--secondary-modern-farm-dark-rgb, 255, 202, 40), 0.2);
    }

    .process-step-modern .step-icon-wrapper-modern i {
        font-size: 2.5rem;
        /* Ukuran ikon */
        color: var(--primary-modern-farm);
        transition: color 0.3s ease;
    }

    .process-step-modern:hover .step-icon-wrapper-modern i {
        color: var(--secondary-modern-farm);
    }

    body.dark-mode .process-step-modern .step-icon-wrapper-modern i {
        color: var(--primary-modern-farm-dark);
    }

    body.dark-mode .process-step-modern:hover .step-icon-wrapper-modern i {
        color: var(--secondary-modern-farm-dark);
    }


    .process-step-modern h5.step-title-modern {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .process-step-modern p.step-desc-modern {
        font-size: 0.95rem;
        color: var(--muted-text-light-farm2);
        line-height: 1.6;
        max-width: 280px;
        /* Batasi lebar deskripsi */
        margin-left: auto;
        margin-right: auto;
        transition: color 0.3s ease;
    }

    body.dark-mode .process-step-modern p.step-desc-modern {
        color: var(--muted-text-dark-farm2);
    }
</style>

<section id="prosesPanenPertanian" class="section-pertanian-modern">
    <div class="container">
        <div class="section-title-modern-farm" data-aos="fade-up">
            <h2>Dari Ladang <span class="highlight-accent">ke Meja Anda</span></h2>
            <div class="line-decorator"></div>
            <p class="subtitle-modern-farm">Memastikan Kualitas dan Kesegaran Produk Melalui Proses yang Terkontrol.</p>
        </div>

        <div class="row gy-5 gy-lg-0"> <?php /* gy-lg-0 agar tidak ada gutter di lg */ ?>
            <div class="col-lg-3 col-md-6 process-step-modern" data-aos="fade-up" data-aos-delay="100">
                <div class="step-icon-wrapper-modern">
                    <i class="fas fa-tractor"></i>
                </div>
                <h5 class="step-title-modern">1. Penanaman & Perawatan</h5>
                <p class="step-desc-modern">Bibit unggul ditanam di tanah subur dan dirawat secara alami dengan metode berkelanjutan.</p>
            </div>

            <div class="col-lg-3 col-md-6 process-step-modern" data-aos="fade-up" data-aos-delay="200">
                <div class="step-icon-wrapper-modern">
                    <i class="fas fa-hand-holding-heart"></i> <?php /* Atau fas fa-leaf */ ?>
                </div>
                <h5 class="step-title-modern">2. Panen Pilihan</h5>
                <p class="step-desc-modern">Hasil bumi dipanen pada tingkat kematangan optimal oleh tangan-tangan terampil.</p>
            </div>

            <div class="col-lg-3 col-md-6 process-step-modern" data-aos="fade-up" data-aos-delay="300">
                <div class="step-icon-wrapper-modern">
                    <i class="fas fa-check-double"></i> <?php /* Atau fas fa-balance-scale */ ?>
                </div>
                <h5 class="step-title-modern">3. Sortir & Kontrol Kualitas</h5>
                <p class="step-desc-modern">Setiap produk melewati proses sortir ketat untuk memastikan hanya kualitas terbaik yang lolos.</p>
            </div>

            <div class="col-lg-3 col-md-6 process-step-modern" data-aos="fade-up" data-aos-delay="400">
                <div class="step-icon-wrapper-modern">
                    <i class="fas fa-truck-loading"></i>
                </div>
                <h5 class="step-title-modern">4. Pengemasan & Distribusi</h5>
                <p class="step-desc-modern">Dikemas secara higienis dan didistribusikan dengan cepat untuk menjaga kesegaran hingga ke tangan Anda.</p>
            </div>
        </div>
    </div>
</section>