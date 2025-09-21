<?php // File: components/timeline_interactive.php 
?>
<style>
    /* Interactive Timeline Component Styles */
    :root {
        /* Pastikan variabel CSS dari index.php bisa diakses */
        --primary-color: #6A11CB;
        --secondary-color: #2575FC;
        --accent-color: #00FFED;
        --card-bg: #1E1E1E;
        --dark-bg: #121212;
        --border-color: rgba(0, 255, 237, 0.2);
        --text-color-muted: #B0B0B0;
    }

    #interactiveTimeline {
        background-color: var(--card-bg);
        /* Latar lebih terang dari body */
        border-top: 1px solid var(--border-color);
        border-bottom: 1px solid var(--border-color);
    }

    .main-timeline {
        position: relative;
        padding: 50px 0;
    }

    /* Garis tengah utama timeline */
    .main-timeline::before {
        content: "";
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 4px;
        height: 100%;
        background: linear-gradient(to bottom, var(--primary-color), var(--secondary-color) 50%, var(--accent-color));
        z-index: 1;
    }

    .timeline-event {
        position: relative;
        margin-bottom: 50px;
        /* Jarak antar event */
        z-index: 2;
        display: flex;
        /* Untuk kontrol alignment */
        opacity: 0;
        /* Untuk animasi AOS */
    }

    .timeline-event:last-child {
        margin-bottom: 0;
    }

    /* Alternate sides */
    .timeline-event:nth-child(odd) {
        flex-direction: row-reverse;
        /* Konten di kiri, ikon di kanan dari tengah */
    }

    .timeline-event:nth-child(even) {
        flex-direction: row;
        /* Konten di kanan, ikon di kiri dari tengah */
    }

    .timeline-content-wrapper {
        width: calc(50% - 40px);
        /* Setengah lebar dikurangi margin untuk ikon */
        position: relative;
    }

    .timeline-event:nth-child(odd) .timeline-content-wrapper {
        margin-right: 40px;
        /* Margin dari garis tengah */
        text-align: right;
    }

    .timeline-event:nth-child(even) .timeline-content-wrapper {
        margin-left: 40px;
        /* Margin dari garis tengah */
        text-align: left;
    }

    .timeline-icon-wrapper {
        width: 80px;
        /* Lebar untuk ikon dan garis penghubung horizontal */
        position: relative;
        /* Untuk posisi absolut ikon */
        flex-shrink: 0;
        /* Jangan mengecil */
        display: flex;
        justify-content: center;
        /* Pusatkan ikon di garis tengah */
    }

    /* Ikon di tengah garis */
    .timeline-icon {
        width: 50px;
        height: 50px;
        background-color: var(--accent-color);
        color: var(--dark-bg);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        position: absolute;
        /* relatif terhadap timeline-icon-wrapper */
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 3;
        /* Di atas garis timeline */
        box-shadow: 0 0 15px rgba(var(--accent-rgb), 0.4);
        transition: transform 0.3s ease, background-color 0.3s ease;
    }

    .timeline-event:hover .timeline-icon {
        transform: translate(-50%, -50%) scale(1.15);
        background-color: #fff;
    }

    /* Garis horizontal dari ikon ke konten */
    .timeline-icon-wrapper::before {
        content: "";
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        height: 3px;
        width: 100%;
        background-color: var(--accent-color);
        z-index: 2;
    }

    .timeline-event:nth-child(odd) .timeline-icon-wrapper::before {
        right: 50%;
    }

    .timeline-event:nth-child(even) .timeline-icon-wrapper::before {
        left: 50%;
    }


    .timeline-content {
        background-color: var(--dark-bg);
        /* Kontras dengan card-bg section */
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
        border: 1px solid var(--border-color);
        position: relative;
        /* Untuk panah */
        transition: border-color 0.3s ease;
    }

    .timeline-event:hover .timeline-content {
        border-color: var(--accent-color);
    }

    /* Panah dari konten ke garis horizontal */
    .timeline-content::before {
        content: "";
        position: absolute;
        top: calc(50% - 10px);
        /* Tengah vertikal */
        width: 0;
        height: 0;
        border-style: solid;
    }

    .timeline-event:nth-child(odd) .timeline-content::before {
        /* Panah ke kanan */
        right: -10px;
        border-width: 10px 0 10px 10px;
        border-color: transparent transparent transparent var(--dark-bg);
    }

    .timeline-event:nth-child(even) .timeline-content::before {
        /* Panah ke kiri */
        left: -10px;
        border-width: 10px 10px 10px 0;
        border-color: transparent var(--dark-bg) transparent transparent;
    }

    .timeline-content .event-year {
        font-family: 'Roboto Mono', monospace;
        font-size: 1.3rem;
        font-weight: bold;
        color: var(--accent-color);
        margin-bottom: 8px;
    }

    .timeline-content h3 {
        /* Judul event */
        font-size: 1.5rem;
        color: #fff;
        margin-bottom: 10px;
    }

    .timeline-content p {
        font-size: 0.95rem;
        color: var(--text-color-muted);
        line-height: 1.6;
        margin-bottom: 0;
    }

    /* Responsif */
    @media (max-width: 767.98px) {
        .main-timeline::before {
            left: 25px;
        }

        /* Garis utama di kiri */
        .timeline-event,
        .timeline-event:nth-child(odd),
        .timeline-event:nth-child(even) {
            flex-direction: row;
            /* Semua event mengarah ke kanan */
            margin-left: 0;
            /* Reset margin */
        }

        .timeline-icon-wrapper {
            width: 50px;
            /* Perkecil area ikon */
            position: absolute;
            /* Untuk menempatkan di garis */
            left: 0;
            top: 0;
            /* Sesuaikan jika perlu, ini agar ikon sejajar dengan konten */
            height: 100%;
        }

        .timeline-icon {
            /* Ikon menempel di garis utama */
            left: 0;
            /* Tengah horizontal wrapper */
            /* Top 50% sudah dari wrapper */
        }

        .timeline-icon-wrapper::before {
            display: none;
        }

        /* Sembunyikan garis horizontal dari ikon */

        .timeline-content-wrapper,
        .timeline-event:nth-child(odd) .timeline-content-wrapper,
        .timeline-event:nth-child(even) .timeline-content-wrapper {
            width: 100%;
            margin-left: 65px;
            /* Jarak dari ikon */
            margin-right: 0;
            text-align: left !important;
            /* Semua teks rata kiri */
        }

        .timeline-content::before,
        .timeline-event:nth-child(odd) .timeline-content::before,
        .timeline-event:nth-child(even) .timeline-content::before {
            /* Panah selalu ke kiri */
            left: -10px;
            right: auto;
            border-width: 10px 10px 10px 0 !important;
            border-color: transparent var(--dark-bg) transparent transparent !important;
        }
    }
