@extends('layouts.app')

@section('title', 'Teknik Kendaraan Ringan (TKR)')

@section('content')
<section style="padding: 100px 0; background: #fefce8;">
    <div class="container">
        <div style="display: flex; flex-wrap: wrap; gap: 50px; align-items: flex-start;">
            <div style="flex: 1.5; min-width: 300px;">
                <div style="display: inline-block; padding: 10px 20px; background: rgba(181, 145, 41, 0.1); color: #854d0e; border-radius: 50px; font-weight: 600; font-size: 0.8rem; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 1px;">
                    Program Keahlian
                </div>
                <h1 style="color: var(--primary-color); font-size: 3rem; font-weight: 800; margin-bottom: 30px;">Teknik Kendaraan Ringan (TKR)</h1>
                <p style="font-size: 1.2rem; line-height: 1.8; color: #4b5563; margin-bottom: 40px;">
                    Teknik Kendaraan Ringan (TKR) merupakan kompetensi keahlian pada bidang studi keahlian teknologi dan rekayasa yang menekankan pada bidang jasa perbaikan kendaraan ringan (mobil). Siswa dibekali dengan keterampilan teknis mulai dari dasar hingga tingkat lanjut dalam perawatan otomotif.
                </p>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                    <div style="background: var(--white); padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
                        <i class='bx bxs-wrench' style="font-size: 2.5rem; color: #854d0e; margin-bottom: 20px;"></i>
                        <h4 style="color: var(--primary-color); margin-bottom: 15px;">Maintenance & Service</h4>
                        <p style="font-size: 0.9rem; color: #6b7280;">Melakukan perawatan rutin (tune-up) dan servis berkala pada berbagai jenis mesin kendaraan ringan.</p>
                    </div>
                    <div style="background: var(--white); padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
                        <i class='bx bx-equalizer' style="font-size: 2.5rem; color: #854d0e; margin-bottom: 20px;"></i>
                        <h4 style="color: var(--primary-color); margin-bottom: 15px;">Electrical System</h4>
                        <p style="font-size: 0.9rem; color: #6b7280;">Mempelajari sistem kelistrikan otomotif, pengapian, dan panel kontrol elektronik modern.</p>
                    </div>
                    <div style="background: var(--white); padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
                        <i class='bx bxs-tachometer' style="font-size: 2.5rem; color: #854d0e; margin-bottom: 20px;"></i>
                        <h4 style="color: var(--primary-color); margin-bottom: 15px;">Chassis & Drive Train</h4>
                        <p style="font-size: 0.9rem; color: #6b7280;">Memahami cara kerja sistem rem, suspensi, kemudi, dan transmisi kendaraan.</p>
                    </div>
                    <div style="background: var(--white); padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
                        <i class='bx bx-scan' style="font-size: 2.5rem; color: #854d0e; margin-bottom: 20px;"></i>
                        <h4 style="color: var(--primary-color); margin-bottom: 15px;">Auto Diagnostic</h4>
                        <p style="font-size: 0.9rem; color: #6b7280;">Menggunakan alat pemindai elektronik untuk mendeteksi kerusakan pada mesin injeksi modern (EFI).</p>
                    </div>
                </div>
            </div>

            <div style="flex: 1; min-width: 300px; position: sticky; top: 120px;">
                <div style="background: #854d0e; color: var(--white); padding: 40px; border-radius: 30px; box-shadow: 0 20px 40px rgba(133, 77, 14, 0.2);">
                    <h3 style="color: #fef3c7; margin-bottom: 20px;">Kerjasama Industri</h3>
                    <p style="font-size: 0.9rem; opacity: 0.9; margin-bottom: 25px;">TKR SMK Assalaam memiliki kelas binaan khusus dari ATPM terkemuka.</p>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 10px;">
                            <i class='bx bx-check-shield' style="color: #fef3c7;"></i> Mitsubishi Motors Class
                        </li>
                        <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 10px;">
                            <i class='bx bx-check-shield' style="color: #fef3c7;"></i> Toyota Authorized Hub
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-secondary" style="width: 100%; margin-top: 30px; text-align: center; background: #fef3c7; color: #854d0e;">Info Pendaftaran</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Facilities -->
<section style="padding: 100px 0; background: var(--white);">
    <div class="container">
        <h2 style="color: var(--primary-color); text-align: center; font-size: 2.5rem; margin-bottom: 60px;">Fasilitas Bengkel Utama</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px;">
            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: #fff7ed; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px;">
                    <i class='bx bx-building-house' style="font-size: 2.5rem; color: #f97316;"></i>
                </div>
                <h4 style="margin-bottom: 15px;">Standar Bengkel Resmi</h4>
                <p style="color: #666; font-size: 0.95rem;">Ruang praktik yang dirancang menyerupai standar bengkel resmi (Authorized Dealer).</p>
            </div>
            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: #fff7ed; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px;">
                    <i class='bx bx-cog' style="font-size: 2.5rem; color: #f97316;"></i>
                </div>
                <h4 style="margin-bottom: 15px;">Unit Kendaraan Praktik</h4>
                <p style="color: #666; font-size: 0.95rem;">Tersedia berbagai unit mobil terbaru untuk praktik bongkar pasang dan diagnosa.</p>
            </div>
            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: #fff7ed; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px;">
                    <i class='bx bx-certification' style="font-size: 2.5rem; color: #f97316;"></i>
                </div>
                <h4 style="margin-bottom: 15px;">Sertifikasi Industri</h4>
                <p style="color: #666; font-size: 0.95rem;">Lulusan TKR dibekali dengan sertifikat keahlian langsung dari partner industri.</p>
            </div>
        </div>
    </div>
</section>
@endsection
