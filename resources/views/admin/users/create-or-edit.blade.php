@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">User Creation Form</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <div class="col-lg-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-12">
                                <h3><strong>Create a User</strong></h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ Illuminate\Support\Facades\Route::currentRouteName() == 'users.create' ? route('users.store') : route('users.update',$user->id) }}" method="POST">
                            @if (Illuminate\Support\Facades\Route::currentRouteName() == 'users.edit')
                                @method('PUT')
                            @endif
                            @csrf
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ Illuminate\Support\Facades\Route::currentRouteName() == 'users.create' ? '' : $user->name  }}" placeholder="Please Enter Your Name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ (Illuminate\Support\Facades\Route::currentRouteName() == 'users.create') ? '' : $user->email }}" placeholder="Please Enter Your Email">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone:</label>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{ (Illuminate\Support\Facades\Route::currentRouteName() == 'users.create') ? '' : $user->phone }}" placeholder="Please Enter Your Phone">
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" name="address" id="address" class="form-control" value="{{ (Illuminate\Support\Facades\Route::currentRouteName() == 'users.create') ? '' : $user->address }}" placeholder="Please Enter Your Address">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Please Enter Your Password">
                            </div>
                            @if (auth()->user()->is_guide || !auth()->user()->is_admin)
                                <div class="form-group">
                                    <label for="nid">National ID:</label>
                                    <input type="text" name="nid" id="nid" class="form-control" value="{{ (Illuminate\Support\Facades\Route::currentRouteName() == 'users.create') ? '' : $user->nid }}" placeholder="Please Enter Your National ID">
                                </div>
                                <div class="form-group">
                                    <label for="passport_no">Passport No.</label>
                                    <input type="text" name="passport_no" id="passport_no" value="{{ (Illuminate\Support\Facades\Route::currentRouteName() == 'users.create') ? '' : $user->passport_no }}" placeholder="Please Enter Your Passport No" class="form-control">
                                </div>
                            @endif
                            <div class="text-center">
                                <button class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection
