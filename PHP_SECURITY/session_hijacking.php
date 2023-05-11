<?php
ini_set('session.cookie_httponly', true);//help prevent te session get by the hacker

session_start();
 // By doing thta we prevent also session hi jacking
if (isset($_SESSION['last_ip']) === false){
    $_SESSION['last_ip'] = $_SERVER['remote_ADDR'];
}

if (isset($_SESSION['last_ip']) !== $_SERVER['remote_ADDR']){
    session_unset();
    session_destroy();
}


$title = "Session hijacking";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once('include/head.php');?>
</head>
<body>
    <h2>Session hijacking</h2>
    <main class="main_sessionHijacking">
        <div class="code_display">
            <pre>
                &lt?php
                
                ?&gt
            </pre>
        </div>
    <?php
        
    ?>
   
    </main>
    <footer>
        <p class="footer">2023 © Tous droits réservés</p>
    </footer>
</body>
</html>