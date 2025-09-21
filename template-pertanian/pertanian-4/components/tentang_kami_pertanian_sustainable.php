<?php // File: components/tentang_kami_pertanian_sustainable.php 
?>
<style>
    /* Tentang Kami Pertanian Sustainable Styles */
    #tentangKamiPertanianSustainable {
        background-color: var(--card-bg-light-farm4);
        /* Latar terang */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #tentangKamiPertanianSustainable {
        background-color: var(--card-bg-dark-farm4);
    }

    .about-content-sustainable h3 {
        font-size: 2.5rem;
        font-weight: 800;
        /* Nunito sudah cukup bold */
        margin-bottom: 20px;
        color: var(--primary-bio-farm);
    }

    body.dark-mode .about-content-sustainable h3 {
        color: var(--primary-bio-farm-dark);
    }

    .about-content-sustainable .sustainability-tagline {
        font-family: 'Roboto Slab', serif;
        font-size: 1.2rem;
        font-weight: 500;
        color: var(--muted-text-light-farm4);
        margin-bottom: 25px;
        border-left: 4px solid var(--secondary-bio-farm);
        padding-left: 20px;
        font-style: italic;
        transition: color 0.3s ease, border-color 0.3s ease;
    }

    body.dark-mode .about-content-sustainable .sustainability-tagline {
        color: var(--muted-text-dark-farm4);
        border-left-color: var(--secondary-bio-farm-dark);
    }

    .about-content-sustainable p {
        font-size: 1.05rem;
        line-height: 1.85;
        /* Spasi baris lebih nyaman */
        margin-bottom: 18px;
    }

    .sustainable-pillars {
        /* Pilar-pilar keberlanjutan */
        margin-top: 30px;
    }

    .pillar-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 20px;
        padding: 15px;
        background-color: rgba(var(--bg-light-farm4-rgb, 240, 244, 240), 0.5);
        /* Sedikit transparan */
        border-radius: 8px;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    body.dark-mode .pillar-item {
        background-color: rgba(var(--bg-dark-farm4-rgb, 24, 40, 26), 0.6);
    }

    .pillar-item:hover {
        transform: scale(1.02);
        background-color: rgba(var(--primary-bio-farm-rgb, 56, 142, 60), 0.05);
    }

    body.dark-mode .pillar-item:hover {
        background-color: rgba(var(--primary-bio-farm-dark-rgb, 102, 187, 106), 0.1);
    }


    .pillar-item .pillar-icon {
        font-size: 2.2rem;
        /* Ikon pilar */
        color: var(--primary-bio-farm);
        margin-right: 18px;
        width: 45px;
        /* Lebar tetap */
        text-align: center;
        flex-shrink: 0;
        transition: color 0.3s ease;
    }

    body.dark-mode .pillar-item .pillar-icon {
        color: var(--primary-bio-farm-dark);
    }

    .pillar-item .pillar-text h5 {
        font-family: 'Nunito', sans-serif;
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .pillar-item .pillar-text p {
        font-size: 0.9rem;
        margin-bottom: 0;
        line-height: 1.6;
        color: var(--muted-text-light-farm4);
    }

    body.dark-mode .pillar-item .pillar-text p {
        color: var(--muted-text-dark-farm4);
    }

    .about-image-sustainable-wrapper {
        position: relative;
        text-align: center;
        /* Pusatkan gambar */
    }

    .about-image-sustainable {
        border-radius: 12px;
        max-width: 100%;
        height: auto;
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.12);
        border: 5px solid var(--card-bg-light-farm4);
        /* Border frame */
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    body.dark-mode .about-image-sustainable {
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.35);
        border-color: var(--card-bg-dark-farm4);
    }
</style>

<section id="tentangKamiPertanianSustainable" class="section-bio-farm">
    <div class="container">
        <div class="section-title-bio-farm" data-aos="fade-up">
            <h2>Akar Keberlanjutan <span class="highlight-accent-bio">BioFarm</span></h2>
            <p class="subtitle-bio-farm">Filosofi Kami dalam Menjaga Keseimbangan Alam dan Menghasilkan Pangan Sehat.</p>
        </div>

        <div class="row align-items-center gy-5">
            <div class="col-lg-6 about-content-sustainable" data-aos="fade-right" data-aos-duration="900">
                <h3>Menanam Kebaikan, Menuai Kehidupan.</h3>
                <p class="sustainability-tagline">
                    Kami percaya bahwa pertanian sejati adalah kemitraan harmonis antara manusia dan alam.
                </p>
                <p>
                    Di BioFarm Lestari, keberlanjutan bukan hanya sebuah tren, melainkan inti dari semua yang kami lakukan. Mulai dari pemilihan bibit lokal unggul, penggunaan pupuk organik hasil olahan mandiri, hingga praktik pengelolaan air yang bijaksana, setiap detail kami perhatikan untuk memastikan dampak positif bagi lingkungan dan kualitas terbaik bagi Anda.
                </p>
                <p>
                    Kami berinvestasi dalam penelitian metode pertanian regeneratif, bertujuan untuk mengembalikan kesuburan tanah secara alami dan meningkatkan biodiversitas di sekitar lahan kami.
                </p>
            </div>
            <div class="col-lg-6 about-image-sustainable-wrapper" data-aos="fade-left" data-aos-duration="900" data-aos-delay="100">
                <img src="https://placehold.co/600x480/F0F4F0/388E3C?text=Ekosistem+Pertanian+Seimbang&font=nunito" alt="[Gambar Ilustrasi Ekosistem Pertanian yang Seimbang]" class="img-fluid about-image-sustainable">
            </div>
        </div>

        <div class="sustainable-pillars row gy-4 mt-5 pt-3">
            <div class="col-md-12 section-title-bio-farm text-center" data-aos="fade-up" data-aos-delay="150">
                <h3 style="font-size: 2rem; color: var(--primary-bio-farm);">Tiga Pilar Keberlanjutan Kami</h3>
                <?php /* Komentar PHP: Judul sub-bagian, style inline untuk ukuran dan warna spesifik */ ?>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="pillar-item">
                    <div class="pillar-icon"><i class="fas fa-globe-asia"></i></div>
                    <div class="pillar-text">
                        <h5>Lingkungan Lestari</h5>
                        <p>Mengurangi jejak karbon, menjaga kualitas air dan tanah, serta meningkatkan keanekaragaman hayati.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="pillar-item">
                    <div class="pillar-icon"><i class="fas fa-users"></i></div>
                    <div class="pillar-text">
                        <h5>Komunitas Sejahtera</h5>
                        <p>Memberdayakan petani lokal melalui pelatihan, kemitraan yang adil, dan akses pasar yang lebih baik.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="pillar-item">
                    <div class="pillar-icon"><i class="fas fa-apple-alt"></i></div>
                    <div class="pillar-text">
                        <h5>Pangan Berkualitas</h5>
                        <p>Menghasilkan produk pertanian yang aman, sehat, bergizi tinggi, dan bebas dari residu kimia berbahaya.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>