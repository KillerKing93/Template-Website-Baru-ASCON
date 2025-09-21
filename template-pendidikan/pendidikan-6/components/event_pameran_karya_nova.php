<?php // File: components/event_pameran_karya_nova.php 
?>
<style>
    /* Event & Pameran Karya Nova Styles */
    #eventPameranKaryaNova {
        background-color: var(--bg-light-edu6);
        /* Default light */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #eventPameranKaryaNova {
        background-color: var(--bg-dark-edu6);
    }

    .event-showcase-card {
        background-color: var(--card-bg-light-edu6);
        border-radius: 10px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.07);
        transition: all 0.35s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid var(--border-light-edu6);
        position: relative;
        overflow: hidden;
    }

    body.dark-mode .event-showcase-card {
        background-color: var(--card-bg-dark-edu6);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25);
        border-color: var(--border-dark-edu6);
    }

    /* Efek "spotlight" atau "glow" dari bawah pada hover */
    .event-showcase-card::before {
        content: '';
        position: absolute;
        bottom: -80%;
        /* Mulai dari bawah dan di luar card */
        left: 50%;
        transform: translateX(-50%);
        width: 200%;
        /* Lebar spotlight */
        height: 100%;
        /* Tinggi spotlight */
        background: radial-gradient(ellipse at bottom, rgba(var(--accent-nova-rgb, 0, 188, 212), 0.2) 0%, transparent 70%);
        opacity: 0;
        transition: opacity 0.5s ease, bottom 0.5s ease;
        pointer-events: none;
        z-index: 0;
    }

    .event-showcase-card:hover::before {
        opacity: 1;
        bottom: -50%;
        /* Spotlight naik */
    }

    body.dark-mode .event-showcase-card::before {
        background: radial-gradient(ellipse at bottom, rgba(var(--accent-nova-dark-rgb, 0, 229, 255), 0.25) 0%, transparent 70%);
    }


    .event-showcase-card:hover {
        transform: translateY(-7px);
    }

    .event-showcase-card .event-showcase-image-wrapper {
        height: 220px;
        overflow: hidden;
        border-radius: 10px 10px 0 0;
        position: relative;
        /* Untuk z-index gambar di atas spotlight */
        z-index: 1;
    }

    .event-showcase-card .event-showcase-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .event-showcase-card:hover .event-showcase-image-wrapper img {
        transform: scale(1.06);
    }

    .event-showcase-card .event-date-badge {
        /* Badge tanggal */
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: var(--primary-nova);
        color: #fff;
        padding: 6px 10px;
        font-size: 0.8rem;
        font-weight: 600;
        border-radius: 4px;
        font-family: 'Syne', sans-serif;
        z-index: 2;
        transition: background-color 0.3s ease;
    }

    body.dark-mode .event-showcase-card .event-date-badge {
        background-color: var(--primary-nova-dark);
    }

    .event-showcase-card .event-showcase-content {
        padding: 25px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        position: relative;
        z-index: 1;
        /* Di atas spotlight */
    }

    .event-showcase-card .event-category-tag {
        display: inline-block;
        background-color: rgba(var(--secondary-nova-rgb, 124, 77, 255), 0.1);
        color: var(--secondary-nova);
        padding: 4px 10px;
        font-size: 0.7rem;
        border-radius: 4px;
        margin-bottom: 10px;
        font-family: 'Work Sans', sans-serif;
        font-weight: 600;
        text-transform: uppercase;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    body.dark-mode .event-showcase-card .event-category-tag {
        background-color: rgba(var(--secondary-nova-dark-rgb, 149, 117, 205), 0.15);
        color: var(--secondary-nova-dark);
    }

    .event-showcase-card h5.event-showcase-title {
        font-family: 'Syne', sans-serif;
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 10px;
        line-height: 1.3;
    }

    .event-showcase-card h5.event-showcase-title a {
        color: var(--text-light-edu6);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .event-showcase-card h5.event-showcase-title a:hover {
        color: var(--primary-nova);
    }

    body.dark-mode .event-showcase-card h5.event-showcase-title a {
        color: var(--text-dark-edu6);
    }

    body.dark-mode .event-showcase-card h5.event-showcase-title a:hover {
        color: var(--primary-nova-dark);
    }

    .event-showcase-card .event-meta-showcase {
        font-size: 0.85rem;
        color: var(--muted-text-light-edu6);
        margin-bottom: 15px;
        transition: color 0.3s ease;
    }

    .event-showcase-card .event-meta-showcase i {
        margin-right: 5px;
    }

    body.dark-mode .event-showcase-card .event-meta-showcase {
        color: var(--muted-text-dark-edu6);
    }

    .event-showcase-card .btn-view-event-nova {
        margin-top: auto;
        align-self: flex-start;
        font-size: 0.9rem;
    }
</style>

<section id="eventPameranKaryaNova" class="section-nova-uni">
    <div class="container">
        <div class="section-title-nova-uni" data-aos="fade-up">
            <h2>Pameran Karya & <span style="color:var(--secondary-nova);">Acara Kampus</span></h2>
            <p class="subtitle-nova-uni">Saksikan Kreativitas Tanpa Batas dan Ikuti Berbagai Kegiatan Inspiratif di Nova Universitas.</p>
        </div>

        <div class="row gy-4">
            <?php
            // Komentar PHP: Array data acara/pameran
            $pameran_list_nova = [
                [
                    "judul" => "Pameran Seni Digital 'METANOIA'",
                    "kategori" => "Pameran Seni",
                    "tanggal_obj" => new DateTime("+5 days"),
                    "lokasi" => "Galeri Nova & Virtual",
                    "img" => "https://placehold.co/600x400/FF4081/FFFFFF?text=Pameran+METANOIA&font=syne",
                    "delay" => 100
                ],
                [
                    "judul" => "NovaTalks: Masa Depan Interaksi Manusia-Mesin",
                    "kategori" => "Diskusi Panel",
                    "tanggal_obj" => new DateTime("+12 days"),
                    "lokasi" => "Auditorium Utama & Live Stream",
                    "img" => "https://placehold.co/600x400/7C4DFF/FFFFFF?text=NovaTalks+AI+Human&font=syne",
                    "delay" => 200
                ],
                [
                    "judul" => "Workshop Bio-Art: Mencipta dengan Alam",
                    "kategori" => "Workshop Kreatif",
                    "tanggal_obj" => new DateTime("+19 days"),
                    "lokasi" => "Laboratorium Bio-Art Nova",
                    "img" => "https://placehold.co/600x400/00BCD4/1A1A1A?text=Workshop+Bio-Art&font=syne",
                    "delay" => 300
                ],
            ];

            foreach ($pameran_list_nova as $pameran) :
                $tanggal_pameran = $pameran['tanggal_obj']->format('d M Y');
            ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo $pameran['delay']; ?>">
                    <article class="event-showcase-card">
                        <div class="event-showcase-image-wrapper">
                            <a href="#"><img src="<?php echo $pameran['img']; ?>" alt="[Gambar <?php echo htmlspecialchars($pameran['judul']); ?>]"></a>
                            <span class="event-date-badge"><?php echo $tanggal_pameran; ?></span>
                        </div>
                        <div class="event-showcase-content">
                            <span class="event-category-tag"><?php echo htmlspecialchars($pameran['kategori']); ?></span>
                            <h5 class="event-showcase-title"><a href="#"><?php echo htmlspecialchars($pameran['judul']); ?></a></h5>
                            <div class="event-meta-showcase">
                                <span><i class="fas fa-map-marker-alt"></i> <?php echo htmlspecialchars($pameran['lokasi']); ?></span>
                            </div>
                            <a href="#" class="btn-nova-secondary btn-view-event-nova">Detail & RSVP</a>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>