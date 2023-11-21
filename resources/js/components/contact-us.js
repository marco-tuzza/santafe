// import $ from 'jquery';

/* REMEMBER TO USE JQUERYYYYYYYYYY */

$(formValidation);

function formValidation() {

    const form = $('#contact-us-form');
    const username = $('#name');
    const email = $('#email');
    const phone = $('#phone');
    const message = $('#message');
    const errorElement = $('#error');
 

    form.on('submit', (e) => {
        let messages = [];
        const nameRegex = /^[a-zA-Z\u00C0-\u00FF\s]+$/;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const phoneRegex = /^\d+$/;
         
        nameConditions(username, nameRegex, messages);

        emailConditions(email, emailRegex, messages);

        phoneConditions(phone, phoneRegex, messages);

        messageConditions(message, messages);

        validationCheck(e, messages, errorElement);


    });
}

function nameConditions(username, nameRegex, messages) {
    if (!nameRegex.test(username.val())) {
        messages.push('Name is invalid. It should only contain letters and spaces, and it cannot be empty.');
    } else if (username.val().length < 2){
        messages.push('Name must be at least 2 characters long');
    } else if (username.val().length > 255) {
        message.push('Name must be less than 255 characters long');
    }
}

function emailConditions(email, emailRegex, messages) {
    if (!emailRegex.test(email.val())) {
        messages.push('Please enter a valid email address');
    } else if (email.val().length < 5) {
        messages.push('Email must be at least 5 characters long');
    } else if (email.val().length > 255) {
        messages.push('Email must be less than 255 characters long');
    }
}

function phoneConditions(phone, phoneRegex, messages) {
    if (!phoneRegex.test(phone.val())) {
        messages.push('Phone number is invalid. It should only contain numbers, and it cannot be empty.');
    } else if (phone.val().length < 4) {
        messages.push('Phone number must be at least 4 characters long');
    } else if (phone.val().length > 16) {
        messages.push('Phone number must be less than 16 characters long');
    }
}

function messageConditions(message, messages) {
    if (message.val().length < 15) {
        messages.push('Message must be at least 15 characters long');
    } else if (message.val().length > 1000) {
        messages.push('Message must be less than 1000 characters long');
    }
}

function validationCheck(e, messages, errorElement) {
    if (messages.length > 0) {
        e.preventDefault();
        errorElement.html(messages.map(msg => `<div>${msg}</div>`).join(''));
    }

}