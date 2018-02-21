<?php


$pageTitle = "Portfolio:";
$section = "portfolio";
include('inc/data.php');
include('inc/functions.php');
include('inc/header.php'); ?>

<div class="wrapper">
    <div id="gallery-port" class="gallery">
            <h1 id="side-title"><?php echo $pageTitle; ?></h1>
             <ul id="item">
            <?php
                krsort($project);
                foreach($project as $id => $item){
                    echo get_item_detail($id, $item);
                }
            ?>
        </ul>
    </div>
</div>
<?php include('inc/footer.php'); ?>
