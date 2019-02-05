<?php

$section = "home";
include('inc/data.php');
include('inc/functions.php');
include('inc/header.php');


?>

<style>
/* -------------------------------------------------------------------------------- */
/*  0. CSS Reset
/* -------------------------------------------------------------------------------- */


html, body { margin:0; padding:0;}

h1, h2, h3, h4, h5, h6, p, blockquote, address, big, cite, code, em, font, img,
, strike, sub, sup, li, ol, ul, fieldset, form, label, legend, button, table, caption, tr, th, td {
    margin:0;
    padding:0;
    border:0;
    font-weight:normal;
    font-style:normal;
    font-size:100%;
    line-height:1;
    font-family:inherit;
    text-align:left;
}

table {
    border-collapse:collapse;
    border-spacing:0;
}

ol, ul { list-style:none; }

blockquote:before, blockquote:after { content:""; }
 /* .sitewide-wrapper.main-sitewide-wrapper {
    display: none;
  }*/
/*  .home-page {
    min-height: 1px;
    border-bottom: 2px solid #ebebeb;
    overflow: hidden;
    -webkit-font-smoothing: antialiased;
  }*/
  /* -------------------------------------------------------------------------------- */
  /*  1. General Style
  /* -------------------------------------------------------------------------------- */
 .active-card {
    z-index: 1;
    box-shadow: 0 5px 15px rgba(0,0,0,.19), 0 6px 6px rgba(0,0,0,.23), 0 1px 3px rgba(0,0,0,.24);
  }
  .passive-card{
    margin: 0 7.5px 15px;
    background-color: #fff;
    box-shadow: 0 0 3px rgba(0,0,0,.12), 0 1px 3px rgba(0,0,0,.24);
  }

  .home-page a:hover,
  .home-page a:focus {
    text-decoration: none;
  }


  /*---------------------------------------------Clear Styles*/

