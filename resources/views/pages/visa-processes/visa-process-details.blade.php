@extends('layouts.master')

@section('content')
    <!-- Page Banner Start -->
    <section class="page-banner-area pt-50 pb-35 rel z-1 bgs-cover">
        <div class="container">
            <div class="banner-inner text-white">
                <h2 class="page-title mb-10" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                    Saudi Visa
                </h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-20" data-aos="fade-right" data-aos-delay="200"
                        data-aos-duration="1500" data-aos-offset="50">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Visa Processes</li>
                        <li class="breadcrumb-item active">
                            Saudi Visa
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
                    <div class="tour-header-content" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">

                        <div class="d-flex align-items-center justify-content-start gap-4">
                            <div class="section-title pb-5">
                                <h2>Saudi Visa</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 text-lg-end" data-aos="fade-right" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="tour-header-social mb-10">
                        <a href="{{ route('visa_processes') }}"><i class="far fa-list"></i>View Packages</a>
                    </div>
                </div>
            </div>
            <hr class="mt-30 mb-30">
        </div>
    </section>
    <!-- Tour Header Area end -->


    <!-- Tour Details Area start -->
    <section class="tour-details-page pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tour-details-content" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <p>Saudi Visa Processing involves various steps, including documentation, application submission,
                            biometric enrollment, and payment of fees. We will guide you through the entire process and make
                            sure that your visa application is submitted successfully.</p>
                        <p><strong>Time Required for processing:</strong> 2-3 days</p>
                    </div>
                    <div class="tour-details-content mb-3" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <h3>Included in the Package</h3>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check-circle text-success me-2"></i> Visa of 90 days validity</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i> Insurance</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i> Transport</li>
                        </ul>
                    </div>
                    <div class="tour-details-content mb-3" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <h3>Required Documents</h3>
                        <p>The following documents are required for Saudi Visa Processing:</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check-circle text-success me-2"></i> Passport with at least 6 months of
                                validity</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i> Passport size photo</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i> Proof of address</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i> Proof of financial resources</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10 rmt-75">
                    <div class="blog-sidebar">
                        <div class="widget widget-news" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <h5 class="widget-title">More Visa Packages</h5>
                            <ul>
                                <li>
                                    <div class="image">
                                        <img src="{{ asset('assets/images/widgets/news1.jpg') }}" alt="News">
                                    </div>
                                    <div class="content">
                                        <h6><a href="blog-details.html">Umrah Visa</a></h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="image">
                                        <img src="{{ asset('assets/images/widgets/news1.jpg') }}" alt="News">
                                    </div>
                                    <div class="content">
                                        <h6><a href="blog-details.html">Umrah Visa</a></h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="image">
                                        <img src="{{ asset('assets/images/widgets/news1.jpg') }}" alt="News">
                                    </div>
                                    <div class="content">
                                        <h6><a href="blog-details.html">Umrah Visa</a></h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="image">
                                        <img src="{{ asset('assets/images/widgets/news1.jpg') }}" alt="News">
                                    </div>
                                    <div class="content">
                                        <h6><a href="blog-details.html">Umrah Visa</a></h6>
                                    </div>
                                </li>
                            </ul>
                        </div>

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
