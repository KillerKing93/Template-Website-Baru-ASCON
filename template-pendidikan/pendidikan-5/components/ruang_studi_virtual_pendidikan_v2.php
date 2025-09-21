<?php // File: components/ruang_studi_virtual_pendidikan_v2.php 
?>
<style>
    /* Styles untuk Ruang Studi Virtual Section */
    #ruang-studi-component {
        background-color: var(--bg-primary);
        border-bottom: 1px solid var(--border-color);
    }

    .virtual-study-content h3 {
        color: var(--color-p);
    }

    .virtual-study-content .study-ambiance-text {
        font-family: 'EB Garamond', serif;
        font-style: italic;
        color: var(--text-muted);
        border-left: 4px solid var(--color-s);
        transition: color 0.3s ease, border-color 0.3s ease;
    }

    .feature-room-item {
        background-color: color-mix(in srgb, var(--card-bg) 70%, transparent);
        border: 1px solid var(--border-color);
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    .feature-room-item:hover {
        transform: translateX(5px) scale(1.02);
        box-shadow: 0 8px 20px color-mix(in srgb, var(--color-a) 15%, transparent);
        border-left: 4px solid var(--color-a);
        border-color: var(--color-a);
    }

    html.dark .feature-room-item:hover {
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
    }


    .feature-room-item .feature-room-icon {
        color: var(--color-a);
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .feature-room-item:hover .feature-room-icon {
        transform: scale(1.1);
    }


    .feature-room-item .feature-room-text h5 {
        font-family: 'Cinzel Decorative', serif;
        /* Konsisten dengan heading lain */
        color: var(--text-primary);
    }

    .feature-room-item .feature-room-text p {
        color: var(--text-muted);
        font-family: 'EB Garamond', serif;
    }

    .virtual-study-image {
        box-shadow: 0 12px 35px color-mix(in srgb, var(--text-primary) 10%, transparent);
        transition: box-shadow 0.4s ease, transform 0.4s ease, filter 0.4s ease;
    }

    html.dark .virtual-study-image {
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.3);
    }

    .virtual-study-image-wrapper:hover .virtual-study-image {
        transform: scale(1.03);
        box-shadow: 0 0 35px color-mix(in srgb, var(--color-a) 25%, transparent), 0 15px 45px color-mix(in srgb, var(--text-primary) 15%, transparent);
        filter: brightness(0.75);
        /* Gambar sedikit gelap agar tombol lebih menonjol */
    }

    html.dark .virtual-study-image-wrapper:hover .virtual-study-image {
        box-shadow: 0 0 35px color-mix(in srgb, var(--color-a-dark) 25%, transparent), 0 15px 45px rgba(0, 0, 0, 0.4);
    }


    .btn-enter-study-room {
        /* Menggunakan class global btn-athenaeum-primary */
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.25);
        transition: opacity 0.4s ease, transform 0.4s ease, background-color 0.3s ease;
    }

    .virtual-study-image-wrapper:hover .btn-enter-study-room {
        opacity: 1 !important;
        /* Paksa opacity jadi 1 */
        transform: translate(-50%, -50%) scale(1) !important;
        /* Paksa transform */
    }
</style>

