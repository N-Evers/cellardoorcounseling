<?php
    session_start();
?>
</script>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cellar Door Counseling</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <link rel="icon" href="https://cellardoorcounseling.org/favicon.ico">
    <link rel="icon" type="image/png" href="https://cellardoorcounseling.org/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    
</head>
<body>
    <div class="background">
        <div class="fixed-top nav-height" id="nav">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="nav-text nav-text-1" id="text1" href="#">Cellar Door Counseling</a>
                        <!--<a class="nav-text" href="login.php">Login</a>-->
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="break"></div>

    <div class="container_custom">
        <div class="left">
            <div class="break"></div>

            <div class="inner">
                <h1>About us</h1>
                <br>
                <!-- Edit description title -->
                <h3>We are a telehealth mental health practice.</h3>
                <br>
                <!-- Edit description body -->
                <p>We currently have a waitlist, but feel free to reach out to us.</p>
                
                <p><strong>Email:</strong> cellardoorcounselingservices@gmail.com</p>
                <p><strong>Telephone:</strong> (727)-858-1428</p>
                <br>
                <button type="button" class="btn btn-secondary" onClick="document.getElementById('contact').scrollIntoView();">Send Message</button>
            </div>
        </div>
        <div class="right"></div>
        </div>
        <div class="break"></div>
    </div>
    <div class="cream center-elem" id="contact">
        <div class="break"></div>
        <div class="custom_form">
            <p>Information</p>
            <br>
            <h1>Contact Us</h1>
            <br>
            
            <br>
            <div class="custom_form input_width align_left">
                <form method="post" id="form" type="post" action="">
                    <h5>Name</h5>
                    <input type="text" class="form-control input_height" id="nameff996" name="nameff996" placeholder="Enter your name">
                    <span id="name_error" class="warning"></span>
                    <br>
                    <h5>Email</h5>
                    <input type="text" class="form-control input_height" id="emailff996" name="emailff996" placeholder="Enter your email" >
                    <span id="email_error" class="warning"></span>
                    <br>
                    <h5>Message</h5>
                    <textarea class="area_width rounded" id="message" name="message" placeholder="  Enter your message here"></textarea>
                    <span id="message_error" class="warning"></span>
                    <br>
                    <label class="bear" for="name"></label>
                    <input class="bear" autocomplete="off" type="text" id="name" name="name" placeholder="Your name here">
                    <label class="bear" for="email"></label>
                    <input class="bear" autocomplete="off" type="email" id="email" name="email" placeholder="Your e-mail here">
                    <br>
            </div>
                    <button type="submit" class="btn btn-success mb-5" id="submit" name="submit">Submit</button>
                </form>
        </div>
        <script src="emailVal.js"></script>
        <?php 
           include "send_email.php";
        ?>

        <div class="btm-img">
        </div>
        <div>
            <br>
            <p class="nav-text-1">Cellar Door Counseling</p>
            <p>&copy 2024 Cellar Door Counseling</p>
        </div>
        <br>
    </div>
</body>
</html>v