<?php // File: components/testimonials_slider.php 
?>
<style>
    /* Testimonials Slider Component Styles */
    #testimonialsSlider {
        padding: 80px 0;
        background: linear-gradient(rgba(0, 123, 255, 0.05), rgba(0, 123, 255, 0.01)), #FDFDFD;
        /* background-color: #F4F7F6; */
    }

    .testimonial-item {
        box-sizing: content-box;
        padding: 40px;
        /* Padding lebih besar */
        margin: 30px 15px;
        min-height: 320px;
        /* Tinggi minimal untuk konsistensi */
        box-shadow: 0px 5px 25px rgba(0, 0, 0, 0.08);
        background: #fff;
        border-radius: 15px;
        /* Sudut lebih bulat */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        /* Konten terdistribusi */
        text-align: left;
        /* Teks rata kiri */
    }

    .testimonial-item .testimonial-img {
        width: 100px;
        /* Ukuran foto lebih besar */
        border-radius: 50%;
        border: 5px solid #fff;
        /* Border putih di sekitar foto */
        margin-right: 20px;
        /* Jarak antara foto dan teks */
        float: left;
        /* Foto di kiri */
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .testimonial-item h3 {
        /* Nama Klien */
        font-size: 1.4rem;
        font-weight: bold;
        margin: 10px 0 5px 0;
        color: #2C3E50;
        font-family: 'Montserrat', sans-serif;
    }

    .testimonial-item h4 {
        /* Jabatan/Perusahaan Klien */
        font-size: 1rem;
        color: #777;
        margin: 0 0 15px 0;
        font-style: italic;
    }

    .testimonial-item .stars i {
        color: #FFC107;
        /* Warna bintang kuning */
        margin: 0 1px;
    }

    .testimonial-item .stars {
        margin-bottom: 15px;
    }


    .testimonial-item .quote-icon-left,
    .testimonial-item .quote-icon-right {
        color: #00A9FF;
        /* Warna ikon kutipan */
        font-size: 28px;
        /* Ukuran ikon kutipan */
        opacity: 0.6;
    }

    .testimonial-item .quote-icon-left {
        display: inline-block;
        left: -5px;
        position: relative;
        margin-right: 5px;
    }

    .testimonial-item .quote-icon-right {
        display: inline-block;
        right: -5px;
        position: relative;
        top: 10px;
        margin-left: 5px;
        transform: rotate(180deg);
    }

    .testimonial-item p {
        /* Isi testimoni */
        font-style: italic;
        margin: 0 auto 0px auto;
        /* Margin bawah dikurangi */
        color: #4A4A4A;
        line-height: 1.7;
        font-size: 1.05rem;
        /* Sedikit lebih besar */
        flex-grow: 1;
        /* Agar paragraf mengisi ruang */
    }

    /* Styling untuk Swiper.js (jika digunakan) */
    .testimonials-slider .swiper-pagination {
        margin-top: 20px;
        position: relative;
    }

    .testimonials-slider .swiper-pagination .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
        background-color: #ddd;
        opacity: 1;
        border: 1px solid #007BFF;
        /* Border dengan warna aksen */
    }

    .testimonials-slider .swiper-pagination .swiper-pagination-bullet-active {
        background-color: #007BFF;
        /* Warna aktif */
    }

    .testimonials-slider .swiper-button-prev,
    .testimonials-slider .swiper-button-next {
        color: #007BFF;
        width: 30px;
        height: 30px;
        /* background-color: rgba(0, 123, 255, 0.1); */
        /* border-radius: 50%; */
        transition: color 0.3s ease;
    }

    .testimonials-slider .swiper-button-prev:hover,
    .testimonials-slider .swiper-button-next:hover {
        color: #0056b3;
    }

    .testimonials-slider .swiper-button-prev::after,
    .testimonials-slider .swiper-button-next::after {
        font-size: 1.5rem;
        /* Ukuran ikon panah */
        font-weight: bold;
    }

    /* Untuk memastikan item terlihat baik sebelum Swiper init */
    .swiper-slide {
        display: flex;
        justify-content: center;
    }
