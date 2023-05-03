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
    <main class="main_basics">
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
                $names = ['Alex' => 21, <br>
                'Billy' => 16, <br>
                'Dale' => 49];<br>
                
                $names[] = 'josh'; <br>
                echo '&ltbr&gt'; <br>
                print_r($names); <br>
                echo '&ltbr&gt'; <br>
                var_dump($names); <br>
                echo '&ltbr&gt'; <br>
                foreach ($names as $name) { <br>
                    echo $name . '&ltbr&gt'; <br>
                }; <br>
                ?&gt <br>
            </p>
            <p>
                <?php
                
                $names = ['Alex' => 21, 
                'Billy' => 16, 
                'Dale' => 49];
                
                $names[] = 'josh';
                echo '<br>';
                print_r($names);
                echo '<br>';
                var_dump($names);
                echo '<br>';
                foreach ($names as $name) {
                    # code...
                    echo $name . '<br>';
                };
                ?>
            </p>
            <div class="code_display">
                <pre>
                    &lt?php <br>
                        $names1 = ['Alex', <br>
                        'Billy', <br>
                        'Dale']; <br>
                        echo '&ltbr&gt'; <br>
                        echo $names1[2] . '&ltbr&gt'; <br>
                    ?&gt <br> 
                </pre>
            </div>
            <p>
                <?php
                echo 'cela ne marche pas avec les tableaux associatifs' . '<br>';
                $names1 = ['Alex', 
                'Billy', 
                'Dale'];
                echo '<br>';
                echo $names1[2] . '<br>';
                ?>
            </p>
        </section>
        <section class="multiDensional_arrays">
            <h2>Multi-dimensional Arrays</h2>
            <p> j'ai enlevé les saut de ligne du code
                
            </p>
            <div class="code_display">
                <pre>
                &lt?php
                $names = [
                        'Alex' => [
                            'age' => 21,
                            'hair' => 'Blonde',
                            'food' => [
                                'Pizza',
                                'Pasta',
                            ],
                        ],
                        'Billy' => [
                            'age' => 16,
                            'hair' => 'Blonde',
                        ],
                        'Dale' => [
                            'age' => 49,
                            'hair' => 'Blonde',
                        ]
                        ];
                    
                    print_r ($names['Billy']);
                    echo $names['Billy']['age'];
                    echo print_r($names['Alex']['food']);
                    echo $names['Alex']['food'][0];
                ?&gt<br>
                </pre>
            </div>
            <p>
                <?php
                    $names = [
                        'Alex' => [
                            'age' => 21,
                            'hair' => 'Blonde',
                            'food' => [
                                'Pizza',
                                'Pasta',
                            ],
                        ],
                        'Billy' => [
                            'age' => 16,
                            'hair' => 'Blonde',
                        ],
                        'Dale' => [
                            'age' => 49,
                            'hair' => 'Blonde',
                        ]
                        ];
                    
                    print_r ($names['Billy']);
                    echo '<br>';
                    echo $names['Billy']['age'];
                    echo '<br>';
                    echo print_r($names['Alex']['food']);
                    echo '<br>';
                    echo $names['Alex']['food'][0];
                    echo '<br>';
                    

                ?>
            </p>
        </section>
        <section class="whileLoop">
            <h2>While Loop</h2>
            <div class="code_display">
                <pre>
                    &lt?php 
                    $num = 10;
                        while ($num >= 0){
                            echo $num . '&ltbr&gt';
                            $num--;
                        }
                    ?&gt
                </pre>
                <p>An other way to write it </p>
                <pre>
                    &lt?php 
                        $num = 10;

                        while ($num >= 0):
                            echo $num . '&ltbr&gt'
                            $num--;
                        endwhile;
                    ?&gt
                </pre>
            </div>
            <p>
                <?php
                $num = 10;
                while ($num >= 0){
                    echo $num . '<br>';
                    $num--;
                }
                ?>
            </p>
        </section>
        <section class="doWhileLoop">
            <h2>Do While Loop</h2>
            <div class="code_display">
                <p>This or That will be display ??</p>
                <pre>
                    &lt?php
                    $num = 1;
                    while($num != 1)
                    {
                        echo 'This';
                    }

                    do{
                        echo 'That';
                    }
                    while ($num != 1);
                    ?&gt
                </pre>
            </div>
            <p>
                <?php
                    $num = 1;
                    while($num != 1)
                    {
                        echo 'This';
                    }

                    do{
                        echo 'That';
                    }
                    while ($num != 1);
                ?>
            </p>
        </section>
        <section class="forLoop">
            <h2>For Loop</h2>
            <div class="forLoopVertical">
                <div class="left">
                    <div class="code_display">
                        <pre>
                            &lt?php 
                            for ($num = 1; $num  <= 10; $num++){
                                echo 'This&ltbr&gt';
                            }
                            ?&gt
                        </pre>
                    </div>
                    <p>
                        <?php
                        for ($num = 1; $num  <= 10; $num++){
                            echo 'This<br>';
                        }
                        ?>
                    </p>
                </div>
                <div class="right">
                    <div class="code_display">
                        <pre>
                            &lt?php 
                            for ($num = 2; $num  <= 20; $num=$num+2){
                                echo 'This&ltbr&gt';
                            }
                            ?&gt
                        </pre>
                    </div>
                    <p>
                        <?php
                        for ($num = 2; $num  <= 20; $num=$num+2){
                            echo $num. '<br>';
                        }
                        ?>
                    </p>
                </div>
            </div>
        </section>
        <section class="foreach">
            <h2>Foreach</h2>
            <div class="code_display">
                <pre>
                        &lt?php <br>
                            $names = [
                            'Alex' => 21,
                            'Billy'=> 16, 
                            'Dale' => 49];
                            foreach($names as $name => $value)
                            {
                                echo $name . ' is ' . $value . ' years old' .  '&ltbr&gt';
                            }
                        ?&gt
                </pre>
            </div>
            <p>
                <?php
                    $names = [
                        'Alex' => 21,
                        'Billy'=> 16, 
                        'Dale' => 49];
                    foreach($names as $name => $value)
                    {
                        echo $name . ' is ' . $value . ' years old' .  '<br>';
                    }
                ?>
            </p>
        </section>
        <section class="functions">
            <h2>Functions</h2>
            <div class="code_display">
                <pre> 
                    &lt?php
                        function name($name, $age)
                        {
                            return 'My name is '. $name . ' and my age is ' . $age;
                        }
                        echo name('Jean', 21);
                    ?&gt
                </pre>
            </div>
            <p>
                <?php 
                    function name($name, $age)
                    {
                        return 'My name is '. $name . ' and my age is ' . $age;
                    }
                    echo name('Jean', 21);
                    ?>
            </p>
            <div class="code_display">
                <pre> 
                    &lt?php
                        function add($num1, $num2)
                        {
                            $result = $num1 + $num2;
                            return 'the result is: ' . $result;
                        }
                        echo add(5, 10);
                    ?&gt
                </pre>
            </div>
            <p>
                <?php
                function add($num1, $num2)
                {
                    $result = $num1 + $num2;
                    return 'the result is: ' . $result;
                }
                echo add(5, 10);
                ?>
            </p>
        </section>
        <section class="functionsWithUndefined">
            <h2>Function with Undefined</h2>
            <div class="code_display">
                <pre>
                    function adde()
                    {
                        $total = 0;
                        //print_r(func_get_args());
                        foreach(func_get_args() as $arg)
                        {
                            $total += $arg;
                        }
                        return $total;
                    }
                    echo adde(5, 10, 3);
                </pre>
            </div>
            <p>
                <?php
                    function adde()
                    {
                        $total = 0;
                        //print_r(func_get_args());
                        foreach(func_get_args() as $arg)
                        {
                            $total += $arg;
                        }
                        return $total;
                    }
                    echo adde(5, 10, 3);
                ?>
            </p>
            <div class="code_display">
                    <pre>
                        &lt?php 
                        function append( $initial)
                        {
                            $result = func_get_arg(0);
                            foreach (func_get_args() as $key => $value){
                                if ($key >= 1){
                                    $result .= ' ' . $value;
                                }
                            }
                            return $result;
                        }

                        echo append('Alex', 'James', 'Garett');
                        ?&gt
                    </pre>
            </div>
            <p>
                    <?php
                    function append( $initial)
                    {
                        $result = func_get_arg(0);
                        foreach (func_get_args() as $key => $value){
                            if ($key >= 1){
                                $result .= ' ' . $value;
                            }
                        }
                        return $result;
                    }

                    echo append('Alex', 'James', 'Garett');
                    ?>
            </p>
        </section>
        <sction class="formattingNumbers">
            <h2>Formatting Numbers</h2>
            <div class="code_display">
                <pre>
                    &lt?php 
                        $num = 25123567.1234567;
                        echo 'I have &pound;', number_format($num, 2, );
                    ?&gt
                </pre>
            </div>
            <p>
                <?php
                    $num = 25123567.1234567;
                    echo 'I have &pound;', number_format($num, 2);
                ?>
            </p>
        </sction>
        <section class="glogal_variable_GET">
            <h2>$_GET</h2>
            <p><a href="get_page.php">Page For $_GET Examples</a></p>
        </section>
        <section class="postGlobalVariables">
            <h2>$_POST</h2>
            <p><a href="post_page.php">Page For $_POST Examples</a></p>
        </section>
        <section class="embedding">
            <h2>Embedding PHP within HTML</h2>
            <p><a href="embedding_page.php">Page For Examples</a></p>
        </section>
        <section class="display_htmlBetter">
            <h2>A better way to display HTML</h2>
            <p>i didn't learn something new. So i just watched at the video</p>
        </section>
        <section class="arrays1">
            <h2>Arrays(part 1 & 2)</h2>    
            <div class="code_display">
                <pre>
                        &lt?php 
                        $GLOBALS['level'] = [
                        1 => [
                                'name' => 'Level 1',
                                'desc' => 'This is the first level',
                            ],
                            2 => [
                                'name' => 'Level 2',
                                'desc' => 'You\'ve made it to level 2!',
                            ],
                            3 => [
                                'name' => 'Level 3',
                                'desc' => 'The last level',
                            ],
                        ];
                        //without the true in the print_r the display is not formatted!
                        function level_data($level, $data){
                            if (array_key_exists($level, $GLOBALS['level'])  === true){
                                return $GLOBALS['level'][$level][$data];
                            }else{
                                return false;
                            }
                        }
                        echo level_data(1, 'desc');

                        echo '<pre>'. print_r($GLOBALS['level'], true) .'</pre>'
                        ?&gt
                </pre>
            </div>
            <p>
                <?php
                    $GLOBALS['level'] = [
                        1 => [
                            'name' => 'Level 1',
                            'desc' => 'This is the first level',
                        ],
                        2 => [
                            'name' => 'Level 2',
                            'desc' => 'You\'ve made it to level 2!',
                        ],
                        3 => [
                            'name' => 'Level 3',
                            'desc' => 'The last level',
                        ],
                    ];
                    //without the true in the print_r the display is not formatted!
                    function level_data($level, $data){
                        if (array_key_exists($level, $GLOBALS['level'])  === true){
                            return $GLOBALS['level'][$level][$data];
                        }else{
                            return false;
                        }
                    }
                    echo level_data(1, 'desc');

                    echo '<pre>'. print_r($GLOBALS['level'], true) .'</pre>'
                ?>
            </p>
        </section>
        <section class="cookies">
            <h2>Cookies</h2>
            <p><a href="cookie_page.php">Page For Examples</a></p>
        </section>
        <section class="checkboxes">
            <h2>Checkboxes</h2>
            <p><a href="checkboxes.php">Page For Examples</a></p>
        </section>
        <section class="radioButtons">
            <h2>Radio Buttons</h2>
            <p><a href="radioButtons.php">Page For Examples</a></p>
        </section>
    </main>
    <footer>
        <p class="footer">2023 © Tous droits réservés</p>
    </footer>
</body>
</html>