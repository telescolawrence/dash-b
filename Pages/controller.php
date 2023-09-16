document.addEventListener("DOMContentLoaded", function () {
    const middle1 = document.getElementById("middle1");
    const middle2 = document.getElementById("middle2");

    setInterval(function () {
        if (middle1.style.display === "none") {
            middle1.style.display = "table";
            middle2.style.display = "none";
        } else {
            middle1.style.display = "none";
            middle2.style.display = "table";
        }
    }, 5000); // Switch tables every 5 seconds (5000 milliseconds)
});
