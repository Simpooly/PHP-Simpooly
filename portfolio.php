<?php
$pageTitle = "Portfolio:";
$section = "portfolio";
include('inc/data.php');
include('inc/functions.php');
include('inc/header.php');

?>


<div class="portfolio-page d-flex">
    <div class="page-wrap d-flex flex-column">

        <section>
            <h1>Project</h1>
        </section>
        <button class="btn btn-arrow">
            <span>
                <a href="#">
                    Arrow
                </a>
            </span>
        </button>

        <section>
                <!-- <h2 class="font-weight-bold">Overlay hover</h2> -->
                <div class="main-gallery d-flex flex-column flex-md-row flex-wrap" style="max-width: 1050px;">
                    <div class="main-gallery-image col-12 col-md-6 p-0" data-aos="fade-up" data-aos-easing="ease-in" data-aos-duration="600">
                        <a href="#" class="d-flex flex-column">
                            <img src="assets/test1.jpg" class="responsive-img" alt="" >
                            <div class="overlay d-flex flex-column p-4 p-md-0">
                                <p class="product-text text-uppercase">
                                    dolor in reprehenderit
                                    <span class="sr-only">.</span>
                                </p>
                                <p class="color-text text-capitalize">labore et dolore<span class="sr-only">.</span></p>
                                <p class="paragraph-text center-text">
                                    Excepteur sint occaecat cupidatat non proident, 
                                    <br aria-hidden="true">
                                    sunt in culpa qui officia deserunt mollit 
                                    <br aria-hidden="true">
                                    anim id est laborum.
                                </p>
                                <div class="btns btn-arrow d-flex" style="margin-top: 15px;">
                                    <span>
                                         View More
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="main-gallery-image col-12 col-md-6 p-0" data-aos="fade-up" data-aos-easing="ease-in" data-aos-duration="800">
                        <a href="#" class="d-flex flex-column">
                            <img src="assets/test2.jpg" class="responsive-img" alt="" >
                            <div class="overlay d-flex flex-column p-4 p-md-0">
                                <p class="product-text text-uppercase">
                                    dolor in reprehenderit
                                    <span class="sr-only">.</span>
                                </p>
                                <p class="color-text text-capitalize">labore et dolore<span class="sr-only">.</span></p>
                                <p class="paragraph-text center-text">
                                    Excepteur sint occaecat cupidatat non proident, 
                                    <br aria-hidden="true">
                                    sunt in culpa qui officia deserunt mollit 
                                    <br aria-hidden="true">
                                    anim id est laborum.
                                </p>
                                <div class="btns btn-arrow d-flex" style="margin-top: 15px;">
                                    <span>
                                         View More
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="main-gallery-image col-12 col-md-6 p-0" data-aos="fade-up" data-aos-easing="ease-in" data-aos-duration="650">
                        <a href="#" class="d-flex flex-column">
                            <img src="assets/test3.jpg" class="responsive-img" alt="" >
                            <div class="overlay d-flex flex-column p-4 p-md-0">
                                <p class="product-text text-uppercase">
                                    dolor in reprehenderit
                                    <span class="sr-only">.</span>
                                </p>
                                <p class="color-text text-capitalize">labore et dolore<span class="sr-only">.</span></p>
                                <p class="paragraph-text center-text">
                                    Excepteur sint occaecat cupidatat non proident, 
                                    <br aria-hidden="true">
                                    sunt in culpa qui officia deserunt mollit 
                                    <br aria-hidden="true">
                                    anim id est laborum.
                                </p>
                                <div class="btns btn-arrow d-flex" style="margin-top: 15px;">
                                    <span>
                                         View More
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="main-gallery-image col-12 col-md-6 p-0" data-aos="fade-up" data-aos-easing="ease-in" data-aos-duration="850">
                        <a href="#" class="d-flex flex-column">
                            <img src="assets/test4.jpg" class="responsive-img" alt="" >
                            <div class="overlay d-flex flex-column p-4 p-md-0">
                                <p class="product-text text-uppercase">
                                    dolor in reprehenderit
                                    <span class="sr-only">.</span>
                                </p>
                                <p class="color-text text-capitalize">labore et dolore<span class="sr-only">.</span></p>
                                <p class="paragraph-text center-text">
                                    Excepteur sint occaecat cupidatat non proident, 
                                    <br aria-hidden="true">
                                    sunt in culpa qui officia deserunt mollit 
                                    <br aria-hidden="true">
                                    anim id est laborum.
                                </p>
                                <div class="btns btn-arrow d-flex" style="margin-top: 15px;">
                                    <span>
                                         View More
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
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
