<?php
session_start();
include("php/DBconnection.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // something was posted
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];

    if (!empty($email) && !empty($password) && !empty($username)) {
        // Read from the database
        $query = "SELECT * FROM `userlogin` WHERE email='$email' AND username='$username' LIMIT 1"; // Compare email and username

        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);

            if ($user_data['password'] === $password) {

                $_SESSION['user_id'] = $user_data['user_id'];
           
               
                header("Location:HOME-PAGE2 .PHP");
                die;
            } 
            else {
                echo "<script>alert('Invalid Password')</script>"; 
            }
        }
        
        else {
               echo  "<script>alert('Invalid email or user name')</script>";
      
      }
    } 
    
}
?>



<html>
<head>
    <title>USER LOGIN</title>
    <link rel="stylesheet" href="style/USER-LOGIN.CSS">
    
</head>

<body>
<div class="admin-banner">
    <div class="admin-form-content">
        <div class="logo-section">
            <img src="images/con_image/logo.png" alt="logo">
        </div>
        <div class="con-heading">
            <p class="head-1">EASY BLOCK <br><span class="head-2">Construction</span></p>
        </div>
        <div class="button-section">
            <button class="user-btn" onclick="document.location='ADMIN-LOGIN.PHP'"> ADMIN </button>
        </div>
        <div class="admin-reg-heading-section">
            <h1>LOGIN - User account</h1>
            <p class="under-heading-text">Let's get started</p>
        </div>
        <div class="form-1">

        <form action="USER-LOGIN.PHP" METHOD="POST">



    <p class="label-admin-name">User name</p>
    <input type="text" placeholder="Username" required class="input-admin-name" maxlength="20" name="username">

    <p class="label-admin-email">Email</p>
    <input type="email" placeholder="Email" class="input-Admin-eamil" maxlength="50" required name="email">
    <div class="space"></div>

    <p class="label-password">Password</p>
    <input type="password" placeholder="Password" class="input-Admin-con-password" required maxlength="6" id="password_Admin_confirm" name="password">

    <div class="submit-section">
        <input type="submit" value="LOGIN" class="admin-submit-button">
    </div>

    <div class="login-details" style="text-align:center";>
        <p class="login-text"style=" color: white ;"> Don't have an account? <a href="USER-SIGNUP.PHP">SIGNUP</a></p>
    </div>

    <div class="login-details"style="text-align:center";>
        <p class="login-text"><a href="USER-FORGOT-PASSWORD.PHP" >FORGOT PASSWORD?</a></p>
    </div>
</form>


            
        </div>
    </div>
</div>

</body>
</html>
