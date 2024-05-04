<?php
// Assuming you have a database connection already established
include("connection.php");

if (isset($_POST['booking_id'])) {
    $bookingId = $_POST['booking_id'];

    // Perform cancellation logic (update status to canceled, etc.)
    $query = "UPDATE bookings SET status = 'Canceled' WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $bookingId);
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo "success";
    } else {
        echo "error";
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>
