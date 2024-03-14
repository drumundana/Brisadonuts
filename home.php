<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style/style.css" rel="stylesheet">
        <link href="style/bootstrap.min.css" rel="stylesheet">
        <title>Home</title>
    </head>
    <body class="home">
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
        <section class="store py-5" id="store">
            <div class="container">
            <div class="row">
            <div class="col-10 mx-auto col-md-6 text-center">
            <h1 class="text-capitalize">
            Our <strong class="banner-title">store</strong></h1>
            </div>
            </div>
            </div>
            <div class="row">
    <div class="col-lg-8 col-md-5 mx-auto d-flex justify-content-around sortBtn flex-wrap">
      <a href="#" class="btn btn-black text-uppercase filter-btn m-2">all</a>
      <a href="#" class="btn btn-black text-uppercase filter-btn m-2">cakes</a>
      <a href="#" class="btn btn-black text-uppercase filter-btn m-2">cupcakes</a>
      <a href="#" class="btn btn-black text-uppercase filter-btn m-2">brownies</a>
      <a href="#" class="btn btn-black text-uppercase filter-btn m-2">icecreams</a>
    </div>
    
  </div>
  <div class="row">
    <div class="col-10 mx-auto col-md-6">
      <form>
        <div class="input-group my-3">
        <div class="input-group-prepend">
          <span class="input-group-text search-box" id="search-icon">
            <i class="fa fa-search"></i>
          </span>
        </div>
        <input type="text"  placeholder="Search your cravings.." class="form-control" id="search-item">
      </div>
      </form> 
    </div>
  </div>
<!-- card item area start -->
<div class="row store-item " id="store-item">
<div class="col-10 col-sm-4 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
  <div class="card single-item">
    <div class="img-container">
      <img src="img/sweets-1.jpeg" alt="macaroons" class="card-img-top store-img">
      <span class="store-item-icon">
        <i class="fa fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card=text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name"> macaroons</h5>
        <h5 class="store-item-value"> Rs. <strong id="store-item-price" class="font-weight-bold">250</strong></h5>
      </div>
    </div>
  </div>
</div>


<div class="col-10 col-sm-4 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
  <div class="card single-item">
    <div class="img-container">
      <img src="img/cake-1.jpeg" alt="macaroons" class="card-img-top store-img">
      <span class="store-item-icon">
        <i class="fa fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card=text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">cakes</h5>
        <h5 class="store-item-value"> Rs. <strong id="store-item-price" class="font-weight-bold">1600</strong></h5>
      </div>
    </div>
  </div>
</div>

<div class="col-10 col-sm-4 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
  <div class="card single-item">
    <div class="img-container">
      <img src="img/doughnut-2.jpeg" alt="macaroons" class="card-img-top store-img">
      <span class="store-item-icon">
        <i class="fa fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card=text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name"> Donuts</h5>
        <h5 class="store-item-value"> Rs. <strong id="store-item-price" class="font-weight-bold">250</strong></h5>
      </div>
    </div>
  </div>
</div>

<div class="col-10 col-sm-4 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
  <div class="card single-item">
    <div class="img-container">
      <img src="img/cupcake-1.jpeg" alt="macaroons" class="card-img-top store-img">
      <span class="store-item-icon">
        <i class="fa fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card=text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name"> Cupcakes</h5>
        <h5 class="store-item-value"> Rs. <strong id="store-item-price" class="font-weight-bold">300</strong></h5>
      </div>
    </div>
  </div>
</div>

<div class="col-10 col-sm-4 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
  <div class="card single-item">
    <div class="img-container">
      <img src="img/sweets-2.jpeg" alt="macaroons" class="card-img-top store-img">
      <span class="store-item-icon">
        <i class="fa fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card=text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name"> sweets</h5>
        <h5 class="store-item-value"> Rs. <strong id="store-item-price" class="font-weight-bold">400</strong></h5>
      </div>
    </div>
  </div>
</div>

<div class="col-10 col-sm-4 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
  <div class="card single-item">
    <div class="img-container">
      <img src="img/sweets-3.jpeg" alt="macaroons" class="card-img-top store-img">
      <span class="store-item-icon">
        <i class="fa fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card=text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name"> chocolates</h5>
        <h5 class="store-item-value"> Rs. <strong id="store-item-price" class="font-weight-bold">150</strong></h5>
      </div>
    </div>
  </div>
</div>
</div>
  

<!-- card item area end -->

  </section>
