<?php

$section = "home";
include('inc/data.php');
include('inc/functions.php');
include('inc/header.php');


?>
<div id="background">
    <div class="accent-background">
        <!-- <div class="wrapper2"> -->
            <div id="jumbotron">
                <div class="home-logo">
    				<p class="logo">Simpooly</p>
                    <h2 class="logo2"> Web Development</h2>
    			</div>
            </div>
    </div>
<div>

<div id="background">
    <div class="wrapper80">
        <h1>Recent Projects</h1>
        <ul id="gallery-port">
            <?php
            $random = array_rand($project, 3);

                foreach($random as $id){
                    echo get_item_html($id, $project[$id]);
                }
            ?>
        </ul>
    </div>
<div>

<?php include('inc/footer.php'); ?>
