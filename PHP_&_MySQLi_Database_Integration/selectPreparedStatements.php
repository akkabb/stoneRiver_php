<?php
    $title = "Select Prepared Statements";
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
        <?php require_once('include/head.php');?>
</head>
<body>
    <h2>Select Prepared Statements</h2>
    <div class="code_display">
            <pre>
            &lt?php 
            // real_escape_string help against sql injection
            $db = new mysqli('127.0.0.1','root','root', 'mysqli');

            $users = $db->prepare("SELECT email, first_name, last_name FROM users WHERE first_name = ?");

            $users->bind_param('s', $_GET['first_name']);
            $users->execute();
            $users->bind_result($email, $firstName, $lastName);
            //$users->fetch();

            //echo $email;

            while ($users->fetch()){
                echo $email, '<br>';
            }
            ?&gt
            </pre>
    </div>
    <p>
        <?php 
        // real_escape_string help against sql injection
            $db = new mysqli('127.0.0.1','root','root', 'mysqli');

            $users = $db->prepare("SELECT email, first_name, last_name FROM users WHERE first_name = ?");

            $users->bind_param('s', $_GET['first_name']);
            $users->execute();
            $users->bind_result($email, $firstName, $lastName);
            //$users->fetch();

            //echo $email;

            while ($users->fetch()){
                echo $email, '<br>';
            }
        ?>
    </p>
    <footer>
        <p class="footer">2023 © Tous droits réservés</p>
    </footer>
</body>
</html>