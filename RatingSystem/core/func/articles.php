<?php

function getArticles($limit)
{
    $db = mysqli_connect('localhost', 'root', 'root', 'rating');
    $limit = (int)$limit;
    $articles = [];
    
    $query = mysqli_query($db,"
        SELECT `id`, `title`, `rating_count`, `rating_total` FROM `articles` LIMIT $limit
    ");
    while ($row = mysqli_fetch_assoc($query)) {
        $articles[] = array( 
            'id' =>$row['id'],
            'title' => $row['title'],
            'rating' => ($row['rating_count'] != 0) ? $row['rating_total'] / $row['rating_count'] : 0,
        );
    }
    return $articles;

}
?>