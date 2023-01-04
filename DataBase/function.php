<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body style="background-image: url(../Images/BGPic.jpg); background-size: cover;" class=" m-0 border-0">

    <?php
    include("dbconn.php");

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (array_key_exists("d_sign_up", $_POST)) {
        $name = $_POST['fname'];
        $email  = $_POST['email'];
        $telenumber = $_POST['tnum'];
        $password  = $_POST['pw'];

        $sql = "INSERT INTO auth_donor VALUES(NULL,'$email','$password','$name',NULL,NULL,NULL,NULL,'$telenumber',NULL,NULL,NULL,NULL,NULL)";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['user_email'] = $email;
            echo "<script>Swal.fire(
                'Donor Registration',
                'Donor registerd successfully',
                'success'
              ).then((result) => {
                if (result.isConfirmed) {
                  window.location.href = '../DonorInstructions.php';
                }
              })</script>";
        } else {
            echo "<script>Swal.fire(
                'Donor Registration',
                'Donor registerd failed',
                'error'
              ).then((result) => {
                if (result.isConfirmed) {
                  window.location.href = '../DonLog&Sign.php';
                }
              })</script>";
        }
    }

    ?>
</body>

</html>