function validation() {
    var username = document.formfill.rusername.value;
    var email = document.formfill.remail.value;
    var password = document.formfill.rpassword.value;
    var confirmPassword = document.formfill.cpassword.value;
    var errorDiv = document.getElementById("registerresult");

    // Initially hide the error message
    errorDiv.style.display = "none";

    if (username === "") {
        errorDiv.innerHTML = "Enter Username*";
        errorDiv.style.display = "block";
        return false;
    } else if (username.length < 6) {
        errorDiv.innerHTML = "Username must be at least six characters*";
        errorDiv.style.display = "block";
        return false;
    }

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

    if (confirmPassword === "") {
        errorDiv.innerHTML = "Enter Confirm Password*";
        errorDiv.style.display = "block";
        return false;
    } else if (confirmPassword !== password) {
        errorDiv.innerHTML = "Passwords don't match*";
        errorDiv.style.display = "block";
        return false;
    }
    
    // Data validation passed, proceed with form submission
    return true;
}

// Function to close the popup and reload the page
function closePopup() {
    // Remove the open-slide class to hide the popup
    var registerpopup = document.getElementById('registerpopup');
    registerpopup.classList.remove("open-slide");
    // Reload the page immediately after clicking OK
    location.reload();
}
