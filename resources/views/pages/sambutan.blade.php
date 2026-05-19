@extends('layouts.app')

@section('title', 'Sambutan Kepala Sekolah')

@section('content')
    <!-- Neobrutalist Page Header -->
    <header class="page-header-neo" style="background-color: var(--neo-cyan);">
        <div class="container fade-in">
            <span class="neo-badge neo-badge-yellow" style="margin-bottom: 15px;">AMALAN PIMPINAN</span>
            <h1>Sambutan Kepala Sekolah</h1>
            <p>Pesan kebanggaan, visi masa depan, dan ajakan kolaborasi hangat bagi seluruh civitas akademika SMK Assalaam.</p>
        </div>
    </header>

    <!-- Main Content -->
    <section style="padding: 60px 0 100px; background-color: var(--neo-bg);">
        <div class="container">
            <!-- Back Button -->
            <div style="margin-bottom: 40px;" class="fade-in">
                <a href="{{ route('home') }}" class="neo-btn neo-btn-white">
                    <i class='bx bx-left-arrow-alt' style="font-size: 1.3rem;"></i> KEMBALI KE BERANDA
                </a>
            </div>

            <div style="display: flex; flex-wrap: wrap; gap: 60px; align-items: flex-start;">
                
                <!-- Left: Multi-layered Photo Card -->
                <div style="flex: 1; min-width: 320px; display: flex; justify-content: center;" class="fade-in">
                    <!-- Double Offset Frame -->
                    <div style="position: relative; width: 100%; max-width: 380px; height: 480px; background-color: var(--neo-yellow); border-radius: 16px; border: 4px solid var(--neo-dark); box-shadow: 12px 12px 0px var(--neo-dark);">
                        <div style="position: absolute; inset: -4px; border: 4px solid var(--neo-dark); border-radius: 16px; overflow: hidden; background: #ffffff;">
                            <img src="{{ asset('images/pak.png') }}" alt="Kepala Sekolah" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="neo-card" style="position: absolute; bottom: -20px; left: 10px; right: 10px; padding: 15px; border-width: 3px; box-shadow: 4px 4px 0px var(--neo-dark); background: #ffffff; text-align: center; z-index: 10;">
                            <h4 style="font-size: 1.15rem; font-weight: 800; margin-bottom: 2px;">H. M. Luthfi Almanfaluthi, S.T., M.Pd.</h4>
                            <span class="neo-badge neo-badge-orange" style="font-size: 0.75rem;">Kepala Sekolah</span>
                        </div>
                    </div>
                </div>

                <!-- Right: Full Message -->
                <div style="flex: 1.5; min-width: 320px;" class="fade-in">
                    <div class="neo-card neo-card-white" style="padding: 45px; border-width: 4px; box-shadow: 10px 10px 0px var(--neo-dark);">
                        <span class="neo-badge neo-badge-green" style="margin-bottom: 20px;">PESAN UTAMA</span>
                        <p style="font-family: 'Space Grotesque', sans-serif; font-weight: 700; font-size: 1.15rem; color: var(--neo-dark); margin-bottom: 25px; line-height: 1.6;">
                            Assalamu'alaikum Warahmatullahi Wabarakatuh.<br>
                            Salam sejahtera untuk kita semua.
                        </p>
                        
                        <div style="line-height: 1.8; color: #333; font-size: 1.05rem; font-weight: 500;">
                            <p style="margin-bottom: 20px; text-align: justify;">
                                Selamat datang di Website Resmi SMK Assalaam. Puji syukur kita panjatkan ke hadirat Allah SWT, karena atas rahmat-Nya, website ini dapat hadir sebagai sarana informasi dan komunikasi digital bagi seluruh keluarga besar sekolah serta masyarakat luas.
                            </p>

                            <p style="margin-bottom: 20px; text-align: justify;">
                                Di era Industri 4.0 dan transformasi digital yang kian pesat, kehadiran website ini menjadi langkah strategis SMK Assalaam dalam meningkatkan transparansi, akuntabilitas, dan kualitas layanan informasi. Kami menyadari bahwa kemudahan akses data adalah kunci utama dalam membangun kepercayaan publik.
                            </p>

                            <p style="margin-bottom: 20px; text-align: justify;">
                                Sebagai pimpinan di SMK Assalaam, visi saya adalah terus mendorong sekolah ini menjadi lembaga pendidikan kejuruan yang unggul dan relevan dengan kebutuhan zaman. Kami berkomitmen untuk mencetak lulusan yang:
                            </p>

                            <ul style="padding-left: 0; list-style: none; margin-bottom: 25px;">
                                <li style="margin-bottom: 12px; display: flex; align-items: flex-start; gap: 10px;">
                                    <i class='bx bx-check-square' style="font-size: 1.3rem; color: var(--neo-pink); margin-top: 2px;"></i>
                                    <span><strong>Inovatif & Kreatif:</strong> Siap bersaing di dunia industri dan usaha global.</span>
                                </li>
                                <li style="margin-bottom: 12px; display: flex; align-items: flex-start; gap: 10px;">
                                    <i class='bx bx-check-square' style="font-size: 1.3rem; color: var(--neo-pink); margin-top: 2px;"></i>
                                    <span><strong>Religius & Berakhlakul Karimah:</strong> Memiliki pondasi spiritual islami yang kokoh.</span>
                                </li>
                                <li style="margin-bottom: 12px; display: flex; align-items: flex-start; gap: 10px;">
                                    <i class='bx bx-check-square' style="font-size: 1.3rem; color: var(--neo-pink); margin-top: 2px;"></i>
                                    <span><strong>Berwawasan Luas:</strong> Mampu beradaptasi cepat dengan dinamika global namun tetap mengabdi pada agama, bangsa, dan negara.</span>
                                </li>
                            </ul>

                            <p style="margin-bottom: 20px; text-align: justify;">
                                Melalui media ini, saya mengajak seluruh civitas akademika SMK Assalaam—para guru, staf, siswa, serta orang tua—untuk saling berkolaborasi dan bergandeng tangan. Mari kita manfaatkan teknologi ini untuk mempererat tali silaturahmi dan menciptakan lingkungan belajar yang aman, nyaman, serta menyenangkan bagi putra-putri kita.
                            </p>

                            <p style="margin-bottom: 35px; text-align: justify;">
                                Mari bersama-sama kita jaga dan kembangkan citra SMK Assalaam sebagai sekolah kejuruan pilihan yang terus melahirkan generasi "bertabur bintang", baik di bidang akademik maupun kompetensi keahlian.
                            </p>

                            <div style="border-top: 3px dashed var(--neo-dark); padding-top: 25px;">
                                <p style="font-weight: 700;">Wassalamu'alaikum Warahmatullahi Wabarakatuh.</p>
                                <p style="font-weight: 900; margin-top: 10px; color: var(--neo-cyan); -webkit-text-stroke: 0.5px #000; font-size: 1.2rem;">H. M. Luthfi Almanfaluthi, S.T., M.Pd.</p>
                                <span style="font-size: 0.8rem; font-weight: 700; color: #555; text-transform: uppercase;">Kepala Sekolah SMK Assalaam Bandung</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
