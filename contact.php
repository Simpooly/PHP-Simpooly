<?php
$pageTitle = "Contact";
$section = "contact";

include('inc/header.php'); 

?>


<div class="wrapper">
	
    <h1><?php echo $pageTitle; ?></h1>

    <form> 
        <input type="text" name="name"></input>
        <input type="text" name="email"></input>
        <input type="text" name="message"></input>
        <button type="submit" onclick="#" value="Submit">Submit</button>
 
        


    </form>
    <div class="buttons">
        <a><img class="social" src="inc/img/Facebook.png"></a>
        <a><img class="social" src="inc/img/Linkedin.png"></a>
        <a><img class="social" src="inc/img/Github.png"></a>
       <!-- <a><img class="social" src="inc/img/Twitter.png"></a>
        <a><img class="social" src="inc/img/Email.png"></a>-->
    </div>
</div><!-- wrapper end -->

<?php include('inc/footer.php'); ?>