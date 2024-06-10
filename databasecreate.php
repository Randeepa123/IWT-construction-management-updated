<?php 
 require_once ("config.php");




 $name=$_POST["project"];
 $supname=$_POST["Supervisor"];
 $project=$_POST["projectlist"];
 $cost=$_POST["cost"];

 $sql= "INSERT INTO project (proname,supervisor,cat,estcost) VALUES ('$name','$supname','$project','$cost')";
 

 if(mysqli_query($con,$sql)){

  echo'<script>alert("Data Added")</script>';
  echo '<script>window.location.replace("Project page.php");</script>';
 }
 else{
  echo"Error";
}


 
 mysqli_close ($con);
 ?>
