<?php // File: components_econ_v2/header_econ_v2.php - Header Vertex Capital Partners 
?>
<style>
    /* Styles untuk Header Vertex Capital Partners */
    .header-vertex-v2 {
        background-color: rgba(var(--bg-light-vertex-rgb), 0.92);
        /* Sedikit transparan */
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
        transition: background-color 0.3s ease, padding 0.3s ease, box-shadow 0.3s ease;
        border-bottom: 1px solid var(--border-light-vertex);
    }

    body.dark-mode .header-vertex-v2 {
        background-color: rgba(var(--card-bg-dark-vertex-rgb), 0.92);
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        border-bottom: 1px solid var(--border-dark-vertex);
    }

    .header-vertex-v2 .navbar-brand-vertex .logo-icon-vertex {
        color: var(--primary-vertex);
        font-size: 1.9em;
        /* Ukuran ikon disesuaikan */
        transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        /* Efek animasi yang lebih dinamis */
    }

    .header-vertex-v2 .navbar-brand-vertex:hover .logo-icon-vertex {
        transform: rotateY(180deg) scale(1.1);
        /* Efek flip dan sedikit membesar */
    }

    body.dark-mode .header-vertex-v2 .navbar-brand-vertex .logo-icon-vertex {
        color: var(--primary-vertex-dark);
    }

    .header-vertex-v2 .navbar-brand-vertex .brand-text-header-vertex {
        color: var(--text-light-vertex);
        transition: color 0.3s ease;
        font-weight: 700;
        font-size: 1.5rem;
        /* Ukuran teks brand */
    }

    body.dark-mode .header-vertex-v2 .navbar-brand-vertex .brand-text-header-vertex {
        color: var(--text-dark-vertex);
    }

    /* Navigasi dengan efek "underline reveal" */
    .header-vertex-v2 .nav-link-vertex {
        color: var(--muted-text-light-vertex) !important;
        font-weight: 500;
        /* Font weight untuk link */
        font-size: 0.95rem;
        /* Ukuran font link */
        padding: 0.55rem 0.95rem !important;
        position: relative;
        transition: color 0.3s ease;
        border-radius: 5px;
        margin: 0 3px;
        /* Jarak antar link sedikit */
    }

    .header-vertex-v2 .nav-link-vertex::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        /* Mulai dari kiri */
        width: 0;
        height: 2.5px;
        /* Garis lebih tebal */
        background-color: var(--secondary-vertex);
        transition: width 0.3s ease-in-out;
        border-radius: 1px;
    }

    .header-vertex-v2 .nav-link-vertex:hover,
    .header-vertex-v2 .nav-link-vertex.active {
        color: var(--primary-vertex) !important;
        /* background-color: rgba(var(--primary-vertex-rgb), 0.05); Tidak perlu background jika ada underline */
    }

    .header-vertex-v2 .nav-link-vertex:hover::after,
    .header-vertex-v2 .nav-link-vertex.active::after {
        width: 100%;
        /* Underline penuh saat aktif/hover */
    }

    body.dark-mode .header-vertex-v2 .nav-link-vertex {
        color: var(--muted-text-dark-vertex) !important;
    }

    body.dark-mode .header-vertex-v2 .nav-link-vertex::after {
        background-color: var(--secondary-vertex-dark);
    }

    body.dark-mode .header-vertex-v2 .nav-link-vertex:hover,
    body.dark-mode .header-vertex-v2 .nav-link-vertex.active {
        color: var(--primary-vertex-dark) !important;
    }

    .header-vertex-v2 .btn-consultation-nav {
        /* Menggunakan class global .btn-vertex-accent */
        padding: 0.5rem 1.1rem;
        font-size: 0.85rem;
        letter-spacing: 0.5px;
        /* Spasi huruf sedikit */
    }

    /* Offcanvas styling */
    .offcanvas-header-vertex {
        border-bottom: 1px solid var(--border-light-vertex);
        background-color: var(--bg-light-vertex);
    }

    .offcanvas-body-vertex {
        background-color: var(--bg-light-vertex);
    }

    body.dark-mode .offcanvas-header-vertex {
        background-color: var(--bg-dark-vertex);
        border-bottom-color: var(--border-dark-vertex);
    }

    body.dark-mode .offcanvas-body-vertex {
        background-color: var(--bg-dark-vertex);
    }

    body.dark-mode .offcanvas-header-vertex .btn-close {
        filter: invert(1) grayscale(100%) brightness(200%);
    }

    .offcanvas-title-vertex {
        color: var(--primary-vertex);
        font-weight: 700;
    }

    body.dark-mode .offcanvas-title-vertex {
        color: var(--primary-vertex-dark);
    }
