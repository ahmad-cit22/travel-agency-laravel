<!-- Main Menu -->
<nav class="main-menu navbar-expand-lg">
    <div class="navbar-header">
        <div class="mobile-logo">
            <a href="{{ route('home') }}">
                <img src="assets/images/logos/logo.png" alt="Logo" title="Logo" style="max-width: 160px;">
            </a>
        </div>

        <!-- Toggle Button -->
        <button type="button" class="navbar-toggle" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <div class="navbar-collapse collapse clearfix">
        <ul class="navigation clearfix">
            <li class="{{ Request::routeIs('home') ? 'current' : '' }}"><a href="{{ route('home') }}">Home</a>
                <ul>
                    {{-- <li><a href="index.html">Travel Agency</a></li>
                    <li><a href="index2.html">City Tou</a></li>
                    <li><a href="index3.html">Tour Package</a></li> --}}
                </ul>
            </li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li class=""><a href="{{ route('packages') }}">Packages</a>
                <ul>
                    {{-- <li><a href="tour-list.html">Tour List</a></li>
                    <li><a href="tour-grid.html">Tour Grid</a></li>
                    <li><a href="tour-sidebar.html">Tour Sidebar</a></li>
                    <li><a href="tour-details.html">Tour Details</a></li>
                    <li><a href="tour-guide.html">Tour Guide</a></li> --}}
                </ul>
            </li>
            <li class=""><a href="#">Hotels</a>
                <ul>
                    {{-- <li><a href="destination1.html">Destination 01</a></li>
                    <li><a href="destination2.html">Destination 01</a></li>
                    <li><a href="destination-details.html">Destination Details</a></li> --}}
                </ul>
            </li>
            <li class=""><a href="#">Islamic Shop</a>
                <ul>
                    {{-- <li><a href="destination1.html">Destination 01</a></li>
                    <li><a href="destination2.html">Destination 01</a></li>
                    <li><a href="destination-details.html">Destination Details</a></li> --}}
                </ul>
            </li>
            <li class="dropdown"><a href="#">Pages</a>
                <ul>
                    <li><a href="{{ route('register') }}">Register</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="pricing.html">Pricing</a></li>
                    <li><a href="faqs.html">faqs</a></li>
                    <li class="dropdown"><a href="#">Gallery</a>
                        <ul>
                            <li><a href="gellery-grid.html">Gallery Grid</a></li>
                            <li><a href="gellery-slider.html">Gallery Slider</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">products</a>
                        <ul>
                            <li><a href="shop.html">Our Products</a></li>
                            <li><a href="product-details.html">Product Details</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    <li><a href="{{ route('404') }}">404 Error</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="#">blog</a>
                <ul>
                    <li><a href="blog.html">blog List</a></li>
                    <li><a href="blog-details.html">blog details</a></li>
                </ul>
            </li>
        </ul>
    </div>

</nav>
<!-- Main Menu End-->
