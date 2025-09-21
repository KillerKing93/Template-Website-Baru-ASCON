<?php // File: components_econ_v2/about_econ_v2.php - Tentang Kami Vertex Capital Partners (Perbaikan Frame Gambar) 
?>
<style>
    /* Styles untuk Tentang Kami Section Vertex Capital Partners */
    #aboutVertex {
        background-color: var(--card-bg-light-vertex);
        border-bottom: 1px solid var(--border-light-vertex);
    }

    body.dark-mode #aboutVertex {
        background-color: var(--card-bg-dark-vertex);
        border-bottom: 1px solid var(--border-dark-vertex);
    }

    .about-image-column-vertex {
        /* Style baru untuk kolom gambar */
        display: flex;
        justify-content: center;
        /* Menengahkan wrapper gambar jika lebih kecil dari kolom */
        align-items: center;
    }

    .about-image-wrapper-vertex {
        position: relative;
        padding: 10px;
        /* Padding untuk efek "frame" */
        background-color: var(--bg-light-vertex);
        border-radius: 10px;
        box-shadow: 0 8px 25px rgba(var(--primary-vertex-rgb), 0.07);
        /* Shadow lebih halus */
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        display: inline-block;
        /* Agar wrapper menyesuaikan ukuran gambar + padding */
        max-width: 100%;
        /* Pastikan wrapper tidak melebihi kolom */
    }

    body.dark-mode .about-image-wrapper-vertex {
        background-color: var(--bg-dark-vertex);
        box-shadow: 0 8px 25px rgba(var(--primary-vertex-dark-rgb), 0.09);
    }

    .about-image-wrapper-vertex:hover {
        transform: translateY(-7px) scale(1.01);
        /* Efek hover lebih subtle */
        box-shadow: 0 12px 30px rgba(var(--primary-vertex-rgb), 0.1);
    }

    body.dark-mode .about-image-wrapper-vertex:hover {
        box-shadow: 0 12px 30px rgba(var(--primary-vertex-dark-rgb), 0.13);
    }

    .about-image-vertex {
        border-radius: 5px;
        /* Sudut gambar di dalam frame lebih kecil */
        display: block;
        max-width: 100%;
        /* Pastikan gambar responsif di dalam wrapper */
        height: auto;
        /* Menjaga aspek rasio */
    }

    .about-text-vertex h3.about-main-title {
        color: var(--primary-vertex);
        font-size: clamp(1.8rem, 4vw, 2.2rem);
        font-weight: 700;
        margin-bottom: 15px;
        line-height: 1.3;
    }

    body.dark-mode .about-text-vertex h3.about-main-title {
        color: var(--primary-vertex-dark);
    }

    .about-text-vertex p.about-tagline {
        font-size: 1.15rem;
        font-weight: 500;
        color: var(--secondary-vertex);
        margin-bottom: 20px;
        font-style: normal;
        line-height: 1.6;
        font-family: 'Raleway', sans-serif;
    }

    body.dark-mode .about-text-vertex p.about-tagline {
        color: var(--secondary-vertex-dark);
    }

    .about-text-vertex p {
        margin-bottom: 1rem;
        font-size: 1rem;
        line-height: 1.75;
        color: var(--muted-text-light-vertex);
    }

    body.dark-mode .about-text-vertex p {
        color: var(--muted-text-dark-vertex);
    }

    .about-key-points-vertex {
        margin-top: 25px;
    }

    .key-point-item-vertex {
        display: flex;
        align-items: flex-start;
        margin-bottom: 18px;
        padding: 10px 0;
        /* Kurangi padding, karena background hover diatur di sini */
        border-radius: 6px;
        background-color: transparent;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .key-point-item-vertex:hover {
        /* background-color: rgba(var(--secondary-vertex-rgb), 0.05); Dihilangkan jika tidak diinginkan */
        /* transform: translateX(5px); */
    }

    /* body.dark-mode .key-point-item-vertex:hover {
         background-color: rgba(var(--secondary-vertex-dark-rgb), 0.08);
    } */

    .key-point-item-vertex .key-point-icon-vertex {
        font-size: 1.6rem;
        color: var(--secondary-vertex);
        margin-right: 15px;
        width: 30px;
        flex-shrink: 0;
        padding-top: 3px;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    body.dark-mode .key-point-item-vertex .key-point-icon-vertex {
        color: var(--secondary-vertex-dark);
    }

    .key-point-item-vertex:hover .key-point-icon-vertex {
        /* Efek pada ikon saat item dihover */
        color: var(--primary-vertex);
        transform: scale(1.1);
    }

    body.dark-mode .key-point-item-vertex:hover .key-point-icon-vertex {
        color: var(--primary-vertex-dark);
    }

    .key-point-item-vertex .key-point-text-vertex h5 {
        font-size: 1.05rem;
        font-weight: 700;
        font-family: 'Raleway', sans-serif;
        text-transform: none;
        letter-spacing: 0;
        margin-bottom: 4px;
        color: var(--text-light-vertex);
    }

    body.dark-mode .key-point-item-vertex .key-point-text-vertex h5 {
        color: var(--text-dark-vertex);
    }

    .key-point-item-vertex .key-point-text-vertex p {
        font-size: 0.9rem;
        color: var(--muted-text-light-vertex);
        margin-bottom: 0;
        line-height: 1.6;
    }

    body.dark-mode .key-point-item-vertex .key-point-text-vertex p {
        color: var(--muted-text-dark-vertex);
    }

    /* Elemen dekoratif dipindahkan ke CSS global jika ingin ada di semua section serupa */
    /* atau biarkan jika hanya spesifik untuk section ini */
    #aboutVertex::before {
        content: '';
        position: absolute;
        top: 10%;
        left: -80px;
        width: 200px;
        height: 200px;
        background-color: rgba(var(--primary-vertex-rgb), 0.03);
        border-radius: 50% 30% 40% 60%;
        transform: rotate(30deg);
        z-index: 0;
        opacity: 0;
        transition: background-color 0.3s ease, opacity 0.8s ease;
    }

    #aboutVertex::after {
        content: '';
        position: absolute;
        bottom: 5%;
        right: -100px;
        width: 250px;
        height: 250px;
        background-color: rgba(var(--secondary-vertex-rgb), 0.03);
        border-radius: 40% 60% 50% 30%;
        transform: rotate(-25deg);
        z-index: 0;
        opacity: 0;
        transition: background-color 0.3s ease, opacity 0.8s ease;
    }

    body.dark-mode #aboutVertex::before {
        background-color: rgba(var(--primary-vertex-dark-rgb), 0.04);
    }

    body.dark-mode #aboutVertex::after {
        background-color: rgba(var(--secondary-vertex-dark-rgb), 0.04);
    }

    [data-aos="deco-shape-about"]#aboutVertex::before,
    [data-aos="deco-shape-about"]#aboutVertex::after {
        opacity: 1;
    }
