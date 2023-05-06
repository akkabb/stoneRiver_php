<?php
    $title = "PHP and MySQLi Database Integration";
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
        <?php require_once('include/head.php');?>
</head>
<body>
    <main class="mysqli_main">
        <h1>PHP and MySQLi Database Integration</h1>
        <header class="header">
            <p>Thi is a link to the <a href="https://www.php.net/manual/fr/book.mysqli.php">Official Documentation</a></p>
        </header>
        <h2>Introduction && Connecting to a database</h2>
        <p>
            It explain the utility of the documentation and how to set the tables on the database.
        </p>
        <section class="connectingusingPHP">
            <h2>Connecting using PHP</h2>
            <div class="code_display">
                <pre>
                    &lt?php
                    $db = new mysqli('127.0.0.1', 'root', 'root', 'pdo');

                    // if($db->connect_errno !== 0){
                    //     die('We are down at the moment, try again soon');
                    // }
                    var_dump($db);
                    &gt 
                </pre>
            </div>
            <p>
                <?php
                    $db = new mysqli('127.0.0.1', 'root', 'root', 'mysqli');

                    // if($db->connect_errno !== 0){
                    //     die('We are down at the moment, try again soon');
                    // }
                    //var_dump($db);
                ?>
            </p>
        </section>
        <section class="creationDatabaseTable">
            <h2>Creating Database Table</h2>
            <img src="img/Capture d'écran 2023-05-06 123233.png" alt="Bdd table" width="80%">
        </section>
        <section class="pullingSingleRecord">
            <h2>Pulling Single Record</h2>
            <div class="code_display">
                <pre>
                    &lt?php
                        $user = $db->query("SELECT * FROM users WHERE id = 2");
                        //var_dump($user);
                        $user = $user->fetch_assoc();
                        //echo '&ltbr&gt';
                        var_dump($user);
                        echo '&ltbr&gt';
                        echo $user['email'];
                    ?&gt
                </pre>
            </div>
            <p>
                <?php
                    $user = $db->query("SELECT * FROM users WHERE id = 2");
                    //var_dump($user);
                    $user = $user->fetch_assoc();
                    //echo '<br>';
                    //var_dump($user);
                    echo '<br>';
                    echo $user['email'];
                ?>
            </p>
        </section>
        <section class="pullingMultipleRecords">
            <h2><a href="pulling.php">Pulling Multiple Records</a></h2>
        </section>
        <section class="different_Result_types">
            <h2><a href="differentResultTypes.php">Different Result Types</a></h2>
        </section>
        <section class="countingResults">
            <h2><a href="countingResults.php">Counting Results</a></h2>
        </section>
        <section class="updating">
            <h2><a href="update.php">Updating and affected rows</a></h2>
        </section>
        <section class="escaping">
            <h2><a href="escaping.php">escaping</a></h2>
        </section>
        <section class="prepareStatement">
            <h2><a href='prepared_statement.php'>Prepared statements for inserting</a></h2>
        </section>
        <section class="selectingPreparedStatements">
            <h2><a href="selectPreparedStatements.php">Selecting prepared statements</a></h2>
        </section>
        <section class="freeResult">
            <h2><a href="freeresult.php">Free Result</a></h2>
        </section>
        <section class="closingDBConnection">
            <h2>Closing DB connection</h2>
            <div class="code_display">
                        <pre></pre>
            </div>
            <p>
                <?php
                    $db = new mysqli('127.0.0.1','root','root', 'mysqli');
                    
                    $users = $db->query("SELECT * FROM users");

                    echo $users->fetch_object()->email;

                    $db->close();
                ?>
            </p>
        </section>
    </main>
    <footer>
        <p class="footer">2023 © Tous droits réservés</p>
    </footer>
</body>
</html>