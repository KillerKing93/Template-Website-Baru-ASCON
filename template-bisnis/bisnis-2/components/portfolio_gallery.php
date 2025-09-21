<?php // File: components/portfolio_gallery.php 
?>
<style>
    /* Portfolio Gallery Component Styles */
    #portfolioGallery {
        background-color: #FFFFFF;
    }

    .portfolio-filters {
        padding: 0;
        margin: 0 auto 35px auto;
        list-style: none;
        text-align: center;
    }

    .portfolio-filters li {
        cursor: pointer;
        display: inline-block;
        padding: 10px 20px;
        font-size: 1rem;
        font-weight: 600;
        line-height: 1;
        color: #555;
        margin: 0 5px 10px 5px;
        transition: all .3s ease-in-out;
        border-radius: 50px;
        /* Tombol filter bulat */
        border: 1px solid #ddd;
        font-family: 'Montserrat', sans-serif;
    }

    .portfolio-filters li:hover,
    .portfolio-filters li.filter-active {
        color: #fff;
        background-color: #007BFF;
        border-color: #007BFF;
    }

    .portfolio-item {
        margin-bottom: 30px;
        overflow: hidden;
        /* Untuk efek zoom pada gambar */
        border-radius: 10px;
        /* Sudut bulat untuk item */
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .portfolio-wrap {
        position: relative;
        overflow: hidden;
        z-index: 1;
        background: rgba(44, 62, 80, 0.8);
        /* Overlay awal */
        border-radius: 10px;
    }

    .portfolio-wrap::before {
        /* Overlay tambahan untuk efek hover */
        content: "";
        background: rgba(0, 123, 255, 0.7);
        /* Warna aksen saat hover */
        position: absolute;
        left: 30px;
        right: 30px;
        top: 30px;
        bottom: 30px;
        transition: all .3s ease-in-out;
        opacity: 0;
        z-index: 2;
        border-radius: 5px;
    }

    .portfolio-wrap img {
        transition: all .3s ease-in-out;
        width: 100%;
        /* Pastikan gambar responsif */
        height: auto;
        border-radius: 10px;
    }

    .portfolio-wrap:hover img {
        transform: scale(1.1);
        /* Efek zoom pada gambar */
    }

    .portfolio-wrap:hover::before {
        opacity: 1;
        left: 15px;
        /* Overlay mengembang */
        right: 15px;
        top: 15px;
        bottom: 15px;
    }

    .portfolio-info {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 3;
        transition: all .3s ease-in-out;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        /* Teks di bawah */
        align-items: flex-start;
        /* Teks rata kiri */
        padding: 20px;
        opacity: 0;
        /* Awalnya transparan */
    }

    .portfolio-wrap:hover .portfolio-info {
        opacity: 1;
    }

    .portfolio-info h4 {
        font-size: 1.3rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 5px;
    }

    .portfolio-info h4 a {
        color: #fff;
        text-decoration: none;
    }

    .portfolio-info h4 a:hover {
        text-decoration: underline;
    }

    .portfolio-info p {
        color: #f0f0f0;
        font-size: 0.9rem;
        margin-bottom: 10px;
        text-transform: capitalize;
        /* Kategori dengan huruf besar di awal */
    }

    .portfolio-info .portfolio-links a {
        color: #fff;
        font-size: 1.2rem;
        margin-right: 10px;
        transition: color 0.3s;
    }

    .portfolio-info .portfolio-links a:hover {
        color: #00A9FF;
        /* Warna aksen biru cerah */
    }

    /* Lightbox Styling (jika menggunakan, misal GLightbox) */
    .glightbox-clean .gslide-description {
        background: #2c3e50 !important;
        padding: 15px !important;
        border-radius: 5px !important;
    }

    .glightbox-clean .gslide-title {
        color: #fff !important;
        font-family: 'Montserrat', sans-serif !important;
    }

    .glightbox-clean .gdesc-inner {
        color: #eee !important;
    }
</style>

<section id="portfolioGallery" class="section">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Portfolio Kami</h2>
        </div>
        <p class="section-subtitle">Lihat beberapa karya terbaik kami yang telah membantu klien mencapai tujuan bisnis mereka.</p>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul class="portfolio-filters">
                    <li data-filter="*" class="filter-active">Semua</li>
                    <li data-filter=".filter-web">Web</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-design">Desain</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container gy-4" data-aos="fade-up" data-aos-delay="200">
            <!-- {/* Item Portfolio 1 */} -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="https://placehold.co/600x450/007BFF/FFFFFF?text=Proyek+Web+1" class="img-fluid" alt="[Gambar Proyek Web 1]">
                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.php?id=1" title="Selengkapnya">Proyek Alpha</a></h4>
                        <p>Pengembangan Web</p>
                        <div class="portfolio-links">
                            <a href="https://placehold.co/1200x800/007BFF/FFFFFF?text=Detail+Proyek+Web+1" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Proyek Alpha - Web"><i class="fas fa-search-plus"></i></a>
                            <a href="portfolio-details.php?id=1" title="Detail Proyek"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- {/* Item Portfolio 2 */} -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="https://placehold.co/600x450/28A745/FFFFFF?text=Proyek+App+1" class="img-fluid" alt="[Gambar Proyek App 1]">
                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.php?id=2" title="Selengkapnya">Aplikasi Beta</a></h4>
                        <p>Pengembangan Aplikasi Mobile</p>
                        <div class="portfolio-links">
                            <a href="https://placehold.co/1200x800/28A745/FFFFFF?text=Detail+Proyek+App+1" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Aplikasi Beta - App"><i class="fas fa-search-plus"></i></a>
                            <a href="portfolio-details.php?id=2" title="Detail Proyek"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- {/* Item Portfolio 3 */} -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                <div class="portfolio-wrap">
                    <img src="https://placehold.co/600x450/FFC107/2C3E50?text=Proyek+Desain+1" class="img-fluid" alt="[Gambar Proyek Desain 1]">
                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.php?id=3" title="Selengkapnya">Identitas Gamma</a></h4>
                        <p>Desain Grafis & Branding</p>
                        <div class="portfolio-links">
                            <a href="https://placehold.co/1200x800/FFC107/2C3E50?text=Detail+Proyek+Desain+1" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Identitas Gamma - Desain"><i class="fas fa-search-plus"></i></a>
                            <a href="portfolio-details.php?id=3" title="Detail Proyek"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- {/* Item Portfolio 4 */} -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="https://placehold.co/600x450/17A2B8/FFFFFF?text=Proyek+Web+2" class="img-fluid" alt="[Gambar Proyek Web 2]">
                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.php?id=4" title="Selengkapnya">Platform Delta</a></h4>
                        <p>Pengembangan Web E-commerce</p>
                        <div class="portfolio-links">
                            <a href="https://placehold.co/1200x800/17A2B8/FFFFFF?text=Detail+Proyek+Web+2" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Platform Delta - Web"><i class="fas fa-search-plus"></i></a>
                            <a href="portfolio-details.php?id=4" title="Detail Proyek"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- {/* Tambahkan lebih banyak item portfolio sesuai kebutuhan */} -->
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inisialisasi Isotope untuk filtering
        let portfolioContainer = document.querySelector('.portfolio-container');
        if (portfolioContainer) {
            // Pastikan Isotope sudah dimuat sebelum ini
            if (typeof Isotope !== 'undefined') {
                let portfolioIsotope = new Isotope(portfolioContainer, {
                    itemSelector: '.portfolio-item',
                    layoutMode: 'fitRows' // atau 'masonry'
                });

                let portfolioFilters = document.querySelectorAll('.portfolio-filters li');

                portfolioFilters.forEach(function(filter) {
                    filter.addEventListener('click', function() {
                        portfolioFilters.forEach(el => el.classList.remove('filter-active'));
                        this.classList.add('filter-active');

                        portfolioIsotope.arrange({
                            filter: this.getAttribute('data-filter')
                        });
                        // Jika menggunakan AOS, reinitialize setelah filter
                        if (typeof AOS !== 'undefined') {
                            AOS.refresh();
                        }
                    });
                });
            } else {
                console.warn('Isotope library not loaded.');
            }
        }

        // Inisialisasi GLightbox untuk popup gambar
        // Pastikan GLightbox sudah dimuat sebelum ini
        if (typeof GLightbox !== 'undefined') {
            const portfolioLightbox = GLightbox({
                selector: '.portfolio-lightbox'
            });
        } else {
            console.warn('GLightbox library not loaded.');
        }

        // Jika Anda tidak menggunakan library di atas, Anda perlu implementasi filter dan lightbox manual.
    });
</script>