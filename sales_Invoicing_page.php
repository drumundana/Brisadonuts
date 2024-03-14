<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style/style.css" rel="stylesheet">
        <link href="style/bootstrap.min.css" rel="stylesheet">
        <title>Home</title>
    </head>
    <body>
        <header id="header">
            <nav>
               <a><img src="images\logo_green.png" alt="logo" class="logo"></a>
               <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="index.php">Menu</a></li>
                <li><a href="order.php">Order</a></li>
                <li><a href="User_login_page.php">Login</a></li>
               </ul> 
            </nav>
        </header>

    <div class="page-body">
        <h2>Sales and Invoicing</h2>
        <div class="search-section">
            <label for="searchInvoice">Search Invoice Record:</label>
            <input type="text" id="searchInvoice" name="searchInvoice">
            <input type="button" value="Search">
        </div>

        <div class="search-results">
            <h3>Search Results:</h3>
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Client</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2">Total Amount:</td>
                        <td id="totalAmount">0.00</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <footer>
        <p>Page Footer - Global</p>
    </footer>
 
    <footer class="footer">
                
                <p>&copy; 2023 Brisa Donuts. All rights reserved.</p>
                <p>contato@brisadonuts.com</p>
    </footer>


</body>
</html>
