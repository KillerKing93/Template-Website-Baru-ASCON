<?php // File: components/about_storytelling.php 
?>
<style>
    /* About Storytelling Component Styles */
    :root {
        --primary-color: #6A11CB;
        --secondary-color: #2575FC;
        --accent-color: #00FFED;
        --card-bg: #1E1E1E;
        --border-color: rgba(0, 255, 237, 0.2);
        /* var(--accent-rgb), 0.2 */
    }

    #aboutStorytelling {
        background-color: var(--card-bg);
        /* Latar belakang sedikit lebih terang dari body */
        border-top: 1px solid var(--border-color);
        border-bottom: 1px solid var(--border-color);
    }

    .about-story-content h3 {
        font-size: 2.2rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 25px;
        line-height: 1.4;
    }

    .about-story-content .tagline {
        font-family: 'Roboto Mono', monospace;
        color: var(--accent-color);
        font-size: 1.1rem;
        margin-bottom: 20px;
        display: block;
        letter-spacing: 1px;
    }

    .about-story-content p {
        font-size: 1.05rem;
        line-height: 1.8;
        color: #B0B0B0;
        /* Teks lebih terang dari body utama */
        margin-bottom: 20px;
    }

    .about-image-collage {
        position: relative;
        min-height: 450px;
        /* Untuk memastikan ruang */
    }

    .about-image-collage .img-main {
        width: 70%;
        border-radius: 10px;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
        position: relative;
        z-index: 2;
        border: 3px solid var(--accent-color);
    }

    .about-image-collage .img-bg-element {
        position: absolute;
        border-radius: 10px;
    }

    .img-bg-1 {
        /* Elemen latar belakang 1 */
        width: 50%;
        height: 60%;
        background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
        opacity: 0.3;
        top: -10%;
        left: -5%;
        z-index: 1;
        transform: rotate(-15deg);
    }

    .img-bg-2 {
        /* Elemen latar belakang 2 - garis */
        width: 30%;
        height: 30%;
        border: 2px dashed var(--accent-color);
        opacity: 0.5;
        bottom: -5%;
        right: 0%;
        z-index: 1;
        transform: rotate(10deg);
    }

    /* Key Milestones / Values Section */
    .milestone-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 30px;
        padding: 20px;
        background-color: rgba(30, 30, 30, 0.5);
        /* var(--card-bg) dengan opacity */
        border-left: 4px solid var(--accent-color);
        border-radius: 0 8px 8px 0;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .milestone-item:hover {
        background-color: rgba(0, 255, 237, 0.1);
        /* var(--accent-color) dengan opacity */
        transform: translateX(5px);
    }

    .milestone-item .icon {
        font-size: 2.5rem;
        color: var(--accent-color);
        margin-right: 20px;
        flex-shrink: 0;
        /* Agar ikon tidak mengecil */
        line-height: 1;
    }

    .milestone-item .content h5 {
        font-size: 1.3rem;
        font-weight: 600;
        color: #fff;
        margin-bottom: 8px;
    }

    .milestone-item .content p {
        font-size: 0.95rem;
        color: #B0B0B0;
        margin-bottom: 0;
        line-height: 1.6;
    }
</style>

<section id="aboutStorytelling" class="section">
    <div class="container">
        <div class="section-title-futuristic" data-aos="fade-up">
            <h2>Kisah Kami</h2>
            <p class="subtitle">Perjalanan Inovasi dan Dedikasi Sejak Awal Berdiri</p>
        </div>

        <div class="row align-items-center gy-5">
            <div class="col-lg-6 order-lg-2" data-aos="fade-left" data-aos-delay="200">
                <div class="about-image-collage">
                    <div class="img-bg-element img-bg-1"></div>
                    <img src="https://placehold.co/600x400/1E1E1E/00FFED?text=Tim+Inovator" alt="[Gambar Tim Inovator Kami]" class="img-fluid img-main">
                    <div class="img-bg-element img-bg-2"></div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1 about-story-content" data-aos="fade-right" data-aos-delay="100">
                <span class="tagline">// Our Genesis & Mission</span>
                <h3>Dari Ide Sederhana Menjadi Kekuatan Digital Global</h3>
                <p>
                    Berawal dari sebuah visi untuk menjembatani kesenjangan teknologi, [NamaBisnis Anda] lahir dari semangat kolaborasi dan hasrat untuk inovasi. Kami memulai perjalanan ini dengan keyakinan bahwa setiap tantangan adalah peluang untuk menciptakan solusi yang berdampak.
                </p>
                <p>
                    Misi kami adalah memberdayakan bisnis dari semua skala melalui teknologi transformatif, membantu mereka tidak hanya beradaptasi dengan perubahan tetapi juga menjadi pemimpin di era digital. Kami percaya pada kemitraan sejati, di mana kesuksesan klien adalah tolok ukur keberhasilan kami.
                </p>
            </div>
        </div>

        <div class="row mt-5 pt-5">
            <!-- {/* Bagian Nilai atau Milestone */} -->
            <div class="col-12 section-title-futuristic" data-aos="fade-up">
                <h2 style="font-size: 2.2rem;">Nilai Inti Kami</h2>
                <!-- {/* Judul lebih kecil untuk sub-bagian */} -->
                <p class="subtitle" style="margin-top:10px;">Fondasi yang Memandu Setiap Langkah Kami</p>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="milestone-item">
                    <div class="icon"><i class="fas fa-lightbulb"></i></div>
                    <div class="content">
                        <h5>Inovasi Berkelanjutan</h5>
                        <p>Selalu mencari cara baru dan lebih baik untuk memecahkan masalah dan menciptakan nilai.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="milestone-item">
                    <div class="icon"><i class="fas fa-users"></i></div>
                    <div class="content">
                        <h5>Kemitraan Kolaboratif</h5>
                        <p>Bekerja sama secara erat dengan klien untuk memahami dan mencapai tujuan bersama.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="milestone-item">
                    <div class="icon"><i class="fas fa-shield-alt"></i></div>
                    <div class="content">
                        <h5>Integritas & Kepercayaan</h5>
                        <p>Menjunjung tinggi standar etika tertinggi dalam setiap interaksi dan keputusan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>