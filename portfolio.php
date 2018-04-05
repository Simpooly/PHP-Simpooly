<?php


$pageTitle = "Portfolio:";
$section = "portfolio";
include('inc/data.php');
include('inc/functions.php');
include('inc/header.php'); ?>

<section class="vertical-cut">
    <div class="full-width">
        <div class="container">
            <h3>Recent Projects</h3>
            <ul class="portfolio">
                <?php
                krsort($project);
                foreach($project as $id => $item){
                    echo "<li class='card'>
                            <a href='project.php?id=" . $id . "'>
                                <img src='"
                                 . $item["img"] ."' alt='"
                                 . $item["title"] ."'/>
                                <div class='port-content'>
                                <h3>" . $item["title"] . "</h3>
                                    <p>" . $item["goal"] . "</p>
                                </div>
                            <a/>
                        </li>";
                }
                ?>


            </ul>

        </div>
        </div>
</section>


<!-- <div class="album text-muted vertical-cut">
    <div class="container">
        <div class="full-width">
            <h2 id="side-title"><?php echo $pageTitle; ?></h>
             <ul class="row">
            <?php
                krsort($project);
                foreach($project as $id => $item){
                    echo get_item_detail($id, $item);
                }
            ?>
        </ul>
        </div>
    </div>
</div> -->
<?php include('inc/footer.php'); ?>
