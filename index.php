<?php 
include('inc/data.php');
include('inc/functions.php');


include('inc/header.php'); ?>

    <div class="jumbotron">
    <h2>It's SimpOoly delightful to meet you!</h2>
    </div> 
       

    <div>
    <p>Extra info</p>
    </div>


    <div id="projects">
    <ul>
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
