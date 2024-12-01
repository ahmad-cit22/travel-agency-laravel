<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::user()->is_admin) {
            //
        } else {
            //
        }

        return view('admin.index');
    }

    public function clear_cache()
    {
        $exitCode = Artisan::call('optimize:clear');
        return back()->with('success', 'Cache cleared successfully');
    }
}
