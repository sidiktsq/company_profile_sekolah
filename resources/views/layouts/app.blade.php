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
        .navbar {
            position: sticky;
            top: 0;
            left: 0;
            width: 100%;
            background: #ffffff;
            border-bottom: 4px solid var(--neo-dark);
            padding: 15px 0;
            z-index: 1000;
            transition: padding 0.3s ease;
        }
        
        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .logo-box {
            display: flex;
            align-items: center;
            gap: 12px;
            font-family: 'Bricolage Grotesque', sans-serif;
            font-weight: 800;
            font-size: 1.25rem;
            color: var(--neo-dark);
            text-transform: uppercase;
            letter-spacing: -0.5px;
        }
        
        .logo-img {
            height: 44px;
            width: auto;
            border: 2px solid var(--neo-dark);
            padding: 2px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 2px 2px 0px var(--neo-dark);
        }

        .nav-links {
            display: flex;
            gap: 10px;
            align-items: center;
        }
        
        .nav-link {
            padding: 8px 16px;
            font-weight: 700;
            font-size: 0.85rem;
            text-transform: uppercase;
            border: 2px solid transparent;
            border-radius: 6px;
            transition: all 0.15s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            display: inline-block;
        }
        
        .nav-link:hover {
            border-color: var(--neo-dark);
            background-color: var(--neo-yellow);
            box-shadow: 3px 3px 0px var(--neo-dark);
            transform: translate(-2px, -2px);
        }
        
        .nav-link.active {
            border-color: var(--neo-dark);
            background-color: var(--neo-yellow);
            box-shadow: 3px 3px 0px var(--neo-dark);
            transform: translate(-2px, -2px);
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        /* Search Overlay Style */
        .search-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(26, 26, 26, 0.96);
            backdrop-filter: blur(6px);
            z-index: 2000;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .search-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .search-container {
            width: 90%;
            max-width: 650px;
            transform: scale(0.9) translateY(20px);
            transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .search-overlay.active .search-container {
            transform: scale(1) translateY(0);
        }

        .search-close-btn {
            position: absolute;
            top: -25px;
            right: -25px;
            width: 50px;
            height: 50px;
            background-color: var(--neo-pink);
            border: 3px solid var(--neo-dark);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            cursor: pointer;
            box-shadow: 3px 3px 0px var(--neo-dark);
            transition: all 0.15s ease-out;
        }

        .search-close-btn:hover {
            transform: translate(-2px, -2px);
            box-shadow: 5px 5px 0px var(--neo-dark);
        }

        .search-close-btn:active {
            transform: translate(2px, 2px);
            box-shadow: 1px 1px 0px var(--neo-dark);
        }

        /* Footer styling */
        footer {
            background-color: var(--neo-yellow);
            border-top: 4px solid var(--neo-dark);
            padding: 80px 0 30px;
            position: relative;
            overflow: hidden;
        }

        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 10px;
            background-image: repeating-linear-gradient(45deg, var(--neo-dark), var(--neo-dark) 10px, transparent 10px, transparent 20px);
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1.5fr;
            gap: 40px;
            margin-bottom: 50px;
        }

        .footer-about p {
            font-size: 0.95rem;
            font-weight: 500;
            line-height: 1.6;
            margin-top: 20px;
            margin-bottom: 25px;
            color: var(--neo-dark);
        }

        .social-links {
            display: flex;
            gap: 12px;
        }

        .social-link {
            width: 44px;
            height: 44px;
            border: 3px solid var(--neo-dark);
            border-radius: 50%;
            background-color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            color: var(--neo-dark);
            box-shadow: 3px 3px 0px var(--neo-dark);
            transition: all 0.15s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .social-link:hover {
            transform: translate(-3px, -3px);
            box-shadow: 6px 6px 0px var(--neo-dark);
            background-color: var(--neo-cyan);
        }

        .social-link:active {
            transform: translate(2px, 2px);
            box-shadow: 1px 1px 0px var(--neo-dark);
        }

        .footer-links h4, .footer-contact h4 {
            font-family: 'Bricolage Grotesque', sans-serif;
            font-size: 1.15rem;
            font-weight: 800;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
            background: #ffffff;
            padding: 4px 10px;
            border: 2px solid var(--neo-dark);
            border-radius: 6px;
            box-shadow: 2px 2px 0px var(--neo-dark);
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
        }

        .footer-links ul li {
            margin-bottom: 12px;
        }

        .footer-links ul li a {
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--neo-dark);
            display: inline-block;
            transition: all 0.15s ease-out;
        }

        .footer-links ul li a:hover {
            transform: translateX(5px);
            text-decoration: underline;
        }

        .footer-contact ul {
            list-style: none;
            padding: 0;
        }

        .footer-contact ul li {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 15px;
            font-size: 0.9rem;
            font-weight: 500;
            color: var(--neo-dark);
        }

        .footer-contact ul li i {
            font-size: 1.2rem;
            margin-top: 2px;
            padding: 4px;
            background: #ffffff;
            border: 2px solid var(--neo-dark);
            border-radius: 6px;
        }

        .footer-bottom {
            padding-top: 30px;
            border-top: 3px solid var(--neo-dark);
            text-align: center;
        }

        .footer-bottom p {
            font-size: 0.9rem;
            font-weight: 700;
            color: var(--neo-dark);
            letter-spacing: 0.5px;
        }

        @media (max-width: 992px) {
            .footer-grid {
                grid-template-columns: 1fr 1fr;
                gap: 30px;
            }
        }

        @media (max-width: 576px) {
            .footer-grid {
                grid-template-columns: 1fr;
            }
            .navbar .container {
                flex-direction: column;
                gap: 15px;
            }
            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar" id="navbar">
        <div class="container">
            <a href="{{ route('home') }}" class="logo-box">
                <img src="{{ asset('images/smk.png') }}" alt="SMK Assalaam Logo" class="logo-img">
                <span>SMK Assalaam Bandung</span>
            </a>
            <div class="nav-links">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">Profil</a>
                <a href="{{ route('academic') }}" class="nav-link {{ request()->routeIs('academic') ? 'active' : '' }}">Kurikulum</a>
                <a href="{{ route('facilities') }}" class="nav-link {{ request()->routeIs('facilities') ? 'active' : '' }}">Fasilitas</a>
                <a href="{{ route('kesiswaan') }}" class="nav-link {{ request()->routeIs('kesiswaan') ? 'active' : '' }}">Kesiswaan</a>
                <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Kontak</a>
            </div>
            <div class="header-actions">
                <button class="neo-btn neo-btn-cyan" id="openSearch" style="padding: 10px; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center;">
                    <i class='bx bx-search' style="font-size: 1.3rem;"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Search Overlay -->
    <div id="searchOverlay" class="search-overlay">
        <div class="search-container">
            <div class="neo-card neo-card-yellow" style="position: relative; overflow: visible; padding: 40px;">
                <div class="search-close-btn" id="closeSearch">
                    <i class='bx bx-x'></i>
                </div>
                
                <h2 style="margin-bottom: 25px; text-align: center; font-size: 2rem; text-shadow: 2px 2px 0px var(--neo-white);">Cari di SMK Assalaam</h2>
                
                <form action="{{ route('search') }}" method="GET">
                    <div style="position: relative; display: flex; gap: 10px;">
                        <input type="text" name="query" placeholder="Ketik kata kunci pencarian..." class="neo-input" style="flex: 1;" autofocus required>
                        <button type="submit" class="neo-btn neo-btn-dark">
                            CARI
                        </button>
                    </div>
                </form>
                
                <div style="margin-top: 25px; display: flex; gap: 12px; flex-wrap: wrap; justify-content: center; align-items: center;">
                    <span style="font-weight: 700; font-size: 0.9rem;">Populer:</span>
                    <a href="{{ route('search', ['query' => 'RPL']) }}" class="neo-badge neo-badge-white" style="cursor: pointer;">RPL</a>
                    <a href="{{ route('search', ['query' => 'Jurusan']) }}" class="neo-badge neo-badge-white" style="cursor: pointer;">Jurusan</a>
                    <a href="{{ route('search', ['query' => 'Kontak']) }}" class="neo-badge neo-badge-white" style="cursor: pointer;">Kontak</a>
                </div>
            </div>
        </div>
    </div>

    <main style="min-height: 70vh;">
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <div class="logo-box" style="background: #ffffff; padding: 6px 12px; border: 3px solid var(--neo-dark); border-radius: 8px; box-shadow: 3px 3px 0px var(--neo-dark); display: inline-flex;">
                        <img src="{{ asset('images/smk.png') }}" alt="SMK Assalaam Logo" style="height: 35px; width: auto; border: 1px solid var(--neo-dark); border-radius: 4px;">
                        <span style="font-size: 1rem;">Assalaam</span>
                    </div>
                    <p>SMK Assalaam berkomitmen untuk mencetak generasi unggul yang siap menghadapi tantangan global melalui pendidikan teknologi yang kokoh dan karakter berakhlak mulia.</p>
                    <div class="social-links">
                        <a href="https://www.instagram.com/smkassalaam/" class="social-link"><i class='bx bxl-instagram'></i></a>
                        <a href="https://www.facebook.com/smkassalaam/" class="social-link"><i class='bx bxl-facebook'></i></a>
                        <a href="https://www.tiktok.com/@smkassalaambandung" class="social-link"><i class='bx bxl-tiktok'></i></a>
                        <a href="https://www.youtube.com/@smkassalaambandung4011" class="social-link"><i class='bx bxl-youtube'></i></a>
                    </div>
                </div>
                
                <div class="footer-links">
                    <h4>Tautan Cepat</h4>
                    <ul>
                        <li><a href="{{ route('home') }}">Beranda</a></li>
                        <li><a href="{{ route('about') }}">Profil</a></li>
                        <li><a href="{{ route('academic') }}">Kurikulum</a></li>
                        <li><a href="{{ route('facilities') }}">Fasilitas</a></li>
                        <li><a href="{{ route('kesiswaan') }}">Kesiswaan</a></li>
                    </ul>
                </div>
                
                <div class="footer-links">
                    <h4>Jurusan</h4>
                    <ul>
                        <li><a href="{{ route('rpl') }}">RPL (Rekayasa Perangkat Lunak)</a></li>
                        <li><a href="{{ route('tkr') }}">TKR (Teknik Kendaraan Ringan)</a></li>
                        <li><a href="{{ route('tbsm') }}">TBSM (Teknik Bisnis Sepeda Motor)</a></li>
                    </ul>
                </div>
                
                <div class="footer-contact">
                    <h4>Hubungi Kami</h4>
                    <div class="neo-card" style="padding: 15px; border-radius: 8px; border-width: 3px; box-shadow: 4px 4px 0px var(--neo-dark); background: #ffffff;">
                        <ul style="padding: 0;">
                            <li>
                                <i class='bx bxs-map'></i> 
                                <span>Jl. Situ Tarate Jl. Cibaduyut, Cangkuang Kulon, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40265</span>
                            </li>
                            <li>
                                <i class='bx bxs-phone-call'></i> 
                                <span>022 5420-220</span>
                            </li>
                            <li>
                                <i class='bx bxs-envelope'></i> 
                                <span>info@smkassalaam.sch.id</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} SMK Assalaam Bandung. Hak Cipta Dilindungi dengan Gaya Neobrutalisme.</p>
            </div>
        </div>
    </footer>

    <script>
        // Navbar scroll effect
        window.onscroll = function() {
            var navbar = document.getElementById('navbar');
            if (window.pageYOffset > 50) {
                navbar.style.padding = '8px 0';
                navbar.style.backgroundColor = '#FFFFFF';
            } else {
                navbar.style.padding = '15px 0';
            }
        };

        // Search Overlay Logic
        const openSearch = document.getElementById('openSearch');
        const closeSearch = document.getElementById('closeSearch');
        const searchOverlay = document.getElementById('searchOverlay');
        const searchInput = document.querySelector('.search-overlay input');

        openSearch.addEventListener('click', () => {
            searchOverlay.classList.add('active');
            setTimeout(() => searchInput.focus(), 300);
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
