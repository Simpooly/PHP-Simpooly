
$(document).ready(function(){
    //------open
    $(".btn").click(function(){
        $("#popup").removeClass("hide");
        $(".hide").fadeIn(slow).fadeIn(350);
    });

    //------close
    $(".close").click(function(){
        $("#popup").addClass("hide").fadeOut(3500);
    });

    //treehouse widget
    $('.report-card.treehouse').reportCard({
        userName: 'kristajekel',
        site: 'treehouse',
        badgesAmount: 7
    });
});


