<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Set Rental Rates and Availability</title>
<style>
.rentalcontainer {
    max-width: 910px;
    margin:5% 0% 0% 0%;
    padding: 20px;
    border: 2px solid black;
    border-radius: 8px;
    border-color:#454444 ;
    box-shadow: 0px 0px 10px black;

}
.rentalcontainer h1{
    font-weight: 500;
    font-size:  30px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    letter-spacing: 3px;
    font-variant:  small-caps;
    font-style: none;
}
#rentalformContainer {
    margin-top: 20px;
    display: flex;
}
.rentalcontainer input[type="number"] {
    width: 110%;
    padding: 8px;
    margin-bottom: 10px;
    border-radius: 5px;
    box-sizing: border-box;
    background: transparent;
    border: none;
    outline: none;
    border-bottom: 2px solid black;
    font-weight: 600;
}
.rentalcontainer input::placeholder{
    font-weight: 600;
    color: #454444;
}
.rentalcontainer select {
    padding: 8px;
    margin-bottom: 10px;
    border-radius: 6px;
    box-sizing: border-box;
    background: transparent;
    border: none;
    outline: none;
    border-bottom: 2px solid black;
    font-weight: 600;
}

.rentalcontainer button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    outline: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    transition: all .5s ease ;    width: 80%;
    height: 40px;
    font-size: 18px;
    letter-spacing: 2px;
}

.rentalcontainer button:hover {
    background-color: #0056b3;
    box-shadow: 0px 0px 10px black;
}
</style>
</head>
<body>
<div class="rentalcontainer">
    <h1>Set Rental Rates and Availability</h1>
    <form id="rentalForm" method="post">
        <div id="rentalformContainer">
            <select class="mx-5"  name="vehicleType" required style="width:130%; margin-left:-1%;">
                <option value="">Select vehicle type</option> <!-- Default option added here -->
                <option value="Suv">Suv</option>
                <option value="Sedan">Sedan</option>
                <option value="Muv">Muv</option>
            </select>
            <input type="number" id="min_rate" name="minrate" placeholder="Enter min rate" class="mx-5" required style="width:120%; margin-left:-0.5%;">
            <input type="number" id="max_rate" name="maxrate" placeholder="Enter max rate" class="mx-5" required style="width:120%; margin-left:-0.5%;">
            <select class="mx-5" id="availability" name="available" required style="width:130%; margin-left:-1%;">
                <option value="">Select Availability</option> <!-- Default option added here -->
                <option value="available">Available</option>
                <option value="unavailable">Unavailable</option>
            </select>
            <button type="submit" id="rentalbutton" class="mx-5">Submit</button>
        </div>
    </form>
</div>
<script src="js/setrental.js" defer></script>
</body>
</html>
