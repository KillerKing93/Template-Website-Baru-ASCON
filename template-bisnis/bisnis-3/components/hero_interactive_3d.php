<?php // File: components/hero_interactive_3d.php 
?>
<style>
    /* Interactive 3D Hero Component Styles */
    :root {
        /* Pastikan variabel CSS dari index.php bisa diakses */
        --primary-color: #6A11CB;
        --secondary-color: #2575FC;
        --accent-color: #00FFED;
        --dark-bg: #121212;
        /* Variabel untuk warna aksen dalam format RGB, jika dibutuhkan untuk rgba() */
        --accent-rgb: 0, 255, 237;
    }

    #heroInteractive3D {
        width: 100%;
        height: 100vh;
        /* Full viewport height */
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: #fff;
        overflow: hidden;
        /* Penting untuk elemen parallax dan animasi */
        perspective: 1000px;
        /* Untuk efek 3D pada child elements */
    }

    /* Lapisan-lapisan untuk efek parallax/3D */
    .hero-layer {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transition: transform 0.2s ease-out;
        /* Untuk mouse move effect */
    }

    #hero-bg-pattern {
        /* Pola geometris di latar belakang */
        background-image: url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%2300FFED' fill-opacity='0.07'%3E%3Cpath d='M50 50V0h10v50H50zM0 50V0h10v50H0zM0 0h80v10H0V0zM0 70h80v10H0V70z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        opacity: 0.5;
        /* transform: translateZ(-100px) scale(1.5); Lebih dalam */
    }

    #hero-particles-layer {
        /* Untuk partikel jika ada */
        /* transform: translateZ(-50px) scale(1.2); Tengah */
    }

    #hero-content-layer {
        /* Konten utama */
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        z-index: 2;
        /* Di atas lapisan lain */
        /* transform: translateZ(0); Paling depan */
    }


    #heroInteractive3D .hero-content h1 {
        font-size: 4rem;
        /* Lebih besar */
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 25px;
        text-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        /* Bayangan teks lebih halus */
        position: relative;
        /* Untuk elemen pseudo */
    }

    #heroInteractive3D .hero-content h1 .highlight-futuristic {
        color: var(--accent-color);
        /* Warna aksen */
        /* text-shadow: 0 0 15px var(--accent-color); Efek glow */
    }

    /* Efek garis animasi di bawah judul */
    #heroInteractive3D .hero-content h1::after {
        content: '';
        display: block;
        width: 0;
        /* Awalnya 0 */
        height: 4px;
        background: var(--accent-color);
        margin: 20px auto 0;
        border-radius: 2px;
        /* Akan dianimasikan dengan JS */
    }


    #heroInteractive3D .hero-content .typed-subtitle-container {
        font-size: 1.5rem;
        font-weight: 400;
        margin-bottom: 40px;
        color: rgba(255, 255, 255, 0.85);
        min-height: 2.2rem;
        /* Jaga ruang untuk efek ketik */
        font-family: 'Roboto Mono', monospace;
    }

    .typed-cursor {
        /* Kustomisasi kursor Typed.js */
        color: var(--accent-color);
        opacity: 1;
        animation: typedBlink 0.7s infinite;
    }

    @keyframes typedBlink {
        50% {
            opacity: 0.0;
        }
    }

    /* BARU: Penyesuaian untuk wadah tombol CTA */
    #heroInteractive3D .hero-cta-buttons {
        display: flex;
        /* Menggunakan flexbox untuk alignment */
        justify-content: center;
        /* Memusatkan tombol-tombol secara horizontal */
        align-items: center;
        /* Menyamakan posisi vertikal tombol-tombol */
        width: 100%;
        /* Memastikan wadah mengambil lebar penuh jika diperlukan untuk centering */
    }

    #heroInteractive3D .hero-cta-buttons a {
        margin: 0 10px;
        /* Memberi jarak antar tombol */
    }

    /* Bentuk geometris abstrak untuk dekorasi */
    .geometric-shape {
        position: absolute;
        border-radius: 10px;
        background: linear-gradient(45deg, rgba(var(--accent-rgb), 0.1), rgba(var(--accent-rgb), 0.05));
        backdrop-filter: blur(5px);
        transition: transform 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        /* Bounce effect */
    }

    .shape1 {
        width: 150px;
        height: 150px;
        top: 15%;
        left: 10%;
        transform: rotate(45deg) translateZ(-80px);
    }

    .shape2 {
        width: 80px;
        height: 80px;
        top: 60%;
        left: 25%;
        transform: rotate(-30deg) translateZ(-40px);
    }

    .shape3 {
        width: 120px;
        height: 120px;
        top: 20%;
        right: 15%;
        transform: rotate(60deg) translateZ(-60px);
    }

    .shape4 {
        width: 60px;
        height: 60px;
        bottom: 10%;
        right: 20%;
        transform: rotate(-45deg) translateZ(-20px);
    }
