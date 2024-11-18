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
                    Become a Hajji
                </h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-20" data-aos="fade-right" data-aos-delay="200"
                        data-aos-duration="1500" data-aos-offset="50">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Become a Hajji</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page Banner End -->

    <!-- Registration Area Start -->
    <section class="registration-area pt-70 pb-100 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="registration-form p-4 rounded shadow" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <h5 class="widget-title mb-4 text-center">Hajji Registration Form</h5>

                        <!-- Invitation Text Section -->
                        <div class="mb-4">
                            <p class="text-muted">
                                Embark on a life-changing spiritual journey by registering as a Hajji with us. As our valued
                                client, you will benefit from:
                            </p>
                            <ul class="list-unstyled ps-3">
                                <li><i class="fas fa-check-circle text-success me-2"></i> Comprehensive and tailored Hajj
                                    packages.</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Expert guidance and support
                                    throughout your journey.</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Comfortable accommodations and
                                    seamless travel arrangements.</li>
                            </ul>
                            <h6 class="text-muted mt-3">
                                Secure your spot today and let us help you fulfill this sacred obligation with peace of
                                mind.
                            </h6>
                        </div>

                        <form action="#" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Name" required>
                                        <label for="name">Name</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Email Address" required>
                                        <label for="email">Email Address</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="phone" class="form-control" id="phone"
                                            placeholder="Phone Number" required>
                                        <label for="phone">Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <textarea name="address" class="form-control" id="address" placeholder="Address" style="height: 100px;" required></textarea>
                                        <label for="address">Address</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="city" class="form-control" id="city"
                                            placeholder="City" required>
                                        <label for="city">City</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="zip" class="form-control" id="zip"
                                            placeholder="Zip Code" required>
                                        <label for="zip">Zip Code</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class=" mb-3">
                                        <input type="checkbox" name="terms" class="" id="terms" required>
                                        <label class="form-check-label" for="terms">
                                            I agree with the <a href="#" class="text-secondary">Terms and
                                                Conditions</a>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="theme-btn style-two w-100 mt-4">
                                <span data-hover="Register Now">Register Now</span>
                                <i class="fal fa-arrow-right"></i>
                            </button>
                        </form>

                        <p class="text-muted text-center mt-4">
                            Already have an account? <a href="{{ route('login') }}">Login</a> <br>
                            <a href="{{ route('register.guide') }}">Register as Guide</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Registration Area End -->
@endsection
