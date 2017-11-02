<?php 

$section = "home";
include('inc/data.php');
include('inc/functions.php');
include('inc/header.php');


?>

    <div class="wrapper">
        <div id="jumbotron">
        <h2> Create | Code</h2>
        <h3>Web Development...logo</h3>
        </div> 
        


        <div id="projects">
            <ul id="gallery">
                <?php 
                $random = array_rand($project, 3);
                
                    foreach($random as $id){
                        echo get_item_html($id, $project[$id]);
                    }
                ?>
            </ul> 
        </div> 
    </div><!-- wrapper end -->


<?php include('inc/footer.php'); ?>
