<?php // File: components/galeri_produk_pertanian_interaktif.php 
?>
<style>
    /* Galeri Produk Pertanian Interaktif Styles */
    #galeriProdukPertanianInteraktif {
        background-color: var(--bg-light-farm3);
        /* Default light */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #galeriProdukPertanianInteraktif {
        background-color: var(--bg-dark-farm3);
    }

    .gallery-product-item {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        /* Sudut lebih bulat */
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        transition: box-shadow 0.4s ease;
        cursor: pointer;
        /* Menandakan bisa diklik (untuk lightbox) */
    }

    body.dark-mode .gallery-product-item {
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    }

    .gallery-product-item:hover {
        box-shadow: 0 12px 35px rgba(var(--primary-art-farm-rgb, 76, 175, 80), 0.2);
    }

    body.dark-mode .gallery-product-item:hover {
        box-shadow: 0 12px 35px rgba(var(--primary-art-farm-dark-rgb, 129, 199, 132), 0.25);
    }

    /* Komentar CSS: Variabel RGB untuk primary-art-farm-dark */
    body.dark-mode {
        --primary-art-farm-dark-rgb: 129, 199, 132;
    }


    .gallery-product-item img {
        width: 100%;
        height: 300px;
        /* Tinggi gambar galeri produk */
        object-fit: cover;
        transition: transform 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
        /* Transisi smooth */
    }

    .gallery-product-item:hover img {
        transform: scale(1.12) rotate(3deg);
        /* Efek zoom dan sedikit rotasi */
    }

    .gallery-product-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to top, rgba(var(--primary-art-farm-rgb, 76, 175, 80), 0.7) 0%, transparent 60%);
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        /* Konten di bawah */
        align-items: center;
        /* Teks di tengah */
        text-align: center;
        padding: 20px;
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    body.dark-mode .gallery-product-overlay {
        background: linear-gradient(to top, rgba(var(--primary-art-farm-dark-rgb, 129, 199, 132), 0.75) 0%, transparent 60%);
    }

    .gallery-product-item:hover .gallery-product-overlay {
        opacity: 1;
    }

    .gallery-product-overlay h5.product-name-overlay {
        font-family: 'Teko', sans-serif;
        font-size: 1.8rem;
        color: #fff;
        margin-bottom: 5px;
        font-weight: 600;
        transform: translateY(15px);
        opacity: 0;
        transition: transform 0.4s ease 0.1s, opacity 0.4s ease 0.1s;
    }

    .gallery-product-item:hover .gallery-product-overlay h5.product-name-overlay {
        transform: translateY(0);
        opacity: 1;
    }

    .gallery-product-overlay p.product-category-overlay {
        color: rgba(255, 255, 255, 0.85);
        font-size: 0.9rem;
        font-family: 'Poppins', sans-serif;
        margin-bottom: 15px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transform: translateY(15px);
        opacity: 0;
        transition: transform 0.4s ease 0.2s, opacity 0.4s ease 0.2s;
    }

    .gallery-product-item:hover .gallery-product-overlay p.product-category-overlay {
        transform: translateY(0);
        opacity: 1;
    }

    .gallery-product-overlay .icon-view-overlay {
        font-size: 1.8rem;
        color: #fff;
        transform: scale(0.8);
        opacity: 0;
        transition: transform 0.4s ease 0.3s, opacity 0.4s ease 0.3s;
    }

    .gallery-product-item:hover .gallery-product-overlay .icon-view-overlay {
        transform: scale(1);
        opacity: 1;
    }
</style>

<section id="galeriProdukPertanianInteraktif" class="section-artistic-farm">
    <div class="container">
        <div class="section-title-artistic-farm" data-aos="fade-up">
            <h2>Galeri <span style="color: var(--secondary-art-farm);">Hasil Bumi</span> Kami</h2>
            <p class="subtitle-artistic-farm">Visualisasi Kesegaran dan Kualitas Produk Unggulan Langsung dari Ladang AgriNova.</p>
        </div>

        <div class="row gy-4">
            <?php
            // Komentar PHP: Array data produk untuk galeri
            $produk_galeri = [
                ["nama" => "Tomat Ceri Organik", "kategori" => "Sayuran Buah", "img" => "https://placehold.co/600x400/4CAF50/FFFFFF?text=Tomat+Ceri", "delay" => 100],
                ["nama" => "Selada Hidroponik Renyah", "kategori" => "Sayuran Daun", "img" => "https://placehold.co/600x400/8BC34A/FFFFFF?text=Selada+Hidroponik", "delay" => 200],
                ["nama" => "Stroberi Puncak Manis", "kategori" => "Buah Berry", "img" => "https://placehold.co/600x400/FF9800/FFFFFF?text=Stroberi+Segar", "delay" => 300],
                ["nama" => "Madu Hutan Asli Nusantara", "kategori" => "Produk Olahan", "img" => "https://placehold.co/600x400/FFC107/333333?text=Madu+Hutan", "delay" => 400],
                ["nama" => "Beras Merah Organik Pulen", "kategori" => "Biji-bijian", "img" => "https://placehold.co/600x400/03A9F4/FFFFFF?text=Beras+Merah", "delay" => 500],
                ["nama" => "Kopi Robusta Pilihan", "kategori" => "Minuman & Biji", "img" => "https://placehold.co/600x400/795548/FFFFFF?text=Biji+Kopi+Robusta", "delay" => 600],
            ];

            foreach ($produk_galeri as $produk) : ?>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="<?php echo $produk['delay']; ?>">
                    <a href="<?php echo str_replace('600x400', '800x600', $produk['img']); ?>" class="gallery-product-item glightbox" data-gallery="gallery-produk-pertanian" data-title="<?php echo htmlspecialchars($produk['nama']); ?>" data-description="Kategori: <?php echo htmlspecialchars($produk['kategori']); ?>">
                        <img src="<?php echo $produk['img']; ?>" alt="[Gambar <?php echo htmlspecialchars($produk['nama']); ?>]">
                        <div class="gallery-product-overlay">
                            <h5 class="product-name-overlay"><?php echo htmlspecialchars($produk['nama']); ?></h5>
                            <p class="product-category-overlay"><?php echo htmlspecialchars($produk['kategori']); ?></p>
                            <span class="icon-view-overlay"><i class="fas fa-eye"></i></span>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Komentar JavaScript: Inisialisasi GLightbox untuk galeri produk
        // Pastikan GLightbox JS dan CSS sudah dimuat di index.php
        if (typeof GLightbox !== 'undefined') {
            const galleryProdukLightbox = GLightbox({
                selector: '.glightbox[data-gallery="gallery-produk-pertanian"]',
                touchNavigation: true,
                loop: true,
                autoplayVideos: false, // Jika ada video, bisa diatur
                // Komentar JavaScript: Tambahkan deskripsi dari atribut data-description
                descriptionSource: 'attribute',
                descPosition: 'bottom', // Posisi deskripsi (top, bottom, left, right)
            });
        } else {
            console.warn('GLightbox library not loaded for pertanian produk gallery.');
        }
    });
</script>