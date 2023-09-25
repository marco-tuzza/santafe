@extends('layouts.app')

@section('content')
<div id="contact-us-map-container">
    <iframe src="https://my.atlist.com/map/018f48e8-0c86-4941-9604-09382c609c99?share=true" 
    allow="geolocation 'self' https://my.atlist.com" 
    width="100%" 
    height="500px" 
    frameborder="0" 
    scrolling="no" 
    allowfullscreen></iframe>
</div>

<div id="contact-us-body-container">
    <div id="contact-us-body-title">
        <h1>Contact Us</h1>
        <span>Send us a message and we’ll get back to you as soon as possible.</span>
        <span>Looking forward to hearing from you!</span>
    </div>
    <div id="contact-us-body-content">
        <div id="contact-us-body-content-form">
            <form id="contact-us-form" action="POST">
                <input type="text" name="name">
                <input type="email" name="email">
                <input type="text" name="phone">
                <textarea name="message"></textarea>
                <input type="submit" value="Send" class="btn btn-primary btn-block">
            </form>
        </div>
        <div id="contact-us-body-content-contacts">
            contacts
        </div>
    </div>
</div>
@endsection('content')