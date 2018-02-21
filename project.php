
<?php
    include('inc/data.php');
    include('inc/functions.php');
    //project.php?id=101

    if(isset($_GET["id"])){
        $id = $_GET["id"];
        if(isset($project[$id])){
        $item = $project[$id];
        }
    }

    if(!isset($item)){
        //header() redirects to another page or location, look for different page
        header("location:portfolio.php");
        exit;
    }

    $pageTitle = $item["title"];
    $section = null;

    include('inc/header.php');
?>


    <div class="wrapper">

        <div class="project-content">

            <div class="project-top">
                <!-- if you want breadcrumbs -->
                <!--<div class="breadcrumbs">
                     <a class="general" href="portfolio.php">Full Portfolio</a>
                      &gt;  <?php echo $item["title"]; ?>
                      </div> -->
               <div id="side-title-project" class="goal">
                     <h3>Overview</h3>
                     <p class ="content"><?php echo $item["goal"]; ?></p><br>
                     <a href="#bottom"><i class="fa fa-angle-double-down fa-3x proj-arrow" aria-hidden="true"></i></a>
                </div>
               <div class="project-picture">
                     <h1><?php echo $pageTitle; ?></h1>
                     <!-- <a class="general" href="<?php echo $item["url"]; ?>" target="_blank"> -->
                     <img src="<?php echo $item["img"] ?>" alt="<?php echo $item["title"] ?>">
                     <!-- </a> -->
                </div>

                <!-- For a link to the page -->
                <!-- <a class="general" href="<?php echo $item["url"]; ?>" target="_blank">view</a> -->

            </div>

            <div id="bottom" class="project-bottom">
                <div class="bottom-inner">

                    <h3>Description</h3>
                    <p class =" content"><?php echo $item["discription"]; ?></p><br>

                    <h3>Learning Curve</h3>
                    <p class =" content"><?php echo $item["troubles"]; ?></p><br>
                </div>
            </div>
        </div> <!-- Project Content End -->
    </div> <!-- Wrapper End -->

<?php include('inc/footer.php'); ?>
