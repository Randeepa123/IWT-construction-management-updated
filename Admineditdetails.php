

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
            
            
        </div>

        <form class="form" id="account-form" method="post" action="admindetails.php">
            <div class="account-header">
                <img src='images/propic.png' alt="logo" class="logo">
                <h1 class="account-title">Account details</h1>
                
                    <div class="input-container">
                        <label>First Name</label>
                            <div class="input-wrapper">
                                <input type="text" placeholder="First Name" name="fname" >
                                
                            </div>
                    </div>

                    <div class="input-container">
                        <label>Last Name</label>
                            <div class="input-wrapper">
                                <input type="text" placeholder="Last Name"name="lname">
                            </div>
                    </div>

                    <div class="input-container">
                        <label>Email</label>
                            <div class="input-wrapper">
                                <input type="email" placeholder="Email" name="email">
                            </div>
                    </div>

                    <div class="input-container">
                        <label>Phone Number</label>
                    
                        <div class="input-wrapper">
                            <input type="text" placeholder="Phone Number"name="pnumber">
                        </div>
                    </div>

                    <div class="input-container">
                        <label>Address</label>
                            <div class="input-wrapper">
                            <input type="text" placeholder="Adress"name="adress">
                            </div>
                    </div>
                    
                    <div class="btn-container">
                        <button class="btn-submit" name="Updateadmine">Save</button>
                    </div>
                </div>
            </div>
        </form>

 


    <script src="js/userscript.js"></script>

</body>
</html>
