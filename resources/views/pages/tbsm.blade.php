@extends('layouts.app')

@section('title', 'Teknik Bisnis Sepeda Motor (TBSM)')

@section('content')
<!-- Neobrutalist Page Header -->
<header class="page-header-neo" style="background-color: var(--neo-blue);">
    <div class="container fade-in">
        <span class="neo-badge neo-badge-yellow" style="margin-bottom: 15px;">KOMPETENSI KEAHLIAN</span>
        <h1 style="-webkit-text-stroke: 1.5px var(--neo-dark); text-shadow: 4px 4px 0px var(--neo-white); color: var(--neo-white);">Teknik Bisnis Sepeda Motor (TBSM)</h1>
        <p style="color: var(--neo-white);">Mencetak mekanik roda dua profesional berstandar AHM, handal dalam mesin injeksi FI, dan mandiri berwirausaha.</p>
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
                    Kurikulum TBSM SMK Assalaam berfokus pada pembekalan keahlian servis berkala sepeda motor, sistem kelistrikan injeksi modern, sasis roda dua, serta dibekali dengan kemampuan manajemen bisnis bengkel dan safety riding.
                </p>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 25px;">
                    <!-- Engine -->
                    <div class="neo-card neo-card-hover neo-card-white" style="border-width: 3px; box-shadow: 5px 5px 0px var(--neo-dark);">
                        <div style="width: 50px; height: 50px; background: var(--neo-yellow); border: 2px solid var(--neo-dark); border-radius: 8px; display: flex; align-items: center; justify-content: center; box-shadow: 2px 2px 0px var(--neo-dark); margin-bottom: 20px; font-size: 1.5rem;">
                            <i class='bx bx-cycling'></i>
                        </div>
                        <h4 style="font-size: 1.15rem; margin-bottom: 10px; color: var(--neo-dark);">Motorcycle Engine</h4>
                        <p style="font-size: 0.85rem; font-weight: 500; color: #555; line-height: 1.6;">Mendalami sistem mesin 2-tak dan 4-tak, perbaikan silinder kop, serta teknologi Fuel Injection (FI) modern.</p>
                    </div>

                    <!-- Electric -->
                    <div class="neo-card neo-card-hover neo-card-white" style="border-width: 3px; box-shadow: 5px 5px 0px var(--neo-dark);">
                        <div style="width: 50px; height: 50px; background: var(--neo-cyan); border: 2px solid var(--neo-dark); border-radius: 8px; display: flex; align-items: center; justify-content: center; box-shadow: 2px 2px 0px var(--neo-dark); margin-bottom: 20px; font-size: 1.5rem;">
                            <i class='bx bx-bolt-circle'></i>
                        </div>
                        <h4 style="font-size: 1.15rem; margin-bottom: 10px; color: var(--neo-dark);">Electric & Control</h4>
                        <p style="font-size: 0.85rem; font-weight: 500; color: #555; line-height: 1.6;">Pemeliharaan sistem pengapian, starter kelistrikan motor, sensor kontrol emisi, serta kelistrikan sasis bodi motor.</p>
                    </div>

                    <!-- Business -->
                    <div class="neo-card neo-card-hover neo-card-white" style="border-width: 3px; box-shadow: 5px 5px 0px var(--neo-dark);">
                        <div style="width: 50px; height: 50px; background: var(--neo-pink); border: 2px solid var(--neo-dark); border-radius: 8px; display: flex; align-items: center; justify-content: center; box-shadow: 2px 2px 0px var(--neo-dark); margin-bottom: 20px; font-size: 1.5rem;">
                            <i class='bx bx-store'></i>
                        </div>
                        <h4 style="font-size: 1.15rem; margin-bottom: 10px; color: var(--neo-dark);">Workshop Business</h4>
                        <p style="font-size: 0.85rem; font-weight: 500; color: #555; line-height: 1.6;">Mempelajari tata administrasi bengkel, cara melayani pelanggan ramah, serta manajemen penjualan suku cadang spare-parts.</p>
                    </div>

                    <!-- Safety -->
                    <div class="neo-card neo-card-hover neo-card-white" style="border-width: 3px; box-shadow: 5px 5px 0px var(--neo-dark);">
                        <div style="width: 50px; height: 50px; background: var(--neo-green); border: 2px solid var(--neo-dark); border-radius: 8px; display: flex; align-items: center; justify-content: center; box-shadow: 2px 2px 0px var(--neo-dark); margin-bottom: 20px; font-size: 1.5rem;">
                            <i class='bx bx-shield-quarter'></i>
                        </div>
                        <h4 style="font-size: 1.15rem; margin-bottom: 10px; color: var(--neo-dark);">Safety & Driving</h4>
                        <p style="font-size: 0.85rem; font-weight: 500; color: #555; line-height: 1.6;">Edukasi teori berkendara aman (Safety Riding), kontrol emisi gas buang, serta standar K3 industri bengkel.</p>
                    </div>
                </div>
            </div>

            <!-- Right: Sidebar Info -->
            <div style="flex: 1; min-width: 300px; position: sticky; top: 120px;" class="fade-in">
                <div class="neo-card neo-card-blue" style="border-width: 4px; box-shadow: 8px 8px 0px var(--neo-dark); color: var(--neo-white); padding: 35px;">
                    <h3 style="color: var(--neo-yellow); margin-bottom: 20px; -webkit-text-stroke: 1px #000;">Honda Career Path</h3>
                    <p style="font-size: 0.95rem; font-weight: 600; line-height: 1.6; margin-bottom: 25px;">Program sinkronisasi kurikulum dan penyaluran lulusan dengan PT Astra Honda Motor (AHM).</p>
                    <div style="background: rgba(255,255,255,0.15); padding: 20px; border: 2px solid var(--neo-white); border-radius: 10px; border-left: 5px solid var(--neo-yellow); margin-bottom: 25px; box-shadow: 2px 2px 0px var(--neo-dark);">
                        <p style="font-size: 0.85rem; font-style: italic; font-weight: 600;">"Lulusan TBSM SMK Assalaam diprioritaskan untuk terserap bekerja di seluruh jaringan bengkel resmi AHASS Jawa Barat."</p>
                    </div>
                    <a href="{{ route('contact') }}" class="neo-btn neo-btn-yellow" style="width: 100%; justify-content: center; color: var(--neo-dark);">Info Pendaftaran TBSM</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Link & Match Section -->
