<?php // File: components/produk_digital_pertanian.php 
?>
<style>
    /* Produk Digital Pertanian Styles */
    #produkDigitalPertanian {
        background-color: var(--bg-dark-farm5);
        /* Dominan gelap */
        color: var(--text-dark-farm5);
        border-bottom: 1px solid var(--border-dark-farm5);
        padding-bottom: 60px;
        /* Kurangi padding bawah jika ada CTA setelahnya */
    }

    body:not(.dark-mode) #produkDigitalPertanian {
        background-color: #F0F4F8;
        /* Abu-abu sangat muda kebiruan */
        color: var(--text-light-farm5);
        border-bottom-color: var(--border-light-farm5);
    }

    body:not(.dark-mode) #produkDigitalPertanian .section-title-futura-farm h2 {
        color: var(--primary-futura-farm);
    }

    body:not(.dark-mode) #produkDigitalPertanian .section-title-futura-farm h2 .highlight-yellow {
        color: var(--secondary-futura-farm);
    }

    body:not(.dark-mode) #produkDigitalPertanian .section-title-futura-farm .title-deco-line {
        background: linear-gradient(90deg, var(--primary-futura-farm), var(--secondary-futura-farm));
    }

    body:not(.dark-mode) #produkDigitalPertanian .section-title-futura-farm p.subtitle-futura-farm {
        color: var(--muted-text-light-farm5);
    }


    .digital-product-card {
        background-color: var(--card-bg-dark-farm5);
        border-radius: 10px;
        padding: 0;
        /* Padding diatur oleh inner content */
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        transition: all 0.4s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid var(--border-dark-farm5);
    }

    body:not(.dark-mode) .digital-product-card {
        background-color: var(--card-bg-light-farm5);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        border-color: var(--border-light-farm5);
    }

    .digital-product-card:hover {
        transform: scale(1.03);
        box-shadow: 0 12px 35px rgba(var(--secondary-futura-farm-dark-rgb, 243, 211, 74), 0.2);
        border-color: var(--secondary-futura-farm-dark);
    }

    body:not(.dark-mode) .digital-product-card:hover {
        box-shadow: 0 12px 35px rgba(var(--secondary-futura-farm-rgb, 240, 200, 8), 0.2);
        border-color: var(--secondary-futura-farm);
    }

    /* Komentar CSS: Variabel RGB untuk secondary-futura-farm-dark & secondary-futura-farm */
    body.dark-mode {
        --secondary-futura-farm-dark-rgb: 243, 211, 74;
    }

    body {
        --secondary-futura-farm-rgb: 240, 200, 8;
    }


    .digital-product-card .product-header-futura {
        padding: 25px;
        border-bottom: 1px solid var(--border-dark-farm5);
        text-align: center;
        background: linear-gradient(135deg, rgba(var(--primary-futura-farm-dark-rgb, 0, 203, 169), 0.15), rgba(var(--accent-futura-farm-dark-rgb, 3, 218, 197), 0.1));
        border-radius: 10px 10px 0 0;
    }

    body:not(.dark-mode) .digital-product-card .product-header-futura {
        border-bottom-color: var(--border-light-farm5);
        background: linear-gradient(135deg, rgba(var(--primary-futura-farm-rgb, 0, 168, 150), 0.1), rgba(var(--accent-futura-farm-rgb, 2, 195, 154), 0.05));
    }


    .digital-product-card .product-icon-digital {
        font-size: 3rem;
        color: var(--secondary-futura-farm-dark);
        /* Warna ikon */
        margin-bottom: 10px;
    }

    body:not(.dark-mode) .digital-product-card .product-icon-digital {
        color: var(--secondary-futura-farm);
    }

    .digital-product-card h5.product-name-digital {
        font-family: 'Exo 2', sans-serif;
        font-size: 1.6rem;
        font-weight: 700;
        color: var(--text-dark-farm5);
        /* Default dark mode */
    }

    body:not(.dark-mode) .digital-product-card h5.product-name-digital {
        color: var(--text-light-farm5);
    }

    .digital-product-card .product-features-digital {
        padding: 25px;
        flex-grow: 1;
    }

    .digital-product-card .product-features-digital ul {
        list-style: none;
        padding-left: 0;
        margin-bottom: 20px;
    }

    .digital-product-card .product-features-digital ul li {
        margin-bottom: 10px;
        color: var(--muted-text-dark-farm5);
        /* Default dark mode */
        font-size: 0.95rem;
        display: flex;
        align-items: flex-start;
    }

    body:not(.dark-mode) .digital-product-card .product-features-digital ul li {
        color: var(--muted-text-light-farm5);
    }

    .digital-product-card .product-features-digital ul li i {
        color: var(--primary-futura-farm-dark);
        /* Warna ikon list */
        margin-right: 10px;
        font-size: 0.9rem;
        /* Ukuran ikon list */
        margin-top: 4px;
    }

    body:not(.dark-mode) .digital-product-card .product-features-digital ul li i {
        color: var(--primary-futura-farm);
    }

    .digital-product-card .product-footer-digital {
        padding: 0 25px 25px 25px;
        text-align: center;
    }
