@extends('layouts.master')

@section('content')
    <!-- Page Banner Start -->
    <section class="page-banner-area pt-50 pb-35 rel z-1 bgs-cover">
        <div class="container">
            <div class="banner-inner text-white">
                <h2 class="page-title mb-10" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                    Guide
                </h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-20" data-aos="fade-right" data-aos-delay="200"
                        data-aos-duration="1500" data-aos-offset="50">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Guides</li>
                        <li class="breadcrumb-item active">
                            Muhammad Ali
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page Banner End -->


    <!-- Tour Header Area start -->
    <section class="tour-header-area pt-70 rel z-1">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-lg-7">
                    <div class="tour-header-content mb-15" data-aos="fade-left" data-aos-duration="1500"
                        data-aos-offset="50">

                        <div class="d-flex align-items-center justify-content-start gap-4">
                            <img src="{{ asset('assets/images/guides') . '/' . 'guide-1.jpg' }}" alt="Guide"
                                class="img-fluid rounded-circle" width="150" style="height: 150px; object-fit: cover;">
                            <div class="section-title pb-5">
                                <h2>Muhammad Ali</h2>
                                <p class="mb-0 text-muted">Dhanmondi, Dhaka</p>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 text-lg-end" data-aos="fade-right" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="tour-header-social mb-10">
                        <a href="#"><i class="far fa-list"></i>View Packages</a>
                    </div>
                </div>
            </div>
            <hr class="mt-50 mb-70">
        </div>
    </section>
    <!-- Tour Header Area end -->


    <!-- Tour Details Area start -->
    <section class="tour-details-page pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tour-details-content" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <h3>About</h3>
                        <p>Muhammad Ali is a seasoned guide with over 10 years of experience guiding Hajj pilgrims. He is
                            fluent in English, Arabic, and Bangla, and has an in-depth knowledge of the Hajj rituals and
                            procedures. He is dedicated to ensuring that his pilgrims have a safe, comfortable, and
                            spiritually fulfilling experience.
                        </p>
                    </div>
                    <div class="tour-details-content mb-3" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <h3>Credentials</h3>
                        <p>With over 10 years of experience guiding Hajj pilgrims, Muhammad Ali has an in-depth knowledge of
                            the Hajj rituals and procedures. He is fluent in English, Arabic, and Bangla, and has assisted
                            pilgrims from all over the world. He is dedicated to ensuring that his pilgrims have a safe,
                            comfortable, and spiritually fulfilling experience.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check-circle text-success me-2"></i> Over 10 years of experience guiding
                                Hajj pilgrims</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i> Fluent in English, Arabic, and Bangla
                            </li>
                            <li><i class="fas fa-check-circle text-success me-2"></i> In-depth knowledge of the Hajj rituals
                                and procedures</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i> He has a strong network of contacts in
                                the Hajj industry, allowing him to secure the best possible deals for his clients.</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i> He is dedicated to ensuring that his
                                pilgrims have a safe, comfortable, and spiritually fulfilling experience.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10 rmt-75">
                    <div class="blog-sidebar tour-sidebar">

                        <div class="widget widget-booking" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <h4 class="widget-title text-center">Guide Details</h4>
                            <form action="#">
                                <div class="text-center mb-2">
                                    <h5>Lives In</h5>
                                    <p>Dhanmondi, Dhaka</p>
                                </div>
                                <hr>
                                <div class="text-center mb-25">
                                    <h5>Language(s)</h5>
                                    <p>English: <span><a href="#" title="asdasd"><i
                                                    class="fas fa-check-circle text-success"></i></a></span></p>
                                    <p>English: <span><i class="fas fa-check-circle text-success"></i></span></p>
                                </div>
                                <hr>
                                <div class="time py-5 counter-text-wrap">
                                    <b>Total Tour Given :</b>
                                    <p class="mt-3 badge bgc-black count-text plus" data-speed="3000" data-stop="100"
                                        style="font-size: 18px !important">0</p>
                                </div>
                                <hr>
                                <div class="text-center mb-2">
                                    <h5>Guide Number</h5>
                                    <p style="font-size: 16px !important">#154688</p>
                                </div>
                            </form>
                        </div>

                        <div class="widget widget-contact" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <h5 class="widget-title">Need Help with Hajj?</h5>
                            <ul class="list-style-one">
                                <li><i class="far fa-envelope"></i> <a
                                        href="mailto:hajjsupport@example.com">hajjsupport@example.com</a></li>
                                <li><i class="far fa-phone-volume"></i> <a href="tel:+00012345688">+000 (123) 456
                                        88</a></li>
                            </ul>
                        </div>

                        {{-- <div class="widget widget-cta" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="content text-white">
                                <span class="h6">Embark on Your Hajj Journey</span>
                                <h3>Experience the Spiritual Voyage</h3>
                                <a href="hajj-packages.html" class="theme-btn style-two bgc-secondary">
                                    <span data-hover="Explore More">Explore More</span>
                                    <i class="fal fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="image">
                                <img src="{{ asset('assets/images/widgets/cta-widget.png') }}" alt="Hajj CTA">
                            </div>
                            <div class="cta-shape">
                                <img src="{{ asset('assets/images/widgets/cta-shape3.png') }}" alt="Shape">
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tour Details Area end -->

    <!-- Packages Area start -->
    <section class="destinations-area bgc-black pt-100 pb-70 rel z-1">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-white text-center counter-text-wrap mb-70" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <h2>Packages by Muhammad Ali</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @include('partials.package-card')
                @include('partials.package-card')
                @include('partials.package-card')
                @include('partials.package-card')
            </div>
            <div class="text-center mt-40">
                <a href="destination2.html" class="theme-btn style-four">
                    <span data-hover="Explore More Packages">Explore More Packages</span>
                    <i class="fal fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- Packages Area end -->
@endsection
