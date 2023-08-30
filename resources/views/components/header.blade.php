<div id="header">
    <div id="header-menu">
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
