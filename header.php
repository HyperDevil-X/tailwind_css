<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="style.css">
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
        />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <link rel="icon" href="icon/caricon1.png">
        <title>Tailwind Cars--Premium Cars</title>
        </head>
        <body bgcolor="#FEFBF6">
      

        <div class="header">   
    <div class="social-icons">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
    </div>        
            <div class="mx-7 my-1">
                <ul class="flex space-x-7">
                    <li><i class="fa fa-phone" aria-hidden="true"></i><span class="mx-2 font-medium">+91 8918991088</span></li>
                    <li><i class="fa-solid fa-envelope" aria-hidden="true"></i><span class="mx-2 font-medium">manojbid2003@gmail.com</span></li>
                </ul>
            </div>
                <hr class="my-3 border border-black mb-6">
        <div class="container">
        
            <nav class=" text-lg mx-10 my-5 py-2.5  bg-transparent text-black  border-black font-semibold flex justify-between">
               <a href="index.php"> <h1 class="text-3xl mx-4  text-White-500 font-black italic cursor-pointer"><i class="fa-solid fa-car" aria-hidden="true"></i>
                    Premium Cars-Rental
                    <h5 class="mx-24">Get Rent At Best Price</h5>
                </h1></a>
                <div class="op">
                <ul class=" text-xl flex space-x-7  px-50 justify-items-end" style="float:left;">
                     <a href="index.php"><li class=" cursor-pointer">Home</li></a>
                    <a href="about.php"><li class=" cursor-pointer">About</li></a>
                    <a href="contact.php"><li class=" cursor-pointer">Contact</li></a>
                    <a href="service.php"><li class=" cursor-pointer">Services</li></a>
                    <a href="ourcars.php"><li class=" cursor-pointer">Our Cars</li></a>
                   
                <div class="dropdown">
                    <button class="user-icon" onclick="toggleDropdown()">
                        <i class="fa-solid fa-user" aria-hidden="true"></i>
                    </button>
                    <div id="dropdown-menu" class="dropdown-menu">
                        <a href="login.php" class="login">Login</a>
                        <a href="register.php" class="register">Register</a>
                    </div>
                </div>
<script>
    // Get the user icon button
var userIcon = document.getElementById("user-icon");

// Add click event listener to the user icon button
userIcon.addEventListener("click", function() {
    toggleDropdown();
});

// Function to toggle the dropdown menu
function toggleDropdown() {
    var dropdownMenu = document.getElementById("dropdown-menu");
    dropdownMenu.classList.toggle("show");
}

// Close the dropdown menu when clicking outside of it
window.onclick = function(event) {
    if (!event.target.matches('.user-icon')) {
        var dropdowns = document.getElementsByClassName("dropdown-menu");
        for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}


</script>

            