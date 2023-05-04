<?php
    $title = "Explode (String to Array)";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once('include/head.php'); ?>
</head>
<body>
    <div class="container">
        <h1>Explode (string to array)</h1>
        <span class="back_intermediate"><a href="intermediate.php">Back To Home Intermediate Session</a></span>
            <div class="code_display">
                <pre>
                    &lt?php 
                        $likes = 'eating, drinking, the gym,nothing';
                        $likes = explode(',', $likes);

                        print_r($likes);
                        foreach($likes as $key => $like){
                            echo '&ltbr&gt' . $like, ' at position ' , $key,  '&ltbr&gt';
                        }
                    ?&gt 
                </pre>
            </div>
            <p>
                <?php
                    $likes = 'eating, drinking, the gym,nothing';
                    $likes = explode(',', $likes);

                    print_r($likes);
                    foreach($likes as $key => $like){
                        echo '<br>' . $like, ' at position ' , $key,  '<br>';
                    }
                ?>
            </p>
    </div>
</body>
</html>