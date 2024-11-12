<div class="shop-sidebar">
    <div class="widget widget-filter" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
        <h6 class="widget-title">Filter by Price</h6>
        <div class="price-filter-wrap">
            <div class="price-slider-range"></div>
            <div class="price">
                <span>Price </span>
                <input type="text" id="price" readonly />
            </div>
        </div>
    </div>

    {{-- <div class="widget widget-duration" data-aos="fade-up" data-aos-duration="1500"
                            data-aos-offset="50">
                            <h6 class="widget-title">Duration</h6>
                            <ul class="radio-filter">
                                <li>
                                    <input class="form-check-input" type="radio" checked name="Duration"
                                        id="duration1" />
                                    <label for="duration1">0 - 2 hours</label>
                                </li>
                                <li>
                                    <input class="form-check-input" type="radio" name="Duration" id="duration2" />
                                    <label for="duration2">2 - 4 hours</label>
                                </li>
                                <li>
                                    <input class="form-check-input" type="radio" name="Duration" id="duration3" />
                                    <label for="duration3">4 - 8 hours</label>
                                </li>
                                <li>
                                    <input class="form-check-input" type="radio" name="Duration" id="duration4" />
                                    <label for="duration4">Fulda (+8 hours)</label>
                                </li>
                                <li>
                                    <input class="form-check-input" type="radio" name="Duration" id="duration5" />
                                    <label for="duration5">Multi days</label>
                                </li>
                            </ul>
                        </div> --}}

    <div class="widget widget-guides" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
        <h6 class="widget-title">By Guides</h6>
        <ul class="radio-filter">
            <li>
                <input class="form-check-input" type="radio" checked name="ByGuides" id="guide1" />
                <label for="guide1">
                    <div class="image rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                        <img src="{{ asset('assets/images/guides') . '/' . 'guide-1.jpg' }}" alt="Guide"
                            class="img-fluid rounded-circle mb-3" width="50"
                            style="height: 50px; object-fit: cover;">
                    </div>
                    <div class="">
                        <p class="my-0" style="font-size: 0.9rem;">Sheikh Abdullah Adnan</p>
                        <span style="font-size: 0.8rem;">Dhanmondi, Dhaka</span>
                    </div>
                </label>
            </li>
            <li>
                <input class="form-check-input" type="radio" checked name="ByGuides" id="guide2" />
                <label for="guide2">
                    <div class="image rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                        <img src="{{ asset('assets/images/guides') . '/' . 'guide-1.jpg' }}" alt="Guide"
                            class="img-fluid rounded-circle mb-3" width="50"
                            style="height: 50px; object-fit: cover;">
                    </div>
                    <div class="">
                        <p class="my-0" style="font-size: 0.9rem;">Sheikh Abdullah Adnan</p>
                        <span style="font-size: 0.8rem;">Dhanmondi, Dhaka</span>
                    </div>
                </label>
            </li>
            <li>
                <input class="form-check-input" type="radio" checked name="ByGuides" id="guide3" />
                <label for="guide3">
                    <div class="image rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                        <img src="{{ asset('assets/images/guides') . '/' . 'guide-1.jpg' }}" alt="Guide"
                            class="img-fluid rounded-circle mb-3" width="50"
                            style="height: 50px; object-fit: cover;">
                    </div>
                    <div class="">
                        <p class="my-0" style="font-size: 0.9rem;">Sheikh Abdullah Adnan</p>
                        <span style="font-size: 0.8rem;">Dhanmondi, Dhaka</span>
                    </div>
                </label>
            </li>
        </ul>
    </div>

</div>
