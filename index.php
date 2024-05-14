<?php include('connection.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width,initial-scale=1.0">
    <title>Login and Registration Form in HTML and CSS</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <div class="wrapper">
        <span class="bg-animate"></span>
        <span class="bg-animate2"></span>

        <div class="form-box login">
            <h2 class="animation" style="--i:0; --j:21;">Login</h2>
            <form method="post" action="login.php">
                <div class="input-box animation" style="--i:1; --j:22;">
                    <input type="text" name="Username" placeholder="Username">
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box animation" style="--i:2; --j:23;">
                    <input type="password" name="Password" placeholder="Password">
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button type="submit" class="btn animation" style="--i:3; --j:24;">Login</button>
                <div class="logreg-link animation" style="--i:4; --j:25;">
                    <p>Don't have an account? <a href="#" class="register-link">Sign Up</a></p>
                </div>
            </form>
        </div>
        <div class="info-text login">
            <h2 class="animation" style="--i:0; --j:20;">Welcome back!</h2>
            <p class="animation" style="--i:1; --j:21;"></p>
        </div>

        <div class="form-box register">
            <h2 class="animation"  style="--i:17; --j:0;">Sign Up</h2>
            <form method="post" action="connection.php" name="Formfill" onsubmit="return validation()">
                <div class="input-box animation" style="--i:18; --j:1;">
                    <p id="result">Enter Username</p>
                    <input type="text" name="username" placeholder="username">
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box animation" style="--i:19; --j:2;">
                    <input type="email"  name="email" placeholder="email">
                    <i class='bx bxs-envelope' ></i>
                </div>
                <div class="input-box animation" style="--i:20; --j:3;">
                    <input type="password" name="password" placeholder="password">
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button type="submit" class="btn animation" style="--i:21; --j:4;">Sign Up</button>
                <div class="logreg-link animation" style="--i:22; --j:5;">
                    <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
        <div class="info-text register">
            <h2 class="animation" style="--i:17; --j:0;">Create Your New Account!</h2>
            <p class="animation" style="--i:18; --j:1;"></p>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
