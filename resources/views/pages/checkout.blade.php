@extends('layouts.master')

@section('content')
    <!-- Page Banner Start -->
    <section class="page-banner-area pt-50 pb-35 rel z-1 bgs-cover">
        <div class="container">
            <div class="banner-inner text-white">
                <h2 class="page-title mb-10" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                    Checkout
                </h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-20" data-aos="fade-right" data-aos-delay="200"
                        data-aos-duration="1500" data-aos-offset="50">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="packages.html">Packages</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
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
                    <div class="widget widget-booking-summary" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <h5 class="widget-title">Booking Summary</h5>
                        <ul class="list-style-two">
                            <li><span>Package:</span> Holy Makkah Hajj</li>
                            <li><span>Departure:</span> Dhaka</li>
                            <li><span>Return:</span> Makkah</li>
                            <li><span>Seats:</span> 2 Adults</li>
                            <li><span>Price (Per Person):</span> $2000</li>
                            <li><span>Total Price:</span> $4000</li>
                        </ul>
                        <hr>
                        <h6 class="text-center">Total Payable: <span class="price text-success">$4000</span></h6>
                    </div>
                </div>

                <!-- Checkout Form -->
                <div class="col-lg-8">
                    <div class="checkout-form" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <h5 class="widget-title">Billing Information</h5>
                        <form action="{{ route('checkout.process') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label>First Name</label>
                                    <input type="text" name="first_name" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Email Address</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Phone Number</label>
                                    <input type="text" name="phone" class="form-control" required>
                                </div>
                                <div class="col-md-12">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label>City</label>
                                    <input type="text" name="city" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Zip Code</label>
                                    <input type="text" name="zip" class="form-control" required>
                                </div>
                            </div>

                            <hr class="mt-4 mb-4">

                            <h5>Payment Information</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Cardholder Name</label>
                                    <input type="text" name="card_name" class="form-control" required>
                                </div>
                                <div class="col-md-12">
                                    <label>Card Number</label>
                                    <input type="text" name="card_number" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Expiration Date</label>
                                    <input type="text" name="expiry_date" class="form-control" placeholder="MM/YY"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <label>CVV</label>
                                    <input type="text" name="cvv" class="form-control" required>
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
