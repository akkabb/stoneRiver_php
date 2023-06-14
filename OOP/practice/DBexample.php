<?php
$title = "MySQL database example";
require_once "db.php";
?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once("include/head.php");?>
</head>
<body>
    <main class="main_dbExample">
        <h1>MySQL Database Example</h1>
        <div class="code_display">
            <pre>
                &lt?php <br>
                ?&gt <br>
            </pre>
        </div>
        <div class="practice">
            <?php 
               $db = new DB('localhost', 'root', 'root', 'oop_db');
               $db->query("SELECT `title` FROM `articles`");

               if ($db->numRows() == 0) {
                echo 'No articles';
               } else{
                foreach($db->rows() as $article) {
                    echo $article['title'] . '<br>';
                }
               }
            ?>
        </div>
    </main>
</body>