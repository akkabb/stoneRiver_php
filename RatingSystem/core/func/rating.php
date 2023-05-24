<?php

function item_exists($table, $item) {
    $db = mysqli_connect('localhost', 'root', 'root', 'rating');
    $table = mysqli_real_escape_string($db, $table);
    $item = (int)$item;
    
    return (mysqli_result(mysqli_query($db, "SELECT COUNT(`id`) FROM `$table` WHERE `id`= $item"), 0) == 1) ? true : false;
}


function rate($table, $item, $rating){
    $db = mysqli_connect('localhost', 'root', 'root', 'rating');
    $table = mysqli_real_escape_string($db, $table);
    $item = (int)$item;
    $rating = (int)$rating;

    mysqli_query($db,
        "UPDATE `$table` SET `rating_total` = `rating_total`+ $rating, `rating_count` = `rating_count` + 1 WHERE `id` = $item"
    );

}