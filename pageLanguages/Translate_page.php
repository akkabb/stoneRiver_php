<?php
require_once('core/init.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/translatePage.css">
    <title>Translate page languages</title>
</head>
<body>
    <main class="main_translate">
       
        <?php
        include('menu.php');
        echo $lang['hello'], '!';
        ?>
    </main>
    <footer>
        <p class="footer">2023 © Tous droits réservés</p>
    </footer>
</body>
</html>