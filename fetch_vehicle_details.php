<?php
// Include the connection file
include("connection.php");

// Fetch vehicle details from the database
$sql = "SELECT * FROM addvehicle";
$result = $conn->query($sql);

$vehicles = array();

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $vehicles[] = $row;
    }
} else {
    echo "0 results";
}

$conn->close();

// Return JSON response
header('Content-Type: application/json');
echo json_encode($vehicles);
?>
