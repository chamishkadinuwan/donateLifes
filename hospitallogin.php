<?php

$connection=new mysqli("localhost","root","","donatelife");

    $email  = $_POST['email'];      
    $password  = $_POST['pw']; 

   if($connection -> connect_error){
    die("connection error");
  }else{
    $statement=$connection->prepare ("select * from hospital_sign where email = ?");
    $statement -> bind_param("s",$email);
    $statement ->execute();
    $stmt_result=$statement ->get_result();

    if($stmt_result -> num_rows >0){
        $data=$stmt_result ->fetch_assoc();
        if($data['password']==$password){
           session_start();
           $_SESSION['pass']=$data['password'];
              header("location:HospitalInfo.php");
            

        }else{
             
             $alert="<script>alert('Invalid username or Password !');</script>";
             echo $alert;

             

        }

    }else{
        echo "<h2>Invalid username or password</h2>";
    }
  }
    


?>