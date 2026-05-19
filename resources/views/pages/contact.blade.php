@extends('layouts.app')

@section('title', 'Hubungi Kami')

@section('content')
    <!-- Neobrutalist Page Header -->
    <header class="page-header-neo" style="background-color: var(--neo-cyan);">
        <div class="container fade-in">
            <span class="neo-badge neo-badge-yellow" style="margin-bottom: 15px;">HUBUNGI KAMI</span>
            <h1>Terhubung Dengan Kami</h1>
            <p>Kami siap menjawab setiap pertanyaan Anda dan menyambut Anda di komunitas kami.</p>
        </div>
    </header>

    <section style="padding: 100px 0; background-color: var(--neo-bg);">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 60px; align-items: flex-start; margin-bottom: 60px;">
                
                <!-- Contact Info -->
                <div class="fade-in">
                    <span class="neo-badge neo-badge-pink" style="margin-bottom: 15px;">RESEPSIONIS KAMPUS</span>
                    <h2 style="font-size: 2.25rem; margin-bottom: 20px; color: var(--neo-dark);">Informasi Kontak</h2>
                    <p style="font-size: 1.05rem; font-weight: 500; color: #4A4A4A; line-height: 1.7; margin-bottom: 40px;">
                        Apakah Anda calon orang tua siswa, perwakilan industri, alumni, atau sekadar penasaran dengan program kami? Hubungi kami sekarang.
                    </p>
                    
                    <div style="display: grid; gap: 20px;">
                        <!-- Lokasi -->
                        <div class="neo-card neo-card-white" style="display: flex; gap: 20px; align-items: flex-start; padding: 25px; border-width: 3px; box-shadow: 5px 5px 0px var(--neo-dark);">
                            <div style="width: 50px; height: 50px; background: var(--neo-yellow); border: 2.5px solid var(--neo-dark); border-radius: 8px; display: flex; align-items: center; justify-content: center; box-shadow: 2px 2px 0px var(--neo-dark); font-size: 1.5rem; flex-shrink: 0;">
                                <i class='bx bxs-map'></i>
                            </div>
                            <div>
                                <h3 style="font-size: 1.15rem; margin-bottom: 5px;">Lokasi Kampus</h3>
                                <p style="font-size: 0.9rem; font-weight: 500; color: #4A4A4A;">Jl. Situ Tarate, Cangkuang Kulon, Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40239</p>
                            </div>
                        </div>

                        <!-- Telepon -->
                        <div class="neo-card neo-card-white" style="display: flex; gap: 20px; align-items: flex-start; padding: 25px; border-width: 3px; box-shadow: 5px 5px 0px var(--neo-dark);">
                            <div style="width: 50px; height: 50px; background: var(--neo-cyan); border: 2.5px solid var(--neo-dark); border-radius: 8px; display: flex; align-items: center; justify-content: center; box-shadow: 2px 2px 0px var(--neo-dark); font-size: 1.5rem; flex-shrink: 0;">
                                <i class='bx bxs-phone'></i>
                            </div>
                            <div>
                                <h3 style="font-size: 1.15rem; margin-bottom: 5px;">Nomor Telepon</h3>
                                <p style="font-size: 0.9rem; font-weight: 500; color: #4A4A4A;">+62 22 5420220 (Resepsionis)<br>+62 22 5420221 (Info Pendaftaran)</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="neo-card neo-card-white" style="display: flex; gap: 20px; align-items: flex-start; padding: 25px; border-width: 3px; box-shadow: 5px 5px 0px var(--neo-dark);">
                            <div style="width: 50px; height: 50px; background: var(--neo-pink); border: 2.5px solid var(--neo-dark); border-radius: 8px; display: flex; align-items: center; justify-content: center; box-shadow: 2px 2px 0px var(--neo-dark); font-size: 1.5rem; flex-shrink: 0;">
                                <i class='bx bxs-envelope'></i>
                            </div>
                            <div>
                                <h3 style="font-size: 1.15rem; margin-bottom: 5px;">Surat Elektronik</h3>
                                <p style="font-size: 0.9rem; font-weight: 500; color: #4A4A4A;">info@smkassalaambandung.school<br>pendaftaran@smkassalaambandung.school</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="neo-card neo-card-white fade-in" style="padding: 40px; border-width: 4px; box-shadow: 8px 8px 0px var(--neo-dark); animation-delay: 0.1s;">
                    <span class="neo-badge neo-badge-orange" style="margin-bottom: 20px;">KIRIM PESAN DIGITAL</span>
                    <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Pesan berhasil terkirim!');">
                        <div style="margin-bottom: 20px;">
                            <label for="name" style="display: block; font-weight: 800; font-size: 0.85rem; text-transform: uppercase; margin-bottom: 8px;">Nama Lengkap</label>
                            <input type="text" id="name" name="name" placeholder="Budi Santoso" class="neo-input" required>
                        </div>
                        <div style="margin-bottom: 20px;">
                            <label for="email" style="display: block; font-weight: 800; font-size: 0.85rem; text-transform: uppercase; margin-bottom: 8px;">Alamat Email</label>
                            <input type="email" id="email" name="email" placeholder="budi@example.com" class="neo-input" required>
                        </div>
                        <div style="margin-bottom: 20px;">
                            <label for="subject" style="display: block; font-weight: 800; font-size: 0.85rem; text-transform: uppercase; margin-bottom: 8px;">Subjek Pesan</label>
                            <input type="text" id="subject" name="subject" placeholder="Informasi Pendaftaran Siswa Baru" class="neo-input" required>
                        </div>
                        <div style="margin-bottom: 25px;">
                            <label for="message" style="display: block; font-weight: 800; font-size: 0.85rem; text-transform: uppercase; margin-bottom: 8px;">Isi Pesan Anda</label>
                            <textarea id="message" name="message" rows="4" placeholder="Bagaimana kami dapat membantu Anda?" class="neo-input" style="resize: vertical;" required></textarea>
                        </div>
                        <button type="submit" class="neo-btn neo-btn-orange" style="width: 100%; justify-content: center; padding: 15px;">
                            Kirim Pesan Sekarang <i class='bx bx-send' style="font-size: 1.2rem;"></i>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Map Frame -->
            <div class="neo-card fade-in" style="padding: 0; height: 420px; border-width: 4px; box-shadow: 10px 10px 0px var(--neo-dark); overflow: hidden; animation-delay: 0.2s;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5234567890!2d107.5928!3d-6.9669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8e8e8e8e8e8%3A0x1234567890abcdef!2sSMK%20Assalaam%20Bandung!5e0!3m2!1sid!2sid!4v1707290000000!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
@endsection
