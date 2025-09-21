<?php // File: components/riset_unggulan_athenaeum_v2.php 
?>
<style>
    /* Styles untuk Riset Unggulan Section */
    #riset-unggulan-component {
        background-color: var(--card-bg);
        /* Latar lebih terang, menggunakan variabel global */
        border-bottom: 1px solid var(--border-color);
    }

    .research-showcase-item {
        background-color: var(--bg-primary);
        /* Card dengan bg utama, agar kontras dengan section */
        border: 1px solid var(--border-color);
        transition: all 0.35s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    .research-showcase-item:hover {
        transform: scale(1.02);
        /* Sedikit membesar */
        box-shadow: 0 10px 30px color-mix(in srgb, var(--color-a) 15%, transparent);
        border-color: var(--color-a);
        /* Aksen warna pada border */
    }

    html.dark .research-showcase-item:hover {
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .research-showcase-item .research-image-wrapper img {
        transition: transform 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    .research-showcase-item:hover .research-image-wrapper img {
        transform: scale(1.1) rotate(1deg);
        /* Zoom dan sedikit rotasi */
    }

    .research-showcase-item .research-field-tag {
        background-color: color-mix(in srgb, var(--color-s) 15%, transparent);
        color: var(--color-s);
        font-family: 'Inter', sans-serif;
    }

    .research-showcase-item .research-showcase-title a {
        color: var(--text-primary);
        transition: color 0.3s ease;
    }

    .research-showcase-item .research-showcase-title a:hover {
        color: var(--color-p);
    }

    .research-showcase-item .research-investigator {
        color: var(--text-muted);
        font-family: 'EB Garamond', serif;
        font-style: italic;
    }

    /* Responsif untuk card riset */
    @media (max-width: 767px) {

        /* md breakpoint Tailwind */
        .research-showcase-item {
            /* Tampilan tumpuk sudah dihandle oleh flex-col di HTML */
        }

        .research-showcase-item:hover {
            /* Aksen atas saat hover di mobile, jika diinginkan */
            /* border-top: 4px solid var(--color-a); */
        }
    }
</style>

<section id="riset-unggulan" class="riset-unggulan-component section-athenaeum py-20 lg:py-28">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="section-title-athenaeum" data-aos="fade-up">
            <h2 class="text-3xl lg:text-4xl">Riset <span class="text-[var(--color-s)]">Unggulan</span> & Publikasi</h2>
            <p class="subtitle-athenaeum mt-3 text-lg lg:text-xl">
                Menjelajahi Penemuan dan Wawasan Terbaru dari Para Akademisi Kami.
            </p>
        </div>

        <div class="space-y-8 lg:space-y-10">
            <?php
            // Komentar PHP: Array data riset unggulan (contoh)
            $riset_unggulan_items = [
                [
                    "judul" => "Interpretasi Ulang Naskah Lontar Kuno: Perspektif Postkolonial",
                    "bidang" => "Filologi & Studi Budaya",
                    "peneliti" => "Prof. Anindita S.",
                    "img" => "https://placehold.co/300x250/FDF6E3/7B3F00?text=Naskah+Lontar&font=cinzeldecorative&font-size=18",
                    "link" => "#riset-lontar-detail",
                    "aos_delay" => "100"
                ],
                [
                    "judul" => "Model Ekonomi Sirkular untuk Komunitas Pedesaan di Indonesia",
                    "bidang" => "Ekonomi Pembangunan",
                    "peneliti" => "Dr. Bambang W.",
                    "img" => "https://placehold.co/300x250/FFFBF0/A0522D?text=Ekonomi+Sirkular&font=cinzeldecorative&font-size=18",
                    "link" => "#riset-ekonomi-detail",
                    "aos_delay" => "200"
                ],
                [
                    "judul" => "Penerapan Algoritma Genetika dalam Desain Arsitektur Vernakular",
                    "bidang" => "Arsitektur & Komputasi",
                    "peneliti" => "Dr. Ir. Chandra K.",
                    "img" => "https://placehold.co/300x250/FDF6E3/5F9EA0?text=Arsitektur+AI&font=cinzeldecorative&font-size=18",
                    "link" => "#riset-arsitektur-detail",
                    "aos_delay" => "300"
                ],
            ];

            foreach ($riset_unggulan_items as $riset) :
            ?>
                <article class="research-showcase-item flex flex-col md:flex-row rounded-lg overflow-hidden" data-aos="fade-up" data-aos-delay="<?php echo htmlspecialchars($riset['aos_delay']); ?>">
                    <div class="research-image-wrapper md:w-1/3 lg:w-1/4 xl:w-1/5 h-52 md:h-auto shrink-0 overflow-hidden">
                        <a href="<?php echo htmlspecialchars($riset['link']); ?>">
                            <img src="<?php echo htmlspecialchars($riset['img']); ?>" alt="[Gambar <?php echo htmlspecialchars($riset['judul']); ?>]" class="w-full h-full object-cover">
                        </a>
                    </div>
                    <div class="research-content p-5 lg:p-6 flex flex-col flex-grow justify-center">
                        <div>
                            <span class="research-field-tag inline-block text-xs font-semibold uppercase tracking-wider px-2.5 py-1 rounded-full mb-2">
                                <?php echo htmlspecialchars($riset['bidang']); ?>
                            </span>
                            <h5 class="research-showcase-title text-lg lg:text-xl font-bold mb-1.5 font-cinzel">
                                <a href="<?php echo htmlspecialchars($riset['link']); ?>"><?php echo htmlspecialchars($riset['judul']); ?></a>
                            </h5>
                            <p class="research-investigator text-sm lg:text-base mb-3">
                                Peneliti Utama: <?php echo htmlspecialchars($riset['peneliti']); ?>
                            </p>
                        </div>
                        <div class="mt-auto md:mt-3">
                            <a href="<?php echo htmlspecialchars($riset['link']); ?>" class="btn-athenaeum btn-athenaeum-secondary text-xs sm:text-sm px-4 py-2 rounded-md">
                                Baca Abstrak
                            </a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-12 lg:mt-16" data-aos="fade-up" data-aos-delay="400">
            <a href="#semua-publikasi" class="btn-athenaeum btn-athenaeum-primary text-base px-8 py-3.5 rounded-lg">
                Lihat Semua Publikasi Riset
            </a>
        </div>
    </div>
</section>

<script>
    // Komentar JavaScript: Script khusus untuk Riset Unggulan (jika ada)
</script>