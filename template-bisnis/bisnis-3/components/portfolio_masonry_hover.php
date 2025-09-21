<?php // File: components/portfolio_masonry_hover.php 
?>
<style>
    /* Portfolio Masonry Hover Component Styles */
    :root {
        /* Pastikan variabel CSS dari index.php bisa diakses */
        --primary-color: #6A11CB;
        --secondary-color: #2575FC;
        --accent-color: #00FFED;
        --card-bg: #1E1E1E;
        --border-color: rgba(0, 255, 237, 0.2);
        --text-color-muted: #B0B0B0;
    }

    #portfolioMasonryHover {
        background-color: var(--dark-bg);
        border-top: 1px solid var(--border-color);
    }

    .portfolio-filters-futuristic {
        padding: 0;
        margin: 0 auto 45px auto;
        list-style: none;
        text-align: center;
    }

    .portfolio-filters-futuristic li {
        cursor: pointer;
        display: inline-block;
        padding: 10px 22px;
        font-size: 1rem;
        font-weight: 500;
        line-height: 1;
        color: var(--text-color-muted);
        margin: 0 8px 10px 8px;
        transition: all .3s ease-in-out;
        border-radius: 30px;
        background-color: var(--card-bg);
        border: 1px solid var(--border-color);
        font-family: 'Poppins', sans-serif;
    }

    .portfolio-filters-futuristic li:hover,
    .portfolio-filters-futuristic li.filter-active {
        color: var(--dark-bg);
        background-color: var(--accent-color);
        border-color: var(--accent-color);
        box-shadow: 0 0 15px rgba(var(--accent-rgb), 0.4);
    }

    .portfolio-grid {
        /* Kontainer untuk Isotope */
        /* Tidak perlu style khusus jika Isotope menangani layout */
    }

    .portfolio-item-masonry {
        margin-bottom: 30px;
        /* Jarak antar item */
        overflow: hidden;
        border-radius: 10px;
        background-color: var(--card-bg);
        /* Latar belakang item */
    }

    .portfolio-wrap-masonry {
        position: relative;
        overflow: hidden;
        display: block;
        /* Agar bisa dijadikan link keseluruhan */
        text-decoration: none;
    }

    .portfolio-wrap-masonry img {
        width: 100%;
        height: auto;
        /* Tinggi otomatis menyesuaikan gambar */
        display: block;
        transition: transform 0.5s cubic-bezier(0.165, 0.84, 0.44, 1), opacity 0.3s ease;
        /* Transisi smooth */
        border-radius: 10px 10px 0 0;
        /* Sudut atas bulat jika ada konten di bawah gambar */
    }

    .portfolio-wrap-masonry:hover img {
        transform: scale(1.08);
        /* Efek zoom lebih besar */
        opacity: 0.3;
        /* Gambar menjadi lebih gelap */
    }

    .portfolio-info-masonry {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        padding: 25px;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        /* Info di bawah */
        align-items: center;
        /* Info di tengah horizontal */
        text-align: center;
        opacity: 0;
        background: linear-gradient(transparent 0%, rgba(18, 18, 18, 0.6) 40%, rgba(18, 18, 18, 0.95) 100%);
        /* Gradient dari transparan ke gelap */
        transition: opacity 0.5s cubic-bezier(0.165, 0.84, 0.44, 1);
        border-radius: 10px;
    }

    .portfolio-wrap-masonry:hover .portfolio-info-masonry {
        opacity: 1;
    }

    .portfolio-info-masonry h4 {
        font-size: 1.6rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 8px;
        transform: translateY(20px);
        /* Animasi masuk dari bawah */
        transition: transform 0.4s ease 0.1s, opacity 0.4s ease 0.1s;
        /* Delay kecil */
        opacity: 0;
    }

    .portfolio-wrap-masonry:hover .portfolio-info-masonry h4 {
        transform: translateY(0);
        opacity: 1;
    }

    .portfolio-info-masonry p {
        /* Kategori */
        color: var(--accent-color);
        font-size: 0.9rem;
        font-weight: 500;
        margin-bottom: 15px;
        text-transform: uppercase;
        letter-spacing: 1px;
        transform: translateY(20px);
        /* Animasi masuk dari bawah */
        transition: transform 0.4s ease 0.2s, opacity 0.4s ease 0.2s;
        /* Delay lebih besar */
        opacity: 0;
    }

    .portfolio-wrap-masonry:hover .portfolio-info-masonry p {
        transform: translateY(0);
        opacity: 1;
    }

    .portfolio-links-masonry a {
        color: #fff;
        font-size: 1.5rem;
        margin: 0 8px;
        transition: color 0.3s ease, transform 0.3s ease;
        display: inline-block;
        /* Agar transform bekerja */
        transform: translateY(20px) scale(0.8);
        /* Animasi masuk dari bawah & kecil */
        opacity: 0;
    }

    .portfolio-wrap-masonry:hover .portfolio-links-masonry a:nth-child(1) {
        transition-delay: 0.3s;
        transform: translateY(0) scale(1);
        opacity: 1;
    }

    .portfolio-wrap-masonry:hover .portfolio-links-masonry a:nth-child(2) {
        transition-delay: 0.4s;
        transform: translateY(0) scale(1);
        opacity: 1;
    }

    .portfolio-links-masonry a:hover {
        color: var(--accent-color);
        transform: scale(1.2) !important;
        /* Paksa transform saat hover */
    }
