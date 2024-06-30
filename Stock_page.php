<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Stock Management Page</title>
        <link rel="stylesheet" href="style/style.css">
    </head>
    <body>
        <header class="header">
            <nav class="navbar">
                <a href="Main.php">Home</a>
                <a href="Stock_page.php">Stock</a>
                <a href="Invoice.php">Invoice</a>
                <a href="#">Login</a>
            </nav>
            <form action="#" class="search-bar">
                <input type="text" placeholder="Search...">
                <button type="submit"><ion-icon name="search-outline"></ion-icon></button>
            </form>
        </header>
        <div class="container">
        <h2>Stock Management</h2>
        <form>
            <div class="form-group">
                <label for="stock-id">Stock ID</label>
                <input type="text" id="stock-id" name="stock-id">
            </div>
            <div class="form-group">
                <label for="stock-item-name">Stock Item Name</label>
                <input type="text" id="stock-item-name" name="stock-item-name">
            </div>
            <div class="form-group">
                <label for="stock-item-description">Stock Item Description</label>
                <textarea id="stock-item-description" name="stock-item-description"></textarea>
            </div>
            <div class="form-group">
                <label for="stock-item-on-hand">Stock Item On-Hand</label>
                <input type="text" id="stock-item-on-hand" name="stock-item-on-hand">
            </div>
            <div class="form-group">
                <label for="stock-item-price">Stock Item Price</label>
                <input type="text" id="stock-item-price" name="stock-item-price">
            </div>
            <div class="form-group">
                <label for="stock-item-status">Stock Item Status</label>
                <div class="radio-group">
                    <input type="radio" id="status-enabled" name="stock-item-status" value="enabled">
                    <label for="status-enabled">Enabled</label>
                    <input type="radio" id="status-disabled" name="stock-item-status" value="disabled">
                    <label for="status-disabled">Disabled</label>
                </div>
            </div>
            <div class="button-group">
                <button type="button" class="save">Save</button>
                <button type="button" class="search">Search</button>
                <button type="button" class="close">Close</button>
            </div>
        </form>
    </div>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>