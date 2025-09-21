<?php // File: components/profil_dosen_peneliti_nova.php 
?>
<style>
    /* Profil Dosen & Peneliti Nova Styles */
    #profilDosenPenelitiNova {
        background-color: var(--bg-light-edu6);
        /* Default light */
        border-bottom: 1px solid var(--border-light-edu6);
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    body.dark-mode #profilDosenPenelitiNova {
        background-color: var(--bg-dark-edu6);
        border-bottom-color: var(--border-dark-edu6);
    }

    .faculty-profile-card {
        background-color: var(--card-bg-light-edu6);
        border-radius: 10px;
        box-shadow: 0 7px 22px rgba(0, 0, 0, 0.06);
        transition: all 0.35s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid var(--border-light-edu6);
        text-align: center;
        /* Pusatkan konten */
        padding: 30px 20px;
    }

    body.dark-mode .faculty-profile-card {
        background-color: var(--card-bg-dark-edu6);
        box-shadow: 0 7px 22px rgba(0, 0, 0, 0.22);
        border-color: var(--border-dark-edu6);
    }

    .faculty-profile-card:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 10px 30px rgba(var(--primary-nova-rgb, 255, 64, 129), 0.12);
    }

    body.dark-mode .faculty-profile-card:hover {
        box-shadow: 0 10px 30px rgba(var(--primary-nova-dark-rgb, 245, 0, 87), 0.18);
    }

    .faculty-profile-card .faculty-photo-wrapper {
        width: 150px;
        /* Ukuran foto */
        height: 150px;
        border-radius: 50%;
        overflow: hidden;
        margin: 0 auto 20px auto;
        /* Pusatkan foto */
        border: 4px solid var(--secondary-nova);
        /* Border dengan warna sekunder */
        box-shadow: 0 0 15px rgba(var(--secondary-nova-rgb, 124, 77, 255), 0.3);
        transition: all 0.3s ease;
    }

    .faculty-profile-card:hover .faculty-photo-wrapper {
        border-color: var(--primary-nova);
        box-shadow: 0 0 20px rgba(var(--primary-nova-rgb, 255, 64, 129), 0.4);
        transform: scale(1.05);
    }

    body.dark-mode .faculty-profile-card .faculty-photo-wrapper {
        border-color: var(--secondary-nova-dark);
        box-shadow: 0 0 15px rgba(var(--secondary-nova-dark-rgb, 149, 117, 205), 0.3);
    }

    body.dark-mode .faculty-profile-card:hover .faculty-photo-wrapper {
        border-color: var(--primary-nova-dark);
        box-shadow: 0 0 20px rgba(var(--primary-nova-dark-rgb, 245, 0, 87), 0.4);
    }

    .faculty-profile-card .faculty-photo-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .faculty-profile-card h5.faculty-name {
        font-family: 'Syne', sans-serif;
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .faculty-profile-card p.faculty-title {
        font-size: 0.9rem;
        color: var(--accent-nova);
        /* Warna jabatan dengan aksen */
        font-weight: 600;
        margin-bottom: 10px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: color 0.3s ease;
    }

    body.dark-mode .faculty-profile-card p.faculty-title {
        color: var(--accent-nova-dark);
    }

    .faculty-profile-card p.faculty-expertise {
        font-size: 0.85rem;
        color: var(--muted-text-light-edu6);
        line-height: 1.6;
        margin-bottom: 15px;
        min-height: 50px;
        /* Jaga ruang untuk deskripsi keahlian */
    }

    body.dark-mode .faculty-profile-card p.faculty-expertise {
        color: var(--muted-text-dark-edu6);
    }

    .faculty-profile-card .faculty-social-links a {
        color: var(--muted-text-light-edu6);
        margin: 0 7px;
        font-size: 1.1rem;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .faculty-profile-card .faculty-social-links a:hover {
        color: var(--primary-nova);
        transform: scale(1.2);
    }

    body.dark-mode .faculty-profile-card .faculty-social-links a {
        color: var(--muted-text-dark-edu6);
    }

    body.dark-mode .faculty-profile-card .faculty-social-links a:hover {
        color: var(--primary-nova-dark);
    }
</style>

<section id="profilDosenPenelitiNova" class="section-nova-uni">
    <div class="container">
        <div class="section-title-nova-uni" data-aos="fade-up">
            <h2>Pengajar & <span style="color:var(--secondary-nova);">Peneliti</span> Kami</h2>
            <p class="subtitle-nova-uni">Bertemu dengan Para Ahli yang Mendedikasikan Diri untuk Pendidikan dan Inovasi.</p>
        </div>

        <div class="row gy-4">
            <?php
            // Komentar PHP: Array data dosen/peneliti
            $dosen_list_nova = [
                [
                    "nama" => "Prof. Dr. Elara Vance",
                    "jabatan" => "Guru Besar Kecerdasan Artifisial",
                    "keahlian" => "Machine Learning, Natural Language Processing, Etika AI.",
                    "foto" => "https://placehold.co/150x150/FF4081/FFFFFF?text=EV",
                    "delay" => 100
                ],
                [
                    "nama" => "Dr. Kenji Tanaka",
                    "jabatan" => "Kepala Lab Realitas Imersif",
                    "keahlian" => "Pengembangan VR/AR, Interaksi Manusia-Komputer, Desain Game.",
                    "foto" => "https://placehold.co/150x150/7C4DFF/FFFFFF?text=KT",
                    "delay" => 200
                ],
                [
                    "nama" => "Dr. Anya Sharma",
                    "jabatan" => "Peneliti Senior Bio-Art",
                    "keahlian" => "Seni Generatif, Biodesain, Material Berkelanjutan.",
                    "foto" => "https://placehold.co/150x150/00BCD4/1A1A1A?text=AS",
                    "delay" => 300
                ],
                [
                    "nama" => "Prof. Budi Santoso, M.Sc.",
                    "jabatan" => "Koordinator Program Sains Data",
                    "keahlian" => "Big Data Analytics, Visualisasi Data, Algoritma Prediktif.",
                    "foto" => "https://placehold.co/150x150/FF4081/FFFFFF?text=BS",
                    "delay" => 400
                ],
            ];

            foreach ($dosen_list_nova as $dosen) : ?>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo $dosen['delay']; ?>">
                    <div class="faculty-profile-card">
                        <div class="faculty-photo-wrapper">
                            <img src="<?php echo $dosen['foto']; ?>" alt="[Foto <?php echo htmlspecialchars($dosen['nama']); ?>]" class="img-fluid">
                        </div>
                        <h5 class="faculty-name"><?php echo htmlspecialchars($dosen['nama']); ?></h5>
                        <p class="faculty-title"><?php echo htmlspecialchars($dosen['jabatan']); ?></p>
                        <p class="faculty-expertise"><?php echo htmlspecialchars($dosen['keahlian']); ?></p>
                        <div class="faculty-social-links">
                            <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" title="ResearchGate"><i class="fab fa-researchgate"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>