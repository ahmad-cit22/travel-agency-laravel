@extends('layouts.master')

@push('custom-styles')
    <style>
        .form-control {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 12px 15px;
            box-shadow: none;
            transition: border-color 0.3s ease-in-out;
        }
    </style>
@endpush

@section('content')
    <!-- Page Banner Start -->
    <section class="page-banner-area pt-50 pb-35 rel z-1 bgs-cover">
        <div class="container">
            <div class="banner-inner text-white">
                <h2 class="page-title mb-10" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                    Login
                </h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-20" data-aos="fade-right" data-aos-delay="200"
                        data-aos-duration="1500" data-aos-offset="50">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Login</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page Banner End -->

    <!-- Login Area Start -->
    <section class="login-area pt-70 pb-100 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-form p-4 rounded shadow" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <h5 class="widget-title mb-4 text-center">Login to Your Account</h5>

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="Email Address" required value="{{ old('email') }}">
                                <label for="email">Email Address</label>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Password" required>
                                <label for="password">Password</label>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between mb-3">
                                <div class="form-check" style="width: 50% !important;">
                                    <ul class="radio-filter mb-25">
                                        <li>
                                            <input class="form-check-input" type="radio" name="remember" id="remember"
                                                required>
                                            <label for="remember" class="form-check-label">Remember Me</label>
                                        </li>
                                    </ul>
                                </div>
                                <a href="{{ route('password.request') }}" class="small">Forgot Password?</a>
                            </div>

                            <button type="submit" class="theme-btn style-two w-100 mt-4">
                                <span data-hover="Login">Login</span>
                                <i class="fal fa-arrow-right"></i>
                            </button>
                        </form>

                        <div class="text-muted text-center mt-4">
                            <p class="mb-0">Don’t have an account? <a href="{{ route('register.hajji') }}">Register
                                    Now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Area End -->
@endsection
