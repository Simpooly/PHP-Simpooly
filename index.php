<?php

$section = "home";
include('inc/data.php');
include('inc/functions.php');
include('inc/header.php');


?>
<style>
    .full-width{
        width: 100%;
    }
    .responsive{
        max-width: 100%;
        height: auto;
        display: block;
    }
  .home-page {
    overflow: hidden;
    -webkit-font-smoothing: antialiased;
    /*border-bottom: 1px solid #eeeeee;*/
  }

  /*---------------------------------------------Clear Styles*/

  .home-page a:hover,
  .home-page a:focus {
    text-decoration: none;
  }
  .home-page .cs_container-crocs,
  .home-page .cs_container-fluid,
  .home-page .text-container,
  .home-page .image-container {
    padding-right: 0px;
    padding-left: 0px;
    margin-left: 0px;
    margin-right: 0px;
  }

  /*----------------------------------------------Core Layout*/

  .home-page .flex{
    display: flex;
    align-items: center;
    justify-content: center;
    align-content: center;
  }
  .home-page .row { flex-direction: row; }
  .home-page .column { flex-direction: column; }
  .home-page .vertical-center{ height: 100%; }
  .home-page .align-bottom{ align-self: flex-end;}
  .home-page .align-top{ align-self: flex-start; }
  .home-page .center{ margin: 0 auto; }
  .home-page .wrapper{
      width: 100%;
  }
  /*----------------------------------------------Text Styles*/

  .home-page h1{
  }
  .home-page h2{
  }
  .home-page h3{
  }
  .services  h3{


  }

  /* Small devices (Phones, under 480px) */
  @media (max-width: 480px) {
    .home-page .mobile-col{
        flex-direction: column;
    }
  }

  /* Extra Small Devices, Phones */
  @media (min-width : 481px) {
    .home-page .mobile-col{
        flex-direction: column;
    }
  }

  /* Small Devices, Tablets */
  @media (min-width : 768px) {
    .home-page .dektop-row{
        flex-direction: row;
    }
  }

  /* Medium Devices, Desktops */
  @media (min-width : 960px) {

  }

  /* Large Devices, Wide Screens */
  @media (min-width : 1200px) {
    .home-page .wrapper{
        max-width: 1300px;
    }
  }

</style>

<div class="home-page">

  <section class="jumbotron center-content">
    <div class="wrapper-logo">
      <div class="logo">
          <h1>Simpooly</h>
          <h2>Web Development</h2>
      </div>
    </div>
  </section>

 <section class="motto">
     <div class="Wrapper flex">
       <h3>We've got what you need</h3>
     </div>
   </section>

    <section class="services">
        <div class="Wrapper flex column">
<h3 class=" text-uppercase cx-heavy-brand-font flex text-center vertical-center" style="position: relative;">
<div aria-hidden="true" class="small top cx-brand-font flex "
style="margin: auto;
       position: absolute;
       top: 0; left: 0; bottom: 0; right: 0;
       display: flex;
       align-items: center;
       justify-content: center;
       text-align: center;
       font-size: 23px;
       line-height: 70px;
    ">
    Services
</div>

<div  class="large bottom cx-heavy-brand-font"
style="color:#fff;
       font-size: 70px;
       line-height: 70px;
       color: #000;
       ">
    Services
</div>
</h3>
            <!-- <h3>At your Service</h3> -->
            <div class="flex column full-width">
                <div class="flex mobile-col dektop-row full-width">
                    <div class="col-xs-12 col-md-6 image-box">
                        <img src="inc/img/Responsive.jpg" alt="" class="responsive">
                    </div>
                    <div class="col-xs-12 col-md-6 tex-box">
                        <h4>Responsive</h4>
                    </div>
                </div>
                <div class="flex mobile-col dektop-row full-width">
                    <div class="col-xs-12 col-md-6 text-box">
                        <h4>Custom</h4>
                    </div>
                    <div class="col-xs-12 col-md-6 image-box">
                        <img src="inc/img/Custom.jpg" alt="" class="responsive">
                    </div>
                </div>
                <div class="flex mobile-col dektop-row full-width">
                    <div class="col-xs-12 col-md-6 image-box">
                        <img src="inc/img/CodeComuer.jpg" alt="" class="responsive">
                    </div>
                    <div class="col-xs-12 col-md-6 text-box">
                        <h4>Something</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <section class="email-cta">
     <div class="Wrapper flex">
       <h3>Be apart of something great!</h3>
       <h4>Let's work together</h4>
       <!-- <img src="Metallic_Blooms_Upsell.png?$staticlink$" alt=""  class = ""> -->
     </div>
   </section>

   <section class="carosel">
     <div class="Wrapper flex">
       <h3>Project Gallery</h3>
     </div>
   </section>

 </div>






<?php include('inc/footer.php'); ?>

