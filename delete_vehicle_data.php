<?php
// Include the connection file
include 'connection.php';

// Handle delete request
if (isset($_POST['deletevehicle'])) {
    $slno = $_POST['slno'];

    // Prepare and execute delete statement
    $sql = "DELETE FROM addvehicle WHERE slno = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $slno);
    $stmt->execute();

    // Check if deletion was successful
    if ($stmt->affected_rows > 0) {
        echo "𝓓𝓪𝓽𝓪 𝓭𝓮𝓵𝓮𝓽𝓮𝓭 𝓼𝓾𝓬𝓬𝓮𝓼𝓼𝓯𝓾𝓵𝓵𝔂";
    } else {
        echo "𝓔𝓻𝓻𝓸𝓻 𝓭𝓮𝓵𝓮𝓽𝓲𝓷𝓰 𝓭𝓪𝓽𝓪";
    }

    $stmt->close();
}

$conn->close();
?>
