@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
    <!-- Pure CSS for Pages -->
    <style>
        /* hero header style similar to kesiswaan for consistency */
        .page-header {
            padding: 160px 0 100px;
            background: linear-gradient(135deg, rgba(0,51,102,.8) 0%, rgba(0,51,102,.6) 100%),
                        url('{{ asset('images/sakola.jpg') }}') center/cover no-repeat;
            color: #fff;
            text-align: center;
        }

        .page-header h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 4rem;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: .5rem;
            text-shadow: 0 2px 8px rgba(0,0,0,.5);
            color: #fff !important;
        }

        .page-header p {
            font-size: 1.25rem;
            font-weight: 300;
            max-width: 700px;
            margin: 0 auto;
            color: #fff !important;
        }
        
        .page-header h1 {
            color: var(--white);
            font-size: 3.5rem;
            margin-bottom: 20px;
        }
        
        .history-section {
            padding: 100px 0;
        }

        .history-grid {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 80px;
        }

        .history-text {
            flex:1;
            min-width:300px;
        }

        .history-text h2 {
            margin-bottom:25px;
            font-size:2.25rem;
            color: var(--primary-color);
        }

        .history-text p {
            margin-bottom:20px;
            text-align: justify;
            line-height:1.75;
            color:#444;
        }

        .history-img {
            flex:1;
            min-width:300px;
        }

        .history-img img {
            width:100%;
            max-width:600px;
            border-radius:20px;
            box-shadow:var(--shadow-lg);
        }
        
        .vision-mission {
            background-color: var(--bg-light);
            padding: 100px 0;
        }
        
        .vision-mission-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit,minmax(280px,1fr));
            gap: 40px;
        }

        .vision-card {
            background:#fff;
            padding:40px;
            border-radius:1rem;
            box-shadow:0 4px 20px rgba(0,0,0,.08);
            position:relative;
            transition:transform .3s;
            cursor: default;
        }

        .vision-card:hover { transform: translateY(-8px); }

        .vision-card i {
            font-size:3.5rem;
            margin-bottom:20px;
        }

        .vision-card h2 {
            margin-bottom:15px;
            font-size:1.75rem;
            color: var(--primary-color);
        }

        .vision-card p { line-height:1.6; color:#555; }

        /* team section styles */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit,minmax(240px,1fr));
            gap: 40px;
            align-items: start;
        }

        .team-card {
            text-align: center;
            transition: transform .3s;
        }

        .team-card:hover { transform: translateY(-6px); }

        .team-card img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 20px;
            border: 5px solid var(--bg-light);
        }

        .team-card h3 { margin-bottom: 8px; font-size:1.25rem; }

        .team-card .role {
            color: var(--secondary-color);
            font-weight: 600;
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
            <div class="history-grid">
                <div class="history-text">
                    <h2>Sejarah Kami</h2>
                    <p>SMK Assalaam Bandung berdiri di bawah naungan Yayasan Assalaam yang dipelopori oleh ulama besar KH. Habib Utsman Al-Aydarus, dengan visi besar untuk menciptakan generasi yang tidak hanya kuat secara spiritual, tetapi juga kompeten secara teknis di dunia industri. Sejak awal didirikan, sekolah ini telah mengukuhkan posisinya sebagai pionir pendidikan kejuruan di Bandung, terutama melalui spesialisasi di bidang otomotif yang menjadi "wajah" utama institusi ini selama puluhan tahun. Seiring berjalannya waktu, SMK Assalaam berhasil bertransformasi dari sebuah bengkel pendidikan sederhana menjadi pusat keunggulan teknologi yang modern di kawasan Pasirluyu, dengan mengintegrasikan kurikulum berbasis industri dan memperluas cakupannya ke bidang teknologi informasi seperti Rekayasa Perangkat Lunak. Keberhasilan mereka terletak pada konsistensi menjaga disiplin tinggi dan kemitraan strategis dengan brand-brand otomotif raksasa, sehingga lulusannya dikenal memiliki etos kerja yang tangguh—sebuah perpaduan antara kematangan akhlak yang berakar dari tradisi pesantren dan keterampilan teknis mutakhir yang relevan dengan kebutuhan pasar kerja global.</p>
                </div>
                <div class="history-img">
                    <img src="{{ asset('images/smk.png') }}" alt="History">
                </div>
            </div>
        </div>
    </section>

    <section class="vision-mission">
        <div class="container">
            <div class="vision-mission-grid">
                <div class="vision-card fade-in" style="animation-delay:0.1s; border-left:10px solid var(--secondary-color);">
                    <i class='bx bx-show-alt' style="color: var(--secondary-color);"></i>
                    <h2>Visi Kami</h2>
                    <p>menjadi lembaga pendidikan yang unggul, inovatif, dan berdaya saing di bidang teknologi/keahlian, serta membentuk lulusan berakhlak mulia, berwawasan berkelanjutan, dan bermanfaat bagi kesejahteraan dunia akhirat.</p>
                </div>
                <div class="vision-card fade-in" style="border-left:10px solid var(--primary-color);">
                    <i class='bx bx-bullseye' style="color: var(--primary-color);"></i>
                    <h2>Misi Kami</h2>
                    <ul style="padding-left:1.2rem;">
                        <li>Menyelenggarakan pendidikan berkualitas dengan sarana lengkap, berlandaskan norma Islam, disiplin, dan amanah.</li>
                        <li>Mengembangkan potensi siswa yang intelek dan aktif dalam merespons perkembangan.</li>
                        <li>Menghasilkan lulusan yang cerdas, terampil, kompetitif, mandiri, dan berjiwa wirausaha (entrepreneurship).</li>
                        <li>Membekali siswa dengan wawasan dunia usaha/industri serta kemampuan berwirausaha.</li>
                    </ul>
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
            <div class="team-grid">
                <!-- Leader 1 -->
                <div class="team-card fade-in">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=1974&auto=format&fit=crop" alt="Principal">
                    <h3>Dr. Robert Smith</h3>
                    <p class="role">Kepala Sekolah Eksekutif</p>
                </div>
                <!-- Leader 2 -->
                <div class="team-card fade-in" style="animation-delay:0.1s;">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=1976&auto=format&fit=crop" alt="Head of Academic">
                    <h3>Sarah Johnson</h3>
                    <p class="role">Kepala Akademik</p>
                </div>
                <!-- Leader 3 -->
                <div class="team-card fade-in" style="animation-delay:0.2s;">
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=1974&auto=format&fit=crop" alt="Registrar">
                    <h3>Michael Brown</h3>
                    <p class="role">Pendaftar Sekolah</p>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection
