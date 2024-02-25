<!-------------------Header------------------>
<?php
    include("../tailwind_css/header.php");
?>
  </ul>
  </nav>
  </div>
  </div>
  <!-------------------Register Section------------------>
  <div id="breg">
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
                <input type="email" name="remail" placeholder="Email" autocomplete="off" >
            </div>
            <div class="registerinput-box">
                <i class="fa-solid fa-lock" aria-hidden="true"></i>
                <input type="password" name="rpassword" placeholder="Password" autocomplete="off">
            </div>
            <div class="registerinput-box">
                <i class="fa-solid fa-lock" aria-hidden="true"></i>
                <input type="password" name="cpassword" placeholder="Confirm Password" autocomplete="off">
            </div>  
            <div class="registerbutton">
                <input type="submit" name="rbtn" value="Register">
            </div>  
            <div class="group">
                <span><a href="#">Already Have An Account?</a></span>
                <span><a href="login.php">Login</a></span>
            </div>
        </form>
    </div>
    <!------PopUp------>
    <!-- <div class="registerpopup" id="registerpopup">
        <i class="fa-regular fa-circle-check"></i>
        <h2>Thank you</h2>
        <p>Successfully Registered. Thanks!!</p>
        <button onclick="closePopup()">OK</button>
    </div> -->
  </div>
</div>


        <!---------Register-------->
        <script src="js/register.js"></script>

</body>
</html>
<?php
include("connection.php");
if(isset($_POST["rbtn"])) {
    $rusername = $_POST["rusername"];
    $remail = $_POST["remail"];
    $rpassword = $_POST["rpassword"];
    $cpassword = $_POST["cpassword"];
    $query = "INSERT INTO register VALUES('', '$rusername', '$remail', '$rpassword', '$cpassword')";
    $que = mysqli_query($conn, $query);
    if($que)
    {
    echo "<script> alert('𝓢𝓾𝓬𝓬𝓮𝓼𝓼𝓯𝓾𝓵𝓵𝔂 𝓡𝓮𝓰𝓲𝓼𝓽𝓮𝓻𝓮𝓭'); </script>";
}
else
{
    echo"<script>alert('𝓝𝓸𝓽 𝓢𝓾𝓬𝓬𝓮𝓼𝓼𝓯𝓾𝓵𝓵𝔂 𝓡𝓮𝓰𝓲𝓼𝓽𝓮𝓻𝓮𝓭'); </script>";
}
}
?>

 