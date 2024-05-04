<?php
include 'connection.php';

// Fetch bookings from database
$query = "SELECT * FROM booking";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
  echo "<table>";
  echo "<tr><th>ID</th><th>Customer Name</th><th>Customer Number</th><th>Customer Email</th><th>Journey Location</th><th>Start Date</th><th>End Date</th><th>Car Name</th><th>Body Type</th><th>Status</th><th>Action</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['customername'] . "</td>";
    echo "<td>" . $row['customernumber'] . "</td>";
    echo "<td>" . $row['customeremail'] . "</td>";
    echo "<td>" . $row['journeylocation'] . "</td>";
    echo "<td>" . $row['startdate'] . "</td>";
    echo "<td>" . $row['enddate'] . "</td>";
    echo "<td>" . $row['carname'] . "</td>";
    echo "<td>" . $row['bodytype'] . "</td>";
    echo "<td>" . $row['status'] . "</td>";
    echo "<td><button class='approve-btn' onclick='approveBooking(" . $row['id'] . ")'>Approve</button><button class='cancel-btn' onclick='cancelBooking(" . $row['id'] . ")'>Cancel</button></td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "No bookings found.";
}

mysqli_close($conn);
?>
