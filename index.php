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
    font-size: 14px;
    line-height: 20px;
    color: #000;
    margin-top: 5px;
  }
  .home-page .services .text-box .paragraph-text{
    font-size: 14px;
    line-height: 20px;
    color: #000;
    margin-top: 5px;
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
      height: auto;
      justify-content: flex-start;
      padding: 5vw;
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
        height: auto;
        padding: 15px;
        justify-content: flex-start;
    }
    .home-page .services h3{
        margin: 75px auto 5px;
    }
    .home-page .carosel h3{
        margin: 45px auto;
    }
  }

  /* Small Devices, Tablets */
  @media (min-width : 768px) {
    .home-page .dektop-row{
        flex-direction: row;
    }
    .services .text-box{
        height: 220px;
        padding: 15px;
        justify-content: flex-start;
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
    .home-page .services .text-box .paragraph-text{
      text-align: inherit;
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
            At Simpooly our web development expertise shines with creating fully customizable 
            <br class=" hidden-xs ">
            websites for your buisness and personal use. Focusing on simple web designs,
            <br class=" hidden-xs">
             useablility, and user experience.
            </p>
            <!-- <h3>At your Service</h3> -->
            <div class="flex column full-width">
                <div class="flex mobile-col dektop-row full-width box-wrap">
                    <div class="col-xs-12 col-md-6 image-box">
                        <img src="inc/img/Custom.jpg" alt="" class="responsive">
                    </div>
                    <div class="flex column col-xs-12 col-md-6 text-box col-md-pull-1" id="text-box1">
                        <h4 class="bold-text">Research</h4>
                        <p class="paragraph-text test1 hide-desktop">
                            Understanding the client’s subject matter completely and building
                            <br class=" visible-lg">
                            upon the knowledge related to it, is our top priority. When we
                            <br class=" visible-lg">
                            become intimately familiar with the intentions and thoughts
                            <br class=" visible-lg">
                            of the subject matter it allows us to determine methods to
                            <br class=" visible-lg">
                            address the customer’s specific needs and requirements.
                        </p>
                    </div>
                </div>
                <div class="flex mobile-col dektop-row full-width box-wrap">
                    <div class="flex column col-xs-12 hidden-xs col-md-6 text-box col-md-push-1" id="text-box2">
                        <h4 class="bold-text">Design</h4>
                        <p class="paragraph-text test2 hide-desktop">
                        Attracting the attention of target market audiences can enhance
                        <br class=" visible-lg">
                        the quality of the messages that are being portrayed. Through
                        <br class=" visible-lg">
                        simple and responsive design we strive to use effective
                        <br class=" visible-lg">
                        techniques that adds value and creates an
                        <br class=" visible-lg">
                        innovative atmosphere.</p>
                    </div>
                    <div class="col-xs-12 col-md-6 image-box">

                        <img src="inc/img/Responsive.jpg" alt="" class="responsive">
                    </div>
                    <div class="flex column col-xs-12 visible-xs col-md-6 text-box col-md-push-1" id="text-box2">
                        <h4 class="bold-text">Design</h4>
                        <p class="paragraph-text test2 hide-desktop">
                        Attracting the attention of target market audiences can enhance the quality of the messages that are being portrayed. Through simple and responsive design we strive to use effective techniques that adds value and creates an innovative atmosphere.</p>
                    </div>
                </div>
                <div class="flex mobile-col dektop-row full-width box-wrap">
                    <div class="col-xs-12 col-md-6 image-box">
                        <img src="inc/img/CodeComuer.jpg" alt="" class="responsive">
                    </div>
                    <div class="flex column col-xs-12 col-md-6 text-box col-md-pull-1" id="text-box3">
                        <h4 class="bold-text">Develop</h4>
                        <p class="paragraph-text test3 hide-desktop">
                            Our findings from our research and design phases are integrated
                            <br class=" visible-lg">
                            into the development and production process of the website.
                            <br class=" visible-lg">
                            Our up to date understanding of technology allows for
                            <br class=" visible-lg">
                            clean effective coding that produce commercial
                            <br class=" visible-lg">
                            products for the customer.</p>
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

   <section class="carosel-wrap">
     <div class="Wrapper flex column">
        <h3 class=" text-uppercase cx-heavy-brand-font flex text-center vertical-center stack-wrap">
            <div aria-hidden="true" class="top">
                Gallery
            </div>
            <div  class="bottom">
                Gallery
            </div>
        </h3>

        <div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <ul class="carousel-inner" style="padding: 0;">
      <li class="item active">
        <img src="inc/img/screenshot/101/01.png" alt="Los Angeles" style="width:100%;">
      </li>

      <li class="item">
        <img src="inc/img/screenshot/102/01.png" alt="Chicago" style="width:100%;">
      </li>
    
      <li class="item">
        <img src="inc/img/screenshot/103/01.png" alt="New york" style="width:100%;">
      </li>
    </ul>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
     </div>
   </section>

   <!-- <section class="vertical-cut">
    <div class="front-album text-muted full-width">
        <div class="container front-gallery">
            <ul class="row">
             <?php
                $random = array_rand($project, 3);

                    foreach($random as $id){
                        echo get_item_detail($id, $project[$id]);
                    }
            ?> 
            </ul>
        </div>
    </div>
</section> -->

   <!-- <section class="carosel">
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
   </section> -->

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

