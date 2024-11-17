@extends('layouts.master')


@push('custom-styles')
@endpush

@section('content')
    <!-- Page Banner Start -->
    <section class="page-banner-area pt-50 pb-35 rel z-1 bgs-cover"
        style="background-color: #181622 !important; background-repeat: no-repeat; background-image: url({{ asset('assets/images/hero/pxfuel1.jpg') }}); background-size: cover;">
        @include('partials.gradient-overlay')
        <div class="container">
            <div class="banner-inner text-white">
                <h2 class="page-title mb-10" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                    Hotel Details
                </h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-20" data-aos="fade-right" data-aos-delay="200"
                        data-aos-duration="1500" data-aos-offset="50">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Dar al Gufran Hotel</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page Banner End -->


    <!-- Destination Gallery start -->
    <div class="destination-gallery mt-4">
        <div class="container-fluid">
            <div class="row gap-10 justify-content-center rel">
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <img src="assets/images/destinations/destination-details1.jpg" alt="Destination">
                    </div>
                    <div class="gallery-item">
                        <img src="assets/images/destinations/destination-details4.jpg" alt="Destination">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <img src="assets/images/destinations/destination-details2.jpg" alt="Destination">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <img src="assets/images/destinations/destination-details3.jpg" alt="Destination">
                    </div>
                    <div class="gallery-item">
                        <img src="assets/images/destinations/destination-details5.jpg" alt="Destination">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="gallery-more-btn">
                        <a href="contact.html" class="theme-btn style-two bgc-secondary">
                            <span data-hover="See All Photos">See All Photos</span>
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination Gallery End -->


    <!-- About Hotel Area start -->
    <section class="about-us-area pt-90 pb-100 rel z-1">
        <div class="container">
            <div class="row gap-100 align-items-center">
                <div class="col-lg-6">
                    <div class="destination-details-content rmb-55" data-aos="fade-left" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="section-title mb-25">
                            <span class="h2 mb-15">Welcome to </span>
                            <h2>Dar al Gufran Hotel</h2>
                        </div>
                        <p>Experience the tranquility and comfort of Dar Al Gufran Hotel, located in the heart of Makkah,
                            Saudi Arabia. This luxurious hotel is designed to provide pilgrims with a peaceful and serene
                            atmosphere, perfect for reflection and rejuvenation during their Hajj journey.</p>
                        <p>With its prime location and stunning views of the Kaaba, Dar Al Gufran Hotel is the ideal choice
                            for those seeking a peaceful and convenient stay in Makkah. The hotel offers a range of
                            amenities and services to ensure a comfortable and memorable stay for all guests.</p>
                        <p>Experience the tranquility and comfort of Dar Al Gufran Hotel, located in the heart of Makkah,
                            Saudi Arabia. This luxurious hotel is designed to provide pilgrims with a peaceful and serene
                            atmosphere, perfect for reflection and rejuvenation during their Hajj journey.</p>
                        <p>With its prime location and stunning views of the Kaaba, Dar Al Gufran Hotel is the ideal choice
                            for those seeking a peaceful and convenient stay in Makkah. The hotel offers a range of
                            amenities and services to ensure a comfortable and memorable stay for all guests.</p>
                        <p>Experience the tranquility and comfort of Dar Al Gufran Hotel, located in the heart of Makkah,
                            Saudi Arabia. This luxurious hotel is designed to provide pilgrims with a peaceful and serene
                            atmosphere, perfect for reflection and rejuvenation during their Hajj journey.</p>
                        <p>With its prime location and stunning views of the Kaaba, Dar Al Gufran Hotel is the ideal choice
                            for those seeking a peaceful and convenient stay in Makkah. The hotel offers a range of
                            amenities and services to ensure a comfortable and memorable stay for all guests.</p>
                        <a href="destination-details.html" class="theme-btn mt-25 style-two">
                            <span data-hover="Explore Hotel">Explore Hotel</span>
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <div class="destination-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d96777.16150026117!2d-74.00840582560909!3d40.71171357405996!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1706508986625!5m2!1sen!2sbd"
                            style="border:0; width: 100%;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Hotel Area end -->


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


    <!-- Features Tours Area start -->
    <section class="features-tour-area bgc-black text-white pt-100 pb-50 rel z-1">
        <div class="container">
            <div class="row justify-content-between align-items-center pb-25">
                <div class="col-lg-6">
                    <div class="section-title counter-text-wrap mb-20" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <h2>Discover Tours</h2>
                        <p>One site <span class="count-text plus bgc-primary" data-speed="3000" data-stop="34500">0</span>
                            most popular experience</p>
                    </div>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <ul class="destinations-nav style-two mb-20">
                        <li data-filter="*" class="active">Show All</li>
                        <li data-filter=".beach">Beach</li>
                        <li data-filter=".museum">Museum</li>
                        <li data-filter=".park">Park</li>
                        <li data-filter=".city">City</li>
                    </ul>
                </div>
            </div>
            <div class="row destinations-active justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 item beach park">
                    <div class="destination-item style-four no-border" data-aos="flip-left" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="image">
                            <span class="badge">10% Off</span>
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="assets/images/destinations/tour1.jpg" alt="Tour">
                        </div>
                        <div class="content">
                            <span class="location"><i class="fal fa-map-marker-alt"></i> Bali, Indonesia</span>
                            <h6><a href="tour-details.html">Relinking Beach in Nusa panada island, Bali, Indonesia</a></h6>
                        </div>
                        <div class="destination-footer">
                            <span class="price"><span>$58.00</span>/person</span>
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <a href="tour-details.html" class="theme-btn style-three">
                            <span data-hover="Explore">Explore</span>
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 item museum park city">
                    <div class="destination-item style-four no-border" data-aos="flip-left" data-aos-delay="50"
                        data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="assets/images/destinations/tour2.jpg" alt="Tour">
                        </div>
                        <div class="content">
                            <span class="location"><i class="fal fa-map-marker-alt"></i> New Zealand</span>
                            <h6><a href="tour-details.html">Relinking Beach in Nusa panada island, Bali, Indonesia</a></h6>
                        </div>
                        <div class="destination-footer">
                            <span class="price"><span>$58.00</span>/person</span>
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <a href="tour-details.html" class="theme-btn style-three">
                            <span data-hover="Explore">Explore</span>
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 item beach city">
                    <div class="destination-item style-four no-border" data-aos="flip-left" data-aos-delay="100"
                        data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <span class="badge bgc-pink">Featured</span>
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="assets/images/destinations/tour3.jpg" alt="Tour">
                        </div>
                        <div class="content">
                            <span class="location"><i class="fal fa-map-marker-alt"></i> Bali, Indonesia</span>
                            <h6><a href="tour-details.html">Relinking Beach in Nusa panada island, Bali, Indonesia</a></h6>
                        </div>
                        <div class="destination-footer">
                            <span class="price"><span>$58.00</span>/person</span>
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <a href="tour-details.html" class="theme-btn style-three">
                            <span data-hover="Explore">Explore</span>
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 item beach museum">
                    <div class="destination-item style-four no-border" data-aos="flip-left" data-aos-delay="150"
                        data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="assets/images/destinations/tour4.jpg" alt="Tour">
                        </div>
                        <div class="content">
                            <span class="location"><i class="fal fa-map-marker-alt"></i> Rome, Italy</span>
                            <h6><a href="tour-details.html">Relinking Beach in Nusa panada island, Bali, Indonesia</a></h6>
                        </div>
                        <div class="destination-footer">
                            <span class="price"><span>$58.00</span>/person</span>
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <a href="tour-details.html" class="theme-btn style-three">
                            <span data-hover="Explore">Explore</span>
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Tours Area end -->


    <!-- Popular Activity Area start -->
    <section class="popular-activity pt-100 pb-70 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-center counter-text-wrap mb-45" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <h2>Explore Our Popular Activity</h2>
                        <p>One site <span class="count-text plus" data-speed="3000" data-stop="34500">0</span> most
                            popular experience</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-md-6" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="activity-item">
                        <div class="image">
                            <img src="assets/images/activities/activity1.png" alt="Activity">
                        </div>
                        <div class="content">
                            <h5><a href="tour-details.html">Mountain Trek</a></h5>
                            <span class="time">258 tours</span>
                        </div>
                        <div class="right-btn">
                            <a href="tour-details.html" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="activity-item">
                        <div class="image">
                            <img src="assets/images/activities/activity2.png" alt="Activity">
                        </div>
                        <div class="content">
                            <h5><a href="tour-details.html">Beach Snorkel</a></h5>
                            <span class="time">320 tours</span>
                        </div>
                        <div class="right-btn">
                            <a href="tour-details.html" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="activity-item">
                        <div class="image">
                            <img src="assets/images/activities/activity3.png" alt="Activity">
                        </div>
                        <div class="content">
                            <h5><a href="tour-details.html">Explore Ruins</a></h5>
                            <span class="time">258 tours</span>
                        </div>
                        <div class="right-btn">
                            <a href="tour-details.html" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="activity-item">
                        <div class="image">
                            <img src="assets/images/activities/activity4.png" alt="Activity">
                        </div>
                        <div class="content">
                            <h5><a href="tour-details.html">Road Trip</a></h5>
                            <span class="time">258 tours</span>
                        </div>
                        <div class="right-btn">
                            <a href="tour-details.html" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="activity-item">
                        <div class="image">
                            <img src="assets/images/activities/activity5.png" alt="Activity">
                        </div>
                        <div class="content">
                            <h5><a href="tour-details.html">City Cycling</a></h5>
                            <span class="time">320 tours</span>
                        </div>
                        <div class="right-btn">
                            <a href="tour-details.html" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="activity-item">
                        <div class="image">
                            <img src="assets/images/activities/activity6.png" alt="Activity">
                        </div>
                        <div class="content">
                            <h5><a href="tour-details.html">River Cruise</a></h5>
                            <span class="time">258 tours</span>
                        </div>
                        <div class="right-btn">
                            <a href="tour-details.html" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="activity-item">
                        <div class="image">
                            <img src="assets/images/activities/activity7.png" alt="Activity">
                        </div>
                        <div class="content">
                            <h5><a href="tour-details.html">Fishing</a></h5>
                            <span class="time">258 tours</span>
                        </div>
                        <div class="right-btn">
                            <a href="tour-details.html" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="activity-item">
                        <div class="image">
                            <img src="assets/images/activities/activity8.png" alt="Activity">
                        </div>
                        <div class="content">
                            <h5><a href="tour-details.html">Spa Treatment</a></h5>
                            <span class="time">320 tours</span>
                        </div>
                        <div class="right-btn">
                            <a href="tour-details.html" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="activity-item">
                        <div class="image">
                            <img src="assets/images/activities/activity9.png" alt="Activity">
                        </div>
                        <div class="content">
                            <h5><a href="tour-details.html">Hiking Trekking</a></h5>
                            <span class="time">258 tours</span>
                        </div>
                        <div class="right-btn">
                            <a href="tour-details.html" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Activity Area end -->


    <!-- CTA Area start -->
    <section class="cta-area rel z-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-4 col-md-6" data-aos="zoom-in-down" data-aos-duration="1500" data-aos-offset="50">
                    <div class="cta-item" style="background-image: url(assets/images/cta/cta1.jpg);">
                        <span class="category">Tent Camping</span>
                        <h2>Explore the world best tourism</h2>
                        <a href="tour-details.html" class="theme-btn style-two bgc-secondary">
                            <span data-hover="Explore Tours">Explore Tours</span>
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6" data-aos="zoom-in-down" data-aos-delay="50" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="cta-item" style="background-image: url(assets/images/cta/cta2.jpg);">
                        <span class="category">Sea Beach</span>
                        <h2>World largest Sea Beach in Thailand</h2>
                        <a href="tour-details.html" class="theme-btn style-two">
                            <span data-hover="Explore Tours">Explore Tours</span>
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6" data-aos="zoom-in-down" data-aos-delay="100" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="cta-item" style="background-image: url(assets/images/cta/cta3.jpg);">
                        <span class="category">Water Falls</span>
                        <h2>Largest Water falls Bali, Indonesia</h2>
                        <a href="tour-details.html" class="theme-btn style-two bgc-secondary">
                            <span data-hover="Explore Tours">Explore Tours</span>
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Area end -->


    <!-- Hotel Area start -->
    <section class="hotel-area py-70 rel z-1">
        <div class="container">
            <div class="row justify-content-between align-items-center pb-40">
                <div class="col-lg-9">
                    <div class="section-title counter-text-wrap mb-15" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <h2>Discover More Hotels</h2>
                    </div>
                </div>
                <div class="col-lg-3 text-xl-end">
                    <a href="tour-list.html" class="theme-btn style-two bgc-secondary mb-15">
                        <span data-hover="Explore More Hotel">Explore More</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                @include('partials.hotel-card-light')
                @include('partials.hotel-card-light')
                @include('partials.hotel-card-light')
                @include('partials.hotel-card-light')
                @include('partials.hotel-card-light')
                @include('partials.hotel-card-light')
            </div>
        </div>
    </section>
    <!-- Hotel Area end -->
@endsection
