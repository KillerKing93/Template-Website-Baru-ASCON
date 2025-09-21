<?php // File: components_econ_v2/services_econ_v2.php - Layanan Vertex Capital Partners 
?>
<style>
    /* Styles untuk Layanan Section Vertex Capital Partners */
    #servicesVertex {
        background-color: var(--bg-light-vertex);
        /* Bisa juga --card-bg-light-vertex jika ingin sedikit beda dari body */
    }

    body.dark-mode #servicesVertex {
        background-color: var(--bg-dark-vertex);
    }

    .service-card-vertex {
        background-color: var(--card-bg-light-vertex);
        border: 1px solid var(--border-light-vertex);
        border-radius: 8px;
        padding: 30px 25px;
        text-align: left;
        /* Konten rata kiri */
        transition: all 0.35s cubic-bezier(0.25, 0.8, 0.25, 1);
        /* Transisi lebih smooth */
        height: 100%;
        display: flex;
        flex-direction: column;
        box-shadow: 0 7px 20px rgba(var(--primary-vertex-rgb), 0.05);
        /* Shadow lebih halus */
        position: relative;
        overflow: hidden;
        /* Untuk efek pseudo-element */
    }

    body.dark-mode .service-card-vertex {
        background-color: var(--card-bg-dark-vertex);
        border-color: var(--border-dark-vertex);
        box-shadow: 0 7px 20px rgba(var(--primary-vertex-dark-rgb), 0.07);
    }

    /* Efek garis diagonal di background card saat hover */
    .service-card-vertex::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        /* Mulai dari luar kiri */
        width: 70%;
        /* Lebar garis */
        height: 150%;
        /* Tinggi agar bisa diagonal penuh */
        background: linear-gradient(45deg, rgba(var(--secondary-vertex-rgb), 0.08) 25%,
                transparent 25%, transparent 50%,
                rgba(var(--secondary-vertex-rgb), 0.08) 50%,
                rgba(var(--secondary-vertex-rgb), 0.08) 75%,
                transparent 75%, transparent 100%);
        background-size: 30px 30px;
        /* Ukuran pattern garis */
        transform: skewX(-25deg) translateX(0);
        /* Miringkan dan posisikan */
        transition: transform 0.6s cubic-bezier(0.25, 0.8, 0.25, 1);
        z-index: 0;
        /* Di belakang konten */
        opacity: 0;
    }

    body.dark-mode .service-card-vertex::before {
        background: linear-gradient(45deg, rgba(var(--secondary-vertex-dark-rgb), 0.1) 25%,
                transparent 25%, transparent 50%,
                rgba(var(--secondary-vertex-dark-rgb), 0.1) 50%,
                rgba(var(--secondary-vertex-dark-rgb), 0.1) 75%,
                transparent 75%, transparent 100%);
        background-size: 30px 30px;
    }


    .service-card-vertex:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 30px rgba(var(--primary-vertex-rgb), 0.1);
        border-color: var(--primary-vertex);
    }

    .service-card-vertex:hover::before {
        transform: skewX(-25deg) translateX(180%);
        /* Geser garis ke kanan saat hover */
        opacity: 1;
    }

    body.dark-mode .service-card-vertex:hover {
        box-shadow: 0 12px 30px rgba(var(--primary-vertex-dark-rgb), 0.12);
        border-color: var(--primary-vertex-dark);
    }

    .service-card-vertex .service-icon-vertex {
        font-size: 2.5rem;
        color: var(--primary-vertex);
        margin-bottom: 18px;
        width: 60px;
        height: 60px;
        line-height: 60px;
        text-align: center;
        border-radius: 50%;
        background-color: rgba(var(--primary-vertex-rgb), 0.08);
        transition: all 0.3s ease;
        position: relative;
        z-index: 1;
        /* Di atas pseudo-element */
    }

    body.dark-mode .service-card-vertex .service-icon-vertex {
        color: var(--primary-vertex-dark);
        background-color: rgba(var(--primary-vertex-dark-rgb), 0.1);
    }

    .service-card-vertex:hover .service-icon-vertex {
        color: #fff;
        background-color: var(--secondary-vertex);
        transform: scale(1.05) rotate(5deg);
        /* Efek ikon lebih dinamis */
    }

    body.dark-mode .service-card-vertex:hover .service-icon-vertex {
        background-color: var(--secondary-vertex-dark);
        color: var(--card-bg-dark-vertex);
    }

    .service-card-vertex h4.service-title-vertex {
        font-size: 1.35rem;
        font-weight: 700;
        /* Raleway lebih tebal */
        font-family: 'Raleway', sans-serif;
        margin-bottom: 10px;
        color: var(--text-light-vertex);
        line-height: 1.35;
        position: relative;
        z-index: 1;
        text-transform: none;
        /* Judul layanan tidak uppercase */
        letter-spacing: 0.1px;
    }

    body.dark-mode .service-card-vertex h4.service-title-vertex {
        color: var(--text-dark-vertex);
    }

    .service-card-vertex p.service-desc-vertex {
        font-size: 0.92rem;
        color: var(--muted-text-light-vertex);
        line-height: 1.65;
        margin-bottom: 20px;
        flex-grow: 1;
        position: relative;
        z-index: 1;
    }

    body.dark-mode .service-card-vertex p.service-desc-vertex {
        color: var(--muted-text-dark-vertex);
    }

    .service-card-vertex .btn-service-details-vertex {
        margin-top: auto;
        font-size: 0.85rem;
        padding: 0.5rem 1rem;
        align-self: flex-start;
        /* Tombol rata kiri */
        position: relative;
        z-index: 1;
        /* Menggunakan class global .btn-vertex-secondary */
    }
