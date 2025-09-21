<?php // File: components/hero_pertanian.php 
?>
<style>
    /* Hero Pertanian Styles */
    #heroPertanian {
        min-height: 90vh;
        /* Tinggi hero section */
        background: linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35)),
            url('https://placehold.co/1920x1080/5A8B41/FFFFFF?text=Pemandangan+Ladang+Subur') no-repeat center center;
        background-size: cover;
        display: flex;
        align-items: center;
        text-align: center;
        color: #fff;
        /* Teks putih di atas gambar */
        padding: 100px 0;
    }

    /* Komentar CSS: Tidak perlu style dark mode spesifik untuk background hero ini karena sudah gelap */

    .hero-content-pertanian h1 {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .hero-content-pertanian h1 .highlight-farm {
        /* Untuk menyorot kata kunci */
        color: var(--secondary-farm);
        /* Warna sekunder untuk sorotan */
        /* Atau bisa juga var(--accent-farm) */
    }

    body.dark-mode .hero-content-pertanian h1 .highlight-farm {
        color: var(--secondary-farm-dark);
    }


    .hero-content-pertanian p.lead-pertanian {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.3rem;
        font-weight: 400;
        margin-bottom: 35px;
        max-width: 750px;
        margin-left: auto;
        margin-right: auto;
        line-height: 1.7;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.4);
    }

    /* Komentar CSS: Tombol menggunakan class global .btn-farm-primary atau .btn-farm-secondary */
</style>

<section id="heroPertanian" class="section-pertanian">
    <div class="container hero-content-pertanian">
        <div data-aos="fade-up" data-aos-duration="1000">
            <h1>Selamat Datang di <span class="highlight-farm">NamaPertanian</span> Anda</h1>
            <p class="lead-pertanian">
                Menghadirkan kesegaran langsung dari ladang ke meja Anda. Temukan produk pertanian organik berkualitas tinggi dan alami.
            </p>
            <a href="#produkUnggulanPertanian" class="btn-farm-primary btn-lg">Lihat Produk Kami</a>
            <a href="#tentangKamiPertanian" class="btn-farm-secondary btn-lg ms-md-3 mt-3 mt-md-0">Kenali Kami Lebih Dekat</a>
        </div>
    </div>
</section>