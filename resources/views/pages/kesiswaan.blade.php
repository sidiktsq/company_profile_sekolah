@extends('layouts.app')

@section('title', 'Kesiswaan')

@section('content')
    <style>
        .page-header {
            padding: 150px 0 80px;
            background: linear-gradient(rgba(0, 51, 102, 0.8), rgba(0, 51, 102, 0.8)), url('{{ asset('images/sakola.jpg') }}');
            background-size: cover;
            background-position: center;
            color: var(--white);
            text-align: center;
        }
        
        .page-header h1 {
            color: var(--white);
            font-size: 3.5rem;
            margin-bottom: 20px;
        }

        .ekskul-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .ekskul-card {
            background: var(--white);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-md);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-bottom: 5px solid var(--secondary-color);
        }

        .ekskul-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }

        .ekskul-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-color), #004080);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: var(--secondary-color);
            font-size: 2rem;
        }

        .ekskul-content {
            padding: 30px;
            text-align: center;
        }

        .ekskul-content h3 {
            color: var(--primary-color);
            margin-bottom: 15px;
            font-size: 1.5rem;
        }

        .ekskul-content p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .ekskul-badge {
            display: inline-block;
            padding: 5px 15px;
            background: var(--bg-light);
            border-radius: 20px;
            font-size: 0.85rem;
            color: var(--primary-color);
            font-weight: 600;
            margin: 5px;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header h2 {
            color: var(--primary-color);
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .section-header p {
            color: #666;
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }
    </style>

    <header class="page-header">
        <div class="container fade-in">
            <h1>Kesiswaan</h1>
            <p>Mengembangkan potensi siswa melalui kegiatan ekstrakurikuler yang beragam</p>
        </div>
    </header>

    <section style="padding: 100px 0;">
        <div class="container">
            <div class="section-header">
                <h2>Ekstrakurikuler Unggulan</h2>
                <p>Berbagai pilihan kegiatan untuk mengembangkan bakat dan minat siswa</p>
            </div>

            <div class="ekskul-grid">
                
<!-- Pramuka -->
<div class="ekskul-card fade-in">
    <div class="ekskul-content">
        <div class="ekskul-icon">
            🏕️
        </div>
        <h3>Pramuka</h3>
        <p>Membentuk karakter disiplin, kepemimpinan, dan kepedulian sosial melalui kegiatan kepramukaan yang terstruktur.</p>
        <div>   
            <span class="ekskul-badge">Rabu Sore</span>
            <span class="ekskul-badge">Lapangan</span>
        </div>
    </div>
</div>
                <!-- PMR -->
                <div class="ekskul-card fade-in" style="animation-delay: 0.1s;">
                    <div class="ekskul-content">
                        <div class="ekskul-icon">
                            <i class='bx bx-heart'></i>
                        </div>
                        <h3>PMR (Palang Merah Remaja)</h3>
                        <p>Melatih keterampilan pertolongan pertama, kesiapsiagaan bencana, dan kepedulian terhadap sesama.</p>
                        <div>
                            <span class="ekskul-badge">Jumat Sore</span>
                            <span class="ekskul-badge">UKS</span>
                        </div>
                    </div>
                </div>

                <!-- Futsal -->
                <div class="ekskul-card fade-in" style="animation-delay: 0.2s;">
                    <div class="ekskul-content">
                        <div class="ekskul-icon">
                            <i class='bx bx-football'></i>
                        </div>
                        <h3>Futsal</h3>
                        <p>Mengembangkan kemampuan olahraga, kerja sama tim, dan sportivitas melalui permainan futsal.</p>
                        <div>
                            <span class="ekskul-badge">Selasa & Kamis</span>
                            <span class="ekskul-badge">Lapangan Futsal</span>
                        </div>
                    </div>
                </div>

                <!-- Basket -->
                <div class="ekskul-card fade-in" style="animation-delay: 0.3s;">
                    <div class="ekskul-content">
                        <div class="ekskul-icon">
                            <i class='bx bx-basketball'></i>
                        </div>
                        <h3>Basket</h3>
                        <p>Membina bakat olahraga basket, meningkatkan kebugaran fisik, dan membangun semangat kompetisi.</p>
                        <div>
                            <span class="ekskul-badge">Senin & Rabu</span>
                            <span class="ekskul-badge">Lapangan Basket</span>
                        </div>
                    </div>
                </div>

                <!-- Badminton -->
                <div class="ekskul-card fade-in" style="animation-delay: 0.4s;">
                    <div class="ekskul-content">
                        <div class="ekskul-icon">
                            <i class='bx bx-tennis-ball'></i>
                        </div>
                        <h3>Bulutangkis</h3>
                        <p>Mengasah kemampuan bermain bulutangkis, meningkatkan refleks, dan menjaga kesehatan jasmani.</p>
                        <div>
                            <span class="ekskul-badge">Kamis Sore</span>
                            <span class="ekskul-badge">Gor Bulutangkis</span>
                        </div>
                    </div>
                </div>

                <!-- Robotika -->
                <div class="ekskul-card fade-in" style="animation-delay: 0.5s;">
                    <div class="ekskul-content">
                        <div class="ekskul-icon">
                            <i class='bx bx-bot'></i>
                        </div>
                        <h3>Robotika</h3>
                        <p>Mempelajari dasar-dasar robotika, pemrograman, dan rekayasa mekanik untuk kompetisi robot tingkat nasional.</p>
                        <div>
                            <span class="ekskul-badge">Sabtu</span>
                            <span class="ekskul-badge">Lab Komputer</span>
                        </div>
                    </div>
                </div>

                <!-- Desain Grafis -->
                <div class="ekskul-card fade-in" style="animation-delay: 0.6s;">
                    <div class="ekskul-content">
                        <div class="ekskul-icon">
                            <i class='bx bx-palette'></i>
                        </div>
                        <h3>Desain Grafis</h3>
                        <p>Mengembangkan kreativitas dalam desain digital, menguasai software desain, dan membuat karya visual yang menarik.</p>
                        <div>
                            <span class="ekskul-badge">Selasa Sore</span>
                            <span class="ekskul-badge">Lab Komputer</span>
                        </div>
                    </div>
                </div>

                <!-- Paskibra -->
                <div class="ekskul-card fade-in" style="animation-delay: 0.7s;">
                    <div class="ekskul-content">
                        <div class="ekskul-icon">
                            <i class='bx bx-flag'></i>
                        </div>
                        <h3>Paskibra</h3>
                        <p>Membentuk karakter disiplin, rasa cinta tanah air, dan kemampuan baris-berbaris yang sempurna.</p>
                        <div>
                            <span class="ekskul-badge">Senin Sore</span>
                            <span class="ekskul-badge">Lapangan Upacara</span>
                        </div>
                    </div>
                </div>

                <!-- Tahfidz -->
                <div class="ekskul-card fade-in" style="animation-delay: 0.8s;">
                    <div class="ekskul-content">
                        <div class="ekskul-icon">
                            <i class='bx bx-book-open'></i>
                        </div>
                        <h3>Tahfidz Quran</h3>
                        <p>Membantu siswa menghafal Al-Quran dengan metode yang tepat, memperkuat spiritual, dan karakter islami.</p>
                        <div>
                            <span class="ekskul-badge">Senin - Jumat</span>
                            <span class="ekskul-badge">Mushola</span>
                        </div>
                    </div>
                </div>

                <!-- Jurnalistik -->
                <div class="ekskul-card fade-in" style="animation-delay: 0.9s;">
                    <div class="ekskul-content">
                        <div class="ekskul-icon">
                            <i class='bx bx-camera'></i>
                        </div>
                        <h3>Jurnalistik</h3>
                        <p>Melatih kemampuan menulis, fotografi, dan pemberitaan untuk mengembangkan media sekolah yang kreatif.</p>
                        <div>
                            <span class="ekskul-badge">Rabu Sore</span>
                            <span class="ekskul-badge">Ruang Media</span>
                        </div>
                    </div>
                </div>

                <!-- Seni Tari -->
                <div class="ekskul-card fade-in" style="animation-delay: 1.0s;">
                    <div class="ekskul-content">
                        <div class="ekskul-icon">
                            <i class='bx bx-music'></i>
                        </div>
                        <h3>Seni Tari</h3>
                        <p>Melestarikan budaya tradisional melalui tari-tarian nusantara, mengembangkan bakat seni dan percaya diri.</p>
                        <div>
                            <span class="ekskul-badge">Jumat Sore</span>
                            <span class="ekskul-badge">Aula Sekolah</span>
                        </div>
                    </div>
                </div>

                <!-- Olimpiade Sains -->
                <div class="ekskul-card fade-in" style="animation-delay: 1.1s;">
                    <div class="ekskul-content">
                        <div class="ekskul-icon">
                            <i class='bx bx-test-tube'></i>
                        </div>
                        <h3>Olimpiade Sains</h3>
                        <p>Mempersiapkan siswa untuk kompetisi sains tingkat kabupaten, provinsi, dan nasional.</p>
                        <div>
                            <span class="ekskul-badge">Sabtu</span>
                            <span class="ekskul-badge">Lab IPA</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection