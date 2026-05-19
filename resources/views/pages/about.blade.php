@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
    <!-- Neobrutalist Page Header -->
    <header class="page-header-neo" style="background-color: var(--neo-cyan);">
        <div class="container fade-in">
            <span class="neo-badge neo-badge-yellow" style="margin-bottom: 15px;">PROFIL SEKOLAH</span>
            <h1>Cerita & Profil Kami</h1>
            <p>Dari sebuah rumah sekolah kecil menjadi pusat keunggulan teknologi global.</p>
        </div>
    </header>

    <!-- History Section -->
    <section style="padding: 80px 0; background-color: #ffffff; border-bottom: 4px solid var(--neo-dark);">
        <div class="container">
            <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 60px;">
                <div style="flex: 1.2; min-width: 320px;" class="fade-in">
                    <div class="neo-card neo-card-white" style="padding: 40px; border-width: 4px; box-shadow: 8px 8px 0px var(--neo-dark);">
                        <span class="neo-badge neo-badge-orange" style="margin-bottom: 20px;">SEJARAH UTAMA</span>
                        <h2 style="font-size: 2.25rem; margin-bottom: 25px; color: var(--neo-dark);">Sejarah Kami</h2>
                        <p style="font-size: 1.05rem; font-weight: 500; color: #333; line-height: 1.8; text-align: justify; margin-bottom: 20px;">
                            SMK Assalaam Bandung berdiri di bawah naungan Yayasan Assalaam yang dipelopori oleh ulama besar KH. Habib Utsman Al-Aydarus, dengan visi besar untuk menciptakan generasi yang tidak hanya kuat secara spiritual, tetapi juga kompeten secara teknis di dunia industri. Sejak awal didirikan, sekolah ini telah mengukuhkan posisinya sebagai pionir pendidikan kejuruan di Bandung, terutama melalui spesialisasi di bidang otomotif yang menjadi "wajah" utama institusi ini selama puluhan tahun.
                        </p>
                        <p style="font-size: 1.05rem; font-weight: 500; color: #333; line-height: 1.8; text-align: justify;">
                            Seiring berjalannya waktu, SMK Assalaam berhasil bertransformasi dari sebuah bengkel pendidikan sederhana menjadi pusat keunggulan teknologi yang modern di kawasan Pasirluyu, dengan mengintegrasikan kurikulum berbasis industri dan memperluas cakupannya ke bidang teknologi informasi seperti Rekayasa Perangkat Lunak. Keberhasilan mereka terletak pada konsistensi menjaga disiplin tinggi dan kemitraan strategis dengan brand-brand otomotif raksasa, sehingga lulusannya dikenal memiliki etos kerja yang tangguh—sebuah perpaduan antara kematangan akhlak yang berakar dari tradisi pesantren dan keterampilan teknis mutakhir yang relevan dengan kebutuhan pasar kerja global.
                        </p>
                    </div>
                </div>
                
                <div style="flex: 0.8; min-width: 320px; display: flex; justify-content: center;" class="fade-in">
                    <div style="position: relative; width: 100%; max-width: 380px; height: 380px; background-color: var(--neo-orange); border: 4px solid var(--neo-dark); border-radius: 16px; box-shadow: 10px 10px 0px var(--neo-dark);">
                        <div style="position: absolute; inset: -4px; border: 4px solid var(--neo-dark); border-radius: 16px; overflow: hidden; background: #ffffff;">
                            <img src="{{ asset('images/smk.png') }}" alt="Gedung Yayasan Assalaam" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="neo-badge neo-badge-yellow" style="position: absolute; top: 15px; left: -15px; transform: rotate(-8deg); z-index: 10;">
                            YAYASAN ASSALAAM
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <section style="padding: 100px 0; background-color: #FEF3C7; border-bottom: 4px solid var(--neo-dark);">
        <div class="container">
            <div style="text-align: center; margin-bottom: 60px;">
                <span class="neo-badge neo-badge-green" style="margin-bottom: 15px;">FONDASI KAMI</span>
                <h2 style="font-size: 2.5rem; margin-bottom: 10px;">Visi & Misi Sekolah</h2>
                <p style="font-size: 1.1rem; font-weight: 600; color: #555;">Nilai-nilai inti yang mengarahkan setiap langkah pembelajaran di SMK Assalaam Bandung.</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px;">
                <!-- Visi Card -->
                <div class="neo-card neo-card-hover neo-card-yellow fade-in" style="border-width: 4px; box-shadow: 8px 8px 0px var(--neo-dark);">
                    <div style="width: 60px; height: 60px; background: #ffffff; border: 3px solid var(--neo-dark); border-radius: 12px; display: flex; align-items: center; justify-content: center; box-shadow: 3px 3px 0px var(--neo-dark); margin-bottom: 25px;">
                        <i class='bx bx-show-alt' style="font-size: 2rem; color: var(--neo-dark);"></i>
                    </div>
                    <h3 style="font-size: 1.5rem; margin-bottom: 15px;">Visi Kami</h3>
                    <p style="font-size: 1.1rem; font-weight: 600; color: var(--neo-dark); line-height: 1.7;">
                        Menjadi lembaga pendidikan yang unggul, inovatif, dan berdaya saing di bidang teknologi/keahlian, serta membentuk lulusan berakhlak mulia, berwawasan berkelanjutan, dan bermanfaat bagi kesejahteraan dunia akhirat.
                    </p>
                </div>

                <!-- Misi Card -->
                <div class="neo-card neo-card-hover neo-card-cyan fade-in" style="border-width: 4px; box-shadow: 8px 8px 0px var(--neo-dark);">
                    <div style="width: 60px; height: 60px; background: #ffffff; border: 3px solid var(--neo-dark); border-radius: 12px; display: flex; align-items: center; justify-content: center; box-shadow: 3px 3px 0px var(--neo-dark); margin-bottom: 25px;">
                        <i class='bx bx-bullseye' style="font-size: 2rem; color: var(--neo-dark);"></i>
                    </div>
                    <h3 style="font-size: 1.5rem; margin-bottom: 15px;">Misi Kami</h3>
                    <ul style="padding-left: 0; list-style: none;">
                        <li style="margin-bottom: 12px; display: flex; align-items: flex-start; gap: 10px; font-weight: 600; font-size: 0.95rem;">
                            <i class='bx bx-check-square' style="font-size: 1.3rem; margin-top: 2px;"></i>
                            <span>Menyelenggarakan pendidikan berkualitas dengan sarana lengkap, berlandaskan norma Islam, disiplin, dan amanah.</span>
                        </li>
                        <li style="margin-bottom: 12px; display: flex; align-items: flex-start; gap: 10px; font-weight: 600; font-size: 0.95rem;">
                            <i class='bx bx-check-square' style="font-size: 1.3rem; margin-top: 2px;"></i>
                            <span>Mengembangkan potensi siswa yang intelek dan aktif dalam merespons perkembangan.</span>
                        </li>
                        <li style="margin-bottom: 12px; display: flex; align-items: flex-start; gap: 10px; font-weight: 600; font-size: 0.95rem;">
                            <i class='bx bx-check-square' style="font-size: 1.3rem; margin-top: 2px;"></i>
                            <span>Menghasilkan lulusan yang cerdas, terampil, kompetitif, mandiri, dan berjiwa wirausaha (entrepreneurship).</span>
                        </li>
                        <li style="margin-bottom: 12px; display: flex; align-items: flex-start; gap: 10px; font-weight: 600; font-size: 0.95rem;">
                            <i class='bx bx-check-square' style="font-size: 1.3rem; margin-top: 2px;"></i>
                            <span>Membekali siswa dengan wawasan dunia usaha/industri serta kemampuan berwirausaha.</span>
                        </li>
                    </ul>
                </div> 
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section style="padding: 100px 0; background-color: #ffffff;">
        <div class="container">
            <div style="text-align: center; margin-bottom: 60px;">
                <span class="neo-badge neo-badge-pink" style="margin-bottom: 15px;">DEDIKASI PENUH</span>
                <h2 style="font-size: 2.5rem; margin-bottom: 10px;">Kepemimpinan Kami</h2>
                <p style="font-size: 1.1rem; font-weight: 600; color: #555;">Profesional yang berdedikasi tinggi dan berkomitmen kuat pada keunggulan pendidikan.</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 40px;">
                <!-- Leader 1 -->
                <div class="neo-card neo-card-hover fade-in" style="padding: 15px; border-width: 3.5px; box-shadow: 6px 6px 0px var(--neo-dark); text-align: center;">
                    <div style="width: 100%; height: 250px; border-radius: 8px; border: 3px solid var(--neo-dark); overflow: hidden; margin-bottom: 20px;">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=1974&auto=format&fit=crop" alt="Principal" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h3 style="font-size: 1.2rem; margin-bottom: 5px;">Dr. Robert Smith</h3>
                    <span class="neo-badge neo-badge-pink" style="font-size: 0.75rem;">Kepala Sekolah Eksekutif</span>
                </div>
                
                <!-- Leader 2 -->
                <div class="neo-card neo-card-hover fade-in" style="padding: 15px; border-width: 3.5px; box-shadow: 6px 6px 0px var(--neo-dark); text-align: center; animation-delay: 0.1s;">
                    <div style="width: 100%; height: 250px; border-radius: 8px; border: 3px solid var(--neo-dark); overflow: hidden; margin-bottom: 20px;">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=1976&auto=format&fit=crop" alt="Head of Academic" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h3 style="font-size: 1.2rem; margin-bottom: 5px;">Sarah Johnson</h3>
                    <span class="neo-badge neo-badge-cyan" style="font-size: 0.75rem;">Kepala Akademik</span>
                </div>
                
                <!-- Leader 3 -->
                <div class="neo-card neo-card-hover fade-in" style="padding: 15px; border-width: 3.5px; box-shadow: 6px 6px 0px var(--neo-dark); text-align: center; animation-delay: 0.2s;">
                    <div style="width: 100%; height: 250px; border-radius: 8px; border: 3px solid var(--neo-dark); overflow: hidden; margin-bottom: 20px;">
                        <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=1974&auto=format&fit=crop" alt="Registrar" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h3 style="font-size: 1.2rem; margin-bottom: 5px;">Michael Brown</h3>
                    <span class="neo-badge neo-badge-yellow" style="font-size: 0.75rem;">Pendaftar Sekolah</span>
                </div>
            </div>
        </div>
    </section>
@endsection
