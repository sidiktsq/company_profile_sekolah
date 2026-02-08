@extends('layouts.app')

@section('title', 'Fasilitas Kami')

@section('content')
    <style>
        .page-header {
            padding: 150px 0 80px;
            background: linear-gradient(rgba(0, 51, 102, 0.8), rgba(0, 51, 102, 0.8)), url('https://images.unsplash.com/photo-1541339907198-e08756ebafe3?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            color: var(--white);
            text-align: center;
        }

        .facility-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .facility-item {
            position: relative;
            height: 300px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-md);
            cursor: pointer;
            transition: var(--transition);
        }

        .facility-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .facility-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(transparent, rgba(0, 51, 102, 0.9));
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 30px;
            color: var(--white);
            opacity: 0.8;
            transition: var(--transition);
        }

        .facility-item:hover img {
            transform: scale(1.1);
        }

        .facility-item:hover .facility-overlay {
            opacity: 1;
            padding-bottom: 40px;
        }
    </style>

    <header class="page-header">
        <div class="container fade-in">
            <h1>Fasilitas Premium</h1>
            <p>Menyediakan lingkungan terbaik untuk belajar, berolahraga, dan berkreasi.</p>
        </div>
    </header>

    <section style="padding: 100px 0;">
        <div class="container">
            <div class="section-header">
                <h2>Sekilas Tentang Kampus Kami</h2>
                <p>Dirancang untuk menginspirasi keunggulan pada setiap siswa.</p>
            </div>
            
            <div class="facility-grid">
                <!-- Facility 1 -->
                <div class="facility-item fade-in">
                    <img src="https://images.unsplash.com/photo-1574169208507-84376144848b?q=80&w=2079&auto=format&fit=crop" alt="Perpustakaan Pintar">
                    <div class="facility-overlay">
                        <h3>Perpustakaan Pintar</h3>
                        <p>Lebih dari 50.000 judul dan sumber daya digital.</p>
                    </div>
                </div>
                <!-- Facility 2 -->
                <div class="facility-item fade-in" style="animation-delay: 0.1s;">
                    <img src="https://images.unsplash.com/photo-1562774053-701939374585?q=80&w=1986&auto=format&fit=crop" alt="Lab Sains">
                    <div class="facility-overlay">
                        <h3>Lab Sains Interaktif</h3>
                        <p>Peralatan canggih untuk fisika, kimia, dan biologi.</p>
                    </div>
                </div>
                <!-- Facility 3 -->
                <div class="facility-item fade-in" style="animation-delay: 0.2s;">
                    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=2070&auto=format&fit=crop" alt="Hub TI">
                    <div class="facility-overlay">
                        <h3>Hub TI Modern</h3>
                        <p>Konektivitas berkecepatan tinggi dan teknologi komputasi terbaru.</p>
                    </div>
                </div>
                <!-- Facility 4 -->
                <div class="facility-item fade-in" style="animation-delay: 0.3s;">
                    <img src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?q=80&w=2187&auto=format&fit=crop" alt="Pusat Olahraga">
                    <div class="facility-overlay">
                        <h3>Pusat Olahraga Serbaguna</h3>
                        <p>Lapangan indoor, kolam renang ukuran Olimpiade, dan pusat kebugaran.</p>
                    </div>
                </div>
                <!-- Facility 5 -->
                <div class="facility-item fade-in" style="animation-delay: 0.4s;">
                    <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?q=80&w=2070&auto=format&fit=crop" alt="Studio Seni">
                    <div class="facility-overlay">
                        <h3>Studio Seni Kreatif</h3>
                        <p>Ruang untuk melukis, patung, dan desain digital.</p>
                    </div>
                </div>
                <!-- Facility 6 -->
                <div class="facility-item fade-in" style="animation-delay: 0.5s;">
                    <img src="https://images.unsplash.com/photo-1560523182-1bf6f7887304?q=80&w=1974&auto=format&fit=crop" alt="Kantin">
                    <div class="facility-overlay">
                        <h3>Ruang Makan Sehat</h3>
                        <p>Makanan bergizi yang disiapkan oleh koki ahli.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
