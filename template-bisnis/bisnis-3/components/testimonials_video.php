<?php // File: components/testimonials_video.php 
?>
<style>
    /* Video Testimonials Component Styles */
    :root {
        /* Pastikan variabel CSS dari index.php bisa diakses */
        --primary-color: #6A11CB;
        --secondary-color: #2575FC;
        --accent-color: #00FFED;
        --card-bg: #1E1E1E;
        --dark-bg: #121212;
        --border-color: rgba(0, 255, 237, 0.2);
        --text-color-muted: #B0B0B0;
    }

    #testimonialsVideo {
        background-color: var(--card-bg);
        /* Latar lebih terang dari body */
        border-bottom: 1px solid var(--border-color);
    }

    .testimonial-video-item {
        background-color: var(--dark-bg);
        /* Kontras dengan latar section */
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
        border: 1px solid var(--border-color);
        text-align: left;
        /* Teks rata kiri */
        height: 100%;
        /* Tinggi sama */
        display: flex;
        flex-direction: column;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .testimonial-video-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(var(--accent-rgb), 0.15);
    }


    .testimonial-video-thumb-wrap {
        position: relative;
        margin-bottom: 20px;
        border-radius: 10px;
        overflow: hidden;
        cursor: pointer;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }

    .testimonial-video-thumb-wrap img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.4s ease;
    }

    .testimonial-video-item:hover .testimonial-video-thumb-wrap img {
        transform: scale(1.05);
    }

    .testimonial-video-thumb-wrap .play-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(1);
        font-size: 3rem;
        color: #fff;
        background-color: rgba(var(--accent-rgb), 0.7);
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.3s ease, background-color 0.3s ease;
        text-decoration: none;
        /* Untuk GLightbox */
    }

    .testimonial-video-thumb-wrap:hover .play-icon {
        transform: translate(-50%, -50%) scale(1.15);
        background-color: rgba(var(--accent-rgb), 0.9);
    }


    .testimonial-video-content h3 {
        /* Nama Klien */
        font-size: 1.4rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 5px;
    }

    .testimonial-video-content h4 {
        /* Jabatan/Perusahaan */
        font-size: 0.95rem;
        color: var(--accent-color);
        margin-bottom: 15px;
        font-style: italic;
        font-weight: 500;
    }

    .testimonial-video-content .quote {
        font-style: italic;
        color: var(--text-color-muted);
        margin-bottom: 0;
        line-height: 1.7;
        font-size: 1rem;
        flex-grow: 1;
        /* Agar quote mengisi ruang */
        border-left: 3px solid var(--accent-color);
        padding-left: 15px;
    }

    .testimonial-video-content .quote i {
        opacity: 0.7;
        font-size: 0.9em;
    }

    /* Swiper Navigasi & Paginasi (jika digunakan untuk banyak video) */
    .testimonials-video-slider .swiper-button-prev,
    .testimonials-video-slider .swiper-button-next {
        color: var(--accent-color);
        top: 40%;
        /* Sesuaikan posisi vertikal */
    }

    .testimonials-video-slider .swiper-button-prev::after,
    .testimonials-video-slider .swiper-button-next::after {
        font-size: 1.8rem;
    }

    .testimonials-video-slider .swiper-pagination-bullet-active {
        background-color: var(--accent-color);
    }
</style>

