@extends('layouts.master')

@push('custom-styles')
    <style>
        .cart-table {
            border-collapse: separate;
            border-spacing: 0 10px;
        }

        .cart-table thead th {
            background-color: #f4f5f6;
            color: #333;
            font-weight: 600;
            text-align: center;
            padding: 15px;
        }

        .cart-table tbody td {
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            vertical-align: middle;
            padding: 15px;
        }

        .cart-table img {
            border-radius: 8px;
        }

        .cart-summary {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        }

        .cart-summary h5 {
            font-weight: bold;
            margin-bottom: 20px;
        }

        .cart-summary ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .cart-summary ul li {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px dashed #ddd;
        }

        .cart-summary ul li:last-child {
            border-bottom: none;
        }

        .cart-summary h6 {
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
        }

        .coupon-box {
            margin-top: 20px;
            padding: 15px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .coupon-box input {
            width: 70%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }

        .coupon-box button {
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .coupon-box button:hover {
            background-color: #0056b3;
        }

        .coupon-message {
            margin-top: 10px;
            font-size: 14px;
            font-weight: bold;
        }

        .coupon-message.success {
            color: #28a745;
        }

        .coupon-message.error {
            color: #dc3545;
        }
    </style>
@endpush

@section('content')
    <!-- Page Banner Start -->
    <section class="page-banner-area pt-50 pb-35 rel z-1 bgs-cover">
        <div class="container">
            <div class="banner-inner text-white">
                <h2 class="page-title mb-10" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                    Cart
                </h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-20" data-aos="fade-right" data-aos-delay="200"
                        data-aos-duration="1500" data-aos-offset="50">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page Banner End -->

    <!-- Cart Area Start -->
    <section class="cart-area pt-70 pb-100 rel z-1">
        <div class="container">
            <div class="row">
                <!-- Cart Table -->
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table cart-table table-bordered" data-aos="fade-right" data-aos-duration="1500"
                            data-aos-offset="50">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="https://via.placeholder.com/100" alt="Product Image"></td>
                                    <td>Holy Makkah Hajj Package</td>
                                    <td>$2000</td>
                                    <td>
                                        <input type="number" class="form-control" value="2" min="1">
                                    </td>
                                    <td>$4000</td>
                                    <td>
                                        <button class="btn btn-danger btn-sm"><i class="fal fa-trash"></i></button>
                                        <button class="btn btn-update btn-sm">Update</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="https://via.placeholder.com/100" alt="Product Image"></td>
                                    <td>Travel Insurance</td>
                                    <td>$200</td>
                                    <td>
                                        <input type="number" class="form-control" value="1" min="1">
                                    </td>
                                    <td>$200</td>
                                    <td>
                                        <button class="btn btn-danger btn-sm"><i class="fal fa-trash"></i></button>
                                        <button class="btn btn-update btn-sm">Update</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Cart Summary -->
                <div class="col-lg-4">
                    <div class="cart-summary" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <h5>Cart Summary</h5>
                        <ul>
                            <li><span>Subtotal:</span> <span>$4200</span></li>
                            <li><span>Tax (10%):</span> <span>$420</span></li>
                            <li><span>Discount:</span> <span>-$200</span></li>
                        </ul>
                        <h6>Total Payable: <span class="price text-success">$4420</span></h6>

                        <!-- Coupon Code System -->
                        <div class="coupon-box">
                            <form action="#" method="POST">
                                @csrf
                                <input type="text" name="coupon_code" placeholder="Enter Coupon Code">
                                <button type="submit">Apply</button>
                            </form>
                            @if (session('coupon_message'))
                                <div class="coupon-message {{ session('coupon_status') }}">
                                    {{ session('coupon_message') }}
                                </div>
                            @endif
                        </div>

                        <a href="#" class="theme-btn style-two w-100 mt-4">
                            <span data-hover="Proceed to Checkout">Proceed to Checkout</span>
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Area End -->
@endsection
