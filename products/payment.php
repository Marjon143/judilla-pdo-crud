
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Payment - MARJONS SHOP</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f5f5f5;
    }
    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        text-align: center;
        margin-bottom: 20px;
    }
    .payment-form {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 8px;
    }
    label {
        display: block;
        margin-bottom: 5px;
    }
    input[type="text"], input[type="email"], input[type="number"], select {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }
    input[type="button"] {
        background-color: #ff5722;
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
    }
    input[type="button"]:hover {
        background-color: #f44336;
    }
</style>
</head>
<body>

<div class="container">

    <h2>Payment</h2>

    <div class="payment-form">
        <form id="paymentForm" action="payment2.html" method="post">
            <label for="fullname">Full Name</label>
            <input type="text" id="fullname" name="fullname" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            
            <label for="address">Address</label>
            <input type="text" id="address" name="address" required>
            
            <label for="city">City</label>
            <input type="text" id="city" name="city" required>
            
            <label for="zip">ZIP Code</label>
            <input type="text" id="zip" name="zip" required>
            
            <label for="country">Country</label>
            <select id="country" name="country" required>
                <option value="">Select Country</option>
                <option value="US">United States</option>
                <option value="CA">Canada</option>
                <option value="UK">United Kingdom</option>
                <option value="AU">Australia</option>
                <option value="PH">Philippines</option>
                <!-- Add more options as needed -->
            </select>

            <!-- Payment mode selection -->
            <label for="paymentMode">Payment Mode</label>
            <select id="paymentMode" name="paymentMode" required>
                <option value="">Select Payment Mode</option>
                <option value="COD">Cash on Delivery (COD)</option>
                <option value="GCASH">GCash</option>
                <option value="PAYMAYA">PayMaya</option>
                <!-- Add more payment modes as needed -->
            </select>
            
           
        </form>
        <div style="text-align: center;">
            <a href="products/logistics.php">Confirm</a>
        </div>
    </div>

</div>

<script>
    function navigateToPayment() {
        // Replace this with your logic to get the product ID dynamically
        var productId = "your_product_id";
        var quantity = "1"; // Default quantity
        // Set the form action dynamically
        document.getElementById("paymentForm").action = "products/logistics.php?productId=" + productId + "&quantity=" + quantity;
        // Redirect to the payment2.html page
        window.location.href = document.getElementById("paymentForm").action;
    }
</script>


</body>
</html>
