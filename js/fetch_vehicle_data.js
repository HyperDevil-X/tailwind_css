// JavaScript code to fetch data and display image
document.getElementById("searchVehicleBtn").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent form submission
    
    // Get the slno entered by the admin
    var slno = document.getElementById("slno").value;
    
    // Check if slno is empty
    if (slno.trim() === "") {
        alert("𝓟𝓵𝓮𝓪𝓼𝓮 𝓔𝓷𝓽𝓮𝓻 𝓢𝓵𝓷𝓸 𝓣𝓸 𝓢𝓮𝓪𝓻𝓬𝓱 𝓓𝓪𝓽𝓪");
        return; // Exit the function if slno is empty
    }
    
    // Send an AJAX request to fetch the data for the entered slno
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4) {
            if (this.status == 200) {
                // Parse the JSON response
                var responseData = JSON.parse(this.responseText);
                
                // Populate the input fields with the fetched data
                document.getElementById("make").value = responseData.make;
                document.getElementById("model").value = responseData.model;
                document.getElementById("year").value = responseData.year;
                document.getElementById("price").value = responseData.price;
                document.getElementById("availability").value = responseData.availability;
                
                // Display the image from the database
                var imageContainer = document.getElementById("imageContainer");
                imageContainer.innerHTML = "<img src='" + responseData.image_url + "' style='border-radius:6px; max-width: 90%; max-height: 125px;'>";
            } else {
                alert("𝓢𝓸𝓶𝓮𝓽𝓱𝓲𝓷𝓰 𝓦𝓮𝓷𝓽 𝓦𝓻𝓸𝓷𝓰! 𝓟𝓵𝓮𝓪𝓼𝓮 𝓣𝓻𝔂 𝓐𝓰𝓪𝓲𝓷 𝓛𝓪𝓽𝓮𝓻");
            }
        }
    };
    xhr.open("GET", "fetch_vehicle_data.php?slno=" + slno, true);
    xhr.send();
});

// Add event listener to the slno input field to clear data and image container when slno is erased
document.getElementById("slno").addEventListener("input", function() {
    // Clear input fields
    document.getElementById("make").value = "";
    document.getElementById("model").value = "";
    document.getElementById("year").value = "";
    document.getElementById("price").value = "";
    document.getElementById("availability").value = "";
    
    // Clear image container
    document.getElementById("imageContainer").innerHTML = "";
});
