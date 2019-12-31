
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
<div class="project d-flex">
    <div class="page-wrap d-flex flex-column">
        <section>
            <h1><?php echo $pageTitle; ?></h1>
                <a href="<?php echo $item['url']; ?>" target="_blank">
                    <img src="<?php echo $item["img"] ?>" alt="<?php echo $item["title"] ?>">
                    <p ><?php echo $item["discription"]; ?></p>
                </a>
        </section>
    </div>
</div>

<?php include('inc/footer.php'); ?>
