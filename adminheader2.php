<?php
session_start();
if(!isset($_SESSION["admin_logged_in"]) || $_SESSION["admin_logged_in"] !== true){
    header("Location: adminlogin.php");
    exit;
}

// Logout if user is idle for 2 minutes
// $timeout = 60; // 2 minutes
// if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $timeout)) {
//     session_unset();
//     session_destroy();
//     header("Location: adminlogin.php");
//     exit;
// }
// $_SESSION['last_activity'] = time(); // update last activity time stamp
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="icon" href="icon/caricon1.png">
	<!-- My CSS -->
	<link rel="stylesheet" href="css/adminstyle.css">
    <title>Premium Cars--Admin</title>
	

	
	<!-- <script>
        // Track user activity and logout after 2 minutes of inactivity
        var inactivityTime = function () {
            var time;
            window.onload = resetTimer;
            document.onmousemove = resetTimer;
            document.onkeypress = resetTimer;

            function logout() {
                window.location.href = 'logout.php';
            }

            function resetTimer() {
                clearTimeout(time);
                time = setTimeout(logout, 60000); // 2 minutes in milliseconds
            }
        };
        inactivityTime();
    </script> -->
</head>
<body>

<div class="sidebarheading">
    <h2><i class="fa-regular fa-face-smile"></i>Admin Dashboard</h2>
</div>
   

<!-- Main Content -->
<div class="main-content">
	<div class="admin-info">
			<a href=""><h3>Premium Cars-Rental</h3></a>
	</div>
	
	<div class="admin-image" onclick="toggleDropdown()">

		<!------profile image fetch php section start ----->

		<?php
			include("connection.php");
			$query = "SELECT image FROM admin";
			$result = mysqli_query($conn, $query);
			if ($result && mysqli_num_rows($result) > 0) 
			{
				$row = mysqli_fetch_assoc($result);
				$imagePath = $row['image'];
				if (!empty($imagePath)) {
					echo "<img src='$imagePath' alt='Admin Image'>";
				} 
				else 
				{
					echo "<img src='image/default.jpg' alt='Default Image'>";
				}
			} 
			else 
			{
				echo "<img src='image/default.jpg' alt='Default Image'>";
			}
    	?>    

			<!------profile image fetch php section end ----->


			<div class="dropdown-menu" id="dropdownMenu">
			<a href="admin_view_profile.php" class="dropdown-item">Profile</a>
			<a href="view_user_profile.php" class="dropdown-item">View User</a>
			<a href="logout.php" class="dropdown-item">Logout</a>


			<!---------- admin image dropdown menu start --------->

		<script>
			function toggleDropdown() 
			{
				var dropdownMenu = document.getElementById("dropdownMenu");
				if (dropdownMenu.style.display === "block") 
				{
				dropdownMenu.style.display = "none";
				} 
				else 
				{
				dropdownMenu.style.display = "block";
    			}
			}

		</script>

		<!---------- admin image dropdown menu end --------->

    </div>
</div>
