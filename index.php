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
            <p>We provide.....</p>

            <div class="philosophy-concept philosophy-concept-home">
                <div class="simplicity">
                    <i class="fa fa-cog fa-4x fa-fw" aria-hidden="true"></i>
                    <h4>Simplicity</h4>
                    <p>Simplicity represents the ability to look past thing that are not contributing to my life or my process so I can make room and focus on what's most important. Simple design maximizes efficiency and allows the user to not get caught up in too many excessive details.</p>
                </div>
                <div class="curiosity">
                    <i class="fa fa-lightbulb-o fa-4x fa-fw" aria-hidden="true"></i>
                    <h4>Curiosity</h4>
                    <p>Curiosity is the foundation of growth and learning. I am dedicated to gaining knowledge and knowing more about whatever language, project or situation I come to. I am capable of finding information on my own and enjoy researching things I don't yet understand.</p>
                </div>
                <div class="quirky">
                    <i class="fa fa-puzzle-piece fa-4x fa-fw" aria-hidden="true"></i>
                    <h4>Quriky</h4>
                    <p>Quirk is that extra spice, just the right amount of uniqueness and spontaneity to make things interesting.</p>
                </div>
            </div>
        </div>
        <div class="home-button"><a href="about.php"><button>More About Us</button></a></div>
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
