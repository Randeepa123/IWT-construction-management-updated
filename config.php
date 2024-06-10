<?php 
$servername="localhost";
$username="root";
$password="";
$database="database";

//new connection
$con= new mysqli($servername,$username,$password,$database);



//check connection
if(!$con){
die("connection failed".mysqli_connect_error());
}
else{
    
}


 ?>
