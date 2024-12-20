@extends('layouts.master')

@section('content')
    <!-- Page Banner Start -->
    <section class="page-banner-area pt-50 pb-35 rel z-1 bgs-cover">
        <div class="container">
            <div class="banner-inner text-white">
                <h2 class="page-title mb-10" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                    Contact Us
                </h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-20" data-aos="fade-right" data-aos-delay="200"
                        data-aos-duration="1500" data-aos-offset="50">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page Banner End -->


    <!-- Contact Info Area start -->
    <section class="contact-info-area pt-100 rel z-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="contact-info-content mb-30 rmb-55" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="section-title mb-30">
                            <h2>Reach Out to Our Hajj Experts</h2>
                        </div>
                        <p>Our devoted team is here to guide you through every step of your Hajj journey, ensuring a smooth
                            and fulfilling experience.</p>
                        <div class="features-team-box mt-40">
                            <h6>85+ Dedicated Hajj Guides</h6>
                            <div class="feature-authors">
                                <img src="assets/images/features/feature-author1.jpg" alt="Guide">
                                <img src="assets/images/features/feature-author2.jpg" alt="Guide">
                                <img src="assets/images/features/feature-author3.jpg" alt="Guide">
                                <img src="assets/images/features/feature-author4.jpg" alt="Guide">
                                <img src="assets/images/features/feature-author5.jpg" alt="Guide">
                                <img src="assets/images/features/feature-author6.jpg" alt="Guide">
                                <img src="assets/images/features/feature-author7.jpg" alt="Guide">
                                <span>+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-info-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50"
                                data-aos-delay="50">
                                <div class="icon"><i class="fas fa-envelope"></i></div>
                                <div class="content">
                                    <h5>Inquire About Hajj Services</h5>
                                    <div class="text"><i class="far fa-envelope"></i> <a
                                            href="mailto:support@hajjservices.com">support@hajjservices.com</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-info-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50"
                                data-aos-delay="100">
                                <div class="icon"><i class="fas fa-phone"></i></div>
                                <div class="content">
                                    <h5>Immediate Assistance</h5>
                                    <div class="text"><i class="far fa-phone"></i> <a href="callto:+0001234588">+000 (123)
                                            45 88</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-info-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50"
                                data-aos-delay="50">
                                <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                <div class="content">
                                    <h5>New York Hajj Office</h5>
                                    <div class="text"><i class="fal fa-map-marker-alt"></i> 55 East 10th Street, New York,
                                        NY 10003, United States</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-info-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50"
                                data-aos-delay="100">
                                <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                <div class="content">
                                    <h5>Main Office Address</h5>
                                    <div class="text"><i class="fal fa-map-marker-alt"></i> 55 East 10th Street, New
                                        York, NY 10003, United States</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Info Area end -->


    <!-- Contact Form Area start -->
    <section class="contact-form-area py-70 rel z-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 m-auto">
                    <div class="comment-form bgc-lighter z-1 rel mb-30 rmb-55">
                        <form id="contactForm" class="contactForm" name="contactForm" action="" method="post"
                            data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <div class="section-title">
                                <h2>Connect with Us</h2>
                            </div>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <div class="row mt-35">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Full Name</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="Randy J. Thomas" value="" required
                                            data-error="Please enter your Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone_number">Phone Number</label>
                                        <input type="text" id="phone_number" name="phone_number" class="form-control"
                                            placeholder="Phone" value="" required
                                            data-error="Please enter your Phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" id="email" name="email" class="form-control"
                                            placeholder="enter email" value="" required
                                            data-error="Please enter your Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message">Your Message</label>
                                        <textarea name="message" id="message" class="form-control" rows="5" placeholder="Message" required
                                            data-error="Please enter your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-0">
                                        <ul class="radio-filter mb-25">
                                            <li>
                                                <input class="form-check-input" type="radio" name="terms-condition"
                                                    id="terms-condition">
                                                <label for="terms-condition">Save my name, email, and website in this
                                                    browser for the next time I comment.</label>
                                            </li>
                                        </ul>
                                        <button type="submit" class="theme-btn style-two">
                                            <span data-hover="Send Comments">Send Comments</span>
                                            <i class="fal fa-arrow-right"></i>
                                        </button>
                                        <div id="msgSubmit" class="hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Contact Form Area end -->

    <!-- Contact Map Start -->
    <div class="contact-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d96777.16150026117!2d-74.00840582560909!3d40.71171357405996!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1706508986625!5m2!1sen!2sbd"
            style="border:0; width: 100%;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- Contact Map End -->
@endsection
