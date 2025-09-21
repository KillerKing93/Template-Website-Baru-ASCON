<?php // File: components/event_workshop_virtual_pendidikan.php 
?>
<style>
    /* Event & Workshop Virtual Pendidikan Styles */
    #eventWorkshopVirtualPendidikan {
        background-color: var(--bg-light-edu4);
        /* Default light */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #eventWorkshopVirtualPendidikan {
        background-color: var(--bg-dark-edu4);
    }

    .event-virtual-card {
        background-color: var(--card-bg-light-edu4);
        border-radius: 8px;
        box-shadow: 0 7px 22px rgba(0, 0, 0, 0.06);
        transition: all 0.35s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid var(--border-light-edu4);
        position: relative;
        overflow: hidden;
    }

    body.dark-mode .event-virtual-card {
        background-color: var(--card-bg-dark-edu4);
        box-shadow: 0 7px 22px rgba(0, 0, 0, 0.22);
        border-color: var(--border-dark-edu4);
    }

    .event-virtual-card::after {
        content: '';
        position: absolute;
        bottom: 0;
        right: 0;
        width: 0;
        height: 0;
        border-bottom: 3px solid var(--accent-innovate);
        border-right: 3px solid var(--accent-innovate);
        transition: width 0.3s ease 0.1s, height 0.3s ease;
        border-bottom-right-radius: 8px;
    }

    .event-virtual-card:hover::after {
        width: 50%;
        height: 50%;
    }

    body.dark-mode .event-virtual-card::after {
        border-color: var(--accent-innovate-dark);
    }


    .event-virtual-card:hover {
        transform: translateY(-6px);
    }

    .event-virtual-card .event-thumbnail-wrapper {
        height: 200px;
        overflow: hidden;
        border-radius: 8px 8px 0 0;
        position: relative;
    }

    .event-virtual-card .event-thumbnail-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .event-virtual-card:hover .event-thumbnail-wrapper img {
        transform: scale(1.06);
    }

    .event-virtual-card .event-type-badge {
        position: absolute;
        top: 12px;
        left: 12px;
        background-color: var(--secondary-innovate);
        color: var(--bg-light-edu4);
        padding: 5px 10px;
        font-size: 0.7rem;
        font-weight: 700;
        border-radius: 4px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        z-index: 1;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    body.dark-mode .event-virtual-card .event-type-badge {
        background-color: var(--secondary-innovate-dark);
        color: var(--bg-dark-edu4);
    }

    .event-virtual-card .event-details-content {
        padding: 25px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .event-virtual-card h5.event-virtual-title {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 10px;
        line-height: 1.3;
    }

    .event-virtual-card h5.event-virtual-title a {
        color: var(--text-light-edu4);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .event-virtual-card h5.event-virtual-title a:hover {
        color: var(--primary-innovate);
    }

    body.dark-mode .event-virtual-card h5.event-virtual-title a {
        color: var(--text-dark-edu4);
    }

    body.dark-mode .event-virtual-card h5.event-virtual-title a:hover {
        color: var(--primary-innovate-dark);
    }

    .event-virtual-card .event-meta-virtual {
        font-size: 0.85rem;
        color: var(--muted-text-light-edu4);
        margin-bottom: 15px;
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        transition: color 0.3s ease;
    }

    .event-virtual-card .event-meta-virtual span {
        display: inline-flex;
        align-items: center;
    }

    .event-virtual-card .event-meta-virtual i {
        margin-right: 6px;
        color: var(--primary-innovate);
    }

    body.dark-mode .event-virtual-card .event-meta-virtual {
        color: var(--muted-text-dark-edu4);
    }

    body.dark-mode .event-virtual-card .event-meta-virtual i {
        color: var(--primary-innovate-dark);
    }

    .event-virtual-card .btn-join-event {
        margin-top: auto;
        align-self: flex-start;
        font-size: 0.9rem;
    }
</style>

<section id="eventWorkshopVirtualPendidikan" class="section-eduverse">
    <div class="container">
        <div class="section-title-eduverse" data-aos="fade-up">
            <h2 data-text="ACARA & WORKSHOP">ACARA & <span class="highlight-accent-edu2" data-text="WORKSHOP">WORKSHOP</span></h2>
            <p class="subtitle-eduverse">Ikuti Sesi Interaktif, Webinar Inspiratif, dan Workshop Praktis dari Para Ahli.</p>
        </div>

        <div class="row gy-4">
            <?php
            // Komentar PHP: Array data acara/webinar
            $event_list_innovateu = [
                [
                    "judul" => "Masterclass: Deep Learning untuk Pengenalan Citra",
                    "tipe" => "Workshop Virtual",
                    "tanggal_obj" => new DateTime("+10 days"), // 10 hari dari sekarang
                    "waktu" => "13:00 - 17:00 WIB",
                    "pembicara" => "Dr. Aris Setiawan",
                    "img" => "https://placehold.co/600x400/0077CC/FFFFFF?text=Deep+Learning+Masterclass&font=orbitron",
                    "delay" => 100
                ],
                [
                    "judul" => "Webinar Series: Masa Depan Metaverse dalam Edukasi",
                    "tipe" => "Webinar Series",
                    "tanggal_obj" => new DateTime("+18 days"), // Setiap Selasa, contohnya
                    "waktu" => "19:00 - 20:30 WIB",
                    "pembicara" => "Prof. Rina Chandra",
                    "img" => "https://placehold.co/600x400/FF6B6B/FFFFFF?text=Metaverse+Education+Webinar&font=orbitron",
                    "delay" => 200
                ],
                [
                    "judul" => "Hackathon: Solusi Cerdas untuk Smart City",
                    "tipe" => "Kompetisi (Online)",
                    "tanggal_obj" => new DateTime("+25 days"),
                    "waktu" => "Full Day Event",
                    "pembicara" => "Panel Juri Industri",
                    "img" => "https://placehold.co/600x400/4ECDC4/1C3F5F?text=Smart+City+Hackathon&font=orbitron",
                    "delay" => 300
                ],
            ];

            foreach ($event_list_innovateu as $event) :
                $tanggal_event = $event['tanggal_obj']->format('d M Y');
            ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo $event['delay']; ?>">
                    <article class="event-virtual-card">
                        <div class="event-thumbnail-wrapper">
                            <a href="#"><img src="<?php echo $event['img']; ?>" alt="[Gambar <?php echo htmlspecialchars($event['judul']); ?>]"></a>
                            <span class="event-type-badge"><?php echo htmlspecialchars($event['tipe']); ?></span>
                        </div>
                        <div class="event-details-content">
                            <h5 class="event-virtual-title"><a href="#"><?php echo htmlspecialchars($event['judul']); ?></a></h5>
                            <div class="event-meta-virtual">
                                <span><i class="fas fa-calendar-alt"></i> <?php echo $tanggal_event; ?></span>
                                <span><i class="fas fa-clock"></i> <?php echo htmlspecialchars($event['waktu']); ?></span>
                            </div>
                            <p style="font-size:0.85rem; color: var(--muted-text-light-edu4); margin-bottom:15px; font-style:italic;" class="event-speaker"> <?php /* Komentar PHP: Class untuk speaker, agar bisa di-style terpisah jika perlu */ ?>
                                Oleh: <?php echo htmlspecialchars($event['pembicara']); ?>
                            </p>
                            <a href="#" class="btn-eduverse-secondary btn-join-event">Daftar & Info Detail</a>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>