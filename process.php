<?php
include("connection.php");

if(isset($_POST["addvehicle"])) {
    // Retrieve form data and sanitize inputs
    $make = htmlspecialchars($_POST["make"], ENT_QUOTES, 'UTF-8');
    $model = htmlspecialchars($_POST["model"], ENT_QUOTES, 'UTF-8');
    $year = htmlspecialchars($_POST["year"], ENT_QUOTES, 'UTF-8');
    $price = htmlspecialchars($_POST["price"], ENT_QUOTES, 'UTF-8');
    $availability = htmlspecialchars($_POST["availability"], ENT_QUOTES, 'UTF-8');

    // Prepare SQL statement with placeholders
    $query = "INSERT INTO addvehicle (make, model, year, price, availability) VALUES (?, ?, ?, ?, ?)";

    // Create a prepared statement
    $stmt = mysqli_prepare($conn, $query);

    // Bind parameters and execute statement
    mysqli_stmt_bind_param($stmt, "ssiss", $make, $model, $year, $price, $availability);
    $success = mysqli_stmt_execute($stmt);

    if($success) {
        echo "Success: Vehicle added successfully";
    } else {
        echo "Error: Failed to add vehicle";
    }

    // Close prepared statement
    mysqli_stmt_close($stmt);
}

// Close database connection
mysqli_close($conn);
?>
