function openCheckout(boxId) {
    var s_Details = document.getElementById(boxId).innerHTML;

    // var selectedSeats = document.getElementById("seatsInput").value;

    // Calculate subtotal based on the number of seats (you need to adjust this calculation based on your pricing logic)
    // var subtotal = calculateSubtotal(selectedSeats);

    // Populate the elements in the checkout page with the obtained information
    document.getElementById("SeatDetails").innerHTML = s_Details;
    // document.getElementById("totalSeats").getElementsByTagName("p")[0].innerText = selectedSeats;
    // document.getElementById("subtotal").getElementsByTagName("p")[0].innerText = subtotal.toFixed(2);

    // Close the modal
    closeModal();

    window.location.href = "http://127.0.0.1:8000/checkout";// Adjust the URL as needed
}

// Function to calculate subtotal based on the number of seats (replace this with your pricing logic)
function calculateSubtotal(seats) {
    // Replace this with your pricing logic
    var seatPrice = 10; // Replace with your actual seat price
    return seatPrice * seats;
}
