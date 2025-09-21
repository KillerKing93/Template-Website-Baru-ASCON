<?php // File: components/program_studi_inovatif_nova.php 
?>
<style>
    /* Program Studi Inovatif Nova Styles */
    #programStudiInovatifNova {
        background-color: var(--bg-light-edu6);
        /* Default light */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #programStudiInovatifNova {
        background-color: var(--bg-dark-edu6);
    }

    .program-nova-card {
        background-color: var(--card-bg-light-edu6);
        border-radius: 10px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.07);
        transition: all 0.4s ease;
        height: 100%;
        border: 1px solid var(--border-light-edu6);
        position: relative;
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    body.dark-mode .program-nova-card {
        background-color: var(--card-bg-dark-edu6);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25);
        border-color: var(--border-dark-edu6);
    }

    /* Efek "glare" atau "sheen" pada hover */
    .program-nova-card::after {
        content: '';
        position: absolute;
        top: 0;
        left: -150%;
        /* Mulai dari luar kiri */
        width: 70%;
        height: 100%;
        background: linear-gradient(to right,
                transparent 0%,
                rgba(255, 255, 255, 0.2) 50%,
                /* Warna glare terang */
                transparent 100%);
        transform: skewX(-25deg);
        /* Miringkan glare */
        transition: left 0.7s cubic-bezier(0.25, 0.8, 0.25, 1);
        pointer-events: none;
    }

    .program-nova-card:hover::after {
        left: 150%;
        /* Pindahkan glare melintasi card */
    }

    body.dark-mode .program-nova-card::after {
        background: linear-gradient(to right,
                transparent 0%,
                rgba(255, 255, 255, 0.08) 50%,
                /* Glare lebih subtle di dark mode */
                transparent 100%);
    }


    .program-nova-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 30px rgba(var(--primary-nova-rgb, 255, 64, 129), 0.15);
    }

    body.dark-mode .program-nova-card:hover {
        box-shadow: 0 12px 30px rgba(var(--primary-nova-dark-rgb, 245, 0, 87), 0.2);
    }

    /* Komentar CSS: Variabel RGB untuk primary-nova-dark */
    body.dark-mode {
        --primary-nova-dark-rgb: 245, 0, 87;
    }


    .program-nova-card .program-icon-nova {
        font-size: 3.2rem;
        /* Ukuran dasar untuk SVG */
        color: var(--primary-nova);
        margin: 25px auto 15px auto;
        /* Icon di tengah atas konten */
        display: block;
        /* Agar margin auto bekerja */
        text-align: center;
        transition: color 0.3s ease, transform 0.3s ease;
        line-height: 1;
        /* Pastikan SVG tidak menambah spasi ekstra */
    }

    .program-nova-card .program-icon-nova svg {
        width: 1em;
        height: 1em;
        vertical-align: -0.125em;
        /* Penyesuaian vertikal jika diperlukan */
    }

    .program-nova-card:hover .program-icon-nova {
        transform: scale(1.1);
        color: var(--secondary-nova);
    }

    body.dark-mode .program-nova-card .program-icon-nova {
        color: var(--primary-nova-dark);
    }

    body.dark-mode .program-nova-card:hover .program-icon-nova {
        color: var(--secondary-nova-dark);
    }

    .program-nova-card .program-content-nova {
        padding: 0 25px 25px 25px;
        /* Padding atas sudah dari ikon */
        text-align: center;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .program-nova-card h4.program-title-nova {
        font-family: 'Syne', sans-serif;
        font-size: 1.6rem;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .program-nova-card p.program-desc-nova {
        font-size: 0.95rem;
        color: var(--muted-text-light-edu6);
        line-height: 1.7;
        margin-bottom: 20px;
        flex-grow: 1;
    }

    body.dark-mode .program-nova-card p.program-desc-nova {
        color: var(--muted-text-dark-edu6);
    }

    .program-nova-card .btn-detail-program-nova {
        margin-top: auto;
        font-size: 0.9rem;
    }
</style>

<section id="programStudiInovatifNova" class="section-nova-uni">
    <div class="container">
        <div class="section-title-nova-uni" data-aos="fade-up">
            <h2>Program Studi <span style="color:var(--secondary-nova);">Inovatif</span></h2>
            <p class="subtitle-nova-uni">Jelajahi Jalur Pendidikan yang Memadukan Kreativitas Seni dengan Presisi Sains Digital.</p>
        </div>

        <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="program-nova-card">
                    <div class="program-icon-nova">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                            <path d="M15 2H1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zM1 3h14v2.5H1V3zm0 3.5h14V13H1V6.5z" />
                            <path d="M4.5 11a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm7-3a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
                        </svg>
                    </div>
                    <div class="program-content-nova">
                        <h4 class="program-title-nova">Desain Realitas Imersif (VR/AR/MR)</h4>
                        <p class="program-desc-nova">Menciptakan pengalaman interaktif dan dunia virtual yang memukau untuk berbagai aplikasi, dari game hingga simulasi industri.</p>
                        <a href="#" class="btn-nova-secondary btn-detail-program-nova">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="program-nova-card">
                    <div class="program-icon-nova">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                            <path d="M8 1.5a6.5 6.5 0 1 0 0 13 6.5 6.5 0 0 0 0-13zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z" />
                            <path d="M5.5 6.5A.5.5 0 0 1 6 6h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5zm0 3A.5.5 0 0 1 6 9h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5zM5 11.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                            <path d="M8.5 4.5a.5.5 0 0 0-1 0V5h1V4.5z" />
                        </svg>
                    </div>
                    <div class="program-content-nova">
                        <h4 class="program-title-nova">Seni Generatif & Kecerdasan Buatan</h4>
                        <p class="program-desc-nova">Menggabungkan algoritma AI dengan ekspresi artistik untuk menghasilkan karya seni visual, musik, dan narasi yang unik.</p>
                        <a href="#" class="btn-nova-secondary btn-detail-program-nova">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="program-nova-card">
                    <div class="program-icon-nova">
                        <svg xmlns="http://www.w3.org/2000/svg" stroke="currentColor" fill="none" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <circle cx="12" cy="12" r="1.5" fill="currentColor" stroke="none" />
                            <ellipse cx="12" cy="12" rx="10" ry="4" stroke-width="1.5" transform="rotate(45 12 12)" />
                            <ellipse cx="12" cy="12" rx="10" ry="4" stroke-width="1.5" transform="rotate(-45 12 12)" />
                            <ellipse cx="12" cy="12" rx="4" ry="10" stroke-width="1.5" />
                        </svg>
                    </div>
                    <div class="program-content-nova">
                        <h4 class="program-title-nova">Bio-Art & Desain Berkelanjutan</h4>
                        <p class="program-desc-nova">Menjelajahi persimpangan antara biologi, seni, dan desain untuk solusi ekologis dan produk yang ramah lingkungan.</p>
                        <a href="#" class="btn-nova-secondary btn-detail-program-nova">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <?php /* Komentar PHP: Tambahkan program studi lainnya jika ada */ ?>
        </div>
    </div>
</section>