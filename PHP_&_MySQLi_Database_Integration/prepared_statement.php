<?php
    $title = "Prepared Statement";
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
        <?php require_once('include/head.php');?>
</head>
<body>
    <h2>Prepared statement for inserting</h2>
    <div class="code_display">
            <pre>
            &lt?php 
            // real_escape_string help against sql injection
            $db = new mysqli('127.0.0.1','root','root', 'mysqli');
             if (!empty($_POST)){
                $email = $_POST['email'];
                $email = $_POST['first_name'];
                $email = $_POST['last_name'];

                $req = $db->prepare("
                   INSERT INTO users (email, first_name, last_name, created)
                   VALUES (?, ?, ?, NOW())
                ");
   
                //var_dump($req);
                $req->bind_param('sss', $email, $firstName, $lastName);
               
                $req->execute();
             }
            ?&gt
            </pre>
    </div>
    <p>
        <?php 
        // real_escape_string help against sql injection
            $db = new mysqli('127.0.0.1','root','root', 'mysqli');
             if (!empty($_POST)){
                $email = $_POST['email'];
                $email = $_POST['first_name'];
                $email = $_POST['last_name'];

                $req = $db->prepare("
                   INSERT INTO users (email, first_name, last_name, created)
                   VALUES (?, ?, ?, NOW())
                ");
   
                //var_dump($req);
                $req->bind_param('sss', $email, $firstName, $lastName);
               
                $req->execute();
             }

        ?>
    </p>
    <form action="prepared_statement.php." method="post" class="form" autocomplete="off">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="first_name" placeholder="First name">
        <input type="text" name="last_name" placeholder="Last name">
        <input type="submit" value="Sign up">
    </form>
    <footer>
        <p class="footer">2023 © Tous droits réservés</p>
    </footer>
</body>
</html>