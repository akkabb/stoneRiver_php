<?php
$title = "Extending a class";
require_once "extendingProduct.php";
require_once "extendingBook.php";
?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once("include/head.php");?>
</head>
<body>
    <main class="mainClasses">
        <section class="constructorMethod">
            <h2>Extending a class (inheritance)</h2>
            <div class="code_display">
                <pre>
                    &lt?php <br>
                    $book = new ExBook('Children'); <br>
                    $book->setProductIsbn('123456789'); <br>

                    echo 'This ' . $book->getProductType() . ' has ISBN ' . $book->getProductIsbn(); <br>
                    ?&gt <br>
                </pre>
            </div>
            <div class="practice">
                <?php
                    // $book = new ExBook('Children');
                    // $book->setProductIsbn('123456789');

                    // echo 'This ' . $book->getProductType() . ' has ISBN ' . $book->getProductIsbn();
                ?>
            </div>
        </section>
        <section class="scopeResolutionOperator">
            <h2> Scope Resolution Operator</h2>
            <div class="code_display">
                <pre>
                    &ltphp <br>
                    ?&gt <br>
                </pre>
            </div>
            <div class="practice">
                <?php
                    $book = new ExBook('Childrens', 8.99, '123456789');
                    echo $book->getProductType();
                    echo "<br>";
                    echo $book->getProductPrice();
                    echo "<br>";
                    echo $book->getProductIsbn();
                ?>
            </div>
        </section>
    </main>
</body>
</html>