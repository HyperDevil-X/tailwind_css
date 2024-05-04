// Get the button that opens the popup
var btn = document.getElementById("ourcarbookBtn");

// Get the popup
var popup = document.getElementById("ourcarpopup");

// Get the <span> element that closes the popup
var span = document.getElementsByClassName("ourcarclose")[0];

// When the user clicks the button, open the popup
btn.onclick = function() {
  popup.style.display = "block";
}

// When the user clicks on <span> (x), close the popup
span.onclick = function() {
  ourcarpopup.style.display = "none";
}

// When the user clicks anywhere outside of the popup, close it
window.onclick = function(event) {
  if (event.target == ourcarpopup) {
    ourcarpopup.style.display = "none";
  }
}
