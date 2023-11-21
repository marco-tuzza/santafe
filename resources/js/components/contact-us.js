import $ from 'jquery';

$(formValidation);

function formValidation() {
    const form = $('#contact-us-form');
    const name = $('#name');
    const email = $('#email');
    const phone = $('#phone');
    const message = $('#message');
    const errorElement = $('#error');

    form.on('submit', (e) => {
        let messages = [];
        const nameRegex = /^[a-zA-Z\u00C0-\u00FF\s]+$/;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const phoneRegex = /^\+?\d{4,16}$/;

        if (!nameRegex.test(name.val()) || name.val().length < 2 || name.val().length > 255) {
            messages.push('Name must be between 2 and 255 characters and must not contain numbers or special characters');
        }

        if (!emailRegex.test(email.val()) || email.val().length < 5 || email.val().length > 255) {
            messages.push('Email must be between 5 and 255 characters');
        }

        if (!phoneRegex.test(phone.val())) {
            messages.push('Phone number must be 5-17 characters long and can include an optional + at the start');
        }

        if (message.val().length < 15 || message.val().length > 1000) {
            messages.push('Message must be between 15 and 1000 characters');
        }

        if (messages.length > 0) {
            e.preventDefault();
            errorElement.html(messages.map(msg => `<div>${msg}</div>`).join(''));
        }
    });
}