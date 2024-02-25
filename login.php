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
  <div class="loginc">
    <div class="loginform-box">
        <form action="" name="formfill" method="post" onsubmit="return validation()">
            <h2>Log In</h2>
            <div id="loginresult" style="display: none;"></div>
            <div class="logininput-box">
                <i class="fa-solid fa-envelope" aria-hidden="true"></i>
                <input type="email" name="remail" placeholder="Email" autocomplete="off" >
            </div>
            <div class="logininput-box">
                <i class="fa-solid fa-lock" aria-hidden="true"></i>
                <input type="password" name="rpassword" placeholder="Password" autocomplete="off">
            </div> 
            <div class="loginbutton">
                <input type="submit" name="rbtn" value="Log In">
            </div>  
            <div class="group">
    <span><a href="#">Don't Have An Account?</a></span>
    &nbsp; &nbsp; &nbsp;
    <span><a href="register.php">Register</a></span>
</div>
        </form>
    </div>
    <!------PopUp------>
    <div class="loginpopup" id="loginpopup">
        <i class="fa-regular fa-circle-check"></i>
        <h2>Thank you</h2>
        <p>Successfully login. Thanks!!</p>
        <button onclick="closePopup()">OK</button>
    </div>
  </div>
</div>

        <!---------login-------->
        <script src="js/login.js"></script>

</body>
</html>
 