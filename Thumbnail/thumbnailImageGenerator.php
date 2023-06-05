<?php
    require_once('image.inc.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/thumbnail.css">
    <title>Thumbnail image generator</title>
</head>
<body>
    <main class="main_thumbnail">
        <?php 
            header('Content-Type: image/png');
            create_thumbnail('Business_du_marche_du_drone.png', 'small.png' , 200, 200);
        ?>
    </main>
    <footer>
        <p class="footer">2023 © Tous droits réservés</p>
    </footer>
</body>
</html>