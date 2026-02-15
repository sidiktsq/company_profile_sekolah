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
           <h1 style="color: white;">Fasilitas Premium</h1>
            <p style="color: white;">Menyediakan lingkungan terbaik untuk belajar, berolahraga, dan berkreasi.</p>
        </div>
    </header>

    <section style="padding: 100px 0;">
    <div class="container">
        <div class="section-header">
            <h2>Sekilas Tentang Sekolah Kami</h2>
            <p>Fasilitas lengkap untuk mendukung pembelajaran dan pengembangan siswa.</p>
        </div>
        
        <div class="facility-grid">
            <!-- Lab Komputer -->
            <div class="facility-item fade-in">
                <img src="{{asset ('images/ngoding.jpg')}}" alt="Lab Komputer">
                <div class="facility-overlay">
                    <h3 style="color: white;">Lab Komputer</h3>
                    <p>Fasilitas komputer modern untuk pembelajaran pemrograman dan desain grafis.</p>
                </div>
            </div>
            <!-- Bengkel TSM -->
            <div class="facility-item fade-in" style="animation-delay: 0.1s;">
                <img src="{{asset ('images/motorr.jpg')}}" alt="Bengkel TSM">
                <div class="facility-overlay">
                    <h3 style="color: white;">Bengkel TSM</h3>
                    <p>Bengkel lengkap untuk praktik Teknik Sepeda Motor.</p>
                </div>
            </div>
            <!-- Bengkel TKR -->
            <div class="facility-item fade-in" style="animation-delay: 0.2s;">
                <img src="{{asset ('images/mobil.jpg')}}" alt="Bengkel TKR">
                <div class="facility-overlay">
                    <h3 style="color: white;">Bengkel TKR</h3>
                    <p>Peralatan lengkap untuk praktik Teknik Kendaraan Ringan.</p>
                </div>
            </div>
            <!-- Gedung Sekolah -->
            <div class="facility-item fade-in" style="animation-delay: 0.3s;">
                <img src="{{asset ('images/sakola.jpg')}}" alt="Gedung Sekolah">
                <div class="facility-overlay">
                    <h3 style="color: white;">Gedung Sekolah</h3>
                    <p>Lingkungan belajar yang nyaman dan kondusif.</p>
                </div>
            </div>
            <!-- Perpustakaan -->
            <div class="facility-item fade-in" style="animation-delay: 0.4s;">
                <img src="{{asset ('images/perpus.jpg')}}" alt="Perpustakaan">
                <div class="facility-overlay">
                    <h3 style="color: white;">Perpustakaan</h3>
                    <p>Sumber belajar lengkap untuk menunjang pendidikan.</p>
                </div>
            </div>
            <!-- Mushola -->
            <div class="facility-item fade-in" style="animation-delay: 0.5s;">
                <img src="{{asset ('images/sholat.jpg')}}" alt="Mushola">
                <div class="facility-overlay">
                    <h3 style="color: white;">Mushola</h3>
                    <p>Tempat ibadah yang nyaman untuk warga sekolah.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
