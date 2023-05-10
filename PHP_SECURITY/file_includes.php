<?php
$title = "File Includes";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once('include/head.php');?>
</head>
<body>
    <h2>File includes</h2>
    <main class="main_fileIncludes">
    <?php
        if (isset($_GET['page'])){
            echo 'You are logged in';
        }
    ?>
   
    </main>
    <footer>
        <p class="footer">2023 © Tous droits réservés</p>
    </footer>
</body>
</html>