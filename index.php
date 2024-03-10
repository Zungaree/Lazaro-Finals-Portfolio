<?php
    session_start();
    if(isset($_SESSION["user"]) && $_SESSION["user"] === "yes") {
        // Display the logout button in the sidebar
        $showContact = true;
    } else {
        $showContact = false;
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>Lazaro | Portfolio</title>
<meta charset="UTF-8">
<link rel="icon" type="image/x-icon" href="SOURCES/PICTURES/PICTURE 3.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/w3.css">
<link rel="stylesheet" href="CSS/w3-colors-win8.css">
<link rel="stylesheet" href="CSS/w3-colors-flat.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="w3-flat-silver">

<!-- SIDEBAR -->
<nav class="w3-sidebar w3-collapse w3-flat-clouds w3-animate-left" style="z-index:5; width:250px;" id="sidebar">
    <div class="w3-container">
        <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
        <i class="fa fa-arrow-right"></i></a><br>
        <img src="SOURCES/PICTURES/PICTURE 3.png" style="width:45%;" class="w3-round"><br><br>
        <h4><b>PORTFOLIO</b></h4>
    </div>
    <div class="w3-bar-block">
        <a href="#" onclick="openPage('home'); w3_close();" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home fa-fw w3-margin-right"></i>HOME</a> 
        <a href="#" onclick="openPage('about'); w3_close();" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a> 
        <a href="#" onclick="openPage('credentials'); w3_close();" class="w3-bar-item w3-button w3-padding"><i class="fa fa-certificate fa-fw w3-margin-right"></i>CREDENTIALS</a> 
        <a href="#" onclick="openPage('portfolio'); w3_close();" class="w3-bar-item w3-button w3-padding"><i class="fa fa-th-large fa-fw w3-margin-right"></i>PORTFOLIO</a>
        <a href="#" onclick="openPage('contact'); w3_close();" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
        <?php
            // Check if the user is logged in
            if(isset($_SESSION["user"]) && $_SESSION["user"] === "yes") {
                // Display the logout button in the sidebar
                echo '<a href="logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-sign-out fa-fw w3-margin-right"></i>LOGOUT</a>';
            } else {
                echo '<a href="login.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-sign-in fa-fw w3-margin-right"></i>LOGIN</a>';
            }
        ?>   
    </div>
</nav>

<!-- RESPONSIVE DESIGN FOR SMALL SCREENS -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" id="overlay"></div>

<!-- MAIN PAGE -->
<div class="w3-main" style="margin-left:250px; margin-right:150px;">

<!--BACK TO TOP BUTTON-->
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>

    <!-- NAVBAR -->
    <div class="w3-top">
        <div class="w3-bar w3-win8-steel w3-card w3-left-align w3-large">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-padding-large w3-hover-flat-clouds w3-large" onclick="w3_open()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a class="w3-bar-item w3-hide-medium w3-hide-large w3-padding-large">Ron Lazaro | Portfolio</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-flat-clouds" onclick="openPage('home')">HOME</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-flat-clouds" onclick="openPage('about')">ABOUT</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-flat-clouds" onclick="openPage('credentials')">CREDENTIALS</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-flat-clouds" onclick="openPage('portfolio')">PORTFOLIO</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-flat-clouds" onclick="openPage('contact')">CONTACT</a>
        <?php
            // Check if the user is logged in
            if(isset($_SESSION["user"]) && $_SESSION["user"] === "yes") {
                // Display the logout button in the sidebar
                echo '<a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-flat-clouds w3-hover-flat-clouds">LOGOUT</a>';
            } else {
                echo '<a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-flat-clouds">LOGIN</a>';
            }
        ?>   
        </div>
    
        <!-- NAVBAR ON SMALL SCREENS -->
        <div id="navDemo" class="w3-bar-block w3-flat-clouds w3-hide w3-hide-medium w3-large"></div>

    </div>

    <br><br><br>

    <!--HOME PAGE-->
    <div class="page w3-animate-opacity" id="home">
    <div class="w3-container w3-padding-large">
        
        

        <div class="w3-card w3-row-padding w3-padding-16 w3-flat-clouds">
        
            <div class="w3-padding-large w3-animate-opacity">
            <?php
                
                // Check if the user is logged in
                if(isset($_SESSION["user"]) && $_SESSION["user"] === "yes") {
                    
                    // Display the logout button in the sidebar
                    echo "<h3>Welcome, " . $_SESSION["first_name"] . "!</h3>";
                }
            ?>   
                
                <h1 class="w3-jumbo"><b>RON LAZARO</b></h1>
                <p><b>Programmer</b></p>
                <p>An IT college student passionate about programming.</p>
            </div>

            <div class="w3-col m6 w3-animate-opacity">
                <img src="SOURCES/PICTURES/PICTURE 1.png" alt="Me" style="width:100%">
            </div>

            <div class="w3-col m6 w3-animate-opacity">
                <img src="SOURCES/PICTURES/PICTURE 2.png" alt="Me" style="width:100%">
            </div>
        </div> 

    </div>
    </div>

    
    <!-- ABOUT ME -->
    <div class="page w3-animate-opacity" id="about" style="display:none">
        <div class="w3-container w3-padding-large">
        
            <div class="w3-bar w3-win8-steel w3-center"><h2><b>About Me</b></h2></div>
            <p class="w3-justify">
            An IT college student passionate about programming. 
            While I thrive working independently, I also enjoy collaborating with groups, valuing the synergy of different perspectives. 
            My academic journey is marked by a commitment to continuous learning, and I'm dedicated to exploring the ever-expanding landscape of IT. 
            Through solo and group projects, I aim to sharpen my skills and contribute meaningfully to the world of technology.
            </p>

            <!-- PROGRAMMING SKILLS PART 1-->
            <div class="w3-row w3-center w3-padding-16 w3-section w3-flat-clouds">
                <div class="w3-quarter w3-section">
                    <span class="w3-xlarge">6+</span><br>
                    Programming Languages
                </div>
                
                <div class="w3-quarter w3-section">
                    <span class="w3-xlarge">13+</span><br>
                    Credentials
                </div>

                <div class="w3-quarter w3-section">
                    <span class="w3-xlarge">50+</span><br>
                    Projects Done
                </div>

                <div class="w3-quarter w3-section">
                    <span class="w3-xlarge">3+</span><br>
                    Training Seminars
                </div>
            </div>
        </div>  

        <!-- PROGRAMMING SKILLS PART 2-->
        <div class="w3-container w3-padding-large">
            <div class="w3-bar w3-win8-steel w3-center"><h2><b>Programming Languages Proficiency</b></h2></div>
                
            <p>Python</p>
            <div class="w3-grey">
            <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:95%">95%</div>
            </div>

            <p>SQL</p>
            <div class="w3-grey">
            <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:90%">90%</div>
            </div>

            <p>Java</p>
            <div class="w3-grey">
            <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:85%">85%</div>
            </div>

            <p>Bash/Shell Scripting</p>
            <div class="w3-grey">
            <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:80%">80%</div>
            </div>

            <!-- DOWNLOAD RESUME -->
            <p><a href="SOURCES/RESUME.pdf" target="_blank">
            <button class="w3-button w3-win8-steel w3-padding-large w3-margin-top w3-margin-bottom">
            <i class="fa fa-download w3-margin-right"></i>Download Resume</button>
            </p></a>
        </div>
    </div>


    <!-- CREDENTIALS --> 
    <div class="page w3-container w3-padding-large w3-animate-opacity" id="credentials" style="display:none">
        <div class="w3-bar w3-win8-steel w3-center"><h2><b>Credentials</b></h2></div>
        
        <ul class="w3-ul w3-flat-clouds">

            <li class="w3-bar w3-padding-large">
                <img src="SOURCES/PICTURES/OCIF2023CA.png" style="width:90px;" class="w3-bar-item">
                <div class="w3-bar-item">
                    <span><b>Oracle Certified Foundations Associate</b></span><br>
                    <span> Oracle Cloud Infrastructure 2023 Certified Foundations Associate</span><br>
                    <span>Credential ID  304316606OCIF2023CA</span>
                </div>
            </li>

            <li class="w3-bar w3-padding-large">
                <img src="SOURCES/PICTURES/DICT.png" style="width:90px;" class="w3-bar-item">
                <div class="w3-bar-item">
                    <span><b>DICT-WD002 Using HTML and CSS to Design a Website</b></span><br>
                    <span>Department of Information and Communications Technology - Philippines</span><br>
                    <span>Credential ID 7bd2d8b2-0706-4a88-b459-2a26360bbd89</span>
                </div>
            </li>

            <li class="w3-bar w3-padding-large">
                <img src="SOURCES/PICTURES/DICT.png" style="width:90px;" class="w3-bar-item">
                <div class="w3-bar-item">
                    <span><b>Programming for Beginners Using Python</b></span><br>
                    <span>Department of Information and Communications Technology - Philippines</span><br>
                    <span>Credential ID 9fbd4bf6-fbe5-4fd2-8e2b-4e395fac8bf9</span>
                </div>
            </li>

            <li class="w3-bar w3-padding-large">
                <img src="SOURCES/PICTURES/DICT.png" style="width:90px;" class="w3-bar-item">
                <div class="w3-bar-item">
                    <span><b>Programming for Intermediate Users Using Python</b></span><br>
                    <span>Department of Information and Communications Technology - Philippines</span><br>
                    <span>Credential ID e8528a68-9634-4062-96a2-54e0846215b0</span>
                </div>
            </li>

            <li class="w3-bar w3-padding-large">
                <img src="SOURCES/PICTURES/DICT.png" style="width:90px;" class="w3-bar-item">
                <div class="w3-bar-item">
                    <span><b>Learn Basic Statistics with Python</b></span><br>
                    <span>Department of Information and Communications Technology - Philippines</span><br>
                    <span>Credential ID ee012b91-d9e7-4034-9f36-e917e36cfa2a</span>
                </div>
            </li>

            <li class="w3-bar w3-padding-large">
                <img src="SOURCES/PICTURES/DICT.png" style="width:90px;" class="w3-bar-item">
                <div class="w3-bar-item">
                    <span><b>Build Python Web Apps with Flask</b></span><br>
                    <span>Department of Information and Communications Technology - Philippines</span><br>
                    <span>Credential ID 324f8e5c-3db1-4da5-b8fb-0a6ef354a749Credential</span>
                </div>
            </li>
        </ul>
    </div>

    <!--PORTFOLIO-->
    <div class="page w3-container w3-padding-large w3-animate-opacity" id="portfolio" style="display:none;">
    <div class="w3-bar w3-win8-steel w3-center"><h2 id="photos"><b>My Works</b></h2></div><br>
    
        <div class="w3-row-padding">
            <div class="w3-half">
                <div class="w3-card w3-content" style="width:100%;">
                    <img src="SOURCES/PORTFOLIO/PORTFOLIO 1.png" alt="Fire and Ice Chemical Industries Order Details Application" style="width:100%">
                    <div class="w3-container w3-center w3-padding-large w3-flat-clouds">
                        <span><b>Fire and Ice Chemical Industries Order Details Application</b></span><br>
                        <span>Coded with Visual Basic</span><br>
                    </div>
                </div><br>

                <div class="w3-card w3-content" style="width:100%;">
                    <img src="SOURCES/PORTFOLIO/PORTFOLIO 3.png" alt="Application Based UP Computerized Registration System" style="width:100%">
                    <div class="w3-container w3-center w3-padding-large w3-flat-clouds">
                        <span><b>Application Based UP Computerized Registration System</b></span><br>
                        <span>Coded with Visual Basic</span><br>
                    </div>
                </div><br>

                <div class="w3-card w3-content" style="width:100%;">
                    <img src="SOURCES/PORTFOLIO/PORTFOLIO.png" alt="Cheese Out!" style="width:100%">
                    <div class="w3-container w3-center w3-padding-large w3-flat-clouds">
                        <span><b>Cheese Out!</b></span><br>
                        <span>Coded with Unity</span><br>
                    </div>
                </div><br>
            </div>

            <div class="w3-half">
                <div class="w3-card w3-content" style="width:100%;">
                    <img src="SOURCES/PORTFOLIO/PORTFOLIO 2.png" alt="Payroll System" style="width:100%">
                    <div class="w3-container w3-center w3-padding-large w3-flat-clouds">
                        <span><b>Payroll System</b></span><br>
                        <span>Coded with Java / Java Swing</span><br>
                    </div>
                </div><br>

                <div class="w3-card w3-content" style="width:100%;">
                    <img src="SOURCES/PORTFOLIO/PORTFOLIO 6.png" alt="Debug by Daylight" style="width:100%">
                    <div class="w3-container w3-center w3-padding-large w3-flat-clouds">
                        <span><b>Debug by Daylight</b></span><br>
                        <span>Coded with Unity</span><br>
                    </div>
                </div><br>

                <div class="w3-card w3-content" style="width:100%;">
                    <img src="SOURCES/PORTFOLIO/PORTFOLIO 4.png" alt="NU Schoolwork Tracker" style="width:50%"><img src="SOURCES/PORTFOLIO/PORTFOLIO 4.1.png" alt="NU Schoolwork Tracker" style="width:50%">
                    <div class="w3-container w3-center w3-padding-large w3-flat-clouds">
                        <span><b>NU Schoolwork Tracker</b></span><br>
                        <span>Coded with MIT App Inventor</span><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
   
   <!-- CONTACT -->

    <?php if ($showContact): ?>
        <div class="page w3-container w3-padding-large w3-animate-opacity" id="contact" <?php if ($showContact) echo 'style="display:none;"'; ?>>
        <div class="w3-bar w3-win8-steel w3-center"><h2><b>Contact Me</b></h2></div>
        <div class="w3-section">
            <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>Quezon City</p>
            <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>ronlazaro@gmail.com</p>
        </div>
        <hr>
        <p>Send me a message:</p>
        <form action="mailto:ronlazaro@gmail.com" target="_self">
        <p><input class="w3-input w3-padding-16 w3-flat-clouds" type="text" placeholder="Subject" required name="Subject"></p>
        <p><input class="w3-input w3-padding-16 w3-flat-clouds" type="text" placeholder="Message" required name="Message"></p>
            <p><button class="w3-button w3-win8-steel w3-padding-large" type="submit"><i class="fa fa-paper-plane"></i> SEND MESSAGE</button></p>
        </form>
    <?php else: ?>
        <!-- Display a different div for users who are not logged in -->
        <div class="page w3-container w3-padding-large w3-animate-opacity" id="contact"style="display:none;">
        <div class="w3-bar w3-win8-steel w3-center"><h2><b>Contact Me</b></h2></div><br>
        <div class="w3-bar w3-win8-steel w3-center"><h4><b>Please Login to contact me</b></h4></div>
            
        </div>
    <?php endif; ?>
</div>
    
       
    
</div>

<script src="JS/Script.js"></script>


</body>
</head>
</html>
