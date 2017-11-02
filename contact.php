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
    if ( $_POST["address"] != ""){
    $error_message = "Bad form input";
    }

    //php mailer info
    require("inc/phpmailer/PHPMailer.php");
    require("inc/phpmailer/SMTP.php");
    require("inc/phpmailer/Exception.php");

    $mail = new PHPMailer\PHPMailer\PHPMailer;

    //check if email address is valid
    if (!$mail->ValidateAddress($email)) {
        $error_message = "Invalid Email Address";
    }

    if(!isset($error_message)){
        //building the email
        $email_body = "";
        $email_body .= "Name: " . $name . "\n";
        $email_body .= "Email: " . $email . "\n";
        $email_body .= "Message: " . $message . "\n";
        $mail->setFrom($email, $name);
        $mail->addAddress('krista.t.jekel@gmail.com', 'Krista'); 

        //Content
        $mail->isHTML(false);
        $mail->Subject = 'Web Development inquiry from ' . $name;
        $mail->Body    = $email_body;

        //send the email
        if ($mail->send()) {
            header("location:contact.php?status=thanks"); 
            exit;   
        }
        $error_message = 'Message could not be sent.';
        $error_message .='Mailer Error: ' . $mail->ErrorInfo;
    }
}

$pageTitle = "Contact";
$section = "contact";

include('inc/header.php'); 
?>




<div class="wrapper">
	
    <h1><?php echo $pageTitle; ?></h1>
    <?php 
        if(isset($_GET["status"]) && $_GET["status"] == "thanks") {
            echo "<h2>Thank You, add js smiley or thumbs up? animation?</h2>";

        } else{
    ?>
    <p>If you have any questions or want to contact me, please feel free to send me an email.
    </p>
    <div><?php
            if(isset($error_message)) {
                echo "<p class='error'>" . $error_message . "</p>";
            }
        ?>
    </div>

    <!--<div class="contact-form">-->
        <form action="contact.php" method="post">
            <table>
                <tr>
                    <th><label for="name">Name:</label></th>
                    <td><input  id="name" type="text" name="name"></input></td>
                </tr>
                <tr>
                    <th><label for="email">Email Address:</label></th>
                    <td><input id="email" type="text" name="email"></input></td>
                </tr>
                <tr style="display:none">
                    <th><label for="address">Address:</label></th>
                    <td><input id="address" type="text" name="address">
                    <p>Please leave blank</p></input></td>
                </tr>
                <tr>
                    <th><label for="message">Message:</label></th>
                    <td><textarea id="message" type="textarea" name="message"></textarea></td>
                </tr>
                            
            </table>

            <input type="submit" value="Submit">
        </form>
        <?php } ?>
   <!-- <div>-->
</div><!-- wrapper end -->

<?php include('inc/footer.php'); ?>