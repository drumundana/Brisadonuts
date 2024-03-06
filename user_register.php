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






<script> \*ver essa parte do formulário java*\

    function check(){
        if(window.confrim('Create your account?')){
            return true;
        }
        else{

            window.allert('Your application has been canceled');
            return false;
        }
    }

    function fillRegForm(){
        var reg_fname = document.getElementById('f_name');
        var reg_lname = document.getElementById('l_name');
        var reg_mail = document.getElementById('e_address');
        var reg_phone = document.getElementById('phone_num');
        var reg_usname = document.getElementById('us_name');

        var reg_pass = document.getElementById("pass1");
        var reg_repass = document.getElementById("pass2");

        var reg_button = document.getElementById("register_btn");

        var check1 = false;
        var check2 = false;
        var check3 = false;
        var check4 = false;

        if(reg_fname.value.match(/^([a-zA-Z0-9]{2,})$/)){
            reg_fname.style.border="1px solid #ced4da";
            check1 = true;
        }else{
            reg_fname.style.border="1px solid red";
        }

        if(reg_lname.value.match(/^([a-zA-Z0-9]{2,})$/)){
            reg_lname.style.border="1px solid #ced4da";
            check2 = true;
        }else{
            reg_lname.style.border="1px solid red";
        }

        if(reg_mail.value.match(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/))
        {
            reg_mail.style.border="1px solid #ced4da";
            check3= true;
        }else{
            reg_mail.style.border="1px solid red";
        }
        iif(reg_usname.value.match(/^([a-zA-Z0-9]{6,})$/)){
            reg_usname.style.border="1px solid #ced4da";
        }else{
            reg_usname.style.border="1px solid red";
        }

        if(reg_pass.value.match(/^([a-zA-Z0-9]{6,})$/)){
            reg_pass.style.border="1px solid #ced4da";

             if (reg_pass.value == reg_repass.value){
                    check5 = true;
                    reg_pass.style.border="1px solid #ced4da";
                    reg_repass.style.border="1px solid #ced4da";

                 }else{
                    reg_pass.style.border="1px solid red";
                    reg_repass.style.border="1px solid red";

                }

            }else{
                reg_pass.style.border="1px solid red";
            }
    }

    if(check1 == true && check2 == true && check3 == true && check4 == true && check5 == true){
                reg_button.removeAttribute("disabled");

            }else{
               reg_button.setAttribute("disabled", "disabled");
                }
            
            

        }


        </script>
        <script src="js/function.js"></script>


    </body>

</html>