</style>

<section id="interactiveTimeline" class="section">
    <div class="container">
        <div class="section-title-futuristic" data-aos="fade-up">
            <h2>Jejak Langkah Kami</h2>
            <p class="subtitle">Menelusuri Momen-Momen Penting dalam Sejarah Pertumbuhan dan Inovasi [NamaBisnis Anda]</p>
        </div>

        <div class="main-timeline">
            <div class="timeline-event" data-aos="fade-up">
                <div class="timeline-icon-wrapper">
                    <div class="timeline-icon"><i class="fas fa-flag"></i></div>
                </div>
                <div class="timeline-content-wrapper">
                    <div class="timeline-content">
                        <span class="event-year">2018</span>
                        <h3>Pendirian & Visi Awal</h3>
                        <p>[NamaBisnis Anda] didirikan dengan misi untuk merevolusi [industri/bidang] melalui solusi teknologi inovatif dan layanan yang berfokus pada klien.</p>
                    </div>
                </div>
            </div>

            <div class="timeline-event" data-aos="fade-up">
                <div class="timeline-icon-wrapper">
                    <div class="timeline-icon"><i class="fas fa-lightbulb"></i></div>
                </div>
                <div class="timeline-content-wrapper">
                    <div class="timeline-content">
                        <span class="event-year">2019</span>
                        <h3>Peluncuran Produk Pertama</h3>
                        <p>Produk/layanan unggulan pertama kami, [Nama Produk/Layanan], berhasil diluncurkan dan mendapatkan sambutan positif dari pasar awal.</p>
                    </div>
                </div>
            </div>

            <div class="timeline-event" data-aos="fade-up">
                <div class="timeline-icon-wrapper">
                    <div class="timeline-icon"><i class="fas fa-users"></i></div>
                </div>
                <div class="timeline-content-wrapper">
                    <div class="timeline-content">
                        <span class="event-year">2020</span>
                        <h3>Ekspansi Tim & Kemitraan</h3>
                        <p>Tim inti berkembang pesat dengan talenta-talenta baru. Membangun kemitraan strategis pertama yang memperluas jangkauan kami.</p>
                    </div>
                </div>
            </div>

            <div class="timeline-event" data-aos="fade-up">
                <div class="timeline-icon-wrapper">
                    <div class="timeline-icon"><i class="fas fa-award"></i></div>
                </div>
                <div class="timeline-content-wrapper">
                    <div class="timeline-content">
                        <span class="event-year">2022</span>
                        <h3>Pengakuan Industri & Pencapaian</h3>
                        <p>Menerima penghargaan [Nama Penghargaan] untuk inovasi di [bidang]. Mencapai tonggak [jumlah klien/proyek] yang signifikan.</p>
                    </div>
                </div>
            </div>

            <div class="timeline-event" data-aos="fade-up">
                <div class="timeline-icon-wrapper">
                    <div class="timeline-icon"><i class="fas fa-globe-americas"></i></div>
                </div>
                <div class="timeline-content-wrapper">
                    <div class="timeline-content">
                        <span class="event-year">2024</span>
                        <h3>Pengembangan Teknologi Baru</h3>
                        <p>Meluncurkan platform [Nama Platform Baru] berbasis AI/Blockchain/IoT yang membawa solusi kami ke tingkat berikutnya dan membuka pasar baru.</p>
                    </div>
                </div>
            </div>

            <div class="timeline-event" data-aos="fade-up">
                <div class="timeline-icon-wrapper">
                    <div class="timeline-icon"><i class="fas fa-rocket"></i></div>
                </div>
                <div class="timeline-content-wrapper">
                    <div class="timeline-content">
                        <span class="event-year">Masa Depan</span>
                        <h3>Menuju Inovasi Global</h3>
                        <p>Berkomitmen untuk terus berinovasi, memperluas dampak global, dan menjadi pemimpin dalam transformasi digital di berbagai sektor.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>