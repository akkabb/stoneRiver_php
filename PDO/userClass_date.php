<?php
    $title = "Projet user class date";
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
        <?php require_once('include/head.php');?>
</head>
<body>
    <main class="userClass">
        <div class="code_display">
            <pre>
                &lt?php 
                class User{
                    public function getFullName(){
                        return "{$this->first_name} {$this->last_name}";
                    }
                }

                $db = new PDO('mysql:localhost=3306;dbname=pdo','root','root');
                $users = $db->query("
                    SELECT * FROM users
                ");

                $users->setFetchMode(PDO::FETCH_CLASS, 'User');
                //echo '&ltpre>&gt, var_dump($users), '&lt/pre&gt';

                while ($user = $users->fetch()){
                    echo $user->getFullName() , '&ltbr>'&gt
                }
                &gt 
            </pre>
        </div>
        <p>
            <?php
                class User{
                    protected $dates = [
                            'created',
                    ];
                    public function __construct()
                    {
                        foreach ($this->dates as $date){
                            $property = $this->{$date};
                            $this->{$date} = new DateTime($property);
                        }
                    }

                    public function getFullName(){
                        return "{$this->first_name} {$this->last_name}";
                    }

                    public function getRegisteredDate()
                    {
                        return $this->created->format('d M Y h:i:s');
                    }
                }

                $db = new PDO('mysql:localhost=3306;dbname=pdo','root','root');
                var_dump($db);
                $users = $db->query("
                    SELECT * FROM users
                ");

                $users->setFetchMode(PDO::FETCH_CLASS, 'User');
                // echo '<pre>', var_dump($users->fetch()), '</pre>';
                // die();
                // while ($user = $users->fetch()){
                //     echo $user->getFullName() , '<br>';
                // }
            ?>
        </p>
        <p>Doing the same thing but we embedded the code inside html</p>
        <div class="code_display">
            <pre></pre>
        </div>
        <div class="diplayphp_html">
            <?php while ($user = $users->fetch()): ?>
                <div class="user">
                    <h4><?php echo $user->getFullName() ?></h4>
                    <p>Registered on <?php echo $user->getRegisteredDate();?></p>
                </div>
            <?php endwhile; ?>
        </div>
    </main>
</body>
</html>
