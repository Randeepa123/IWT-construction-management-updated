<?php 

require_once("config.php");

if(isset($_GET['id'])){
    $noteid=$_GET['id'];
    
}
$notefieldread="SELECT * FROM notes WHERE id='$noteid'";
$notereadquery= mysqli_query($con,$notefieldread);

if($notereadquery){
    $row=mysqli_fetch_assoc($notereadquery);

}


 ?>

 <?php 
 if(isset($_POST['noteupdate'])) {

    $catagory=$_POST["ncatogory"];
    $ndate=$_POST["ndate"];
    $note=$_POST["note"];

    $noteupdatequery="UPDATE notes SET catagory='$catagory',notedte='$ndate',note='$note' WHERE id='$noteid' ";
    $noteupdate=mysqli_query($con,$noteupdatequery);

    if($noteupdate){
        echo'<script>alert("Data Updated")</script>';
        echo '<script>window.location.replace("notes.php");</script>';

    }



 }
 
  
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/ADMIN.CSS">
 </head>
 <body>
    

<div class="note">
                <h2>Notes</h2>
                <form action="Notes update interface.php?id=<?php echo $noteid?>" method="post">
                    <label class="nname" >Enter the note catogory</label><input type="text" name="ncatogory" placeholder="Enter Your Note catagory " value= <?php echo $row['catagory'] ;?>>
                    <label class="ndate">Published Date</label><input type="date" name="ndate" placeholder="date"value= <?php echo $row['notedte'] ;?>    >
                <label >Note:</label><textarea id="note-content" placeholder="Write your note here..." name="note"> </textarea>
                <button name="noteupdate">Update</button> 
                </form>
            </div>

    </body>
</html>            