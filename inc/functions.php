<?php

//http://localhost/project.php?id=101


/*original front page function*/
/*function get_item_html($id, $item){
    $output = "<li><a href='project.php?id="
    . $id . "'><img src='"
                 . $item["img"] ."' alt='"
                 . $item["title"] ."'/>"
                 . "<p>" . $item["title"] . "</p>"
                 . "</a></li>";
    return $output;
}
*/

function get_item_html($id, $item){
   $output = "<li><a href='project.php?id="
   . $id . "'><img class='responsive' src='"
                . $item["img"] ."' alt='"
                . $item["title"] ."'/><a/>"
                ."<a href='project.php?id="
                . $id . "'>"
                . "<div class='port-content'><h3>" . $item["title"] . "</h3>"
                . "<p>" . $item["goal"] . "</p>"
                . "</a></div></li>";
    return $output;
}

// For Portfolio
function get_item_detail($id, $item){
    $output = "<li class='col-lg-4 col-sm-6 card'><a href='project.php?id="
    . $id . "'><img class='responsive' src='"
                 . $item["img"] ."' alt='"
                 . $item["title"] ."'/><a/>"
                 ."<a href='project.php?id="
                 . $id . "'>"
                 . "<div class='port-content'><h3>" . $item["title"] . "</h3>"
                 . "<p>" . $item["goal"] . "</p>"
                 . "</div></a></li>";
    return $output;
}

// Homepage Slider
// function get_image_slider($id, $item){
// <?php if($counter <= 1){echo 'active'; } ?>
// }

