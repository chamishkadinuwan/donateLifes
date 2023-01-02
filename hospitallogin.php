<?php
include "connection.php";

    $hospital_id = $_POST['hid'];
    $hospital_name = $_POST['fname'];
    $email  = $_POST['email'];
    $tp_no = $_POST['tnum'];
    $address = $_POST['address'];
    $password = $_POST['pw'];
    $password1  = $_POST['repassword'];
    
    
     $sql="insert into hospital_sign(hospital_id,hospital_name,email,tp _no,address,password) values(?,?,?,?,?,?)";

    $statement=$connection->prepare ($sql);
            
    $statement -> bind_param("ississ",$hospital_id,$hospital_name,$email,$tp_no,$address,$password);
    
        
        if($password == $password1){
            if($statement->execute()){
             echo "success";

        }else{
            echo "failed";
        }
    }else{
        echo"password don't match";
    }

    ?>