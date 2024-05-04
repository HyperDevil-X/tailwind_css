// Define what happens on successful data submission
xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        // Parse JSON response
        var response = JSON.parse(this.responseText);
        
        // Display success or error message based on server response
        if (response.success) {
            alert(response.success);
        } else if (response.error) {
            alert(response.error);
        }
        
        cm(); // Close modal after submission
    }
};
