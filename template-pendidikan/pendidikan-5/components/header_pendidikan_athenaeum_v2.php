<?php // File: components/header_pendidikan_athenaeum_v2.php 
?>
<style>
    /* Styles untuk Header Athenaeum */
    #header-athenaeum-component {
        /* Menggunakan variabel global dari index.php */
        background-color: color-mix(in srgb, var(--bg-primary) 80%, transparent);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border-bottom: 1px solid var(--border-color);
        transition: background-color 0.3s ease, border-color 0.3s ease, padding 0.3s ease;
    }

    /* Style untuk logo/brand */
    .navbar-brand-athenaeum .logo-icon-ath {
        color: var(--color-s);
        /* Warna sekunder untuk ikon */
        transition: color 0.3s ease, transform 0.4s ease;
    }

    .navbar-brand-athenaeum:hover .logo-icon-ath {
        transform: scale(1.1) rotate(5deg);
    }

    /* Style untuk panel navigasi desktop */
    .nav-panel-athenaeum {
        background-color: color-mix(in srgb, var(--card-bg) 70%, transparent);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.07);
        border: 1px solid color-mix(in srgb, var(--border-color) 50%, transparent);
        transition: background-color 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    }

    html.dark .nav-panel-athenaeum {
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.22);
    }


    /* Style untuk link navigasi */
    .nav-link-athenaeum {
        color: var(--text-primary) !important;
        /* Penting untuk override default Tailwind jika ada */
        transition: color 0.3s ease, background-color 0.3s ease;
    }

    .nav-link-athenaeum:hover,
    .nav-link-athenaeum.active-nav-link-custom {
        /* .active akan ditambahkan oleh JS */
        color: var(--color-a) !important;
        /* Warna aksen untuk hover/active */
        background-color: color-mix(in srgb, var(--color-a) 10%, transparent);
    }

    .nav-link-athenaeum::after {
        /* Garis bawah untuk hover/active */
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -1px;
        /* Posisi garis bawah */
        left: 50%;
        transform: translateX(-50%);
        background-color: var(--color-a);
        transition: width 0.3s ease-in-out;
    }

    .nav-link-athenaeum:hover::after,
    .nav-link-athenaeum.active-nav-link-custom::after {
        width: 70%;
        /* Lebar garis bawah saat hover/active */
    }

    /* Style untuk tombol toggler mobile */
    .navbar-toggler-athenaeum {
        border: 1px solid var(--color-p);
    }

    .navbar-toggler-athenaeum .navbar-toggler-icon-custom {
        /* Custom icon, bisa SVG atau FontAwesome */
        color: var(--color-p);
        font-size: 1.5rem;
    }

    html.dark .navbar-toggler-athenaeum .navbar-toggler-icon-custom {
        color: var(--color-p-dark);
    }

    html.dark .navbar-toggler-athenaeum {
        border-color: var(--color-p-dark);
    }


    /* Style untuk offcanvas menu mobile */
    .offcanvas-athenaeum {
        background-color: var(--bg-primary);
        color: var(--text-primary);
    }

    .offcanvas-header-athenaeum {
        border-bottom: 1px solid var(--border-color);
    }

    .offcanvas-title-athenaeum {
        color: var(--color-p);
        font-family: 'Cinzel Decorative', serif;
    }

    .btn-close-athenaeum {
        /* Tombol close offcanvas */
        filter: var(--text-primary)==var(--text-primary-dark) ? invert(1): none;
        /* Invert jika background gelap */
    }

    html.dark .btn-close-athenaeum {
        filter: invert(1) brightness(1.5);
    }
</style>

