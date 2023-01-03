<?php

     include "connection.php";
    
    $name = $_POST['fname'];
    $email  = $_POST['email'];
    $telenumber = $_POST['tnum'];
    $password  = $_POST['pw'];
    $password1  = $_POST['repassword'];

    
    $sql="insert into logdoner(name,email,telenumber,password) values(?,?,?,?)";

    $statement=$connection->prepare ($sql);
            
    $statement -> bind_param("ssis",$name,$email,$telenumber,$password);
        
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