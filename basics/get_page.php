<?php
$name = $_GET['name'];
$age = $_GET['age'];

// Need to put - ?name= &age= -on the url ( at the end) to see what happen

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/Getstyle.css">
        <title>Page Get</title>
    </head>
    <body>
    <h2><a href="basics_section.php">Back To Basics</a></h2>
    <main class="main_getPage">
        <form action="get_page.php" method="get">
            <div class="nameIput">
                <label for="name">Name</label>
                <input type="text" name="name" id="">
            </div>
            <div class="ageIput">
                <label for="age">Age</label>
                <input type="text" name="age" id="">
            </div>
            <input type="submit" value="submit">
        </form>
        <?php
        if (isset($name) && isset($age))
        {
            if(!empty($name) && !empty($age)){
                echo '<h3>' .' I am ' . $name . ' and I am '. $age . ' years old' . '</h3>';
            }else{
                echo '<h3>' . 'Nothing entered' . '</h3>';
            }
        }
        ?>
    </main>
</body>
</html>