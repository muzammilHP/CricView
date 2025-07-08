<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="{{asset('css/checkout.css')}}">
    <script src="https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
</head>
<body>
<div class="container">
        <nav>
            <div class="logo">
                <img src="{{asset('images/Logo.png')}}" alt="Logo">
                <h1>cricView</h1>
            </div>
        </nav>
        <div id="content">
            <div class="box">
                <div id="orderSummary">
                
                    <div class="left">
                        <h1>Order Summary</h1>
                        <h3 style="padding-top:10px; padding-left:50px;">Seats:</h3>
                        <h3 style="padding-left:50px;">Category:</h3>
                        <h3 style="padding-left:50px;"">Price:</h3>
                        <h3 style="padding-left:50px;">Total Seats:</h3>
                        <h3 style="padding-left:50px;">SubTotal:</h3>
                    </div>
                    <div class="right">
                    
                    <div id="SeatDetails"></div>
                    <div style="padding-top:10px" id="totalSeats">
                        <p></p>
                    </div>
                    <div style="padding-top:14px" id="subtotal">
                         <p></p>
                    </div>
                    </div>
                </div>
                <div id="userInfoForm">
                    <h1 style="padding-bottom:10px;">Enter Your Information</h1>
                    <label  for="name">Name:</label>
                    <input type="text" id="name" required><br><br>
                    <label for="cnic">CNIC:</label>
                    <input type="text" id="cnic" required>
                </div>
                <div id="paymentOptions">
                    <h1>Choose Payment Method</h1>
                    <label>
                        <input type="radio" name="paymentMethod" value="easypaisa"> Easypaisa
                    </label>
                    <label>
                            <input type="radio" name="paymentMethod" value="jazzCash"> Jazz Cash
                    </label>
                </div>
                <button id="payNow" onclick="processPayment()">Pay Now</button>
        </div>
</div>
<div id="ticketModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Your Ticket</h2>
            <div id="ticketDetails"></div>
            <button onclick="printTicket()">Print Ticket</button>
        </div>
    </div>
<!-- <script src="{{asset('js/checkout.js')}}"></script> -->
<script>

    document.addEventListener('DOMContentLoaded', function () {
    // Retrieve the data from sessionStorage or localStorage
    var checkoutDataJSON = sessionStorage.getItem('checkoutData');

    if (checkoutDataJSON) {
        // Parse the JSON string back to an object
        var checkoutData = JSON.parse(checkoutDataJSON);

        // Display the data on the checkout page
        document.getElementById('totalSeats').getElementsByTagName('p')[0].textContent = checkoutData.selectedSeats;
        document.getElementById('SeatDetails').innerHTML = checkoutData.seatDetails;
        // Display more data as needed
        document.getElementById('subtotal').getElementsByTagName('p')[0].textContent = checkoutData.totalPrice;
    }
});


function processPayment() {
    var userName = document.getElementById("name").value;
    var userCNIC = document.getElementById("cnic").value;
    var seatDetails =document.getElementById('SeatDetails').innerHTML;
    var totalSeats = document.getElementById('totalSeats').textContent;
    var subtotal = document.getElementById('subtotal').textContent;

    var paymentMethod = document.querySelector('input[name="paymentMethod"]:checked');

    if (!userName || !userCNIC || !paymentMethod) {
        alert("Please fill in all fields and choose a payment method.");
        return;
    }

    // Simulate payment processing (replace with actual payment processing logic)
    alert("Payment successful!");

    // Display ticket details in the modal
    var ticketDetails = "Name: " + userName + "<br>CNIC: " + userCNIC + "<br>" + seatDetails + "<br>Total Seats: " + totalSeats + "<br>SubTotal: " + subtotal ;
    document.getElementById("ticketDetails").innerHTML = ticketDetails;

    // Show the modal
    var modal = document.getElementById("ticketModal");
    modal.style.display = "block";
}

function printTicket() {
    var ticketDetails = document.getElementById("ticketDetails").innerHTML;

    if (!ticketDetails) {
        alert("Ticket details not available.");
        return;
    }

    var element = document.getElementById("ticketDetails");

    html2pdf(element, {
        margin: 10,
        filename: 'ticket.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
    });
}


    function closeModal() {
        var modal = document.getElementById("ticketModal");
        modal.style.display = "none";
    }
</script>
</body>
</html>