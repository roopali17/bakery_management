function validateForm() {
    var name = document.forms["myForm"]["_name"].value;
    var price = document.forms["myForm"]["_price"].value;
    if (name.match(/^[0-9a-zA-Z\s]+$/)) {
        // name is valid
    } else {
        alert("Name should contain only upper and lower case letters.");
        return false;
    }
    if (price.match(/^\d+$/)) {
        // Priceis valid
    } else {
        alert("price must contain only positive numbers.");
        return false;
    }

    // All fields are valid
    return true;
}