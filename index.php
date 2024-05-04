<!--header-->
<?php
    include("../tailwind_css/header.php");
?>

                 <li><button class="cursor-pointer rent-button" onclick="openpopup()">Any Query?</button></li>
                     </ul>
        </div>  
    </div>
</div> 
<!------------------------------END HEADER----------------------------------------->
<!------------------------------POPUP---------------------------------------------->
                    <script>
                        function openpopup()
                        {
                        var m =document.getElementById("abc").style
                        if(m.display=="none"){
                            var p =document.getElementById("abc").style.display="block";
                            var n =document.getElementById("name1")
                            if (n) {
                                n.focus();
                            }
                        }
                        else{
                            var p =document.getElementById("abc").style.display="none";
                        }
                        }
                        </script>
                    </nav>
                    
                    </div>
        </div>
        <form name="f1" method="post">
            <div id="abc" style="display:none;">
                <div class="popupbox my-2" id="popupBox" style="background-color: #ddedeb;">
                    <input id = "name1" class="my-3 py-2 border-2 border-black rounded-md px-4" type="text" name="name" placeholder="Enter Your Name"  required autocomplete="off">
                    <input class="my-3 py-2 border-2 border-black rounded-md px-4" type="number" name="number" placeholder="Enter Your Number"  required autocomplete="off">
                    <input class="my-3 py-2 border-2 border-black rounded-md px-4" type="text" name="email" placeholder="Enter Your Email"  required autocomplete="off">
                    <input class="my-3 py-2 border-2 border-black rounded-md px-4" type="number" name="pincode" placeholder="Enter Your Pincode"  required autocomplete="off"><br><br>
                    <div class="text-center">
                        <input type="submit" name="sub1" class="bg-green-500 text-black p-3 m-3 rounded-md hover:bg-green-900 hover:text-white w-64 border-2 border-black text-lg font-semibold">
                    </div>
                </div>
            </div>
        </form>
        <br>
<!--marquee-->
        <div class="marquee-container" style="background-image: radial-gradient(#949699, #ffffff);">
        <marquee  behavior="scroll" direction="left" scrollamount="20" class="marquee" style="color:#000000"><font size = "10">Find Best Car Rent Here With Best Price</font></marquee><br><br>
        &nbsp;<marquee  behavior="scroll" direction="left" scrollamount="20" class="marquees" style="color:#000000">----20% Off On First Book----   </marquee>
    </div>

   <!------------------------------Image slider------------------------->

   <div class="imagesliderheading">
            <h1>Our Cars<br><strong>&</strong></h1>
            <p>Its short history</p>
    </div>

   <div class="imageslidercontainer">
                    <div class="imagesliderslide">
                        <div class="imageslideritem"  style="background-image: url(./image/imageslider1.jpg);">
                            <div class="imageslidercontent">
                                <div class="imageslidername" style="font-weight:700;">VolksWagen</div>
                                <div class="imagesliderdes" style="font-size:15px; letter-spacing:3px;">Volkswagen, often abbreviated as VW, is a German automaker founded in 1937 by the German Labour Front, a Nazi trade union.</div>
                                <a href="#carsection"><button style="color:black;">Book Now</button></a>
                            </div>
                        </div>
                    <div class="imageslideritem" style="background-image: url(./image/imageslider2.jpg);">
                        <div class="imageslidercontent">
                            <div class="imageslidername" style="color:white;font-weight:700;">Audi</div>
                            <div class="imagesliderdes" style="color:white; font-size:15px; letter-spacing:3px;">Audi is a German automobile manufacturer that traces its roots back to the early 20th century.</div>
                            <a href="#carsection"><button style="color:black;">Book Now</button></a>
                        </div>
                    </div>
                    <div class="imageslideritem" style="background-image: url(./image/imageslider3.jpg);">
                        <div class="imageslidercontent">
                            <div class="imageslidername" style="color:black;font-weight:700;">Ford</div>
                            <div class="imagesliderdes" style="color:black; font-size:15px; font-weight:700; letter-spacing:3px;">Ford Motor Company was founded by Henry Ford on June 16, 1903.  The Model T, introduced in 1908, is one of Ford's most iconic cars.</div>
                            <a href="#carsection"><button style="color:black;">Book Now</button></a>
                        </div>
                    </div>
                    <div class="imageslideritem" style="background-image: url(./image/imageslider4.jpg);">
                        <div class="imageslidercontent">
                            <div class="imageslidername" style="color:black;font-weight:700;">Honda</div>
                            <div class="imagesliderdes" style="color:black;font-size:15px; font-weight:700; letter-spacing:3px;">Honda Motor Co., Ltd. was founded by Soichiro Honda and Takeo Fujisawa in 1946 in Hamamatsu, Japan.</div>
                            <a href="#carsection"><button style="color:black;">Book Now</button></a>
                        </div>
                    </div>
                    <div class="imageslideritem" style="background-image: url(./image/imageslider5.jpg);">
                        <div class="imageslidercontent">
                            <div class="imageslidername" style="color:white;font-weight:700;">Mustang</div>
                            <div class="imagesliderdes" style="font-size:15px; font-weight:700; letter-spacing:3px;">The Mustang is an iconic American car, known for its sleek design and powerful performance.</div>
                            <a href="#carsection"><button style="color:black;">Book Now</button></a>
                        </div>
                    </div>
                    <div class="imageslideritem" style="background-image: url(./image/imageslider6.jpg);">
                        <div class="imageslidercontent">
                            <div class="imageslidername" style="color:black;font-weight:700;">Porsche</div>
                            <div class="imagesliderdes" style="color:black;font-size:15px; font-weight:700; letter-spacing:3px;">Porsche is a renowned German automobile manufacturer with a rich history dating back to 1931 when Ferdinand Porsche founded the company.</div>
                            <a href="#carsection"><button style="color:black;">Book Now</button></a>
                        </div>
                        
                    </div>
                    
            </div>
            <div class="imagesliderbutton">
                        <button class="imagesliderprev" style="color:black;"><i class="fa-sharp fa-solid fa-arrow-left" ></i></button>
                        <button class="imageslidernext" style="color:black;"><i class="fa-sharp fa-solid fa-arrow-right" ></i></button>
                        
                    </div>
                </div>

