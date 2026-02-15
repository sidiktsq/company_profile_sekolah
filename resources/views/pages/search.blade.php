@extends('layouts.app')

@section('title', 'Hasil Pencarian')

@section('content')
<section style="padding: 120px 0 80px; background: #f8fafc; min-height: 80vh;">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;">
            <div style="margin-bottom: 50px; text-align: center;">
                <h1 style="color: var(--primary-color); font-size: 2.5rem; font-weight: 800; margin-bottom: 15px;">Hasil Pencarian</h1>
                <p style="color: #64748b; font-size: 1.1rem;">
                    @if($query)
                        Menampilkan hasil untuk: <strong>"{{ $query }}"</strong>
                    @else
                        Silakan masukkan kata kunci untuk mencari.
                    @endif
                </p>
            </div>

            @if(count($results) > 0)
                <div style="display: grid; gap: 25px;">
                    @foreach($results as $result)
                        <div style="background: var(--white); padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border: 1px solid #f1f5f9; transition: transform 0.3s ease;">
                            <h3 style="margin-bottom: 10px;">
                                <a href="{{ route($result->route) }}" style="color: var(--primary-color); text-decoration: none; font-weight: 700; transition: color 0.3s ease;">
                                    {{ $result->title }}
                                </a>
                            </h3>
                            <p style="color: #4b5563; line-height: 1.6; margin-bottom: 15px;">{{ $result->content }}</p>
                            <a href="{{ route($result->route) }}" style="color: var(--secondary-color); font-weight: 600; font-size: 0.9rem; display: flex; align-items: center; gap: 5px;">
                                Baca Selengkapnya <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                @if($query)
                    <div style="text-align: center; padding: 60px; background: var(--white); border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                        <i class='bx bx-search-alt' style="font-size: 4rem; color: #cbd5e1; margin-bottom: 20px; display: block;"></i>
                        <h3 style="color: var(--primary-color); margin-bottom: 10px;">Maaf, tidak ada hasil yang ditemukan</h3>
                        <p style="color: #64748b;">Coba gunakan kata kunci lain yang lebih umum.</p>
                    </div>
                @endif
            @endif
        </div>
    </div>
</section>

<style>
    [style*="transition: transform"] :hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.1);
    }
    
    a:hover {
        color: var(--secondary-color) !important;
    }
</style>
@endsection
