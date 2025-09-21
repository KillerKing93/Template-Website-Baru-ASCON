<?php // File: components/services_dynamic_tabs.php 
?>
<style>
    /* Dynamic Tabs Services Component Styles */
    :root {
        /* Pastikan variabel CSS dari index.php bisa diakses */
        --primary-color: #6A11CB;
        --secondary-color: #2575FC;
        --accent-color: #00FFED;
        --card-bg: #1E1E1E;
        --border-color: rgba(0, 255, 237, 0.2);
        --text-color-muted: #B0B0B0;
    }

    #servicesDynamicTabs {
        background-color: var(--dark-bg);
        /* Latar gelap */
        border-bottom: 1px solid var(--border-color);
    }

    .services-tabs-nav .nav-link {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 1.1rem;
        color: var(--text-color-muted);
        background-color: transparent;
        border: 2px solid transparent;
        /* Border awal transparan */
        border-bottom-color: var(--border-color);
        /* Garis bawah tipis */
        border-radius: 8px 8px 0 0;
        /* Sudut atas bulat */
        padding: 15px 25px;
        margin: 0 5px;
        transition: all 0.3s ease;
        position: relative;
        text-align: center;
    }

    .services-tabs-nav .nav-link i {
        /* Ikon di tab */
        margin-right: 10px;
        color: var(--accent-color);
        opacity: 0.7;
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .services-tabs-nav .nav-link.active,
    .services-tabs-nav .nav-link:hover {
        color: #fff;
        background-color: var(--card-bg);
        /* Latar tab aktif */
        border-color: var(--accent-color);
        /* Border aksen saat aktif/hover */
        border-bottom-color: var(--card-bg);
        /* Sembunyikan garis bawah saat aktif */
        transform: translateY(-3px);
        /* Efek angkat sedikit */
        box-shadow: 0 5px 15px rgba(var(--accent-rgb), 0.1);
    }

    .services-tabs-nav .nav-link.active i,
    .services-tabs-nav .nav-link:hover i {
        opacity: 1;
        transform: scale(1.1);
    }

    .services-tab-content .tab-pane {
        padding: 40px;
        background-color: var(--card-bg);
        border-radius: 0 0 15px 15px;
        /* Sudut bawah bulat */
        border: 1px solid var(--border-color);
        border-top: none;
        /* Hapus border atas karena sudah ada di tab nav */
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        min-height: 400px;
        /* Jaga tinggi konsisten */
    }

    .service-content-inner h3 {
        font-size: 2rem;
        color: var(--accent-color);
        margin-bottom: 20px;
        font-weight: 700;
    }

    .service-content-inner p {
        font-size: 1.05rem;
        color: var(--text-color-muted);
        line-height: 1.8;
        margin-bottom: 20px;
    }

    .service-content-inner .service-features {
        list-style: none;
        padding-left: 0;
        margin-top: 25px;
    }

    .service-content-inner .service-features li {
        margin-bottom: 12px;
        color: var(--text-color);
        font-size: 1rem;
        display: flex;
        align-items: center;
    }

    .service-content-inner .service-features i {
        color: var(--accent-color);
        margin-right: 12px;
        font-size: 1.2rem;
    }

    .service-content-inner .service-image {
        border-radius: 10px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        max-height: 300px;
        /* Batasi tinggi gambar */
        object-fit: cover;
    }
</style>

<section id="servicesDynamicTabs" class="section">
    <div class="container">
        <div class="section-title-futuristic" data-aos="fade-up">
            <h2>Solusi Unggulan</h2>
            <p class="subtitle">Layanan Terintegrasi untuk Mendorong Batas Inovasi Bisnis Anda</p>
        </div>

        <!-- {/* Navigasi Tabs */} -->
        <ul class="nav nav-tabs services-tabs-nav justify-content-center border-0 mb-4" id="servicesTab" role="tablist" data-aos="fade-up" data-aos-delay="100">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="ai-ml-tab" data-bs-toggle="tab" data-bs-target="#ai-ml-content" type="button" role="tab" aria-controls="ai-ml-content" aria-selected="true">
                    <i class="fas fa-brain"></i> AI & Machine Learning
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="iot-tab" data-bs-toggle="tab" data-bs-target="#iot-content" type="button" role="tab" aria-controls="iot-content" aria-selected="false">
                    <i class="fas fa-wifi"></i> IoT & Edge Computing
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="blockchain-tab" data-bs-toggle="tab" data-bs-target="#blockchain-content" type="button" role="tab" aria-controls="blockchain-content" aria-selected="false">
                    <i class="fas fa-link"></i> Blockchain Solutions
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="cybersec-tab" data-bs-toggle="tab" data-bs-target="#cybersec-content" type="button" role="tab" aria-controls="cybersec-content" aria-selected="false">
                    <i class="fas fa-shield-virus"></i> Advanced CyberSecurity
                </button>
            </li>
        </ul>

        <!-- {/* Konten Tabs */} -->
        <div class="tab-content services-tab-content" id="servicesTabContent" data-aos="fade-up" data-aos-delay="200">
            <!-- {/* Tab 1: AI & Machine Learning */} -->
            <div class="tab-pane fade show active" id="ai-ml-content" role="tabpanel" aria-labelledby="ai-ml-tab">
                <div class="service-content-inner">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <h3>Kecerdasan Buatan & Pembelajaran Mesin</h3>
                            <p>Manfaatkan kekuatan data untuk prediksi akurat, otomatisasi cerdas, dan pengambilan keputusan yang lebih baik. Kami membangun solusi AI/ML kustom yang disesuaikan dengan kebutuhan unik bisnis Anda.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check-circle"></i> Pengembangan model prediktif & klasifikasi</li>
                                <li><i class="fas fa-check-circle"></i> Solusi Natural Language Processing (NLP)</li>
                                <li><i class="fas fa-check-circle"></i> Computer Vision & Image Recognition</li>
                                <li><i class="fas fa-check-circle"></i> Sistem rekomendasi personal</li>
                                <li><i class="fas fa-check-circle"></i> Otomatisasi proses robotik (RPA) dengan AI</li>
                            </ul>
                            <a href="#contactMapMulti" class="btn-futuristic-secondary mt-3">Diskusikan Kebutuhan AI Anda</a>
                        </div>
                        <div class="col-lg-5 text-center mt-4 mt-lg-0">
                            <img src="https://placehold.co/500x350/1E1E1E/00FFED?text=AI+%26+ML+Solutions" alt="[Gambar Solusi AI & ML]" class="img-fluid service-image">
                        </div>
                    </div>
                </div>
            </div>

            <!-- {/* Tab 2: IoT & Edge Computing */} -->
            <div class="tab-pane fade" id="iot-content" role="tabpanel" aria-labelledby="iot-tab">
                <div class="service-content-inner">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <h3>Internet of Things (IoT) & Edge Computing</h3>
                            <p>Hubungkan dunia fisik dengan digital. Kami merancang dan mengimplementasikan solusi IoT end-to-end, dari sensor hingga platform analitik, serta optimasi pemrosesan data di edge untuk latensi rendah.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check-circle"></i> Pengembangan platform IoT kustom</li>
                                <li><i class="fas fa-check-circle"></i> Integrasi sensor dan perangkat pintar</li>
                                <li><i class="fas fa-check-circle"></i> Solusi Smart City, Industri 4.0, dan Agrikultur Presisi</li>
                                <li><i class="fas fa-check-circle"></i> Analitik data IoT dan visualisasi real-time</li>
                                <li><i class="fas fa-check-circle"></i> Implementasi arsitektur Edge Computing</li>
                            </ul>
                            <a href="#contactMapMulti" class="btn-futuristic-secondary mt-3">Implementasi IoT Sekarang</a>
                        </div>
                        <div class="col-lg-5 text-center mt-4 mt-lg-0">
                            <img src="https://placehold.co/500x350/1E1E1E/00FFED?text=IoT+%26+Edge+Solutions" alt="[Gambar Solusi IoT & Edge]" class="img-fluid service-image">
                        </div>
                    </div>
                </div>
            </div>

            <!-- {/* Tab 3: Blockchain Solutions */} -->
            <div class="tab-pane fade" id="blockchain-content" role="tabpanel" aria-labelledby="blockchain-tab">
                <div class="service-content-inner">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <h3>Solusi Blockchain Terdesentralisasi</h3>
                            <p>Tingkatkan transparansi, keamanan, dan efisiensi proses bisnis Anda dengan teknologi blockchain. Kami mengembangkan aplikasi terdesentralisasi (dApps), smart contracts, dan solusi integrasi blockchain.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check-circle"></i> Pengembangan Smart Contract (Solidity, Rust)</li>
                                <li><i class="fas fa-check-circle"></i> Pembuatan dApps dan integrasi wallet</li>
                                <li><i class="fas fa-check-circle"></i> Solusi Supply Chain & Traceability berbasis Blockchain</li>
                                <li><i class="fas fa-check-circle"></i> Tokenisasi aset dan platform NFT</li>
                                <li><i class="fas fa-check-circle"></i> Konsultasi dan audit keamanan Blockchain</li>
                            </ul>
                            <a href="#contactMapMulti" class="btn-futuristic-secondary mt-3">Jelajahi Potensi Blockchain</a>
                        </div>
                        <div class="col-lg-5 text-center mt-4 mt-lg-0">
                            <img src="https://placehold.co/500x350/1E1E1E/00FFED?text=Blockchain+Solutions" alt="[Gambar Solusi Blockchain]" class="img-fluid service-image">
                        </div>
                    </div>
                </div>
            </div>

            <!-- {/* Tab 4: Advanced CyberSecurity */} -->
            <div class="tab-pane fade" id="cybersec-content" role="tabpanel" aria-labelledby="cybersec-tab">
                <div class="service-content-inner">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <h3>Keamanan Siber Tingkat Lanjut</h3>
                            <p>Lindungi aset digital kritis Anda dari ancaman siber yang terus berkembang. Kami menyediakan layanan keamanan komprehensif, mulai dari penetration testing hingga respons insiden dan pelatihan kesadaran keamanan.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check-circle"></i> Vulnerability Assessment & Penetration Testing (VAPT)</li>
                                <li><i class="fas fa-check-circle"></i> Security Operations Center (SOC) as a Service</li>
                                <li><i class="fas fa-check-circle"></i> Implementasi Zero Trust Architecture</li>
                                <li><i class="fas fa-check-circle"></i> Perlindungan Data & Privasi (GDPR, PDP)</li>
                                <li><i class="fas fa-check-circle"></i> Pelatihan Kesadaran Keamanan Siber untuk Karyawan</li>
                            </ul>
                            <a href="#contactMapMulti" class="btn-futuristic-secondary mt-3">Amankan Bisnis Anda</a>
                        </div>
                        <div class="col-lg-5 text-center mt-4 mt-lg-0">
                            <img src="https://placehold.co/500x350/1E1E1E/00FFED?text=CyberSecurity+Solutions" alt="[Gambar Solusi Keamanan Siber]" class="img-fluid service-image">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    // Services Dynamic Tabs JS
    document.addEventListener('DOMContentLoaded', function() {
        const serviceTabs = document.querySelectorAll('#servicesTab .nav-link');
        serviceTabs.forEach(tab => {
            tab.addEventListener('shown.bs.tab', function(event) {
                // Re-initialize AOS untuk elemen di dalam tab yang baru ditampilkan
                // Ini penting jika konten tab dimuat secara dinamis atau memiliki elemen AOS
                if (typeof AOS !== 'undefined') {
                    AOS.refreshHard(); // Atau AOS.refresh() jika lebih ringan
                }

                // Contoh animasi sederhana saat tab berganti menggunakan Anime.js
                const activeTabContent = document.querySelector(event.target.getAttribute('data-bs-target'));
                if (activeTabContent) {
                    anime({
                        targets: activeTabContent.querySelectorAll('.service-content-inner > div > div'), // Target kolom kiri & kanan
                        opacity: [0, 1],
                        translateY: [30, 0],
                        delay: anime.stagger(150),
                        easing: 'easeOutExpo',
                        duration: 800
                    });
                }
            });
        });

        // Trigger animasi untuk tab pertama yang aktif saat halaman dimuat
        const firstActiveTabButton = document.querySelector('#servicesTab .nav-link.active');
        if (firstActiveTabButton) {
            const firstActiveTabContent = document.querySelector(firstActiveTabButton.getAttribute('data-bs-target'));
            if (firstActiveTabContent) {
                anime({
                    targets: firstActiveTabContent.querySelectorAll('.service-content-inner > div > div'),
                    opacity: [0, 1],
                    translateY: [30, 0],
                    delay: anime.stagger(150, {
                        start: 300
                    }), // Delay lebih besar untuk load awal
                    easing: 'easeOutExpo',
                    duration: 800
                });
            }
        }
    });
</script>