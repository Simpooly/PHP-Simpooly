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
    -moz-osx-font-smoothing: grayscale;
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
  .h1, .h2, .h3, .h4, h1, h2, h3, h4{
    margin: 0;
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
  .home-page .services h4{
    font-size: 25px;
    line-height: 30px;
    color: #320d2d;
    text-align: left;
  }
  .home-page .services .paragraph-text{
    font-size: 16px;
    line-height: 18px;
    color: #000;
  }
  .home-page .services .text-box .paragraph-text{
    font-size: 16px;
    line-height: 18px;
    color: #000;
    text-align: left;
  }
  .bold-text{
    font-family: 'Rubik Mono One', sans-serif;
  }
  .thin-text{
    font-family: 'Open Sans', sans-serif;
  }

/*  .test {
    position: absolute;
    width: 1000px;
    height: 450px;
    background: red;
    overflow: hidden;
    z-index: 10000;
  }*/
  .services .text-box{
  background-color: #f1f1f1cc; /*d9 cc bf b3*/
  z-index: 10;
  text-align: center;
  height: 300px;
  align-items: flex-start;
  box-shadow: 2px 2px 10px #ccc;


  }

  /*Stacking Header*/
  .stack-wrap {
    position: relative;
  }
  .stack-wrap .top{
    margin: auto;
    position: absolute;
    top: 0; left: 0; bottom: 0; right: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    font-size: 30px;
    line-height: 60px;
    color: #320d2d;
    font-family: 'Open Sans', sans-serif;
    font-weight: 900;
    letter-spacing: 3.5px;
    /*text-shadow: 2px 2px #adadad;*/
  }
  .stack-wrap .bottom{
    font-size: 65px;
    line-height: 65px;
    color: #ededed;
    font-family: 'Rubik Mono One', sans-serif;
  }
  /* Small devices (Phones, under 480px) */
  @media (max-width: 480px) {
    .home-page .mobile-col{
        flex-direction: column;
    }
    .stack-wrap .bottom{
        font-size: 13vw;
        line-height: 13vw;
    }
    .stack-wrap .top{
        font-size: 8vw;
        line-height: 13vw;
        top: 5vw;
    }
    .services .text-box{
        height: 80vw;
        justify-content: flex-start;
    }
    .home-page .services h3{
        margin: 20px auto 15px;
    }
  }

  /* Extra Small Devices, Phones */
  @media (min-width : 481px) {
    .home-page .mobile-col{
        flex-direction: column;
    }
    .services .text-box{
        height: 220px;
        padding: 15px;
        justify-content: flex-start;
    }
    .home-page .services h3{
        margin: 75px auto 5px;
    }
  }

  /* Small Devices, Tablets */
  @media (min-width : 768px) {
    .home-page .dektop-row{
        flex-direction: row;
    }
    .home-page .services h4{
      text-align: inherit;
    }
    #text-box1{
        text-align: right;
        align-items: flex-end;
    }
    #text-box2{
        text-align: left;
        align-items: flex-start;
    }
    #text-box3{
        text-align: right;
        align-items: flex-end;
    }
    .services .box-wrap{
        margin-bottom: 65px;
    }



  }

  /* Medium Devices, Desktops */
  @media (min-width : 960px) {
    .home-page .services .text-box .paragraph-text{
      color: #fff;
    }
    /*Hover Text Box*/
    .home-page .hide-desktop{
      display: none;
    }
    .services .text-box:hover,
    .services .text-box:focus{
    background-color: #000000b3; /*d9*/
    transition: .8s ease;
    color: #fff;
    }
    .home-page .services .text-box:hover h4,
    .home-page .services .text-box:focus .paragraph-text{
    color: #fff;
    transition: .2s ease;
    }
    .services .text-box{
        height: 300px;
        padding: 45px;
        justify-content: center;
    }
  }

  /* Large Devices, Wide Screens */
  @media (min-width : 1200px) {
    .home-page .wrapper{
        max-width: 1200px;
    }
    .services .text-box{
        height: 350px;
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

<!--  <section class="motto">
     <div class="Wrapper flex">
       <h3>We've got what you need</h3>
     </div>
   </section> -->

    <section class="services">
        <div class="Wrapper flex column">
            <h3 class=" text-uppercase cx-heavy-brand-font flex text-center vertical-center stack-wrap">
                <div aria-hidden="true" class="top">
                    Services
                </div>
                <div  class="bottom">
                    Services
                </div>
            </h3>
            <p class="paragraph-text" style=" margin: 25px 25px 45px 25px; text-align: center;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <!-- <h3>At your Service</h3> -->
            <div class="flex column full-width">
                <div class="flex mobile-col dektop-row full-width box-wrap">
                    <div class="col-xs-12 col-md-6 image-box">
                        <img src="inc/img/Responsive.jpg" alt="" class="responsive">
                    </div>
                    <div class="flex column col-xs-12 col-md-6 text-box col-md-pull-1" id="text-box1">
                        <h4 class="bold-text">Responsive<br aria-hidden="true">Design</h4>
                        <p class="paragraph-text test1 hide-desktop">Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                    </div>
                </div>
                <div class="flex mobile-col dektop-row full-width box-wrap">
                    <div class="flex column col-xs-12 hidden-xs col-md-6 text-box col-md-push-1" id="text-box2">
                        <h4 class="bold-text">Custom<br aria-hidden="true">Websites</h4>
                        <p class="paragraph-text test2 hide-desktop">Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                    </div>
                    <div class="col-xs-12 col-md-6 image-box">
                        <img src="inc/img/Custom.jpg" alt="" class="responsive">
                    </div>
                    <div class="flex column col-xs-12 visible-xs col-md-6 text-box col-md-push-1" id="text-box2">
                        <h4 class="bold-text">Custom<br aria-hidden="true">Websites</h4>
                        <p class="paragraph-text test2 hide-desktop">Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                    </div>
                </div>
                <div class="flex mobile-col dektop-row full-width box-wrap">
                    <div class="col-xs-12 col-md-6 image-box">
                        <img src="inc/img/CodeComuer.jpg" alt="" class="responsive">
                    </div>
                    <div class="flex column col-xs-12 col-md-6 text-box col-md-pull-1" id="text-box3">
                        <h4 class="bold-text">Something<br aria-hidden="true">Else</h4>
                        <p class="paragraph-text test3 hide-desktop">Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
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
        <h3 class=" text-uppercase cx-heavy-brand-font flex text-center vertical-center stack-wrap">
            <div aria-hidden="true" class="top">
                Gallery
            </div>
            <div  class="bottom">
                Gallery
            </div>
        </h3>
     </div>
   </section>

 </div>

<script type="text/javascript">
    $("#text-box1").hover(function() {
        $('.test1').removeClass('hide-desktop');
        $('#text-box1 h4').slideDown(200);
    }, function() {
        $('.test1').addClass('hide-desktop')
      ;
    });
    $("#text-box2").hover(function() {
        $('.test2').removeClass('hide-desktop');
    }, function() {
        $('.test2').addClass('hide-desktop')
      ;
    });
    $("#text-box3").hover(function() {
        $('.test3').removeClass('hide-desktop');
    }, function() {
        $('.test3').addClass('hide-desktop')
      ;
    });

    $("text-box1").mouseenter(function () {
        $('h4').slideDown(200);
        // $(this).css('padding-top', '5px');
    }).mouseleave(function () {
        $('h4').slideUp(500);
        // $(this).css('padding-top', '25px');
    });
</script>




<?php include('inc/footer.php'); ?>

