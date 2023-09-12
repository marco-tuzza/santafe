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

<!-- Chef Section -->
<section class="container" id="chef-section">
    <div id="chef-section-container">
        <div id="chef-section-image-container">
            <img id="chef-section-image" src="{{ asset('images/chef-luca.png')}}" alt="">
        </div>
        <div id="chef-section-text-container">
            <h2 id="chef-section-text-title">Luca Carleo</h2>
            <span id="chef-section-text-subtitle">Executive Chef</span>
            <p id="chef-section-text-content">
                The experienced Italian chef Luca Carleo has been the 
                Executive Chef of Santafe restaurant for months now. 
                Working with the current Chef and the service team, 
                he strives to set a new quality benchmark. Along with 
                the Galaxy Group of Companies, Luca Carleo is making 
                changes to give the restaurant an authentic Italian touch.
            </p>
        </div>
    </div>
</section>

@endsection
