<?php
    include("../tailwind_css/header.php");
?>
    </ul>
  </nav>
  </div>
  </div>
            <!-------header end------->

            <!--------Cars Section start------->


            <!--------OurCars heading Section start------->
<div class="carheadingtext">
    <div class="carheadingmarquee">
      <p>Our Cars For Rent</p>
    </div>
</div>
            <!--------OurCars heading Section end------->






          <!-------view rental section start------->
<div class="ourcarviewcontainer">
    <div class="ourcarviewbox">
        <?php
                include("connection.php");

                $query = "SELECT * FROM rentalrates WHERE vehicleType = 'Sedan'";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<p>Vehicle type: " . $row['vehicleType'] . "</p>";
                        echo "<p>Min Rate: " . $row['minrate'] . "</p>";
                        echo "<p>Max Rate: " . $row['maxrate'] . "</p>";
                        echo "<p>Availability: " . $row['available'] . "</p>";
                    }
                } else {
                    echo "No data available";
                }

                mysqli_close($conn);
        ?>
    </div>
    <div class="ourcarviewbox">
        <?php
                include("connection.php");

                $query = "SELECT * FROM rentalrates WHERE vehicleType = 'Suv'";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<p>Vehicle type: " . $row['vehicleType'] . "</p>";
                        echo "<p>Min Rate: " . $row['minrate'] . "</p>";
                        echo "<p>Max Rate: " . $row['maxrate'] . "</p>";
                        echo "<p>Availability: " . $row['available'] . "</p>";
                    }
                } else {
                    echo "No data available";
                }

                mysqli_close($conn);
        ?>
    </div>
    <div class="ourcarviewbox">
        <?php
                include("connection.php");

                $query = "SELECT * FROM rentalrates WHERE vehicleType = 'Muv'";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<p>Vehicle type: " . $row['vehicleType'] . "</p>";
                        echo "<p>Min Rate: " . $row['minrate'] . "</p>";
                        echo "<p>Max Rate: " . $row['maxrate'] . "</p>";
                        echo "<p>Availability: " . $row['available'] . "</p>";
                    }
                } else {
                    echo "No data available";
                }

                mysqli_close($conn);
        ?>
    </div>
</div>
            <!--------view rental end------->







        <!-----view cars start---->
<div class="ourcarcontainer" id="ourcarvehicleContainer">
</div>
        <!-----view cars end---->






        <!-----bookcarpopupform start---->
<button id="ourcarbookBtn" style="border:1px solid black; margin:-57% 0% 0% 75%; 
                                  position:absolute; width:7%; height:5%;
                                  background-color:#5770FD; color:white; 
                                  border-radius:5px; font-size:18px;
                                  font-weight:600;letter-spacing:1px;
                                  border:none;outline:none;box-shadow: 0px 0px 10px black;">Rent a Car</button>
  <div id="ourcarpopup" class="ourcarpopup">
    <div class="ourcarpopup-content">
      <span class="ourcarclose">&times;</span>
      <h2>Rent Your Car Now</h2>
    <form action="#" method='post' style="margin-top:3%;">
        <input type="text" id="name" name="customername" placeholder="Your Name...." required style="margin-top:5%; border-bottom:1px solid black;"><br>
        <input type="number" id="number" name="customernumber" placeholder="Your Ph Number...." required style="margin-top:5%; border-bottom:1px solid black;"><br>
        <input type="email" id="email" name="customeremail" placeholder="Your Mail" required ><br>
        <input type="text" id="location" name="journeylocation" placeholder="Journey Location...." required style="margin-top:5%; border-bottom:1px solid black;"><br>
        <div class="sd" style=" margin-top:5%; margin-bottom:2%;">(Start Date..)</div>
        <input type="date" id="startdate" name="startdate" placeholder="Start Date...." required style="margin-top:-7%; border-bottom:1px solid black;"><br>
        <div class="ed"style=" margin-top:5%; margin-bottom:2%;">(End Date..)</div>
        <input type="date" id="enddate" name="enddate" placeholder="End Date...." required style="margin-top:-7%; border-bottom:1px solid black;"><br>
        <input type="text" id="carname" name="carname" placeholder="Car Name...." required style="margin-top:5%; border-bottom:1px solid black;"><br>
        <input type="text" id="bodytype" name="bodytype" placeholder="Body Type...." required style="margin-top:5%; border-bottom:1px solid black;"><br><br>
        <input type="submit" value="Submit" name="carbtn" class="carbtn"><br>
    </form>
<?php
            include("connection.php");

            if (isset($_POST["carbtn"])) {
            // Escape user input before using it in queries
            $customername = mysqli_escape_string($conn, $_POST["customername"]);
            $customernumber = mysqli_escape_string($conn, $_POST["customernumber"]);
            $customeremail = mysqli_escape_string($conn, $_POST["customeremail"]);
            $journeylocation = mysqli_escape_string($conn, $_POST["journeylocation"]);
            $startdate = mysqli_escape_string($conn, $_POST["startdate"]);
            $enddate = mysqli_escape_string($conn, $_POST["enddate"]);
            $carname = mysqli_escape_string($conn, $_POST["carname"]);
            $bodytype = mysqli_escape_string($conn, $_POST["bodytype"]);
            $status = "pending"; // Default status

            // Validate phone number length
            if (strlen($customernumber) != 10) {
                echo '<script>alert("𝓟𝓱𝓸𝓷𝓮 𝓷𝓾𝓶𝓫𝓮𝓻 𝓼𝓱𝓸𝓾𝓵𝓭 𝓫𝓮 10 𝓭𝓲𝓰𝓲𝓽𝓼 𝓵𝓸𝓷𝓰")</script>';
            } else {
                // Prepare and bind parameters to prevent SQL injection
                $query = "INSERT INTO booking (customername, customernumber, customeremail, journeylocation, startdate, enddate, carname, bodytype, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_prepare($conn, $query);

                mysqli_stmt_bind_param($stmt, "sssssssss", $customername, $customernumber, $customeremail, $journeylocation, $startdate, $enddate, $carname, $bodytype, $status);

                $result = mysqli_stmt_execute($stmt);

                if ($result) {
                echo '<script>alert("𝓢𝓾𝓫𝓶𝓲𝓽𝓽𝓮𝓭 𝓢𝓾𝓬𝓬𝓮𝓼𝓼𝓯𝓾𝓵𝓵𝔂")</script>';
                } else {
                echo '<script>alert("𝓝𝓸𝓽 𝓢𝓾𝓫𝓶𝓲𝓽𝓽𝓮𝓭")</script>';
                }

                mysqli_stmt_close($stmt);
            }
            }

            mysqli_close($conn);
?>


    </div>
  </div>
        <!-----bookcarpopupform end----> 





        <!----script----->
<script src="js/ourcars.js"></script>
<script src="js/ourcarspopupform.js"></script>



<!-- footer-section -->

                <?php
                include("../tailwind_css/footer.php");
                ?>

</body>
</html>