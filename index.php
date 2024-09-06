<?php
include_once 'config/settings-configuration.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/css/style.css">
</head>
<body>
    <div class = "wrapper">

    <h1>Sign In</h1>
    <form action="dashboard/admin/authentication/admin-class.php" method="POST">
    <input type="hidden" name="csrf_token" value="<?php echo $csrf_token;?>">

    <div class="input-box" >
    <input type="email" name="email" placeholder="Enter Email" required><br>
    </div>

    <div class="input-box">
    <input type="password" name="password" placeholder="Enter Password" required><br>
    </div>
    <button type="submit" name="btn_signin" class="btn">Sign In</button>

    
    </form>


    <h1>REGISTRATION</h1>
    <form action="dashboard/admin/authentication/admin-class.php" method="POST">
    <input type="hidden" name="csrf_token" value="<?php echo $csrf_token;?>">

    <div class="input-box" >
    <input type="text" name="username" placeholder="Enter Username" required><br>
    </div>
    <div class="input-box" >
    <input type="email" name="email" placeholder="Enter Email" required><br>
    </div>
    <div class="input-box" >
    <input type="password" name="password" placeholder="Enter Password" required><br>
    </div>
    <button type="submit" name="btn_signup" class="btn">Sign Up</button>
    </div>
    </form>
</body>
</html>