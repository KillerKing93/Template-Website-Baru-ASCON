<?php // File: components/about_deconstructed.php 
?>
<style>
    /* About Deconstructed Component Styles */
    :root {
        /* Variabel dari index.php */
        --dark-bg-secondary: #0F084B;
        --primary-accent: #FF00E4;
        --secondary-accent: #00F5D4;
        --text-light: #F0F0F0;
        --text-muted-cyber: #A0A0C0;
        --border-cyber: rgba(0, 245, 212, 0.3);
    }

    #aboutDeconstructed {
        background-color: var(--dark-bg-secondary);
        /* Latar berbeda */
        border-top: 1px solid var(--border-cyber);
        border-bottom: 1px solid var(--border-cyber);
    }

    .about-deconstructed-grid {
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        /* 12 kolom grid */
        gap: 30px;
        align-items: center;
    }

    .about-text-block {
        grid-column: span 12;
        /* Default full width mobile */
        padding: 20px;
        position: relative;
        /* Untuk elemen pseudo */
    }

    @media (min-width: 768px) {

        /* Tablet dan lebih besar */
        .about-text-block.main-mission {
            grid-column: 2 / span 6;
            /* Kolom 2 sampai 7 */
            grid-row: 1;
        }

        .about-text-block.core-values {
            grid-column: 7 / span 5;
            /* Kolom 7 sampai 11 */
            grid-row: 2;
            margin-top: -50px;
            /* Overlap sedikit */
        }
    }

    @media (min-width: 992px) {

        /* Desktop */
        .about-text-block.main-mission {
            grid-column: 1 / span 5;
            /* Lebih ke kiri */
        }

        .about-text-block.core-values {
            grid-column: 7 / span 5;
            /* Tetap */
            margin-top: 0;
        }
    }


    .about-text-block h3 {
        font-size: 2.2rem;
        font-weight: 900;
        color: var(--secondary-accent);
        margin-bottom: 20px;
        line-height: 1.3;
    }

    .about-text-block h3 .highlight-pink {
        color: var(--primary-accent);
    }

    .about-text-block p {
        font-size: 1.05rem;
        color: var(--text-muted-cyber);
        line-height: 1.8;
        margin-bottom: 15px;
    }

    .about-text-block .values-list {
        list-style: none;
        padding-left: 0;
    }

    .about-text-block .values-list li {
        margin-bottom: 12px;
        display: flex;
        align-items: flex-start;
        color: var(--text-light);
    }

    .about-text-block .values-list li i {
        color: var(--primary-accent);
        margin-right: 12px;
        font-size: 1.2rem;
        margin-top: 4px;
        /* Sejajarkan dengan teks */
    }

    /* Elemen grafis dekonstruksi */
    .graphic-element-about {
        position: absolute;
        background-color: var(--primary-accent);
        opacity: 0.1;
        border-radius: 3px;
        pointer-events: none;
        /* Agar tidak mengganggu interaksi */
    }

    .graphic-line-1 {
        width: 150px;
        height: 3px;
        top: 10%;
        left: -50px;
        transform: rotate(-30deg);
    }

    .graphic-square-1 {
        width: 40px;
        height: 40px;
        bottom: 5%;
        right: -20px;
        transform: rotate(20deg);
    }

    .graphic-dots-pattern {
        /* Pola titik (bisa SVG atau pseudo elements) */
        /* Contoh dengan pseudo element */
        grid-column: 1 / -1;
        /* Span full width di belakang */
        grid-row: 1 / 3;
        height: 300px;
        background-image: radial-gradient(var(--border-cyber) 1px, transparent 1px);
        background-size: 15px 15px;
        opacity: 0.3;
        z-index: -1;
        /* Di belakang konten */
    }

    .about-image-deconstructed {
        grid-column: span 12;
        /* Default full width mobile */
        position: relative;
        padding: 20px;
    }

    @media (min-width: 768px) {
        .about-image-deconstructed.img-1 {
            grid-column: 8 / span 4;
            /* Kolom 8 sampai 11 */
            grid-row: 1;
            margin-top: 30px;
            /* Sedikit ke bawah */
        }

        .about-image-deconstructed.img-2 {
            grid-column: 2 / span 4;
            /* Kolom 2 sampai 5 */
            grid-row: 2;
            margin-top: -80px;
            /* Overlap */
        }
    }

    @media (min-width: 992px) {
        .about-image-deconstructed.img-1 {
            grid-column: 7 / span 5;
        }

        .about-image-deconstructed.img-2 {
            grid-column: 2 / span 4;
        }
    }

    .about-image-deconstructed img {
        width: 100%;
        border-radius: 8px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        border: 2px solid var(--border-cyber);
        object-fit: cover;
        max-height: 350px;
        /* Batasi tinggi gambar */
    }

    /* Efek frame/border tambahan */
    .about-image-deconstructed .img-frame-deco {
        position: absolute;
        border: 2px dashed var(--primary-accent);
        opacity: 0.4;
        z-index: -1;
    }

    .img-1 .img-frame-deco {
        top: -15px;
        left: -15px;
        right: 15px;
        bottom: 15px;
        border-radius: 10px;
    }

    .img-2 .img-frame-deco {
        top: 15px;
        left: 15px;
        right: -15px;
        bottom: -15px;
        border-radius: 10px;
    }
