<?php

//loads the values from form, remove any spaces extra char, and filter
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
    $message = trim(filter_input(INPUT_POST, "message", FILTER_SANITIZE_SPECIAL_CHARS));

    //make sure fields are valid
    if( $name == "" || $email == "" || $message == "" ){
        echo "Please fill out required fields";
        exit;
    }

    //see if hidden field is filled out--ROBOTS!!
    if ( $_POST["address"] != ""){
       echo "Bad form input";
       exit;
    }

    echo "<pre>";
    $email_body = "";
    $email_body .= "Name: " . $name . "\n";
    $email_body .= "Email: " . $email . "\n";
    $email_body .= "Message: " . $message . "\n";
    echo $email_body;
    echo "</pre>";

    //To Do send email!!
    header("location:contact.php?status=thanks");
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

    <div class="contact-form">
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
    <div>
</div><!-- wrapper end -->

<?php include('inc/footer.php'); ?>