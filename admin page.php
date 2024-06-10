
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
                <a href="admin page.php" class="active">
                    <span class="material-symbols-outlined"> dashboard</span>
                    <h3>dashboard</h3>
                </a>

                <a href="project page.php">
                    <span class="material-symbols-outlined"> work</span>
                    <h3>Projects</h3>
                </a>

                <a href="notes.php">
                    <span class="material-symbols-outlined"> summarize</span>
                    <h3>Notes</h3>
                </a>
                
                <a href="management.php">
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
               

            <h1>Dashboard</h1>
            <div class="projects">
                <div class="project1">
                    <h2>Project 1</h2>
                    <img class="p1img" src="images/excavator-action.jpg" alt="img1">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In repudiandae consequatur nesciunt adipisci dolorum culpa earum id beatae at quaerat esse maxime, dolores fugit eveniet perferendis placeat debitis natus nisi?</p>
                </div>
                <div class="project2">
                    <h2>Project 2</h2>
                    <img class="p1img" src="images/con3.jpg" alt="img2">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In repudiandae consequatur nesciunt adipisci dolorum culpa earum id beatae at quaerat esse maxime, dolores fugit eveniet perferendis placeat debitis natus nisi?</p>
                </div>
                <div class="project3">
                    <h2>Project 3</h2>
                    <img class="p1img" src="images/con4.jpg" alt="img3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In repudiandae consequatur nesciunt adipisci dolorum culpa earum id beatae at quaerat esse maxime, dolores fugit eveniet perferendis placeat debitis natus nisi?</p>
                </div>
                <div class="project4">
                    <h2>Project 4</h2>
                    <img class="p1img" src="images/conimage2.jpg" alt="img4">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In repudiandae consequatur nesciunt adipisci dolorum culpa earum id beatae at quaerat esse maxime, dolores fugit eveniet perferendis placeat debitis natus nisi?</p>
                </div>

            </div>
            <div class="management">
                <div class="employee_management">
                    
                    <div class="employeeform">
                        <form class="emptable" action="employeetable.php" method="post">
                            
                                <h2>Employee Management</h2>

                            <table >
                                <tr>
                                    <td>Name:</td>
                                    <td><input type="text" name="name" placeholder="Enter Your Name" required></td>
                                </tr>

                                <tr>
                                    <td>Phone number:</td>
                                    <td><input type="phonenum" name="phonenumber" placeholder="Enter Contact Number" required></td>
                                </tr>

                                <tr>
                                 <td>Gender:</td>
                                    <td><input type="radio" name="gender" required>male
                                    <td><input type="radio" name="gender" required>Female    
                                </tr>

                                <tr>
                                    <td>Email:</td>
                                    <td><input type="email" name="email" placeholder="Email" required></td>
                                </tr>

                                <tr>
                                    <td>Project:</td required>
                                    <td>
                                    <select >
                                            <option>project 1</option>
                                            <option>project 2</option>
                                            <option>project 3</option>
                                            <option>project 4</option>
                                        </select>
                                    </td>
                                <tr><td><button class="Submit">Add</button></td></tr>
                                
                                
                            </table>
                         
                         </form>
                                 
                    </div>
                </div>
                

                <div class="project_management">
                    
                <div class="projectform">
                    <form class="projecttable" action="databasecreate.php" method="post">
                        
                            <h2>Project Management</h2>

                        
                            
                               <label for="n">Name:</label> <input type="text" name="project" placeholder="Enter Project Name" required>   
                            

                             
                                <label for="s">Supervisor Name:</label> <input type="text" name="Supervisor" placeholder="Name" required>   
                              

                             
                               <label for="p">Project Type:</label> <input type="text" name="projectlist" placeholder="Enter the type of your project" required>
                                   
                              
                              
                             
                                  <label for="e">Estimated Cost:</label> <input type="text"  name="cost" placeholder="Enter Cost" required>   
                                  
                             
                                   <button class="Submit">Add</button>   
                              

                           
                               
                            
                            
                            
                        
                     
                     </form>
                     
                </div>
                </div>
            </div>
                
            <div class="note">
                <h2>Notes</h2>
                <textarea id="note-content" placeholder="Write your note here..."></textarea>
                <button onclick="saveNote()">Save</button>
            </div>
                     

        </main>
        
        
        

    </div>





   

 <script src="js/script.js"></script>
</body>
</html>