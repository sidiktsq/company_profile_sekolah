@extends('layouts.app')

@section('title', 'SMK Assalaam')

@section('content')
    <!-- Hero Section -->
    <section class="hero" style="background-image: linear-gradient(90deg, rgba(0, 51, 102, 0.7) 10%, rgba(0, 51, 102, 0.2) 100%), url('{{ asset('images/sakola.jpg') }}'); background-size: cover; background-position: center;">
        <div class="container fade-in">
            <div class="hero-content">
                <span class="greeting">Selamat Datang Di</span>
                <h1>SMK <br> Assalaam</h1>
                
                <div class="hero-btns">
                    <a href="{{ route('academic') }}" class="btn btn-secondary">Program Kami</a>
                    <a href="{{ route('contact') }}" class="btn btn-primary" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border: 1px solid rgba(255,255,255,0.2);">Hubungi Kami</a>
                </div>
            </div>
        </div>
        
     
    </section>

    <!-- Stats Section -->
    <section class="stats" style="padding: 60px 0; background: var(--bg-light); border-bottom: 1px solid rgba(0,0,0,0.05);">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px; text-align: center;">
                <div class="stat-item fade-in">
                    <h2 style="font-size: 3rem; color: var(--secondary-color);"><span class="counter" data-target="25">0</span>+</h2>
                    <p>Tahun Keunggulan</p>
                </div>
                <div class="stat-item fade-in" style="animation-delay: 0.1s;">
                    <h2 style="font-size: 3rem; color: var(--secondary-color);"><span class="counter" data-target="1500">0</span>+</h2>
                    <p>Siswa Aktif</p>
                </div>
                <div class="stat-item fade-in" style="animation-delay: 0.2s;">
                    <h2 style="font-size: 3rem; color: var(--secondary-color);"><span class="counter" data-target="100">0</span>+</h2>
                    <p>Pendidik Ahli</p>
                </div>
                <div class="stat-item fade-in" style="animation-delay: 0.3s;">
                    <h2 style="font-size: 3rem; color: var(--secondary-color);"><span class="counter" data-target="50">0</span>+</h2>
                    <p>Penghargaan Global</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Principal's Welcome Section -->
    <section class="principal-welcome" style="padding: 100px 0; background-color: #f0f7f9;">
        <div class="container">
            <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 80px;">
                <!-- Left: Multi-layered Photo -->
                <div style="flex: 1; min-width: 350px; position: relative; height: 500px;">
                    <div style="position: absolute; top: 0; left: 0; width: 85%; height: 90%; border-radius: 20px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
                        <img src="{{ asset('images/smk.png') }}" alt="School Background" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.8;">
                    </div>
                    <div style="position: absolute; bottom: 0; right: 0; width: 75%; height: 75%; border-radius: 20px; overflow: hidden; box-shadow: 0 30px 60px rgba(0,0,0,0.2); border: 8px solid var(--white);">
                        <img src="{{ asset('images/pak.png') }}" alt="Kepala Sekolah" style="width: 100%; height: 100%; object-fit: cover;">
                        <div style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 30px; background: linear-gradient(transparent, rgba(0,0,0,0.8)); color: var(--white);">
                            <h3 style="margin-bottom: 5px; font-size: 1.5rem;">H. M. Luthfi Almanfaluthi, S.T., M.Pd.</h3>
                            <p style="font-size: 0.9rem; opacity: 0.9;">Kepala Sekolah</p>
                        </div>
                    </div>
                </div>

                <!-- Right: Welcome Content -->
                <div style="flex: 1.2; min-width: 350px;">
                    <h2 style="color: var(--primary-color); font-size: 2.25rem; margin-bottom: 25px; font-weight: 700;">Sambutan Kepala Sekolah</h2>
                    <p style="font-style: italic; margin-bottom: 20px; color: #555;">Assalamu'alaikum Warahmatullahi Wabarakatuh.</p>
                    <p style="margin-bottom: 30px; line-height: 1.8; color: #444; font-size: 1.05rem;">
                        Salam sejahtera untuk kita semua. Selamat datang di website resmi SMK Assalaam Bandung.Website ini hadir sebagai sarana informasi dan komunikasi yang transparan, sejalan dengan pesatnya perkembangan teknologi di era industri 4.0 dan menyongsong era 5.0. Kami berkomitmen menyediakan platform yang memudahkan masyarakat, orang tua, maupun siswa dalam mengakses seluruh informasi mengenai kurikulum, prestasi, dan kegiatan pendidikan di SMK Assalaam Bandung secara cepat dan akurat.
                    </p>
                    <a href="{{ route('sambutan') }}" class="btn btn-primary" style="background: #ef6c00; border-color: #ef6c00;">Selengkapnya</a>

                    <!-- Compact Stats below text -->
                    <div style="display: flex; gap: 40px; margin-top: 50px; border-top: 1px solid rgba(0,0,0,0.1); padding-top: 40px;">
                        <div style="display: flex; align-items: center; gap: 15px;">
                            <div style="width: 4px; height: 40px; background: #ef6c00; border-radius: 2px;"></div>
                            <div>
                                <h4 style="font-size: 1.75rem; color: #333; margin-bottom: 2px;"><span class="counter" data-target="1206">0</span> +</h4>
                                <p style="font-size: 0.8rem; color: #e53935; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Peserta Didik</p>
                            </div>
                        </div>
                        <div style="display: flex; align-items: center; gap: 15px;">
                            <div style="width: 4px; height: 40px; background: #ef6c00; border-radius: 2px;"></div>
                            <div>
                                <h4 style="font-size: 1.75rem; color: #333; margin-bottom: 2px;"><span class="counter" data-target="65">0</span> +</h4>
                                <p style="font-size: 0.8rem; color: #e53935; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Guru Tendik</p>
                            </div>
                        </div>
                        <div style="display: flex; align-items: center; gap: 15px;">
                            <div style="width: 4px; height: 40px; background: #ef6c00; border-radius: 2px;"></div>
                            <div>
                                <h4 style="font-size: 1.75rem; color: #333; margin-bottom: 2px;"><span class="counter" data-target="386">0</span> +</h4>
                                <p style="font-size: 0.8rem; color: #e53935; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Kelas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Programs -->
    <section style="padding: 100px 0;">
        <div class="container">
            <div class="section-header">
                <h2>Ada jurusan apa aja sih??</h2>
                <p>Di Smk Assalaam memiliki 3 jurusan yaitu:</p>
            </div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                <div class="card fade-in" style="padding: 40px; border-radius: 20px; box-shadow: var(--shadow-md); transition: var(--transition); background: var(--white); border-bottom: 5px solid var(--secondary-color);">
                    <i class='bx bx-laptop' style="font-size: 3rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                    <h3>RPL (Rekayasa Perangkat Lunak)</h3>
                    <p>Mempelajari pengembangan perangkat lunak, aplikasi web, dan mobile dengan standar industri terkini.</p>
                    <a href="{{ route('rpl') }}" style="display: inline-block; margin-top: 20px; color: var(--secondary-color); font-weight: 600;">Jelajahi <i class='bx bx-right-arrow-alt'></i></a>
                </div>
                <div class="card fade-in" style="padding: 40px; border-radius: 20px; box-shadow: var(--shadow-md); transition: var(--transition); background: var(--white); border-bottom: 5px solid var(--primary-color); animation-delay: 0.1s;">
                    <i class='bx bxs-car' style="font-size: 3rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                    <h3>TKR (Teknik Kendaraan Ringan)</h3>
                    <p>Fokus pada perawatan dan perbaikan kendaraan otomotif modern dengan alat diagnostik canggih.</p>
                    <a href="{{ route('tkr') }}" style="display: inline-block; margin-top: 20px; color: var(--secondary-color); font-weight: 600;">Jelajahi <i class='bx bx-right-arrow-alt'></i></a>
                </div>
                <div class="card fade-in" style="padding: 40px; border-radius: 20px; box-shadow: var(--shadow-md); transition: var(--transition); background: var(--white); border-bottom: 5px solid var(--secondary-color); animation-delay: 0.2s;">
                    <i class='bx bx-cycling' style="font-size: 3rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                    <h3>TBSM (Teknik Bisnis Sepeda Motor)</h3>
                    <p>Keahlian dalam servis sepeda motor dan manajemen bengkel resmi dengan dukungan industri.</p>
                    <a href="{{ route('tbsm') }}" style="display: inline-block; margin-top: 20px; color: var(--secondary-color); font-weight: 600;">Jelajahi <i class='bx bx-right-arrow-alt'></i></a>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Six Reasons Section (New) -->
    <section style="padding: 100px 0; background-color: #f0f8ff; position: relative; overflow: hidden;">
        <!-- Clouds background elements (subtle) -->
        <div style="position: absolute; top: 10%; left: -50px; opacity: 0.1;"><i class='bx bxs-cloud' style="font-size: 15rem; color: #fff;"></i></div>
        <div style="position: absolute; bottom: 10%; right: -50px; opacity: 0.1;"><i class='bx bxs-cloud' style="font-size: 20rem; color: #fff;"></i></div>

        <div class="container">
            <div class="section-header" style="text-align: center; margin-bottom: 60px;">
                <h2 style="color: #2c3e50; font-size: 2.2rem; font-weight: 700;">Enam alasan harus bersekolah di SMK ASSALAAM BANDUNG</h2>
            </div>

            <div id="bubbles-container" style="display: flex; justify-content: center; gap: 15px; margin-bottom: 60px; overflow-x: auto; padding: 10px 0; -webkit-overflow-scrolling: touch;">
                @foreach([1, 2, 3, 4, 5, 6] as $num)
                    <div class="reason-bubble {{ $num == 1 ? 'active' : '' }}" 
                         id="bubble-{{ $num }}"
                         onclick="switchReason({{ $num }})"
                         style="flex: 0 0 auto; width: 50px; height: 50px; border-radius: 50%; background: {{ $num == 1 ? '#007bff' : '#d1e7ff' }}; color: {{ $num == 1 ? '#fff' : '#007bff' }}; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.2rem; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                        {{ $num }}
                    </div>
                @endforeach
            </div>

            <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 50px; background: rgba(255,255,255,0.5); padding: 40px; border-radius: 30px; backdrop-filter: blur(10px); min-height: 400px; transition: opacity 0.3s ease;" id="reason-container">
                <!-- Left: Illustration -->
                <div style="flex: 1; min-width: 300px; text-align: center;">
                    <div style="position: relative; display: inline-block;" id="reason-icon-wrapper">
                        <i class='bx bxs-hand-up' id="reason-icon" style="font-size: 10rem; color: #f1c40f; transition: all 0.3s ease;"></i>
                        <div style="position: absolute; top: -20px; right: -20px; display: grid; grid-template-columns: repeat(3, 1fr); gap: 5px;">
                            @for($i=0; $i<9; $i++)
                                <div style="width: 15px; height: 15px; background: #000; border-radius: 50%;"></div>
                            @endfor
                        </div>
                    </div>
                </div>

                <!-- Right: Reason Content -->
                <div style="flex: 1.5; min-width: 300px;">
                    <h3 id="reason-title" style="text-transform: uppercase; color: #2c3e50; font-weight: 800; letter-spacing: 2px; margin-bottom: 20px;">KEUNGGULAN</h3>
                    <p id="reason-desc" style="color: #555; line-height: 1.8; margin-bottom: 25px;">Keahlian ganda merupakan salah satu keunggulannya, ini merupakan tambahan keahlian tiap paket keahlian sehingga tiap anak didik yang telah selesai melaksanakan sekolah tahap SMK mempunyai keahlian ganda yang bisa dipraktikkan di dunia kerja.</p>
                    
                    <div id="reason-extra" style="display: grid; grid-template-columns: 1fr; gap: 15px;">
                        <p style="font-size: 0.9rem; color: #333; font-weight: 600;">Beberapa Keunggulan lainnya dari SMK ASSALAAM BANDUNG :</p>
                        <div style="display: flex; align-items: center; gap: 10px;">
                            <i class='bx bx-check' style="color: #27ae60; font-weight: bold;"></i>
                            <span>Teaching Factory</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 10px;">
                            <i class='bx bx-check' style="color: #27ae60; font-weight: bold;"></i>
                            <span>Industries Education Based</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 10px;">
                            <i class='bx bx-check' style="color: #27ae60; font-weight: bold;"></i>
                            <span>Terakreditasi A</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 10px;">
                            <i class='bx bx-check' style="color: #27ae60; font-weight: bold;"></i>
                            <span>Peralatan Praktik Up To Date</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section style="padding: 100px 0; background: var(--white);">
        <div class="container">
            <div class="section-header">
                <h2>Galeri Aktivitas Kami</h2>
                <p>Melihat sekilas kehidupan sehari-hari dan prestasi siswa-siswi EduGold.</p>
            </div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
                <div class="gallery-item fade-in" style="height: 300px; border-radius: 15px; overflow: hidden; box-shadow: var(--shadow-md);">
                    <img src="{{ asset('images/ngoding.jpg') }}" alt="Activity 1" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                </div>
                <div class="gallery-item fade-in" style="height: 300px; border-radius: 15px; overflow: hidden; box-shadow: var(--shadow-md); animation-delay: 0.1s;">
                    <img src="{{ asset('images/motorr.jpg') }}" alt="Activity 2" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                </div>
                <div class="gallery-item fade-in" style="height: 300px; border-radius: 15px; overflow: hidden; box-shadow: var(--shadow-md); animation-delay: 0.2s;">
                    <img src="{{ asset('images/mobil.jpg') }}" alt="Activity 3" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                </div>
                <div class="gallery-item fade-in" style="height: 300px; border-radius: 15px; overflow: hidden; box-shadow: var(--shadow-md); animation-delay: 0.3s;">
                    <img src="{{ asset('images/kelas.jpg') }}" alt="Activity 4" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                </div>
                <div class="gallery-item fade-in" style="height: 300px; border-radius: 15px; overflow: hidden; box-shadow: var(--shadow-md); animation-delay: 0.4s;">
                    <img src="{{ asset('images/sholat.jpg') }}" alt="Activity 5" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                </div>
                <div class="gallery-item fade-in" style="height: 300px; border-radius: 15px; overflow: hidden; box-shadow: var(--shadow-md); animation-delay: 0.5s;">
                    <img src="{{ asset('images/ngaji.jpg') }}" alt="Activity 6" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                </div>
            </div>
        </div>
    </section>

    <style>
        .card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }
        .gallery-item:hover img {
            transform: scale(1.1);
        }
        .reason-bubble:hover {
            transform: scale(1.1);
            background: #007bff !important;
            color: #fff !important;
        }
        .reason-bubble.active {
            background: #007bff !important;
            color: #fff !important;
        }
        #bubbles-container::-webkit-scrollbar {
            display: none;
        }
        #bubbles-container {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
    <script>
        const reasons = {
            1: {
                title: "KEUNGGULAN",
                desc: "Keahlian ganda merupakan salah satu keunggulannya, ini merupakan tambahan keahlian tiap paket keahlian sehingga tiap anak didik yang telah selesai melaksanakan sekolah tahap SMK mempunyai keahlian ganda yang bisa dipraktikkan di dunia kerja.",
                icon: "bxs-hand-up",
                iconColor: "#f1c40f",
                extra: `<p style="font-size: 0.9rem; color: #333; font-weight: 600;">Beberapa Keunggulan lainnya dari SMK ASSALAAM BANDUNG :</p>
                        <div style="display: flex; align-items: center; gap: 10px;"><i class='bx bx-check' style="color: #27ae60; font-weight: bold;"></i><span>Teaching Factory</span></div>
                        <div style="display: flex; align-items: center; gap: 10px;"><i class='bx bx-check' style="color: #27ae60; font-weight: bold;"></i><span>Industries Education Based</span></div>
                        <div style="display: flex; align-items: center; gap: 10px;"><i class='bx bx-check' style="color: #27ae60; font-weight: bold;"></i><span>Terakreditasi A</span></div>
                        <div style="display: flex; align-items: center; gap: 10px;"><i class='bx bx-check' style="color: #27ae60; font-weight: bold;"></i><span>Peralatan Praktik Up To Date</span></div>`
            },
            2: {
                title: "JAMINAN PENDIDIKAN",
                desc: "Anak didik dipersiapkan untuk bekerja, berwirausaha maupun melanjutkan ke perguruan tinggi. Mental, sikap serta kedisiplinan kami sesuaikan dengan Dunia Industri. Begitu juga dengan kurikulum telah dipersiapkan sesuai dengan kebutuhan dunia industri sehingga anak didik benar-benar siap terjun ke Dunia Industri ataupun Dunia Usaha.",
                icon: "bx-mobile-vibration",
                iconColor: "#f1c40f",
                extra: ""
            },
            3: {
                title: "KERJASAMA DUNIA INDUSTRI",
                desc: "Lebih dari 100 MoU dengan dunia industri dan dunia usaha sehingga kurikulum yang diterapkan pada kegiatan belajar peserta didik merupakan hasil musyawarah dengan DU/DI. Peserta didik di SMK Assalaam pun tidak perlu khawatir untuk menghadapi praktik kerja industri ataupun mencari peluang pekerjaan.",
                icon: "bx-devices",
                iconColor: "#f1c40f",
                extra: ""
            },
            4: {
                title: "SERTIFIKASI",
                desc: "Sertifikasi kompetensi akan didapatkan setelah dilaksanakan Uji Kompetensi yang dilaksanakan dengan para penguji Profesional dari Perusahaan yang telah MoU. Sertifikasi yang diberikan merupakan sertifikat yang dikeluarkan langsung oleh Industri.",
                icon: "bx-id-card",
                iconColor: "#f1c40f",
                extra: `<div style="padding: 10px 20px; border: 1px solid #003366; border-radius: 10px; display: inline-block; font-weight: 600; color: #003366;">BELOGIX</div>`
            },
            5: {
                title: "FASILITAS",
                desc: "Untuk menunjang proses pembelajaran, kami menyediakan peralatan yang up to date sesuai dengan kebutuhan Dunia Industri serta memiliki unit produksi SMK Assalaam yang menjadi laboratorium langsung bagi siswa dalam mengembangkan keterampilan kejuruanannya.",
                icon: "bx-chat",
                iconColor: "#f1c40f",
                extra: ""
            },
            6: {
                title: "LULUSAN",
                desc: "Lulusan SMK Assalaam dibekali dengan kemampuan yang disesuaikan Kebutuhan Industri, mempunyai Budaya Kerja Tinggi dan Terampil bekerja.",
                icon: "bx-lock-alt",
                iconColor: "#f1c40f",
                extra: ""
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

            // Animation
            container.style.opacity = '0';
            
            setTimeout(() => {
                // Update content
                const data = reasons[idx];
                title.innerText = data.title;
                desc.innerText = data.desc;
                icon.className = 'bx ' + data.icon;
                icon.style.color = data.iconColor;
                extra.innerHTML = data.extra;

                // Update bubbles
                document.querySelectorAll('.reason-bubble').forEach(b => {
                    b.classList.remove('active');
                    b.style.background = '#d1e7ff';
                    b.style.color = '#007bff';
                });
                const activeBubble = document.getElementById('bubble-' + idx);
                activeBubble.classList.add('active');
                activeBubble.style.background = '#007bff';
                activeBubble.style.color = '#fff';

                container.style.opacity = '1';
            }, 300);
        }

        function nextReason() {
            let next = currentReason + 1;
            if (next > 6) next = 1;
            switchReason(next);
        }

        function prevReason() {
            let prev = currentReason - 1;
            if (prev < 1) prev = 6;
            switchReason(prev);
        }

        // Swipe Logic
        const container = document.getElementById('reason-container');
        let touchstartX = 0;
        let touchendX = 0;

        container.addEventListener('touchstart', e => {
            touchstartX = e.changedTouches[0].screenX;
        }, {passive: true});

        container.addEventListener('touchend', e => {
            touchendX = e.changedTouches[0].screenX;
            handleGesture();
        }, {passive: true});

        function handleGesture() {
            if (touchendX < touchstartX - 50) nextReason();
            if (touchendX > touchstartX + 50) prevReason();
        }

        // Mouse Drag Logic
        let isDown = false;
        let startX;

        container.addEventListener('mousedown', (e) => {
            isDown = true;
            startX = e.pageX;
        });

        container.addEventListener('mouseleave', () => {
            isDown = false;
        });

        container.addEventListener('mouseup', (e) => {
            if(!isDown) return;
            isDown = false;
            let endX = e.pageX;
            if (endX < startX - 50) nextReason();
            if (endX > startX + 50) prevReason();
        });
    </script>
@endsection
