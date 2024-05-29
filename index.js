function validateForm() {
    var name = document.forms["tripForm"]["name"].value;
    var age = document.forms["tripForm"]["age"].value;
    var gender = document.forms["tripForm"]["gender"].value;
    var email = document.forms["tripForm"]["email"].value;
    var phone = document.forms["tripForm"]["phone"].value;
    var description = document.forms["tripForm"]["description"].value;
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    var phonePattern = /^[0-9]{10}$/;

    if (name == "" || age == "" || gender == "" || email == "" || phone == "" || description == "") {
        alert("All fields must be filled out");
        return false;
    }

    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address");
        return false;
    }

    if (!phonePattern.test(phone)) {
        alert("Please enter a valid 10-digit phone number");
        return false;
    }

    if (isNaN(age) || age <= 0) {
        alert("Please enter a valid age");
        return false;
    }

    return true;
}

window.onload = function() {
    if (sessionStorage.getItem('form_submitted') === 'true') {
        alert("Thanks for submitting your form. We are happy to see you joining us for the UK trip.");
        sessionStorage.removeItem('form_submitted');
    }
};
