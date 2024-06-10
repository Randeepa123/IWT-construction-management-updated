<?php  

require_once("config.php");

if (isset($_POST['save'])){

    $nname=$_POST['ncatogory'];
    $ndate=$_POST['ndate'];
    $nnote=$_POST['note'];

    $notecreate="INSERT into  notes (catagory,notedte,note) values('$nname','$ndate','$nnote')";

    $ncreatequery=mysqli_query($con,$notecreate);

    if($ncreatequery){
        echo'<script>alert("Note Added")</script>';
        echo '<script>window.location.replace("notes.php");</script>';

    }


}
?>
<?php 
$noteread="SELECT * FROM notes";
$notesredquery=mysqli_query($con,$noteread);

 ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Management System</title>
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

                <a href="project page.php">
                    <span class="material-symbols-outlined"> work</span>
                    <h3>Projects</h3>
                </a>

                <a href="notes.php" class="active">
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
            
            <div class="action">
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
               

                
            <div class="note">
                <h2>Notes</h2>
                <form action="notes.php" method="post">
                    <label class="nname" >Enter the note catogory</label><input type="text" name="ncatogory" placeholder="Enter Your Note catagory">
                    <label class="ndate">Published Date</label><input type="date" name="ndate" placeholder="date">
                <label >Note:</label><textarea id="note-content" placeholder="Write your note here..." name="note"></textarea>
                <button name="save">Save</button>
                </form>
            </div>
                     

        </main>
        
        
        
        

    </div>

    <table>

        <tr>
            <th>Subject</th>
            <th>Date added</th>
            <th>Note</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <tr>
     <?php  
        
        while($row=mysqli_fetch_assoc($notesredquery)){

     ?>
     <td>
        <?php 
        
        echo $row['catagory'];
        
        ?>
        
     </td>
     <td>
        <?php 
        
        echo $row['notedte'];
        
        ?>
        
     </td>
     <td>
        <?php 
        
        echo $row['note'];
        
        ?>
        
     </td>
            <td><button class="Update"><a href="Notes update interface.php?id=<?php echo $row['id']; ?>">Update</a></button></td>
            <td><button class="Delete" name="delete"><a href="Notes delete interface.php?id=<?php echo $row['id']; ?>"> Delete</a></button></td>
     </tr>





<?php }  ?>


        </table>



   
        <script src="js/script.js"></script>
</body>
</html>