<header id="header-athenaeum-component" class="sticky top-0 left-0 right-0 z-50 py-3 lg:py-4">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
        <a class="navbar-brand-athenaeum font-cinzel text-2xl lg:text-3xl font-bold text-[var(--color-p)]" href="index.php">
            <i class="fas fa-scroll logo-icon-ath mr-2 text-xl lg:text-2xl"></i>
            Athenaeum Digitalis
        </a>

        <nav class="nav-panel-athenaeum hidden lg:flex items-center p-1.5 rounded-lg">
            <ul class="flex space-x-1">
                <li><a href="#hero" class="nav-link-athenaeum px-3 py-1.5 rounded font-eb-garamond font-semibold text-base relative">Beranda</a></li>
                <li><a href="#tentang-kami" class="nav-link-athenaeum px-3 py-1.5 rounded font-eb-garamond font-semibold text-base relative">Tentang</a></li>
                <li><a href="#koleksi-digital" class="nav-link-athenaeum px-3 py-1.5 rounded font-eb-garamond font-semibold text-base relative">Koleksi</a></li>
                <li><a href="#riset-unggulan" class="nav-link-athenaeum px-3 py-1.5 rounded font-eb-garamond font-semibold text-base relative">Riset</a></li>
                <li><a href="#acara-literasi" class="nav-link-athenaeum px-3 py-1.5 rounded font-eb-garamond font-semibold text-base relative">Acara</a></li>
                <li><a href="#kontak" class="nav-link-athenaeum px-3 py-1.5 rounded font-eb-garamond font-semibold text-base relative">Kontak</a></li>
            </ul>
        </nav>

        <button class="navbar-toggler-athenaeum lg:hidden p-2 rounded-md" type="button" id="mobileMenuButton" aria-label="Toggle navigation">
            <i class="fas fa-bars navbar-toggler-icon-custom"></i>
        </button>
    </div>

    <div id="mobileMenuOffcanvas" class="offcanvas-athenaeum fixed top-0 right-0 h-full w-72 sm:w-80 bg-[var(--bg-primary)] shadow-xl transform translate-x-full transition-transform duration-300 ease-in-out z-[1040] lg:hidden">
        <div class="offcanvas-header-athenaeum flex justify-between items-center p-4">
            <h5 class="offcanvas-title-athenaeum text-xl font-bold">Menu Navigasi</h5>
            <button type="button" class="btn-close-athenaeum text-2xl" id="closeMobileMenuButton" aria-label="Close">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="p-4">
            <ul class="space-y-2">
                <li><a href="#hero" class="nav-link-athenaeum block px-4 py-2.5 rounded text-lg font-eb-garamond font-semibold">Beranda</a></li>
                <li><a href="#tentang-kami" class="nav-link-athenaeum block px-4 py-2.5 rounded text-lg font-eb-garamond font-semibold">Tentang Kami</a></li>
                <li><a href="#koleksi-digital" class="nav-link-athenaeum block px-4 py-2.5 rounded text-lg font-eb-garamond font-semibold">Koleksi Digital</a></li>
                <li><a href="#ruang-studi" class="nav-link-athenaeum block px-4 py-2.5 rounded text-lg font-eb-garamond font-semibold">Ruang Studi</a></li>
                <li><a href="#riset-unggulan" class="nav-link-athenaeum block px-4 py-2.5 rounded text-lg font-eb-garamond font-semibold">Riset & Publikasi</a></li>
                <li><a href="#acara-literasi" class="nav-link-athenaeum block px-4 py-2.5 rounded text-lg font-eb-garamond font-semibold">Acara Literasi</a></li>
                <li><a href="#kontak" class="nav-link-athenaeum block px-4 py-2.5 rounded text-lg font-eb-garamond font-semibold">Kontak</a></li>
            </ul>
        </div>
    </div>
    <div id="mobileMenuOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-[1035] hidden lg:hidden transition-opacity duration-300 ease-in-out"></div>
</header>

