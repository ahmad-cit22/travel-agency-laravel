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

    public function products()
    {
        return view('pages.products.products');
    }

    public function product_details($id)
    {
        return view('pages.products.product-details');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function booking($id)
    {
        return view('pages.booking');
    }

    public function not_found_page()
    {
        return view('pages.404');
    }

    public function packages()
    {
        return view('pages.packages.packages');
    }

    public function package_details($id)
    {
        return view('pages.packages.package-details');
    }

    public function guides()
    {
        return view('pages.guides.guides');
    }

    public function guide_details($id)
    {
        return view('pages.guides.guide-details');
    }

    public function hotels()
    {
        return view('pages.hotels.hotels');
    }

    public function hotel_details($id)
    {
        return view('pages.hotels.hotel-details');
    }

    public function blog()
    {
        return view('pages.blogs.blogs');
    }

    public function blog_details($id)
    {
        return view('pages.blogs.blog-details');
    }
}
