@extends('layouts.app')

@section('title', 'Hubungi Kami')

@section('content')
    <style>
        .page-header {
            padding: 150px 0 80px;
            background: linear-gradient(rgba(0, 51, 102, 0.8), rgba(0, 51, 102, 0.8)), url('https://images.unsplash.com/photo-1534536281715-e28d76689b4d?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            color: var(--white);
            text-align: center;
        }

        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            padding: 100px 0;
        }

        .contact-form {
            background: var(--white);
            padding: 50px;
            border-radius: 20px;
            box-shadow: var(--shadow-lg);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            color: var(--primary-color);
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-family: inherit;
            transition: var(--transition);
        }

        .form-group input:focus, .form-group textarea:focus {
            border-color: var(--secondary-color);
            outline: none;
            box-shadow: 0 0 10px rgba(212, 175, 55, 0.2);
        }

        .contact-info-item {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            margin-bottom: 40px;
        }

        .contact-info-item i {
            font-size: 2rem;
            color: var(--secondary-color);
            background: var(--bg-light);
            padding: 15px;
            border-radius: 15px;
        }

        .map-wrapper {
            width: 100%;
            height: 400px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-md);
            margin-top: 50px;
        }
    </style>

    <header class="page-header">
        <div class="container fade-in">
            <h1 style="color: white;" >Terhubung Dengan Kami</h1>
            <p>Kami di sini untuk menjawab pertanyaan Anda dan menyambut Anda di komunitas kami.</p>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="contact-container">
                <!-- Contact Info -->
                <div class="fade-in">
                    <h2 style="margin-bottom: 30px;">Hubungi Kami</h2>
                    <p style="margin-bottom: 50px; color: var(--text-light);">Apakah Anda calon orang tua siswa, anggota komunitas, atau hanya penasaran, kami akan senang mendengar dari Anda.</p>
                    
                        <div class="contact-info-item">
                        <i class='bx bxs-map'></i>
                        <div>
                            <h3>Lokasi</h3>
                            <p>Jl. Situ Tarate, Cangkuang Kulon, Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40239</p>
                        </div>
                    </div>
                    
                    <div class="contact-info-item">
                        <i class='bx bxs-phone'></i>
                        <div>
                            <h3>Telepon</h3>
                            <p>+1 234 567 890 (Resepsionis)<br>+1 234 567 891 (Pendaftaran)</p>
                        </div>
                    </div>
                    
                    <div class="contact-info-item">
                        <i class='bx bxs-envelope'></i>
                        <div>
                            <h3>Email</h3>
                            <p>info@smkassalaambandung.school<br>pendaftaran@smkassalaambandung.school</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form fade-in" style="animation-delay: 0.1s;">
                    <form action="#" method="POST">
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" id="name" name="name" placeholder="Budi Santoso" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Alamat Email</label>
                            <input type="email" id="email" name="email" placeholder="budi@example.com" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subjek</label>
                            <input type="text" id="subject" name="subject" placeholder="Pertanyaan Pendaftaran" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Pesan Anda</label>
                            <textarea id="message" name="message" rows="5" placeholder="Bagaimana kami bisa membantu Anda?" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Kirim Pesan</button>
                    </form>
                </div>
            </div>

            <!-- Map -->
            <div class="map-wrapper fade-in" style="animation-delay: 0.2s; margin-bottom: 100px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5234567890!2d107.5928!3d-6.9669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8e8e8e8e8e8%3A0x1234567890abcdef!2sSMK%20Assalaam%20Bandung!5e0!3m2!1sid!2sid!4v1707290000000!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
@endsection
