<?php
    $name = ' ';
    $sentence = '';
    if (isset($_POST['name']))
    {
        $name = $_POST['name'];
        if (!empty($_POST['name']))
        {
            $sentence = $name . ' woke up, and make PHP tutorial.';
            //echo '<h3>' . 'Done!' . '</h3>';
        }else{
            echo '<h3>' . 'Please enter a name' . '</h3>';
        }
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
        <form action="embedding_page.php" method="post">
            <div class="nameIput">
                <label for="password">name</label>
                <input type="text" name="name" value="<?php echo $name ?>">
            </div>
            <br>
            <input type="submit" value="submit">
        </form>
        <textarea name="" id="" cols="30" rows="10">
            <?= $sentence;?>
        </textarea>
        <h2>Showing the code :</h2>
        <div class="code_display">

            <pre>
                &lt?php
                    $name = ' ';
                    $sentence = '';
                    if (isset($_POST['name']))
                    {
                        $name = $_POST['name'];
                        if (!empty($_POST['name']))
                        {
                            $sentence = $name . ' woke up, and make PHP tutorial.';
                            //echo '&lth3&gt' . 'Done!' . '&lt/h3&gt';
                        }else{
                            echo '&lth3&gt' . 'Please enter a name' . '&lt/h3&gt';
                        }
                    }
                ?&gt 
            </pre>
        </div>
    </main>
</body>
</html>