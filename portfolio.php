<?php


$pageTitle = "Portfolio";
$section = "portfolio";
include('inc/data.php');
include('inc/functions.php');
include('inc/header.php'); ?>


<div>
    <h1><?php echo $pageTitle; ?></h1>

    <ul id="gallery">
        <?php 
            foreach($project as $id => $item){
                 echo get_item_html($id, $item);
            }
         ?>
    </ul>   
</div>

<?php include('inc/footer.php'); ?>
