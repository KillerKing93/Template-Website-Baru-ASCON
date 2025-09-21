<?php // File: components/testimoni_alumni_digital.php 
?>
<style>
    /* Testimoni Alumni Digital Styles */
    #testimoniAlumniDigital {
        background-color: var(--bg-dark-edu2);
        /* Dominan gelap */
        color: var(--text-dark-edu2);
        padding: 80px 0 100px 0;
        /* Padding bawah lebih untuk navigasi slider */
        border-bottom: 1px solid var(--border-dark-edu2);
    }

    body:not(.dark-mode) #testimoniAlumniDigital {
        /* Penyesuaian jika light mode ingin beda */
        background-color: #E9F1F7;
        /* Biru langit sangat pucat */
        color: var(--text-light-edu2);
        border-bottom-color: var(--border-light-edu2);
    }

    body:not(.dark-mode) #testimoniAlumniDigital .section-title-eduverse h2 {
        color: var(--primary-edu2);
    }

    body:not(.dark-mode) #testimoniAlumniDigital .section-title-eduverse h2 span.highlight-accent-edu2 {
        color: var(--secondary-edu2);
    }

    body:not(.dark-mode) #testimoniAlumniDigital .section-title-eduverse h2 span.highlight-accent-edu2::before {
        text-shadow: -1px 0 var(--accent-edu2);
        background: #E9F1F7;
        /* Sesuaikan dengan bg section light mode */
    }

    body:not(.dark-mode) #testimoniAlumniDigital .section-title-eduverse h2 span.highlight-accent-edu2::after {
        text-shadow: 1px 0 var(--secondary-edu2);
        background: #E9F1F7;
    }

    body:not(.dark-mode) #testimoniAlumniDigital .section-title-eduverse p.subtitle-eduverse {
        color: var(--muted-text-light-edu2);
    }


    .testimonial-alumni-card {
        background-color: var(--card-bg-dark-edu2);
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        margin: 0 15px;
        /* Untuk Swiper spaceBetween */
        border-left: 5px solid var(--accent-edu2-dark);
        /* Aksen samping */
        transition: all 0.3s ease;
        min-height: 260px;
        display: flex;
        flex-direction: column;
    }

    body:not(.dark-mode) .testimonial-alumni-card {
        background-color: var(--card-bg-light-edu2);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        border-left-color: var(--accent-edu2);
    }

    .testimonial-alumni-card:hover {
        transform: scale(1.02);
        box-shadow: 0 12px 30px rgba(var(--accent-edu2-dark-rgb, 111, 255, 233), 0.2);
    }

    body:not(.dark-mode) .testimonial-alumni-card:hover {
        box-shadow: 0 12px 30px rgba(var(--accent-edu2-rgb, 78, 205, 196), 0.15);
    }


    .testimonial-alumni-header {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .testimonial-alumni-header img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 18px;
        border: 2px solid var(--accent-edu2-dark);
    }

    body:not(.dark-mode) .testimonial-alumni-header img {
        border-color: var(--accent-edu2);
    }

    .testimonial-alumni-header .alumni-info h5 {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 2px;
        color: var(--text-dark-edu2);
        /* Default dark */
    }

    body:not(.dark-mode) .testimonial-alumni-header .alumni-info h5 {
        color: var(--text-light-edu2);
    }

    .testimonial-alumni-header .alumni-info p {
        font-size: 0.85rem;
        color: var(--muted-text-dark-edu2);
        /* Default dark */
        margin-bottom: 0;
        font-family: 'Montserrat', sans-serif;
    }

    body:not(.dark-mode) .testimonial-alumni-header .alumni-info p {
        color: var(--muted-text-light-edu2);
    }

    .testimonial-alumni-quote {
        font-style: italic;
        color: var(--text-dark-edu2);
        /* Default dark */
        line-height: 1.7;
        font-size: 1rem;
        margin-bottom: 0;
        flex-grow: 1;
        position: relative;
        padding-left: 10px;
    }

    .testimonial-alumni-quote::before {
        /* Ikon kutip dekoratif */
        content: "\f10d";
        font-family: "Font Awesome 6 Free";
        font-weight: 900;
        position: absolute;
        left: -10px;
        top: -2px;
        font-size: 1.5rem;
        color: var(--accent-edu2-dark);
        opacity: 0.4;
    }

    body:not(.dark-mode) .testimonial-alumni-quote {
        color: var(--text-light-edu2);
    }

    body:not(.dark-mode) .testimonial-alumni-quote::before {
        color: var(--accent-edu2);
    }

    /* Swiper Navigasi & Paginasi */
    .testimonials-alumni-slider .swiper-button-prev,
    .testimonials-alumni-slider .swiper-button-next {
        color: var(--accent-edu2-dark);
    }

    body:not(.dark-mode) .testimonials-alumni-slider .swiper-button-prev,
    body:not(.dark-mode) .testimonials-alumni-slider .swiper-button-next {
        color: var(--accent-edu2);
    }

    .testimonials-alumni-slider .swiper-button-prev::after,
    .testimonials-alumni-slider .swiper-button-next::after {
        font-size: 1.6rem;
    }

    .testimonials-alumni-slider .swiper-pagination {
        margin-top: 30px;
        position: relative;
        bottom: auto;
    }

    .testimonials-alumni-slider .swiper-pagination .swiper-pagination-bullet-active {
        background-color: var(--accent-edu2-dark);
    }

    body:not(.dark-mode) .testimonials-alumni-slider .swiper-pagination .swiper-pagination-bullet-active {
        background-color: var(--accent-edu2);
    }
