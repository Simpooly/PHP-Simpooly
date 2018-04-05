
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




<section class="vertical-cut full-height-vh">
    <div class="full-width project-page">
        <h1><?php echo $pageTitle; ?></h1>
           <div class="project-picture">

                <a class="general" href="<?php echo $item['url']; ?>" target="_blank">
                 <img src="<?php echo $item["img"] ?>" alt="<?php echo $item["title"] ?>">

                 </a>
            </div>
            <!-- For a link to the page -->
            <!-- <a class="general" href="<?php echo $item["url"]; ?>" target="_blank">view</a> -->


            <div class="project-content">

                    <h3>Description</h3>
                    <p class =" content"><?php echo $item["discription"]; ?></p><br>

            </div>
    </div>
</section>
<?php include('inc/footer.php'); ?>
