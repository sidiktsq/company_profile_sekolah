@extends('layouts.app')

@section('title', 'Program Keahlian')

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

        .program-card {
            background: var(--white);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-md);
            margin-bottom: 50px;
            display: flex;
            flex-wrap: wrap;
        }

        .program-img {
            flex: 1;
            min-width: 300px;
            height: 400px;
            object-fit: cover;
        }

        .program-content {
            flex: 1;
            min-width: 300px;
            padding: 60px;
        }

        .curriculum-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .curriculum-item {
            padding: 15px;
            background: var(--bg-light);
            border-radius: 10px;
            text-align: center;
            font-weight: 600;
            color: var(--primary-color);
            transition: transform 0.3s ease;
        }

        .curriculum-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
    </style>

    <header class="page-header">
        <div class="container fade-in">
            <h1>Program Keahlian</h1>
            <p>Menyiapkan lulusan yang kompeten dan siap kerja di bidangnya masing-masing.</p>
        </div>
    </header>

    <section style="padding: 100px 0;">
        <div class="container">
            <!-- Program RPL -->
            <div class="program-card fade-in">
                <img src="{{ asset('images/ngoding.jpg') }}" alt="Rekayasa Perangkat Lunak" class="program-img">
                <div class="program-content">
                    <span style="color: var(--secondary-color); font-weight: 700; text-transform: uppercase;">Jurusan Unggulan</span>
                    <h2 style="margin: 15px 0 20px;">Rekayasa Perangkat Lunak (RPL)</h2>
                    <p style="margin-bottom: 30px;">Program keahlian yang mempersiapkan siswa untuk menjadi tenaga profesional di bidang pengembangan perangkat lunak. Siswa akan dibekali dengan keterampilan pemrograman, pengembangan aplikasi, dan manajemen basis data.</p>
                    <h3>Kompetensi Keahlian:</h3>
                    <div class="curriculum-grid">
                        <div class="curriculum-item">Pemrograman Dasar</div>
                        <div class="curriculum-item">Basis Data</div>
                        <div class="curriculum-item">Pemrograman Web</div>
                        <div class="curriculum-item">Pemrograman Mobile</div>
                    </div>
                </div>
            </div>

            <!-- Program TKR -->
            <div class="program-card fade-in" style="flex-direction: row-reverse;">
                <img src="{{ asset('images/mobil.jpg') }}" alt="Teknik Kendaraan Ringan" class="program-img">
                <div class="program-content">
                    <span style="color: var(--secondary-color); font-weight: 700; text-transform: uppercase;">Jurusan Unggulan</span>
                    <h2 style="margin: 15px 0 20px;">Teknik Kendaraan Ringan (TKR)</h2>
                    <p style="margin-bottom: 30px;">Program keahlian yang berfokus pada perawatan dan perbaikan kendaraan ringan. Siswa akan mempelajari sistem mesin, kelistrikan, dan mekanik kendaraan bermotor roda empat.</p>
                    <h3>Kompetensi Keahlian:</h3>
                    <div class="curriculum-grid">
                        <div class="curriculum-item">Sistem Mesin</div>
                        <div class="curriculum-item">Kelistrikan Otomotif</div>
                        <div class="curriculum-item">Sistem Pemindah Tenaga</div>
                        <div class="curriculum-item">Perawatan Kendaraan</div>
                    </div>
                </div>
            </div>

            <!-- Program TBSM -->
            <div class="program-card fade-in">
                <img src="{{ asset('images/motorr.jpg') }}" alt="Teknik Bisnis Sepeda Motor" class="program-img">
                <div class="program-content">
                    <span style="color: var(--secondary-color); font-weight: 700; text-transform: uppercase;">Jurusan Unggulan</span>
                    <h2 style="margin: 15px 0 20px;">Teknik Bisnis Sepeda Motor (TBSM)</h2>
                    <p style="margin-bottom: 30px;">Program keahlian yang mempersiapkan siswa untuk menjadi teknisi sepeda motor yang handal dan wirausaha di bidang otomotif. Fokus pada perawatan, perbaikan, dan manajemen bengkel sepeda motor.</p>
                    <h3>Kompetensi Keahlian:</h3>
                    <div class="curriculum-grid">
                        <div class="curriculum-item">Perbaikan Mesin</div>
                        <div class="curriculum-item">Kelistrikan Sepeda Motor</div>
                        <div class="curriculum-item">Sistem Bahan Bakar</div>
                        <div class="curriculum-item">Manajemen Bengkel</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection