<?php 

require_once("config.php");

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $readquery= "SELECT * from project WHERE projectID='$id'" ;
    $results=mysqli_query($con,$readquery);
   

if($results){
    $row=mysqli_fetch_assoc($results);

}

}
 ?>
<?php 


if(isset($_POST['Update'])){

    $name=$_POST["project"];
    $supname=$_POST["Supervisor"];
    $project=$_POST["projectlist"];
    $cost=$_POST["cost"];



    $updatequery="UPDATE project SET proname='$name',supervisor='$supname',cat='$project',estcost='$cost'WHERE projectID='$id'";
    $uresults=mysqli_query($con,$updatequery);

    if($uresults){
        echo'<script>alert("Data Updated")</script>';
        echo '<script>window.location.replace("Project page.php");</script>';

    }

    else{echo "Unsucessful";}}
?>


.<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="stylesheet" href="style/ADMIN.CSS">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


</head>
<body>
   

             
              <div class="project_update">
                    
                <div class="projectform">
                    <form class="projectupdate" action="update interface.php?id=<?php echo $id?>" method="post" >
                        
                            <h2>Project Management</h2>

                        
                            
                               <label for="n">Name:</label> <input type="text"  name="project" placeholder="Enter Project Name" required value="<?php echo $row['proname'];?>">   
                            

                             
                                <label for="s">Supervisor Name:</label> <input type="text"  name="Supervisor" placeholder="Name" required value="<?php echo $row["supervisor"];?>">  
                              

                             
                               <label for="p">Project Type:</label> <input type="text"  name="projectlist" placeholder="Enter the type of your project" required value="<?php echo $row['cat'];?>"> 
                                   
                              
                              
                             
                                  <label for="e">Estimated Cost:</label> <input type="text"  name="cost" placeholder="Enter Cost" required value="<?php echo $row['estcost'];?>"> 
                                  
                             
                                   <button class="Submit" name="Update">Update</button>   
                              

                           
                               
                            
                            
                            
                        
                     
                     </form>
                     
                </div>
            </div>
        </div>


    
</body>
</html>