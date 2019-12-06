<?php
  $section = "home";
  include('inc/data.php');
  include('inc/functions.php');
  include('inc/header.php');
?>
  <div class="homepage">
    <div class="page-wrap d-flex flex-column">

      <section class="d-flex center-text">
        <h1>Homepage</h>
      </section>

    </div>
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

