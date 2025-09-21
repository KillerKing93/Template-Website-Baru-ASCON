<?php // File: components/testimonials_soft.php 
?>
<style>
    /* Soft Testimonials Component Styles */
    #testimonialsSoft {
        background-color: #FFFFFF;
        /* Latar putih bersih di light mode */
        padding: 80px 0 100px 0;
        /* Padding bawah lebih untuk pagination */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #testimonialsSoft {
        background-color: var(--card-bg-dark);
    }

    .testimonial-item-soft {
        text-align: center;
        padding: 30px 20px;
        background-color: var(--card-bg-light);
        /* Default light */
        border-radius: 10px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.06);
        margin: 0 15px;
        /* Untuk Swiper spaceBetween */
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    body.dark-mode .testimonial-item-soft {
        background-color: var(--bg-dark);
        /* Lebih gelap dari section di dark mode */
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
    }

    .testimonial-item-soft .testimonial-img-soft {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 3px solid var(--secondary-calm);
        /* Border dengan warna sekunder */
        margin: 0 auto 20px auto;
        object-fit: cover;
        transition: border-color 0.3s ease;
    }

    body.dark-mode .testimonial-item-soft .testimonial-img-soft {
        border-color: var(--accent-calm);
    }


    .testimonial-item-soft h5.client-name-soft {
        font-family: 'Raleway', sans-serif;
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 5px;
        color: var(--primary-calm);
        /* Warna nama klien */
    }

    body.dark-mode .testimonial-item-soft h5.client-name-soft {
        color: var(--accent-calm);
    }

    .testimonial-item-soft p.client-title-soft {
        font-size: 0.9rem;
        color: #6c757d;
        /* Warna jabatan */
        margin-bottom: 15px;
        font-style: italic;
        transition: color 0.3s ease;
    }

    body.dark-mode .testimonial-item-soft p.client-title-soft {
        color: #adb5bd;
    }

    .testimonial-item-soft .stars-soft i {
        color: #FFD700;
        /* Warna bintang (Gold) */
        margin: 0 2px 15px 2px;
    }

    .testimonial-item-soft p.quote-soft {
        font-style: italic;
        color: #495057;
        /* Warna kutipan */
        line-height: 1.7;
        font-size: 1rem;
        margin: 0 auto;
        max-width: 90%;
        /* Agar tidak terlalu lebar */
        transition: color 0.3s ease;
    }

    body.dark-mode .testimonial-item-soft p.quote-soft {
        color: #ced4da;
    }

    .testimonial-item-soft .quote-icon-soft {
        color: var(--secondary-calm);
        /* Warna ikon kutipan */
        font-size: 1.5rem;
        opacity: 0.5;
        margin: 0 5px;
        transition: color 0.3s ease;
    }

    body.dark-mode .testimonial-item-soft .quote-icon-soft {
        color: var(--accent-calm);
    }

    /* Swiper Pagination Styling */
    .testimonials-slider-soft .swiper-pagination {
        margin-top: 30px;
        /* Jarak dari slider */
        position: relative;
        /* Agar tidak absolut */
        bottom: auto;
    }

    .testimonials-slider-soft .swiper-pagination .swiper-pagination-bullet {
        width: 10px;
        height: 10px;
        background-color: #ccc;
        /* Warna bullet tidak aktif */
        opacity: 1;
        border: 1px solid var(--secondary-calm);
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    .testimonials-slider-soft .swiper-pagination .swiper-pagination-bullet-active {
        background-color: var(--secondary-calm);
        /* Warna bullet aktif */
    }

    body.dark-mode .testimonials-slider-soft .swiper-pagination .swiper-pagination-bullet {
        background-color: #555;
        border-color: var(--accent-calm);
    }

    body.dark-mode .testimonials-slider-soft .swiper-pagination .swiper-pagination-bullet-active {
        background-color: var(--accent-calm);
    }
</style>

<section id="testimonialsSoft" class="section-calm">
    <div class="container" data-aos="fade-up">
        <div class="section-title-calm">
            <h2>Apa Kata Klien Kami</h2>
            <p class="subtitle-calm">Pengalaman dan Kesan Mereka Setelah Bekerja Sama dengan Kami.</p>
        </div>

        <div class="testimonials-slider-soft swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-item-soft">
                        <img src="https://placehold.co/100x100/A8DADC/212529?text=Klien+1" class="testimonial-img-soft" alt="[Foto Klien 1]">
                        <h5 class="client-name-soft">Rina Hartati</h5>
                        <p class="client-title-soft">Pemilik Butik Lokal</p>
                        <div class="stars-soft">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="quote-soft">
                            <i class="fas fa-quote-left quote-icon-soft"></i>
                            Tim [NamaBisnis Anda] sangat membantu dalam membangun kehadiran online butik saya. Desain websitenya sangat elegan dan mudah digunakan.
                            <i class="fas fa-quote-right quote-icon-soft"></i>
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-item-soft">
                        <img src="https://placehold.co/100x100/F4A261/212529?text=Klien+2" class="testimonial-img-soft" alt="[Foto Klien 2]">
                        <h5 class="client-name-soft">Budi Prakoso</h5>
                        <p class="client-title-soft">Manajer Kafe & Resto</p>
                        <div class="stars-soft">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="quote-soft">
                            <i class="fas fa-quote-left quote-icon-soft"></i>
                            Sangat puas dengan layanan pembuatan aplikasi pemesanan. Prosesnya cepat dan hasilnya melebihi ekspektasi. Pelanggan kami menyukainya!
                            <i class="fas fa-quote-right quote-icon-soft"></i>
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-item-soft">
                        <img src="https://placehold.co/100x100/6C757D/FFFFFF?text=Klien+3" class="testimonial-img-soft" alt="[Foto Klien 3]">
                        <h5 class="client-name-soft">Anita Dewi</h5>
                        <p class="client-title-soft">Konsultan Independen</p>
                        <div class="stars-soft">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                        </div>
                        <p class="quote-soft">
                            <i class="fas fa-quote-left quote-icon-soft"></i>
                            Profesional, responsif, dan sangat memahami kebutuhan saya untuk website portofolio. Hasilnya bersih dan modern. Terima kasih banyak!
                            <i class="fas fa-quote-right quote-icon-soft"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inisialisasi Swiper.js untuk testimonials slider
        // Swiper CSS & JS sudah di-include di index.php
        if (typeof Swiper !== 'undefined') {
            new Swiper('.testimonials-slider-soft', {
                speed: 700, // Kecepatan transisi
                loop: true,
                autoplay: {
                    delay: 6000, // Waktu ganti slide
                    disableOnInteraction: false
                },
                slidesPerView: 1, // Default untuk mobile
                spaceBetween: 30,
                pagination: {
                    el: '.testimonials-slider-soft .swiper-pagination',
                    clickable: true
                },
                breakpoints: { // Responsif
                    768: {
                        slidesPerView: 2
                    },
                    992: {
                        slidesPerView: 3
                    }
                }
            });
        } else {
            console.warn('Swiper library not loaded for soft testimonials.');
        }
    });
</script>