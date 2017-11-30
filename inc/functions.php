<?php

//http://localhost/project.php?id=101

function get_item_html($id, $item){
    $output = "<li><a href='project.php?id="
    . $id . "'><img src='"
                 . $item["img"] ."' alt='"
                 . $item["title"] ."'/>"
                 . "<p>" . $item["title"] . "</p>"
                 . "</a></li>";
    return $output;
}

function get_item_detail($id, $item){
    $output = "<li><a href='project.php?id="
    . $id . "'><img src='"
                 . $item["img"] ."' alt='"
                 . $item["title"] ."'/>"
                 . "<p>" . $item["title"] . "</p>"
                 . "</a>"
				 . "<p>" . $item["goal"] . "</p></li>";
    return $output;
}

