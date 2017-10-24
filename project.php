
<?php
    include('inc/data.php');
    include('inc/functions.php');
    //project.php?id=01

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
    <div class="wrapper">

        <h1><?php echo $pageTitle; ?></h1>

        <!--<div class="project-picture">
            <img src="<?php echo $item["img"] ?>" alt="<?php echo $item["title"] ?>">
        </div> -->

        <p class ="goal"><?php echo $item["goal"]; ?></p><br>

        <p class ="trouble"><?php echo $item["troubles"]; ?></p><br>

        <p class ="thoughts"><?php echo $item["thoughts"]; ?></p><br>

    </div>
</div>

<?php include('inc/footer.php'); ?>