</style>

<section id="portfolioMasonryHover" class="section">
    <div class="container">
        <div class="section-title-futuristic" data-aos="fade-up">
            <h2>Karya Unggulan</h2>
            <p class="subtitle">Eksplorasi Proyek Inovatif yang Telah Kami Hidupkan</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul class="portfolio-filters-futuristic">
                    <li data-filter="*" class="filter-active">Semua</li>
                    <li data-filter=".filter-ai">AI/ML</li>
                    <li data-filter=".filter-iot">IoT</li>
                    <li data-filter=".filter-blockchain">Blockchain</li>
                    <li data-filter=".filter-webdev">Web Dev</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-grid gy-4" data-aos="fade-up" data-aos-delay="200">
            <!-- {/* Item Portfolio 1 (Ukuran berbeda untuk masonry) */} -->
            <div class="col-lg-4 col-md-6 portfolio-item-masonry filter-ai">
                <a href="https://placehold.co/800x1000/1E1E1E/00FFED?text=Proyek+AI+Vision" class="portfolio-wrap-masonry portfolio-lightbox" data-gallery="portfolioGalleryMasonry" title="Sistem Visi Komputer AI">
                    <img src="https://placehold.co/600x750/6A11CB/00FFED?text=AI+Vision+System" class="img-fluid" alt="[Gambar AI Vision System]">
                    <div class="portfolio-info-masonry">
                        <h4>AI Vision System</h4>
                        <p>Artificial Intelligence</p>
                        <div class="portfolio-links-masonry">
                            <i class="fas fa-search-plus"></i> {/* Ikon bisa diganti atau jadi bagian dari 'a' */}
                            {/* <a href="portfolio-detail.php?id=ai1" title="Detail Proyek"><i class="fas fa-link"></i></a> */}
                        </div>
                    </div>
                </a>
            </div>

            <!-- {/* Item Portfolio 2 */} -->
            <div class="col-lg-4 col-md-6 portfolio-item-masonry filter-iot">
                <a href="https://placehold.co/800x600/1E1E1E/00FFED?text=Smart+Agri+IoT" class="portfolio-wrap-masonry portfolio-lightbox" data-gallery="portfolioGalleryMasonry" title="Platform IoT Pertanian Cerdas">
                    <img src="https://placehold.co/600x450/2575FC/00FFED?text=Smart+Agriculture+IoT" class="img-fluid" alt="[Gambar Smart Agri IoT]">
                    <div class="portfolio-info-masonry">
                        <h4>Smart Agri IoT</h4>
                        <p>Internet of Things</p>
                        <div class="portfolio-links-masonry">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                </a>
            </div>

            <!-- {/* Item Portfolio 3 */} -->
            <div class="col-lg-4 col-md-6 portfolio-item-masonry filter-blockchain">
                <a href="https://placehold.co/800x700/1E1E1E/00FFED?text=Decentralized+Ledger" class="portfolio-wrap-masonry portfolio-lightbox" data-gallery="portfolioGalleryMasonry" title="Sistem Ledger Terdesentralisasi">
                    <img src="https://placehold.co/600x525/00FFED/121212?text=Decentralized+Ledger+Tech" class="img-fluid" alt="[Gambar Decentralized Ledger]">
                    <div class="portfolio-info-masonry">
                        <h4>Decentralized Ledger</h4>
                        <p>Blockchain Technology</p>
                        <div class="portfolio-links-masonry">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                </a>
            </div>

            <!-- {/* Item Portfolio 4 (Ukuran berbeda) */} -->
            <div class="col-lg-8 col-md-12 portfolio-item-masonry filter-webdev">
                <!-- {/* Lebih lebar */} -->
                <a href="https://placehold.co/1200x600/1E1E1E/00FFED?text=Futuristic+Web+Platform" class="portfolio-wrap-masonry portfolio-lightbox" data-gallery="portfolioGalleryMasonry" title="Platform Web Futuristik">
                    <img src="https://placehold.co/800x400/6A11CB/00FFED?text=Futuristic+Web+Platform" class="img-fluid" alt="[Gambar Web Platform Futuristik]">
                    <div class="portfolio-info-masonry">
                        <h4>Futuristic Web Platform</h4>
                        <p>Web Development</p>
                        <div class="portfolio-links-masonry">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                </a>
            </div>

            <!-- {/* Item Portfolio 5 */} -->
            <div class="col-lg-4 col-md-6 portfolio-item-masonry filter-ai">
                <a href="https://placehold.co/800x600/1E1E1E/00FFED?text=AI+Chatbot+Solution" class="portfolio-wrap-masonry portfolio-lightbox" data-gallery="portfolioGalleryMasonry" title="Solusi Chatbot Cerdas AI">
                    <img src="https://placehold.co/600x450/2575FC/00FFED?text=AI+Chatbot" class="img-fluid" alt="[Gambar AI Chatbot]">
                    <div class="portfolio-info-masonry">
                        <h4>Intelligent Chatbot</h4>
                        <p>Artificial Intelligence</p>
                        <div class="portfolio-links-masonry">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                </a>
            </div>
            <!-- {/* Tambahkan lebih banyak item dengan variasi ukuran gambar untuk efek masonry yang baik */} -->

        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inisialisasi Isotope untuk layout masonry dan filtering
        let portfolioGrid = document.querySelector('.portfolio-grid');
        if (portfolioGrid) {
            if (typeof Isotope !== 'undefined') {
                let portfolioIsotope = new Isotope(portfolioGrid, {
                    itemSelector: '.portfolio-item-masonry',
                    layoutMode: 'masonry', // Gunakan masonry
                    percentPosition: true, // Untuk masonry yang lebih smooth
                    masonry: {
                        columnWidth: '.portfolio-item-masonry' // Bisa juga selector atau angka
                    }
                });

                let portfolioFilters = document.querySelectorAll('.portfolio-filters-futuristic li');
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

                // Pastikan gambar dimuat sebelum Isotope dijalankan untuk kalkulasi layout yang benar
                // Bisa menggunakan imagesLoaded library jika ada masalah layout awal
                // window.addEventListener('load', () => {
                //     portfolioIsotope.layout();
                // });

            } else {
                console.warn('Isotope library not loaded. Masonry layout and filtering might not work.');
            }
        }

        // Inisialisasi GLightbox untuk popup gambar
        if (typeof GLightbox !== 'undefined') {
            const portfolioLightbox = GLightbox({
                selector: '.portfolio-lightbox',
                touchNavigation: true,
                loop: true,
                autoplayVideos: true,
                plyr: { // Kustomisasi Plyr jika video
                    css: 'https://cdn.plyr.io/3.7.8/plyr.css',
                },
            });
        } else {
            console.warn('GLightbox library not loaded. Image/video popups might not work.');
        }
    });
</script>