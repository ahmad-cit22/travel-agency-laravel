<!-- main header -->
<header class="main-header header-one white-menu menu-absolute">
    <!--Header-Upper-->
    <div class="header-upper py-30 rpy-0 custom-s-bg" style="">
        <div class="container-fluid clearfix">

            <div class="header-inner rel d-flex align-items-center">
                <div class="logo-outer">
                    {{-- <img src="assets/images/logos/logo-s.png" alt="Logo"
                                title="Logo"> --}}
                    <div class="logo"><a href="index.html">
                        <h2 class="text-white">Shatabdi</h2>
                    </a></div>
                </div>

                <div class="nav-outer mx-lg-auto ps-xxl-5 clearfix">
                    @include('partials.nav-menu')
                </div>

                <!-- Nav Search -->
                <div class="nav-search">
                    <button class="far fa-search"></button>
                    <form action="#" class="hide">
                        <input type="text" placeholder="Search" class="searchbox" required="">
                        <button type="submit" class="searchbutton far fa-search"></button>
                    </form>
                </div>

                <!-- Menu Button -->
                <div class="menu-btns py-10">
                    <a href="contact.html" class="theme-btn style-two bgc-secondary">
                        <span data-hover="Book Now">Book Now</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                    <!-- menu sidbar -->
                    <div class="menu-sidebar">
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
