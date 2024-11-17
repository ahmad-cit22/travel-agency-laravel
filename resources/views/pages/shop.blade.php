@extends('layouts.master')

@section('content')
    <!-- Page Banner Start -->
    <section class="page-banner-area pt-50 pb-35 rel z-1 bgs-cover"
        style="background-color: #181622 !important; background-repeat: no-repeat; background-image: url({{ asset('assets/images/hero/pxfuel1.jpg') }}); background-size: cover;">
        @include('partials.gradient-overlay')
        <div class="container">
            <div class="banner-inner text-white">
                <h2 class="page-title mb-10" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                    Islamic Shop
                </h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-20" data-aos="fade-right" data-aos-delay="200"
                        data-aos-duration="1500" data-aos-offset="50">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Islamic Shop</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page Banner End -->

    <!-- Shop  Area start -->
        <section class="shop-page pt-70 pb-100 rel z-1">
            <div class="container">
                <div class="shop-shorter style-two justify-content-between rel z-3 mb-10">
                    <div class="sort-text mb-15 me-4">
                        Showing all 12 results
                    </div>
                    <select>
                        <option value="default" selected="">Default sorting</option>
                        <option value="new">Newness</option>
                        <option value="old">Oldest</option>
                        <option value="hight-to-low">High To Low</option>
                        <option value="low-to-high">Low To High</option>
                    </select>
                </div>
                <hr class="mt-0 mb-50">
                <div class="row">
                    @include('partials.product-card')
                    @include('partials.product-card')
                    @include('partials.product-card')
                    @include('partials.product-card')
                    @include('partials.product-card')
                    @include('partials.product-card')
                    @include('partials.product-card')
                    @include('partials.product-card')
                    <div class="col-lg-12">
                        <ul class="pagination justify-content-center pt-15 flex-wrap" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <li class="page-item disabled">
                                <span class="page-link"><i class="far fa-chevron-left"></i></span>
                            </li>
                            <li class="page-item active">
                                <span class="page-link">
                                    1
                                    <span class="sr-only">(current)</span>
                                </span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="far fa-chevron-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Shop  Area end -->
@endsection
