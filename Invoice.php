<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
  <header class="header">
    <nav class="navbar">
        <a href="Main.php">Home</a>
        <a href="Stock_page.php">Stock</a>
        <a href="Invoice.php">Invoice</a>
        <a href="#">Login</a>
    <form action="#" class="search-bar">
      <input type="text" placeholder="Search...">
      <button type="submit"><ion-icon name="search-outline"></ion-icon></button>
    </form>
  </header>
  <div class="container">
        <h2>Sales and Invoicing</h2>
        <div class="form-group">
            <label for="search-invoice">Search Invoice Record</label>
            <input type="text" id="search-invoice" name="search-invoice">
            <button type="button">Search</button>
        </div>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Client</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample data for display purposes -->
                    <tr>
                        <td>2024-06-28</td>
                        <td>Client A</td>
                        <td>$200.00</td>
                    </tr>
                    <tr>
                        <td>2024-06-29</td>
                        <td>Client B</td>
                        <td>$350.00</td>
                    </tr>
                    <tr class="total-row">
                        <td colspan="2">Total</td>
                        <td>$550.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
  



  <footer>
      <p>&copy; 2024 LPA eComms. All rights reserved.</p>
      <nav>
        <a href="Main.php">Admin</a>
      </nav>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>