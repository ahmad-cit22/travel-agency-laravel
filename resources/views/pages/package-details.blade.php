@extends('layouts.master')

@section('content')
    <!-- Page Banner Start -->
    <section class="page-banner-area pt-50 pb-35 rel z-1 bgs-cover"
        style="background-color: #181622 !important; background-repeat: no-repeat; background-image: url({{ asset('assets/images/hero/pxfuel1.jpg') }}); background-size: cover;">
        @include('partials.gradient-overlay')
        <div class="container">
            <div class="banner-inner text-white">
                <h2 class="page-title mb-10" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                    Package
                </h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-20" data-aos="fade-right" data-aos-delay="200"
                        data-aos-duration="1500" data-aos-offset="50">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Packages</li>
                        <li class="breadcrumb-item active">
                            Holy Makkah, Saudi Arabia
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
                        <div class="section-title pb-5">
                            <h2>Holy Makkah Hajj Package</h2>
                        </div>
                        <div class="d-flex align-items-center justify-content-start gap-1">
                            <img src="{{ asset('assets/images/guides') . '/' . 'guide-1.jpg' }}" alt="Guide"
                                class="img-fluid rounded-circle mb-" width="50"
                                style="height: 50px; object-fit: cover;">
                            <div class="guide-content ms-3">
                                <p class="mb-0"><a href="destination-details.html">Muhammad Ali</a></p>
                                <p class="mb-0 text-muted">Dhanmondi, Dhaka</p>
                            </div>
                        </div>
                        <br>
                        <div class="ratting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 text-lg-end" data-aos="fade-right" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="tour-header-social mb-10">
                        <a href="#"><i class="far fa-share-alt"></i>Share Hajj Packages</a>
                        <a href="#"><i class="fas fa-heart bgc-secondary"></i>Wish list</a>
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
                    <div class="tour-details-content">
                        <h3>Hajj Package</h3>
                        <p>Performing Hajj is a once-in-a-lifetime experience that every Muslim should undertake. It is a
                            journey that requires spiritual and physical preparation, and we are here to help you. Our Hajj
                            packages are designed to make your journey as seamless and enjoyable as possible. We offer a
                            range of packages to suit different budgets and preferences, and our experienced team will be
                            with you every step of the way.
                        </p>
                        <div class="row pb-55">
                            <div class="col-md-6">
                                <div class="tour-include-exclude mt-30">
                                    <h5>Included and Excluded</h5>
                                    <ul class="list-style-one check mt-25">
                                        <li><i class="far fa-check"></i> Visa Application</li>
                                        <li><i class="far fa-check"></i> Hotel Accommodation</li>
                                        <li><i class="far fa-check"></i> Transportation</li>
                                        <li><i class="far fa-check"></i> Food and Beverages</li>
                                        <li><i class="far fa-check"></i> Travel Insurance</li>
                                        <li><i class="far fa-check"></i> Umrah Guide</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tour-include-exclude mt-30">
                                    <h5>Excluded</h5>
                                    <ul class="list-style-one mt-25">
                                        <li><i class="far fa-times"></i> International Flights</li>
                                        <li><i class="far fa-times"></i> Tips</li>
                                        <li><i class="far fa-times"></i> Any Additional Services</li>
                                        <li><i class="far fa-times"></i> Travel Documents</li>
                                        <li><i class="far fa-times"></i> Personal Expenses</li>
                                        <li><i class="far fa-times"></i> Optional Upgrade</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3>Hajj Activities</h3>
                    <div class="tour-activities mt-30 mb-45">
                        <div class="tour-activity-item">
                            <i class="flaticon-hiking"></i>
                            <b>Tawaf</b>
                        </div>
                        <div class="tour-activity-item">
                            <i class="flaticon-fishing"></i>
                            <b>Sa'yee</b>
                        </div>
                        <div class="tour-activity-item">
                            <i class="flaticon-man"></i>
                            <b>Umrah</b>
                        </div>
                        <div class="tour-activity-item">
                            <i class="flaticon-kayak-1"></i>
                            <b>Hajj</b>
                        </div>
                        <div class="tour-activity-item">
                            <i class="flaticon-bonfire"></i>
                            <b>Visiting the Holy Sites</b>
                        </div>
                        <div class="tour-activity-item">
                            <i class="flaticon-flashlight"></i>
                            <b>Prayer in the Holy Mosques</b>
                        </div>
                        <div class="tour-activity-item">
                            <i class="flaticon-cycling"></i>
                            <b>Zam Zam Water</b>
                        </div>
                        <div class="tour-activity-item">
                            <i class="flaticon-meditation"></i>
                            <b>Dua'a</b>
                        </div>
                    </div>

                    <h3>Hajj Itinerary</h3>
                    <div class="accordion-two mt-25 mb-60" id="faq-accordion-two">
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwoOne">
                                    8th Dhul-Hijjah - Arrival in Makkah
                                </button>
                            </h5>
                            <div id="collapseTwoOne" class="accordion-collapse collapse"
                                data-bs-parent="#faq-accordion-two">
                                <div class="accordion-body">
                                    <p>Perform Umrah rituals, including Tawaf, Sa'yee, and Halq or Taqsir</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwoTwo">
                                    9th Dhul-Hijjah - Arafah
                                </button>
                            </h5>
                            <div id="collapseTwoTwo" class="accordion-collapse collapse show"
                                data-bs-parent="#faq-accordion-two">
                                <div class="accordion-body">
                                    <p>Spend the day in Arafah, performing Dua'a and praying</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwoThree">
                                    10th Dhul-Hijjah - Staying in Mina
                                </button>
                            </h5>
                            <div id="collapseTwoThree" class="accordion-collapse collapse"
                                data-bs-parent="#faq-accordion-two">
                                <div class="accordion-body">
                                    <p>Stay in Mina, performing the rituals of Hajj</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwoFour">
                                    11th Dhul-Hijjah - Staying in Mina
                                </button>
                            </h5>
                            <div id="collapseTwoFour" class="accordion-collapse collapse"
                                data-bs-parent="#faq-accordion-two">
                                <div class="accordion-body">
                                    <p>Stay in Mina, performing the rituals of Hajj</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwoFive">
                                    12th Dhul-Hijjah - Departure from Makkah
                                </button>
                            </h5>
                            <div id="collapseTwoFive" class="accordion-collapse collapse"
                                data-bs-parent="#faq-accordion-two">
                                <div class="accordion-body">
                                    <p>Perform Tawaf al-Wada'a, and depart from Makkah</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3>Frequently Asked Questions</h3>
                    <div class="accordion-one mt-25 mb-60" id="faq-accordion">
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne">
                                    What is the best way to prepare for Hajj?
                                </button>
                            </h5>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>Preparing for Hajj requires physical, mental and spiritual preparation. It is
                                        recommended to start preparing at least 6 months before the pilgrimage.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo">
                                    What is the best way to prepare for Hajj?
                                </button>
                            </h5>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>Preparing for Hajj requires physical, mental and spiritual preparation. It is
                                        recommended to start preparing at least 6 months before the pilgrimage.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree">
                                    What is the best way to prepare for Hajj?
                                </button>
                            </h5>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>Preparing for Hajj requires physical, mental and spiritual preparation. It is
                                        recommended to start preparing at least 6 months before the pilgrimage.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3>Clients Reviews</h3>
                    <div class="clients-reviews bgc-black mt-30 mb-60">
                        <div class="left">
                            <b>4.8</b>
                            <span>(586 reviews)</span>
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <div class="right">
                            <h2 class="text-center text-white">
                                Reviews
                            </h2>
                        </div>
                    </div>

                    <h3>Add Reviews</h3>
                    <form id="comment-form" class="comment-form bgc-lighter z-1 rel mt-30" name="review-form"
                        action="#" method="post" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="comment-review-wrap">
                            <div class="comment-ratting-item">
                                <span class="title">Rating</span>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-30 mb-40">
                        <h5>Leave Feedback</h5>
                        <div class="row gap-20 mt-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="full-name">Name</label>
                                    <input type="text" id="full-name" name="full-name" class="form-control"
                                        value="" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" id="phone" name="phone" class="form-control"
                                        value="" required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email-address">Email</label>
                                    <input type="email" id="email-address" name="email" class="form-control"
                                        value="" required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="message">Comments</label>
                                    <textarea name="message" id="message" class="form-control" rows="5" required=""></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <button type="submit" class="theme-btn bgc-secondary style-two">
                                        <span data-hover="Submit reviews">Submit reviews</span>
                                        <i class="fal fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-4 col-md-8 col-sm-10 rmt-75">
                    <div class="blog-sidebar tour-sidebar">

                        <div class="widget widget-booking" data-aos="fade-up" data-aos-duration="1500"
                            data-aos-offset="50">
                            <h5 class="widget-title">Hajj Booking</h5>
                            <form action="#">
                                <div class="date mb-25">
                                    <b>From Date</b>
                                    <input type="date">
                                </div>
                                <div class="date mb-25">
                                    <b>Return Date</b>
                                    <input type="date">
                                </div>
                                <hr>
                                <div class="time py-5">
                                    <b>Departure/Return Location :</b>
                                    <p class="mt-3">asdasdasd</p>
                                </div>
                                <div class="time py-5">
                                    <b>Time :</b>
                                    <ul class="radio-filter pl-3">
                                        {{-- <li>
                                            <input class="form-check-input" checked type="radio" name="time"
                                                id="time1">
                                            <label for="time1">12:00</label>
                                        </li> --}}
                                        <li>
                                            <input class="form-check-input" type="radio" name="time" id="time2"
                                                checked>
                                            <label for="time2">08:00</label>
                                        </li>
                                    </ul>
                                </div>
                                <hr class="mb-25">
                                <h6>Tickets:</h6>
                                <ul class="tickets clearfix">
                                    <li>
                                        Adult (18- years) <span class="price">$28.50</span>
                                        <select name="18-" id="18-">
                                            <option value="value1">01</option>
                                            <option value="value1">02</option>
                                            <option value="value1" selected>03</option>
                                        </select>
                                    </li>
                                    <li>
                                        Adult (18+ years) <span class="price">$50.40</span>
                                        <select name="18+" id="18+">
                                            <option value="value1">01</option>
                                            <option value="value1">02</option>
                                            <option value="value1">03</option>
                                        </select>
                                    </li>
                                </ul>
                                <hr class="mb-25">
                                <h6>Add Extra:</h6>
                                <ul class="radio-filter pt-5">
                                    <li>
                                        <input class="form-check-input" checked type="radio" name="AddExtra"
                                            id="add-extra1">
                                        <label for="add-extra1">Add service per booking <span>$50</span></label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="AddExtra" id="add-extra2">
                                        <label for="add-extra2">Add service per personal <span>$24</span></label>
                                    </li>
                                </ul>
                                <hr>
                                <h6>Total: <span class="price">$74</span></h6>
                                <button type="submit" class="theme-btn style-two w-100 mt-15 mb-5">
                                    <span data-hover="Book Now">Book Now</span>
                                    <i class="fal fa-arrow-right"></i>
                                </button>
                                <div class="text-center">
                                    <a href="contact.html">Cancellation Policy</a>
                                </div>
                            </form>

                            <div class="seats-info d-flex align-items-start justify-content-between mt-4 p-2 border rounded bgc-white m-auto"
                                style="width: 80%; border-radius: 24px !important; border: 0px solid var(--base-color) !important;">
                                <div class="seat-status d-flex align-items-center justify-content-between"
                                    style="border-right: 2px solid; width: 50%;">
                                    <div class="text-center m-auto">
                                        <span class="badge bgc-black rounded-pill mb-1 px-3 py-1"
                                            style="color: #fff">40</span>
                                        <div class="text-muted small">Total Seats</div>
                                    </div>
                                </div>
                                <div class="seat-status d-flex align-items-center justify-content-between"
                                    style=" width: 50%;">
                                    <div class="text-center m-auto">
                                        <span class="badge bgc-secondary rounded-pill mb-1 px-3 py-1">20</span>
                                        <div class="text-muted small">Booked</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget widget-contact" data-aos="fade-up" data-aos-duration="1500"
                            data-aos-offset="50">
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
                        <h2>Explore more packages with Muhammad Ali</h2>
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
