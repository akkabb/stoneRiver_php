<?php

session_start();
$title = "sesion page";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once('include/head.php'); ?>
</head>
<body>
    <div class="container">
        <h1>Session Tuto</h1>
        <span class="back_intermediate"><a href="intermediate.php">Back To Home Intermediate Session</a></span>

        <p>
            <?php
                //$_SESSION['name'] = "Alex";

                //unset($_SESSION['name']);

                session_destroy();
            ?>
        </p>
        <p class="code_display">
            Let's display the code behind
            <pre>
                &lt?php 
                    $_SESSION['name'] = "Alex";

                    unset($_SESSION['name']);

                    session_destroy();
                ?&gt
            </pre>
        </p>
    </div>
</body>
</html>