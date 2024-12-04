<?php

namespace App\Http\Controllers;

use App\Models\{User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Hash};

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('is_admin', 1)->get();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Search a listing of the resource.
     */
    public function search(Request $request)
    {
        $searchedUsers = User::where('email','LIKE','%'.$request->search.'%')
            ->orWhere('name','LIKE','%'.$request->search.'%')
            ->orWhere('phone','LIKE','%'.$request->search.'%')
            ->orWhere('address','LIKE','%'.$request->search.'%')
            ->paginate(10);

        return view('admin.index')->with(['users' => $searchedUsers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create-or-edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'          => ['required', 'string', 'max:255'],
            'email'         => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone'         => ['required', 'string', 'max:255'],
            'address'       => ['required', 'string', 'max:255'],
            'nid'           => ['string', 'max:511'],
            'passport_no'   => ['string', 'max:511'],
            'password'      => ['required', 'max:255'],
        ]);

        $newUser = User::create([
            'name'          => $validated['name'],
            'email'         => $validated['email'],
            'phone'         => $validated['phone'],
            'address'       => $validated['address'],
            'nid'           => (auth()->user()->is_guide || !auth()->user()->is_admin) ? $validated['nid'] : null,
            'passport_no'   => (auth()->user()->is_guide || !auth()->user()->is_admin) ? $validated['passport_no'] : null,
            'password'      => Hash::make($validated['password']),
        ]);

        return back()->with(['msg' => 'User created successfully!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.users.create-or-edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
