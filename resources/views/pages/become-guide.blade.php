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

        .form-control:focus {
            border-color: #2575fc;
            box-shadow: 0 0 0 4px rgba(37, 117, 252, 0.25);
        }

        /* .theme-btn {
            background: linear-gradient(90deg, #6a11cb, #2575fc);
            color: #fff;
            border: none;
            transition: background 0.3s ease;
        }

        .theme-btn:hover {
            background: linear-gradient(90deg, #2575fc, #6a11cb);
        } */
    </style>
@endpush

@section('content')
    <!-- Page Banner Start -->
    <section class="page-banner-area pt-50 pb-35 rel z-1 bgs-cover"
        style="background-color: #181622 !important; background-repeat: no-repeat; background-image: url({{ asset('assets/images/hero/pxfuel1.jpg') }}); background-size: cover;">
        @include('partials.gradient-overlay')
        <div class="container">
            <div class="banner-inner text-white">
                <h2 class="page-title mb-10" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                    Become a Guide
                </h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-20" data-aos="fade-right" data-aos-delay="200"
                        data-aos-duration="1500" data-aos-offset="50">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="packages.html">Packages</a></li>
                        <li class="breadcrumb-item active">Become a Guide</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page Banner End -->


@endsection
