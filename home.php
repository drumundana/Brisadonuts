<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style/style.css" rel="stylesheet">
        <link href="style/bootstrap.min.css" rel="stylesheet">
        <tiitle>Home</title>
    </head>
    <body class="home">
        <header id="header">
            <nav class="navbar navbar-expand-lg px-4">
               <a href="#" class="navbar-brand">
                <img src="images\logo_green.png" alt="Main Company Logo">
               </a> 
            </nav>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarContents" aria-expanded="false" aria-label="Toggle-Navigation">
                <i class="fa fa-bars" aria-hidden="true" id="toggler-icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarContents">
                <ul class="navbar-nav text-capitalize mx-auto">
                    <li class="nav-item active">
                        <a href="home.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a href="index.php" class="nav-link">Menu</a>
                    </li>
                    <li class="nav-item active">
                        <a href="order.php" class="nav-link">Order</a>
                    </li>
                    <li class="nav-item active">
                        <a href="login.php" class="nav-link">Login</a>
                    </li>
                </ul>
                <nav>
                    <div id="card-info" class="nav-info cart-info align-items-center d-flex justify-content-between mx-lg-5">
                        <span class="cart-info_icon mr-lg-3">
                            <i class="fa fa-shopping-cart"></i>
                        </span>
                        <p class="mb-0 text-capitalize">
                            <span id="item-count">0</span>
                            Items - Rs
                             <span class="item-count" id="item-total">
                            0
                            </span>
                        </p>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="row max-height justify-content center align-items-center">
                        <div class="col-10 mx-auto banner text-center">
                            <h1> Welcome to Brisadonuts</h1>
                        </div>
                    </div>
                </div>
        </header>
        <section class="about py-5" id="about">
            <div class="container">
                <div class="row">
                    <div class="content">
                        <img src="images\botton.png" alt="donuts" class="image-donuts">
                        <div class="text">
                        <h3>"The search for indulgence is over; Brisa Donuts is on!"</h3>
                        <div>
                    </div>
                </div>
            </div>
        </section>

    </body>
</html>