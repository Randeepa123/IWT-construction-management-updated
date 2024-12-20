<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms and Condition </title>
    <link rel="stylesheet" href="style/contactus.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="contactus">


        <div class="title">
            <h1>contact us</h1>
        </div>
        <iframe class="map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8885794707753!2d79.95178087404842!3d6.903925718627581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae257c98ad6134d%3A0x73f191c2ee464760!2sMalabe%20Public%20Bus%20Stand!5e0!3m2!1sen!2slk!4v1714889463582!5m2!1sen!2slk"
            width="200" height="250" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="box1">
            <form action="submit_action.php" method="post" onsubmit="return confirm('Do you want to send this?')"
                id="contactForm">
                <div class="form">
                    <div class="row1">
                        <div class="inputbox">
                            <input type="text" name="first_name" placeholder="First Name" pattern="[A-Za-z]+"
                                title="Please enter a valid first name without numeric characters." required>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="last_name" placeholder="Last Name" maxlength="30" required>
                        </div>
                    </div>
                    <div class="row2">
                        <div class="inputbox">
                            <input type="email" name="email" placeholder="E-mail" maxlength="30" required>
                        </div>
                        <div class="inputbox">
                            <input type="tel" name="contact_no" placeholder="Contact No" pattern="[0-9]+" maxlength="20"
                                required oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                        </div>
                    </div>
                    <textarea id="comment" name="comment" placeholder="Comment"></textarea>

                    <input class="button" type="submit" value="Send">
                </div>
            </form>
        </div>
        <div class="box2">
            <div class="info">
                <i class="fas fa-house"></i><span class="add">Ambo construction company Pvt Ltd,<br> Head
                    Office<br></span>
                <br><i class="fas fa-location-dot"></i><span class="add">12th floor,<br>Ambo center, <br> No:115
                    ,Dickmand Road,<br> Colombo5 ,Sri Lanka</span><br>
                <br><i class="fas fa-envelope"></i><span class="add"> Email: construction@Ambo.net</span><br>
                <br><i class="fas fa-phone"></i><span class="add"> Phone : +94 11 222 333 , +94 768 484 73</span><br>
                <br><i class="fas fa-fax"></i><span class="add">Fax : +94 11 747 848</span>
            </div>
        </div>
    </div>
    <script src="js/test.js"></script>
</body>

</html>