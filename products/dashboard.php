<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Summary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        .purchase-item {
            margin-bottom: 10px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }
        .purchase-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        .purchase-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .purchase-info img {
            width: 50px; /* Adjust image size as needed */
            height: auto;
            margin-right: 10px;
        }
        .confirm-button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Purchase Summary</h2>
    <div id="purchase-content"></div>
    <div id="total-cost"></div>
    <button class="confirm-button" onclick="redirectToPayment()">Confirm Payment</button>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const confirmedPurchases = JSON.parse(localStorage.getItem("confirmedPurchases")) || [];
    const purchaseContent = document.getElementById("purchase-content");
    const totalCostElement = document.getElementById("total-cost");
    let totalCost = 0;

    confirmedPurchases.forEach(item => {
        totalCost += item.price * item.quantity;
        const purchaseItem = document.createElement("div");
        purchaseItem.className = "purchase-item";
        purchaseItem.innerHTML = `
            <div class="purchase-info">
                <img src="product${item.productId}.jpg" alt="${item.productName}">
                <div>
                    <div>${item.productName}</div>
                    <div>Price: ₱${item.price}</div>
                    <div>Quantity: ${item.quantity}</div>
                    <div>Total Price: ₱${(item.price * item.quantity).toFixed(2)}</div>
                </div>
            </div>
        `;
        purchaseContent.appendChild(purchaseItem);
    });

    totalCostElement.textContent = `Total Cost: ₱${totalCost.toFixed(2)}`;
});

function redirectToPayment() {
    window.location.href = "payment.php";
}
</script>
</body>
</html>
