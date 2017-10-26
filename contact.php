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

</div><!-- wrapper end -->

<?php include('inc/footer.php'); ?>