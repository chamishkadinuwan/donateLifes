<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body style="background-image: url(../Images/BGPic.jpg); background-size: cover;" class=" m-0 border-0">

    <?php
    include("dbconn.php");

    if (array_key_exists("d_sign_up", $_POST)) {
        $name = $_POST['fname'];
        $email  = $_POST['email'];
        $telenumber = $_POST['tnum'];
        $password  = $_POST['pw'];
        $password1  = $_POST['repassword'];
    }

    ?>
</body>

</html>