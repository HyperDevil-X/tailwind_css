function handleSubmit() {
    var overlay = document.getElementById("overlay");
    overlay.style.display = "block";
    document.getElementById("ok-button").focus(); // Focus on the OK button
  
    // Get form data
    var formData = new FormData(document.forms["f1"]);
  
    // Create a new XMLHttpRequest object
    var xhr = new XMLHttpRequest();
  
    // Define what happens on successful data submission
    xhr.onload = function () {
      if (xhr.status >= 200 && xhr.status < 300) {
        showAlert("Submitted successfully!", true);
      } else {
        showAlert("Submission failed!", false);
      }
    };
  
    // Define what happens in case of error
    xhr.onerror = function () {
      showAlert("Submission failed!", false);
    };
  
    // Set up our request
    xhr.open("POST", "submit.php", true);
  
    // Send the request
    xhr.send(formData);
  }
  
  function closeAlert() {
    var overlay = document.getElementById("overlay");
    overlay.style.display = "none";
  }
  