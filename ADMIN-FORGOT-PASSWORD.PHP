<?php
include("php/DBconnection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $currentPassword = $_POST['password'];
    $newPassword = $_POST['password1'];
    $confirmPassword = $_POST['password2'];

    // Check current password
    $query = "SELECT password FROM adminlogin WHERE email = '$email'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    $dbPassword = $row['password'];

    if ($currentPassword === $dbPassword) {
        // Check if new password and confirm password match
        if ($newPassword === $confirmPassword) {
            // Update the password in the database
            $updateSql = "UPDATE adminlogin SET password = '$newPassword' WHERE email = '$email' LIMIT 1";
            mysqli_query($con, $updateSql);

            // Redirect to login page or display a success message
            header("Location:ADMIN-LOGIN.PHP");
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
    <title>Forgot Password</title>
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
            <div class="admin-reg-heading-section">
                <h1>Forgot Password</h1>
                <p class="under-heading-text">Enter your admin email to reset your password</p>
            </div>
            <div class="form-1">
                <form action="ADMIN-FORGOT-PASSWORD.PHP" method="POST">
                    <p class="label-admin-email">admin Email</p>
                    <input type="email" placeholder="admin Email" class="input-Admin-eamil" maxlength="50" required name="email">
                   
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
                <p class="login-text">Remember your password? <a href="ADMIN-LOGIN.php">Login</a></p>
            </div>
        </div>
    </div>
</body>
</html>
