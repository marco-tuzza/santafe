@extends('layouts.app')

@section('content')
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
@endsection
