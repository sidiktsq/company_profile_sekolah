@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
    <!-- Pure CSS for Pages -->
    <style>
        .page-header {
            padding: 150px 0 80px;
            background: linear-gradient(rgba(0, 51, 102, 0.8), rgba(0, 51, 102, 0.8)), url('https://images.unsplash.com/photo-1541339907198-e08756ebafe3?q=80&w=2070&auto=format&fit=crop');
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
        
        .history-section {
            padding: 100px 0;
        }
        
        .vision-mission {
            background-color: var(--bg-light);
            padding: 100px 0;
        }
        
        .vision-mission-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }
    </style>

    <header class="page-header">
        <div class="container fade-in">
            <h1>Cerita Kami</h1>
            <p>Dari sebuah rumah sekolah kecil menjadi pusat keunggulan global.</p>
        </div>
    </header>

    <section class="history-section">
        <div class="container">
            <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 80px;">
                <div style="flex: 1; min-width: 300px;">
                    <h2 style="margin-bottom: 25px;">Sejarah Kami</h2>
                    <p style="margin-bottom: 20px;">SMK Assalaam Bandung didirikan dan diresmikan pada tanggal 2 Mei 2009 sebagai bagian dari Yayasan Assalaam Bandung yang telah berdiri sejak tahun 1952. Pada awal berdirinya, sekolah ini fokus membuka satu kompetensi keahlian, yaitu Teknik Kendaraan Ringan. Sekolah ini berkomitmen pada pendidikan berbasis kerja sama dengan dunia industri. </p>
                </div>
                <div style="flex: 1; min-width: 300px;">
                    <img src="{{ asset('images/smk.png') }}" alt="History" style="width: 100%; max-width: 600px; border-radius: 20px; box-shadow: var(--shadow-lg);">
                </div>
            </div>
        </div>
    </section>

    <section class="vision-mission">
        <div class="container">
            <div class="vision-mission-grid">
                <div class="card fade-in" style="background: var(--white); padding: 50px; border-radius: 20px; border-left: 10px solid var(--primary-color);">
                    <i class='bx bx-bullseye' style="font-size: 3.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                    <h2>Misi Kami</h2>
                    <p style="margin-bottom: 15px;">- Menyelenggarakan pendidikan berkualitas dengan sarana lengkap, berlandaskan norma Islam, disiplin, dan amanah.</p>
                    <p style="margin-bottom: 15px;">- Mengembangkan potensi siswa yang intelek dan aktif dalam merespons perkembangan.</p>
                    <p style="margin-bottom: 15px;">- Menghasilkan lulusan yang cerdas, terampil, kompetitif, mandiri, dan berjiwa wirausaha (entrepreneurship).</p>
                    <p style="margin-bottom: 0;">- Membekali siswa dengan wawasan dunia usaha/industri serta kemampuan berwirausaha. </p>
                </div> 
                <div class="card fade-in" style="background: var(--white); padding: 50px; border-radius: 20px; border-left: 10px solid var(--secondary-color); animation-delay: 0.1s;">
                    <i class='bx bx-show-alt' style="font-size: 3.5rem; color: var(--secondary-color); margin-bottom: 20px;"></i>
                    <h2>Visi Kami</h2>
                    <p>menjadi lembaga pendidikan yang unggul, inovatif, dan berdaya saing di bidang teknologi/keahlian, serta membentuk lulusan berakhlak mulia, berwawasan berkelanjutan, dan bermanfaat bagi kesejahteraan dunia akhirat.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section style="padding: 100px 0;">
        <div class="container">
            <div class="section-header">
                <h2>Kepemimpinan Kami</h2>
                <p>Profesional yang berdedikasi dan berkomitmen pada keunggulan pendidikan.</p>
            </div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 40px;">
                <!-- Leader 1 -->
                <div class="fade-in" style="text-align: center;">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=1974&auto=format&fit=crop" alt="Principal" style="width: 200px; height: 200px; object-fit: cover; border-radius: 50%; margin-bottom: 20px; border: 5px solid var(--bg-light);">
                    <h3>Dr. Robert Smith</h3>
                    <p style="color: var(--secondary-color); font-weight: 600;">Kepala Sekolah Eksekutif</p>
                </div>
                <!-- Leader 2 -->
                <div class="fade-in" style="text-align: center; animation-delay: 0.1s;">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=1976&auto=format&fit=crop" alt="Head of Academic" style="width: 200px; height: 200px; object-fit: cover; border-radius: 50%; margin-bottom: 20px; border: 5px solid var(--bg-light);">
                    <h3>Sarah Johnson</h3>
                    <p style="color: var(--secondary-color); font-weight: 600;">Kepala Akademik</p>
                </div>
                <!-- Leader 3 -->
                <div class="fade-in" style="text-align: center; animation-delay: 0.2s;">
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=1974&auto=format&fit=crop" alt="Registrar" style="width: 200px; height: 200px; object-fit: cover; border-radius: 50%; margin-bottom: 20px; border: 5px solid var(--bg-light);">
                    <h3>Michael Brown</h3>
                    <p style="color: var(--secondary-color); font-weight: 600;">Pendaftar Sekolah</p>
                </div>
            </div>
        </div>
    </section>
@endsection
