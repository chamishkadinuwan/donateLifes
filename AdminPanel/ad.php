
<?php 
include("../Database/dbconn.php");

    if (array_key_exists("admin", $_POST)) {
      echo "lo";
        $email  = $_POST['userName'];
        $password  = $_POST['password'];
        $password = md5($password);
        $sql = "SELECT * FROM auth_admin WHERE userName ='$email'";
    
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
          header("location:AdPanDashBoard.php");
        } else {
          header("location:index.php");
        }
      }
?>