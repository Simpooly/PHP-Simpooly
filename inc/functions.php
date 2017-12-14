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
   . $id . "'><img src='"
                . $item["img"] ."' alt='"
                . $item["title"] ."'/><a/>"
                ."<a href='project.php?id="
                . $id . "'>"
                . "<div class='port-content'><h3>" . $item["title"] . "</h3>"
                . "<p>" . $item["goal"] . "</p>"
                . "</a></div></li>";
    return $output;
}

function get_item_detail($id, $item){
    $output = "<li><a href='project.php?id="
    . $id . "'><img src='"
                 . $item["img"] ."' alt='"
                 . $item["title"] ."'/><a/>"
                 ."<a href='project.php?id="
                 . $id . "'>"
                 . "<div class='port-content'><h3>" . $item["title"] . "</h3>"
                 . "<p>" . $item["goal"] . "</p>"
                 . "</a></div></li>";
    return $output;
}

