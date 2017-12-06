
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


    //toggle nav menue small
    $( ".nav-toggle" ).click(function() {
        $( ".nav-small" ).toggle();
      });

    //treehouse widget
    $('.report-card.treehouse').reportCard({
        userName: 'kristajekel',
        site: 'treehouse',
        badgesAmount: 7
    });

    $("#item > li:nth-child(odd)").attr('id', 'opposite');
      });


function truncateString(str, num) {
  // Clear out that junk in your trunk
  // if str is <== num return str
  var diff = str.length - num;

  if(str.length <= num){
      return str;
  }else if(num < 4){
      var short = str.slice(0, num);
      var oth = short.concat("...");
      return oth;
  }else if( str.length > num || num > 4){
      var long = str.slice(0, num-3);
      var ext = long.concat("...");
      return ext;

  }
  // if str is > num slice str num-3 add ...
  // if num <== 3 slice str num add ...

}

truncateString("A-tisket a-tasket A green and yellow basket", 10);

};

/*
font-family: 'Cutive Mono', monospace;
font-family: 'PT Mono', monospace;
font-family: 'Merienda', cursive;
font-family: 'Montez', cursive;
*/