<!--car description-->
    <div class="containers my-7">
        
        <div class="image-div">
            <img src="image/img3.jpg" alt="Your Image" class="image">
        </div>

      
       <div class="text-div">
            <u><h1 class="text">We provide premium car with high quality.<br><br></h1></u>
            <p class="para">Our company was built by trust and reputation. <br>We know how to make our customers love us by our high quality products with affordable prices.<br> We promise to make you have the interesting experiences.</p>
        </div>
    </div>
    <div  class="picture"><img src="image/img4.png">
    </div>

                        <!------------car section------------->
    <div class="parallel-section">
    <div class="carheading">
        <h3> Top Vehicles Models &nbsp;<span>For Rent</span></h3>
        <p>Top Vehicle models for rent refer to the various types and makes of vehicles that are available for temporary use through rental services. These rental services are commonly offered by car rental companies, and they provide customers with a wide range of vehicle options to choose from. </p>
    </div>       
    </div>
                <div class="slider" id="carsection">
                    <div class="slider-items">
                        <div class="item active">
                            <img src="image/b3.PNG"style="margin-top:6%;">
                            <div class="caption">
                    <h3>BMW Series-3<a href="bmwcarspec.php" class=" btn mx-11"><i class="fa fa-calendar" aria-hidden="true"></i> Reserve Now</a></h3>
                            </div>
                        </div>
                        <div class="item">
                            <img src="image/m2.PNG"style="margin-top:6%;">
                            <div class="caption">
                    <h3>Mercedes Benz GLA 200<span><a href="mercedescarspec.php" class="btn mx-11"><i class="fa fa-calendar" aria-hidden="true"></i> Reserve Now</a> </span></h3>
                            </div>
                        </div>
                        <div class="item">
                            <img src="image/l1.PNG"style="margin-top:6%;">
                            <div class="caption">
                    <h3>LandRover Defender<span><a href="defendercarspec.php" class="btn mx-11"><i class="fa fa-calendar" aria-hidden="true"></i> Reserve Now</a> </span></h3>
                            </div>
                        </div>
                        <div class="item">
                            <img src="image/a7.PNG"style="margin-top:6%;">
                            <div class="caption">
                    <h3>Audi Q7<span><a href="audicarspec.php" class="btn mx-11"><i class="fa fa-calendar" aria-hidden="true"></i> Reserve Now</a> </span></h3>
                            </div>
                        </div>
                    </div>
                            <div class="left-slide"><</div>
                            <div class="right-slide">></div>
                </div>

        <!------------------------wide selection-------------------->
        <div class="wideselection">
            <h1>Wide Selection</h1>
            <p>Choose from a wide range of cars to suit your needs.</p>
        </div>
    <div class="maincard">
        <div class="card">
            <img src="image/audi.jpg" class="cardimg" alt="">
            <div class="cardbody">
                <h1>Audi</h1>
                <p>Audi is a renowned German automobile manufacturer known for producing luxury vehicles with cutting-edge technology, elegant design, and high-performance engineering.</p>
                <button>See More</button>
            </div>
        </div>
        <div class="card">
            <img src="image/bmw.jpg" class="cardimg" alt="">
            <div class="cardbody">
                <h1>Bmw</h1>
                <p>The BMW (Bayerische Motoren Werke) car brand is renowned for its luxury, performance, and innovation. Founded in 1916 in Germany, BMW has established itself as a leading manufacturer of premium automobiles, motorcycles, and engines worldwide.</p>
                <button>See More</button>
            </div>
        </div>
        <div class="card">
            <img src="image/honda.jpg" class="cardimg" alt="">
            <div class="cardbody">
                <h1>Honda</h1>
                <p>Honda is a renowned automobile manufacturer known for producing a wide range of vehicles, including cars, motorcycles, and power equipment. One of Honda's popular car models is the Honda Civic, which is recognized for its reliability, fuel efficiency, and sporty design.</p>
                <button>See More</button>
            </div>
        </div>
        <div class="card">
            <img src="image/mercedes.jpg" class="cardimg" alt="">
            <div class="cardbody">
                <h1>Mercedes</h1>
                <p>Mercedes-Benz is a renowned German luxury automobile manufacturer known for its commitment to quality, innovation, and prestige. Mercedes cars are synonymous with sophistication, advanced technology, and exceptional performance.</p>
                <button>See More</button>
            </div>
        </div>
        <div class="card">
            <img src="image/mustang.jpg" class="cardimg" alt="">
            <div class="cardbody">
                <h1>Mustang</h1>
                <p>The Ford Mustang is an iconic American muscle car that has been in production since 1964. Known for its sleek design, powerful performance, and distinctive roar, the Mustang has become a symbol of freedom and adventure in automotive culture.</p>
                <button>See More</button>
            </div>
        </div>
        <div class="card">
            <img src="image/toyota.jpg" class="cardimg" alt="">
            <div class="cardbody">
                <h1>Toyota</h1>
                <p>Toyota is a renowned automotive manufacturer known for producing reliable and efficient vehicles. One of its popular models is the Toyota Camry, a midsize sedan known for its comfort, durability, and fuel efficiency.</p>
                <button>See More</button>
            </div>
        </div>
        <div class="card">
            <img src="image/volkswagen.jpg" class="cardimg" alt="">
            <div class="cardbody">
                <h1>Volkwagen</h1>
                <p>Volkswagen, often abbreviated as VW, is a renowned automotive brand known for producing a wide range of vehicles, from compact cars to SUVs and luxury vehicles. One of Volkswagen's most iconic cars is the Volkswagen Beetle, which gained worldwide popularity for its distinctive design and affordability.</p>
                <button>See More</button>
            </div>
        </div>
        <div class="card">
            <img src="image/landrover.jpg" class="cardimg" alt="">
            <div class="cardbody">
                <h1>Landrover</h1>
                <p>Land Rover is a British luxury SUV manufacturer, renowned for producing rugged and capable off-road vehicles that also offer premium comfort and technology features. The Land Rover brand is synonymous with adventure, exploration, and versatility.</p>
                <button>See More</button>
            </div>
        </div>
    </div> 
    
    <!-------------------- Testimonial section -------------------->
