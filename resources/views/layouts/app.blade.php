<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'EduGold Global School') | Keunggulan dalam Pendidikan</title>
    <meta name="description" content="EduGold Global School menyediakan pendidikan kelas dunia dengan fasilitas premium dan kurikulum modern.">
    
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
                <div class="logo-icon"><i class='bx bxs-graduation'></i></div>
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
                <div class="search-btn">
                    <i class='bx bx-search'></i>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <div class="footer-logo">
                        <div class="logo-icon"><i class='bx bxs-graduation'></i></div>
                        <span class="logo-text">Assalaam</span>
                    </div>
                    <p>SMK Assalaam berkomitmen untuk mencetak generasi unggul yang siap menghadapi tantangan global melalui pendidikan teknologi dan karakter yang kuat.</p>
                    <div class="social-links">
                        <a href="#"><i class='bx bxl-instagram'></i></a>
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                        <a href="#"><i class='bx bxl-tiktok'></i></a>
                        <a href="#"><i class='bx bxl-youtube'></i></a>
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
                    <h4>Program Unggulan</h4>
                    <ul>
                        <li><a href="#">Teknik Informatika</a></li>
                        <li><a href="#">Multimedia</a></li>
                        <li><a href="#">Rekayasa Perangkat Lunak</a></li>
                        <li><a href="#">Beasiswa Industri</a></li>
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
        window.onscroll = function() {
            var navbar = document.getElementById('navbar');
            if (window.pageYOffset > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        };

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
            }, { threshold: 0.1 }); // Very low threshold to trigger easily

            document.querySelectorAll('.counter').forEach(counter => counterObserver.observe(counter));
        });
    </script>
</body>
</html>
