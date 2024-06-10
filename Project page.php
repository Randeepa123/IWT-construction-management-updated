<?php  
require_once("config.php");
$readquery= "SELECT * from project";
$results=mysqli_query($con,$readquery);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="stylesheet" href="style/ADMIN.CSS">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


</head>
<body>
   <div class="container" >
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="images/LOGO.png" alt="Logo">
                </div>
                
            </div>
            <!-- --all icons are from google-- -->
            <div class="sidebar">
                <a href="admin page.php" >
                    <span class="material-symbols-outlined"> dashboard</span>
                    <h3>dashboard</h3>
                </a>

                <a href="project page.php" class="active">
                    <span class="material-symbols-outlined"> work</span>
                    <h3>Projects</h3>
                </a>

                <a href="notes.php">
                    <span class="material-symbols-outlined"> summarize</span>
                    <h3>Notes</h3>
                </a>
                
                <a href="#">
                    <span class="material-symbols-outlined"> badge</span>
                    <h3>Employees</h3>
                </a>

                
            </div>

        </aside>
    <main>
            
        <div class="action" >
                <div class="profile" onclick="menuToggle();">
                  <img src="images/propic.png" />
                </div>
            <div class="menu">
                  <h3>Admin</h3>
                <ul>
                    
                    <li>
                    <a href="Admineditdetails.php">Edit profile</a>
                    </li>
                    
                    
                    <li>
                    <a href="Terms and conditions.php">Terms and conditions</a>
                    </li>
                    <li>
                    <a href="HOME-PAGE1.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>

              <h1>Projects</h1>
              <div class="project_management">
                    
                <div class="projectform">
                    <form class="projecttable" action="databasecreate.php" method="post">
                        
                            <h2>Project Management</h2>

                        
                            
                               <label for="n">Name:</label> <input type="text"  name="project" placeholder="Enter Project Name" required>   
                            

                             
                                <label for="s">Supervisor Name:</label> <input type="text"  name="Supervisor" placeholder="Name" required>   
                              

                             
                               <label for="p">Project Type:</label> <input type="text"  name="projectlist" placeholder="Enter the type of your project" required>
                                   
                              
                              
                             
                                  <label for="e">Estimated Cost:</label> <input type="text"  name="cost" placeholder="Enter Cost" required>   
                                  
                             
                                   <button class="Submit">Add</button>   
                              

                           
                               
                            
                            
                            
                        
                     
                     </form>
                     
                </div>
            </div>
        </div>
        <h2 id="tablename">Project Management Details</h2>
    <table class="details" >
        

        <tr>
           
            <th>project</th>
            <th>Supervisor</th>
            <th>Project Type</th>
            <th>Estimated Cost</th>  
            <th>Edit</th> 
            <th>Delete</th>                             

        </tr>

        <tr>
            <?php 
                while ($row=mysqli_fetch_assoc($results)){
            ?>        
            
            <td> 
                <?php  
             echo $row ['proname'];
                  ?>
            </td>
            <td> 
                <?php  
             echo $row ['supervisor'];
                  ?>
            </td>
            <td> 
                <?php  
             echo $row ['cat'];
                  ?>
            </td>
            <td> 
                <?php  
             echo $row ['estcost'];
                  ?>
            </td>
        
            <td> 
            <button class="Update"><a href="update interface.php?id=<?php echo $row['projectID']; ?>">Update</a></button>

              
              
            </td>

            <td> 
              <button class="Delete" name="delete"><a href="delete.php?id=<?php echo $row['projectID']; ?>"> Delete</a></button>
            </td>
            
        </tr>  





                <?php  
                }
                ?>
            
            
            
            
        
        
    
    </table>

   
               
<script src="js/script.js"></script>

    
</body>
</html>