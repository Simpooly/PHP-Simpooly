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
            <a href="#top"><i class="fa fa-angle-double-down home-arrow fa-4x" aria-hidden="true"></i></a>
    </div>
<div>

<div id="top" class="background">
    <div class="wrapper80">
        <div class="philosophy">
            <h3>About</h3>
            <p>I provide fully customizable websites with simple designs focusing on user experience. Each of my designs begins with a blank canvas allowing your content and ideas to determine the outcome of your professional or quirky vision. I practice responsive layout which means your website will work and resize regardless of the screen size or device (e.g. iPhone, iPad). Feel free to contact me with any questions and know I am currently available for remote work.</p>

            <div class="philosophy-concept philosophy-concept-home">
                <div class="simplicity">
                    <i class="fa fa-cog fa-5x" aria-hidden="true"></i>
                    <h4>Simple</h4>
                    <p>Simple design maximizes efficiency and allows the user to focus on what's important.</p>
                </div>
                <div class="curiosity">
                    <i class="fa fa-lightbulb-o fa-5x" aria-hidden="true"></i>
                    <h4>Skillful</h4>
                    <p>A knowledge and ability to execute the fundamentals properly and quickly.</p><!--  Be prepared and cover every little detail. -->
                </div>
                <div class="quirky">
                    <i class="fa fa-puzzle-piece fa-5x" aria-hidden="true"></i>
                    <h4>Original</h4>
                    <p>Just the right amount of spontaneity to make things interesting.</p>
                </div>
            </div>
        </div>
        <div class="home-button"><a href="about.php"><button>Want More Of Me?</button></a></div>
    </div>

</div>

<div id="background">
    <div class="wrapper80">
        <h3 class="new">Recent Projects</h3>
        <ul id="gallery-port-home">
            <?php
            $random = array_rand($project, 3);

                foreach($random as $id){
                    echo get_item_html($id, $project[$id]);
                }
            ?>
        </ul>
        <div class="home-button"><a href="portfolio.php"><button>View Other Projects</button></a></div>
    </div>
<div>

<?php include('inc/footer.php'); ?>
