<?php
    $title = "Quickly Return True or False";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once('include/head.php'); ?>
</head>
<body>
    <div class="container">
        <h1>Quickly Return True or False</h1>
        <span class="back_intermediate"><a href="intermediate.php">Back To Home Intermediate Session</a></span>

            <div class="code_display">
                <pre>
                    &lt?php 
                       
                    ?&gt 
                </pre>
            </div>
            <p>
                <?php
                        $rand = rand(1, 6);
                        echo  'You have rolled a ' . $rand;
                ?>
            </p>
    </div>
</body>
</html>