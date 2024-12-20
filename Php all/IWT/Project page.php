<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


</head>
<body>
   <div class="container" >
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="images/Image.png" alt="Logo">
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

                <a href="#">
                    <span class="material-symbols-outlined"> summarize</span>
                    <h3>Reports</h3>
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
                  <img src="/images/propic.png" />
                </div>
                <div class="menu">
                  <h3>Admin</h3>
                  <ul>
                    
                    <li>
                      <a href="#">Edit profile</a>
                    </li>
                    
                    
                    <li>
                        <a href="#">Terms and conditions</a>
                    </li>
                    <li>
                      <a href="#">Logout</a>
                    </li>
                  </ul>
                </div>
              </div>

              <h1>Projects</h1>
              <div class="project_management">
                    
                <div class="projectform">
                    <form class="projecttable" action="projects database read.php" method="post">
                        
                            <h2>Project Management</h2>

                        <table >
                            <tr>
                                <td>Name:</td>
                                <td><input type="text" name="project" placeholder="Enter Project Name" required></td>
                            </tr>

                            <tr>
                                <td>Supervisor Name:</td>
                                <td><input type="text" name="Supervisor" placeholder="Name" required></td>
                            </tr>

                            <tr>
                                <td>Project Type:</td required>
                                <td>
                                <select >
                                        <option>project 1</option>
                                        <option>project 2</option>
                                        <option>project 3</option>
                                        <option>project 4</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Estimated Cost:</td>
                                <td><input type="text" name="project" placeholder="Enter Cost" required></td>
                            </tr>    
                            <tr>
                                <td><button class="Submit">Add</button></td>
                            </tr>
                            
                            
                        </table>
                     
                     </form>
                             
                </div>
            </div>
        </div>
               
<script src="/script.js"></script>