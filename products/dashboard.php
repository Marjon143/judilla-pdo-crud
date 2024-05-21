<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .card {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: calc(33.333% - 20px);
            padding: 20px;
            box-sizing: border-box;
        }
        .card h2 {
            font-size: 1.5em;
            margin: 0 0 10px;
        }
        .card p {
            margin: 5px 0;
        }
        .card img {
            width: 100%;
            border-radius: 8px;
        }
        .total-cost {
            font-weight: bold;
            justify-content: center;
            text-align: center;
            font-size: 1.2em;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<h1>Purchase Dashboard</h1>

<div class="card-container" id="items-container">
    <!-- Cards will be dynamically inserted here -->
</div>

<div class="total-cost" id="total-cost">Total Cost: $0.00</div>

<script>
    const items = [
        { description: "Item 1", price: 10.00, quantity: 2, image: "item1.jpg" },
        { description: "Item 2", price: 5.50, quantity: 3, image: "item2.jpg" },
        { description: "Item 3", price: 20.00, quantity: 1, image: "item3.jpg" }
    ];

    function updateDashboard() {
        const container = document.getElementById('items-container');
        let totalCost = 0;
        container.innerHTML = '';

        items.forEach(item => {
            const cost = item.price * item.quantity;
            totalCost += cost;

            const card = document.createElement('div');
            card.className = 'card';
            card.innerHTML = `
                <h2>${item.description}</h2>
                <img src="${item.image}" alt="${item.description}">
                <p>Price: $${item.price.toFixed(2)}</p>
                <p>Quantity: ${item.quantity}</p>
                <p>Cost: $${cost.toFixed(2)}</p>
            `;
            container.appendChild(card);
        });

        document.getElementById('total-cost').textContent = `Total Cost: $${totalCost.toFixed(2)}`;
    }

    updateDashboard();
</script>

</body>
</html>
