<?php // File: components/galeri_keindahan_alam_pertanian.php 
?>
<style>
    /* Galeri Keindahan Alam Pertanian Styles */
    #galeriKeindahanAlamPertanian {
        background-color: var(--card-bg-light-farm5);
        /* Latar terang */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #galeriKeindahanAlamPertanian {
        background-color: var(--card-bg-dark-farm5);
    }

    .gallery-nature-item {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.07);
        transition: box-shadow 0.4s ease;
        height: 280px;
        /* Tinggi tetap untuk item galeri */
    }

    body.dark-mode .gallery-nature-item {
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
    }

    .gallery-nature-item:hover {
        box-shadow: 0 10px 30px rgba(218, 165, 32, 0.15);
        /* var(--secondary-eco-farm) dengan alpha */
    }

    body.dark-mode .gallery-nature-item:hover {
        box-shadow: 0 10px 30px rgba(240, 230, 140, 0.2);
        /* var(--secondary-eco-farm-dark) dengan alpha */
    }


    .gallery-nature-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1), filter 0.4s ease;
        /* Transisi smooth & filter */
    }

    .gallery-nature-item:hover img {
        transform: scale(1.15);
        filter: brightness(0.8) contrast(1.1);
        /* Efek dramatis saat hover */
    }

    .gallery-nature-item .gallery-caption-nature {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(var(--text-light-farm5-rgb, 56, 46, 46), 0.8) 0%, transparent 100%);
        color: #fff;
        padding: 25px 20px 15px 20px;
        /* Padding bawah lebih sedikit */
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.4s ease 0.1s, transform 0.4s ease 0.1s;
    }

    /* Komentar CSS: Variabel RGB untuk text-light-farm5 & text-dark-farm5 */
    body {
        --text-light-farm5-rgb: 56, 46, 46;
    }

    body.dark-mode {
        --text-dark-farm5-rgb: 224, 224, 224;
    }

    body.dark-mode .gallery-nature-item .gallery-caption-nature {
        background: linear-gradient(to top, rgba(var(--text-dark-farm5-rgb, 224, 224, 224), 0.1) 0%, transparent 100%);
        /* Komentar CSS: Di dark mode, overlay teks bisa lebih subtle atau dihilangkan jika gambar sudah gelap */
    }

    .gallery-nature-item:hover .gallery-caption-nature {
        opacity: 1;
        transform: translateY(0);
    }

    .gallery-nature-item .gallery-caption-nature h5 {
        font-family: 'Lora', serif;
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 5px;
        color: #fff;
        /* Teks caption putih */
    }

    .gallery-nature-item .gallery-caption-nature p {
        font-size: 0.85rem;
        margin-bottom: 0;
        color: rgba(255, 255, 255, 0.85);
        font-family: 'Nunito Sans', sans-serif;
    }

    .gallery-nature-item .gallery-lightbox-link {
        /* Tombol lightbox */
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0.8);
        width: 50px;
        height: 50px;
        background-color: rgba(var(--secondary-eco-farm-rgb, 218, 165, 32), 0.8);
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        text-decoration: none;
        opacity: 0;
        transition: opacity 0.4s ease, transform 0.4s ease;
    }

    body.dark-mode .gallery-nature-item .gallery-lightbox-link {
        background-color: rgba(var(--secondary-eco-farm-dark-rgb, 240, 230, 140), 0.8);
        color: var(--bg-dark-farm5);
    }

    .gallery-nature-item:hover .gallery-lightbox-link {
        opacity: 1;
        transform: translate(-50%, -50%) scale(1);
    }

    .gallery-nature-item .gallery-lightbox-link:hover {
        background-color: var(--secondary-eco-farm);
    }

    body.dark-mode .gallery-nature-item .gallery-lightbox-link:hover {
        background-color: var(--secondary-eco-farm-dark);
    }
</style>

<section id="galeriKeindahanAlamPertanian" class="section-ecosymphony">
    <div class="container">
        <div class="section-title-ecosymphony" data-aos="fade-up">
            <h2>Simfoni <span style="color:var(--secondary-eco-farm);">Visual</span> Ladang Kami</h2>
            <p class="subtitle-ecosymphony">Menangkap Momen-Momen Keindahan Alam dan Proses Pertanian di EcoSymphony Farm.</p>
        </div>

        <div class="row gy-4">
            <?php
            // Komentar PHP: Array data galeri
            $gambar_galeri = [
                ["judul" => "Matahari Terbit di Atas Perkebunan Teh", "deskripsi" => "Kehangatan pagi menyinari dedaunan teh hijau.", "img" => "https://placehold.co/600x400/556B2F/FFFFFF?text=Sunrise+Tea+Farm&font=lora", "delay" => 100],
                ["judul" => "Bunga Kopi Mekar", "deskripsi" => "Aroma semerbak dari bunga kopi yang siap menjadi biji berkualitas.", "img" => "https://placehold.co/600x400/DAA520/382E2E?text=Coffee+Blossoms&font=lora", "delay" => 200],
                ["judul" => "Sistem Irigasi Alami", "deskripsi" => "Air jernih mengaliri terasering sawah yang subur.", "img" => "https://placehold.co/600x400/A0522D/FFFFFF?text=Natural+Irrigation&font=lora", "delay" => 300],
                ["judul" => "Panen Madu Hutan Lestari", "deskripsi" => "Peternak lebah kami memanen madu dengan kearifan lokal.", "img" => "https://placehold.co/600x400/8FBC8F/382E2E?text=Sustainable+Honey+Harvest&font=lora", "delay" => 400],
                ["judul" => "Anak-Anak Belajar Bertani", "deskripsi" => "Program edukasi untuk generasi penerus pertanian.", "img" => "https://placehold.co/600x400/F0E68C/382E2E?text=Farm+Education+Kids&font=lora", "delay" => 500],
                ["judul" => "Keanekaragaman Hayati Ladang", "deskripsi" => "Kupu-kupu dan serangga penyerbuk di antara bunga liar.", "img" => "https://placehold.co/600x400/CD853F/FFFFFF?text=Farm+Biodiversity&font=lora", "delay" => 600],
            ];

            foreach ($gambar_galeri as $gambar) : ?>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="<?php echo $gambar['delay']; ?>">
                    <div class="gallery-nature-item">
                        <img src="<?php echo $gambar['img']; ?>" alt="[Gambar <?php echo htmlspecialchars($gambar['judul']); ?>]">
                        <div class="gallery-caption-nature">
                            <h5><?php echo htmlspecialchars($gambar['judul']); ?></h5>
                            <p><?php echo htmlspecialchars($gambar['deskripsi']); ?></p>
                        </div>
                        <a href="<?php echo str_replace('600x400', '800x600', $gambar['img']); ?>" class="gallery-lightbox-link glightbox" data-gallery="gallery-nature-farm" data-title="<?php echo htmlspecialchars($gambar['judul']); ?>" data-description="<?php echo htmlspecialchars($gambar['deskripsi']); ?>">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Komentar JavaScript: Inisialisasi GLightbox untuk galeri alam
        if (typeof GLightbox !== 'undefined') {
            const galleryNatureLightbox = GLightbox({
                selector: '.glightbox[data-gallery="gallery-nature-farm"]',
                touchNavigation: true,
                loop: true,
                descriptionSource: 'attribute',
                descPosition: 'bottom',
            });
        } else {
            console.warn('GLightbox library not loaded for nature farm gallery.');
        }
    });
</script>