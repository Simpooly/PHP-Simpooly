
<?php
$pageTitle = "title from array";

include('data.php');
extract($my_array);
?>
// need to do if statements and loop through project[] array
//title
<h1><?php echo $pageTitle; ?></h1>
// Image
<img src="#">
//link
<a src=""></a>
//goal
<p class="goal"></p>
//process
<p class="process"></p>

//troubles
<p class=" troubles"></p>
//outscome
<p class="outcome"></p>
