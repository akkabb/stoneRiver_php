
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once('include/head.php'); ?>
    <link rel="stylesheet" href="../CSS/Getstyle.css">
</head>
<body>
    <h2><a href="basics_section.php">Back To Basics</a></h2>
    <main class="main_postPage">
        <form action="radioButtons.php" method="POST">
            <div class="nameIput">
                <input type="radio" name="language" value="PHP">PHP <br>
                <input type="radio" name="language" value="C">C <br>
                <input type="radio" name="language" value="Basic">Basic <br>
            </div>
            <input type="submit" value="Submit">
        </form>
        <?php
            if (isset($_POST['language']))
            {
                $language = $_POST['language'];
                if (!empty($language))
                {
                    echo '<h2>' . ' You selected ' .$language . '</h2>';
                }
            }
        ?>
    </main>
</body>
</html> 