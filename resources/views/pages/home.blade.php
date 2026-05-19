@extends('layouts.app')

@section('title', 'SMK Assalaam')

@section('content')
    <!-- Hero Section -->
    <section style="padding: 100px 0; border-bottom: 4px solid var(--neo-dark); background-color: var(--neo-cyan); position: relative; overflow: hidden;">
        <!-- Retro Dot Matrix Background Overlay -->
        <div style="position: absolute; inset: 0; background-image: radial-gradient(var(--neo-dark) 1.5px, transparent 1.5px); background-size: 20px 20px; opacity: 0.15; pointer-events: none;"></div>
        
        <div class="container fade-in" style="position: relative; z-index: 10;">
            <div style="display: flex; flex-wrap: wrap; gap: 60px; align-items: center;">
                <div style="flex: 1.2; min-width: 320px;">
                    <span class="neo-badge neo-badge-yellow" style="margin-bottom: 20px; font-size: 0.9rem; padding: 8px 16px;">
                        🏫 Selamat Datang Di
                    </span>
                    <h1 style="font-size: 5rem; line-height: 0.95; color: var(--neo-white); -webkit-text-stroke: 2px var(--neo-dark); text-shadow: 6px 6px 0px var(--neo-dark); margin-bottom: 25px; text-transform: uppercase;">
                        SMK <br><span class="neo-outline-text">Assalaam</span>
                    </h1>
                    <p style="font-size: 1.25rem; font-weight: 700; color: var(--neo-dark); margin-bottom: 35px; max-width: 550px; background: #ffffff; padding: 15px; border: 3px solid var(--neo-dark); border-radius: 8px; box-shadow: 4px 4px 0px var(--neo-dark);">
                        Mencetak generasi unggul yang kompeten secara teknologi, siap kerja, dan berkarakter islami di era modern global.
                    </p>
                    
                    <div style="display: flex; flex-wrap: wrap; gap: 15px;">
                        <a href="{{ route('academic') }}" class="neo-btn neo-btn-yellow neo-btn-lg">
                            Program Kami <i class='bx bx-right-arrow-alt' style="font-size: 1.2rem;"></i>
                        </a>
                        <a href="{{ route('contact') }}" class="neo-btn neo-btn-white neo-btn-lg">
                            Hubungi Kami
                        </a>
                    </div>
                </div>
                
                <div style="flex: 1; min-width: 320px; display: flex; justify-content: center;">
                    <!-- Massive Frame Image Showcase -->
                    <div style="position: relative; width: 100%; max-width: 420px; height: 350px; background-color: var(--neo-yellow); border: 4px solid var(--neo-dark); border-radius: 16px; box-shadow: 12px 12px 0px var(--neo-dark);">
                        <div style="position: absolute; inset: -4px; border: 4px solid var(--neo-dark); border-radius: 16px; overflow: hidden; background: #ffffff;">
                            <img src="{{ asset('images/sakola.jpg') }}" alt="Gedung SMK Assalaam" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <!-- Quirky Badges stacked over image -->
                        <div class="neo-badge neo-badge-pink" style="position: absolute; top: 15px; right: -15px; transform: rotate(8deg); z-index: 20; box-shadow: 3px 3px 0px var(--neo-dark);">
                            TERAKREDITASI A!
                        </div>
                        <div class="neo-badge neo-badge-green" style="position: absolute; bottom: 15px; left: -15px; transform: rotate(-5deg); z-index: 20; box-shadow: 3px 3px 0px var(--neo-dark);">
                            BINAAN HONDA & MITSUBISHI
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section style="padding: 60px 0; border-bottom: 4px solid var(--neo-dark); background-color: #ffffff;">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 25px;">
                <div class="neo-card neo-card-hover neo-card-orange fade-in" style="padding: 25px; text-align: center;">
                    <h2 style="font-size: 3.5rem; color: var(--neo-white); -webkit-text-stroke: 1.5px var(--neo-dark); text-shadow: 3px 3px 0px var(--neo-dark); margin-bottom: 5px;">
                        <span class="counter" data-target="3000">0</span>+
                    </h2>
                    <p style="font-weight: 800; font-size: 0.95rem; text-transform: uppercase; color: var(--neo-dark);">Lulusan Terbaik</p>
                </div>
                <div class="neo-card neo-card-hover neo-card-green fade-in" style="padding: 25px; text-align: center; animation-delay: 0.1s;">
                    <h2 style="font-size: 3.5rem; color: var(--neo-white); -webkit-text-stroke: 1.5px var(--neo-dark); text-shadow: 3px 3px 0px var(--neo-dark); margin-bottom: 5px;">
                        <span class="counter" data-target="90">0</span>%
                    </h2>
                    <p style="font-weight: 800; font-size: 0.95rem; text-transform: uppercase; color: var(--neo-dark);">Telah Bekerja</p>
                </div>
                <div class="neo-card neo-card-hover neo-card-pink fade-in" style="padding: 25px; text-align: center; animation-delay: 0.2s;">
                    <h2 style="font-size: 3.5rem; color: var(--neo-white); -webkit-text-stroke: 1.5px var(--neo-dark); text-shadow: 3px 3px 0px var(--neo-dark); margin-bottom: 5px;">
                        <span class="counter" data-target="100">0</span>+
                    </h2>
                    <p style="font-weight: 800; font-size: 0.95rem; text-transform: uppercase; color: var(--neo-dark);">Dunia Industri</p>
                </div>
                <div class="neo-card neo-card-hover neo-card-cyan fade-in" style="padding: 25px; text-align: center; animation-delay: 0.3s;">
                    <h2 style="font-size: 3.5rem; color: var(--neo-white); -webkit-text-stroke: 1.5px var(--neo-dark); text-shadow: 3px 3px 0px var(--neo-dark); margin-bottom: 5px;">
                        <span class="counter" data-target="300">0</span>+
                    </h2>
                    <p style="font-weight: 800; font-size: 0.95rem; text-transform: uppercase; color: var(--neo-dark);">Kuliah di PTN</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Principal's Welcome Section -->
    <section style="padding: 100px 0; border-bottom: 4px solid var(--neo-dark); background-color: #E0F2FE;">
        <div class="container">
            <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 60px;">
                <!-- Left: Multi-layered Photo -->
                <div style="flex: 1; min-width: 320px; display: flex; justify-content: center; position: relative;">
                    <!-- Double Offset Frame -->
                    <div style="position: relative; width: 100%; max-width: 360px; height: 460px; background-color: var(--neo-dark); border-radius: 16px; border: 4px solid var(--neo-dark); box-shadow: 12px 12px 0px var(--neo-dark);">
                        <div style="position: absolute; inset: -4px; border: 4px solid var(--neo-dark); border-radius: 16px; overflow: hidden; background: #ffffff;">
                            <img src="{{ asset('images/pak.png') }}" alt="Kepala Sekolah" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="neo-card" style="position: absolute; bottom: -20px; left: 10px; right: 10px; padding: 15px; border-width: 3px; box-shadow: 4px 4px 0px var(--neo-dark); background: #ffffff; text-align: center; z-index: 10;">
                            <h4 style="font-size: 1.1rem; font-weight: 800; margin-bottom: 2px;">H. M. Luthfi Almanfaluthi, S.T., M.Pd.</h4>
                            <span class="neo-badge neo-badge-yellow" style="font-size: 0.75rem; padding: 3px 10px;">Kepala Sekolah</span>
                        </div>
                    </div>
                </div>

                <!-- Right: Welcome Content -->
                <div style="flex: 1.3; min-width: 320px;">
                    <div class="neo-card neo-card-white" style="padding: 40px; border-width: 4px; box-shadow: 8px 8px 0px var(--neo-dark);">
                        <span class="neo-badge neo-badge-orange" style="margin-bottom: 20px;">SAMBUTAN UTAMA</span>
                        <h2 style="font-size: 2.25rem; margin-bottom: 20px; color: var(--neo-dark);">Sambutan Kepala Sekolah</h2>
                        
                        <p style="font-family: 'Space Grotesque', sans-serif; font-style: italic; font-weight: 700; margin-bottom: 15px; color: #333;">
                            Assalamu'alaikum Warahmatullahi Wabarakatuh.
                        </p>
                        <p style="margin-bottom: 25px; line-height: 1.7; color: #4A4A4A; font-weight: 500;">
                            Salam sejahtera untuk kita semua. Selamat datang di website resmi SMK Assalaam Bandung. Website ini hadir sebagai sarana informasi dan komunikasi yang transparan, sejalan dengan pesatnya perkembangan teknologi di era industri 4.0 dan menyongsong era 5.0. Kami berkomitmen menyediakan platform yang memudahkan masyarakat, orang tua, maupun siswa dalam mengakses seluruh informasi mengenai kurikulum, prestasi, dan kegiatan pendidikan di SMK Assalaam Bandung secara cepat dan akurat.
                        </p>
                        
                        <a href="{{ route('sambutan') }}" class="neo-btn neo-btn-orange">
                            Selengkapnya <i class='bx bx-book-open'></i>
                        </a>

                        <!-- Compact Stats below text -->
                        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin-top: 35px; border-top: 3px dashed var(--neo-dark); padding-top: 25px;">
                            <div style="background: #ffffff; padding: 10px; border: 2px solid var(--neo-dark); border-radius: 8px; box-shadow: 2px 2px 0px var(--neo-dark); text-align: center;">
                                <h4 style="font-size: 1.3rem; margin-bottom: 2px;"><span class="counter" data-target="1600">0</span>+</h4>
                                <p style="font-size: 0.7rem; font-weight: 800; text-transform: uppercase; color: var(--neo-pink);">Peserta Didik</p>
                            </div>
                            <div style="background: #ffffff; padding: 10px; border: 2px solid var(--neo-dark); border-radius: 8px; box-shadow: 2px 2px 0px var(--neo-dark); text-align: center;">
                                <h4 style="font-size: 1.3rem; margin-bottom: 2px;"><span class="counter" data-target="38">0</span>+</h4>
                                <p style="font-size: 0.7rem; font-weight: 800; text-transform: uppercase; color: var(--neo-green);">Guru Tendik</p>
                            </div>
                            <div style="background: #ffffff; padding: 10px; border: 2px solid var(--neo-dark); border-radius: 8px; box-shadow: 2px 2px 0px var(--neo-dark); text-align: center;">
                                <h4 style="font-size: 1.3rem; margin-bottom: 2px;"><span class="counter" data-target="18">0</span>+</h4>
                                <p style="font-size: 0.7rem; font-weight: 800; text-transform: uppercase; color: var(--neo-cyan);">Kelas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Programs -->
    <section style="padding: 100px 0; border-bottom: 4px solid var(--neo-dark); background-color: #ffffff;">
        <div class="container">
            <div style="text-align: center; margin-bottom: 60px;">
                <span class="neo-badge neo-badge-green" style="margin-bottom: 15px;">PILHAN TERBAIK</span>
                <h2 style="font-size: 2.5rem; margin-bottom: 10px;">Ada jurusan apa aja sih??</h2>
                <p style="font-size: 1.1rem; font-weight: 600; color: #555;">Di SMK Assalaam memiliki 3 program keahlian unggulan yaitu:</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 35px;">
                <!-- RPL Card -->
                <div class="neo-card neo-card-hover neo-card-yellow fade-in" style="display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <div style="width: 70px; height: 70px; background: #ffffff; border: 3px solid var(--neo-dark); border-radius: 12px; display: flex; align-items: center; justify-content: center; box-shadow: 3px 3px 0px var(--neo-dark); margin-bottom: 25px;">
                            <i class='bx bx-laptop' style="font-size: 2.5rem; color: var(--neo-dark);"></i>
                        </div>
                        <h3 style="font-size: 1.35rem; margin-bottom: 15px;">RPL (Rekayasa Perangkat Lunak)</h3>
                        <p style="font-size: 0.95rem; font-weight: 500; color: #222; line-height: 1.6; margin-bottom: 25px;">
                            Mempelajari pengembangan perangkat lunak, aplikasi web modern, coding mobile apps, database, dan UI/UX design dengan standar industri terkini.
                        </p>
                    </div>
                    <a href="{{ route('rpl') }}" class="neo-btn neo-btn-dark" style="width: 100%; justify-content: center;">
                        Jelajahi RPL <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>

                <!-- TKR Card -->
                <div class="neo-card neo-card-hover neo-card-orange fade-in" style="display: flex; flex-direction: column; justify-content: space-between; animation-delay: 0.1s;">
                    <div>
                        <div style="width: 70px; height: 70px; background: #ffffff; border: 3px solid var(--neo-dark); border-radius: 12px; display: flex; align-items: center; justify-content: center; box-shadow: 3px 3px 0px var(--neo-dark); margin-bottom: 25px;">
                            <i class='bx bxs-car' style="font-size: 2.5rem; color: var(--neo-dark);"></i>
                        </div>
                        <h3 style="font-size: 1.35rem; margin-bottom: 15px;">TKR (Teknik Kendaraan Ringan)</h3>
                        <p style="font-size: 0.95rem; font-weight: 500; color: #222; line-height: 1.6; margin-bottom: 25px;">
                            Berfokus pada pemeliharaan otomotif, servis mesin, kelistrikan kendaraan roda empat, serta diagnosa mobil dengan scanner canggih.
                        </p>
                    </div>
                    <a href="{{ route('tkr') }}" class="neo-btn neo-btn-dark" style="width: 100%; justify-content: center;">
                        Jelajahi TKR <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>

                <!-- TBSM Card -->
                <div class="neo-card neo-card-hover neo-card-cyan fade-in" style="display: flex; flex-direction: column; justify-content: space-between; animation-delay: 0.2s;">
                    <div>
                        <div style="width: 70px; height: 70px; background: #ffffff; border: 3px solid var(--neo-dark); border-radius: 12px; display: flex; align-items: center; justify-content: center; box-shadow: 3px 3px 0px var(--neo-dark); margin-bottom: 25px;">
                            <i class='bx bx-cycling' style="font-size: 2.5rem; color: var(--neo-dark);"></i>
                        </div>
                        <h3 style="font-size: 1.35rem; margin-bottom: 15px;">TBSM (Teknik Bisnis Sepeda Motor)</h3>
                        <p style="font-size: 0.95rem; font-weight: 500; color: #222; line-height: 1.6; margin-bottom: 25px;">
                            Membekali keahlian servis motor injeksi modern, pemeliharaan sasis kelistrikan roda dua, serta dibekali pengetahuan manajemen bengkel.
                        </p>
                    </div>
                    <a href="{{ route('tbsm') }}" class="neo-btn neo-btn-dark" style="width: 100%; justify-content: center;">
                        Jelajahi TBSM <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Six Reasons Section -->
    <section style="padding: 100px 0; border-bottom: 4px solid var(--neo-dark); background-color: var(--neo-bg); position: relative; overflow: hidden;">
        <div class="container">
            <div style="text-align: center; margin-bottom: 50px;">
                <span class="neo-badge neo-badge-pink" style="margin-bottom: 15px;">KEUNGGULAN UTAMA</span>
                <h2 style="font-size: 2.5rem; max-width: 800px; margin: 0 auto 10px;">Enam alasan harus bersekolah di SMK ASSALAAM BANDUNG</h2>
            </div>

            <!-- Neobrutalist Bubbles Selector -->
            <div id="bubbles-container" style="display: flex; justify-content: center; gap: 15px; margin-bottom: 50px; overflow-x: auto; padding: 10px 0;">
                @foreach([1, 2, 3, 4, 5, 6] as $num)
                    <button class="neo-btn {{ $num == 1 ? 'neo-btn-pink' : 'neo-btn-white' }} reason-bubble" 
                            id="bubble-{{ $num }}"
                            onclick="switchReason({{ $num }})"
                            style="width: 55px; height: 55px; border-radius: 50%; font-size: 1.25rem; font-weight: 800; padding: 0;">
                        {{ $num }}
                    </button>
                @endforeach
            </div>

            <div class="neo-card neo-card-white" style="display: flex; flex-wrap: wrap; align-items: center; gap: 50px; padding: 50px; min-height: 400px; border-width: 4px; box-shadow: 10px 10px 0px var(--neo-dark);" id="reason-container">
                <!-- Left: Illustration -->
                <div style="flex: 1; min-width: 280px; text-align: center;">
                    <div style="position: relative; display: inline-block; padding: 30px; background: var(--neo-yellow); border: 3px solid var(--neo-dark); border-radius: 16px; box-shadow: 6px 6px 0px var(--neo-dark);" id="reason-icon-wrapper">
                        <i class='bx bxs-hand-up' id="reason-icon" style="font-size: 8rem; color: var(--neo-dark); transition: transform 0.3s ease;"></i>
                    </div>
                </div>

                <!-- Right: Reason Content -->
                <div style="flex: 1.5; min-width: 280px;">
                    <h3 id="reason-title" style="font-size: 1.75rem; color: var(--neo-dark); margin-bottom: 20px; text-transform: uppercase;">
                        KEUNGGULAN
                    </h3>
                    <p id="reason-desc" style="font-size: 1.05rem; font-weight: 500; color: #4A4A4A; line-height: 1.7; margin-bottom: 30px;">
                        Keahlian ganda merupakan salah satu keunggulannya, ini merupakan tambahan keahlian tiap paket keahlian sehingga tiap anak didik yang telah selesai melaksanakan sekolah tahap SMK mempunyai keahlian ganda yang bisa dipraktikkan di dunia kerja.
                    </p>
                    
                    <div id="reason-extra">
                        <p style="font-weight: 800; font-size: 0.95rem; text-transform: uppercase; color: var(--neo-dark); margin-bottom: 15px;">Beberapa Keunggulan lainnya dari SMK ASSALAAM BANDUNG :</p>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 12px;">
                            <div style="display: flex; align-items: center; gap: 10px; background: #ffffff; padding: 8px 12px; border: 2px solid var(--neo-dark); border-radius: 6px; box-shadow: 2px 2px 0px var(--neo-dark);">
                                <i class='bx bx-check' style="color: var(--neo-green); font-size: 1.3rem; font-weight: 900;"></i>
                                <span style="font-weight: 700; font-size: 0.85rem;">Teaching Factory</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 10px; background: #ffffff; padding: 8px 12px; border: 2px solid var(--neo-dark); border-radius: 6px; box-shadow: 2px 2px 0px var(--neo-dark);">
                                <i class='bx bx-check' style="color: var(--neo-green); font-size: 1.3rem; font-weight: 900;"></i>
                                <span style="font-weight: 700; font-size: 0.85rem;">Industries Education Based</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 10px; background: #ffffff; padding: 8px 12px; border: 2px solid var(--neo-dark); border-radius: 6px; box-shadow: 2px 2px 0px var(--neo-dark);">
                                <i class='bx bx-check' style="color: var(--neo-green); font-size: 1.3rem; font-weight: 900;"></i>
                                <span style="font-weight: 700; font-size: 0.85rem;">Terakreditasi A</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 10px; background: #ffffff; padding: 8px 12px; border: 2px solid var(--neo-dark); border-radius: 6px; box-shadow: 2px 2px 0px var(--neo-dark);">
                                <i class='bx bx-check' style="color: var(--neo-green); font-size: 1.3rem; font-weight: 900;"></i>
                                <span style="font-weight: 700; font-size: 0.85rem;">Peralatan Up To Date</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section style="padding: 100px 0; background-color: #ffffff;">
        <div class="container">
            <div style="text-align: center; margin-bottom: 60px;">
                <span class="neo-badge neo-badge-cyan" style="margin-bottom: 15px;">DOKUMENTASI NYATA</span>
                <h2 style="font-size: 2.5rem; margin-bottom: 10px;">Galeri Aktivitas Kami</h2>
                <p style="font-size: 1.1rem; font-weight: 600; color: #555;">Melihat sekilas kehidupan sehari-hari dan prestasi siswa-siswi SMK Assalaam.</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
                <div class="neo-card fade-in" style="padding: 10px; height: 300px; animation-delay: 0.1s;">
                    <div style="width: 100%; height: 100%; border-radius: 8px; overflow: hidden; border: 2px solid var(--neo-dark);">
                        <img src="{{ asset('images/ngoding.jpg') }}" alt="Aktivitas Coding RPL" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                    </div>
                </div>
                <div class="neo-card fade-in" style="padding: 10px; height: 300px; animation-delay: 0.2s;">
                    <div style="width: 100%; height: 100%; border-radius: 8px; overflow: hidden; border: 2px solid var(--neo-dark);">
                        <img src="{{ asset('images/motorr.jpg') }}" alt="Aktivitas Bengkel TBSM" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                    </div>
                </div>
                <div class="neo-card fade-in" style="padding: 10px; height: 300px; animation-delay: 0.3s;">
                    <div style="width: 100%; height: 100%; border-radius: 8px; overflow: hidden; border: 2px solid var(--neo-dark);">
                        <img src="{{ asset('images/mobil.jpg') }}" alt="Aktivitas Bengkel TKR" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                    </div>
                </div>
                <div class="neo-card fade-in" style="padding: 10px; height: 300px; animation-delay: 0.4s;">
                    <div style="width: 100%; height: 100%; border-radius: 8px; overflow: hidden; border: 2px solid var(--neo-dark);">
                        <img src="{{ asset('images/kelas.jpg') }}" alt="Suasana Kelas Pembelajaran" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                    </div>
                </div>
                <div class="neo-card fade-in" style="padding: 10px; height: 300px; animation-delay: 0.5s;">
                    <div style="width: 100%; height: 100%; border-radius: 8px; overflow: hidden; border: 2px solid var(--neo-dark);">
                        <img src="{{ asset('images/sholat.jpg') }}" alt="Ibadah Keagamaan di Mushola" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                    </div>
                </div>
                <div class="neo-card fade-in" style="padding: 10px; height: 300px; animation-delay: 0.6s;">
                    <div style="width: 100%; height: 100%; border-radius: 8px; overflow: hidden; border: 2px solid var(--neo-dark);">
                        <img src="{{ asset('images/ngaji.jpg') }}" alt="Kegiatan Tahfidz Quran" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const reasons = {
            1: {
                title: "KEUNGGULAN PENDIDIKAN",
                desc: "Keahlian ganda merupakan salah satu keunggulannya, ini merupakan tambahan keahlian tiap paket keahlian sehingga tiap anak didik yang telah selesai melaksanakan sekolah tahap SMK mempunyai keahlian ganda yang bisa dipraktikkan di dunia kerja.",
                icon: "bxs-hand-up",
                extra: `<p style="font-weight: 800; font-size: 0.95rem; text-transform: uppercase; color: var(--neo-dark); margin-bottom: 15px;">Beberapa Keunggulan lainnya dari SMK ASSALAAM BANDUNG :</p>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 12px;">
                            <div style="display: flex; align-items: center; gap: 10px; background: #ffffff; padding: 8px 12px; border: 2px solid var(--neo-dark); border-radius: 6px; box-shadow: 2px 2px 0px var(--neo-dark);"><i class='bx bx-check' style="color: var(--neo-green); font-size: 1.3rem; font-weight: 900;"></i><span style="font-weight: 700; font-size: 0.85rem;">Teaching Factory</span></div>
                            <div style="display: flex; align-items: center; gap: 10px; background: #ffffff; padding: 8px 12px; border: 2px solid var(--neo-dark); border-radius: 6px; box-shadow: 2px 2px 0px var(--neo-dark);"><i class='bx bx-check' style="color: var(--neo-green); font-size: 1.3rem; font-weight: 900;"></i><span style="font-weight: 700; font-size: 0.85rem;">Industries Education Based</span></div>
                            <div style="display: flex; align-items: center; gap: 10px; background: #ffffff; padding: 8px 12px; border: 2px solid var(--neo-dark); border-radius: 6px; box-shadow: 2px 2px 0px var(--neo-dark);"><i class='bx bx-check' style="color: var(--neo-green); font-size: 1.3rem; font-weight: 900;"></i><span style="font-weight: 700; font-size: 0.85rem;">Terakreditasi A</span></div>
                            <div style="display: flex; align-items: center; gap: 10px; background: #ffffff; padding: 8px 12px; border: 2px solid var(--neo-dark); border-radius: 6px; box-shadow: 2px 2px 0px var(--neo-dark);"><i class='bx bx-check' style="color: var(--neo-green); font-size: 1.3rem; font-weight: 900;"></i><span style="font-weight: 700; font-size: 0.85rem;">Peralatan Up To Date</span></div>
                        </div>`
            },
            2: {
                title: "JAMINAN MASA DEPAN",
                desc: "Anak didik dipersiapkan untuk bekerja, berwirausaha maupun melanjutkan ke perguruan tinggi. Mental, sikap serta kedisiplinan kami sesuaikan dengan Dunia Industri. Begitu juga dengan kurikulum telah dipersiapkan sesuai dengan kebutuhan dunia industri sehingga anak didik benar-benar siap terjun ke Dunia Industri ataupun Dunia Usaha.",
                icon: "bx-mobile-vibration",
                extra: `<div style="display: flex; flex-wrap: wrap; gap: 10px;">
                            <span class="neo-badge neo-badge-yellow">Maju Wirausaha</span>
                            <span class="neo-badge neo-badge-cyan">Siap Kerja Industri</span>
                            <span class="neo-badge neo-badge-green">Kesiapan Kuliah PTN</span>
                        </div>`
            },
            3: {
                title: "KERJASAMA DUNIA INDUSTRI (MoU)",
                desc: "Lebih dari 100 MoU dengan dunia industri dan dunia usaha sehingga kurikulum yang diterapkan pada kegiatan belajar peserta didik merupakan hasil musyawarah dengan DU/DI. Peserta didik di SMK Assalaam pun tidak perlu khawatir untuk menghadapi praktik kerja industri ataupun mencari peluang pekerjaan.",
                icon: "bx-devices",
                extra: `<div style="display: flex; align-items: center; gap: 10px; background: #ffffff; padding: 12px; border: 2px solid var(--neo-dark); border-radius: 8px; box-shadow: 3px 3px 0px var(--neo-dark); display: inline-flex;">
                            <i class='bx bx-check-shield' style="color: var(--neo-pink); font-size: 1.5rem;"></i>
                            <span style="font-weight: 700;">100+ Mitra Perusahaan Aktif</span>
                        </div>`
            },
            4: {
                title: "SERTIFIKASI PROFESSIONAL",
                desc: "Sertifikasi kompetensi akan didapatkan setelah dilaksanakan Uji Kompetensi yang dilaksanakan dengan para penguji Profesional dari Perusahaan yang telah MoU. Sertifikasi yang diberikan merupakan sertifikat yang dikeluarkan langsung oleh Industri.",
                icon: "bx-id-card",
                extra: `<div style="display: flex; gap: 15px; align-items: center;">
                            <span style="font-weight: 800; font-size: 0.9rem;">Sertifikasi Utama:</span>
                            <div style="padding: 10px 20px; background: var(--neo-cyan); border: 2px solid var(--neo-dark); border-radius: 8px; box-shadow: 2px 2px 0px var(--neo-dark); font-weight: 700; color: var(--neo-dark);">BELOGIX & AHM CERTIFICATE</div>
                        </div>`
            },
            5: {
                title: "FASILITAS SUPER MODERN",
                desc: "Untuk menunjang proses pembelajaran, kami menyediakan peralatan yang up to date sesuai dengan kebutuhan Dunia Industri serta memiliki unit produksi SMK Assalaam yang menjadi laboratorium langsung bagi siswa dalam mengembangkan keterampilan kejuruanannya.",
                icon: "bx-chat",
                extra: `<div style="display: flex; flex-wrap: wrap; gap: 10px;">
                            <span class="neo-badge neo-badge-green">Lab Coding Canggih</span>
                            <span class="neo-badge neo-badge-orange">Bengkel Standar AHASS</span>
                            <span class="neo-badge neo-badge-purple">Alat Praktik Terbaru</span>
                        </div>`
            },
            6: {
                title: "ETOS KERJA LULUSAN TINGGI",
                desc: "Lulusan SMK Assalaam dibekali dengan kemampuan yang disesuaikan Kebutuhan Industri, mempunyai Budaya Kerja Tinggi dan Terampil bekerja, memadukan ilmu kompetensi dengan akhlakul karimah yang islami.",
                icon: "bx-lock-alt",
                extra: `<div style="padding: 15px; background: var(--neo-yellow); border: 3px solid var(--neo-dark); border-radius: 10px; font-weight: 800; display: inline-flex; align-items: center; gap: 10px; box-shadow: 4px 4px 0px var(--neo-dark);">
                            <i class='bx bxs-star' style="color: var(--neo-white); -webkit-text-stroke: 1px #000;"></i>
                            <span>BINTANG DI DUNIA TEKNOLOGI & OTOMOTIF</span>
                        </div>`
            }
        };

        let currentReason = 1;

        function switchReason(idx) {
            currentReason = idx;
            const container = document.getElementById('reason-container');
            const title = document.getElementById('reason-title');
            const desc = document.getElementById('reason-desc');
            const icon = document.getElementById('reason-icon');
            const extra = document.getElementById('reason-extra');

            // Click feedback
            container.style.opacity = '0.5';
            container.style.transform = 'scale(0.99)';
            
            setTimeout(() => {
                const data = reasons[idx];
                title.innerText = data.title;
                desc.innerText = data.desc;
                icon.className = 'bx ' + data.icon;
                extra.innerHTML = data.extra;

                // Update bubble styling
                document.querySelectorAll('.reason-bubble').forEach(b => {
                    b.classList.remove('neo-btn-pink');
                    b.classList.add('neo-btn-white');
                });
                
                const activeBubble = document.getElementById('bubble-' + idx);
                activeBubble.classList.remove('neo-btn-white');
                activeBubble.classList.add('neo-btn-pink');

                container.style.opacity = '1';
                container.style.transform = 'scale(1)';
            }, 150);
        }
    </script>
@endsection
