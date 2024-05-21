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
          <a class="nav-link" href="logistics.html">Logistics</a>
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
            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUSExETEhUVFRUWGRUYFRsaFxcZFhcWFxgaGRYYHSggGx0mHRYZITIiJSorLi4uGB8zPjMtNygtLisBCgoKDg0OGxAQGzAlICUtLS0tLS0tLS0tLS0tLS8tLS0tLS0tLy4vLS0tLS0tLS0vLS0tLy0tLS0tLy0tLS0tLf/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAABQYCBAcDAQj/xABAEAACAQIEAgcFBQcDBAMAAAABAgADEQQSITEFQQYTIlFhcYEHMpGh8EJSscHRFCNigpKi4RZy0jNDsvEkVML/xAAaAQEAAwEBAQAAAAAAAAAAAAAAAQIDBQQG/8QAMhEAAgECAwUHAwMFAAAAAAAAAAECAxEEITEFEkFhkSJRcYGh0fATscEUUvEVM0Jikv/aAAwDAQACEQMRAD8A7jERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAERNenikZmRWUslgwB1W/fIuDYiIkgREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQDT4ni+rpluew8zt+vpK/gAVIYE5tyfPe/fJvjtHNRa24s3w3+V5C4drr5z5bbtWrCtDOytdWyzv8+ZmFRveRMYLiYdiraW2PI+HnJOVKimXSb2G4n1fvHsAa+Hl+k02ftp3VOvn/t7r8rpqyY1ODJ+J4YbELUUOpuD6fIz3n0iaaujYRESQIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCVOt06w5Z6eHWti6iEqRSpnqww7672p28mPPc6SW6R4s06Ol7swGm9tz+FvWVeliSef/v8A9gjTwnE2ltZ4Wf04Ru7Xu3l0XujOVTddjyxvTbF4VhVxeEojCEqGehVepUog6Z3DU1zrci+UfHadARgQCDcHUHvlA47gf2jDVaI3em6j+ZSB3/Qmp7HOmYr0FwFc5MThxkAJ1qU0FgR/EtsrDwB5m19kY+eKhL6lrp8Msnfh5Ewk3qdNiInY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" alt="Product 1">
            <div class="product-info">
                <div class="product-name"  style="text-align: center;">Nike</div>
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
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR04PGV3gzlOMjXDh7eZdttJNyCeEQ-cFnylQ&usqp=CAU" alt="Product 2">
            <div class="product-info">
                <div class="product-name"  style="text-align: center;">Adidas</div>
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
            <img src="data:image/jpeg;base64,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" alt="Product 3">
            <div class="product-info">
                <div class="product-name" style="text-align: center;">Converse</div>
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
            <img src="data:image/jpeg;base64,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" alt="Product 4">
            <div class="product-info">
                <div class="product-name" style="text-align: center;">Puma</div>
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
            <img src="data:image/jpeg;base64,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3h9pW2B2OpYc77nvHvkSPCvLdXn1M6ecVrbObOuS9cYr0RETViREQEREBERAREQEREBERAREQEREBERAREQI1KYYFWAIIsQcwfWcT2g7H018dN2S5tuW3lubnW9wPnO4mDHUN9GXjqPUZiBzOx9kU6IB878zoP0j76zcd5NfRc6SwrwjOWkS0120Nr0aAvUcKfh1Y+ijOcftXthUfw0FNNTlvnNz6DRfqZxN6w0rxWt067a226WHHjbxcEXNj7cB1M4favaGtiSEUFUY2CJcs/RiM29NJa2L2NxGJO/UvTRsyzZu3opz9z9Z9D2L2foYYf8ADTxHV2zY+/AdBlM/lf8AIa/Dj/Zch2d7Du1nxPgXIimPMf1n8PoM59FRQAANALD2iJrWsVjTG15tOZIiJ05IiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgaPamArF2aiiNfPxOUz46KZz+N2NtOpcB6KKeCMwP/AHFLzvIkmufbqt8enzHCf+nuIZr1aiKNSQWcn5gfUzs9jdl8PhrFV3n+Jsz7DRfabuJzXjiHU8lrayRETtmREQEREBERAREQEREBERAREQEREBERAREQERPYH//Z" alt="Product 5">
            <div class="product-info">
                <div class="product-name" style="text-align: center;">Reebok</div>
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
            <img src="data:image/jpeg;base64,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" alt="Product 6">
            <div class="product-info">
                <div class="product-name" style="text-align: center;">Vans</div>
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
    </div>
</div>

<script>
    function selectQuantity(productId) {
        var quantity = parseInt(document.querySelector(`.product-item[data-product-id="${productId}"] .quantity-selector span`).textContent);
        var available = parseInt(document.querySelector(`.product-item[data-product-id="${productId}"]`).dataset.available);
        if (quantity > 0) {
            if (quantity <= available) {
                // Redirect to the payment page
                window.location.href = "payment.html?productId=" + productId + "&quantity=" + quantity;
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