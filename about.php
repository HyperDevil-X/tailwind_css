<?php
    include("../tailwind_css/header.php");
?>

</ul>
  </nav>
  </div>
  </div>
    <!---------------About Section------------>

        
<div class="mainvdo">
<video id="myVideo" autoplay muted>
<source src="video/knowmore.mp4" type="video/mp4">
</video>

<script>
    const video = document.getElementById('myVideo');

    video.addEventListener('ended', function () {
        video.currentTime = 0; 
        video.play(); 
    });
</script>
            </div>
            
            
            <div class=" flex ab">
            <div class="maiimg">
                
            </div>
            <div class="maintxt">
                <h1>We Provide <span>You</span><br>A Very Easy Way to Rent A <span>Dream Car</span><br>At An Affordable <span>Price</span></h1><br>
                <br><br>
                <div class="downshad">
                <hr class="shads"> 
                </div>
                <a href="contact.php"><button class="cbtn">Contact Us</button></a>
                </div> 
            </div>
       <div class="mainimg">
       <img src="image/aboutimg.jpg" alt="">
       </div>

       <div class="styleline">
                <ul class="styled-list">
                <li>Choose from a diverse fleet of vehicles, including sedans, SUVs, and luxury cars.</li>
                <li>Flexible rental durations, from daily to weekly or monthly options.</li>
                <li>Easy online reservation system for quick booking.</li>
                <li>Policy regarding adding extra drivers to the rental agreement.</li>
                <li>Clearly defined age restrictions for drivers.</li>
                <li>Clear fuel policies, indicating whether the vehicle should be returned with a full tank or not.</li>
                <li>Convenient locations for both picking up and returning the rental vehicle.</li>
                <li>Information on any mileage restrictions and additional charges for exceeding limits.</li>
                </ul>
                </div>

    <div class="whyimage">
        <img src="image/why.jpg" alt="">
    </div>
    <div class="whytext">
        <h1>WHY CHOOSE US ?</h1>
        <h2>Competitive Pricing</h2>
        <h2>Customer Support</h2>
        <h2>Online Reservation</h2>
        <h2>Convenient Locations</h2>
        <h2>Innovation and Technology</h2>
        <h2>Special Offers</h2>

    </div>

               <!-----------------Brand Section---------------->
<div class="aboutbrandheading">
    <h1>Our Patnership Brands</h1>
</div>
<div class="aboutmainbrand">
<div class="aboutbrandslider">
    <div class="aboutbrandslidertrack">
        <div class="aboutsliderimg">
            <img src="image/logo1.JPG" alt="">
        </div>
        <div class="aboutsliderimg">
            <img src="image/logo2.JPG" alt="">
        </div>
        <div class="aboutsliderimg">
            <img src="image/logo3.JPG" alt="">
        </div>
        <div class="aboutsliderimg">
            <img src="image/logo4.JPG" alt="">
        </div>
        <div class="aboutsliderimg">
            <img src="image/logo5.JPG" alt="">
        </div>
        <div class="aboutsliderimg">
            <img src="image/logo6.JPG" alt="">
        </div>
        <div class="aboutsliderimg">
            <img src="image/logo7.JPG" alt="">
        </div>
        <div class="aboutsliderimg">
            <img src="image/logo8.JPG" alt="">
        </div>
        <div class="aboutsliderimg">
            <img src="image/logo1.JPG" alt="">
        </div>
        <div class="aboutsliderimg">
            <img src="image/logo2.JPG" alt="">
        </div>
        <div class="aboutsliderimg">
            <img src="image/logo3.JPG" alt="">
        </div>
        <div class="aboutsliderimg">
            <img src="image/logo4.JPG" alt="">
        </div>
        <div class="aboutsliderimg">
            <img src="image/logo5.JPG" alt="">
        </div>
        <div class="aboutsliderimg">
            <img src="image/logo6.JPG" alt="">
        </div>
        <div class="aboutsliderimg">
            <img src="image/logo7.JPG" alt="">
        </div>
        <div class="aboutsliderimg">
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