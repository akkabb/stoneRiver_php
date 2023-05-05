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
    <div class="code_display">
        <pre>
            &lt?php
            $peeps = $db->query("
            SELECT * FROM users
            ");
            $ForMYpeeps = $peeps->fetchAll(PDO::FETCH_OBJ);
            
            foreach ($ForMYpeeps as $peep){
                echo $peep->email, '&ltbr&gt';
            }
            ?&gt 
        </pre>
    </div>
    <p>
        <?php
            $peeps = $db->query("
            SELECT * FROM users
            ");
            $ForMYpeeps = $peeps->fetchAll(PDO::FETCH_OBJ);
            
            foreach ($ForMYpeeps as $peep){
                echo $peep->email, '<br>';
            }
            ?>
    </p>
    <p>We display it embedding with html looks like :</p>
    <div class="code_display">
        <pre>
            &lt?php
                &lt?php foreach($ForMYpeeps as $peep): ?&gt
                    &ltdiv class="peeps"?&gt
                        &lth4>&lt?php echo $peep->first_name;??&gt&lt/h4?&gt
                        &ltp>&lt?php echo $peep->email;??&gt&lt/p?&gt
                    &lt/div?&gt
                &lt?php endforeach ??&gt
            ?&gt 
        </pre>
    </div>
    <p>
        <?php foreach($ForMYpeeps as $peep): ?>
            <div class="peeps">
                <h4><?php echo $peep->first_name;?></h4>
                <p><?php echo $peep->email;?></p>
            </div>
        <?php endforeach ?>
    </p>
    <section class="fetchAsObject">
        <h2>Fetch as Object</h2>
        <p>Gud Practice is to put the Class in a separate file</p>
        <div class="code_display">
            <pre>
                &lt?php
                    class User
                    {
                        public string $first_name;
                        public string $last_name;

                            public function getFullName()
                            {
                                return "{$this->first_name} {$this->last_name}";
                            }
                    }
                    $Pool = $db->query("
                        SELECT * FROM users
                    ");
                    $Pool->setFetchMode(PDO::FETCH_CLASS, 'User');
                    //$Pool = $Pool->fetch();

                // echo '&ltpre>&gt, var_dump($Pool) , '&lt/pre&gt';
                while ($user = $Pool->fetch()){
                        echo $user->getFullName(), '&ltbr>'&gt
                }
                ?&gt 
            </pre>
        </div>
        <p>
            <?php 
                class User
                {
                    public string $first_name;
                    public string $last_name;

                        public function getFullName()
                        {
                            return "{$this->first_name} {$this->last_name}";
                        }
                }
                $Pool = $db->query("
                    SELECT * FROM users
                ");
                $Pool->setFetchMode(PDO::FETCH_CLASS, 'User');
                //$Pool = $Pool->fetch();

               // echo '<pre>', var_dump($Pool) , '</pre>';
               while ($user = $Pool->fetch()){
                    echo $user->getFullName(), '<br>';
               }
            ?>
        </p>
    </section>
    <section class="rowCount">
        <h2>Row Count</h2>
        <div class="code_display">
            <pre>
                &lt?php 
                    $PEE = $db->query("
                        SELECT count(id) AS count FROM users
                    ");

                    $PEE = $PEE->fetchObject();

                    echo $PEE->count;
                ?&gt 
            </pre>
        </div>
        <p>
            <?php
                $PEE = $db->query("
                    SELECT count(id) AS count FROM users
                ");

                $PEE = $PEE->fetchObject();

                 echo $PEE->count;
            ?>
        </p>
        <p></p>
        <div class="code_display">
            <pre></pre>
        </div>
        <p>
            <?php
                $peepsQuery = $db->query("
                    SELECT * FROM users
                ");
                // var_dump($PeepsQuery);
                $PEE = $peepsQuery->fetchAll(PDO::FETCH_OBJ);

                 echo $peepsQuery->rowCount();
            ?>
        </p>
        <p>There are <?php echo $peepsQuery->rowCount(); ?> registered users :</p>
               <?php foreach ($PEE as $user): ?>
                <?php echo $user->email?><br>
                <?php endforeach; ?>
    </section>
    <section class="project">
                <h2><a href="userClass_date.php">Project - user class dates</a></h2>
    </section>
    <section class="escaping">
        <h2><a href="escaping.php">Escaping</a></h2>
    </section>
    <section class="prepared_Statements">
        <h2>Prepared statement</h2>
        <div class="code_display">
            <pre>
                if (!empty($_GET['user'])){
                    $user = $db->prepare("SELECT * FROM users WHERE id = :user_id AND first_name = :first_name");


                    $user->execute([
                        'user_id' => $_GET['user'],
                        'first_name' => $_GET['name']
                    ]);
                    var_dump($user->fetchObject());
                }
            </pre>
        </div>
        <p>
            <?php
                if (!empty($_GET['user'])){
                    $user = $db->prepare("SELECT * FROM users WHERE id = :user_id AND first_name = :first_name");


                    $user->execute([
                        'user_id' => $_GET['user'],
                        'first_name' => $_GET['name']
                    ]);
                    var_dump($user->fetchObject());
                }
            ?>
        </p>
    </section>
    <section class="inserting">
        <h2><a href="inserting.php">Inserting && last insert id</a></h2>
    </section>
</body>
</html>