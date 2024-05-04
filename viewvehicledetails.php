<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Vehicle Details</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
.detailcontainer {
    display: flex;
    flex-wrap: nowrap;
    overflow-x: hidden;
    border-radius: 3px;
    margin-top: 1%;
    margin-left: 7%;
    transition: transform 0.5s ease;
    width: 80%;
    position: absolute;
}

.vehicle-box {
    width: 18%; /* Adjusted width to fit 4 boxes in one row */
    height: 300px;
    margin: 20px;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    background-color: #f9f9f9;
}

.vehicle-box img {
    width: 100%; /* Updated width to ensure image fills the container */
    height: 130px;
    border-radius: 10px;
    margin-bottom: 10px;
}

.vehicle-info {
    font-size: 16px;
    margin-bottom: 10px;
}

.vehicle-info span {
    font-weight: bold;
}

.nav-arrows {
    display: flex;
    justify-content: center;
    margin-top: 24%;
    margin-left: 30%;
}

.arrow {
    font-size: 24px;
    cursor: pointer;
    margin: 0 10px;
}

.arrow:hover {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}
</style>
</head>
<body>
<div class="detailcontainer" id="vehicleContainer"></div>

<div class="nav-arrows">
    <i class="arrow fas fa-chevron-left" id="prevBtn" onclick="slide('left')"></i>
    <i class="arrow fas fa-chevron-right" id="nextBtn" onclick="slide('right')"></i>
</div>

<script src="js/viewvehicledetails.js"></script>
</body>
</html>
