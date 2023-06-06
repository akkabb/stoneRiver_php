<?php
    require_once('connect.php');
    require_once('ajax/search.php');
    if (!empty($_POST)) {
            $city = $_POST['city']; 
            $db = new mysqli('localhost', 'root', 'root', 'autosuggest');
    
            $sql = "INSERT INTO `cities` (city) VALUES('$city')";
            
            if ($db->query($sql) === TRUE) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . $db->error;
              }
              
              $db->close();
        }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/dropdown.css">
    <title>Auto suggest drop down field</title>
</head>
<body>
    <main class="main_dropdown">
        <section class="form">
            <h3>Form insertion</h3>
            <form action="" method="post">
                <label for="city" class="city">Insert city :</label>
                <br>
                <input type="text" name="city" id="city">
                <input type="submit" value="submit">
            </form>
        </section>
        
        <section class="searchForm">
            <h3>Form search</h3>
            <form action="">
                <input type="text" name="" class="autosuggest">
                <input type="submit" value="search ">
            </form>
            <div class="dropdown">
                <ul class="result">
                    <li></li>
                </ul>
            </div>
        </section>
    </main>
    <footer>
        <p class="footer">2023 © Tous droits réservés</p>
    </footer>
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="js/primary.js"></script>
</body>
</html>