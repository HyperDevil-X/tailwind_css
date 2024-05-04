<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the posted data
    $slno = $_POST["slno"];
    $make = $_POST["make"];
    $model = $_POST["model"];
    $year = $_POST["year"];
    $price = $_POST["price"];
    $availability = $_POST["availability"];

    // Prepare and execute the SQL query to update data based on slno
    $query = "UPDATE addvehicle SET make=?, model=?, year=?, price=?, availability=? WHERE slno=?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssssss", $make, $model, $year, $price, $availability, $slno);
    mysqli_stmt_execute($stmt);

    // Check if update was successful
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo "Update successful";
    } else {
        echo "Update failed";
    }

    // Close prepared statement
    mysqli_stmt_close($stmt);
}

// Close database connection
mysqli_close($conn);
?>
