<?php 

$section = "home";
include('inc/data.php');
include('inc/functions.php');
include('inc/header.php');


?>

    <div class="wrapper">
        <div id="jumbotron">
            <div>
				<p class="logo">Simpooly</p>
			</div>
        <h2 class="logo2"> Web Development</h2>        
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