<section id="ruang-studi" class="ruang-studi-component section-athenaeum py-20 lg:py-28">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="section-title-athenaeum" data-aos="fade-up">
            <h2 class="text-3xl lg:text-4xl">Ruang Studi <span class="text-[var(--color-s)]">Virtual</span> Kami</h2>
            <p class="subtitle-athenaeum mt-3 text-lg lg:text-xl">
                Lingkungan Belajar Imersif yang Mendukung Fokus, Kolaborasi, dan Penemuan.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div class="virtual-study-image-wrapper relative group" data-aos="zoom-in-right" data-aos-duration="900">
                <img src="https://placehold.co/550x480/FFFBF0/5F9EA0?text=Ruang+Studi+Athenaeum&font=cinzeldecorative&font-size=30"
                    alt="[Ilustrasi Ruang Studi Virtual yang Tenang dan Modern dengan elemen klasik]"
                    class="virtual-study-image rounded-lg w-full h-auto object-cover">
                <a href="#link-ke-ruang-studi"
                    class="btn-athenaeum btn-athenaeum-primary btn-enter-study-room absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 group-hover:scale-100 scale-90 text-sm sm:text-base px-6 py-3 sm:px-8 rounded-lg">
                    Masuk Ruang Studi <i class="fas fa-door-open ml-2"></i>
                </a>
            </div>
            <div class="virtual-study-content" data-aos="fade-left" data-aos-duration="900" data-aos-delay="100">
                <h3 class="text-2xl lg:text-3xl font-bold mb-4 lg:mb-5">Temukan Inspirasi dalam Keheningan Digital.</h3>
                <p class="study-ambiance-text text-base lg:text-lg p-4 mb-5 lg:mb-6 rounded-r-md">
                    Dirancang untuk memaksimalkan konsentrasi dan memfasilitasi pembelajaran mendalam, ruang studi virtual kami adalah oase pengetahuan Anda.
                </p>
                <p class="text-base lg:text-lg mb-4 font-eb-garamond leading-relaxed">
                    Akses ribuan sumber daya digital, berkolaborasi dengan sesama pembelajar dalam grup studi virtual, atau temukan sudut tenang untuk refleksi dan penelitian pribadi. Dilengkapi dengan alat bantu canggih dan antarmuka yang intuitif, belajar menjadi pengalaman yang lebih personal dan efektif.
                </p>
                <div class="virtual-room-features space-y-4 mt-6 lg:mt-8">
                    <div class="feature-room-item flex items-start p-4 rounded-lg" data-aos="fade-left" data-aos-delay="200">
                        <div class="feature-room-icon text-2xl lg:text-3xl mr-4 mt-1 w-10 text-center shrink-0"><i class="fas fa-book-atlas"></i></div>
                        <div class="feature-room-text">
                            <h5 class="text-lg lg:text-xl font-semibold mb-1">Akses Koleksi Terpadu</h5>
                            <p class="text-sm lg:text-base leading-relaxed">Terhubung langsung dengan perpustakaan digital, jurnal, dan database riset kami.</p>
                        </div>
                    </div>
                    <div class="feature-room-item flex items-start p-4 rounded-lg" data-aos="fade-left" data-aos-delay="300">
                        <div class="feature-room-icon text-2xl lg:text-3xl mr-4 mt-1 w-10 text-center shrink-0"><i class="fas fa-users-cog"></i></div> <?php /* Ikon diubah: fa-users-cog atau fa-chalkboard-teacher */ ?>
                        <div class="feature-room-text">
                            <h5 class="text-lg lg:text-xl font-semibold mb-1">Ruang Diskusi Kolaboratif</h5>
                            <p class="text-sm lg:text-base leading-relaxed">Fasilitas whiteboard digital, berbagi layar, dan video conference untuk grup studi.</p>
                        </div>
                    </div>
                    <div class="feature-room-item flex items-start p-4 rounded-lg" data-aos="fade-left" data-aos-delay="400">
                        <div class="feature-room-icon text-2xl lg:text-3xl mr-4 mt-1 w-10 text-center shrink-0"><i class="fas fa-brain"></i></div> <?php /* Ikon diubah: fa-brain atau fa-lightbulb */ ?>
                        <div class="feature-room-text">
                            <h5 class="text-lg lg:text-xl font-semibold mb-1">Alat Bantu Belajar Cerdas</h5>
                            <p class="text-sm lg:text-base leading-relaxed">Asisten virtual AI untuk membantu pencarian informasi, pembuatan catatan, dan penjadwalan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Komentar JavaScript: Script khusus untuk Ruang Studi Virtual (jika ada)
    // Misalnya, untuk mengontrol video background atau elemen interaktif lainnya.
</script>