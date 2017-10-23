<?php 

$section = "home";
include('inc/data.php');
include('inc/functions.php');
include('inc/header.php');


?>

    <div id="jumbotron">
    <h1><?php echo $company_name; ?></h1>
    <h2>It's <?php  echo $company_name; ?> delightful to meet you!</h2>
    </div> 
       


    <div id="projects">
        <ul id="front-gallery">
            <?php 
            $random = array_rand($project, 3);
            
                foreach($random as $id){
                    echo get_item_html($id, $project[$id]);
                }
            ?>
        </ul> 
    </div> 
    
</body>

<?php include('inc/footer.php'); ?>
