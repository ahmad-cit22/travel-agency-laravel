@extends('layouts.master')

@section('content')
    <!-- Hero Area Start -->
    <section class="hero-area bgc-black pt-200 pb-100 rpt-120 rel z-2"
        style="background-color: #181622 !important; background-repeat: no-repeat; background-image: url({{ asset('assets/images/hero/pxfuel1.jpg') }}); background-size: cover;">
        <!-- Gradient Overlay -->
        <div
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to bottom, #241f3e, #000); opacity: 0.7; z-index: 1;">
        </div>
        <div class="container-fluid">
            <h1 class="hero-title" data-aos="flip-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">Hajj &
                Umrah</h1>
        </div>
        @include('partials.search-filter')
    </section>
    <!-- Hero Area End -->

    <!-- Destinations Area start -->
    <section class="destinations-area bgc-black pt-100 pb-70 rel z-1">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-white text-center counter-text-wrap mb-70" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <h2>Explore the Holy Sites of Hajj & Umrah</h2>
                        <p>Join over <span class="count-text plus" data-speed="3000" data-stop="34500">0</span> satisfied
                            pilgrims from Bangladesh on a journey of a lifetime.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xxl-3 col-xl-4 col-md-6">
                    <div class="destination-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <div class="ratting"><i class="fas fa-star"></i> 5.0</div>
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="assets/images/destinations/makkah.jpg" alt="Destination">
                        </div>
                        <div class="content">
                            <span class="location"><i class="fal fa-map-marker-alt"></i> Makkah, Saudi Arabia</span>
                            <h5><a href="destination-details.html">Masjid al-Haram: The Heart of Hajj</a></h5>
                            <span class="time">7 Days - Family Friendly</span>
                        </div>
                        <div class="destination-footer">
                            <span class="price"><span>$1500</span>/per person</span>
                            <a href="#" class="read-more">Book Now <i class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-md-6">
                    <div class="destination-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="image">
                            <div class="ratting"><i class="fas fa-star"></i> 4.9</div>
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="assets/images/destinations/madina.jpg" alt="Destination">
                        </div>
                        <div class="content">
                            <span class="location"><i class="fal fa-map-marker-alt"></i> Madinah, Saudi Arabia</span>
                            <h5><a href="destination-details.html">Prophet’s Mosque: Embrace Spiritual Peace</a></h5>
                            <span class="time">5 Days - Pilgrim Package</span>
                        </div>
                        <div class="destination-footer">
                            <span class="price"><span>$1200</span>/per person</span>
                            <a href="#" class="read-more">Book Now <i class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-md-6">
                    <div class="destination-item" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="image">
                            <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="assets/images/destinations/aarafat.jpg" alt="Destination">
                        </div>
                        <div class="content">
                            <span class="location"><i class="fal fa-map-marker-alt"></i> Arafat, Saudi Arabia</span>
                            <h5><a href="destination-details.html">Day of Arafat: A Time for Prayer and Reflection</a></h5>
                            <span class="time">1 Day - Guided Experience</span>
                        </div>
                        <div class="destination-footer">
                            <span class="price"><span>$300</span>/per person</span>
                            <a href="#" class="read-more">Book Now <i class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-md-6">
                    <div class="destination-item" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="image">
                            <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="assets/images/destinations/mina.jpg" alt="Destination">
                        </div>
                        <div class="content">
                            <span class="location"><i class="fal fa-map-marker-alt"></i> Mina, Saudi Arabia</span>
                            <h5><a href="destination-details.html">Mina: The Journey of Sacrifice</a></h5>
                            <span class="time">2 Days - Traditional Package</span>
                        </div>
                        <div class="destination-footer">
                            <span class="price"><span>$400</span>/per person</span>
                            <a href="#" class="read-more">Book Now <i class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Destinations Area end -->


    <!-- About Us Area Start -->
    <section class="about-us-area py-100 rpb-90 rel z-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="about-us-content rmb-55" data-aos="fade-left" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="section-title mb-25">
                            <h2>Why Choose Us for Your Hajj & Umrah Journey?</h2>
                        </div>
                        <p>With over a decade of experience, we are committed to making your spiritual journey a safe and
                            comfortable experience. Our tailored packages cater to your needs, ensuring a memorable
                            pilgrimage.</p>
                        <div class="divider counter-text-wrap mt-45 mb-55"><span>We have <span><span
                                        class="count-text plus" data-speed="3000" data-stop="10">0</span>
                                    Years</span> of service excellence</span></div>
                        <div class="row">
                            <div class="col-6">
                                <div class="counter-item counter-text-wrap">
                                    <span class="count-text k-plus" data-speed="3000" data-stop="5">0</span>
                                    <span class="counter-title">Popular Packages</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="counter-item counter-text-wrap">
                                    <span class="count-text m-plus" data-speed="3000" data-stop="3">0</span>
                                    <span class="counter-title">Satisfied Pilgrims</span>
                                </div>
                            </div>
                        </div>
                        <a href="packages.html" class="theme-btn mt-10 style-two">
                            <span data-hover="Explore Packages">Explore Packages</span>
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <div class="about-us-image">
                        <img src="assets/images/about/hajj-umrah-about.jpg" alt="About Us">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Area End -->


    <!-- Popular Destinations Area start -->
    <section class="popular-destinations-area rel z-1">
        <div class="container-fluid">
            <div class="popular-destinations-wrap br-20 bgc-lighter pt-100 pb-70">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title text-center counter-text-wrap mb-70" data-aos="fade-up"
                            data-aos-duration="1500" data-aos-offset="50">
                            <h2>Explore Popular Destinations</h2>
                            <p>One site <span class="count-text plus" data-speed="3000" data-stop="34500">0</span> most
                                popular experience</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-md-6">
                            <div class="destination-item style-two" data-aos="flip-up" data-aos-duration="1500"
                                data-aos-offset="50">
                                <div class="image">
                                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                    <img src="assets/images/destinations/destination1.jpg" alt="Destination">
                                </div>
                                <div class="content">
                                    <h6><a href="destination-details.html">Thailand beach</a></h6>
                                    <span class="time">5352+ tours & 856+ Activity</span>
                                    <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="100"
                                data-aos-duration="1500" data-aos-offset="50">
                                <div class="image">
                                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                    <img src="assets/images/destinations/destination2.jpg" alt="Destination">
                                </div>
                                <div class="content">
                                    <h6><a href="destination-details.html">Parga, Greece</a></h6>
                                    <span class="time">5352+ tours & 856+ Activity</span>
                                    <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="200"
                                data-aos-duration="1500" data-aos-offset="50">
                                <div class="image">
                                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                    <img src="assets/images/destinations/destination3.jpg" alt="Destination">
                                </div>
                                <div class="content">
                                    <h6><a href="destination-details.html">Castellammare del Golfo, Italy</a></h6>
                                    <span class="time">5352+ tours & 856+ Activity</span>
                                    <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="destination-item style-two" data-aos="flip-up" data-aos-duration="1500"
                                data-aos-offset="50">
                                <div class="image">
                                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                    <img src="assets/images/destinations/destination4.jpg" alt="Destination">
                                </div>
                                <div class="content">
                                    <h6><a href="destination-details.html">Reserve of Canada, Canada</a></h6>
                                    <span class="time">5352+ tours & 856+ Activity</span>
                                    <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="100"
                                data-aos-duration="1500" data-aos-offset="50">
                                <div class="image">
                                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                    <img src="assets/images/destinations/destination5.jpg" alt="Destination">
                                </div>
                                <div class="content">
                                    <h6><a href="destination-details.html">Dubai united states</a></h6>
                                    <span class="time">5352+ tours & 856+ Activity</span>
                                    <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="200"
                                data-aos-duration="1500" data-aos-offset="50">
                                <div class="image">
                                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                    <img src="assets/images/destinations/destination6.jpg" alt="Destination">
                                </div>
                                <div class="content">
                                    <h6><a href="destination-details.html">Milos, Greece</a></h6>
                                    <span class="time">5352+ tours & 856+ Activity</span>
                                    <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Destinations Area end -->


    <!-- Features Area start -->
    <section class="features-area pt-100 pb-45 rel z-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="features-content-part mb-55" data-aos="fade-left" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="section-title mb-60">
                            <h2>The Ultimate Travel Experience Features That Set Our Agency Apart</h2>
                        </div>
                        <div class="features-customer-box">
                            <div class="image">
                                <img src="assets/images/features/features-box.jpg" alt="Features">
                            </div>
                            <div class="content">
                                <div class="feature-authors mb-15">
                                    <img src="assets/images/features/feature-author1.jpg" alt="Author">
                                    <img src="assets/images/features/feature-author2.jpg" alt="Author">
                                    <img src="assets/images/features/feature-author3.jpg" alt="Author">
                                    <span>4k+</span>
                                </div>
                                <h6>850K+ Happy Customer</h6>
                                <div class="divider style-two counter-text-wrap my-25"><span><span class="count-text plus"
                                            data-speed="3000" data-stop="25">0</span>
                                        Years</span></div>
                                <p>We pride ourselves offering personalized itineraries</p>
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
                                    <h5><a href="tour-details.html">Tent Camping</a></h5>
                                    <p>Tent camping is wonderful way to connect with nature</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="icon"><i class="flaticon-tent"></i></div>
                                <div class="content">
                                    <h5><a href="tour-details.html">Kayaking</a></h5>
                                    <p>Kayaking is a thrilling outdoor activity that adventure</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item mt-20">
                                <div class="icon"><i class="flaticon-tent"></i></div>
                                <div class="content">
                                    <h5><a href="tour-details.html">Mountain Biking</a></h5>
                                    <p>Mountain biking is exhilarating sport that physical fitness</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="icon"><i class="flaticon-tent"></i></div>
                                <div class="content">
                                    <h5><a href="tour-details.html">Fishing & Boat</a></h5>
                                    <p>Fishing and boat bring joy quintessential activities that</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Area end -->


    <!-- Hotel Area start -->
    <section class="hotel-area bgc-black py-100 rel z-1">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-white text-center counter-text-wrap mb-70" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <h2>Discover the World's Class Top Hotel</h2>
                        <p>One site <span class="count-text plus" data-speed="3000" data-stop="34500">0</span>
                            most popular experience you’ll remember</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-8 col-lg-10">
                    <div class="destination-item style-three" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="image">
                            <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="assets/images/destinations/hotel1.jpg" alt="Hotel">
                        </div>
                        <div class="content">
                            <span class="location"><i class="fal fa-map-marker-alt"></i> Ao Nang, Thailand</span>
                            <h5><a href="destination-details.html">The brown bench near swimming pool Hotel</a>
                            </h5>
                            <ul class="list-style-one">
                                <li><i class="fal fa-bed-alt"></i> 2 Bed room</li>
                                <li><i class="fal fa-hat-chef"></i> 1 kitchen</li>
                                <li><i class="fal fa-bath"></i> 2 Wash room</li>
                                <li><i class="fal fa-router"></i> Internet</li>
                            </ul>
                            <div class="destination-footer">
                                <span class="price"><span>$85.00</span>/per night</span>
                                <a href="#" class="read-more">Book Now <i class="fal fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-8 col-lg-10">
                    <div class="destination-item style-three" data-aos="fade-up" data-aos-delay="50"
                        data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="assets/images/destinations/hotel2.jpg" alt="Hotel">
                        </div>
                        <div class="content">
                            <span class="location"><i class="fal fa-map-marker-alt"></i> Kigali, Rwanda</span>
                            <h5><a href="destination-details.html">Green trees and body of water Marriott Hotel</a>
                            </h5>
                            <ul class="list-style-one">
                                <li><i class="fal fa-bed-alt"></i> 2 Bed room</li>
                                <li><i class="fal fa-hat-chef"></i> 1 kitchen</li>
                                <li><i class="fal fa-bath"></i> 2 Wash room</li>
                                <li><i class="fal fa-router"></i> Internet</li>
                            </ul>
                            <div class="destination-footer">
                                <span class="price"><span>$85.00</span>/per night</span>
                                <a href="#" class="read-more">Book Now <i class="fal fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-8 col-lg-10">
                    <div class="destination-item style-three" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="content">
                            <span class="location"><i class="fal fa-map-marker-alt"></i> Ao Nang, Thailand</span>
                            <h5><a href="#">Painted house surrounded with trees Hotel</a></h5>
                            <ul class="list-style-one">
                                <li><i class="fal fa-bed-alt"></i> 2 Bed room</li>
                                <li><i class="fal fa-hat-chef"></i> 1 kitchen</li>
                                <li><i class="fal fa-bath"></i> 2 Wash room</li>
                                <li><i class="fal fa-router"></i> Internet</li>
                            </ul>
                            <div class="destination-footer">
                                <span class="price"><span>$85.00</span>/per night</span>
                                <a href="#" class="read-more">Book Now <i class="fal fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="image">
                            <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="assets/images/destinations/hotel3.jpg" alt="Hotel">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-8 col-lg-10">
                    <div class="destination-item style-three" data-aos="fade-up" data-aos-delay="50"
                        data-aos-duration="1500" data-aos-offset="50">
                        <div class="content">
                            <span class="location"><i class="fal fa-map-marker-alt"></i> Ao Nang, Thailand</span>
                            <h5><a href="#">house pool Jungle Pool Indonesia Hotel</a></h5>
                            <ul class="list-style-one">
                                <li><i class="fal fa-bed-alt"></i> 2 Bed room</li>
                                <li><i class="fal fa-hat-chef"></i> 1 kitchen</li>
                                <li><i class="fal fa-bath"></i> 2 Wash room</li>
                                <li><i class="fal fa-router"></i> Internet</li>
                            </ul>
                            <div class="destination-footer">
                                <span class="price"><span>$85.00</span>/per night</span>
                                <a href="#" class="read-more">Book Now <i class="fal fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="image">
                            <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="assets/images/destinations/hotel4.jpg" alt="Hotel">
                        </div>
                    </div>
                </div>
            </div>
            <div class="hotel-more-btn text-center mt-40">
                <a href="destination2.html" class="theme-btn style-four">
                    <span data-hover="Explore More Hotel">Explore More Hotel</span>
                    <i class="fal fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- Hotel Area end -->


    <!-- Mobile App Area start -->
    <section class="mobile-app-area py-100 rel z-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="mobile-app-content rmb-55" data-aos="fade-left" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="section-title mb-30">
                            <h2>We Are Available On the Store Get Our Mobile Apps Very Easily</h2>
                        </div>
                        <p>We go above and beyond to make your travel dreams a reality. Trust us to handle the
                            details so you can creating unforgettable memories. Explore the world with confidence
                        </p>
                        <ul class="list-style-two mt-35 mb-30">
                            <li>Experience Agency</li>
                            <li>Professional Team</li>
                            <li>Low Cost Travel</li>
                            <li>Online Support 24/7</li>
                        </ul>
                        <div class="google-play-app-store">
                            <a href="#"><img src="assets/images/mobile-app/g-play.jpg" alt="Google Play"></a>
                            <a href="#"><img src="assets/images/mobile-app/a-store.jpg" alt="App Store"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mobile-app-images">
                        <div class="bg"><img src="assets/images/mobile-app/phone-bg.png" alt="BG">
                        </div>
                        <div class="images">
                            <img src="assets/images/mobile-app/phone2.png" alt="Phone" data-aos="fade-down-left"
                                data-aos-duration="1500" data-aos-offset="50">
                            <img src="assets/images/mobile-app/phone.png" alt="Phone">
                            <img src="assets/images/mobile-app/phone3.png" alt="Phone" data-aos="fade-up-right"
                                data-aos-duration="1500" data-aos-offset="50">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Mobile App Area end -->


    <!-- Testimonials Area start -->
    <section class="testimonials-area rel z-1">
        <div class="container">
            <div class="testimonials-wrap bgc-lighter">
                <div class="row">
                    <div class="col-lg-5 rel" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="testimonial-left-image rmb-55"
                            style="background-image: url(assets/images/testimonials/testimonial-left.jpg);"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="testimonial-right-content" data-aos="fade-left" data-aos-duration="1500"
                            data-aos-offset="50">
                            <div class="section-title mb-55">
                                <h2><span>5280</span> Global Clients Say About Us Services</h2>
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
                                    <div class="text">"Our trip was absolutely a perfect, thanks this travel
                                        agency! They took care of every detail, from to accommodations, and even
                                        suggested incredible experiences"</div>
                                    <div class="author">
                                        <div class="image"><img src="assets/images/testimonials/author.jpg"
                                                alt="Author"></div>
                                        <div class="content">
                                            <h5>Randall V. Vasquez</h5>
                                            <span>Graphics Designer</span>
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
                                    <div class="text">"Our trip was absolutely a perfect, thanks this travel
                                        agency! They took care of every detail, from to accommodations, and even
                                        suggested incredible experiences"</div>
                                    <div class="author">
                                        <div class="image"><img src="assets/images/testimonials/author.jpg"
                                                alt="Author"></div>
                                        <div class="content">
                                            <h5>Randall V. Vasquez</h5>
                                            <span>Graphics Designer</span>
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


    <!-- CTA Area start -->
    <section class="cta-area pt-100 rel z-1">
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


    <!-- Blog Area start -->
    <section class="blog-area py-70 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-center counter-text-wrap mb-70" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <h2>Read Latest News & Blog</h2>
                        <p>One site <span class="count-text plus bgc-primary" data-speed="3000"
                                data-stop="34500">0</span> most popular experience you’ll remember</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="blog-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="content">
                            <a href="blog.html" class="category">Travel</a>
                            <h5><a href="blog-details.html">Ultimate Guide to Planning Your Dream Vacation with
                                    Ravelo Travel Agency</a></h5>
                            <ul class="blog-meta">
                                <li><i class="far fa-calendar-alt"></i> <a href="#">25 February 2024</a>
                                </li>
                                <li><i class="far fa-comments"></i> <a href="#">Comments (5)</a></li>
                            </ul>
                        </div>
                        <div class="image">
                            <img src="assets/images/blog/blog1.jpg" alt="Blog">
                        </div>
                        <a href="blog-details.html" class="theme-btn">
                            <span data-hover="Book Now">Read More</span>
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="blog-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="content">
                            <a href="blog.html" class="category">Travel</a>
                            <h5><a href="blog-details.html">Unforgettable Adventures Travel Agency Bucket List
                                    Experiences</a></h5>
                            <ul class="blog-meta">
                                <li><i class="far fa-calendar-alt"></i> <a href="#">25 February 2024</a>
                                </li>
                                <li><i class="far fa-comments"></i> <a href="#">Comments (5)</a></li>
                            </ul>
                        </div>
                        <div class="image">
                            <img src="assets/images/blog/blog2.jpg" alt="Blog">
                        </div>
                        <a href="blog-details.html" class="theme-btn">
                            <span data-hover="Book Now">Read More</span>
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="blog-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="content">
                            <a href="blog.html" class="category">Travel</a>
                            <h5><a href="blog-details.html">Exploring Culture and way Cuisine Travel Agency's they
                                    Best Foodie Destinations</a></h5>
                            <ul class="blog-meta">
                                <li><i class="far fa-calendar-alt"></i> <a href="#">25 February 2024</a>
                                </li>
                                <li><i class="far fa-comments"></i> <a href="#">Comments (5)</a></li>
                            </ul>
                        </div>
                        <div class="image">
                            <img src="assets/images/blog/blog3.jpg" alt="Blog">
                        </div>
                        <a href="blog-details.html" class="theme-btn">
                            <span data-hover="Book Now">Read More</span>
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area end -->
@endsection
