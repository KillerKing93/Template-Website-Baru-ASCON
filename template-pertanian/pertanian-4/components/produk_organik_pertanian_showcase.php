<?php // File: components/produk_organik_pertanian_showcase.php 
?>
<style>
    /* Produk Organik Pertanian Showcase Styles */
    #produkOrganikPertanianShowcase {
        background-color: var(--bg-light-farm4);
        /* Default light */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #produkOrganikPertanianShowcase {
        background-color: var(--bg-dark-farm4);
    }

    .product-showcase-card {
        background-color: var(--card-bg-light-farm4);
        border-radius: 12px;
        /* Sudut lebih bulat */
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        transition: all 0.4s ease;
        height: 100%;
        border: 1px solid var(--border-light-farm4);
        position: relative;
        /* Untuk badge */
    }

    body.dark-mode .product-showcase-card {
        background-color: var(--card-bg-dark-farm4);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        border-color: var(--border-dark-farm4);
    }

    .product-showcase-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(56, 142, 60, 0.2);
        /* var(--primary-bio-farm) dengan alpha */
    }

    body.dark-mode .product-showcase-card:hover {
        box-shadow: 0 15px 40px rgba(102, 187, 106, 0.25);
        /* var(--primary-bio-farm-dark) dengan alpha */
    }

    .product-showcase-card .product-image-showcase {
        height: 280px;
        /* Tinggi gambar produk */
        overflow: hidden;
    }

    .product-showcase-card .product-image-showcase img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .product-showcase-card:hover .product-image-showcase img {
        transform: scale(1.08) rotate(2deg);
        /* Sedikit rotasi saat hover */
    }

    .product-showcase-card .product-organic-badge {
        /* Badge "100% Organik" */
        position: absolute;
        top: 15px;
        left: 15px;
        background-color: var(--primary-bio-farm);
        color: #fff;
        padding: 6px 12px;
        font-size: 0.75rem;
        font-weight: 700;
        border-radius: 5px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        z-index: 1;
        /* Di atas gambar */
        transition: background-color 0.3s ease;
    }

    body.dark-mode .product-showcase-card .product-organic-badge {
        background-color: var(--primary-bio-farm-dark);
    }


    .product-showcase-card .product-content-showcase {
        padding: 25px;
        text-align: center;
        /* Teks di tengah */
    }

    .product-showcase-card h4.product-name-showcase {
        font-family: 'Nunito', sans-serif;
        font-size: 1.6rem;
        font-weight: 800;
        margin-bottom: 10px;
    }

    .product-showcase-card p.product-desc-showcase {
        font-size: 0.95rem;
        color: var(--muted-text-light-farm4);
        line-height: 1.7;
        margin-bottom: 20px;
        min-height: 70px;
        /* Jaga ruang untuk deskripsi */
        transition: color 0.3s ease;
    }

    body.dark-mode .product-showcase-card p.product-desc-showcase {
        color: var(--muted-text-dark-farm4);
    }

    .product-showcase-card .product-price-showcase {
        font-size: 1.4rem;
        font-weight: 700;
        color: var(--secondary-bio-farm);
        /* Warna harga */
        margin-bottom: 20px;
        font-family: 'Roboto Slab', serif;
        transition: color 0.3s ease;
    }

    body.dark-mode .product-showcase-card .product-price-showcase {
        color: var(--secondary-bio-farm-dark);
    }

    .product-showcase-card .product-price-showcase .unit {
        font-size: 0.9rem;
        font-weight: 400;
    }
</style>

<section id="produkOrganikPertanianShowcase" class="section-bio-farm">
    <div class="container">
        <div class="section-title-bio-farm" data-aos="fade-up">
            <h2>Produk Organik <span class="highlight-accent-bio">Pilihan</span></h2>
            <p class="subtitle-bio-farm">Nikmati Kesegaran Alami dan Kebaikan Murni dari Hasil Pertanian Organik Kami.</p>
        </div>

        <div class="row gy-4">
            <?php
            // Komentar PHP: Data produk organik
            $produk_organik = [
                [
                    "nama" => "Brokoli Hijau Super Organik",
                    "deskripsi" => "Brokoli segar kaya vitamin, ditanam dengan metode organik tanpa pestisida kimia.",
                    "harga" => "Rp 25.000",
                    "unit" => "/kg",
                    "img" => "https://placehold.co/600x400/388E3C/FFFFFF?text=Brokoli+Organik",
                    "delay" => 100
                ],
                [
                    "nama" => "Wortel Manis Organik",
                    "deskripsi" => "Wortel renyah dengan rasa manis alami, sumber beta-karoten terbaik untuk kesehatan mata.",
                    "harga" => "Rp 18.000",
                    "unit" => "/kg",
                    "img" => "https://placehold.co/600x400/FFC107/2D3A3A?text=Wortel+Organik",
                    "delay" => 200
                ],
                [
                    "nama" => "Apel Fuji Organik Premium",
                    "deskripsi" => "Apel Fuji pilihan dengan tekstur renyah dan rasa manis menyegarkan, bebas lilin dan bahan kimia.",
                    "harga" => "Rp 45.000",
                    "unit" => "/kg",
                    "img" => "https://placehold.co/600x400/81D4FA/2D3A3A?text=Apel+Fuji+Organik",
                    "delay" => 300
                ],
            ];

            foreach ($produk_organik as $produk) : ?>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-delay="<?php echo $produk['delay']; ?>">
                    <div class="product-showcase-card">
                        <div class="product-image-showcase">
                            <img src="<?php echo $produk['img']; ?>" alt="[Gambar <?php echo htmlspecialchars($produk['nama']); ?>]">
                            <span class="product-organic-badge">100% Organik</span>
                        </div>
                        <div class="product-content-showcase">
                            <h4 class="product-name-showcase"><?php echo htmlspecialchars($produk['nama']); ?></h4>
                            <p class="product-desc-showcase"><?php echo htmlspecialchars($produk['deskripsi']); ?></p>
                            <div class="product-price-showcase">
                                <?php echo htmlspecialchars($produk['harga']); ?> <span class="unit"><?php echo htmlspecialchars($produk['unit']); ?></span>
                            </div>
                            <a href="#" class="btn-bio-farm-primary">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-5 pt-3" data-aos="fade-up" data-aos-delay="400">
            <a href="#" class="btn-bio-farm-secondary">Lihat Semua Produk Organik</a>
        </div>
    </div>
</section>