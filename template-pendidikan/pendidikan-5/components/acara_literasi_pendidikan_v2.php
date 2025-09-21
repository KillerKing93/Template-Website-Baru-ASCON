<?php // File: components/acara_literasi_pendidikan_v2.php 
?>
<style>
    /* Styles untuk Acara Literasi Section */
    #acara-literasi-component {
        background-color: var(--bg-primary);
    }

    .event-literacy-card {
        background-color: var(--card-bg);
        border: 1px solid var(--border-color);
        transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    .event-literacy-card:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 12px 30px color-mix(in srgb, var(--color-a) 20%, transparent);
        border-color: var(--color-a);
    }

    html.dark .event-literacy-card:hover {
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
    }

    /* Efek "page curl" atau "old paper edge" pada hover */
    .event-literacy-card::after {
        content: '';
        position: absolute;
        bottom: -1px;
        /* Rapatkan ke border */
        right: -1px;
        width: 0px;
        height: 0px;
        border-style: solid;
        border-width: 0 0 35px 35px;
        /* Ukuran lipatan sedikit lebih besar */
        border-color: transparent transparent var(--color-s) transparent;
        opacity: 0;
        transition: width 0.4s ease, height 0.4s ease, opacity 0.4s ease, border-color 0.3s ease;
        border-bottom-right-radius: 0.375rem;
        /* Sesuaikan dengan radius card */
    }

    .event-literacy-card:hover::after {
        width: 35px;
        height: 35px;
        opacity: 0.7;
    }

    .event-literacy-card .event-image-wrapper-lit img {
        transition: transform 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    .event-literacy-card:hover .event-image-wrapper-lit img {
        transform: scale(1.08);
    }

    .event-literacy-card .event-meta-lit {
        color: var(--text-muted);
        font-family: 'Inter', sans-serif;
    }

    .event-literacy-card .event-meta-lit .event-type-lit {
        font-weight: 600;
        color: var(--color-a);
    }

    .event-literacy-card .event-title-lit a {
        color: var(--text-primary);
        transition: color 0.3s ease;
    }

    .event-literacy-card .event-title-lit a:hover {
        color: var(--color-p);
    }

    .event-literacy-card .event-speaker-lit {
        color: var(--text-muted);
        font-family: 'EB Garamond', serif;
        font-style: italic;
    }
</style>

<section id="acara-literasi" class="acara-literasi-component section-athenaeum py-20 lg:py-28">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="section-title-athenaeum" data-aos="fade-up">
            <h2 class="text-3xl lg:text-4xl">Acara <span class="text-[var(--color-s)]">Literasi</span> & Diskusi</h2>
            <p class="subtitle-athenaeum mt-3 text-lg lg:text-xl">
                Bergabunglah dalam Rangkaian Seminar, Bedah Buku, dan Diskusi Ilmiah Kami.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
            <?php
            // Komentar PHP: Array data acara literasi (contoh)
            $acara_literasi_items = [
                [
                    "judul" => "Bedah Buku: 'Sejarah Pemikiran Klasik'",
                    "tipe" => "Diskusi Buku",
                    "tanggal_obj" => new DateTime("+12 days"), // Objek DateTime untuk format fleksibel
                    "waktu" => "15:00 WIB",
                    "pembicara" => "Prof. Dr. Literatus",
                    "img" => "https://placehold.co/600x400/FFFBF0/7B3F00?text=Bedah+Buku+Klasik&font=cinzeldecorative&font-size=26",
                    "link" => "#bedah-buku-detail",
                    "aos_delay" => "100"
                ],
                [
                    "judul" => "Seminar: 'Masa Depan Riset Humaniora di Era Digital'",
                    "tipe" => "Seminar Akademik",
                    "tanggal_obj" => new DateTime("+20 days"),
                    "waktu" => "10:00 WIB",
                    "pembicara" => "Panel Ahli Internasional",
                    "img" => "https://placehold.co/600x400/FDF6E3/A0522D?text=Seminar+Humaniora&font=cinzeldecorative&font-size=26",
                    "link" => "#seminar-humaniora-detail",
                    "aos_delay" => "200"
                ],
                [
                    "judul" => "Workshop Penulisan Kreatif: 'Merangkai Kata'",
                    "tipe" => "Workshop Interaktif",
                    "tanggal_obj" => new DateTime("+28 days"),
                    "waktu" => "09:00 - 16:00 WIB",
                    "pembicara" => "Penulis Ternama",
                    "img" => "https://placehold.co/600x400/FFFBF0/5F9EA0?text=Workshop+Menulis&font=cinzeldecorative&font-size=26",
                    "link" => "#workshop-menulis-detail",
                    "aos_delay" => "300"
                ],
            ];

            // Komentar PHP: Helper untuk format tanggal Indonesia (contoh sederhana)
            function formatTanggalIndonesia($dateObj)
            {
                $bulan = array(1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
                return $dateObj->format('d') . ' ' . $bulan[(int)$dateObj->format('n')] . ' ' . $dateObj->format('Y');
            }

            foreach ($acara_literasi_items as $acara) :
                $tanggal_acara_formatted = formatTanggalIndonesia($acara['tanggal_obj']);
            ?>
                <article class="event-literacy-card flex flex-col rounded-lg overflow-hidden relative" data-aos="fade-up" data-aos-delay="<?php echo htmlspecialchars($acara['aos_delay']); ?>">
                    <div class="event-image-wrapper-lit h-52 sm:h-56 overflow-hidden">
                        <a href="<?php echo htmlspecialchars($acara['link']); ?>">
                            <img src="<?php echo htmlspecialchars($acara['img']); ?>" alt="[Gambar <?php echo htmlspecialchars($acara['judul']); ?>]" class="w-full h-full object-cover">
                        </a>
                    </div>
                    <div class="event-content-lit p-5 lg:p-6 flex flex-col flex-grow">
                        <div class="event-meta-lit flex justify-between items-center text-xs sm:text-sm mb-2">
                            <span><i class="fas fa-calendar-alt mr-1.5"></i> <?php echo $tanggal_acara_formatted; ?></span>
                            <span class="event-type-lit font-semibold px-2 py-0.5 rounded-full bg-opacity-20 bg-[var(--color-a)] text-[var(--color-a)]">
                                <?php echo htmlspecialchars($acara['tipe']); ?>
                            </span>
                        </div>
                        <h5 class="event-title-lit text-lg lg:text-xl font-bold mb-1.5 font-cinzel">
                            <a href="<?php echo htmlspecialchars($acara['link']); ?>"><?php echo htmlspecialchars($acara['judul']); ?></a>
                        </h5>
                        <p class="event-speaker-lit text-sm lg:text-base mb-3 flex-grow">
                            Pembicara: <?php echo htmlspecialchars($acara['pembicara']); ?>
                        </p>
                        <div class="mt-auto">
                            <a href="<?php echo htmlspecialchars($acara['link']); ?>" class="btn-athenaeum btn-athenaeum-secondary text-xs sm:text-sm px-4 py-2 rounded-md">
                                Info & Registrasi
                            </a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
    // Komentar JavaScript: Script khusus untuk Acara Literasi (jika ada)
    // Misalnya, untuk kalender interaktif atau filter acara.
</script>