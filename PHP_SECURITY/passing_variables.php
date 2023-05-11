<?php
$title = "Passing Variables";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once('include/head.php');?>
</head>
<body>
    <h2>Passing variables</h2>
    <main class="main_fileIncludes">
        <div class="code_display">
            <pre>
                &lt?php
                $files = scandir('images');
                unset($files[0], $files[1]);

                if (isset($_GET['image']) && file_exists("images/{$_GET['image']}")){
                    unlink("images/{$_GET['image']}");
                } 
                ?&gt
            </pre>
        </div>
    <?php
        $files = scandir('img');
        unset($files[0], $files[1]);

        if (isset($_GET['image']) && file_exists("img/{$_GET['image']}")){
            unlink("img/{$_GET['image']}");
        } 
    ?>
   
    </main>
    <footer>
        <p class="footer">2023 © Tous droits réservés</p>
    </footer>
</body>
</html>