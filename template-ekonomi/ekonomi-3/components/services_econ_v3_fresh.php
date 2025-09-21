<?php // File: components_econ_v3_fresh/services_econ_v3_fresh.php - Layanan Aetherium Finance (Fresh) 
?>
<style>
    /* Styles untuk Layanan Section Aetherium Finance */
    #servicesAether {
        background-color: var(--bg-light-aether);
        border-bottom: 1px solid var(--border-light-aether);
        padding-top: 90px;
        padding-bottom: 90px;
    }

    body.dark-mode #servicesAether {
        background-color: var(--bg-dark-aether);
        border-bottom: 1px solid var(--border-dark-aether);
    }

    .service-card-aether {
        background-color: var(--card-bg-light-aether);
        border: 1px solid var(--border-light-aether);
        border-radius: 10px;
        padding: 30px 25px;
        text-align: left;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        height: 100%;
        display: flex;
        flex-direction: column;
        box-shadow: 0 6px 18px rgba(var(--primary-aether-rgb), 0.05);
        position: relative;
        overflow: hidden;
    }

    body.dark-mode .service-card-aether {
        background-color: var(--card-bg-dark-aether);
        border-color: var(--border-dark-aether);
        box-shadow: 0 6px 18px rgba(var(--primary-aether-dark-rgb), 0.07);
    }

    .service-card-aether::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background-image:
            radial-gradient(circle at center, rgba(var(--accent-aether-rgb), 0.06) 0.7px, transparent 1.1px),
            radial-gradient(circle at center, rgba(var(--secondary-aether-rgb), 0.04) 0.7px, transparent 1.1px);
        background-size: 22px 22px, 32px 32px;
        background-position: 0 0, 10px 10px;
        opacity: 0;
        transform: scale(0.55);
        transition: opacity 0.55s ease, transform 0.55s ease;
        z-index: 0;
        pointer-events: none;
    }

    body.dark-mode .service-card-aether::before {
        background-image:
            radial-gradient(circle at center, rgba(var(--accent-aether-dark-rgb), 0.08) 0.7px, transparent 1.1px),
            radial-gradient(circle at center, rgba(var(--secondary-aether-dark-rgb), 0.06) 0.7px, transparent 1.1px);
    }

    .service-card-aether:hover {
        transform: translateY(-9px) scale(1.015);
        box-shadow: 0 10px 28px rgba(var(--primary-aether-rgb), 0.09);
        border-color: var(--primary-aether);
    }

    .service-card-aether:hover::before {
        opacity: 1;
        transform: scale(1);
        animation: bgParticleFlowAetherV3Fresh 28s linear infinite;
        /* Nama animasi unik */
    }

    @keyframes bgParticleFlowAetherV3Fresh {

        /* Nama keyframe unik */
        0% {
            background-position: 0 0, 10px 10px;
        }

        100% {
            background-position: 280px 280px, 290px 290px;
        }
    }

    body.dark-mode .service-card-aether:hover {
        box-shadow: 0 10px 28px rgba(var(--primary-aether-dark-rgb), 0.13);
        border-color: var(--primary-aether-dark);
    }

    .service-card-aether .service-icon-aether-wrapper {
        width: 60px;
        height: 60px;
        margin-bottom: 20px;
        border-radius: 7px;
        background: linear-gradient(135deg, var(--primary-aether), var(--secondary-aether));
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 2px 7px rgba(var(--primary-aether-rgb), 0.18);
        transition: all 0.3s ease;
        position: relative;
        z-index: 1;
    }

    body.dark-mode .service-card-aether .service-icon-aether-wrapper {
        background: linear-gradient(135deg, var(--primary-aether-dark), var(--secondary-aether-dark));
        box-shadow: 0 2px 7px rgba(var(--primary-aether-dark-rgb), 0.18);
    }

    .service-card-aether:hover .service-icon-aether-wrapper {
        transform: scale(1.09) rotate(-5deg);
        box-shadow: 0 4px 10px rgba(var(--primary-aether-rgb), 0.25);
    }

    body.dark-mode .service-card-aether:hover .service-icon-aether-wrapper {
        box-shadow: 0 4px 10px rgba(var(--primary-aether-dark-rgb), 0.25);
    }

    .service-card-aether .service-icon-aether-wrapper i {
        font-size: 1.8rem;
        color: #FFFFFF;
    }

    .service-card-aether h3.service-title-aether {
        font-size: 1.3rem;
        font-weight: 600;
        /* Sedikit lebih ringan */
        font-family: 'Source Code Pro', monospace;
        margin-bottom: 8px;
        color: var(--text-light-aether);
        line-height: 1.3;
        position: relative;
        z-index: 1;
        letter-spacing: -0.1px;
    }

    body.dark-mode .service-card-aether h3.service-title-aether {
        color: var(--text-dark-aether);
    }

    .service-card-aether:hover h3.service-title-aether {
        color: var(--primary-aether);
    }

    body.dark-mode .service-card-aether:hover h3.service-title-aether {
        color: var(--primary-aether-dark);
    }

    .service-card-aether p.service-desc-aether {
        font-size: 0.88rem;
        color: var(--muted-text-light-aether);
        line-height: 1.55;
        margin-bottom: 18px;
        flex-grow: 1;
        position: relative;
        z-index: 1;
    }

    body.dark-mode .service-card-aether p.service-desc-aether {
        color: var(--muted-text-dark-aether);
    }

    .service-card-aether .btn-service-details-aether {
        margin-top: auto;
        font-size: 0.8rem;
        padding: 0.45rem 1rem;
        align-self: flex-start;
        position: relative;
        z-index: 1;
        font-weight: 600;
    }
