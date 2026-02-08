@extends('layouts.app')

@section('title', 'Program Akademik')

@section('content')
    <style>
        .page-header {
            padding: 150px 0 80px;
            background: linear-gradient(rgba(0, 51, 102, 0.8), rgba(0, 51, 102, 0.8)), url('https://images.unsplash.com/photo-1503676260728-1c00da094a0b?q=80&w=2022&auto=format&fit=crop');
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
            padding: 20px;
            background: var(--bg-light);
            border-radius: 10px;
            text-align: center;
            font-weight: 600;
            color: var(--primary-color);
        }
    </style>

    <header class="page-header">
        <div class="container fade-in">
            <h1>Keunggulan Akademik</h1>
            <p>Mengembangkan pemikir, inovator, dan pemimpin masa depan.</p>
        </div>
    </header>

    <section style="padding: 100px 0;">
        <div class="container">
            <!-- Program 1 -->
            <div class="program-card fade-in">
                <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?q=80&w=2072&auto=format&fit=crop" alt="Primary School" class="program-img">
                <div class="program-content">
                    <span style="color: var(--secondary-color); font-weight: 700; text-transform: uppercase;">Usia 6 - 11</span>
                    <h2 style="margin: 15px 0 20px;">Sekolah Dasar</h2>
                    <p style="margin-bottom: 30px;">Program dasar kami berfokus pada pembelajaran berbasis inkuiri. Kami mengikuti International Baccalaureate Primary Years Programme (IB PYP), mendorong siswa untuk menjadi penasaran dan kolaboratif.</p>
                    <h3>Mata Pelajaran Inti:</h3>
                    <div class="curriculum-grid">
                        <div class="curriculum-item">Matematika</div>
                        <div class="curriculum-item">Bahasa</div>
                        <div class="curriculum-item">Sains</div>
                        <div class="curriculum-item">Studi Sosial</div>
                    </div>
                </div>
            </div>

            <!-- Program 2 -->
            <div class="program-card fade-in" style="flex-direction: row-reverse;">
                <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=2132&auto=format&fit=crop" alt="Secondary School" class="program-img">
                <div class="program-content">
                    <span style="color: var(--secondary-color); font-weight: 700; text-transform: uppercase;">Usia 12 - 18</span>
                    <h2 style="margin: 15px 0 20px;">Sekolah Menengah</h2>
                    <p style="margin-bottom: 30px;">Di sekolah menengah, kami beralih ke Program Tahun Menengah dan Diploma IB. Siswa terlibat dalam penelitian mendalam, analisis kritis, dan pengabdian masyarakat.</p>
                    <h3>Jalur Utama:</h3>
                    <div class="curriculum-grid">
                        <div class="curriculum-item">Jalur STEM</div>
                        <div class="curriculum-item">Seni & Desain</div>
                        <div class="curriculum-item">Bisnis & Ekonomi</div>
                        <div class="curriculum-item">Humaniora</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
