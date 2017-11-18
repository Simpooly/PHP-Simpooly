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

    <h1><?php echo $pageTitle; ?></h1>

    <div class="box">

        <?php
            if(isset($_GET["status"]) && $_GET["status"] == "thanks") {
                //echo "<h2 class='thanks'>Thank You! <br> animation?</h2>";
                echo "<img  class='thanks' src='inc/img/thanks.png'>";

            } else{
        ?>


        <div><?php
                if(isset($error_message)) {
                    echo "<p class='error'>" . $error_message . "</p>";
                } else {
                    echo "<p>If you have any questions please feel free to send me an email.</p>";
                }
            ?>
        </div>

        <div class="buttons">
            <a href="https://github.com/Simpooly" target="_blank"><img class="social" src="inc/img/Github.png"></a>
            <a href="https://www.linkedin.com/in/krista-jekel/" target="_blank"><img class="social" src="inc/img/Linkedin.png"></a>
            <a href="https://www.facebook.com/krista.jekel" target="_blank"><img class="social" src="inc/img/Facebook.png"></a>
        </div>


        <form action="contact.php" method="post">
            <div class="row">
                <label for="name">Name:</label><br>
                <input  id="name" type="text" name="name" value="<?php if(isset($name)) { echo $name;} ?>" ></input>
            </div>
            <div class="row">
                <label for="email">Email Address:</label><br>
                <input id="email" type="text" name="email" value="<?php if(isset($name)) { echo $email;} ?>"></input>
            </div>
            <div class="row" style="display:none">
                <p>Please leave blank</p></input>
                <label for="address">Address:</label><br>
                <input id="address" type="text" name="address" value="<?php if(isset($name)) { echo $address;} ?>">
            </div>
            <div class="row">
                <label for="message">Message:</label><br>
                <textarea id="message" type="textarea" name="message"><?php if(isset($name)) { echo $message;} ?></textarea>
            </div>
            <input type="submit" value="Submit">
        </form>

        <?php } ?>
    </div>
</div><!-- wrapper end -->

<?php include('inc/footer.php'); ?>
