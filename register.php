<!-------------------Header Start------------------>
<?php
    include("../tailwind_css/header.php");
?>
  </ul>
  </nav>
  </div>
  </div>
  <!-------------------Header End------------------>
  
  <!-------------------Register Section Start------------------>
  <div id="breg" class="mt-8">

    <!-------------------Marquee Section Start------------------>
<div class="signinmarquee-section">
  <marquee behavior="scroll" direction="left" scrollamount="15">
    Signin with Google is under maintenance! Please don't use now.
  </marquee>
</div>
<!-------------------Marquee Section End------------------>

    <div class="registerc">
        <div class="registerform-box">
            <form action="register.php" name="formfill" method="post" onsubmit="return validation()">
                <h2>Create Your Account</h2>
                <div id="registerresult" style="display: none;"></div>
                <div class="registerinput-box">
                    <i class="fa-solid fa-user" aria-hidden="true"></i>
                    <input type="text" name="rusername" placeholder="Username" autocomplete="off">
                </div>
                <div class="registerinput-box">
                    <i class="fa-solid fa-envelope" aria-hidden="true"></i>
                    <input type="email" name="remail" placeholder="Email" autocomplete="off">
                </div>
                <div class="registerinput-box">
                    <i class="fa-solid fa-lock" aria-hidden="true"></i>
                    <input type="password" name="rpassword" id="rpassword" placeholder="Password" autocomplete="off">
                    <span class="password-toggle" onclick="togglePasswordVisibility('rpassword', 'eyeIcon')">
                        <i id="eyeIcon" class="fa-solid fa-eye" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="registerinput-box">
                    <i class="fa-solid fa-lock" aria-hidden="true"></i>
                    <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" autocomplete="off">
                    <span class="password-toggle" onclick="togglePasswordVisibility('cpassword', 'eyeIcons')">
                        <i id="eyeIcons" class="fa-solid fa-eye" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="registerbutton">
                    <input type="submit" name="rbtn" value="Register">
                </div>
                <!-- Sign in with Google Button -->
                <div class="mt-4 disable-on-hover">
                    <button onclick="signInWithGoogle()" id="googleBtn" class="bg-blue-600 text-white px-4 py-2 rounded-md w-full" onmouseover="disableButton()">
                        <i class="fab fa-google"></i> Sign in with Google
                    </button>
                </div>
                <div class="group">
                    <span><a href="#">Already Have An Account?</a></span>
                    <span><a href="login.php">Login</a></span>
                </div>
            </form>
        </div>
    </div>
</div>
<!----------------Register Section End------------------>

 
                <!-------------Disable google sign  start------------->
                <script src="js/disgoogle.js"></script>
                <!-------------Disable google sign  end------------->

                <!-------------Register section  start------------->
                        <script src="js/register.js"></script>
                <!-------------Register section end------------->
</body>
</html>
                        <!-------------Register php section start------------->
<?php
        include("connection.php");

        if(isset($_POST["rbtn"])) {
            // Sanitize user inputs to prevent SQL injection and XSS
            $rusername = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["rusername"]));
            $remail = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["remail"]));
            // Password hashing to prevent SQL injection and storing plaintext passwords
            $rpassword = mysqli_real_escape_string($conn, $_POST["rpassword"]);
            $cpassword = mysqli_real_escape_string($conn, $_POST["cpassword"]);
            
            // Password hashing for better security
            $hashedPassword = password_hash($rpassword, PASSWORD_DEFAULT);

            // Prepare SQL statement with placeholders
            $query = "INSERT INTO register (rusername, remail, rpassword, cpassword) VALUES (?, ?, ?, ?)";

            // Create a prepared statement
            $stmt = mysqli_prepare($conn, $query);

            // Bind parameters and execute statement
            mysqli_stmt_bind_param($stmt, "ssss", $rusername, $remail, $hashedPassword, $cpassword);
            $success = mysqli_stmt_execute($stmt);

            if($success) {
                echo "<script>alert('𝓢𝓾𝓬𝓬𝓮𝓼𝓼𝓯𝓾𝓵𝓵𝔂 𝓡𝓮𝓰𝓲𝓼𝓽𝓮𝓻𝓮𝓭'); window.location.href = 'login.php'; </script>";
                exit();
            } else {
                echo "<script>alert('𝓡𝓮𝓰𝓲𝓼𝓽𝓻𝓪𝓽𝓲𝓸𝓷 𝓕𝓪𝓲𝓵𝓮𝓭'); </script>";
            }

            // Close prepared statement
            mysqli_stmt_close($stmt);
        }

        // Close database connection
        mysqli_close($conn);
?>


                        <!-------------Register php section end------------->