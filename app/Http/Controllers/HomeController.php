<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function shop()
    {
        return view('pages.shop');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function not_found_page()
    {
        return view('pages.404');
    }

    public function packages()
    {
        return view('pages.packages');
    }
}
