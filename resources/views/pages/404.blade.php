@extends('layouts.master')

@section('content')
<!-- Page Banner Start -->
    <section class="page-banner-area pt-50 pb-35 rel z-1 bgs-cover">
        <div class="container">
            <div class="banner-inner text-white">
                <h2 class="page-title mb-10" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                    404 | Page Not Found
                </h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-20" data-aos="fade-right" data-aos-delay="200"
                        data-aos-duration="1500" data-aos-offset="50">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">404 | Page Not Found</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page Banner End -->

    <!-- 404 Error Area start -->
    <section class="error-area pt-70 pb-100 rel z-1">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-5 col-lg-6">
                    <div class="error-content rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <h1>OPPS! </h1>
                        <div class="section-title mt-15 mb-25">
                            <h2>This Page Can’t be Found</h2>
                        </div>
                        <p>Best features to include on business landing page are those that quickly convey your value
                            proposition, build trust, and encourage action. Here are six essential features</p>
                        <form class="newsletter-form mt-40 mb-50" action="#">
                            <input id="news-email" type="text" placeholder="Search keyword" required>
                            <button type="submit" class="theme-btn bgc-secondary style-two">
                                <span data-hover="Search">Search</span>
                                <i class="fal fa-arrow-right"></i>
                            </button>
                        </form>
                        <div class="keywords">
                            <a href="blog.html">Travel</a>
                            <a href="blog.html">Luxury Hotel</a>
                            <a href="blog.html">Indonesia</a>
                            <a href="blog.html">Sea Beach</a>
                            <a href="blog.html">Camping</a>
                            <a href="blog.html">Hiking</a>
                            <a href="blog.html">Fishing</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="error-images" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                        <img src="assets/images/newsletter/404.jpg" alt="404 Error">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 404 Error Area end -->
@endsection
