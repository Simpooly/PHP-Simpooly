
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

<div>
    <div class="wrapper box">

        <div class="project-content">

            <h1><?php echo $pageTitle; ?></h1>

            <div class="row">
                <!-- if you want breadcrumbs -->
                <div class="breadcrumbs">
                    <a class="general" href="portfolio.php">Full Portfolio</a>
                    &gt;  <?php echo $item["title"]; ?>
                </div>

                <div class="project-picture">
                    <a class="general" href="<?php echo $item["url"]; ?>" target="_blank">
                    <img src="<?php echo $item["img"] ?>" alt="<?php echo $item["title"] ?>">
                    view</a>
                </div>
                <!--if there is a second picture..or make js slideshow
                <div class="project-picture">
                    <img src="<?php echo $item["img2"] ?>" alt="<?php echo $item["title"] ?>" width="700px">
                </div>-->

                <!-- <a class="general" href="<?php echo $item["url"]; ?>" target="_blank">view</a> -->
                <div class="goal">
                    <h3>Description</h3>
                    <p class ="content"><?php echo $item["goal"]; ?></p><br>
                </div>
            </div>
            <div class="row trouble">
                <h3>Learning Curve</h3>
                <p class =" content"><?php echo $item["troubles"]; ?></p><br>

               <!--  <p class =" content thoughts"><?php echo $item["outcome"]; ?></p><br> -->

                <p class ="thoughts"><?php //echo implode(", ",$item["category"]); ?></p><br>
            </div>
        </div>

    </div>

</div>

<?php include('inc/footer.php'); ?>
