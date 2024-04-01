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
    
    return true;
}

function togglePasswordVisibility(inputId, iconId) 
{
    var passwordInput = document.getElementById(inputId);
    var eyeIcon = document.getElementById(iconId);
    if (passwordInput.type === "password") 
    {
        passwordInput.type = "text";
        eyeIcon.classList.remove("fa-eye");
        eyeIcon.classList.add("fa-eye-slash");
    } 
    else 
    {
        passwordInput.type = "password";
        eyeIcon.classList.remove("fa-eye-slash");
        eyeIcon.classList.add("fa-eye");
    }
}

function togglePasswordVisibility(inputId, iconId) 
{
    var passwordInput = document.getElementById(inputId);
    var eyeIcons = document.getElementById(iconId);
    if (passwordInput.type === "password") 
    {
        passwordInput.type = "text";
        eyeIcons.classList.remove("fa-eye");
        eyeIcons.classList.add("fa-eye-slash");
    } 
    else 
    {
        passwordInput.type = "password";
        eyeIcons.classList.remove("fa-eye-slash");
        eyeIcons.classList.add("fa-eye");
    }
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

