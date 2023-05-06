<?php
    $title = "Updating and affected rows";
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
        <?php require_once('include/head.php');?>
</head>
<body>
    <h2>Updating and affected rows</h2>
    <div class="code_display">
            <pre>
            $db = new mysqli('127.0.0.1','root','root', 'mysqli');
            $updateUser = $db->query("UPDATE users SET last_name = 'Garrett' WHERE id = 1");

            // var_dump($updateUser);
            //echo '<pre>', var_dump($db), '</pre>';
            //Following show us how to show how many rows affected
            echo "{$db->affected_rows} row were updated";
            </pre>
    </div>
    <p>
        <?php 
            $db = new mysqli('127.0.0.1','root','root', 'mysqli');
            $updateUser = $db->query("UPDATE users SET last_name = 'Garrett' WHERE id = 1");

            // var_dump($updateUser);
            //echo '<pre>', var_dump($db), '</pre>';
            //Following show us how to show how many rows affected
            echo "{$db->affected_rows} row were updated";
        ?>
    </p>
    <footer>
        <p class="footer">2023 © Tous droits réservés</p>
    </footer>
</body>
</html>