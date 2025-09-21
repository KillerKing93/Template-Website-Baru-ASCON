<?php // File: components/testimonials_carousel_refined.php 
?>
<style>
    /* Refined Testimonials Carousel Component Styles */
    #testimonialsCarouselRefined {
        background-color: var(--bg-light);
        /* Default light */
        padding: 80px 0 100px 0;
        /* Padding bawah lebih untuk navigasi/paginasi */
        transition: background-color 0.4s ease;
    }

    body.dark-mode #testimonialsCarouselRefined {
        background-color: var(--bg-dark);
    }

    .testimonial-item-refined {
        background-color: var(--card-bg-light);
        border-radius: 10px;
        padding: 35px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.07);
        margin: 0 15px;
        /* Untuk Swiper spaceBetween */
        text-align: left;
        /* Teks rata kiri */
        border-top: 4px solid var(--secondary-luminous);
        /* Aksen atas */
        transition: all 0.4s ease;
        min-height: 300px;
        /* Jaga tinggi konsisten */
        display: flex;
        flex-direction: column;
    }

    body.dark-mode .testimonial-item-refined {
        background-color: var(--card-bg-dark);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        border-top-color: var(--secondary-luminous-dark);
    }

    .testimonial-item-refined:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(138, 43, 226, 0.1);
        /* Warna primer */
    }

    body.dark-mode .testimonial-item-refined:hover {
        box-shadow: 0 12px 30px rgba(160, 96, 255, 0.15);
        /* Warna primer dark */
    }

    .testimonial-author-refined {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .testimonial-author-refined img {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 20px;
        border: 3px solid var(--card-bg-light);
        /* Border agar menonjol dari background card */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition: border-color 0.4s ease;
    }

    body.dark-mode .testimonial-author-refined img {
        border-color: var(--card-bg-dark);
    }

    .testimonial-author-refined .author-info h5 {
        font-family: 'Playfair Display', serif;
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 3px;
    }

    .testimonial-author-refined .author-info p {
        font-size: 0.9rem;
        color: var(--muted-text-light);
        margin-bottom: 0;
        font-style: italic;
        transition: color 0.4s ease;
    }

    body.dark-mode .testimonial-author-refined .author-info p {
        color: var(--muted-text-dark);
    }

    .testimonial-quote-refined {
        font-family: 'Lato', sans-serif;
        font-size: 1.05rem;
        line-height: 1.8;
        color: var(--text-light);
        /* Default light */
        margin-bottom: 0;
        /* Dihandle oleh flex-grow */
        font-style: italic;
        flex-grow: 1;
        /* Agar quote mengisi ruang */
        padding-left: 20px;
        border-left: 3px solid var(--secondary-luminous);
        transition: color 0.4s ease, border-color 0.4s ease;
    }

    body.dark-mode .testimonial-quote-refined {
        color: var(--text-dark);
        border-left-color: var(--secondary-luminous-dark);
    }

    .testimonial-quote-refined i.quote-icon {
        /* Ikon kutipan */
        font-size: 1.2rem;
        opacity: 0.6;
        margin: 0 3px;
        color: var(--secondary-luminous);
        transition: color 0.4s ease;
    }

    body.dark-mode .testimonial-quote-refined i.quote-icon {
        color: var(--secondary-luminous-dark);
    }


    /* Swiper Navigation & Pagination */
    .testimonials-slider-refined .swiper-button-prev,
    .testimonials-slider-refined .swiper-button-next {
        color: var(--primary-luminous);
        width: 40px;
        height: 40px;
        background-color: rgba(138, 43, 226, 0.08);
        /* Warna primer transparan */
        border-radius: 50%;
        transition: all 0.3s ease;
        margin-top: -30px;
        /* Sesuaikan posisi vertikal */
    }

    .testimonials-slider-refined .swiper-button-prev:hover,
    .testimonials-slider-refined .swiper-button-next:hover {
        background-color: rgba(138, 43, 226, 0.2);
        color: var(--primary-luminous);
    }

    body.dark-mode .testimonials-slider-refined .swiper-button-prev,
    body.dark-mode .testimonials-slider-refined .swiper-button-next {
        color: var(--primary-luminous-dark);
        background-color: rgba(160, 96, 255, 0.1);
    }

    body.dark-mode .testimonials-slider-refined .swiper-button-prev:hover,
    body.dark-mode .testimonials-slider-refined .swiper-button-next:hover {
        background-color: rgba(160, 96, 255, 0.25);
    }

    .testimonials-slider-refined .swiper-button-prev::after,
    .testimonials-slider-refined .swiper-button-next::after {
        font-size: 1.1rem;
        /* Ukuran ikon panah */
        font-weight: bold;
    }

    .testimonials-slider-refined .swiper-pagination {
        margin-top: 30px;
        position: relative;
        bottom: auto;
    }

    .testimonials-slider-refined .swiper-pagination .swiper-pagination-bullet {
        width: 10px;
        height: 10px;
        background-color: #D0D0D0;
        opacity: 1;
        border: 1px solid var(--primary-luminous);
        transition: background-color 0.4s ease, border-color 0.4s ease;
    }

    .testimonials-slider-refined .swiper-pagination .swiper-pagination-bullet-active {
        background-color: var(--primary-luminous);
    }

    body.dark-mode .testimonials-slider-refined .swiper-pagination .swiper-pagination-bullet {
        border-color: var(--primary-luminous-dark);
    }

    body.dark-mode .testimonials-slider-refined .swiper-pagination .swiper-pagination-bullet-active {
        background-color: var(--primary-luminous-dark);
    }
</style>

<section id="testimonialsCarouselRefined" class="section-elegant">
    <div class="container" data-aos="fade-up">
        <div class="section-title-elegant">
            <h2>Apa Kata Mereka Tentang Kami</h2>
            <p class="subtitle-elegant">Kesan dan Pengalaman Berharga dari Para Klien yang Telah Mempercayai AuroraCorp.</p>
        </div>

        <div class="testimonials-slider-refined swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-item-refined">
                        <div class="testimonial-author-refined">
                            <img src="https://placehold.co/100x100/8A2BE2/FFFFFF?text=AS" alt="[Foto Klien Andini S.]">
                            <div class="author-info">
                                <h5>Andini S.</h5>
                                <p>CEO, Startup Mode Lestari</p>
                            </div>
                        </div>
                        <p class="testimonial-quote-refined">
                            <i class="fas fa-quote-left quote-icon"></i>
                            AuroraCorp benar-benar memahami visi kami dan menerjemahkannya menjadi platform digital yang luar biasa. Profesionalisme dan kreativitas timnya sungguh menginspirasi.
                            <i class="fas fa-quote-right quote-icon"></i>
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-item-refined">
                        <div class="testimonial-author-refined">
                            <img src="https://placehold.co/100x100/FFD700/333333?text=BP" alt="[Foto Klien Bima P.]">
                            <div class="author-info">
                                <h5>Bima P.</h5>
                                <p>Direktur, Manufaktur Presisi Jaya</p>
                            </div>
                        </div>
                        <p class="testimonial-quote-refined">
                            <i class="fas fa-quote-left quote-icon"></i>
                            Solusi otomatisasi yang mereka implementasikan telah meningkatkan efisiensi operasional kami secara signifikan. Komunikasi yang baik dan hasil yang memuaskan!
                            <i class="fas fa-quote-right quote-icon"></i>
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-item-refined">
                        <div class="testimonial-author-refined">
                            <img src="https://placehold.co/100x100/4682B4/FFFFFF?text=CS" alt="[Foto Klien Citra S.]">
                            <div class="author-info">
                                <h5>Citra S.</h5>
                                <p>Pendiri, Galeri Seni Digital</p>
                            </div>
                        </div>
                        <p class="testimonial-quote-refined">
                            <i class="fas fa-quote-left quote-icon"></i>
                            Website galeri seni kami kini tampil memukau dan fungsional berkat AuroraCorp. Mereka sangat memperhatikan detail dan estetika. Sangat merekomendasikan!
                            <i class="fas fa-quote-right quote-icon"></i>
                        </p>
                    </div>
                </div><?php /* Tambahkan lebih banyak slide jika perlu */ ?>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Komentar JavaScript: Inisialisasi Swiper.js untuk testimonials slider
        // Pastikan Swiper CSS & JS sudah dimuat di index.php
        if (typeof Swiper !== 'undefined') {
            new Swiper('.testimonials-slider-refined', {
                speed: 800,
                loop: true,
                autoplay: {
                    delay: 5500, // Waktu ganti slide
                    disableOnInteraction: false
                },
                slidesPerView: 1,
                spaceBetween: 30,
                pagination: {
                    el: '.testimonials-slider-refined .swiper-pagination',
                    clickable: true
                },
                navigation: {
                    nextEl: '.testimonials-slider-refined .swiper-button-next',
                    prevEl: '.testimonials-slider-refined .swiper-button-prev',
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2
                    },
                    1200: {
                        slidesPerView: 3
                    } // Tampilkan 3 di layar besar
                }
            });
        } else {
            console.warn('Swiper library not loaded for refined testimonials.');
        }
    });
</script>