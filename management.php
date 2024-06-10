<?php
// Database connection
$connection = mysqli_connect("localhost", "root", "", "database");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// CREATE operation
if(isset($_POST['create'])) {
    $name = $_POST['e_name'];
    $email = $_POST['e_email'];
    $address = $_POST['e_address'];
    
    $sql = "INSERT INTO employee (e_name, e_email, e_address) VALUES ('$name', '$email', '$address')";
    
    if(mysqli_query($connection, $sql)) {
        echo "<script>alert('New record created successfully')</script>";
    } else {
        echo "<script>alert('Error: ')</script>" . $sql . "<br>" . mysqli_error($connection);
    }
}

// READ operation
$sql = "SELECT * FROM employee";
$result = mysqli_query($connection, $sql);

// UPDATE operation
if(isset($_POST['update'])) {
    $id = $_POST['e_id'];
    $name = $_POST['e_name'];
    $email = $_POST['e_email'];
    $address = $_POST['e_address'];
    
    $sql = "UPDATE employee SET e_name='$name', e_email='$email', e_address='$address' WHERE e_id='$id'";
    
    if(mysqli_query($connection, $sql)) {
        echo "<script>alert('Record updated successfully')</script>";
    } else {
        echo "<script>alert('Error updating record: ')</script>" . mysqli_error($connection);
    }
}

// DELETE operation
if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    
    $sql = "DELETE FROM employee WHERE e_id='$id'";
    
    if(mysqli_query($connection, $sql)) {
        echo "<script>alert('Record deleted successfully')</script>";
    } else {
        echo "<script>alert('Error deleting record: ')</script>" . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Employee Management</title>
    
    <link rel="stylesheet" type="text/css" href="style/stylescrud.css">
    <link rel="stylesheet" type="text/css" href="style/homepagestyles.css"> 

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

</head>
<body>

<header>
        <div class="logo">
            <img class="logon" src="images/homepage_image/LOGO.png " alt="Logo pic" height="250" width="100">
        </div>
        <nav>
            <ul class="nav_links">
                <li><a href="HOME-PAGE1.php" class="active">Home</a></li>
                <li><a href="About us.php" class="active">About</a></li>
                <li><a href="manpower.html" class="active">Services</a></li>
                <li><a href="#" class="active">Projects</a></li>
                <li><a href="review/review.php" class="active">Client Review</a></li>

                <div class="search">
                    <form action="#" method="GET">
                        <input type="text" name="search" placeholder="Search...">
                        <button type="submit"><i class='bx bx-search'></i></button>
                    </form>
                </div>
               
            </ul>
        </nav>
    </header>
<br>
<br>

    <h1>Employee Management</h1>
 
    <br>
    <br>
    <h2>Add Employee</h2>
    <div style="margin-bottom:40px";></div>
    <form method="post">
        <input type="text" name="e_name" placeholder="Name" required>
        <input type="email" name="e_email" placeholder="Email" required>
        <input type="text" name="e_address" placeholder="Address" required>
        <button type="submit" name="create">Add Employee</button>
    </form>
    <br>
    <br>

    <h2>Employee List</h2>
    <br>
    <br>
    <table >
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['e_name']; ?></td>
            <td><?php echo $row['e_email']; ?></td>
            <td><?php echo $row['e_address']; ?></td>
            <td class="action-buttons">
                <a href="management.php?delete=<?php echo $row['e_id']; ?>" class="delete-button">Delete</a>
                <a href="update.php?id=<?php echo $row['e_id']; ?>" class="update-button">Update</a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <br>
    <br>
    <br>
    <footer>
            <div class="footer-columns">
                <div class="footer-column">
                    <h3>Follow Us</h3>

                    <ul class="social-icons">
                        <li><img class="footer-logo" src="images/homepage_image/LOGO.png  " alt="Footer Logo"></li>
                        <li><a href="https://web.facebook.com/home.php"><i class='bx bxl-facebook-circle'></i></a></li>
                        <li><a href="https://twitter.com/i/flow/login"><i class='bx bxl-twitter'></i></a></li>
                        <li><a href="https://www.youtube.com/"><i class='bx bxl-youtube'></i></a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul class="list">
                        <li><a href="About us.html">About Us</a></li>
                        <li><a href="Material page/material.php">Our Services</a></li>
                        <li><a href="privecy policy.html">Privacy Policy</a></li>
                        <li><a href="terms.html">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contact Us</h3>
                    <p>Email: info@example.com</p>
                    <p>Phone: +1234567890</p>
                    <p>Address: 123 Street, City, Country</p>
                </div>
            </div>
            <div class="bottom-bar">
                <p>&copy; 2024 your company. All rights reserved</p>
            </div>
        </footer>
        
    <script src="scriptscrud.js"></script>
</body>
</html>