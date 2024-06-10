<?php

include("php/DBconnection.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // something was posted
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];

    if (!empty($email) && !empty($password) && !empty($username)) {
        // Read from the database
        $query = "SELECT * FROM `adminlogin` WHERE email='$email' AND username='$username' LIMIT 1"; // Compare email and username

        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);

            if ($user_data['password'] === $password) {
                $_SESSION['admin_id'] = $user_data['admin_id'];
                                                  
                header("Location:admin page.php");// Redirect to admin page after login
                die;
            } 
            else {
                echo "<script>alert('Invalid Password')</script>"; 
            }
        }
        
        else {
               echo  "<script>alert('Invalid email or admin name')</script>";
      
      }
    } 
    
}
?>

<html>
<head>
    <title> ADMIN LOGIN </title>
    <link rel="stylesheet" href="style/ADMIN-LOGIN.css">
    
   
</head>

<body>
    <div class="admin-banner">

        <div class="admin-form-content">


            <div class="logo-section">
                <img src="images/admin_register_image/logo1.png" alt="logo">
            </div>



            <div class="con-heading">
                <p class="head-1"> EASY BLOCK <br><span class="head-2">Contruction</span></p>
            </div>




            <div class="button-section">
                <button class="user-btn" onclick="document.location='USER-LOGIN.PHP'"> USER </button>
                
            </div>



            <div class="admin-reg-heading-section">
                <h1>LOGIN - Admin account </h1>
                <p class="under-heading-text">Let's get started</p>
            </div>

            <div class="form-1">
                <form action="ADMIN-LOGIN.PHP" METHOD="POST">
                    <p class="label-admin-name">Admin  name </p>
                    <input type="text" placeholder="Admin  name " required class="input-admin-name" maxlength="20" name="username">


                    <p class="label-admin-email">Email </p>
                    <input type="email" placeholder="Email" class="input-Admin-eamil" maxlength="50" required name="email">
                    <div class="space"></div>

                    <p class="label-password"> password </p>
                    
                  
                    <input type="password" placeholder="password" class="input-Admin-con-password" required
                        maxlength="6" id="password_Admin_confirm"  name="password">


                    <div class=submit-section>

                        <input type="submit" onclick="checkPassword()"  a href="admin page.php" value="LOGIN" class="admin-submit-button">


                    </div>
                    <div class="login-datils" >

                        <p class="login-text" style="text-color:white" > Dont have an account ? <a href="ADMIN-SIGNUP.PHP"> SIGN UP </a></p>

                    </div>
                    <div class="login-datils">

                        <p class="login-text"> <a href="ADMIN-FORGOT-PASSWORD.PHP">FORGOT PASSWORD ? </a></p>

                    </div>



                </form>
                        

            </div>
        </div>
    </div>
    <script src="js/ADMIN-LOGIN.js"></script>
</body>


</html>