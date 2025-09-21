<?php // File: components/tentang_kami_pendidikan_interdisipliner.php 
?>
<style>
    /* Tentang Kami Pendidikan Interdisipliner Styles */
    #tentangKamiPendidikanInterdisipliner {
        background-color: var(--bg-light-edu6);
        /* Default light */
        border-bottom: 1px solid var(--border-light-edu6);
        transition: background-color 0.3s ease, border-color 0.3s ease;
        position: relative;
        /* Untuk elemen dekoratif */
    }

    /* Elemen dekoratif garis abstrak */
    #tentangKamiPendidikanInterdisipliner::before {
        content: '';
        position: absolute;
        top: 10%;
        right: 5%;
        width: 150px;
        height: 150px;
        border: 3px dashed rgba(var(--accent-nova-rgb, 0, 188, 212), 0.2);
        border-radius: 50%;
        transform: rotate(45deg);
        z-index: 0;
        animation: rotateDecoLine 20s linear infinite;
    }

    #tentangKamiPendidikanInterdisipliner::after {
        content: '';
        position: absolute;
        bottom: 10%;
        left: 5%;
        width: 100px;
        height: 100px;
        border: 2px solid rgba(var(--secondary-nova-rgb, 124, 77, 255), 0.2);
        border-radius: 10px;
        transform: rotate(-30deg);
        z-index: 0;
        animation: rotateDecoLine 25s linear infinite reverse;
    }

    @keyframes rotateDecoLine {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    body.dark-mode #tentangKamiPendidikanInterdisipliner {
        background-color: var(--bg-dark-edu6);
        border-bottom-color: var(--border-dark-edu6);
    }

    body.dark-mode #tentangKamiPendidikanInterdisipliner::before {
        border-color: rgba(var(--accent-nova-dark-rgb, 0, 229, 255), 0.25);
    }

    body.dark-mode #tentangKamiPendidikanInterdisipliner::after {
        border-color: rgba(var(--secondary-nova-dark-rgb, 149, 117, 205), 0.25);
    }


    .about-interdisipliner-content {
        position: relative;
        z-index: 1;
    }

    .about-interdisipliner-content h3 {
        font-size: 2.8rem;
        font-weight: 800;
        /* Syne sudah bold */
        margin-bottom: 20px;
        color: var(--primary-nova);
        line-height: 1.2;
    }

    body.dark-mode .about-interdisipliner-content h3 {
        color: var(--primary-nova-dark);
    }

    .about-interdisipliner-content .interdisipliner-manifesto {
        font-family: 'Work Sans', sans-serif;
        font-size: 1.2rem;
        font-weight: 500;
        color: var(--muted-text-light-edu6);
        margin-bottom: 25px;
        border-left: 4px solid var(--secondary-nova);
        padding-left: 20px;
        font-style: normal;
        transition: color 0.3s ease, border-color 0.3s ease;
    }

    body.dark-mode .about-interdisipliner-content .interdisipliner-manifesto {
        color: var(--muted-text-dark-edu6);
        border-left-color: var(--secondary-nova-dark);
    }

    .about-interdisipliner-content p {
        font-size: 1.05rem;
        line-height: 1.8;
        margin-bottom: 18px;
    }

    .pillars-interdisipliner {
        /* Pilar-pilar pendekatan */
        margin-top: 35px;
    }

    .pillar-item-interdisipliner {
        text-align: center;
        padding: 25px;
        background-color: var(--card-bg-light-edu6);
        border-radius: 8px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.06);
        border: 1px solid var(--border-light-edu6);
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        /* Added for better alignment of icon and text */
        flex-direction: column;
        /* Added for better alignment of icon and text */
        align-items: center;
        /* Added for better alignment of icon and text */
        justify-content: flex-start;
        /* Added for better alignment of icon and text */
    }

    body.dark-mode .pillar-item-interdisipliner {
        background-color: var(--card-bg-dark-edu6);
        border-color: var(--border-dark-edu6);
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
    }

    .pillar-item-interdisipliner:hover {
        transform: translateY(-8px) scale(1.03);
        box-shadow: 0 10px 25px rgba(var(--accent-nova-rgb, 0, 188, 212), 0.15);
        border-color: var(--accent-nova);
    }

    body.dark-mode .pillar-item-interdisipliner:hover {
        box-shadow: 0 10px 25px rgba(var(--accent-nova-dark-rgb, 0, 229, 255), 0.2);
        border-color: var(--accent-nova-dark);
    }

    .pillar-item-interdisipliner .pillar-icon-interdisipliner {
        font-size: 3rem;
        /* Ukuran dasar untuk SVG, SVG akan menggunakan 1em dari ini */
        color: var(--accent-nova);
        margin-bottom: 15px;
        display: inline-block;
        /* SVGs are inline-block by default */
        line-height: 1;
        /* Pastikan SVG tidak menambah spasi ekstra */
        transition: color 0.3s ease;
    }

    .pillar-item-interdisipliner .pillar-icon-interdisipliner svg {
        /* Memastikan SVG mengisi kontainer dan mewarisi ukuran font sebagai 'em' */
        width: 1em;
        height: 1em;
        vertical-align: -0.125em;
        /* Penyesuaian vertikal jika diperlukan */
    }


    body.dark-mode .pillar-item-interdisipliner .pillar-icon-interdisipliner {
        color: var(--accent-nova-dark);
    }

    .pillar-item-interdisipliner h5.pillar-title-interdisipliner {
        font-family: 'Syne', sans-serif;
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .pillar-item-interdisipliner p.pillar-desc-interdisipliner {
        font-size: 0.9rem;
        margin-bottom: 0;
        line-height: 1.6;
        color: var(--muted-text-light-edu6);
    }

    body.dark-mode .pillar-item-interdisipliner p.pillar-desc-interdisipliner {
        color: var(--muted-text-dark-edu6);
    }

    .about-image-interdisipliner-wrapper {
        position: relative;
        text-align: center;
    }

    .about-image-interdisipliner {
        border-radius: 10px;
        max-width: 100%;
        height: auto;
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.1);
        /* Efek "artistic frame" atau "brush stroke" border */
        padding: 8px;
        /* Ruang untuk border */
        background-color: var(--card-bg-light-edu6);
        /* Warna frame */
        transition: all 0.3s ease;
    }

    body.dark-mode .about-image-interdisipliner {
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.3);
        background-color: var(--card-bg-dark-edu6);
    }

    .about-image-interdisipliner-wrapper:hover .about-image-interdisipliner {
        transform: rotate(2deg);
        /* Sedikit miring saat hover */
        box-shadow: 0 15px 40px rgba(var(--secondary-nova-rgb, 124, 77, 255), 0.2);
    }

    body.dark-mode .about-image-interdisipliner-wrapper:hover .about-image-interdisipliner {
        box-shadow: 0 15px 40px rgba(var(--secondary-nova-dark-rgb, 149, 117, 205), 0.25);
    }
