<?php
    $title = "Implode (Array to String)";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once('include/head.php'); ?>
</head>
<body>
    <div class="container">
        <h1>Implode (Array to String)</h1>
        <span class="back_intermediate"><a href="intermediate.php">Back To Home Intermediate Session</a></span>

            <div class="code_display">
                <pre>
                    &lt?php 
                        $names = [
                            'Alex',
                            'Billy',
                            'Tabby',
                        ];
                        //echo implode(',', $names);
                        $names_str = '';
                        foreach ($names as $key => $name) {
                            $names_str .= $name;
                            if ($key != count($names) - 1)
                            $names_str .=  ', ';
                        }
                        echo $names_str;
                    ?&gt 
                </pre>
            </div>
            <p>Display the content of the code :</p>
            <p>
                <?php
                    $names = [
                        'Alex',
                        'Billy',
                        'Tabby',
                    ];
                    //echo implode(',', $names);
                    $names_str = '';
                    foreach ($names as $key => $name) {
                        $names_str .= $name;
                        if ($key != count($names) - 1)
                        $names_str .=  ', ';
                    }
                    echo $names_str;
                    ?>
            </p>
            <div class="code_display">
                    <pre>
                        &lt?php 
                        $name = "alex";
                        $email = "alex@phpacademy.org";
                            $message= 'Really great site, love it!';
                            $data = [
                        'name' => $name,
                        'email' => $email,
                        'message' => $message,
                        ];
                        
                        $fields_sql = '`' . implode('`, `', array_keys($data)) . '`';
                        $values_sql = '\'' .implode('\', \'',$data) . '\'';
                        
                        $sql = "
                        INSERT INTO `table` ($fields_sql)
                        VALUES ($values_sql)
                        ";
                        
                        echo $sql;
                        ?&gt 
                    </pre>
            </div>
            <p>Display with the keyword echo : </p>
            <p>
                <?php
                $name = "alex";
                $email = "alex@phpacademy.org";
                $message= 'Really great site, love it!';
                $data = [
                    'name' => $name,
                    'email' => $email,
                    'message' => $message,
                ];

                $fields_sql = '`' . implode('`, `', array_keys($data)) . '`';
                $values_sql = '\'' .implode('\', \'',$data) . '\'';

                $sql = "
                    INSERT INTO `table` ($fields_sql)
                    VALUES ($values_sql)
                ";

                echo $sql;
                    
                ?>
            </p>
    </div>
</body>
</html>