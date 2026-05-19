@extends('layouts.app')

@section('title', 'Program Keahlian')

@section('content')
    <!-- Neobrutalist Page Header -->
    <header class="page-header-neo" style="background-color: var(--neo-cyan);">
        <div class="container fade-in">
            <span class="neo-badge neo-badge-yellow" style="margin-bottom: 15px;">AKADEMIK UTAMA</span>
            <h1>Program Akademik</h1>
            <p>Menyiapkan lulusan yang kompeten, terampil, dan siap kerja langsung di bidangnya masing-masing.</p>
        </div>
    </header>

    <section style="padding: 100px 0; background-color: var(--neo-bg);">
        <div class="container">
            <!-- Program RPL -->
            <div class="neo-card fade-in" style="padding: 0; border-width: 4px; box-shadow: 10px 10px 0px var(--neo-dark); margin-bottom: 60px; display: flex; flex-wrap: wrap; background-color: #ffffff;">
                <div style="flex: 1; min-width: 320px; height: 420px; border-right: 4px solid var(--neo-dark); overflow: hidden;">
                    <img src="{{ asset('images/ngoding.jpg') }}" alt="Rekayasa Perangkat Lunak" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="flex: 1.2; min-width: 320px; padding: 50px; display: flex; flex-direction: column; justify-content: center;">
                    <div style="display: flex; gap: 10px; align-items: center; margin-bottom: 15px;">
                        <span class="neo-badge neo-badge-yellow">RPL</span>
                        <span class="neo-badge neo-badge-cyan">Jurusan Unggulan</span>
                    </div>
                    <h2 style="font-size: 2.2rem; margin-bottom: 20px; color: var(--neo-dark);">Rekayasa Perangkat Lunak</h2>
                    <p style="font-size: 1.05rem; font-weight: 500; color: #4A4A4A; line-height: 1.7; margin-bottom: 25px;">
                        Program keahlian yang mempersiapkan siswa untuk menjadi tenaga profesional di bidang pengembangan perangkat lunak (Software Engineer). Siswa akan dibekali dengan keterampilan pemrograman full-stack, pengembangan aplikasi mobile, dan pengelolaan basis data.
                    </p>
                    
                    <h4 style="font-size: 1.1rem; font-weight: 800; margin-bottom: 15px; text-transform: uppercase;">Kompetensi Keahlian Inti:</h4>
                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px;">
                        <div class="neo-badge neo-badge-white" style="font-size: 0.85rem; font-weight: 700; text-align: center; border-width: 2px;">Pemrograman Dasar</div>
                        <div class="neo-badge neo-badge-white" style="font-size: 0.85rem; font-weight: 700; text-align: center; border-width: 2px;">Basis Data Modern</div>
                        <div class="neo-badge neo-badge-white" style="font-size: 0.85rem; font-weight: 700; text-align: center; border-width: 2px;">Pemrograman Web (Laravel)</div>
                        <div class="neo-badge neo-badge-white" style="font-size: 0.85rem; font-weight: 700; text-align: center; border-width: 2px;">Pemrograman Mobile</div>
                    </div>
                </div>
            </div>

            <!-- Program TKR -->
            <div class="neo-card fade-in" style="padding: 0; border-width: 4px; box-shadow: 10px 10px 0px var(--neo-dark); margin-bottom: 60px; display: flex; flex-wrap: wrap; flex-direction: row-reverse; background-color: #ffffff;">
                <div style="flex: 1; min-width: 320px; height: 420px; border-left: 4px solid var(--neo-dark); overflow: hidden;">
                    <img src="{{ asset('images/mobil.jpg') }}" alt="Teknik Kendaraan Ringan" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="flex: 1.2; min-width: 320px; padding: 50px; display: flex; flex-direction: column; justify-content: center;">
                    <div style="display: flex; gap: 10px; align-items: center; margin-bottom: 15px;">
                        <span class="neo-badge neo-badge-orange">TKR</span>
                        <span class="neo-badge neo-badge-yellow">Jurusan Unggulan</span>
                    </div>
                    <h2 style="font-size: 2.2rem; margin-bottom: 20px; color: var(--neo-dark);">Teknik Kendaraan Ringan</h2>
                    <p style="font-size: 1.05rem; font-weight: 500; color: #4A4A4A; line-height: 1.7; margin-bottom: 25px;">
                        Program keahlian yang berfokus pada perawatan, perbaikan, dan modifikasi kendaraan ringan (mobil). Siswa akan mempelajari sistem mesin otomotif tingkat lanjut, kelistrikan bodi mobil, dan mekanik kemudi suspensi kendaraan bermotor roda empat.
                    </p>
                    
                    <h4 style="font-size: 1.1rem; font-weight: 800; margin-bottom: 15px; text-transform: uppercase;">Kompetensi Keahlian Inti:</h4>
                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px;">
                        <div class="neo-badge neo-badge-white" style="font-size: 0.85rem; font-weight: 700; text-align: center; border-width: 2px;">Sistem Mesin Injeksi</div>
                        <div class="neo-badge neo-badge-white" style="font-size: 0.85rem; font-weight: 700; text-align: center; border-width: 2px;">Kelistrikan Otomotif</div>
                        <div class="neo-badge neo-badge-white" style="font-size: 0.85rem; font-weight: 700; text-align: center; border-width: 2px;">Sistem Pemindah Tenaga</div>
                        <div class="neo-badge neo-badge-white" style="font-size: 0.85rem; font-weight: 700; text-align: center; border-width: 2px;">Perawatan Rutin EFI</div>
                    </div>
                </div>
            </div>

            <!-- Program TBSM -->
            <div class="neo-card fade-in" style="padding: 0; border-width: 4px; box-shadow: 10px 10px 0px var(--neo-dark); display: flex; flex-wrap: wrap; background-color: #ffffff;">
                <div style="flex: 1; min-width: 320px; height: 420px; border-right: 4px solid var(--neo-dark); overflow: hidden;">
                    <img src="{{ asset('images/motorr.jpg') }}" alt="Teknik Bisnis Sepeda Motor" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="flex: 1.2; min-width: 320px; padding: 50px; display: flex; flex-direction: column; justify-content: center;">
                    <div style="display: flex; gap: 10px; align-items: center; margin-bottom: 15px;">
                        <span class="neo-badge neo-badge-cyan">TBSM</span>
                        <span class="neo-badge neo-badge-pink">Jurusan Unggulan</span>
                    </div>
                    <h2 style="font-size: 2.2rem; margin-bottom: 20px; color: var(--neo-dark);">Teknik Bisnis Sepeda Motor</h2>
                    <p style="font-size: 1.05rem; font-weight: 500; color: #4A4A4A; line-height: 1.7; margin-bottom: 25px;">
                        Program keahlian yang mempersiapkan siswa untuk menjadi teknisi sepeda motor profesional berstandar Astra Honda Motor (AHM) serta memiliki kemandirian wirausaha tangguh. Fokus pada servis roda dua, kelistrikan sasis, dan manajemen administrasi bengkel sepeda motor.
                    </p>
                    
                    <h4 style="font-size: 1.1rem; font-weight: 800; margin-bottom: 15px; text-transform: uppercase;">Kompetensi Keahlian Inti:</h4>
                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px;">
                        <div class="neo-badge neo-badge-white" style="font-size: 0.85rem; font-weight: 700; text-align: center; border-width: 2px;">Perbaikan Mesin Motor</div>
                        <div class="neo-badge neo-badge-white" style="font-size: 0.85rem; font-weight: 700; text-align: center; border-width: 2px;">Kelistrikan Sepeda Motor</div>
                        <div class="neo-badge neo-badge-white" style="font-size: 0.85rem; font-weight: 700; text-align: center; border-width: 2px;">Sistem Bahan Bakar FI</div>
                        <div class="neo-badge neo-badge-white" style="font-size: 0.85rem; font-weight: 700; text-align: center; border-width: 2px;">Manajemen Bengkel AHASS</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection