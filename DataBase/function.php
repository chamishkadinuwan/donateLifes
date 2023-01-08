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
    $password = md5($password);
    $sql = "INSERT INTO auth_donor VALUES(NULL,'$email','$password','$name',NULL,NULL,NULL,NULL,'$telenumber',NULL,NULL,NULL,NULL,NULL,NULL)";

    if ($conn->query($sql) === TRUE) {
      $_SESSION['user_email'] = $email;
      $_SESSION['user_type'] = "D";
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
    $password = md5($password);
    $sql = "SELECT * FROM auth_donor WHERE email='$email' AND password='$password'";

    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
      $_SESSION['user_email'] = $email;
      $_SESSION['user_type'] = "D";
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
  if (array_key_exists("b_log_in", $_POST)) {
    $email  = $_POST['email'];
    $password  = $_POST['pw'];
    $password = md5($password);
    $sql = "SELECT * FROM auth_beneficiary WHERE email='$email' AND password='$password'";

    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
      $_SESSION['user_email'] = $email;
      $_SESSION['user_type'] = "B";
      echo "<script>Swal.fire(
                'Beneficiary Login',
                'Beneficiary login successfully',
                'success'
              ).then((result) => {
                if (result.isConfirmed) {
                  window.location.href = '../BeneficiaryInstruction.php';
                }
              })</script>";
    } else {
      echo "<script>Swal.fire(
                'Beneficiary Login',
                'Beneficiary login failed! Check your email address and password',
                'error'
              ).then((result) => {
                if (result.isConfirmed) {
                  window.location.href = '../BenLog&Sign.php';
                }
              })</script>";
    }
  }
  if (array_key_exists("h_log_in", $_POST)) {
    $email  = $_POST['email'];
    $password  = $_POST['pw'];
    $password = md5($password);
    $sql = "SELECT * FROM auth_hospital WHERE email='$email' AND password='$password'";

    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
      $_SESSION['user_email'] = $email;
      $_SESSION['user_type'] = "H";
      echo "<script>Swal.fire(
                'Hospital Login',
                'Hospital login successfully',
                'success'
              ).then((result) => {
                if (result.isConfirmed) {
                  window.location.href = '../HospitalMenu.php';
                }
              })</script>";
    } else {
      echo "<script>Swal.fire(
                'Hospital Login',
                'Hospital login failed! Check your email address and password',
                'error'
              ).then((result) => {
                if (result.isConfirmed) {
                  window.location.href = '../HospitalLog&Sign.php';
                }
              })</script>";
    }
  }

  if (array_key_exists("b_sign_up", $_POST)) {
    $name = $_POST['fname'];
    $email  = $_POST['email'];
    $telenumber = $_POST['tnum'];
    $password  = $_POST['pw'];
    $password = md5($password);
    $sql = "INSERT INTO auth_beneficiary VALUES(NULL,'$email','$password','$name',NULL,NULL,NULL,NULL,'$telenumber',NULL,NULL,NULL)";

    if ($conn->query($sql) === TRUE) {
      $_SESSION['user_email'] = $email;
      $_SESSION['user_type'] = "B";
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

  if (array_key_exists("h_sign_up", $_POST)) {
    $hospital_id = $_POST['hid'];
    $hospital_name = $_POST['fname'];
    $email  = $_POST['email'];
    $tp_no = $_POST['tnum'];
    $address = $_POST['address'];
    $password = $_POST['pw'];
    $password = md5($password);
    $sql = "INSERT INTO auth_hospital VALUES(NULL,'$email','$password','$hospital_name','$address','$tp_no')";

    if ($conn->query($sql) === TRUE) {
      $_SESSION['user_email'] = $email;
      $_SESSION['user_type'] = "H";
      echo "<script>Swal.fire(
                'Hospital Registration',
                'Hospital registerd successfully',
                'success'
              ).then((result) => {
                if (result.isConfirmed) {
                  window.location.href = '../HospitalMenu.php';
                }
              })</script>";
    } else {
      echo "<script>Swal.fire(
                'Hospital Registration',
                'Hospital registerd failed',
                'error'
              ).then((result) => {
                if (result.isConfirmed) {
                  window.location.href = '../HospitalLog&Sign.php';
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
                  window.location.href = '../DonorCard/donorCard.php?nic='.$nic;
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

  if (array_key_exists("getDonerInfo", $_POST)) {

    $nic = $_POST['nic'];
    $data = "";
    $sql = "SELECT * FROM auth_donor WHERE nic='$nic'";
    $result = $__conn->query($sql);
    if ($result->num_rows == 1) {
      $row = $result->fetch_assoc();
      $data = ['code' => 'code_2', 'user_id' => $row['id']];
    } else {
      $data = ['code' => 'code_1'];
    }
    header('Content-type: application/json');
    echo json_encode($data);
  }



  ?>
</body>

</html>