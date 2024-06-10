 <?php
session_start();
include("php/DBconnection.php");


if (!isset($_SESSION['user_id'])) {
   
    header("Location: USER-LOGIN.PHP");
    exit();
}


$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM `userlogin` WHERE user_id='$user_id'";
$result = mysqli_query($con, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $user_data = mysqli_fetch_assoc($result);
   
    $firstname = $user_data['firstname'];
    $lastname = $user_data['lastname'];
    $email = $user_data['email'];
    $mobileno = $user_data['mobileno'];
    $address = $user_data['address'];
} else {
    
    header("Location: USER-LOGIN.PHP");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $new_firstname = $_POST['firstname'];
    $new_lastname = $_POST['lastname'];
    $new_email = $_POST['email'];
    $new_mobileno = $_POST['mobileno'];
    $new_address = $_POST['address'];
    

    $update_query = "UPDATE `userlogin` SET firstname='$new_firstname', lastname='$new_lastname', email='$new_email', mobileno='$new_mobileno', address='$new_address' WHERE user_id='$user_id'";
    $update_result = mysqli_query($con, $update_query);
    
    if ($update_result) {
       
        header("Location:USER-ACCOUNT.PHP");
        exit();
    } else {
        
        echo "Error updating user details: " . mysqli_error($con);
    }
}



  
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIB0VD591QIYiR65iaqukzvf/nwasFOnqhPay5w/91JmVM2hMDnK10nMGCdVK+iQrJ71zPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="style/USER-ACCOUNT.CSS">
    
</head>
<body>
    <div class="container" style="margin-top: 100px;">
        <div class="menu">
            <a href="#" class="menu-link account-link" onclick="toggleForm('account')">Account</a>

            <a href="#" class="menu-link my-projects-link" onclick="toggleForm('my-projects')">My projects</a>
            <a href="#" class="menu-link notices-link" onclick="toggleForm('notices')">Notices</a>
        </div>

        <form class="form" action="USER-ACCOUNT.PHP" id="account-form" method="post" >
            <div class="account-header">
                <img src='images/propic.png' alt="logo" class="logo">
                <h1 class="account-title">Account details</h1>
               
                    <div class="input-container">
                        <form action="php/delete.php" method="post">
                        <button type="submit"class="edit-button" name="delete_account">DELETE ACCOUNT</button>
</form>
                        <label>First Name</label>
                        <div class="input-wrapper">
                            <input type="text" placeholder="First Name" value="<?php echo $firstname; ?>" name="firstname">
                           
                        </div>
                    </div>
                    <div class="input-container">
                        <label>Last Name</label>
                        <div class="input-wrapper">
                            <input type="text" placeholder="Last Name" value="<?php echo $lastname ?>" name="lastname">
                        </div>
                    </div>
                    <div class="input-container">
                        <label>Email</label>
                        <div class="input-wrapper">
                            <input type="email" placeholder="Email" value="<?php echo $email; ?>" name="email">
                        </div>
                    </div>
                    <div class="input-container">
                        <label>Phone Number</label>
                        <div class="input-wrapper">
                            <input type="text" placeholder="Phone Number"  value="<?php echo $mobileno; ?>" name="mobileno">
                        </div>
                    </div>
                    <div class="input-container">
                        <label>Address</label>
                        <div class="input-wrapper">
                            <input type="text" placeholder="Address" value="<?php echo $address; ?>" name="address" >
                        </div>
                    </div>
                    
                    <div class="btn-container">
                        <button type="submit"class="btn-submit">Save</button>
                    </div>
               
               
            </div>
        </form>
        
        <!-- My Projects Section -->
        <div id="my-projects-form" class="form" style="display: none;">
           
            <div class="old-feedback-section">
                
                <div class="old-review-1">
                    
                    <img src="images/con3.jpg">
                    <h2>PROJECT 1</h2>
                    <h3>Renovation of Historic Urban Brownstone:</h3><br>
                    <ul>
                        <li data-title="Details">Restored original crown moldings and ceiling medallions to maintain the historic charm.</li>
                        <li data-title="Feature">A custom-designed stained glass window panel in the entry foyer, echoing the home's historical significance.</li>
                        <li data-title="Finish">Reclaimed wood flooring sourced from local historic buildings to match the original character.</li>
                    </ul>
                    
                </div>
            </div>
       
    
            <div class="old-feedback-section">
                <div class="old-review-1">   
                    <img src="images/con4.jpg">
                    <h2>PROJECT 2</h2>
                    <h3>Modern Sustainable Residence:</h3><br>
                    <ul>
                        <li data-title="Details">Implemented passive solar design principles for energy efficiency and reduced environmental impact.</li>
                        <li data-title="Feature">Installation of a green roof to improve insulation, manage stormwater runoff, and promote biodiversity.</li>
                        <li data-title="Finish">Utilized recycled materials and low-VOC paints to create a healthy indoor environment.</li>
                    </ul>
                    </div>
            </div>
        
        <div class="old-feedback-section">
            <div class="old-review-1">
                
                <img src="images/conimage2.jpg">
                <h2>PROJECT 3</h2>
<h3>Contemporary Urban Loft Conversion:</h3><br>
<ul>
    <li data-title="Details">Opened up interior spaces to maximize natural light and create a sense of spaciousness.</li>
    <li data-title="Feature">Integrated smart home technology for lighting, climate control, and security, enhancing convenience and efficiency.</li>
    <li data-title="Finish">Exposed brick walls and industrial-style finishes juxtaposed with sleek modern fixtures for a unique urban aesthetic.</li>
</ul>
        
                </div>
        </div>
    </div>
    


</form>



        <!-- Notices Section -->
        <div id="notices-form" class="form" style="display: none;">
            <div class="notices-section">
                <h2>Notices</h2>
                <p>This is where your notices will be displayed.</p>
            </div>
        </div>
    </div>

    <script>
        // Function to toggle form visibility
        function toggleForm(formId) {
            // Hide all forms
            const forms = document.querySelectorAll('.form');
            forms.forEach(form => {
                form.style.display = 'none';
            });

            // Show selected form
            const selectedForm = document.getElementById(`${formId}-form`);
            selectedForm.style.display = 'block';

            // Reset background colors for all menu links
            const menuLinks = document.querySelectorAll('.menu-link');
            menuLinks.forEach(link => {
                link.style.backgroundColor = '';
                link.style.color = '#768499';
            });

            // Set background color for the clicked menu link
            const clickedLink = document.querySelector(`.${formId}-link`);
            clickedLink.style.backgroundColor = '#536dfe';
            clickedLink.style.color = '#fff';

            // Store the ID of the active form in sessionStorage
            sessionStorage.setItem('activeForm', formId);
        }

        function initializeFormVisibility() {
            const activeFormId = sessionStorage.getItem('activeForm');
            if (activeFormId) {
                toggleForm(activeFormId);
            } else {
                // If no active form is stored, default to displaying the account form
                const accountForm = document.getElementById('account-form');
                accountForm.style.display = 'block';
            }
        }

        // Call initializeFormVisibility function on page load
        window.addEventListener('load', initializeFormVisibility);
    </script>

</body>
</html>
