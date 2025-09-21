<?php // File: components/tech_stack_animated_icons.php 
?>
<style>
    /* Tech Stack Animated Icons Component Styles */
    :root {
        /* Variabel dari index.php */
        --dark-bg-secondary: #0F084B;
        --primary-accent: #FF00E4;
        --secondary-accent: #00F5D4;
        --text-light: #F0F0F0;
        --border-cyber: rgba(0, 245, 212, 0.3);
        --card-bg-cyber-light: rgba(15, 8, 75, 0.4);
        /* Lebih transparan dari card utama */
    }

    #techStackAnimatedIcons {
        background-color: var(--dark-bg-secondary);
        /* Latar berbeda */
        border-top: 1px solid var(--border-cyber);
    }

    .tech-category-title {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.5rem;
        color: var(--secondary-accent);
        text-align: center;
        margin-bottom: 30px;
        padding-bottom: 10px;
        border-bottom: 2px dashed var(--border-cyber);
        display: inline-block;
        /* Agar border bottom pas */
    }

    .tech-stack-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 25px;
        /* Jarak antar ikon */
    }

    .tech-icon-item {
        background-color: var(--card-bg-cyber-light);
        border: 1px solid var(--border-cyber);
        border-radius: 5px;
        width: 120px;
        /* Ukuran kotak ikon */
        height: 120px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 15px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: default;
        /* Atau pointer jika ada aksi */
        position: relative;
        /* Untuk efek hover */
    }

    .tech-icon-item:hover {
        transform: translateY(-8px) scale(1.05);
        box-shadow: 0 0 20px rgba(var(--primary-accent-rgb), 0.3);
        border-color: var(--primary-accent);
    }

    /* Efek garis neon pada hover */
    .tech-icon-item::after {
        content: '';
        position: absolute;
        bottom: -3px;
        right: -3px;
        width: 0;
        height: 0;
        border-bottom: 3px solid var(--primary-accent);
        border-right: 3px solid var(--primary-accent);
        transition: width 0.2s ease 0.1s, height 0.2s ease;
        /* Delay berbeda */
    }

    .tech-icon-item:hover::after {
        width: calc(100% + 6px);
        /* Lebar + border */
        height: calc(100% + 6px);
    }


    .tech-icon-item i {
        /* Font Awesome Icon */
        font-size: 3rem;
        /* Ukuran ikon */
        color: var(--secondary-accent);
        margin-bottom: 10px;
        transition: color 0.3s ease, text-shadow 0.3s ease;
    }

    .tech-icon-item:hover i {
        color: var(--primary-accent);
        text-shadow: 0 0 10px rgba(var(--primary-accent-rgb), 0.5);
    }

    .tech-icon-item span {
        /* Nama Teknologi */
        font-family: 'Lexend', sans-serif;
        font-size: 0.85rem;
        color: var(--text-light);
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .tech-icon-item:hover span {
        color: var(--secondary-accent);
    }
</style>

<section id="techStackAnimatedIcons" class="section-cyber">
    <div class="container">
        <div class="section-title-cyber" data-aos="fade-up">
            <h2 data-text="ARSENAL TEKNOLOGI">ARSENAL TEKNOLOGI</h2>
            <p class="subtitle-cyber">Menguasai Alat dan Platform Terkini untuk Memberikan Solusi Digital Terbaik.</p>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-auto" data-aos="fade-up" data-aos-delay="100">
                <h4 class="tech-category-title">// Frontend Frameworks</h4>
            </div>
        </div>
        <div class="tech-stack-grid mb-5">
            <div class="tech-icon-item" data-aos="zoom-in" data-aos-delay="150"><i class="fab fa-react"></i><span>React.js</span></div>
            <div class="tech-icon-item" data-aos="zoom-in" data-aos-delay="200"><i class="fab fa-vuejs"></i><span>Vue.js</span></div>
            <div class="tech-icon-item" data-aos="zoom-in" data-aos-delay="250"><i class="fab fa-angular"></i><span>Angular</span></div>
            <div class="tech-icon-item" data-aos="zoom-in" data-aos-delay="300"><i class="fab fa-js-square"></i><span>Next.js</span></div>
            <div class="tech-icon-item" data-aos="zoom-in" data-aos-delay="350"><i class="fab fa-html5"></i><span>HTML5</span></div>
            <div class="tech-icon-item" data-aos="zoom-in" data-aos-delay="400"><i class="fab fa-css3-alt"></i><span>CSS3</span></div>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-auto" data-aos="fade-up" data-aos-delay="100">
                <h4 class="tech-category-title">// Backend & Database</h4>
            </div>
        </div>
        <div class="tech-stack-grid mb-5">
            <div class="tech-icon-item" data-aos="zoom-in" data-aos-delay="150"><i class="fab fa-node-js"></i><span>Node.js</span></div>
            <div class="tech-icon-item" data-aos="zoom-in" data-aos-delay="200"><i class="fab fa-python"></i><span>Python (Django/Flask)</span></div>
            <div class="tech-icon-item" data-aos="zoom-in" data-aos-delay="250"><i class="fab fa-php"></i><span>PHP (Laravel)</span></div>
            <div class="tech-icon-item" data-aos="zoom-in" data-aos-delay="300"><i class="fas fa-database"></i><span>PostgreSQL</span></div>
            <div class="tech-icon-item" data-aos="zoom-in" data-aos-delay="350"><i class="fas fa-leaf"></i><span>MongoDB</span></div>
            <div class="tech-icon-item" data-aos="zoom-in" data-aos-delay="400"><i class="fab fa-docker"></i><span>Docker</span></div>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-auto" data-aos="fade-up" data-aos-delay="100">
                <h4 class="tech-category-title">// Cloud & DevOps</h4>
            </div>
        </div>
        <div class="tech-stack-grid">
            <div class="tech-icon-item" data-aos="zoom-in" data-aos-delay="150"><i class="fab fa-aws"></i><span>AWS</span></div>
            <div class="tech-icon-item" data-aos="zoom-in" data-aos-delay="200"><i class="fab fa-google"></i><span>Google Cloud</span></div>
            <div class="tech-icon-item" data-aos="zoom-in" data-aos-delay="250"><i class="fab fa-microsoft"></i><span>Azure</span></div>
            <div class="tech-icon-item" data-aos="zoom-in" data-aos-delay="300"><i class="fas fa-server"></i><span>Kubernetes</span></div>
            <div class="tech-icon-item" data-aos="zoom-in" data-aos-delay="350"><i class="fab fa-git-alt"></i><span>Git</span></div>
            <div class="tech-icon-item" data-aos="zoom-in" data-aos-delay="400"><i class="fas fa-cogs"></i><span>Jenkins</span></div>
        </div>
    </div>
</section>