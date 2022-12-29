<?php

     include "connection.php";
    
    $name = $_POST['fname'];
    $telenumber = $_POST['telenumber'];
    $NIC = $_POST['NIC'];
    $Dob = $_POST['Dob'];
    $gender =$_POST['gender'];
    $district = $_POST['district'];
    $address = $_POST['address'];
    $typeoforgan = $_POST['typeoforgan'];
    $nomineename = $_POST['nomineename'];
    $nomineephonenumber = $_POST['nomineephonenumber'];
    $email  = $_POST['email'];
    $comments  = $_POST['comments'];
    
    

    
   
    $sql="insert into doner(fname,telenumber,NIC,Dob,gender,district,address,typeoforgan,nomineename,nomineephonenumber,email,comments) values(?,?,?,?,?,?,?,?,?,?,?,?)";

    $statement=$connection->prepare ($sql);
            
    $statement -> bind_param("siissssssiss",$name,$telenumber,$NIC,$Dob,$gender,$district,$address,$typeoforgan,$nomineename,$nomineephonenumber,$email,$comments);
        

        if($statement->execute()){
             echo "<h2>Issuing doner certificate</h2>";

        }else{
            echo "failed";
        }
        
       
    


?>