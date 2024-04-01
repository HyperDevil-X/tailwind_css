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
    $remail = $_POST["remail"];
    $rpassword = $_POST["rpassword"];
    $query = "SELECT * FROM register WHERE remail = '$remail' AND rpassword = '$rpassword'";
    $que = mysqli_query($conn, $query);
    $eml=mysqli_num_rows($que);
    if($eml>=1) 
    {
        $log=mysqli_fetch_assoc($que);
        echo "<script>alert('𝓛𝓸𝓰𝓲𝓷 𝓢𝓾𝓬𝓬𝓮𝓼𝓼𝓯𝓾𝓵𝓵');</script>";
       ?>
       <script type="text/javascript">
        window.location.href="index.php";
        </script>
        <?php
    } 
    else 
    {
        echo "<script>alert('𝓘𝓷𝓿𝓪𝓵𝓲𝓭 ! 𝓟𝓵𝓮𝓪𝓼𝓮 𝓒𝓱𝓮𝓬𝓴 𝓨𝓸𝓾𝓻 𝓔𝓶𝓪𝓲𝓵 𝓸𝓻 𝓟𝓪𝓼𝓼𝔀𝓸𝓻𝓭')</script>";
    }
}
?>


