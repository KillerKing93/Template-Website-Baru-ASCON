<?php // File: components/lab_virtual_pendidikan.php 
?>
<style>
    /* Lab Virtual Pendidikan Styles */
    #labVirtualPendidikan {
        background-color: var(--bg-light-edu2);
        /* Default light */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #labVirtualPendidikan {
        background-color: var(--bg-dark-edu2);
    }

    .virtual-lab-content h3 {
        font-size: 2.4rem;
        font-weight: 700;
        /* Orbitron sudah bold */
        margin-bottom: 20px;
        color: var(--primary-edu2);
        line-height: 1.3;
    }

    body.dark-mode .virtual-lab-content h3 {
        color: var(--primary-edu2-dark);
    }

    .virtual-lab-content .lab-subtitle {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.15rem;
        font-weight: 500;
        color: var(--muted-text-light-edu2);
        margin-bottom: 25px;
    }

    body.dark-mode .virtual-lab-content .lab-subtitle {
        color: var(--muted-text-dark-edu2);
    }

    .virtual-lab-content p {
        font-size: 1rem;
        line-height: 1.8;
        margin-bottom: 18px;
    }

    .virtual-lab-features {
        margin-top: 30px;
    }

    .feature-item-lab {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        padding: 15px;
        background-color: rgba(var(--card-bg-light-edu2-rgb, 255, 255, 255), 0.7);
        border-radius: 6px;
        border-left: 3px solid var(--accent-edu2);
        transition: all 0.3s ease;
    }

    body.dark-mode .feature-item-lab {
        background-color: rgba(var(--card-bg-dark-edu2-rgb, 23, 42, 69), 0.7);
        border-left-color: var(--accent-edu2-dark);
    }

    .feature-item-lab:hover {
        transform: translateX(5px);
        box-shadow: 0 4px 15px rgba(var(--accent-edu2-rgb, 78, 205, 196), 0.1);
    }

    body.dark-mode .feature-item-lab:hover {
        box-shadow: 0 4px 15px rgba(var(--accent-edu2-dark-rgb, 111, 255, 233), 0.15);
    }

    .feature-item-lab .feature-icon-lab {
        font-size: 1.8rem;
        /* Ikon fitur lab */
        color: var(--accent-edu2);
        margin-right: 18px;
        width: 40px;
        /* Lebar tetap */
        text-align: center;
        flex-shrink: 0;
    }

    body.dark-mode .feature-item-lab .feature-icon-lab {
        color: var(--accent-edu2-dark);
    }

    .feature-item-lab .feature-text-lab {
        font-size: 1rem;
        font-weight: 500;
    }

    .virtual-lab-image-wrapper {
        position: relative;
        text-align: center;
    }

    .virtual-lab-image {
        border-radius: 10px;
        max-width: 100%;
        height: auto;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
        border: 1px solid var(--border-light-edu2);
    }

    body.dark-mode .virtual-lab-image {
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        border-color: var(--border-dark-edu2);
    }

    /* Tombol "Masuk Lab" di atas gambar */
    .btn-enter-lab {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 15px 35px !important;
        /* Ukuran tombol lebih besar */
        font-size: 1.1rem !important;
        opacity: 0;
        /* Awalnya tidak terlihat */
        transition: opacity 0.4s ease, transform 0.4s ease;
    }

    .virtual-lab-image-wrapper:hover .btn-enter-lab {
        opacity: 1;
        transform: translate(-50%, -50%) scale(1.05);
    }

    .virtual-lab-image-wrapper:hover .virtual-lab-image {
        filter: brightness(0.7);
        /* Gambar sedikit gelap saat tombol muncul */
    }
</style>

<section id="labVirtualPendidikan" class="section-eduverse">
    <div class="container">
        <div class="section-title-eduverse" data-aos="fade-up">
            <h2 data-text="LABORATORIUM VIRTUAL">LABORATORIUM <span class="highlight-accent-edu2" data-text="VIRTUAL">VIRTUAL</span></h2>
            <p class="subtitle-eduverse">Pengalaman Belajar Praktis Tanpa Batas Ruang dan Waktu Melalui Simulasi Interaktif.</p>
        </div>

        <div class="row align-items-center gy-5">
            <div class="col-lg-6 virtual-lab-content" data-aos="fade-right" data-aos-duration="900">
                <h3>Eksplorasi Sains & Teknologi di Ujung Jari Anda.</h3>
                <p class="lab-subtitle">
                    Masuki dunia eksperimen virtual yang aman, interaktif, dan dapat diakses kapan saja, di mana saja.
                </p>
                <p>
                    Lab Virtual EduVerse dirancang untuk memberikan pengalaman praktikum yang mendalam tanpa memerlukan peralatan fisik yang mahal atau berisiko. Siswa dapat melakukan berbagai percobaan, menganalisis data, dan memahami konsep-konsep kompleks dengan cara yang menyenangkan dan engaging.
                </p>
                <div class="virtual-lab-features">
                    <div class="feature-item-lab" data-aos="fade-right" data-aos-delay="100">
                        <div class="feature-icon-lab"><i class="fas fa-atom"></i></div>
                        <span class="feature-text-lab">Simulasi Fisika & Kimia Realistis</span>
                    </div>
                    <div class="feature-item-lab" data-aos="fade-right" data-aos-delay="200">
                        <div class="feature-icon-lab"><i class="fas fa-laptop-code"></i></div>
                        <span class="feature-text-lab">Lingkungan Coding & Jaringan Virtual</span>
                    </div>
                    <div class="feature-item-lab" data-aos="fade-right" data-aos-delay="300">
                        <div class="feature-icon-lab"><i class="fas fa-project-diagram"></i></div>
                        <span class="feature-text-lab">Desain & Prototyping Teknik Virtual</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 virtual-lab-image-wrapper" data-aos="zoom-in" data-aos-duration="900" data-aos-delay="100">
                <img src="https://placehold.co/600x450/172A45/CCD6F6?text=Simulasi+Lab+Virtual+EduVerse&font=orbitron" alt="[Ilustrasi Simulasi Laboratorium Virtual EduVerse]" class="img-fluid virtual-lab-image">
                <a href="#" class="btn-eduverse-primary btn-enter-lab">Masuk Lab Virtual <i class="fas fa-external-link-alt ms-2"></i></a>
            </div>
        </div>
    </div>
</section>