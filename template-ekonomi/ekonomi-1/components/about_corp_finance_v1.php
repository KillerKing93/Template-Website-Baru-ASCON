<?php // File: components_econ_v1/about_corp_finance_v1.php - Tentang Kami Perusahaan Ekonomi (Perbaikan V2) 
?>
<style>
    /* Styles untuk Tentang Kami Section Perusahaan Ekonomi */
    #aboutCorpFinance {
        background-color: var(--card-bg-light-econ);
        border-bottom: 1px solid var(--border-light-econ);
    }

    body.dark-mode #aboutCorpFinance {
        background-color: var(--card-bg-dark-econ);
        border-bottom: 1px solid var(--border-dark-econ);
    }

    .about-content-econ .about-image-container {
        position: relative;
        padding: 8px;
        /* Padding frame sedikit dikurangi */
        background-color: var(--bg-light-econ);
        border-radius: 10px;
        /* Radius disesuaikan */
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.06);
        /* Shadow disesuaikan */
    }

    body.dark-mode .about-content-econ .about-image-container {
        background-color: var(--bg-dark-econ);
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.12);
    }

    .about-content-econ img.about-main-image {
        border-radius: 6px;
        /* Radius gambar disesuaikan */
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        /* Shadow gambar disesuaikan */
        display: block;
        /* Untuk menghilangkan spasi bawah jika ada */
    }

    body.dark-mode .about-content-econ img.about-main-image {
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .about-text-econ h3 {
        color: var(--primary-econ);
        font-size: 1.9rem;
        margin-bottom: 12px;
        /* Margin disesuaikan */
    }

    body.dark-mode .about-text-econ h3 {
        color: var(--primary-econ-dark);
    }

    .about-text-econ .lead-about-econ {
        font-size: 1.1rem;
        font-weight: 500;
        color: var(--muted-text-light-econ);
        margin-bottom: 18px;
        /* Margin disesuaikan */
        font-style: normal;
        border-left: 3px solid var(--secondary-econ);
        padding-left: 12px;
        /* Padding kiri disesuaikan */
        line-height: 1.6;
        /* Spasi baris */
    }

    body.dark-mode .about-text-econ .lead-about-econ {
        color: var(--muted-text-dark-econ);
        border-left-color: var(--secondary-econ-dark);
    }

    .about-text-econ p {
        margin-bottom: 0.9rem;
        /* Margin paragraf disesuaikan */
        font-size: 0.95rem;
        /* Ukuran font paragraf */
        line-height: 1.7;
    }

    .about-features-econ .feature-item-econ {
        display: flex;
        align-items: flex-start;
        margin-bottom: 15px;
    }

    .about-features-econ .feature-icon-econ {
        font-size: 1.5rem;
        color: var(--secondary-econ);
        margin-right: 10px;
        /* Margin ikon disesuaikan */
        width: 30px;
        /* Lebar ikon disesuaikan */
        flex-shrink: 0;
        padding-top: 1px;
    }

    body.dark-mode .about-features-econ .feature-icon-econ {
        color: var(--secondary-econ-dark);
    }

    .about-features-econ .feature-text-econ h5 {
        font-size: 1rem;
        font-weight: 600;
        font-family: 'Montserrat', sans-serif;
        text-transform: none;
        letter-spacing: 0;
        margin-bottom: 2px;
        color: var(--text-light-econ);
    }

    body.dark-mode .about-features-econ .feature-text-econ h5 {
        color: var(--text-dark-econ);
    }

    .about-features-econ .feature-text-econ p {
        font-size: 0.85rem;
        /* Deskripsi fitur sedikit lebih kecil */
        color: var(--muted-text-light-econ);
        margin-bottom: 0;
        line-height: 1.55;
    }

    body.dark-mode .about-features-econ .feature-text-econ p {
        color: var(--muted-text-dark-econ);
    }
</style>

<section id="about" class="about-econ-v1 section-econ">
    <div class="container">
        <div class="section-title-econ" data-aos="fade-up">
            <h2>Tentang QuantumLeap Finance</h2>
            <p class="subtitle-econ">Memahami Visi, Misi, dan Nilai Inti yang Mendasari Setiap Langkah Kami dalam Memberikan Solusi Keuangan Terbaik.</p>
        </div>

        <div class="row align-items-center gy-4 gy-lg-5">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <div class="about-content-econ">
                    <div class="about-image-container">
                        <img src="https://placehold.co/550x420/005A9C/FFFFFF?text=Tim+QuantumLeap+Berdiskusi&font=oswald"
                            alt="[Gambar Tim QuantumLeap Finance sedang berdiskusi strategi keuangan]"
                            class="img-fluid w-100 about-main-image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                <div class="about-text-econ">
                    <h3>Mendorong Pertumbuhan Ekonomi Melalui Keahlian dan Inovasi Finansial.</h3>
                    <p class="lead-about-econ">
                        QuantumLeap Finance didirikan dengan keyakinan bahwa setiap bisnis memiliki potensi untuk tumbuh dan berkembang pesat dengan strategi keuangan yang tepat.
                    </p>
                    <p>
                        Kami adalah tim profesional yang terdiri dari analis keuangan berpengalaman, konsultan strategis, dan pakar pasar modal yang berdedikasi untuk memberikan solusi finansial yang komprehensif dan disesuaikan. Misi kami adalah menjadi mitra terpercaya Anda dalam navigasi kompleksitas dunia ekonomi, membantu Anda membuat keputusan yang cerdas dan mencapai tujuan finansial jangka panjang.
                    </p>
                    <div class="about-features-econ mt-4">
                        <div class="feature-item-econ" data-aos="fade-up" data-aos-delay="300">
                            <div class="feature-icon-econ"><i class="fas fa-lightbulb"></i></div>
                            <div class="feature-text-econ">
                                <h5>Inovasi Berkelanjutan</h5>
                                <p>Kami terus mencari pendekatan baru dan solusi kreatif untuk tantangan finansial modern.</p>
                            </div>
                        </div>
                        <div class="feature-item-econ" data-aos="fade-up" data-aos-delay="400">
                            <div class="feature-icon-econ"><i class="fas fa-users"></i></div>
                            <div class="feature-text-econ">
                                <h5>Klien Sebagai Prioritas</h5>
                                <p>Kesuksesan Anda adalah prioritas utama kami, kami bekerja erat untuk memahami dan memenuhi kebutuhan Anda.</p>
                            </div>
                        </div>
                        <div class="feature-item-econ" data-aos="fade-up" data-aos-delay="500">
                            <div class="feature-icon-econ"><i class="fas fa-shield-alt"></i></div>
                            <div class="feature-text-econ">
                                <h5>Integritas dan Kepercayaan</h5>
                                <p>Kami menjunjung tinggi standar etika dan transparansi dalam setiap layanan yang kami berikan.</p>
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
            // Animasi untuk feature items saat masuk viewport (jika AOS tidak cukup)
            const featureItems = document.querySelectorAll('#aboutCorpFinance .feature-item-econ');
            if (featureItems.length > 0) {
                // Menggunakan Intersection Observer untuk memicu animasi Anime.js saat elemen terlihat
                const observerOptions = {
                    root: null, // relatif terhadap viewport
                    rootMargin: '0px',
                    threshold: 0.2 // trigger saat 20% elemen terlihat
                };

                const featureObserver = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const icon = entry.target.querySelector('.feature-icon-econ');
                            const text = entry.target.querySelector('.feature-text-econ');

                            if (icon) {
                                anime({
                                    targets: icon,
                                    scale: [0.7, 1],
                                    opacity: [0, 1],
                                    duration: 600,
                                    easing: 'easeOutElastic(1, .6)'
                                });
                            }
                            if (text) {
                                anime({
                                    targets: text,
                                    translateX: [-20, 0],
                                    opacity: [0, 1],
                                    duration: 700,
                                    delay: 100, // sedikit delay setelah ikon
                                    easing: 'easeOutCubic'
                                });
                            }
                            observer.unobserve(entry.target); // Hentikan observasi setelah animasi pertama
                        }
                    });
                }, observerOptions);

                featureItems.forEach(item => {
                    // Set opacity awal ke 0 untuk animasi masuk
                    const icon = item.querySelector('.feature-icon-econ');
                    const text = item.querySelector('.feature-text-econ');
                    if (icon) icon.style.opacity = '0';
                    if (text) text.style.opacity = '0';

                    featureObserver.observe(item);
                });
            }
        } else {
            // Fallback jika Anime.js tidak ada, AOS akan menangani fade-up dasar
        }
    });
</script>