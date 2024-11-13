<div class="col-xxl-3 col-xl-4 col-md-6">
    <div class="destination-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
        <div class="image">
            <div class="ratting"><i class="fas fa-star"></i> 5.0</div>
            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
            <img src="{{ asset('assets/images/destinations') . '/' . 'destination111.jpg' }}" alt="Destination">
        </div>
        <div class="content">
            <div class="tour-info d-flex justify-content-between align-items-center" style="font-size: 0.8rem;">
                <span class="location"><i class="fal fa-pray"></i> Hajj</span>
                <span class="tour-date"><i class="fal fa-calendar-alt"></i> Date: 15th Aug 2024</span>
            </div>
            <h5 class="mb-3"><a href="{{ route('packages.details', 1) }}">Masjid al-Haram: The Heart of Hajj</a></h5>
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center justify-content-between">
                    <img src="{{ asset('assets/images/guides') . '/' . 'guide-1.jpg' }}" alt="Guide"
                        class="img-fluid rounded-circle mb-3" width="50" style="height: 50px; object-fit: cover;">
                    <div class="guide-content ms-3">
                        <p class="text-white mb-0"><a href="destination-details.html">Muhammad Ali</a></p>
                        <p>Dhanmondi, Dhaka</p>
                    </div>
                </div>
                <span class="time"><i class="fal fa-clock mr-2"></i> 7 Days</span>
            </div>

            <div class="seats-info d-flex align-items-start justify-content-between mt-3 mb-3 p-2 border rounded bgc-white m-auto"
                style="width: 80%; border-radius: 30px !important">
                <div class="seat-status d-flex align-items-center justify-content-between"
                    style="border-right: 1px solid; width: 50%;">
                    <div class="text-center m-auto">
                        <span class="badge bgc-lighter rounded-pill mb-1 px-3 py-1"
                            style="color: var(--base-color)">40</span>
                        <div class="text-muted small">Total Seats</div>
                    </div>
                </div>
                <div class="seat-status d-flex align-items-center justify-content-between" style=" width: 50%;">
                    <div class="text-center m-auto">
                        <span class="badge bgc-secondary rounded-pill mb-1 px-3 py-1">20</span>
                        <div class="text-muted small">Booked</div>
                    </div>
                </div>
            </div>


            <div class="facilities d-flex align-items-center justify-content-between"
                style="gap: 10px; margin-top: 48px;">
                <span class="facility-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Flight">
                    <span class="facility-icon">
                        <i class="fal fa-plane"></i>
                    </span>
                </span>
                <span class="facility-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Transport">
                    <span class="facility-icon-unavailable">
                        <i class="fal fa-car"></i>
                    </span>
                </span>
                <span class="facility-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Food">
                    <span class="facility-icon">
                        <i class="fal fa-utensils"></i>
                    </span>
                </span>
                <span class="facility-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Sightseeing">
                    <span class="facility-icon-unavailable">
                        <i class="fal fa-binoculars"></i>
                    </span>
                </span>
                <span class="facility-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Accommodation">
                    <span class="facility-icon">
                        <i class="fal fa-hotel"></i>
                    </span>
                </span>
            </div>
        </div>
        <div class="destination-footer">
            <span class="price"><span>$1500</span>/person</span>
            <a href="#" class="read-more theme-btn bgc-secondary" style="padding: 6px 12px !important;">Book Now
                <i class="fal fa-angle-right"></i>
            </a>
        </div>
    </div>
</div>
