
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style/style.css" rel="stylesheet" type="text/css">
        <title>index</title>
</head>
<body class="index">
<div class="main_container" id="first_screen">
    <header class="header">
        <h3>Brisa Donuts</h3>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="index.php">Menu</a></li>
                <li><a href="#">Trolley</a></li>
                <li><a href="User_login.php">Login</a></li>
            </ul>
        </nav>
    </header>
 
    <div class="product">
        <h1>Products:</h1>
        
        <div class="item">
            <div class="item-content">
                <img src="images\homer_donuts.png" alt="Homer Donuts">
                <div class="text-content">
                    <p1>Homer Donuts AU$6.20</p1>
                    <form action="addtothecart.php" method="post">
                        <input type="hidden" name="produto_id" value="ID_DO_PRODUTO_AQUI">
                        <input class="button.cart" input type="submit" value="+add">
                    </form>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="item-content">
                <img src="images\red_velvet.png" alt="Red Velvet">
                <div class="text-content">
                    <p1>Red Velvet AU$6.20</p1>
                    <p>Delicious red donut, with two layers of cream cheese frosting</p>
                    <form action="addtothecart.php" method="post">
                        <input type="hidden" name="produto_id" value="ID_DO_PRODUTO_AQUI">
                        <input class="button.cart" input type="submit" value="+add">
                    </form>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="item-content">
                <img src="images\caramel.png" alt="Caramel">
                <div class="text-content">
                    <p1>Caramel AU$6.20</p1>
                    <p>Gooey caramel filled classic donut</p>
                    <form action="addtothecart.php" method="post">
                        <input type="hidden" name="produto_id" value="ID_DO_PRODUTO_AQUI">
                        <input class="button.cart" input type="submit" value="+add">
                    </form>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="item-content">
                <img src="images\milk_chocolate.png" alt="Milk Chocolate">
                <div class="text-content">
                    <p1>Milk Chocolate AU$6.20</p1>
                    <p>36% pure Belfian milk chocolate glaze topped with pure chocolate flakes</p>
                    <form action="addtothecart.php" method="post">
                        <input type="hidden" name="produto_id" value="ID_DO_PRODUTO_AQUI">
                        <input class="button.cart" input type="submit" value="+add">
                    </form>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="item-content">
                <img src="images\coconut.png" alt="Coconut">
                <div class="text-content">
                    <p1>Coconut  AU$5.00</p1>
                    <p>Vegan yest donut topped with coconut glaze (coconut milk based) and rolled in toasted coconut</p>
                    <form action="addtothecart.php" method="post">
                        <input type="hidden" name="produto_id" value="ID_DO_PRODUTO_AQUI">
                        <input class="button.cart" input type="submit" value="+add">
            </form>
            </div>
            </div>
        </div>
    </div>

    <footer class="footer">
                
                <p>&copy; 2023 Brisa Donuts. All rights reserved.</p>
                <p>contato@brisadonuts.com</p>
    </footer>


</body>
</html>
