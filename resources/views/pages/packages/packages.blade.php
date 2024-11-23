@extends('layouts.master')

@section('content')
    <!-- Page Banner Start -->
    <section class="page-banner-area pt-50 pb-35 rel z-1 bgs-cover">
        <div class="container">
            <div class="banner-inner text-white">
                <h2 class="page-title mb-10" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                    Packages
                </h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-20" data-aos="fade-right" data-aos-delay="200"
                        data-aos-duration="1500" data-aos-offset="50">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Packages</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <div class="container container-1400 mt-150">
        @include('partials.search-filter')
    </div>
    <!-- Page Banner End -->

    <!-- Package Grid Area start -->
    <section class="tour-grid-page py-100 rel z-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-10 rmb-75">
                    @include('partials.package-sidebar')
                </div>
                <div class="col-lg-9">
                    <div class="shop-shorter rel z-3 mb-20">
                        <ul class="grid-list mb-15 me-2">
                            <li>
                                <a href="#"><i class="fal fa-border-all"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="far fa-list"></i></a>
                            </li>
                        </ul>
                        <div class="sort-text mb-15 me-4 me-xl-auto">
                            34 Tours found
                        </div>
                        <div class="sort-text mb-15 me-4">Sort By</div>
                        <select>
                            <option value="default" selected="">Short By</option>
                            <option value="new">Newness</option>
                            <option value="old">Oldest</option>
                            <option value="hight-to-low">High To Low</option>
                            <option value="low-to-high">Low To High</option>
                        </select>
                    </div>

                    <div class="tour-grid-wrap">
                        <div class="row">
                            @include('partials.package-card-small')
                            @include('partials.package-card-small')
                            @include('partials.package-card-small')
                            @include('partials.package-card-small')
                            @include('partials.package-card-small')
                            @include('partials.package-card-small')
                            @include('partials.package-card-small')
                            @include('partials.package-card-small')
                            <div class="col-lg-12">
                                <ul class="pagination justify-content-center pt-15 flex-wrap" data-aos="fade-up"
                                    data-aos-duration="1500" data-aos-offset="50">
                                    <li class="page-item disabled">
                                        <span class="page-link"><i class="far fa-chevron-left"></i></span>
                                    </li>
                                    <li class="page-item active">
                                        <span class="page-link">
                                            1
                                            <span class="sr-only">(current)</span>
                                        </span>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">...</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="far fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Package Grid Area end -->

    <!-- Guides start -->
    <section class="popular-destinations-area rel z-1">
        <div class="container-fluid">
            <div class="popular-destinations-wrap br-20 bgc-lighter pt-100 pb-70">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title text-center counter-text-wrap mb-70" data-aos="fade-up"
                            data-aos-duration="1500" data-aos-offset="50">
                            <h2>Meet Our Expert Hajj Guides</h2>
                            <p>Get the most out of your Hajj experience with our <span class="count-text plus"
                                    data-speed="3000" data-stop="30">0</span> expert guides</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        @include('partials.guide-card')
                        @include('partials.guide-card')
                        @include('partials.guide-card')
                        @include('partials.guide-card')
                        @include('partials.guide-card')
                        @include('partials.guide-card')
                    </div>
                    <div class="text-center mt-40">
                        <a href="destination2.html" class="theme-btn style-three">
                            <span data-hover="Explore More Guides">Explore More Guides</span>
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Guides end -->
@endsection
