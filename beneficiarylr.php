<html>
<head>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    

<?php

     include "connection.php";
    
    $name = $_POST['fname'];
    $email  = $_POST['email'];
    $telenumber = $_POST['tnum'];
    $password  = $_POST['pw'];
    $password1  = $_POST['repassword'];

    
    $sql="insert into logandreg(name,email,telenumber,password) values(?,?,?,?)";

    $statement=$connection->prepare ($sql);
            
    $statement -> bind_param("ssis",$name,$email,$telenumber,$password);
        
        if($password == $password1){
            if($statement->execute()){
                echo "<script>Swal.fire(
                    'Success',
                    'beneficiary details added.',
                    'success'
                  ).then((result) => {
                    if (result.isConfirmed) {
                      window.location.href = 'HomePage.html';
                    }

                  })</script>";
            

        }else{
            echo "<script>Swal.fire(
                'Success',
                'beneficiary details added.',
                'success'
              ).then((result) => {
                if (result.isConfirmed) {
                  window.location.href = '';
                }
              })</script>";
        }
    }else{
        echo"password don't match";
    }
        
        
       
    


?></body>
</html>
