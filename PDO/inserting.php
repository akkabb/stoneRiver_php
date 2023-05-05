<?php
    $title = "Inserting";
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
        <?php require_once('include/head.php');?>
</head>
<body>
    <h2>Inserting && Last Insert Id</h2>
    <div class="code_display">
            <pre>
            $db = new PDO('mysql:localhost=3306;dbname=pdo','root','root');
            if (!empty($_POST)){
                $email = $_POST['email'];
                $firstName = $_POST['first_name'];
                $lastName = $_POST['last_name'];

                $user = $db->prepare("
                    INSERT INTO users (email, first_name, last_name)
                    VALUES (:email, :first_name, :last_name)
                ");
                $user->execute([
                    ':email' => $email,
                    ':first_name' => $firstName,
                    ':last_name' => $lastName,
                ]);

                $userId = (int) $db->lastInsertId();

                var_dump($userId);

                die();
            }
            </pre>
    </div>
    <p>
        <?php 
            $db = new PDO('mysql:localhost=3306;dbname=pdo','root','root');
            if (!empty($_POST)){
                $email = $_POST['email'];
                $firstName = $_POST['first_name'];
                $lastName = $_POST['last_name'];

                $user = $db->prepare("
                    INSERT INTO users (email, first_name, last_name)
                    VALUES (:email, :first_name, :last_name)
                ");
                $user->execute([
                    ':email' => $email,
                    ':first_name' => $firstName,
                    ':last_name' => $lastName,
                ]);

                $userId = (int) $db->lastInsertId();

                var_dump($userId);

                die();
            }
        ?>
    </p>
    <form action="inserting.php" method="post">
        <div class="form_field">
            <label for="email">Email</label>
            <input type="text" name="email" id="">
        </div>
        <div class="form_field">
            <label for="first_name">Firstname</label>
            <input type="text" name="first_name" id="">
        </div>
        <div class="form_field">
            <label for="last_name">Lastname</label>
            <input type="text" name="last_name" id="">
        </div>
        <input type="submit" value="register">
    </form>
</body>
</html>