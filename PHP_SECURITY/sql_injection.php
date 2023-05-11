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
    <main class="main_sql">
        <div class="code_display">
            <pre>
                &lt?php
                    NEED TO BE WATCHED AGAIN 
                ?&gt
            </pre>
        </div>
        <p>
            <?php
                if (isset($_POST['email'], $_POST['pass'])){
                    
                }
            
            ?>
        </p>
    <div class="form">
        <p>
            <?php
            if (isset($total)){
                if ($total == 0){
                    echo 'INcorrect Password';
                }else{
                    echo 'Acces allowed';
                }
            }
            ?>
        </p>
        <form action="" method="post">
            <p>
                <label for="email">Email:</label>
                <input type="email" name="email" id="">
            </p>
            <p>
                <label for="email">Password:</label>
                <input type="password" name="pwd" id="">
            </p>
            <input type="submit" value="Login">
        </form>
    </div>
   
    </main>
    <footer>
        <p class="footer">2023 © Tous droits réservés</p>
    </footer>
</body>
</html>