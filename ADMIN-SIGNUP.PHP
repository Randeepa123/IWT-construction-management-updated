


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
            $check_query = "SELECT * FROM adminlogin WHERE email='$email'";
            $check_result = mysqli_query($con, $check_query);
            if(mysqli_num_rows($check_result) > 0) {
                // Email already exists
                echo "<script>alert('Email already exists!');</script>";
            } else {
                // Create (Save) to the database
                $query = "INSERT INTO adminlogin(username, email, password, firstname, lastname, mobileno, address) VALUES ('$username', '$email', '$password_1', '$firstname', '$lastname', '$mobileno', '$address')";
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

<html>
<head>
    <title> admin-register</title>
    <link rel="stylesheet" href="style/ADMIN-SIGNUP.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="js/ADMIN-SIGNUP.js"></script>
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
                <button class="user-btn" onclick="document.location='USER-SIGNUP.PHP'"> User </button>
                <button class="admin-btn"> Admin </button>
            </div>



            <div class="admin-reg-heading-section">
                <h1>Registration - Admin account </h1>
                <p class="under-heading-text">Let's get started</p>
            </div>

            <div class="form-1">
                <form action="ADMIN-SIGNUP.PHP" METHOD="POST">
                    <p class="label-admin-name">Admin user name </p>
                    <input type="text" placeholder="Admin  name " required class="input-admin-name" maxlength="20" name="username">


                    <p class="label-admin-email">Email </p>
                    <input type="email" placeholder="Email" class="input-Admin-eamil" maxlength="50" required name="email">

                    <img src="images/admin_register_image/eye-close.png" class="open-pass" id="pass-open-2" >
                    <p class="label-password"> password </p>
                    <img src="images/admin_register_image/eye-close.png" class="close-pass" id="pass-open-1">
                    <p class="lebel-con-password"> confirm passwrord </p>


                    <!--confirm  password -->

                    <input type="password" placeholder="password" class="input-admin-password" required maxlength="6"
                        id="password_Admin" name="password1">
                    <input type="password" placeholder="Re enter" class="input-Admin-con-password" required
                        maxlength="6" id="password_Admin_confirm"  name="password2">




                    <!--admin key-->


                    



                  


                    <div class="personal-info-heading">
                        <h1>Personal information</h1>
                    </div>



                    <p class="label-admin-first-name"> first name </p>
                    <p class="label-admin-last-name"> last name </p>
                    <input type="text " placeholder="first name " maxlength="10" required name="firstname"class="input-admin-first-name">
                    <input type="text" placeholder="last name" maxlength="10 " class="input-admin-last-name" required name="lastname">




                    <!---javscript add here -->

                    <p class="label-admin-mobile-number">Mobile number</p>
                    <input type="tel" placeholder="mobile number" maxlength="10" requried
                        class="input-Admin-mobile-number" pattern="[0-9]{10}" id="admin-phone-number" name="mobileno">
                   





                    <p class="label-admin-Address">Address</p>
                    <input type="text" placeholder="Address" maxlength="100" required class="input-admin-address" name="address">


                    <div class="terms-and-condition">
                        <p><input type="checkbox" class="check-box" required> I have read and agree to the <a
                                href="terms.html">Terms of
                                Service</a> </p>

                    </div>
                    <div class=submit-section>

                        <input type="submit" onclick="checkPassword()"  a href="admin page.php" value="Sign up" class="admin-submit-button">


                    </div>
                    <div class="login-datils">

                        <p class="login-text"> Already have an account ? <a href="ADMIN-LOGIN.PHP"> Log in </a></p>

                    </div>



                </form>


            </div>
        </div>
    </div>
    <script src="js/ADMIN-&-USER-SIGNUP.js"></script>
</body>


</html>