@extends('layouts.app')

@section('title', 'Rekayasa Perangkat Lunak (RPL)')

@section('content')
<!-- Neobrutalist Page Header -->
<header class="page-header-neo" style="background-color: var(--neo-yellow);">
    <div class="container fade-in">
        <span class="neo-badge neo-badge-pink" style="margin-bottom: 15px;">KOMPETENSI KEAHLIAN</span>
        <h1 style="-webkit-text-stroke: 1.5px var(--neo-dark); text-shadow: 4px 4px 0px var(--neo-white);">Rekayasa Perangkat Lunak (RPL)</h1>
        <p>Membentuk programmer full-stack andal, developer aplikasi mobile, dan pengelola database berstandar global.</p>
    </div>
</header>

<section style="padding: 60px 0 100px; background-color: var(--neo-bg); border-bottom: 4px solid var(--neo-dark);">
    <div class="container">
        <!-- Back Button -->
        <div style="margin-bottom: 40px;" class="fade-in">
            <a href="{{ route('academic') }}" class="neo-btn neo-btn-white">
                <i class='bx bx-left-arrow-alt' style="font-size: 1.3rem;"></i> KEMBALI KE KURIKULUM
            </a>
        </div>

        <div style="display: flex; flex-wrap: wrap; gap: 50px; align-items: flex-start;">
            
            <!-- Left: Curriculum Grid -->
            <div style="flex: 1.5; min-width: 320px;" class="fade-in">
                <span class="neo-badge neo-badge-cyan" style="margin-bottom: 15px;">FOKUS KOMPETENSI</span>
                <h2 style="font-size: 2rem; margin-bottom: 25px; color: var(--neo-dark);">Apa Yang Dipelajari?</h2>
                <p style="font-size: 1.1rem; line-height: 1.7; font-weight: 500; color: #4A4A4A; margin-bottom: 40px; background: #ffffff; padding: 20px; border: 3px solid var(--neo-dark); border-radius: 8px; box-shadow: 4px 4px 0px var(--neo-dark);">
                    Kurikulum RPL SMK Assalaam dirancang untuk mengikuti perkembangan teknologi industri software terkini. Siswa diajarkan konsep fundamental pemrograman hingga praktek pembuatan aplikasi nyata (Project Based Learning).
                </p>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 25px;">
                    <!-- Web Dev -->
                    <div class="neo-card neo-card-hover neo-card-white" style="border-width: 3px; box-shadow: 5px 5px 0px var(--neo-dark);">
                        <div style="width: 50px; height: 50px; background: var(--neo-yellow); border: 2px solid var(--neo-dark); border-radius: 8px; display: flex; align-items: center; justify-content: center; box-shadow: 2px 2px 0px var(--neo-dark); margin-bottom: 20px; font-size: 1.5rem;">
                            <i class='bx bx-code-alt'></i>
                        </div>
                        <h4 style="font-size: 1.15rem; margin-bottom: 10px; color: var(--neo-dark);">Web Development</h4>
                        <p style="font-size: 0.85rem; font-weight: 500; color: #555; line-height: 1.6;">Mempelajari pembuatan website dinamis menggunakan HTML, CSS, JavaScript, database, serta framework Laravel.</p>
                    </div>

                    <!-- Mobile Apps -->
                    <div class="neo-card neo-card-hover neo-card-white" style="border-width: 3px; box-shadow: 5px 5px 0px var(--neo-dark);">
                        <div style="width: 50px; height: 50px; background: var(--neo-cyan); border: 2px solid var(--neo-dark); border-radius: 8px; display: flex; align-items: center; justify-content: center; box-shadow: 2px 2px 0px var(--neo-dark); margin-bottom: 20px; font-size: 1.5rem;">
                            <i class='bx bx-mobile-alt'></i>
                        </div>
                        <h4 style="font-size: 1.15rem; margin-bottom: 10px; color: var(--neo-dark);">Mobile Apps</h4>
                        <p style="font-size: 0.85rem; font-weight: 500; color: #555; line-height: 1.6;">Mengembangkan aplikasi berbasis Android dan iOS yang responsif, cepat, dan user-friendly menggunakan platform terkini.</p>
                    </div>

                    <!-- Database -->
                    <div class="neo-card neo-card-hover neo-card-white" style="border-width: 3px; box-shadow: 5px 5px 0px var(--neo-dark);">
                        <div style="width: 50px; height: 50px; background: var(--neo-pink); border: 2px solid var(--neo-dark); border-radius: 8px; display: flex; align-items: center; justify-content: center; box-shadow: 2px 2px 0px var(--neo-dark); margin-bottom: 20px; font-size: 1.5rem;">
                            <i class='bx bx-data'></i>
                        </div>
                        <h4 style="font-size: 1.15rem; margin-bottom: 10px; color: var(--neo-dark);">Database Admin</h4>
                        <p style="font-size: 0.85rem; font-weight: 500; color: #555; line-height: 1.6;">Pengelolaan basis data relasional berkecepatan tinggi menggunakan SQL Server dan database non-relasional.</p>
                    </div>

                    <!-- UI/UX -->
                    <div class="neo-card neo-card-hover neo-card-white" style="border-width: 3px; box-shadow: 5px 5px 0px var(--neo-dark);">
                        <div style="width: 50px; height: 50px; background: var(--neo-green); border: 2px solid var(--neo-dark); border-radius: 8px; display: flex; align-items: center; justify-content: center; box-shadow: 2px 2px 0px var(--neo-dark); margin-bottom: 20px; font-size: 1.5rem;">
                            <i class='bx bx-analyse'></i>
                        </div>
                        <h4 style="font-size: 1.15rem; margin-bottom: 10px; color: var(--neo-dark);">UI/UX Design</h4>
                        <p style="font-size: 0.85rem; font-weight: 500; color: #555; line-height: 1.6;">Merancang tampilan antarmuka pengguna estetis dan mengedepankan pengalaman pengguna intuitif.</p>
                    </div>
                </div>
            </div>

            <!-- Right: Sidebar Info -->
            <div style="flex: 1; min-width: 300px; position: sticky; top: 120px;" class="fade-in">
                <div class="neo-card neo-card-blue" style="border-width: 4px; box-shadow: 8px 8px 0px var(--neo-dark); color: var(--neo-white); padding: 35px;">
                    <h3 style="color: var(--neo-yellow); margin-bottom: 20px; -webkit-text-stroke: 1px #000;">Berita & Info Jurusan</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 15px 0; border-bottom: 1px dashed rgba(255,255,255,0.25);">
                            <a href="#" style="color: var(--neo-white); font-weight: 700; font-size: 0.95rem; display: flex; align-items: center; gap: 10px;">
                                <i class='bx bx-chevron-right' style="font-size: 1.2rem; color: var(--neo-yellow);"></i> Workshop Laravel 11 Bersama Industri
                            </a>
                        </li>
                        <li style="padding: 15px 0; border-bottom: 1px dashed rgba(255,255,255,0.25);">
                            <a href="#" style="color: var(--neo-white); font-weight: 700; font-size: 0.95rem; display: flex; align-items: center; gap: 10px;">
                                <i class='bx bx-chevron-right' style="font-size: 1.2rem; color: var(--neo-yellow);"></i> Lomba Kompetensi Siswa (LKS) Web Tech
                            </a>
                        </li>
                        <li style="padding: 15px 0; border-bottom: 1px dashed rgba(255,255,255,0.25);">
                            <a href="#" style="color: var(--neo-white); font-weight: 700; font-size: 0.95rem; display: flex; align-items: center; gap: 10px;">
                                <i class='bx bx-chevron-right' style="font-size: 1.2rem; color: var(--neo-yellow);"></i> Sertifikasi Oracle Internasional
                            </a>
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}" class="neo-btn neo-btn-yellow" style="width: 100%; margin-top: 30px; justify-content: center; color: var(--neo-dark);">Daftar RPL Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Facilities Section -->
<section style="padding: 100px 0; background-color: #ffffff;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 60px;">
            <span class="neo-badge neo-badge-green" style="margin-bottom: 15px;">FASILITAS UTAMA</span>
            <h2 style="font-size: 2.5rem; margin-bottom: 10px;">Laboratorium Rekayasa Perangkat Lunak</h2>
            <p style="font-size: 1.1rem; font-weight: 600; color: #555;">Laboratorium praktek yang lengkap dan didesain nyaman untuk menunjang produktivitas ngoding siswa.</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px;">
            <!-- Lab 1 -->
            <div class="neo-card neo-card-white" style="border-width: 3px; box-shadow: 6px 6px 0px var(--neo-cyan); padding: 35px;">
                <h4 style="color: var(--neo-dark); margin-bottom: 15px; display: flex; align-items: center; gap: 12px; font-size: 1.25rem;">
                    <div style="width: 40px; height: 40px; background: var(--neo-cyan); border: 2px solid var(--neo-dark); border-radius: 6px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                        <i class='bx bx-desktop'></i>
                    </div>
                    Lab Komputer Modern
                </h4>
                <p style="color: #555; line-height: 1.7; font-size: 0.95rem; font-weight: 500;">
                    Dilengkapi dengan komputer spesifikasi tinggi generasi terbaru serta aplikasi pendukung development lengkap seperti Visual Studio Code, Android Studio, dan database manager profesional.
                </p>
            </div>

            <!-- Lab 2 -->
            <div class="neo-card neo-card-white" style="border-width: 3px; box-shadow: 6px 6px 0px var(--neo-pink); padding: 35px;">
                <h4 style="color: var(--neo-dark); margin-bottom: 15px; display: flex; align-items: center; gap: 12px; font-size: 1.25rem;">
                    <div style="width: 40px; height: 40px; background: var(--neo-pink); border: 2px solid var(--neo-dark); border-radius: 6px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                        <i class='bx bx-wifi'></i>
                    </div>
                    Internet Fiber Optic
                </h4>
                <p style="color: #555; line-height: 1.7; font-size: 0.95rem; font-weight: 500;">
                    Koneksi internet fiber optik berkecepatan tinggi tanpa hambatan di seluruh area laboratorium untuk mempermudah siswa melakukan riset modul pembelajaran dan kolaborasi online.
                </p>
            </div>

            <!-- Lab 3 -->
            <div class="neo-card neo-card-white" style="border-width: 3px; box-shadow: 6px 6px 0px var(--neo-yellow); padding: 35px;">
                <h4 style="color: var(--neo-dark); margin-bottom: 15px; display: flex; align-items: center; gap: 12px; font-size: 1.25rem;">
                    <div style="width: 40px; height: 40px; background: var(--neo-yellow); border: 2px solid var(--neo-dark); border-radius: 6px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                        <i class='bx bx-group'></i>
                    </div>
                    Area Kolaborasi Inovatif
                </h4>
                <p style="color: #555; line-height: 1.7; font-size: 0.95rem; font-weight: 500;">
                    Ruangan kolaborasi dan diskusi yang representatif untuk mendukung siswa belajar bekerjasama dalam tim melakukan brainstorming pemecahan masalah coding proyek.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
