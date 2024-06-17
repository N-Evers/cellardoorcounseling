// booleans
let name_clicked = false;
let email_clicked = false;
let message_clicked = false;

let name_correct = false;
let email_correct = false;
let message_correct = false;

// get name field and error field
let name_field = document.getElementById('nameff996');
let name_error = document.getElementById('name_error');

// get email field and error field
let email_field = document.getElementById('emailff996');
let email_error = document.getElementById('email_error');

// get message field and error field
let message_field = document.getElementById('message');
let message_error = document.getElementById('message_error');

// get button info
let button = document.getElementById('submit');

// disable button
button.disabled = false;

document.addEventListener('click', (e) => {
    let clicked = e.target;

    if (clicked == name_field) {
        console.log('name clicked');
        name_clicked = true;
    }
    if (clicked == email_field) {
        console.log('email clicked');
        email_clicked = true;
    }
    if (clicked == message_field) {
        console.log('message clicked');
        message_clicked = true;
    }

    if (clicked != name_field && name_clicked == true) {
        name_check = /^[a-zA-Z-' ]*$/;
        if (!name_field.value.match(name_check) && name_clicked == true) {
            name_error.innerHTML = " Name must contain only letters and white spaces";
            name_correct = false;
        }
        else if (name_field.value == '' || name_field.value == null && name_clicked == true) {
            name_error.innerHTML = " Name must be filled";
            name_correct = false;
        } 
        else {
            name_error.innerHTML = "";
            name_correct = true;
        }
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
    
    if (clicked != message_field && message_clicked == true) {
        if (message_field.value == "" || message_field.value == null) {
            message_error.innerHTML = " Message must be filled out";
            message_correct = false;
        }
        else {
            message_error.innerHTML = "";
            message_correct = true;
        }
    }

    if (name_correct == true && email_correct == true && message_correct == true) {
        button.disabled = false;
    } else {
        button.disabled = false;
    }

});



document.addEventListener('scroll', (e) => {
    let scroll = this.scrollY;
    if (scroll != 0) {
        document.getElementById('nav').setAttribute("style", "background-color: #252426;");
    } else {
        document.getElementById('nav').setAttribute("style", "background-color: none;");
    }
});























/*
const name = document.getElementById('nameff996');
const email = document.getElementById('emailff996');
const fakeName = document.getElementById('name');
const fakeEmail = document.getElementById('email');
const form = document.getElementById('form');

// Error message
const name_error = document.getElementById('name_error');
const email_error = document.getElementById('email_error');
const message_error = document.getElementById('message_error');

form.addEventListener('submit', (e) => {
    var email_check = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    if (name.value === '' || name.value === null) {
        e.preventDefault()
        name_error.innerHTML = "    Name is required";
        throw new Error("Name was not filled out");
    } else {
        name_error.innerHTML = "";
    }
    
    if (email.value === '' || email.value === null) {
        e.preventDefault()
        email_error.innerHTML = "    Email is required";
        throw new Error("Email was not filled out");
    } else {
        email_error.innerHTML = "";
    }

    if (!email.value.match(email_check)) {
        e.preventDefault()
        email_error.innerHTML = "    Email must follow proper format";
        throw new Error("Email was not filled out correctly");
    } else {
        email_error.innerHTML = "";
    }
    
    if (message.value === '' || message.value === null) {
        e.preventDefault()
        message_error.innerHTML = "    Message was not filled out";
        throw new Error("Message was not filled out");
    } else {
        message_error.innerHTML = "";
    }

    if(fakeName.value.length > 0  || fakeEmail.value > 0) {
        e.preventDefault();
        console.log('bot');
    }
    else {
        name_error.innerHTML = "";
        email_error.innerHTML = "";
        message_error.innerHTML = "";

        <?php 
            if (isset($_POST['nameff996'])) {
                $name = $_POST['nameff996'];
                echo $name;
                echo "test";
            }
        ?>
    }
});
*/