<div class="testimonial">
    <div class="line">
        <div class="circle">
    <h2>Happy Client</h2>
        </div>
    </div>
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="swiper-client-msg">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem illo dolorem dicta consectetur minus soluta ullam architecto sequi maxime quam doloribus mollitia, in cum, enim cumque repudiandae? Exercitationem, eaque totam?</p>
        </div>
        <div class="swiper-client-data grid grid-two-column">
            <figure>
                <img src="image/tes1.jpg" alt="client review">
            </figure>
            <div class="client-data-details">
                <p>John Doe</p>
                <p> Traveller</p>
            </div>
        </div>
      </div>
      <div class="swiper-slide">
      <div class="swiper-client-msg">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem illo dolorem dicta consectetur minus soluta ullam architecto sequi maxime quam doloribus mollitia, in cum, enim cumque repudiandae? Exercitationem, eaque totam?</p>
        </div>
        <div class="swiper-client-data grid grid-two-column">
            <figure>
                <img src="image/tes2.jpg" alt="client review">
            </figure>
            <div class="client-data-details">
                <p>John Doe</p>
                <p> Traveller</p>
            </div>
        </div>
      </div>
      <div class="swiper-slide">
      <div class="swiper-client-msg">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem illo dolorem dicta consectetur minus soluta ullam architecto sequi maxime quam doloribus mollitia, in cum, enim cumque repudiandae? Exercitationem, eaque totam?</p>
        </div>
        <div class="swiper-client-data grid grid-two-column">
            <figure>
                <img src="image/tes3.jpg" alt="client review">
            </figure>
            <div class="client-data-details">
                <p>John Doe</p>
                <p> Traveller</p>
            </div>
        </div>
      </div>
      <div class="swiper-slide">
      <div class="swiper-client-msg">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem illo dolorem dicta consectetur minus soluta ullam architecto sequi maxime quam doloribus mollitia, in cum, enim cumque repudiandae? Exercitationem, eaque totam?</p>
        </div>
        <div class="swiper-client-data grid grid-two-column">
            <figure>
                <img src="image/tes4.jpg" alt="client review">
            </figure>
            <div class="client-data-details">
                <p>John Doe</p>
                <p> Traveller</p>
            </div>
        </div>
      </div>
      <div class="swiper-slide">
      <div class="swiper-client-msg">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem illo dolorem dicta consectetur minus soluta ullam architecto sequi maxime quam doloribus mollitia, in cum, enim cumque repudiandae? Exercitationem, eaque totam?</p>
        </div>
        <div class="swiper-client-data grid grid-two-column">
            <figure>
                <img src="image/tes5.jpg" alt="client review">
            </figure>
            <div class="client-data-details">
                <p>John Doe</p>
                <p> Traveller</p>
            </div>
        </div>
      </div>
      <div class="swiper-slide">
      <div class="swiper-client-msg">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem illo dolorem dicta consectetur minus soluta ullam architecto sequi maxime quam doloribus mollitia, in cum, enim cumque repudiandae? Exercitationem, eaque totam?</p>
        </div>
        <div class="swiper-client-data grid grid-two-column">
            <figure>
                <img src="image/tes6.jpg" alt="client review">
            </figure>
            <div class="client-data-details">
                <p>John Doe</p>
                <p> Traveller</p>
            </div>
        </div>
      </div>
      <div class="swiper-slide">
      <div class="swiper-client-msg">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem illo dolorem dicta consectetur minus soluta ullam architecto sequi maxime quam doloribus mollitia, in cum, enim cumque repudiandae? Exercitationem, eaque totam?</p>
        </div>
        <div class="swiper-client-data grid grid-two-column">
            <figure>
                <img src="image/tes7.jpg" alt="client review">
            </figure>
            <div class="client-data-details">
                <p>John Doe</p>
                <p> Traveller</p>
            </div>
        </div>
      </div>
      <div class="swiper-slide">
      <div class="swiper-client-msg">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem illo dolorem dicta consectetur minus soluta ullam architecto sequi maxime quam doloribus mollitia, in cum, enim cumque repudiandae? Exercitationem, eaque totam?</p>
        </div>
        <div class="swiper-client-data grid grid-two-column">
            <figure>
                <img src="image/tes8.jpg" alt="client review">
            </figure>
            <div class="client-data-details">
                <p>John Doe</p>
                <p> Traveller</p>
            </div>
        </div>
      </div>
      <div class="swiper-slide">
      <div class="swiper-client-msg">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem illo dolorem dicta consectetur minus soluta ullam architecto sequi maxime quam doloribus mollitia, in cum, enim cumque repudiandae? Exercitationem, eaque totam?</p>
        </div>
        <div class="swiper-client-data grid grid-two-column">
            <figure>
                <img src="image/tes9.jpg" alt="client review">
            </figure>
            <div class="client-data-details">
                <p>John Doe</p>
                <p> Traveller</p>
            </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>  

                <!-----------------Brand Section---------------->
