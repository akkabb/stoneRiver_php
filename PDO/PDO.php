<?php
$title = 'PHP Data Objects (PDO)';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once('include/head.php');?>
</head>
<body>
    <h1>PHP Data Objects PDO</h1>
    <p>Introduction and Listing available drivers give us the informations about the php manual</p>
    <p>
        This <a href="https://www.php.net/manual/en/pdo.drivers.php">link</a> let us know which drivers are available. <br>
        <?php
            var_dump(PDO::getAvailableDrivers());
        ?>
    </p>
    <div class="setting_db">
        <p>
            The section "Setting up database" help me to fill the field needed.
        </p>
        <img src="img/Capture d'écran 2023-05-04 200831.png" alt="picture showing data base" width="80%">
    </div>
    <h2>Connecting</h2>
    <div class="code_display">
        <pre>
            try {
                $db = new PDO('mysql:localhost=3306;dbname=123','root','root');
            } catch (PDOException $e) {
                //die('Site is down');
                var_dump($e->getMessage());
            }
        </pre>
    </div>
    <p>we wanna show the error, that's why we modified the name of the db. 123 instead of pdo!</p>
    <p>
        <?php
        
        try {
            //code...
            $db = new PDO('mysql:localhost=3306;dbname=123','root','root');
        } catch (PDOException $e) {
            //throw $th;
             //die('Site is down');
             var_dump($e->getMessage());
        }
        ?>
    </p>
    <h2>Error Levels</h2>
    <p>
        <pre>
            $db = new PDO('mysql:localhost=3306;dbname=pdo','root','root');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            try{
                $db->query("INVALID");
            }catch (PDOException $e){
                //die('Something went wrong.');
                var_dump($e->getMessage());
            }
        </pre>
    </p>
    <p>
        <?php
            $db = new PDO('mysql:localhost=3306;dbname=pdo','root','root');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            try{
                $db->query("INVALID");
            }catch (PDOException $e){
                //die('Something went wrong.');
                var_dump($e->getMessage());
            }
        ?>
    </p>
    <h2>Basic query</h2>
    <div class="code_display">
            <pre>
            $updateUser = $db->query("
                UPDATE users
                SET last_name = 'Smith'
                WHERE id = 1;
            ");
            var_dump($updateUser);
            </pre>
    </div>
    <p>
        <?php
            $updateUser = $db->query("
                UPDATE users
                SET last_name = 'Smith'
                WHERE id = 1;
            ");
            var_dump($updateUser);
        ?>
    </p>
    <h2>Fetching results</h2>
    <div class="code_display">
            <pre>
                &lt?php
                    $users  = $db->query("
                        SELECT * FROM users
                    ");
                    echo '&ltpre&gt' , var_dump($users->fetchAll(PDO::FETCH_ASSOC)) ,'&lt/pre&gt';
                ?&gt
            </pre>
    </div>
    <p>
        <?php
            $users  = $db->query("
                SELECT * FROM users
            ");
             //echo '<pre>' , var_dump($users->fetchAll(PDO::FETCH_ASSOC)) ,'</pre>';
            echo '<h3>'. 'I commented the line above in order to prevent the display of the looping. I can\'t explain that behavior! ' . '</h3>';
        ?>
    </p>
    <h2>Looping</h2>
    <div class="code_display">
        <pre>
            &lt?php
                &lt?php while ($user = $users->fetchObject()): ?>
                    &ltdiv class="user">
                        &lth4>&gt?php echo $user->first_name; ?&gt&lt/h4&gt
                        &lth4>&gt?php echo $user->email; ?&gt&lt/h4&gt
                    &lt/div&gt
                &lt?php endwhile; ?&gt
            ?&gt 
        </pre>
    </div>
    <p>Another way to display that :</p>
    <div class="code_display">
        <pre>
            &lt?php
                while ($user = $users->fetch(PDO::FETCH_ASSOC)){
                    echo $user['email'], '<br>';
                }
            ?&gt
        </pre>
    </div>
    <div class="result">
            <?php
                // while ($user = $users->fetch(PDO::FETCH_ASSOC)){
                // echo $user['email'], '<br>';
            //}
            ?>
        <?php while ($user = $users->fetchObject()): ?>
            <div class="user">
                <h4><?php echo $user->first_name; ?></h4>
                <h4><?php echo $user->email; ?></h4>
            </div>
        <?php endwhile; ?>
        <?php //var_dump($user);?>
    </div>
    <h2>Fetch All</h2>
</body>
</html>