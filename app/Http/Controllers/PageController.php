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
}
