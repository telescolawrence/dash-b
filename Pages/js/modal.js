// Get references to modal elements and buttons
var modal = document.getElementById("scoreModal");
var openModalBtn = document.getElementById("openModalBtn");
var closeModalBtn = document.getElementById("closeModalBtn");

// Open the modal when the "Open Form" button is clicked
openModalBtn.onclick = function() {
    modal.style.display = "block";
}

// Close the modal when the "X" button is clicked
closeModalBtn.onclick = function() {
    modal.style.display = "none";
}

// Close the modal if the user clicks outside of it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}