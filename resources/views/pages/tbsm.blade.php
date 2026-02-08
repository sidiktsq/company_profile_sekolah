@extends('layouts.app')

@section('title', 'Teknik Bisnis Sepeda Motor (TBSM)')

@section('content')
<section style="padding: 100px 0; background: #eff6ff;">
    <div class="container">
        <div style="display: flex; flex-wrap: wrap; gap: 50px; align-items: flex-start;">
            <div style="flex: 1.5; min-width: 300px;">
                <div style="display: inline-block; padding: 10px 20px; background: rgba(30, 64, 175, 0.1); color: #1e40af; border-radius: 50px; font-weight: 600; font-size: 0.8rem; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 1px;">
                    Program Keahlian
                </div>
                <h1 style="color: var(--primary-color); font-size: 3rem; font-weight: 800; margin-bottom: 30px;">Teknik Bisnis Sepeda Motor (TBSM)</h1>
                <p style="font-size: 1.2rem; line-height: 1.8; color: #4b5563; margin-bottom: 40px;">
                    Teknik Bisnis Sepeda Motor (TBSM) adalah kompetensi keahlian yang fokus pada keterampilan pelayanan jasa perbaikan dan perawatan sepeda motor. Siswa dididik untuk menjadi mekanik profesional dan memiliki jiwa kewirausahaan (entrepreneurship) di bidang otomotif roda dua.
                </p>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                    <div style="background: var(--white); padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
                        <i class='bx bx-cycling' style="font-size: 2.5rem; color: #1e40af; margin-bottom: 20px;"></i>
                        <h4 style="color: var(--primary-color); margin-bottom: 15px;">Motorcycle Engine</h4>
                        <p style="font-size: 0.9rem; color: #6b7280;">Mendalami sistem mesin 2-tak dan 4-tak, serta teknologi Fuel Injection (FI) terbaru.</p>
                    </div>
                    <div style="background: var(--white); padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
                        <i class='bx bx-bolt-circle' style="font-size: 2.5rem; color: #1e40af; margin-bottom: 20px;"></i>
                        <h4 style="color: var(--primary-color); margin-bottom: 15px;">Electric & Control</h4>
                        <p style="font-size: 0.9rem; color: #6b7280;">Pemeliharaan sistem kelistrikan, sistem starter, dan manajemen mesin elektronik pada motor.</p>
                    </div>
                    <div style="background: var(--white); padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
                        <i class='bx bx-store' style="font-size: 2.5rem; color: #1e40af; margin-bottom: 20px;"></i>
                        <h4 style="color: var(--primary-color); margin-bottom: 15px;">Workshop Business</h4>
                        <p style="font-size: 0.9rem; color: #6b7280;">Mempelajari manajemen bengkel, pelayanan pelanggan, dan strategi bisnis suku cadang.</p>
                    </div>
                    <div style="background: var(--white); padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
                        <i class='bx bx-shield-quarter' style="font-size: 2.5rem; color: #1e40af; margin-bottom: 20px;"></i>
                        <h4 style="color: var(--primary-color); margin-bottom: 15px;">Safety & Driving</h4>
                        <p style="font-size: 0.9rem; color: #6b7280;">Edukasi tentang keselamatan berkendara (Safety Riding) dan standar keamanan kerja di bengkel.</p>
                    </div>
                </div>
            </div>

            <div style="flex: 1; min-width: 300px; position: sticky; top: 120px;">
                <div style="background: #1e40af; color: var(--white); padding: 40px; border-radius: 30px; box-shadow: 0 20px 40px rgba(30, 64, 175, 0.2);">
                    <h3 style="color: #bfdbfe; margin-bottom: 20px;">Honda Career Path</h3>
                    <p style="font-size: 0.9rem; opacity: 0.9; margin-bottom: 25px;">Program khusus kerjasama dengan PT Astra Honda Motor (AHM) untuk penyaluran lulusan.</p>
                    <div style="background: rgba(255,255,255,0.1); padding: 20px; border-radius: 15px; border-left: 4px solid #facc15;">
                        <p style="font-size: 0.85rem; font-style: italic;">"Lulusan TBSM SMK Assalaam diprioritaskan bekerja di jaringan AHASS di seluruh Jawa Barat."</p>
                    </div>
                    <a href="{{ route('contact') }}" class="btn btn-secondary" style="width: 100%; margin-top: 30px; text-align: center; background: #facc15; color: #1e40af;">Gabung Bersama Kami</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Learning Environment -->
<section style="padding: 100px 0; background: var(--white);">
    <div class="container">
        <h2 style="color: var(--primary-color); text-align: center; font-size: 2.5rem; margin-bottom: 60px;">Link & Match Industri</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <div style="padding: 30px; background: #f8fafc; border-radius: 20px;">
                <i class='bx bx-briefcase' style="font-size: 2rem; color: var(--primary-color); margin-bottom: 15px;"></i>
                <h5 style="margin-bottom: 10px;">Magang Industri</h5>
                <p style="font-size: 0.85rem; color: #64748b;">Praktik Kerja Lapangan di bengkel resmi AHASS selama 3-6 bulan untuk pengalaman nyata.</p>
            </div>
            <div style="padding: 30px; background: #f8fafc; border-radius: 20px;">
                <i class='bx bx-user-voice' style="font-size: 2rem; color: var(--primary-color); margin-bottom: 15px;"></i>
                <h5 style="margin-bottom: 10px;">Guru Tamu</h5>
                <p style="font-size: 0.85rem; color: #64748b;">Mendatangkan instruktur ahli langsung dari industri otomotif secara berkala.</p>
            </div>
            <div style="padding: 30px; background: #f8fafc; border-radius: 20px;">
                <i class='bx bx-id-card' style="font-size: 2rem; color: var(--primary-color); margin-bottom: 15px;"></i>
                <h5 style="margin-bottom: 10px;">Uji Kompetensi</h5>
                <p style="font-size: 0.85rem; color: #64748b;">Ujian akhir yang diuji langsung oleh instruktur dari AHM untuk validasi keahlian.</p>
            </div>
        </div>
    </div>
</section>
@endsection
