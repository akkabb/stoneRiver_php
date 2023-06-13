<?php 
$title = "calculator app";
require_once("calculator.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once("include/head.php"); ?>
</head>
<body>
    <main class="main_calculator">
        <div class="code_display">
            <h3>Display the code :</h3>
            <p>Showing the problem happen because total is protected and not public</p>
            <pre>
                &lt?php <br>
                $calc = new Calculator(); <br>
                $calc->add(10); <br>
                $calc->add(10); <br>
                $calc->substract(2); <br>

                $calc->total = 105; /* Does not work because total is protected*/ <br>

                echo $calc->getTotal(); <br>
                ?&gt <br>
            </pre>
        </div>
        <div class="practice">
            <h3>Practice area :</h3>
            <?php
                $calc = new Calculator();
                $calc->add(10);
                $calc->add(10);
                $calc->substract(2);


                echo $calc->getTotal();
            ?>
        </div>
    </main>
</body>
</html>