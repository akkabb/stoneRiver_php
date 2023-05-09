<?php
    $title = "Undefined index";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once('include/head.php'); ?>
</head>
<body>
    <div class="container">
        <h1>Undefined index</h1>
        <span class="back_intermediate"><a href="php_errors.php">Back To Home => Common PHP errors</a></span>
        <h3>First we display the error :</h3>
            <div class="code_display">
                <pre>
                    &lt?php 
                        echo $_POST['something']
                    ?&gt 
                </pre>
            </div>
            <p>
                <?php
                   echo $_POST['something'];
                ?>
            </p>
            <section class="form">
                <form action="" method="pot">
                    <div class="something">
                        <label for="something">Type something :</label>
                        <input type="text" name="something">
                    </div>
                    <input type="submit" value="submit">
                </form>
            </section>
            <hr>
        <h3>How to Fix it ?? </h3>
        <div class="code_display">
            <pre>
                &lt?php 
                    if (isset($_POST['thing'])){
                        echo $_POST['thing'];
                    }
                ?&gt 
            </pre>
        </div>
        <p>
            <?php
                if (isset($_POST['thing'])){
                    echo $_POST['thing'];
                }
            ?>
        </p>
        <section class="form">
            <form action="" method="post">
                <div class="something">
                    <label for="thing">Type something :</label>
                    <input type="text" name="thing">
                </div>
                <input type="submit" value="submit">
            </form>
        </section>
        <hr>
        <h3>Let's go further</h3>
        <div class="code_display">
            <pre>
                &lt?php 
                    if (isset($_POST['submitted'])){
                        $somthing =  $_POST['something'];
                        $something_else= $_POST['something_else'];

                        echo $something, ' ', $something_else;
                    }
                ?&gt 
            </pre>
        </div>
        <p>
            <?php
                if (isset($_POST['submitted'])){
                    $somthing =  $_POST['something'];
                    $something_else= $_POST['something_else'];

                    echo $something, ' ', $something_else;
                }
            ?>
        </p>
        <section class="form">
            <form action="" method="post">
                <div class="something">
                    <label for="something">Type something :</label>
                    <input type="text" name="soemthing">
                    <input type="text" name="soemthing_else">
                </div>
                <input type="hidden" name="submitted" value="true">
                <input type="submit" value="submit">
            </form>
        </section>
        <hr>
        <div class="comment">
            <p>We need to fix what is above , because it doesn't work</p>
            <p>How to do that ??</p>
            <div class="code_display">
                <pre>
                    &lt?php 
                    if (isset($_POST['something']) && isset($_POST['something_else'])){
                        $somthing =  $_POST['something'];
                        $something_else= $_POST['something_else'];

                        echo $something, ' ', $something_else;
                    }
                    ?&qt
                </pre>
            </div>
            <p>
                <?php 
                if (isset($_POST['something']) && isset($_POST['something_else'])){
                    $somthing =  $_POST['something'];
                    $something_else= $_POST['something_else'];

                    echo $something, ' ', $something_else;
                }
                ?>
            </p>
            <form action="">
            <div class="something">
                    <label for="something">Type something :</label>
                    <input type="text" name="soemthing">
                    <input type="text" name="soemthing_else">
                </div>
                <input type="hidden" name="submitted" value="true">
                <input type="submit" value="submit">
            </form>
        </div>
    </div>
</body>
</html>