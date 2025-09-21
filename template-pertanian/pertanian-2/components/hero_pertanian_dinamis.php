<?php // File: components/hero_pertanian_dinamis.php 
?>
<style>
    /* Hero Pertanian Dinamis Styles */
    #heroPertanianDinamis {
        min-height: 100vh;
        background: linear-gradient(135deg, rgba(46, 125, 50, 0.85), rgba(27, 38, 44, 0.9)),
            /* Gradien hijau tua ke biru malam */
            url('https://placehold.co/1920x1200/2E7D32/FFFFFF?text=Ladang+Modern+Panorama') no-repeat center center;
        background-size: cover;
        background-attachment: fixed;
        /* Efek parallax sederhana */
        display: flex;
        align-items: center;
        color: #fff;
        position: relative;
        overflow: hidden;
    }

    /* Komentar CSS: Tidak ada perubahan signifikan untuk dark mode karena hero sudah gelap */

    /* Elemen overlay partikel/animasi (opsional) */
    #heroPertanianDinamis .particles-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        /* Bisa diisi dengan canvas particles.js atau animasi CSS */
    }

    .hero-content-dinamis {
        position: relative;
        /* Di atas overlay */
        z-index: 2;
        text-align: left;
        /* Teks rata kiri */
        max-width: 700px;
        /* Batasi lebar konten teks */
    }

    .hero-content-dinamis .tagline-dinamis {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--secondary-modern-farm);
        /* Warna aksen kuning */
        text-transform: uppercase;
        letter-spacing: 1.5px;
        margin-bottom: 15px;
        display: inline-block;
        padding: 5px 10px;
        background-color: rgba(255, 179, 0, 0.1);
        /* Latar transparan untuk tagline */
        border-left: 3px solid var(--secondary-modern-farm);
    }

    body.dark-mode .hero-content-dinamis .tagline-dinamis {
        color: var(--secondary-modern-farm-dark);
        background-color: rgba(255, 202, 40, 0.1);
        border-left-color: var(--secondary-modern-farm-dark);
    }


    .hero-content-dinamis h1 {
        font-size: 3.8rem;
        /* Ukuran judul utama */
        font-weight: 800;
        /* Sangat tebal */
        line-height: 1.2;
        margin-bottom: 25px;
        text-shadow: 0 3px 8px rgba(0, 0, 0, 0.4);
    }

    /* Efek teks terbelah atau animasi per kata bisa ditambahkan dengan JS */

    .hero-content-dinamis p.lead-dinamis {
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 1.35rem;
        font-weight: 400;
        margin-bottom: 35px;
        color: rgba(232, 246, 239, 0.9);
        /* var(--text-dark-farm2) dengan alpha */
        line-height: 1.7;
    }

    .hero-content-dinamis .hero-cta-buttons .btn {
        margin-right: 15px;
        margin-bottom: 10px;
        /* Jarak antar tombol di mobile */
    }

    /* Ilustrasi/gambar di sisi kanan (opsional) */
    .hero-illustration-dinamis {
        position: absolute;
        right: 5%;
        bottom: 0;
        width: 45%;
        /* Atau sesuaikan */
        max-width: 500px;
        opacity: 0.3;
        /* Ilustrasi transparan */
        z-index: 1;
        transform: translateY(10%);
        /* Sedikit muncul dari bawah */
    }

    .hero-illustration-dinamis img {
        width: 100%;
        height: auto;
        /* filter: drop-shadow(0 10px 20px rgba(0,0,0,0.3)); */
    }
</style>

<section id="heroPertanianDinamis" class="section-pertanian-modern">
    <div class="particles-overlay"> <?php /* Komentar PHP: Untuk canvas Particles.js jika digunakan */ ?> </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-9 hero-content-dinamis"> <?php /* Konten teks mengambil sebagian besar lebar */ ?>
                <span class="tagline-dinamis" data-aos="fade-right" data-aos-delay="200">Inovasi Agrikultur Terdepan</span>
                <h1 data-aos="fade-right" data-aos-delay="400">Bertani Cerdas, Panen Melimpah, Masa Depan Berkelanjutan.</h1>
                <p class="lead-dinamis" data-aos="fade-right" data-aos-delay="600">
                    Kami menggabungkan teknologi modern dengan kearifan lokal untuk menciptakan solusi pertanian yang efisien, produktif, dan ramah lingkungan.
                </p>
                <div class="hero-cta-buttons" data-aos="fade-up" data-aos-delay="800">
                    <a href="#layananAgroteknologiPertanian" class="btn-farm-modern-primary btn-lg">Solusi Agrotek</a>
                    <a href="#produkKatalogPertanian" class="btn-farm-modern-secondary btn-lg">Katalog Produk</a>
                </div>
            </div>
            <?php /* Komentar PHP: Ilustrasi bisa ditambahkan di col-lg-5 jika diinginkan */ ?>
            <div class="col-lg-5 d-none d-lg-block hero-illustration-dinamis" data-aos="fade-left" data-aos-delay="1000" data-aos-duration="1200">
                <img src="https://placehold.co/500x600/FFFFFF/00000000?text=Ilustrasi+Drone+Pertanian&font=montserrat" alt="[Ilustrasi Drone di atas Ladang Pertanian]">
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Komentar JavaScript: Animasi tambahan untuk hero (opsional)
        // Misalnya, animasi untuk tagline atau teks h1 per kata/huruf dengan Anime.js
        // AOS sudah menangani animasi fade-in dasar.

        // Contoh sederhana untuk efek parallax pada ilustrasi (jika ada)
        const illustration = document.querySelector('#heroPertanianDinamis .hero-illustration-dinamis');
        if (illustration) {
            window.addEventListener('scroll', function() {
                const scrollY = window.pageYOffset;
                // Komentar JavaScript: Sesuaikan nilai agar efek parallax halus
                // illustration.style.transform = `translateY(${scrollY * 0.1}px)`; 
            });
        }
    });
</script>