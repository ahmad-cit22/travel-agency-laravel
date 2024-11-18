<div class="col-xl-4 col-md-6">
    <div class="destination-item style-two" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
        <div class="image">
            <img src="{{ asset('assets/images/guides/guide-1.jpg') }}" alt="Guide">
        </div>
        <div class="content">
            <h6><a href="{{route('guides.details', 1)}}">Sheikh Abdullah Adnan</a></h6>
            <span class="time">Dhanmondi, Dhaka</span>

            <!-- Biography Section -->
            <div class="bio mt-3">
                <p>Sheikh Abdullah Adnan is a renowned Hajj guide with years of experience helping pilgrims fulfill
                    their religious duties with ease.</p>
            </div>

            <!-- Qualifications Section -->
            <div class="qualification">
                <p><strong>Qualifications:</strong> Bachelor's Degree in Islamic Studies, Certified Hajj Guide,
                    Specialization in Pilgrimage Management.</p>
            </div>

            <!-- Languages Section -->
            <div class="languages">
                <p><strong>Languages:</strong> Bengali, Arabic, English</p>
            </div>

            <!-- Button Links Section -->
            <div class="destination-footer py-3 px-0" style="display: flex; justify-content: space-between;">
                <a href="{{route('guides.details', 1)}}" class="theme-btn p-2 px-4">
                    <span data-hover="Learn More">Learn More</span>
                    <i class="fal fa-arrow-right"></i>
                </a>
                <a href="{{route('guides.details', 1)}}" class="theme-btn style-three p-2 px-4">
                    <span data-hover="Contact">Contact</span>
                    <i class="fal fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
