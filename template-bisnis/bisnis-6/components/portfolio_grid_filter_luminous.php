<?php // File: components/portfolio_grid_filter_luminous.php 
?>
<style>
    /* Luminous Portfolio Grid Filter Component Styles */
    #portfolioGridFilterLuminous {
        background-color: var(--card-bg-light);
        /* Latar terang */
        transition: background-color 0.4s ease;
    }

    body.dark-mode #portfolioGridFilterLuminous {
        background-color: var(--card-bg-dark);
    }

    .portfolio-filters-luminous {
        list-style: none;
        padding: 0;
        margin: 0 auto 40px auto;
        text-align: center;
    }

    .portfolio-filters-luminous li {
        cursor: pointer;
        display: inline-block;
        padding: 10px 20px;
        font-size: 1rem;
        font-weight: 600;
        font-family: 'Lato', sans-serif;
        color: var(--muted-text-light);
        margin: 0 8px 10px 8px;
        transition: all .3s ease;
        border-radius: 5px;
        border: 1px solid transparent;
        /* Awalnya transparan */
    }

    body.dark-mode .portfolio-filters-luminous li {
        color: var(--muted-text-dark);
    }

    .portfolio-filters-luminous li:hover {
        color: var(--primary-luminous);
        border-color: var(--primary-luminous);
    }

    .portfolio-filters-luminous li.filter-active {
        color: #fff;
        background-color: var(--primary-luminous);
        border-color: var(--primary-luminous);
    }

    body.dark-mode .portfolio-filters-luminous li:hover {
        color: var(--primary-luminous-dark);
        border-color: var(--primary-luminous-dark);
    }

    body.dark-mode .portfolio-filters-luminous li.filter-active {
        background-color: var(--primary-luminous-dark);
        border-color: var(--primary-luminous-dark);
        color: var(--bg-dark);
        /* Teks kontras */
    }


    .portfolio-item-luminous {
        margin-bottom: 30px;
        border-radius: 8px;
        overflow: hidden;
        /* Untuk efek pada gambar dan overlay */
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
        transition: box-shadow 0.3s ease;
    }

    body.dark-mode .portfolio-item-luminous {
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
    }

    .portfolio-item-luminous:hover {
        box-shadow: 0 10px 30px rgba(138, 43, 226, 0.15);
        /* Warna primer */
    }

    body.dark-mode .portfolio-item-luminous:hover {
        box-shadow: 0 10px 30px rgba(160, 96, 255, 0.2);
        /* Warna primer dark */
    }


    .portfolio-wrap-luminous {
        position: relative;
        display: block;
        /* Agar bisa jadi link */
        text-decoration: none;
    }

    .portfolio-wrap-luminous img {
        width: 100%;
        height: auto;
        transition: transform 0.5s ease;
        display: block;
        /* Hapus spasi bawah gambar */
    }

    .portfolio-item-luminous:hover .portfolio-wrap-luminous img {
        transform: scale(1.08);
    }

    .portfolio-overlay-luminous {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(transparent 0%, rgba(138, 43, 226, 0.7) 70%, rgba(138, 43, 226, 0.9) 100%);
        /* Warna primer */
        opacity: 0;
        transition: opacity 0.4s ease;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        /* Konten di bawah */
        align-items: center;
        /* Teks di tengah horizontal */
        text-align: center;
        padding: 25px;
    }

    body.dark-mode .portfolio-overlay-luminous {
        background: linear-gradient(transparent 0%, rgba(160, 96, 255, 0.7) 70%, rgba(160, 96, 255, 0.9) 100%);
        /* Warna primer dark */
    }

    .portfolio-item-luminous:hover .portfolio-overlay-luminous {
        opacity: 1;
    }

    .portfolio-overlay-luminous h4 {
        font-size: 1.5rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 5px;
        transform: translateY(15px);
        opacity: 0;
        transition: transform 0.4s ease 0.1s, opacity 0.4s ease 0.1s;
    }

    .portfolio-overlay-luminous p {
        /* Kategori */
        color: rgba(255, 255, 255, 0.8);
        font-size: 0.9rem;
        margin-bottom: 15px;
        transform: translateY(15px);
        opacity: 0;
        transition: transform 0.4s ease 0.2s, opacity 0.4s ease 0.2s;
    }

    .portfolio-item-luminous:hover .portfolio-overlay-luminous h4,
    .portfolio-item-luminous:hover .portfolio-overlay-luminous p {
        transform: translateY(0);
        opacity: 1;
    }

    .portfolio-overlay-luminous .overlay-links a {
        color: #fff;
        font-size: 1.4rem;
        margin: 0 8px;
        transition: color 0.3s ease, transform 0.3s ease;
        display: inline-block;
        transform: translateY(15px) scale(0.8);
        opacity: 0;
    }

    .portfolio-item-luminous:hover .overlay-links a:nth-child(1) {
        transition-delay: 0.3s;
        transform: translateY(0) scale(1);
        opacity: 1;
    }

    .portfolio-item-luminous:hover .overlay-links a:nth-child(2) {
        transition-delay: 0.4s;
        transform: translateY(0) scale(1);
        opacity: 1;
    }

    .portfolio-overlay-luminous .overlay-links a:hover {
        color: var(--secondary-luminous);
        /* Warna aksen gold */
        transform: scale(1.2) !important;
    }

    body.dark-mode .portfolio-overlay-luminous .overlay-links a:hover {
        color: var(--secondary-luminous-dark);
    }
