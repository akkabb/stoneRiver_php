<?php
$title = "Static Properties and Methods";
require_once "Count.php";
?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once("include/head.php");?>
</head>
<body>
    <main class="main_static">
        <div class="code_display">
            <pre>
                &lt?php <br>
                $counter = new Count(); <br>
                $counter->increment(); <br>
                echo $counter->getCount(); <br>
                ?&gt <br>
            </pre>
        </div>
        <div class="practice">
            <?php 
                $counter = new Count();
                $counter->increment();
                echo $counter->getCount();
            ?>
        </div>
    </main>
</body>