</style>

<section id="servicesAether" class="services-aether-v3 section-aether">
    <div class="container">
        <div class="section-title-aether" data-aos="fade-up">
            <h2>[ Solusi FinTech Inovatif ]</h2>
            <p class="subtitle-aether">Platform dan Layanan Canggih untuk Mentransformasi Interaksi Keuangan Anda di Era Digital.</p>
        </div>

        <div class="row gy-4 justify-content-center">
            <?php
            $services_items_aether_v3_fresh = [ // Nama variabel array unik
                [
                    "icon" => "fas fa-cubes-stacked",
                    "title" => "Platform Keuangan Terdesentralisasi (DeFi)",
                    "description" => "Akses layanan pinjam-meminjam, staking, dan yield farming yang aman dan transparan melalui protokol DeFi inovatif kami.",
                    "aos_delay" => "100"
                ],
                [
                    "icon" => "fas fa-hexagon-nodes-bolt",
                    "title" => "Analitik Investasi Berbasis AI",
                    "description" => "Manfaatkan kecerdasan buatan untuk analisis pasar prediktif, optimasi portofolio, dan identifikasi peluang investasi cerdas.",
                    "aos_delay" => "200"
                ],
                [
                    "icon" => "fas fa-fingerprint",
                    "title" => "Solusi Identitas Digital & Keamanan Aset",
                    "description" => "Perlindungan aset digital Anda dengan sistem identitas terverifikasi dan protokol keamanan multi-layer termutakhir.",
                    "aos_delay" => "300"
                ],
                [
                    "icon" => "fas fa-wallet",
                    "title" => "Dompet Digital Multi-Aset Cerdas",
                    "description" => "Kelola beragam aset kripto dan digital Anda dengan aman dan mudah melalui platform dompet pintar kami yang intuitif.",
                    "aos_delay" => "100"
                ],
                [
                    "icon" => "fas fa-network-wired",
                    "title" => "Integrasi API & Ekosistem Terbuka",
                    "description" => "Hubungkan layanan keuangan Anda dengan ekosistem global melalui API developer kami yang fleksibel dan kuat.",
                    "aos_delay" => "200"
                ],
                [
                    "icon" => "fas fa-chart-area",
                    "title" => "Platform Perdagangan Algoritmik",
                    "description" => "Otomatisasi strategi perdagangan Anda dengan bot cerdas dan algoritma kustom untuk efisiensi dan profitabilitas maksimal.",
                    "aos_delay" => "300"
                ]
            ];

            foreach ($services_items_aether_v3_fresh as $item) :
            ?>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-delay="<?php echo htmlspecialchars($item['aos_delay']); ?>">
                    <div class="service-card-aether">
                        <div class="service-icon-aether-wrapper">
                            <i class="<?php echo htmlspecialchars($item['icon']); ?>"></i>
                        </div>
                        <h3 class="service-title-aether"><?php echo htmlspecialchars($item['title']); ?></h3>
                        <p class="service-desc-aether"><?php echo htmlspecialchars($item['description']); ?></p>
                        <a href="#contactAether" class="btn-aether-secondary btn-service-details-aether">Pelajari Lebih Lanjut <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
    // Komentar JavaScript: Script khusus untuk Services Section Aetherium (Fresh)
    // AOS sudah menangani animasi masuk.
    // Efek hover kompleks sudah dihandle oleh CSS.
</script>