<?php
// Start the session
session_start();

// Redirect to login page if not logged in
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header("Location: customer_login.php");
    exit();
}

// Dummy user data (in a real application, this would be fetched from a database)
$userData = [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'address' => '123 Main St',
    'phone' => '1234567890'
];

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['first_name'] ?? '';
    $lastName = $_POST['last_name'] ?? '';
    $address = $_POST['address'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $paymentOption = $_POST['payment_option'] ?? '';

    // Process the payment information here
    // (e.g., save to database, process payment)

    // For demonstration, just show a message
    echo "<script>alert('Payment details submitted.');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Payment</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="checkout.php">Checkout</a>
            <a href="Costumer_login.php">Login</a>
        </nav>
        <form action="#" class="search-bar">
            <input type="text" placeholder="Search...">
            <button type="submit"><ion-icon name="search-outline"></ion-icon></button>
        </form>
    </header>

    <div class="container">
        <h1>Payment Information</h1>
        <form method="post">
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" value="<?php echo htmlspecialchars($userData['first_name']); ?>" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" value="<?php echo htmlspecialchars($userData['last_name']); ?>" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($userData['address']); ?>" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($userData['phone']); ?>" required>
            </div>
            <div class="form-group">
                <label for="payment_option">Payment Option:</label>
                <select id="payment_option" name="payment_option" required>
                    <option value="PayPal">PayPal</option>
                    <option value="VISA">VISA</option>
                    <option value="MasterCard">MasterCard</option>
                    <option value="Direct Deposit">Direct Deposit</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Pay Now</button>
                <button type="button" onclick="window.location.href='checkout.php'">Cancel</button>
            </div>
        </form>
    </div>

    <footer>
        <p>&copy; 2024 LPA eComms. All rights reserved.</p>
    </footer>
</body>
</html>
