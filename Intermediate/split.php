<?php
    $title = "Splitting a string by spaces (Whitespace)";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once('include/head.php'); ?>
</head>
<body>
    <div class="container">
        <h1>Splitting a string by spaces (Whitespace)</h1>
        <span class="back_intermediate"><a href="intermediate.php">Back To Home Intermediate Session</a></span>

            <div class="code_display">
                <pre>
                    &lt?php 
                        $string = trim('Blue     Car    sales');
                        $keywords = preg_split('/[\s]+/', $string);
                        print_r($keywords);
                        // var_dump($keywords);
                    ?&gt 
                </pre>
            </div>
            <p>
                <?php
                     
                    $string = trim('Blue     Car    sales');
                    $keywords = preg_split('/[\s]+/', $string);
                    print_r($keywords);
                    // var_dump($keywords);
                ?>
            </p>
    </div>
</body>
</html>