<section id="testimonialsVideo" class="section">
    <div class="container" data-aos="fade-up">
        <div class="section-title-futuristic">
            <h2>Kisah Sukses Klien</h2>
            <p class="subtitle">Lihat dan Dengarkan Langsung Bagaimana Kami Membantu Mereka Bertransformasi</p>
        </div>

        <!-- {/* Jika hanya beberapa video, bisa pakai grid. Jika banyak, pakai Swiper.js */} -->
        <div class="row gy-4 justify-content-center">
            <!-- {/* Atau class="testimonials-video-slider swiper" */} -->
            <div class="swiper-wrapper">
                <!-- {/* Atau class="swiper-slide" */} -->
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-video-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="testimonial-video-thumb-wrap">
                            <img src="https://placehold.co/600x338/121212/00FFED?text=Video+Klien+1" alt="[Thumbnail Video Testimoni Klien 1]">
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-icon">
                                <!-- {/* Ganti dengan link video YouTube/Vimeo Anda */} -->
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <div class="testimonial-video-content mt-auto">
                            <h3>Andi Pratama</h3>
                            <h4>Founder, Startup Inovatif X</h4>
                            <p class="quote">
                                <i class="fas fa-quote-left me-1"></i>Sungguh pengalaman yang luar biasa bekerja dengan tim [NamaBisnis Anda]. Mereka benar-benar memahami kebutuhan kami dan memberikan solusi yang tidak hanya fungsional tetapi juga sangat inovatif. Sangat direkomendasikan!<i class="fas fa-quote-right ms-1"></i>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- {/* Atau class="swiper-slide" */} -->
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-video-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="testimonial-video-thumb-wrap">
                            <img src="https://placehold.co/600x338/121212/00FFED?text=Video+Klien+2" alt="[Thumbnail Video Testimoni Klien 2]">
                            <a href="https://vimeo.com/123456789" class="glightbox play-icon">
                                <!-- {/* Ganti dengan link video YouTube/Vimeo Anda */} -->
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <div class="testimonial-video-content mt-auto">
                            <h3>Siti Aminah</h3>
                            <h4>Marketing Director, Perusahaan Retail Maju</h4>
                            <p class="quote">
                                <i class="fas fa-quote-left me-1"></i>Sejak kami meluncurkan platform baru yang mereka kembangkan, engagement pelanggan kami meningkat drastis. Keahlian teknis dan pemahaman pasar mereka sangat mengesankan.<i class="fas fa-quote-right ms-1"></i>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- {/* Atau class="swiper-slide" */} -->
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-video-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="testimonial-video-thumb-wrap">
                            <img src="https://placehold.co/600x338/121212/00FFED?text=Video+Klien+3" alt="[Thumbnail Video Testimoni Klien 3]">
                            <a href="path/to/your/local-video.mp4" class="glightbox play-icon" data-type="video" data-source="local">
                                <!-- {/* Contoh video lokal */} -->
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <div class="testimonial-video-content mt-auto">
                            <h3>David Lee</h3>
                            <h4>COO, Manufaktur Global Tech</h4>
                            <p class="quote">
                                <i class="fas fa-quote-left me-1"></i>Solusi otomatisasi proses dari [NamaBisnis Anda] telah menghemat waktu dan biaya operasional kami secara signifikan. Tim mereka sangat profesional dan responsif.<i class="fas fa-quote-right ms-1"></i>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <!-- {/* Tutup swiper-wrapper jika menggunakan Swiper */} -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inisialisasi GLightbox untuk video popups
        if (typeof GLightbox !== 'undefined') {
            const videoLightbox = GLightbox({
                selector: '.glightbox', // Selector umum untuk semua link glightbox
                plyr: { // Kustomisasi Plyr jika video
                    css: 'https://cdn.plyr.io/3.7.8/plyr.css', // Sesuaikan path jika perlu
                    config: {
                        ratio: '16:9', // Aspek rasio video
                        // Opsi Plyr lainnya
                    }
                }
            });
        } else {
            console.warn('GLightbox library not loaded. Video popups might not work.');
        }

        // Inisialisasi Swiper.js jika menggunakan slider untuk banyak video
        // if (typeof Swiper !== 'undefined') {
        //     new Swiper('.testimonials-video-slider', {
        //         // Opsi Swiper
        //         slidesPerView: 1,
        //         spaceBetween: 30,
        //         loop: true,
        //         pagination: {
        //             el: '.swiper-pagination',
        //             clickable: true,
        //         },
        //         navigation: {
        //             nextEl: '.swiper-button-next',
        //             prevEl: '.swiper-button-prev',
        //         },
        //         breakpoints: {
        //             768: { slidesPerView: 2 },
        //             992: { slidesPerView: 3 },
        //         }
        //     });
        // } else {
        //     console.warn('Swiper library not loaded for video testimonials.');
        // }
    });
</script>