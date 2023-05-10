<?php
$title = "Cookies";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once('include/head.php');?>
</head>
<body>
    <h2>cookies</h2>
    <main class="main_cookies">
        <div class="code_display">
            <pre>
                <?php

                ?>
            </pre>
        </div>
        <p>
            <?php 
                mysql_connect('mysql:localhost=3306;dbname=pdo','root','root');
                mysql_select_db('user_system');
                if (isset($_POST['email'], $_POST['pass'])){
                    $email = mysql_real_escape_string($_POST['email']);
                    $pwd = $_POST['pwd '];

                    $users = mysql_query("");
                    $total = mysql_result("");

                    if ($total == 1){
                        setcookie('logged_in', '1');
                    }
                }
            ?>
        </p>
    <?php
        if (isset($_SESSION['logged_in'])){
            echo 'You are logged in';
        }
    ?>
    <form action="" method="post">
        <label for="email">Email :</label>
        <input type="text" name="" id="">
        <br>
        <label for="pwd">Password :</label>
        <input type="password" name="pwd" id="">
        <br>
        <input type="submit" value="login">
    </form>
    </main>
    <footer>
        <p class="footer">2023 © Tous droits réservés</p>
    </footer>
</body>
</html>