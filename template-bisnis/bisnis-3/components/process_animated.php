<?php // File: components/process_animated.php 
?>
<style>
    /* Animated Process Component Styles */
    :root {
        /* Pastikan variabel CSS dari index.php bisa diakses */
        --primary-color: #6A11CB;
        --secondary-color: #2575FC;
        --accent-color: #00FFED;
        --card-bg: #1E1E1E;
        --border-color: rgba(0, 255, 237, 0.2);
        --text-color-muted: #B0B0B0;
    }

    #processAnimated {
        background-color: var(--dark-bg);
        /* Bisa juga diberi gradient atau pattern halus */
    }

    .process-timeline {
        position: relative;
        max-width: 900px;
        /* Batasi lebar timeline */
        margin: 0 auto;
    }

    /* Garis tengah timeline */
    .process-timeline::after {
        content: '';
        position: absolute;
        width: 4px;
        /* Ketebalan garis */
        background: linear-gradient(to bottom, var(--primary-color), var(--secondary-color), var(--accent-color));
        top: 0;
        bottom: 0;
        left: 50%;
        margin-left: -2px;
        /* Setengah dari width */
        z-index: 1;
        animation: drawLine 3s ease-out forwards;
        /* Animasi garis muncul */
    }

    @keyframes drawLine {
        from {
            height: 0;
        }

        to {
            height: 100%;
        }
    }


    .process-step {
        padding: 20px 40px;
        position: relative;
        background: transparent;
        /* Tidak ada background default untuk step */
        width: 50%;
        z-index: 2;
        /* Di atas garis tengah */
        opacity: 0;
        /* Untuk animasi AOS */
    }

    /* Atur posisi kiri dan kanan secara bergantian */
    .process-step:nth-child(odd) {
        left: 0;
        text-align: right;
        /* Teks rata kanan untuk step kiri */
        padding-right: 60px;
        /* Ruang untuk ikon dan panah */
    }

    .process-step:nth-child(even) {
        left: 50%;
        text-align: left;
        /* Teks rata kiri untuk step kanan */
        padding-left: 60px;
        /* Ruang untuk ikon dan panah */
    }

    /* Ikon besar di tengah step (pada garis timeline) */
    .process-step .step-icon-wrapper {
        content: '';
        position: absolute;
        width: 60px;
        /* Ukuran lingkaran ikon */
        height: 60px;
        line-height: 56px;
        /* Vertikal align ikon */
        background: var(--card-bg);
        border: 3px solid var(--accent-color);
        top: 50%;
        /* Tengah vertikal step */
        transform: translateY(-50%);
        border-radius: 50%;
        text-align: center;
        z-index: 3;
        /* Di atas segalanya */
        box-shadow: 0 0 15px rgba(var(--accent-rgb), 0.3);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .process-step:hover .step-icon-wrapper {
        transform: translateY(-50%) scale(1.1);
        box-shadow: 0 0 25px rgba(var(--accent-rgb), 0.5);
    }

    .process-step:nth-child(odd) .step-icon-wrapper {
        right: -30px;
        /* Setengah dari width lingkaran ikon */
    }

    .process-step:nth-child(even) .step-icon-wrapper {
        left: -30px;
        /* Setengah dari width lingkaran ikon */
    }

    .process-step .step-icon-wrapper i {
        font-size: 1.8rem;
        /* Ukuran ikon di dalam lingkaran */
        color: var(--accent-color);
    }

    /* Panah penunjuk dari step ke ikon (opsional, bisa diganti styling lain) */
    .process-step::before {
        content: '';
        position: absolute;
        width: 0;
        height: 0;
        border-style: solid;
        top: 50%;
        transform: translateY(-50%);
        z-index: 2;
    }

    .process-step:nth-child(odd)::before {
        /* Panah ke kiri */
        right: 30px;
        /* Menyentuh lingkaran ikon */
        border-width: 10px 0 10px 15px;
        border-color: transparent transparent transparent var(--card-bg);
        /* Warna sama dengan card */
    }

    .process-step:nth-child(even)::before {
        /* Panah ke kanan */
        left: 30px;
        /* Menyentuh lingkaran ikon */
        border-width: 10px 15px 10px 0;
        border-color: transparent var(--card-bg) transparent transparent;
        /* Warna sama dengan card */
    }


    .process-step-content {
        padding: 25px;
        background: var(--card-bg);
        /* Latar belakang untuk konten */
        border-radius: 10px;
        position: relative;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        border: 1px solid var(--border-color);
        transition: border-color 0.3s ease;
    }

    .process-step:hover .process-step-content {
        border-color: var(--accent-color);
    }

    .process-step-content h3 {
        font-size: 1.6rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 10px;
    }

    .process-step-content .step-number {
        font-family: 'Roboto Mono', monospace;
        color: var(--accent-color);
        font-size: 1rem;
        font-weight: bold;
        display: block;
        margin-bottom: 8px;
    }

    .process-step-content p {
        font-size: 0.95rem;
        color: var(--text-color-muted);
        line-height: 1.7;
    }

    /* Responsif untuk mobile */
    @media (max-width: 767.98px) {
        .process-timeline::after {
            left: 30px;
            /* Garis timeline ke kiri */
            margin-left: 0;
        }

        .process-step {
            width: 100%;
            padding-left: 80px;
            /* Ruang untuk ikon di kiri */
            padding-right: 15px;
            text-align: left !important;
            /* Semua teks rata kiri */
            left: 0 !important;
            /* Reset posisi left */
        }

        .process-step:nth-child(odd),
        .process-step:nth-child(even) {
            padding-left: 80px;
            padding-right: 15px;
            text-align: left !important;
        }

        .process-step .step-icon-wrapper,
        .process-step:nth-child(odd) .step-icon-wrapper,
        .process-step:nth-child(even) .step-icon-wrapper {
            left: 0px;
            /* Ikon di kiri, menyentuh garis timeline */
            transform: translateY(-50%) translateX(-50%);
            /* Pusatkan ikon pada garis */
        }

        .process-step::before,
        .process-step:nth-child(odd)::before,
        .process-step:nth-child(even)::before {
            left: 60px;
            /* Panah dari konten ke ikon */
            border-width: 10px 15px 10px 0 !important;
            border-color: transparent var(--card-bg) transparent transparent !important;
        }
    }
</style>

<section id="processAnimated" class="section">
    <div class="container">
        <div class="section-title-futuristic" data-aos="fade-up">
            <h2>Proses Kerja Kami</h2>
            <p class="subtitle">Pendekatan Terstruktur untuk Hasil yang Optimal dan Transparan</p>
        </div>

        <div class="process-timeline">
            <div class="process-step" data-aos="fade-right" data-aos-delay="100">
                <div class="step-icon-wrapper"><i class="fas fa-search"></i></div>
                <div class="process-step-content">
                    <span class="step-number">Tahap 01</span>
                    <h3>Discovery & Riset</h3>
                    <p>Kami memulai dengan memahami secara mendalam tujuan bisnis, target audiens, dan tantangan yang Anda hadapi. Riset pasar dan analisis kompetitor menjadi landasan strategi.</p>
                </div>
            </div>

            <div class="process-step" data-aos="fade-left" data-aos-delay="200">
                <div class="step-icon-wrapper"><i class="fas fa-drafting-compass"></i></div>
                <div class="process-step-content">
                    <span class="step-number">Tahap 02</span>
                    <h3>Perencanaan & Desain UI/UX</h3>
                    <p>Strategi yang matang dituangkan dalam perencanaan proyek yang detail. Tim desain kami menciptakan antarmuka pengguna yang intuitif, menarik, dan berpusat pada pengalaman pengguna.</p>
                </div>
            </div>

            <div class="process-step" data-aos="fade-right" data-aos-delay="300">
                <div class="step-icon-wrapper"><i class="fas fa-laptop-code"></i></div>
                <div class="process-step-content">
                    <span class="step-number">Tahap 03</span>
                    <h3>Pengembangan & Implementasi</h3>
                    <p>Developer ahli kami membangun solusi menggunakan teknologi terkini, mengikuti praktik terbaik dalam coding, dan memastikan fungsionalitas yang solid serta skalabilitas.</p>
                </div>
            </div>

            <div class="process-step" data-aos="fade-left" data-aos-delay="400">
                <div class="step-icon-wrapper"><i class="fas fa-vial"></i></div>
                <div class="process-step-content">
                    <span class="step-number">Tahap 04</span>
                    <h3>Pengujian & Quality Assurance</h3>
                    <p>Setiap aspek solusi diuji secara menyeluruh untuk memastikan kualitas, performa, keamanan, dan kompatibilitas. Kami tidak mentolerir bug dan error.</p>
                </div>
            </div>

            <div class="process-step" data-aos="fade-right" data-aos-delay="500">
                <div class="step-icon-wrapper"><i class="fas fa-rocket"></i></div>
                <div class="process-step-content">
                    <span class="step-number">Tahap 05</span>
                    <h3>Peluncuran & Optimalisasi</h3>
                    <p>Setelah semua siap, kami meluncurkan solusi Anda. Namun, pekerjaan kami tidak berhenti di situ. Kami terus memantau, menganalisis, dan mengoptimalkan untuk hasil terbaik.</p>
                </div>
            </div>

            <div class="process-step" data-aos="fade-left" data-aos-delay="600">
                <div class="step-icon-wrapper"><i class="fas fa-cogs"></i></div>
                <div class="process-step-content">
                    <span class="step-number">Tahap 06</span>
                    <h3>Dukungan & Pemeliharaan</h3>
                    <p>Kami menyediakan dukungan berkelanjutan dan layanan pemeliharaan untuk memastikan solusi Anda tetap berjalan lancar, aman, dan relevan dengan perkembangan teknologi.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Process Animated JS (jika ada interaksi khusus, selain AOS)
    // AOS sudah menangani animasi munculnya setiap step.
    // Animasi garis timeline utama sudah menggunakan CSS keyframes.
</script>