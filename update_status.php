<?php
// Include the database connection
include 'connection.php';

// Check if the required parameters are set
if(isset($_GET['id']) && isset($_GET['status'])) {
    // Sanitize the input
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $status = mysqli_real_escape_string($conn, $_GET['status']);

    // Update the status in the database
    $query = "UPDATE booking SET status='$status' WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if($result) {
        // Send a success response
        echo "Status updated successfully.";
    } else {
        // Send an error response
        echo "Error updating status: " . mysqli_error($conn);
    }
} else {
    // Send an error response if parameters are missing
    echo "Error: Missing parameters.";
}

// Close the database connection
mysqli_close($conn);
?>
