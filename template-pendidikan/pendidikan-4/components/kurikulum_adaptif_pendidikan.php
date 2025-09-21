<?php // File: components/kurikulum_adaptif_pendidikan.php 
?>
<style>
    /* Kurikulum Adaptif Pendidikan Styles */
    #kurikulumAdaptifPendidikan {
        background-color: var(--bg-light-edu4);
        /* Default light */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #kurikulumAdaptifPendidikan {
        background-color: var(--bg-dark-edu4);
    }

    .curriculum-card-innovateu {
        background-color: var(--card-bg-light-edu4);
        border-radius: 10px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.07);
        transition: all 0.4s ease;
        height: 100%;
        border: 1px solid var(--border-light-edu4);
        position: relative;
        overflow: hidden;
        padding: 30px;
        text-align: center;
    }

    body.dark-mode .curriculum-card-innovateu {
        background-color: var(--card-bg-dark-edu4);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25);
        border-color: var(--border-dark-edu4);
    }

    .curriculum-card-innovateu::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 10px;
        border: 2px dashed transparent;
        box-sizing: border-box;
        transition: border-color 0.5s ease;
        animation: traceBorder 8s linear infinite;
        pointer-events: none;
    }

    @keyframes traceBorder {
        0% {
            border-color: rgba(var(--accent-innovate-rgb, 127, 0, 255), 0.1);
        }

        25% {
            border-color: rgba(var(--accent-innovate-rgb, 127, 0, 255), 0.4);
        }

        50% {
            border-color: rgba(var(--primary-innovate-rgb, 0, 169, 224), 0.1);
        }

        75% {
            border-color: rgba(var(--primary-innovate-rgb, 0, 169, 224), 0.4);
        }

        100% {
            border-color: rgba(var(--accent-innovate-rgb, 127, 0, 255), 0.1);
        }
    }

    body.dark-mode .curriculum-card-innovateu::before {
        animation-name: traceBorderDark;
    }

    @keyframes traceBorderDark {
        0% {
            border-color: rgba(var(--accent-innovate-dark-rgb, 164, 80, 255), 0.15);
        }

        25% {
            border-color: rgba(var(--accent-innovate-dark-rgb, 164, 80, 255), 0.5);
        }

        50% {
            border-color: rgba(var(--primary-innovate-dark-rgb, 0, 191, 255), 0.15);
        }

        75% {
            border-color: rgba(var(--primary-innovate-dark-rgb, 0, 191, 255), 0.5);
        }

        100% {
            border-color: rgba(var(--accent-innovate-dark-rgb, 164, 80, 255), 0.15);
        }
    }


    .curriculum-card-innovateu:hover {
        transform: scale(1.02);
    }

    .curriculum-card-innovateu .curriculum-icon {
        font-size: 3.5rem;
        color: var(--primary-innovate);
        margin-bottom: 20px;
        display: inline-block;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .curriculum-card-innovateu:hover .curriculum-icon {
        transform: translateY(-5px);
        color: var(--secondary-innovate);
    }

    body.dark-mode .curriculum-card-innovateu .curriculum-icon {
        color: var(--primary-innovate-dark);
    }

    body.dark-mode .curriculum-card-innovateu:hover .curriculum-icon {
        color: var(--secondary-innovate-dark);
    }

    .curriculum-card-innovateu h4.curriculum-title {
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .curriculum-card-innovateu p.curriculum-desc {
        font-size: 0.95rem;
        color: var(--muted-text-light-edu4);
        line-height: 1.7;
        margin-bottom: 20px;
    }

    body.dark-mode .curriculum-card-innovateu p.curriculum-desc {
        color: var(--muted-text-dark-edu4);
    }

    .curriculum-card-innovateu .btn-view-curriculum {
        font-size: 0.9rem;
    }
</style>

<section id="kurikulumAdaptifPendidikan" class="section-eduverse">
    <div class="container">
        <div class="section-title-eduverse" data-aos="fade-up">
            <h2 data-text="KURIKULUM ADAPTIF">KURIKULUM <span class="highlight-accent-edu2" data-text="ADAPTIF">ADAPTIF</span></h2>
            <p class="subtitle-eduverse">Pembelajaran yang Dipersonalisasi untuk Mengoptimalkan Potensi Setiap Individu.</p>
        </div>

        <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="curriculum-card-innovateu">
                    <div class="curriculum-icon"><i class="fas fa-brain"></i></div>
                    <h4 class="curriculum-title">Pembelajaran Berbasis AI</h4>
                    <p class="curriculum-desc">Jalur belajar yang disesuaikan secara dinamis oleh AI berdasarkan kemajuan, minat, dan gaya belajar siswa.</p>
                    <a href="#" class="btn-eduverse-secondary btn-view-curriculum">Detail Modul AI</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="curriculum-card-innovateu">
                    <div class="curriculum-icon"><i class="fas fa-puzzle-piece"></i></div>
                    <h4 class="curriculum-title">Modul Keterampilan Mikro</h4>
                    <p class="curriculum-desc">Fokus pada penguasaan keterampilan spesifik yang relevan dengan industri melalui modul-modul pendek dan intensif.</p>
                    <a href="#" class="btn-eduverse-secondary btn-view-curriculum">Lihat Micro-Skills</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="curriculum-card-innovateu">
                    <div class="curriculum-icon"><i class="fas fa-project-diagram"></i></div>
                    <h4 class="curriculum-title">Proyek Kolaboratif Global</h4>
                    <p class="curriculum-desc">Kesempatan untuk berkolaborasi dalam proyek nyata dengan siswa dan profesional dari seluruh dunia.</p>
                    <a href="#" class="btn-eduverse-secondary btn-view-curriculum">Info Proyek Global</a>
                </div>
            </div>
        </div>
    </div>
</section>