<?php
// Include database connection file
$host = 'localhost';
$dbname = 'it28-ecommerce';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Fetch purchase history from the database
$query = "SELECT purchases.*, products.title AS ProductName, users.username AS UserName 
          FROM purchases 
          INNER JOIN products ON purchases.ProductID = products.id 
          INNER JOIN users ON purchases.UserID = users.id 
          ORDER BY PurchaseDate DESC";
$result = $pdo->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Purchase History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add any additional stylesheets or scripts if needed -->
</head>
<body>
    <div class="wrapper">
        <h2 class="mt-5">Purchase History</h2>
        <?php
        if ($result->rowCount() > 0) {
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

            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
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
        ?>
    </div>
</body>
</html>
