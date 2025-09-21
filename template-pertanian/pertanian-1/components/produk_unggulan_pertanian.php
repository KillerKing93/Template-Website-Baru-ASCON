<?php // File: components/produk_unggulan_pertanian.php 
?>
<style>
    /* Produk Unggulan Pertanian Styles */
    #produkUnggulanPertanian {
        background-color: var(--bg-light);
        /* Default light */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #produkUnggulanPertanian {
        background-color: var(--bg-dark);
    }

    .product-card-pertanian {
        background-color: var(--card-bg-light);
        border: 1px solid var(--border-light);
        border-radius: 10px;
        overflow: hidden;
        /* Untuk gambar */
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    body.dark-mode .product-card-pertanian {
        background-color: var(--card-bg-dark);
        border-color: var(--border-dark);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .product-card-pertanian:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 25px rgba(90, 139, 65, 0.15);
        /* var(--primary-farm) dengan alpha */
    }

    body.dark-mode .product-card-pertanian:hover {
        box-shadow: 0 10px 25px rgba(124, 179, 66, 0.2);
        /* var(--primary-farm-dark) dengan alpha */
    }


    .product-card-pertanian .product-image-wrapper {
        height: 250px;
        /* Tinggi gambar produk */
        overflow: hidden;
    }

    .product-card-pertanian .product-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .product-card-pertanian:hover .product-image-wrapper img {
        transform: scale(1.08);
    }

    .product-card-pertanian .product-content {
        padding: 20px;
        flex-grow: 1;
        /* Konten mengisi ruang */
        display: flex;
        flex-direction: column;
    }

    .product-card-pertanian .product-category {
        font-size: 0.8rem;
        color: var(--accent-farm);
        /* Warna kategori */
        font-weight: 600;
        text-transform: uppercase;
        margin-bottom: 5px;
        letter-spacing: 0.5px;
        transition: color 0.3s ease;
    }

    body.dark-mode .product-card-pertanian .product-category {
        color: var(--accent-farm-dark);
    }

    .product-card-pertanian h5.product-name {
        font-family: 'Merriweather', serif;
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 10px;
        color: var(--text-light);
        /* Default light */
    }

    body.dark-mode .product-card-pertanian h5.product-name {
        color: var(--text-dark);
    }

    .product-card-pertanian p.product-description-short {
        font-size: 0.9rem;
        color: var(--muted-text-light);
        line-height: 1.6;
        margin-bottom: 15px;
        flex-grow: 1;
        /* Deskripsi mengisi ruang */
        transition: color 0.3s ease;
    }

    body.dark-mode .product-card-pertanian p.product-description-short {
        color: var(--muted-text-dark);
    }

    .product-card-pertanian .btn-view-product {
        margin-top: auto;
        /* Tombol di bawah */
        align-self: flex-start;
        /* Tombol rata kiri */
        font-size: 0.9rem;
    }
</style>

<section id="produkUnggulanPertanian" class="section-pertanian">
    <div class="container">
        <div class="section-title-pertanian" data-aos="fade-up">
            <h2>Produk Unggulan Kami</h2>
            <p class="subtitle-pertanian">Hasil Panen Segar dan Berkualitas Langsung dari Ladang Kami.</p>
        </div>

        <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="product-card-pertanian">
                    <div class="product-image-wrapper">
                        <img src="https://placehold.co/600x400/5A8B41/FFFFFF?text=Sayuran+Organik" alt="[Gambar Sayuran Organik Segar]">
                    </div>
                    <div class="product-content">
                        <span class="product-category">Sayuran Segar</span>
                        <h5 class="product-name">Aneka Sayuran Organik</h5>
                        <p class="product-description-short">Pilihan sayuran hijau dan umbi-umbian yang ditanam secara organik, bebas pestisida, dan kaya nutrisi.</p>
                        <a href="#" class="btn-farm-secondary btn-view-product">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="product-card-pertanian">
                    <div class="product-image-wrapper">
                        <img src="https://placehold.co/600x400/D4A373/FFFFFF?text=Buah-buahan+Musiman" alt="[Gambar Buah-buahan Musiman]">
                    </div>
                    <div class="product-content">
                        <span class="product-category">Buah-Buahan</span>
                        <h5 class="product-name">Buah Musiman Manis</h5>
                        <p class="product-description-short">Nikmati manisnya buah-buahan segar yang dipanen pada musim terbaiknya, penuh vitamin dan rasa alami.</p>
                        <a href="#" class="btn-farm-secondary btn-view-product">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="product-card-pertanian">
                    <div class="product-image-wrapper">
                        <img src="https://placehold.co/600x400/E76F51/FFFFFF?text=Produk+Olahan+Peternakan" alt="[Gambar Produk Olahan Peternakan]">
                    </div>
                    <div class="product-content">
                        <span class="product-category">Produk Olahan</span>
                        <h5 class="product-name">Susu & Telur Segar</h5>
                        <p class="product-description-short">Susu murni dari sapi perah sehat dan telur ayam kampung berkualitas tinggi, sumber protein alami terbaik.</p>
                        <a href="#" class="btn-farm-secondary btn-view-product">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <?php /* Komentar PHP: Tambahkan lebih banyak produk jika perlu */ ?>
        </div>
    </div>
</section>