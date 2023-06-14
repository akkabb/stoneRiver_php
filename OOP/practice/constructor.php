<?php
$title = "Constructor method";
require_once "constructor_Meth.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once("include/head.php");?>
</head>
<body>
    <main class="mainClasses">
        <section class="constructorMethod">
            <h2>Constructor Method</h2>
            <div class="code_display">
                <pre>
                    &lt?php <br>
                    ?&gt <br>
                </pre>
            </div>
            <div class="practice">
                <?php
                    $book = new ProductOne('Book', 8.5);
                    echo 'This '. $book->getProductType() . ' costs £' . $book->getProductPrice();
                ?>
            </div>
        </section>
    </main>
</body>
</html>