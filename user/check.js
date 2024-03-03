function validateForm1() {
    var name = document.forms["myForm1"]["fname"].value;
    var phone = document.forms["myForm1"]["_phone"].value;
    var address = document.forms["myForm1"]["_address"].value;

    if (name.match(/^[A-Za-z\s]+$/)) {
        // Name is valid
    } else {
        alert("Name must only have upper and small case letters.");
        return false;
    }

    if (phone.match(/^\d{10}$/)) {
        // Phone number is valid
    } else {
        alert("Phone number should contain only 10 digits.");
        return false;
    }

    if (address.match(/^[a-zA-Z\s]+$/)) {
        // Address is valid
    } else {
        alert("Address should contain only positive digit and upper and lower case letters.");
        return false;
    }


    // All fields are valid
    return true;
}