<?php
session_start();
if(!isset($_SESSION["admin_logged_in"]) || $_SESSION["admin_logged_in"] !== true){
    header("Location: adminlogin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="icon" href="icon/caricon1.png">
    <title>Premium Cars--Admin</title>
	<!-- My CSS -->
	<link rel="stylesheet" href="css/adminstyle.css">
    <title></title>
</head>
<body>
<!-- Sidebar -->
<div class="sidebarheading">
    <h2>Admin Dashboard</h2>
</div>
<div class=" mx-3 sidebar">
    <ul class="sidebar-menu">
        <li><a href="#dashboard">Dashboard Overview</a></li>
        <li><a href="#vehicle-management">Vehicle Management</a></li>
        <li><a href="#booking-management">Booking Management</a></li>
        <li><a href="#customer-management">Customer Management</a></li>
        <li><a href="#payment-management">Payment Management</a></li>
        <li><a href="#reporting-analytics">Reporting and Analytics</a></li>
        <li><a href="#settings-configuration">Settings and Configuration</a></li>
        <li><a href="#maintenance-service">Maintenance and Service</a></li>
        <li><a href="#support-help">Support and Help</a></li>
        <li><a href="#security-access">Security and Access Control</a></li>
        <li><a href="view_user.php">View User</a></li>
        <li><a href="delete_user.php">Delete User</a></li>
    </ul>
</div>
    

</body>
</html>
