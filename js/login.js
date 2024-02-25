function validation() {
    var email = document.formfill.remail.value;
    var password = document.formfill.rpassword.value;
    var errorDiv = document.getElementById("loginresult");

    // Initially hide the error message
    errorDiv.style.display = "none";

    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === "") {
        errorDiv.innerHTML = "Enter Email*";
        errorDiv.style.display = "block";
        return false;
    } else if (!email.match(emailPattern)) {
        errorDiv.innerHTML = "Enter a valid email address*";
        errorDiv.style.display = "block";
        return false;
    }

    if (password === "") {
        errorDiv.innerHTML = "Enter Password*";
        errorDiv.style.display = "block";
        return false;
    } else if (password.length < 8) {
        errorDiv.innerHTML = "Password must be at least eight characters*";
        errorDiv.style.display = "block";
        return false;
    }
    
    
    loginpopup.classList.add("open-slide");
    return false; 
}

var loginpopup = document.getElementById('loginpopup');


function closePopup() {
    
    loginpopup.classList.remove("open-slide");
    
    location.reload();
}
