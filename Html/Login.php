<?php
    include("../PHP/LoginDB.php");
    include("../PHP/SignupDB.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/Website/Css/Login.css">
</head>
<body>
    <body>
        <div class="main">  	
            <input type="checkbox" id="chk" aria-hidden="true">
    
                <div class="signup">
                    <form action="" method="post" enctype="application/x-www-form-urlencoded">
                        <label for="chk" aria-hidden="true">Sign up</label>
                        <input type="text" name="user" placeholder="User name" required="">
                        <input type="email" name="email" placeholder="Email" required="">
                        <input type="password" name="password" placeholder="Password" required="">
                        <button type="submit" name="Signup">Sign up</button>
                    </form>
                </div>
    
                <div class="login">
                    <form method="post">
                        <label for="chk" aria-hidden="true">Login</label>
                        <input type="email" name="email" placeholder="Email" required="">
                        <input type="password" name="password" placeholder="Password" required="">
                        <button type="submit" name="Login">Login</button>
                    </form>
                </div>
        </div>
</body>
</html>