</style>

<section id="portfolioGridFilterLuminous" class="section-elegant">
    <div class="container">
        <div class="section-title-elegant" data-aos="fade-up">
            <h2>Karya Pilihan Kami</h2>
            <p class="subtitle-elegant">Jelajahi Proyek-Proyek Inovatif yang Telah Menjadi Bagian dari Perjalanan Kami.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul class="portfolio-filters-luminous">
                    <li data-filter="*" class="filter-active">Semua</li>
                    <li data-filter=".filter-branding">Branding</li>
                    <li data-filter=".filter-webdesign">Web Design</li>
                    <li data-filter=".filter-appdev">App Dev</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container-luminous gy-4" data-aos="fade-up" data-aos-delay="200">
            <?php /* Item Portfolio 1 */ ?>
            <div class="col-lg-4 col-md-6 portfolio-item-luminous filter-webdesign">
                <a href="https://placehold.co/800x600/FFFFFF/8A2BE2?text=Detail+Proyek+Elegan" class="portfolio-wrap-luminous portfolio-lightbox-luminous" data-gallery="portfolioGalleryLuminous" title="Desain Web Korporat Elegan">
                    <img src="https://placehold.co/600x450/E0EAFC/333333?text=Web+Korporat+Elegan" class="img-fluid" alt="[Gambar Web Korporat Elegan]">
                    <div class="portfolio-overlay-luminous">
                        <h4>Web Korporat Elegan</h4>
                        <p>Web Design & Development</p>
                        <div class="overlay-links">
                            <i class="fas fa-search-plus"></i> <?php /* Ikon bisa di dalam 'a' atau sebagai pengganti */ ?>
                            <?php /* <a href="portfolio-detail.php?id=web1" title="Detail Proyek"><i class="fas fa-link"></i></a> */ ?>
                        </div>
                    </div>
                </a>
            </div>

            <?php /* Item Portfolio 2 */ ?>
            <div class="col-lg-4 col-md-6 portfolio-item-luminous filter-branding">
                <a href="https://placehold.co/800x600/FFFFFF/FFD700?text=Detail+Branding+Mewah" class="portfolio-wrap-luminous portfolio-lightbox-luminous" data-gallery="portfolioGalleryLuminous" title="Identitas Brand Mewah">
                    <img src="https://placehold.co/600x450/CFDEF3/333333?text=Branding+Mewah" class="img-fluid" alt="[Gambar Branding Mewah]">
                    <div class="portfolio-overlay-luminous">
                        <h4>Identitas Brand Mewah</h4>
                        <p>Branding & Visual Identity</p>
                        <div class="overlay-links"> <i class="fas fa-search-plus"></i> </div>
                    </div>
                </a>
            </div>

            <?php /* Item Portfolio 3 */ ?>
            <div class="col-lg-4 col-md-6 portfolio-item-luminous filter-appdev">
                <a href="https://placehold.co/800x600/FFFFFF/4682B4?text=Detail+Aplikasi+Inovatif" class="portfolio-wrap-luminous portfolio-lightbox-luminous" data-gallery="portfolioGalleryLuminous" title="Aplikasi Mobile Inovatif">
                    <img src="https://placehold.co/600x450/A0C0CF/333333?text=Aplikasi+Mobile+Inovatif" class="img-fluid" alt="[Gambar Aplikasi Mobile Inovatif]">
                    <div class="portfolio-overlay-luminous">
                        <h4>Aplikasi Mobile Inovatif</h4>
                        <p>App Development</p>
                        <div class="overlay-links"> <i class="fas fa-search-plus"></i> </div>
                    </div>
                </a>
            </div>
            <?php /* Tambahkan lebih banyak item portfolio sesuai kebutuhan */ ?>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Komentar JavaScript: Inisialisasi Isotope untuk filtering dan GLightbox untuk popup
        // Pastikan Isotope & GLightbox JS dan CSS sudah dimuat di index.php

        let portfolioContainer = document.querySelector('.portfolio-container-luminous');
        if (portfolioContainer) {
            if (typeof Isotope !== 'undefined') {
                let portfolioIsotope = new Isotope(portfolioContainer, {
                    itemSelector: '.portfolio-item-luminous',
                    layoutMode: 'fitRows' // Atau 'masonry' jika gambar beda ukuran
                });

                let portfolioFilters = document.querySelectorAll('.portfolio-filters-luminous li');
                portfolioFilters.forEach(function(filter) {
                    filter.addEventListener('click', function() {
                        portfolioFilters.forEach(el => el.classList.remove('filter-active'));
                        this.classList.add('filter-active');
                        portfolioIsotope.arrange({
                            filter: this.getAttribute('data-filter')
                        });
                        if (typeof AOS !== 'undefined') {
                            AOS.refresh();
                        }
                    });
                });
            } else {
                console.warn('Isotope library not loaded for luminous portfolio.');
            }
        }

        if (typeof GLightbox !== 'undefined') {
            const portfolioLightboxLuminous = GLightbox({
                selector: '.portfolio-lightbox-luminous',
                gallery: 'portfolioGalleryLuminous'
            });
        } else {
            console.warn('GLightbox library not loaded for luminous portfolio.');
        }
    });
</script>