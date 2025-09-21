<?php // File: components_econ_v2/cta_econ_v2.php - Call to Action Vertex Capital Partners 
?>
<style>
    /* Styles untuk Call to Action Section Vertex Capital Partners */
    #ctaVertex {
        background-color: var(--primary-vertex);
        /* Latar belakang utama menggunakan warna primer */
        color: #FFFFFF;
        /* Teks putih untuk kontras */
        padding: 90px 0;
        position: relative;
        overflow: hidden;
        /* Untuk elemen dekoratif */
    }

    body.dark-mode #ctaVertex {
        background-color: var(--primary-vertex-dark);
        color: var(--text-dark-vertex);
        /* Teks terang di dark mode */
    }

    /* Elemen dekoratif bentuk gelombang/abstrak di background */
    #ctaVertex::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image:
            url("data:image/svg+xml,%3Csvg width='200' height='200' viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill-opacity='0.05' fill='%23FFFFFF'%3E%3Ccircle cx='100' cy='100' r='50'/%3E%3Ccircle cx='20' cy='20' r='30'/%3E%3Ccircle cx='180' cy='70' r='40'/%3E%3Ccircle cx='50' cy='170' r='25'/%3E%3C/g%3E%3C/svg%3E");
        background-repeat: repeat;
        opacity: 0.5;
        /* Opacity disesuaikan agar tidak terlalu dominan */
        animation: subtleWave 20s linear infinite;
        z-index: 0;
    }

    body.dark-mode #ctaVertex::before {
        background-image:
            url("data:image/svg+xml,%3Csvg width='200' height='200' viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill-opacity='0.04' fill='%23CCD6F6'%3E%3Ccircle cx='100' cy='100' r='50'/%3E%3Ccircle cx='20' cy='20' r='30'/%3E%3Ccircle cx='180' cy='70' r='40'/%3E%3Ccircle cx='50' cy='170' r='25'/%3E%3C/g%3E%3C/svg%3E");
    }


    @keyframes subtleWave {
        0% {
            background-position: 0px 0px;
        }

        100% {
            background-position: 200px 200px;
        }
    }

    .cta-content-vertex {
        position: relative;
        /* Di atas ::before */
        z-index: 1;
        text-align: center;
    }

    .cta-content-vertex h3.cta-title-vertex {
        font-size: clamp(2rem, 5vw, 2.8rem);
        font-weight: 800;
        /* Raleway sangat tebal */
        margin-bottom: 18px;
        color: #FFFFFF;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.25);
    }

    body.dark-mode .cta-content-vertex h3.cta-title-vertex {
        color: var(--text-dark-vertex);
        /* Teks terang di dark mode */
    }


    .cta-content-vertex p.cta-subtitle-vertex {
        font-size: clamp(1.05rem, 2.5vw, 1.2rem);
        margin-bottom: 30px;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
        opacity: 0.9;
        line-height: 1.7;
        font-family: 'Lato', sans-serif;
        /* Font Lato untuk subjudul */
        color: #FFFFFF;
    }

    body.dark-mode .cta-content-vertex p.cta-subtitle-vertex {
        color: var(--muted-text-dark-vertex);
    }


    .cta-content-vertex .btn-cta-vertex {
        padding: 14px 35px;
        font-size: 1rem;
        font-weight: 700;
        /* Tombol lebih tegas */
        /* Menggunakan class .btn-vertex-accent dari global style */
        /* Pastikan warna teks pada .btn-vertex-accent (di index.php) memiliki kontras yang baik. */
        /* Light mode: text: var(--text-light-vertex) -> #1E2D3B (Biru tua keabuan) */
        /* Dark mode: text: var(--bg-dark-vertex) -> #0A192F (Biru malam sangat gelap) */
        /* Ini memberikan kontras yang baik pada tombol kuning/oranye */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .cta-content-vertex .btn-cta-vertex:hover {
        transform: translateY(-4px) scale(1.03);
        /* Efek hover lebih dinamis */
        box-shadow: 0 8px 20px rgba(var(--accent-vertex-rgb), 0.4);
    }

    body.dark-mode .cta-content-vertex .btn-cta-vertex:hover {
        box-shadow: 0 8px 20px rgba(var(--accent-vertex-dark-rgb), 0.4);
    }
</style>

<section id="ctaVertex" class="cta-vertex-v2 section-vertex">
    <div class="container">
        <div class="cta-content-vertex">
            <h3 class="cta-title-vertex hero-content-item" data-aos="fade-down" data-aos-duration="700">
                Siap Mengoptimalkan Strategi Investasi Anda?
            </h3>
            <p class="cta-subtitle-vertex hero-content-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="700">
                Tim ahli di Vertex Capital Partners siap membantu Anda menavigasi pasar yang dinamis dan mencapai tujuan finansial Anda. Jadwalkan konsultasi komprehensif hari ini.
            </p>
            <div class="hero-content-item" data-aos="fade-up" data-aos-delay="200" data-aos-duration="700">
                <a href="#contactVertex" class="btn-vertex-accent btn-cta-vertex">
                    Mulai Konsultasi <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof anime !== 'undefined') {
            // Animasi untuk elemen-elemen CTA saat masuk viewport (jika AOS tidak cukup)
            // AOS sudah menangani fade-up/down dasar.
            // Ini bisa untuk efek yang lebih kompleks, misalnya per huruf atau dengan stagger yang lebih detail.

            // Contoh: Animasi untuk judul CTA jika ingin lebih detail
            const ctaTitle = document.querySelector('#ctaVertex .cta-title-vertex');
            if (ctaTitle) {
                // Menggunakan Intersection Observer untuk memicu animasi saat elemen terlihat
                // const observer = new IntersectionObserver((entries) => {
                //     entries.forEach(entry => {
                //         if (entry.isIntersecting) {
                //             // Pecah teks menjadi span per kata
                //             const textWrapper = entry.target;
                //             textWrapper.innerHTML = textWrapper.textContent.replace(/\S+/g, "<span class='word-cta'>$&</span>");

                //             anime.timeline({loop: false})
                //               .add({
                //                 targets: textWrapper.querySelectorAll('.word-cta'),
                //                 opacity: [0,1],
                //                 translateY: [30,0],
                //                 easing: "easeOutExpo",
                //                 duration: 800,
                //                 delay: (el, i) => 120 * i + (parseInt(entry.target.closest('[data-aos-delay]')?.dataset.aosDelay || 0) + 100)
                //               });
                //             observer.unobserve(entry.target); 
                //         }
                //     });
                // }, { threshold: 0.4 }); 

                // ctaTitle.style.opacity = 0; // Sembunyikan awal jika menggunakan script ini
                // observer.observe(ctaTitle);
            }
        }
    });
</script>