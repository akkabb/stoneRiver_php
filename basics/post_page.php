
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once('include/head.php'); ?>
    <link rel="stylesheet" href="../CSS/Getstyle.css">
</head>
<body>
    <h2><a href="basics_section.php">Back To Basics</a></h2>
    <main class="main_postPage">
        <form action="post_page.php" method="post">
            <div class="nameIput">
                <legend>Please enter your password :</legend>
                <label for="password">Password</label>
                <input type="password" name="password" id="">
            </div>
            <input type="submit" value="submit">
        </form>
        <?php
            $pwd = 'password';
            if (isset($_POST['password']) && !empty($_POST['password']))
            {
                $password_post = $_POST['password'];
                if ($password_post == $pwd)
                {
                    echo '<h3>' . 'Correct Password' . '</h3>';
                }else{
                    echo 'Incorrect !';
                }
            }
        ?>
        <h2>Showing the code !</h2>
        <div class="code_display">

            <pre>
                &lt?php
                    $pwd = 'password';
                    if (isset($_POST['password']) && !empty($_POST['password']))
                    {
                        $password_post = $_POST['password'];
                        if ($password_post == $pwd)
                        {
                            echo '&lth3&gt' . 'Correct Password' . '&lt/h3&gt';
                        }else{
                            echo 'Incorrect !';
                        }
                    } 
                ?&gt 
            </pre>
        </div>
    </main>
</body>
</html>