</style>

<header id="headerVertexCapital" class="header-vertex-v2 sticky-top py-2">
    <nav class="container navbar navbar-expand-lg">
        <a class="navbar-brand-vertex navbar-brand d-flex align-items-center" href="index.php">
            <i class="fas fa-crescent logo-icon-vertex me-2"></i> <span class="font-raleway brand-text-header-vertex">VertexCapital</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarVertex" aria-controls="offcanvasNavbarVertex" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbarVertex" aria-labelledby="offcanvasNavbarVertexLabel">
            <div class="offcanvas-header offcanvas-header-vertex">
                <h5 class="offcanvas-title offcanvas-title-vertex font-raleway" id="offcanvasNavbarVertexLabel">Navigasi Vertex</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body offcanvas-body-vertex">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link nav-link-vertex active" aria-current="page" href="#heroVertex">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-vertex" href="#aboutVertex">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-vertex" href="#servicesVertex">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-vertex" href="#marketInsightsVertex">Wawasan Pasar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-vertex" href="#contactVertex">Kontak</a>
                    </li>
                    <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
                        <a href="#contactVertex" class="btn-vertex-accent btn-consultation-nav">Jadwalkan Konsultasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const headerVertex = document.getElementById('headerVertexCapital');
        const navLinksVertex = document.querySelectorAll('#headerVertexCapital .nav-link-vertex');
        const sectionsVertex = document.querySelectorAll('section[id]');

        function updateActiveNavLinkVertex() {
            if (!headerVertex || sectionsVertex.length === 0) return;

            let currentSectionId = sectionsVertex[0].id;
            if (window.pageYOffset < sectionsVertex[0].offsetTop - headerVertex.offsetHeight - 100) {
                currentSectionId = sectionsVertex[0].id;
            } else {
                currentSectionId = sectionsVertex[0].id;
            }

            const headerHeight = headerVertex.offsetHeight;
            const scrollThreshold = window.innerHeight * 0.35;
            const scrollPosition = window.pageYOffset + headerHeight + scrollThreshold;

            for (let i = sectionsVertex.length - 1; i >= 0; i--) {
                const section = sectionsVertex[i];
                if (section.offsetTop <= scrollPosition) {
                    currentSectionId = section.getAttribute('id');
                    break;
                }
            }

            if ((window.innerHeight + Math.ceil(window.pageYOffset)) >= document.body.offsetHeight - 5 && sectionsVertex.length > 0) { // Toleransi 5px
                const lastSection = sectionsVertex[sectionsVertex.length - 1];
                if (lastSection) currentSectionId = lastSection.id;
            }

            navLinksVertex.forEach(link => {
                link.classList.remove('active');
                const linkHref = link.getAttribute('href');
                if (linkHref && linkHref.substring(1) === currentSectionId) {
                    link.classList.add('active');
                }
            });
        }

        window.addEventListener('scroll', updateActiveNavLinkVertex);
        window.addEventListener('load', updateActiveNavLinkVertex);

        navLinksVertex.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href && href.startsWith('#') && href.length > 1) {
                    e.preventDefault();
                    const targetId = href.substring(1);
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        const headerOffset = headerVertex ? headerVertex.offsetHeight : 70;
                        let elementPosition = targetElement.offsetTop;
                        let offsetPosition = elementPosition - headerOffset;

                        if (targetId !== sectionsVertex[0].id) {
                            offsetPosition -= 15; // Penyesuaian offset
                        }

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: "smooth"
                        });

                        const offcanvasElement = document.getElementById('offcanvasNavbarVertex');
                        if (offcanvasElement && link.closest('.offcanvas')) {
                            const offcanvasInstance = bootstrap.Offcanvas.getInstance(offcanvasElement);
                            if (offcanvasInstance && offcanvasElement.classList.contains('show')) {
                                offcanvasInstance.hide();
                            }
                        }
                    }
                }
            });
        });
    });
</script>