<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style/style.css" rel="stylesheet" type="text/css">
        <title>stock</title>
</head>
<body class="stock">

<header class="header">
        <h1>Brisa Donuts</h1>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="index.php">Menu</a></li>
                <li><a href="#">Trolley</a></li>
                <li><a href="User_login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <div class="page-body">
        <h2 class="stock">Stock Management</h2>
        <form id="stockform" method="POST">
            <div>
                <label for="stockId">Stock ID:</label>
                <input type="text" id="stockId" name="stockId">
            </div>
            <div class="form-field">
                <label for="itemName">Item Name:</label>
                <input type="text" id="itemName" name="itemName">
            </div>

            <div class="form-field">
                <label for="itemDescription">Item Description:</label>
                <input type="text" id="itemDescription" name="itemDescription">
            </div>

            <div class="form-field">
                <label for="onhand">Item on-hand:</label>
                <input type="text" id="onhand" name="onhand">
            </div>

            <div class="form-field">
                <label for="itemPrice">Item Price:</label>
                <input type="text" id="itemPrice" name="itemPrice">
            </div>

            <div class="form-field">
                <label for="itemStatus">Item Status:</label>
                    <div class="radio-buttons">
                    <label>
                    <input type="radio" id="statusEnabled" name="itemStatus" value="enabled">
                    Enabled
                    </label>
                    <label>
                    <input type="radio" id="statusDisabled" name="itemStatus" value="disabled">
                    Disabled
                </label>
            </div>
            <div>
                <button>Save</button>
                <button>Delete</button>
                <button>Edit</button>
            </div>
        </form>
    </div>
    <div>
                <table border="0" width="100%" height="5%">
                    <tr>
                        <td width="30px">
                        </td>
                        <td>Stock Id</td>
                        <td>Item name</td>
                        <td>Item description</td>
                        <td>Item on-hand</td>
                        <td>Item price</td>
                    </tr>
                </table>
            </div>

    <footer class="footer">
                
                <p>&copy; 2023 Brisa Donuts. All rights reserved.</p>
                <p>contato@brisadonuts.com</p>
    </footer>


</body>
</html>
