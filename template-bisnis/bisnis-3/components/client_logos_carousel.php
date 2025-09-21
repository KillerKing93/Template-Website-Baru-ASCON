<?php // File: components/client_logos_carousel.php 
?>
<style>
    /* Client Logos Carousel Component Styles */
    :root {
        /* Pastikan variabel CSS dari index.php bisa diakses */
        --primary-color: #6A11CB;
        --secondary-color: #2575FC;
        --accent-color: #00FFED;
        --card-bg: #1E1E1E;
        --dark-bg: #121212;
        --border-color: rgba(0, 255, 237, 0.2);
    }

    #clientLogosCarousel {
        padding: 60px 0;
        /* Padding lebih sedikit untuk bagian ini */
        background-color: var(--dark-bg);
        /* Sama dengan body atau sedikit beda */
        border-bottom: 1px solid var(--border-color);
    }

    #clientLogosCarousel .section-title-futuristic h2 {
        font-size: 1.8rem;
        /* Judul lebih kecil */
        color: var(--accent-color);
        /* Warna aksen untuk judul bagian ini */
        margin-bottom: 40px;
    }

    #clientLogosCarousel .section-title-futuristic h2::before,
    #clientLogosCarousel .section-title-futuristic h2::after {
        display: none;
        /* Sembunyikan garis atas/bawah default section title */
    }


    .clients-slider .swiper-slide {
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100px;
        /* Tinggi tetap untuk slide */
    }

    .clients-slider .swiper-slide img {
        max-height: 60px;
        /* Tinggi maksimal logo */
        width: auto;
        /* Lebar otomatis */
        max-width: 150px;
        /* Lebar maksimal logo */
        opacity: 0.6;
        /* Logo agak transparan */
        filter: grayscale(80%) brightness(150%);
        /* Efek grayscale dan lebih terang di latar gelap */
        transition: opacity 0.3s ease, filter 0.3s ease, transform 0.3s ease;
    }

    .clients-slider .swiper-slide:hover img {
        opacity: 1;
        filter: grayscale(0%) brightness(100%);
        /* Warna asli saat hover */
        transform: scale(1.1);
    }

    /* Paginasi Swiper (jika digunakan, opsional untuk logo) */
    .clients-slider .swiper-pagination {
        margin-top: 20px;
        position: relative;
        bottom: auto;
        /* Reset posisi default */
    }

    .clients-slider .swiper-pagination .swiper-pagination-bullet {
        width: 10px;
        height: 10px;
        background-color: var(--border-color);
        opacity: 0.8;
    }

    .clients-slider .swiper-pagination .swiper-pagination-bullet-active {
        background-color: var(--accent-color);
        opacity: 1;
    }
</style>

<section id="clientLogosCarousel" class="section">
    <div class="container" data-aos="fade-up">
        <div class="section-title-futuristic text-center">
            <h2>Dipercaya oleh Perusahaan Terkemuka</h2>
            <!-- {/* Tidak ada subtitle di sini, judul sudah cukup */} -->
        </div>

        <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                    <img src="https://placehold.co/150x60/FFFFFF/121212?text=Klien+A&font=poppins" alt="[Logo Klien A]">
                </div>
                <div class="swiper-slide">
                    <img src="https://placehold.co/150x60/FFFFFF/121212?text=Klien+B&font=poppins" alt="[Logo Klien B]">
                </div>
                <div class="swiper-slide">
                    <img src="https://placehold.co/150x60/FFFFFF/121212?text=Klien+C&font=poppins" alt="[Logo Klien C]">
                </div>
                <div class="swiper-slide">
                    <img src="https://placehold.co/150x60/FFFFFF/121212?text=Klien+D&font=poppins" alt="[Logo Klien D]">
                </div>
                <div class="swiper-slide">
                    <img src="https://placehold.co/150x60/FFFFFF/121212?text=Klien+E&font=poppins" alt="[Logo Klien E]">
                </div>
                <div class="swiper-slide">
                    <img src="https://placehold.co/150x60/FFFFFF/121212?text=Klien+F&font=poppins" alt="[Logo Klien F]">
                </div>
                <div class="swiper-slide">
                    <img src="https://placehold.co/150x60/FFFFFF/121212?text=Klien+G&font=poppins" alt="[Logo Klien G]">
                </div>
                <div class="swiper-slide">
                    <img src="https://placehold.co/150x60/FFFFFF/121212?text=Klien+H&font=poppins" alt="[Logo Klien H]">
                </div>
            </div>
            <div class="swiper-pagination"></div> <!-- Opsional: paginasi untuk logo -->
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof Swiper !== 'undefined') {
            new Swiper('.clients-slider', {
                speed: 1000, // Kecepatan transisi
                loop: true,
                autoplay: {
                    delay: 2000, // Waktu antar slide
                    disableOnInteraction: false
                },
                slidesPerView: 'auto', // Biarkan Swiper menentukan
                spaceBetween: 30, // Jarak antar logo
                grabCursor: true, // Tampilkan kursor grab
                breakpoints: {
                    320: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    },
                    576: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 40
                    },
                    992: {
                        slidesPerView: 5,
                        spaceBetween: 50
                    },
                    1200: {
                        slidesPerView: 6,
                        spaceBetween: 60
                    }
                },
                // pagination: { // Aktifkan jika ingin paginasi
                //     el: '.clients-slider .swiper-pagination',
                //     clickable: true,
                // },
            });
        } else {
            console.warn('Swiper library not loaded. Client logos carousel might not work.');
        }
    });
</script>