</style>

<section id="aboutVertex" class="about-vertex-v2 section-vertex" data-aos="deco-shape-about" data-aos-anchor-placement="top-bottom" data-aos-delay="300" data-aos-duration="1000">
    <div class="container position-relative z-1">
        <div class="section-title-vertex" data-aos="fade-up">
            <h2>Mengenal Vertex Capital Partners</h2>
            <p class="subtitle-vertex">Keahlian, Integritas, dan Inovasi sebagai Landasan Strategi Investasi dan Pertumbuhan Klien Kami.</p>
        </div>

        <div class="row align-items-center gy-4 gy-lg-5">
            <div class="col-lg-6 about-image-column-vertex" data-aos="fade-right" data-aos-duration="800"> <?php // Kolom gambar diberi class baru 
                                                                                                            ?>
                <div class="about-image-wrapper-vertex">
                    <img src="https://placehold.co/520x400/1976D2/FFFFFF" <?php // Ukuran placeholder sedikit disesuaikan 
                                                                            ?>
                        alt="[Gambar Tim Vertex Capital Partners sedang meeting strategi]"
                        class="img-fluid about-image-vertex">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800" data-aos-delay="150">
                <div class="about-text-vertex">
                    <h3 class="about-main-title">Memimpin Perubahan, Menciptakan Nilai Jangka Panjang.</h3>
                    <p class="about-tagline">
                        Di Vertex Capital Partners, kami mendedikasikan diri untuk menjadi katalisator pertumbuhan dan inovasi bagi para mitra dan klien kami.
                    </p>
                    <p>
                        Dengan pemahaman mendalam tentang dinamika pasar global dan keahlian analitis yang tajam, kami mengidentifikasi peluang investasi strategis dan mengembangkan solusi keuangan yang disesuaikan. Kami percaya pada pendekatan kolaboratif, membangun hubungan yang kuat berdasarkan kepercayaan dan tujuan bersama.
                    </p>
                    <p>
                        Tim kami terdiri dari para profesional berpengalaman dengan rekam jejak yang terbukti dalam manajemen aset, konsultasi strategis, dan pengembangan bisnis.
                    </p>
                    <div class="about-key-points-vertex">
                        <div class="key-point-item-vertex" data-aos="fade-up" data-aos-delay="300">
                            <div class="key-point-icon-vertex"><i class="fas fa-chart-line"></i></div>
                            <div class="key-point-text-vertex">
                                <h5>Analisis Pasar Mendalam</h5>
                                <p>Riset komprehensif untuk keputusan investasi yang terinformasi.</p>
                            </div>
                        </div>
                        <div class="key-point-item-vertex" data-aos="fade-up" data-aos-delay="400">
                            <div class="key-point-icon-vertex"><i class="fas fa-users-cog"></i></div>
                            <div class="key-point-text-vertex">
                                <h5>Strategi Kustomisasi</h5>
                                <p>Solusi yang dirancang khusus untuk memenuhi tujuan unik setiap klien.</p>
                            </div>
                        </div>
                        <div class="key-point-item-vertex" data-aos="fade-up" data-aos-delay="500">
                            <div class="key-point-icon-vertex"><i class="fas fa-shield-alt"></i></div>
                            <div class="key-point-text-vertex">
                                <h5>Manajemen Risiko Proaktif</h5>
                                <p>Pendekatan disiplin untuk melindungi dan mengoptimalkan aset Anda.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof anime !== 'undefined') {
            const aboutMainTitle = document.querySelector('#aboutVertex .about-main-title');
            if (aboutMainTitle && !aboutMainTitle.classList.contains('aos-animate')) {
                // Hanya jalankan jika AOS belum menganimasikan (jika AOS di-disable untuk elemen ini)
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const textWrapper = entry.target;
                            textWrapper.innerHTML = textWrapper.textContent.replace(/\S+/g, "<span class='word'>$&</span>");

                            anime.timeline({
                                    loop: false
                                })
                                .add({
                                    targets: textWrapper.querySelectorAll('.word'),
                                    opacity: [0, 1],
                                    translateY: [20, 0],
                                    easing: "easeOutExpo",
                                    duration: 600, // Durasi sedikit lebih cepat
                                    delay: (el, i) => 80 * i + (parseInt(entry.target.closest('[data-aos-delay]')?.dataset.aosDelay || 0) + 100)
                                });
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.4
                });

                aboutMainTitle.style.opacity = 0;
                observer.observe(aboutMainTitle);
            }

            // Animasi untuk elemen dekoratif ::before dan ::after pada #aboutVertex
            // Menggunakan atribut data-aos untuk memicu class, lalu CSS transition atau Anime.js bisa digunakan
            // Jika menggunakan data-aos="deco-shape-about" seperti di HTML:
            const aboutSectionForDeco = document.getElementById('aboutVertex');
            if (aboutSectionForDeco && aboutSectionForDeco.classList.contains('aos-animate')) {
                // Animate opacity via JS (contoh, CSS transition lebih disarankan untuk ini)
                // aboutSectionForDeco.style.setProperty('--deco-opacity', 1); // Jika menggunakan var di CSS
            }

        }
    });
</script>