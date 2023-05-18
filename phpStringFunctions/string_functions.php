<?php
    $title = 'String Functions';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once('include/head.php') ?>
</head>
<body>
    <header class="header_stringFunctions">
       <img src="img/php_voldimages.png" alt="php_img" class="php_picture">
    </header>
    <main class="stringFunction">
        <section class="strlen">
        <h2>Function <span class='h2span'>strlen</span></h2>

            <div class="code_display">
                <pre>
                    &lt?php <br>
                        echo strlen('Alex'); <br>
        
                    ?&gt
                </pre>
            </div>
            <p>
                <?php
                $name = 'Alex';
                    $name_len= strlen('Alex');
                    echo 'Your name ' , $name,  ' has ' ,$name_len, ' characters.';
                ?>
            </p>
        </section>
        <section class="substr">
        <h2>Function <span class='h2span'>substr</span></h2>

            <div class="code_display">
                <pre>
                    &lt?php <br>
                    $name = "Alex James Garett"; <br>
                    echo substr($name, 0, 4); <br>
        
                    ?&gt <br>
                </pre>
            </div>
            <p>
                <?php
                    $name = "Alex James Garett";
                    echo substr($name, 0, 4);
                ?>
            </p>
            <article>
            <h3>An another example with the <span class="substr_capital">SUBSTR</span></h3>
            <div class="code_display">
                <pre class="substr_pre">
                    &lt?php <br>
                    $body = 'This is an article. It\s quite long, <br> and could go on for some tip, leaving you no room on the page'; <br>
                    $body = (strlen($body) > 20) ? substr($body, 0, 20). '....' : $body; <br>
                    echo $body; <br>
        
                    ?&gt <br>
                </pre>
            </div>
            <p>
                <?php
                $body = 'This is an article. It\s quite long, and could go on for some tip, leaving you no room on the page';
                $body = (strlen($body) > 20) ? substr($body, 0, 20). '....' : $body;
                echo $body;
                ?>
            </p>
            </article>
        </section>
        <section class="strtolower">
            <h2>Function <span class='h2span'>strtolower</span></h2>
            <div class="code_display">
                <pre>
                    &lt?php <br>
                        $username  = 'AlexJamesGarett'; <br>
                        $username_lc = strtolower($username); <br>
                        // echo strtolower($username); <br>
                        $input = 'Alexjamesgarett'; <br>

                        if (strtolower($input) == $username_lc) { <br>
                            echo 'Ok!'; <br>
                        } <br>
        
                    ?&gt <br>
                </pre>
            </div>
            <p>
                <?php
                    $username  = 'AlexJamesGarett';
                    $username_lc = strtolower($username);
                    // echo strtolower($username);
                    $input = 'Alexjamesgarett';

                    if (strtolower($input) == $username_lc) {
                        echo 'Ok!';
                    }
                ?>
            </p>
        </section>
        <section class="htmlentities">
            <h2>Prevent from the <span class='h2span'>XSS</span></h2>
            <div class="code_display">
                <pre>
                    &lt?php <br>
                    $from_db = '&ltscript&gtalert("Hello!");&lt/script&gt'; <br>
                    $sanitised = htmlentities($from_db); <br>
                    echo $sanitised; <br>
                    ?&gt <br>
                </pre>
            </div>
            <p>
                <?php
                $from_db = '<script>alert("Hello!");</script>';
                $sanitised = htmlentities($from_db);
                echo $sanitised;
                ?>
            </p>
        </section>
        <section class="trim">
            <h2>Function <span class='h2span'>trim</span></h2>
            <div class="code_display">
                <pre>
                    &lt?php <br>
                    $username = '  '; <br>
                    if (strlen(trim($username)) == 0) { <br>
                        echo 'Please enter a username.'; <br>
                    } else{ <br>
                        echo 'Fine'; <br>
                    } <br>
                    ?&gt <br>
                </pre>
            </div>
            <p>
                <?php
                $username = '  ';
                if (strlen(trim($username)) == 0) {
                    echo 'Please enter a username.';
                } else{
                    echo 'Fine';
                }
                
                ?>
            </p>
        </section>
        <section class="number_format">
            <h2>Number Format</h2>
            <div class="code_display">
                <pre>
                    &lt?php <br>
                        $number = 100000; <br>
                        $number_formatted = number_format($number, 0); <br>
                        echo 'You have &pound ',$number_formatted; <br>
                    ?&gt <br>
                </pre>
            </div>
            <p>
                <?php
                    $number = 100000; 
                    $number_formatted = number_format($number, 0);
                    echo 'You have &pound ',$number_formatted;
                ?>
            </p>
            <article>
                <h3>An another exmple number format</h3>
                <div class="code_display">
                    <pre>
                        &lt?php  <br>
                        $pi = pi(); <br>
                        echo $pi; <br>

                        $pi_short = number_format($pi, 3); <br>
                        echo $pi_short; <br>
                        ?&gt <br>
                    </pre>
                </div>
                <p>
                    <?php
                        $pi = pi();
                        echo $pi;
                        echo '<br>';
                        $pi_short = number_format($pi, 3);
                        echo $pi_short;
                    ?>
                </p>
            </article>
        </section>
        <section class="nl2br">
            <h2>NL2BR</h2>
            <article class="nl2br_article withoutnl2br">
                <h3>We gonna see what happen without nl2br</h3>
                <div class="code_display">
                    <pre>
                        &lt?php <br>
                        if (isset($_POST['text'])){ <br>
                        echo htmlentities($_POST['text']); <br>
                    } <br>
                        ?&gt <br>
                    </pre>
                </div>
                <p>
                    <?php
                    if (isset($_POST['text'])){
                        echo htmlentities($_POST['text']);
                    }
                    ?>
                </p>
                <div class="nl2br_form">
                    <form action="" method="post">
                        <textarea name="text" id="" cols="30" rows="10"></textarea>
                        <input type="submit" value="submit">
                    </form>
                </div>
            </article>
            <article class="nl2br_article nl2brutility">
                <h3>One of the utility of nl2br</h3>
                <div class="code_display">
                    <pre>
                        &lt?php <br>
                        if (isset($_POST['text'])){ <br>
                        echo nl2br(htmlentities($_POST['text'])); <br>
                    } <br>
                        ?&gt <br>
                    </pre>
                </div>
                <p>
                    <?php
                    if (isset($_POST['text'])){
                        echo nl2br(htmlentities($_POST['text']));
                    }
                    ?>
                </p>
                <div class="nl2br_form">
                    <form action="" method="post">
                        <textarea name="text" id="" cols="30" rows="10"></textarea>
                        <input type="submit" value="submit">
                    </form>
                </div>
            </article>
        </section>
        <footer>
            <p class="footer">
                For more functions in php. Follow the link  
                <span class="link_stringFunctions"><a href="https://www.php.net/manual/en/ref.strings.php" class="hover_link">String Functions</a></span>
            </p>
        </footer>
    </main>
</body>
</html>