</style>

<section id="testimoniAlumniDigital" class="section-eduverse">
    <div class="container" data-aos="fade-up">
        <div class="section-title-eduverse">
            <h2 data-text="KISAH SUKSES ALUMNI">KISAH SUKSES <span class="highlight-accent-edu2" data-text="ALUMNI">ALUMNI</span></h2>
            <p class="subtitle-eduverse">Inspirasi dari Para Lulusan EduVerse yang Telah Meraih Impian di Dunia Digital.</p>
        </div>

        <div class="testimonials-alumni-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-alumni-card">
                        <div class="testimonial-alumni-header">
                            <img src="https://placehold.co/100x100/33A1FF/0A192F?text=RA" alt="[Foto Alumni Rian A.]">
                            <div class="alumni-info">
                                <h5>Rian Ardiansyah</h5>
                                <p>AI Engineer, TechNova Solutions</p>
                            </div>
                        </div>
                        <p class="testimonial-alumni-quote">
                            EduVerse memberikan fondasi yang kuat dalam AI dan machine learning. Kurikulum yang relevan dan dosen yang ahli sangat membantu saya memulai karir di bidang ini.
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-alumni-card">
                        <div class="testimonial-alumni-header">
                            <img src="https://placehold.co/100x100/FF8787/0A192F?text=LS" alt="[Foto Alumni Laras S.]">
                            <div class="alumni-info">
                                <h5>Laras Setyawati</h5>
                                <p>VR Developer, Immersive Worlds Studio</p>
                            </div>
                        </div>
                        <p class="testimonial-alumni-quote">
                            Fasilitas lab virtual di EduVerse sungguh luar biasa! Saya bisa bereksperimen dan membangun portofolio VR yang mengantarkan saya ke pekerjaan impian.
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-alumni-card">
                        <div class="testimonial-alumni-header">
                            <img src="https://placehold.co/100x100/6FFFE9/0A192F?text=DK" alt="[Foto Alumni David K.]">
                            <div class="alumni-info">
                                <h5>David Kurniawan</h5>
                                <p>CyberSecurity Analyst, SecureNet Corp.</p>
                            </div>
                        </div>
                        <p class="testimonial-alumni-quote">
                            Program Keamanan Siber di EduVerse sangat komprehensif. Saya mendapatkan pengetahuan dan keterampilan praktis yang sangat dibutuhkan di industri saat ini.
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
        // Komentar JavaScript: Inisialisasi Swiper.js untuk testimoni alumni
        if (typeof Swiper !== 'undefined') {
            new Swiper('.testimonials-alumni-slider', {
                speed: 750,
                loop: true, // Aktifkan loop jika slide cukup
                autoplay: {
                    delay: 5800,
                    disableOnInteraction: false
                },
                slidesPerView: 1,
                spaceBetween: 30,
                pagination: {
                    el: '.testimonials-alumni-slider .swiper-pagination',
                    clickable: true
                },
                navigation: {
                    nextEl: '.testimonials-alumni-slider .swiper-button-next',
                    prevEl: '.testimonials-alumni-slider .swiper-button-prev',
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
            console.warn('Swiper library not loaded for alumni testimonials.');
        }
    });
</script>