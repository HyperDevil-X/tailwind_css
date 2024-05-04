<?php
include("connection.php");

if(isset($_GET["slno"])) {
    $slno = $_GET["slno"];
    
    // Prepare and execute the SQL query to fetch data based on slno
    $query = "SELECT * FROM addvehicle WHERE slno = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $slno);
    mysqli_stmt_execute($stmt);
    
    // Get the result
    $result = mysqli_stmt_get_result($stmt);
    
    // Check if data exists for the provided slno
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        
        // Prepare the response data as JSON
        $responseData = array(
            "make" => $row["make"],
            "model" => $row["model"],
            "year" => $row["year"],
            "price" => $row["price"],
            "availability" => $row["availability"],
            "image_url" =>"" . $row["image"] // Add image URL to response data
        );
        
        // Send the response data as JSON
        echo json_encode($responseData);
    } else {
        // If no data found for the provided slno, send empty response
        echo json_encode(array());
    }
    
    // Close prepared statement
    mysqli_stmt_close($stmt);
}

// Close database connection
mysqli_close($conn);
?>
