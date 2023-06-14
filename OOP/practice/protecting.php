<?php
$title = "Protecting.php";
require_once "protectingProduct.php";
require_once "Book.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once("include/head.php");?>
</head>
<body>
    <main class="mainClasses">
        <section class="constructorMethod">
            <h2>Protecting Methods</h2>
            <div class="code_display">
                <pre>
                    &lt?php <br>
                    $book = new Book(8.99); <br>
                    echo '£ '. $book->calculateProductVAT(); <br>
                    ?&gt <br>
                </pre>
            </div>
            <div class="practice">
                <?php
                    $book = new Book(8.99);
                    echo '£ '. $book->calculateProductVAT();
                ?>
            </div>
        </section>
        <section class="classConstants">
            <h2></h2>
            <div class="code_display">
                <pre>
                    &lt?php <br>
                    ?&gt <br>
                </pre>
            </div>
            <div class="practice">
                <?php
                    
                ?>
            </div>
        </section>
    </main>
</body>
</html>