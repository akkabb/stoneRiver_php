<?php
//include '../db/connect.php';

function get_articles(){
    $articles = [];
    $db = new mysqli('127.0.0.1', 'root', 'root', 'likebutton');
    $req = $db->query("SELECT `article_id`, `article_title`, `article_likes` FROM `articles`");

    // $row = mysqli_fetch_assoc($req);
   
    while ($row = mysqli_fetch_assoc($req)){
        // echo $row['article_title'] . '<br>';
        $articles [] = [
            'article_id' => $row['article_id'],
            'article_title' => $row['article_title'],
            'article_likes' => $row['article_likes'],
        ];
    }
    // echo '<pre>' . print_r($articles, true) . '</pre>';
    return $articles;
    
}