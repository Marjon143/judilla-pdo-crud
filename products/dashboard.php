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
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        #total-cost {
            font-weight: bold;
            font-size: 1.2em;
        }
    </style>
</head>
<body>

<h1>Purchase Dashboard</h1>

<table>
    <thead>
        <tr>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Cost</th>
        </tr>
    </thead>
    <tbody id="items-table-body">
        <!-- Items will be dynamically inserted here -->
    </tbody>
</table>

<div id="total-cost">Total Cost: $0.00</div>

<script>
    const items = [
        { description: "Item 1", price: 10.00, quantity: 2 },
        { description: "Item 2", price: 5.50, quantity: 3 },
        { description: "Item 3", price: 20.00, quantity: 1 }
    ];

    function updateDashboard() {
        const tableBody = document.getElementById('items-table-body');
        let totalCost = 0;
        tableBody.innerHTML = '';

        items.forEach(item => {
            const cost = item.price * item.quantity;
            totalCost += cost;

            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${item.description}</td>
                <td>$${item.price.toFixed(2)}</td>
                <td>${item.quantity}</td>
                <td>$${cost.toFixed(2)}</td>
            `;
            tableBody.appendChild(row);
        });

        document.getElementById('total-cost').textContent = `Total Cost: $${totalCost.toFixed(2)}`;
    }

    updateDashboard();
</script>

</body>
</html>
