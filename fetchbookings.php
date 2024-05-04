<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking Management System</title>
  <style>
    .bookingcontainer {
      width: 85%;
      margin: 0% 0% 0% 1%;
    }

    .bookingcontainer h1 {
      font-size: 25px;
      font-weight: 600;
      letter-spacing: 2px;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }

    .booking-table-container {
      max-height: 300px; /* Adjust the max height as needed */
      overflow-y: auto;
      border-radius: 7px;
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }

    .booking-table {
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      padding: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table th, table td {
      padding: 8px;
      border: 1px solid #ddd;
      text-align: left;
    }

    .approve-btn {
      padding: 6px 12px;
      cursor: pointer;
      border: none;
      background-color: #2BD52E; /* Green */
      color: black;
      margin-right: 5px;
      transition: all .5s ease;
    }

    .approve-btn:hover {
      box-shadow: 0px 0px 10px black;
      background-color: #3DA403;
      color: white;
    }

    .cancel-btn {
      padding: 6px 12px;
      cursor: pointer;
      border: none;
      background-color: #F97D5C; /* Red */
      color: black;
      margin-right: 5px;
      transition: all .5s ease;
    }

    .cancel-btn:hover {
      box-shadow: 0px 0px 10px black;
      background-color: #D55D42;
      color: white;
    }
  </style> 
</head>
<body>
  <div class="bookingcontainer">
    <h1>Current Booking Status</h1>
    <div class="booking-table-container">
      <div class="booking-table">
        <?php include 'fetch_bookings.php'; ?>
      </div>
    </div>
  </div>
  <script src="js/fetchingbooking.js"></script>
  <script>
    function approveBooking(id) {
      if (confirm("𝓦𝓪𝓷𝓽 𝓽𝓸 𝓪𝓹𝓹𝓻𝓸𝓿𝓮 𝓽𝓱𝓮 𝓫𝓸𝓸𝓴𝓲𝓷𝓰?")) {
        // Send AJAX request to update status to 'approved'
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            console.log("Booking with id " + id + " approved.");
            // Update status in UI
            document.getElementById("status_" + id).innerHTML = "approved";
          }
        };
        xhr.open("GET", "update_status.php?id=" + id + "&status=approved", true);
        xhr.send();
      }
    }
    
    function cancelBooking(id) {
      if (confirm("𝓦𝓪𝓷𝓽 𝓽𝓸 𝓬𝓪𝓷𝓬𝓮𝓵 𝓽𝓱𝓮 𝓫𝓸𝓸𝓴𝓲𝓷𝓰?")) {
        // Send AJAX request to update status to 'cancelled'
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            console.log("Booking with id " + id + " canceled.");
            // Update status in UI
            document.getElementById("status_" + id).innerHTML = "cancelled";
          }
        };
        xhr.open("GET", "update_status.php?id=" + id + "&status=cancelled", true);
        xhr.send();
      }
    }
  </script>
</body>
</html>
