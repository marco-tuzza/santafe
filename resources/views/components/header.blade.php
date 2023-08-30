<div id="header">
    <div id="header-menu">
        <div id="hamburger-menu">
            <div class="hamburger-element">
            </div>
            <div class="hamburger-element">
            </div>
            <div class="hamburger-element">
            </div>
        </div>
        <div class="header-menu-item {{ request()->is('/') ? 'active' : '' }}">
            <a href="">Home</a>
        </div>
        <div class="header-menu-item">
            <a href="">Menu</a>
        </div>
        <div id="header-menu-logo">
            <img src="{{ asset('images/logo.png') }}" alt="SantaFe Logo">
        </div>
        <div class="header-menu-item">
            <a href="">About Us</a>
        </div>
        <div class="header-menu-item">
            <a href="">Contact Us</a>
        </div>
    </div>
</div>
<!-- Menu -->
<div id="menu-mobile">
    <div id="menu-mobile-header">
        <span>X</span>
    </div>
    <div id="menu-mobile-body">
        <div class="menu-mobile-body-element">
            <span class="active">Home</span>
        </div>
        <div class="menu-mobile-body-element">
            <span>Menu</span>
        </div>
        <div class="menu-mobile-body-element">
            <span>About Us</span>
        </div>
        <div class="menu-mobile-body-element">
            <span>Contact Us</span>
        </div>
    </div>
</div>