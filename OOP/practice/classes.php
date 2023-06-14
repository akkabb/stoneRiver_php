<?php
$title = "Classes, Methods and Properties";
require_once "product.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once("include/head.php");?>
</head>
<body>
    <main class="mainClasses">
        <div class="code_display">
            <h3>Display the code</h3>
            <pre>
                &lt?php <br>
                $food = new Product(); <br>
                $food->setProductType('Food'); <br>
                echo "This Item is ". $food->getProductType(); <br>
                ?&gt <br>
            </pre>
        </div>
        <div class="practice">
            <h3></h3>
            <?php
               $food = new Product(); 
               $food->setProductType('Food'); 
               echo "This Item is ". $food->getProductType(); 
            ?>
        </div>
    </main>
</body>
</html>