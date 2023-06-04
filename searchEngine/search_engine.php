<?php
    include 'func.inc.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/regularExpressions.css">
    <title>Search engine for a Database</title>
</head>
<body>
    <div class="container">
        <main class="main_searchEngine">
            <h2>Search</h2>

            <form action="" method="post">
                <input type="text" name="keywords" placeholder='search'>
                <br><br>
                <input type="submit" value="search">
            </form>
            <br>
            <?php 
                // $db = mysqli_connect('localhost', 'root', 'root', 'searchengine');
                if (isset($_POST['keywords'])) {
                    $suffix = '';
                    $keywords_filter = htmlentities(trim($_POST['keywords']));
                    $keywords = mysqli_real_escape_string($db, $keywords_filter);
                    // echo $keywords. '<br>';

                    $errors = [];

                    if (empty($keywords)){
                        $errors[] = 'Please enter a search term';
                    }else if(strlen($keywords) < 3){
                        $errors[] = 'Your search term must be three or more characters';
                    }elseif (search_results($keywords) === false) {
                        $errors[] = 'Your search for ' .$keywords. ' returned no results';
                    }

                    if (empty($errors)){
                        $results = search_results($keywords);
                        $results_num = count($results);

                        $suffix = ($results_num != 1) ? 's' : '';
                        echo '<p>Your search for <strong>',$keywords,'</strong> returned <strong>',$results_num,'</strong> results',$suffix,'</p>';
                        
                        foreach($results as $result) {
                            echo '<p><strong>',$result['title'],'</strong> <br> ',$result['description'],' ... <br> <a href="',$result['url'],'" target="_blank">',$result['url'],'</a></p>';
                        }
                    }else {
                        foreach($errors as $error) {
                            echo $error, '<br>';
                        }
                    }
                }
            ?>
        </main>
    </div>
</body>
</html>