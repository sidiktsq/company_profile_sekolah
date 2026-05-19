@extends('layouts.app')

@section('title', 'Kesiswaan')

@section('content')
    <!-- Neobrutalist Page Header -->
    <header class="page-header-neo" style="background-color: var(--neo-cyan);">
        <div class="container fade-in">
            <span class="neo-badge neo-badge-yellow" style="margin-bottom: 15px;">AKTIVITAS SISWA</span>
            <h1>Kesiswaan & Ekstrakurikuler</h1>
            <p>Mengembangkan potensi, minat, kepemimpinan, dan bakat unik siswa melalui berbagai kegiatan ekstrakurikuler unggulan.</p>
        </div>
    </header>

    <section style="padding: 100px 0; background-color: var(--neo-bg);">
        <div class="container">
            <div style="text-align: center; margin-bottom: 60px;">
                <span class="neo-badge neo-badge-pink" style="margin-bottom: 15px;">PENGEMBANGAN DIRI</span>
                <h2 style="font-size: 2.5rem; margin-bottom: 10px;">Ekstrakurikuler Unggulan</h2>
                <p style="font-size: 1.1rem; font-weight: 600; color: #555;">Berbagai pilihan kegiatan non-akademis untuk menyalurkan bakat dan mengukir prestasi siswa.</p>
            </div>

            <!-- Colorful Neobrutalist Extracurricular Grid -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(290px, 1fr)); gap: 35px;">
                
                <!-- Pramuka -->
                <div class="neo-card neo-card-hover neo-card-yellow fade-in" style="display: flex; flex-direction: column; justify-content: space-between;">
                    <div style="text-align: center; padding-top: 15px;">
                        <div style="width: 70px; height: 70px; background: #ffffff; border: 3px solid var(--neo-dark); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 3px 3px 0px var(--neo-dark); margin: 0 auto 20px; font-size: 2.2rem;">
                            🏕️
                        </div>
                        <h3 style="font-size: 1.35rem; margin-bottom: 10px; color: var(--neo-dark);">Pramuka</h3>
                        <p style="font-size: 0.9rem; font-weight: 500; color: #333; line-height: 1.6; margin-bottom: 25px; min-height: 80px;">
                            Membentuk karakter disiplin, rasa kepemimpinan mandiri, dan kepedulian sosial tinggi melalui kegiatan kepramukaan terstruktur.
                        </p>
                    </div>
                    <div style="display: flex; gap: 8px; justify-content: center; flex-wrap: wrap;">   
                        <span class="neo-badge neo-badge-white" style="font-size: 0.75rem;">Rabu Sore</span>
                        <span class="neo-badge neo-badge-white" style="font-size: 0.75rem;">Lapangan</span>
                    </div>
                </div>

                <!-- PMR -->
                <div class="neo-card neo-card-hover neo-card-pink fade-in" style="display: flex; flex-direction: column; justify-content: space-between; animation-delay: 0.05s;">
                    <div style="text-align: center; padding-top: 15px;">
                        <div style="width: 70px; height: 70px; background: #ffffff; border: 3px solid var(--neo-dark); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 3px 3px 0px var(--neo-dark); margin: 0 auto 20px; font-size: 2.2rem;">
                            ❤️
                        </div>
                        <h3 style="font-size: 1.35rem; margin-bottom: 10px; color: var(--neo-dark);">PMR (Palang Merah Remaja)</h3>
                        <p style="font-size: 0.9rem; font-weight: 500; color: #333; line-height: 1.6; margin-bottom: 25px; min-height: 80px;">
                            Melatih keterampilan pertolongan medis pertama, kesiapsiagaan bencana darurat, dan kepedulian terhadap kemanusiaan sesama.
                        </p>
                    </div>
                    <div style="display: flex; gap: 8px; justify-content: center; flex-wrap: wrap;">
                        <span class="neo-badge neo-badge-white" style="font-size: 0.75rem;">Jumat Sore</span>
                        <span class="neo-badge neo-badge-white" style="font-size: 0.75rem;">UKS Utama</span>
                    </div>
                </div>

                <!-- Futsal -->
                <div class="neo-card neo-card-hover neo-card-green fade-in" style="display: flex; flex-direction: column; justify-content: space-between; animation-delay: 0.1s;">
                    <div style="text-align: center; padding-top: 15px;">
                        <div style="width: 70px; height: 70px; background: #ffffff; border: 3px solid var(--neo-dark); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 3px 3px 0px var(--neo-dark); margin: 0 auto 20px; font-size: 2.2rem;">
                            ⚽
                        </div>
                        <h3 style="font-size: 1.35rem; margin-bottom: 10px; color: var(--neo-dark);">Futsal</h3>
                        <p style="font-size: 0.9rem; font-weight: 500; color: #333; line-height: 1.6; margin-bottom: 25px; min-height: 80px;">
                            Mengembangkan keahlian olahraga, olah taktik futsal, kerjasama tim solid, serta menjunjung tinggi sportivitas di arena pertandingan.
                        </p>
                    </div>
                    <div style="display: flex; gap: 8px; justify-content: center; flex-wrap: wrap;">
                        <span class="neo-badge neo-badge-white" style="font-size: 0.75rem;">Selasa & Kamis</span>
                        <span class="neo-badge neo-badge-white" style="font-size: 0.75rem;">Lapangan Futsal</span>
                    </div>
                </div>

                <!-- Basket -->
                <div class="neo-card neo-card-hover neo-card-orange fade-in" style="display: flex; flex-direction: column; justify-content: space-between; animation-delay: 0.15s;">
                    <div style="text-align: center; padding-top: 15px;">
                        <div style="width: 70px; height: 70px; background: #ffffff; border: 3px solid var(--neo-dark); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 3px 3px 0px var(--neo-dark); margin: 0 auto 20px; font-size: 2.2rem;">
                            🏀
                        </div>
                        <h3 style="font-size: 1.35rem; margin-bottom: 10px; color: var(--neo-dark);">Basket</h3>
                        <p style="font-size: 0.9rem; font-weight: 500; color: #333; line-height: 1.6; margin-bottom: 25px; min-height: 80px;">
                            Membina bakat fisik olahraga basket, meningkatkan kebugaran jasmani, serta membangun mental juara kompetitif yang sportif.
                        </p>
                    </div>
                    <div style="display: flex; gap: 8px; justify-content: center; flex-wrap: wrap;">
                        <span class="neo-badge neo-badge-white" style="font-size: 0.75rem;">Senin & Rabu</span>
                        <span class="neo-badge neo-badge-white" style="font-size: 0.75rem;">Lapangan Basket</span>
                    </div>
                </div>

                <!-- Bulutangkis -->
                <div class="neo-card neo-card-hover neo-card-cyan fade-in" style="display: flex; flex-direction: column; justify-content: space-between; animation-delay: 0.2s;">
                    <div style="text-align: center; padding-top: 15px;">
                        <div style="width: 70px; height: 70px; background: #ffffff; border: 3px solid var(--neo-dark); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 3px 3px 0px var(--neo-dark); margin: 0 auto 20px; font-size: 2.2rem;">
                            🏸
                        </div>
                        <h3 style="font-size: 1.35rem; margin-bottom: 10px; color: var(--neo-dark);">Bulutangkis</h3>
                        <p style="font-size: 0.9rem; font-weight: 500; color: #333; line-height: 1.6; margin-bottom: 25px; min-height: 80px;">
                            Mengasah ketangkasan bermain bulutangkis, refleks gerakan motorik cepat, serta menjaga stamina tubuh agar selalu bugar.
                        </p>
                    </div>
                    <div style="display: flex; gap: 8px; justify-content: center; flex-wrap: wrap;">
                        <span class="neo-badge neo-badge-white" style="font-size: 0.75rem;">Kamis Sore</span>
                        <span class="neo-badge neo-badge-white" style="font-size: 0.75rem;">Gor Bulutangkis</span>
                    </div>
                </div>

                <!-- Robotika -->
                <div class="neo-card neo-card-hover neo-card-purple fade-in" style="display: flex; flex-direction: column; justify-content: space-between; animation-delay: 0.25s;">
                    <div style="text-align: center; padding-top: 15px;">
                        <div style="width: 70px; height: 70px; background: #ffffff; border: 3px solid var(--neo-dark); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 3px 3px 0px var(--neo-dark); margin: 0 auto 20px; font-size: 2.2rem;">
                            🤖
                        </div>
                        <h3 style="font-size: 1.35rem; margin-bottom: 10px; color: var(--neo-dark);">Robotika</h3>
                        <p style="font-size: 0.9rem; font-weight: 500; color: #333; line-height: 1.6; margin-bottom: 25px; min-height: 80px;">
                            Mempelajari rekayasa mekanik robot, kelistrikan elektronika mikro, dan coding program untuk berkompetisi tingkat nasional.
                        </p>
                    </div>
                    <div style="display: flex; gap: 8px; justify-content: center; flex-wrap: wrap;">
                        <span class="neo-badge neo-badge-white" style="font-size: 0.75rem;">Sabtu Pagi</span>
                        <span class="neo-badge neo-badge-white" style="font-size: 0.75rem;">Lab Komputer</span>
                    </div>
                </div>

                <!-- Desain Grafis -->
                <div class="neo-card neo-card-hover neo-card-blue fade-in" style="display: flex; flex-direction: column; justify-content: space-between; animation-delay: 0.3s; color: var(--neo-white);">
                    <div style="text-align: center; padding-top: 15px;">
                        <div style="width: 70px; height: 70px; background: #ffffff; border: 3px solid var(--neo-dark); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 3px 3px 0px var(--neo-dark); margin: 0 auto 20px; font-size: 2.2rem;">
                            🎨
                        </div>
                        <h3 style="font-size: 1.35rem; margin-bottom: 10px; color: var(--neo-white); -webkit-text-stroke: 1px #000;">Desain Grafis</h3>
                        <p style="font-size: 0.9rem; font-weight: 500; color: #f8fafc; line-height: 1.6; margin-bottom: 25px; min-height: 80px;">
                            Mengembangkan daya imajinasi kreasi digital, menguasai software desain pro, serta merancang karya seni visual digital modern.
                        </p>
                    </div>
                    <div style="display: flex; gap: 8px; justify-content: center; flex-wrap: wrap;">
                        <span class="neo-badge neo-badge-white" style="font-size: 0.75rem; color: #000;">Selasa Sore</span>
                        <span class="neo-badge neo-badge-white" style="font-size: 0.75rem; color: #000;">Lab Komputer</span>
                    </div>
                </div>

                <!-- Paskibra -->
                <div class="neo-card neo-card-hover neo-card-yellow fade-in" style="display: flex; flex-direction: column; justify-content: space-between; animation-delay: 0.35s;">
                    <div style="text-align: center; padding-top: 15px;">
                        <div style="width: 70px; height: 70px; background: #ffffff; border: 3px solid var(--neo-dark); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 3px 3px 0px var(--neo-dark); margin: 0 auto 20px; font-size: 2.2rem;">
                            🇮🇩
                        </div>
                        <h3 style="font-size: 1.35rem; margin-bottom: 10px; color: var(--neo-dark);">Paskibra</h3>
                        <p style="font-size: 0.9rem; font-weight: 500; color: #333; line-height: 1.6; margin-bottom: 25px; min-height: 80px;">
                            Membentuk jiwa patriotis, disiplin kedap gerakan, kecintaan tanah air tanah tumpah, serta keahlian baris-berbaris yang kompak presisi.
                        </p>
                    </div>
                    <div style="display: flex; gap: 8px; justify-content: center; flex-wrap: wrap;">
                        <span class="neo-badge neo-badge-white" style="font-size: 0.75rem;">Senin Sore</span>
                        <span class="neo-badge neo-badge-white" style="font-size: 0.75rem;">Lapangan Upacara</span>
                    </div>
                </div>

                <!-- Tahfidz -->
                <div class="neo-card neo-card-hover neo-card-green fade-in" style="display: flex; flex-direction: column; justify-content: space-between; animation-delay: 0.4s;">
                    <div style="text-align: center; padding-top: 15px;">
                        <div style="width: 70px; height: 70px; background: #ffffff; border: 3px solid var(--neo-dark); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 3px 3px 0px var(--neo-dark); margin: 0 auto 20px; font-size: 2.2rem;">
                            📖
                        </div>
                        <h3 style="font-size: 1.35rem; margin-bottom: 10px; color: var(--neo-dark);">Tahfidz Quran</h3>
                        <p style="font-size: 0.9rem; font-weight: 500; color: #333; line-height: 1.6; margin-bottom: 25px; min-height: 80px;">
                            Menghafalkan ayat-ayat suci Al-Qur'an dengan bacaan tartil tajwid fasih guna memperkokoh spiritual keagamaan akhlak mulia.
                        </p>
                    </div>
                    <div style="display: flex; gap: 8px; justify-content: center; flex-wrap: wrap;">
                        <span class="neo-badge neo-badge-white" style="font-size: 0.75rem;">Senin - Jumat</span>
                        <span class="neo-badge neo-badge-white" style="font-size: 0.75rem;">Mushola Sekolah</span>
                    </div>
                </div>

                <!-- Jurnalistik -->
                <div class="neo-card neo-card-hover neo-card-orange fade-in" style="display: flex; flex-direction: column; justify-content: space-between; animation-delay: 0.45s;">
                    <div style="text-align: center; padding-top: 15px;">
                        <div style="width: 70px; height: 70px; background: #ffffff; border: 3px solid var(--neo-dark); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 3px 3px 0px var(--neo-dark); margin: 0 auto 20px; font-size: 2.2rem;">
                            📸
                        </div>
                        <h3 style="font-size: 1.35rem; margin-bottom: 10px; color: var(--neo-dark);">Jurnalistik</h3>
                        <p style="font-size: 0.9rem; font-weight: 500; color: #333; line-height: 1.6; margin-bottom: 25px; min-height: 80px;">
                            Melatih ketrampilan wawancara meliput berita, fotografi jepretan handal, menulis rilis pers guna memajukan majalah sekolah.
                        </p>
                    </div>
                    <div style="display: flex; gap: 8px; justify-content: center; flex-wrap: wrap;">
                        <span class="neo-badge neo-badge-white" style="font-size: 0.75rem;">Rabu Sore</span>
                        <span class="neo-badge neo-badge-white" style="font-size: 0.75rem;">Ruang Media Center</span>
                    </div>
                </div>

                <!-- Seni Tari -->
                <div class="neo-card neo-card-hover neo-card-pink fade-in" style="display: flex; flex-direction: column; justify-content: space-between; animation-delay: 0.5s;">
                    <div style="text-align: center; padding-top: 15px;">
                        <div style="width: 70px; height: 70px; background: #ffffff; border: 3px solid var(--neo-dark); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 3px 3px 0px var(--neo-dark); margin: 0 auto 20px; font-size: 2.2rem;">
                            💃
                        </div>
                        <h3 style="font-size: 1.35rem; margin-bottom: 10px; color: var(--neo-dark);">Seni Tari</h3>
                        <p style="font-size: 0.9rem; font-weight: 500; color: #333; line-height: 1.6; margin-bottom: 25px; min-height: 80px;">
                            Melestarikan keindahan ragam tarian nusantara tradisional adat budaya bangsa, melatih keselarasan gerak luwes seni kreasi.
                        </p>
                    </div>
                    <div style="display: flex; gap: 8px; justify-content: center; flex-wrap: wrap;">
                        <span class="neo-badge neo-badge-white" style="font-size: 0.75rem;">Jumat Sore</span>
                        <span class="neo-badge neo-badge-white" style="font-size: 0.75rem;">Aula Sekolah</span>
                    </div>
                </div>

                <!-- Olimpiade Sains -->
                <div class="neo-card neo-card-hover neo-card-cyan fade-in" style="display: flex; flex-direction: column; justify-content: space-between; animation-delay: 0.55s;">
                    <div style="text-align: center; padding-top: 15px;">
                        <div style="width: 70px; height: 70px; background: #ffffff; border: 3px solid var(--neo-dark); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 3px 3px 0px var(--neo-dark); margin: 0 auto 20px; font-size: 2.2rem;">
                            🧪
                        </div>
                        <h3 style="font-size: 1.35rem; margin-bottom: 10px; color: var(--neo-dark);">Olimpiade Sains</h3>
                        <p style="font-size: 0.9rem; font-weight: 500; color: #333; line-height: 1.6; margin-bottom: 25px; min-height: 80px;">
                            Mempersiapkan tim akademik melahap soal-soal kompetisi eksakta IPA, Fisika, Matematika tingkat provinsi hingga nasional.
                        </p>
                    </div>
                    <div style="display: flex; gap: 8px; justify-content: center; flex-wrap: wrap;">
                        <span class="neo-badge neo-badge-white" style="font-size: 0.75rem;">Sabtu Pagi</span>
                        <span class="neo-badge neo-badge-white" style="font-size: 0.75rem;">Lab IPA Fisika</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection