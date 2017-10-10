<?php

include('data.php');
include('functions.php');
include('header.php'); ?>


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

<?php include('footer.php'); ?>
