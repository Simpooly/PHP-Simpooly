<?php

//http://localhost/project.php?id=101 

function get_item_html($id, $item){
    $output = "<li><a href='project.php?id="
    . $id . "'><img src='"
                 . $item["img"] ."' alt='"
                 . $item["title"] ."'/>" 
                 . "<p> View Details </p>" 
                 . "</a></li>";
    return $output;
}
