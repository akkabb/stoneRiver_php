<?php
    $title = "Pulling multiple records";
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
        <?php require_once('include/head.php');?>
</head>
<body>
    <main class="mysqli_main">
        <h1>Pulling multiple records</h1>
        <h2>Connecting using PHP</h2>
        <div class="code_display">
            <pre>
                &lt?php
                    $db = new mysqli('127.0.0.1', 'root', 'root', 'pdo');
                    $users = $db->query("SELECT email, created, CONCAT(first_name, ' ', last_name) as full_name FROM users");
                &gt 
            </pre>
        </div>
        <p>
            <?php
                $db = new mysqli('127.0.0.1', 'root', 'root', 'mysqli');
                $users = $db->query("SELECT email, created, CONCAT(first_name, ' ', last_name) as full_name FROM users");
            ?>
        </p>
        <div class="result">
            <?php while($row = $users->fetch_assoc()): ?>
                <!-- <p>Name, email, created</p> -->
                <p><?php echo $row['full_name'];?>, <?php echo $row['email'];?>, <?php echo $row['created'];?></p>
            <?php endwhile ?>
        </div>
    </main>
    <footer>
        <p class="footer">2023 © Tous droits réservés</p>
    </footer>
</body>
</html>