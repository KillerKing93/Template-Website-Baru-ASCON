<?php // File: components/portfolio_subtle.php 
?>
<style>
    /* Subtle Portfolio Component Styles */
    #portfolioSubtle {
        background-color: var(--bg-light);
        /* Default light */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #portfolioSubtle {
        background-color: var(--bg-dark);
    }

    .portfolio-item-subtle {
        margin-bottom: 30px;
        overflow: hidden;
        border-radius: 8px;
        /* Sudut sedikit bulat */
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        transition: box-shadow 0.3s ease;
    }

    body.dark-mode .portfolio-item-subtle {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .portfolio-item-subtle:hover {
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    }

    body.dark-mode .portfolio-item-subtle:hover {
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
    }


    .portfolio-wrap-subtle {
        position: relative;
        overflow: hidden;
    }

    .portfolio-wrap-subtle img {
        width: 100%;
        height: auto;
        transition: transform 0.4s ease;
    }

    .portfolio-item-subtle:hover .portfolio-wrap-subtle img {
        transform: scale(1.05);
        /* Efek zoom halus */
    }

    .portfolio-info-subtle {
        background-color: rgba(255, 255, 255, 0.95);
        /* Latar info terang */
        padding: 20px;
        border-top: 1px solid var(--border-light);
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    body.dark-mode .portfolio-info-subtle {
        background-color: rgba(52, 58, 64, 0.95);
        /* var(--card-bg-dark) dengan alpha */
        border-top-color: var(--border-dark);
    }

    .portfolio-info-subtle h4 {
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 5px;
        color: var(--primary-calm);
        /* Warna judul proyek */
    }

    .portfolio-info-subtle p {
        /* Kategori */
        font-size: 0.85rem;
        color: #6c757d;
        /* Abu-abu untuk kategori */
        margin-bottom: 10px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: color 0.3s ease;
    }

    body.dark-mode .portfolio-info-subtle h4 {
        color: var(--accent-calm);
    }

    body.dark-mode .portfolio-info-subtle p {
        color: #adb5bd;
    }

    .portfolio-info-subtle .portfolio-links-subtle a {
        color: var(--secondary-calm);
        /* Warna link ikon */
        font-size: 1.3rem;
        margin-right: 10px;
        transition: color 0.3s ease;
    }

    .portfolio-info-subtle .portfolio-links-subtle a:hover {
        color: var(--primary-calm);
    }

    body.dark-mode .portfolio-info-subtle .portfolio-links-subtle a {
        color: var(--accent-calm);
        opacity: 0.8;
    }

    body.dark-mode .portfolio-info-subtle .portfolio-links-subtle a:hover {
        color: var(--accent-calm);
        opacity: 1;
    }
</style>

<section id="portfolioSubtle" class="section-calm">
    <div class="container">
        <div class="section-title-calm" data-aos="fade-up">
            <h2>Portfolio Kami</h2>
            <p class="subtitle-calm">Beberapa Contoh Karya yang Telah Kami Selesaikan dengan Penuh Dedikasi.</p>
        </div>

        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 portfolio-item-subtle" data-aos="fade-up" data-aos-delay="100">
                <div class="portfolio-wrap-subtle">
                    <img src="https://placehold.co/600x400/A8DADC/212529?text=Proyek+Desain+Web" alt="[Gambar Proyek Desain Web]" class="img-fluid">
                </div>
                <div class="portfolio-info-subtle">
                    <h4>Website Perusahaan Elegan</h4>
                    <p>Desain & Pengembangan Web</p>
                    <div class="portfolio-links-subtle">
                        <a href="https://placehold.co/1200x800/A8DADC/212529?text=Detail+Proyek+Web" data-gallery="portfolioGallerySubtle" class="portfolio-lightbox-subtle" title="Website Perusahaan Elegan"><i class="fas fa-search-plus"></i></a>
                        <a href="#" title="Detail Proyek"><i class="fas fa-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item-subtle" data-aos="fade-up" data-aos-delay="200">
                <div class="portfolio-wrap-subtle">
                    <img src="https://placehold.co/600x400/F4A261/212529?text=Aplikasi+Mobile+Produktif" alt="[Gambar Aplikasi Mobile Produktif]" class="img-fluid">
                </div>
                <div class="portfolio-info-subtle">
                    <h4>Aplikasi Mobile Produktivitas</h4>
                    <p>Pengembangan Aplikasi Mobile</p>
                    <div class="portfolio-links-subtle">
                        <a href="https://placehold.co/1200x800/F4A261/212529?text=Detail+Aplikasi+Mobile" data-gallery="portfolioGallerySubtle" class="portfolio-lightbox-subtle" title="Aplikasi Mobile Produktivitas"><i class="fas fa-search-plus"></i></a>
                        <a href="#" title="Detail Proyek"><i class="fas fa-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item-subtle" data-aos="fade-up" data-aos-delay="300">
                <div class="portfolio-wrap-subtle">
                    <img src="https://placehold.co/600x400/6C757D/FFFFFF?text=Branding+Minimalis" alt="[Gambar Branding Minimalis]" class="img-fluid">
                </div>
                <div class="portfolio-info-subtle">
                    <h4>Identitas Visual Minimalis</h4>
                    <p>Branding & Desain Grafis</p>
                    <div class="portfolio-links-subtle">
                        <a href="https://placehold.co/1200x800/6C757D/FFFFFF?text=Detail+Branding" data-gallery="portfolioGallerySubtle" class="portfolio-lightbox-subtle" title="Identitas Visual Minimalis"><i class="fas fa-search-plus"></i></a>
                        <a href="#" title="Detail Proyek"><i class="fas fa-link"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inisialisasi GLightbox untuk popup gambar portfolio
        // GLightbox CSS sudah di-include di index.php
        // GLightbox JS juga sudah di-include di index.php
        if (typeof GLightbox !== 'undefined') {
            const portfolioLightboxSubtle = GLightbox({
                selector: '.portfolio-lightbox-subtle', // Pastikan selector unik jika ada lightbox lain
                gallery: 'portfolioGallerySubtle' // Nama galeri unik
            });
        } else {
            console.warn('GLightbox library not loaded for subtle portfolio.');
        }
    });
</script>