</style>

<section id="tentangKamiPendidikanInterdisipliner" class="section-nova-uni">
    <div class="container">
        <div class="section-title-nova-uni" data-aos="fade-up">
            <h2>Manifesto <span style="color:var(--secondary-nova);">Interdisipliner</span></h2>
            <p class="subtitle-nova-uni">Di Nova Universitas, Kami Merayakan Persimpangan Seni, Sains, dan Teknologi Digital.</p>
        </div>

        <div class="row align-items-center gy-5">
            <div class="col-lg-6 about-interdisipliner-content" data-aos="fade-right" data-aos-duration="900">
                <h3>Menyulam Benang Kreativitas dan Logika.</h3>
                <p class="interdisipliner-manifesto">
                    Kami percaya bahwa inovasi sejati lahir dari pertemuan berbagai disiplin ilmu. Nova Universitas adalah wadah di mana imajinasi artistik bertemu dengan ketajaman analitis sains, dan keduanya diperkuat oleh kekuatan transformatif teknologi digital.
                </p>
                <p>
                    Kurikulum kami dirancang untuk merangsang pemikiran kritis, mendorong eksplorasi lintas batas, dan membekali mahasiswa dengan kemampuan untuk melihat masalah dari berbagai perspektif. Kami tidak hanya mengajarkan teori, tetapi juga menginspirasi penciptaan solusi nyata untuk tantangan dunia yang kompleks.
                </p>
            </div>
            <div class="col-lg-6 about-image-interdisipliner-wrapper" data-aos="fade-left" data-aos-duration="900" data-aos-delay="100">
                <img src="https://placehold.co/550x450/FFFFFF/7C4DFF?text=Kolaborasi+Seni+%26+Sains&font=syne" alt="[Ilustrasi Kolaborasi Seni dan Sains yang Dinamis]" class="img-fluid about-image-interdisipliner">
            </div>
        </div>

        <div class="pillars-interdisipliner row gy-4 mt-5 pt-4">
            <div class="col-md-12 section-title-nova-uni text-center" data-aos="fade-up" data-aos-delay="150">
                <h3 style="font-size: 2.2rem; color: var(--primary-nova);">Pilar Pendekatan Kami</h3>
                <?php /* Komentar PHP: Judul sub-bagian */ ?>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-delay="200">
                <div class="pillar-item-interdisipliner">
                    <div class="pillar-icon-interdisipliner">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                            <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A6 6 0 0 1 2 6zm6 8.5a.5.5 0 0 0 .5-.5h-1a.5.5 0 0 0 .5.5zM8 1a4 4 0 0 0-4 4h8a4 4 0 0 0-4-4z" />
                        </svg>
                    </div>
                    <div class="pillar-text-iu">
                        <h5 class="pillar-title-interdisipliner">Eksplorasi Kreatif</h5>
                        <p class="pillar-desc-interdisipliner">Mendorong mahasiswa untuk bereksperimen, mengambil risiko, dan menemukan suara unik mereka.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-delay="300">
                <div class="pillar-item-interdisipliner">
                    <div class="pillar-icon-interdisipliner">
                        <svg xmlns="http://www.w3.org/2000/svg" stroke="currentColor" fill="none" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <circle cx="12" cy="12" r="1.5" fill="currentColor" stroke="none" />
                            <ellipse cx="12" cy="12" rx="10" ry="4" stroke-width="1.5" transform="rotate(45 12 12)" />
                            <ellipse cx="12" cy="12" rx="10" ry="4" stroke-width="1.5" transform="rotate(-45 12 12)" />
                            <ellipse cx="12" cy="12" rx="4" ry="10" stroke-width="1.5" />
                        </svg>
                    </div>
                    <div class="pillar-text-iu">
                        <h5 class="pillar-title-interdisipliner">Riset Berbasis Sains</h5>
                        <p class="pillar-desc-interdisipliner">Menggunakan metodologi ilmiah yang ketat untuk inovasi dan penemuan baru.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-delay="400">
                <div class="pillar-item-interdisipliner">
                    <div class="pillar-icon-interdisipliner">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                            <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z" />
                        </svg>
                    </div>
                    <div class="pillar-text-iu">
                        <h5 class="pillar-title-interdisipliner">Literasi Digital Mendalam</h5>
                        <p class="pillar-desc-interdisipliner">Menguasai alat dan platform digital terkini untuk implementasi ide yang efektif.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>