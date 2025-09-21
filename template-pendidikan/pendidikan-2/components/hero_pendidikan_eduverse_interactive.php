<?php // File: components/hero_pendidikan_eduverse_interactive.php 
?>
<style>
    /* Hero Pendidikan EduVerse Interaktif Styles */
    #heroPendidikanEduverseInteractive {
        min-height: 100vh;
        background: linear-gradient(145deg, var(--bg-dark-edu2) 0%, #071120 100%);
        /* Gradien biru malam gelap */
        color: var(--text-dark-edu2);
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
        padding: 100px 0;
    }

    /* Komentar CSS: Tidak ada penyesuaian dark mode spesifik jika hero sudah dominan gelap */

    /* Efek latar belakang "digital network" atau "plexus" */
    #hero-plexus-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        /* Akan diisi oleh script Particles.js atau three.js */
    }

    .hero-content-eduverse-main {
        position: relative;
        /* Di atas plexus */
        z-index: 1;
        text-align: center;
        /* Teks di tengah */
    }

    .hero-content-eduverse-main .eyebrow-text {
        /* Teks kecil di atas judul */
        font-family: 'Orbitron', sans-serif;
        font-size: 0.9rem;
        font-weight: 500;
        color: var(--accent-edu2-dark);
        text-transform: uppercase;
        letter-spacing: 2.5px;
        margin-bottom: 15px;
        display: block;
    }

    body:not(.dark-mode) .hero-content-eduverse-main .eyebrow-text {
        color: var(--accent-edu2);
    }

    .hero-content-eduverse-main h1 {
        font-size: 4.2rem;
        /* Judul utama besar */
        font-weight: 900;
        /* Orbitron sangat bold */
        line-height: 1.15;
        margin-bottom: 20px;
        color: #fff;
        text-shadow: 0 0 20px rgba(var(--primary-edu2-dark-rgb, 51, 161, 255), 0.5), 0 0 30px rgba(var(--secondary-edu2-dark-rgb, 255, 135, 135), 0.3);
        /* Glow effect */
    }

    /* Komentar CSS: Variabel RGB untuk warna glow */
    body.dark-mode {
        --primary-edu2-dark-rgb: 51, 161, 255;
        --secondary-edu2-dark-rgb: 255, 135, 135;
    }

    body:not(.dark-mode) {
        --primary-edu2-rgb: 0, 119, 204;
        --secondary-edu2-rgb: 255, 107, 107;
    }

    body:not(.dark-mode) .hero-content-eduverse-main h1 {
        text-shadow: 0 0 20px rgba(var(--primary-edu2-rgb, 0, 119, 204), 0.5), 0 0 30px rgba(var(--secondary-edu2-rgb, 255, 107, 107), 0.3);
    }


    .hero-content-eduverse-main h1 .dynamic-keyword-eduverse {
        /* Untuk efek ketik atau animasi kata */
        color: var(--secondary-edu2-dark);
        /* Warna kata kunci */
        /* Bisa ditambahkan border bawah animasi */
        border-bottom: 3px solid transparent;
        transition: border-color 0.5s ease;
    }

    .hero-content-eduverse-main h1 .dynamic-keyword-eduverse.active-keyword {
        border-bottom-color: var(--secondary-edu2-dark);
    }

    body:not(.dark-mode) .hero-content-eduverse-main h1 .dynamic-keyword-eduverse {
        color: var(--secondary-edu2);
    }

    body:not(.dark-mode) .hero-content-eduverse-main h1 .dynamic-keyword-eduverse.active-keyword {
        border-bottom-color: var(--secondary-edu2);
    }


    .hero-content-eduverse-main p.lead-eduverse-main {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.25rem;
        font-weight: 400;
        margin-bottom: 35px;
        color: var(--muted-text-dark-edu2);
        /* Default dark mode */
        max-width: 650px;
        margin-left: auto;
        margin-right: auto;
        line-height: 1.7;
    }

    body:not(.dark-mode) .hero-content-eduverse-main p.lead-eduverse-main {
        color: var(--muted-text-light-edu2);
    }

    .hero-content-eduverse-main .hero-cta-eduverse a {
        margin: 10px;
        /* Jarak antar tombol */
    }
</style>

