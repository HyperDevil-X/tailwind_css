document.getElementById("editVehicleBtn").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent form submission

    // Get the slno entered by the admin
    var slno = document.getElementById("slno").value.trim();

    // Check if slno is empty
    if (slno === "") {
        alert("𝓟𝓵𝓮𝓪𝓼𝓮 𝓔𝓷𝓽𝓮𝓻 𝓢𝓵𝓷𝓸 𝓣𝓸 𝓤𝓹𝓭𝓪𝓽𝓮 𝓓𝓪𝓽𝓪");
        return; // Exit the function if slno is empty
    }

    // Show confirmation dialog
    var confirmation = confirm("𝓐𝓻𝓮 𝓨𝓸𝓾 𝓢𝓾𝓻𝓮 𝓨𝓸𝓾 𝓦𝓪𝓷𝓽 𝓣𝓸 𝓤𝓹𝓭𝓪𝓽𝓮?");

    if (confirmation) {
        // Proceed with the update
        var make = document.getElementById("make").value;
        var model = document.getElementById("model").value;
        var year = document.getElementById("year").value;
        var price = document.getElementById("price").value;
        var availability = document.getElementById("availability").value;

        // Send AJAX request to update data
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState == 4) {
                if (this.status == 200) {
                    // Handle response if needed
                    alert("𝓓𝓪𝓽𝓪 𝓤𝓹𝓭𝓪𝓽𝓮𝓭 𝓢𝓾𝓬𝓬𝓮𝓼𝓼𝓯𝓾𝓵𝓵𝔂!");
                    window.location.reload(); // Reload the page after updating
                } else {
                    alert("𝓢𝓸𝓶𝓮𝓽𝓱𝓲𝓷𝓰 𝓦𝓮𝓷𝓽 𝓦𝓻𝓸𝓷𝓰! 𝓟𝓵𝓮𝓪𝓼𝓮 𝓣𝓻𝔂 𝓐𝓰𝓪𝓲𝓷 𝓛𝓪𝓽𝓮𝓻");
                }
            }
        };
        xhr.open("POST", "update_vehicle_data.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send("slno=" + slno + "&make=" + make + "&model=" + model + "&year=" + year + "&price=" + price + "&availability=" + availability);
    }
});
