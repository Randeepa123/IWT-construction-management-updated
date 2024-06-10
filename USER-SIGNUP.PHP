<?php 
session_start();

include("php/DBconnection.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {
    // Something was posted
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password_1 = $_POST['password1'];
    $password_2 = $_POST['password2'];
    $mobileno = $_POST['mobileno'];
    $address = $_POST['address'];

    if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password_1) && !empty($password_2) && !empty($username) && !empty($mobileno) && !empty($address)) {
        if($password_1 === $password_2) {
            // Check if email already exists in the database
            $check_query = "SELECT * FROM userlogin WHERE email='$email'";
            $check_result = mysqli_query($con, $check_query);
            if(mysqli_num_rows($check_result) > 0) {
                // Email already exists
                echo "<script>alert('Email already exists!');</script>";
            } else {
                // Create (Save) to the database
                $query = "INSERT INTO userlogin(username, email, password, firstname, lastname, mobileno, address) VALUES ('$username', '$email', '$password_1', '$firstname', '$lastname', '$mobileno', '$address')";
                $result = mysqli_query($con, $query);
                
                if($result) {
                    header("Location: #"); // Add location for user login
                    exit;
                } else {
                    echo "Error: " . mysqli_error($con);
                }
            }
        } else {
            // Passwords do not match
            echo "<script>alert('Passwords do not match!')</script>";
        }
    } 
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>user account create</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/USER-SIGNUP.CSS">
   
</head>

<body>

    <!-- Add error message popup -->
    <div class="error-message" id="error-message">
        <p id="error-text"></p>
    </div>

    <div class="content">
        <div class="text-content">
            <div class="logo">
                <img src="images/con_image/logo.png">
            </div>
            <div class="con-head">
                <p> EASY BLOCK <br><span class="sub-head">CONSTRUCTING</span></p>
            </div>

            <!-- upper buttons -->
            <div class="line-1-buttons">
                <button class="user">User</button>
                <button class="admin" onclick="document.location='ADMIN-SIGNUP.PHP'">Admin</button>
            </div>

            <!-- ragistartion heading -->
            <div class="line-2-heading">
                <h1 class="reg-head"> Registration - User Account </h1>
                <p>Let's get started!</p>
            </div>

            <!--form    -  until passwords -->
            <div class="line-3-form">
                <form action="USER-SIGNUP.PHP" method="post">
                    <p class="user-name">User-name <br>
                        <input type="text" placeholder="User-name" class="user-input" required maxlength="10"  name="username"  >
                    </p>
                    <p class="email">Email <br>
                        <input type="email" placeholder="Email" class="email-input" required maxlength="50"  name="email"  >
                    </p>
                    <!--password section -->
                    <img src="images/admin_register_image/eye-close.png" class="user-open-pass1" id="pass-open-4">
                    <img src="images/admin_register_image/eye-close.png" class="user-open-pass2" id="pass-open-5" >
                    <p class="pass">password</p>
                    <p class="conf">Re enter password </p>
                    <!-- user password 1 -->
                    <p><input type="password" placeholder="password" class="password-input" 
                            id="user-password-enter" name="password1"  >
                        <!-- user password 2 -->
                        <input type="password" placeholder="confirm password" class="confirm-password-input" required
                             id="user-password-re-enter" name="password2">
                    </p>
            </div>
            <!--personal information heading -->
            <div class="line-4-personDetail">'<h1>Personal information</h1>'</div>
            <div class="first-name">
                <p class=label-first-name>first name </p>
                <p class="label-last-name">last name </p>
                <p><input type="text" placeholder="first name " class="input-first-name" required maxlength="10" name="lastname" required >
                    <input type="text" placeholder=" last name " class="input-last-name" required maxlength="10" name="firstname" required >
                </p>
            </div>
            <!--mobile number -->
            <span class="lebel-user-mobile-number">Mobile number </span><br>
            <input type="tel" placeholder="mobile-number" maxlength="10" required class="input-user-mobile-number"
                pattern="[0-9]{10}" id="mobileNumber" name="mobileno" required><br>
            
            <span class="lebel-user-address">Address</span><br>
            <input type="text"  placeholder="Address" required class="input-user-adress" name="address" ><br>
            <button type="submit" onclick="checkPassword()" class="user-sumbit-button">Sign Up</button><br>
            <p class="user-login-text">Already have an account ? <a href="USER-LOGIN.PHP">Log in</a></p>
            <div class="user-link-terms-and-condition">
                <input type="checkbox" required><span class="user-link-tearms">I have read and agree to the <a
                        href="#">Terms of
                        Service</a></span>
            </div>
            </form>
        </div>
    </div>

    <script src="js/USER-SIGNUP.js"></script>

</body>

</html>
