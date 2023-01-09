<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../Images/Icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<section class="vh-100 gradient-custom">
        <link rel="stylesheet" type="text/css" href="mystyle.css">
    <title>Admin</title>
</head>
<body>

<div class="wrapper">
        <div class="logo">
            <img src="../Images/icon.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            Admin Pannel
        </div>
        <form action="AdPanViewBen.php" method="post" class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="userName" id="userName" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <button class="btn mt-3" name="admin" type="submit">Login</button>
        </form>
        <div class="text-center fs-6">
            <a href="#">Forget password?</a> or <a href="#">Sign up</a>
        </div>
    </div>





</body>
</html>