</style>

<section id="heroInteractive3D">
    <div class="hero-layer" id="hero-bg-pattern" data-depth="0.1"></div>
    <div class="hero-layer" id="hero-particles-layer" data-depth="0.3">
        <div class="geometric-shape shape1" data-depth="0.4"></div>
        <div class="geometric-shape shape2" data-depth="0.2"></div>
        <div class="geometric-shape shape3" data-depth="0.3"></div>
        <div class="geometric-shape shape4" data-depth="0.15"></div>
    </div>

    <div class="hero-layer" id="hero-content-layer" data-depth="0">
        <div class="container hero-content">
            <h1 data-aos="fade-down" data-aos-delay="200">Inovasi <span class="highlight-futuristic">Digital</span><br>Untuk Era Berikutnya</h1>
            <div class="typed-subtitle-container" data-aos="fade-up" data-aos-delay="600">
                <span id="typed-subtitle"></span>
            </div>
            <div class="hero-cta-buttons" data-aos="fade-up" data-aos-delay="1000">
                <a href="#servicesDynamicTabs" class="btn-futuristic-primary">Jelajahi Solusi</a>
                <a href="#contactMapMulti" class="btn-futuristic-secondary">Hubungi Kami</a>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Efek ketik untuk subjudul
        if (typeof Typed !== 'undefined') {
            var options = {
                strings: [
                    'Merancang Masa Depan Teknologi.',
                    'Solusi Kreatif, Hasil Nyata.',
                    'Transformasi Bisnis Anda Bersama Kami.'
                ],
                typeSpeed: 50, // Kecepatan ketik
                backSpeed: 25, // Kecepatan hapus
                backDelay: 2000, // Waktu tunggu sebelum menghapus
                startDelay: 500, // Waktu tunggu sebelum mulai
                loop: true,
                showCursor: true,
                cursorChar: '|', // Karakter kursor
            };
            var typed = new Typed('#typed-subtitle', options);
        } else {
            // Fallback jika Typed.js tidak dimuat
            const subtitleElement = document.getElementById('typed-subtitle');
            if (subtitleElement) {
                subtitleElement.textContent = 'Merancang Masa Depan Teknologi.';
            }
        }

        // Animasi garis bawah judul h1 setelah AOS fade-down selesai
        const heroTitle = document.querySelector('#heroInteractive3D .hero-content h1');
        if (heroTitle) {
            // Cek jika AOS sudah meng-trigger elemen ini
            const checkAOSDone = setInterval(() => {
                if (heroTitle.classList.contains('aos-animate')) { // aos-animate ditambahkan oleh AOS setelah animasi
                    clearInterval(checkAOSDone);
                    // Pastikan Anime.js sudah dimuat
                    if (typeof anime !== 'undefined') {
                        anime({
                            targets: '#heroInteractive3D .hero-content h1::after',
                            width: ['0%', '30%'], // Target lebar garis bawah
                            duration: 800,
                            easing: 'easeOutExpo',
                            delay: 200 // Delay setelah judul muncul
                        });
                    } else {
                        // Fallback jika Anime.js tidak dimuat, mungkin styling manual sederhana
                        const h1After = heroTitle.style; // Tidak bisa langsung ::after, ini hanya contoh
                        // Untuk ::after, Anda perlu menambahkan class atau mengubah variabel CSS jika memungkinkan
                        console.warn('Anime.js not loaded for title animation.');
                    }
                }
            }, 100);
        }

        // Efek Parallax Mouse Move sederhana untuk lapisan-lapisan
        const heroSection = document.getElementById('heroInteractive3D');
        const layers = heroSection.querySelectorAll('.hero-layer > div[data-depth], .hero-layer[data-depth]'); // Semua elemen dengan data-depth

        heroSection.addEventListener('mousemove', function(e) {
            const {
                clientX,
                clientY
            } = e;
            const {
                offsetWidth,
                offsetHeight
            } = heroSection;

            // Hitung pergerakan mouse dari tengah section (-1 to 1)
            const moveX = (clientX / offsetWidth - 0.5) * 2;
            const moveY = (clientY / offsetHeight - 0.5) * 2;

            layers.forEach(layer => {
                const depth = parseFloat(layer.getAttribute('data-depth')) || 0;
                const x = -moveX * (20 * depth); // Intensitas pergerakan (px)
                const y = -moveY * (20 * depth);
                // const z = -depth * 50; // Efek Z sederhana jika ada transform style 3d (dihapus untuk penyederhanaan)

                let rotateEffect = '';
                if (layer.classList.contains('geometric-shape')) {
                    const rotateXVal = -moveY * (5 * depth);
                    const rotateYVal = moveX * (5 * depth);
                    rotateEffect = `rotateX(${rotateXVal}deg) rotateY(${rotateYVal}deg)`;
                }

                // Gabungkan dengan transform yang sudah ada dari CSS jika ada (misal, rotate awal)
                let initialTransform = '';
                if (layer.dataset.initialTransform) { // Simpan transform awal di data attribute jika perlu
                    initialTransform = layer.dataset.initialTransform + ' ';
                } else {
                    // Coba ambil dari style jika diset inline atau dari class (lebih kompleks)
                    // Untuk contoh ini, kita asumsikan transform awal dari class CSS akan tetap berlaku
                    // dan kita hanya menambahkan translateX, translateY, dan rotateEffect.
                    // Lebih baik jika transform awal didefinisikan dan digabungkan dengan benar.
                }

                // Perbaikan: Ambil rotasi awal dari class dan gabungkan
                let baseTransform = '';
                if (layer.classList.contains('shape1')) baseTransform = 'rotate(45deg) ';
                if (layer.classList.contains('shape2')) baseTransform = 'rotate(-30deg) ';
                if (layer.classList.contains('shape3')) baseTransform = 'rotate(60deg) ';
                if (layer.classList.contains('shape4')) baseTransform = 'rotate(-45deg) ';
                // Hapus translateZ dari sini jika tidak dikelola dengan baik bersama parallax
                // baseTransform += `translateZ(${-depth*50}px) `; // Jika ingin tetap ada efek Z awal


                layer.style.transform = `${baseTransform}translateX(${x}px) translateY(${y}px) ${rotateEffect}`;
            });
        });

        heroSection.addEventListener('mouseleave', function() {
            layers.forEach(layer => {
                // Reset ke posisi awal dengan transisi halus
                // Ambil rotasi awal dari class CSS dan terapkan kembali
                // Juga reset translateZ jika ada
                let initialTransform = '';
                const depth = parseFloat(layer.getAttribute('data-depth')) || 0;

                if (layer.classList.contains('shape1')) initialTransform = `rotate(45deg) translateZ(-80px)`;
                else if (layer.classList.contains('shape2')) initialTransform = `rotate(-30deg) translateZ(-40px)`;
                else if (layer.classList.contains('shape3')) initialTransform = `rotate(60deg) translateZ(-60px)`;
                else if (layer.classList.contains('shape4')) initialTransform = `rotate(-45deg) translateZ(-20px)`;
                else if (layer.id === 'hero-bg-pattern') initialTransform = `translateZ(-100px) scale(1.5)`; // Jika ada transform awal
                else if (layer.id === 'hero-particles-layer') initialTransform = `translateZ(-50px) scale(1.2)`; // Jika ada transform awal
                else initialTransform = ''; // Untuk lapisan lain tanpa transform spesifik awal

                layer.style.transform = initialTransform;
            });
        });

        // Tambahkan variabel --accent-rgb jika belum ada di root, untuk geometric-shape
        // Ini lebih baik dilakukan di CSS, tapi sebagai fallback JS:
        if (!getComputedStyle(document.documentElement).getPropertyValue('--accent-rgb')) {
            // Ambil warna dari --accent-color dan konversi ke RGB
            const accentColorHex = getComputedStyle(document.documentElement).getPropertyValue('--accent-color').trim();
            if (accentColorHex.startsWith('#')) {
                const r = parseInt(accentColorHex.slice(1, 3), 16);
                const g = parseInt(accentColorHex.slice(3, 5), 16);
                const b = parseInt(accentColorHex.slice(5, 7), 16);
                document.documentElement.style.setProperty('--accent-rgb', `${r}, ${g}, ${b}`);
            }
        }
    });
</script>