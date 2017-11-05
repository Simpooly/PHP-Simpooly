
$(document).ready(function(){

    //------open/ close treehouse
    $(".treehouse-btn").click(function(){
        $("#popup").removeClass("hide");
        
    });

    $(".close").click(function(){
        $("#popup").addClass("hide").fadeOut(3500);
    });

    
      //------open/ close skills
      $(".skills-btn").click(function(){
        $("#skills-popup").removeClass("hide");
    });

    $(".close").click(function(){
        $("#skills-popup").addClass("hide").fadeOut(3500);
    });

    $( ".nav-toggle" ).click(function() {
        $( ".nav-small" ).toggle();
      });

    //treehouse widget
    $('.report-card.treehouse').reportCard({
        userName: 'kristajekel',
        site: 'treehouse',
        badgesAmount: 7
    });
});


