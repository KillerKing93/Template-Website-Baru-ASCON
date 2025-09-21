<?php // File: components/hero_pendidikan_inspiratif.php 
?>
<style>
    /* Hero Pendidikan Inspiratif Styles */
    #heroPendidikanInspiratif {
        min-height: 95vh;
        /* Tinggi hero */
        background: linear-gradient(to right, rgba(52, 152, 219, 0.7), rgba(241, 196, 15, 0.6)),
            url('https://placehold.co/1920x1080/ECF0F1/2C3E50?text=Suasana+Belajar+Inspiratif&font=poppins') no-repeat center center;
        background-size: cover;
        display: flex;
        align-items: center;
        text-align: left;
        /* Teks rata kiri */
        color: #fff;
        padding: 100px 0;
        position: relative;
    }

    /* Komentar CSS: Tidak perlu penyesuaian dark mode spesifik untuk background hero ini karena sudah menggunakan overlay */

    /* Efek "bokeh" atau partikel cahaya halus di latar belakang */
    #heroPendidikanInspiratif .bokeh-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        /* Agar bokeh tidak keluar batas */
        z-index: 0;
    }

    .bokeh-dot {
        position: absolute;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.15);
        /* Warna bokeh putih transparan */
        animation: bokehFloat 20s infinite ease-in-out;
        opacity: 0;
        /* Awalnya tidak terlihat, muncul dengan delay animasi */
    }

    @keyframes bokehFloat {

        0%,
        100% {
            transform: translateY(0px) scale(0.8);
            opacity: 0.3;
        }

        50% {
            transform: translateY(-30px) scale(1.2);
            opacity: 0.7;
        }
    }

    /* Komentar CSS: Posisi dan ukuran bokeh dot akan di-generate oleh JS */


    .hero-content-inspiratif {
        position: relative;
        /* Di atas bokeh */
        z-index: 1;
        max-width: 700px;
        /* Batasi lebar konten teks */
    }

    .hero-content-inspiratif .super-heading-edu {
        /* Teks kecil di atas judul utama */
        font-family: 'Poppins', sans-serif;
        font-size: 1rem;
        font-weight: 600;
        color: var(--secondary-edu1);
        /* Warna kuning */
        text-transform: uppercase;
        letter-spacing: 1.5px;
        margin-bottom: 10px;
        display: inline-block;
        padding: 3px 8px;
        background-color: rgba(44, 62, 80, 0.3);
        /* var(--text-light-edu1) dengan alpha */
        border-radius: 3px;
    }

    body.dark-mode .hero-content-inspiratif .super-heading-edu {
        color: var(--secondary-edu1-dark);
        background-color: rgba(236, 240, 241, 0.15);
        /* var(--text-dark-edu1) dengan alpha */
    }

    .hero-content-inspiratif h1 {
        font-size: 3.5rem;
        /* Ukuran judul utama */
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 20px;
        color: #fff;
        text-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    }

    .hero-content-inspiratif h1 .highlight-text-edu {
        /* Bisa menggunakan background clip untuk efek teks gradien */
        background: -webkit-linear-gradient(45deg, var(--secondary-edu1), #F5B041);
        /* Kuning ke oranye */
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        padding-bottom: 5px;
        /* Ruang untuk "underline" SVG */
        position: relative;
        display: inline;
        /* Agar ::after pas */
    }

    .hero-content-inspiratif h1 .highlight-text-edu::after {
        /* Underline SVG unik */
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 100%;
        height: 8px;
        background-image: url("data:image/svg+xml,%3Csvg width='100' height='8' viewBox='0 0 100 8' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 4 C 20 0, 40 8, 60 4 S 100 0, 100 4' stroke='%23F1C40F' stroke-width='3' fill='none' stroke-linecap='round'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-size: contain;
        /* Atau 100% 100% */
    }

    body.dark-mode .hero-content-inspiratif h1 .highlight-text-edu {
        background: -webkit-linear-gradient(45deg, var(--secondary-edu1-dark), #F5CBA7);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    body.dark-mode .hero-content-inspiratif h1 .highlight-text-edu::after {
        background-image: url("data:image/svg+xml,%3Csvg width='100' height='8' viewBox='0 0 100 8' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 4 C 20 0, 40 8, 60 4 S 100 0, 100 4' stroke='%23F39C12' stroke-width='3' fill='none' stroke-linecap='round'/%3E%3C/svg%3E");
    }


    .hero-content-inspiratif p.lead-inspiratif {
        font-family: 'Merriweather Sans', sans-serif;
        font-size: 1.2rem;
        font-weight: 400;
        margin-bottom: 30px;
        color: rgba(255, 255, 255, 0.9);
        line-height: 1.7;
        max-width: 650px;
    }

    .hero-content-inspiratif .hero-cta-pendidikan a {
        margin-right: 10px;
        margin-bottom: 10px;
    }
</style>

<section id="heroPendidikanInspiratif" class="section-pendidikan">
    <div class="bokeh-overlay" id="bokehOverlay">
        <?php /* Komentar PHP: Bokeh dots akan di-generate oleh JavaScript */ ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 hero-content-inspiratif"> <?php /* Konten teks tidak full width */ ?>
                <div data-aos="fade-right" data-aos-duration="1000">
                    <span class="super-heading-edu">Selamat Datang di NamaInstitusi</span>
                    <h1>Membuka Potensi, <span class="highlight-text-edu">Membangun</span> Generasi Unggul.</h1>
                    <p class="lead-inspiratif">
                        Kami berkomitmen untuk menyediakan lingkungan belajar yang inspiratif, inovatif, dan mendukung setiap siswa untuk mencapai impian mereka.
                    </p>
                    <div class="hero-cta-pendidikan">
                        <a href="#programUnggulanPendidikan" class="btn-edu-primary btn-lg">Program Kami</a>
                        <a href="#kontakPendidikanOsm" class="btn-edu-secondary btn-lg">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
            <?php /* Komentar PHP: Kolom untuk ilustrasi bisa ditambahkan di col-lg-4 jika diinginkan */ ?>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Komentar JavaScript: Generate Bokeh Dots
        const bokehOverlay = document.getElementById('bokehOverlay');
        if (bokehOverlay) {
            const numDots = 20; // Jumlah bokeh dots
            for (let i = 0; i < numDots; i++) {
                const dot = document.createElement('div');
                dot.classList.add('bokeh-dot');

                const size = Math.random() * 60 + 20; // Ukuran dot 20-80px
                dot.style.width = `${size}px`;
                dot.style.height = `${size}px`;
                dot.style.left = `${Math.random() * 100}%`;
                dot.style.top = `${Math.random() * 100}%`;
                dot.style.animationDelay = `${Math.random() * 10}s`; // Delay animasi acak
                dot.style.animationDuration = `${Math.random() * 10 + 15}s`; // Durasi animasi acak

                bokehOverlay.appendChild(dot);
            }
        }
    });
</script>