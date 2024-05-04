// JavaScript for fetching and deleting data
document.addEventListener("DOMContentLoaded", function() {
    // Function to handle delete operation
    function deleteData(slno) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "delete_vehicle_data.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var response = xhr.responseText;
                    alert(response); // Display success message
                    location.reload(); // Reload the page
                } else {
                    alert("𝓔𝓻𝓻𝓸𝓻 𝓭𝓮𝓵𝓮𝓽𝓲𝓷𝓰 𝓭𝓪𝓽𝓪"); // Display error message
                }
            }
        };
        xhr.send("deletevehicle=1&slno=" + slno); // Send slno to delete.php
    }

    // Event listener for delete button
    document.getElementById("deleteVehicleBtn").addEventListener("click", function(event) {
        event.preventDefault();
        var slno = document.getElementById("slno").value.trim(); // Get slno from input
        if (slno !== "") {
            var confirmDelete = confirm("𝓐𝓻𝓮 𝔂𝓸𝓾 𝓼𝓾𝓻𝓮 𝔂𝓸𝓾 𝔀𝓪𝓷𝓽 𝓽𝓸 𝓭𝓮𝓵𝓮𝓽𝓮 𝓽𝓱𝓲𝓼 𝓿𝓮𝓱𝓲𝓬𝓵𝓮 𝓭𝓪𝓽𝓪?");
            if (confirmDelete) {
                deleteData(slno); // Call delete function
            }
        } else {
            alert("𝓟𝓵𝓮𝓪𝓼𝓮 𝓮𝓷𝓽𝓮𝓻 𝓼𝓵𝓷𝓸 𝓽𝓸 𝓭𝓮𝓵𝓮𝓽𝓮 𝓭𝓪𝓽𝓪");
        }
    });
});
