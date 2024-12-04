<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::user()->is_admin) {
            $users = User::select('id','name','email','phone','address')->paginate(10);
        } else {
            //
        }

        return view('admin.index',compact('users'));
    }

    public function clear_cache()
    {
        $exitCode = Artisan::call('optimize:clear');
        return back()->with('success', 'Cache cleared successfully');
    }
}
