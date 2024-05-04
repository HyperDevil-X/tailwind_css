<!-------------------Header------------------>
<?php
    include("../tailwind_css/header.php");
?>
  </ul>
  </nav>
  </div>
  </div>
  <!-------------------login Section------------------>
  <div id="breg">
  <div class="userlogc">
    <div class="userlogform-box">
        <form name="formfill" method="post" onsubmit="return validation()">
            <h2 class="my-11">Log In</h2>
            <div id="userlogresult" style="display: block;"></div>
            <div class="userloginput-box">
                <i class="fa-solid fa-envelope" aria-hidden="true"></i>
                <input type="email" name="remail" placeholder="Email" autocomplete="off" value="<?php if(isset($_POST['remail'])) echo $_POST['remail']; ?>">
            </div>
            <div class="userloginput-box">
                <i class="fa-solid fa-lock" aria-hidden="true"></i>
                <input type="password" name="rpassword" id="lpassword" placeholder="Password" autocomplete="off">
                <span class="password-toggle" onclick="togglePasswordVisibility('lpassword', 'eyeIconss')">
                    <i id="eyeIconss" class="fa-solid fa-eye" aria-hidden="true"></i>
                </span>
            </div>
            <div class="userlogbutton">
                <input type="submit" name="lbtn" value="Log In">
            </div>  
            <div class="usergro">
                <span><a href="#">Don't Have An Account?</a></span>
                &nbsp; &nbsp; &nbsp;
                <span><a href="register.php">Register</a></span>
            </div>
        </form>
    </div>
  </div>
</div>



        <!---------login-------->
        <script src="js/login.js"></script>
 
</body>
</html>
            <!--------login php section------->

<?php
        include("connection.php");

        if(isset($_POST["lbtn"])) {
            // Sanitize user inputs to prevent SQL injection and XSS
            $remail = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["remail"]));
            $rpassword = mysqli_real_escape_string($conn, $_POST["rpassword"]);

            // Prepare SQL statement with placeholders
            $query = "SELECT * FROM register WHERE remail = ?";

            // Create a prepared statement
            $stmt = mysqli_prepare($conn, $query);

            // Bind parameters and execute statement
            mysqli_stmt_bind_param($stmt, "s", $remail);
            mysqli_stmt_execute($stmt);

            // Get the result
            $result = mysqli_stmt_get_result($stmt);

            // Check if the user exists and verify password
            if($row = mysqli_fetch_assoc($result)) {
                // Verify password using password_verify function
                if(password_verify($rpassword, $row['rpassword'])) {
                    // Password is correct
                    session_start();
                    $_SESSION['remail'] = $remail; // storing email address in session variable
                    $_SESSION['login_time'] = time(); // storing login time in session variable
                    echo "<script>alert('𝓛𝓸𝓰𝓲𝓷 𝓢𝓾𝓬𝓬𝓮𝓼𝓼𝓯𝓾𝓵');</script>";
                    ?>
                    <script type="text/javascript">
                        window.location.href="index.php";
                    </script>
                    <?php
                    exit();
                } else {
                    // Password is incorrect
                    echo "<script>alert('𝓘𝓷𝓿𝓪𝓵𝓲𝓭 𝓟𝓪𝓼𝓼𝔀𝓸𝓻𝓭');</script>";
                }
            } else {
                // User does not exist
                echo "<script>alert('𝓘𝓷𝓿𝓪𝓵𝓲𝓭 𝓔𝓶𝓪𝓲𝓵 𝓸𝓻 𝓟𝓪𝓼𝓼𝔀𝓸𝓻𝓭');</script>";
            }

            // Close prepared statement
            mysqli_stmt_close($stmt);
        }

        // Close database connection
        mysqli_close($conn);
?>

<script>
// JavaScript code for session expiration
setTimeout(function(){
    alert('𝓟𝓵𝓮𝓪𝓼𝓮 𝓻𝓮𝓯𝓻𝓮𝓼𝓱 𝓽𝓸 𝓵𝓸𝓰𝓲𝓷 𝓪𝓰𝓪𝓲𝓷');
}, 120000); // 2 minutes in milliseconds
</script>