<section style="padding: 100px 0; background-color: #ffffff;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 60px;">
            <span class="neo-badge neo-badge-green" style="margin-bottom: 15px;">LINK & MATCH</span>
            <h2 style="font-size: 2.5rem; margin-bottom: 10px;">Kolaborasi Industri Nyata</h2>
            <p style="font-size: 1.1rem; font-weight: 600; color: #555;">Keterpaduan kurikulum dengan dunia industri untuk melahirkan alumni berdaya saing tinggi.</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <!-- Magang -->
            <div class="neo-card neo-card-white" style="border-width: 3px; box-shadow: 6px 6px 0px var(--neo-yellow); padding: 30px;">
                <div style="width: 50px; height: 50px; background: #FEF3C7; border: 2.5px solid var(--neo-dark); border-radius: 8px; display: flex; align-items: center; justify-content: center; box-shadow: 2.5px 2.5px 0px var(--neo-dark); margin-bottom: 20px; font-size: 1.5rem; color: #d97706;">
                    <i class='bx bx-briefcase'></i>
                </div>
                <h4 style="margin-bottom: 10px;">Magang Industri</h4>
                <p style="color: #555; line-height: 1.6; font-size: 0.9rem; font-weight: 500;">
                    Praktik Kerja Lapangan (PKL) langsung di bengkel resmi AHASS selama 3 hingga 6 bulan untuk mengasah mental kerja dan praktek nyata.
                </p>
            </div>

            <!-- Guru Tamu -->
            <div class="neo-card neo-card-white" style="border-width: 3px; box-shadow: 6px 6px 0px var(--neo-orange); padding: 30px;">
                <div style="width: 50px; height: 50px; background: #FFF7ED; border: 2.5px solid var(--neo-dark); border-radius: 8px; display: flex; align-items: center; justify-content: center; box-shadow: 2.5px 2.5px 0px var(--neo-dark); margin-bottom: 20px; font-size: 1.5rem; color: #f97316;">
                    <i class='bx bx-user-voice'></i>
                </div>
                <h4 style="margin-bottom: 10px;">Guru Tamu Industri</h4>
                <p style="color: #555; line-height: 1.6; font-size: 0.9rem; font-weight: 500;">
                    Secara berkala mendatangkan instruktur ahli berpengalaman langsung dari PT Astra Honda Motor (AHM) untuk mentransfer skill terkini.
                </p>
            </div>

            <!-- Uji Kompetensi -->
            <div class="neo-card neo-card-white" style="border-width: 3px; box-shadow: 6px 6px 0px var(--neo-blue); padding: 30px;">
                <div style="width: 50px; height: 50px; background: #EFF6FF; border: 2.5px solid var(--neo-dark); border-radius: 8px; display: flex; align-items: center; justify-content: center; box-shadow: 2.5px 2.5px 0px var(--neo-dark); margin-bottom: 20px; font-size: 1.5rem; color: #2563eb;">
                    <i class='bx bx-id-card'></i>
                </div>
                <h4 style="margin-bottom: 10px;">Uji Kompetensi Ahli</h4>
                <p style="color: #555; line-height: 1.6; font-size: 0.9rem; font-weight: 500;">
                    Ujian akhir kompetensi kejuruan dinilai langsung oleh tim asesor industri berlisensi resmi dari AHM untuk memvalidasi kualifikasi lulusan.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