</style>

<section id="aboutDeconstructed" class="section-cyber">
    <div class="container">
        <div class="section-title-cyber" data-aos="fade-up">
            <h2 data-text="MANIFESTO KAMI">MANIFESTO KAMI</h2>
            <p class="subtitle-cyber">Memecah Batasan, Merangkai Masa Depan Digital Melalui Inovasi dan Kolaborasi.</p>
        </div>

        <div class="about-deconstructed-grid">
            <div class="graphic-dots-pattern d-none d-md-block"></div>
            <!-- {/* Hanya tampil di MD ke atas */} -->

            <div class="about-text-block main-mission" data-aos="fade-right" data-aos-delay="100">
                <div class="graphic-element-about graphic-line-1"></div>
                <h3>Misi: <span class="highlight-pink">Mendefinisikan Ulang</span> Kemungkinan</h3>
                <p>
                    Di QuantumLeap Solutions, kami tidak hanya mengikuti tren teknologi; kami menciptakannya. Misi kami adalah memberdayakan klien dengan solusi digital transformatif yang mendorong efisiensi, membuka peluang baru, dan menciptakan dampak berkelanjutan.
                </p>
                <p>
                    Kami percaya pada kekuatan kolaborasi, keahlian mendalam, dan pendekatan yang berpusat pada manusia untuk mengatasi tantangan paling kompleks sekalipun.
                </p>
            </div>

            <div class="about-image-deconstructed img-1" data-aos="zoom-in" data-aos-delay="200">
                <img src="https://placehold.co/500x350/0F084B/FF00E4?text=Inovasi+Tim" alt="[Gambar Tim sedang berinovasi]">
                <div class="img-frame-deco"></div>
            </div>

            <div class="about-image-deconstructed img-2" data-aos="zoom-in" data-aos-delay="300">
                <img src="https://placehold.co/500x350/0F084B/00F5D4?text=Kolaborasi+Kreatif" alt="[Gambar Kolaborasi tim kreatif]">
                <div class="img-frame-deco"></div>
            </div>

            <div class="about-text-block core-values" data-aos="fade-left" data-aos-delay="400">
                <div class="graphic-element-about graphic-square-1"></div>
                <h3>Nilai Inti <span class="highlight-pink">Penggerak</span> Kami</h3>
                <ul class="values-list">
                    <li><i class="fas fa-rocket"></i> <strong>Inovasi Radikal:</strong> Berani berpikir di luar kotak dan menantang status quo.</li>
                    <li><i class="fas fa-handshake"></i> <strong>Kemitraan Sejati:</strong> Sukses klien adalah sukses kami; kami membangun hubungan jangka panjang.</li>
                    <li><i class="fas fa-brain"></i> <strong>Kecerdasan Adaptif:</strong> Terus belajar, berkembang, dan beradaptasi dengan lanskap teknologi yang dinamis.</li>
                    <li><i class="fas fa-shield-alt"></i> <strong>Integritas Tanpa Kompromi:</strong> Kejujuran dan transparansi dalam setiap tindakan.</li>
                </ul>
                <a href="#contactMinimalistForm" class="btn-cyber-secondary mt-3">Diskusi Visi Anda</a>
            </div>

        </div>
    </div>
</section>