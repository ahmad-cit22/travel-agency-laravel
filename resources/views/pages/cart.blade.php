@extends('layouts.master')

@push('custom-styles')
    <style>
        .cart-table thead th {
            background-color: #f8f9fa;
            border-bottom: 2px solid #ddd;
            text-align: center;
            font-weight: bold;
        }

        .cart-table tbody td {
            text-align: center;
            vertical-align: middle;
        }

        .cart-summary {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .cart-summary h5 {
            font-weight: bold;
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
                                    <th>Remove</th>
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
                                    <td><button class="btn btn-danger btn-sm"><i class="fal fa-trash"></i></button></td>
                                </tr>
                                <tr>
                                    <td><img src="https://via.placeholder.com/100" alt="Product Image"></td>
                                    <td>Travel Insurance</td>
                                    <td>$200</td>
                                    <td>
                                        <input type="number" class="form-control" value="1" min="1">
                                    </td>
                                    <td>$200</td>
                                    <td><button class="btn btn-danger btn-sm"><i class="fal fa-trash"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="cart-summary" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <h5>Cart Summary</h5>
                        <ul class="list-style-two">
                            <li>Subtotal: <span>$4200</span></li>
                            <li>Tax (10%): <span>$420</span></li>
                            <li>Discount: <span>$200</span></li>
                        </ul>
                        <hr>
                        <h6>Total Payable: <span class="price text-success">$4420</span></h6>
                        <a href="#" class="theme-btn style-two w-100 mt-3">
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
