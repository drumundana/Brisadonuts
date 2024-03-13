<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="main_container" id="first_screen">
    <div class="main_sec">
        <div class="right_section">
            <form id="loginform" method="POST" action="login_process.php">
                <div id="formarea">
                    <h1>User Login</h1>
                </div>
                <label for="username">Username</label>
                <input id="username" class="formbox" type="text" name="username" onchange="fillLogForm()">
                     
                <label for="password">Password</label>
                <input id="password" class="formbox" type="password" name="password" onchange="fillLogForm()"> 
                <input type="hidden" name="action" value="doLogin">
                <input class="button" id="login_btn" type="submit" value="Login" name="login" disabled>

                    <p>Don't you have an account? <a class="small_link" href="user_register.php">Sign in</a></p>
            </form>
        </div>
    </div>
</div>
</body>
</html>