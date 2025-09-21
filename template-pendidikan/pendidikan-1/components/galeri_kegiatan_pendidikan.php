<?php // File: components/galeri_kegiatan_pendidikan.php 
?>
<style>
    /* Galeri Kegiatan Pendidikan Styles */
    #galeriKegiatanPendidikan {
        background-color: var(--bg-light-edu1);
        /* Default light */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #galeriKegiatanPendidikan {
        background-color: var(--bg-dark-edu1);
    }

    .gallery-item-edu {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 5px 18px rgba(0, 0, 0, 0.07);
        height: 270px;
        /* Tinggi tetap untuk item galeri */
    }

    body.dark-mode .gallery-item-edu {
        box-shadow: 0 5px 18px rgba(0, 0, 0, 0.25);
    }

    .gallery-item-edu img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease, filter 0.3s ease;
    }

    .gallery-item-edu:hover img {
        transform: scale(1.1);
        filter: brightness(0.7);
        /* Gambar sedikit gelap saat hover */
    }

    .gallery-item-edu .gallery-overlay-edu {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(var(--primary-edu1-rgb, 52, 152, 219), 0.5);
        /* var(--primary-edu1) dengan alpha */
        display: flex;
        flex-direction: column;
        /* Untuk judul dan ikon */
        align-items: center;
        justify-content: center;
        text-align: center;
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    body.dark-mode .gallery-item-edu .gallery-overlay-edu {
        background: rgba(var(--primary-edu1-dark-rgb, 93, 173, 226), 0.6);
    }

    .gallery-item-edu:hover .gallery-overlay-edu {
        opacity: 1;
    }

    .gallery-item-edu .gallery-overlay-edu h5 {
        font-family: 'Poppins', sans-serif;
        font-size: 1.3rem;
        color: #fff;
        margin-bottom: 10px;
        font-weight: 600;
        transform: translateY(10px);
        opacity: 0;
        transition: transform 0.3s ease 0.1s, opacity 0.3s ease 0.1s;
    }

    .gallery-item-edu:hover .gallery-overlay-edu h5 {
        transform: translateY(0);
        opacity: 1;
    }

    .gallery-item-edu .gallery-overlay-edu .gallery-lightbox-icon-edu {
        color: #fff;
        font-size: 2rem;
        text-decoration: none;
        transform: scale(0.8);
        opacity: 0;
        transition: transform 0.3s ease 0.2s, opacity 0.3s ease 0.2s;
    }

    .gallery-item-edu:hover .gallery-overlay-edu .gallery-lightbox-icon-edu {
        transform: scale(1);
        opacity: 1;
    }

    .gallery-item-edu .gallery-overlay-edu .gallery-lightbox-icon-edu:hover {
        color: var(--secondary-edu1);
        /* Warna ikon saat hover */
    }

    body.dark-mode .gallery-item-edu .gallery-overlay-edu .gallery-lightbox-icon-edu:hover {
        color: var(--secondary-edu1-dark);
    }
</style>

<section id="galeriKegiatanPendidikan" class="section-pendidikan">
    <div class="container">
        <div class="section-title-pendidikan" data-aos="fade-up">
            <h2>Galeri <span class="highlight-accent-edu">Kegiatan</span></h2>
            <div class="title-deco-line-edu"></div>
            <p class="subtitle-pendidikan">Momen-Momen Berharga dari Berbagai Aktivitas Belajar dan Ekstrakurikuler di Institusi Kami.</p>
        </div>

        <div class="row gy-4">
            <?php
            // Komentar PHP: Array data galeri kegiatan
            $kegiatan_galeri = [
                ["judul" => "Diskusi Kelas Interaktif", "img" => "https://placehold.co/600x400/3498DB/FFFFFF?text=Diskusi+Kelas&font=poppins", "delay" => 100],
                ["judul" => "Praktikum Laboratorium Sains", "img" => "https://placehold.co/600x400/F1C40F/2C3E50?text=Lab+Sains&font=poppins", "delay" => 200],
                ["judul" => "Kegiatan Olahraga Tahunan", "img" => "https://placehold.co/600x400/E74C3C/FFFFFF?text=Olahraga+Siswa&font=poppins", "delay" => 300],
                ["judul" => "Pameran Karya Seni Siswa", "img" => "https://placehold.co/600x400/2ECC71/FFFFFF?text=Pameran+Seni&font=poppins", "delay" => 400],
                ["judul" => "Studi Lapangan ke Industri", "img" => "https://placehold.co/600x400/9B59B6/FFFFFF?text=Studi+Lapangan&font=poppins", "delay" => 500],
                ["judul" => "Perayaan Kelulusan Angkatan", "img" => "https://placehold.co/600x400/34495E/FFFFFF?text=Kelulusan&font=poppins", "delay" => 600],
            ];

            foreach ($kegiatan_galeri as $kegiatan) : ?>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="<?php echo $kegiatan['delay']; ?>">
                    <div class="gallery-item-edu">
                        <img src="<?php echo $kegiatan['img']; ?>" alt="[Gambar <?php echo htmlspecialchars($kegiatan['judul']); ?>]">
                        <div class="gallery-overlay-edu">
                            <h5><?php echo htmlspecialchars($kegiatan['judul']); ?></h5>
                            <a href="<?php echo str_replace('600x400', '800x600', $kegiatan['img']); ?>" class="gallery-lightbox-icon-edu glightbox" data-gallery="gallery-kegiatan-edu" data-title="<?php echo htmlspecialchars($kegiatan['judul']); ?>">
                                <i class="fas fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Komentar JavaScript: Inisialisasi GLightbox untuk galeri kegiatan
        if (typeof GLightbox !== 'undefined') {
            const galleryKegiatanLightbox = GLightbox({
                selector: '.glightbox[data-gallery="gallery-kegiatan-edu"]',
                touchNavigation: true,
                loop: true,
            });
        } else {
            console.warn('GLightbox library not loaded for kegiatan pendidikan gallery.');
        }
    });
</script>