/*  .home-page .cs_container-crocs,
  .home-page .cs_container-fluid,
  .home-page .text-container,
  .home-page .right-container {
    padding-right: 0px;
    padding-left:  0px;
    margin-left: 0px;
    margin-right: 0px;
  }*/


  /*----------------------------------------------Core Layout*/
  .home-page .jumbotron h2{
        /*font-size: 5.5em;*/
        color:  #320d2d;
        font-weight: 500;
        background-color: #fff;
        margin: 0px;
        /*margin: 15px;*/
        /*padding: 15px;*/
        font-family: 'Milonga', cursive;
        /*display:table-cell;*/
        text-align:center;
        /*width:100%;*/
        /*vertical-align: middle;*/
        /*border: 1px solid #303030;*/
  }
  .home-page .jumbotron h3{
        margin: 0px;

  }
  .home-page .jumbotron{
    background: rgb(50,13,45);
    background: -moz-linear-gradient(90deg, rgba(50,13,45,1) 51%, rgba(255,255,255,1) 50%);
    background: -webkit-linear-gradient(90deg, rgba(50,13,45,1) 51%, rgba(255,255,255,1) 50%);
    background: linear-gradient(90deg, rgba(50,13,45,1) 51%, rgba(255,255,255,1) 50%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#320d2d",endColorstr="#ffffff",GradientType=1);
    border-bottom: 1px solid #ebebeb;
    /*height: 50%; /*500px*/*/
    /*margin-top: 82px;*/
  }
  .home-page .jumbotron .logo{
        /*font-size: 5.5em;*/
      /*  color:  #320d2d;
        font-weight: 500;*/
        background-color: #fff;
        /*margin: 7px;*/
        padding: 7px;
        /*font-family: 'Milonga', cursive;*/
        /*display:table-cell;*/
        text-align:center;
        border: 1px solid #303030;
        /*width:100%;*/
        /*vertical-align: middle;*/
        /*border: 1px solid grey;*/
  }
  .home-page .wrapper{
    display: flex;
    align-items: center;
    justify-content: center;
    align-content: center;
    width: 980px;
    margin: 0 auto;
  }
  .home-page .flex-row {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: row;
  }
  .home-page .flex-column {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
  }
  .home-page .center-content{
    display: flex;
    align-items: center;
    justify-content: center;
    /*height: 100%;*/
  }

  /*------------------------------------General Button Styles*/

/*  .home-page a:hover .cx-button,
  .home-page a:focus .cx-button {
  .home-page .cx-button:hover,
  .home-page .cx-button:focus {
    color: #fff;
    background-color: #804068;
    border-color: #804068;
  }
  .home-page .cx-button {
    color: #804068;
    background-color: #fff;
    border-color: #804068;
    text-align: center;
    font-size: 16px;
    padding: 12px 0px 12px 0px;
    border-width: 2px;
    line-height: 1.0;
  }
  .home-page .btn {
    padding-left: 5px;
    padding-right: 5px;
  }
  .home-page .btn-overall {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    align-items: center;
  }*/

  /*----------------------------------------------Text Styles*/

  .home-page h2{
    color: #320d2d;
  }
  .home-page h3{
    color: #4F6D3C;
  }
  .home-page h4{
    color: #999;
  }
  .home-page .text-title{
    font-size: 18px;
    line-height: 20px;
    color: #999;
    font-weight: 700;
  }
  .home-page .text-description{
    font-size: 16px;
    line-height: 18px;
    color: #999;
  }


  /* Small devices (Phones, under 480px) */
  @media (max-width: 480px) {
    .home-page .jumbotron{
/*      background: rgb(50,13,45);
      background: -moz-linear-gradient(90deg, rgba(50,13,45,1) 50%, rgba(255,255,255,1) 50%);
      background: -webkit-linear-gradient(90deg, rgba(50,13,45,1) 50%, rgba(255,255,255,1) 50%);
      background: linear-gradient(90deg, rgba(50,13,45,1) 50%, rgba(255,255,255,1) 50%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#320d2d",endColorstr="#ffffff",GradientType=1);
      border-bottom: 1px solid #ebebeb;*/
      height: 100vh; /*500px*/
      /*margin-top: 82px;*/
    }
    .home-page .jumbotron h2{
          font-size: 16vw;
        /*  color:  #320d2d;
          font-weight: 500;*/
          /*background-color: #fff;*/
          /*margin: 3vw;*/
          /*padding: 3vw;*/
          /*font-family: 'Milonga', cursive;*/
          /*display:table-cell;*/
          /*text-align:center;*/
          /*width:100%;*/
          /*vertical-align: middle;*/
          /*border: 1px solid grey;*/
    }
    .home-page .wrapper-logo{
        padding: 5vw;
        background-color: #fff;
    }
    .home-page .jumbotron .logo{
          /*font-size: 5.5em;*/
        /*  color:  #320d2d;
          font-weight: 500;*/
          background-color: #fff;
          /*margin: 7px;*/
          padding: 3vw;
          /*font-family: 'Milonga', cursive;*/
          /*display:table-cell;*/
          text-align:center;
          border: 1px solid #303030;
          /*width:100%;*/
          /*vertical-align: middle;*/
          /*border: 1px solid grey;*/
    }
    .home-page .jumbotron h3{
       font-size: 2.8vw;
       text-transform: uppercase;
       font-weight: bold;
       text-align: center;

       position: relative;
       bottom: 2vw;
       left: 12.5vw;
          /*color:  #320d2d;*/
    }
  }

  /* Extra Small Devices, Phones */
  @media (min-width : 481px) {
    .home-page .jumbotron .logo{
          /*font-size: 5.5em;*/
        /*  color:  #320d2d;
          font-weight: 500;*/
          background-color: #fff;
          /*margin: 7px;*/
          padding: 7px;
          /*font-family: 'Milonga', cursive;*/
          /*display:table-cell;*/
          text-align:center;
          border: 1px solid #303030;
          /*width:100%;*/
          /*vertical-align: middle;*/
          /*border: 1px solid grey;*/
    }
    .home-page .jumbotron{
/*      background: rgb(50,13,45);
      background: -moz-linear-gradient(90deg, rgba(50,13,45,1) 50%, rgba(255,255,255,1) 50%);
      background: -webkit-linear-gradient(90deg, rgba(50,13,45,1) 50%, rgba(255,255,255,1) 50%);
      background: linear-gradient(90deg, rgba(50,13,45,1) 50%, rgba(255,255,255,1) 50%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#320d2d",endColorstr="#ffffff",GradientType=1);
      border-bottom: 1px solid #ebebeb;*/
      height: 50%; /*500px*/
      margin-top: 62px;
      padding: 0px;
    }
    .home-page .wrapper-logo{
        padding: 25px;
        background-color: #fff;
    }
    .home-page .jumbotron h2{
          font-size: 85px;
          /*color:  #320d2d;*/
          /*background-color: #fff;*/
          margin-bottom: -5px;
          /*padding: 15px;*/
          letter-spacing: 1px;
          /*font-family: 'Milonga', cursive;*/
          /*display:table-cell;*/
          /*text-align:center;*/
          /*width:100%;*/
          /*vertical-align: middle;*/
          /*border: 1px solid grey;*/
    }
    .home-page .jumbotron h3{
          font-size: 15px;
          text-transform: uppercase;
          font-weight: bold;
          text-align: center;
          position: relative;
          bottom: 5px;
          left: 66px;
          /*color:  #320d2d;*/
    }

  }

  /* Small Devices, Tablets */
  @media (min-width : 768px) {

  }

  /* Medium Devices, Desktops */
  @media (min-width : 992px) {

  }

  /* Large Devices, Wide Screens */
  @media (min-width : 1200px) {

  }

</style>




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
    <div class="Wrapper center-content">
      <h3>We've got what you need</h3>
    </div>
  </section>

  <section class="services">
    <div class="Wrapper">
      <h3>At your Service</h3>
      <div>
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
      </div>
    </div>
  </section>

  <section class="email-cta">
    <div class="Wrapper">
      <h3>Be apart of something great!</h3>
      <h4>Let's work together</h4>
      <img src="Metallic_Blooms_Upsell.png?$staticlink$" alt=""  class = "">
    </div>
  </section>

  <section class="carosel">
    <div class="Wrapper">
      <h3>Project Gallery</h3>
    </div>
  </section>

</div>





<?php include('inc/footer.php'); ?>

