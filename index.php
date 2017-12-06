<?php

$section = "home";
include('inc/data.php');
include('inc/functions.php');
include('inc/header.php');


?>

    <!-- <div class="wrapper2"> -->
        <div id="jumbotron">
            <div class="home-logo">
				<p class="logo">Simpooly</p>
                <h2 class="logo2"> Web Development</h2>
			</div>
        </div>


     <!--    <p class="home-projects">Projects</p>
     <div id="projects">
         <ul id="gallery" class="gallery">
             <?php
             $random = array_rand($project, 4);

                 foreach($random as $id){
                     echo get_item_html($id, $project[$id]);
                 }
             ?>
         </ul>
     </div> -->
  <!--   </div>wrapper end -->


<?php include('inc/footer.php'); ?>
