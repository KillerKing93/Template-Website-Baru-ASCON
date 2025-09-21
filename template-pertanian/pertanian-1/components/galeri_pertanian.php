<?php // File: components/galeri_pertanian.php 
?>
<style>
    /* Galeri Pertanian Styles */
    #galeriPertanian {
        background-color: var(--card-bg-light);
        /* Sedikit beda dari body */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #galeriPertanian {
        background-color: var(--card-bg-dark);
    }

    .gallery-item-pertanian {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.07);
        transition: box-shadow 0.3s ease;
    }

    body.dark-mode .gallery-item-pertanian {
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .gallery-item-pertanian:hover {
        box-shadow: 0 8px 20px rgba(90, 139, 65, 0.1);
        /* var(--primary-farm) dengan alpha */
    }

    body.dark-mode .gallery-item-pertanian:hover {
        box-shadow: 0 8px 20px rgba(124, 179, 66, 0.15);
        /* var(--primary-farm-dark) dengan alpha */
    }


    .gallery-item-pertanian img {
        width: 100%;
        height: 280px;
        /* Tinggi gambar galeri */
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .gallery-item-pertanian:hover img {
        transform: scale(1.1);
    }

    .gallery-item-pertanian .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.4);
        /* Overlay gelap */
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .gallery-item-pertanian:hover .gallery-overlay {
        opacity: 1;
    }

    .gallery-item-pertanian .gallery-overlay .gallery-lightbox-icon {
        color: #fff;
        font-size: 2rem;
        text-decoration: none;
        transition: transform 0.3s ease;
    }

    .gallery-item-pertanian .gallery-overlay .gallery-lightbox-icon:hover {
        transform: scale(1.2);
    }
</style>

<section id="galeriPertanian" class="section-pertanian">
    <div class="container">
        <div class="section-title-pertanian" data-aos="fade-up">
            <h2>Galeri Ladang Kami</h2>
            <p class="subtitle-pertanian">Intip Keindahan dan Kesuburan Ladang serta Hasil Panen Kami.</p>
        </div>

        <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="gallery-item-pertanian">
                    <a href="https://placehold.co/800x600/5A8B41/FFFFFF?text=Pemandangan+Ladang+Pagi" class="glightbox" data-gallery="gallery-pertanian">
                        <img src="https://placehold.co/600x400/5A8B41/FFFFFF?text=Ladang+Pagi+Hari" alt="[Gambar Pemandangan Ladang Pagi Hari]">
                        <div class="gallery-overlay">
                            <span class="gallery-lightbox-icon"><i class="fas fa-search-plus"></i></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="gallery-item-pertanian">
                    <a href="https://placehold.co/800x600/D4A373/FFFFFF?text=Hasil+Panen+Melimpah" class="glightbox" data-gallery="gallery-pertanian">
                        <img src="https://placehold.co/600x400/D4A373/FFFFFF?text=Panen+Buah+Segar" alt="[Gambar Hasil Panen Buah Segar]">
                        <div class="gallery-overlay">
                            <span class="gallery-lightbox-icon"><i class="fas fa-search-plus"></i></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="gallery-item-pertanian">
                    <a href="https://placehold.co/800x600/E76F51/FFFFFF?text=Proses+Tanam+Organik" class="glightbox" data-gallery="gallery-pertanian">
                        <img src="https://placehold.co/600x400/E76F51/FFFFFF?text=Petani+Menanam" alt="[Gambar Petani sedang Menanam Bibit]">
                        <div class="gallery-overlay">
                            <span class="gallery-lightbox-icon"><i class="fas fa-search-plus"></i></span>
                        </div>
                    </a>
                </div>
            </div>
            <?php /* Komentar PHP: Tambahkan 3 item galeri lagi untuk total 6 */ ?>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="gallery-item-pertanian">
                    <a href="https://placehold.co/800x600/7CB342/FFFFFF?text=Sawah+Hijau+Luas" class="glightbox" data-gallery="gallery-pertanian">
                        <img src="https://placehold.co/600x400/7CB342/FFFFFF?text=Sawah+Menghijau" alt="[Gambar Sawah yang Menghijau]">
                        <div class="gallery-overlay">
                            <span class="gallery-lightbox-icon"><i class="fas fa-search-plus"></i></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                <div class="gallery-item-pertanian">
                    <a href="https://placehold.co/800x600/B08968/FFFFFF?text=Hewan+Ternak+Sehat" class="glightbox" data-gallery="gallery-pertanian">
                        <img src="https://placehold.co/600x400/B08968/FFFFFF?text=Sapi+Perah+di+Padang" alt="[Gambar Sapi Perah di Padang Rumput]">
                        <div class="gallery-overlay">
                            <span class="gallery-lightbox-icon"><i class="fas fa-search-plus"></i></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
                <div class="gallery-item-pertanian">
                    <a href="https://placehold.co/800x600/F08A5D/FFFFFF?text=Pasar+Tani+Lokal" class="glightbox" data-gallery="gallery-pertanian">
                        <img src="https://placehold.co/600x400/F08A5D/FFFFFF?text=Produk+di+Pasar+Tani" alt="[Gambar Produk Pertanian di Pasar Lokal]">
                        <div class="gallery-overlay">
                            <span class="gallery-lightbox-icon"><i class="fas fa-search-plus"></i></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Komentar JavaScript: Inisialisasi GLightbox untuk galeri
        // Pastikan GLightbox JS dan CSS sudah dimuat di index.php
        if (typeof GLightbox !== 'undefined') {
            const galleryLightbox = GLightbox({
                selector: '.glightbox[data-gallery="gallery-pertanian"]', // Selector spesifik untuk galeri ini
                touchNavigation: true,
                loop: true,
                autoplayVideos: true
            });
        } else {
            console.warn('GLightbox library not loaded for pertanian gallery.');
        }
    });
</script>