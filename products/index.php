<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARJONS SHOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            text-decoration: wavy;
        }
        .product {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .product-item {
            width: 300px;
            margin: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .product-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .product-info {
            padding: 20px;
        }
        .product-name {
            font-weight: bold;
            margin-bottom: 10px;
        }
        .product-description {
            margin-bottom: 10px;
            color: #555;
        }
        .product-price {
            color: #ee4d2d;
            font-size: 1.2rem;
        }
        .buy-button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 5px;
        }
        .quantity-selector {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .quantity-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 5px;
            cursor: pointer;
            border-radius: 3px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MARJONS SHOP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reports.html">Reports</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logistics.php">Logistics</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="customerservice.html">Customer Service</a>
          </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">

    <h2 style="font-size: 50px; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">MARJON SHOE SHOP</h2>

    <div class="product" style="display: flex;">
        <div class="product-item" data-product-id="1" data-quantity="0" data-available="10">
            <img src="" alt="Product 1">
            <div class="product-info">
                <div class="product-name" style="text-align: center;">Nike</div>
                <div class="product-description">High-quality running shoes designed for comfort and performance.</div>
                <div class="product-price">₱400.00</div>
                <div class="quantity-selector">
                    <button class="quantity-button" onclick="decrementQuantity(this)">-</button>
                    <span>0</span>
                    <button class="quantity-button" onclick="incrementQuantity(this)">+</button>
                </div>
                <button class="buy-button" onclick="selectQuantity(1)">BUY</button>
                <div class="available">Available: <span>10</span></div>
            </div>
        </div>
    
        <div class="product-item" data-product-id="2" data-quantity="0" data-available="10">
            <img src="" alt="Product 2">
            <div class="product-info">
                <div class="product-name" style="text-align: center;">Adidas</div>
                <div class="product-description">Stylish and durable sneakers perfect for everyday wear.</div>
                <div class="product-price">₱600.00</div>
                <div class="quantity-selector">
                    <button class="quantity-button" onclick="decrementQuantity(this)">-</button>
                    <span>0</span>
                    <button class="quantity-button" onclick="incrementQuantity(this)">+</button>
                </div>
                <button class="buy-button" onclick="selectQuantity(2)">BUY</button>
                <div class="available">Available: <span>45</span></div>
            </div>
        </div>
    
        <div class="product-item" data-product-id="3" data-quantity="0" data-available="10">
            <img src="" alt="Product 3">
            <div class="product-info">
                <div class="product-name" style="text-align: center;">Converse</div>
                <div class="product-description">Classic Converse sneakers with a timeless design.</div>
                <div class="product-price">₱800.00</div>
                <div class="quantity-selector">
                    <button class="quantity-button" onclick="decrementQuantity(this)">-</button>
                    <span>0</span>
                    <button class="quantity-button" onclick="incrementQuantity(this)">+</button>
                </div>
                <button class="buy-button" onclick="selectQuantity(3)">BUY</button>
                <div class="available">Available: <span>15</span></div>
            </div>
        </div>
    
        <div class="product-item" data-product-id="4" data-quantity="0" data-available="10">
            <img src="" alt="Product 4">
            <div class="product-info">
                <div class="product-name" style="text-align: center;">Puma</div>
                <div class="product-description">Lightweight and comfortable shoes for athletic activities.</div>
                <div class="product-price">₱600.00</div>
                <div class="quantity-selector">
                    <button class="quantity-button" onclick="decrementQuantity(this)">-</button>
                    <span>0</span>
                    <button class="quantity-button" onclick="incrementQuantity(this)">+</button>
                </div>
                <button class="buy-button" onclick="selectQuantity(4)">BUY</button>
                <div class="available">Available: <span>15</span></div>
            </div>
        </div>
    
        <div class="product-item" data-product-id="5" data-quantity="0" data-available="10">
            <img src="" alt="Product 5">
            <div class="product-info">
                <div class="product-name" style="text-align: center;">Reebok</div>
                <div class="product-description">High-performance shoes for sports and fitness enthusiasts.</div>
                <div class="product-price">₱1,000.00</div>
                <div class="quantity-selector">
                    <button class="quantity-button" onclick="decrementQuantity(this)">-</button>
                    <span>0</span>
                    <button class="quantity-button" onclick="incrementQuantity(this)">+</button>
                </div>
                <button class="buy-button" onclick="selectQuantity(5)">BUY</button>
                <div class="available">Available: <span>15</span></div>
            </div>
        </div>
    
        <div class="product-item" data-product-id="6" data-quantity="0" data-available="10">
            <img src="" alt="Product 6">
            <div class="product-info">
                <div class="product-name" style="text-align: center;">Vans</div>
                <div class="product-description">Trendy and durable shoes perfect for skaters and casual wear.</div>
                <div class="product-price">₱500.00</div>
                <div class="quantity-selector">
                    <button class="quantity-button" onclick="decrementQuantity(this)">-</button>
                    <span>0</span>
                    <button class="quantity-button" onclick="incrementQuantity(this)">+</button>
                </div>
                <button class="buy-button" onclick="selectQuantity(6)">BUY</button>
                <div class="available">Available: <span>15</span></div>
            </div>
        </div>
    </div>
    
</div>

<script>
    function selectQuantity(productId) {
        var quantity = parseInt(document.querySelector(`.product-item[data-product-id="${productId}"] .quantity-selector span`).textContent);
        var available = parseInt(document.querySelector(`.product-item[data-product-id="${productId}"]`).dataset.available);
        if (quantity > 0) {
            if (quantity <= available) {
                // Redirect to the payment page
                window.location.href = "payment.php?productId=" + productId + "&quantity=" + quantity;
            } else {
                alert("Quantity exceeds available items!");
            }
        } else {
            alert("Please select at least 1 item.");
        }
    }

    function incrementQuantity(button) {
        var span = button.parentElement.querySelector("span");
        var currentQuantity = parseInt(span.textContent);
        span.textContent = currentQuantity + 1;
    }

    function decrementQuantity(button) {
        var span = button.parentElement.querySelector("span");
        var currentQuantity = parseInt(span.textContent);
        if (currentQuantity > 0) {
            span.textContent = currentQuantity - 1;
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
