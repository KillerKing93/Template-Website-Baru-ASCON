<?php // File: components/testimoni_petani_mitra.php 
?>
<style>
    /* Testimoni Petani Mitra Styles */
    #testimoniPetaniMitra {
        background-color: var(--bg-light-farm2);
        /* Default light */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #testimoniPetaniMitra {
        background-color: var(--bg-dark-farm2);
    }

    .testimonial-farmer-card {
        background-color: var(--card-bg-light-farm2);
        border-radius: 8px;
        padding: 30px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.07);
        margin: 0 15px;
        /* Untuk Swiper spaceBetween */
        border-left: 4px solid var(--secondary-modern-farm);
        /* Aksen samping */
        transition: all 0.3s ease;
        min-height: 280px;
        /* Jaga tinggi konsisten */
        display: flex;
        flex-direction: column;
    }

    body.dark-mode .testimonial-farmer-card {
        background-color: var(--card-bg-dark-farm2);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25);
        border-left-color: var(--secondary-modern-farm-dark);
    }

    .testimonial-farmer-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 28px rgba(255, 179, 0, 0.15);
        /* var(--secondary-modern-farm) dengan alpha */
    }

    body.dark-mode .testimonial-farmer-card:hover {
        box-shadow: 0 10px 28px rgba(255, 202, 40, 0.2);
        /* var(--secondary-modern-farm-dark) dengan alpha */
    }


    .testimonial-farmer-info {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .testimonial-farmer-info img {
        width: 65px;
        /* Ukuran foto petani */
        height: 65px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 18px;
        border: 2px solid var(--card-bg-light-farm2);
        /* Border agar menonjol */
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        transition: border-color 0.3s ease;
    }

    body.dark-mode .testimonial-farmer-info img {
        border-color: var(--card-bg-dark-farm2);
    }

    .testimonial-farmer-info .farmer-details h5 {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 2px;
    }

    .testimonial-farmer-info .farmer-details p {
        font-size: 0.9rem;
        color: var(--muted-text-light-farm2);
        margin-bottom: 0;
        font-style: italic;
        transition: color 0.3s ease;
    }

    body.dark-mode .testimonial-farmer-info .farmer-details p {
        color: var(--muted-text-dark-farm2);
    }

    .testimonial-farmer-quote {
        font-style: italic;
        color: var(--text-light-farm2);
        /* Default light */
        line-height: 1.7;
        font-size: 1rem;
        margin-bottom: 0;
        flex-grow: 1;
        /* Quote mengisi ruang */
        position: relative;
        padding-left: 15px;
    }

    .testimonial-farmer-quote::before {
        /* Ikon kutip dekoratif */
        content: "\f10d";
        /* Font Awesome ikon kutip kiri */
        font-family: "Font Awesome 6 Free";
        font-weight: 900;
        position: absolute;
        left: -10px;
        top: -5px;
        font-size: 1.8rem;
        color: var(--secondary-modern-farm);
        opacity: 0.3;
        transition: color 0.3s ease;
    }

    body.dark-mode .testimonial-farmer-quote {
        color: var(--text-dark-farm2);
    }

    body.dark-mode .testimonial-farmer-quote::before {
        color: var(--secondary-modern-farm-dark);
    }

    /* Swiper Navigasi & Paginasi */
    .testimonials-farmer-slider .swiper-button-prev,
    .testimonials-farmer-slider .swiper-button-next {
        color: var(--primary-modern-farm);
        transition: color 0.3s ease;
    }

    body.dark-mode .testimonials-farmer-slider .swiper-button-prev,
    body.dark-mode .testimonials-farmer-slider .swiper-button-next {
        color: var(--primary-modern-farm-dark);
    }

    .testimonials-farmer-slider .swiper-button-prev::after,
    .testimonials-farmer-slider .swiper-button-next::after {
        font-size: 1.6rem;
    }

    .testimonials-farmer-slider .swiper-pagination {
        margin-top: 25px;
        position: relative;
        bottom: auto;
    }

    .testimonials-farmer-slider .swiper-pagination .swiper-pagination-bullet-active {
        background-color: var(--primary-modern-farm);
        transition: background-color 0.3s ease;
    }

    body.dark-mode .testimonials-farmer-slider .swiper-pagination .swiper-pagination-bullet-active {
        background-color: var(--primary-modern-farm-dark);
    }
</style>

<section id="testimoniPetaniMitra" class="section-pertanian-modern">
    <div class="container" data-aos="fade-up">
        <div class="section-title-modern-farm">
            <h2>Cerita dari <span class="highlight-accent">Mitra Petani</span> Kami</h2>
            <div class="line-decorator"></div>
            <p class="subtitle-modern-farm">Kemitraan yang Kuat adalah Kunci Keberhasilan Bersama dalam Memajukan Pertanian.</p>
        </div>

        <div class="testimonials-farmer-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-farmer-card">
                        <div class="testimonial-farmer-info">
                            <img src="https://placehold.co/100x100/2E7D32/FFFFFF?text=Pak+Budi" alt="[Foto Petani Mitra Pak Budi]">
                            <div class="farmer-details">
                                <h5>Pak Budi Hartono</h5>
                                <p>Petani Sayuran Organik, Desa Suka Maju</p>
                            </div>
                        </div>
                        <p class="testimonial-farmer-quote">
                            Bergabung dengan [Nama Pertanian Modern Anda] membuka akses pasar yang lebih luas dan memberikan pendampingan teknologi yang sangat membantu meningkatkan hasil panen kami.
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-farmer-card">
                        <div class="testimonial-farmer-info">
                            <img src="https://placehold.co/100x100/FFB300/2C3333?text=Ibu+Siti" alt="[Foto Petani Mitra Ibu Siti]">
                            <div class="farmer-details">
                                <h5>Ibu Siti Aminah</h5>
                                <p>Peternak Ayam Kampung Unggul, Dusun Lestari</p>
                            </div>
                        </div>
                        <p class="testimonial-farmer-quote">
                            Kemitraan ini sangat adil dan transparan. Kami mendapatkan harga yang layak dan dukungan untuk praktik peternakan yang lebih baik dan ramah lingkungan.
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-farmer-card">
                        <div class="testimonial-farmer-info">
                            <img src="https://placehold.co/100x100/607D8B/FFFFFF?text=Pak+Agus" alt="[Foto Petani Mitra Pak Agus]">
                            <div class="farmer-details">
                                <h5>Pak Agus Setiawan</h5>
                                <p>Pembudidaya Ikan Air Tawar, Kampung Mina Jaya</p>
                            </div>
                        </div>
                        <p class="testimonial-farmer-quote">
                            Teknologi bioflok yang diperkenalkan sangat membantu mengurangi biaya pakan dan meningkatkan kualitas ikan. Terima kasih atas bimbingannya!
                        </p>
                    </div>
                </div><?php /* Komentar PHP: Tambahkan lebih banyak slide jika perlu */ ?>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Komentar JavaScript: Inisialisasi Swiper.js untuk testimoni petani mitra
        // Pastikan Swiper CSS & JS sudah dimuat di index.php
        if (typeof Swiper !== 'undefined') {
            new Swiper('.testimonials-farmer-slider', {
                speed: 700,
                loop: true, // Aktifkan loop jika slide cukup
                autoplay: {
                    delay: 6000,
                    disableOnInteraction: false
                },
                slidesPerView: 1,
                spaceBetween: 30,
                pagination: {
                    el: '.testimonials-farmer-slider .swiper-pagination',
                    clickable: true
                },
                navigation: {
                    nextEl: '.testimonials-farmer-slider .swiper-button-next',
                    prevEl: '.testimonials-farmer-slider .swiper-button-prev',
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2
                    },
                    1200: {
                        slidesPerView: 2
                    } // Mungkin 2 atau 3 tergantung desain
                }
            });
        } else {
            console.warn('Swiper library not loaded for farmer testimonials.');
        }
    });
</script>