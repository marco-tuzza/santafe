import $ from 'jquery';

$(formValidation);

function formValidation() 
{
    const form = $('#contact-us-form');
    const username = $('#name');
    const email = $('#email');
    const phone = $('#phone');
    const message = $('#message');
    const errorElement = $('#error');

    form.on('submit', (e) => {
        let errorMessages = [];
        const nameRegex = /^[a-zA-Z\u00C0-\u00FF\s]+$/;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const phoneRegex = /^\d+$/;
         
        nameConditions(username, nameRegex, errorMessages);
        emailConditions(email, emailRegex, errorMessages);
        phoneConditions(phone, phoneRegex, errorMessages);
        messageConditions(message, errorMessages);
        validationCheck(e, errorMessages, errorElement);
    });
}

function nameConditions(username, nameRegex, errorMessages) 
{
    if (!nameRegex.test(username.val()))
    {
        errorMessages.push('Name is invalid. It should only contain letters and spaces, and it cannot be empty.');
    } 
    else if (username.val().length < 2)
    {
        errorMessages.push('Name must be at least 2 characters long');
    } 
    else if (username.val().length > 255) 
    {
        errorMessages.push('Name must be less than 255 characters long');
    }
}

function emailConditions(email, emailRegex, errorMessages) 
{
    if (!emailRegex.test(email.val())) 
    {
        errorMessages.push('Please enter a valid email address');
    } 
    else if (email.val().length < 5) 
    {
        errorMessages.push('Email must be at least 5 characters long');
    } 
    else if (email.val().length > 255) 
    {
        errorMessages.push('Email must be less than 255 characters long');
    }
}

function phoneConditions(phone, phoneRegex, errorMessages) 
{
    if (!phoneRegex.test(phone.val())) 
    {
        errorMessages.push('Phone number is invalid. It should only contain numbers, and it cannot be empty.');
    } 
    else if (phone.val().length < 4) 
    {
        errorMessages.push('Phone number must be at least 4 characters long');
    } 
    else if (phone.val().length > 16) 
    {
        errorMessages.push('Phone number must be less than 16 characters long');
    }
}

function messageConditions(message, errorMessages) 
{
    if (message.val().length < 15) 
    {
        errorMessages.push('Message must be at least 15 characters long');
    } 
    else if (message.val().length > 1000) 
    {
        errorMessages.push('Message must be less than 1000 characters long');
    }
}

function validationCheck(e, errorMessages, errorElement) 
{
    if (errorMessages.length > 0) 
    {
        e.preventDefault();
        errorElement.html(errorMessages.map(msg => `<div>${msg}</div>`).join(''));
    }

}