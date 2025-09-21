<?php // File: components_econ_v1/services_corp_finance_v1.php - Layanan Perusahaan Ekonomi (Perbaikan V2) 
?>
<style>
    /* Styles untuk Layanan Section Perusahaan Ekonomi */
    #servicesCorpFinance {
        background-color: var(--bg-light-econ);
    }

    body.dark-mode #servicesCorpFinance {
        background-color: var(--bg-dark-econ);
    }

    .service-card-econ {
        background-color: var(--card-bg-light-econ);
        border: 1px solid var(--border-light-econ);
        border-radius: 8px;
        /* Radius sedikit lebih kecil untuk tampilan lebih tajam */
        padding: 30px 25px;
        text-align: center;
        transition: all 0.3s ease-in-out;
        /* Transisi lebih halus */
        height: 100%;
        display: flex;
        flex-direction: column;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    body.dark-mode .service-card-econ {
        background-color: var(--card-bg-dark-econ);
        border-color: var(--border-dark-econ);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.12);
    }

    .service-card-econ:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 25px rgba(var(--primary-econ-rgb), 0.1);
        /* Shadow lebih jelas saat hover */
        border-color: var(--primary-econ);
    }

    body.dark-mode .service-card-econ:hover {
        box-shadow: 0 10px 25px rgba(var(--primary-econ-dark-rgb), 0.15);
        border-color: var(--primary-econ-dark);
    }

    .service-card-econ .service-icon-econ {
        font-size: 2.6rem;
        color: var(--primary-econ);
        margin-bottom: 18px;
        /* Margin disesuaikan */
        line-height: 1;
        display: inline-block;
        width: 65px;
        height: 65px;
        line-height: 65px;
        border-radius: 50%;
        background-color: rgba(var(--primary-econ-rgb), 0.07);
        transition: all 0.3s ease;
    }

    body.dark-mode .service-card-econ .service-icon-econ {
        color: var(--primary-econ-dark);
        background-color: rgba(var(--primary-econ-dark-rgb), 0.1);
    }

    .service-card-econ:hover .service-icon-econ {
        color: #fff;
        background-color: var(--secondary-econ);
        transform: scale(1.08) rotate(-6deg);
        /* Efek ikon lebih dinamis */
    }

    body.dark-mode .service-card-econ:hover .service-icon-econ {
        background-color: var(--secondary-econ-dark);
        color: var(--card-bg-dark-econ);
    }

    .service-card-econ h4.service-title-econ {
        font-size: 1.25rem;
        font-weight: 600;
        font-family: 'Oswald', sans-serif;
        margin-bottom: 10px;
        color: var(--text-light-econ);
        line-height: 1.3;
        /* Spasi baris judul */
    }

    body.dark-mode .service-card-econ h4.service-title-econ {
        color: var(--text-dark-econ);
    }

    .service-card-econ p.service-desc-econ {
        font-size: 0.9rem;
        color: var(--muted-text-light-econ);
        line-height: 1.6;
        margin-bottom: 18px;
        /* Margin disesuaikan */
        flex-grow: 1;
    }

    body.dark-mode .service-card-econ p.service-desc-econ {
        color: var(--muted-text-dark-econ);
    }

    .service-card-econ .btn-service-details {
        margin-top: auto;
        font-size: 0.82rem;
        padding: 0.4rem 0.85rem;
    }
</style>

<section id="services" class="services-econ-v1 section-econ">
    <div class="container">
        <div class="section-title-econ" data-aos="fade-up">
            <h2>Layanan Finansial Komprehensif</h2>
            <p class="subtitle-econ">Kami menyediakan beragam solusi keuangan yang dirancang untuk memenuhi kebutuhan unik bisnis Anda dan mendorong pertumbuhan yang optimal.</p>
        </div>

        <div class="row gy-4 justify-content-center">
            <?php
            $services_items_econ_v1 = [
                [
                    "icon" => "fas fa-chart-pie",
                    "title" => "Analisis & Perencanaan Keuangan",
                    "description" => "Analisis mendalam terhadap kondisi keuangan perusahaan Anda untuk menyusun perencanaan strategis yang efektif dan berkelanjutan.",
                    "aos_delay" => "100"
                ],
                [
                    "icon" => "fas fa-briefcase",
                    "title" => "Konsultasi Investasi & Portofolio",
                    "description" => "Panduan ahli dalam mengelola investasi dan membangun portofolio yang optimal sesuai dengan profil risiko dan tujuan finansial Anda.",
                    "aos_delay" => "150" // Penyesuaian delay
                ],
                [
                    "icon" => "fas fa-balance-scale",
                    "title" => "Manajemen Risiko & Kepatuhan",
                    "description" => "Membantu mengidentifikasi, mengevaluasi, dan memitigasi risiko finansial serta memastikan kepatuhan terhadap regulasi yang berlaku.",
                    "aos_delay" => "200"
                ],
                [
                    "icon" => "fas fa-handshake",
                    "title" => "Pendanaan & Restrukturisasi",
                    "description" => "Solusi pendanaan inovatif dan strategi restrukturisasi utang untuk meningkatkan kesehatan finansial perusahaan Anda.",
                    "aos_delay" => "250"
                ],
                [
                    "icon" => "fas fa-search-dollar",
                    "title" => "Riset Pasar & Valuasi Bisnis",
                    "description" => "Menyediakan riset pasar yang akurat dan layanan valuasi bisnis untuk mendukung keputusan investasi dan strategi pengembangan.",
                    "aos_delay" => "300"
                ],
                [
                    "icon" => "fas fa-cogs",
                    "title" => "Transformasi Keuangan Digital",
                    "description" => "Implementasi teknologi finansial (FinTech) terkini untuk mengoptimalkan proses keuangan dan meningkatkan efisiensi operasional.",
                    "aos_delay" => "350"
                ]
            ];

            foreach ($services_items_econ_v1 as $item) :
            ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo htmlspecialchars($item['aos_delay']); ?>">
                    <div class="service-card-econ">
                        <div class="service-icon-econ">
                            <i class="<?php echo htmlspecialchars($item['icon']); ?>"></i>
                        </div>
                        <h4 class="service-title-econ"><?php echo htmlspecialchars($item['title']); ?></h4>
                        <p class="service-desc-econ"><?php echo htmlspecialchars($item['description']); ?></p>
                        <a href="#contact" class="btn-econ-secondary btn-service-details">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof anime !== 'undefined') {
            // Animasi untuk ikon layanan saat card di-hover (jika tidak menggunakan CSS transition)
            // AOS sudah menangani animasi masuk. Ini untuk interaksi tambahan.
            // document.querySelectorAll('.service-card-econ').forEach(card => {
            //     const icon = card.querySelector('.service-icon-econ');
            //     card.addEventListener('mouseenter', () => {
            //         anime({
            //             targets: icon,
            //             scale: [1, 1.12],
            //             rotate: [-7, 7, -7, 0], 
            //             duration: 350,
            //             easing: 'easeInOutQuad' // Easing yang lebih halus
            //         });
            //     });
            //     card.addEventListener('mouseleave', () => {
            //         anime({
            //             targets: icon,
            //             scale: [1.12, 1],
            //             rotate: 0,
            //             duration: 250,
            //             easing: 'easeInOutQuad'
            //         });
            //     });
            // });
        }
    });
</script>