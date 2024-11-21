@extends('layouts.master')


@push('custom-styles')
    <style>
        .destination-item.style-two .button-links {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }

        .destination-item.style-two .btn-learn-more,
        .destination-item.style-two .btn-contact {
            padding: 8px 16px;
            font-size: 14px;
            border-radius: 4px;
            text-decoration: none;
            color: #fff;
            text-align: center;
            width: 48%;
            /* Ensures buttons are aligned next to each other */
        }

        .destination-item.style-two .btn-learn-more {
            background-color: #007bff;
        }

        .destination-item.style-two .btn-learn-more:hover {
            background-color: #0056b3;
        }

        .destination-item.style-two .btn-contact {
            background-color: #28a745;
        }

        .destination-item.style-two .btn-contact:hover {
            background-color: #218838;
        }
    </style>
@endpush

@section('content')
    <!-- Page Banner Start -->
    <section class="page-banner-area pt-50 pb-35 rel z-1 bgs-cover">
        <div class="container">
            <div class="banner-inner text-white">
                <h2 class="page-title mb-10" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                    Hotels
                </h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-20" data-aos="fade-right" data-aos-delay="200"
                        data-aos-duration="1500" data-aos-offset="50">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Hotels</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page Banner End -->


    <!-- Hotel Area start -->
    <section class="hotel-area py-70 rel z-1">
        <div class="container">
            <div class="row justify-content-between align-items-center pb-40">
                <div class="col-lg-9">
                    <div class="section-title counter-text-wrap mb-15" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <h2>Discover the World's Class Top Hotel</h2>
                        <p>One site <span class="count-text plus bgc-primary" data-speed="3000" data-stop="34500">0</span>
                            most popular experience you’ll remember</p>
                    </div>
                </div>
                <div class="col-lg-3 text-xl-end">
                    {{-- <a href="tour-list.html" class="theme-btn style-two bgc-secondary mb-15">
                        <span data-hover="Explore More Hotel">Explore More Hotel</span>
                        <i class="fal fa-arrow-right"></i>
                    </a> --}}
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <h3 class="mt-100 mb-50 text-center">Makkah</h3>
                @include('partials.hotel-card-light')
                @include('partials.hotel-card-light')
                <h3 class="mt-100 mb-50 text-center">Medinah</h3>
                @include('partials.hotel-card-light')
                @include('partials.hotel-card-light')
                <h3 class="mt-100 mb-50 text-center">Jeddah</h3>
                @include('partials.hotel-card-light')
                @include('partials.hotel-card-light')
            </div>
        </div>
    </section>
    <!-- Hotel Area end -->


    <!-- Features Area start -->
    <section class="features-area pt-100 pb-45 rel z-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="features-content-part mb-55" data-aos="fade-left" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="section-title mb-60">
                            <h2>Exclusive Hajj Booking Features That Make Us Stand Out</h2>
                        </div>
                        <div class="features-customer-box">
                            <div class="image" style="border-radius: 20px; overflow: hidden; width: 300px; height: 300px;">
                                <img src="assets/images/features/pxfuel2.jpg" alt="Features"
                                    style="object-fit: cover; width: 100%; height: 100%;">
                            </div>
                            <div class="content">
                                <div class="feature-authors mb-15">
                                    <img src="assets/images/features/feature-author8.jpg" alt="Author">
                                    <img src="assets/images/features/feature-author8.jpg" alt="Author">
                                    <img src="assets/images/features/feature-author8.jpg" alt="Author">
                                    <span>10k+</span>
                                </div>
                                <h6>850K+ Satisfied Pilgrims</h6>
                                <div class="divider style-two counter-text-wrap my-25"><span><span class="count-text plus"
                                            data-speed="3000" data-stop="25">0</span>
                                        Years</span></div>
                                <p>We offer personalized itineraries for a memorable pilgrimage</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <div class="row pb-25">
                        <div class="col-md-6">
                            <div class="feature-item">
                                <div class="icon"><i class="flaticon-tent"></i></div>
                                <div class="content">
                                    <h5><a href="hajj-details.html">Spiritual Guidance</a></h5>
                                    <p>Receive expert guidance to enhance your Hajj experience</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="icon"><i class="flaticon-tent"></i></div>
                                <div class="content">
                                    <h5><a href="hajj-details.html">Comfortable Accommodations</a></h5>
                                    <p>Stay in comfort with our carefully selected accommodations</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item mt-20">
                                <div class="icon"><i class="flaticon-tent"></i></div>
                                <div class="content">
                                    <h5><a href="hajj-details.html">Seamless Transportation</a></h5>
                                    <p>Enjoy hassle-free transportation arrangements throughout your journey</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="icon"><i class="flaticon-tent"></i></div>
                                <div class="content">
                                    <h5><a href="hajj-details.html">Group Packages</a></h5>
                                    <p>Join our group packages for a fulfilling and communal experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Area end -->

    <!-- Testimonials Area start -->
    <section class="testimonials-area rel z-1">
        <div class="container">
            <div class="testimonials-wrap bgc-lighter">
                <div class="row">
                    <div class="col-lg-5 rel" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="testimonial-left-image rmb-55"
                            style="background-image: url(assets/images/backgrounds/pxfuel2.jpg);"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="testimonial-right-content" data-aos="fade-left" data-aos-duration="1500"
                            data-aos-offset="50">
                            <div class="section-title mb-55">
                                <h2><span>5280</span> Pilgrims Say About Us Services</h2>
                            </div>
                            <div class="testimonials-active">
                                <div class="testimonial-item">
                                    <div class="testi-header">
                                        <div class="quote"><i class="flaticon-double-quotes"></i></div>
                                        <h4>Quality Services</h4>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="text">"Our Hajj experience was absolutely a perfect, thanks to this
                                        travel
                                        agency! They took care of every detail, from to accommodations, and even
                                        suggested incredible experiences"</div>
                                    <div class="author">
                                        <div class="image"><img src="assets/images/testimonials/author1.jpg"
                                                alt="Author"></div>
                                        <div class="content">
                                            <h5>Randall V. Vasquez</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testi-header">
                                        <div class="quote"><i class="flaticon-double-quotes"></i></div>
                                        <h4>Quality Services</h4>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="text">"Our Hajj experience was absolutely a perfect, thanks to this
                                        travel
                                        agency! They took care of every detail, from to accommodations, and even
                                        suggested incredible experiences"</div>
                                    <div class="author">
                                        <div class="image"><img src="assets/images/testimonials/author1.jpg"
                                                alt="Author"></div>
                                        <div class="content">
                                            <h5>Randall V. Vasquez</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Area end -->
@endsection
