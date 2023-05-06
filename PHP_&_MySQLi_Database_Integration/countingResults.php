<?php
    $title = "Counting Results";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
        <?php require_once('include/head.php');?>
</head>
<body>
    <main class="mysqli_main">
        <h1>Counting Results</h1>
        <div class="code_display">
            <pre>
                &lt?php
                $db = new mysqli('127.0.0.1', 'root', 'root', 'mysqli');
                $users = $db->query("SELECT email, created, CONCAT(first_name, ' ', last_name) as full_name FROM users");
                var_dump($users);
               
                &gt 
            </pre>
        </div>
        <p>
            <?php
                $db = new mysqli('127.0.0.1', 'root', 'root', 'mysqli');
                $users = $db->query("SELECT email, created, CONCAT(first_name, ' ', last_name) as full_name FROM users");
                var_dump($users);
            ?>
        </p>
        <div class="result">
            <p>We currently have <?= $users->num_rows; ?> registered users.</p>
            <?php while($user = $users->fetch_object()): ?>
                <div class="user">
                    <h5><?php echo $user->email;?></h5>
                    <p><?php echo $user->full_name;?></p>
                </div>
            <?php endwhile ?>
        </div>
        <h3>Another way to do the same</h3>
        <div class="code_display">
            <pre>
                &lt?php
                $db = new mysqli('127.0.0.1', 'root', 'root', 'pdo');

               
                &gt 
            </pre>
        </div>
        <p>
            <?php
                $db = new mysqli('127.0.0.1', 'root', 'root', 'mysqli');
                // $usersResult = $db->query("SELECT COUNT(id) FROM users");

                // $users = $usersResult->fetch_object();
                // var_dump($users);

                echo '<h3>' .'OR'. '<h3';
                 echo "<br>";

                $usersResult = $db->query("SELECT COUNT(id) as count FROM users");
                $users = $usersResult->fetch_object();
                // var_dump($users->count); 
                echo $users->count;
            ?>

        </p>
        <h3>Another Suggestions</h3>
        <div class="code_display">
            <pre></pre>
        </div>
        <p>
            <?php
                $count = $db->query("SELECT SQL_CALC_FOUND_ROWS id FROM users");
                $countResults = $db->query("SELECT FOUND_ROWS() as count");

                var_dump($countResults->fetch_object());
            ?>
        </p>
    </main>
    <footer>
        <p class="footer">2023 © Tous droits réservés</p>
    </footer>
</body>
</html>