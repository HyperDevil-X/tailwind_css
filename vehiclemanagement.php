<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Car Rental Inventory</title> -->
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
            background-color:#C1C1E8;
        }
        .vcontainer {
            width: 80%;
            font-family: 'Times New Roman', Times, serif;
            font-size: 25px;
            font-weight: 600;
            font-variant: small-caps;

        }

            .vcontainer span {
                font-size:  30px;
            }

       .vcontainer button {
            padding: 10px 20px;
            background-color: #2F7DC2;
            color: white;
            border: none;
            cursor: pointer;
            margin-left: 2%;
            transition: background-color 0.3s ease;
            transition: all .5s ease ;
        }
        .vcontainer button:hover{
            box-shadow: 0px 0px 10px black;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: white;
            margin: 20% auto;
            padding: 20px;
            border-radius: 5px;
            max-width: 500px;
            margin-top: 4.5%;
            margin-left: 38%;
            box-shadow: 0px 0px 10px black;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 36px;
            font-weight: bold;
            transition: background-color 0.3s ease;
            transition: all .5s ease ;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
            font-size: 44px;
            font-weight: 600;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        #vehicleForm label{
            font-size: 20px;
            color: #2F76D6;
            font-weight: bold;
        }
        #vehicleForm input{
            background: transparent;
            border-radius: 5px;
            border: none;
            outline: none;
            border-bottom: 2px solid black;
            font-size:  19px;
            font-weight: 600;
            letter-spacing: 2px;
            margin-left: 2%;
            width: 60%;
        }
        #vehicleForm option{
            font-size: 20px;
            font-weight: 450;
        }
        #vehicleForm button{
            margin-top: 2%;
            font-size: 20px;
            font-weight: 600;
            border: 2px solid black;
            width: 24%;
            transition: background-color 0.3s ease;
            transition: all .5s ease ;
            color: white;
            border-radius: 5px;
            border: none;
            outline: none;
        }
        #vehicleForm button:hover{
            color: black;
            box-shadow: 0px 0px 10px black;
        }
        .vslno input{
            margin-left: 10%;
            width: 30%;
            height: 50px;
            font-size: 18px;
            background: transparent;
            border-radius: 5px;
            border: none;
            outline: none;
            border-bottom: 2px solid black;
        }
        /* #imageInput {
            margin-left: 10px;
            margin-top: 2%;
            font-weight: 500;
        }
        #imageDisplay {
            margin-left: 20%;
            color: #2F76D6;
            font-size: 20px;
            font-weight: 500;
        } */

    </style>    
</head>
<body>
    <div class="vcontainer">
        Click &nbsp; <span>+</span> &nbsp; to add vehicle
        <button id="addVehicleBtn">+</button>
        <div id="vehicleList">
            <!-- Vehicle list will be displayed here -->
        </div>
    </div>

    <!-- Modal for adding/editing vehicles -->
    <div id="vehicleModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2 style="font-size:25px; font-weight:570; margin-bottom:2%; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
            Add/Edit Vehicle
            <div class="vslno">
                <input type="text" id="slno" placeholder="Enter Slno" style="margin-left: 10px; letter-spacing:2px;">
                <!-- Container for displaying the image -->
                <div id="imageContainer" style="margin-left:38%; margin-top:-12%; margin-bottom:15%; max-width:50%; border-radius:6px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);"></div>
            </div>
        </h2>

        <!-- Form for adding/editing vehicle details start -->
        <form id="vehicleForm">
            <input type="text" id="make" name="make" placeholder="Body Type:" required><br>
            <input type="text" id="model" name="model" placeholder="Model:" required><br>
            <input type="number" id="year" name="year" min="1900" max="9999" placeholder="Year:" required><br>
            <input type="number" id="price" name="price" min="0" step="0.01" placeholder="Price:" required><br>
            <label for="availability">Availability:</label>
            <select id="availability" name="availability" required>
                <option value="">--Select--</option> <!-- Default option added here -->
                <option value="available">Available</option>
                <option value="unavailable">Unavailable</option>
            </select><br>
            <button type="submit" name="addvehicle" id="addVehicleBtn" style="position:absolute; width:8%; margin-top:-12%; margin-left:16.5%; background-color:#FE2F13;">Add</button>
            <button type="submit" name="editvehicle" id="editVehicleBtn" style="position:fixed; width:8%; background-color:#3761FF; margin-left:16.5%; margin-top:-9%;">Edit</button>
            <button type="submit" name="searchvehicle" id="searchVehicleBtn" style="position:absolute; width:8%; margin-left:16.5%; margin-top:-6%;  background-color:#20A500;">Search</button>
            <button type="submit" name="deletevehicle" id="deleteVehicleBtn" style="position:fixed; width:8%; margin-left:16.5%; margin-top:-3%; background-color:#5E94BE;">Delete</button>
        </form>
        <!-- Form for adding/editing vehicle details end -->
    </div>
</div>


    <!-- Script start-->
    <script src="js/addvehicle.js"></script>
    <script src="js/open.js"></script>
    <script src="js/fetch_vehicle_data.js"></script>
    <script src="js/update_vehicle_data.js"></script>
    <script src="js/delete_vechile_data.js"></script>
    <!-- Script end-->

    <script>
        document.getElementById("imageInput").addEventListener("change", function(event) {
            var file = event.target.files[0];
            var imageDisplay = document.getElementById("imageDisplay");
            if (file) {
                imageDisplay.textContent = "Selected image: " + file.name;
            } else {
                imageDisplay.textContent = "";
            }
        });
    </script>

</body>
</html>

    


