<?php
    include("../tailwind_css/header.php");
?>

</ul>
  </nav>
  </div>
  </div>

<!-- contact us section -->

<div class="mainvdo">
<video id="myVideo" autoplay muted>
<source src="video/contactvdo.mp4" type="video/mp4">
</video>

<script>
    const video = document.getElementById('myVideo');

    video.addEventListener('ended', function () {
        video.currentTime = 0; 
        video.play(); 
    });
</script>
            </div>

                <div class="get">
                    <h1>Get In Touch</h1>
                </div>
            <section>
                <div class="contactus">
                    <div class="contactinfo">
                        <div>
                            <h2>
                                Contact Info
                            </h2>
                            <ul class="info">
                                <li>
                                    <span><img src="icon/location.png" alt=""></span>
                                    <span>Newtown<br>
                                    Kolkata<br>
                                    700156</span>
                                </li>
                                <li>
                                    <span><img src="icon/mail.png" alt=""></span>
                                    <span>manojbid202@gmail.com</span>
                                </li>
                                <li>
                                    <span><img src="icon/call.png" alt=""></span>
                                    <span>914-250-719-5</span>
                                </li>
                            </ul>
                        </div>
                        <ul class="sci">
                            <li><a href="#"><img src="icon/1.png" alt=""></a></li>
                            <li><a href="#"><img src="icon/2.png" alt=""></a></li>
                            <li><a href="#"><img src="icon/3.png" alt=""></a></li>
                            <li><a href="#"><img src="icon/4.png" alt=""></a></li>
                            <li><a href="#"><img src="icon/5.png" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="contactform">
                        <h2>Send a Message</h2>
                        <div class="formbox">
                            
                    <form class="form" method="post">
                       <div class=" flex tex">
                                
                                <input type="text" name="firstname" placeholder="First Name"  autocomplete="off" required id="i1"><br>
                                
                                <input type="text" name="lastname" placeholder="Last Name" autocomplete="off" required id="i2"><br>
                                </div>
                                <div class=" flex tex1">
                                
                                <input type="number" name="number" placeholder="Mobile Number" autocomplete="off" required id="i3"><br>
                                
                                <input type="text" name="email" placeholder="Email Address" autocomplete="off" required id="i4"><br>
                                </div>
                                <div class=" flex tex2">
                               
                                <textarea name="textarea" placeholder="Write Your Message Here" autocomplete="off" id="i5"></textarea><br><div class="contact1"><img src="image/contact1.PNG" alt=""></div>
                                </div>
                                <input type="Submit" class="sbtn" name="btn" value="Send">

                            </form>
                            
                        </div>
                    </div>
</div>
            </section>
            <div class="contact3"><img src="image/contact3.PNG" alt=""></div>

  <!--php section of contactform-->
            <?php
                include("connection.php");
                if(isset($_POST["btn"]))
                {
                    $firstname = $_POST["firstname"];
                    $lastname = $_POST["lastname"];
                    $number = $_POST["number"];
                    $email = $_POST["email"];
                    $textarea = $_POST["textarea"];
                    $query="Insert into contactmsg values('','$firstname','$lastname','$number','$email','$textarea')";
                    $con=mysqli_query($conn,$query);
                    if($con)
                    {
                        echo "<script>alert('𝓢𝓮𝓷𝓭 𝓢𝓾𝓬𝓬𝓮𝓼𝓼𝓯𝓾𝓵𝓵𝔂')</script>";
                    }
                    else
                    {
                        echo "<script>alert('𝓝𝓸𝓽 𝓢𝓮𝓷𝓭')</script>";
                    }
                }
            ?>

                <!------------------------------Map Section ---------------------------->
        <div class="gheading">
            <h1>Google Map</h1>
        </div>
        
            <div class="flex gmap">
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3683.992278062117!2d88.44928861110749!3d22.57939213263528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0275c6c00075a3%3A0x9b30249749a28171!2sAhirini%20Market!5e0!3m2!1sen!2sin!4v1706925290447!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div><img src="image/contact2.PNG" alt=""></div>           
            </div>


            <!-----------------Brand Section---------------->
<div class="contactbrandheading">
    <h1>Our Patnership Brands</h1>
</div>
<div class="contactmainbrand">
<div class="contactbrandslider">
    <div class="contactbrandslidertrack">
        <div class="contactsliderimg">
            <img src="image/logo1.JPG" alt="">
        </div>
        <div class="contactsliderimg">
            <img src="image/logo2.JPG" alt="">
        </div>
        <div class="contactsliderimg">
            <img src="image/logo3.JPG" alt="">
        </div>
        <div class="contactsliderimg">
            <img src="image/logo4.JPG" alt="">
        </div>
        <div class="contactsliderimg">
            <img src="image/logo5.JPG" alt="">
        </div>
        <div class="contactsliderimg">
            <img src="image/logo6.JPG" alt="">
        </div>
        <div class="contactsliderimg">
            <img src="image/logo7.JPG" alt="">
        </div>
        <div class="contactsliderimg">
            <img src="image/logo8.JPG" alt="">
        </div>
        <div class="contactsliderimg">
            <img src="image/logo1.JPG" alt="">
        </div>
        <div class="contactsliderimg">
            <img src="image/logo2.JPG" alt="">
        </div>
        <div class="contactsliderimg">
            <img src="image/logo3.JPG" alt="">
        </div>
        <div class="contactsliderimg">
            <img src="image/logo4.JPG" alt="">
        </div>
        <div class="contactsliderimg">
            <img src="image/logo5.JPG" alt="">
        </div>
        <div class="contactsliderimg">
            <img src="image/logo6.JPG" alt="">
        </div>
        <div class="contactsliderimg">
            <img src="image/logo7.JPG" alt="">
        </div>
        <div class="contactsliderimg">
            <img src="image/logo8.JPG" alt="">
        </div>
    </div>
</div>
</div>


            <!------------------------------Footer Section ---------------------------->
    <?php
    include("../tailwind_css/footer.php");
    ?>

</body>
</html>