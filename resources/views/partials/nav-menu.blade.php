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
            </li>
            <li class="{{ Request::routeIs('about') ? 'current' : '' }}"><a href="{{ route('about') }}">About</a></li>
            <li class="{{ Request::routeIs('packages') ? 'current' : '' }}"><a
                    href="{{ route('packages') }}">Packages</a>
                <ul>
                    {{-- <li><a href="tour-list.html">Tour List</a></li>
                    <li><a href="tour-grid.html">Tour Grid</a></li>
                    <li><a href="tour-sidebar.html">Tour Sidebar</a></li>
                    <li><a href="tour-details.html">Tour Details</a></li>
                    <li><a href="tour-guide.html">Tour Guide</a></li> --}}
                </ul>
            </li>
            <li class="{{ Request::routeIs('guides') ? 'current' : '' }}"><a href="{{ route('guides') }}">Guides</a>
            </li>
            <li class=""><a href="{{ route('hotels') }}">Hotels</a>
            </li>
            <li class="{{ Request::routeIs('products') ? 'current' : '' }}"><a href="{{ route('products') }}">Shop</a>
                <ul>
                    {{-- <li><a href="destination1.html">Destination 01</a></li>
                    <li><a href="destination2.html">Destination 01</a></li>
                    <li><a href="destination-details.html">Destination Details</a></li> --}}
                </ul>
            </li>
            <li class="dropdown"><a href="#">Pages</a>
                <ul>
                    <li><a href="{{ route('testt') }}">Test</a></li>
                    <li><a href="{{ route('visa_processes') }}">Visa Processes</a></li>
                    @guest
                        <li class="dropdown">
                            <a href="#">Register</a>
                            <ul>
                                <li><a href="{{ route('register.guide') }}">Become a Guide</a></li>
                                <li><a href="{{ route('register.hajji') }}">Become a Hajji</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                    @else
                        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    @endguest
                    <li><a href="{{ route('booking', 1) }}">Booking Page</a></li>
                    <li class="dropdown"><a href="#">products</a>
                        <ul>
                            <li><a href="{{ route('products') }}">Our Products</a></li>
                            <li><a href="{{ route('products.details', 1) }}">Product Details</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    <li><a href="{{ route('cart') }}">Cart</a></li>
                    <li><a href="{{ route('404') }}">404 Error</a></li>
                    @auth
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="p-1">
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                        </li>
                    @endauth
                </ul>
            </li>
            <li>
                <a href="{{ route('blogs') }}">Blogs</a>
            </li>
        </ul>
    </div>

</nav>
<!-- Main Menu End-->
