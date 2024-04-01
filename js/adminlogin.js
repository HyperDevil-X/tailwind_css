function validation() {
    var email = document.formfill.remail.value;
    var password = document.formfill.lpassword.value; // Use lpassword for password field
    var errorDiv = document.getElementById("loginresult");

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

    if (password === "") {
        errorDiv.innerHTML = "Enter Password*";
        errorDiv.style.display = "block";
        return false;
    } else if (password.length < 8) {
        errorDiv.innerHTML = "Password must be at least eight characters*";
        errorDiv.style.display = "block";
        return false;
    }
    
    return true; // Return true if validation passes
}

function togglePasswordVisibility(inputId, iconId) {
    var passwordInput = document.getElementById(inputId);
    var eyeIcon = document.getElementById(iconId);
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.classList.remove("fa-eye");
        eyeIcon.classList.add("fa-eye-slash");
    } else {
        passwordInput.type = "password";
        eyeIcon.classList.remove("fa-eye-slash");
        eyeIcon.classList.add("fa-eye");
    }
}
