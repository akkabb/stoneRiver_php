<?php
    $title = "Ternary Operator (Inline IF Statement)";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once('include/head.php'); ?>
</head>
<body>
    <div class="container">
        <h1>Ternary Operator (Inline IF Statement)</h1>
        <span class="back_intermediate"><a href="intermediate.php">Back To Home Intermediate Session</a></span>

            <div class="code_display">
                <pre>
                    &lt?php 
                        $age = 18;
                        $old_enough = false;

                        if ($age >= 18){
                            $old_enough = true;
                        }
                        
                        if ($old_enough === true){
                                echo 'Old enough';
                            }else{
                                echo 'not old enough';
                        }
                    ?&gt 
                </pre>
            </div>
            <p>
                <?php
                    $age = 18;
                    $old_enough = false;

                    if ($age >= 18){
                        $old_enough = true;
                    }
                    
                    if ($old_enough === true){
                            echo 'Old enough';
                        }else{
                            echo 'not old enough';
                    }
                ?>
            </p>
            <hr>
            <h3>The same code but in ternary</h3>
            <div class="code_display">
                <pre>
                    &lt?php 
                        $age = 18;

                        //It's exactly the same like up
                        $old_enough = ($age >= 18) ? true : false;    
                        echo ($old_enough === true) ? 'Old enough' : 'Not old enough';
                        ?&gt 
                    </pre>
                </div>
                <p>
                    
                    <?php
                        $age = 18;
                        //This is exactly the same as the code from above
                        
                        $old_enough = ($age >= 18) ? true : false;
                        echo ($old_enough === true) ? 'Old enough' : 'Not old enough';
                    ?>
            </p>
    </div>
</body>
</html>