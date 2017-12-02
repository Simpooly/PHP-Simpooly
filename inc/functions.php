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
    . $id . "'><h3>" . $item["title"] . "</h3>"
                    . "</a></li>";
    return $output;
}

function get_item_detail($id, $item){
    $output = "<li><a href='project.php?id="
    . $id . "'><img src='"
                 . $item["img"] ."' alt='"
                 . $item["title"] ."'/>"
                 . "<p>" . $item["title"] . "</p>"
                 . "<p>" . $item["goal"] . "</p>"
                 . "</a></li>";
    return $output;
}

