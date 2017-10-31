<?php 

$section = "home";
include('inc/data.php');
include('inc/functions.php');
include('inc/header.php');


?>

    <div class="wrapper">
        <div id="jumbotron">
        <h2>It's <?php  echo $company_name; ?> delightful to meet you!</h2>
        <h3>Desribe what you are/ do, web developer Update, code, create,</h3>
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