<section id="heroPendidikanEduverseInteractive" class="section-eduverse">
    <div id="hero-plexus-background"></div> <?php /* Komentar PHP: Kontainer untuk Particles.js atau animasi JS lainnya */ ?>

    <div class="container hero-content-eduverse-main">
        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <span class="eyebrow-text">Selamat Datang di EduVerse Campus</span>
            <h1>
                Jelajahi Dunia <span class="dynamic-keyword-eduverse" id="heroKeyword">Pengetahuan</span><br>
                Tanpa Batas.
            </h1>
            <p class="lead-eduverse-main">
                Platform pendidikan interaktif yang dirancang untuk menginspirasi inovasi, kolaborasi, dan pembelajaran seumur hidup di era digital.
            </p>
            <div class="hero-cta-eduverse">
                <a href="#programStudiFuturistik" class="btn-eduverse-primary btn-lg">Temukan Program Anda</a>
                <a href="#labVirtualPendidikan" class="btn-eduverse-secondary btn-lg">Tur Virtual Kampus</a>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Komentar JavaScript: Inisialisasi Particles.js untuk latar belakang plexus
        if (typeof particlesJS !== 'undefined' && document.getElementById('hero-plexus-background')) {
            particlesJS('hero-plexus-background', {
                "particles": {
                    "number": {
                        "value": 60,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#8892B0"
                    }, // var(--muted-text-dark-edu2)
                    "shape": {
                        "type": "circle"
                    },
                    "opacity": {
                        "value": 0.3,
                        "random": true,
                        "anim": {
                            "enable": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                        "anim": {
                            "enable": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 180,
                        "color": "#33A1FF",
                        "opacity": 0.2,
                        "width": 1
                    }, // var(--primary-edu2-dark)
                    "move": {
                        "enable": true,
                        "speed": 1.5,
                        "direction": "none",
                        "random": true,
                        "straight": false,
                        "out_mode": "out"
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "grab"
                        },
                        "onclick": {
                            "enable": false
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 150,
                            "line_linked": {
                                "opacity": 0.5
                            }
                        }
                    }
                },
                "retina_detect": true
            });
            // Komentar JavaScript: Penyesuaian warna partikel untuk light mode jika diperlukan
            document.addEventListener('themeChangedEduverse', function(e) {
                const isDarkMode = e.detail.theme === 'dark';
                const pJS = window.pJSDom[0].pJS; // Akses instance particlesJS
                if (pJS) {
                    pJS.particles.color.value = isDarkMode ? '#8892B0' : '#5A738B'; // var(--muted-text-dark-edu2) vs var(--muted-text-light-edu2)
                    pJS.particles.line_linked.color = isDarkMode ? '#33A1FF' : '#0077CC'; // var(--primary-edu2-dark) vs var(--primary-edu2)
                    pJS.fn.particlesRefresh();
                }
            });
            // Komentar JavaScript: Panggil sekali saat load untuk set warna awal
            const initialTheme = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
            const pJSInstance = window.pJSDom[0].pJS;
            if (pJSInstance) {
                pJSInstance.particles.color.value = initialTheme === 'dark' ? '#8892B0' : '#5A738B';
                pJSInstance.particles.line_linked.color = initialTheme === 'dark' ? '#33A1FF' : '#0077CC';
                pJSInstance.fn.particlesRefresh();
            }
        } else {
            console.warn('Particles.js library not loaded for hero background.');
        }

        // Komentar JavaScript: Animasi kata kunci dinamis di judul (contoh sederhana)
        const heroKeyword = document.getElementById('heroKeyword');
        if (heroKeyword) {
            const keywords = ["Pengetahuan", "Inovasi", "Kolaborasi", "Kreativitas"];
            let currentIndex = 0;
            setInterval(() => {
                heroKeyword.classList.remove('active-keyword');
                anime({ // Animasi fade out
                    targets: heroKeyword,
                    opacity: 0,
                    duration: 400,
                    easing: 'easeInExpo',
                    complete: function() {
                        currentIndex = (currentIndex + 1) % keywords.length;
                        heroKeyword.textContent = keywords[currentIndex];
                        anime({ // Animasi fade in
                            targets: heroKeyword,
                            opacity: 1,
                            duration: 400,
                            easing: 'easeOutExpo',
                            begin: function() {
                                heroKeyword.classList.add('active-keyword');
                            }
                        });
                    }
                });
            }, 3500); // Ganti kata setiap 3.5 detik
        }
    });
</script>