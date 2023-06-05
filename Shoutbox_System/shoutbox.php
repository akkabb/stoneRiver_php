<?php
    session_start();
    include('connect.php');
    include('protect.php');

    // if (isset($_POST['submit'])){
    //     $shout = protect($_POST['shout']);
    //     // $date = 'NOW()';
    //     if (strlen($shout) > 255){
    //         echo 'Your shout must be 255 characters long or shorter.';
    //     } else if ( $shout !== '') {
    //         if (isset($_POST['name'])) {
    //             $name = protect($_POST['name']);

    //             $q = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username` = '$name'");
    //             if (mysqli_num_rows($q) > 0) {
    //                 echo 'That username is already in use.';
    //             } else if($name !== '') {
    //                 if (strlen($name) > 32) {
    //                     echo 'Your name cannot be more than 32 characters.';
    //                 } else{
    //                     $query = "INSERT INTO shouts (`user_id`, `date_posted`, `message`, `name`) VALUES(
    //                         '1',
    //                         NOW(),
    //                         '$shout',
    //                          '$name')";
    //                     if(mysqli_query($db, $query)){
    //                         echo "Data inserted successfully <br>";
    //                     }
    //                     // else{
    //                     //     echo "Data Insertion Failed ";
    //                     // }
    //                 }
    //             }
    //         } else {
    //             $query=  "INSERT INTO `shouts`  (`user_id`, `date_posted`, `message`, `name` ) VALUES( 
    //                         {$_SESSION['uid']},
    //                         NOW(),
    //                         '$shout',
    //                         ''";
    //                         if(mysqli_query($db, $query)){
    //                             echo "Data inserted successfully <br>";
    //                         }
    //                         else{
    //                             echo "Data Insertion Failed ".mysqli_error($db);
    //                         }
    //         }
    //     }
    // }
    if (!empty($_POST)) {
        $name = $db->real_escape_string($_POST['name']);
        $message = $db->real_escape_string($_POST['shout']);
        $user_id = 1;
        $insert = $db->prepare("INSERT INTO `shouts` (`user_id`, `name`, `message`, `date_posted`)
                            VALUES ( ?, ?, ?, NOW()");
        $insert->bind_param('iss', $user_id, $name, $message);
        $insert->execute();

        if ($insert){
                echo 'data insert correctly!';
        }else{
            echo 'it doesnt work';
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/shoutbox.css">
    <title>Shoutbox system</title>
</head>
<body>
    <main class="main_shoutbox">
    <div id="shoutbox">

    </div>
    <h3>Give a shout yourself !</h3>
    <form action="<?php $_PHP_SELF?>" method="post">
        <!-- <?php // if (! isset($_SESSION['uid'])) : ?>
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" id="">
            </div>
            <?php //endif; ?> -->
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" id="">
            </div>
            <br>
            <div>
                <label for="shout">Shout : </label>
                <input type="text" name="shout" id="">
            </div>
            <br>
            <input type="submit" name="submit" value="Shout">
    </form>
    </main>
    <footer>
        <p class="footer">2023 © Tous droits réservés</p>
    </footer>
    <script type="text/javascript"></script>
</body>
</html>