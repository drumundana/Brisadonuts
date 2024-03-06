<?php
session_start();

if(isset($_POST['action']) && $_POST['action'] == 'doLogin') {
 
    $uName = $_POST['username'];
    $uPassword = $_POST['password'];

    $db_host = '3306';
    $db_user = 'mboing';
    $db_pass = '1234';
    $db_name = 'brisadonuts';
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (!$conn) {
        die("Erro de conexão: " . mysqli_connect_error());
    }
    $query = "SELECT * FROM Ipa_users WHERE username = '$uName' AND password = '$uPassword'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['authUser'] = $uName;
        header("Location: index.php");
        exit;
    } else {
        $_SESSION['message'] = "Login failed! Please try again.";
        header("Location: {$_SERVER['PHP_SELF']}");
        exit;
    }
}
?>

<!DOCTYPE htlm>
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

    <footer>
        <p>&copy; 2023 Brisa Donuts. All rights reserved.</p>
        <p>contato@brisadonuts.com</p>
    </footer>
</div>
</body>
</html>