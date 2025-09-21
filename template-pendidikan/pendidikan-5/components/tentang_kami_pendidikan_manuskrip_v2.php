<?php // File: components/tentang_kami_pendidikan_manuskrip_v2.php 
?>
<style>
    /* Styles untuk Tentang Kami Section (Manuskrip) */
    #tentang-kami-component {
        background-color: var(--card-bg);
        /* Latar lebih terang dari body, menggunakan variabel global */
        border-bottom: 1px solid var(--border-color);
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    /* Efek "watermark" atau "old seal" di background section */
    #tentang-kami-component::before {
        content: "\f518";
        /* Font Awesome: fas fa-landmark atau fa-university, atau fa-scroll \f02d */
        font-family: "Font Awesome 6 Free";
        font-weight: 900;
        /* Solid icon */
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) rotate(-15deg);
        font-size: 20rem;
        /* Ukuran watermark besar, disesuaikan */
        color: var(--bg-primary);
        /* Warna watermark sangat transparan, diambil dari bg utama */
        opacity: 0.04;
        /* Lebih subtle */
        z-index: 0;
        transition: color 0.3s ease, opacity 0.3s ease;
    }

    html.dark #tentang-kami-component::before {
        opacity: 0.03;
    }


    .about-manuscript-content h3 {
        color: var(--color-p);
    }

    .about-manuscript-content .manuscript-excerpt {
        font-family: 'EB Garamond', serif;
        font-style: italic;
        color: var(--text-muted);
        border: 1px solid var(--border-color);
        background-color: color-mix(in srgb, var(--bg-primary) 60%, transparent);
        box-shadow: inset 0 0 10px color-mix(in srgb, var(--text-primary) 5%, transparent);
    }

    .about-manuscript-content .manuscript-excerpt::before,
    .about-manuscript-content .manuscript-excerpt::after {
        font-family: 'Cinzel Decorative', serif;
        color: var(--color-s);
        opacity: 0.6;
    }

    .about-manuscript-content .manuscript-excerpt::before {
        content: '“';
        /* Kutip pembuka */
        font-size: 3.5rem;
        /* Lebih besar */
        position: absolute;
        top: -0.5rem;
        /* Penyesuaian posisi */
        left: 0.5rem;
        line-height: 1;
    }

    .about-manuscript-content .manuscript-excerpt::after {
        content: '”';
        /* Kutip penutup */
        font-size: 3.5rem;
        position: absolute;
        bottom: -1.5rem;
        /* Penyesuaian posisi */
        right: 0.5rem;
        line-height: 1;
    }


    .academic-tradition-list li::before {
        content: "\f303";
        /* Font Awesome: fas fa-pen-nib atau \f51c (feather-alt) atau \e24d (scroll-old) */
        font-family: "Font Awesome 6 Free";
        font-weight: 900;
        color: var(--color-a);
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .academic-tradition-list li:hover::before {
        transform: translateX(4px) scale(1.1);
        color: var(--color-s);
    }

    .about-image-manuscript {
        border: 8px solid var(--card-bg);
        /* Frame tebal, warna sama dengan bg section */
        outline: 1px solid var(--border-color);
        box-shadow: 0 10px 30px color-mix(in srgb, var(--text-primary) 15%, transparent);
        transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        /* Transisi lebih smooth */
    }

    html.dark .about-image-manuscript {
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }


    .about-image-manuscript-wrapper:hover .about-image-manuscript {
        transform: rotate(1.8deg) scale(1.02);
        /* Efek hover lebih dinamis */
        box-shadow: 0 18px 45px color-mix(in srgb, var(--text-primary) 20%, transparent);
    }

    html.dark .about-image-manuscript-wrapper:hover .about-image-manuscript {
        box-shadow: 0 18px 45px rgba(0, 0, 0, 0.4);
    }
</style>

<section id="tentang-kami" class="tentang-kami-component section-athenaeum py-20 lg:py-28 relative">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="section-title-athenaeum" data-aos="fade-up">
            <h2 class="text-3xl lg:text-4xl">Warisan <span class="text-[var(--color-s)]">Intelektual</span> Kami</h2>
            <p class="subtitle-athenaeum mt-3 text-lg lg:text-xl">
                Menelusuri Akar Sejarah dan Komitmen Abadi Athenaeum Digitalis terhadap Pencerahan.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center relative z-10">
            <div class="about-image-manuscript-wrapper" data-aos="fade-right" data-aos-duration="900">
                <img src="https://placehold.co/550x460/FFFBF0/7B3F00?text=Ruang+Baca+Klasik&font=cinzeldecorative&font-size=38"
                    alt="[Gambar Ruang Baca Klasik dengan buku-buku tua dan atmosfer yang tenang]"
                    class="about-image-manuscript rounded-lg w-full h-auto object-cover">
            </div>
            <div class="about-manuscript-content" data-aos="fade-left" data-aos-duration="900" data-aos-delay="100">
                <h3 class="text-2xl lg:text-3xl font-bold mb-5 lg:mb-6">Jejak Langkah Menuju Pencerahan.</h3>
                <p class="manuscript-excerpt relative p-5 lg:p-6 text-base lg:text-lg rounded-md mb-6 lg:mb-8">
                    "Dari lembaran masa lalu, kami merangkai benang merah pengetahuan untuk masa depan yang lebih bijaksana dan tercerahkan."
                </p>
                <p class="text-base lg:text-lg mb-4 font-eb-garamond leading-relaxed">
                    Athenaeum Digitalis didirikan dengan semangat untuk menjadi mercusuar ilmu pengetahuan dan pusat pengembangan karakter. Kami mewarisi tradisi akademik yang kaya, di mana diskusi mendalam, penelitian orisinal, dan pencarian kebenaran menjadi napas kehidupan institusi.
                </p>
                <p class="text-base lg:text-lg mb-6 font-eb-garamond leading-relaxed">
                    Kami percaya bahwa pendidikan sejati adalah proses seumur hidup. Oleh karena itu, kami tidak hanya membekali pengunjung dengan akses informasi, tetapi juga menanamkan kecintaan pada belajar, kemampuan berpikir kritis, dan apresiasi terhadap warisan intelektual.
                </p>
                <ul class="academic-tradition-list list-none p-0 space-y-3">
                    <li data-aos="fade-left" data-aos-delay="200" class="relative pl-8 text-base lg:text-lg font-eb-garamond">Kurasi Koleksi yang Mendalam dan Relevan</li>
                    <li data-aos="fade-left" data-aos-delay="300" class="relative pl-8 text-base lg:text-lg font-eb-garamond">Fasilitasi Riset dan Penemuan</li>
                    <li data-aos="fade-left" data-aos-delay="400" class="relative pl-8 text-base lg:text-lg font-eb-garamond">Lingkungan Belajar yang Suportif dan Inklusif</li>
                    <li data-aos="fade-left" data-aos-delay="500" class="relative pl-8 text-base lg:text-lg font-eb-garamond">Kontribusi Aktif pada Literasi Masyarakat</li>
                </ul>
                <div class="mt-8 lg:mt-10">
                    <a href="#kontak" class="btn-athenaeum btn-athenaeum-primary">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Komentar JavaScript: Script khusus untuk Tentang Kami Section (jika ada)
    // Misalnya, jika ada elemen interaktif tambahan di masa depan.
    // Untuk saat ini, AOS sudah menangani animasi.
</script>