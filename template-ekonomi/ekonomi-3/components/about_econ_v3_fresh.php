<?php // File: components_econ_v3_fresh/about_econ_v3_fresh.php - Tentang Kami Aetherium Finance (Fresh) 
?>
<style>
    /* Styles untuk Tentang Kami Section Aetherium Finance */
    #aboutAether {
        background-color: var(--card-bg-light-aether);
        border-bottom: 1px solid var(--border-light-aether);
        position: relative;
        padding-top: 90px;
        padding-bottom: 90px;
    }

    body.dark-mode #aboutAether {
        background-color: var(--card-bg-dark-aether);
        border-bottom: 1px solid var(--border-dark-aether);
    }

    #aboutAether .decorative-lines-bg-v3 {
        /* Nama class unik */
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: 0;
        pointer-events: none;
    }

    #aboutAether .decorative-lines-bg-v3 .line-about-v3 {
        /* Nama class unik */
        position: absolute;
        background-color: rgba(var(--primary-aether-rgb), 0.05);
        transition: background-color 0.3s ease;
        opacity: 0;
    }

    body.dark-mode #aboutAether .decorative-lines-bg-v3 .line-about-v3 {
        background-color: rgba(var(--primary-aether-dark-rgb), 0.04);
    }

    .about-content-wrapper-aether {
        position: relative;
        z-index: 1;
    }

    .about-image-aether-container {
        position: relative;
        padding: 7px;
        background-color: var(--bg-light-aether);
        border-radius: 10px;
        box-shadow: 0 8px 25px rgba(var(--primary-aether-rgb), 0.06);
        display: inline-block;
        max-width: 100%;
        transition: transform 0.35s ease, box-shadow 0.35s ease;
    }

    .about-image-aether-container:hover {
        transform: translateY(-4px) scale(1.005);
        box-shadow: 0 10px 30px rgba(var(--primary-aether-rgb), 0.08);
    }

    body.dark-mode .about-image-aether-container {
        background-color: var(--bg-dark-aether);
        box-shadow: 0 8px 25px rgba(var(--primary-aether-dark-rgb), 0.08);
    }

    body.dark-mode .about-image-aether-container:hover {
        box-shadow: 0 10px 30px rgba(var(--primary-aether-dark-rgb), 0.1);
    }

    .about-image-aether {
        border-radius: 7px;
        display: block;
        max-width: 100%;
        height: auto;
        filter: saturate(1.03) contrast(1.01);
    }

    .about-text-aether h3.about-section-subtitle {
        font-family: 'Source Code Pro', monospace;
        font-size: 0.9rem;
        color: var(--secondary-aether);
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 12px;
        font-weight: 600;
    }

    body.dark-mode .about-text-aether h3.about-section-subtitle {
        color: var(--secondary-aether-dark);
    }

    .about-text-aether h2.about-main-title-aether {
        color: var(--primary-aether);
        font-size: clamp(1.9rem, 4.5vw, 2.5rem);
        font-weight: 700;
        margin-bottom: 20px;
        line-height: 1.22;
        letter-spacing: -0.4px;
    }

    body.dark-mode .about-text-aether h2.about-main-title-aether {
        color: var(--primary-aether-dark);
    }

    .about-text-aether h2.about-main-title-aether .highlight-accent {
        color: var(--accent-aether);
    }

    body.dark-mode .about-text-aether h2.about-main-title-aether .highlight-accent {
        color: var(--accent-aether-dark);
    }

    .about-text-aether p.about-intro-text {
        font-size: 1.02rem;
        font-weight: 400;
        color: var(--muted-text-light-aether);
        margin-bottom: 20px;
        line-height: 1.75;
    }

    body.dark-mode .about-text-aether p.about-intro-text {
        color: var(--muted-text-dark-aether);
    }

    .about-text-aether p {
        margin-bottom: 0.85rem;
        font-size: 0.92rem;
        line-height: 1.7;
    }

    .aether-values-grid {
        margin-top: 30px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
        gap: 18px;
    }

    .value-item-aether {
        background-color: rgba(var(--card-bg-light-aether-rgb), 0.5);
        backdrop-filter: blur(3px);
        padding: 20px;
        border-radius: 8px;
        border-left: 3px solid var(--accent-aether);
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-left-color 0.3s ease;
        box-shadow: 0 3px 10px rgba(var(--primary-aether-rgb), 0.03);
    }

    body.dark-mode .value-item-aether {
        background-color: rgba(var(--card-bg-dark-aether-rgb), 0.6);
        border-left-color: var(--accent-aether-dark);
        box-shadow: 0 3px 10px rgba(var(--primary-aether-dark-rgb), 0.05);
    }

    .value-item-aether:hover {
        transform: translateY(-5px) scale(1.005);
        box-shadow: 0 8px 22px rgba(var(--accent-aether-rgb), 0.1);
        border-left-color: var(--secondary-aether);
    }

    body.dark-mode .value-item-aether:hover {
        box-shadow: 0 8px 22px rgba(var(--accent-aether-dark-rgb), 0.15);
        border-left-color: var(--secondary-aether-dark);
    }

    .value-item-aether .value-icon-aether {
        font-size: 1.7rem;
        color: var(--accent-aether);
        margin-bottom: 8px;
        display: inline-block;
    }

    body.dark-mode .value-item-aether .value-icon-aether {
        color: var(--accent-aether-dark);
    }

    .value-item-aether h5.value-title-aether {
        font-size: 1.1rem;
        font-weight: 600;
        font-family: 'Source Code Pro', monospace;
        margin-bottom: 5px;
        color: var(--primary-aether);
    }

    body.dark-mode .value-item-aether h5.value-title-aether {
        color: var(--primary-aether-dark);
    }

    .value-item-aether p.value-desc-aether {
        font-size: 0.82rem;
        color: var(--muted-text-light-aether);
        margin-bottom: 0;
        line-height: 1.5;
    }

    body.dark-mode .value-item-aether p.value-desc-aether {
        color: var(--muted-text-dark-aether);
    }
