@extends('layouts.app')

@section('title', 'Fasilitas Kami')

@section('content')
    <!-- Neobrutalist Page Header -->
    <header class="page-header-neo" style="background-color: var(--neo-cyan);">
        <div class="container fade-in">
            <span class="neo-badge neo-badge-yellow" style="margin-bottom: 15px;">SARANA PRASARANA</span>
            <h1>Fasilitas Premium</h1>
            <p>Menyediakan lingkungan belajar praktek terbaik, sarana olahraga lengkap, dan ruang ibadah yang kondusif.</p>
        </div>
    </header>

    <section style="padding: 100px 0; background-color: var(--neo-bg);">
        <div class="container">
            <div style="text-align: center; margin-bottom: 60px;">
                <span class="neo-badge neo-badge-orange" style="margin-bottom: 15px;">DOKUMENTASI KAMPUS</span>
                <h2 style="font-size: 2.5rem; margin-bottom: 10px;">Sekilas Tentang Sekolah Kami</h2>
                <p style="font-size: 1.1rem; font-weight: 600; color: #555;">Fasilitas lengkap berstandar industri modern untuk mendukung penuh pembelajaran praktek siswa.</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 35px;">
                <!-- Lab Komputer -->
                <div class="neo-card neo-card-hover neo-card-yellow fade-in">
                    <div style="width: 100%; height: 220px; border: 3px solid var(--neo-dark); border-radius: 8px; overflow: hidden; margin-bottom: 20px; background-color: #ffffff;">
                        <img src="{{ asset('images/ngoding.jpg') }}" alt="Lab Komputer" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.06)'" onmouseout="this.style.transform='scale(1)'">
                    </div>
                    <span class="neo-badge neo-badge-white" style="margin-bottom: 12px; font-size: 0.75rem;">TEKNOLOGI INFORMASI</span>
                    <h3 style="font-size: 1.35rem; margin-bottom: 10px; color: var(--neo-dark);">Lab Komputer Modern</h3>
                    <p style="font-size: 0.95rem; font-weight: 500; color: #333; line-height: 1.6;">
                        Fasilitas laboratorium komputer modern dengan spesifikasi tinggi untuk pembelajaran pengembangan software (coding) dan praktek multimedia kreatif.
                    </p>
                </div>

                <!-- Bengkel TSM -->
                <div class="neo-card neo-card-hover neo-card-orange fade-in" style="animation-delay: 0.1s;">
                    <div style="width: 100%; height: 220px; border: 3px solid var(--neo-dark); border-radius: 8px; overflow: hidden; margin-bottom: 20px; background-color: #ffffff;">
                        <img src="{{ asset('images/motorr.jpg') }}" alt="Bengkel TSM" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.06)'" onmouseout="this.style.transform='scale(1)'">
                    </div>
                    <span class="neo-badge neo-badge-white" style="margin-bottom: 12px; font-size: 0.75rem;">OTOMOTIF RODA DUA</span>
                    <h3 style="font-size: 1.35rem; margin-bottom: 10px; color: var(--neo-dark);">Bengkel Motor Honda</h3>
                    <p style="font-size: 0.95rem; font-weight: 500; color: #333; line-height: 1.6;">
                        Laboratorium perbengkelan resmi sepeda motor yang disesuaikan penuh dengan standar AHASS PT Astra Honda Motor (AHM) untuk praktek servis mekanik otomotif.
                    </p>
                </div>

                <!-- Bengkel TKR -->
                <div class="neo-card neo-card-hover neo-card-cyan fade-in" style="animation-delay: 0.2s;">
                    <div style="width: 100%; height: 220px; border: 3px solid var(--neo-dark); border-radius: 8px; overflow: hidden; margin-bottom: 20px; background-color: #ffffff;">
                        <img src="{{ asset('images/mobil.jpg') }}" alt="Bengkel TKR" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.06)'" onmouseout="this.style.transform='scale(1)'">
                    </div>
                    <span class="neo-badge neo-badge-white" style="margin-bottom: 12px; font-size: 0.75rem;">OTOMOTIF RODA EMPAT</span>
                    <h3 style="font-size: 1.35rem; margin-bottom: 10px; color: var(--neo-dark);">Bengkel Mobil TKR</h3>
                    <p style="font-size: 0.95rem; font-weight: 500; color: #333; line-height: 1.6;">
                        Peralatan lengkap dongkrak hidrolik, scanner mesin injeksi EFI, serta unit mobil praktek berstandar ATPM terkemuka untuk mencetak mekanik andal.
                    </p>
                </div>

                <!-- Gedung Sekolah -->
                <div class="neo-card neo-card-hover neo-card-green fade-in" style="animation-delay: 0.3s;">
                    <div style="width: 100%; height: 220px; border: 3px solid var(--neo-dark); border-radius: 8px; overflow: hidden; margin-bottom: 20px; background-color: #ffffff;">
                        <img src="{{ asset('images/sakola.jpg') }}" alt="Gedung Sekolah" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.06)'" onmouseout="this.style.transform='scale(1)'">
                    </div>
                    <span class="neo-badge neo-badge-white" style="margin-bottom: 12px; font-size: 0.75rem;">GEDUNG KAMPUS</span>
                    <h3 style="font-size: 1.35rem; margin-bottom: 10px; color: var(--neo-dark);">Gedung & Ruang Kelas</h3>
                    <p style="font-size: 0.95rem; font-weight: 500; color: #333; line-height: 1.6;">
                        Ruang kelas teori yang bersih, rapi, dan representatif didukung proyektor digital serta lingkungan belajar yang kondusif di kawasan asri.
                    </p>
                </div>

                <!-- Perpustakaan -->
                <div class="neo-card neo-card-hover neo-card-pink fade-in" style="animation-delay: 0.4s;">
                    <div style="width: 100%; height: 220px; border: 3px solid var(--neo-dark); border-radius: 8px; overflow: hidden; margin-bottom: 20px; background-color: #ffffff;">
                        <img src="{{ asset('images/perpus.jpg') }}" alt="Perpustakaan" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.06)'" onmouseout="this.style.transform='scale(1)'">
                    </div>
                    <span class="neo-badge neo-badge-white" style="margin-bottom: 12px; font-size: 0.75rem;">SUMBER LITERASI</span>
                    <h3 style="font-size: 1.35rem; margin-bottom: 10px; color: var(--neo-dark);">Perpustakaan Lengkap</h3>
                    <p style="font-size: 0.95rem; font-weight: 500; color: #333; line-height: 1.6;">
                        Menyediakan ribuan koleksi buku kompetensi kejuruan, novel fiksi, buku agama, majalah ilmiah, serta komputer akses internet e-library.
                    </p>
                </div>

                <!-- Mushola -->
                <div class="neo-card neo-card-hover neo-card-purple fade-in" style="animation-delay: 0.5s;">
                    <div style="width: 100%; height: 220px; border: 3px solid var(--neo-dark); border-radius: 8px; overflow: hidden; margin-bottom: 20px; background-color: #ffffff;">
                        <img src="{{ asset('images/sholat.jpg') }}" alt="Mushola" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.06)'" onmouseout="this.style.transform='scale(1)'">
                    </div>
                    <span class="neo-badge neo-badge-white" style="margin-bottom: 12px; font-size: 0.75rem;">IBADAH SPIRITUAL</span>
                    <h3 style="font-size: 1.35rem; margin-bottom: 10px; color: var(--neo-dark);">Mushola Al-Kautsar</h3>
                    <p style="font-size: 0.95rem; font-weight: 500; color: #333; line-height: 1.6;">
                        Tempat ibadah yang bersih dan sejuk untuk memfasilitasi sholat berjamaah harian, kegiatan rohani keagamaan, serta tadarus hafalan Qur'an.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
