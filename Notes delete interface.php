<?php 
require_once("config.php");
if(isset($_GET['id'])){
    $deleteid=$_GET['id'];


    $deletequery="DELETE FROM notes WHERE id='$deleteid'";
   
    $dresults=mysqli_query($con,$deletequery);

    if($dresults){

        echo'<script>alert("Deleted")</script>';
        echo '<script>window.location.replace("notes.php");</script>';
    }
    else{
        echo "Error";
    }
}