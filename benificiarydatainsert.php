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
    $email  = $_POST['email'];
    $comments  = $_POST['comments'];
           
    $sql="insert into beneficiary (fullname,tpnumber,NIC,dob,gender,district,address,typeoforgan,email,comments) values(?,?,?,?,?,?,?,?,?,?)";

    $statement=$connection->prepare ($sql);
            
    $statement -> bind_param("siisssssss",$name,$telenumber,$NIC,$Dob,$gender,$district,$address,$typeoforgan,$email,$comments);
        

        if($statement->execute()){
             echo "Data insert success";

        }
        else{
            echo "failed";
        }

    // $sql = "INSERT INTO beneficiary VALUES('$name','$telenumber','$NIC','$Dob','$gender','$district','$address','$typeoforgan','$email','$comments')";
    // $connection->query($sql);
       
    


?>