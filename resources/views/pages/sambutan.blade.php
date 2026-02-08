@extends('layouts.app')

@section('title', 'Sambutan Kepala Sekolah | EduGold Global School')

@section('content')
    <!-- Header Section -->
    <section style="padding: 80px 0 40px; background-color: #f8fbfc;">
        <div class="container">
            <h1 style="color: var(--primary-color); font-size: 2.5rem; font-weight: 700; margin-bottom: 10px;">Sambutan Kepala Sekolah</h1>
            <p style="color: #666; font-size: 1.1rem; letter-spacing: 1px;">EDUGOLD GLOBAL SCHOOL</p>
            
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
                        <img src="https://images.unsplash.com/photo-1523050335456-c38a70c7df8b?q=80&w=2070&auto=format&fit=crop" alt="School Background" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.8;">
                    </div>
                    <div style="position: absolute; bottom: 0; right: 0; width: 75%; height: 75%; border-radius: 20px; overflow: hidden; box-shadow: 0 30px 60px rgba(0,0,0,0.2); border: 8px solid var(--white);">
                        <img src="https://images.unsplash.com/photo-1544161515-4af6b1d46409?q=80&w=2070&auto=format&fit=crop" alt="Kepala Sekolah" style="width: 100%; height: 100%; object-fit: cover;">
                        <div style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 30px; background: linear-gradient(transparent, rgba(0,0,0,0.8)); color: var(--white);">
                            <h3 style="margin-bottom: 5px; font-size: 1.5rem;">H. Marzuki Miad, M.Pd.</h3>
                            <p style="font-size: 0.9rem; opacity: 0.9;">Kepala Sekolah</p>
                        </div>
                    </div>
                </div>

                <!-- Right: Full Message -->
                <div style="flex: 1.5; min-width: 350px;">
                    <p style="font-style: italic; font-size: 1.1rem; color: #555; margin-bottom: 30px;">Assalamu'alaikum Warahmatullahi Wabarakatuh.</p>
                    
                    <div style="line-height: 2; color: #333; font-size: 1.1rem;">
                        <p style="margin-bottom: 25px;">
                            Salam sejahtera untuk kita semua. Selamat datang di website EduGold Global School. Website ini dibangun sebagai sarana atau media informasi dan komunikasi sekolah, karena sejalan dengan perkembangan teknologi Industri 4.0 yang berguna untuk memudahkan mencari informasi tentang EduGold Global School.
                        </p>
                        <p style="margin-bottom: 25px;">
                            Kualitas layanan menjadi salah satu misi sekolah dan kaitannya dengan transparansi dan akuntabilitas sekolah. Menjalankan tugas sebagai pimpinan di EduGold Global School, harapan tentu untuk mengembangkan sekolah besar ini menjadi lebih baik lagi, bertabur bintang baik akademik maupun non akademik.
                        </p>
                        <p style="margin-bottom: 25px;">
                            Sekolah yang akan melahirkan generasi yang inovatif, kreatif, religius, dan akhlakul karimah yang berwawasan luas serta mengabdi kepada agama, bangsa, dan negara. Selaku pimpinan saya mendorong terus perkembangan inovasi dan kreasi warga sekolah.
                        </p>
                        <p style="margin-bottom: 25px;">
                            Mengeratkan tali silaturahmi, kekeluargaan, dan kerjasama seluruh warga sekolah. Dari lubuk hati yang paling dalam, saya mengajak kepada seluruh civitas akademik EduGold Global School untuk sama-sama bergandeng tangan, berkolaborasi guna mengembangkan sekolah nyaman, aman, dan menyenangkan sebagai tempat belajar untuk putra putri kita menuntut ilmu dan tetap mempertahankan serta mengembangkan image EduGold Global School sebagai sekolah unggulan.
                        </p>
                        <p style="margin-top: 50px;">Wassalamu'alaikum Warahmatullahi Wabarakatuh</p>
                        <p style="font-weight: 700; margin-top: 10px; color: var(--primary-color);">H. Marzuki Miad, M.Pd.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
