<?php

include('inc/data.php');
include('inc/functions.php');
include('inc/header.php'); ?>


<div>
    <h1>portfolio</h1>

    <ul>
        <?php 
            foreach($project as $id => $item){
                 echo get_item_html($id, $item);
            }
         ?>
    </ul>   
</div>

<?php include('inc/footer.php'); ?>
