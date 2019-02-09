<?php
$pageTitle = "Portfolio:";
$section = "portfolio";
include('inc/data.php');
include('inc/functions.php');
include('inc/header.php');

?>

<style>
.portfolio-page{
    box-sizing: border-box;
}
ul {padding-inline-start: 0px;}
.portfolio-page .wrapper{
  display: flex;
  align-items: center;
  justify-content: center;
  align-content: center;
  /*width: 1100px;*/
  margin: 0 auto;
  box-sizing: border-box;
}
.portfolio-page .jumbotron{
    background-color: #320d2d;
    height: 35%;
    margin: 31px auto 0;
    padding: 0px;
    border-bottom: 1px solid #ebebeb;
}
.portfolio-page .vertical-cut{
    background: rgb(50,13,45);
    background: -moz-linear-gradient(90deg, rgba(50,13,45,1) 51%, rgba(255,255,255,1) 50%);
    background: -webkit-linear-gradient(90deg, rgba(50,13,45,1) 51%, rgba(255,255,255,1) 50%);
    background: linear-gradient(90deg, rgba(50,13,45,1) 51%, rgba(255,255,255,1) 50%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#320d2d",endColorstr="#ffffff",GradientType=1);
    box-sizing: border-box;
}
.portfolio-page .jumbotron h2{
    color: #fff;
}
.portfolio-page .portfolio{
    display: flex;
    flex-wrap: wrap;
    align-items:stretch;
}
.portfolio-page .card{
    display: flex;
    /*flex-wrap: wrap;*/
    align-items:stretch;
    align-content:stretch;
}
.portfolio-page .card-inner {
    border-radius: 3px;
    margin: 0 7.5px 15px;
    background-color: #fff;
    box-shadow: 0 0 3px rgba(0,0,0,.12), 0 1px 3px rgba(0,0,0,.24);
    display: flex;
    /*width: 100%;
    padding: .75rem 2rem;
    margin-bottom: 2rem;
    border: 0;*/
}
.portfolio-page .card-inner a{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;

}
.portfolio-page .btn{
    color: #fff;
    margin-top: auto;
    width: 100%;
    background: rgb(176,176,176);
    border-radius: 3px;
    /*padding: 15px;*/
    background: -moz-linear-gradient(180deg, rgba(176,176,176,1) 0%, rgba(102,102,103,1) 42%, rgba(0,0,0,1) 100%);
    background: -webkit-linear-gradient(180deg, rgba(176,176,176,1) 0%, rgba(102,102,103,1) 42%, rgba(0,0,0,1) 100%);
    background: linear-gradient(180deg, rgba(176,176,176,1) 0%, rgba(102,102,103,1) 42%, rgba(0,0,0,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#b0b0b0",endColorstr="#000000",GradientType=1);
    border: solid 1px #fff;

}


.portfolio-page .btn a{
    /*color: #fff;*/
    /*padding: 15px;*/
    /*background: rgb(176,176,176);
    border-radius: 3px;
    background: -moz-linear-gradient(180deg, rgba(176,176,176,1) 0%, rgba(102,102,103,1) 42%, rgba(0,0,0,1) 100%);
    background: -webkit-linear-gradient(180deg, rgba(176,176,176,1) 0%, rgba(102,102,103,1) 42%, rgba(0,0,0,1) 100%);
    background: linear-gradient(180deg, rgba(176,176,176,1) 0%, rgba(102,102,103,1) 42%, rgba(0,0,0,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#b0b0b0",endColorstr="#000000",GradientType=1);*/
}
.img-responsive {
    max-width: 100%;
    height: auto;
    display: block;
}
.portfolio-page .btn:hover{
    color:  #262626;
    font-weight: 600;
    border: solid 1px #262626;
    border-radius: 3px;
    background: none;
    background-color: #fff;
    box-shadow: inset 0px 0px 10px rgba(0,0,0,0.9);
}
/*.portfolio-page button a:hover{
    color:  #262626;
}*/
/*.card > img {
  margin-bottom: .75rem
}*/
.card img {
  width:100%;
}
.card-text {
  font-size: 85%;
}

@media (max-width: 480px) {

}
@media (min-width : 481px) {

}
@media (min-width : 768px) {
   /*.portfolio-page .card {width: 50%;}*/
   ul {padding-inline-start: 0px;}

}
/* Medium Devices, Desktops */
@media (min-width : 992px) {
    .portfolio-page .wrapper{
      width: 990px;
    }
}

/* Large Devices, Wide Screens */
@media (min-width : 1200px) {

}
</style>

<div class="portfolio-page">

  <section class="jumbotron center-content">
    <!-- <div class="wrapper-logo"> -->
      <!-- <div class="logo"> -->
          <h2>Recent Projects</h2>
          <!-- <button type="button" class=" btn btn-lg"> --><!-- <a type="button" class=" btn btn-lg" href="index.php">View our work</a> --><!-- </button> -->
          <!-- <h3>Web Development</h3> -->
      <!-- </div> -->
    <!-- </div> -->
  </section>

  <section class="vertical-cut">
      <div class="wrapper">
          <!-- <div class="container"> -->
              <ul class="portfolio">
                  <?php
                  krsort($project);
                  foreach($project as $id => $item){
                      echo "<li class='card col-xs-12 col-sm-6 col-md-4'>
                                <div class='card-inner'>
                              <a href='project.php? id=" . $id . "'>
                                  <img src='"
                                   . $item["img"] ."' alt='"
                                   . $item["title"] ."'/>
                                  <div class='port-content'>
                                  <h3>" . $item["title"] . "</h3>
                                      <p>" . $item["goal"] . "</p>
                                  </div>
                                  <button type='button' class=' btn btn-lg'>View our work</button>
                              <a/>
                              </div>
                          </li>";
                  }
                  ?>


              </ul>

          <!-- </div> -->
        </div>
  </section>


  <!-- <div class="album text-muted vertical-cut">
      <div class="container">
          <div class="full-width">
              <h2 id="side-title"><?php echo $pageTitle; ?></h>
               <ul class="row">
              <?php
                  krsort($project);
                  foreach($project as $id => $item){
                      echo get_item_detail($id, $item);
                  }
              ?>
          </ul>
          </div>
      </div>
  </div> -->

</div>

<?php include('inc/footer.php'); ?>
<?php include('inc/footer.php'); ?>
