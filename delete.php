
<?php 
require_once("config.php");
if(isset($_GET['id'])){
    $deleteid=$_GET['id'];


    $deletequery="DELETE FROM project WHERE projectID='$deleteid'";
   
    $dresults=mysqli_query($con,$deletequery);

    if($dresults){

        echo'<script>alert("Deleted")</script>';
        echo '<script>window.location.replace("Project page.php");</script>';
    }
    else{
        echo "Error";
    }
}












; ?>
