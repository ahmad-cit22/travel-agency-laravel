<div class="col-xl-4 col-md-6">
    <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up" data-aos-duration="1500"
        data-aos-offset="50">
        <div class="image">
            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
            <img src="assets/images/destinations/destination111.jpg" alt="Hajj Tour" />
            <div class="ratting"><i class="fas fa-star"></i> 5.0</div>
        </div>
        <div class="content">
            <div class="destination-header">
                <div class="tour-info d-flex justify-content-between align-items-center" style="font-size: 0.8rem;">
                    <span class="location"><i class="fal fa-pray"></i> Hajj</span>
                    <span class="tour-date"><i class="fal fa-calendar-alt"></i> Date: 15th Aug 2024</span>
                </div>
            </div>
            <h6 class="mb-3">
                <a href="{{ route('packages.details', 1) }}">Masjid al-Haram: The Heart of Hajj</a>
            </h6>
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center justify-content-between" style="font-size: 0.8rem;">
                    <img src="{{ asset('assets/images/guides') . '/' . 'guide-1.jpg' }}" alt="Guide"
                        class="img-fluid rounded-circle" width="50" style="height: 50px; object-fit: cover;">
                    <div class="guide-content ms-3">
                        <p class="my-0"><a href="destination-details.html">Muhammad Ali</a></p>
                        <span style="font-size: 0.7rem">Dhanmondi, Dhaka</span>
                    </div>
                </div>
                <span class="time" style="font-size: 0.8rem;"><i class="fal fa-clock mr-2"></i> 7 Days</span>
            </div>

            <div class="seats-info d-flex align-items-start justify-content-between mt-3 mb-3 p-2 border-2 rounded bgc-white m-auto"
                style="width: 80%; border-radius: 30px !important; border-color: var(--heading-color) !important;">
                <div class="seat-status d-flex align-items-center justify-content-between"
                    style="border-right: 1px solid; width: 50%;">
                    <div class="text-center m-auto">
                        <span class="badge bgc-primary rounded-pill mb-1 px-3 py-1">40</span>
                        <div class="text-muted small">Total Seats</div>
                    </div>
                </div>
                <div class="seat-status d-flex align-items-center justify-content-between" style="width: 50%;">
                    <div class="text-center m-auto">
                        <span class="badge bgc-secondary rounded-pill mb-1 px-3 py-1">20</span>
                        <div class="text-muted small">Booked</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="destination-footer">
            <span class="price" style="color: var(--heading-color)"><span class="text-success">$1500</span>/person</span>
            <a href="{{ route('packages.details', 1) }}" class="style-two style-three read-more" style="padding: 10px !important;">
                <i class="fal fa-angle-right"></i>
            </a>
        </div>
    </div>
</div>
