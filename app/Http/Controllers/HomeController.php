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

    public function product_details($id)
    {
        return view('pages.product-details');
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

    public function package_details($id)
    {
        return view('pages.package-details');
    }

    public function guides()
    {
        return view('pages.guides');
    }

    public function guide_details($id)
    {
        return view('pages.guide-details');
    }
}