<div class="indexbrandheading">
    <h1>Our Patnership Brands</h1>
</div>
<div class="indexmainbrand">
<div class="indexbrandslider">
    <div class="indexbrandslidertrack">
        <div class="indexsliderimg">
            <img src="image/logo1.JPG" alt="">
        </div>
        <div class="indexsliderimg">
            <img src="image/logo2.JPG" alt="">
        </div>
        <div class="indexsliderimg">
            <img src="image/logo3.JPG" alt="">
        </div>
        <div class="indexsliderimg">
            <img src="image/logo4.JPG" alt="">
        </div>
        <div class="indexsliderimg">
            <img src="image/logo5.JPG" alt="">
        </div>
        <div class="indexsliderimg">
            <img src="image/logo6.JPG" alt="">
        </div>
        <div class="indexsliderimg">
            <img src="image/logo7.JPG" alt="">
        </div>
        <div class="indexsliderimg">
            <img src="image/logo8.JPG" alt="">
        </div>
        <div class="indexsliderimg">
            <img src="image/logo1.JPG" alt="">
        </div>
        <div class="indexsliderimg">
            <img src="image/logo2.JPG" alt="">
        </div>
        <div class="indexsliderimg">
            <img src="image/logo3.JPG" alt="">
        </div>
        <div class="indexsliderimg">
            <img src="image/logo4.JPG" alt="">
        </div>
        <div class="indexsliderimg">
            <img src="image/logo5.JPG" alt="">
        </div>
        <div class="indexsliderimg">
            <img src="image/logo6.JPG" alt="">
        </div>
        <div class="indexsliderimg">
            <img src="image/logo7.JPG" alt="">
        </div>
        <div class="indexsliderimg">
            <img src="image/logo8.JPG" alt="">
        </div>
    </div>
