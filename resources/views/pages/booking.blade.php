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
            border-color: var(--primary-color);
            box-shadow: 0 0 0 2px rgba(var(--primary-rgb), 0.8);
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
                    Booking
                </h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-20" data-aos="fade-right" data-aos-delay="200"
                        data-aos-duration="1500" data-aos-offset="50">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="packages.html">Packages</a></li>
                        <li class="breadcrumb-item active">Booking</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page Banner End -->

    <!-- Checkout Area Start -->
    <section class="checkout-area pt-70 pb-100 rel z-1">
        <div class="container">
            <div class="row">
                <!-- Booking Summary -->
                <div class="col-lg-4">
                    <div class="widget widget-booking-summary p-4 rounded shadow" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <h5 class="widget-title text-center mb-3">Booking Summary</h5>
                        <ul class="list-style-two">
                            <li> <span class="me-2">Package:</span> <a class="" href="{{ route('packages.details', 1) }}">Holy Makkah Hajj</a></li>
                            <li> <span class="me-2">Guide:</span> <a class="" href="{{ route('guides.details', 1) }}">Muhammad Ali</a></li>
                            <li> <span class="me-2">Departure:</span> Dhaka</li>
                            <li> <span class="me-2">Return:</span> Makkah</li>
                            <li> <span class="me-2">Seats:</span> 2 Adults</li>
                            <li> <span class="me-2">Price (Per Person):</span> $2000</li>
                            <li> <span class="me-2">Total Price:</span> $4000</li>
                        </ul>
                        <hr>
                        <h6 class="text-center mt-3">Total Payable: <span class="price text-success">$4000</span></h6>
                    </div>
                </div>

                <!-- Checkout Form -->
                <div class="col-lg-8">
                    <div class="checkout-form p-4 rounded shadow" data-aos="fade-left" data-aos-duration="1500"
                        data-aos-offset="50">
                        <h5 class="widget-title mb-4">Billing Information</h5>
                        <form action="#" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="first_name" class="form-control" id="firstName"
                                            placeholder="First Name" required>
                                        <label for="firstName">First Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="last_name" class="form-control" id="lastName"
                                            placeholder="Last Name" required>
                                        <label for="lastName">Last Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Email Address" required>
                                        <label for="email">Email Address</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="phone" class="form-control" id="phone"
                                            placeholder="Phone Number" required>
                                        <label for="phone">Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="address" class="form-control" id="address"
                                            placeholder="Address" required>
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
                            </div>

                            <hr class="mt-4 mb-4">

                            <h5>Payment Information</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="card_name" class="form-control" id="cardName"
                                            placeholder="Cardholder Name" required>
                                        <label for="cardName">Cardholder Name</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="card_number" class="form-control" id="cardNumber"
                                            placeholder="Card Number" required>
                                        <label for="cardNumber">Card Number</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="expiry_date" class="form-control" id="expiryDate"
                                            placeholder="MM/YY" required>
                                        <label for="expiryDate">Expiration Date</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="cvv" class="form-control" id="cvv"
                                            placeholder="CVV" required>
                                        <label for="cvv">CVV</label>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="theme-btn style-two w-100 mt-4">
                                <span data-hover="Confirm Booking">Confirm Booking</span>
                                <i class="fal fa-arrow-right"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Checkout Area End -->
@endsection
