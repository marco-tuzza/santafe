@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="container" id="hero-section">
    <div id="hero-section-container">
        <div id="hero-section-title-container">
            <h2>
                <span class="hero-section-title">Elevating Tastes,</span>
                <span class="hero-section-title">Igniting Delight</span>
            </h2>
            <button class="btn btn-primary sf-primary-button">
                <a href="/menu" title="View our menu">Browse Menu</a>
            </button>
        </div>
        <div id="hero-section-circle">
            <img src="{{ asset('images/santafe_circle.png')}}" alt="">
        </div>
    </div>
</section>

<!-- Welcome Section -->
<section class="container" id="welcome-section">
    <div id="welcome-section-text-container">
        <h2 id="welcome-section-text-title">Welcome to Santafe!</h2>
        <p id="welcome-section-text-content">
            A culinary oasis in the heart of Yerevan, 
            where authentic flavors and warm hospitality unite. 
            Explore a diverse menu of global delights crafted 
            with locally sourced ingredients. 
            Join us for an unforgettable dining experience that 
            celebrates taste and tradition.
        </p>
        <button class="btn btn-primary sf-primary-button">
            <a href="/about" title="Learn about our restaurant">More About Us</a>
        </button>
    </div>
</section>
@endsection
