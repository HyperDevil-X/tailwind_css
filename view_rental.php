<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rental Rates and Availability</title>
<style>
.viewcontainer {
    width: 40%;
    margin: 33% 1% 0% 0%; /* Adjusted margin to center the container */
    padding: 20px;
    border-radius: 8px;
    /* box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); */
    float: right;
}

.viewcontainer h1 {
    font-weight: 500;
    font-size: 20px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    letter-spacing: 3px;
    font-variant: small-caps;
}

.viewbox {
    width: 30.8%;
    margin: 0 1% 20px; /* Adjusted margin to provide space between boxes */
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    display: inline-block;
    vertical-align: top;
    color: black;
}

.viewbox h2 {
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 10px;
}

.viewbox p {
    font-size: 13px;
    font-weight: 600;
    margin-bottom: 5px;
}
</style>
</head>
<body>
<div class="viewcontainer">
    <!-- <h1>View Rental Rates and Availability</h1> -->
    <div class="viewbox">
        <!-- <h2>Sedan</h2> -->
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
    <div class="viewbox">
        <!-- <h2>Suv</h2> -->
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
    <div class="viewbox">
        <!-- <h2>Muv</h2> -->
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
</body>
</html>
