function validateEmail(email) {
    
    var re = /^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6})*$/;
    email.value = email.value.replace(re, "");
}
