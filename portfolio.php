<?php
$pageTitle = "Portfolio:";
$section = "portfolio";
include('inc/data.php');
include('inc/functions.php');
include('inc/header.php');

?>


<div class="portfolio-page">
    <div class="page-wrap d-flex flex-column">

        <section>
            <h1>Project</h1>
        </section>

        <section>
            <div>
                <ul>
                    <?php
                    krsort($project);
                    foreach($project as $id => $item){
                        echo "<li>
                                <a href='project.php? id=" . $id . "'>
                                    <h3>" . $item["title"] . "</h3>
                                <a/>
                            </li>";
                    }
                    ?>
                </ul>
            </div>
        </section>
    </div>
</div>

<?php include('inc/footer.php'); ?>
