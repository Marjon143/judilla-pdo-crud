<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$full_name = $email = $address = $city = $zipcode = $country = $payment_mode = $amount = "";
$full_name_err = $email_err = $amount_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate full name
    $input_full_name = trim($_POST["full_name"]);
    if (empty($input_full_name)) {
        $full_name_err = "Please enter your full name.";
    } else {
        $full_name = $input_full_name;
    }

    // Validate email
    $input_email = trim($_POST["email"]);
    if (empty($input_email)) {
        $email_err = "Please enter your email.";
    } elseif (!filter_var($input_email, FILTER_VALIDATE_EMAIL)) {
        $email_err = "Please enter a valid email address.";
    } else {
        $email = $input_email;
    }

    // Validate amount
    $input_amount = trim($_POST["amount"]);
    if (empty($input_amount)) {
        $amount_err = "Please enter the payment amount.";
    } elseif (!is_numeric($input_amount)) {
        $amount_err = "Please enter a valid amount.";
    } else {
        $amount = $input_amount;
    }

    // Check input errors before inserting in database
    if (empty($full_name_err) && empty($email_err) && empty($amount_err)) {
        // Prepare an insert statement
        $sql = "INSERT INTO payments (FullName, Email, Address, City, ZipCode, Country, PaymentMode, Amount) VALUES (:full_name, :email, :address, :city, :zipcode, :country, :payment_mode, :amount)";

        if ($stmt = $pdo->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":full_name", $full_name);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":address", $address);
            $stmt->bindParam(":city", $city);
            $stmt->bindParam(":zipcode", $zipcode);
            $stmt->bindParam(":country", $country);
            $stmt->bindParam(":payment_mode", $payment_mode);
            $stmt->bindParam(":amount", $amount);

            // Set default values for optional fields
            $address = $_POST["address"] ?? null;
            $city = $_POST["city"] ?? null;
            $zipcode = $_POST["zipcode"] ?? null;
            $country = $_POST["country"] ?? null;
            $payment_mode = $_POST["payment_mode"] ?? null;

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Redirect to landing page
                header("location: logistics.php");
                exit();
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        unset($stmt);
    }

    // Close connection
    unset($pdo);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Make a Payment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mt-5">Make a Payment</h2>
                <p>Please fill this form to make a payment.</p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="full_name" class="form-control <?php echo (!empty($full_name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $full_name; ?>">
                        <span class="invalid-feedback"><?php echo $full_name_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                        <span class="invalid-feedback"><?php echo $email_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" value="<?php echo $address; ?>">
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" name="city" class="form-control" value="<?php echo $city; ?>">
                    </div>
                    <div class="form-group">
                        <label>Zip Code</label>
                        <input type="text" name="zipcode" class="form-control" value="<?php echo $zipcode; ?>">
                    </div>
                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" name="country" class="form-control" value="<?php echo $country; ?>">
                    </div>
                    <div class="form-group">
                        <label>Payment Mode</label>
                        <select name="payment_mode" class="form-control">
                            <option value="Credit Card">Credit Card</option>
                            <option value="Debit Card">Debit Card</option>
                            <option value="PayPal">PayPal</option>
                            <!-- Add more payment options as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Amount</label>
                        <input type="text" name="amount" class="form-control <?php echo (!empty($amount_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $amount; ?>">
                        <span class="invalid-feedback"><?php echo $amount_err; ?></span>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <a href="../../index.php" class="btn btn-secondary ml-2">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
