<?php
$title = "Null byte";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once('include/head.php');?>
</head>
<body>
    <h2>File includes</h2>
    <main class="main_fileIncludes">
        <div class="code_display">
            <pre></pre>
        </div>
        <?php
            if (isset($_GET['file'])){
                echo '<h3>'. 'Contents of' .'pages/{$_GET[\'file\']}.txt'.'</h3>';
                include("pages/{$_GET['file']}.txt");
            }
        ?>
   
    </main>
    <footer>
        <p class="footer">2023 © Tous droits réservés</p>
    </footer>
</body>
</html>