<!-- end of our store section  -->
<!-- start of services section-->

  <section class="services py-5" id="service">
    <div class="container">
      <div class="row">
        <div class="col-10 mx-auto col-md-6 text-center">
          <h1 class="text-capitalize">
            Our <strong class="banner-title">Services</strong>
          </h1>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 mx-auto my-3 text-center">
            <img src="img/bread-icon.png" alt="bread">
            <h6 class="text-uppercase my-3 service-title" >bread</h6>
            <p class=" w-75 mx-auto my-3 sercive-body">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. 
          </div>
          <div class="col-md-4 mx-auto my-3 text-center">
          <img src="img/services/cupcake-icon.png" alt="cupcakes">
          <h6 class="text-uppercase my-3 service-title" >cupcakes</h6>
          <p class=" w-75 mx-auto my-3 sercive-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. 
          </p>
        </div>
          <div class="col-md-4 mx-auto my-3 text-center">
          <img src="img/services/donut-icon.png" alt="donuts">
          <h6 class="text-uppercase my-3 service-title" >donuts</h6>
          <p class=" w-75 mx-auto my-3 sercive-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. 
          </p>
        </div>
         <div class="col-md-4 mx-auto my-3 text-center">
          <img src="img/services/macaroon-icon.png" alt="macaroons">
          <h6 class="text-uppercase my-3 service-title" >macaroons</h6>
          <p class=" w-75 mx-auto my-3 sercive-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. 
          </p>
        </div>
         <div class="col-md-4 mx-auto my-3 text-center">
          <img src="img/services/cookie-icon.png" alt="cookie">
          <h6 class="text-uppercase my-3 service-title" >cookies</h6>
          <p class=" w-75 mx-auto my-3 sercive-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. 
          </p>
        </div>
         <div class="col-md-4 mx-auto my-3 text-center">
          <img src="img/services/bdaycake-icon.png" alt="cakes">
          <h6 class="text-uppercase my-3 service-title" >cakes</h6>
          <p class=" w-75 mx-auto my-3 sercive-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. 
          </p>
        </div>
      </div>
    </div>

  </section>


<!-- end of services section-->
<!-- start of order section-->

<section class="orderCake py-5" id="order">
   <div class="container">
      <div class="row">
        <div class="col-10 mx-auto col-md-6 text-center">
          <h1 class="text-capitalize">
            Order <strong class="banner-title">cakes</strong>
          </h1>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-11 mx-auto col-md-6 col-lg-4 text-capitalize text-center">
          <h3 class="py-3">birthday cakes</h3>
          <div class="text-muted">
            <p class="py-1">Lorem ipsum dolor sit amet.</p>
            <p class="py-1">Lorem ipsum dolor sit amet.</p>
            <p class="py-1">Lorem ipsum dolor sit amet.</p>
            <button class="btn btn-black">Order<span class="text-lowercase">(starting at just rs. 800)</span></button>
            <img src="img/trans-cake.png" class="img-fluid py-2">
          </div>
        </div>
        <div class="col-11 mx-auto col-md-6 col-lg-4 text-capitalize text-center">
          <h3 class="py-3">custom cakes</h3>
          <div class="text-muted">
            <p class="py-1">Lorem ipsum dolor sit amet.</p>
            <p class="py-1">Lorem ipsum dolor sit amet.</p>
            <p class="py-1">Lorem ipsum dolor sit amet.</p>
            <button class="btn btn-black">Order<span class="text-lowercase">(starting at just rs. 1200)</span></button>
            <img src="img/trans-custom.png" class="img-fluid py-2">
          </div>
        </div>
        <div class="col-11 mx-auto col-md-6 col-lg-4 text-capitalize text-center">
          <h3 class="py-3">wedding cakes</h3>
          <div class="text-muted">
            <p class="py-1">Lorem ipsum dolor sit amet.</p>
            <p class="py-1">Lorem ipsum dolor sit amet.</p>
            <p class="py-1">Lorem ipsum dolor sit amet.</p>
            <button class="btn btn-black">Order<span class="text-lowercase">(starting at just rs. 3000)</span></button>
            <img src="img/trans-wedding.png" class="img-fluid py-2">
          </div>
        </div>
      </div>
    </div>
  
</section>


<!-- end of orders section-->
<!-- start of footer-->

<footer>
  <div class="container-fluid">
    <div class="row">
    <div class="col-md-6 footer py-5">
      <h1 class="text-capitalize text-center">
        <strong class="banner-title">sweet cravings</strong>
      </h1>
      <div class="footer-icons my-5 d-flex justify-content-around flex-wrap">
        <a href="#" class="footer-icon">
          <i class="fab fa-facebook"></i>
        </a>
        <a href="#" class="footer-icon">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="#" class="footer-icon">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="footer-icon">
          <i class="fab fa-google-plus"></i>
        </a>
      </div>

  </div>
  <div class="footer-contact col-md-6  text-center p-5">
    <h3 class="mb-5 text-capitalize"><b>contact</b></h3>
    <p class="d-flex flex-wrap">
      <span class="mr-5 footer-icon">
        <i class="fa fa-map"></i>
      </span>
      <span class="text-capitalize">Janardan Nagar,Lohegaon ,Pune-411047</span>
    </p>
    <p class="d-flex flex-wrap">
      <span class="mr-5 footer-icon">
        <i class="fa fa-phone"></i>
      </span>
      <span class="text-capitalize">
        +91 9411 852 481
        
        </span>
    </p>
    <p class="d-flex flex-wrap">
      <span class="mr-5 footer-icon">
        <i class="fa fa-envelope"></i>
      </span>
      <span>sweetcravings@gmail.com</span>
    </p>
  </div>
</div>
    </div>
  
</footer>

<!-- end of footer-->
  



  <!-- jquery -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- script js -->
  <script src="js/app.js"></script>
</body>

</html>

    </body>
</html>