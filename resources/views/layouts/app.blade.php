<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'EduGold Global School') | Keunggulan dalam Pendidikan</title>
    <meta name="description" content="EduGold Global School menyediakan pendidikan kelas dunia dengan fasilitas premium dan kurikulum modern.">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/smk.png') }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        :root {
            --nav-bg: #ffffff;
            --nav-text: #1a1a1a;
            --nav-accent: var(--secondary-color);
        }


        .navbar {
            position: sticky;
            top: 0;
            left: 0;
            width: 100%;
            padding: 25px 0;
            z-index: 1000;
            background: var(--nav-bg);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.03);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            transition: all 0.4s ease;
        }

        .navbar.scrolled {
            padding: 15px 0;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }
        
        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--primary-color);
            letter-spacing: 2px;
            text-transform: uppercase;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo-icon {
            background: linear-gradient(135deg, var(--primary-color), #004080);
            color: var(--secondary-color);
            width: 45px;
            height: 45px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 51, 102, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .nav-links {
            display: flex;
            gap: 35px;
        }
        
        .nav-links a {
            color: var(--nav-text);
            font-weight: 500;
            font-size: 0.85rem;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            position: relative;
            padding: 5px 0;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--secondary-color);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-links a:hover::after, .nav-links a.active::after {
            width: 100%;
        }

        .nav-links a:hover, .nav-links a.active {
            color: var(--primary-color);
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .search-btn {
            background: var(--primary-color);
            color: var(--secondary-color);
            width: 42px;
            height: 42px;
            border-radius: 50%;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 51, 102, 0.15);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .search-btn:hover {
            transform: scale(1.1);
            background: var(--secondary-color);
            color: var(--primary-color);
        }
        
        footer {
            background-color: var(--primary-color);
            color: var(--white);
            padding: 80px 0 20px;
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 50px;
        }
        
        .footer-logo {
            font-size: 2rem;
            margin-bottom: 20px;
            color: var(--secondary-color);
        }
        
        .footer-links h4 {
            color: var(--white);
            margin-bottom: 25px;
            font-size: 1.25rem;
        }
        
        .footer-links ul li {
            margin-bottom: 12px;
        }
        
        .footer-links ul li a:hover {
            color: var(--secondary-color);
            padding-left: 5px;
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            color: #ccc;
        }
        /* Footer Styles Redesign */
        footer {
            background-color: var(--primary-color);
            color: var(--white);
            padding: 100px 0 30px;
            position: relative;
            overflow: hidden;
        }

        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, transparent, var(--secondary-color), transparent);
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1.5fr;
            gap: 60px;
            margin-bottom: 80px;
        }

        .footer-about .footer-logo {
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .footer-about .logo-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--secondary-color), #C09E30);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            font-size: 1.5rem;
        }

        .footer-about .logo-text {
            font-size: 1.6rem;
            font-weight: 800;
            letter-spacing: 2px;
            color: var(--white);
            text-transform: uppercase;
        }

        .footer-about p {
            opacity: 0.8;
            line-height: 1.8;
            margin-bottom: 30px;
            font-size: 0.95rem;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.05);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white) !important;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .social-links a:hover {
            background: var(--secondary-color);
            color: var(--primary-color) !important;
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(212, 175, 55, 0.3);
        }

        .footer-links h4, .footer-contact h4 {
            color: var(--white);
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 30px;
            position: relative;
            padding-bottom: 12px;
        }

        .footer-links h4::after, .footer-contact h4::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 30px;
            height: 2px;
            background: var(--secondary-color);
        }

        .footer-links ul li {
            margin-bottom: 15px;
            list-style: none;
        }

        .footer-links ul li a {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.95rem;
            transition: all 0.3s ease;
            display: block;
        }

        .footer-links ul li a:hover {
            color: var(--secondary-color);
            transform: translateX(8px);
        }

        .footer-contact ul li {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 25px;
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.95rem;
            list-style: none;
        }

        .footer-contact ul li i {
            color: var(--secondary-color);
            font-size: 1.3rem;
            margin-top: 3px;
        }

        .footer-bottom {
            padding-top: 40px;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            text-align: center;
        }

        .footer-bottom p {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.5);
            letter-spacing: 1px;
        }

        @media (max-width: 992px) {
            .footer-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 576px) {
            .footer-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar" id="navbar">
        <div class="container">
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('images/smk.png') }}" alt="SMK Assalaam Logo" style="height: 50px; width: auto;">
                SMK ASSALAAM BANDUNG 
            </a>
            <div class="nav-links">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Tentang Kami</a>
                <a href="{{ route('academic') }}" class="{{ request()->routeIs('academic') ? 'active' : '' }}">Akademik</a>
                <a href="{{ route('facilities') }}" class="{{ request()->routeIs('facilities') ? 'active' : '' }}">Fasilitas</a>
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Kontak</a>
            </div>
            <div class="header-actions">
                <div class="search-btn" id="openSearch">
                    <i class='bx bx-search'></i>
                </div>
            </div>
        </div>
    </nav>

    <!-- Search Overlay -->
    <div id="searchOverlay" class="search-overlay">
        <div class="search-container">
            <div class="search-close" id="closeSearch">
                <i class='bx bx-x'></i>
            </div>
            <div class="search-box">
                <h2 style="color: var(--white); margin-bottom: 30px; text-align: center;">Cari di SMK Assalaam</h2>
                <form action="{{ route('search') }}" method="GET">
                    <div style="position: relative;">
                        <input type="text" name="query" placeholder="Ketik kata kunci..." class="search-input" autofocus>
                        <button type="submit" class="search-submit">
                            <i class='bx bx-search'></i>
                        </button>
                    </div>
                </form>
                <div style="margin-top: 30px; display: flex; gap: 15px; flex-wrap: wrap; justify-content: center;">
                    <span style="color: rgba(255,255,255,0.6); font-size: 0.9rem;">Populer:</span>
                    <a href="{{ route('search', ['query' => 'RPL']) }}" style="color: var(--secondary-color); font-size: 0.9rem; text-decoration: underline;">RPL</a>
                    <a href="{{ route('search', ['query' => 'Jurusan']) }}" style="color: var(--secondary-color); font-size: 0.9rem; text-decoration: underline;">Jurusan</a>
                    <a href="{{ route('search', ['query' => 'Kontak']) }}" style="color: var(--secondary-color); font-size: 0.9rem; text-decoration: underline;">Kontak</a>
                </div>
            </div>
        </div>
    </div>

    <style>
        .search-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 51, 102, 0.98);
            backdrop-filter: blur(15px);
            z-index: 2000;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .search-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .search-container {
            width: 100%;
            max-width: 800px;
            padding: 40px;
            position: relative;
            transform: translateY(30px);
            transition: all 0.5s ease;
        }

        .search-overlay.active .search-container {
            transform: translateY(0);
        }

        .search-close {
            position: absolute;
            top: -60px;
            right: 40px;
            color: var(--white);
            font-size: 3rem;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .search-close:hover {
            transform: rotate(90deg) scale(1.1);
            color: var(--secondary-color);
        }

        .search-input {
            width: 100%;
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid rgba(255, 255, 255, 0.1);
            padding: 25px 80px 25px 35px;
            border-radius: 20px;
            color: var(--white);
            font-size: 1.5rem;
            outline: none;
            transition: all 0.3s ease;
        }

        .search-input:focus {
            border-color: var(--secondary-color);
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 30px rgba(212, 175, 55, 0.2);
        }

        .search-submit {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: var(--secondary-color);
            color: var(--primary-color);
            width: 55px;
            height: 55px;
            border-radius: 15px;
            border: none;
            cursor: pointer;
            font-size: 1.5rem;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .search-submit:hover {
            background: var(--white);
            transform: translateY(-50%) scale(1.05);
        }
    </style>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <div class="footer-logo">
                        <img src="{{ asset('images/smk.png') }}" alt="SMK Assalaam Logo" style="height: 50px; width: auto;">
                        <span class="logo-text">Assalaam</span>
                    </div>
                    <p>SMK Assalaam berkomitmen untuk mencetak generasi unggul yang siap menghadapi tantangan global melalui pendidikan teknologi dan karakter yang kuat.</p>
                    <div class="social-links">
                        <a href="https://www.instagram.com/smkassalaam/"><i class='bx bxl-instagram'></i></a>
                        <a href="https://www.facebook.com/smkassalaam/"><i class='bx bxl-facebook'></i></a>
                        <a href="https://www.tiktok.com/@smkassalaambandung"><i class='bx bxl-tiktok'></i></a>
                        <a href="https://www.youtube.com/@smkassalaambandung4011"><i class='bx bxl-youtube'></i></a>
                    </div>
                </div>
                <div class="footer-links">
                    <h4>Tautan Cepat</h4>
                    <ul>
                        <li><a href="{{ route('home') }}">Beranda</a></li>
                        <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                        <li><a href="{{ route('academic') }}">Program Akademik</a></li>
                        <li><a href="{{ route('facilities') }}">Fasilitas</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Jurusan</h4>
                    <ul>
                        <li><a href="{{route('rpl')}}">RPL (Rekayasa Peringkat Lunak)</a></li>
                        <li><a href="{{route('tkr')}}">TKR (Teknik Kendaraan Ringan)</a></li>
                        <li><a href="{{route('tbsm')}}">TBSM (Teknik Bisnis Sepeda Motor)</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h4>Hubungi Kami</h4>
                    <ul>
                        <li><i class='bx bxs-map'></i> <span>Jl. Terusan Cibaduyut No.123, Bandung, Jawa Barat</span></li>
                        <li><i class='bx bxs-phone-call'></i> <span>+62 123 4567 890</span></li>
                        <li><i class='bx bxs-envelope'></i> <span>info@smkassalaam.sch.id</span></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} SMK Assalaam Bandung. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>

    <script>
        // Navbar scroll effect
        window.onscroll = function() {
            var navbar = document.getElementById('navbar');
            if (window.pageYOffset > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        };

        // Search Overlay Logic
        const openSearch = document.getElementById('openSearch');
        const closeSearch = document.getElementById('closeSearch');
        const searchOverlay = document.getElementById('searchOverlay');
        const searchInput = document.querySelector('.search-input');

        openSearch.addEventListener('click', () => {
            searchOverlay.classList.add('active');
            setTimeout(() => searchInput.focus(), 400);
            document.body.style.overflow = 'hidden';
        });

        closeSearch.addEventListener('click', () => {
            searchOverlay.classList.remove('active');
            document.body.style.overflow = 'auto';
        });

        // Close on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && searchOverlay.classList.contains('active')) {
                searchOverlay.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        });

        // Scroll Reveal and Counter Animations
        document.addEventListener('DOMContentLoaded', () => {
            // 1. Scroll Reveal Logic
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

            document.querySelectorAll('.fade-in').forEach(el => revealObserver.observe(el));

            // 2. Animated Counter Logic
            const animateCounter = (element, target) => {
                let current = 0;
                const duration = 1500;
                const startTime = performance.now();

                const updateCounter = (currentTime) => {
                    const elapsed = currentTime - startTime;
                    const progress = Math.min(elapsed / duration, 1);
                    const val = Math.floor(progress * target);
                    element.innerText = val.toLocaleString('id-ID');
                    if (progress < 1) {
                        requestAnimationFrame(updateCounter);
                    } else {
                        element.innerText = target.toLocaleString('id-ID');
                    }
                };
                requestAnimationFrame(updateCounter);
            };

            const counterObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const targetValue = parseInt(entry.target.getAttribute('data-target'));
                        if (targetValue) animateCounter(entry.target, targetValue);
                        counterObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 }); 

            document.querySelectorAll('.counter').forEach(counter => counterObserver.observe(counter));
        });
    </script>
</body>
</html>
