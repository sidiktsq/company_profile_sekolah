@extends('layouts.app')

@section('title', 'Teknik Kendaraan Ringan (TKR)')

@section('content')
<!-- Neobrutalist Page Header -->
<header class="page-header-neo" style="background-color: var(--neo-orange);">
    <div class="container fade-in">
        <span class="neo-badge neo-badge-yellow" style="margin-bottom: 15px;">KOMPETENSI KEAHLIAN</span>
        <h1 style="-webkit-text-stroke: 1.5px var(--neo-dark); text-shadow: 4px 4px 0px var(--neo-white);">Teknik Kendaraan Ringan (TKR)</h1>
        <p>Menyiapkan teknisi mobil handal, ahli kelistrikan otomotif modern, dan diagnostik kendaraan roda empat.</p>
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
                <span class="neo-badge neo-badge-pink" style="margin-bottom: 15px;">FOKUS KOMPETENSI</span>
                <h2 style="font-size: 2rem; margin-bottom: 25px; color: var(--neo-dark);">Apa Yang Dipelajari?</h2>
                <p style="font-size: 1.1rem; line-height: 1.7; font-weight: 500; color: #4A4A4A; margin-bottom: 40px; background: #ffffff; padding: 20px; border: 3px solid var(--neo-dark); border-radius: 8px; box-shadow: 4px 4px 0px var(--neo-dark);">
                    Kurikulum TKR SMK Assalaam menekankan pada pembekalan keahlian teknis perawatan dan servis berkala kendaraan roda empat. Siswa dilatih langsung menangani trouble-shooting mesin karburator hingga mesin injeksi canggih EFI.
                </p>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 25px;">
                    <!-- Maintenance -->
                    <div class="neo-card neo-card-hover neo-card-white" style="border-width: 3px; box-shadow: 5px 5px 0px var(--neo-dark);">
                        <div style="width: 50px; height: 50px; background: var(--neo-yellow); border: 2px solid var(--neo-dark); border-radius: 8px; display: flex; align-items: center; justify-content: center; box-shadow: 2px 2px 0px var(--neo-dark); margin-bottom: 20px; font-size: 1.5rem;">
                            <i class='bx bxs-wrench'></i>
                        </div>
                        <h4 style="font-size: 1.15rem; margin-bottom: 10px; color: var(--neo-dark);">Maintenance & Service</h4>
                        <p style="font-size: 0.85rem; font-weight: 500; color: #555; line-height: 1.6;">Melakukan perawatan berkala, tune-up mesin mobil, serta servis saringan udara oli berkala standar industri.</p>
                    </div>

                    <!-- Electrical System -->
                    <div class="neo-card neo-card-hover neo-card-white" style="border-width: 3px; box-shadow: 5px 5px 0px var(--neo-dark);">
                        <div style="width: 50px; height: 50px; background: var(--neo-cyan); border: 2px solid var(--neo-dark); border-radius: 8px; display: flex; align-items: center; justify-content: center; box-shadow: 2px 2px 0px var(--neo-dark); margin-bottom: 20px; font-size: 1.5rem;">
                            <i class='bx bx-equalizer'></i>
                        </div>
                        <h4 style="font-size: 1.15rem; margin-bottom: 10px; color: var(--neo-dark);">Electrical System</h4>
                        <p style="font-size: 0.85rem; font-weight: 500; color: #555; line-height: 1.6;">Mempelajari kelistrikan bodi mobil, starter pengisian aki, sistem pengapian elektronik, serta panel bodi kendaraan.</p>
                    </div>

                    <!-- Chassis -->
                    <div class="neo-card neo-card-hover neo-card-white" style="border-width: 3px; box-shadow: 5px 5px 0px var(--neo-dark);">
                        <div style="width: 50px; height: 50px; background: var(--neo-pink); border: 2px solid var(--neo-dark); border-radius: 8px; display: flex; align-items: center; justify-content: center; box-shadow: 2px 2px 0px var(--neo-dark); margin-bottom: 20px; font-size: 1.5rem;">
                            <i class='bx bxs-tachometer'></i>
                        </div>
                        <h4 style="font-size: 1.15rem; margin-bottom: 10px; color: var(--neo-dark);">Chassis & Drive Train</h4>
                        <p style="font-size: 0.85rem; font-weight: 500; color: #555; line-height: 1.6;">Memahami konstruksi sistem kemudi, transmisi manual/otomatis, suspensi peredam kejut, serta sistem rem cakram.</p>
                    </div>

                    <!-- Diagnostic -->
                    <div class="neo-card neo-card-hover neo-card-white" style="border-width: 3px; box-shadow: 5px 5px 0px var(--neo-dark);">
                        <div style="width: 50px; height: 50px; background: var(--neo-green); border: 2px solid var(--neo-dark); border-radius: 8px; display: flex; align-items: center; justify-content: center; box-shadow: 2px 2px 0px var(--neo-dark); margin-bottom: 20px; font-size: 1.5rem;">
                            <i class='bx bx-scan'></i>
                        </div>
                        <h4 style="font-size: 1.15rem; margin-bottom: 10px; color: var(--neo-dark);">Auto Diagnostic</h4>
                        <p style="font-size: 0.85rem; font-weight: 500; color: #555; line-height: 1.6;">Mendiagnosa trouble-shooting sensor dan aktuator mobil injeksi modern (EFI) menggunakan scanner digital canggih.</p>
                    </div>
                </div>
            </div>

            <!-- Right: Sidebar Info -->
            <div style="flex: 1; min-width: 300px; position: sticky; top: 120px;" class="fade-in">
                <div class="neo-card neo-card-orange" style="border-width: 4px; box-shadow: 8px 8px 0px var(--neo-dark); color: var(--neo-white); padding: 35px;">
                    <h3 style="color: var(--neo-yellow); margin-bottom: 20px; -webkit-text-stroke: 1px #000;">Kerjasama Industri</h3>
                    <p style="font-size: 0.95rem; font-weight: 600; line-height: 1.6; margin-bottom: 25px;">TKR SMK Assalaam memiliki kelas binaan khusus dan didukung ATPM terkemuka.</p>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 15px 0; border-bottom: 1px dashed rgba(255,255,255,0.25); display: flex; align-items: center; gap: 12px; font-weight: 700;">
                            <i class='bx bx-check-shield' style="color: var(--neo-yellow); font-size: 1.3rem;"></i> Mitsubishi Motors Class
                        </li>
                        <li style="padding: 15px 0; border-bottom: 1px dashed rgba(255,255,255,0.25); display: flex; align-items: center; gap: 12px; font-weight: 700;">
                            <i class='bx bx-check-shield' style="color: var(--neo-yellow); font-size: 1.3rem;"></i> Toyota Authorized Hub
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}" class="neo-btn neo-btn-yellow" style="width: 100%; margin-top: 30px; justify-content: center; color: var(--neo-dark);">Info Pendaftaran TKR</a>
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
            <h2 style="font-size: 2.5rem; margin-bottom: 10px;">Fasilitas Bengkel Utama TKR</h2>
            <p style="font-size: 1.1rem; font-weight: 600; color: #555;">Bengkel praktek yang luas berstandar authorized dealer otomotif untuk menjamin kompetensi handal siswa.</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px;">
            <!-- Facility 1 -->
            <div class="neo-card neo-card-white" style="border-width: 3px; box-shadow: 6px 6px 0px var(--neo-orange); padding: 35px; text-align: center;">
                <div style="width: 70px; height: 70px; background: #FFF7ED; border: 2.5px solid var(--neo-dark); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 3px 3px 0px var(--neo-dark); margin: 0 auto 25px; font-size: 2.2rem; color: #f97316;">
                    <i class='bx bx-building-house'></i>
                </div>
                <h4 style="margin-bottom: 15px; font-size: 1.25rem;">Standar Bengkel Resmi</h4>
                <p style="color: #555; line-height: 1.7; font-size: 0.95rem; font-weight: 500;">
                    Tata letak bengkel praktek didesain menyerupai standar bengkel resmi (Authorized Dealer) lengkap dengan area penerimaan, servis bay, dan tool room rapi.
                </p>
            </div>

            <!-- Facility 2 -->
            <div class="neo-card neo-card-white" style="border-width: 3px; box-shadow: 6px 6px 0px var(--neo-yellow); padding: 35px; text-align: center;">
                <div style="width: 70px; height: 70px; background: #FEF3C7; border: 2.5px solid var(--neo-dark); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 3px 3px 0px var(--neo-dark); margin: 0 auto 25px; font-size: 2.2rem; color: #d97706;">
                    <i class='bx bx-cog'></i>
                </div>
                <h4 style="margin-bottom: 15px; font-size: 1.25rem;">Unit Kendaraan Praktik</h4>
                <p style="color: #555; line-height: 1.7; font-size: 0.95rem; font-weight: 500;">
                    Tersedia berbagai macam unit kendaraan mobil praktek keluaran terbaru untuk menunjang praktek trouble-shooting, bongkar pasang, dan kelistrikan bodi mobil.
                </p>
            </div>

            <!-- Facility 3 -->
            <div class="neo-card neo-card-white" style="border-width: 3px; box-shadow: 6px 6px 0px var(--neo-green); padding: 35px; text-align: center;">
                <div style="width: 70px; height: 70px; background: #DCFCE7; border: 2.5px solid var(--neo-dark); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 3px 3px 0px var(--neo-dark); margin: 0 auto 25px; font-size: 2.2rem; color: #16a34a;">
                    <i class='bx bx-certification'></i>
                </div>
                <h4 style="margin-bottom: 15px; font-size: 1.25rem;">Sertifikasi Industri</h4>
                <p style="color: #555; line-height: 1.7; font-size: 0.95rem; font-weight: 500;">
                    Lulusan TKR dibekali dengan sertifikat kompetensi keahlian yang dikeluarkan langsung oleh mitra industri utama sehingga mempercepat penyerapan kerja.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