</style>

<section id="produkDigitalPertanian" class="section-futura-farm">
    <div class="container">
        <div class="section-title-futura-farm" data-aos="fade-up">
            <h2>Platform & <span class="highlight-yellow">Produk Digital</span></h2>
            <div class="title-deco-line"></div>
            <p class="subtitle-futura-farm">Solusi Perangkat Lunak Inovatif Kami untuk Mendukung Ekosistem Pertanian Modern.</p>
        </div>

        <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="digital-product-card">
                    <div class="product-header-futura">
                        <div class="product-icon-digital"><i class="fas fa-tractor"></i></div>
                        <h5 class="product-name-digital">AgriManage Pro</h5>
                    </div>
                    <div class="product-features-digital">
                        <ul>
                            <li><i class="fas fa-check-circle"></i> Manajemen Lahan & Jadwal Tanam</li>
                            <li><i class="fas fa-check-circle"></i> Pemantauan Pertumbuhan Tanaman</li>
                            <li><i class="fas fa-check-circle"></i> Integrasi Data Sensor IoT</li>
                            <li><i class="fas fa-check-circle"></i> Laporan Analitik Produktivitas</li>
                        </ul>
                    </div>
                    <div class="product-footer-digital">
                        <a href="#" class="btn-futura-secondary">Demo Platform</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="digital-product-card">
                    <div class="product-header-futura">
                        <div class="product-icon-digital"><i class="fas fa-chart-network"></i></div> <?php /* Ikon baru */ ?>
                        <h5 class="product-name-digital">MarketLink Connect</h5>
                    </div>
                    <div class="product-features-digital">
                        <ul>
                            <li><i class="fas fa-check-circle"></i> Platform E-commerce Hasil Panen</li>
                            <li><i class="fas fa-check-circle"></i> Koneksi Petani & Pembeli Langsung</li>
                            <li><i class="fas fa-check-circle"></i> Manajemen Inventaris & Logistik</li>
                            <li><i class="fas fa-check-circle"></i> Sistem Pembayaran Aman</li>
                        </ul>
                    </div>
                    <div class="product-footer-digital">
                        <a href="#" class="btn-futura-secondary">Jelajahi Pasar</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="digital-product-card">
                    <div class="product-header-futura">
                        <div class="product-icon-digital"><i class="fas fa-graduation-cap"></i></div>
                        <h5 class="product-name-digital">AgriLearn Academy</h5>
                    </div>
                    <div class="product-features-digital">
                        <ul>
                            <li><i class="fas fa-check-circle"></i> Modul Pelatihan Agroteknologi</li>
                            <li><i class="fas fa-check-circle"></i> Video Tutorial & Studi Kasus</li>
                            <li><i class="fas fa-check-circle"></i> Forum Diskusi Komunitas</li>
                            <li><i class="fas fa-check-circle"></i> Sertifikasi Keahlian Digital</li>
                        </ul>
                    </div>
                    <div class="product-footer-digital">
                        <a href="#" class="btn-futura-secondary">Mulai Belajar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>