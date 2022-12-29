<?php

$servername="localhost";
$user="root";
$password="";
$db="donatelife";

$connection=new mysqli($servername,$user,$password,$db);

if($connection -> connect_error){
	die("connection error");
}else{
	echo "connection ok";
}

?>