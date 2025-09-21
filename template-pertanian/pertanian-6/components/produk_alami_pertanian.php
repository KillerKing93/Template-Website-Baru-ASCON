<?php // File: components/produk_alami_pertanian.php 
?>
<style>
    /* Produk Alami Pertanian Styles */
    #produkAlamiPertanian {
        background-color: var(--bg-light-farm5);
        /* Default light */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #produkAlamiPertanian {
        background-color: var(--bg-dark-farm5);
    }

    .product-natural-card {
        background-color: var(--card-bg-light-farm5);
        border-radius: 10px;
        box-shadow: 0 7px 22px rgba(0, 0, 0, 0.07);
        overflow: hidden;
        transition: all 0.4s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid var(--border-light-farm5);
    }

    body.dark-mode .product-natural-card {
        background-color: var(--card-bg-dark-farm5);
        box-shadow: 0 7px 22px rgba(0, 0, 0, 0.25);
        border-color: var(--border-dark-farm5);
    }

    .product-natural-card:hover {
        transform: translateY(-8px) scale(1.01);
        box-shadow: 0 10px 30px rgba(218, 165, 32, 0.18);
        /* var(--secondary-eco-farm) dengan alpha */
    }

    body.dark-mode .product-natural-card:hover {
        box-shadow: 0 10px 30px rgba(240, 230, 140, 0.22);
        /* var(--secondary-eco-farm-dark) dengan alpha */
    }

    .product-natural-card .product-image-natural {
        height: 260px;
        /* Tinggi gambar produk */
        overflow: hidden;
        position: relative;
    }

    .product-natural-card .product-image-natural img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .product-natural-card:hover .product-image-natural img {
        transform: scale(1.09);
    }

    .product-natural-card .product-fresh-badge {
        /* Badge "Segar dari Ladang" */
        position: absolute;
        bottom: 10px;
        right: 10px;
        background-color: var(--primary-eco-farm);
        color: #fff;
        padding: 5px 10px;
        font-size: 0.7rem;
        font-weight: 600;
        border-radius: 4px;
        text-transform: uppercase;
        letter-spacing: 0.3px;
        z-index: 1;
        transition: background-color 0.3s ease;
    }

    body.dark-mode .product-natural-card .product-fresh-badge {
        background-color: var(--primary-eco-farm-dark);
    }


    .product-natural-card .product-content-natural {
        padding: 25px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .product-natural-card h4.product-name-natural {
        font-family: 'Lora', serif;
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 8px;
        line-height: 1.3;
    }

    .product-natural-card p.product-origin-natural {
        /* Asal produk */
        font-size: 0.85rem;
        color: var(--muted-text-light-farm5);
        margin-bottom: 15px;
        font-style: italic;
        transition: color 0.3s ease;
    }

    body.dark-mode .product-natural-card p.product-origin-natural {
        color: var(--muted-text-dark-farm5);
    }

    .product-natural-card p.product-origin-natural i {
        margin-right: 5px;
    }

    .product-natural-card .product-price-natural {
        font-size: 1.3rem;
        font-weight: 700;
        color: var(--primary-eco-farm);
        margin-bottom: 20px;
        font-family: 'Nunito Sans', sans-serif;
        transition: color 0.3s ease;
    }

    body.dark-mode .product-natural-card .product-price-natural {
        color: var(--primary-eco-farm-dark);
    }

    .product-natural-card .product-price-natural .unit {
        font-size: 0.9rem;
        font-weight: 400;
        color: var(--muted-text-light-farm5);
    }

    body.dark-mode .product-natural-card .product-price-natural .unit {
        color: var(--muted-text-dark-farm5);
    }

    .product-natural-card .btn-order-natural {
        margin-top: auto;
        /* Tombol di bawah */
        width: 100%;
        /* Tombol full width */
    }
</style>

<section id="produkAlamiPertanian" class="section-ecosymphony">
    <div class="container">
        <div class="section-title-ecosymphony" data-aos="fade-up">
            <h2>Produk <span style="color:var(--secondary-eco-farm);">Alami</span> Pilihan</h2>
            <p class="subtitle-ecosymphony">Kebaikan Alam yang Dipanen dengan Penuh Kasih Sayang untuk Anda.</p>
        </div>

        <div class="row gy-4">
            <?php
            // Komentar PHP: Data produk alami
            $produk_alami = [
                [
                    "nama" => "Madu Murni EcoSymphony",
                    "asal" => "Dari lebah hutan sekitar ladang",
                    "harga" => "Rp 95.000",
                    "unit" => "/botol 350ml",
                    "img" => "https://placehold.co/600x400/DAA520/382E2E?text=Madu+Murni+EcoSymphony&font=lora",
                    "delay" => 100
                ],
                [
                    "nama" => "Beras Organik Mentik Wangi",
                    "asal" => "Sawah organik EcoSymphony",
                    "harga" => "Rp 75.000",
                    "unit" => "/5kg",
                    "img" => "https://placehold.co/600x400/556B2F/FFFFFF?text=Beras+Mentik+Wangi&font=lora",
                    "delay" => 200
                ],
                [
                    "nama" => "Aneka Sayuran Daun Segar",
                    "asal" => "Kebun hidroponik & organik kami",
                    "harga" => "Mulai Rp 10.000",
                    "unit" => "/ikat",
                    "img" => "https://placehold.co/600x400/A0522D/FFFFFF?text=Sayuran+Daun+Segar&font=lora",
                    "delay" => 300
                ],
            ];

            foreach ($produk_alami as $produk) : ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo $produk['delay']; ?>">
                    <div class="product-natural-card">
                        <div class="product-image-natural">
                            <img src="<?php echo $produk['img']; ?>" alt="[Gambar <?php echo htmlspecialchars($produk['nama']); ?>]">
                            <span class="product-fresh-badge">Segar dari Ladang</span>
                        </div>
                        <div class="product-content-natural">
                            <h4 class="product-name-natural"><?php echo htmlspecialchars($produk['nama']); ?></h4>
                            <p class="product-origin-natural"><i class="fas fa-map-marker-alt"></i> <?php echo htmlspecialchars($produk['asal']); ?></p>
                            <div class="product-price-natural">
                                <?php echo htmlspecialchars($produk['harga']); ?> <span class="unit"><?php echo htmlspecialchars($produk['unit']); ?></span>
                            </div>
                            <a href="#" class="btn-eco-primary btn-order-natural">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>