<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function academic()
    {
        return view('pages.academic');
    }

    public function facilities()
    {
        return view('pages.facilities');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function sambutan()
    {
        return view('pages.sambutan');
    }

    public function rpl()
    {
        return view('pages.rpl');
    }

    public function tkr()
    {
        return view('pages.tkr');
    }

    public function tbsm()
    {
        return view('pages.tbsm');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        
        $pages = [
            [
                'title' => 'Beranda',
                'route' => 'home',
                'content' => 'Selamat datang di SMK Assalaam Bandung. Sekolah dengan keunggulan teknologi dan karakter.',
                'tags' => 'home beranda welcome smk assalaam'
            ],
            [
                'title' => 'Tentang Kami',
                'route' => 'about',
                'content' => 'Profil SMK Assalaam Bandung, sejarah, visi, dan misi sekolah kami.',
                'tags' => 'about profil sejarah visi misi'
            ],
            [
                'title' => 'Akademik',
                'route' => 'academic',
                'content' => 'Program keahlian unggulan: RPL, TKR, dan TBSM. Menyiapkan lulusan kompeten.',
                'tags' => 'akademik jurusan program rpl tkr tbsm'
            ],
            [
                'title' => 'Fasilitas',
                'route' => 'facilities',
                'content' => 'Fasilitas sekolah modern termasuk lab komputer modern, bengkel otomotif, dan area kolaborasi.',
                'tags' => 'fasilitas lab bengkel kelas sarana prasarana'
            ],
            [
                'title' => 'Kontak',
                'route' => 'contact',
                'content' => 'Hubungi kami melalui telepon, email, atau kunjungi alamat kami di Bandung.',
                'tags' => 'kontak email telepon alamat lokasi maps'
            ],
            [
                'title' => 'Rekayasa Perangkat Lunak (RPL)',
                'route' => 'rpl',
                'content' => 'Mempelajari pembuatan web, mobile apps, database, dan UI/UX design.',
                'tags' => 'rpl coding pemrograman software web mobile developer'
            ],
            [
                'title' => 'Teknik Kendaraan Ringan (TKR)',
                'route' => 'tkr',
                'content' => 'Mempelajari perawatan dan perbaikan mesin otomotif roda empat.',
                'tags' => 'tkr otomotif mobil mesin mekanik perbaikan'
            ],
            [
                'title' => 'Teknik Bisnis Sepeda Motor (TBSM)',
                'route' => 'tbsm',
                'content' => 'Mempelajari perawatan dan perbaikan sepeda motor serta manajemen bengkel.',
                'tags' => 'tbsm motor otomotif bengkel mekanik'
            ],
            [
                'title' => 'Sambutan Kepala Sekolah',
                'route' => 'sambutan',
                'content' => 'Salam hangat dan sambutan dari Kepala Sekolah SMK Assalaam Bandung.',
                'tags' => 'sambutan kepala sekolah luthfi lutfi'
            ],
        ];

        $results = [];
        if ($query) {
            foreach ($pages as $page) {
                if (stripos($page['title'], $query) !== false || 
                    stripos($page['content'], $query) !== false || 
                    stripos($page['tags'], $query) !== false) {
                    $results[] = (object) $page;
                }
            }
        }

        return view('pages.search', compact('results', 'query'));
    }
}
