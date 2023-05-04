<?php
    $title = "Quickly Return True or False";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once('include/head.php'); ?>
</head>
<body>
    <div class="container">
        <h1>Quickly Return True or False</h1>
        <span class="back_intermediate"><a href="intermediate.php">Back To Home Intermediate Session</a></span>

            <div class="code_display">
                <pre>
                    &lt?php 
                        function equals_one($val){
                            return ($val === 1) ? true : false;
                        }
                        // the same function but writing different
                        
                        function equal_one($val){
                            if ($val === 1){
                                return true;
                            }
                            return false;
                        }

                        //An Other way to do

                        function true_false($val){
                            return $val === 1;
                        }

                        var_dump(true_false(1));
                    ?&gt 
                </pre>
            </div>
            <p>
                <?php
                        function equals_one($val){
                            return ($val === 1) ? true : false;
                        }
                        // the same function but writing different
                        
                        function equal_one($val){
                            if ($val === 1){
                                return true;
                            }
                            return false;
                        }

                        //An Other way to do

                        function true_false($val){
                            return $val === 1;
                        }

                        var_dump(true_false(1));
                        
                ?>
            </p>
    </div>
</body>
</html>