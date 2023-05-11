<?php
$title = "XSS(cross-site scripting)";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once('include/head.php');?>
</head>
<body>
    <h2>XSS</h2>
    <main class="main_xss">
        <div class="code_display">
            <pre>
                &lt?php
                    NEED TO BE WATCHED AGAIN  
                ?&gt
            </pre>
        </div>
    <p>
        <?php
            if (isset($_POST['']))
        ?>
    </p>
    <div class="form">
        <form action="" method="post">
            <textarea name="post" id="" cols="30" rows="10"></textarea>
            <br>
            <input type="submit" value="Post">
        </form>
    </div>
   
    </main>
    <footer>
        <p class="footer">2023 © Tous droits réservés</p>
    </footer>
</body>
</html>