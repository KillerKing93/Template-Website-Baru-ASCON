<?php // File: components/produk_katalog_pertanian.php 
?>
<style>
    /* Produk Katalog Pertanian Styles - Tidak ada perubahan signifikan pada CSS, fokus pada HTML dan JS */
    #produkKatalogPertanian {
        background-color: var(--bg-light-farm2);
        /* Default light */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #produkKatalogPertanian {
        background-color: var(--bg-dark-farm2);
    }

    .product-filter-nav {
        margin-bottom: 40px;
        text-align: center;
    }

    .product-filter-nav .nav-link {
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        color: var(--muted-text-light-farm2);
        border: 1px solid var(--border-light-farm2);
        border-radius: 30px;
        /* Tombol filter bulat */
        padding: 8px 20px;
        margin: 0 5px 10px 5px;
        transition: all 0.3s ease;
    }

    body.dark-mode .product-filter-nav .nav-link {
        color: var(--muted-text-dark-farm2);
        border-color: var(--border-dark-farm2);
    }

    .product-filter-nav .nav-link:hover {
        color: var(--primary-modern-farm);
        border-color: var(--primary-modern-farm);
    }

    .product-filter-nav .nav-link.active {
        background-color: var(--primary-modern-farm);
        color: #fff;
        border-color: var(--primary-modern-farm);
    }

    body.dark-mode .product-filter-nav .nav-link:hover {
        color: var(--primary-modern-farm-dark);
        border-color: var(--primary-modern-farm-dark);
    }

    body.dark-mode .product-filter-nav .nav-link.active {
        background-color: var(--primary-modern-farm-dark);
        color: var(--bg-dark-farm2);
        /* Teks kontras */
        border-color: var(--primary-modern-farm-dark);
    }

    .product-catalog-item {
        background-color: var(--card-bg-light-farm2);
        border-radius: 8px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.07);
        overflow: hidden;
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    body.dark-mode .product-catalog-item {
        background-color: var(--card-bg-dark-farm2);
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
    }

    .product-catalog-item:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 25px rgba(46, 125, 50, 0.12);
        /* var(--primary-modern-farm) dengan alpha */
    }

    body.dark-mode .product-catalog-item:hover {
        box-shadow: 0 10px 25px rgba(102, 187, 106, 0.18);
        /* var(--primary-modern-farm-dark) dengan alpha */
    }

    .product-catalog-item .product-image-container {
        height: 220px;
        /* Tinggi gambar */
        overflow: hidden;
        position: relative;
    }

    .product-catalog-item .product-image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .product-catalog-item:hover .product-image-container img {
        transform: scale(1.07);
    }

    .product-catalog-item .product-badge {
        /* Misal: Organik, Baru Panen */
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: var(--secondary-modern-farm);
        color: var(--text-light-farm2);
        /* Atau #fff */
        padding: 4px 10px;
        font-size: 0.7rem;
        font-weight: 700;
        border-radius: 3px;
        text-transform: uppercase;
    }

    body.dark-mode .product-catalog-item .product-badge {
        background-color: var(--secondary-modern-farm-dark);
        color: var(--bg-dark-farm2);
    }

    .product-catalog-item .product-info {
        padding: 20px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .product-catalog-item .product-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .product-catalog-item .product-title a {
        color: var(--text-light-farm2);
        /* Default light */
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .product-catalog-item .product-title a:hover {
        color: var(--primary-modern-farm);
    }

    body.dark-mode .product-catalog-item .product-title a {
        color: var(--text-dark-farm2);
    }

    body.dark-mode .product-catalog-item .product-title a:hover {
        color: var(--primary-modern-farm-dark);
    }

    .product-catalog-item .product-price {
        font-size: 1.2rem;
        font-weight: 600;
        color: var(--primary-modern-farm);
        margin-bottom: 10px;
        font-family: 'Source Sans Pro', sans-serif;
    }

    body.dark-mode .product-catalog-item .product-price {
        color: var(--primary-modern-farm-dark);
    }

    .product-catalog-item .product-price .unit {
        font-size: 0.85rem;
        color: var(--muted-text-light-farm2);
    }

    body.dark-mode .product-catalog-item .product-price .unit {
        color: var(--muted-text-dark-farm2);
    }

    .product-catalog-item .product-short-desc {
        font-size: 0.9rem;
        color: var(--muted-text-light-farm2);
        line-height: 1.6;
        margin-bottom: 15px;
        flex-grow: 1;
    }

    body.dark-mode .product-catalog-item .product-short-desc {
        color: var(--muted-text-dark-farm2);
    }

    .product-catalog-item .btn-add-to-cart {
        margin-top: auto;
        width: 100%;
    }
</style>

<section id="produkKatalogPertanian" class="section-pertanian-modern">
    <div class="container">
        <div class="section-title-modern-farm" data-aos="fade-up">
            <h2>Katalog <span class="highlight-accent">Produk</span> Kami</h2>
            <div class="line-decorator"></div>
            <p class="subtitle-modern-farm">Temukan Hasil Panen Terbaik, Segar Langsung dari Ladang untuk Kebutuhan Anda.</p>
        </div>

        <?php /* Komentar PHP: Navigasi Filter Produk */ ?>
        <ul class="nav product-filter-nav nav-pills justify-content-center" id="productFilter" role="tablist" data-aos="fade-up" data-aos-delay="100">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="filter-all-tab" data-bs-toggle="tab" data-bs-target="#pane-all" type="button" role="tab" aria-controls="pane-all" aria-selected="true">Semua</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="filter-sayuran-tab" data-bs-toggle="tab" data-bs-target="#pane-sayuran" type="button" role="tab" aria-controls="pane-sayuran" aria-selected="false">Sayuran</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="filter-buah-tab" data-bs-toggle="tab" data-bs-target="#pane-buah" type="button" role="tab" aria-controls="pane-buah" aria-selected="false">Buah-Buahan</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="filter-umbi-tab" data-bs-toggle="tab" data-bs-target="#pane-umbi" type="button" role="tab" aria-controls="pane-umbi" aria-selected="false">Umbi-Umbian</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="filter-olahan-tab" data-bs-toggle="tab" data-bs-target="#pane-olahan" type="button" role="tab" aria-controls="pane-olahan" aria-selected="false">Produk Olahan</button>
            </li>
        </ul>

        <?php /* Komentar PHP: Konten Tab Produk */ ?>
        <div class="tab-content" id="productFilterContent" data-aos="fade-up" data-aos-delay="200">
            <?php /* Komentar PHP: Tab Pane untuk SEMUA PRODUK */ ?>
            <div class="tab-pane fade show active" id="pane-all" role="tabpanel" aria-labelledby="filter-all-tab">
                <div class="row gy-4">
                    <?php /* Komentar PHP: Produk 1 (Sayuran) */ ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-catalog-item">
                            <div class="product-image-container">
                                <img src="https://placehold.co/400x300/2E7D32/FFFFFF?text=Bayam+Organik" alt="[Gambar Bayam Organik]">
                                <span class="product-badge">Organik</span>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="#">Bayam Hijau Organik</a></h4>
                                <div class="product-price">Rp 15.000 <span class="unit">/ikat</span></div>
                                <p class="product-short-desc">Bayam segar kaya zat besi, ditanam tanpa pestisida.</p>
                                <button class="btn-farm-modern-secondary btn-add-to-cart"><i class="fas fa-shopping-cart me-2"></i>Keranjang</button>
                            </div>
                        </div>
                    </div>
                    <?php /* Komentar PHP: Produk 2 (Buah) */ ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-catalog-item">
                            <div class="product-image-container">
                                <img src="https://placehold.co/400x300/FFB300/2C3333?text=Mangga+Harum+Manis" alt="[Gambar Mangga Harum Manis]">
                                <span class="product-badge">Musiman</span>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="#">Mangga Harum Manis</a></h4>
                                <div class="product-price">Rp 25.000 <span class="unit">/kg</span></div>
                                <p class="product-short-desc">Mangga matang pohon dengan rasa manis dan aroma khas.</p>
                                <button class="btn-farm-modern-secondary btn-add-to-cart"><i class="fas fa-shopping-cart me-2"></i>Keranjang</button>
                            </div>
                        </div>
                    </div>
                    <?php /* Komentar PHP: Produk 3 (Umbi) */ ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-catalog-item">
                            <div class="product-image-container">
                                <img src="https://placehold.co/400x300/607D8B/FFFFFF?text=Kentang+Dieng" alt="[Gambar Kentang Dieng]">
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="#">Kentang Dieng Super</a></h4>
                                <div class="product-price">Rp 18.000 <span class="unit">/kg</span></div>
                                <p class="product-short-desc">Kentang berkualitas dari dataran tinggi Dieng, cocok untuk berbagai masakan.</p>
                                <button class="btn-farm-modern-secondary btn-add-to-cart"><i class="fas fa-shopping-cart me-2"></i>Keranjang</button>
                            </div>
                        </div>
                    </div>
                    <?php /* Komentar PHP: Produk 4 (Olahan) */ ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-catalog-item">
                            <div class="product-image-container">
                                <img src="https://placehold.co/400x300/2E7D32/FFFFFF?text=Selai+Stroberi+Alami" alt="[Gambar Selai Stroberi Alami]">
                                <span class="product-badge">Homemade</span>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="#">Selai Stroberi Alami</a></h4>
                                <div class="product-price">Rp 35.000 <span class="unit">/jar</span></div>
                                <p class="product-short-desc">Selai stroberi dibuat dari buah segar pilihan tanpa pengawet.</p>
                                <button class="btn-farm-modern-secondary btn-add-to-cart"><i class="fas fa-shopping-cart me-2"></i>Keranjang</button>
                            </div>
                        </div>
                    </div>
                    <?php /* Komentar PHP: Tambahkan 4 produk lagi untuk total 8 di "Semua" */ ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-catalog-item">
                            <div class="product-image-container">
                                <img src="https://placehold.co/400x300/2E7D32/FFFFFF?text=Kangkung+Hidroponik" alt="[Gambar Kangkung Hidroponik]">
                                <span class="product-badge">Hidroponik</span>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="#">Kangkung Hidroponik</a></h4>
                                <div class="product-price">Rp 12.000 <span class="unit">/ikat</span></div>
                                <p class="product-short-desc">Kangkung segar dan bersih, ditanam dengan metode hidroponik modern.</p>
                                <button class="btn-farm-modern-secondary btn-add-to-cart"><i class="fas fa-shopping-cart me-2"></i>Keranjang</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-catalog-item">
                            <div class="product-image-container">
                                <img src="https://placehold.co/400x300/FFB300/2C3333?text=Jeruk+Medan+Manis" alt="[Gambar Jeruk Medan Manis]">
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="#">Jeruk Medan Manis</a></h4>
                                <div class="product-price">Rp 22.000 <span class="unit">/kg</span></div>
                                <p class="product-short-desc">Jeruk Medan pilihan dengan rasa manis segar dan kaya vitamin C.</p>
                                <button class="btn-farm-modern-secondary btn-add-to-cart"><i class="fas fa-shopping-cart me-2"></i>Keranjang</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-catalog-item">
                            <div class="product-image-container">
                                <img src="https://placehold.co/400x300/607D8B/FFFFFF?text=Ubi+Cilembu" alt="[Gambar Ubi Cilembu]">
                                <span class="product-badge">Khas</span>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="#">Ubi Cilembu Madu</a></h4>
                                <div class="product-price">Rp 20.000 <span class="unit">/kg</span></div>
                                <p class="product-short-desc">Ubi Cilembu asli, manis alami seperti madu saat dipanggang.</p>
                                <button class="btn-farm-modern-secondary btn-add-to-cart"><i class="fas fa-shopping-cart me-2"></i>Keranjang</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-catalog-item">
                            <div class="product-image-container">
                                <img src="https://placehold.co/400x300/2E7D32/FFFFFF?text=Madu+Hutan+Murni" alt="[Gambar Madu Hutan Murni]">
                                <span class="product-badge">Alami</span>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="#">Madu Hutan Murni</a></h4>
                                <div class="product-price">Rp 75.000 <span class="unit">/botol</span></div>
                                <p class="product-short-desc">Madu hutan asli dengan berbagai manfaat kesehatan, dipanen secara lestari.</p>
                                <button class="btn-farm-modern-secondary btn-add-to-cart"><i class="fas fa-shopping-cart me-2"></i>Keranjang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php /* Komentar PHP: Tab Pane untuk SAYURAN */ ?>
            <div class="tab-pane fade" id="pane-sayuran" role="tabpanel" aria-labelledby="filter-sayuran-tab">
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-catalog-item">
                            <div class="product-image-container">
                                <img src="https://placehold.co/400x300/2E7D32/FFFFFF?text=Bayam+Organik" alt="[Gambar Bayam Organik]">
                                <span class="product-badge">Organik</span>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="#">Bayam Hijau Organik</a></h4>
                                <div class="product-price">Rp 15.000 <span class="unit">/ikat</span></div>
                                <p class="product-short-desc">Bayam segar kaya zat besi, ditanam tanpa pestisida.</p>
                                <button class="btn-farm-modern-secondary btn-add-to-cart"><i class="fas fa-shopping-cart me-2"></i>Keranjang</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-catalog-item">
                            <div class="product-image-container">
                                <img src="https://placehold.co/400x300/2E7D32/FFFFFF?text=Kangkung+Hidroponik" alt="[Gambar Kangkung Hidroponik]">
                                <span class="product-badge">Hidroponik</span>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="#">Kangkung Hidroponik</a></h4>
                                <div class="product-price">Rp 12.000 <span class="unit">/ikat</span></div>
                                <p class="product-short-desc">Kangkung segar dan bersih, ditanam dengan metode hidroponik modern.</p>
                                <button class="btn-farm-modern-secondary btn-add-to-cart"><i class="fas fa-shopping-cart me-2"></i>Keranjang</button>
                            </div>
                        </div>
                    </div>
                    <?php /* Komentar PHP: Tambahkan produk sayuran lainnya jika ada */ ?>
                </div>
            </div>

            <?php /* Komentar PHP: Tab Pane untuk BUAH-BUAHAN */ ?>
            <div class="tab-pane fade" id="pane-buah" role="tabpanel" aria-labelledby="filter-buah-tab">
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-catalog-item">
                            <div class="product-image-container">
                                <img src="https://placehold.co/400x300/FFB300/2C3333?text=Mangga+Harum+Manis" alt="[Gambar Mangga Harum Manis]">
                                <span class="product-badge">Musiman</span>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="#">Mangga Harum Manis</a></h4>
                                <div class="product-price">Rp 25.000 <span class="unit">/kg</span></div>
                                <p class="product-short-desc">Mangga matang pohon dengan rasa manis dan aroma khas.</p>
                                <button class="btn-farm-modern-secondary btn-add-to-cart"><i class="fas fa-shopping-cart me-2"></i>Keranjang</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-catalog-item">
                            <div class="product-image-container">
                                <img src="https://placehold.co/400x300/FFB300/2C3333?text=Jeruk+Medan+Manis" alt="[Gambar Jeruk Medan Manis]">
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="#">Jeruk Medan Manis</a></h4>
                                <div class="product-price">Rp 22.000 <span class="unit">/kg</span></div>
                                <p class="product-short-desc">Jeruk Medan pilihan dengan rasa manis segar dan kaya vitamin C.</p>
                                <button class="btn-farm-modern-secondary btn-add-to-cart"><i class="fas fa-shopping-cart me-2"></i>Keranjang</button>
                            </div>
                        </div>
                    </div>
                    <?php /* Komentar PHP: Tambahkan produk buah lainnya jika ada */ ?>
                </div>
            </div>

            <?php /* Komentar PHP: Tab Pane untuk UMBI-UMBIAN */ ?>
            <div class="tab-pane fade" id="pane-umbi" role="tabpanel" aria-labelledby="filter-umbi-tab">
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-catalog-item">
                            <div class="product-image-container">
                                <img src="https://placehold.co/400x300/607D8B/FFFFFF?text=Kentang+Dieng" alt="[Gambar Kentang Dieng]">
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="#">Kentang Dieng Super</a></h4>
                                <div class="product-price">Rp 18.000 <span class="unit">/kg</span></div>
                                <p class="product-short-desc">Kentang berkualitas dari dataran tinggi Dieng, cocok untuk berbagai masakan.</p>
                                <button class="btn-farm-modern-secondary btn-add-to-cart"><i class="fas fa-shopping-cart me-2"></i>Keranjang</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-catalog-item">
                            <div class="product-image-container">
                                <img src="https://placehold.co/400x300/607D8B/FFFFFF?text=Ubi+Cilembu" alt="[Gambar Ubi Cilembu]">
                                <span class="product-badge">Khas</span>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="#">Ubi Cilembu Madu</a></h4>
                                <div class="product-price">Rp 20.000 <span class="unit">/kg</span></div>
                                <p class="product-short-desc">Ubi Cilembu asli, manis alami seperti madu saat dipanggang.</p>
                                <button class="btn-farm-modern-secondary btn-add-to-cart"><i class="fas fa-shopping-cart me-2"></i>Keranjang</button>
                            </div>
                        </div>
                    </div>
                    <?php /* Komentar PHP: Tambahkan produk umbi lainnya jika ada */ ?>
                </div>
            </div>

            <?php /* Komentar PHP: Tab Pane untuk PRODUK OLAHAN */ ?>
            <div class="tab-pane fade" id="pane-olahan" role="tabpanel" aria-labelledby="filter-olahan-tab">
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-catalog-item">
                            <div class="product-image-container">
                                <img src="https://placehold.co/400x300/2E7D32/FFFFFF?text=Selai+Stroberi+Alami" alt="[Gambar Selai Stroberi Alami]">
                                <span class="product-badge">Homemade</span>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="#">Selai Stroberi Alami</a></h4>
                                <div class="product-price">Rp 35.000 <span class="unit">/jar</span></div>
                                <p class="product-short-desc">Selai stroberi dibuat dari buah segar pilihan tanpa pengawet.</p>
                                <button class="btn-farm-modern-secondary btn-add-to-cart"><i class="fas fa-shopping-cart me-2"></i>Keranjang</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-catalog-item">
                            <div class="product-image-container">
                                <img src="https://placehold.co/400x300/2E7D32/FFFFFF?text=Madu+Hutan+Murni" alt="[Gambar Madu Hutan Murni]">
                                <span class="product-badge">Alami</span>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="#">Madu Hutan Murni</a></h4>
                                <div class="product-price">Rp 75.000 <span class="unit">/botol</span></div>
                                <p class="product-short-desc">Madu hutan asli dengan berbagai manfaat kesehatan, dipanen secara lestari.</p>
                                <button class="btn-farm-modern-secondary btn-add-to-cart"><i class="fas fa-shopping-cart me-2"></i>Keranjang</button>
                            </div>
                        </div>
                    </div>
                    <?php /* Komentar PHP: Tambahkan produk olahan lainnya jika ada */ ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Komentar JavaScript: Bootstrap JS sudah menangani fungsionalitas tab.
        // Tidak ada JavaScript tambahan yang diperlukan untuk tab dasar ini berfungsi.
        // Jika Anda ingin menggunakan Isotope untuk filtering yang lebih canggih,
        // maka Anda perlu menyertakan library Isotope dan skrip inisialisasinya.
        // Untuk saat ini, kita mengandalkan tab Bootstrap.

        // Komentar JavaScript: Refresh AOS ketika tab berganti agar animasi item di tab baru berjalan
        const productTabLinks = document.querySelectorAll('#productFilter .nav-link');
        productTabLinks.forEach(link => {
            link.addEventListener('shown.bs.tab', function() { // Event 'shown.bs.tab' dari Bootstrap
                if (typeof AOS !== 'undefined') {
                    AOS.refresh();
                }
            });
        });
    });
</script>