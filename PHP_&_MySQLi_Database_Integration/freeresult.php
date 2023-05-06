<?php
    $title = "Free Result";
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
        <?php require_once('include/head.php');?>
</head>
<body>
    <h2>Free Result</h2>
    <h3>This <a href="https://www.php.net/manual/en/mysqli-result.free.php">link</a> is important for this part </h3>
    <div class="code_display">
            <pre>
            &lt?php 
            // real_escape_string help against sql injection
            $db = new mysqli('127.0.0.1','root','root', 'mysqli');

            $users = $db->query("SELECT email, created, CONCAT(first_name, ' ', last_name) as full_name ,first_name, last_name FROM users");
            echo $users->fetch_object()->email;

           $users->free();
            ?&gt
            </pre>
    </div>
    <p>
        <?php 
        // real_escape_string help against sql injection
            $db = new mysqli('127.0.0.1','root','root', 'mysqli');

            $users = $db->query("SELECT email, created, CONCAT(first_name, ' ', last_name) as full_name ,first_name, last_name FROM users");
            echo $users->fetch_object()->email;

           $users->free();
        ?>
    </p>
    <footer>
        <p class="footer">2023 © Tous droits réservés</p>
    </footer>
</body>
</html>