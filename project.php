
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
    header("location:portfolio.php");
    exit;
}


$pageTitle = $item["title"];
$section = null;
include('inc/header.php');
?>

<div>
    <divclass="wrapper">

    <h1><?php echo $pageTitle; ?></h1>

    <div class="project-picture">
        <img src="<?php echo $item["src"] ?>" alt="<?php echo $item["title"] ?>">
    </div>

    
    //goal
    <p class="goal"></p>
    //process
    <p class="process"></p>

    //troubles
    <p class=" troubles"></p>
    //outscome
    <p class="outcome"></p>

    </div>

</div>

<?php include('inc/footer.php'); ?>
