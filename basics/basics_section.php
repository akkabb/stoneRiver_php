<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once('include/head.php') ?>
</head>
<body>
    <header>
        <nav>
            <a href="../index.php">Accueil</a>
        </nav>
    </header> 
    <main>
        <section class="commentingCode">
            <h2>Commenting Code</h2>
            <h3>Simple line comment :</h3>
            <p>
                &lt?php <br>
                // This is a function <br>
                // that takes a stream_set_blocking <br>
                ?&gt
            </p>
            <hr>
            <h3>multi-line comment</h3>
            <p>
                &lt?php <br>
                /*This is a function <br>
                 that takes a stream_set_blocking  <br>
                 */<br>
                ?&gt
            </p>

        </section>
        <section class="setupWebServer">
            <h2>Setting up a web server</h2>
            <p>This section of the video is about Xampp for windows. Talk about apache, look at the path inside our directory using windows.</p>
        </section>
        <section class="echo_print">
            <h2>Echo <span>/</span> Print</h2>
            <p>Showing something in the browser using those two : <span class="echo">echo</span> and <span class="print">print</span></p>
            <p>
                <?php
                    echo 'Hello world.<br>It\'s a lovely day.'; 
                ?>
            </p>
            <p>There is another one to print to the Browser "Print"</p>
            <p>
                <? print "Hello world. ";?> 
            </p>
        </section>
        <section class="variables">
            <h2>Variables</h2>
            <p>
                <?php 
                    $name = 'Alex';
                    $age = 21;
                    echo "My name is $name and i am $age years old.";
                ?>
                &lt?php <br>
                    $name = 'Alex'; <br>
                    $age = 21; <br>
                    echo 'My name is' . '$name' . . 'and i am'. .' $age years old.'; <br>
                ?&gt <br>
            </p>
        </section>
        <section class="if_statement">
            <h2>If Statements</h2>
            <p>
                <?php
                    $password = 'password';

                    if ($password == 'alex') {
                        echo 'This is the correct password';
                    }else{
                        echo 'This is a wrong password';
                    }
                ?>
                <br>
                &lt?  <br>
                $password = 'password'; <br>

                if ($password == 'alex') { <br>
                    echo 'This is the correct password'; <br>
                }else{ <br>
                    echo 'This is a wrong password'; <br>
                } <br>
                ?&gt <br>
            </p>
            <p>another examples : </p>
            <p>
                <?php
                    $age = 21;
                    if ($age > 21){
                        echo 'You\'re old enough to drink in USA';
                    }else if($age >= 18)
                    {
                        echo 'You\'re old enough to drink in the UK.';
                    }
                    else{
                        echo 'You\'re not old enough to drink in USA';
                    }
                    ?>
            </p>
        </section>
    </main>
    <footer>
        <p class="footer">2023 © Tous droits réservés</p>
    </footer>
</body>
</html>