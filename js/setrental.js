document.getElementById("rentalForm").addEventListener("submit", function(event) {
    var minRate = parseFloat(document.getElementById("min_rate").value);
    var maxRate = parseFloat(document.getElementById("max_rate").value);

    // Check if max rate is greater than min rate
    if (maxRate <= minRate) {
        alert("𝑀𝒶𝓍 𝓇𝒶𝓉𝑒 𝓂𝓊𝓈𝓉 𝒷𝑒 𝑔𝓇𝑒𝒶𝓉𝑒𝓇 𝓉𝒽𝒶𝓃 𝓂𝒾𝓃 𝓇𝒶𝓉𝑒.");
        event.preventDefault(); // Prevent form submission
    } else {
        var form = document.getElementById("rentalForm");
        var formData = new FormData(form);

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState === 4) {
                if (this.status === 200) {
                    if (this.responseText.trim() === "success") {
                        alert("𝒮𝓊𝒷𝓂𝒾𝓉𝓉𝑒𝒹 𝒮𝓊𝒸𝒸𝑒𝓈𝓈𝒻𝓊𝓁𝓁𝓎");
                        window.location.reload(); // Reload the page
                    } else {
                        alert("𝒮𝑜𝓂𝑒𝓉𝒽𝒾𝓃𝑔 𝓌𝑒𝓃𝓉 𝓌𝓇𝑜𝓃𝑔! 𝒫𝓁𝑒𝒶𝓈𝑒 𝓉𝓇𝓎 𝒶𝑔𝒶𝒾𝓃.");
                    }
                }
            }
        };
        xhr.open("POST", "set_rental.php", true);
        xhr.send(formData);

        // Prevent the default form submission
        event.preventDefault();
    }
});
