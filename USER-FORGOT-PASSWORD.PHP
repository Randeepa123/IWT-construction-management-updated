<?php
include("php/DBconnection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $currentPassword = $_POST['password'];
    $newPassword = $_POST['password1'];
    $confirmPassword = $_POST['password2'];

    // Check current password
    $query = "SELECT password FROM userlogin WHERE email = '$email'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    $dbPassword = $row['password'];

    if ($currentPassword === $dbPassword) {
        // Check if new password and confirm password match
        if ($newPassword === $confirmPassword) {
            // Update the password in the database
            $updateSql = "UPDATE userlogin SET password = '$newPassword' WHERE email = '$email' LIMIT 1";
            mysqli_query($con, $updateSql);

            // Redirect to login page or display a success message
            header("Location:USER-LOGIN.PHP");
            exit();
        } else {
            // Passwords don't match, display error message
            echo "<script>alert('New password and confirm password does not match');</script>";
        }
    } else {
        // Current password is incorrect, display error message
        echo "<script>alert('Incorrect current password');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> USER FORGOT  PASSWORD</title>
    <link rel="stylesheet" href="style/USER-LOGIN.CSS">
    <style>
    .admin-banner{
     width: 100%;
    height: 100vh;
    background-image: url("images/admin_register_image/admin-back2.jpg");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    display: flex;
    justify-content: center;
    align-items: center;
}
        </style>
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
            <div class="admin-reg-heading-section">
                <h1>Forgot Password</h1>
                <p class="under-heading-text">Enter your email to reset your password</p>
            </div>
            <div class="form-1">
                <form action="USER-FORGOT-PASSWORD.PHP" method="POST">
                    <p class="label-admin-email">user Email</p>
                    <input type="email" placeholder="user Email" class="input-Admin-eamil" maxlength="50" required name="email">
                   
                        <p class="label-admin-email">Current password</p>
                        <input type="password" placeholder="current password" class="input-Admin-eamil" maxlength="50" required name="password">

                        <p class="label-admin-email">new password</p>
                        <input type="password" placeholder="new password" class="input-Admin-eamil" maxlength="50" required name="password1">

                        <p class="label-admin-email">confirm password</p>
                        <input type="password" placeholder="confirm password" class="input-Admin-eamil" maxlength="50" required name="password2">

                        <div class="submit-section">
                        <input type="submit" value="RESET PASSWORD" class="admin-submit-button">
                    </div>
                </form>
            </div>
            <div class="login-details" style="text-align:center;">
                <p class="login-text"style=" color: white ;">Remember your password? <a href="USER-LOGIN.PHP">Login</a></p>
            </div>
        </div>
    </div>
</body>
</html>
