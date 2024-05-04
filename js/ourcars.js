window.onload = function() {
    var container = document.getElementById("ourcarvehicleContainer");
    var vehicles = []; // Array to store vehicle data

    // Function to display vehicles
    function displayVehicles() {
        container.innerHTML = ""; // Clear the container
        vehicles.forEach(function(vehicle) {
            var vehicleBox = createVehicleBox(vehicle);
            container.appendChild(vehicleBox);
        });
    }

    // Function to create a vehicle box
    function createVehicleBox(vehicle) {
        var vehicleBox = document.createElement("div");
        vehicleBox.classList.add("ourcarvehicle-box");

        var image = document.createElement("img");
        image.src = vehicle.image;
        vehicleBox.appendChild(image);

        var details = document.createElement("div");
        details.classList.add("ourcarvehicle-info");
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
            displayVehicles();
        }
    };
    xhr.open("GET", "our_cars.php", true);
    xhr.send();
};
