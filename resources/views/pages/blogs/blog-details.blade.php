@extends('layouts.master')

@section('content')
    <!-- Page Banner Start -->
    <section class="page-banner-area pt-50 pb-35 rel z-1 bgs-cover">
        <div class="container">
            <div class="banner-inner text-white">
                <h2 class="page-title mb-10" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                    Ultimate Guide to Planning Your Dream Vacation
                </h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-20" data-aos="fade-right" data-aos-delay="200"
                        data-aos-duration="1500" data-aos-offset="50">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Blog Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page Banner End -->

    <!-- Blog Detaisl Area start -->
    <section class="blog-detaisl-page py-100 rel z-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-content" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <a href="blog.html" class="category">Travel</a>
                        <ul class="blog-meta mb-30">
                            <li><img src="{{ asset('assets/images/blog/admin.jpg') }}" alt="Admin"> <a href="#">Reed A.
                                    Johnson</a></li>
                            <li><i class="far fa-calendar-alt"></i> <a href="#">25 Feb 2024</a></li>
                        </ul>
                        <p>Tour and travel agency is a business that assists travelers with the planning, booking, and
                            execution of their travel experiences. This can include everything from transportation and
                            accommodation to guided tours, activities, to more. It sounds like you're looking for a
                            comprehensive guide or overview related to a tour and travel agency.</p>
                        <div class="image mt-40 mb-30" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <img src="{{ asset('assets/images/blog/blog1.jpg') }}" alt="Blog Details">
                        </div>
                        <h5>Services Offered by a Tour and Travel Agency</h5>
                        <p>Agency plays a pivotal role in crafting memorable experiences for travelers by offering wide
                            range of services tailored to individual preferences. Whether it's a family vacation, an
                            adventure trip, or luxury getaway well-established travel agency can handle everything from
                            flight bookings and accommodation to guided tours and activities.</p>
                        <ul class="list-style-two mt-30 mb-45" data-aos="fade-up" data-aos-duration="1500"
                            data-aos-offset="50">
                            <li>Assisting customers in booking domestic and international flights.</li>
                            <li>Organizing adventure activities such as trekking, diving, safaris, or extreme sports.</li>
                            <li>Tailoring travel plans to meet the specific needs and preferences of the customer.</li>
                            <li>Providing professional guides for city tours, cultural experiences, adventure activities,
                                etc.</li>
                            <li>Arranging local transportation such as car rentals, airport transfers, or bus tours.</li>
                            <li>Helping customers navigate the visa application process for international travel.</li>
                        </ul>
                        <div class="row mb-10">
                            <div class="col-sm-6">
                                <div class="image mb-30" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                    <img src="{{ asset('assets/images/blog/blog-middle1.jpg') }}" alt="Blog">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="image mb-30" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50"
                                    data-aos-delay="50">
                                    <img src="{{ asset('assets/images/blog/blog-middle1.jpg') }}" alt="Blog">
                                </div>
                            </div>
                        </div>
                        <h5>How to Start a Tour and Travel Agency</h5>
                        <p>Agency plays a pivotal role in crafting memorable experiences for travelers by offering wide
                            range services tailored to individual preferences. Whether it's a family vacation, an adventure
                            trip, or luxury getaway well-established travel agency can handle everything from flight
                            bookings and accommodation to guided tours .</p>
                        <blockquote class="mt-30 mb-35" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <i class="flaticon-quote"></i>
                            <div class="text">"In the world of tours and travel, every journey is an invitation to explore
                                the unknown, connect with cultures, and create memories that last lifetime It's not just
                                about the destination,extraordinary adventures."
                            </div>
                            <div class="blockquote-footer">
                                Kevin F. Glasscock
                            </div>
                        </blockquote>
                        <ul class="list-style-two mb-45" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <li>Understand the demand in your area, competition, and potential customers.</li>
                            <li>Register your business, obtain necessary licenses, and ensure compliance with local
                                regulations.</li>
                            <li>Build relationships with hotels, airlines, transport companies, and other service providers.
                            </li>
                        </ul>
                    </div>

                    <hr class="mb-45">

                    <div class="tag-share mb-50">
                        <div class="item" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            {{-- <h6>Tags </h6>
                            <div class="tag-coulds">
                                <a href="blog.html">Travel</a>
                                <a href="blog.html">Hotel</a>
                                <a href="blog.html">Tour</a>
                            </div> --}}
                        </div>
                        <div class="item" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <h6>Share </h6>
                            <div class="social-style-one">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-8 col-sm-10 rmt-75">
                    @include('partials.blog-sidebar')
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Detaisl Area end -->
@endsection
