<?php

// define variables and set to empty values
$fname = $lname = $email = $message = "";
$fnameErr = $lnameErr = $emailErr = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["fname"])) {
        $fnameErr = "First name is required";
    } else {
        $fname = test_input($_POST['fname']);        
        if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
            $fnameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["lname"])) {
        $lname = test_input($_POST["lname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
            $lnameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["message"])) {
        $message = "";
    } else {
        $message = test_input($_POST["message"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/style.css">

    <title>RoadRunners-24/7</title>
</head>
<body>

    <div class="container">

        <!-- container for background overlay -->
        <div class="background-overlay"></div>


        <!-- header -->
        <div class="row header" id="home">

            <!-- logo and title containers -->
            <div class="col-sm-6 logo-container">
                <a href="#default" class="logo">
                    <img src="/media/cropped-HeaderLeft-1.png" alt="RoadRunners Logo">
                    <h2 class="title">RoadRunners-24/7</h2>
                </a>       
            </div>
            
            <!-- nav container -->
            <div class="col-sm-6 nav-container">
                <div class="topnav" id="myTopnav">
                    <a href="#about-us">About Us</a>
                    <a href="#tyre-safety">Tyre Safety</a>
                    <a href="#find-us">Find Us</a>
                    <a href="#contact">Contact</a>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                    </a>
                </div>
            </div>
        </div>


        <!-- banner -->
        <div class="row banner-container">
            <div class="col-sm-offset-2 col-sm-12">
                <div class="banner">
                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <img src="/media/tyres/bridgestone-logo.png" style="width:100%">
                    </div>
            
                    <div class="mySlides fade">
                        <img src="/media/tyres/continental.png" style="width:100%">
                    </div>
            
                    <div class="mySlides fade">
                        <img src="/media/tyres/goodyear_logo_yellow.png" style="width:100%">
                    </div>
                    
                    <div class="mySlides fade">
                        <img src="/media/tyres/Hankook-Web-01.png" style="width:100%">
                    </div>
                    <div class="mySlides fade">
                        <img src="/media/tyres/pirelli.png" style="width:100%">
                    </div>
                </div>
            </div>
        </div>


        <hr>


        <!-- main content -->
        <div class="row content" id="about-us">
            <div class="main col-sm-8">
                <main class="main">
                    <h1 class="about-us">About Us</h1>
                    <p>
                        RoadRunners (East Anglian) LTD, have Suffolk's largest range of van 
                        tyres and can cater for all your tyre needs. We are suppliers of Pirelli, 
                        Goodyear, Michelin, Dunlop, Firestone as well as other well known 
                        brand name tyres, as well as area supplier for Kingpin Tyres.
                    </p>
                    <p>
                        We are also a specialised VAN/Light Commercial tyre supplier, 
                        with supply, fit and mail order services available. 
                        Fitting is by appointment in IP14.
                    </p>
                </main>
            </div>
        
            <div class="aside col-sm-4">
                <aside class="aside"><img src="/media/guarantee.png" 
                    alt="quality assurance logo">
                </aside>
            </div>
        </div>

        <hr>

        <div class="row safety-container" id="tyre-safety">
            <h1 class="safety-title">Tyre Safety</h1>
            <div class="col-sm-6">
                <iframe class="videos" width="560" height="315" src="https://www.youtube.com/embed/XFvfnJT-m-g" title="YouTube video player" 
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
            <div class="col-sm-6">
                <iframe class="videos" width="560" height="315" src="https://www.youtube.com/embed/9F-HmK6-s8M" title="YouTube video player" 
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <hr>


        <!-- Google Maps integration -->
        <div class="row map-container" id="find-us">
            <div class="col-sm-offset-1 col-sm-10">
                <h1>Find Us</h1>
                <div class="map" id="map">
                    <iframe
                        width="600"
                        height="450"
                        style="border:0"
                        loading="lazy"
                        allowfullscreen
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCwyXoI8U0jKLtzNiC57_-Hm3yM_6pnhwE
                            &q=IP144BX">
                    </iframe>
                </div>                
            </div>
        </div>

        <hr>

        <!-- contact form -->
        <div class="row contact-container" id="contact">
            <div class="col-sm-12">
                <h1 class="contact-title">Contact Us</h1>
                <!-- form action uses htmlspecialcharacters to convert special characters to html code to prevent cross site scripting 
                     the $_SERVER["PHP_SELF"] is a super global variable to tell the form to send the script to this page -->
                <form method="post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
                    <span class="error">* required field</span>
                    <br>
                    <br>
                    <label for="fname">First Name</label><span class="error"> * </span>
                    <input type="text" id="fname" name="fname" placeholder="Your first name.." value="<?php echo $fname;?>">
                    <span class="error"><?php echo $fnameErr;?></span>
                    <br><br>
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lname" placeholder="Your last name.." value="<?php echo $lname;?>">
                    <span class="error"><?php echo $lnameErr;?></span>
                    <br><br>
                    <label for="email">Email Address</label><span class="error"> * </span>
                    <input type="text" id="email" name="email" placeholder="Your email address.." value="<?php echo $email;?>">
                    <span class="error"><?php echo $emailErr;?></span>
                    <br><br>
                    <label for="message">Message</label><span class="error"> * </span>
                    <textarea id="subject" name="message" placeholder="Write your message here.." style="height:200px"><?php echo $message;?></textarea>
                
                    <input type="submit" value="Submit">
                
                  </form>
            </div>
        </div>


        <!-- return to top button -->
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


        <!-- footer -->
        <div class="row footer">
            <div class="col-sm-6 contact">
                <h1>Contact</h1>
                <h5>Email: example@aol.com</h5>
                <h5>Tel: 01234 567 890</h5>
            </div>
            <div class="col-sm-6 opening-times">
                <h1>Opening Times</h1>
                <h5>Monday: 08.00 - 17.00</h5>
                <h5>Tuesday: 08.00 - 17.00</h5>
                <h5>Wednesday: 08.00 - 17.00</h5>
                <h5>Thursday: 08.00 - 17.00</h5>
                <h5>Friday: 08.00 - 17.00</h5>
                <h5>Saturday: 08.00 - 17.00</h5>
            </div>
            <div class="col-sm-12 copyright" >
                <p>Copyright &copy; <script>document.write(new Date().getFullYear())</script> Marty Tyndall. All Rights Reserved.</p>
            </div>
        </div>        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>
</body>
</html>