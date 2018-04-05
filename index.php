<?php

$section = "home";
include('inc/data.php');
include('inc/functions.php');
include('inc/header.php');


?>

<!-- Top open page -->

<section class="section-full vertical-cut full-height">
    <div id="jumbotron">
        <div class="home-logo">
            <p class="logo">Simpooly</p>
            <h2 class="logo2"> Web Development</h2>
        </div>
    </div>
    <!-- <a href="#top"><i class="fa fa-angle-double-down home-arrow fa-4x" aria-hidden="true"></i></a> -->
</section>


<section class="section-small sec-border">
    <div class="border-front">
    <div class="container inline">
        <h3>We've got what you need</h3>

            <p class="float-l inline">At Simpooly our web development expertise shines with creating fully customizable websites for your buisness and personal use. Focusing on simple web designs, useablility, and user experience.</p>
            <button type="button" class="btn btn-secondary btn-lg dark float-r inline"><a href="portfolio.php">View our work</a></button>
            </div>
    </div>
</section>


<section class="section-full service vertical-cut">
    <div class="full-width">
        <h3>At Your Service</h3>

        <div class="container">
<div class=" service-inner">



        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <i class="fas fa-laptop fa-9x"></i>
            <h2>Responsive Design</h2>
            <p>This design will allow your website to be easily viewed based on screen size, platform and orientation. This process consists of using flexible grids, layouts and images. Allowing your website to automatically switch to accommodate for multiple devices. </p>

          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <i class="fas fa-pencil-alt fa-9x"></i>
            <h2>Customization & Usability</h2>
            <p>We provide services to create a unique look to match your unique brand. A custom web design can help your customers flow easily through your content, reach that call to action to complete a form, pick up the phone and make a sale.</p>

          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <i class="fas fa-heart fa-9x"></i>
            <h2>Made with Love</h2>
            <p>Here at Simpooly, we care about you and your business. Quality is of top importance and everything we make is designed with intention. We put our heart and soul into each image, line and word to create total satisfaction. </p>

          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
</div>
    </div> <!-- /.container -->
    </div>
</section>

<section class="section-small sec-border">
    <div class="border-front">
    <div class="container">
    <!--     <h3>Let's Get In Touch!</h3> -->
    <div class="work-together">
        <div class="quote-top float-l">
            <p class="float-l quote">Be apart of somthing great. </p>
            <p class="float-l quote offset">Let's work together! <i class="fas fa-arrow-circle-right fa-1x"></i></p>
        </div>
        <div class="quote-bottom float-r center">
                <a href="contact.php"><i class="fa fa-envelope fa-9x float-r"></i></a>
        </div>
                </div> <!-- Work together -->
            </div><!-- Container -->
        </div> <!-- border -->
</section>
<!-- <section class="section-small primary">
    <div class="container">
    <h3>Let's Get In Touch!</h3>
    <a href="contact.php"><i class="fa fa-envelope fa-9x"></i></a>

    </div>
</div>
</section> -->


<section class="vertical-cut">
    <div class="front-album text-muted full-width">
        <div class="container front-gallery">
            <h3>Recent Projects</h3>
            <ul class="row">
                <?php
                $random = array_rand($project, 2);

                    foreach($random as $id){
                        echo get_item_detail($id, $project[$id]);
                    }
                ?>
            </ul>
            <button type="button" class="btn btn-secondary btn-lg secondary"><a href="portfolio.php">View More</a></button>
        </div>
        </div>
</section>



<?php include('inc/footer.php'); ?>
