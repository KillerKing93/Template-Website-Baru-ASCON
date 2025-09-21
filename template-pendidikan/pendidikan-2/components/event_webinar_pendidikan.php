<?php // File: components/event_webinar_pendidikan.php 
?>
<style>
    /* Event & Webinar Pendidikan Styles */
    #eventWebinarPendidikan {
        background-color: var(--bg-light-edu2);
        /* Default light */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #eventWebinarPendidikan {
        background-color: var(--bg-dark-edu2);
    }

    .event-card-eduverse {
        background-color: var(--card-bg-light-edu2);
        border-radius: 8px;
        box-shadow: 0 7px 22px rgba(0, 0, 0, 0.06);
        transition: all 0.35s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid var(--border-light-edu2);
        position: relative;
        /* Untuk pita tanggal */
    }

    body.dark-mode .event-card-eduverse {
        background-color: var(--card-bg-dark-edu2);
        box-shadow: 0 7px 22px rgba(0, 0, 0, 0.22);
        border-color: var(--border-dark-edu2);
    }

    .event-card-eduverse:hover {
        transform: translateY(-8px) rotate(-1deg);
        /* Sedikit miring saat hover */
        box-shadow: 0 10px 30px rgba(0, 119, 204, 0.12);
        /* var(--primary-edu2) dengan alpha */
    }

    body.dark-mode .event-card-eduverse:hover {
        box-shadow: 0 10px 30px rgba(51, 161, 255, 0.18);
        /* var(--primary-edu2-dark) dengan alpha */
    }

    .event-card-eduverse .event-date-ribbon {
        /* Pita tanggal */
        position: absolute;
        top: 15px;
        left: -8px;
        /* Sedikit keluar kiri */
        background-color: var(--secondary-edu2);
        color: var(--bg-light-edu2);
        /* Kontras dengan pita */
        padding: 8px 15px 8px 20px;
        /* Padding kiri lebih besar untuk efek pita */
        font-family: 'Orbitron', sans-serif;
        font-size: 0.9rem;
        font-weight: 700;
        border-radius: 0 4px 4px 0;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        z-index: 1;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .event-card-eduverse .event-date-ribbon::after {
        /* Ujung pita */
        content: "";
        position: absolute;
        top: 100%;
        left: 0;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 0 8px 8px 0;
        /* Membuat efek lipatan */
        border-color: transparent var(--secondary-edu2) transparent transparent;
        filter: brightness(85%);
        /* Sedikit lebih gelap untuk efek bayangan */
        transition: border-color 0.3s ease;
    }

    body.dark-mode .event-card-eduverse .event-date-ribbon {
        background-color: var(--secondary-edu2-dark);
        color: var(--bg-dark-edu2);
    }

    body.dark-mode .event-card-eduverse .event-date-ribbon::after {
        border-right-color: var(--secondary-edu2-dark);
    }


    .event-card-eduverse .event-image-wrapper {
        height: 200px;
        overflow: hidden;
        border-radius: 8px 8px 0 0;
        /* Hanya sudut atas */
    }

    .event-card-eduverse .event-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .event-card-eduverse:hover .event-image-wrapper img {
        transform: scale(1.06);
    }

    .event-card-eduverse .event-content {
        padding: 25px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .event-card-eduverse .event-type-tag {
        /* Tag jenis acara: Webinar, Workshop, dll */
        display: inline-block;
        background-color: rgba(var(--accent-edu2-rgb, 78, 205, 196), 0.15);
        color: var(--accent-edu2);
        padding: 4px 10px;
        font-size: 0.75rem;
        border-radius: 4px;
        margin-bottom: 10px;
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        text-transform: uppercase;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    body.dark-mode .event-card-eduverse .event-type-tag {
        background-color: rgba(var(--accent-edu2-dark-rgb, 111, 255, 233), 0.2);
        color: var(--accent-edu2-dark);
    }

    .event-card-eduverse h5.event-title {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 10px;
        line-height: 1.3;
    }

    .event-card-eduverse h5.event-title a {
        color: var(--text-light-edu2);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .event-card-eduverse h5.event-title a:hover {
        color: var(--primary-edu2);
    }

    body.dark-mode .event-card-eduverse h5.event-title a {
        color: var(--text-dark-edu2);
    }

    body.dark-mode .event-card-eduverse h5.event-title a:hover {
        color: var(--primary-edu2-dark);
    }

    .event-card-eduverse .event-meta-info {
        font-size: 0.85rem;
        color: var(--muted-text-light-edu2);
        margin-bottom: 15px;
        transition: color 0.3s ease;
    }

    .event-card-eduverse .event-meta-info i {
        margin-right: 5px;
    }

    body.dark-mode .event-card-eduverse .event-meta-info {
        color: var(--muted-text-dark-edu2);
    }

    .event-card-eduverse .btn-register-event {
        margin-top: auto;
        align-self: flex-start;
        font-size: 0.9rem;
    }
</style>

<section id="eventWebinarPendidikan" class="section-eduverse">
    <div class="container">
        <div class="section-title-eduverse" data-aos="fade-up">
            <h2 data-text="ACARA & WEBINAR">ACARA & <span class="highlight-accent-edu2" data-text="WEBINAR">WEBINAR</span></h2>
            <p class="subtitle-eduverse">Ikuti Berbagai Kegiatan Edukatif dan Inspiratif yang Kami Selenggarakan.</p>
        </div>

        <div class="row gy-4">
            <?php
            // Komentar PHP: Array data acara/webinar
            $acara_list = [
                [
                    "judul" => "Webinar: Masa Depan AI dalam Pendidikan",
                    "tipe" => "Webinar Online",
                    "tanggal_obj" => new DateTime("+7 days"), // 7 hari dari sekarang
                    "waktu" => "14:00 - 16:00 WIB",
                    "img" => "https://placehold.co/600x400/0077CC/FFFFFF?text=Webinar+AI+Pendidikan&font=orbitron",
                    "delay" => 100
                ],
                [
                    "judul" => "Workshop: Pengembangan Aplikasi Mobile untuk Pemula",
                    "tipe" => "Workshop Offline",
                    "tanggal_obj" => new DateTime("+14 days"),
                    "waktu" => "09:00 - 15:00 WIB",
                    "img" => "https://placehold.co/600x400/FF6B6B/FFFFFF?text=Workshop+Mobile+Dev&font=orbitron",
                    "delay" => 200
                ],
                [
                    "judul" => "Talkshow: Merintis Karir di Industri Kreatif Digital",
                    "tipe" => "Talkshow Interaktif",
                    "tanggal_obj" => new DateTime("+21 days"),
                    "waktu" => "19:00 - 20:30 WIB",
                    "img" => "https://placehold.co/600x400/4ECDC4/1C3F5F?text=Talkshow+Industri+Kreatif&font=orbitron",
                    "delay" => 300
                ],
            ];

            foreach ($acara_list as $acara) :
                $tanggal_acara = $acara['tanggal_obj']->format('d M Y');
            ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo $acara['delay']; ?>">
                    <article class="event-card-eduverse">
                        <div class="event-date-ribbon"><?php echo $tanggal_acara; ?></div>
                        <div class="event-image-wrapper">
                            <a href="#"><img src="<?php echo $acara['img']; ?>" alt="[Gambar <?php echo htmlspecialchars($acara['judul']); ?>]"></a>
                        </div>
                        <div class="event-content">
                            <span class="event-type-tag"><?php echo htmlspecialchars($acara['tipe']); ?></span>
                            <h5 class="event-title"><a href="#"><?php echo htmlspecialchars($acara['judul']); ?></a></h5>
                            <div class="event-meta-info">
                                <span><i class="fas fa-clock"></i> <?php echo htmlspecialchars($acara['waktu']); ?></span>
                            </div>
                            <a href="#" class="btn-eduverse-secondary btn-register-event">Daftar Sekarang</a>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>