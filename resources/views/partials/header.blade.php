<!-- main header -->
<header class="main-header header-one white-menu menu-absolute">
    <!--Header-Upper-->
    <div class="header-upper py-30 rpy-0 custom-s-bg" style="">
        <div class="container-fluid clearfix">

            <div class="header-inner rel d-flex align-items-center">
                <div class="logo-outer">
                    {{-- <img src="assets/images/logos/logo-s.png" alt="Logo"
                                title="Logo"> --}}
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            {{-- <h2 class="text-white">Shatabdi</h2> --}}
                            <img src="{{ asset('assets/images/logos/Logo-light.png') }}" alt="Logo"
                                title="Logo" style="max-width: 200px;">
                        </a>
                    </div>
                </div>

                <div class="nav-outer mx-lg-auto ps-xxl-5 clearfix py-10 py-md-0">
                    @include('partials.nav-menu')
                </div>

                <!-- Nav Search -->
                {{-- <div class="nav-search">
                    <button class="far fa-search"></button>
                    <form action="#" class="hide">
                        <input type="text" placeholder="Search" class="searchbox" required="">
                        <button type="submit" class="searchbutton far fa-search"></button>
                    </form>
                </div> --}}

                <!-- Menu Button -->
                <div class="menu-btns py-10">
                    {{-- <a href="{{ route('packages') }}" class="theme-btn style-two bgc-secondary d-none d-xl-block">
                        <span data-hover="Book Now">Book Now</span>
                        <i class="fal fa-arrow-right"></i>
                    </a> --}}
                    <!-- menu sidbar -->
                    <div class="menu-sidebar d-none d-lg-block">
                        <button class="bg-transparent">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->
</header>
