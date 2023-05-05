<?php
    $title = "Escaping";
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
        <?php require_once('include/head.php');?>
</head>
<body>
    <div class="code_display">
            <pre>

            </pre>
    </div>
    <p>
        <?php 
            $db = new PDO('mysql:localhost=3306;dbname=pdo','root','root');
            var_dump($db);
            if (!empty($_GET['user'])){
echo $userId = $db->quote($_GET['user']);
                
                $user = $db->query("
                    SELECT * FROM users WHERE id = 1
                ");
                var_dump($user->fetchObject());
            }
        ?>
    </p>
</body>
</html>