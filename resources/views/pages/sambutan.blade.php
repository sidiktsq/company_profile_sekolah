@extends('layouts.app')

@section('title', 'Sambutan Kepala Sekolah | EduGold Global School')

@section('content')
    <!-- Header Section -->
    <section style="padding: 80px 0 40px; background-color: #f8fbfc;">
        <div class="container">
            <h1 style="color: var(--primary-color); font-size: 2.5rem; font-weight: 700; margin-bottom: 10px;">Sambutan Kepala Sekolah</h1>
            <p style="color: #666; font-size: 1.1rem; letter-spacing: 1px;">SMK ASSALAAM BANDUNG</p>
            
            <!-- Decorative Divider -->
            <div style="margin-top: 30px; display: flex; gap: 8px;">
                @for ($i = 0; $i < 40; $i++)
                    <div style="width: 6px; height: 6px; background-color: #ef6c00; border-radius: 50%; opacity: {{ 1 - ($i * 0.02) }};"></div>
                @endfor
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section style="padding: 60px 0 100px; background-color: #ffffff;">
        <div class="container">
            <div style="display: flex; flex-wrap: wrap; gap: 80px; align-items: flex-start;">
                
                <!-- Left: Multi-layered Photo Card -->
                <div style="flex: 1; min-width: 350px; position: relative; height: 500px;">
                    <div style="position: absolute; top: 0; left: 0; width: 85%; height: 90%; border-radius: 20px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
                        <img src="{{ asset('images/smk.png')}}" alt="School Background" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.8;">
                    </div>
                    <div style="position: absolute; bottom: 0; right: 0; width: 75%; height: 75%; border-radius: 20px; overflow: hidden; box-shadow: 0 30px 60px rgba(0,0,0,0.2); border: 8px solid var(--white);">
                        <img src="{{ asset('images/pak.png') }}" alt="Kepala Sekolah" style="width: 100%; height: 100%; object-fit: cover;">
                        <div style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 30px; background: linear-gradient(transparent, rgba(0,0,0,0.8)); color: var(--white);">
                            <h3 style="margin-bottom: 5px; font-size: 1.5rem;">H. M. Luthfi Almanfaluthi, S.T., M.Pd.</h3>
                            <p style="font-size: 0.9rem; opacity: 0.9;">Kepala Sekolah</p>
                        </div>
                    </div>
                </div>

                <!-- Right: Full Message -->
                <div style="flex: 1.5; min-width: 350px;">
                   <p style="font-style: italic; font-size: 1.1rem; color: #555; margin-bottom: 30px;">
    Assalamu'alaikum Warahmatullahi Wabarakatuh.<br>
    Salam sejahtera untuk kita semua.
</p>

<div style="line-height: 2; color: #333; font-size: 1.1rem;">
    <p style="margin-bottom: 25px;">
        Selamat datang di Website Resmi SMK Assalaam. Puji syukur kita panjatkan ke hadirat Allah SWT, karena atas rahmat-Nya, website ini dapat hadir sebagai sarana informasi dan komunikasi digital bagi seluruh keluarga besar sekolah serta masyarakat luas.
    </p>

    <p style="margin-bottom: 25px;">
        Di era Industri 4.0 dan transformasi digital yang kian pesat, kehadiran website ini menjadi langkah strategis SMK Assalaam dalam meningkatkan transparansi, akuntabilitas, dan kualitas layanan informasi. Kami menyadari bahwa kemudahan akses data adalah kunci utama dalam membangun kepercayaan publik.
    </p>

    <p style="margin-bottom: 25px;">
        Sebagai pimpinan di SMK Assalaam, visi saya adalah terus mendorong sekolah ini menjadi lembaga pendidikan kejuruan yang unggul dan relevan dengan kebutuhan zaman. Kami berkomitmen untuk mencetak lulusan yang:
    </p>

    <p style="margin-bottom: 15px;">
        <strong>Inovatif &​amp; Kreatif:</strong> Siap bersaing di dunia industri dan usaha.
    </p>
    <p style="margin-bottom: 15px;">
        <strong>Religius &​amp; Berakhlakul Karimah:</strong> Memiliki pondasi spiritual yang kokoh.
    </p>
    <p style="margin-bottom: 25px;">
        <strong>Berwawasan Luas:</strong> Mampu beradaptasi dengan dinamika global namun tetap mengabdi pada agama, bangsa, dan negara.
    </p>

    <p style="margin-bottom: 25px;">
        Melalui media ini, saya mengajak seluruh civitas akademika SMK Assalaam—para guru, staf, siswa, serta orang tua—untuk saling berkolaborasi dan bergandeng tangan. Mari kita manfaatkan teknologi ini untuk mempererat tali silaturahmi dan menciptakan lingkungan belajar yang aman, nyaman, serta menyenangkan bagi putra-putri kita.
    </p>

    <p style="margin-bottom: 25px;">
        Mari bersama-sama kita jaga dan kembangkan citra SMK Assalaam sebagai sekolah kejuruan pilihan yang terus melahirkan generasi "bertabur bintang", baik di bidang akademik maupun kompetensi keahlian.
    </p>

    <p style="margin-top: 50px;">Wassalamu'alaikum Warahmatullahi Wabarakatuh.</p>
    <p style="font-weight: 700; margin-top: 10px; color: var(--primary-color);">H. M. Luthfi Almanfaluthi, S.T., M.Pd.</p>
</div>

            </div>
        </div>
    </section>
@endsection
