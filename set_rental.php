<?php
include("connection.php");

if(isset($_POST["vehicleType"], $_POST["minrate"], $_POST["maxrate"], $_POST["available"])) {
    // Retrieve data from form inputs
    $vehicleType = $_POST["vehicleType"];
    $minrate = $_POST["minrate"];
    $maxrate = $_POST["maxrate"];
    $available = $_POST["available"];

    // SQL query to insert data into the database
    $query = "INSERT INTO rentalrates (vehicleType, minrate, maxrate, available) VALUES (?, ?, ?, ?)";

    // Create a prepared statement
    $stmt = mysqli_prepare($conn, $query);

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "ssss", $vehicleType, $minrate, $maxrate, $available);

    // Execute statement
    $result = mysqli_stmt_execute($stmt);

    // Check if the query was successful
    if($result) {
        echo "success"; // Response to indicate success
    } else {
        echo "error"; // Response to indicate error
    }

    // Close prepared statement
    mysqli_stmt_close($stmt);
}

// Close database connection
mysqli_close($conn);
?>
