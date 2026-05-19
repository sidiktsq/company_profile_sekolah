@extends('layouts.app')

@section('title', 'Hasil Pencarian')

@section('content')
<section style="padding: 120px 0 80px; background-color: var(--neo-bg); min-height: 80vh; position: relative;">
    <!-- Retro Dot Matrix Background Overlay -->
    <div style="position: absolute; inset: 0; background-image: radial-gradient(var(--neo-dark) 1.5px, transparent 1.5px); background-size: 20px 20px; opacity: 0.15; pointer-events: none;"></div>

    <div class="container" style="position: relative; z-index: 10;">
        <div style="max-width: 800px; margin: 0 auto;">
            <!-- Back Button -->
            <div style="margin-bottom: 40px;" class="fade-in">
                <a href="{{ route('home') }}" class="neo-btn neo-btn-white">
                    <i class='bx bx-left-arrow-alt' style="font-size: 1.3rem;"></i> KEMBALI KE BERANDA
                </a>
            </div>
            
            <div style="margin-bottom: 50px; text-align: center;" class="fade-in">
                <span class="neo-badge neo-badge-yellow" style="margin-bottom: 15px;">DATABASE KAMPUS</span>
                <h1 style="font-size: 2.75rem; margin-bottom: 15px; -webkit-text-stroke: 1px #000; text-shadow: 3px 3px 0px var(--neo-yellow);">Hasil Pencarian</h1>
                <div class="neo-card neo-card-white" style="display: inline-block; padding: 12px 25px; border-width: 2.5px; box-shadow: 4px 4px 0px var(--neo-dark); font-weight: 700;">
                    @if($query)
                        Menampilkan hasil pencarian untuk: <span class="neo-badge neo-badge-pink" style="font-size: 0.85rem; margin-left: 5px;">"{{ $query }}"</span>
                    @else
                        Silakan masukkan kata kunci pada tombol pencarian di navbar.
                    @endif
                </div>
            </div>

            @if(count($results) > 0)
                <div style="display: grid; gap: 30px;" class="fade-in">
                    @foreach($results as $result)
                        <div class="neo-card neo-card-hover neo-card-white" style="border-width: 3.5px; box-shadow: 6px 6px 0px var(--neo-dark); padding: 35px;">
                            <span class="neo-badge neo-badge-cyan" style="margin-bottom: 15px; font-size: 0.75rem;">HALAMAN SEKOLAH</span>
                            <h3 style="margin-bottom: 12px; font-size: 1.5rem;">
                                <a href="{{ route($result->route) }}" style="color: var(--neo-dark); text-decoration: none; font-weight: 800; transition: color 0.15s ease;">
                                    {{ $result->title }}
                                </a>
                            </h3>
                            <p style="color: #4A4A4A; line-height: 1.7; font-weight: 500; margin-bottom: 25px;">{{ $result->content }}</p>
                            
                            <a href="{{ route($result->route) }}" class="neo-btn neo-btn-cyan" style="font-size: 0.85rem; padding: 8px 16px;">
                                Baca Selengkapnya <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                @if($query)
                    <div class="neo-card neo-card-yellow fade-in" style="text-align: center; padding: 60px 40px; border-width: 4px; box-shadow: 8px 8px 0px var(--neo-dark);">
                        <div style="width: 80px; height: 80px; background: #ffffff; border: 3px solid var(--neo-dark); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 4px 4px 0px var(--neo-dark); margin: 0 auto 25px; font-size: 3rem;">
                            🔍
                        </div>
                        <h3 style="color: var(--neo-dark); margin-bottom: 12px; font-size: 1.5rem;">Maaf, tidak ada hasil yang ditemukan</h3>
                        <p style="color: #333; font-weight: 600; max-width: 500px; margin: 0 auto;">Kami tidak dapat menemukan kecocokan kata kunci pencarian. Coba gunakan kata kunci lain yang lebih umum (contoh: "RPL", "Profil", "Kontak").</p>
                    </div>
                @endif
            @endif
        </div>
    </div>
</section>
@endsection
