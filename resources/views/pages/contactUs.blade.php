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
                <label for="name">
                    Name <span class="contact-us-form-required-text">- Required</span>
                </label>
                <input class="contact-us-form-input" type="text" name="name">
                <label for="email">
                    Email <span class="contact-us-form-required-text">- Required</span>
                </label>
                <input class="contact-us-form-input" type="email" name="email">
                <label for="phone">
                    Phone Number
                </label>
                <input class="contact-us-form-input" type="text" name="phone">
                <label for="message">
                    Message <span class="contact-us-form-required-text">- Required</span>
                </label>
                <textarea class="contact-us-form-textarea"  name="message"></textarea>
                <input class="contact-us-form-submit"  type="submit" value="Submit" class="sf-primary-button">
            </form>
        </div>
        <div id="contact-us-body-content-contacts">
            <div id="contact-us-body-content-contacts-address">
                <span>
                    <i class="fa-solid fa-map-marker"></i>
                    <a href="https://www.tripadvisor.com/Restaurant_Review-g293932-d14958752-Reviews-SANTAFE-Yerevan.html#MAPVIEW" 
                    title="Santa Fe Restaurant TripAdvisor page">
                        Mokovyan St., 29/4 France Square, Yerevan 0010 Armenia
                    </a>
                </span>
            </div>
            <div id="contact-us-body-content-contacts-hours">
                <div id="contact-us-body-content-contacts-hours-text">
                    <span>Hours</span>
                </div>
                <div id="contact-us-body-content-contacts-hours-days">
                    <span>Monday</span>
                    <span>Tuesday</span>
                    <span>Wednesday</span>
                    <span>Thursday</span>
                    <span>Friday</span>
                    <span>Saturday</span>
                    <span>Sunday</span>
                </div>
                <div id="contact-us-body-content-contacts-hours-times">
                    <span>10AM - 2AM</span>
                    <span>10AM - 2AM</span>
                    <span>10AM - 2AM</span>
                    <span>10AM - 2AM</span>
                    <span>10AM - 2AM</span>
                    <span>10AM - 2AM</span>
                    <span>10AM - 2AM</span>
                </div>
            </div>
            <div id="contact-us-body-content-contacts-phone">
                <div id="contact-us-body-content-contacts-phone-text">
                    <span>Phone</span>
                </div>
                <div id="contact-us-body-content-contacts-phone-number">
                    <span>044 999929</span>
                </div>
            </div>
            <div id="contact-us-body-content-contacts-socials">
                <div id="contact-us-body-content-contacts-socials-text">
                    <span>Socials</span>
                </div>
                <div id="contact-us-body-content-contacts-socials-icons">
                    <a href="">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')