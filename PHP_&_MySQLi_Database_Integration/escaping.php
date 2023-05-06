<?php
    $title = "Escaping";
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
        <?php require_once('include/head.php');?>
</head>
<body>
    <h2>Escaping</h2>
    <div class="code_display">
            <pre>
            // real_escape_string help against sql injection
            $db = new mysqli('127.0.0.1','root','root', 'mysqli');
            if (!empty($_POST)){
                $email = $db->real_escape_string($_POST['email']);
                $firstName = $db->real_escape_string($_POST['first_name']);
                $lastName = $db->real_escape_string($_POST['last_name']);
                $insert = $db->query("
                    INSERT INTO users (email,first_name, last_name, created)
                    VALUES ('{$email}', '{$firstName}', '{$lastName}', NOW());      
                ");
            }
            </pre>
    </div>
    <p>
        <?php 
        // real_escape_string help against sql injection
            $db = new mysqli('127.0.0.1','root','root', 'mysqli');
            if (!empty($_POST)){
                $email = $db->real_escape_string($_POST['email']);
                $firstName = $db->real_escape_string($_POST['first_name']);
                $lastName = $db->real_escape_string($_POST['last_name']);
                $insert = $db->query("
                    INSERT INTO users (email,first_name, last_name, created)
                    VALUES ('{$email}', '{$firstName}', '{$lastName}', NOW());      
                ");
            }
        ?>
    </p>
    <form action="escaping.php" method="post" class="form" autocomplete="off">
        <input type="text" name="email" id="">
        <input type="text" name="first_name" id="">
        <input type="text" name="last_name" id="">
        <input type="submit" value="Sign up">
    </form>
    <footer>
        <p class="footer">2023 © Tous droits réservés</p>
    </footer>
</body>
</html>