</style>

<section id="servicesVertex" class="services-vertex-v2 section-vertex">
    <div class="container">
        <div class="section-title-vertex" data-aos="fade-up">
            <h2>Solusi Investasi & Pertumbuhan Strategis</h2>
            <p class="subtitle-vertex">Kami menawarkan spektrum layanan komprehensif yang dirancang untuk memaksimalkan potensi finansial dan pertumbuhan bisnis Anda.</p>
        </div>

        <div class="row gy-4 justify-content-center">
            <?php
            $services_items_vertex_v2 = [
                [
                    "icon" => "fas fa-chart-bar", // Ikon untuk analisis pasar
                    "title" => "Analisis Pasar & Riset Investasi",
                    "description" => "Identifikasi peluang investasi yang prospektif melalui riset pasar mendalam dan analisis data kuantitatif dan kualitatif.",
                    "aos_delay" => "100"
                ],
                [
                    "icon" => "fas fa-users-cog", // Ikon untuk manajemen portofolio
                    "title" => "Manajemen Portofolio Aktif",
                    "description" => "Pengelolaan portofolio investasi yang dinamis dan adaptif untuk optimalisasi return dan mitigasi risiko sesuai profil Anda.",
                    "aos_delay" => "200"
                ],
                [
                    "icon" => "fas fa-lightbulb", // Ikon untuk konsultasi strategis
                    "title" => "Konsultasi Strategi Pertumbuhan",
                    "description" => "Pengembangan strategi bisnis dan keuangan jangka panjang untuk ekspansi pasar, merger, akuisisi, dan peningkatan valuasi.",
                    "aos_delay" => "300"
                ],
                [
                    "icon" => "fas fa-shield-alt", // Ikon untuk manajemen risiko
                    "title" => "Manajemen Risiko Keuangan",
                    "description" => "Solusi komprehensif untuk mengidentifikasi, menganalisis, dan mengelola berbagai risiko finansial yang dihadapi perusahaan.",
                    "aos_delay" => "100"
                ],
                [
                    "icon" => "fas fa-seedling", // Ikon untuk pendanaan modal ventura
                    "title" => "Pendanaan Modal Ventura & Private Equity",
                    "description" => "Menghubungkan bisnis inovatif dengan sumber pendanaan strategis untuk akselerasi pertumbuhan dan pengembangan skala.",
                    "aos_delay" => "200"
                ],
                [
                    "icon" => "fas fa-landmark", // Ikon untuk perencanaan suksesi
                    "title" => "Perencanaan Suksesi & Kekayaan",
                    "description" => "Strategi pengelolaan kekayaan dan perencanaan suksesi bisnis yang terstruktur untuk keberlanjutan dan warisan jangka panjang.",
                    "aos_delay" => "300"
                ]
            ];

            foreach ($services_items_vertex_v2 as $item) :
            ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo htmlspecialchars($item['aos_delay']); ?>">
                    <div class="service-card-vertex">
                        <div class="service-icon-vertex">
                            <i class="<?php echo htmlspecialchars($item['icon']); ?>"></i>
                        </div>
                        <h4 class="service-title-vertex"><?php echo htmlspecialchars($item['title']); ?></h4>
                        <p class="service-desc-vertex"><?php echo htmlspecialchars($item['description']); ?></p>
                        <a href="#contactVertex" class="btn-vertex-secondary btn-service-details-vertex">Diskusi Lebih Lanjut</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof anime !== 'undefined') {
            // Animasi untuk ikon layanan saat card di-hover (jika tidak cukup dengan CSS)
            // AOS sudah menangani animasi masuk. Ini untuk interaksi tambahan.
            // document.querySelectorAll('.service-card-vertex').forEach(card => {
            //     const icon = card.querySelector('.service-icon-vertex');
            //     card.addEventListener('mouseenter', () => {
            //         anime({
            //             targets: icon,
            //             rotate: [-10, 10, 0], // Sedikit goyangan
            //             scale: [1, 1.1, 1],
            //             duration: 400,
            //             easing: 'easeInOutSine'
            //         });
            //     });
            // });
        }
    });
</script>