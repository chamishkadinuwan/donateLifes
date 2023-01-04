<?php
include "connection.php";

    $hospital_id = $_POST['hid'];
    $hospital_name = $_POST['fname'];
    $email  = $_POST['email'];
    $tp_no = $_POST['tnum'];
    $address = $_POST['address'];
    $password = $_POST['pw'];
    $password1  = $_POST['repassword'];
    
    
    $sql="insert into hospital_sign values('$hospital_id','$hospital_name','$email','$tp_no','$address','$password')";
    
        
    if($password == $password1){
        if($connection->query($sql) === TRUE){
            echo "succes";
            //header("location:hospitalinfo.php");
        }else{
            echo "failed";
        }
    }else{
        echo"password don't match";
    }

    ?>