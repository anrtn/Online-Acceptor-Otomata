function checkNumber() {
    var numberInput = document.getElementById("numberInput").value;
    var popupContent = document.getElementById("popupContent");
    var popup = document.getElementById("popup");

    // Regular expression to check if the input is a scientific number
    var scientificNumberRegex = /^[-+]?[0-9]*\.?[0-9]+([eE][-+]?[0-9]+)?$/;

    if (scientificNumberRegex.test(numberInput)) {
        popupContent.textContent = "It's a scientific number!";
    } else {
        popupContent.textContent = "It's not a scientific number!";
    }

    // Show the popup
    popup.style.display = "block";
}

function closePopup() {
    var popup = document.getElementById("popup");
    // Hide the popup
    popup.style.display = "none";
}
