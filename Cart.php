<?php
// Start the session
session_start();

// Mock data for products (normally this would come from a database)
$products = [
    ['lpa_stock_ID' => 'P001', 'lpa_stock_name' => 'Teclado Mecânico', 'lpa_stock_price' => 250.00],
    ['lpa_stock_ID' => 'P002', 'lpa_stock_name' => 'Mouse Gamer', 'lpa_stock_price' => 150.00],
    ['lpa_stock_ID' => 'P003', 'lpa_stock_name' => 'Headset', 'lpa_stock_price' => 200.00]
];

// Handle adding products to cart (normally this would be handled with forms and POST requests)
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Function to update cart item quantity
if (isset($_POST['update_quantity'])) {
    $id = $_POST['product_id'];
    $quantity = intval($_POST['quantity']);
    
    if ($quantity <= 0) {
        unset($_SESSION['cart'][$id]);
    } else {
        $_SESSION['cart'][$id]['quantity'] = $quantity;
    }
}

// Function to remove cart item
if (isset($_POST['remove_item'])) {
    $id = $_POST['product_id'];
    unset($_SESSION['cart'][$id]);
}

// Function to confirm the cart
if (isset($_POST['confirm_order'])) {
    // Process the order here (e.g., save to database, send confirmation email)
    // Clear the cart
    $_SESSION['cart'] = [];
    echo "<script>alert('Order confirmed!');</script>";
}

function getCartTotal() {
    $total = 0;
    foreach ($_SESSION['cart'] as $item) {
        $total += $item['price'] * $item['quantity'];
    }
    return $total;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
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
        <h1>Checkout Page</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>Product Code</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>QTY</th>
                    <th>Amount</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $totalAmount = 0;
                foreach ($_SESSION['cart'] as $id => $item) {
                    $product = $products[$id];
                    $amount = $item['price'] * $item['quantity'];
                    $totalAmount += $amount;
                    echo "<tr>
                        <form method='post'>
                            <input type='hidden' name='product_id' value='$id'>
                            <td>{$product['lpa_stock_ID']}</td>
                            <td>{$product['lpa_stock_name']}</td>
                            <td>R$ {$product['lpa_stock_price']}</td>
                            <td><input type='number' name='quantity' value='{$item['quantity']}' min='0'></td>
                            <td>R$ $amount</td>
                            <td>
                                <button type='submit' name='update_quantity'>Update Quantity</button>
                                <button type='submit' name='remove_item'>Remove</button>
                            </td>
                        </form>
                    </tr>";
                }
                ?>
                <tr>
                    <td colspan="4" style="text-align: right;">Total:</td>
                    <td>R$ <?php echo number_format(getCartTotal(), 2, ',', '.'); ?></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <form method="post">
            <button type="submit" name="confirm_order">Confirm Order</button>
        </form>
    </div>
</body>
</html>
