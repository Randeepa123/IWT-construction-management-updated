<!DOCTYPE html>
<html lang="en">
<!-----header -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/HOME-PAGE2.CSS">
    <link rel="stylesheet" type="text/css" href="style/HOME-PAGE1.CSS">



    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <title>Homepage</title>
</head>

<body>
    <header>
        <div class="logo">
            <img class="logon" src="images/homepage_image/LOGO.png " alt="Logo pic" height="250" width="100">
        </div>
        <nav>
            <ul class="nav_links">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="About us.php" class="active">About</a></li>
                <li><a href="manpower.html" class="active">Services</a></li>
              
                <li><a href="review/review.php" class="active">Client Review</a></li>

                <div class="search">
                    <form action="#" method="GET">
                        <input type="text" name="search" placeholder="Search...">
                        <button type="submit"><i class='bx bx-search'></i></button>
                    </form>
                </div>
                <div class="auth">
                    <a href="USER-SIGNUP.PHP" class="sign"><button>Sign IN</button></a>
                    <a href="USER-LOGIN.PHP" class="log"><button>Login IN</button></a>

                </div>
            </ul>
        </nav>
    </header>


    <!----header-->

    <body>

        <section class="home" id="home">
            <div class="home-slider">
                <div class="w">
                    <section class="slide" style="background: url(images/homepage_image/construction-2.jpg) no-repeat;">
                        <div class="content">
                            <h3>WE PROVIDE BEST SERVICE</h3>
                            <p>we are committed to delivering unparalleled service excellence to our valued
                                customers.<br> With a relentless focus on quality and customer satisfaction, we go above
                                and beyond to <br>exceed expectations in every interaction</p>
                            <button><a href="contactus.php" class="btn">get started</a></button>
                        </div>
                    </section>
                </div>
            </div>
        </section>


        <section class="about" id="about">
            <h1 class="heading"> about us </h1>
            <br>
            <div class="row">
                <div class="video">
                    <img src="images/homepage_image/constructionGif.gif">
                </div>
                <div class="content">
                    <h3>We will provide you the best work which you dreamt for!</h3>
                    <p>we are dedicated to turning your dreams into reality. With a passion for excellence and a
                        commitment to exceptional service, we strive to provide you with the best work imaginable. Our
                        team of skilled professionals works tirelessly to understand your vision and bring it to life,
                        ensuring that every detail is meticulously executed. Whether it's crafting a stunning design,
                        delivering impeccable craftsmanship, or providing unparalleled customer service, we are here to
                        exceed your expectations every step of the way. Trust us to transform your dreams into
                        unforgettable realities</p>
                    <button><a href="About us.html">read more</a></button>
                </div>
            </div>

        </section>

        <div class="box-container">

            <div class="box1">
                <h3>5+</h3>
                <p>years of experience</p>
            </div>

            <div class="box1">
                <h3>50+</h3>
                <p>project completed</p>
            </div>

            <div class="box1">
                <h3>150+</h3>
                <p>satiesfied clients</p>
            </div>

            <div class="box1">
                <h3>300+</h3>
                <p>employees</p>
            </div>

        </div>

        <section class="services" id="services">
            <h1 class="heading"> our services </h1>
            <br>
            <div class="box-container1">

                <div class="box">
                    <img src="images/homepage_image/man.png" alt="!">
                    <h3>Manpower</h3>
                    <p>Your Reliable Partner for Tailored Staffing Solutions and Skilled Workforce Deployment.</p>
                    <button><a href="">Learn more</a></button>
                </div>

                <div class="box">
                    <img src="images/homepage_image/house.png" alt="!">
                    <h3>House Planing</h3>
                    <p>Your Trusted Partner for Tailored Home Design Solutions and Expert Construction Management.</p>
                    <button><a href="#">Learn more</a></button>
                </div>

                <div class="box">
                    <img src="images/homepage_image/material.png" alt="!">
                    <h3>Matireal Supply</h3>
                    <p>Your Trusted Source for Reliable and Tailored Material Solutions to Meet Your Project Needs.</p>
                    <button><a href="Material page/material.php">Learn more</a></button>
                </div>

                <div class="box">
                    <img src="images/homepage_image/vehical.png" alt="!">
                    <h3>Vehicle Supply</h3>
                    <p>Your Trusted Source for Reliable and Customized Fleet Solutions and Vehicle Procurement.</p>
                    <button><a href="vehiclesuply.html">Learn more</a></button>
                </div>
            </div>
        </section>


        <section class="projects|" id="projects">
            <h1 class="heading"> our projects </h1>
            <div class="wapper">
                <div class="card">
                    <img src="images/homepage_image/project2.png">
                    <div class="card-content">
                        <h3>Roads</h3>
                        <p>Consruction & Desingn</p>
                    </div>
                </div>

                <div class="card">
                    <img src="images/homepage_image/project3.png">
                    <div class="card-content">
                        <h3>Weldings</h3>
                        <p>Consruction & Desingn</p>
                    </div>
                </div>

                <div class="card">
                    <img src="images/homepage_image/project4.jpeg">
                    <div class="card-content">
                        <h3>JCB Works</h3>
                        <p>Consruction & Desingn</p>
                    </div>
                </div>

                <div class="card">
                    <img src="images/homepage_image/projrct1.png">
                    <div class="card-content">
                        <h3>Dream House</h3>
                        <p>Consruction & Desingn</p>
                    </div>
                </div>
            </div>
        </section>



        <section class="review|" id="review">
            <h1 class="heading"> client reviews </h1>
            <div class="wrapper">
                <div class="box">
                    <i class="fa fa-quote-left quote"></i>
                    <p>"Easy Block revolutionized our construction projects. It's a comprehensive solution that keeps
                        tasks organized, budgets on track, and teams connected. With its user-friendly interface, our
                        projects are completed efficiently"</p>
                    <div class="content">
                        <div class="info">
                            <div class="name">John Smith</div>
                            <div class="job">HomeTrack User</div>
                            
                        </div>
                        <div class="image">
                            <img src="images/homepage_image/user1.jpg" alt="!">
                        </div>
                    </div>
                </div>


                <div class="box">
                    <i class="fa fa-quote-left quote"></i>
                    <p>"Easy Block is unparalleled in its versatility. Whether overseeing renovations or large-scale
                        projects, it adapts effortlessly. Document management, communication, and real-time progress
                        monitoring make it indispensable."</p>
                    <div class="content">
                        <div class="info">
                            <div class="name">Emily Johnson</div>
                            <div class="job">Designer | Developer</div>
                           
                        </div>
                        <div class="image">
                            <img src="images/homepage_image/user2.jpg" alt="!">
                        </div>
                    </div>
                </div>



                <div class="box">
                    <i class="fa fa-quote-left quote"></i>
                    <p>"Easy Block maximizes every minute. It streamlines communication, tracks milestones, and allocates
                        resources efficiently. As a contractor, it's essential for staying organized and delivering
                        top-notch results."</p>
                    <div class="content">
                        <div class="info">
                            <div class="name">David Rodriguez</div>
                            <div class="job">Contractor's Perspective</div>
                          
                        </div>
                        <div class="image">
                            <img src="images/homepage_image/user3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </section>



        <!--footer -->

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
                        <li><a href="About us.php">About Us</a></li>
                        <li><a href="Material page/material.php">Our Services</a></li>
                        <li><a href="privecy policy.php">Privacy Policy</a></li>
                        <li><a href="terms.php">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                <a href="contactus.php">
    <h3>CONTACT US</h3>
</a>
                    <p>Email: info@example.com</p>
                    <p>Phone: +1234567890</p>
                    <p>Address: 123 Street, City, Country</p>
                </div>
            </div>
            <div class="bottom-bar">
                <p>&copy; 2024 your company. All rights reserved</p>
            </div>
        </footer>

        <!--footer -->
        <script src="js/homepagescripts.js"></script>

    </body>


</html>