</style>

<section id="testimonialsSlider" class="section">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Testimoni Klien</h2>
        </div>
        <p class="section-subtitle">Dengarkan apa kata mereka yang telah merasakan dampak positif dari layanan kami.</p>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div>
                            <img src="https://placehold.co/100x100/007BFF/FFFFFF?text=Klien+A" class="testimonial-img" alt="[Foto Klien A]">
                            <h3>Sarah Wijaya</h3>
                            <h4>CEO, Tech Innovators Inc.</h4>
                            <div class="stars">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                        </div>
                        <p>
                            <i class="fas fa-quote-left quote-icon-left"></i>
                            Luar biasa! Tim [NamaBisnis Anda] tidak hanya mengerti visi kami, tetapi juga menghadirkannya dengan solusi yang melebihi ekspektasi. Profesionalisme dan keahlian mereka patut diacungi jempol.
                            <i class="fas fa-quote-right quote-icon-right"></i>
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div>
                            <img src="https://placehold.co/100x100/28A745/FFFFFF?text=Klien+B" class="testimonial-img" alt="[Foto Klien B]">
                            <h3>Budi Santoso</h3>
                            <h4>Manajer Pemasaran, Creative Solutions Ltd.</h4>
                            <div class="stars">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <p>
                            <i class="fas fa-quote-left quote-icon-left"></i>
                            Proses kolaborasi sangat mulus dan hasilnya sangat memuaskan. Website baru kami mendapatkan banyak pujian dan traffic meningkat signifikan. Terima kasih [NamaBisnis Anda]!
                            <i class="fas fa-quote-right quote-icon-right"></i>
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div>
                            <img src="https://placehold.co/100x100/FFC107/2C3E50?text=Klien+C" class="testimonial-img" alt="[Foto Klien C]">
                            <h3>Rina Amelia</h3>
                            <h4>Pendiri, Startup Maju Jaya</h4>
                            <div class="stars">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                        </div>
                        <p>
                            <i class="fas fa-quote-left quote-icon-left"></i>
                            Sebagai startup, kami membutuhkan mitra teknologi yang responsif dan inovatif. [NamaBisnis Anda] adalah pilihan yang tepat. Mereka membantu kami membangun fondasi digital yang kuat.
                            <i class="fas fa-quote-right quote-icon-right"></i>
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div>
                            <img src="https://placehold.co/100x100/DC3545/FFFFFF?text=Klien+D" class="testimonial-img" alt="[Foto Klien D]">
                            <h3>Agus Setiawan</h3>
                            <h4>Direktur Operasional, Global Corp</h4>
                            <div class="stars">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </div>
                        </div>
                        <p>
                            <i class="fas fa-quote-left quote-icon-left"></i>
                            Kami sangat terkesan dengan pendekatan strategis dan solusi kustom yang ditawarkan. Peningkatan efisiensi operasional kami sangat terasa setelah implementasi sistem baru.
                            <i class="fas fa-quote-right quote-icon-right"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inisialisasi Swiper.js untuk testimonials slider
        // Pastikan Swiper.js sudah dimuat sebelum ini
        if (typeof Swiper !== 'undefined') {
            new Swiper('.testimonials-slider', {
                speed: 600,
                loop: true,
                autoplay: {
                    delay: 5000, // Waktu ganti slide (ms)
                    disableOnInteraction: false
                },
                slidesPerView: 'auto', // Jumlah slide yang terlihat (bisa diatur)
                // centeredSlides: true, // Jika ingin slide aktif di tengah
                pagination: {
                    el: '.swiper-pagination',
                    type: 'bullets', // Tipe paginasi (bullets, fraction, progressbar)
                    clickable: true
                },
                navigation: { // Tombol navigasi (opsional)
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: { // Responsif
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 20
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 30
                    },
                    1200: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    }
                }
            });
        } else {
            console.warn('Swiper library not loaded.');
        }
    });
</script>