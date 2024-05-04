// Get the modal
var modal = document.getElementById("vehicleModal");

// Get the button that opens the modal
var btn = document.getElementById("addVehicleBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Form submission
document.getElementById("vehicleForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission

    // Get form data
    var make = document.getElementById("make").value;
    var model = document.getElementById("model").value;
    var year = document.getElementById("year").value;
    var price = document.getElementById("price").value;
    var availability = document.getElementById("availability").value;

    // Display confirmation dialog box
    var confirmation = confirm("𝓐𝓻𝓮 𝔂𝓸𝓾 𝓼𝓾𝓻𝓮 𝔂𝓸𝓾 𝔀𝓪𝓷𝓽 𝓽𝓸 𝓪𝓭𝓭 𝓽𝓱𝓲𝓼 𝓿𝓮𝓱𝓲𝓬𝓵𝓮?");
    if (confirmation) {
        // Create a new FormData object
        var formData = new FormData();
        formData.append("addvehicle", "true"); // Add a parameter to indicate the action
        formData.append("make", make);
        formData.append("model", model);
        formData.append("year", year);
        formData.append("price", price);
        formData.append("availability", availability);
        // Create a new XMLHttpRequest object
        var xhr = new XMLHttpRequest();

        // Define what happens on successful data submission
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Display success or error message based on server response
                var response = this.responseText;
                if (response.includes("Success")) {
                    alert("𝓥𝓮𝓱𝓲𝓬𝓵𝓮 𝓪𝓭𝓭𝓮𝓭 𝓼𝓾𝓬𝓬𝓮𝓼𝓼𝓯𝓾𝓵𝓵𝔂");
                    // Reload the page
                    // window.location.href = "#vehicle-management";
                    location.reload();
                } else {
                    alert("𝓕𝓪𝓲𝓵𝓮𝓭 𝓽𝓸 𝓪𝓭𝓭 𝓿𝓮𝓱𝓲𝓬𝓵𝓮");
                }
                // Close the modal regardless of success or failure
                modal.style.display = "none";
            }
        };

        // Open a POST request to the server endpoint
        xhr.open("POST", "process.php", true);

        // Send the FormData object as the request body
        xhr.send(formData);
    }
});
