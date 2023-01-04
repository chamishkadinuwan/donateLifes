<head>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
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
                echo "<script>Swal.fire(
                    'Success',
                    'Doner details added.',
                    'success'
                  ).then((result) => {
                    if (result.isConfirmed) {
                      window.location.href = 'HomePage.html';
                    }
                  })</script>";

        }else{
            echo "failed";
        }
    }else{
        echo"password don't match";
    }
        
        
       
    


?>