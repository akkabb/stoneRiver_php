<?php
    $title = 'xml_rss_atom';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/feeds.css">
    <title><?php echo $title; ?></title>
</head>
<body>
    <main class="main_feed">
        <div class="code_display">
            <pre>
                &ltphp <br>
                $feed_url = 'https://www.php.net/feed.atom'; <br>
                $feed =  simplexml_load_file($feed_url); <br>

                $limit = 5; <br>
                $x = 1; <br>
                //Print content of the feed <br>
                echo '<pre>', print_r($feed, true), '<pre>'; <br>
                echo '&ltul&gt'; <br>
                foreach ($feed -> entry as $item) { <br>
                    if ($x <= $limit) { <br>
                        $title = $item->title; <br>
                        $url = $item->id; <br>
                        echo '&ltli&gt&lta href="$url"&gt', $title,'&lt/a&gt&lt/li&gt'; <br>
                    } <br>
                    $x++; <br>
                } <br>
                echo '&lt/ul&gt'; <br>
                ?&gt <br>
            </pre>
        </div>
        <p>
            <?php
                $feed_url = 'https://www.php.net/feed.atom';
                $feed =  simplexml_load_file($feed_url);

                $limit = 5;
                $x = 1;

                //echo '<pre>', print_r($feed, true), '<pre>';
            ?>
            <ul>
                <?php
                foreach ($feed -> entry as $item) {
                    if ($x <= $limit) {
                        $title = $item->title;
                        $url = $item->id;
                        echo '<li><a href="$url">', $title,'</a></li>';
                    }
                    $x++;
                }
                ?>
            </ul>
        </p>
        <h3>we turn everything into function</h3>
        <div class="code_display">
            <pre>
                &ltphp <br>
                function php_net_feed($limit){ <br>
                    $output = []; <br>
                    $feed_url = 'https://www.php.net/feed.atom'; <br>
                    $feed =  simplexml_load_file($feed_url); <br>
                    $x = 1; <br>

                    foreach ($feed->entry as $item) { <br>
                        if ($x <= $limit) { <br>
                            $title = $item->title; <br>
                            $url = $item->id; <br>

                            $output[] = array( <br>
                                'title' => $title, <br>
                                'url'=> $url  <br>
                            ); <br>
                        } <br>
                        $x++; <br>
                    } <br>

                    return $output; <br>
                } <br>

                $feed = php_net_feed(5); <br>
                //print_r($feed, true); <br>
                foreach ($feed as $item) { <br>
                    echo '<li>', $item['title'], '</li>'; <br>
                } <br>
                ?&gt <br>
            </pre>
        </div>
        <h3>What the function gives us :</h3>
        <p>
            <?php
                function php_net_feed($limit){
                    $output = [];
                    $feed_url = 'https://www.php.net/feed.atom';
                    $feed =  simplexml_load_file($feed_url);
                    $x = 1;

                    foreach ($feed->entry as $item) {
                        if ($x <= $limit) {
                            $title = $item->title;
                            $url = $item->id;

                            $output[] = array(
                                'title' => $title,
                                'url'=> $url 
                            );
                        }
                        $x++;
                    }

                    return $output;
                }

                $feed = php_net_feed(5);
                //print_r($feed, true);
                foreach ($feed as $item) {
                    echo '<li>', $item['title'], '</li>';
                }
            ?>

        </p>
    </main>
</body>
</html>