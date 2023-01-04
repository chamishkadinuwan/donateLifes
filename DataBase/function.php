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

    $sql = "INSERT INTO auth_donor VALUES(NULL,'$email','$password','$name',NULL,NULL,NULL,NULL,'$telenumber',NULL,NULL,NULL,NULL,NULL,NULL)";

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

  if (array_key_exists("d_log_in", $_POST)) {
    $email  = $_POST['email'];
    $password  = $_POST['pw'];

    $sql = "SELECT * FROM auth_donor WHERE email='$email' AND password='$password'";

    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
      echo "<script>Swal.fire(
                'Donor Login',
                'Donor login successfully',
                'success'
              ).then((result) => {
                if (result.isConfirmed) {
                  window.location.href = '../DonorInstructions.php';
                }
              })</script>";
    } else {
      echo "<script>Swal.fire(
                'Donor Login',
                'Donor login failed! Check your email address and password',
                'error'
              ).then((result) => {
                if (result.isConfirmed) {
                  window.location.href = '../DonLog&Sign.php';
                }
              })</script>";
    }
  }

  if (array_key_exists("b_sign_up", $_POST)) {
    $name = $_POST['fname'];
    $email  = $_POST['email'];
    $telenumber = $_POST['tnum'];
    $password  = $_POST['pw'];

    $sql = "INSERT INTO auth_beneficiary VALUES(NULL,'$email','$password','$name',NULL,NULL,NULL,NULL,'$telenumber',NULL,NULL,NULL)";

    if ($conn->query($sql) === TRUE) {
      $_SESSION['user_email'] = $email;
      echo "<script>Swal.fire(
                'Beneficiary Registration',
                'Beneficiary registerd successfully',
                'success'
              ).then((result) => {
                if (result.isConfirmed) {
                  window.location.href = '../BeneficiaryInstruction.php';
                }
              })</script>";
    } else {
      echo "<script>Swal.fire(
                'Beneficiary Registration',
                'Beneficiary registerd failed',
                'error'
              ).then((result) => {
                if (result.isConfirmed) {
                  window.location.href = '../BenLog&Sign.php';
                }
              })</script>";
    }
  }

  if (array_key_exists("d_fill_form", $_POST)) {
    $nic = $_POST['NIC'];
    $dob = $_POST['Dob'];
    $gender = $_POST['gender'];
    $district = $_POST['district'];
    $address = $_POST['address'];
    $bg = $_POST['BloodGroup'];
    $typeoforgan = $_POST['organs'];
    $nn = $_POST['nomineename'];
    $nm = $_POST['nomineephonenumber'];
    $comments  = $_POST['comments'];
    $organs = "";
    foreach ($typeoforgan as $value) {
      $organs = $organs . "," . $value;
    }
    if (preg_match("/\b(Full Body)\b/", $organs)) {
      $organs = "Full Body";
    }
    $sql = "UPDATE auth_donor SET nic='$nic',dob='$dob',gender='$gender',address='$address',type_of_organ='$organs',blood_group='$bg',district='$district',nominee_name='$nn',nominee_mobile='$nm',comment='$comments' WHERE email='" . $_SESSION['user_email'] . "'";

    if ($conn->query($sql) === TRUE) {
      echo "<script>Swal.fire(
                'Donor Profile Update',
                'Donor profile update successfully',
                'success'
              ).then((result) => {
                if (result.isConfirmed) {
                  window.location.href = '../pdf.php';
                }
              })</script>";
    } else {
      echo "<script>Swal.fire(
                'Donor Profile Update',
                'Donor profile update failed',
                'error'
              ).then((result) => {
                if (result.isConfirmed) {
                  window.location.href = '../DonorForm.php';
                }
              })</script>";
    }
  }
  if (array_key_exists("b_fill_form", $_POST)) {
    $nic = $_POST['NIC'];
    $dob = $_POST['Dob'];
    $gender = $_POST['gender'];
    $district = $_POST['district'];
    $address = $_POST['address'];
    $bg = $_POST['BloodGroup'];
    $comments  = $_POST['comments'];

    $sql = "UPDATE auth_beneficiary SET nic='$nic',dob='$dob',gender='$gender',address='$address',blood_group='$bg',district='$district',comment='$comments' WHERE email='" . $_SESSION['user_email'] . "'";

    if ($conn->query($sql) === TRUE) {
      echo "<script>Swal.fire(
                'Beneficiary Profile Update',
                'Beneficiary profile update successfully',
                'success'
              ).then((result) => {
                if (result.isConfirmed) {
                  window.location.href = '../BeneficiaryInstruction.php';
                }
              })</script>";
    } else {
      echo "<script>Swal.fire(
                'Beneficiary Profile Update',
                'Beneficiary profile update failed',
                'error'
              ).then((result) => {
                if (result.isConfirmed) {
                  window.location.href = '../BeneficiaryForm.php';
                }
              })</script>";
    }
  }

  ?>
</body>

</html>