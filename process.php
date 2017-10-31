<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

echo "<pre>";
$email_body = "";
$email_body .= "Name: " . $name . "\n";
$email_body .= "Email: " . $email . "\n";
$email_body .= "Message: " . $message . "\n";
echo $email_body;
echo "</pre>";

//To Do send email!!
//thank you page

header("location:thanks.php");
?>
