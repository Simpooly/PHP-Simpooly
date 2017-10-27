<?php
$pageTitle = "Contact";
$section = "contact";

include('inc/header.php'); 

?>


<div class="wrapper contact-form">
	
    <h1><?php echo $pageTitle; ?></h1>
    <p>If you have any questions or want to contact me, please feel free to send me an email.
    </p>

    <form action="process.php" metod="post" > 
        <table>
            <tr>
                <th><label for="name">Name:</label></th>
                <td><input  id="name" type="text" name="name"></input></td>
            </tr>
            <tr>
                <th><label for="email">Email Address:</label></th>
                <td><input id="email" type="text" name="email"></input></td>
            </tr>
            <tr>
                <th><label for="message">Message:</label></th>
                <td><textarea id="message" type="textarea" name="message"></textarea></td>
            </tr>
                           
        </table>

        <input type="submit" value="Submit">
    </form>
</div><!-- wrapper end -->

<?php include('inc/footer.php'); ?>