<?php

$section = "home";
include('inc/data.php');
include('inc/functions.php');
include('inc/header.php');


?>

<div class="home-page">

  <section class="jumbotron center-content">
    <div class="wrapper-logo">
      <div class="logo">
          <h2>Simpooly</h2>
          <h3>Web Development</h3>
      </div>
    </div>
  </section>

  <section class="motto">
    <div class="wrapper center-content">
      <h3>We've got what you need</h3>
    </div>
  </section>

  <section class="services">
    <div class="wrapper">
      <h3>At your Service</h3>
      <!-- <div> -->
        <ul class="service-container text-center">
          <!-- Responsive -->
          <li class="col-xs-12 col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-6">
            <a href="$httpUrl('Search-Show','cgid','santa-cruz-collection')$">
              <img src="Metallic_Blooms_Upsell.png?$staticlink$" alt=""  class = "">
              <h4>Responsive Design</h4>
              <p class="cx-brand-font">Bling! Le Classic Clog reçoit un relooking élégant dans cette édition métallique spéciale.</p>
            </a>
          </li>

          <!-- Customization -->
          <li class="col-xs-12 col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-6">
            <a href="$httpUrl('Search-Show','cgid','floral-print-shoes')$ ">
              <img src="Metallic_Blooms_Upsell.png?$staticlink$" alt=""  class = "">
              <h4>Customization and Usability</h4>
              <p class="cx-brand-font">Bling! Le Classic Clog reçoit un relooking élégant dans cette édition métallique spéciale.</p> class="link-text padding-top">Magasiner les motifs floraux</div>
            </a>
          </li>

          <!-- meticulous? -->
          <li class="col-xs-12 col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-6">
            <a href="$httpUrl('Search-Show','cgid','floral-print-shoes')$ ">
              <img src="Metallic_Blooms_Upsell.png?$staticlink$" alt=""  class = "">
              <h4>meticulous development</h4>
              <p class="cx-brand-font">Bling! Le Classic Clog reçoit un relooking élégant dans cette édition métallique spéciale.</p> class="link-text padding-top">Magasiner les motifs floraux</div>
            </a>
          </li>
        </ul>
      <!-- </div> -->
    </div>
  </section>

  <section class="email-cta">
    <div class="wrapper">
      <h3>Be apart of something great!</h3>
      <h4>Let's work together</h4>
      <img src="Metallic_Blooms_Upsell.png?$staticlink$" alt=""  class = "">
    </div>
  </section>

  <section class="carosel">
    <div class="wrapper">
      <h3>Project Gallery</h3>
    </div>
  </section>

</div>





<?php include('inc/footer.php'); ?>

