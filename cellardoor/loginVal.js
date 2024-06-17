// booleans
let email_clicked = false;
let password_clicked = false;

let email_correct = false;
let password_correct = false;

// get email field and error field
let email_field = document.getElementById('emailaa');
let email_error = document.getElementById('email_error');

// get message field and error field
let password_field = document.getElementById('passwordaa');
let password_error = document.getElementById('password_error');

// get button info
let button = document.getElementById('submit');

// disable button
button.disabled = true;

document.addEventListener('click', (e) => {
    let clicked = e.target;

    if (clicked == email_field) {
        console.log('email clicked');
        email_clicked = true;
    }
    if (clicked == password_field) {
        console.log('password clicked');
        password_clicked = true;
    }

    if (clicked != email_field && email_clicked == true) {
        email_check = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (email_field.value == '' || email_field.value == null  && email_clicked == true) {
            email_error.innerHTML = " Email must be filled";
            email_correct = false;
        }
        else if (!email_field.value.match(email_check)  && email_clicked == true) {
            email_error.innerHTML = " Email must be in the proper format";
            email_correct = false;
        } 
        else {
            email_error.innerHTML = "";
            email_correct = true;
        }
    }
    
    if (clicked != password_field && password_clicked == true) {
        if (password_field.value == "" || password_field.value == null) {
            password_error.innerHTML = " Message must be filled out";
            password_correct = false;
        }
        else {
            password_error.innerHTML = "";
            password_correct = true;
        }
    }

if (email_correct == true && password_correct == true) {
    button.disabled = false;
}

});


