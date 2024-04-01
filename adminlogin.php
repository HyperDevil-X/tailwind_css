<!-------------------Header------------------>
<?php
    include("../tailwind_css/adminheader.php");
?>
  </ul>
  </nav>
  </div>
  </div>
                <!--------login php section start------->
<?php
        session_start();
        if(isset($_SESSION["admin_logged_in"]) && $_SESSION["admin_logged_in"] === true)
        {
            header("Location: admin.php");
            exit;
        }

        include("connection.php");

        // CAPTCHA validation
        if(isset($_POST["lbtn"])) 
        {
            // Validate CAPTCHA
            if(empty($_POST['captcha']) || $_POST['captcha'] !== $_SESSION['captcha_code']) 
            {
                echo "<script>alert('𝓟𝓵𝓮𝓪𝓼𝓮! 𝓡𝓮𝓯𝓻𝓮𝓼𝓱 𝓽𝓱𝓮 𝓹𝓪𝓰𝓮 𝓽𝓸 𝓵𝓸𝓰𝓲𝓷 𝓪𝓰𝓪𝓲𝓷')</script>";
            } 
            else 
            {
                // Validate admin login
                $rusername = $_POST["rusername"];
                $rpassword = $_POST["rpassword"];
                $query = "SELECT * FROM admin WHERE rusername = '$rusername' AND rpassword = '$rpassword'";
                $que = mysqli_query($conn, $query);
                $eml = mysqli_num_rows($que);
                if ($eml >= 1) 
                {
                    echo "<script>alert('𝓛𝓸𝓰𝓲𝓷 𝓢𝓾𝓬𝓬𝓮𝓼𝓼𝓯𝓾𝓵𝓵')</script>";
                    $_SESSION["admin_logged_in"] = true;
                    header("Location: admin.php");
                    exit;
                }
                else 
                {
                    echo "<script>alert('𝓘𝓷𝓿𝓪𝓵𝓲𝓭 ! 𝓟𝓵𝓮𝓪𝓼𝓮 𝓒𝓱𝓮𝓬𝓴 𝓨𝓸𝓾𝓻 𝓔𝓶𝓪𝓲𝓵 𝓸𝓻 𝓟𝓪𝓼𝓼𝔀𝓸𝓻𝓭')</script>";
                }
            }
        }
            // Generate captcha code
            $captcha_code = rand(1000, 9999);
            $_SESSION['captcha_code'] = $captcha_code;
?>
                        <!--------login php section end------->


                    <!--------php captcha section start------->
<?php
include("connection.php");

// Initialize session
//session_start();

// Function to generate random CAPTCHA code
function generateCaptchaCode($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $captchaCode = '';
    for ($i = 0; $i < $length; $i++) {
        $captchaCode .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $captchaCode;
}

// Generate CAPTCHA code and store it in session
$_SESSION['captcha_code'] = generateCaptchaCode();
?>
                        <!--------php captcha section end------->



  <!-------------------login Section start------------------>
  <div id="breg">
  <div class="loginc">
    <div class="loginform-box">
        <form name="formfill" method="post" onsubmit="return validation()">
            <h2>Admin Log In</h2>
            <div id="loginresult" style="display: none;"></div>
            <div class="logininput-box">
                <i class="fa-solid fa-user" aria-hidden="true"></i>
                <input type="text" name="rusername" placeholder="Username" autocomplete="off"value="<?php if(isset($_POST['rusername'])) echo $_POST['rusername']; ?>">
            </div>
            <div class="logininput-box">
                <i class=" my-1 fa-solid fa-lock" aria-hidden="true"></i>
                <input type="password" name="rpassword" id="lpassword" placeholder="Password" autocomplete="off">
                <span class="password-toggle" onclick="togglePasswordVisibility('lpassword', 'eyeIconss')">
                    <i id="eyeIconss" class=" my--11 fa-solid fa-eye" aria-hidden="true"></i>
                </span>
            </div>
            <div class="logininput-box">
                <i class=" mx-8 fa-solid fa-key" aria-hidden="true"></i>
                <input type="text" name="captcha" id="captchaInput" placeholder="Enter CAPTCHA" autocomplete="off">
                <!-- Captcha image -->
                <img src="captcha.php" alt="Captcha" onclick="this.src='captcha.php?' + Math.random()" style="cursor: pointer;">
                <!-- Refresh CAPTCHA icon -->
                <span class="refresh-icon" onclick="refreshCaptcha()">
                    <i class="fas fa-redo-alt"></i>
                </span>
            </div>
            <div class="loginbutton">
                <input type="submit" name="lbtn" value="Log In">
            </div>  
        </form>
        <p id="message"></p>
    </div>
  </div>
</div>

                <!-------------------login Section end------------------>



        <!---------login js start-------->
        <script src="js/register.js"></script>
        <!---------login js end-------->




        <!--------captcha section start------->
    <script>
    // Function to refresh CAPTCHA
    function refreshCaptcha() {
        // Reload the page to generate new CAPTCHA code
        window.location.reload();
    }

    // Function to validate form submission
    function validation() {
        var captchaInput = document.forms["formfill"]["captcha"].value;
        if (captchaInput === "") {
            document.getElementById("captchaMessage").innerText = "Please fill the CAPTCHA.";
            return false;
        }
        return true;
    }
</script>

        <!--------captcha section end------->




    <!--------login session section Start------->
<script>
    setTimeout(function()
    {
        alert("𝓟𝓵𝓮𝓪𝓼𝓮! 𝓡𝓮𝓯𝓻𝓮𝓼𝓱 𝓽𝓱𝓮 𝓹𝓪𝓰𝓮 𝓽𝓸 𝓵𝓸𝓰𝓲𝓷 𝓪𝓰𝓪𝓲𝓷");
        window.location.reload(); // Reload the page to prevent login
    }
    , 300000); // 30 seconds
</script>
    <!--------login session section End------->






            <!--------captcha input section Start------->
<script>
    // Function to validate form submission
    function validation() {
        var captchaInput = document.getElementById('captchaInput').value;
        if (captchaInput === '') {
            alert('𝓟𝓵𝓮𝓪𝓼𝓮 𝓮𝓷𝓽𝓮𝓻 𝓽𝓱𝓮 𝓒𝓐𝓟𝓣𝓒𝓗𝓐 𝓬𝓸𝓭𝓮.');
            return false;
        }
        return true;
    }
</script>
            <!--------captcha input section End------->





</body>
</html>
            




