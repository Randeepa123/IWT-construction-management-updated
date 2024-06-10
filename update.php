<?php
// connection
$connection = mysqli_connect("localhost", "root", "", "database");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// submitte
if(isset($_POST['update'])) {
    $id = $_POST['e_id'];
    $name = $_POST['e_name'];
    $email = $_POST['e_email'];
    $address = $_POST['e_address'];
    
    $sql = "UPDATE employee SET e_name='$name', e_email='$email', e_address='$address' WHERE e_id='$id'";
    
    if(mysqli_query($connection, $sql)) {
        echo "<script>alert('Record updated successfully')</script>";
    } else {
        echo "<script>alert('Error updating record')</script> " . mysqli_error($connection);
    }
}


$id = $_GET['id'];
$sql = "SELECT * FROM employee WHERE e_id='$id'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);

mysqli_close($connection);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Employee</title>
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
                <li><a href="#" class="active">Home</a></li>
                <li><a href="About us.html" class="active">About</a></li>
                <li><a href="#" class="active">Services</a></li>
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
    <br>

    <h2>Update Employee Details</h2>
    <div style="margin-bottom:40px";></div>
    <form method="post">
        <input type="hidden" name="e_id" value="<?php echo $row['e_id']; ?>">
        <input type="text" name="e_name" value="<?php echo $row['e_name']; ?>" placeholder="Name" required>
        <input type="email" name="e_email" value="<?php echo $row['e_email']; ?>" placeholder="Email" required>
        <input type="text" name="e_address" value="<?php echo $row['e_address']; ?>" placeholder="Address" required>
        <button type="submit" name="update">Update Employee</button>
        <?php
            $phpFileName = "management.php";
        ?>
        <button><a href="<?php echo $phpFileName; ?>">Back to Employee Management</a></button>
    </form>
    </form>

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