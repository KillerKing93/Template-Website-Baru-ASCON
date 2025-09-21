<?php // File: components/hero_pendidikan_elegan.php 
?>
<style>
    /* Hero Pendidikan Elegan Styles */
    #heroPendidikanElegan {
        min-height: 95vh;
        background: linear-gradient(rgba(var(--bg-light-edu3-rgb, 253, 251, 245), 0.5), rgba(var(--bg-light-edu3-rgb, 253, 251, 245), 0.8)),
            url('https://placehold.co/1920x1080/FDFBF5/4A3B32?text=Perpustakaan+Klasik+Megah&font=cormorantgaramond') no-repeat center center;
        background-size: cover;
        display: flex;
        align-items: center;
        text-align: center;
        /* Teks di tengah untuk hero ini */
        padding: 100px 0;
        position: relative;
        transition: background 0.3s ease;
    }

    /* Komentar CSS: Variabel RGB untuk warna dasar */
    body {
        --bg-light-edu3-rgb: 253, 251, 245;
        --bg-dark-edu3-rgb: 42, 42, 42;
        --primary-illumina-rgb: 139, 69, 19;
        --secondary-illumina-rgb: 184, 134, 11;
    }

    body.dark-mode #heroPendidikanElegan {
        background: linear-gradient(rgba(var(--bg-dark-edu3-rgb, 42, 42, 42), 0.7), rgba(var(--bg-dark-edu3-rgb, 42, 42, 42), 0.9)),
            url('https://placehold.co/1920x1080/2A2A2A/E8E2D8?text=Perpustakaan+Malam+Hari&font=cormorantgaramond') no-repeat center center;
        background-size: cover;
    }

    /* Efek "vignette" atau "old paper" overlay */
    #heroPendidikanElegan::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        box-shadow: inset 0 0 100px rgba(var(--text-light-edu3-rgb, 74, 59, 50), 0.15);
        /* var(--text-light-edu3) dengan alpha */
        z-index: 0;
        pointer-events: none;
        transition: box-shadow 0.3s ease;
    }

    /* Komentar CSS: Variabel RGB untuk text-light-edu3 */
    body {
        --text-light-edu3-rgb: 74, 59, 50;
    }

    body.dark-mode {
        --text-dark-edu3-rgb: 232, 226, 216;
    }

    body.dark-mode #heroPendidikanElegan::after {
        box-shadow: inset 0 0 120px rgba(var(--text-dark-edu3-rgb, 232, 226, 216), 0.08);
    }


    .hero-content-elegan {
        position: relative;
        /* Di atas overlay */
        z-index: 1;
        max-width: 800px;
        /* Batasi lebar konten */
        margin: 0 auto;
        /* Pusatkan konten */
    }

    .hero-content-elegan h1 {
        font-size: 4rem;
        /* Ukuran judul utama */
        font-weight: 700;
        /* Cormorant Garamond sudah elegan */
        line-height: 1.2;
        margin-bottom: 20px;
        color: var(--primary-illumina);
        text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.3);
    }

    body.dark-mode .hero-content-elegan h1 {
        color: var(--primary-illumina-dark);
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }

    .hero-content-elegan h1 .institution-name {
        /* Untuk nama institusi jika ingin style beda */
        display: block;
        font-size: 0.8em;
        /* Lebih kecil dari baris utama */
        color: var(--secondary-illumina);
        margin-top: 5px;
    }

    body.dark-mode .hero-content-elegan h1 .institution-name {
        color: var(--secondary-illumina-dark);
    }

    .hero-content-elegan p.lead-elegan {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.25rem;
        font-weight: 400;
        margin-bottom: 30px;
        color: var(--muted-text-light-edu3);
        line-height: 1.7;
    }

    body.dark-mode .hero-content-elegan p.lead-elegan {
        color: var(--muted-text-dark-edu3);
    }

    .hero-content-elegan .hero-cta-illumina a {
        margin: 8px;
    }
</style>

<section id="heroPendidikanElegan" class="section-illumina">
    <div class="container hero-content-elegan">
        <div data-aos="fade-down" data-aos-duration="1200">
            <h1>Membuka Cakrawala Ilmu, <span class="institution-name">Academia Illumina</span></h1>
            <p class="lead-elegan">
                Menjelajahi kedalaman pengetahuan dan kearifan melalui pendekatan studi klasik yang diperkaya dengan inovasi modern, mempersiapkan generasi penerus yang berintelektual dan berkarakter.
            </p>
            <div class="hero-cta-illumina">
                <a href="#fakultasJurusanPendidikan" class="btn-illumina-primary btn-lg">Jelajahi Fakultas</a>
                <a href="#penerimaanMahasiswaBaru" class="btn-illumina-secondary btn-lg">Info Penerimaan</a>
            </div>
        </div>
    </div>
</section>