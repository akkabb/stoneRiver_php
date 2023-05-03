<?php
    $exp = time() + 86400;
    $exp_unset = time() - 86400;
    //setcookie("name", "alex", $exp);
    //setcookie("age", 19, $exp);
    
    if(isset($_COOKIE['name']))
    {
        echo "Cookie is set";
    }else{
        echo "Cookie is not set";
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once('include/head.php'); ?>
    <link rel="stylesheet" href="../CSS/Getstyle.css">
</head>
<body>
    <h2><a href="basics_section.php">Back To Basics</a></h2>
    <main class="main_postPage">
        <h2>Showing the code :</h2>
        <div class="code_display">

            <pre>
                &lt?php
                $exp = time() + 86400;
                $exp_unset = time() - 86400;
                //setcookie("name", "alex", $exp);
                //setcookie("age", 19, $exp);
                
                if(isset($_COOKIE['name']))
                {
                    echo "Cookie is set";
                }else{
                    echo "Cookie is not set";
                }
                ?&gt 
            </pre>
        </div>
    </main>
</body>
</html>