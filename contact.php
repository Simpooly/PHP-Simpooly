<?php

//loads the values from form, remove any spaces extra char, and filter
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
    $message = trim(filter_input(INPUT_POST, "message", FILTER_SANITIZE_SPECIAL_CHARS));

    //make sure fields are valid
    if( $name == "" || $email == "" || $message == "" ){
        $error_message = "Please fill out required fields";
    }

    //see if hidden field is filled out--ROBOTS!!
    if (!isset($error_message) && $_POST["address"] != ""){
    $error_message = "Bad form input";
    }

    //php mailer info
    require("inc/phpmailer/PHPMailer.php");
    require("inc/phpmailer/Exception.php");
    require("inc/phpmailer/SMTP.php");

    $mail = new PHPMailer\PHPMailer\PHPMailer;

    //check if email address is valid
    if (!isset($error_message) && !$mail->ValidateAddress($email)) {
        $error_message = "Invalid Email Address";
    }

    if(!isset($error_message)){
        //building the email
        $email_body = "";
        $email_body .= "Name: " . $name . "\n";
        $email_body .= "Email: " . $email . "\n";
        $email_body .= "Message: " . $message . "\n";
        $mail->setFrom($email, $name);
        $mail->addAddress('krista.t.jekel@gmail.com');

        //Content
        $mail->isHTML(false);
        $mail->Subject = 'Web Development inquiry from ' . $name;
        $mail->Body    = $email_body;

        //send the email
        if ($mail->send()) {
            header("location:contact.php?status=thanks");
            exit;
        }else{
            $error_message = 'Message could not be sent.';
            $error_message .='Mailer Error: ' . $mail->ErrorInfo;
        }
    }
}

$pageTitle = "Contact";
$section = "contact";

include('inc/header.php');
?>




<div class="wrapper">

    <!-- <h1><?php echo $pageTitle; ?></h1> -->

    <div class="box">

        <?php
            if(isset($_GET["status"]) && $_GET["status"] == "thanks") {
                //echo "<h2 class='thanks'>Thank You! <br> animation?</h2>";
                echo "<img  class='thanks' src='inc/img/thanks.png'>";

            } else{
        ?>



        <div class="message"><?php
                if(isset($error_message)) {
                    echo "<p class='error'>" . $error_message . "</p>";
                } else {
                    echo "<h1>Email Us</h1>";
                }
            ?>
        </div>


        <div class="email">

            <form action="contact.php" method="post">
                <div class="rows">
                    <label for="name">Name:</label><br>
                    <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                    <input  id="name" type="text" name="name" value="<?php if(isset($name)) { echo $name;} ?>" ></input>
                </div>
                <div class="rows">
                    <label for="email">Email Address:</label><br>
                    <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                    <input id="email" type="text" name="email" value="<?php if(isset($name)) { echo $email;} ?>"></input>
                </div>
                <div class="rows" style="display:none">
                    <p>Please leave blank</p></input>
                    <label for="address fa-2x">Address:</label><br>
                    <input id="address" type="text" name="address" value="<?php if(isset($name)) { echo $address;} ?>">
                </div>
                <div class="rows">
                    <label for="message">Message:</label><br>
                    <i class="fa fa-commenting fa-2x" aria-hidden="true"></i>
                    <textarea id="message" type="textarea" name="message"><?php if(isset($name)) { echo $message;} ?></textarea>
                </div>
                <input class="rows" type="submit" value="Submit">
            </form>

            <div class="buttons contact">
                <a class="link" href="https://www.linkedin.com/in/krista-jekel/" target="_blank"><i class="fa fa-linkedin-square fa-4x" aria-hidden="true"></i><p>LinkedIn</p></a>
                <a class="git" href="https://github.com/Simpooly" target="_blank"><i class="fa fa-github-square fa-4x" aria-hidden="true"></i><p>GitHub</p></a>
                <a class="face" href="https://www.facebook.com/krista.jekel" target="_blank"><i class="fa fa-facebook-square fa-4x" aria-hidden="true"></i><p>Facebook</p></a>
            </div>

           <!--  <div class="buttons contact">
               <a href="https://www.linkedin.com/in/krista-jekel/" target="_blank"><img class="social" src="inc/img/Linkedin.png"><p>LinkedIn</p></a>
               <a href="https://www.facebook.com/krista.jekel" target="_blank"><img class="social" src="inc/img/Facebook.png"><p>Facebook</p></a>
               <a href="https://github.com/Simpooly" target="_blank"><img class="social" src="inc/img/Github.png"><p>GitHub</p></a>
           </div> -->
        </div>

        <?php } ?>
    </div>
</div><!-- wrapper end -->

<?php include('inc/footer.php'); ?>
