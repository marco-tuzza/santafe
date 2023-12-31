<header id="header">
    <nav>
        <div id="header-menu">
            <div id="hamburger-menu">
                <div class="hamburger-element">
                </div>
                <div class="hamburger-element">
                </div>
                <div class="hamburger-element">
                </div>
            </div>
            <ul class="header-menu-list">
                <li class="header-menu-item {{ request()->is('/') ? 'active' : '' }}">
                    <a href="/" title="Visit SantaFe Restaurant homepage">Home</a>
                </li>
                <li class="header-menu-item ">
                    <a href="/menu" title="View our menu">Menu</a>
                </li>
                <li>
                    <div id="header-menu-logo">
                        <img src="{{ asset('images/santafe_logo.png') }}" alt="SantaFe Logo">
                    </div>
                </li>
                <li class="header-menu-item {{ request()->is('about-us') ? 'active' : '' }}">
                    <a href="{{ route('about-us') }}" title="Learn about our restaurant">About Us</a>
                </li>
                <li class="header-menu-item {{ request()->is('contact-us') ? 'active' : '' }}">
                    <a href="{{ route('contact-us') }}" title="Contact us for reservations">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- Menu -->
<nav id="menu-mobile">
    <div id="menu-mobile-header">
        <i class="fa-solid fa-xmark" id="menu-mobile-header-close"></i>
    </div>
    <div id="menu-mobile-body">
        <ul id="menu-mobile-body-list">
            <li class="menu-mobile-body-element {{ request()->is('/') ? 'active' : '' }}">
                <a href="/" title="Visit SantaFe Restaurant homepage">Home</a>
            </li>
            <li class="menu-mobile-body-element">
                <a href="/menu" title="View our menu">Menu</a>
            </li>
            <li class="menu-mobile-body-element {{ request()->is('about-us') ? 'active' : '' }}">
                <a href="{{ route('about-us') }}" title="Learn about our restaurant">About Us</a>
            </li>
            <li class="menu-mobile-body-element {{ request()->is('contact-us') ? 'active' : '' }}">
                <a href="{{ route('contact-us') }}" title="Contact us for reservations">Contact Us</a>
            </li>
        </ul>
    </div>
</nav>
<!-- Dark Overlay -->
<div id="overlay"></div>