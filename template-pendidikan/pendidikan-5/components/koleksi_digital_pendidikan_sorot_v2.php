<?php // File: components/koleksi_digital_pendidikan_sorot_v2.php 
?>
<style>
    /* Styles untuk Koleksi Digital Section */
    #koleksi-digital-component {
        background-color: var(--bg-primary);
        /* Menggunakan variabel global */
    }

    .collection-card-athenaeum {
        background-color: var(--card-bg);
        border: 1px solid var(--border-color);
        transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        /* Transisi lebih smooth */
    }

    .collection-card-athenaeum:hover {
        transform: translateY(-8px) scale(1.02);
        /* Efek angkat dan sedikit membesar */
        box-shadow: 0 12px 30px color-mix(in srgb, var(--color-s) 20%, transparent);
        border-color: var(--color-s);
    }

    html.dark .collection-card-athenaeum:hover {
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
    }


    /* Efek "bookmark" atau "pita" di sudut */
    .collection-card-athenaeum::after {
        content: '\f02e';
        /* Font Awesome: fas fa-bookmark */
        font-family: "Font Awesome 6 Free";
        font-weight: 900;
        /* Solid icon */
        position: absolute;
        top: -8px;
        /* Penyesuaian posisi */
        right: 12px;
        font-size: 2.8rem;
        /* Sedikit lebih besar */
        color: var(--color-s);
        opacity: 0;
        transform: translateY(-20px) rotate(10deg) scale(0.8);
        transition: opacity 0.4s ease, transform 0.4s ease, color 0.3s ease;
        z-index: 1;
    }

    .collection-card-athenaeum:hover::after {
        opacity: 0.6;
        /* Lebih terlihat saat hover */
        transform: translateY(0) rotate(0deg) scale(1);
    }

    .collection-card-athenaeum .collection-image-wrapper img {
        transition: transform 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    .collection-card-athenaeum:hover .collection-image-wrapper img {
        transform: scale(1.08);
        /* Zoom gambar lebih halus */
    }

    .collection-card-athenaeum .collection-type-tag {
        background-color: color-mix(in srgb, var(--color-a) 10%, transparent);
        color: var(--color-a);
        font-family: 'Inter', sans-serif;
    }

    .collection-card-athenaeum .collection-title a {
        color: var(--text-primary);
        transition: color 0.3s ease;
    }

    .collection-card-athenaeum .collection-title a:hover {
        color: var(--color-p);
    }

    .collection-card-athenaeum .collection-desc-short {
        color: var(--text-muted);
        font-family: 'EB Garamond', serif;
    }
</style>

<section id="koleksi-digital" class="koleksi-digital-component section-athenaeum py-20 lg:py-28">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="section-title-athenaeum" data-aos="fade-up">
            <h2 class="text-3xl lg:text-4xl">Sorotan <span class="text-[var(--color-s)]">Koleksi Digital</span></h2>
            <p class="subtitle-athenaeum mt-3 text-lg lg:text-xl">
                Akses ke Ribuan Manuskrip Langka, Jurnal Ilmiah, dan Sumber Belajar Interaktif.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
            <?php
            // Komentar PHP: Array data koleksi (contoh)
            $koleksi_list_items = [
                [
                    "judul" => "Manuskrip Nusantara Kuno",
                    "tipe" => "Naskah Digital",
                    "deskripsi" => "Koleksi digital manuskrip langka dari berbagai kerajaan di Nusantara, kini dapat diakses secara online.",
                    "img" => "https://placehold.co/600x400/FFFBF0/7B3F00?text=Manuskrip+Nusantara&font=cinzeldecorative&font-size=28",
                    "link" => "#manuskrip-detail", // Contoh link
                    "aos_delay" => "100"
                ],
                [
                    "judul" => "Arsip Jurnal Ilmiah Internasional",
                    "tipe" => "Publikasi Riset",
                    "deskripsi" => "Akses penuh ke database jurnal ilmiah terkemuka dunia dalam berbagai disiplin ilmu.",
                    "img" => "https://placehold.co/600x400/FDF6E3/A0522D?text=Jurnal+Ilmiah&font=cinzeldecorative&font-size=28",
                    "link" => "#jurnal-detail",
                    "aos_delay" => "200"
                ],
                [
                    "judul" => "Simulasi Interaktif Laboratorium Virtual",
                    "tipe" => "Sumber Belajar Digital",
                    "deskripsi" => "Pengalaman praktikum virtual yang imersif untuk mata kuliah sains dan teknik tanpa batasan ruang.",
                    "img" => "https://placehold.co/600x400/FFFBF0/5F9EA0?text=Lab+Virtual&font=cinzeldecorative&font-size=28",
                    "link" => "#lab-virtual-detail",
                    "aos_delay" => "300"
                ],
            ];

            foreach ($koleksi_list_items as $item) :
            ?>
                <article class="collection-card-athenaeum flex flex-col rounded-lg overflow-hidden relative" data-aos="fade-up" data-aos-delay="<?php echo htmlspecialchars($item['aos_delay']); ?>">
                    <div class="collection-image-wrapper h-56 sm:h-60 overflow-hidden">
                        <a href="<?php echo htmlspecialchars($item['link']); ?>">
                            <img src="<?php echo htmlspecialchars($item['img']); ?>" alt="[Gambar <?php echo htmlspecialchars($item['judul']); ?>]" class="w-full h-full object-cover">
                        </a>
                    </div>
                    <div class="collection-content p-5 lg:p-6 flex flex-col flex-grow">
                        <div>
                            <span class="collection-type-tag inline-block text-xs font-semibold uppercase tracking-wider px-2 py-1 rounded-full mb-2">
                                <?php echo htmlspecialchars($item['tipe']); ?>
                            </span>
                            <h5 class="collection-title text-xl lg:text-2xl font-bold mb-2 font-cinzel">
                                <a href="<?php echo htmlspecialchars($item['link']); ?>"><?php echo htmlspecialchars($item['judul']); ?></a>
                            </h5>
                            <p class="collection-desc-short text-sm lg:text-base leading-relaxed mb-4 flex-grow">
                                <?php echo htmlspecialchars($item['deskripsi']); ?>
                            </p>
                        </div>
                        <div class="mt-auto">
                            <a href="<?php echo htmlspecialchars($item['link']); ?>" class="btn-athenaeum btn-athenaeum-secondary text-xs sm:text-sm px-4 py-2 rounded-md">
                                Jelajahi Koleksi <i class="fas fa-chevron-right ml-1 text-xs"></i>
                            </a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-12 lg:mt-16" data-aos="fade-up" data-aos-delay="400">
            <a href="#semua-koleksi" class="btn-athenaeum btn-athenaeum-primary text-base px-8 py-3.5 rounded-lg">
                Lihat Semua Koleksi Digital
            </a>
        </div>
    </div>
</section>

<script>
    // Komentar JavaScript: Script khusus untuk Koleksi Digital (jika ada)
    // Misalnya, filter atau fitur pencarian bisa ditambahkan di sini.
</script>