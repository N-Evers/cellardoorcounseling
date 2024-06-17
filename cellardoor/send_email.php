<script>
    // get name field and error field
    let name_field_ = document.getElementById('nameff996');
    let name_error_ = document.getElementById('name_error');
    
    // get email field and error field
    let email_field_ = document.getElementById('emailff996');
    let email_error_ = document.getElementById('email_error');

    // get message field and error field
    let message_field_ = document.getElementById('message');
    let message_error_ = document.getElementById('message_error');

</script>

<?php

    // set deffault timezone
    date_default_timezone_set("America/New_York");

    // set cooldown period in seconds
    $cooldownPeriod = 30;

    $error = false;
    $error_message = '';
    $name_error = '';
    $email_error = '';
    $message_error = '';
    $name = '';
    $email = '';
    $message = '';
    $fakeEmail = '';
    $fakeName = '';
    $result = false;
    $cooldown_error = false;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST['nameff996'];
        $email = $_POST['emailff996'];
        $message = $_POST['message'];
        $fakeName = $_POST['name'];
        $fakeEmail = $_POST['email'];
        
        if (isset($_SESSION['last_submit_time'])) {
            // Calculate time elapsed since last submission
            $currentTime = time();
            $lastSubmitTime = $_SESSION['last_submit_time'];
            $elapsedTime = $currentTime - $lastSubmitTime;
    
            // Check if cooldown period has elapsed
            if ($elapsedTime < $cooldownPeriod) {
                $remainingTime = $cooldownPeriod - $elapsedTime;
                $cooldown_error = true;
                $error = true;
                
    ?>
            <script>
                message_error_.innerHTML = 'Please Wait <?php echo $remainingTime; ?> seconds before submitting again.';
            </script>
    <?php
            }
        }
    
        if (empty($_POST['nameff996'])) {
            $name_error = "Name is required <br>";
            $error_message = $error_message . $name_error;
            $error = true;
    ?>
            <script>
                name_error_.innerHTML = "Name is required";
            </script>
    
    <?php
        } else {
            $name = $_POST['nameff996'];
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $name_error = "Only letters and white space allowed <br>";
                $error_message = $error_message . $name_error;
                $error = true;
    ?>
            <script>
                name_error_.innerHTML = "Only letters and white space allowed";
            </script>
    
    <?php
            }
        }

        if (empty($_POST['emailff996'])) {
            $email_error = "Email is required <br>";
            $error_message = $error_message . $email_error;
            $error = true;
    ?>
            <script>
                email_error_.innerHTML = "Email is required";
            </script>
    
    <?php
            
        } else {
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email = $_POST['emailff996'];
                $email_error = "Invalid email format <br>";
                $error_message = $error_message . $email_error;
                $error = true;
    ?>
            <script>
                email_error_.innerHTML = "Invalid email format";
            </script>
    
    <?php
            }
        }

        if (empty($_POST['message'])) {
            $message_error = "Message is required <br>";
            $error_message = $error_message . $message_error;
            $error = true;
        
    ?>
            <script>
                message_error_.innerHTML = "Message is required";
            </script>
    
    <?php
        }

        if (!empty($_POST['name'] or !empty($_POST['email']))) {
            $error = true;
            throw new Error('Potential bot');
        } else {
            if ($error == false) {
                $to = '';
                $result = mail($to, $name, $message, $email);
                
                if ($result) {
                    ?>
                    <script>
                        console.log('success');
                    </script>
                    <?php
                    mail($email, 'Email Received', 'Cellardoorcounseling has received your email. We will respond to you message shortly.', 'From: Cellardoorcounseling');
                }
                
                
            } else {
                echo $error_message;
            }

        }
        if (!($cooldown_error)) {
            $_SESSION['last_submit_time'] = time();
        }
    }

?>