</div>
</div>

            <!----------------------------Newsletter Section-------------------------->

<div class="newsheading">
    <form method="post">
        <h1>Join Our Newsletter</h1>
        <p>Subscribers often receive access to exclusive content, such as special offers, discounts, or early access to products or services not available to the general public.</p>
        <div class="newsemail-box">
        <i class="fas fa-envelope"></i>
        <input class="tbox" type="email" name="nemail" value="" placeholder="Enter your email" autocomplete="off">
        <button class="tbtn"  name="nbtn">Subscribe!</button>
        </div>
    </form>
</div>
                         <!----------------------------Newsletter PHP Section-------------------------->
<?php
    include("connection.php");
    if(isset($_POST["nbtn"]))
    {
        $nemail=$_POST["nemail"];
        $nquery="Insert into news values('','$nemail')";
        $ncon=mysqli_query($conn,$nquery);
        if($ncon)
        {
            echo "<script> alert('𝓢𝓾𝓫𝓼𝓬𝓻𝓲𝓫𝓮 𝓢𝓾𝓬𝓬𝓮𝓼𝓼𝓯𝓾𝓵𝓵𝔂'); </script>";
        }
        else
        {
            echo"<script>alert('𝓤𝓷𝓪𝓫𝓵𝓮 𝓽𝓸 𝓢𝓾𝓫𝓼𝓬𝓻𝓲𝓫𝓮'); </script>";
        }
    }
?>
                             <!----------------------------Newsletter Section End-------------------------->

    <!-- footer-section -->

                <?php
                include("../tailwind_css/footer.php");
                ?>
                
                <!------Image Slider--------->
                <script src="js/app.js"></script>

                <!------car section--------->
                <script src="jas/script.js"></script>

                <!------Testimonial section--------->
                <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
                <script src="js/testimonial.js"></script>
        </body>
</html>
<?php
include("connection.php");
if(isset($_POST["sub1"]))
{
    $name = $_POST["name"];
    $number=$_POST["number"];
    $email=$_POST["email"];
    $pincode=$_POST["pincode"];
    $query="Insert into anyquery values('','$name','$number','$email','$pincode')";
    $con=mysqli_query($conn,$query);
    if($con)
    {
    echo "<script> alert('𝓢𝓾𝓫𝓶𝓲𝓽𝓽𝓮𝓭'); </script>";
}
else
{
    echo"<script>alert('𝓝𝓸𝓽 𝓢𝓾𝓫𝓶𝓲𝓽𝓽𝓮𝓭'); </script>";
}
}
?>
