<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <title>User Register</title>
</head>
<body>
    <div class="main_container">
    <?php
    include 'header.php'
    ?>
    <div class="main_sec">
        <div class="right_section">
            <form class="customerform" id="regi_form"
action="../controllor/regi_process.php" method="POST">
                <div id="formarea">
                    <h1>User Register</h1>
                </div>          
                <section>
                    <div>
                         <label for="f_name" class="r_form">Full name</label>
                         <input id="f_name" class="formbox" type="text" name="" onchange="fillRegForm()">

                         <label for="email" class="r_form">Email</label>
                         <input id="email" class="formbox" type="text" required>
                         

                         <label for="phone" class="r_form">Phone</label>
                         <input id="phone" class="formbox" type="phone" pattern="[0-9]{10}" required>
                     

                         <label for="pass1">Password</label>
                         <input id="pass1" class="formbox" type="password" name="pass2" onchange="fillRegForm()" placeholder="Minimum 6 digits">

                         <label for="pass2">Confirmation Password</label>
                         <input id="pass2" class="formbox" type="password" name="pass2" onchange="fillRegForm()">
                         <input class="button" id="register_btn" type="submit" value="Register" name="register" disabled>    

                    </div>
                </section>
                <p>Do you have an account? <a class="small_link" href="User_login.php">Login in</a></p>
            </form> 
        </div>
    </div>
</div>

</html>