<?php
    $title = "Create a like button";
    include 'core/init.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once'include/head.php';?>
</head>
<body>
    <?php 

        if (article_exists(1) === true) {
            echo 'Exists!';
        }
        $articles = get_articles();
        // get_articles();
        // print_r(get_articles());
    
        // //print_r($articles);
        // echo count($articles);
        if (count($articles) == 0){
                echo 'sorry, there are no articles.';
        }else{
            echo '<ul>';
            foreach( $articles as $article){
                $title = $article['article_title'];
                $likes = $article['article_likes'];
                $article_id = $article['article_id'];
            echo"<p><li class=\"list\"> $title </li></p><p><a class=\"like_btn\" href=\"#\" onclick=\"like_add($article_id);\">Like </a><span id=\"articles_",$article_id,"_likes\">$likes</span> like this</p>";
        }
        echo '</ul>';
        }
    ?>
    <p id="demo"></p>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/like.js"></script>
</body>
</html>