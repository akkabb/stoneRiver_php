<?php
    $title = 'rating system for website';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title;?></title>
</head>
<body>
    <main class="main_rating">
        <div class="code_display">
            <pre></pre>
        </div>
        <?php
            require_once('core/db/connect.php');
            require_once('core/func/articles.php');
            require_once('core/func/rating.php');

            $maximum_rating = 5;

            if (isset($_GET['item'], $_GET['rating'])) {
                    $item = $_GET['item'];
                    $rating = $_GET['rating'];

                    if (!empty($item) && !empty($rating) && item_exists('articles', $item) == true && ($rating >= 1 && $rating <= $maximum_rating)) {
                        rate('article', $item, $rating);
                    }

                    header('Location: rating_system.php');
            }

            $articles = getArticles(1);
            if (count($articles) == 0) {
        ?>
            <p>Sorry, no articles;</p>
        <?php
            }else {
                foreach($articles as $article) {
                    ?>
                    <div class="article">
                        <h2><?php echo $article['title'];?>
                        <span>(<?php echo number_format($article['rating'], 1);?>)</span>
                        </h2>
                        <div class="rate">
                            <h3>rate :</h3>
                            <?php
                                for ($x = 1; $x <= 2; $x++){
                                    ?>
                                    <a href="rating_system.php?item=<?php echo $article['id'];?>&rating=<?php echo $x;?>" class="rate_link"><?php echo $x;?></a>
                                    <?php
                                }
                                ?>
                        </div>
                    </div>
                    <?php
                }
            }
        ?>
        
    </main>
</body>
</html>