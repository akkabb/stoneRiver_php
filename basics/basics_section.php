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
                &lt?php  <br>
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
                &lt?php <br>
                if ($age > 21){ <br>
                        echo 'You\'re old enough to drink in USA'; <br>
                    }else if($age >= 18) <br>
                    { <br>
                        echo 'You\'re old enough to drink in the UK.'; <br>
                    } <br>
                    else{ <br>
                        echo 'You\'re not old enough to drink in USA'; <br>
                    } <br>
                ?&gt <br>
            </p>
        </section>
        <section class="arithmeticsOperators">
            <h2>Arithmetics Operators</h2>
            <p>
                <?php
                    $num1 = 10;
                    $num2 = 2;

                    // + - * / % ++
                    $result = $num1 + $num2;
                    echo $result . '<br>';
                    $result = $num1 - $num2;
                    echo $result . '<br>';
                    $result = $num1 * $num2;
                    echo $result . '<br>';
                    $result = $num1 / $num2;
                    echo $result . '<br>';
                    $a = 10;
                    $b = 3;
                    $result = $a % $b . '<br>';

                    $num3 = 1;
                    $num3++ === $num3 + 1;
                ?>
                
            </p>
            <p>
                &lt?php <br>
                    $num1 = 10; <br>
                    $num2 = 2; <br>
                    $result = $num1 + $num2; <br>
                    echo $result . '&ltbr&gt'; <br>
                    $result = $num1 - $num2; <br>
                    echo $result . '&ltbr&gt'; <br>
                    $result = $num1 * $num2; <br>
                    echo $result . '&ltbr&gt'; <br>
                    $result = $num1 / $num2; <br>
                    echo $result . '&ltbr&gt'; <br>
                    $a = 10; <br>
                    $b = 3; <br>
                    $result = $a % $b . '&ltbr&gt';

                    $num3 = 1; <br>
                    $num3++ === $num3 + 1; <br>
                ?&gt <br> 
            </p>
        </section>
        <section class="comparaisonOperators">
            <h2>Comparaison Operators</h2>
            <p>
                <?php
                    $name = "Alex";
                    $age = 21;

                    if ($name == "Alex") {
                        echo 'OK.';
                    }else {
                        echo 'Not OK.';
                    }
                    echo "<br>";
                    if ($age > 18) {
                        echo 'TRUE.';
                    }else{
                        echo 'NOT TRUE.';
                    }
                    echo "<br>";
                ?>
            </p>
            <p>
                    &lt?php <br>
                    $name = "Alex"; <br>
                    $age = 21; <br>

                    if ($name == "Alex") { <br>
                        echo 'OK.'; <br>
                    }else { <br>
                        echo 'Not OK.'; <br>
                    } <br>
                    echo "&ltbr&gt"; <br>
                    if ($age > 18) { <br>
                        echo 'TRUE.'; <br>
                    }else{ <br>
                        echo 'NOT TRUE.'; <br>
                    } <br>
                    echo "&ltbr&gt"; <br>
                    ?&gt <br>
            </p>
            <p>
                <?php
                    $age = 21;
                    $status = false;

                    if ($age >= 21){
                        $status = true;
                    }
                    if ($status == true)
                    {
                        echo 'You\'re allowed.';
                    }else if ($status == false)
                    {
                        echo 'Sorry, not allowed';
                    }
                ?>
            </p>
            <p>
                    &ltphp <br>
                    $age = 21; <br>
                    $status = false; <br>

                    if ($age >= 21){ <br>
                        $status = true; <br>
                    } <br>
                    if ($status == true) <br>
                    { <br>
                        echo 'You\'re allowed.'; <br>
                    }else if ($status == false) <br>
                    { <br>
                        echo 'Sorry, not allowed'; <br>
                    } <br>
                    ?&gt <br>
            </p>
        </section>
        <section class="tripleequals">
            <h2>Triple Equals</h2>
            <p>
                &ltphp <br>
                    $number = 10; <br>
                    $number1 = '10'; <br> <br>

                    if ($number == $number1){ <br>
                        echo 'equal'; <br>
                    }else { <br>
                        echo 'not equal'; <br>
                    } <br>
                ?&gt <br>
            </p>
            <p>The result :
                    <?php
                    $number = 10;
                    $number1 = '10';

                    if ($number == $number1){
                        echo 'equal';
                    }else {
                        echo 'not equal';
                    }
                    ?>
            </p>
            <p>
                &lt?php <br>
                $num = 10; <br>
                $num1 = '10'; <br>

                if ($num === $num1) <br>
                { <br>
                    echo 'Equal'; <br>
                }else { <br>
                    echo 'Not Equal'; <br>
                } <br>
                ?&gt <br>
            </p>
            <p> The result :
                <?php
                $num = 10;
                $num1 = '10';

                if ($num === $num1)
                {
                    echo 'Equal';
                }else {
                    echo 'Not Equal';
                }
                ?>

            </p>
        </section>
        <section class="logicalOperators">
            <h2>logical Operators</h2>
            <p>
                &lt?php  <br>
                $num = 200; <br>
                if ($num >= 1 && $num <= 100){ <br>
                        echo 'Number is fine.' .'&ltbr&gt'; <br>
                }else{ <br>
                        echo 'Number must be between 1 and 100, inclusive.'; <br>
                } <br>
                ?&gt  <br>
            </p>
            <p>The result :
                <?php
                $num = 200;
                if ($num >= 1 && $num <= 100){
                        echo 'Number is fine.' .'<br>';
                }else{
                        echo 'Number must be between 1 and 100, inclusive.';
                }
                ?>
            </p>
            <p>
                &lt?php  <br>
                $name = 'Billy'; <br>
                $age = 25; <br>
                if ($name == 'Alex'  && ($age == 21 || $age == 25)) { <br>
                    echo 'Hello there'; <br>
                }else { <br>
                    echo 'Go away'; <br>
                } <br>
                ?&gt  <br>
            </p>
            <p>
                <?php
                $name = 'Billy';
                $age = 25;
                if ($name == 'Alex' && ($age == 21 || $age == 25)) {
                    echo 'Hello there';
                }else {
                    echo 'Go away';
                }
                ?>
            </p>
        </section>
        <section class="switchStatement">
            <h2>switch Statement</h2>
            <p>
                &lt?php <br>
                $num = 10; <br>
                switch ($num) { <br>
                    case 10: <br>
                        echo 'Ten'; <br>
                        break; <br>
                    case 9: <br>
                        echo 'Nine'; <br>
                        break; <br>
                    case 8: <br>
                        echo 'Eight'; <br>
                        break; <br> 
                    case 7: <br>
                        echo 'Seven'; <br>
                        break; <br>
                    default: <br>
                        echo 'what??'; <br>
                } <br>
                ?&gt <br>
            </p>
            <p>
                <?php
                $num = 10;
                switch ($num) {
                    case 10:
                        echo 'Ten';
                        break;
                    case 9:
                        echo 'Nine';
                        break;
                    case 8:
                        echo 'Eight';
                        break;
                    case 7:
                        echo 'Seven';
                        break;
                    default:
                        echo 'what??';
                }
                ?>
            </p>
        </section>
        <section class="arrays">
            <h2>Arrays</h2>
            <p>
                &lt?php <br>
                ?&gt <br>
            </p>
            <p></p>
        </section>
    </main>
    <footer>
        <p class="footer">2023 © Tous droits réservés</p>
    </footer>
</body>
</html>