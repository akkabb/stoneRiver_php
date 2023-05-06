<?php
    $title = "Different result types";
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
        <?php require_once('include/head.php');?>
</head>
<body>
    <h2>Different result types</h2>
    <div class="code_display">
            <pre>
                &lt?php 
                $db = new mysqli('127.0.0.1', 'root', 'root', 'mysqli');
                $users = $db->query("SELECT email, created, CONCAT(first_name, ' ', last_name) as full_name, first_name, last_name FROM users");
                
                /*DIFFERENT WAY TO DISPLAY THE INFORMATION ANYTIME THE VIDEO CHANGED I DID THE SAME AND COMMENT IT */
                //$users = $users->fetch_assoc();
                // $users = $users->fetch_object();
                // $users->age = 25;
                // while ($row = $users->fetch_object())
                // {
                //     // var_dump($row);
                //     echo $row->email,'&ltbr&gt';
                // }
                //echo '&ltpre&gt' , var_dump($users) , '&lt/pre&gt';
                $user = $users->fetch_array();
                echo '&ltpre&gt' , var_dump($user) , '&lt/pre&gt';
                ?&gt
            
            </pre>
    </div>
    <p>
        <?php 
            $db = new mysqli('127.0.0.1', 'root', 'root', 'mysqli');
            $users = $db->query("SELECT email, created, CONCAT(first_name, ' ', last_name) as full_name, first_name, last_name FROM users");
            
            /*DIFFERENT WAY TO DISPLAY THE INFORMATION ANYTIME THE VIDEO CHANGED I DID THE SAME AND COMMENT IT */
            //$users = $users->fetch_assoc();
            // $users = $users->fetch_object();
            // $users->age = 25;
            // while ($row = $users->fetch_object())
            // {
            //     // var_dump($row);
            //     echo $row->email,'<br>';
            // }
            //echo '<pre>' , var_dump($users) , '</pre>';
            $user = $users->fetch_array();
            echo '<pre>' , var_dump($user) , '</pre>';
        ?>
    </p>
   
</body>
</html>