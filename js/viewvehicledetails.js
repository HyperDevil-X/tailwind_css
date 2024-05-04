window.onload = function() {
    var container = document.getElementById("vehicleContainer");
    var vehicles = []; // Array to store vehicle data
    var currentIndex = 0; // Current index of displayed vehicle
    var vehiclesPerPage = 4; // Number of vehicles to display per page

    // Function to display vehicle at the specified index
    function displayVehicle(index) {
        container.innerHTML = ""; // Clear the container
        var endIndex = Math.min(index + vehiclesPerPage, vehicles.length);
        for (var i = index; i < endIndex; i++) {
            var vehicle = vehicles[i];
            var vehicleBox = createVehicleBox(vehicle);
            container.appendChild(vehicleBox);
        }
        currentIndex = index;
    }

    // Function to create a vehicle box
    function createVehicleBox(vehicle) {
        var vehicleBox = document.createElement("div");
        vehicleBox.classList.add("vehicle-box");

        var image = document.createElement("img");
        image.src = vehicle.image;
        vehicleBox.appendChild(image);

        var details = document.createElement("div");
        details.classList.add("vehicle-info");
        details.innerHTML = "<span>Make:</span> " + vehicle.make + "<br>" +
                            "<span>Model:</span> " + vehicle.model + "<br>" +
                            "<span>Year:</span> " + vehicle.year + "<br>" +
                            "<span>Price:</span> $" + vehicle.price + "<br>" +
                            "<span>Availability:</span> " + vehicle.availability;
        vehicleBox.appendChild(details);

        return vehicleBox;
    }

    // Send an AJAX request to fetch vehicle details from the server
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            vehicles = JSON.parse(this.responseText);
            displayVehicle(currentIndex);
        }
    };
    xhr.open("GET", "fetch_vehicle_details.php", true);
    xhr.send();

    // Event listener for next button
    document.getElementById("nextBtn").addEventListener("click", function() {
        if (currentIndex + vehiclesPerPage < vehicles.length) {
            displayVehicle(currentIndex + vehiclesPerPage);
        }
    });

    // Event listener for previous button
    document.getElementById("prevBtn").addEventListener("click", function() {
        if (currentIndex - vehiclesPerPage >= 0) {
            displayVehicle(currentIndex - vehiclesPerPage);
        }
    });
};
