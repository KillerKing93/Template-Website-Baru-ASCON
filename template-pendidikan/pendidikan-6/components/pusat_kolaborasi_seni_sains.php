<?php // File: components/pusat_kolaborasi_seni_sains.php 
?>
<style>
    /* Pusat Kolaborasi Seni & Sains Styles */
    #pusatKolaborasiSeniSains {
        background-color: var(--card-bg-light-edu6);
        /* Latar berbeda dari body */
        border-bottom: 1px solid var(--border-light-edu6);
        transition: background-color 0.3s ease, border-color 0.3s ease;
        position: relative;
        /* Untuk elemen dekoratif */
    }

    /* Elemen dekoratif "brush strokes" atau "circuit lines" di background */
    #pusatKolaborasiSeniSains::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image:
            url("data:image/svg+xml,%3Csvg width='100' height='100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M20 0 Q50 20 80 0 T140 0 M0 20 Q20 50 0 80 T0 140' stroke='rgba(var(--accent-nova-rgb,0,188,212),0.07)' stroke-width='2' fill='none'/%3E%3C/svg%3E"),
            url("data:image/svg+xml,%3Csvg width='80' height='80' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='rgba(var(--secondary-nova-rgb,124,77,255),0.06)' stroke-width='1'%3E%3Ccircle cx='40' cy='40' r='38'/%3E%3Ccircle cx='40' cy='40' r='30'/%3E%3Ccircle cx='40' cy='40' r='22'/%3E%3Ccircle cx='40' cy='40' r='14'/%3E%3C/g%3E%3C/svg%3E");
        background-repeat: no-repeat, repeat;
        background-position: top 10% left 5%, center center;
        background-size: 300px, 50px;
        /* Ukuran pattern */
        opacity: 0.8;
        z-index: 0;
        transition: opacity 0.3s ease;
    }

    body.dark-mode #pusatKolaborasiSeniSains {
        background-color: var(--card-bg-dark-edu6);
        border-bottom-color: var(--border-dark-edu6);
    }

    body.dark-mode #pusatKolaborasiSeniSains::before {
        background-image:
            url("data:image/svg+xml,%3Csvg width='100' height='100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M20 0 Q50 20 80 0 T140 0 M0 20 Q20 50 0 80 T0 140' stroke='rgba(var(--accent-nova-dark-rgb,0,229,255),0.08)' stroke-width='2' fill='none'/%3E%3C/svg%3E"),
            url("data:image/svg+xml,%3Csvg width='80' height='80' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='rgba(var(--secondary-nova-dark-rgb,149,117,205),0.07)' stroke-width='1'%3E%3Ccircle cx='40' cy='40' r='38'/%3E%3Ccircle cx='40' cy='40' r='30'/%3E%3Ccircle cx='40' cy='40' r='22'/%3E%3Ccircle cx='40' cy='40' r='14'/%3E%3C/g%3E%3C/svg%3E");
    }


    .collaboration-hub-content {
        position: relative;
        z-index: 1;
    }

    .collaboration-hub-content h3 {
        font-size: 2.6rem;
        font-weight: 800;
        /* Syne sudah bold */
        margin-bottom: 20px;
        color: var(--primary-nova);
        line-height: 1.3;
    }

    body.dark-mode .collaboration-hub-content h3 {
        color: var(--primary-nova-dark);
    }

    .collaboration-hub-content .hub-mission-statement {
        font-family: 'Work Sans', sans-serif;
        font-size: 1.2rem;
        font-weight: 500;
        color: var(--muted-text-light-edu6);
        margin-bottom: 30px;
        border-left: 4px solid var(--secondary-nova);
        padding-left: 20px;
        transition: color 0.3s ease, border-color 0.3s ease;
    }

    body.dark-mode .collaboration-hub-content .hub-mission-statement {
        color: var(--muted-text-dark-edu6);
        border-left-color: var(--secondary-nova-dark);
    }

    .collaboration-hub-content p {
        font-size: 1.05rem;
        line-height: 1.8;
        margin-bottom: 18px;
    }

    .collaboration-features-nova {
        margin-top: 35px;
    }

    .feature-collab-item {
        display: flex;
        align-items: center;
        /* Ikon dan teks sejajar tengah */
        margin-bottom: 25px;
        padding: 20px;
        background-color: rgba(var(--bg-light-edu6-rgb, 255, 255, 255), 0.6);
        /* var(--bg-light-edu6) dengan alpha */
        border-radius: 8px;
        border: 1px solid var(--border-light-edu6);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.04);
        transition: all 0.3s ease;
    }

    body.dark-mode .feature-collab-item {
        background-color: rgba(var(--bg-dark-edu6-rgb, 18, 18, 18), 0.7);
        /* var(--bg-dark-edu6) dengan alpha */
        border-color: var(--border-dark-edu6);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.18);
    }

    .feature-collab-item:hover {
        transform: scale(1.03) rotate(-1deg);
        /* Sedikit miring dan membesar */
        box-shadow: 0 8px 22px rgba(var(--accent-nova-rgb, 0, 188, 212), 0.12);
        border-color: var(--accent-nova);
    }

    body.dark-mode .feature-collab-item:hover {
        box-shadow: 0 8px 22px rgba(var(--accent-nova-dark-rgb, 0, 229, 255), 0.18);
        border-color: var(--accent-nova-dark);
    }

    .feature-collab-item .collab-icon {
        font-size: 2.5rem;
        /* Ikon fitur kolaborasi - Ukuran dasar untuk SVG */
        color: var(--accent-nova);
        margin-right: 20px;
        width: 50px;
        /* Lebar tetap untuk konsistensi */
        text-align: center;
        flex-shrink: 0;
        transition: color 0.3s ease;
        line-height: 1;
        /* Pastikan SVG tidak menambah spasi ekstra */
    }

    .feature-collab-item .collab-icon svg {
        width: 1em;
        /* SVG akan mengambil ukuran dari font-size parent */
        height: 1em;
        /* SVG akan mengambil ukuran dari font-size parent */
        vertical-align: -0.125em;
        /* Penyesuaian vertikal jika diperlukan */
    }

    body.dark-mode .feature-collab-item .collab-icon {
        color: var(--accent-nova-dark);
    }

    .feature-collab-item .collab-text h5 {
        font-family: 'Syne', sans-serif;
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .feature-collab-item .collab-text p {
        font-size: 0.9rem;
        margin-bottom: 0;
        line-height: 1.6;
        color: var(--muted-text-light-edu6);
    }

    body.dark-mode .feature-collab-item .collab-text p {
        color: var(--muted-text-dark-edu6);
    }

    .collaboration-showcase-image-wrapper {
        position: relative;
        text-align: center;
    }

    .collaboration-showcase-image {
        border-radius: 10px;
        max-width: 100%;
        height: auto;
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.1);
        /* Efek perspektif atau "tilt" */
        transform: perspective(1000px) rotateX(5deg) rotateY(-5deg);
        transition: transform 0.5s cubic-bezier(0.25, 0.8, 0.25, 1), box-shadow 0.3s ease;
    }

    .collaboration-showcase-image-wrapper:hover .collaboration-showcase-image {
        transform: perspective(1200px) rotateX(0deg) rotateY(0deg) scale(1.03);
        box-shadow: 0 18px 45px rgba(var(--secondary-nova-rgb, 124, 77, 255), 0.2);
    }

    body.dark-mode .collaboration-showcase-image {
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.3);
    }

    body.dark-mode .collaboration-showcase-image-wrapper:hover .collaboration-showcase-image {
        box-shadow: 0 18px 45px rgba(var(--secondary-nova-dark-rgb, 149, 117, 205), 0.25);
    }