</style>

<section id="aboutAether" class="about-aether-v3 section-aether">
    <div class="decorative-lines-bg-v3">
        <?php for ($i = 0; $i < 8; $i++) {
            echo "<div class='line line-about-v3-$i'></div>";
        } ?>
    </div>
    <div class="container about-content-wrapper-aether">
        <div class="section-title-aether" data-aos="fade-up">
            <h2>[ Visi & Misi Aetherium ]</h2>
            <p class="subtitle-aether">Merintis Inovasi Finansial Digital untuk Ekosistem Keuangan Global yang Terdesentralisasi dan Inklusif.</p>
        </div>

        <div class="row align-items-center gy-5 gx-lg-5">
            <div class="col-lg-6 text-center text-lg-start" data-aos="fade-right" data-aos-duration="900">
                <div class="about-image-aether-container">
                    <img src="https://placehold.co/530x440/161B22/00F5A0?text="
                        alt="[Gambar Tim Aetherium Finance sedang berdiskusi konsep FinTech dan inovasi digital]"
                        class="img-fluid about-image-aether">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="900" data-aos-delay="100">
                <div class="about-text-aether">
                    <h3 class="about-section-subtitle">// SIAPA KAMI</h3>
                    <h2 class="about-main-title-aether">Membangun Jembatan Menuju <span class="highlight-accent">Era Baru</span> Keuangan.</h2>
                    <p class="about-intro-text">
                        Aetherium Finance adalah pelopor dalam pengembangan solusi teknologi finansial (FinTech) yang inovatif, aman, dan terdesentralisasi. Kami percaya pada kekuatan teknologi untuk mentransformasi lanskap keuangan global.
                    </p>
                    <p>
                        Didirikan oleh para ahli di bidang blockchain, kecerdasan buatan, dan keamanan siber, Aetherium bertujuan untuk menciptakan ekosistem finansial yang lebih transparan, efisien, dan dapat diakses oleh semua orang. Kami berkomitmen untuk riset berkelanjutan dan pengembangan produk yang relevan dengan kebutuhan pasar masa depan.
                    </p>
                </div>
            </div>
        </div>

        <div class="aether-values-grid mt-5 pt-lg-4">
            <div class="value-item-aether" data-aos="fade-up" data-aos-delay="150">
                <div class="value-icon-aether"><i class="fas fa-rocket"></i></div>
                <h5 class="value-title-aether">Inovasi Radikal</h5>
                <p class="value-desc-aether">Mendorong batas kemungkinan dengan solusi teknologi finansial yang disruptif dan visioner.</p>
            </div>
            <div class="value-item-aether" data-aos="fade-up" data-aos-delay="250">
                <div class="value-icon-aether"><i class="fas fa-user-shield"></i></div>
                <h5 class="value-title-aether">Keamanan Terdepan</h5>
                <p class="value-desc-aether">Menjamin integritas dan keamanan data serta aset digital dengan protokol enkripsi dan keamanan siber termutakhir.</p>
            </div>
            <div class="value-item-aether" data-aos="fade-up" data-aos-delay="350">
                <div class="value-icon-aether"><i class="fas fa-globe"></i></div>
                <h5 class="value-title-aether">Inklusivitas Global</h5>
                <p class="value-desc-aether">Menciptakan akses yang adil dan merata ke layanan keuangan canggih untuk semua lapisan masyarakat di seluruh dunia.</p>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const decorativeLinesContainerAboutV3 = document.querySelector('#aboutAether .decorative-lines-bg-v3');
        if (decorativeLinesContainerAboutV3 && typeof anime !== 'undefined') {
            const lines = decorativeLinesContainerAboutV3.querySelectorAll('.line-about-v3'); // Gunakan class unik
            lines.forEach((line, index) => {
                line.style.top = `${Math.random() * 100}%`;
                line.style.left = `${Math.random() * 100}%`;
                const isHorizontal = Math.random() > 0.4;
                if (isHorizontal) {
                    line.style.width = `${Math.random() * 160 + 60}px`;
                    line.style.height = `${Math.random() * 1.5 + 0.6}px`;
                } else {
                    line.style.width = `${Math.random() * 1.5 + 0.6}px`;
                    line.style.height = `${Math.random() * 160 + 60}px`;
                }
                line.style.transform = `rotate(${Math.random() * 100 - 50}deg)`;
                line.style.opacity = '0';

                anime({
                    targets: line,
                    opacity: [0, 0.8, 0], // Opacity disesuaikan
                    translateX: () => anime.random(-60, 60),
                    translateY: () => anime.random(-60, 60),
                    scaleX: isHorizontal ? [0.3, 1, 0.3] : 1,
                    scaleY: !isHorizontal ? [0.3, 1, 0.3] : 1,
                    duration: () => anime.random(5500, 11000),
                    loop: true,
                    direction: 'alternate',
                    easing: 'easeInOutSine',
                    delay: index * 230
                });
            });
        }

        const aboutMainTitleAetherV3 = document.querySelector('#aboutAether .about-main-title-aether');
        if (aboutMainTitleAetherV3 && typeof anime !== 'undefined') {
            const titleObserverV3 = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const textWrapper = entry.target;
                        if (!textWrapper.classList.contains('anime-activated-title-aether-v3')) {
                            textWrapper.classList.add('anime-activated-title-aether-v3');
                            textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w|\S)/g, "<span class='char-about-v3'>$&</span>");

                            anime.timeline({
                                    loop: false
                                })
                                .add({
                                    targets: textWrapper.querySelectorAll('.char-about-v3'),
                                    opacity: [0, 1],
                                    translateY: ["1.15em", 0],
                                    translateX: ["0.5em", 0],
                                    translateZ: 0,
                                    rotateZ: [190, 0],
                                    duration: 720,
                                    easing: "easeOutExpo",
                                    delay: anime.stagger(30, {
                                        start: (parseInt(textWrapper.closest('[data-aos-delay]')?.dataset.aosDelay || 0) + 160)
                                    })
                                });
                            titleObserverV3.unobserve(entry.target);
                        }
                    }
                });
            }, {
                threshold: 0.35
            });

            aboutMainTitleAetherV3.style.opacity = 0;
            titleObserverV3.observe(aboutMainTitleAetherV3);
        }
    });
</script>