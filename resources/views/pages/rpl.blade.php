@extends('layouts.app')

@section('title', 'Rekayasa Perangkat Lunak (RPL)')

@section('content')
<section style="padding: 100px 0; background: #f8fafc;">
    <div class="container">
        <div style="display: flex; flex-wrap: wrap; gap: 50px; align-items: flex-start;">
            <div style="flex: 1.5; min-width: 300px;">
                <div style="display: inline-block; padding: 10px 20px; background: rgba(0, 51, 102, 0.1); color: var(--primary-color); border-radius: 50px; font-weight: 600; font-size: 0.8rem; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 1px;">
                    Program Keahlian
                </div>
                <h1 style="color: var(--primary-color); font-size: 3rem; font-weight: 800; margin-bottom: 30px;">Rekayasa Perangkat Lunak (RPL)</h1>
                <p style="font-size: 1.2rem; line-height: 1.8; color: #4b5563; margin-bottom: 40px;">
                    Rekayasa Perangkat Lunak (RPL) adalah salah satu kompetensi keahlian dalam bidang Teknologi Komunikasi dan Informatika yang secara khusus mempelajari tentang cara-cara pengembangaan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas.
                </p>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                    <div style="background: var(--white); padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
                        <i class='bx bx-code-alt' style="font-size: 2.5rem; color: var(--secondary-color); margin-bottom: 20px;"></i>
                        <h4 style="color: var(--primary-color); margin-bottom: 15px;">Web Development</h4>
                        <p style="font-size: 0.9rem; color: #6b7280;">Mempelajari pembuatan website modern menggunakan teknologi terbaru seperti HTML, CSS, JavaScript, dan framework Laravel.</p>
                    </div>
                    <div style="background: var(--white); padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
                        <i class='bx bx-mobile-alt' style="font-size: 2.5rem; color: var(--secondary-color); margin-bottom: 20px;"></i>
                        <h4 style="color: var(--primary-color); margin-bottom: 15px;">Mobile Apps</h4>
                        <p style="font-size: 0.9rem; color: #6b7280;">Mengembangkan aplikasi Android dan iOS yang responsif dan user-friendly.</p>
                    </div>
                    <div style="background: var(--white); padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
                        <i class='bx bx-data' style="font-size: 2.5rem; color: var(--secondary-color); margin-bottom: 20px;"></i>
                        <h4 style="color: var(--primary-color); margin-bottom: 15px;">Database Management</h4>
                        <p style="font-size: 0.9rem; color: #6b7280;">Pengelolaan data yang efisien menggunakan MySQL dan sistem database profesional lainnya.</p>
                    </div>
                    <div style="background: var(--white); padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
                        <i class='bx bx-analyse' style="font-size: 2.5rem; color: var(--secondary-color); margin-bottom: 20px;"></i>
                        <h4 style="color: var(--primary-color); margin-bottom: 15px;">UI/UX Design</h4>
                        <p style="font-size: 0.9rem; color: #6b7280;">Merancang antarmuka pengguna yang estetis dan pengalaman pengguna yang intuitif.</p>
                    </div>
                </div>
            </div>

            <div style="flex: 1; min-width: 300px; position: sticky; top: 120px;">
                <div style="background: var(--primary-color); color: var(--white); padding: 40px; border_radius: 30px; box-shadow: 0 20px 40px rgba(0, 51, 102, 0.2);">
                    <h3 style="color: var(--secondary-color); margin-bottom: 20px;">Berita & Info Jurusan</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <a href="#" style="color: var(--white); opacity: 0.8; font-size: 0.95rem; display: flex; align-items: center; gap: 10px;">
                                <i class='bx bx-chevron-right'></i> Workshop Laravel 11 Bersama Industri
                            </a>
                        </li>
                        <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <a href="#" style="color: var(--white); opacity: 0.8; font-size: 0.95rem; display: flex; align-items: center; gap: 10px;">
                                <i class='bx bx-chevron-right'></i> Lomba Kompetensi Siswa (LKS) Web Tech
                            </a>
                        </li>
                        <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <a href="#" style="color: var(--white); opacity: 0.8; font-size: 0.95rem; display: flex; align-items: center; gap: 10px;">
                                <i class='bx bx-chevron-right'></i> Sertifikat Kompetensi Internasional Oracle
                            </a>
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-secondary" style="width: 100%; margin-top: 30px; text-align: center;">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Fasilitas Utama Lab -->
<section style="padding: 100px 0; background: var(--white);">
    <div class="container">
        <h2 style="color: var(--primary-color); text-align: center; font-size: 2.5rem; margin-bottom: 60px;">Fasilitas Utama Lab</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px;">
            <div style="padding: 40px; border-radius: 20px; border: 1px solid #efefef; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <h4 style="color: var(--secondary-color); margin-bottom: 20px; display: flex; align-items: center; gap: 10px;">
                    <i class='bx bx-desktop' style="font-size: 2rem; color: var(--primary-color);"></i>
                    Lab Komputer Modern
                </h4>
                <p style="color: #666; line-height: 1.7;">Dilengkapi dengan perangkat keras terbaru dan software pendukung untuk pengembangan aplikasi, seperti Visual Studio Code, Android Studio, dan berbagai framework pengembangan terupdate.</p>
            </div>
            <div style="padding: 40px; border-radius: 20px; border: 1px solid #efefef; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <h4 style="color: var(--secondary-color); margin-bottom: 20px; display: flex; align-items: center; gap: 10px;">
                    <i class='bx bx-wifi' style="font-size: 2rem; color: var(--primary-color);"></i>
                    Jaringan Berkecepatan Tinggi
                </h4>
                <p style="color: #666; line-height: 1.7;">Didukung dengan koneksi internet fiber optik berkecepatan tinggi dan jaringan lokal yang stabil untuk mendukung proses pembelajaran dan pengembangan proyek secara optimal.</p>
            </div>
            <div style="padding: 40px; border-radius: 20px; border: 1px solid #efefef; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <h4 style="color: var(--secondary-color); margin-bottom: 20px; display: flex; align-items: center; gap: 10px;">
                    <i class='bx bx-group' style="font-size: 2rem; color: var(--primary-color);"></i>
                    Area Kolaborasi Inovatif
                </h4>
                <p style="color: #666; line-height: 1.7;">Ruang diskusi dan kerja kelompok yang nyaman dengan fasilitas presentasi interaktif untuk memfasilitasi kolaborasi dan brainstorming dalam pengembangan proyek.</p>
            </div>
        </div>
    </div>
</section>
@endsection