<script>
    // Komentar JavaScript: Script khusus untuk Header Athenaeum
    document.addEventListener('DOMContentLoaded', function() {
        const headerElement = document.getElementById('header-athenaeum-component');
        const navLinks = document.querySelectorAll('#header-athenaeum-component .nav-link-athenaeum');
        const sections = document.querySelectorAll('section[id]'); // Mengambil semua section dengan ID

        // Logika untuk Mobile Menu (Offcanvas)
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        const closeMobileMenuButton = document.getElementById('closeMobileMenuButton');
        const mobileMenuOffcanvas = document.getElementById('mobileMenuOffcanvas');
        const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');

        function openMobileMenu() {
            if (mobileMenuOffcanvas && mobileMenuOverlay) {
                mobileMenuOffcanvas.classList.remove('translate-x-full');
                mobileMenuOffcanvas.classList.add('translate-x-0');
                mobileMenuOverlay.classList.remove('hidden');
                mobileMenuOverlay.classList.add('opacity-100');
                document.body.style.overflow = 'hidden'; // Mencegah scroll body saat menu terbuka
            }
        }

        function closeMobileMenu() {
            if (mobileMenuOffcanvas && mobileMenuOverlay) {
                mobileMenuOffcanvas.classList.add('translate-x-full');
                mobileMenuOffcanvas.classList.remove('translate-x-0');
                mobileMenuOverlay.classList.add('hidden');
                mobileMenuOverlay.classList.remove('opacity-100');
                document.body.style.overflow = ''; // Mengembalikan scroll body
            }
        }

        if (mobileMenuButton) {
            mobileMenuButton.addEventListener('click', openMobileMenu);
        }
        if (closeMobileMenuButton) {
            closeMobileMenuButton.addEventListener('click', closeMobileMenu);
        }
        if (mobileMenuOverlay) {
            mobileMenuOverlay.addEventListener('click', closeMobileMenu);
        }

        // Menutup offcanvas saat link di dalamnya diklik
        const offcanvasNavLinks = document.querySelectorAll('#mobileMenuOffcanvas .nav-link-athenaeum');
        offcanvasNavLinks.forEach(link => {
            link.addEventListener('click', closeMobileMenu);
        });


        // Fungsi untuk memperbarui link aktif saat scroll
        function updateActiveNavLink() {
            if (!headerElement) return;
            let currentSectionId = 'hero'; // Default ke hero jika tidak ada section lain yang aktif
            const headerHeight = headerElement.offsetHeight;
            // Penyesuaian offset, bisa ditambah jika header fixed dan ada elemen lain di atas section
            const scrollPosition = window.pageYOffset + headerHeight + 50;

            sections.forEach(section => {
                if (section.offsetTop <= scrollPosition && (section.offsetTop + section.offsetHeight) > scrollPosition) {
                    currentSectionId = section.getAttribute('id');
                }
            });

            // Jika di paling bawah halaman dan section terakhir tidak mengisi viewport penuh
            if ((window.innerHeight + window.pageYOffset) >= document.body.offsetHeight - 2) { // Toleransi 2px
                const lastSection = sections[sections.length - 1];
                if (lastSection) currentSectionId = lastSection.id;
            }


            navLinks.forEach(link => {
                link.classList.remove('active-nav-link-custom');
                // Cek href, hilangkan '#' dan bandingkan dengan ID section
                if (link.getAttribute('href') && link.getAttribute('href').substring(1) === currentSectionId) {
                    link.classList.add('active-nav-link-custom');
                }
            });
        }

        window.addEventListener('scroll', updateActiveNavLink);
        window.addEventListener('load', updateActiveNavLink); // Panggil juga saat load untuk inisialisasi

        // Smooth scroll untuk semua link navigasi di header
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href && href.startsWith('#') && href.length > 1) {
                    e.preventDefault();
                    const targetId = href.substring(1);
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        const headerOffset = headerElement ? headerElement.offsetHeight : 70; // Default offset 70 jika header tidak ditemukan
                        const elementPosition = targetElement.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: "smooth"
                        });
                    }
                }
            });
        });

        // Tambahan: sedikit shadow pada header saat di-scroll (opsional)
        // window.addEventListener('scroll', function() {
        //     if (window.scrollY > 30) {
        //         headerElement.classList.add('shadow-lg');
        //     } else {
        //         headerElement.classList.remove('shadow-lg');
        //     }
        // });
    });
</script>