<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "it28-ecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch purchase history from the database
$query = "SELECT purchases.*, products.ProductName, users.UserName 
          FROM purchases 
          INNER JOIN products ON purchases.ProductID = products.ProductID 
          INNER JOIN users ON purchases.UserID = users.UserID 
          ORDER BY PurchaseDate DESC";
$result = $conn->query($query);

if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Purchase History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper {
            width: 80%;
            margin: 0 auto;
        }
        table {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <h2 class="mt-5">Purchase History</h2>
    <?php
    if ($result->num_rows > 0) {
        echo "<table class='table table-bordered'>
                <tr>
                    <th>Purchase ID</th>
                    <th>Product Name</th>
                    <th>User Name</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Purchase Date</th>
                    <th>Payment Mode</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . htmlspecialchars($row['PurchaseID']) . "</td>
                    <td>" . htmlspecialchars($row['ProductName']) . "</td>
                    <td>" . htmlspecialchars($row['UserName']) . "</td>
                    <td>" . htmlspecialchars($row['Quantity']) . "</td>
                    <td>" . htmlspecialchars($row['TotalPrice']) . "</td>
                    <td>" . htmlspecialchars($row['PurchaseDate']) . "</td>
                    <td>" . htmlspecialchars($row['PaymentMode']) . "</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No purchase history found.</p>";
    }

    // Close database connection
    $conn->close();
    ?>
</div>
</body>
</html>