</style>

<section id="pusatKolaborasiSeniSains" class="section-nova-uni">
    <div class="container">
        <div class="section-title-nova-uni" data-aos="fade-up">
            <h2>Pusat Kolaborasi <span style="color:var(--secondary-nova);">Seni & Sains</span></h2>
            <p class="subtitle-nova-uni">Tempat Bertemunya Imajinasi Artistik dengan Presisi Ilmiah untuk Menciptakan Inovasi.</p>
        </div>

        <div class="row align-items-center gy-5">
            <div class="col-lg-6 collaboration-hub-content" data-aos="fade-right" data-aos-duration="900">
                <h3>Menyatu dalam Kreativitas, Bersinergi dalam Penemuan.</h3>
                <p class="hub-mission-statement">
                    Pusat Kolaborasi Seni & Sains Nova Universitas adalah inkubator ide lintas disiplin, memfasilitasi proyek-proyek revolusioner di persimpangan kreativitas dan teknologi.
                </p>
                <p>
                    Kami menyediakan ruang, sumber daya, dan jaringan bagi mahasiswa, dosen, peneliti, dan praktisi industri untuk berkolaborasi dalam proyek-proyek yang menantang batas-batas konvensional. Dari seni digital interaktif hingga visualisasi data ilmiah yang artistik, kami mendorong eksplorasi tanpa henti.
                </p>
                <div class="collaboration-features-nova">
                    <div class="feature-collab-item" data-aos="fade-right" data-aos-delay="100">
                        <div class="collab-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                <path d="M1.5 1.5A.5.5 0 0 0 1 2v12a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5V2a.5.5 0 0 0-.5-.5h-13zM8 15a6.5 6.5 0 1 1 0-13 6.5 6.5 0 0 1 0 13zM8 3a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm0 3a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm0 3a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                            </svg>
                        </div>
                        <div class="collab-text">
                            <h5>Lab Inovasi Terpadu</h5>
                            <p>Fasilitas canggih untuk prototyping, eksperimen media baru, dan pengembangan produk digital.</p>
                        </div>
                    </div>
                    <div class="feature-collab-item" data-aos="fade-right" data-aos-delay="200">
                        <div class="collab-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z" />
                            </svg>
                        </div>
                        <div class="collab-text">
                            <h5>Program Residensi Seniman & Ilmuwan</h5>
                            <p>Mengundang para ahli dari berbagai bidang untuk berkolaborasi dan berbagi pengetahuan.</p>
                        </div>
                    </div>
                    <div class="feature-collab-item" data-aos="fade-right" data-aos-delay="300">
                        <div class="collab-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                                <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v13A1.5 1.5 0 0 0 1.5 16h13a1.5 1.5 0 0 0 1.5-1.5v-13A1.5 1.5 0 0 0 14.5 0h-13zm13 1.5v2.286a.5.5 0 0 1-.146.353l-2.5 2.5a.5.5 0 0 1-.708 0L9.5 5.529a.5.5 0 0 0-.707 0l-2.147 2.146a.5.5 0 0 1-.707 0l-1.5-1.5A.5.5 0 0 1 4.5 6V1.5h10z" />
                            </svg>
                        </div>
                        <div class="collab-text">
                            <h5>Pendanaan Proyek Interdisipliner</h5>
                            <p>Dukungan finansial dan mentoring untuk proyek-proyek kolaboratif yang menjanjikan.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 collaboration-showcase-image-wrapper" data-aos="zoom-out-left" data-aos-duration="900" data-aos-delay="100">
                <img src="https://placehold.co/550x480/FFFFFF/7C4DFF?text=Ruang+Kolaborasi+Seni+Sains&font=syne" alt="[Ilustrasi Ruang Kolaborasi Seni dan Sains yang Modern dan Inspiratif]" class="img-fluid collaboration-showcase-image">
            </div>
        </div>
    </div>
</section>