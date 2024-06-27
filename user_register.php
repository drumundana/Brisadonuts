<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <section>
    <div class="login-box">
        <form action="">
            <h2>User Registration Form</h2>
            <div>
                <label>Name</label>
                <div class="input-box">
                    <input type="firstname" required>
                    <label>First Name</label>
                </div>
                <div class="input-box">
                    <input type="lastname" required>
                    <label>Last Name</label>
                </div>
            </div>
            <div class="input-box">
                <input type="username" required>
                <label>Username</label>
            </div>
            <div class="input-box">
                <input type="email" required>
                <label>Email</label>
            </div>
            <div class="input-box">
                <input type="Phone" required>
                <label>Phone</label>
            </div>
            <div class="input-box">
                <input type="password" required>
                <label>Password</label>
            </div>
            <div class="input-box">
                <input type="confirmpassword" required>
                <label>Confrim Password</label>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
            </div>
            <button type="submit">Register</button>
        </form>
</section>
</body>
</html>